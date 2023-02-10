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
            <div class="panel-heading">
                <h1>Teacher Edit</h1>

                <form action="/teachers/update/{{ $teachers->id }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $teachers->name }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $teachers->email }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone01">Phone Number 01</label>
                        <input type="text" class="form-control" id="phone01" name="phone01"
                            value="{{ $teachers->phone01 }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone02">Phone Number 02</label>
                        <input type="number" class="form-control" id="phone02" name="phone02"
                            value="{{ $teachers->phone02 }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $teachers->address }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="gender">Gender</label> <br>
                        <input type="radio" name="gender" id="gender" value="m"
                            {{ $teachers->gender == 'm' ? 'checked' : '' }} />Male
                        <input type="radio" name="gender" id="gender"
                            value="f"{{ $teachers->gender == 'f' ? 'checked' : '' }} />Female
                        <input type="radio" name="gender" id="gender" value="o"
                            {{ $teachers->gender == 'o' ? 'checked' : '' }} />Other
                    </div>
                    <input name=submit type="submit" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</body>

</html>
