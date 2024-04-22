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

Route::get('', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/showusers', [UserController::class, 'readUsers'])->name('show');
Route::post('/insertuser', [UserController::class, 'createUser'])->name('insert');
Route::post('/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/update/{id}', function ($id) {
    return view('update' , ['id' => $id ]);
});
Route::post('/update/{id}', [UserController::class, 'updateUser']);
