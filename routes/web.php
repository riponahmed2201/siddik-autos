<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'showAboutUs']);
Route::get('contact-us', [HomeController::class, 'showContactUs']);
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('blog/details/{slug}', [HomeController::class, 'showBlogDetails']);
