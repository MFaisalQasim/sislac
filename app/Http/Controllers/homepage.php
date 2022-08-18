<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepage extends Controller
{
    function index () {
        return view('homepage');
    }
}
