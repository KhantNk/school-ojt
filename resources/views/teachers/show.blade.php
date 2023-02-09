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
        <h1 class="text-center">Student Detail</h1>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $teachers->id }}</td>
                        <td>{{ $teachers->name }}</td>
                        <td>{{ $teachers->phone }}</td>
                        <td>{{ $teachers->email }}</td>
                        <td>{{ $teachers->address }}</td>
                        <td>{{ $teachers->gender }}</td>
                        <td>{{ $teachers->dob }}</td>
                        <td><a href="/teachers/edit/{{ $teachers->id }}" class="btn btn-primary">Edit</a></td>
                    </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
