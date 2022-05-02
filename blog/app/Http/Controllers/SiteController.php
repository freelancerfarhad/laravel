<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Home Controllers
    function showHome(){
        return view('home');
    }

    //About Controllers
    function showAbout(){
        return view('about');
    }

    //Service Controllers
    function showService(){
        return view('service');
    }

    //Portfolio Controllers
    function showPortfolio(){
        return view('portfolio');
    }

    //Contact Controllers
    function showContact(){
        return view('contact');
    }
}
