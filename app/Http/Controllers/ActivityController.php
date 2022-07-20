<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $activity=activity::all();
        //return $schools;
        return response()->json($activity);
    }

    public function show(activity $activity){
        $activity=activity::find($activity);
        return response()->json($activity);
    }
    public function store(ActivityRequest $request){
        $activity = activity::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $activity
        ], 200);
    }

    public function update(ActivityRequest $request, activity $activity){
        $activity->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $activity
        ], 200);
    }

    public function destroy(activity $activity){
        $activity->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
