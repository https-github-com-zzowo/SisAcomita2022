<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post=post::all();
        //return $schools;
        return response()->json($post);
    }

    public function show(post $post){
        $post=post::find($post);
        return response()->json($post);
    }
    public function store(PostRequest $request){
        $post = post::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'name' => $post
        ], 200);
    }

    public function update(PostRequest $request, post $post){
        $post->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'name' => $post
        ], 200);
    }

    public function destroy(post $post){
        $post->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
