<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Learnblade extends Controller
{
    //

    
    public function learnblade(){
        $users = ["emerald","john","emmanuel",'oparaduru',"esther"];
        return View('learnblade')->with('users',$users);
    }
}
