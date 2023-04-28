<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;





Route::get('/', function () {
    return view('welcome');
});
Route::get('/desc', function () {
    return view('desc');
});

Route::get('/register', [AuthController::class,'loadRegister']);
Route::post('/register', [AuthController::class,'studentRegister'])->name('studentRegister');



Route::get('/login',function(){
  return redirect('/login');
});



Route::get('/login',[AuthController::class, 'loadLogin']);
Route::post('/login',[AuthController::class, 'userLogin'])->name('userLogin');






Route::get('/logout',[AuthController::class, 'logout']);


Route::get('/forget-password',[AuthController::class, 'forgetPasswordLoad']);
Route::post('/forget-password',[AuthController::class, 'forgetPassword'])->name('forgetPassword');




Route::get('/reset-password',[AuthController::class, 'resetPasswordLoad']);
Route::post('/reset-password',[AuthController::class, 'resetPassword'])->name('resetPassword');




Route::group(['middleware'=>['web','checkAdmin']],function(){
  Route::get('/admin/dashboard',[AuthController::class, 'adminDashboard']);
  
  
  //Subjects route
  Route::post('/add-subject',[AdminController::class,'addSubject'])->name('addSubject');
  Route::post('/edit-subject',[AdminController::class,'editSubject'])->name('editSubject');
  Route::post('/delete-subject',[AdminController::class,'deleteSubject'])->name('deleteSubject');
  
  


  //Students routing
  Route::get('/admin/students',[AdminController::class, 'studentsDashboard']);
  Route::post('/add-student',[AdminController::class, 'addStudent'])->name('addStudent');
  Route::post('/edit-student',[AdminController::class, 'editStudent'])->name('editStudent');
  Route::post('/delete-student',[AdminController::class, 'deleteStudent'])->name('deleteStudent');
  


  
  //Doctors routing
  Route::get('/admin/doctors',[AdminController::class, 'doctorsDashboard']);
  Route::post('/add-doctor',[AdminController::class, 'addDoctor'])->name('addDoctor');
  Route::post('/edit-doctor',[AdminController::class, 'editDoctor'])->name('editDoctor');
  Route::post('/delete-doctor',[AdminController::class, 'deleteDoctor'])->name('deleteDoctor');

});







Route::group(['middleware'=>['web','checkDoctor']],function(){
  Route::get('/doctor/dashboard',[AuthController::class, 'doctorDashboard']);
  





      //Exam route
      Route::get('/doctor/exam',[DoctorController::class,'examDashboard']);
      Route::post('/add-exam',[DoctorController::class,'addExam'])->name('addExam');
      Route::get('/get-exam-detail/{id}',[DoctorController::class,'getExamDetail'])->name('getExamDetail');
      Route::post('/update-exam',[DoctorController::class,'updateExam'])->name('updateExam');
      Route::post('/delete-exam',[DoctorController::class,'deleteExam'])->name('deleteExam');


      
      
      //Q&A Route
      Route::get('/doctor/qna-ans',[DoctorController::class,'qnaDashboard']);
      Route::post('/add-qna-ans',[DoctorController::class,'addQna'])->name('addQna');
      Route::get('/add-qna-details',[DoctorController::class,'getQnaDetails'])->name('getQnaDetails');
      Route::get('/delete-ans',[DoctorController::class,'deleteAns'])->name('deleteAns');
      Route::post('/update-qna-ans',[DoctorController::class,'updateQna'])->name('updateQna');
      Route::post('/delete-qna-ans',[DoctorController::class,'deleteQna'])->name('deleteQna');

      //qna exams routing
      Route::get('/get-questions',[DoctorController::class, 'getQuestions'])->name('getQuestions');
      Route::post('/add-questions',[DoctorController::class, 'addQuestions'])->name('addQuestions');
      Route::get('/get-exam-questions',[DoctorController::class, 'getExamQuestions'])->name('getExamQuestions');
      Route::get('/delete-exam-questions',[DoctorController::class, 'deleteExamQuestions'])->name('deleteExamQuestions');


      //exam marks routes
      Route::get('/doctor/marks',[DoctorController::class,'loadMarks']);
      Route::post('/update-marks',[DoctorController::class,'updateMarks'])->name('updateMarks');

      //exam review routes
      Route::get('/doctor/review-exams',[DoctorController::class,'reviewExams'])->name('reviewExams');
      Route::get('/get-reviewed-qna',[DoctorController::class,'reviewQna'])->name('reviewQna');

      Route::post('/approved=qna',[DoctorController::class,'approvedQna'])->name('approvedQna');

});



Route::group(['middleware'=>['web','checkStudent']],function(){
  Route::get('/dashboard',[AuthController::class, 'loadDashboard']);
  Route::get('/exam/{id}',[ExamController::class, 'loadExamDashboard']);

  Route::post('/exam-submit',[ExamController::class,'examSubmit'])->name('examSubmit');

  Route::get('/results',[ExamController::class,'resultDashboard'])->name('resultDashboard');

  Route::get('/review-student-qna',[ExamController::class,'reviewQna'])->name('reviewStudentQna');
});