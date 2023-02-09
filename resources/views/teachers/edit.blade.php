<h1>Teacher Edit</h1>

<form action="/students/update/{{ $teachers->id }}" method="POST">
    @csrf
    <div class="form-group pb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $teachers->name }}"/>
    </div>
    <div class="form-group pb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $teachers->email}}" />
    </div>
    <div class="form-group pb-3">
        <label for="phone">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" value="{{ $teachers->phone}}" />
    </div>
    <div class="form-group pb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $teachers->address}}"/>
    </div>
    <div class="form-group pb-3">
        <label for="gender">Gender:{{$teachers->gender}}</label>
    </div>
    <div class="form-group pb-3" data-provide="datepicker">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" value="{{ $teachers->dob}}" />
    </div>
    <input name=submit type="submit" class="btn btn-primary" />
</form>
