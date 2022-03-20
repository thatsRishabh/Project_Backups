<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioController;

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

// As most of the pages are static only, they are not transferring data to database so redirecting from here only via functions. Only contact-us has to send data to database so made its controller.

Route::get('/', [HomeController::class, 'index']);
// Route::get('/about-us', [AboutController::class, 'index']);
// Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/portfolio-classic', [PortfolioController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);


Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/portfolio-classic', function () {
    return view('frontend.portfolio-classic');
});
