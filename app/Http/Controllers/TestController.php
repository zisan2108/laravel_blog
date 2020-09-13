<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
    	$username = "Nahiduzzaman Zisan";

	 	return view('test')->withUsername($username);
    }


   
}
