<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = "students";
    protected $primaryKey = "student_id";   //kung di 'id' ang name kay need ni ideclare

    protected $fillable = [
        'full_name',
        'course',
        'year_level',
        'contact_number',
        'student_status'
    ];
    
    public function attendances(){ //FK, LOCAL
        return $this->hasMany(Attendances::class, 'student_id', 'student_id');
    }

}
