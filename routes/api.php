<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('forgot', 'ForgotController@forgot');
Route::post('reset', 'ForgotController@reset');
Route::post('checkToken', 'ForgotController@checkToken');

//AuthController Routes
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->middleware('auth:api');
Route::get('user', 'AuthController@user')->middleware('auth:api');
Route::post('update/{user}', 'AuthController@update')->middleware('auth:api');

Route::get('resources', 'APIController@ViewResources')->middleware('auth:api');
Route::get('events', 'APIController@ViewEvents')->middleware('auth:api');
Route::get('videos', 'APIController@ViewVideos')->middleware('auth:api');
Route::get('staff', 'APIController@ViewStaff')->middleware('auth:api');
Route::get('about', 'APIController@ViewAbout')->middleware('auth:api');
Route::get('contact', 'APIController@ViewContact')->middleware('auth:api');
Route::get('homepage', 'APIController@ViewhomePage')->middleware('auth:api');
Route::post('contactus', 'ContactusController@store')->middleware('auth:api');;
Route::post('sendpost', 'PostController@store')->middleware('auth:api');
Route::get('viewposts', 'PostController@ViewPosts')->middleware('auth:api');
Route::post('sendcomment', 'CommentController@store')->middleware('auth:api');
Route::post('viewcomments', 'CommentController@ViewComments')->middleware('auth:api');
