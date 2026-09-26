<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestStudent;

class StudentTestController extends Controller
{
    //
    public function create()
    {
        return view('student-create');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
    ]);

    $student = new TestStudent();

    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->save();

    // Create the obejct of TestStudent

    // Save student here

    return redirect()->route('student.create')
        ->with('success', 'Student added successfully!');
}

public function index()
{
    $students = TestStudent::all();

    return view('student-list', compact('students'));
}
}
