<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentsService;
use App\Models\Students;


class StudentsController extends Controller
{ 
    public function __construct(
        protected StudentsService $studentService
    ){}

    
    public function save(Request $request){
        $data = $this->studentService->saveStudent($request);
        return response()->json($data,200);
    }

    public function get(){
        $data = $this->studentService->getStudent();
        return response()->json($data,200);
    }
    
    // public function update(Request $request){
    //     $data = Students::find($request->student_id);
    //     if(is_null($data)){
    //         return response()->json(['message' => 'Student not found'], 404);
    //     }
    //     $this->studentService->updateStudent($data,$request->all());
    //     return response()->json($data,200);
    // }

    public function update(Request $request){
        $data = $this->studentService->updateStudent($request->student_id, $request->all());
        if (is_null($data)) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json($data,200);
    }

    
    public function delete($student_id){
        $data = $this->studentService->deleteStudent($student_id);
        if (is_null($data)) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }


}
