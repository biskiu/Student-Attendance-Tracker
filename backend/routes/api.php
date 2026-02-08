<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);

Route::controller(StudentsController::class)->group(function () {
    Route::post('student/save', 'save');
    Route::get('student/getData', 'get');
    Route::put('student/update', 'update');
    Route::delete('/student/delete/{student_id}', 'delete');
});


Route::controller(AttendancesController::class)->group(function () {
    Route::post('attendance/save', 'save');
    Route::get('attendance/get', 'get');
    Route::put('attendance/update', 'update');
    Route::delete('attendance/delete/{attendance_id}', 'delete');
});