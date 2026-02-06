<?php

namespace App\Services;

use App\Models\Students;

class StudentsService
{
    public function saveStudent($request){
        return Students::create($request->all());
    }

    public function getStudent(){
        return Students::all();
    }

    public function updateStudent($student,$newData){
        $student->update($newData);
        return $student;
    }

} 