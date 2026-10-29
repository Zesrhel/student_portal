<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function student()
    {
        return view('student');
    }

    public function developer()
    {
        return view('developer');
    }
}
