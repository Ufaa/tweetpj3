<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\AuthController;
use App\Models\Tweet;
use App\Models\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/{app}', function () {  //←追記
    return view('welcome');
})->where('app', '.*');

Route::post('/', [TweetController::class, 'welcome'])->name('welcome');
Route::resource('tweets', TweetController::class);
