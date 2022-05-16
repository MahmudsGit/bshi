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

Route::get('application/form/{id}', [\App\Http\Controllers\ApplicationController::class, 'showForm'])->name('form');

Route::post('apply', [\App\Http\Controllers\ApplicationController::class, 'store'])->name('apply');
Route::get('confirmation/{id}', [\App\Http\Controllers\ApplicationController::class, 'confirmation'])->name('confirmation');
Route::get('application/edit/{id}', [\App\Http\Controllers\ApplicationController::class, 'edit'])->name('edit');
Route::post('application/update/{id}', [\App\Http\Controllers\ApplicationController::class, 'edit'])->name('update');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');

    Route::resource('job','\App\Http\Controllers\job\JobController');
    Route::resource('description','\App\Http\Controllers\job\DescriptionController');
    Route::get('description/create/{id}', [\App\Http\Controllers\job\DescriptionController::class, 'createNew'])->name('description.createNew');
    Route::get('description/view/{id}', [\App\Http\Controllers\job\DescriptionController::class, 'view'])->name('description.view');
    Route::post('description/update/{id}', [\App\Http\Controllers\job\DescriptionController::class, 'updateDescription'])->name('description.updateDescription');
});
