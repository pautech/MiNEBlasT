<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\QuizController;
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
// Redirect unauthenticated users to the checkpoint page

Route::get('/', function () {
    return view('main');
})->name('home'); // You can replace 'home' with your desired name

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

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/glossary', function () {
    return view('glossary');
})->name('glossary');

Route::get('/references', function () {
    return view('references');
});

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
Route::get('/drilling18', function () {
    return view('stagespage.drill18');
})->name('drill18');
Route::get('/drilling19', function () {
    return view('stagespage.drill19');
})->name('drill19');
Route::get('/drilling20', function () {
    return view('stagespage.drill20');
})->name('drill20');
Route::get('/drilling21', function () {
    return view('stagespage.drill21');
})->name('drill21');
Route::get('/drilling22', function () {
    return view('stagespage.drill22');
})->name('drill22');
Route::get('/drilling23', function () {
    return view('stagespage.drill23');
})->name('drill23');
//blasting Pages
Route::get('/blast', function () {
    return view('drillpages.blast');
})->name('blast');
Route::get('/blast1', function () {
    return view('drillpages.blast1');
})->name('blast1');
Route::get('/blast2', function () {
    return view('drillpages.blast2');
})->name('blast2');

Route::get('/blast3', function () {
    return view('drillpages.blast3');
})->name('blast3');

Route::get('/blast4', function () {
    return view('drillpages.blast4');
})->name('blast4');

Route::get('/blast5', function () {
    return view('drillpages.blast5');
})->name('blast5');
Route::get('/blast6', function () {
    return view('drillpages.blast6');
})->name('blast6');
Route::get('/blast7', function () {
    return view('drillpages.blast7');
})->name('blast7');
Route::get('/blast8', function () {
    return view('drillpages.blast8');
})->name('blast8');

Route::get('/blast9', function () {
    return view('drillpages.blast9');
})->name('blast9');

Route::get('/blast10', function () {
    return view('drillpages.blast10');
})->name('blast10');

Route::get('/blast11', function () {
    return view('drillpages.blast11');
})->name('blast11');

Route::get('/blast12', function () {
    return view('drillpages.blast12');
})->name('blast12');

Route::get('/blast13', function () {
    return view('drillpages.blast13');
})->name('blast13');

Route::get('/blast14', function () {
    return view('drillpages.blast14');
})->name('blast14');

Route::get('/blast15', function () {
    return view('drillpages.blast15');
})->name('blast15');

Route::get('/quiz', function () {
    return view('minequiz');
})->name('minequiz');

Route::get('/chatlearn', function () {
    return view('chatgptlearn');    
})->name('chatgptlearn');



/*cycle operation Pages */

Route::get('/cycleope', function () {
    return view('cycleopepages.cycleope');
})->name('cycleope');

Route::get('/cycleope1', function () {
    return view('cycleopepages.cycleope1');
})->name('cycleope1');

Route::get('/cycleope2', function () {
    return view('cycleopepages.cycleope2');
})->name('cycleope2');

Route::get('/cycleope3', function () {
    return view('cycleopepages.cycleope3');
})->name('cycleope3');

Route::get('/cycleope4', function () {
    return view('cycleopepages.cycleope4');
})->name('cycleope4');

Route::get('/cycleope5', function () {
    return view('cycleopepages.cycleope5');
})->name('cycleope5');
Route::get('/cycleope6', function () {
    return view('cycleopepages.cycleope6');
})->name('cycleope6');

Route::get('/cycleope7', function () {
    return view('cycleopepages.cycleope7');
})->name('cycleope7');

Route::get('/cycleope8', function () {
    return view('cycleopepages.cycleope8');
})->name('cycleope8');

Route::get('/cycleope9', function () {
    return view('cycleopepages.cycleope9');
})->name('cycleope9');

Route::get('/cycleope10', function () {
    return view('cycleopepages.cycleope10');
})->name('cycleope10');

Route::get('/cycleope11', function () {
    return view('cycleopepages.cycleope11');
})->name('cycleope11');


Route::get('/cycleope12', function () {
    return view('cycleopepages.cycleope12');
})->name('cycleope12');

Route::get('/cycleope13', function () {
    return view('cycleopepages.cycleope13');
})->name('cycleope13');

Route::get('/cycleope14', function () {
    return view('cycleopepages.cycleope14');
})->name('cycleope14');

Route::get('/cycleope15', function () {
    return view('cycleopepages.cycleope15');
})->name('cycleope15');

Route::get('/cycleope16', function () {
    return view('cycleopepages.cycleope16');
})->name('cycleope16');
Route::get('/cycleope17', function () {
    return view('cycleopepages.cycleope17');
})->name('cycleope17');


Route::get('/cycleope18', function () {
    return view('cycleopepages.cycleope18');
})->name('cycleope18');

