<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
})->middleware(['auth'])->name('index');

Route::resource('resource', 'Admin\ResourceController')->middleware(['auth']);
Route::resource('event', 'Admin\EventController')->middleware(['auth']);
Route::resource('video', 'Admin\VideoController')->middleware(['auth']);
Route::resource('staff', 'Admin\StaffController')->middleware(['auth']);
Route::resource('about', 'Admin\AboutController')->middleware(['auth']);
Route::resource('contact', 'Admin\StaffController')->middleware(['auth']);
require __DIR__ . '/auth.php';
