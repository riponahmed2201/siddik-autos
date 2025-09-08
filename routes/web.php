<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\BookingController;
use App\Http\Controllers\Web\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('pricing', [HomeController::class, 'showPricing']);
Route::get('services', [HomeController::class, 'showServices']);
Route::post('booking-request', [BookingController::class, 'store'])->name('booking.request');
Route::get('about-us', [HomeController::class, 'showAboutUs']);
Route::get('contact-us', [HomeController::class, 'showContactUs']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.submit');
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('blog/details/{slug}', [HomeController::class, 'showBlogDetails']);
