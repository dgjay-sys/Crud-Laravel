<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('', function () {
    return view('welcome');
});





Route::get('', function () {
    return view('welcome');
});




Route::controller(LoginController::class)->group(function () {
    Route::post('/loginuser', 'isLogin')->middleware(['alreadyLoggedIn']);
    Route::get('/dashboard', 'dashboard')->middleware('isLoggedIn')->name('dashboard');
    Route::get('/logout', 'logout');
});

//POST ACTION


//Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('prevent-back-history');
Route::get('/update/{id}', function ($id) {
    return view('update' , ['id' => $id ]);
});

Route::middleware(['isLoggedIn', 'prevent-back-history'])->group(function () {
    Route::post('/update/{id}', [UserController::class, 'updateUser']);
    Route::post('/delete/{id}', [UserController::class, 'deleteUser']);
    //GET ACTION
    Route::get('/showusers', [UserController::class, 'readUsers'])->name('show');

});


Route::middleware(['guest', 'prevent-back-history'])->group(function () {
    Route::get('/registeruser', function () {
        return view('register');
    })->name('regis');
    Route::get('', function () {
        return view('welcome');
    });
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::post('/insertuser', [UserController::class, 'createUser'])->name('insert');
});
