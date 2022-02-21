<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function about($id)
    {
        $arr = array(
            ['name' => "ade",'id'=>$id]
        );
        return View('about',['arr'=>$arr]);
    }
}
