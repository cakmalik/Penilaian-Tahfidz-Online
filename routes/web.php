<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{ExamCategoryController,GradeController,StudentController,TeacherController,ExamResultController,InstitutionController};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>['role:super-admin']], function(){
    Route::resource('institutions', InstitutionController::class);
});

Route::group(['middleware' => ['role:teacher|admin|super-admin']], function () {

    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
    
    Route::get('grades/choose', [GradeController::class,'chooseGrade'])->name('grades.choose');
    Route::post('grades/selected', [GradeController::class,'selectedGrade'])->name('grades.selected');
    Route::resource('grades', GradeController::class);
    
    Route::resource('category', ExamCategoryController::class);
    Route::resource('result', ExamResultController::class);
    
    Route::post('student/import', [StudentController::class,'importStudent'])->name('student.import');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/test/student',[ExamResultController::class,'testStudent'])->name('test.student');
});