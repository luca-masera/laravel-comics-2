<?php

namespace App\Http\Controllers;

use \App\Models\Comic;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $comics = Comic::inRandomOrder()->limit(5)->get();
        return view('home', compact('comics'));
    }

}
