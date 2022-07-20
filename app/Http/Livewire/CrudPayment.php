<?php

namespace App\Http\Livewire;

use App\Models\assistence;
use App\Models\partner;
use App\Models\Payment;
use Livewire\Component;

class CrudPayment extends Component
{
    public $payment, $search;
    public $isOpen=false;
    public $isOpen1=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'import'=>'required',
        'date'=>'required',
        'partner_id'=>'required'

    ];

    public function render()
    {
        $payments=Payment::orderBy('id', 'asc')->paginate(10);
        $partners=partner::pluck('name', 'id');
        $assistences=assistence::pluck('status', 'partner_id', 'id');
        return view('livewire.crud-payment', compact('payments', 'partners', 'assistences'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['payment']);
    }
    public function proccollec(){
        $this->isOpen1=true;
        $this->reset(['payment']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->payment->id)){
            Payment::create($this->payment);
        }else{
            $this->payment->save();
        }
        $this->reset(['isOpen','payment']);
        $this->emitTo('CrudPayment','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Payment $payment){
        $this->payment=$payment;
        $this->isOpen=true;
    }

    public function delete(Payment $payment){
        $payment->delete();
    }
}
