<?php

use App\Http\Controllers\RazorpayPaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CytologyController;

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
Route::get('/', 'homepage@index');

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/our-services', function () {
    return view('services');
});

Route::get('/dashboard', 'HomeController@index');

// authentication routes
Route::get('patient-login', 'Auth\AuthController@showPatientLoginForm');
Route::post('patient-login', 'Auth\AuthController@patientLogin');
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout');
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');
Route::get('forgot-password', 'Auth\AuthController@showForgotPasswordForm');
Route::post('forgot-password', 'Auth\AuthController@forgotPassword');
Route::get('reset-password/{user_id}/{token}', 'Auth\AuthController@showResetPasswordForm');
Route::post('reset-password', 'Auth\AuthController@resetPassword');
Route::get('change-password', 'Auth\AuthController@showChangePasswordForm');
Route::post('change-password', 'Auth\AuthController@changePassword');

Route::middleware('sentinel.auth')->group(function () {
// profile routes
Route::get('profile-edit', 'UserController@edit');
Route::post('profile-update', 'UserController@update');
Route::get('profile-view', 'UserController@profile_view');

// resource routes
Route::resource('user', 'UserController');
Route::resource('doctor', 'DoctorController');
Route::resource('patient', 'PatientController');
Route::resource('receptionist', 'ReceptionistController');
Route::resource('appointment', 'AppointmentController');
Route::resource('prescription', 'PrescriptionController');
Route::resource('invoice', 'InvoiceController');
Route::get('receptionist-view/{id}', 'ReceptionistController@receptionist_view');
Route::get('doctor-view/{id}', 'DoctorController@doctor_view');

//rupali code
Route::get('/getdoctor', 'DoctorController@getdoctor');

// appointment routes
Route::post('insertResultParameters', 'AppointmentController@InsertResultParameters');
Route::post('show-appointment-detail', 'AppointmentController@showAppointmentDetail');
Route::post('get-exam-parameter', 'AppointmentController@getExamParameter');
Route::get('appointmentList', 'AppointmentController@appointment_list');
Route::get('inserir-resultado', 'AppointmentController@appointmentdata');
Route::get('inserir-resultado1', 'AppointmentController@appointmentdata1');
Route::get('inserir-resultado2', 'AppointmentController@appointmentdata2');
Route::get('inserir-resultado3', 'AppointmentController@appointmentdata3');
Route::get('inserir-resultado4', 'AppointmentController@appointmentdata4');
Route::get('inserir-resultado5', 'AppointmentController@appointmentdata5');
Route::get('inserir-resultado6', 'AppointmentController@appointmentdata6');
Route::get('inserir-resultado7', 'AppointmentController@appointmentdata7');
Route::get('inserir-resultado8', 'AppointmentController@appointmentdata8');
Route::get('inserir-resultado9', 'AppointmentController@appointmentdata9');
Route::get('inserir-resultado10', 'AppointmentController@appointmentdata10');

Route::post('appointment-status/{id}', 'AppointmentController@appointment_status');
Route::post('updateStatus', 'AppointmentController@updateStatus');
Route::get('getMonthlyAppointments', 'ReportController@getMonthlyAppointments');
Route::post('patient-by-appointment', 'InvoiceController@patient_by_appointment')->name('patient_by_appointment');
Route::post('appointment-by-doctor', 'InvoiceController@appointment_by_doctor')->name('appointment_by_doctor');
Route::post('/doctor-by-day-time', 'AppointmentController@doctor_by_day_time')->name('doctor_by_day_time');
Route::post('/appointment-time-by-appointment-slot', 'AppointmentController@time_by_slot')->name('timeBySlot');
//Route::get('appointment-create', 'AppointmentController@appointment_create')->name('createAppointment');
Route::get('novo-atendimento', 'AppointmentController@appointment_create')->name('createAppointment');
Route::post('appointment-store', 'AppointmentController@appointment_store');
Route::get('/cal-appointment-show', 'AppointmentController@cal_appointment_show');
Route::get('pending-appointment', 'AppointmentController@pending_appointment');
Route::get('upcoming-appointment', 'AppointmentController@upcoming_appointment');
Route::get('complete-appointment', 'AppointmentController@complete_appointment');
Route::get('cancel-appointment', 'AppointmentController@cancel_appointment');
Route::get('today-appointment', 'AppointmentController@today_appointment');
Route::get('patient-appointment', 'AppointmentController@patient_appointment');

Route::get('all-appointment', 'AppointmentController@all_appointment');

//rupali code
Route::get('/appointment/create', 'AppointmentController@appointment_create')->name('appointment.create');
Route::get('novo-atendimento/view/{id}', 'AppointmentController@appointment_view')->name('appointment.view');
// Route::get('novo-atendimento/edit/{id}', 'AppointmentController@appointment_edit')->name('appointment.edit');
// Route::put('novo-atendimento/update/{id}', 'AppointmentController@appointment_update')->name('appointment.update');
Route::get('/getpatientlist', 'AppointmentController@getpatientlist')->name('getpatientlist');
Route::get('/getpatient/{id}', 'AppointmentController@getpatient');
Route::get('insert-result', 'AppointmentController@insertResult');
Route::get('appointment/exams/{id}', 'AppointmentController@patientexam')->name('appointment.exams');
Route::delete('appointment/remove/{id}', 'AppointmentController@appointment_remove')->name('appointment.remove');

// Revenue / Earning / calender
Route::get('getMonthlyUsersRevenue', 'ReportController@getMonthlyUsersRevenue');
Route::get('getMonthlyEarning', 'ReportController@getMonthlyEarning');
Route::get('calender', 'HomeController@calender');

// Notification routes
Route::get('notification-list', 'NotificationController@index');
Route::get('/notification/{id}', 'NotificationController@notification');
Route::post('/top-notification', 'NotificationController@notification_top');
Route::get('/notification-count', 'NotificationController@notificationCount');

// Time slot
Route::get('/time-edit/{id}', 'DoctorController@time_edit');
Route::post('/time-update/{id}', 'DoctorController@time_update');
Route::get('/time-update-ajax/{id}', 'DoctorController@time_update_ajax');

// Invoice routes
Route::get('invoice-email/{id}', 'EmailController@invoice_email_send');
Route::get('invoice-list', 'InvoiceController@invoice_list');
Route::get('invoice-view/{id}', 'InvoiceController@invoice_view');
Route::get('transaction', 'InvoiceController@transaction');

// Prescription routes
Route::get('prescription-email/{id}', 'EmailController@prescription_email_send');
Route::get('prescription-list', 'PrescriptionController@prescription_list');
Route::get('prescription-view/{id}', 'PrescriptionController@prescription_view');

// Pagination
Route::post('per-page-item', 'HomeController@per_page_item');


// Razorpay Payment
Route::post('payment-complete', [RazorpayPaymentController::class, 'payment_complete']);
Route::post('razorpay-payment/{id}', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

//Stripe Payment
Route::post('stripe/{id}', [StripePaymentController::class, 'store'])->name('stripe.store');
Route::get('paymentComplete', [StripePaymentController::class, 'payment_complete']);

// Payment Api key add
Route::resource('payment-key','PaymentApiController');

//Exam
    Route::get('exam', [ExamController::class, 'index'])->name('view_exam');
    Route::get('add-exam', [ExamController::class, 'create'])->name('add_exam');
    Route::post('store-exam', [ExamController::class, 'store'])->name('StoreExam');
    Route::get('exam/{id}/edit', [ExamController::class, 'edit'])->name('editExam');
    Route::post('exam-update/{id}', [ExamController::class, 'update']);
    Route::get('exam-delete/{id}', [ExamController::class, 'delete']);
    Route::post('store-parameter', [ExamController::class, 'store_parameter'])->name('StoreParameter');
    Route::get('parameter/{id}', [ExamController::class, 'getParameterDetails']);
    Route::delete('parameter/{id}', [ExamController::class, 'deleteParameter']);
	
	//rupali code
	Route::get('getexambyid', [ExamController::class, 'getexam'])->name('getexambyid');
    Route::get('gealltexam', [ExamController::class, 'gealltexam'])->name('gealltexam');
	
// Categories
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('create-category', [CategoryController::class, 'create'])->name('CreateCategory');
    Route::post('store-category', [CategoryController::class, 'store'])->name('StoreCategory');
    
    
   
    Route::get('cytology', [CytologyController::class, 'index'])->name('cytology');
    Route::get('create-cytology', [CytologyController::class, 'create'])->name('CreateCytology');
    Route::post('store-cytology', [CytologyController::class, 'store'])->name('StoreCytology');


    Route::get('storecytologysubitem/{id}', [CytologyController::class, 'addSubItem'])->name('storecytologysubitem');


    Route::get('edit-cytology/{id}', [CytologyController::class, 'edit'])->name('EditCytology');
    Route::put('update-cytology/{id}', [CytologyController::class, 'update'])->name('UpdateCytology');
    Route::delete('delete-cytology/{id}', [CytologyController::class, 'destroy'])->name('DeleteCytology');



    // Route::delete('delete-subitem/{id}', [CytologyController::class, 'destroySubItem'])->name('DeleteSubCytology');
    
    
    //rupali code
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('EditCategory');
    Route::put('update-category/{id}', [CategoryController::class, 'update'])->name('UpdateCategory');
    Route::delete('delete-category/{id}', [CategoryController::class, 'destroy'])->name('DeleteCategory');
    
    
});


//db
Route::get('/seed', function(){
    //php artisan make:seeder UserSeeder
     //Artisan::call('db:seed', [ '--class' => 'DatabaseSeeder',]);
});

Route::get('/clear',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
});