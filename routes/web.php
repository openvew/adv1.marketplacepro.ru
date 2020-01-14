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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'users','as'=>'users.']
,function()
{
 Route::get('{user_id}/companies',['as'=>'user_companies','uses'=> 'UsersController@companies']);	
 Route::get('create',['as'=>'create','uses'=> 'UsersController@create']);	
 Route::post('create',['as'=>'create','uses'=> 'UsersController@store']);	
 Route::get('view/{id}',['as'=>'view','uses'=> 'UsersController@view']);	
 Route::get('',['as'=>'index','uses'=> 'UsersController@index']);	
});

Route::resource('shops','ShopController');	


	

