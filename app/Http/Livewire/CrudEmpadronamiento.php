<?php

namespace App\Http\Livewire;

use App\Models\Empadronamieto;
use App\Models\partner;
use App\Models\Period;
use App\Models\stand;
use Livewire\Component;

class CrudEmpadronamiento extends Component
{

    public $empadronamiento,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'empadronamiento.code'=>'required',
        'empadronamiento.partner_id'=>'required',
        'empadronamiento.period_id'=>'required',
        'empadronamiento.stand_id'=>'required',

    ];

    public function render(){
        //$partners=partner::orderBy('id','desc')->paginate();
        $empadronamientos=Empadronamieto::where('code','like','%'.$this->search.'%')
                    ->orderBy('id','desc')->paginate(10);
                    $partners=partner::pluck('name','id');
                    $periods=Period::pluck('name','id');
                    $stands=stand::pluck('name','id');
        return view('livewire.crud-empadronamiento',compact('empadronamientos','partners','periods','stands'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['empadronamiento']);
    }
    public function store(){
        $this->validate();
        if(!isset($this->empadronamiento->id)){
            Empadronamieto::create($this->empadronamiento);
        }else{
            $this->empadronamiento->save();
        }
        $this->reset(['isOpen','empadronamiento']);
        $this->emitTo('CrudEmpadronamiento','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Empadronamieto $empadronamiento){
        $this->empadronamiento=$empadronamiento;
        $this->isOpen=true;
    }
    public function delete(Empadronamieto $empadronamiento){
        $empadronamiento->delete();
    }
}
