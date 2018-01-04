<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $carousel = Carousel::where('section_name', 'intro')->get();
        return view('home');
    }


    public function carouselAdmin()
    {
        return view('carousel-admin');
    }
}
