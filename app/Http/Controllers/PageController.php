<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class PageController extends Controller
{
    public function index(){
        $movies = Movies::orderBy('title')->get(); //ritorna una collection, non un array semplice

        return view('movies', compact('movies')); //con la funzione compact() trasformo la collection in un array e lo nomino 'movies'.
    }
}
