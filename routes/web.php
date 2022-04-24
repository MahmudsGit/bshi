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

Route::get('/', function () {return view('frontend.application');} );

Route::get('application', [\App\Http\Controllers\ApplicationController::class, 'showForm'])->name('application');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');

    Route::resource('job','\App\Http\Controllers\job\JobController');
//    Route::get('job/description', [\App\Http\Controllers\job\JobController::class, 'job_description'])->name('job_description');
    Route::get('/description/job', function () {return view('backend.job.description');})->name('description');
});
