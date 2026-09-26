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

public function destroy($id)
{
    $student =TestStudent::findOrFail($id);

    $student->delete();

    return redirect()->route('student.index')
        ->with('success', 'Student deleted successfully!');
}

public function edit($id)
{
    $student = TestStudent::findOrFail($id);

    return view('student-edit', compact('student'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
    ]);

    $student = TestStudent::findOrFail($id);

    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;

    $student->save();

    return redirect()->route('student.index')
        ->with('success', 'Student updated successfully!');
}

}
