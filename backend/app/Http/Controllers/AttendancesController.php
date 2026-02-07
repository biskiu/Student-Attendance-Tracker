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

    public function update(){
        $data = $this->attendanceService->getAttendance();
        if(is_null($data)){
            return response()->json(['message'=>'no attendance found']);
        }
        return response()->json($data,200);
    }





}

