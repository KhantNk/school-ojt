<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('gender', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')->paginate(5);
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('teachers.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required',
            'phone01' => 'required',
            'email' =>  'required|email',
            'gender'  =>  'required',
            'address'  =>  'required',
            'join_date'  =>  'required',
            'is_left'  =>  'required',
        ]);

        if ($validator->fails()) {
            return redirect('/teachers/create')
                ->withErrors($validator)
                ->withInput();
        }

        $teacher = new Teacher;
        $teacher->name = request('name');
        $teacher->email = request('email');
        $teacher->phone01 = request('phone01');
        $teacher->phone02 = request('phone02');
        $teacher->gender = request('gender');
        $teacher->address = request('address');
        $teacher->join_date = request('join_date');
        $teacher->is_left = request('is_left');
        $teacher->created_at = now();
        $teacher->updated_at = now();
        $teacher->save();
        return redirect('/teachers');
    }

    public function edit(Request $request, $id)
    {
        $teachers = Teacher::find($id);

        return view('teachers.edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone01 = $request->phone01;
        $teacher->phone02 = $request->phone02;
        $teacher->gender = $request->gender;
        $teacher->address = $request->address;
        $teacher->join_date = $request->join_date;
        $teacher->is_left = $request->is_left;
        $teacher->updated_at = now();
        $teacher->save();

        return "Updated Teacher";
    }

    public function show($id)
    {
        $teachers = Teacher::find($id);

        return view('teachers.show', compact('teachers'));
    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('/teachers');
    }
}
