<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->take(5)->get();
        return view('home', compact('articles'));
    }
}
