<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionRequest;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        $collection=Collection::all();
        //return $schools;
        return response()->json($collection);
    }

    public function show(Collection $collection){
        $collection=Collection::find($collection);
        return response()->json($collection);
    }
    public function store(CollectionRequest $request){
        $collection = Collection::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $collection
        ], 200);
    }

    public function update(CollectionRequest $request, Collection $collection){
        $collection->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $collection
        ], 200);
    }

    public function destroy(Collection $collection){
        $collection->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
