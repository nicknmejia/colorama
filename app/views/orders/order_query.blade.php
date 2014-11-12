@extends('layouts.main')
@section('content')

{{ Form::open(array('action' => 'OrderController@show')) }}
	
	<div class="row panel">
	  <p>Select orders by date:</p>
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

{{ Form::close() }}

@stop