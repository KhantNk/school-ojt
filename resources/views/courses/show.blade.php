<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Course Detail</h1>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Total Lessons</th>
                    <th>Start Date</th>
                    <th>Course Duration</th>
                    <th>Teacher ID</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $courses->course_id }}</td>
                        <td>{{ $courses->name }}</td>
                        <td>{{ $courses->description }}</td>
                        <td>{{ $courses->total_lessons }}</td>
                        <td>{{ $courses->start_date }}</td>
                        <td>{{ $courses->course_duration }}</td>
                        <td>{{ $courses->teacher_id }}</td>
                        <td><a href="/courses/edit/{{ $courses->id }}" class="btn btn-primary">Edit</a></td>
                    </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
