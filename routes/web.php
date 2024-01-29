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
    return view('menu');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/references', function () {
    return view('references');
});

Route::get('/checkpoint', function () {
    return view('main');
});
Route::get('/checkpoint', function () {
    return view('main');
})->name('checkpoint');


Route::get('/dashboard', function () {
    return view('users.dash');
});

use App\Http\Controllers\UserController;

Route::resource('u', UserController::class);

Route::middleware(['auth:web'])->group(function () {

    Route::match(['get', 'post'], '/ulogout', [UserController::class, 'ulogout'])->name('ulogout');
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');



// // Add the following login routes
Route::get('/ulogin', [UserController::class, 'showLoginForm'])->name('ulogin');
Route::post('/ulogin', [UserController::class, 'ulogin']);


