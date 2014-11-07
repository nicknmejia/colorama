@extends('layouts.main')
@section('content')

  <!-- Start Breadcrumbs -->

  <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Part One</li>
      <li class="current">Part Two</li>
      <li class="unavailable">Part Three</li>
      <li class="unavailable">Review Order</li>
      <li class="unavailable">Confirmation</li>
    </ul>
  </div>

  {{ Form::open(array('action' => 'OrderController@store_temp_three')) }}

  <div class="row panel item-selections">
    <h2>Additional Product</h2>
    <p>Please click/tap the categories you would like to enter quantities from:</p>
    <?php $c = 0; ?>
    @foreach($p2_cat as $array_name => $category)

      <div class="row panel category" id="{{{ $category }}}-tab">
        <div class="row panel item-selections">
          <label for="{{{ $category }}}-click" id="{{{ $category }}}">{{{ ucfirst($array_name) }}}</label>
          <table class="large-12 columns table" id="{{{ $category }}}-click">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Description</th>
                <th>Qty</th>
              </tr>
            </thead>
              @for($i = 0; $i < count($p2_items[$c]); $i++)
              <tr>
                <td>{{{ $p2_items[$c][$i]->id }}}</td>
                <td>{{{ $p2_items[$c][$i]->description }}}</td>
                <td><input type="text" name="{{{ $p2_items[$c][$i]->id }}}"></td>
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

  <br/>
  {{{ var_dump($items) }}}

@stop