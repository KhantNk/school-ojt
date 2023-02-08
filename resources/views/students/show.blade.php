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
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->address }}</td>
                        <td>{{ $students->gender }}</td>
                        <td>{{ $students->dob }}</td>
                    </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
