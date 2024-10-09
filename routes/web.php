<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::resource('resumes', App\Http\Controllers\ResumeController::class);

    Route::resource('education', App\Http\Controllers\EducationController::class);

    Route::resource('experiences', App\Http\Controllers\ExperienceController::class);

    Route::resource('projects', App\Http\Controllers\ProjectController::class);

    Route::resource('skills', App\Http\Controllers\SkillController::class);

    Route::resource('languages', App\Http\Controllers\LanguageController::class);

    Route::resource('personals', App\Http\Controllers\PersonalController::class);

});