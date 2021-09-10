<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Ajax\AjaxController;
use App\Http\Controllers\HomeController;

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

Route::get('/user/login', [UserController::class, 'getlogin']);
Route::get('/user/register', [PersonController::class, 'register']);
Route::post('/user/register', [AjaxController::class, 'prefectures']);
Route::get('/home/home', [HomeController::class, 'home']);
Route::post('/user/register', [PersonController::class, 'register_post']);
