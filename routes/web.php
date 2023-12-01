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
)->name('create');

Route::post(
    '/create', 
    [Controller::class, 'store']
)->name('store');

Route::get(
    '/edit/{id}', 
    [Controller::class, 'edit']
)->name('edit');

Route::post(
    'update/{id}',
    [Controller::class, 'update']
)->name('update');

Route::delete(
    'delete/{id}',
    [Controller::class, 'delete']
)->name('delete');

