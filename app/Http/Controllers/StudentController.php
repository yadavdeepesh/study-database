<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getStudentUsers()
    {
   $student = \App\Models\Student::all();
   $student_test = \App\Models\Student::test();
   
   return view('students', ['students' => $student, 'student_test' => $student_test]);
    }
}
