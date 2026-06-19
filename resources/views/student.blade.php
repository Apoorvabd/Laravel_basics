<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Student Management System</h1>

        <a href="/student/create" class="btn btn-primary">
            Add Student
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($students as $student)

                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>

                        <td>

                            <a href="/student/edit/{{ $student->id }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="deleteStudent({{ $student->id }})">
                                Delete
                            </button>

                        </td>
                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>
    </div>

</div>

<script>
function deleteStudent(id)
{
    if(confirm('Are you sure you want to delete this student?'))
    {
        window.location.href = '/student/delete/' + id;
    }
}
</script>

</body>
</html>