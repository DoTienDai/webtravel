<?php

use App\Http\Controllers\CategoriseController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

use App\Models\Gallery;

//User
Route::get('/',[IndexController::class, 'index'])->name('home');
Route::get('/tour/{slug}',[IndexController::class, 'tour'])->name('tour');
Route::get('/chi-tiet-tour/{slug}',[IndexController::class, 'detail_tour'])->name('chi-tiet-tour');


//admin
//login
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('admin');

//Categorise
Route::resource('categories', CategoriseController::class);

//Categorise
Route::resource('tours',     TourController::class);
//Gallery
Route::resource('gallery',     GalleryController::class);
