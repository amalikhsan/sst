<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityValidator;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InterViewController;
use App\Http\Controllers\ScorePimpinanController;
use App\Http\Controllers\InterViewQuotaController;
use App\Http\Controllers\SelfAssessmentController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\SelfAssessmentTwoController;
use App\Http\Controllers\ActivityTimpsikologController;
use App\Http\Controllers\InterViewTimpsikologController;
use App\Http\Controllers\SelfAssessmentTimpsikologController;
use App\Http\Controllers\SelfAssessmentTwoTimpsikologController;

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
        Route::get('selfassessment/create', [SelfAssessmentController::class, 'create'])->name('selfassessment/create');
        Route::post('selfassessment/store', [SelfAssessmentController::class, 'store'])->name('selfassessment/store');
        Route::get('selfassessment/{id}/edit', [SelfAssessmentController::class, 'edit'])->name('selfassessment/edit');
        Route::put('selfassessment/update/{id}', [SelfAssessmentController::class, 'update'])->name('selfassessment/update');
        Route::delete('selfassessment/{id}', [SelfAssessmentController::class, 'destroy'])->name('selfassessment/delete');
        // student selfassessment
        Route::get('selfassessmenttwo', [SelfAssessmentTwoController::class, 'index'])->name('selfassessmenttwo');
        Route::get('selfassessmenttwo/create', [SelfAssessmentTwoController::class, 'create'])->name('selfassessmenttwo/create');
        Route::post('selfassessmenttwo/store', [SelfAssessmentTwoController::class, 'store'])->name('selfassessmenttwo/store');
        Route::get('selfassessmenttwo/{id}/edit', [SelfAssessmentTwoController::class, 'edit'])->name('selfassessmenttwo/edit');
        Route::put('selfassessmenttwo/update/{id}', [SelfAssessmentTwoController::class, 'update'])->name('selfassessmenttwo/update');
        Route::delete('selfassessmenttwo/{id}', [SelfAssessmentTwoController::class, 'destroy'])->name('selfassessmenttwo/delete');
        // student interview
        Route::get('interview', [InterViewController::class, 'index'])->name('interview');
        Route::get('interview/create', [InterViewController::class, 'create'])->name('interview/create');
        Route::post('interview', [InterViewController::class, 'store'])->name('interview/store');
        Route::get('interview/{id}/edit', [InterViewController::class, 'edit'])->name('interview/edit');
        Route::put('interview/update/{id}', [InterViewController::class, 'update'])->name('interview/update');
        Route::delete('interview/{id}', [InterViewController::class, 'destroy'])->name('interview/delete');

        // student profile
        Route::get('studentprofile', [StudentProfileController::class, 'index'])->name('studentprofile');
        Route::get('studentprofile/create', [StudentProfileController::class, 'create'])->name('studentprofile/create');
        Route::post('studentprofile', [StudentProfileController::class, 'store'])->name('studentprofile/store');
        Route::get('studentprofile/{id}/edit', [StudentProfileController::class, 'edit'])->name('studentprofile/edit');
        Route::put('studentprofile/update/{id}', [StudentProfileController::class, 'update'])->name('studentprofile/update');
        Route::delete('studentprofile/{id}', [StudentProfileController::class, 'destroy'])->name('studentprofile/delete');

        // setudent activity report
        Route::get('activityreport', [ActivityController::class, 'index'])->name('activityreport');
        Route::get('activityreport/create', [ActivityController::class, 'create'])->name('activityreport/create');
        Route::post('activityreport', [ActivityController::class, 'store'])->name('activityreport/store');
        Route::get('activityreport/{id}/edit', [ActivityController::class, 'edit'])->name('activityreport/edit');
        Route::put('activityreport/update/{id}', [ActivityController::class, 'update'])->name('activityreport/update');
        Route::delete('activityreport/{id}', [ActivityController::class, 'destroy'])->name('selfassessment/delete');
    });

    Route::middleware(['can:timpsikolog'])->group(function () {
        // student selfassessment
        Route::get('selfassessment-timpsikolog', [SelfAssessmentTimpsikologController::class, 'index'])->name('selfassessment-timpsikolog');
        // // student selfassessment
        Route::get('selfassessmenttwo-timpsikolog', [SelfAssessmentTwoTimpsikologController::class, 'index'])->name('selfassessmenttwo-timpsikolog');
        // // setudent activity report
        Route::get('activityreport-timpsikolog', [ActivityTimpsikologController::class, 'index'])->name('activityreport-timpsikolog');
        // student interview
        Route::get('interview-timpsikolog', [InterViewTimpsikologController::class, 'index'])->name('interview-timpsikolog');
        Route::get('interview-timpsikolog/create', [InterViewTimpsikologController::class, 'create'])->name('interview-timpsikolog/create');
        Route::post('interview-timpsikolog', [InterViewTimpsikologController::class, 'store'])->name('interview-timpsikolog/store');
        Route::get('interview-timpsikolog/{id}/edit', [InterViewTimpsikologController::class, 'edit'])->name('interview-timpsikolog/edit');
        Route::put('interview-timpsikolog/update/{id}', [InterViewTimpsikologController::class, 'update'])->name('interview-timpsikolog/update');
        Route::delete('interview-timpsikolog/{id}', [InterViewTimpsikologController::class, 'destroy'])->name('interview-timpsikolog/delete');
    });

    Route::middleware(['can:validator'])->group(function () {
        // validator activity report
        Route::get('activityreport-validator', [ActivityValidator::class, 'index'])->name('activityreport-validator');
        Route::get('activityreport-validator/{id}/edit', [ActivityValidator::class, 'edit'])->name('activityreport-validator/edit');
        Route::put('activityreport-validator/update/{id}', [ActivityValidator::class, 'update'])->name('activityreport-validator/update');
    });

    Route::middleware(['can:pimpinan'])->group(function () {
        // score
        Route::get('score-pimpinan', [ScorePimpinanController::class, 'index'])->name('score-pimpinan');
    });

    Route::middleware(['can:superadmin'])->group(function () {
        // every superadmin
        Route::resource('user', UserController::class);
        // interview quota
        Route::get('interviewquota', [InterViewQuotaController::class, 'index'])->name('interviewquota');
        Route::get('interviewquota/create', [InterViewQuotaController::class, 'create'])->name('interviewquota/create');
        Route::post('interviewquota', [InterViewQuotaController::class, 'store'])->name('interviewquota/store');
        Route::get('interviewquota/{id}/edit', [InterViewQuotaController::class, 'edit'])->name('interviewquota/edit');
        Route::put('interviewquota/update/{id}', [InterViewQuotaController::class, 'update'])->name('interviewquota/update');
        Route::delete('interviewquota/{id}', [InterViewQuotaController::class, 'destroy'])->name('interviewquota/delete');
    });
});
