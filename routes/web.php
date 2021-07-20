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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/index', function () {
    return view('index');
})->middleware(['is_admin'])->name('index');

Route::resource('resource', 'Admin\ResourceController')->middleware(['is_admin']);
Route::resource('event', 'Admin\EventController')->middleware(['is_admin']);
Route::resource('video', 'Admin\VideoController')->middleware(['is_admin']);
Route::resource('staff', 'Admin\StaffController')->middleware(['is_admin']);
Route::resource('about', 'Admin\AboutController')->middleware(['is_admin']);
Route::resource('contact', 'Admin\ContactController')->middleware(['is_admin']);
Route::resource('homepage', 'Admin\HomePageController')->middleware(['is_admin']);
Route::resource('user', 'Admin\UserController')->middleware(['is_admin']);
Route::resource('contactus', 'Admin\ContactusController')->middleware(['is_admin']);
require __DIR__ . '/auth.php';
