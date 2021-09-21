<?php

use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Models\Exam;
use Illuminate\Support\Facades\Route;

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
Route::view('/whoAreYou','auth.register')->name('whoAreYou');
Route::view('/approvalNeeded','approve')->name('approval');
Route::get('/profile',[UserController::class,'profile'])->name('profile');

/************************ approval of Users  *********************************************/
Route::get('/approveUsers',[UserController::class,'viewUnapproved'])->name('viewUnapproved');
Route::post('/approved/{id}',[UserController::class,'approveUser'])->name('approveUser');
Route::post('/declined/{id}',[UserController::class,'deleteUser'])->name('deleteUser');


//***********************  student Routes **********************************************/
Route::get('/regStudent',[UserController::class,'regStudentIndex'])->name('regStudentIndex');
Route::post('/regStudent',[UserController::class,'regStudent'])->name('regStudent');
Route::get('/',[UserController::class,'login'])->name('loginIndex');
Route::post('/checkLogin',[UserController::class,'checkLogin'])->name('checkLogin');
Route::post('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/viewTeacherList',[UserController::class,'viewTeachers'])->name('viewTeachers');

//*********************** Teacher Routes ************************************************/
Route::get('/regDoctor',[UserController::class,'regDoctorIndex'])->name('regDoctorIndex');
Route::post('/regDoctor',[UserController::class,'regDoctor'])->name('regDoctor');


//***********************  Question Routes **********************************************/
Route::get('/addQuestion/{id}',[QuestionController::class,'index'])->name('addQuestionIndex');
Route::post('/addQuestion',[QuestionController::class,'store'])->name('addQuestion');
Route::get('/questionType/{id}',[QuestionController::class,'questionType'])->name('questionType');
Route::get('/addTF/{id}',[QuestionController::class,'mcqIndex'])->name('addTF');
Route::get('/questionBank',[QuestionController::class,'questionBank'])->name('questionBank');

//***********************  Exam Routes **********************************************/
Route::view('/addExam','xtreme-html.ltr.index')->name('addExamIndex');
Route::post('/addExam',[ExamController::class,'addExam'])->name('addExam');
Route::get('/exam/{id}',[ExamController::class,'index'])->name('examIndex');
Route::post('/checkExam',[ExamController::class,'checkAnswer'])->name('examCheck');
Route::get('/exams',[ExamController::class,'showExam'])->name('showExam');
//***********************  Question Routes **********************************************/

Route::view('/test', 'score');
