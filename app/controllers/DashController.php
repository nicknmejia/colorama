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
		$tomorrow = date('m-d-Y', strtotime(' +1 day'));
		$today = date('m-d-Y');

		$name = Auth::user()->f_name;
		$admin = Auth::user()->admin;
		$id = Auth::id();
		$territory = Auth::user()->territory;
		$order_info = array();
		$order_check = DB::table('orders')
						 ->where('username', Auth::user()
												->username)
						 ->where('ship_date','=',$tomorrow)
						 ->where('print', '!=', 3)
						 ->orderBy('ship_date', 'desc')
						 ->get();

		$pending = DB::table('orders')
						->where('username', Auth::user()
												->username)
						->where('progress', '=', 0)
						->get();

		$printed = DB::table('orders')
						->where('username', Auth::user()
												->username)
						->where('progress', '=', 1)
						->get();

		$processed = DB::table('orders')
						->where('username', Auth::user()
												->username)
						->where('progress', '=', 2)
						->get();

		$order_count = count($order_check);

		if($admin === "YES")
		{
			return View::make('admin_dash')
				->withUser($name)
				->withId($id)
				->withAdmin($admin)
				->withTerritory($territory)
				->withOrder_check($order_check)
				->withOrder_count($order_count)
				->withPending($pending)
				->withPrinted($printed)
				->withProcessed($processed)
				->withTomorrow($tomorrow)
				->withToday($today);
		}
		elseif($admin === "NO")
		{
			return View::make('dashboard')
				->withUser($name)
				->withId($id)
				->withAdmin($admin)
				->withTerritory($territory)
				->withOrder_check($order_check)
				->withOrder_count($order_count)
				->withPending($pending)
				->withPrinted($printed)
				->withProcessed($processed);;
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
	public function more()
	{
		return View::make('admin.more_tools');
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
