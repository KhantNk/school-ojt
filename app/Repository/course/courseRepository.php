<?php

namespace App\Repository\Course;

use App\Models\Course;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;


class courseRepository implements courseRepositoryInterface
{
    public function getAllCourse()
    {
        return Course::latest()->get();
    }

    public function store($data)
    {
        Course::create($data);
    }
    public function show($id)
    {

    }

    public function update(CourseRequest $request, $id)
    {

    }

    public function view($id){

    }
    public function destroy($id)
    {
        
    }
}
