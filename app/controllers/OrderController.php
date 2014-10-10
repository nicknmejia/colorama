<?php

class OrderController extends \BaseController {

	/**
	 * Display a new form
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
	 * Review your order before storing it.
	 *
	 * @return Response
	 */
	public function review()
	{

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
			return View::make('orders.review');
			}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
