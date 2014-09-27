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

		// 2. if(admin_is_set) Return list of users
		return View::make('admins.edit_users');

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

		// 2. if(admin_is_set) Return form for new user
		return View::make('admin.new_user');

		// 2. else reroute user to dashboard
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// mySQL for storing new user here
		// Try using an eloquent model for this.
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
