<?php

namespace App\Http\Controllers;
class HomeController extends Controller{
    function welcome () {
        return view('pages/welcome');
    }
}