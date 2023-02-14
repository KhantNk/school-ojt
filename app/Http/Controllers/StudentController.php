<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

use  App\Http\Requests\StudentRequest;

use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('gender', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')->paginate(5);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $students = Student::all();
        return view('students.create', compact('students'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' =>  'required|email|unique:students',
            'gender'  =>  'required|in:m,f,o',
            'address'  =>  'required',
            'dob'  =>  'required|date',     
        ]);

        if ($validator->fails()) {
            return redirect('/students/create')
            ->withErrors($validator)
                ->withInput();
        }

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

    public function edit(Request $request, $id)
    {
        $students = Student::find($id);
        return view('Students.edit', compact('students'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->created_at = now();
        $student->updated_at = now();
        $student->save();

        return redirect('/students');
    }

    public function show($id)
    {
        $students = Student::find($id);

        return view('students.show', compact('students'));
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/students');
    }
}
