<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index() {
        return view('student.registration-Page');
  }

  public function student() {
    return view('student.students-list-page');
}

}
