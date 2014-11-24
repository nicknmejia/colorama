@extends('layouts.main')
@section('content')

  <!-- Start Breadcrumbs -->

  <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="current">Part One</li>
      <li class="unavailable">Part Two</li>
      <li class="unavailable">Part Three</li>
      <li class="unavailable">Review Order</li>
      <li class="unavailable">Confirmation</li>
    </ul>
  </div>

  {{ Form::open(array('action' => 'OrderController@store_temp_two')) }}

  <div class="row panel item-selections">
    <h2>Paks, Gallons and Quarts</h2>
    <p>Please click/tap the categories you would like to enter quantities from:</p>
    <?php $c = 0; ?>
    @foreach($p1_cat as $array_name => $category)

      <div class="row panel category" id="{{{ $category }}}-tab">
        <div class="row panel item-selections">
          <label for="{{{ $category }}}-click" id="{{{ $category }}}">{{{ ucfirst($array_name) }}}</label>
          <table class="large-12 columns table" id="{{{ $category }}}-click">
            <thead>
              <tr>
                <th>Description</th>
                <th width="70">Rating</th>
                <th>Qty</th>
              </tr>
            </thead>
              @for($i = 0; $i < count($p1_items[$c]); $i++)
              <tr>
                <td>{{{ $p1_items[$c][$i]->description }}}</td>
                <td>{{{ $p1_items[$c][$i]->rating }}}</td>
                <td><input type="text" name="{{{ $p1_items[$c][$i]->id }}}"></td>
              </tr>
            @endfor
          </table>
        </div>
      </div>
    <?php $c++; ?>
    @endforeach


  	<div class="row panel">
	    <div class="large-6 columns">
	    </div>
	    <div class="large-6 columns">
	        {{ Form::submit('Next') }}
	    </div>
	  </div>

  {{ Form::close() }}
@stop