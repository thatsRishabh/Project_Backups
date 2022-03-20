<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTrail;
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

Route::get('/data', [ApiTrail::class, 'data']);
Route::get('/displayinfo', [ApiTrail::class, 'displayInfo']);
Route::get('/displayinfo/{id?}', [ApiTrail::class, 'displayIndividual']);
// in 'id?' where ? means that parameter 'id' is optional

Route::post('/adddata', [ApiTrail::class, 'addData']);
Route::put('/updatedata', [ApiTrail::class, 'updateData']);
// we use 'put' method for data update

Route::delete('/delete/{id}', [ApiTrail::class, 'delete']);
Route::get('/search/{name}', [ApiTrail::class, 'search']);
Route::post('/upload', [ApiTrail::class, 'upload']);