<?php

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

//Route::get('/', function () {return view('frontend.application');} );

Route::get('/', [\App\Http\Controllers\ApplicationController::class, 'application'])->name('application');
Route::get('form', [\App\Http\Controllers\ApplicationController::class, 'showForm'])->name('form');
Route::post('apply', [\App\Http\Controllers\ApplicationController::class, 'store'])->name('apply');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');

    Route::resource('job','\App\Http\Controllers\job\JobController');
    Route::get('/description/job', [\App\Http\Controllers\job\JobController::class, 'description'])->name('description');
});
