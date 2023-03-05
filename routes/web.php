<?php

use App\Http\Controllers\Feature1;
use App\Http\Controllers\Feature2;
use App\Http\Controllers\Feature3;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('LoginExc', [LoginController::class, 'LoginAction'])->name('Login.action');
Route::middleware(['auth', 'isLogin'])->group(function () {
    Route::get('/fitur1', [Feature1::class, 'index'])->name('feature1');
    Route::get('/fitur2', [Feature2::class, 'index'])->name('feature2');
    Route::post('/bayar', [Feature2::class, 'bayar'])->name('feature2.bayar');
    Route::get('/fitur3', [Feature3::class, 'index'])->name('feature3.ind');
    Route::post('/rand', [Feature3::class, 'NameExecute'])->name('feature3.rand');
});
