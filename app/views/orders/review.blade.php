@extends('layouts.main')
@section('content')

	<!-- Start Breadcrumbs -->
  
    <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="current">Review Order</li>
      <li class="unavailable">Confirmation</li>
    </ul>
    </div>
    
  <!-- End Breadcrumbs -->
  {{ Form::open(array('action' => 'OrderController@store')) }}
    <div class="row panel">
      <p>Please review your order below before submitting it:</p>
      <div class="large-4 columns">
        <input type="text" value="{{{ $userdata['fname'] }}}" disabled>
        <input type="text" value="{{{ $userdata['lname'] }}}" disabled>
        <input type="text" value="{{{ $userdata['email'] }}}" disabled>
      </div>
      <div class="large-4 columns">
        <input type="text" value="{{{ $userdata['sname'] }}}" disabled>
        <input type="text" value="{{{ $userdata['snum'] }}}"  disabled>
        <input type="text" value="{{{ $userdata['date'] }}}"  disabled>
      </div>

      <div class="large-4 columns">
        <textarea placeholder="Special Instructions" rows="5"></textarea>
      </div>
    </div>
    <div class="row centered">
      <input type="submit">
    </div>


    <div class="row panel">
    <?php $count = 0; ?>

      @foreach($categories as $category)
        @if(!empty($items[$count]))
          <div class="large-6 columns">
          <label for="{{{$category->table}}}">{{{ $category->name }}}</label>
          <table class="large-12 columns" id="{{{$category->table}}}">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Description</th>
                <th>Qty</th>
              </tr>
            </thead>
            @foreach($items[$count] as $item)
              <tr>
                <td>{{{ $item->id }}}</td>
                <td>{{{ $item->description }}}</td>
                <td>{{{ $item->qty }}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        @endif
        <?php $count++; ?>
      @endforeach

      
    </div>   
    <div class="row centered">
      <input type="submit">
    </div>
{{ Form::close() }}
<!-- End of Form -->

@stop