Route::get('/cycleope19', function () {
    return view('cycleopepages.cycleope19');
})->name('cycleope19');
Route::get('/cycleope20', function () {
    return view('cycleopepages.cycleope20');
})->name('cycleope20');
Route::get('/cycleope21', function () {
    return view('cycleopepages.cycleope21');
})->name('cycleope21');


Route::get('/cycleope22', function () {
    return view('cycleopepages.cycleope22');
})->name('cycleope22');

Route::get('/cycleope23', function () {
    return view('cycleopepages.cycleope23');
})->name('cycleope23');

Route::get('/cycleope24', function () {
    return view('cycleopepages.cycleope24');
})->name('cycleope24');
Route::get('/cycleope25', function () {
    return view('cycleopepages.cycleope25');
})->name('cycleope25');

Route::get('/cycleope26', function () {
    return view('cycleopepages.cycleope26');
})->name('cycleope26');
Route::get('/cycleope27', function () {
    return view('cycleopepages.cycleope27');
})->name('cycleope27');

Route::get('/cycleope28', function () {
    return view('cycleopepages.cycleope28');
})->name('cycleope28');

Route::get('/cycleope29', function () {
    return view('cycleopepages.cycleope29');
})->name('cycleope29');

/*Quizzes routes*/

Route::get('/quizzesmain', function () {
    return view('Quizzes.quizzesmain');
})->name('quizzesmain');


Route::get('/quizzeseasy', function () {
    return view('Quizzes.quizzeseasy');
})->name('quizzeseasy');

Route::get('/quizzeshard', function () {
    return view('Quizzes.quizzeshard');
})->name('quizzeshard');



// ... (existing routes)

// Redirect unauthenticated users to the menu page
Route::fallback(function () {
    return redirect('/checkpoint');
});
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
    Route::get('/drilling18', function () {
        return view('stagespage.drill18');
    })->name('drill18');
    Route::get('/drilling19', function () {
        return view('stagespage.drill19');
    })->name('drill19');
    Route::get('/drilling20', function () {
        return view('stagespage.drill20');
    })->name('drill20');
    Route::get('/drilling21', function () {
        return view('stagespage.drill21');
    })->name('drill21');
    Route::get('/drilling22', function () {
        return view('stagespage.drill22');
    })->name('drill22');
    Route::get('/drilling23', function () {
        return view('stagespage.drill23');
    })->name('drill23');
    //blasting Pages
    Route::get('/blast', function () {
        return view('drillpages.blast');
    })->name('blast')->middleware('auth:web');
    Route::get('/blast1', function () {
        return view('drillpages.blast1');
    })->name('blast1')->middleware('auth:web');
    Route::get('/blast2', function () {
        return view('drillpages.blast2');
    })->name('blast2')->middleware('auth:web');
    
    Route::get('/blast3', function () {
        return view('drillpages.blast3');
    })->name('blast3')->middleware('auth:web');
    
    Route::get('/blast4', function () {
        return view('drillpages.blast4');
    })->name('blast4')->middleware('auth:web');
    
    Route::get('/blast5', function () {
        return view('drillpages.blast5');
    })->name('blast5')->middleware('auth:web');
    Route::get('/blast6', function () {
        return view('drillpages.blast6');
    })->name('blast6')->middleware('auth:web');
    Route::get('/blast7', function () {
        return view('drillpages.blast7');
    })->name('blast7')->middleware('auth:web');
    Route::get('/blast8', function () {
        return view('drillpages.blast8');
    })->name('blast8')->middleware('auth:web');
    
    Route::get('/blast9', function () {
        return view('drillpages.blast9');
    })->name('blast9')->middleware('auth:web');
    
    Route::get('/blast10', function () {
        return view('drillpages.blast10');
    })->name('blast10')->middleware('auth:web');
    
    Route::get('/blast11', function () {
        return view('drillpages.blast11');
    })->name('blast11')->middleware('auth:web');
    
    Route::get('/blast12', function () {
        return view('drillpages.blast12');
    })->name('blast12')->middleware('auth:web');
    
    Route::get('/blast13', function () {
        return view('drillpages.blast13');
    })->name('blast13')->middleware('auth:web');
    
    Route::get('/blast14', function () {
        return view('drillpages.blast14');
    })->name('blast14')->middleware('auth:web');
    
    Route::get('/blast15', function () {
        return view('drillpages.blast15');
    })->name('blast15')->middleware('auth:web');



    /*cycle operation Pages */

Route::get('/cycleope', function () {
    return view('cycleopepages.cycleope');
})->name('cycleope')->middleware('auth:web');

Route::get('/cycleope1', function () {
    return view('cycleopepages.cycleope1');
})->name('cycleope1')->middleware('auth:web');

