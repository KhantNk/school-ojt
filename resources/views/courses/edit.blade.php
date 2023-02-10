<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<div class="container">
    <div class="row col-md-6 col-md-offset-3 m-auto">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Course Update Form</h1>
            </div>
            <div class="panel-body">

                <form action="/courses/update/{{ $courses->id }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="course_id">Course ID</label>
                        <input type="text" class="form-control" id="course_id" name="course_id"
                            value="{{ $courses->course_id }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $courses->name }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $courses->description }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="total_lessons">Total Lessons</label>
                        <input type="number" class="form-control" id="total_lessons" name="total_lessons"
                            value="{{ $courses->total_lessons }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="start_date">Start Date</label>
                        <input type="text" class="form-control" id="start_date" name="start_date"
                            value="{{ $courses->start_date }}" />
                    </div>
                    <div class="form-group pb-3" data-provide="datepicker">
                        <label for="course_duration">Course Duration</label>
                        <input type="number" class="form-control" id="course_duration" name="course_duration"
                            value="{{ $courses->course_duration }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</body>

</html>
