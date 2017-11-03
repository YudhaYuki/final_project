<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{


    public function homepage()
    {
        $view = view('wrapper');
        return $view;
    }
}

