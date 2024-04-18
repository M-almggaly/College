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
// This function Calls The students-list-page// This function Calls The students-list-page With the variable Students That Holds All Rows From the Student table
public function student() {
    return view('student.students-list-page',[
      'Students' => Students::All()
    ]);
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
  return view('student.students-list-page',[
    'Students' => Students::All()
  ]);
 }
 else{
  return response()->json('Fail','400');
 }
}
//This function Gets The id From The Route Then We Delete The Row With The same id
public function destroy($id){
  $delete = Students::findOrFail($id);
  $delete->delete();
  return view('student.students-list-page',[
    'Students' => Students::All()
  ]);
}
// This function gets the id from the route then we send the object to updatestudent to update the record
public function update($id) {
  $student = Students::findOrFail($id);
  return view('student.updatestudent',[
    'Students' => $student
  ]);
}
//This is similer To the store function except we store the data to the id 
public function updated(Request $request, $id) {
  $request->validate([
    'name' => 'required',
    'phone' => 'required',
    'address' => 'required',
    'email' => 'required',
    'section' => 'required'
  ]);

  $student = Students::findOrFail($id);
  $student->name = strip_tags($request->input('name'));
  $student->phone = strip_tags($request->input('phone'));
  $student->addrs = strip_tags($request->input('address'));
  $student->email = strip_tags($request->input('email'));
  $student->Section = strip_tags($request->input('section'));

  if ($student->save()) {
    return view('student.students-list-page', [
      'Students' => Students::all()
    ]);
  } else {
    return response()->json('Fail', 400);
  }
}
}