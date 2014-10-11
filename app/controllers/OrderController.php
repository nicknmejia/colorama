<?php

class OrderController extends \BaseController {

	/**
	 * Display a new something.  I don't think I need the index route.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$tables = DB::table('categories')->get();
		$table_count = count($tables);
		$items = array();
		$count = 0;
		foreach($tables as $category){
			array_push($items, DB::table($category->table)->get());
		}

		return View::make('orders.form')
			->withTables($tables)
			->withItems($items)
			->withCount($count)
			->withTable_count($table_count);
	}


	/**
	 * Create an organic order as well
	 *
	 * @return Response
	 */
	public function organic()
	{
		$userdata = Session::get('userdata');
		$userdata['organic'] = "ok";
		Session::put('userdata',$userdata);

		return View::make('orders.organics');
	}


	/**
	 * Review your order before storing it.
	 *
	 * @return Response
	 */
	public function review()
	{

		$organic = Input::get('organic');

		$userdata = Input::only(
						'fname',
						'lname',
						'email',
						'sname',
						'snum',
						'territory',
						'date',
						'organic');

		Session::put('userdata',$userdata);

		if($organic === "yes"){
			return Redirect::to('orders/organics');
			/**
				* DONT FORGET TO PASS THE ARRAYS GENERATED FROM YOUR ORDER
				* WITH THE VIEW TRANSFER.  YOU NEED THOSE STILL...DUMBASS
			*/
		}

		$rules = array(
		'fname'     => 'required',
		'lname'     => 'required',
		'email'     => 'required|email',
		'sname'	    => 'required',
		'snum'      => 'required|numeric',
		'territory' => 'required',
		'date'      => 'required|date',
		'organic'   => 'required'
	);

		$messages = array(
    	'fname.required'     => '<li>Your first name is required</li>',
		'lname.required'     => '<li>Your last name is required</li>',
		'email.required'     => '<li>You must enter an email adress</li>',
		'email.email'        => '<li>You must enter a vaild email adress</li>',
		'sname.required'	 => '<li>The store name is required</li>',
		'snum.required'      => '<li>You must enter a store number</li>',
		'snum.numeric'       => '<li>A valid store number is required</li>',
		'territory.required' => '<li>Please select a territory</li>',
		'date.required'      => '<li>Please select a date</li>',
		'date.date'          => '<li>A valid date is required</li>',
		'organic.required'   => '<li>Please indicate whether or not an organic order is required</li>'	
	);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if($validator->fails()){
			return Redirect::to('orders/create')
			->withErrors($validator);
		}
		else{
			$userdata = Session::get('userdata');
			return View::make('orders.review')->withUserdata($userdata);
			}
	}


	/**
	 * Store a newly created order in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return View::make('orders.confirmation');
	}


	/**
	 * Display the current users orders
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('orders.view_orders');
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


}
