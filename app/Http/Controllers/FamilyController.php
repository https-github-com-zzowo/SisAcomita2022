<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyPostRequest;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index(){
        $family=Family::all();
        //return $schools;
        return response()->json($family);
    }

    public function show(Family $family){
        $partner=Family::find($family);
        return response()->json($family);
    }
    public function store(FamilyPostRequest $request){
        $family = Family::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $family
        ], 200);
    }

    public function update(FamilyPostRequest $request, Family $family){
        $family->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $family
        ], 200);
    }

    public function destroy(Family $family){
        $family->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
