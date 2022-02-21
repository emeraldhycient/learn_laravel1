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
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:7'
        ]);
        return $request->input();
    }
}
