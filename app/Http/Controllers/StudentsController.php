<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentsController;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   public function index()
   {
       $students = Student::all();
      //dd('students');
      return view('index',compact('students'));
   }

   public function create()
   {
       return view('create');
   }

   public function store(Request $request)
   {
    Student::create([
        'name' => $request->name,
        'address' => $request->address
            ]);
        return redirect()->route('student.index')->with('success','Student has been Added');
   }

   public function edit(Student $student)
   {
     return view('edit')->with('student',$student);
   }

   public function update(Request $request,Student $student)
   {
       $student->update([
        'name' => $request->name,
        'address' => $request->address
            ]);
        return redirect()->route('student.index')->with('success','Student has been Updated');
   }

   public function destroy(Student $student)
   {
       $student->delete();
       return redirect()->route('student.index')->with('success','Student has been deleted');
   }
}
