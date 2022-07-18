<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpadronamientoPostRequest;
use App\Models\Empadronamieto;
use Illuminate\Http\Request;

class EmpadronamientoController extends Controller
{
    public function index(){
        $empadronamiento=Empadronamieto::all();
        //return $schools;
        return response()->json($empadronamiento);
    }

    public function show(Empadronamieto $empadronamiento){
        $partner=Empadronamieto::find($empadronamiento);
        return response()->json($empadronamiento);
    }
    public function store(EmpadronamientoPostRequest $request){
        $empadronamiento = Empadronamieto::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $empadronamiento
        ], 200);
    }

    public function update(EmpadronamientoPostRequest $request, Empadronamieto $empadronamiento){
        $empadronamiento->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $empadronamiento
        ], 200);
    }

    public function destroy(Empadronamieto $empadronamiento){
        $empadronamiento->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
