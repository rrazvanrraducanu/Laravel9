<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function test5()
    {
        if(!isset($_POST["name1"])){
            $bau="";
        }else{
            $bau=$_POST["name1"];
        }
        return view('pages.test5')->with('bau',$bau);
    }
}
