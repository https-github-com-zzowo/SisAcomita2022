<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpousePostRequest;
use App\Models\partner;
use App\Models\spouse;
use Illuminate\Http\Request;

class SpouseController extends Controller
{
    public function index(){
        $spouses=spouse::all();
        //return $schools;
        return response()->json($spouses);
    }

    public function show(spouse $spouse){
        $spouse=spouse::find($spouse);
        return response()->json($spouse);
    }
    public function store(SpousePostRequest $request){
        $spouse = spouse::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $spouse
        ], 200);
    }

    public function update(SpousePostRequest $request, spouse $spouse){
        $spouse->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $spouse
        ], 200);
    }

    public function destroy(spouse $spouse){
        $spouse->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
