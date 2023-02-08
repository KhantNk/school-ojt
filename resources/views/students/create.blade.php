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
 <div class="container p-5">
    <div class="row col-md-6 col-md-offset-3 m-auto">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Student Registration Form</h1>
        </div>
        <div class="panel-body">
          <form action="/students/store" method="POST">
             @csrf
            <div class="form-group pb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group pb-3">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group pb-3">
              <label for="phone">Phone Number</label>
              <input type="number" class="form-control" id="phone" name="phone" />
            </div>
            <div class="form-group pb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" />
            </div>
            <div class="form-group pb-3">
              <label for="gender">Gender</label> <br>
              <input type="radio" name="gender" value="m"/>Male
              <input type="radio" name="gender" value="f"/>Female
              <input type="radio" name="gender" value="o"/>Other
            </div>
            <div class="form-group pb-3" data-provide="datepicker">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob" />
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
