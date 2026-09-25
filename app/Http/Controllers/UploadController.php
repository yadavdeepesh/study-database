<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    // create the function for upload image code 

  
public function uploadFile(Request $request)
{
    $request->validate([
        'file' => 'required|file|max:2048',
    ]);

    $file = $request->file('file');

    $file->store('uploads');

    return redirect()->route('upload')
        ->with('success', 'File uploaded successfully!');
}

public function upload()
{
    $files = Storage::files('uploads');

    return view('upload', compact('files'));
}
}
