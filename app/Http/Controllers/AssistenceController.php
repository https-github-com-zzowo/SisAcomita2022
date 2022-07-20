<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsistenceRequest;
use App\Models\assistence;
use Illuminate\Http\Request;

class AssistenceController extends Controller
{
    public function index(){
        $assistence=assistence::all();
        //return $schools;
        return response()->json($assistence);
    }

    public function show(assistence $assistence){
        $assistence=assistence::find($assistence);
        return response()->json($assistence);
    }
    public function store(AsistenceRequest $request){
        $assistence = assistence::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $assistence
        ], 200);
    }

    public function update(AsistenceRequest $request, assistence $assistence){
        $assistence->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $assistence
        ], 200);
    }

    public function destroy(assistence $assistence){
        $assistence->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
