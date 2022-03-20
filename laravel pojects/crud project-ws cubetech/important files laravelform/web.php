<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormContoller;

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


Route::get('/', [FormContoller::class, 'index']);
Route::post('/', [FormContoller::class, 'register']);
Route::get('/view', [FormContoller::class, 'view']);
Route::get('/view/softdelete/{id}', [FormContoller::class, 'softdelete']);
Route::get('/view/restore/{id}', [FormContoller::class, 'restore']);
Route::get('/view/edit/{id}', [FormContoller::class, 'edit']);
Route::post('/view/update/{id}', [FormContoller::class, 'update']);
Route::get('/view/forcedelete/{id}', [FormContoller::class, 'forceDelete']);
Route::get('/trashed', [FormContoller::class, 'trash']);