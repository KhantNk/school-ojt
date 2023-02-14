<?php

namespace App\Service\Course;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

use App\Models\Course;

interface CourseServiceInterface
{
    public function getAllCourse();
    public function store($request);

}
