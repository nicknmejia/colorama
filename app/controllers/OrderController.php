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
		$products = array();
		$to_list = array();
		$tables = DB::select('select * from information_schema.tables where table_schema="coloramaorders"');
		$table_count = count($tables);

		for($i = 0;$i < $table_count; $i++){
			//array_push($products, $tables[$i]->TABLE_NAME);
			if($tables[$i]->TABLE_NAME != "users" && $tables[$i]->TABLE_NAME != "migrations"){
				array_push($products, $tables[$i]->TABLE_NAME);
				$to_list[$tables[$i]->TABLE_NAME] = DB::table($tables[$i]->TABLE_NAME)->get(); 
			}
			else{}
		}

		return View::make('orders.form')
			->withTo_list($to_list);
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
