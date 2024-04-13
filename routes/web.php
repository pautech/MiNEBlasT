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

Route::get('/courses', function () {
    return view('Tolearn');
})->name('courses');

Route::get('/survey', function () {
    return view('stagespage.survey');
})->name('survey');

Route::get('/drilling', function () {
    return view('stagespage.drill');
})->name('drill');
Route::get('/drilling1', function () {
    return view('stagespage.drill1');
})->name('drill1');

Route::get('/drilling2', function () {
    return view('stagespage.drill2');
})->name('drill2');

Route::get('/drilling3', function () {
    return view('stagespage.drill3');
})->name('drill3');
Route::get('/drilling4', function () {
    return view('stagespage.drill4');
})->name('drill4');
Route::get('/drilling5', function () {
    return view('stagespage.drill5');
})->name('drill5');

Route::get('/drilling6', function () {
    return view('stagespage.drill6');
})->name('drill6');
Route::get('/drilling7', function () {
    return view('stagespage.drill7');
})->name('drill7');
Route::get('/drilling8', function () {
    return view('stagespage.drill8');
})->name('drill8');
Route::get('/drilling9', function () {
    return view('stagespage.drill9');
})->name('drill9');
Route::get('/drilling10', function () {
    return view('stagespage.drill10');
})->name('drill10');
Route::get('/drilling11', function () {
    return view('stagespage.drill11');
})->name('drill11');
Route::get('/drilling12', function () {
    return view('stagespage.drill12');
})->name('drill12');
Route::get('/drilling13', function () {
    return view('stagespage.drill13');
})->name('drill13');
Route::get('/drilling14', function () {
    return view('stagespage.drill14');
})->name('drill14');
Route::get('/drilling15', function () {
    return view('stagespage.drill15');
})->name('drill15');
Route::get('/drilling16', function () {
    return view('stagespage.drill16');
})->name('drill16');
Route::get('/drilling17', function () {
    return view('stagespage.drill17');
})->name('drill17');
Route::get('/quiz', function () {
    return view('minequiz');
})->name('minequiz');

Route::get('/chatlearn', function () {
    return view('chatgptlearn');    
})->name('chatgptlearn');

// ... (existing routes)

// Redirect unauthenticated users to the menu page

Route::middleware(['auth:web'])->group(function () {
    // Define all your routes here
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/references', function () {
        return view('references');
    });

    Route::get('/dashboard', function () {
        return view('users.dash');
    })->name('dashboard');

    Route::get('/courses', function () {
        return view('Tolearn');
    })->name('courses');

    Route::get('/survey', function () {
        return view('stagespage.survey');
    })->name('survey');

    Route::get('/quiz', function () {
        return view('minequiz');
    })->name('minequiz');

    Route::get('/chatlearn', function () {
        return view('chatgptlearn');    
    })->name('chatgptlearn');

    Route::match(['get', 'post'], '/ulogout', [UserController::class, 'ulogout'])->name('ulogout');
});

// Redirect unauthenticated users to the checkpoint page
Route::fallback(function () {
    return redirect('/checkpoint');
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration', [UserController::class, 'store'])->name('registration.store');

// Add the following login routes
Route::get('/ulogin', [UserController::class, 'showLoginForm'])->name('ulogin');
Route::post('/ulogin', [UserController::class, 'ulogin']);
Route::get('/drilling11', [UserController::class, 'quizBanner'])->name('drill11');
Route::post('/chat', 'App\Http\Controllers\ChatController');