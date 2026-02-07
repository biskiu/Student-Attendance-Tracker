<?php

namespace App\Services;

use App\Models\Attendances;

class AttendancesService
{
    public function saveAttendance($request){
        return Attendances::create($request->all());
    }

    public function getAttendance(){
        return Attendances::all();
    }

    public function updateAttendance($attendance, $update_attendance){
        return Attendances::all(); 
    }

} 