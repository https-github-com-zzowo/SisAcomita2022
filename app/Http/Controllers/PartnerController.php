<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerPostRequest;
use App\Models\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){
        $partners=partner::all();
        //return $schools;
        return response()->json($partners);
    }

    public function show(partner $partner){
        $partner=partner::find($partner);
        return response()->json($partner);
    }
    public function store(PartnerPostRequest $request){
        $partner = partner::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $partner
        ], 200);
    }

    public function update(PartnerPostRequest $request, partner $partner){
        $partner->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $partner
        ], 200);
    }

    public function destroy(partner $partner){
        $partner->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
