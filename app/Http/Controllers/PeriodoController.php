<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodoRequest;
use App\Models\period;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public function index(){
        $periodo=period::all();
        //return $schools;
        return response()->json($periodo);
    }

    public function show(period $periodo){
        $periodo=period::find($periodo);
        return response()->json($periodo);
    }
    public function store(PeriodoRequest $request){
        $periodo = period::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $periodo
        ], 200);
    }

    public function update(PeriodoRequest $request, period $periodo){
        $periodo->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $periodo
        ], 200);
    }

    public function destroy(period $periodo){
        $periodo->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
