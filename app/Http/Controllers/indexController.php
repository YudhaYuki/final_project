<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{


    public function homepage()
    {
        $view = view('homepage');
        return $view;
    }
}

