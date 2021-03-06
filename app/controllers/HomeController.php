<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		Session::put('failure', 0);
		return View::make('hello');
	}

	public function doLogin(){
		// validate the info, create rules for the inputs
		$rules = array(
				'user' => 'required', //make sure the email is an actual email
				'pass' => 'required|alphaNum|min:3' //
			);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		//if the validator fails, redirect back to the form
		if ($validator->fails()) {
			Session::put('failure', 1);
			return Redirect::to('login')
				->withErrors($validator) //send back all errors to the login form
				->withInput(Input::Except('pass')); // send back all the input so form is repopulated
			} else {

			//create our user data for the authentication
				$userdata = array(
					'username'	=> Input::get('user'),
					'password' => Input::get('pass')
				);

			//attempt login
				if (Auth::attempt($userdata)) {

					echo 'SUCCESS!';
					return Redirect::to('dashboard');

				} else {
					return Redirect::to('login')
						->withErrors($validator) //send back all errors to the login form
						->withInput(Input::Except('pass')); // send back all the input so form is repopulated

				

			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		Session::flush();
		return Redirect::to('login'); // redirect the user to the login screen
	}

}
