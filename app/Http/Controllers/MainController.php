<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    function index () {

        return view('index');
    }

    function about () {

        return view('about');
    }

    function products () {

        return view('products');
    }

    function store () {

        return view('store');
    }





    //
}
