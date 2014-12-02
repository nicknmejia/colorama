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

		$input = Input::except('_token');
		$last_id = DB::table($input['category'])->max('id');
		$new_id = $last_id + 1;

		DB::table($input['category'])->insert(
				array('id' => $new_id,
					  'description' => $input['name'],
					  'qty' => $input['switch'],
					  'rating' => $input['rating'])
			);

		return Redirect::to('availability')->with('message', 'Item Added Successful');
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

		Session::put('category', $category);

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
	public function avail_update()
	{
		$input = Input::except('_token','$object->id');

		foreach($input as $array => $object)
		{
			if(substr($array,0,1)==='r')
			{
				if(!empty($object))
				{
					DB::table(Session::get('category'))->where('id',substr($array,1))->update(array('rating' => strtoupper($object)));
				}
				else
				{
				}
			}
			elseif(substr($array,0,1)==='s')
			{
				if(!empty($object))
				{

					if($object === "on")
					{
						DB::table(Session::get('category'))->where('id',substr($array,1))->update(array('qty' => 1));
					}
					elseif($object === "off")
					{
						DB::table(Session::get('category'))->where('id',substr($array,1))->update(array('qty' => 0));
					}
				}
				else
				{
				}
			}
		}

		Session::forget('category');

		return Redirect::to('availability')->with('message', 'Update Successful');
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
