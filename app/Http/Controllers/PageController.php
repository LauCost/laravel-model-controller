<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //

    public function index()
    {
        # SELECT * FROM movies
        ddd(Movie::all());

        return view('home');

    }
}
