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
    public $isOpen1=false;

    protected $listeners=['render', 'delete'=>'delete'];

    protected $rules=[
        'collection.name'=>'required',
        'collection.date'=>'required',
        'collection.amount'=>'required',
        'collection.type'=>'required',
        'collection.activity_id'=>'required'

    ];

    public function render()
    {
        $collections=Collection::orderBy('id', 'asc')->paginate();
        $activities=activity::pluck('name', 'id');
        return view('livewire.crud-collection', compact('collections', 'activities'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['collection']);
    }
    public function proccollec(){
        $this->isOpen1=true;
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
