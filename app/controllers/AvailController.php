<?php

class AvailController extends \BaseController {

	/**
	 * Display a listing from availability.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('avail.avail_printout');
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
	public function edit($territory)
	{
		//
	}


	/**
	 * Update the availability.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($territory)
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
