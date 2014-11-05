@extends('layouts.main')
@section('content')
	
  <!-- Start Breadcrumbs -->

  <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="current">Order Form</li>
      <li class="unavailable">Part One</li>
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Review Order</li>
      <li class="unavailable">Confirmation</li>
    </ul>
  </div>

	<!-- Start Order Form Panel -->
	{{ Form::open(array('action' => 'OrderController@store_temp')) }}
	<div class="row panel">
	  <p>Please fill out the required information in the fields below:</p>
	  <div class="large-3 columns">
	    <input type="text" placeholder="First Name" name="fname" id="fname" value="{{ Input::old('fname') }}">
	    <input type="text" placeholder="Last Name" name="lname" id="lname" value="{{ Input::old('lname') }}">
	    <input type="text" placeholder="Email" name="email" id="email" value="{{ Input::old('email') }}">
	  </div>
	  <div class="large-3 columns">
	    <input type="text" placeholder="Store Name" name="sname" id="sname" value="{{ Input::old('sname') }}">
	    <input type="text" placeholder="Store #" name="snum" id="snum" value="{{ Input::old('snum') }}">
	        <select name="territory" id="territory">
	          <option value="" disabled selected>Select Territory</option>
	          <option value="south">South</option>
	          <option value="north">North</option>
	          <option value="napa">Napa/Sonoma</option>
	        </select>
	  </div>
	  <div class="large-3 columns">
    <input type="text" id="datepicker" placeholder="Date" name="date" id="date" value="{{ Input::old('date') }}">
  </div>
	  <div class="large-3 columns">
	    <textarea placeholder="Special Instructions" name="sinstruct" id="sinstruct" value="{{ Input::old('sinstruct') }}"></textarea>
	    
	  </div>
	  <div class="large-12 columns">
	  	<ul class="errors">
	  	{{ $errors->first('fname') }}
	  	{{ $errors->first('lname') }}
	  	{{ $errors->first('email') }}
	  	{{ $errors->first('sname') }}
	  	{{ $errors->first('snum') }}
	  	{{ $errors->first('territory') }}
	  	{{ $errors->first('date') }}
	  	{{ $errors->first('organic') }}
	    </ul>
	  </div>
	</div>

	<div class="row panel categories">
	  <p>Please select the categories you wish to order from:</p>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox1" type="checkbox" value="pak808" name="pak808">
	      <label for="checkbox1">808 Pak</label><br/>
	      <input id="checkbox2" type="checkbox" value="pak806" name="pak806">
	      <label for="checkbox2">806 Pak</label><br/>
	      <input id="checkbox3" type="checkbox" value="pak4inch" name="pak4inch">
	      <label for="checkbox3">4" Color</label><br/>
	      <input id="checkbox4" type="checkbox" value="halfflat" name="halfflat">
	      <label for="checkbox4">Half Flats</label><br/>
	      <input id="checkbox5" type="checkbox" value="fullflat" name="fullflat">
	      <label for="checkbox5">Full Flats</label><br/>
	      <input id="checkbox21" type="checkbox" value="mums4inch" name="mums4inch">
	      <label for="checkbox21">4" Mums</label><br/>
	      <input id="checkbox25" type="checkbox" value="4inchveg_no" name="4inchveg_no">
	      <label for="checkbox25">Non-Org 4" Veg</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox6" type="checkbox" value="quarts" name="quarts">
	      <label for="checkbox6">Quarts</label><br/>
	      <input id="checkbox7" type="checkbox" value="gallons" name="gallons">
	      <label for="checkbox7">Gallons</label><br/>
	      <input id="checkbox8" type="checkbox" value="cyclamen" name="cyclamen">
	      <label for="checkbox8">Cyclamen</label><br/>
	      <input id="checkbox9" type="checkbox" value="2galpots" name="2galpots">
	      <label for="checkbox9">2 Gal Perennials</label><br/>
	      <input id="checkbox10" type="checkbox" value="pak4inchpw" name="pak4inchpw">
	      <label for="checkbox10">4" Proven Winners</label><br/>
	      <input id="checkbox22" type="checkbox" value="mumsgallon" name="mumsgallon">
	      <label for="checkbox22">Gallon Mums</label><br/>
	      <input id="checkbox26" type="checkbox" value="galveg_no" name="galveg_no">
	      <label for="checkbox26">Non-Org Gal Veg</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox11" type="checkbox" value="pak8inchpw" name="pak8inchpw">
	      <label for="checkbox11">8.5" Proven Winners</label><br/>
	      <input id="checkbox12" type="checkbox" value="qrtvig" name="qrtvig">
	      <label for="checkbox12">Qrt Vigoro Pots</label><br/>
	      <input id="checkbox13" type="checkbox" value="qrtviva" name="qrtviva">
	      <label for="checkbox13">Qrt VIVA! Pots</label><br/>
	      <input id="checkbox14" type="checkbox" value="galvig" name="galvig">
	      <label for="checkbox14">Gallon Vigoro Pots</label><br/>
	      <input id="checkbox15" type="checkbox" value="galviva" name="galviva">
	      <label for="checkbox15">Gallon Viva Pots</label><br/>
	      <input id="checkbox23" type="checkbox" value="racks" name="racks">
	      <label for="checkbox23">Metal Racks</label><br/>
	      <input id="checkbox27" type="checkbox" value="herbs_no" name="herbs_no">
	      <label for="checkbox27">Non-Org Herbs</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox16" type="checkbox" value="pak1802" name="pak1802">
	      <label for="checkbox16">1802 Paks</label><br/>
	      <input id="checkbox17" type="checkbox" value="pak306" name="pak306">
	      <label for="checkbox17">306 Paks</label><br/>
	      <input id="checkbox18" type="checkbox" value="baskets" name="baskets">
	      <label for="checkbox18">Hanging Baskets</label><br/>
	      <input id="checkbox19" type="checkbox" value="caches" name="caches">
	      <label for="checkbox19">Caches/Color Bowls</label><br/>
	      <input id="checkbox20" type="checkbox" value="misc" name="misc">
	      <label for="checkbox20">Extra/Various Items</label><br/>
	      <input id="checkbox24" type="checkbox" value="pakveg_no" name="pakveg_no">
	      <label for="checkbox24">Non-Org Pak Veg</label><br/>
	      <input id="checkbox28" type="checkbox" value="2galveg_no" name="2galveg_no">
	      <label for="checkbox28">Non-Org 2 Gal</label>
	    </div>
	</div>




	  <div class="row panel">
	    <div class="large-12 columns centered">
	        {{ Form::submit('Next') }}
	    </div>
	  </div>


	{{ Form::close() }}
	<!-- End Order Form Panel -->


	
@stop