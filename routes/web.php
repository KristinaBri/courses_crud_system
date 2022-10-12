<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

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



Route::resource('courses', CourseController::class);
Route::get('/allCourses', [CourseController::class, 'showCourses']) ->name('allCourses');

Route::resource('groups', GroupController::class);
Route::get('/allGroups', [GroupController::class, 'showGroups']) ->name('allGroups');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
