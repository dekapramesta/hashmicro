<?php

use App\Http\Controllers\Feature1;
use App\Http\Controllers\Feature2;
use App\Http\Controllers\Feature3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/bayar', [Feature2::class, 'bayar'])->name('feature2.bayar');
Route::get('/fitur1', [Feature1::class, 'index'])->name('feature1.tes');
