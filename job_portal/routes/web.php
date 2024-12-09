<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Employer\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListJobController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\SearchJobController;
use App\Http\Controllers\ViewJobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Middleware\Authentication;

Route::get('/', [AuthController::class, 'home'])-> name('home');
Route::get('/login', [AuthController::class, 'index'])-> name('login_view');
Route::get('/signup', [AuthController::class, 'signup_view'])-> name('signup_view');
Route::post('/signup', [AuthController::class, 'signup'])-> name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/List-job', [ListJobController::class, 'list_jobview'])->name('list_jobview');
Route::get('/About-page', [AboutController::class, 'about'])->name('about');
Route::get('/Contact-page', [ContactController::class, 'contact'])->name('contact');
Route::get('/View-Job/{id}', [ViewJobController::class, 'viewjob'])->name('viewjob');
Route::get('/Search-Job', [SearchJobController::class, 'searchjob'])->name('searchjob');

Route::middleware('Auth')->group(function(){
    Route::get('/Post-Job/{id}', [PostJobController::class, 'postjob'])->name('postjob');
    Route::post('/response', [PostJobController::class, 'submit'])->name('submit');
    Route::get('/editjob/{id}', [PostJobController::class, 'editjob'])->name('editjob');
    Route::post('/editjob/{id}', [PostJobController::class, 'editjobcontroller'])->name('editjob');
    Route::get('/deletejob/{id}', [PostJobController::class, 'deletejob'])->name('deletejob');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/publish-job', [JobController::class, 'addjobview'])->name('addjobview');
    Route::get('/job/{view}', [JobController::class, 'listjobview'])->name('listjobview');
    Route::post('/store-job', [JobController::class, 'store'])->name('store');
    Route::get('/Active-job', [JobController::class, 'avaliblejobview'])->name('avaliblejobview');
    Route::get('/All-job', [JobController::class, 'alljobview'])->name('alljobview');
    Route::get('/User-profile', [ProfileController::class, 'profileview'])->name('profileview');
    Route::get('/User-Notification', [NotificationController::class, 'notificationview'])->name('notificationview');
    Route::post('/User-profile', [ProfileController::class, 'submitForm'])->name('profile_edit');
    Route::post('/edit_password', [ProfileController::class, 'changePassword'])->name('edit_password');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/application-view', [ApplicationController::class, 'applicationview'])->name('applicationview');
});
