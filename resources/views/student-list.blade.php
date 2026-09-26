
<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <h2>Student List</h2>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('student.create') }}">
        <button type="button">Add New Student</button>
    </a>

    <br><br>

    @if($students->count() > 0)

        <table border="1" cellpadding="10" cellspacing="0">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($students as $student)

                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>

                        <td>

                        <a href="{{ route('student.edit', $student->id) }}">
                                <button type="button">Edit</button>
                            </a>
                            <form action="{{ route('student.delete', $student->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </button>

                            </form>
                        </td>
                        
                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>No students found.</p>

    @endif

</body>
</html>

