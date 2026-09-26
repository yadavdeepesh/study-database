<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
</head>
<body>

    <h2>Add New Student</h2>

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

    <form action="{{ route('student.store') }}" method="POST">

        @csrf

        <div>
            <label for="name">Name:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                placeholder="Enter student name"
                required
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                placeholder="Enter student email"
                required
            >
        </div>

        <br>

        <div>
            <label for="phone">Phone:</label>
            <input
                type="text"
                name="phone"
                id="phone"
                value="{{ old('phone') }}"
                placeholder="Enter phone number"
                required
            >
        </div>

        <br>

        <button type="submit">Add Student</button>

    </form>

</body>
</html>
