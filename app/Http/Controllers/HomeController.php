<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        
        return view('site.home', ['title' => 'RS-Dev Blog | Home', 'posts' => $posts]);
    }
}
