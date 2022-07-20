<?php

namespace App\Http\Livewire;

use App\Models\activity;
use App\Models\assistence;
use App\Models\partner;
use Livewire\Component;

class CrudAssistence extends Component
{
    public $assistence,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];
    protected $rules=[
        'assitence.status'=>'required',
        'assitence.activity_id'=>'required',
        'assitence.partner_id'=>'required',
       ];


    public function render(){

        $assistences=assistence::where('partner_id','like','%'.$this->search.'%')
                    ->orderBy('partner_id')->paginate(10);
                    $partners=partner::pluck('name','id');
                    $activities=activity::pluck('name','id');


        return view('livewire.crud-assistence',compact('partners','assistences','activities','partners'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['assistence']);
    }
    public function store(){
        $this->validate();
        if(!isset($this->assistence->id)){
            assistence::create($this->assistence);
        }else{
            $this->assistence->save();
        }
        $this->reset(['isOpen','assistence']);
        $this->emitTo('CrudAssistence','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(assistence $assistence){
        $this->assistence=$assistence;
        $this->isOpen=true;
    }
    public function delete(assistence $assistence){
        $assistence->delete();
    }


}
