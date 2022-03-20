<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserinfoController;

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
    return view('index');
});

Route::get('/login', [UserinfoController::class, 'login']);
Route::post('/login', [UserinfoController::class, 'loginAuth']);
Route::get('/signup', [UserinfoController::class, 'signup']);
Route::post('/signup', [UserinfoController::class, 'register']);
Route::get('/logout', [UserinfoController::class, 'logout']);
