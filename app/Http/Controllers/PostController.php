<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {


    public function showPost() {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request) {
        $created = Post::create($request->input());
        return response()->json($created, 201);
    }

    public function update(Request $request) {
        $postId = $request['post_id'];
        $body = $request['body'];

        $updated = Post::where('id',$postId)->update([
            'body'=>$body
        ]);
        return response()->json($updated, 201);
    }
}
