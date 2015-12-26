<?php


Route::get('/', function () {return view('index');});

/* LOGIN_PAGE -- Start of Login Purpose Method */

Route::get('generalLogin', 'LoginController@generalLogin');
Route::get('consoleLogin', 'LoginController@consoleLogin');

/* LOGIN_PAGE -- End of Login Purpose Method */

/* GENERAL_MEMBER -- Start of General Member System Method */



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
