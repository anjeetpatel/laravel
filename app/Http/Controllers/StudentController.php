<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'name' => 'STUDENT NAME',
            'email' => 'STUDENT@lpu.in',
            'registered_on' => 'JAN 2025'
        ];

        return view('student.index', compact('student'));
    }
}
