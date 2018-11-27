<?php

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



Route::resource('gamedetails', 'gamedetailController');

//Route::get('/result.create', function () {
//    return view('result.create')->name('result.create');
//});

Route::get('/create',[
    'as' => 'result.create',
    'uses' => 'gamedetailController@create'
]);

Route::get('/show/{id}',[
    'as' => 'result.show',
    'uses' => 'gamedetailController@show'
]);
Route::get('/edit/{id}',[
    'as' => 'result.edit',
    'uses' => 'gamedetailController@edit'
]);
Route::patch('/destroy',[
    'as' => 'result.destroy',
    'uses' => 'gamedetailController@destroy'
]);
Route::post('/store',[
    'as' => 'result.store',
    'uses' => 'gamedetailController@store'
]);
Route::get('/index',[
    'as' => 'result.index',
    'uses' => 'gamedetailController@index'
]);

Route::post('/update/{id}',[
    'as' => 'result.update',
    'uses' => 'gamedetailController@update'
]);