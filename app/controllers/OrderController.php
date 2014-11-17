 <?php

class OrderController extends \BaseController {

	/**
	 * Display the page for order management options
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		return View::make('orders.manage');
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Session::forget('tables');
		Session::forget('userdata');
		Session::forget('p1_cat');
		Session::forget('p1_items');
		Session::forget('p1_items_final');
		Session::forget('p2_items');
		Session::forget('p2_items_final');		
		Session::forget('p2_cat');
		Session::forget('p3_items');
		Session::forget('p3_items_final');
		Session::forget('p3_cat');
		Session::forget('id');
		Session::forget('set_categories');
		Session::forget('order_check');
		Session::forget('p1_check');
		Session::forget('p2_check');
		Session::forget('p3_check');
		Session::forget('final_check');
		Session::forget('items');

		return View::make('orders.form');
	}






	/**
	 * Store the temporary order info and display section 1
	 *
	 * @return Response
	 */

	public function store_temp()
	{
		if(Session::get('final_check') == 1){
			return Redirect::to('/dashboard')->with('message', 'You must start a new order');
		}
		//

		//===================================
				// Grab the tables
				// and make an array
				// with all avail items
		//===================================	

		$tables = DB::table('categories')->get();
		Session::put('tables', $tables);
		$table_count = count($tables);
		$items = array();
		foreach($tables as $category){
			array_push($items, DB::table($category->table)->where('qty','!=',0)->get());
		}

		//===================================
				// Get Order Info
		//===================================	

		$userdata = Input::only(
						'fname',
						'lname',
						'email',
						'sname',
						'snum',
						'territory',
						'date',
						'sinstruct',
						'store_type',
						'po');

		Session::put('userdata',$userdata);

		//===================================
				// Get Selected Catagories
		//===================================	

			$set_categories = array();
			foreach($tables as $array => $object){
				if(isset($_POST[$object->table])){
					array_push($set_categories, $object->table);
				}
			}
			Session::put('set_categories', $set_categories);

		//===================================
				// Page One Query
		//===================================	
			$p1_cat = array("808 Paks" => "pak808",
						    "806 Paks" => "pak806",
						    "4\" Paks" => "pak4inch",
						    "Quarts"   => "quarts",
						    "Gallons"  => "gallons");
			foreach($p1_cat as $array_name => $table){
				if(!isset($_POST[$table])){
					unset($p1_cat[$array_name]);
				}
			}
			$p1_items = array();
			foreach($p1_cat as $array_name => $table){
				array_push($p1_items, DB::table($table)->where('qty','!=',0)->get());
			}

			Session::put('p1_cat', $p1_cat);
			Session::put('p1_items', $p1_items);

		//===================================
				// Page Two Query
		//===================================

			$p2_cat = array("Half Flats" 		   => "halfflat",
						    "Full Flats" 		   => "fullflat",
						    "Cyclamen" 			   => "cyclamen",
						    "2 Gallon Pots"        => "2galpots",
						    "4\" Proven Winners "  => "pak4inchpw",
						    "8\" Proven Winners "  => "pak8inchpw",
							"Vigoro Quarts" 	   => "qrtvig",
							"Viva Quarts" 		   => "qrtviva",
							"Vigoro Gallons" 	   => "galvig",
							"Viva Gallons" 		   => "galviva",
							"1802 Paks" 		   => "pak1802",
							"306 Paks" 			   => "pak306",
							"Hanging Baskets" 	   => "baskets",
							"Caches & Color Bowls" => "caches");
			foreach($p2_cat as $array_num => $table){
				if(!isset($_POST[$table])){
					unset($p2_cat[$array_num]);
				}
			}
			$p2_items = array();
			foreach($p2_cat as $array_name => $table){
				array_push($p2_items, DB::table($table)->where('qty','!=',0)->get());
			}
			Session::put('p2_cat', $p2_cat);
			Session::put('p2_items', $p2_items);

		//===================================
				// Page Three Query
		//===================================


			$p3_cat = array("4\" Mums " 			 => "mums4inch",
							"Gallon Mums" 			 => "mumsgallon",
							"Pak Veggie(Non-Org)" 	 => "pakveg_no",
							"4\" Veggie(Non-Org)" 	 => "4inchveg_no",
							"Gallon Veggie(Non-Org)" => "galveg_no",
							"Herbs(Non-Org)" 		 => "herbs_no",
							"2 Gallon Veg(Non-Org)"  => "2galveg_no",
							"Metal Racks" 			 => "racks",
							"Various Items" 		 => "misc");
			foreach($p3_cat as $array_num => $table){
				if(!isset($_POST[$table])){
					unset($p3_cat[$array_num]);
				}
			}
			$p3_items = array();
			foreach($p3_cat as $array_name => $table){
				array_push($p3_items, DB::table($table)->where('qty','!=',0)->get());
			}
			Session::put('p3_cat', $p3_cat);
			Session::put('p3_items', $p3_items);

		//===================================
				// End Form Queries
		//===================================

			/**
				* DONT FORGET TO PASS THE ARRAYS GENERATED FROM YOUR ORDER
				* WITH THE VIEW TRANSFER.  YOU NEED THOSE STILL...DUMBASS
			*/

		$rules = array(
		'fname'     => 'required',
		'lname'     => 'required',
		'email'     => 'required|email',
		'sname'	    => 'required',
		'snum'      => 'required|numeric',
		'territory' => 'required',
		'date'      => 'required|date_format:"m-d-Y"'
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
		'date.date'          => '<li>A valid date is required</li>'
	);


		$validator = Validator::make(Input::all(), $rules, $messages);

		if($validator->fails()){
			return Redirect::to('orders/create')
			->withErrors($validator)
			->withInput();
		}
		else{

		$userdata = Session::get('userdata');

		if(Session::get('order_check') == 1){
			DB::table('orders_temp')
            ->where('id', Session::get('id'))
            ->update(array('order_date' => date('m-d-Y'),
    			  'ship_date'  => $userdata['date'], 
    			  'f_name'     => $userdata['fname'],
    			  'l_name'	   => $userdata['lname'],
    			  's_name'	   => $userdata['sname'],
    			  's_num'      => $userdata['snum'],
    			  'territory'  => $userdata['territory'],
    			  'timestamp'  => date('m-d-Y H:i:s'),
    			  's_instruct' => $userdata['sinstruct'],
    			  'email'      => $userdata['email'],
    			  'store_type' => $userdata['store_type'],
    			  'po' 		   => $userdata['po'],
    			  'username'   => Auth::user()->username)

            );
		}
		else{
		$id = DB::table('orders_temp')->insertGetId(
    			array('order_date' => date('m-d-Y'),
    			  'ship_date'  => $userdata['date'], 
    			  'f_name'     => $userdata['fname'],
    			  'l_name'	   => $userdata['lname'],
    			  's_name'	   => $userdata['sname'],
    			  's_num'      => $userdata['snum'],
    			  'territory'  => $userdata['territory'],
    			  'timestamp'  => date('m-d-Y H:i:s'),
    			  's_instruct' => $userdata['sinstruct'],
    			  'email'      => $userdata['email'],
    			  'store_type' => $userdata['store_type'],
    			  'po' 		   => $userdata['po'],
    			  'username'   => Auth::user()->username)
		);
		Session::put('id', $id);
		}

		
		Session::put('order_check',1);
		return View::make('orders.form-one')
						->withP1_cat($p1_cat)
						->withP1_items($p1_items)
						->withItems($items);

		}
	}






