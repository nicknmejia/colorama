@extends('layouts.main')
@section('content')

	<!-- Start Breadcrumbs -->
  
  <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Part One</li>
      <li class="unavailable">Part Two</li>
      <li class="unavailable">Part Three</li>
      <li class="current">Review Order</li>
      <li class="unavailable">Confirmation</li>
    </ul>
  </div>
    
  <!-- End Breadcrumbs -->
  {{ Form::open(array('action' => 'OrderController@store')) }}
    <div class="row panel">
      <p>Please review your order below before submitting it:</p>
      <div class="large-4 columns">
        <input type="text" value="{{{ $order[0]->f_name }}}" disabled>
        <input type="text" value="{{{ $order[0]->l_name }}}" disabled>
        <input type="text" value="{{{ $order[0]->email }}}" disabled>
      </div>
      <div class="large-4 columns">
        <input type="text" value="{{{ $order[0]->s_name }}}" disabled>
        <input type="text" value="{{{ $order[0]->s_num }}}"  disabled>
        <input type="text" value="{{{ $order[0]->ship_date }}}"  disabled>
      </div>

      <div class="large-4 columns">
        <textarea placeholder="Special Instructions" rows="5">{{{ $order[0]->s_instruct }}}</textarea>
      </div>
    </div>
    <div class="row centered">
      <input type="submit">
    </div>


    <div class="row panel">
    <?php 

    $count1 = 0; 
    $count2 = 0;
    $count3 = 0;

    ?>
     

      @foreach(Session::get('p1_cat') as $name => $table)
        @if(!empty(Session::get('p1_items_final')[$count1]))
          <div class="large-6 columns">
          <label for="{{{$table}}}">{{{ $name }}}</label>
          <table class="large-12 columns" id="{{{$table}}}">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Description</th>
                <th>Qty</th>
              </tr>
            </thead>
            @foreach(Session::get('p1_items_final')[$count1] as $item)
              <tr>
                <td>{{{ $item->id }}}</td>
                <td>{{{ $item->description }}}</td>
                <td>{{{ $item->qty }}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        @endif
        <?php $count1++; ?>
      @endforeach

      @foreach(Session::get('p2_cat') as $name => $table)
        @if(!empty(Session::get('p2_items_final')[$count2]))
          <div class="large-6 columns">
          <label for="{{{$table}}}">{{{ $name }}}</label>
          <table class="large-12 columns" id="{{{$table}}}">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Description</th>
                <th>Qty</th>
              </tr>
            </thead>
            @foreach(Session::get('p2_items_final')[$count2] as $item)
              <tr>
                <td>{{{ $item->id }}}</td>
                <td>{{{ $item->description }}}</td>
                <td>{{{ $item->qty }}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        @endif
        <?php $count2++; ?>
      @endforeach

      @foreach(Session::get('p3_cat') as $name => $table)
        @if(!empty(Session::get('p3_items_final')[$count3]))
          <div class="large-6 columns">
          <label for="{{{$table}}}">{{{ $name }}}</label>
          <table class="large-12 columns" id="{{{$table}}}">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Description</th>
                <th>Qty</th>
              </tr>
            </thead>
            @foreach(Session::get('p3_items_final')[$count3] as $item)
              <tr>
                <td>{{{ $item->id }}}</td>
                <td>{{{ $item->description }}}</td>
                <td>{{{ $item->qty }}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        @endif
        <?php $count3++; ?>
      @endforeach


    </div>   
    <div class="row centered">
      <input type="submit">
    </div>
{{ Form::close() }}
<!-- End of Form -->


@stop