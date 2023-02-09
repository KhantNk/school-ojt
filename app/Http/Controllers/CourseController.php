<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller

{
    public function index(Request $request)
    {
        $courses = Course::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $courses = course::all();
        return view('courses.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required',
            'phone' => 'required',
            'email' =>  'required|email',
            'gender'  =>  'required',
            'address'  =>  'required',
            'dob'  =>  'required',
        ]);

        if ($validator->fails()) {
            return redirect('/courses/create')
                ->withErrors($validator)
                ->withInput();
        }

        $course = new course;
        $course->course_id = request('course_id');
        $course->name = request('name');
        $course->description = request('description');
        $course->total_lessons = request('total_lessons');
        $course->start_date = request('start_date');
        $course->course_duration = request('course_duration');
        $course->created_at = now();
        $course->updated_at = now();
        $course->save();
        return redirect('/courses');
    }

    public function edit($id)
    {
        $courses = course::find($id);

        return view('courses.edit', compact('courses'));
    }

    public function update($id)
    {
        $course = course::find($id);
        $course->title = "Changed Title";
        $course->updated_at = now();
        $course->save();

        return "Updated Course";
    }

    public function show($id)
    {
        $courses = Course::find($id);

        return view('courses.show', compact('courses'));
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return "Deleted Post";
    }
}
