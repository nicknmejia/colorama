<?php

class DashController extends \BaseController {

	/**
	 * Display Login Page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}


	/**
	 * Show the dashboard.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		$name = Auth::user()->name;
		$admin = Auth::user()->admin;
		if($admin === "YES")
		{
			return View::make('admin_dash')->withUser($name);
		}
		elseif($admin === "NO")
		{
			return View::make('dashboard')->withUser($name);
		}
		else
		{
			return View::make('login');
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Create temp user.
	 */
	public function newuser()
	{
		$login = new User();
		$login->user = "staff";
		$login->password = Hash::make('password');
		$login->save();
		return "User created";
	}
}
