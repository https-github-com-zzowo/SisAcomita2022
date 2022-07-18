<?php

namespace App\Http\Livewire;

use App\Models\stand;
use Livewire\Component;

class CrudStand extends Component
{
    public $stand,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'stand.name'=>'required',
        'stand.status'=>'required',

    ];

    public function render(){
        //$partners=partner::orderBy('id','desc')->paginate();
        $stands=stand::where('name','like','%'.$this->search.'%')
                    ->orderBy('id','desc')->paginate(10);
        return view('livewire.crud-stand',compact('stands'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['stand']);
    }
    public function store(){
        $this->validate();
        if(!isset($this->stand->id)){
            stand::create($this->stand);
        }else{
            $this->stand->save();
        }
        $this->reset(['isOpen','stand']);
        $this->emitTo('CrudStand','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(stand $stand){
        $this->stand=$stand;
        $this->isOpen=true;
    }
    public function delete(stand $stand){
        $stand->delete();
    }

}
