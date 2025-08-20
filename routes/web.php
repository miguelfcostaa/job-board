<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MyJobApplicationController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\MyJobController;
use App\Http\Controllers\CreateAuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', fn() => to_route('jobs.index'));

Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)
    ->only(['create', 'store']);

Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])
->name('auth.destroy');

Route::get('create-account', fn() => to_route('create_auth.create'))->name('create-account');
Route::resource('create_auth', CreateAuthController::class)
    ->only(['create', 'store']);

    
Route::resource('profile', ProfileController::class);


Route::middleware('auth')->group(function() {
    Route::resource('job.application', JobApplicationController::class)
        ->only(['create', 'store', 'destroy']);

    Route::resource('my-job-applications', MyJobApplicationController::class)
        ->only(['index', 'destroy']);

    Route::resource('employer', EmployerController::class)
        ->only(['create', 'store']);

    Route::middleware('employer')->group(function() {
        Route::resource('my_job', MyJobController::class);
        Route::put('my_job/{myJob}/restore', [MyJobController::class, 'restore'])->name('my_job.restore');
    });
});