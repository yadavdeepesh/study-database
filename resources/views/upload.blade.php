
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

    <h2>Upload File</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    {{-- Validation Errors --}}
    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Upload Form --}}
    <form action="{{ route('upload-file') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <input type="file" name="file" required>

        <button type="submit">
            Upload File
        </button>

    </form>

    <hr>

    <h3>Uploaded Files</h3>

    @if(count($files) > 0)

        <ul>
            @foreach($files as $file)

                <li>
                    {{ basename($file) }}
                </li>

            @endforeach
        </ul>

    @else

        <p>No files uploaded yet.</p>

    @endif

</body>
</html>

