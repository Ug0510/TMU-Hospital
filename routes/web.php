<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SearchController;

Route::get('/', [HospitalController::class, 'home'])->name('home');
Route::get('/contact-us', [HospitalController::class, 'contact_us'])->name('contact.us');
Route::get('/about-us', [HospitalController::class, 'about_us'])->name('about.us');
Route::get('/blog', [HospitalController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HospitalController::class, 'blog_details'])->name('blog.details');

//Super Speciality Routes 
Route::get('/cardiology', [DepartmentController::class, 'cardiology'])->name('cardiology');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/{department}', [DepartmentController::class, 'show'])->name('department.show');

