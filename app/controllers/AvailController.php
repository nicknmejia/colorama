<?php

class AvailController extends \BaseController {

	/**
	 * Display a listing from availability.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = DB::table('categories')->get();

		return View::make('avail.availability')
			->withCategories($categories);
	}


	/**
	 * Show the form for creating a new availability.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('avail.availability');
	}


	/**
	 * Store a newly created item.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified items from the availability.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($territory)
	{
		//
	}


	/**
	 * Show the form for editing something else possibly
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($category)
	{
		$items = DB::table($category)->get();

		return View::make('avail.avail_edit')
						->withItems($items)
						->withCategory($category);
	}


	/**
	 * Update the availability.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($category)
	{
		//
	}


	/**
	 * Remove the specified item from the avail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($territory)
	{
		//
	}


}
