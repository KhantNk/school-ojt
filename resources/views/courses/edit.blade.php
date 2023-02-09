<h1>Student Edit</h1>

<form action="/students/{{ $students->id }}" method="POST">
    @csrf
     @method('PUT')
    <div class="form-group pb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $students->name }}"/>
    </div>
    <div class="form-group pb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $students->email}}" />
    </div>
    <div class="form-group pb-3">
        <label for="phone">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" value="{{ $students->phone}}" />
    </div>
    <div class="form-group pb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $students->address}}"/>
    </div>
    <div class="form-group pb-3">
        <label for="gender">Gender:{{$students->gender}}</label>
    </div>
    <div class="form-group pb-3" data-provide="datepicker">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" value="{{ $students->dob}}" />
    </div>
     <button type="submit">Update</button>
</form>
