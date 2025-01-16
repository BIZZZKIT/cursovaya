<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
})->name('main');

Route::view('/about', 'about')->name('about');

Route::view('/auth','user.auth')->name('auth');
Route::post('/auth',[UserController::class,'loginPost'])->name('auth');
Route::view('/register','user.register')->name('register');
Route::post('/register',[UserController::class, 'registrationPost']);
Route::view('/catalog','catalog')->name('catalog');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[UserController::class, 'logout'])->name('logout');
});

Route::view('/admin','admin.admin-panel')->name('admin');
