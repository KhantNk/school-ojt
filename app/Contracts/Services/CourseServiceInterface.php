<?php

namespace App\Contracts\Services;

interface CourseServiceInterface
{
    public function getAllCourses();
    public function create($request);
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function delete($id);
}
