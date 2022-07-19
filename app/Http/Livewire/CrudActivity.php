<?php

namespace App\Http\Livewire;

use App\Models\activity;
use App\Models\assistence;
use Livewire\Component;

class CrudActivity extends Component
{
    public $activity, $search;
    public $isOpen=false;
    protected $listeners=['render', 'delete'=>'delete'];
    protected $rules=[
        'activity.name'=>'required',
        'activity.description'=>'required',
        'activity.datetime'=>'required',
        'activity.status'=>'required',

    ];


    public function render()
    {   $activities=activity::orderBy('datetime','desc')->paginate();
        //$assistences=assistence::pluck('id', 'status');
        return view('livewire.crud-activity',compact( 'activities'));
    }


    public function create(){
        $this->isOpen=true;
        $this->reset(['activity']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->activity->id)){
            activity::create($this->activity);
        }else{
            $this->activity->save();
        }
        $this->reset(['isOpen','activity']);
        $this->emitTo('CrudActivity','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(activity $activity){
        $this->activity=$activity;
        $this->isOpen=true;
    }

    public function delete(activity $activity){
        $activity->delete();
    }
}
