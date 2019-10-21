<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function singleNews()
    {
        return view('frontend.single-news');
    }
    public function listingSports() 
    {
        return view('frontend.listing-sports');
    }
    public function listing()
    {
        return view('frontend.listing');
    }
}
