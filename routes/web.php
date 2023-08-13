<?php

use App\Http\Controllers\BookingroomsController;
use App\Models\Rooms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ListuserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StumesyuaratController;

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

Route::get('/welcome', function () {
    return view('welcome',[
        'tittle'=> 'welcome'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home',[
            'tittle' => 'Home'
        ]);
    });
    Route::get('/about', function () {
        return view('about', [
            'tittle' => 'About',
            'name' => 'Nayi',
            'email' => 'admin@admin'
        ]);
    });
    Route::get('/blog', function () {
        return view('blog',[
            'tittle' => 'Blog'
        ]);
    });
    Route::get('/', function () {
        return view('home',[
            'tittle' => 'Home'
        ]);
    });

});

    Route::resource('list-user', ListuserController::class)->middleware(['auth','admin']);

    Route::resource('rooms', RoomsController::class)->middleware(['auth','admin']);

    Route::resource('booking-rooms', BookingroomsController::class)->middleware('auth');

    Route::resource('stumesyuarat', StumesyuaratController::class)->middleware(['auth','admin']);
