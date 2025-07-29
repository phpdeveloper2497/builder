<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $news = News::orderBy('id', 'desc')->take(3)->get();

        return view('index', compact('users', 'news'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about');
    }


    public function portfolio()
    {
        return view('portfolio');
    }

    public function service()
    {
        return view('service');
    }

    public function team()
    {
        return view('team');
    }

    public function single()
    {
        return view('single');
    }

    public function contact()
    {
        return view('contact');
    }
}
