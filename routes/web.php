<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [RegistrationController::class, 'index']); 
Route::get('/register', [RegistrationController::class, 'register'])->middleware('alreadyLoggedIn'); 
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/register/view', [RegistrationController::class, 'view']);
Route::get('/signin', [RegistrationController::class, 'signin'])->middleware('alreadyLoggedIn'); 

Route::post('signinuser', [RegistrationController::class, 'signinprocess'])->name('signinuser');

Route::get('/dashboard', [RegistrationController::class, 'dashboard']); 
Route::get('/logout', [RegistrationController::class, 'logout'])->middleware('isLoggedIn'); 
Route::get('/makecomplaint', [RegistrationController::class, 'makecomplaint']); 

Route::post('/create-complaint', [RegistrationController::class, 'createcomplaint'])->name('create-complaint');
Route::get('/complaints_show', [RegistrationController::class, 'complaints_show']); 

