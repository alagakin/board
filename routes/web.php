<?php

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

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/get-user', [\App\Http\Controllers\LoginController::class, 'get']);

Route::get('/get-avatar', [\App\Http\Controllers\LoginController::class, 'getAvatar']);

Route::post('/update-user', [\App\Http\Controllers\LoginController::class, 'update']);


Route::get('/{any}', function () {
    return view('welcome');
})->where("any",".*");