	/**
	 * Store the temporary order items from section 1 and display section 2
	 *
	 * @return Response
	 */

	public function store_temp_two()
	{

		if(Session::get('final_check') == 1){
			return Redirect::to('/dashboard')->with('message', 'You must start a new order');
		}

		if(Session::get('p1_check') == 1){
			DB::table('product_temp')->where('page', '=', 'p1')->where('order', '=', Session::get('id'))->delete();
			Session::forget('p1_items_final');
		}


		$items = Session::get('p1_items');
		$p1_cat = Session::get('p1_cat');

		foreach($items as $array_pos => $array2){
		      $num_of_rows = count($items[$array_pos]);
		      for($i = 0;$i < $num_of_rows;$i++){
		      	
		      	if(Input::get($items[$array_pos][$i]->id) != ''){
		        	$items[$array_pos][$i]->qty = Input::get($items[$array_pos][$i]->id);
		        	DB::table('product_temp')->insert(
		  	 		array('order' => Session::get('id'),
		  	 		 	  'id' => $items[$array_pos][$i]->id, 
		  	 		 	  'qty' => $items[$array_pos][$i]->qty, 
		  	 		 	  'page' => 'p1',
		  	 		 	  'description' => $items[$array_pos][$i]->description,
		  	 		 	  'category' => $p1_cat[key($p1_cat)]
		  	 		 	)
					);
		        }
		      	else{
		        	unset($items[$array_pos][$i]);
		      	}

		      }
		      next($p1_cat);
	    }

		$p2_cat = Session::get('p2_cat');
		$p2_items = Session::get('p2_items');
		Session::put('p1_items_final', $items);
		Session::put('p1_check', 1);
		return View::make('orders.form-two')
						->withP2_cat($p2_cat)
						->withP2_items($p2_items)
						->withItems($items);
	}





