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
Route::get('/', 'DashController@index');


// ============================================== //
// =================== Login ==================== //
// ============================================== //

Route::get('login', 'DashController@index');
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
	// Non-resourced routes for the dash and order forms.  Until you can think of
	// a better way to do this, this will have to do
	Route::get('/dashboard', 'DashController@dashboard');
	Route::get('/createuser', 'DashController@newuser');
	Route::get('/tools', 'DashController@more');
	Route::post('/review', 'OrderController@review');
	Route::post('/orders/organics', 'OrderController@organic');

	// Non-resourced Temporary storage routes
	Route::post('/orders/form-one', 'OrderController@store_temp');
	Route::post('/orders/form-two', 'OrderController@store_temp_two');
	Route::post('/orders/form-three', 'OrderController@store_temp_three');

	// Non-resourced Order Management Routes
	Route::post('/orders/order_display', 'OrderController@order_display');

	// Non-resourced Availability Routes
	Route::post('/availability/update', 'AvailController@avail_update');
	
	// RESTful routes!  Huzzah!
	Route::resource('orders','OrderController');
	Route::resource('users','UserController');
	Route::resource('availability','AvailController');

});

// ============================================== //
// ============== Application End =============== //
// ============================================== //

// ============================================== //
// ================== Logout ==================== //
// ============================================== //

Route::get('logout', array('uses' => 'HomeController@doLogout'));