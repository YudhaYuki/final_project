<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class testController extends Controller
{
    
    //the 'homepage' of feature tests
    public function index()
    {
        $groups = group::all();

        $group_2 = group::find(2);
        
        var_dump($group);
    }

    //just blindly create one record in the table `players`
    public function create()
    {
        $group = new Group();

        $group->name = "the lads";

        $group->save();
        
    }
}
