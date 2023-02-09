   @extends('layouts.app')
   @section('content')
       <div class="container">
           <h1 class="text-center">Student Lists</h1>
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
                   @foreach ($students as $student)
                       <tr>
                           <td>{{ $student->id }}</td>
                           <td>{{ $student->name }}</td>
                           <td>{{ $student->phone }}</td>
                           <td>{{ $student->email }}</td>
                           {{-- <td><a href="/students/show/{{ $student->id }}" class="btn btn-primary">Detail</a></td> --}}
                           <td class="d-flex justify-content-between"><a href="/students/{{ $student->id }}" class="btn btn-primary">Detail</a>
                               <form action="/students/{{ $student->id }}" method="POST">
                                   @method('DELETE')
                                   @csrf
                                   <button type="submit" class="btn btn-primary">Delete</button>
                               </form>
                           </td>
                       </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   @endsection
