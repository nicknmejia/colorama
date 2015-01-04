<?php

class UserController extends \BaseController {

	/**
	 * Display all users.  ADMIN ONLY.
	 *
	 * @return Response
	 */
	public function index()
	{
		// 1. Add key that checks if user has admin privelages
		if(Auth::user()->admin != 'YES'){
			return Redirect::to('dashboard');
		}

		// 2. if(admin_is_set) Return list of users

		$users = DB::table('users')->get();

		return View::make('admin.edit_users')->withUsers($users);

		// 2. else reroute user to dashboard
	}


	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 1. Add key that checks if user has admin privelages
		if(Auth::user()->admin != 'YES'){
			return Redirect::to('dashboard');
		}
		// 2. if(admin_is_set) Return form for new user
		return View::make('admin.new_user');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array(
		'f_name'     => 'required',
		'l_name'     => 'required',
		'email'     => 'required|email',
		'user'	    => 'required',
		'pass'      => 'required',
		'pass_check' => 'required'
		);

		$messages = array(
    	'f_name.required'     => '<li>Your first name is required</li>',
		'l_name.required'     => '<li>Your last name is required</li>',
		'email.required'     => '<li>You must enter an email adress</li>',
		'email.email'        => '<li>You must enter a vaild email adress</li>',
		'user.required'	 => '<li>You must enter a username</li>',
		'pass.required'      => '<li>You must enter a password</li>',
		'pass_check.required'       => '<li>You must repeat the password</li>'
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if($validator->fails()){
			return Redirect::to('users/create')
			->withErrors($validator)
			->withInput();
		}
		else{

			$input = Input::all();
			// mySQL for storing new user here
			// Try using an eloquent model for this.
			if($input['pass'] != $input['pass_check']){
				return Redirect::to('users/create')->with('message', '<div data-alert class="alert-box info radius">Your passwords did not match.</div>');
			}

			/*User::create(array(
			'name'     => 'Bob Harris',
			'username' => 'bharris',
			'email'    => 'bharris@mrmail.com',
			'password' => Hash::make('cheese'),
		));*/

			DB::table('users')->insert(array(
			    array('f_name' => $input['f_name'],
			    	  'l_name' => $input['l_name'],
			    	  'email' => $input['email'],
			    	  'username' => $input['user'],
			    	  'password' => Hash::make($input['pass']),
			    	  'admin' => 'NO')
			));

			return View::make('admin.info')->withInput($input);
		}
	}


	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Show users profile before edit
		// You will need to create a new view for this
	}


	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// 1. Select current logged in user ID.  Check ID against ID to edit.

		// 2. if(ID_matches) return form for editing profile

		return View::make('admin.edit_profile');

		// 2. else reroute user to dashboard
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Update user info!
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Delete user!
	}


}
