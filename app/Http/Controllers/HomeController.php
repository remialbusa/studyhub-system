<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function login(){
        return view('login-page');
    }

    function landingPage(){
        return view('landing-page');
    }
}
