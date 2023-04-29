<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function register(Request $request)
    {
        $attributes = $request->all();
        return Post::create($attributes);
    }

}
