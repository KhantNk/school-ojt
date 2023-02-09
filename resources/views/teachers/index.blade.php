   @extends('layouts.app')
   @section('content')
       
   <div class="container">
        <h1 class="text-center">Teacher Lists</h1>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->phone01 }}</td>
                        <td>{{ $teacher->email }}</td>
                        {{-- <td><a href="/students/show/{{ $teacher->id }}" class="btn btn-primary">Detail</a></td> --}}
                        <td><a href="/teachers/{{ $teacher->id }}" class="btn btn-primary">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
