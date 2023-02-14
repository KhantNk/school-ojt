<?php

namespace App\Repository\Course;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

use App\Models\Course;

interface courseRepositoryInterface
{
    public function getAllCourse();
    public function store($data);
    public function show($id);
    public function update(CourseRequest $request, $id);
    public function view($id);
    public function destroy($id);
}
