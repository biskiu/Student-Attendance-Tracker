<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AttendancesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(StudentsController::class)->group(function () {
    Route::post('student/save', 'save');
    Route::get('student/getData', 'get');
    Route::put('student/update', 'update');
    Route::delete('/student/delete/{student_id}', 'delete');
});


Route::controller(AttendancesController::class)->group(function () {
    Route::post('attendance/save', 'save');
    Route::get('attendance/get', 'get');
});