<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('add-student',[StudentController::class,'addStudent']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/store', [StudentController::class, 'store']);