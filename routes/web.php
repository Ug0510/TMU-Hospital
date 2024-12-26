<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






Route::get('/', [HospitalController::class, 'home'])->name('home');
Route::get('/contact-us', [HospitalController::class, 'contact_us'])->name('contact.us');
Route::get('/about-us', [HospitalController::class, 'about_us'])->name('about.us');
Route::get('/blog', [HospitalController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HospitalController::class, 'blog_details'])->name('blog.details');
Route::get('/book-appointment', [HospitalController::class, 'book_appointment'])->name('book.appointment');
Route::get('/our-doctors', [HospitalController::class, 'our_doctors'])->name('our.doctors');

//Super Speciality Routes
Route::get('/speciality/{slug}', [DepartmentController::class, 'speciality'])->name('speciality');

// Route::get('/cardiology', [DepartmentController::class, 'cardiology'])->name('cardiology');
// Route::get('/nephrology', [DepartmentController::class, 'nephrology'])->name('nephrology');
// Route::get('/neurology', [DepartmentController::class, 'neurology'])->name('neurology');
// Route::get('/neuro-surgery', [DepartmentController::class, 'neuro_surgery'])->name('neuro.surgery');
// Route::get('/ctvs', [DepartmentController::class, 'ctvs'])->name('ctvs');
// Route::get('/plastic-surgery', [DepartmentController::class, 'plastic_Surgery'])->name('plastic.surgery');
// Route::get('/gastroenterology', [DepartmentController::class, 'gastroenterology'])->name('gastroenterology');
// Route::get('/urology', [DepartmentController::class, 'urology'])->name('urology');


//Multi Speciality Routes
Route::get('/department/{slug}', [DepartmentController::class, 'department'])->name('department');

// Route::get('/ent', [DepartmentController::class, 'ent'])->name('ent');
// Route::get('/ophthalmology', [DepartmentController::class, 'ophthalmology'])->name('ophthalmology');
// Route::get('/respiratory-medicine', [DepartmentController::class, 'respiratory_medicine'])->name('respiratory.medicine');
// Route::get('/psychitary', [DepartmentController::class, 'psychitary'])->name('psychitary');
// Route::get('/dermatology', [DepartmentController::class, 'dermatology'])->name('dermatology');
// Route::get('/radiology', [DepartmentController::class, 'radiology'])->name('radiology');
// Route::get('/general-medicine', [DepartmentController::class, 'general_medicine'])->name('general.medicine');
// Route::get('/general-surgery', [DepartmentController::class, 'general_surgery'])->name('general.surgery');
// Route::get('/orthopaedics', [DepartmentController::class, 'orthopaedics'])->name('orthopaedics');
// Route::get('/obg', [DepartmentController::class, 'obg'])->name('obg');
// Route::get('/pediatrics', [DepartmentController::class, 'pediatrics'])->name('pediatrics');

//Search route
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Admin Routes

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin-departments', [AdminController::class, 'departments'])->name('departments');
Route::POST('/add-new-department', [AdminController::class, 'new_departments'])->name('new.departments');

// Doctors
Route::get('/admin-department-doctors', [AdminController::class, 'doctors'])->name('doctors');
Route::POST('/add-new-doctors', [AdminController::class, 'new_doctors'])->name('new.doctors');
Route::POST('/update-doctors/{doctor_id}', [AdminController::class, 'update_doctors'])->name('update.doctors');
Route::get('/delete-doctors/{doctor_id}', [AdminController::class, 'delete_doctors'])->name('delete.doctors');

// Hods
Route::get('/admin-department-hods', [AdminController::class, 'hods'])->name('hods');
Route::post('/add-new-hods', [AdminController::class, 'new_hods'])->name('new.hods');
Route::get('/get-doctors-by-department/{department_id}', [AdminController::class, 'getDoctorsByDepartment'])->name('get.doctors.by.department');

Route::post('/update-hods/{hod_id}', [AdminController::class, 'update_hods'])->name('update.hods');
Route::get('/delete-hods/{hod_id}', [AdminController::class, 'delete_hods'])->name('delete.hods');


