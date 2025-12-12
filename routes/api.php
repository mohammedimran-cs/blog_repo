<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('check', function (Request $request) {
    $data = $request->id;
    info('demoo');
    return response()->json(['id' => $data]);
})->middleware('admin');

Route::get('check', function () {
    return response()->json(['demo' => 'demo']);
});

Route::get('/demo-demo',[App\Http\Controllers\DemoController::class, 'demo']);

Route::post('/test-demo',[App\Http\Controllers\DemoController::class, 'test']);

Route::get('/student{id}', [App\Http\Controllers\TutoController::class, 'getStudentById']);

Route::get('/student-with-teacher/{id}', [App\Http\Controllers\TutoController::class, 'getStudentByIdWithTeacher']);

Route::get('/teacher-with-students/{id}', [App\Http\Controllers\TutoController::class, 'getTeacherByIdWithStudents']);

Route::get('/student-full-info/{id}', [App\Http\Controllers\TutoController::class, 'getStudentByIdWithCoursesProfileTeacher']);

Route::get('/get-teacher-sql/{id}', [App\Http\Controllers\TutoController::class, 'getTeacherBySqlQuery']);