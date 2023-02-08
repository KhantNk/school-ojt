<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $student = new Student;
        $student->name = request('name');
        $student->phone = request('phone');
        $student->email = request('email');
        $student->gender = request('gender');
        $student->address = request('address');
        $student->dob = request('dob');
        $student->created_at = now();
        $student->updated_at = now();
        $student->save();
        return redirect('/students');
    }

    public function edit($id)
    {
        $students = Student::find($id);

        return view('Students.edit', compact('students'));
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->title = "Changed Title";
        $student->updated_at = now();
        $student->save();

        return "Updated Student";
    }

    public function show($id)
    {
        $students = Student::find($id);

        return view('students.show', compact('students'));
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return "Deleted Post";
    }
}
