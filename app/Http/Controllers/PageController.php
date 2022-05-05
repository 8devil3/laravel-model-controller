<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class PageController extends Controller
{
    public function index(){
        $movies = Movies::orderBy('title')->get();

        return view('movies', compact($movies, 'movies'));
    }
}
