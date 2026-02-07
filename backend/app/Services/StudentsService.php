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

    public function updateStudent($student, $newval){
        $data = $student->update($newval);
        return $data;
    }

    public function deleteStudent($student_id){
        $student = Students::find($student_id);
        if (is_null($student)) {
            return null;
        }
        $student->delete();
        return $student;
    }


} 