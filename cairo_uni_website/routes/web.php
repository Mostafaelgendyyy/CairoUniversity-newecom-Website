<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,"home"]);
Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/users',[AdminController::class,"users"]);
Route::get('/adminhome', [AdminController::class,"addashboard"]);
Route::get('/addcources', [AdminController::class,"addcources"]);
Route::post('/savecourse', [AdminController::class,"savecourse"]);
Route::get('/showcourses', [AdminController::class,"showcourses"]);
Route::get('/deleteCourse/{id}', [AdminController::class,"deleteCourse"]);
Route::get('/deleteuser/{id}', [AdminController::class,"deleteuser"]);
Route::get('/addcoursegrade', [AdminController::class,"addcoursegrade"]);
Route::post('/savecoursegrade', [AdminController::class,"savecoursegrade"]);
Route::get('/showcoursesgrades', [AdminController::class,"showcoursesgrades"]);
Route::get('/deleteCoursegrade/{id}', [AdminController::class,"deleteCoursegrade"]);



Route::post('/enrollcourses/{id}', [UserController::class,"enrollcourses"]);









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
