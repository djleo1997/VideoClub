<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //$peliculas = Movie::orderBy('id','DESC')->paginate(3);

        $peliculas = Movie::orderBy('id','DESC')->take(3)->get();

        return view('home', compact('peliculas'));
    }

}
