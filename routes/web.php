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
Route::get('/nephrology', [DepartmentController::class, 'nephrology'])->name('nephrology');
Route::get('/neurology', [DepartmentController::class, 'neurology'])->name('neurology');
Route::get('/neuro-surgery', [DepartmentController::class, 'neuro_surgery'])->name('neuro.surgery');
Route::get('/ctvs', [DepartmentController::class, 'ctvs'])->name('ctvs');
Route::get('/plastic-surgery', [DepartmentController::class, 'plastic_Surgery'])->name('plastic.surgery');
Route::get('/gastroenterology', [DepartmentController::class, 'gastroenterology'])->name('gastroenterology');
Route::get('/urology', [DepartmentController::class, 'urology'])->name('urology');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/{department}', [DepartmentController::class, 'show'])->name('department.show');

