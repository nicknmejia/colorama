<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Just in case someone lands on the home address
Route::get('/', 'dashController@index');

// ============================================== //
// =================== Login ==================== //
// ============================================== //

Route::get('login', 'dashController@index');
Route::post('login', 'HomeController@doLogin');

// ============================================== //
// ================= End Login ================== //
// ============================================== //


// ============================================== //
// ============= Application Start ============== //
// ============================================== //
// All of the following routes require AT LEAST low-level auth
Route::group(array('before' => 'auth'), function()
{
	Route::get('/dashboard', 'dashController@dashboard');
	Route::get('/createuser', 'dashController@newuser');
	Route::get('/form', 'dashController@create');
});

// ============================================== //
// ============== Application End =============== //
// ============================================== //

// ============================================== //
// ================== Logout ==================== //
// ============================================== //

Route::get('logout', array('uses' => 'HomeController@doLogout'));