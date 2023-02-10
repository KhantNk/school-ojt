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
                <h1>Teacher Update Form</h1>
            </div>
            <div class="panel-body">
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
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $teachers->phone }}" />
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
                    <div class="form-group pb-3" data-provide="datepicker">
                        <label for="join_date">Date of Birth</label>
                        <input type="date" class="form-control" id="join_date" name="join_date"
                            value="{{ $teachers->join_dare }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="is_left">Status</label> <br>
                        <input type="radio" name="is_left" id="is_left" value="1"
                            {{ $teachers->is_left == '1' ? 'checked' : '' }} />Male
                        <input type="radio" name="is_left" id="is_left"
                            value="0"{{ $teachers->is_left == '0' ? 'checked' : '' }} />Female
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
