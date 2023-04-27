<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

 //This route is for the login page
/* Route::get('/', function () {
    return view('landing-page');
}); */


//Route for Landing Page
Route::get('/', [HomeController::class,'landingPage'])->name('landing-page');

//Route for registration button
Route::get('/register', [RegistrationController::class, 'register'])->name('register');

//Route for login page
Route::get('/login', [HomeController::class,'login'])->name('login');
