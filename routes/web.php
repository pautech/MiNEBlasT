<?php


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

Route::get('/', function () {
    return view('main');
})->name('home'); // You can replace 'home' with your desired name

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/references', function () {
    return view('references');
});


Route::get('/checkpoint', function () {
    return view('menu');
})->name('checkpoint');


Route::get('/dashboard', function () {
    return view('users.dash');
})->name('dashboard');




// ... (existing routes)

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', function () {
        return view('users.dash');
    })->name('dashboard');

    Route::match(['get', 'post'], '/ulogout', [UserController::class, 'ulogout'])->name('ulogout');
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');


// Add the following login routes
Route::get('/ulogin', [UserController::class, 'showLoginForm'])->name('ulogin');
Route::post('/ulogin', [UserController::class, 'ulogin']);
