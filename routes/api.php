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


Route::post('/login', 'App\Http\Controllers\UserController@login');
// Route::get('/login', 'UserController@login');
Route::post('register', 'App\Http\Controllers\UserController@register');

Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::post('/upload-file', 'App\Http\Controllers\ProductController@uploadFile');

// Route::get('/products', 'ProductController@index');
// Route::get('/products','App\Http\Controllers\ProductControllers@index');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('/products','App\Http\Controllers\ProductController@store');
    Route::put('/products','App\Http\Controllers\ProductController@update');
    Route::delete('/products','App\Http\Controllers\ProductController@destroy');
    Route::resource('/users','App\Http\Controllers\UserController');
    Route::apiresource('/categories','App\Http\Controllers\CategorieController');
    Route::delete('/categories','App\Http\Controllers\ProductController@destroy');
    Route::resource('/etats','App\Http\Controllers\EtatController');
});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

