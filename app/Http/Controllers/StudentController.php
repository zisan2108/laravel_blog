<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
        public function index()
    {
    	$students = Student::all();

    	//return view('page.index')->withstudents($students);or
    	return view('page.index')->with('students',$students);
    }

      public function create()
    {
    	
    	return view('page.create');
    }
}
