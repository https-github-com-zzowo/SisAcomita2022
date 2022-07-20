<?php

namespace App\Http\Livewire;

use App\Models\Family;
use App\Models\partner;
use Livewire\Component;

class CrudFamily extends Component
{

    public $family, $search;
    public $isOpen=false;
    protected $listeners=['render', 'delete'=>'delete'];

    protected $rules=[
        'family.parentesco'=>'required',
        'family.fullname'=>'required',
        'family.celphone'=>'required',
        'family.dni'=>'required',
        'family.age'=>'required',
        'family.partner_id'=>'required',

    ];

    public function render()
    {
        //$periods=Period::orderBy('id', 'asc')->paginate();
        $families=Family::where('fullname', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'asc')->paginate(10);
        $partners=partner::pluck('name','id');
        //$family=Family::where('partner_id',$partners->id)->get();
        //return view('livewire.crud-family', compact('families','partners'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['family']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->family->id)){
            Family::create($this->family);
        }else{
            $this->family->save();
        }
        $this->reset(['isOpen','family']);
        $this->emitTo('CrudFamily','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Family $family){
        $this->family=$family;
        $this->isOpen=true;
    }

    public function delete(Family $family){
        $family->delete();
    }

}


