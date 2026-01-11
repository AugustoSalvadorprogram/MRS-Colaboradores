<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index'])->name('index');

// Route::get('/login', [EventController::class, 'login']);
// Route::post('/login', [EventController::class, 'loginSubmit'])->name('loginSubmit');

Route::get('/user', [EventController::class, 'user'])->middleware('auth');

// Route::get('/register', [EventController::class, 'register']);
// Route::post('/register', [EventController::class, 'registerSubmit']);

Route::get('/courses', [EventController::class, 'courses'])/*->middleware('auth')*/;

Route::get('/screencourse/{id}', [EventController::class, 'screencourse'])->middleware('auth');

// ROute::get('/dashboard', [EventController::class, 'dashboard']);
// ROute::get('/dashboard/{id}', [EventController::class, 'showdashboard']);

Route::get('/addcourse', [EventController::class, 'addcourse']);
Route::post('/addcourse', [EventController::class, 'addcourseSubmit']);
Route::get('/editcourse/{id}', [EventController::class, 'editcourse']);
Route::put('/update/{id}', [EventController::class, 'update']);
Route::delete('/addcourse/{id}', [EventController::class, 'destroy']);
Route::get('/{id}', [EventController::class, 'show']);
Route::get('/addaula/{id}', [EventController::class, 'addaula']);



Route::get('/addcourseindex', [EventController::class, 'addcourseindex']);
Route::post('/addcourseindex', [EventController::class, 'addcourseSubmitindex']);

