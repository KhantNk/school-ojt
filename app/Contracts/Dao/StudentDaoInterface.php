<?php

namespace App\Contracts\Dao;

interface StudentDaoInterface
{
    public function getAllStudents();
    public function create($data);
    public function store($data);
    public function edit($id);
    public function update($data, $id);
    public function delete($id);
}
