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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources(['comments' => 'CommentController']);

// need 5 route rida all on üks variant
//Route::get('/posts', 'PostController@index');
//Route::get('/posts/{post}', 'PostController@show');
//Route::post('/posts', 'Postcontroller@store');
//Route::patch('/posts/{post}', 'PostController@update');
//Route::delete('/posts/{post}', 'PostController@destroy');
Route::resources(['posts' => 'PostController']); // võib aga sama asja ühe reaga teha
