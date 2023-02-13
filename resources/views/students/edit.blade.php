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
                <h1>Student Update Form</h1>
            </div>
            <div class="panel-body">
                <form action="/students/update/{{ $students->id }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $students->name }}" />
                        @error('name')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $students->email }}" />
                        @error('email')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $students->phone }}" />
                        @error('phone')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $students->address }}" />
                        @error('address')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="gender">Gender</label> <br>
                        <input type="radio" name="gender" id="gender" value="m"
                            {{ $students->gender == 'm' ? 'checked' : '' }} />Male
                        <input type="radio" name="gender" id="gender"
                            value="f"{{ $students->gender == 'f' ? 'checked' : '' }} />Female
                        <input type="radio" name="gender" id="gender" value="o"
                            {{ $students->gender == 'o' ? 'checked' : '' }} />Other
                        @error('gender')
                            <div style="color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group pb-3" data-provide="datepicker">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob"
                            value="{{ $students->dob }}" />
                        @error('dob')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
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
