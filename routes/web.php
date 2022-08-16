<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\AgentController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/destinations', function () {
    return view('destinations');
});
// Route::get('/search', function () {
//     return view('search');
// });
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/popup', function () {
    return view('popup');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tour-details1', function () {
    return view('tour-details1');
})->name('tour-details1');
Route::get('/tour-details2', function () {
    return view('tour-details2');
})->name('tour-details2');
Route::get('/tour-details3', function () {
    return view('tour-details3');
})->name('tour-details3');
Route::get('/tour-details4', function () {
    return view('tour-details4');
})->name('tour-details4');
Route::get('/tour-details5', function () {
    return view('tour-details5');
})->name('tour-details5');
Route::get('/tour-details10', function () {
    return view('tour-details10');
})->name('tour-details10');
Route::get('/tour-details6', function () {
    return view('tour-details6');
})->name('tour-details6');
Route::get('/tour-details7', function () {
    return view('tour-details7');
})->name('tour-details7');
Route::get('/tour-details8', function () {
    return view('tour-details8');
})->name('tour-details8');
Route::get('/tour-details9', function () {
    return view('tour-details9');
})->name('tour-details9');
Route::get('/post', function () {
    return view('post');
});
// Route::get('/agent', function () {
//     return view('agent');
// });
Route::view('/booking','booking')->name('booking');
Route::Post('store',[BookingController::class,'store'])->name('store');


Route::get('/search/{id}',[DestinationController::class,'create'])->name('search.create');
// Route::post('/search',[DestinationController::class,'store'])->name('search.store');
Route::get('/search_destination',[DestinationController::class,'store'])->name('search.destination');
Route::get('/index',[DestinationController::class,'index'])->name('index');


Route::get('/footer',[NewsletterController::class,'create'])->name('create');
Route::post('store',[NewsletterController::class,'store'])->name('store');

// Route::get('/message',[MessageController::class,'create'])->name('message.create');
// Route::post('/message',[MessageController::class,'store'])->name('message.store');
// Route::get('/contact',[MessageController::class,'index'])->name('index');
// Route::view('/contact','contact')->name('booking');

Route::get('/contact',[MessageController::class,'create'])->name('message.create');
Route::Post('/message/store',[MessageController::class,'store'])->name('message.store');

Route::get('/agent',[AgentController::class,'Agent']);
Route::post('/agent/store',[AgentController::class,'store'])->name('agent.store');
