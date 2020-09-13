<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
   
    function index()
    {
    	
    	//echo "<h1>Show Contolller</h1>";
    	return view('test');

    }
}
