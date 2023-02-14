<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Service\Course\courseServiceInterface;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller

{
    private $courseService;

    /**
     * Constructor
     *
     * @param courseServiceInterface $courseService
     */
    public function __construct(courseServiceInterface $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index(Request $request)

    {   
        // $courses = Course::where('name', 'like', '%' . $request->search . '%')
        //     ->orWhere('description', 'like', '%' . $request->search . '%')
        //     ->orderBy('id', 'DESC')->paginate(5);
        $course = $this->courseService->getAllCourse();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'course_id'  =>  'required|integer',
        //     'name' => 'required',
        //     'description' =>  'required',
        //     'start_date'  =>  'required|date',
        //     'total_lessons'=> 'required|integer',
        //     'course_duration'  =>  'required|integer',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/courses/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // $course = new course;
        // $course->course_id = request('course_id');
        // $course->name = request('name');
        // $course->description = request('description');
        // $course->total_lessons = request('total_lessons');
        // $course->start_date = request('start_date');
        // $course->course_duration = request('course_duration');
        // $course->teacher_id = request('teacher_id');
        // $course->created_at = now();
        // $course->updated_at = now();
        // $course->save();
        // return redirect('/courses');     
        $this->courseService->store($request);
        return view('course.index');
    }

    public function edit($id)
    {
        $courses = course::find($id);
        return view('courses.edit', compact('courses'));
    }

    public function update(CourseRequest $request, $id)
    {
        $course = course::find($id);
        $course->course_id = $request->course_id;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->total_lessons = $request->total_lessons;
        $course->start_date = $request->start_date;
        $course->course_duration = $request->course_duration;
        $course->updated_at = now();
        $course->save();

        return redirect('/courses');
    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('courses.show', compact('courses'));
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('/courses');
    }
}
