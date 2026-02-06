<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(StudentsController::class)->group(function () {
    Route::post('student/save', 'save');
    Route::get('student/getData', 'get');
    Route::put('student/update', 'update');
});


 