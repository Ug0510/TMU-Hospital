<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/Contact-Us', function () {
    return view('contact');
});

route::get('/contact-us', function () {
    return view('contact');
});

route::get('/About-Us', function () {
    return view('about');
});

Route::get('/about-us', function () {
    return view('about');
});

route::get('/Blog', function () {
    return view('blog');
});

route::get('/blog', function () {
    return view('blog');
});

route::get('/Blog-Details', function () {
    return view('blog_details');
});

route::get('/blog-details', function () {
    return view('blog_details');
});

route::get('/test', function () {
    return view('test');
});

route::get('/services/test', function () {
    return view('test');
});


Route::get('/{department}', [DepartmentController::class, 'show'])->name('department.show');


