<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class PageController extends Controller
{
    //

    public function index()
    {
        # SELECT * FROM movies
        #ddd(Movie::all());

        $movies = Movie::all();
        return view('home', compact('movies'));

    }
}
