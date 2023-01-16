<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $movies = Movie::all();
        
        return view('guest.home', [
            'movies' => $movies,
        ]);

    }
}