Route::get('/cycleope2', function () {
    return view('cycleopepages.cycleope2');
})->name('cycleope2')->middleware('auth:web');

Route::get('/cycleope3', function () {
    return view('cycleopepages.cycleope3');
})->name('cycleope3')->middleware('auth:web');

Route::get('/cycleope4', function () {
    return view('cycleopepages.cycleope4');
})->name('cycleope4')->middleware('auth:web');

Route::get('/cycleope5', function () {
    return view('cycleopepages.cycleope5');
})->name('cycleope5')->middleware('auth:web');
Route::get('/cycleope6', function () {
    return view('cycleopepages.cycleope6');
})->name('cycleope6')->middleware('auth:web');

Route::get('/cycleope7', function () {
    return view('cycleopepages.cycleope7');
})->name('cycleope7')->middleware('auth:web');

Route::get('/cycleope8', function () {
    return view('cycleopepages.cycleope8');
})->name('cycleope8');

Route::get('/cycleope9', function () {
    return view('cycleopepages.cycleope9');
})->name('cycleope9');

Route::get('/cycleope10', function () {
    return view('cycleopepages.cycleope10');
})->name('cycleope10');

Route::get('/cycleope11', function () {
    return view('cycleopepages.cycleope11');
})->name('cycleope11');


Route::get('/cycleope12', function () {
    return view('cycleopepages.cycleope12');
})->name('cycleope12');

Route::get('/cycleope13', function () {
    return view('cycleopepages.cycleope13');
})->name('cycleope13');

Route::get('/cycleope14', function () {
    return view('cycleopepages.cycleope14');
})->name('cycleope14');

Route::get('/cycleope15', function () {
    return view('cycleopepages.cycleope15');
})->name('cycleope15');

Route::get('/cycleope16', function () {
    return view('cycleopepages.cycleope16');
})->name('cycleope16');
Route::get('/cycleope17', function () {
    return view('cycleopepages.cycleope17');
})->name('cycleope17');


Route::get('/cycleope18', function () {
    return view('cycleopepages.cycleope18');
})->name('cycleope18');

Route::get('/cycleope19', function () {
    return view('cycleopepages.cycleope19');
})->name('cycleope19');
Route::get('/cycleope20', function () {
    return view('cycleopepages.cycleope20');
})->name('cycleope20');
Route::get('/cycleope21', function () {
    return view('cycleopepages.cycleope21');
})->name('cycleope21');


Route::get('/cycleope22', function () {
    return view('cycleopepages.cycleope22');
})->name('cycleope22');

Route::get('/cycleope23', function () {
    return view('cycleopepages.cycleope23');
})->name('cycleope23');

Route::get('/cycleope24', function () {
    return view('cycleopepages.cycleope24');
})->name('cycleope24');
Route::get('/cycleope25', function () {
    return view('cycleopepages.cycleope25');
})->name('cycleope25');

Route::get('/cycleope26', function () {
    return view('cycleopepages.cycleope26');
})->name('cycleope26');
Route::get('/cycleope27', function () {
    return view('cycleopepages.cycleope27');
})->name('cycleope27');

Route::get('/cycleope28', function () {
    return view('cycleopepages.cycleope28');
})->name('cycleope28');

Route::get('/cycleope29', function () {
    return view('cycleopepages.cycleope29');
})->name('cycleope29');

/*Quizzes routes*/

Route::get('/quizzesmain', function () {
    return view('Quizzes.quizzesmain');
})->name('quizzesmain');


Route::get('/quizzeseasy', function () {
    return view('Quizzes.quizzeseasy');
})->name('quizzeseasy');

Route::get('/quizzeshard', function () {
    return view('Quizzes.quizzeshard');
})->name('quizzeshard');


    Route::match(['get', 'post'], '/ulogout', [UserController::class, 'ulogout'])->name('ulogout');

    Route::post('/save-score', [ScoreController::class, 'save'])->name('save-score');
    //med
    Route::post('/save-mediumscore', [QuizController::class, 'saveMediumScore'])->name('save-mediumscore');



});


//easy
Route::post('/save-score', [ScoreController::class, 'save'])->name('save-score');
//medium
Route::post('/save-mediumscore', [QuizController::class, 'saveMediumScore'])->name('save-mediumscore');



Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration', [UserController::class, 'store'])->name('registration.store');

// Add the following login routes
Route::get('/ulogin', [UserController::class, 'showLoginForm'])->name('ulogin');
Route::post('/ulogin', [UserController::class, 'ulogin']);
Route::get('/drilling11', [UserController::class, 'quizBanner'])->name('drill11');

Route::get('/drilling15', [UserController::class, 'quizBanner1'])->name('drill15');
Route::post('/chat', 'App\Http\Controllers\ChatController');