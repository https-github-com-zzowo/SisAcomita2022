<?php

namespace App\Http\Controllers;

use App\Http\Requests\StandPostRequest;
use App\Models\stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    public function index(){
        $stand=stand::all();
        //return $schools;
        return response()->json($stand);
    }

    public function show(stand $stand){
        $stand=stand::find($stand);
        return response()->json($stand);
    }
    public function store(StandPostRequest $request){
        $stand = stand::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'stan' => $stand
        ], 200);
    }

    public function update(StandPostRequest $request, stand $stand){
        $stand->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'stan' => $stand
        ], 200);
    }

    public function destroy(stand $stand){
        $stand->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
