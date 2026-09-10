<div>
    <h1>Students</h1>
    <h1>{{ $student_test }}</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Batch</th>
                <th>Create Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td> 
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->batch }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>