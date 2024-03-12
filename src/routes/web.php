<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RunBackgroundScript;
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
    return view('login.login');
});

Route::post('login', [LoginController::class, 'handleLogin'])->name('handle_login');

Route::group(['middleware' => 'auth'], function(){

    Route::get('home', [HomepageController::class, 'showHome'])->name('homepage');
    Route::get('test', [RunBackgroundScript::class, 'runShellScript'])->name('test');

});