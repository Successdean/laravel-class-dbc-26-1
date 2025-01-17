<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgrammeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout.master');
});

// Courses
Route::get('/courses', [CourseController::class, 'showAllCourses']);
Route::get('/courses/add', [CourseController::class, 'showAddCoursePage']);
Route::get('/courses/{id}/edit', [CourseController::class, 'showEditCoursePage'])->name('updateCourse');
Route::post('/courses', [CourseController::class, 'saveCourse']);
Route::put('/courses', [CourseController::class, 'updateCourse']);
Route::delete('/courses', [CourseController::class, 'deleteCourse']);




// Programmes
Route::get('/programmes', [ProgrammeController::class, 'showAllProgrammes']);
Route::get('/programmes/add', [ProgrammeController::class, 'showAddProgrammePage']);
Route::post('/programmes', [ProgrammeController::class, 'saveProgramme']);


