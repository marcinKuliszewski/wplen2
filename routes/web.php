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

Route::get('/addfoto', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);


Route::get('/', function () {
    return view('szukarka.panel');
});

Route::get('/dodaj', function () {
    if(Auth::check())
    {
    return view('dodaj.panel');
    }
 else 
 { 
     return view('auth.login');
  }
});

Route::get('/szukaj',[
    'uses'=>'SzukajController@szukarka',
    'as'=>'szukaj.szukarka'
]);

Route::post('/zapisz',[
    'uses'=>'DodajController@zapisz',
    'as'=>'dodaj.zapisz'
]);

Route::get('/edycja/{oferta}',[
    'uses'=>'DodajController@edycja',
    'as'=>'dodaj.edycja'
]);



Route::get('/import', 'HomeController@import_baz');

Auth::routes();

Route::get('/home', 'HomeController@ajent')->name('home');

