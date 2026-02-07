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

    // public function updateStudent($student, $newval){
    //     $data = $student->update($newval);
    //     return $data;
    // }
    public function updateStudent($student_id, $newval){
        $student = Students::find($student_id);
            if (is_null($student)) {
                return null;
            }
        $student->update($newval);
        return $student;
    }


    public function deleteStudent($student_id){
        $student = Students::find($student_id);
        $student->delete();
        return $student;
    }


} 