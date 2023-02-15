<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Course Lists</h1>

        <table class="table table-bordered my-5 ">
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
                {{-- @if (count($data) > 0) --}}
                    @foreach ($data as $course)
                        <tr>
                            {{-- <td>{{ $courses->firstItem()+$loop->index }}</td> --}}
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->total_lessons }}</td>
                            <td>{{ $course->start_date }}</td>
                            <td>{{ $course->course_duration }}</td>
                            <td>{{ $course->teacher_id }}</td>
                            {{-- <td><a href="/courses/show/{{ $course->id }}" class="btn btn-primary">Detail</a></td> --}}
                            <td class="d-flex justify-content-between"><a href="/courses/show/{{ $course->id }}"
                                    class="btn btn-primary">Detail</a>
                                <form action="/courses/delete/{{ $course->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                {{-- @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                @endif --}}
            </tbody>
        </table>
        {{-- {{ $courses->links() }} --}}

    </div>
</body>

</html>
