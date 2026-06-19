<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Edit Student</h3>
                </div>

                <div class="card-body">

                    <form action="/student/update/{{ $student->id }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label">
                                Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ $student->name }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ $student->email }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Course
                            </label>

                            <input
                                type="text"
                                name="course"
                                value="{{ $student->course }}"
                                class="form-control">
                        </div>

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-warning">
                                Update Student
                            </button>

                            <a
                                href="/students"
                                class="btn btn-secondary">
                                Back
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>