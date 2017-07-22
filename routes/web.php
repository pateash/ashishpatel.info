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
    return view('home');
});


Route::post("/saveContact",'ContactController@index');

/*
	this needs to be added as we have used 'mode:history' in vue-router,
	when laravel app looks for '/education' if reloaded(using reload button), then it will give error,
	as it will not find it inside routes/web.php,

	 So we have to just redirect any url to home page which is 'home.blade.php' here 
 */

//this needs to be kept at last so when it doesn't match anything then it comes here
 Route::get('/{anything}', function () {
     return view('home');
 })->where(['anything'=>'.+']);

//we can also use where(['anything'=>'.*'], so we don't have to have two routes