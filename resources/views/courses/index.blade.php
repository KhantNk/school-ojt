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
        <form>
            <div class="input-group justify-content-between">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control w-25"
                    placeholder="Search...">
                <button class="btn btn-primary" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </form>
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
                @foreach ($courses as $course)
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
                           <td class="d-flex justify-content-between"><a href="/courses/show/{{ $course->id }}" class="btn btn-primary">Detail</a>
                               <form action="/courses/delete/{{ $course->id }}" method="POST">
                                    @method('DELETE')
                                   @csrf
                                   <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                           </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $courses->links() }}
    </div>
</body>

</html>
