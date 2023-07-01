<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentTypeController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usersController;
use App\Models\User;
use App\Models\appointment;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/about',[frontendController::class,'about'])->name('frontend.about');
Route::get('/contact',[frontendController::class,'contact'])->name('frontend.contact');
Route::get('/news',[frontendController::class,'news'])->name('frontend.news');
Route::get('/patient',[frontendController::class,'patient'])->name('frontend.patients');
Route::get('/service',[frontendController::class,'service'])->name('frontend.services');
Route::get('/profile/show',[frontendController::class,'showProfile'])->name('show.profile');
Route::post('/profile/{id}',[frontendController::class,'profile'])->name('update.profile');


// Frontend Adding Routes
Route::post('/create_appointment',[HomeController::class,'home_appointment'])->name('add.appointment');
Route::post('/create_contactAppointment',[HomeController::class,'contact_appointment'])->name('add.contact_appointment');
Route::get('/MyAppointment/{id}',[HomeController::class,'showMyAppointments'])->name('showMyAppointments');
Route::get('/deleteMyAppointment/{id}',[HomeController::class,'deleteMyAppointments'])->name('deleteMyAppointments');

/// Backend Routes ///

Route::get('/Admin/profile',[HomeController::class,'showAdminProfile'])->name('Admin.profile');
Route::post('/Admin/profile/{id}',[HomeController::class,'updateAdminProfile'])->name('Admin.updateProfile');


// Users Routes


Route::get('/users',[usersController::class,'index'])->name('users.index');
Route::get('/user/create',[usersController::class,'create'])->name('users.create');
Route::post('/user/create',[usersController::class,'store'])->name('users.store');
Route::get('/user/show/{id}',[usersController::class,'show'])->name('users.show');
Route::get('/user/edit/{id}',[usersController::class,'edit'])->name('users.edit');
Route::put('/user/update/{id}',[usersController::class,'update'])->name('users.update');
Route::get('/user/destroy/{id}',[usersController::class,'destroy'])->name('users.destroy');

// Doktors Routes
Route::get('/doktors',[DoktorController::class,'index'])->name('doktors.index');
Route::get('/doktor/create',[DoktorController::class,'create'])->name('doktors.create');
Route::post('/doktor/create',[DoktorController::class,'store'])->name('doktors.store');
Route::get('/doktor/show/{id}',[DoktorController::class,'show'])->name('doktors.show');
Route::get('/doktor/edit/{id}',[DoktorController::class,'edit'])->name('doktors.edit');
Route::put('/doktor/update/{id}',[DoktorController::class,'update'])->name('doktors.update');
Route::get('/doktor/destroy/{id}',[DoktorController::class,'destroy'])->name('doktors.destroy');

// Posts Routes
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/post/create',[PostController::class,'create'])->name('posts.create');
Route::post('/post/create',[PostController::class,'store'])->name('posts.store');
Route::get('/post/show/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::put('/post/update/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('/post/destroy/{id}',[PostController::class,'destroy'])->name('posts.destroy');

// Appointment Category Routes
Route::get('/appointmentsCategory',[AppointmentTypeController::class,'index'])->name('appointmentsCategory.index');
Route::get('/appointmentCategory/create',[AppointmentTypeController::class,'create'])->name('appointmentsCategory.create');
Route::post('/appointmentCategory/create',[AppointmentTypeController::class,'store'])->name('appointmentsCategory.store');
Route::get('/appointmentCategory/edit/{id}',[AppointmentTypeController::class,'edit'])->name('appointmentsCategory.edit');
Route::put('/appointmentCategory/update/{id}',[AppointmentTypeController::class,'update'])->name('appointmentsCategory.update');
Route::get('/appointmentCategory/destroy/{id}',[AppointmentTypeController::class,'destroy'])->name('appointmentsCategory.destroy');

// Appointment Routes
Route::get('/appointments',[AppointmentController::class,'index'])->name('appointments.index');
Route::get('/appointment/create',[AppointmentController::class,'create'])->name('appointments.create');
Route::post('/appointment/create',[AppointmentController::class,'store'])->name('appointments.store');
Route::put('/appointment/update/{id}',[AppointmentController::class,'update'])->name('Appointments.Change');
Route::get('/appointment/show/{id}',[AppointmentController::class,'show'])->name('appointments.show');
Route::get('/appointment/destroy/{id}',[AppointmentController::class,'destroy'])->name('appointments.destroy');

// Messages Routes
Route::get('/Messages',[MessageController::class,'index'])->name('Messages.index');
Route::post('/Message/create',[MessageController::class,'store'])->name('Messages.create');
Route::get('/Message/destroy/{id}',[MessageController::class,'destroy'])->name('Messages.destroy');
Route::get('/Message/All/{id}',[HomeController::class,'showMyMessages'])->name('Messages.show');
Route::put('/Message/Update/{id}',[MessageController::class,'update'])->name('Messages.update');
Route::get('/Message/delete/{id}',[HomeController::class,'deleteMyMessage'])->name('Messages.delete');








// Authentication Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
