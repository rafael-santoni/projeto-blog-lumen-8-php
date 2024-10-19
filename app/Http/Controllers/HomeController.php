<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home', ['title' => 'RS-Dev Blog | Home', 'name' => 'Rafa Dev']);
    }
}
