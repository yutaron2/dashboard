<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get(
    '/users', 
    [Controller::class, 'index']
)->name('index');

Route::get(
    '/create', 
    [Controller::class, 'create']
)->name('index');

Route::post(
    '/create', 
    [Controller::class, 'store']
)->name('store');



//適当な文字列を返すだけのルート
