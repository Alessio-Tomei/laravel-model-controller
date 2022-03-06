<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movieArrayQuery = Movie::all();
        $movies = [];
        foreach ($movieArrayQuery as $movie){
            $movies[] = $movie->getAttributes();
        }
        return view('movie', compact('movies'));
    }
}
