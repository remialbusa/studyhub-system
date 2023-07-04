<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route for contact button
Route::get('/contacts', [HomeController::class, 'contactsPage'])->name('contacts');

// Route for registration button
Route::get('/register', [RegistrationController::class, 'registerView'])->name('register');;
Route::post('/register-user', [AuthController::class, 'registerAdmin'])->name('register-user');

//Route for login page
Route::get('/', [HomeController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login-user');



// Routes that require authentication
Route::group(['middleware' => ['auth']], function () {

    // Route for dashboard button
    Route::get('/dashboard', [HomeController::class, 'dashboardPage'])->name('dashboard');

    // Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    //Route for Count
    Route::get('/dashboard', [RegistrationController::class, 'dashboard']);
    Route::get('/dashboard/countUsers', [RegistrationController::class, 'countUsers']);
    Route::get('/dashboard/countDeskAvail', [RegistrationController::class, 'countDeskAvail']);
    Route::get('/dashboard/countDeskOccu', [RegistrationController::class, 'countDeskOccu']);

    //Route for Student List Page
    Route::get('/student-list', [HomeController::class, 'studentListPage'])->name('studentlist-page');
    Route::post('/student-registration', [AuthController::class, 'registerStudent'])->name('register-student');
    Route::post('/student-update', [AuthController::class, 'updateStudent'])->name('update-student');
    Route::get('/student-delete/{id}', [AuthController::class, 'deleteStudent'])->name('delete-student');


    //Route for Desk List Page
    Route::get('/desk-list', [HomeController::class, 'deskListPage'])->name('desklist-page');
    Route::post('/assign-desk', [HomeController::class, 'assignDesk'])->name('assign-desk');
    Route::post('/desk-list-add', [HomeController::class, 'deskListPageAdd'])->name('desklist-page-add');
    Route::get('/desk-delete/{id}', [HomeController::class, 'deleteDesk'])->name('delete-desk');
    Route::get('/assign-desk-to-student', [HomeController::class, 'getDeskCode']);


    //Route for History Page
    Route::get('/history', [HomeController::class, 'historyPage'])->name('history-page');

    //Route for Users Page
    Route::get('/users', [HomeController::class, 'usersPage'])->name('users-page');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete-user');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update-user');


    //Route for logout button   
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');;
});
