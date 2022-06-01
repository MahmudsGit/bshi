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

//Route::get('/', function () {return view('FrontEnd.application');} );

Route::get('/', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'application'])->name('application');
Route::get('application/form/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'showForm'])->name('form');
Route::post('apply', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'store'])->name('apply');
Route::get('confirmation/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'confirmation'])->name('confirmation');
Route::get('application/edit/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'edit'])->name('edit');
Route::post('application/update/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'update'])->name('update');
Route::get('application/success/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'success'])->name('confirmation.success');
Route::get('download/pdf/{id}', [\App\Http\Controllers\FrontEnd\ApplicationController::class, 'pdf'])->name('download.pdf');

Route::get('applicants_copy', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'ApplicantsCopy'])->name('applicants_copy');
Route::post('applicants_copy/download', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'ApplicantsCopyDownload'])->name('applicants_copy.download');
Route::get('online_pay', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'OnlinePay'])->name('online_pay');
Route::post('online_pay_later', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'OnlinePayLater'])->name('online_pay_later');
Route::get('admit_download', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'AdmitDownload'])->name('admit_download');
Route::post('admitcard/download', [\App\Http\Controllers\FrontEnd\UserLoginController::class, 'admitCardDownload'])->name('admitcard.download');

// Admin Start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('BackEnd.dashboard');})->name('dashboard');
    Route::resource('job','\App\Http\Controllers\BackEnd\job\JobController');
    Route::resource('description','\App\Http\Controllers\BackEnd\job\DescriptionController');
    Route::resource('description','\App\Http\Controllers\BackEnd\job\DescriptionController');
    Route::get('description/create/{id}', [\App\Http\Controllers\BackEnd\job\DescriptionController::class, 'createNew'])->name('description.createNew');
    Route::get('description/view/{id}', [\App\Http\Controllers\BackEnd\job\DescriptionController::class, 'view'])->name('description.view');
    Route::post('description/update/{id}', [\App\Http\Controllers\BackEnd\job\DescriptionController::class, 'updateDescription'])->name('description.updateDescription');
    Route::resource('candidate','\App\Http\Controllers\BackEnd\CandidateController');
    Route::get('transaction', [\App\Http\Controllers\BackEnd\CandidateController::class, 'transaction'])->name('transaction');
    Route::resource('examination','\App\Http\Controllers\BackEnd\ExaminationController');
});
// Admin End

// SSLCOMMERZ Start
Route::get('/example1', [\App\Http\Controllers\SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [\App\Http\Controllers\SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [\App\Http\Controllers\SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [\App\Http\Controllers\SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [\App\Http\Controllers\SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [\App\Http\Controllers\SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [\App\Http\Controllers\SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [\App\Http\Controllers\SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
