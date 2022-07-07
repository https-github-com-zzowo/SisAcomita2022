<?php

namespace App\Http\Livewire;

use App\Models\Period;
use Livewire\Component;

class CrudPeriod extends Component
{
    public $period, $search;
    public $isOpen=false;
    protected $listeners=['render', 'delete'=>'delete'];

    protected $rules=[
        'period.name'=>'required',
        'period.dateinit'=>'required',
        'period.dateout'=>'required',
        'period.status'=>'required'
    ];

    public function render()
    {
        //$periods=Period::orderBy('id', 'asc')->paginate();
        $periods=Period::where('name', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'asc')->paginate(10);
        return view('livewire.crud-period', compact('periods'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['period']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->period->id)){
            Period::create($this->period);
        }else{
            $this->period->save();
        }
        $this->reset(['isOpen','period']);
        $this->emitTo('CrudPeriod','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Period $period){
        $this->period=$period;
        $this->isOpen=true;
    }

    public function delete(Period $period){
        $period->delete();
    }

    public function activePeriod(Period $period){
        $periods=Period::all();
        foreach ($periods as $item) {
            if($item==$period){

                $item->status='1';
            }else{
                $item->status='0';
            }
            $item->save();
        }

    }
}
