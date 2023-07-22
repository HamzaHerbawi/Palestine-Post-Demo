<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\PController;
// use App\Http\Controllers\packageController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('packages' , 'packageController@getPackage');

// Route::get('search/{tracking_number}' , 'packageController@search');

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::post("add" , [packageController::class,'add']);

// <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PController;
use App\Http\Controllers\packageController;

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


Route::get('packages' , 'packageController@getPackage');

Route::get('search/{tracking_number}' , 'packageController@search');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::post("add" , [packageController::class,'add']);
