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
		Session::forget('tables');
		Session::forget('userdata');
		Session::forget('p1_cat');
		Session::forget('p1_items');
		Session::forget('p2_items');
		Session::forget('p2_cat');
		Session::forget('p3_items');
		Session::forget('p3_cat');
		Session::forget('id');
		Session::forget('set_categories');
		Session::forget('order_check');
		Session::forget('p1_check');
		Session::forget('p2_check');
		Session::forget('p3_check');
		Session::forget('items');
		
		$tomorrow = date('m-d-Y', strtotime(' +1 day'));
		//  Get User Data
		$name = Auth::user()->f_name;
		$admin = Auth::user()->admin;
		$id = Auth::id();
		$territory = Auth::user()->territory;

		// Gather Current Users Orders 
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
				->withProcessed($processed);
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
				->withProcessed($processed);
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
