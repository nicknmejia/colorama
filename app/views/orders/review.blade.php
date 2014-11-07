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
        <textarea placeholder="Special Instructions" rows="5" value="{{{ $order[0]->s_instruct }}}"></textarea>
      </div>
    </div>
    <div class="row centered">
      <input type="submit">
    </div>


    <div class="row panel">
    <?php $count = 0; ?>
      
    </div>   
    <div class="row centered">
      <input type="submit">
    </div>
{{ Form::close() }}
<!-- End of Form -->
{{{ var_dump(Session::get('p1_items')) }}}
{{{ var_dump(Session::get('p2_items')) }}}
{{{ var_dump(Session::get('p3_items')) }}}
<br/>
<br/>
{{{ var_dump(Session::get('set_categories')) }}}


@stop