<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;

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

//Customer  Registration,Logout,Login & Dashboard Routes

Route::get('/', [RegistrationController::class, 'index']); 
Route::get('/register', [RegistrationController::class, 'register'])->middleware('alreadyLoggedIn'); 
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/register/view', [RegistrationController::class, 'view']);
Route::get('/signin', [RegistrationController::class, 'signin'])->middleware('alreadyLoggedIn'); 

Route::post('signinuser', [RegistrationController::class, 'signinprocess'])->name('signinuser');

Route::get('/dashboard', [RegistrationController::class, 'dashboard']); 
Route::get('/logout', [RegistrationController::class, 'logout'])->middleware('isLoggedIn');

// Customer Complaint Routes

Route::get('/makecomplaint', [RegistrationController::class, 'makecomplaint']); 
Route::post('/create-complaint', [RegistrationController::class, 'createcomplaint'])->name('create-complaint');
Route::get('/complaints_show', [RegistrationController::class, 'complaints_show']); 
Route::get('/cancel_complaint/{id}', [RegistrationController::class, 'cancel_complaint']);

// Customer Complaint Routes

Route::get('/showprofile', [RegistrationController::class, 'showprofile']); 

// FAQ

Route::get('/faq', [RegistrationController::class, 'faq']); 
Route::get('/aboutus', [RegistrationController::class, 'aboutus']); 


// Customer Change Password Routes

Route::get('/change_password', [RegistrationController::class, 'change_password']); 

Route::post('change_password/db', [RegistrationController::class, 'changePasswordView'])->name('change_password/db'); 


// Admin site works

Route::get('/adminsignin', [AdminController::class, 'adminsignin'])->middleware('alreadyLoggedIn');
Route::post('signinadmin', [AdminController::class, 'adminsigninprocess'])->name('signinadmin');
Route::get('/admindashboard', [AdminController::class, 'admindashboard']); 
Route::get('/logout', [AdminController::class, 'logout'])->middleware('isLoggedIn');
Route::get('/show_customer_complaints', [AdminController::class, 'show_customer_complaints']);
Route::get('/Approved/{id}', [AdminController::class, 'Approved']); 
Route::get('/Canceled/{id}', [AdminController::class, 'Canceled']); 
Route::get('/show_customer', [AdminController::class, 'show_customer']);
Route::get('/RemoveCustomer/{id}', [AdminController::class, 'RemoveCustomer']); 
Route::get('/update_customer_data/{id}', [AdminController::class, 'update_customer_data']);
Route::post('/editcustomer/{id}', [AdminController::class, 'editcustomer']);

Route::get('/customer_update_page', [AdminController::class, 'customer_update_page']);