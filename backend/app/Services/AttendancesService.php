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

    public function updateAttendance($attendance_id, $update_attendance){
        $attendance = Attendances::find($attendance_id);
        if (is_null($attendance)) {
            return null;
        }
        $attendance->update($update_attendance);  
        return $attendance;                       
    }

    public function deleteAttendance($attendance_id){
        $attendance = Attendances::find($attendance_id);
        if (is_null($attendance)) {
            return null;
        }
        $attendance->delete();
        return $attendance;
    }


} 