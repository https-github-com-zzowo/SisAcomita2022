<?php

namespace App\Http\Livewire;

use App\Models\activity;
use App\Models\assistence;
use App\Models\Collection;
use App\Models\partner;
use App\Models\Payment;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class CrudCollection extends Component
{
    public $collection, $search;
    public $isOpen=false;
    protected $listeners=['render', 'delete'=>'delete'];

    protected $rules=[
        'collection.name'=>'required',
        'collection.date'=>'required',
        'collection.amount'=>'required'

    ];

    public function render()
    {

        $collections=Collection::orderBy('id', 'desc')->paginate();
        $payments=Payment::pluck('import', 'id', 'observations', 'date');
        $activities=activity::pluck('name', 'id', 'description','datetime', 'status');
        $assistences=assistence::pluck('id', 'status');
        $partners=partner::pluck('name', 'lastname', 'id');
        return view('livewire.crud-collection', compact('collections', 'payments', 'activities', 'assistences', 'partners'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['collection']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->collection->id)){
            Collection::create($this->collection);
        }else{
            $this->collection->save();
        }
        $this->reset(['isOpen','collection']);
        $this->emitTo('CrudCollection','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Collection $collection){
        $this->collection=$collection;
        $this->isOpen=true;
    }

    public function delete(Collection $collection){
        $collection->delete();
    }
}
