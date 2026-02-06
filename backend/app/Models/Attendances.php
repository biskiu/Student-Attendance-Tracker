<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    protected $table = "attendances";

    protected $fillable = [
        'student_id',
        'attendance_date',
        'attendance_status',
        'remarks',
    ];

   public function students(){
        return $this->belongsTo(Students::class,'student_id', 'student_id');
   } 
   
}
