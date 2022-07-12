<?php

namespace App\Http\Livewire;

use App\Models\partner;
use Livewire\Component;

class CrudPartner extends Component
{


    public $partner,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'partner.name'=>'required',
        'partner.lastname'=>'required',
        'partner.dni'=>'required',
        'partner.name'=>'required',
        'partner.phone'=>'required',
        'partner.birthdate'=>'required',
        'partner.email'=>'required',
        'partner.address'=>'required',
    ];

    public function render(){
        //$partners=partner::orderBy('id','desc')->paginate();
        $partners=partner::where('name','like','%'.$this->search.'%')
                    ->orderBy('id','desc')->paginate(10);
        return view('livewire.crud-partner',compact('partners'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['partner']);
    }
    public function store(){
        $this->validate();
        if(!isset($this->partner->id)){
            partner::create($this->partner);
        }else{
            $this->partner->save();
        }
        $this->reset(['isOpen','partner']);
        $this->emitTo('CrudPartner','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(partner $partner){
        $this->partner=$partner;
        $this->isOpen=true;
    }
    public function delete(partner $partner){
        $partner->delete();
    }


}
