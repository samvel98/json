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

// Route::post('say-hello', function(Request $request) {
// 	$todo = [
// 		'id' => 1,
// 		'title' => 'First todo title',
// 		'created_at' => 'today'
// 	];

// 	dd($request->all());

// 	return response()->json($todo);
// });

Route::resource('articles', 'ArticleController');

Route::get('todo', 'TodoController@index');
Route::get('todo/{id}', 'TodoController@show');
Route::put('todo', 'TodoController@create');
Route::patch('todo/{id}', 'TodoController@update');
Route::delete('todo/{id}', 'TodoController@destory');