	/**
	 * Store the temporary order items from section 1 and display section 2
	 *
	 * @return Response
	 */

	public function store_temp_three()
	{	

		if(Session::get('final_check') == 1){
			return Redirect::to('/dashboard')->with('message', 'You must start a new order');
		}

		if(Session::get('p2_check') == 1){
			DB::table('product_temp')->where('page', '=', 'p2')->where('order', '=', Session::get('id'))->delete();
			Session::forget('p2_items_final');
		}

		$items = Session::Get('p2_items');
		$p2_cat = Session::get('p2_cat');

		foreach($items as $array_pos => $array2){
		      $num_of_rows = count($items[$array_pos]);
		      for($i = 0;$i < $num_of_rows;$i++){
		      	if(Input::get($items[$array_pos][$i]->id) != ''){
		        	$items[$array_pos][$i]->qty = Input::get($items[$array_pos][$i]->id);
		        	DB::table('product_temp')->insert(
		  	 		array('order' => Session::get('id'),
		  	 		 	  'id' => $items[$array_pos][$i]->id, 
		  	 		 	  'qty' => $items[$array_pos][$i]->qty, 
		  	 		 	  'page' => 'p2',
		  	 		 	  'description' => $items[$array_pos][$i]->description,
		  	 		 	  'category' => $p2_cat[key($p2_cat)]
		  	 		 	)
					);
		        }
		      	else{
		        	unset($items[$array_pos][$i]);
		      	}

		      }
		      next($p2_cat);
	    }
		
		$p3_cat = Session::get('p3_cat');
		$p3_items = Session::get('p3_items');
		Session::put('p2_items_final', $items);
		Session::put('p2_check', 1);
		return View::make('orders.form-three')
						->withP3_cat($p3_cat)
						->withP3_items($p3_items);
	}





