<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer; //include here model
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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/register/view1', [RegistrationController::class, 'view1']);
// Route::get('/register/view1', [RegistrationController::class, 'view1'])->name('register.view1');  this way of routing is called named routing
Route::get('/register/delete/{id}', [RegistrationController::class, 'delete']);
Route::get('/register/restore/{id}', [RegistrationController::class, 'restore']);
Route::get('/register/forcedelete/{id}', [RegistrationController::class, 'forceDelete']);
Route::get('/register/edit/{id}', [RegistrationController::class, 'edit'])->name('register.edit');
Route::post('/register/update/{id}', [RegistrationController::class, 'update']);
Route::get('/register/trash', [RegistrationController::class, 'trash']);