<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ServiceController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('service', compact('posts'));
    }
}