	/**
	 * Review your order before storing it.
	 *
	 * @return Response
	 */
	public function review()
	{

		if(Session::get('final_check') == 1){
			return Redirect::to('/dashboard')->with('message', 'You must start a new order');
		}

		if(Session::get('p3_check') == 1){
			DB::table('product_temp')->where('page', '=', 'p3')->where('order', '=', Session::get('id'))->delete();
			Session::forget('p3_items_final');
		}

		$items = Session::Get('p3_items');
		$p3_cat = Session::get('p3_cat');

		foreach($items as $array_pos => $array2){
		      $num_of_rows = count($items[$array_pos]);
		      for($i = 0;$i < $num_of_rows;$i++){
		      	if(Input::get($items[$array_pos][$i]->id) != ''){
		        	$items[$array_pos][$i]->qty = Input::get($items[$array_pos][$i]->id);
		        	DB::table('product_temp')->insert(
		  	 		array('order' => Session::get('id'),
		  	 		 	  'id' => $items[$array_pos][$i]->id, 
		  	 		 	  'qty' => $items[$array_pos][$i]->qty, 
		  	 		 	  'page' => 'p3',
		  	 		 	  'description' => $items[$array_pos][$i]->description,
		  	 		 	  'category' => $p3_cat[key($p3_cat)]
		  	 		 	)
					);
		        }
		      	else{
		        	unset($items[$array_pos][$i]);
		      	}

		      }
		      next($p3_cat);
	    }

	    Session::put('p3_items_final', $items);
		Session::put('p3_check', 1);

		$id = Session::get('id');
		$order = DB::table('orders_temp')->where('id', Session::get('id'))->get();



		return View::make('orders.review')->withOrder($order)->withId($id);

	}





	/**
	 * Store a newly created order in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Session::get('final_check') == 1){
			return Redirect::to('/dashboard')->with('message', 'You must start a new order');
		}

		$order = DB::table('orders_temp')->where('id', Session::get('id'))->get();

		$new_id = DB::table('orders')->insertGetId(
    			array('order_date' => date('m-d-Y'),
    			  'ship_date'  => $order[0]->ship_date, 
    			  'f_name'     => $order[0]->f_name,
    			  'l_name'	   => $order[0]->l_name,
    			  's_name'	   => $order[0]->s_name,
    			  's_num'      => $order[0]->s_num,
    			  'territory'  => $order[0]->territory,
    			  'timestamp'  => date('m-d-Y H:i:s'),
    			  's_instruct' => $order[0]->s_instruct,
    			  'email'      => $order[0]->email,
    			  'store_type' => $order[0]->store_type,
    			  'po'         => $order[0]->po,
    			  'username'   => $order[0]->username
		));

		$final_items = DB::table('product_temp')->where('order', Session::get('id'))->get();
		
		foreach($final_items as $array_num => $object){
			DB::table('product')->insert(
				array('order' => $new_id,
					  'id' => $object->id, 
					  'qty' => $object->qty, 
					  'description' => $object->description,
					  'category' => $object->category)
			);
		}

		DB::table('orders_temp')->where('id', Session::get('id'))->delete();
		DB::table('product_temp')->where('order', Session::get('id'))->delete();

		Session::put('final_check', 1);

		return View::make('orders.confirmation')
			->withNew_id($new_id)
			->withFinal_items($final_items);
	}





	/**
	 * Create an organic order as well
	 *
	 * @return Response
	 */
	public function organic()
	{

		return View::make('orders.organics');
	}


	/**
	 * Display the page for order management options
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function order_display()
	{
		$date = $_POST['date'];
		$territory = $_POST['territory'];

		$orders = DB::table('orders')
						->where('ship_date','=', $date)
						->where('territory','=', $territory)
						->get();

		return View::make('orders.view_orders')->withOrders($orders)->withDate($date)->withTerritory($territory);
	}


	/**
	 * Display the current users orders
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = DB::table('orders')->where('id','=',$id)->get();
		$items = DB::table('product')->where('order','=',$id)->get();
		$categories = array();
		$categories_to_use = array();
		$current = $items[0]->category;
		array_push($categories_to_use, $items[0]->category);

		foreach($items as $array_num => $object){
			if($current != $object->category){
				array_push($categories_to_use, $object->category);
			}
			$current = $object->category;

		}

		foreach($categories_to_use as $array_num => $object){
			array_push($categories, DB::table('categories')->where('table','=',$object)->get());
		}

		DB::table('orders')->where('id','=', $id)->increment('progress', 1, array('print' => 1));

		return View::make('orders.order')
						->withId($id)
						->withOrder($order)
						->withItems($items)
						->withCategories($categories);
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
