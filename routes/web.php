<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\Home\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => redirect()->route('home.main'));

# Authenticate
Route::controller(AuthController::class)
->as('auth.')->group(function () {
	Route::get('login', 'login')->name('login');
	Route::post('do-login', 'doLogin')->name('doLogin');
	Route::get('logout', 'logout')->name('logout');
});

# Landing page start
Route::controller(HomeController::class)->group(function () {
	Route::group(['prefix' => 'home', 'as' => 'home.'], function () { # Home menu
		Route::get('/', 'main')->name('main');
	});
});
