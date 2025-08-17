<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FeedbackController;
use App\Models\Publication;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/abouts', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'service']);
Route::get('/publications', [HomeController::class, 'publication']);
Route::get('/contacts', [HomeController::class, 'contact']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Feedback
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

//Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('slider', SliderController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('publication', PublicationController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);

    Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('admin.feedbacks');
});
