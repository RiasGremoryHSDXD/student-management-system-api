<?php

use App\Http\Controllers\FavFoodController;
use App\Http\Controllers\userStudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fav-foods', [FavFoodController::class, 'index']);
Route::get('/student_list', [userStudentController::class, 'student_user']);