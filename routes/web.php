<?php

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

Route::get('/', function () {
    return view('main');
});

use App\Http\Controllers\UserController;

Route::middleware(['auth:web'])->group(function () {

Route::resource('u', UserController::class);

Route::match(['get', 'post'], '/ulogout', [UserController::class, 'ulogout'])->name('ulogout');
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');



// // Add the following login routes
Route::get('/ulogin', [UserController::class, 'showLoginForm'])->name('ulogin');
Route::post('/ulogin', [UserController::class, 'ulogin']);


