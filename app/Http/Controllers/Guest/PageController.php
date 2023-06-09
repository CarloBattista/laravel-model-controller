<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'Home';

        // query database Movies
        $arrayMovies = Movie::all();

        return view('pages.home', compact('title','arrayMovies'));
    }
}
