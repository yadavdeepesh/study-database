
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
<h3>Uploaded Files</h3>

@if(count($files) > 0)

    @foreach($files as $file)

        @php
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        @endphp

        <div style="margin-bottom: 30px;">

            <p>{{ basename($file) }}</p>

            @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))

                <!-- <img
                    src="{{ asset('storage/' . $file) }}"
                    width="300"
                    alt="{{ basename($file) }}"
                > -->
                <img src="{{ asset('storage/' . $file) }}">

            @elseif($extension === 'pdf')

                <a href="{{ asset('storage/' . $file) }}" target="_blank">
                    View PDF
                </a>

            @endif

        </div>

    @endforeach

@else

    <p>No files uploaded yet.</p>

@endif

</body>
</html>

