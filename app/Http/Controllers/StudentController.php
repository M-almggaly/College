<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
// This function Calls The registration-Page
public function index() {
    return view('student.registration-Page');
}
// This function Calls The students-list-page
public function student() {
    return view('student.students-list-page');
}
/* This function Takes Request as Parametar And retrive the Data From registration-Page
And set them as required then using the defined model we create new record for Students Table*/

public function store(Request $request){
  $request->validate([
    'name' => 'required',
    'phone' => 'required',
    'address' => 'required',
    'email' => 'required',
    'section' => 'required'
]);
$create = new Students();
$create->name = strip_tags($request->input('name'));
$create->phone = strip_tags($request->input('phone'));
$create->addrs = strip_tags($request->input('address'));
$create->email = strip_tags($request->input('email'));
$create->Section = strip_tags($request->input('section'));
if($create->save()){
  return view('student.students-list-page');
 }
 else{
  return response()->json('Fail','400');
 }
}
}
