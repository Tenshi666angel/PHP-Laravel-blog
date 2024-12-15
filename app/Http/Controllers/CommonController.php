<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    function home(Request $request)
    {
        return view('home');
    }
}
