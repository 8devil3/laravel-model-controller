<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class PageController extends Controller
{
    public function index(){
        $movies = Movies::orderBy('title')->get();

        $data = [
            'movies' => $movies
        ];

        return view('movies', $data);
    }
}
