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

Route::group(['middleware' => ['api']], function() {

Route::get('/user', "HomeController@getUser");
/*route for value submit*/
Route::post('/index',"ProjectController@CreateResponse");
/*route for fetch the response*/
Route::get('/index/{id}',"ProjectController@getResponse");
});