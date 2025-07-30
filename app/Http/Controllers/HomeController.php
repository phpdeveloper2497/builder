<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\News;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $abouts = About::all();
        $posts = Post::all();
        $carousels = Banner::where('is_active', true)->get();

        return view('index', compact('users', 'news', 'abouts', 'posts','carousels'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }


    public function portfolio(Request $request)
    {
        $projects = Project::with('status')
            ->when($request->has('status'), function ($query) use ($request) {
                $query->whereHas('status', function ($q) use ($request) {
                    $q->where('name', $request->status);
                });
            })
            ->get();

        return view('portfolio', compact('projects'));
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
