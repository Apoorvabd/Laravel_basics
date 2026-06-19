<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student Management System</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

       @foreach($students as $student)
        {
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->course}}</td>
            <td>
    <a href="/student/edit/{{ $student->id }}">
        Edit
    </a>
    <br>
    <a href="#"
   onclick="deleteStudent({{ $student->id }})">
   Delete
</a>


</td>
        </tr>
        
        }
        @endforeach

    </table>
    
</body>
<script>
function deleteStudent(id)
{
    if(confirm('Are you sure you want to delete this student?'))
    {
        window.location.href = '/student/delete/' + id;
    }
}
</script>
</html>