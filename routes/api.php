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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');
Route::post('articles', 'App\Http\Controllers\ArticleController@store');
Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update');
Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete');

Route::get('categories', 'App\Http\Controllers\CategoryController@index');
Route::get('categories/{categories}', 'App\Http\Controllers\CategoryController@show');
Route::post('categories', 'App\Http\Controllers\CategoryController@store');
Route::put('categories/{categories}', 'App\Http\Controllers\CategoryController@update');
Route::delete('categories/{categories}', 'App\Http\Controllers\CategoryController@delete');

