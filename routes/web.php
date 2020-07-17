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
Route::get('/aboutus',function(){
    return view('about');
});
// Route::get('products',function()
// {
// 	return view('products');
// });
Route::get('/login1','StudInsertController@insertlogin');
Route::get('create11','StudInsertController@insert2');

Route::get('/user','users@dbCheck');
Route::get('insert','StudInsertController@insertform');
Route::get('create','StudInsertController@insert');

//rajat
Route::get('complaint1','StudInsertController@insertcomplaint');
Route::get('create1','StudInsertController@insert1');

//shivanshi
Route::get('/admin',function()
{
	return view('adminlogin');
});
Route::post('/loginme','loginController@login');
Route::get('/users','DisplayController@dbcheck');
Route::get('/db', 'Userss@dbCheck');

//shubham
Route::get('order','FrontendController@order' );
Route::get('product','FrontendController@product' );
Route::get('check','FrontendController@check' );
Route::get('electric','FrontendController@electric' );
Route::get('/student','StudentController@displayform' );
Route::view('/new',"newuser");
Route::post('/add_data','StudentController@save');