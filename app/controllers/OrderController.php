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
		return View::make('orders.review');
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
