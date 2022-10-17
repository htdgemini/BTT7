<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[StudentController::class,'get_all_student']);

Route::get('/students/{id}/edit',[StudentController::class,'get_student_by_id']);
Route::post('/students/{id}/edit',[StudentController::class,'edit']);

Route::get('/students/add',[StudentController::class,'create']);
Route::post('/students/add',[StudentController::class,'add']);



