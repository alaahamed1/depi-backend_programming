<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Home Page
    public function home()
    {
        return view('website.pages.home');
    }
    //bolg page
    public function blog()
    {
        return view('website.pages.blog');
    }
    public function blogdetails()
    {
        return view('website.includes.blog-details');
    }
    public function portfoliodetails()
    {
        return view('website.includes.portfolio-details');
    }
}
