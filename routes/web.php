<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InterViewController;
use App\Http\Controllers\SelfAssessmentController;
use App\Http\Controllers\StudentProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// no registration
Route::get('/register', function(){
    return redirect()->to('/');
})->middleware('guest');

// login page
Route::get('/', function () {
    return view('pages.auth.login');
})->middleware(['guest']);

// auth login
Route::middleware(['auth', 'verified'])->group(function() {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/change-profile-avatar', [DashboardController::class, 'changeAvatar'])->name('change-profile-avatar');
    Route::delete('/remove-profile-avatar', [DashboardController::class, 'removeAvatar'])->name('remove-profile-avatar');

    Route::middleware(['can:superadmin'])->group(function() {
        // every superadmin
        Route::resource('user', UserController::class);
    });

    Route::middleware(['can:mahasiswa'])->group(function () {
        // student selfassessment
        Route::get('selfassessment', [SelfAssessmentController::class, 'index'])->name('selfassessment');
        Route::get('selfassessment-create', [SelfAssessmentController::class, 'create'])->name('selfassessment-create');
        Route::post('selfassessment', [SelfAssessmentController::class, 'store'])->name('selfassessment-store');
        Route::get('selfassessment/{id}/edit', [SelfAssessmentController::class, 'edit'])->name('activity-edit');
        Route::put('selfassessment-update/{id}', [SelfAssessmentController::class, 'update'])->name('selfassessment-update');
        Route::delete('selfassessment/{id}', [SelfAssessmentController::class, 'destroy'])->name('selfassessment-delete');

        // student interview
        Route::get('interview', [InterViewController::class, 'index'])->name('interview');
        Route::get('interview-create', [InterViewController::class, 'create'])->name('interview-create');
        Route::post('interview', [InterViewController::class, 'store'])->name('interview-store');
        Route::get('interview/{id}/edit', [InterViewController::class, 'edit'])->name('activity-edit');
        Route::put('interview-update/{id}', [InterViewController::class, 'update'])->name('interview-update');
        Route::delete('interview/{id}', [InterViewController::class, 'destroy'])->name('interview-delete');

        // student profile
        Route::get('studentprofile', [StudentProfileController::class, 'index'])->name('studentprofile');
        Route::get('studentprofile-create', [StudentProfileController::class, 'create'])->name('studentprofile-create');
        Route::post('studentprofile', [StudentProfileController::class, 'store'])->name('studentprofile-store');
        Route::get('studentprofile/{id}/edit', [StudentProfileController::class, 'edit'])->name('activity-edit');
        Route::put('studentprofile-update/{id}', [StudentProfileController::class, 'update'])->name('studentprofile-update');
        Route::delete('studentprofile/{id}', [StudentProfileController::class, 'destroy'])->name('studentprofile-delete');

        // setudent activity report
        Route::get('activityreport', [ActivityController::class, 'index'])->name('activityreport');
        Route::get('activityreport-create', [ActivityController::class, 'create'])->name('activityreport-create');
        Route::post('activityreport', [ActivityController::class, 'store'])->name('activityreport-store');
        Route::get('activityreport/{id}/edit', [ActivityController::class, 'edit'])->name('activity-edit');
        Route::put('activityreport-update/{id}', [ActivityController::class, 'update'])->name('activityreport-update');
        Route::delete('activityreport/{id}', [ActivityController::class, 'destroy'])->name('selfassessment-delete');
    });
});
