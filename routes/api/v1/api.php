<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//   return $request->user();
// });

//Users
Route::prefix ('/user')->group(function () {
  Route::post('login', 'Api\v1\LoginController@login');
  Route::middleware('auth:api')->get('/all', 'Api\v1\UserController@index');
  Route::middleware('auth:api')->get('/{user}', 'Api\v1\UserController@show');
});