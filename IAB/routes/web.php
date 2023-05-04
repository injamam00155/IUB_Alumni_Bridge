<?php
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\CurrentStudent;
use App\Models\Alumni;
use App\Models\Post;
use App\Models\JobPost;
use App\Models\EventPost;
use App\Models\AwardPost;
use App\Models\QueryPost;
use App\Models\Comment;
use App\Models\Bookmark;

use App\Http\Controllers\loginController;
use App\Http\Controllers\routingController;
use App\Http\Controllers\postCreateController;
use Illuminate\Support\Facades\Route;

//login, signup and forgotPassword routes
Route::get('/', [routingController::class, 'index'])->name('index');
Route::get('/forgotPassword', [routingController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/signup', [routingController::class, 'signup'])->name('signup');

//alumni routing
Route::get('/alumni/dashboard', [routingController::class, 'alumniDashboard'])->name('alumni.dash');
Route::get('/alumni/awards', [routingController::class, 'alumniAwards'])->name('alumni.awards');
Route::get('/alumni/bookmarks', [routingController::class, 'alumniBookmarks'])->name('alumni.bookmarks');
Route::get('/alumni/events', [routingController::class, 'alumniEvents'])->name('alumni.events');
Route::get('/alumni/jobs', [routingController::class, 'alumniJobs'])->name('alumni.jobs');
Route::get('/alumni/profile', [routingController::class, 'alumniProfile'])->name('alumni.profile');

//admin routing
Route::get('/admin/dashboard', [routingController::class, 'adminDashboard'])->name('admin.dash');
Route::get('/admin/awards', [routingController::class, 'adminAwards'])->name('admin.awards');
Route::get('/admin/bookmarks', [routingController::class, 'adminBookmarks'])->name('admin.bookmarks');
Route::get('/admin/events', [routingController::class, 'adminEvents'])->name('admin.events');
Route::get('/admin/jobs', [routingController::class, 'adminJobs'])->name('admin.jobs');
Route::get('/admin/profile', [routingController::class, 'adminProfile'])->name('admin.profile');

//currentStudent routing
Route::get('/currentStudent/dashboard', [routingController::class, 'currentStudentDashboard'])->name('currentStudent.dash');
Route::get('/currentStudent/awards', [routingController::class, 'currentStudentAwards'])->name('currentStudent.awards');
Route::get('/currentStudent/bookmarks', [routingController::class, 'currentStudentBookmarks'])->name('currentStudent.bookmarks');
Route::get('/currentStudent/events', [routingController::class, 'currentStudentEvents'])->name('currentStudent.events');
Route::get('/currentStudent/jobs', [routingController::class, 'currentStudentJobs'])->name('currentStudent.jobs');
Route::get('/currentStudent/profile', [routingController::class, 'currentStudentProfile'])->name('currentStudent.profile');

//functional routing
Route::post('/store', [signupController::class, 'store'])->name('alumni.store');
Route::post('/validate', [loginController::class, 'loginCheck'])->name('validate.acc');
Route::post('/createQueryPost', [postCreateController::class, 'queryPostCreate'])->name('create.queryPost');
Route::post('/createJobPost', [postCreateController::class, 'jobPostCreate'])->name('create.jobPost');

