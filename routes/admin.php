<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PasswordChangeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VehicleCategoryController;
use App\Http\Controllers\Admin\VehicleFeatureController;
use Illuminate\Support\Facades\Route;

//Login
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('admin')->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    //Password
    Route::get('password-change', [PasswordChangeController::class, 'passwordChange'])->name('passwordChange');
    Route::put('password/update', [PasswordChangeController::class, 'updatePassword'])->name('password.update');

    //Profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');

    //Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Car Rental Management
    Route::resource('vehicle-types', VehicleTypeController::class);
    Route::resource('vehicle-categories', VehicleCategoryController::class);
    Route::resource('vehicle-features', VehicleFeatureController::class);
    Route::resource('destinations', DestinationController::class);
    Route::resource('pricing', PricingController::class);
    Route::resource('bookings', AdminBookingController::class)->only(['index','show','edit','update','destroy']);
    Route::resource('blogs', BlogController::class);
    Route::resource('testimonials', TestimonialController::class);

    // Route::resource('services', ServiceController::class);
    // Route::resource('blogs', BlogController::class);
    // Route::resource('partners', PartnerController::class);

    // //User
    // Route::resource('users', UserController::class);
});
