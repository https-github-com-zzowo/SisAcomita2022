<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=User::all();
        //return $schools;
        return response()->json($user);
    }

    public function show(User $user){
        $user=User::find($user);
        return response()->json($user);
    }
    public function store(UserRequest $request){
        $user = User::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $user
        ], 200);
    }

    public function update(UserRequest $request, User $user){
        $user->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $user
        ], 200);
    }

    public function destroy(User $user){
        $user->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
