<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function index()
    {
        return View('user');
    }

    function login(Request $request){
        return $request->input();
    }
}
