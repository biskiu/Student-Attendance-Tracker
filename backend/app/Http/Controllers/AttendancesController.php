<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use Illuminate\Http\Request;
use App\Services\AttendancesService;

class AttendancesController extends Controller
{
    public function __construct(
        protected AttendancesService $attendanceService
    ){}

    public function save(Request $request){
        $data = $this->attendanceService->saveAttendance($request);
        return response()->json($data,200);
    }

    public function get(){
        $data = $this->attendanceService->getAttendance();
        return response()->json($data,200);
    }

    public function update(Request $request){
        $data = $this->attendanceService->updateAttendance($request->attendance_id, $request->all());
        if (is_null($data)) {
            return response()->json(['message'=>'no attendance found'],404);
        }
        return response()->json($data,200);
    }

    public function delete($attendance_id){
        $data = $this->attendanceService->deleteAttendance($attendance_id);
        if (is_null($data)) {
            return response()->json(['message'=>'no attendance found'],404);
        }
        return response()->json(['message'=>'attendance deleted :>'],200);
    }





}

