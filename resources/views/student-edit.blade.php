
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h2>Edit Student</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('student.update', $student->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>

            <input type="text"
                   name="name"
                   value="{{ old('name', $student->name) }}"
                   required>
        </div>

        <br>

        <div>
            <label>Email:</label>

            <input type="email"
                   name="email"
                   value="{{ old('email', $student->email) }}"
                   required>
        </div>

        <br>

        <div>
            <label>Phone:</label>

            <input type="text"
                   name="phone"
                   value="{{ old('phone', $student->phone) }}"
                   required>
        </div>

        <br>

        <button type="submit">
            Update Student
        </button>

        <a href="{{ route('student.index') }}">
            Cancel
        </a>

    </form>

</body>
</html>

