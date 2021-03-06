<?php

Route::get('/','BaseController@getIndex');//вызов ase controller метод getIndex

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products','ProductController@getAll');

Route::get('/catalog/{id}','ProductController@getCat');

Route::get('/product/{id}','ProductController@getOne');

Route::post('home','HomeController@postIndex');

Route::group(['middleware'=>['admin']],function(){
	Route::get('admin/index','AdminController@getIndex');
});
