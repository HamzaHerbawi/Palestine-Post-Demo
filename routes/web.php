<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
// use App\Http\Controllers\User;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\VonageMessage;
use App\Http\Controllers\Voyager\SmsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => '/'], function () {
    Voyager::routes();
    Route::get('/sms-notification/{id?}', [SmsController::class, 'smsNotifi'], ['as' => 'sms'])->name('sms');
});
