<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
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

Route::get('/update/{id}', [EditController::class, 'update'])->name('update');
Route::post('/edit/{id}', [EditController::class, 'saveUpdate'])->name('saveUpdate');

Route::get('/newPost/{delete}', [SmsController::class, 'delete'])->name('del');

Route::get('/newPost', [SmsController::class, 'viewPost'])->name('viewPost');
Route::post('/newPost', [SmsController::class, 'newPost'])->name('newPost');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
