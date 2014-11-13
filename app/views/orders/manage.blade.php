@extends('layouts.main')
@section('content')

{{ Form::open(array('action' => 'OrderController@order_display')) }}
	<div class="row panel">
	  <p>Please select a date and territory to query:</p>
	  <div class="large-6 columns">
	        <select name="territory" id="territory">
	          <option value="" disabled selected>Select Territory</option>
	          <option value="south">South</option>
	          <option value="north">North</option>
	          <option value="napa">Napa/Sonoma</option>
	        </select>
	  </div>
	  <div class="large-6 columns">
    <input type="text" id="datepicker" placeholder="Date" name="date" id="date" value="{{ Input::old('date') }}">
  </div>

    <div class="large-12 columns centered">
	    {{ Form::submit('Next') }}
	</div>
{{ Form::close() }}

@stop