<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $payment=Payment::all();
        //return $schools;
        return response()->json($payment);
    }

    public function show(Payment $payment){
        $payment=Payment::find($payment);
        return response()->json($payment);
    }
    public function store(PaymentRequest $request){
        $payment = Payment::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $payment
        ], 200);
    }

    public function update(PaymentRequest $request, Payment $payment){
        $payment->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $payment
        ], 200);
    }

    public function destroy(Payment $payment){
        $payment->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
