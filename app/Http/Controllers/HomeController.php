<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
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
