<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h1>Edit Student</h1>

<form action="/student/update/{{ $student->id }}" method="POST">

    @csrf

    <input type="text" name="name" value="{{ $student->name }}">
    <br><br>

    <input type="email" name="email" value="{{ $student->email }}">
    <br><br>

    <input type="text" name="course" value="{{ $student->course }}">
    <br><br>

    <button type="submit">
        Update Student
    </button>

</form>

</body>
</html>