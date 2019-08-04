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
}
