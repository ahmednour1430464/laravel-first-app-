<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('auth/social', [LoginController::class, 'show'])->name('social.login');
Route::get('oauth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
Route::get('logout', [LoginController::class, 'logout']);

//profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::delete('/profile/delete/{id}', [ProfileController::class, 'deleteAccount'])->name('profile.delete');

// student dashboard
Route::get('/dashboard/student', [DashboardController::class, 'showDashboard'])->name('student_dashboard');
Route::get('/dashboard/student/enroll/{id}', [DashboardController::class, 'enrollCourse'])->name('student_dashboard.enroll');

//teacher dashboard
Route::get('/dashboard/teacher', [DashboardController::class, 'showDashboard'])->name('teacher_dashboard');
Route::get('/dashboard/teacher/course/create', [DashboardController::class, 'createCourse'])->name('teacher_dashboard.create');
Route::post('/dashboard/teacher/course/store', [DashboardController::class, 'storeCourse'])->name('teacher_dashboard.store');
Route::get('/dashboard/course/edit/{id}', [DashboardController::class, 'editCourse'])->name('course.edit');
Route::get('/dashboard/course/show/{id}', [DashboardController::class, 'showCourse'])->name('course.show');
Route::put('/dashboard/course/update/{id}', [DashboardController::class, 'updateCourse'])->name('course.update');
Route::get('/dashboard/course/delete/{id}', [DashboardController::class, 'deleteCourse'])->name('course.delete');

//feedbacks
Route::get('/dashboard/feedback/{id}', [FeedbackController::class,'feedbackGive'])->name('feedback.give');
Route::post('/dashboard/feedback/', [FeedbackController::class,'feedbackInsert'])->name('feedback.insert');

Route::get('/', [HomeController::class, 'index'])->name('home');

//nav bar
Route::get('/home', [HomeController::class, 'index']);
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/about', [HomeController::class, 'about'])->name('about');

