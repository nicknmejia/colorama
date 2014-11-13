@extends('layouts.main')
@section('content')

<!-- Start Headline Content -->

  <div class="row panel bar-push">
    <div class="large-5 columns">
      <br/>
      <h1>Welcome {{{ $user }}}</h1>
      <p>Today's Date: {{{ date('m-d-Y') }}}</p> <!-- Use PHP date function on this line -->
      <p>Server Time: {{{ date('h:i:s A') }}}</p> <!-- Grab server time and echo it live -->
    </div>
    <div class="large-7 columns">
        <div class="row centered">
          <div class="large-3 medium-3 columns space"><span class="ord">{{{ $order_count }}}<!-- SQL pull for ALL orders going next day --></span><br/>Total to Ship:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">{{{ count($pending) }}}<!-- SQL pull for unprinted orders --></span><br/>Pending:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">{{{ count($printed) }}}<!-- SQL pull for printed orders --></span><br/>In the Yard:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">{{{ count($processed) }}}<!-- SQL pull for processed orders --></span><br/>Processed:</div>
        </div>
    </div>
  </div>
<!-- End Headline Content -->


<!-- Start Dashboard Tools -->
<div class="row">
    <form>
    <fieldset>
      <legend>Your Tools</legend>
      <div class="row centered">
        <a href="{{ URL::to('orders/create') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-pencil"></i><br/>Place an Order</div></a>
        <a href="{{ URL::to('orders') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-magnifying-glass"></i><br/>View Your Orders</div></a>
        <a href="{{ URL::to('users') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-torsos-all"></i><br/>Edit Accounts</div></a>
      </div>
      <div class="row centered">
        <a href="{{ URL::to('availability/create') }}"><div class="small-12 medium-4 large-4 columns bar-push"><i class="fi-clipboard-pencil"></i><br/>Edit Availability</div></a>
        <a href="#"><div class="small-12 medium-4 large-4 columns bar-push"><i class="fi-print"></i><br/>Print Totals</div></a>
        <a href="{{ URL::to('/tools') }}"><div class="small-12 medium-4 large-4 columns bar-push"><i class="fi-wrench"></i><br/>More Tools</div></a>
      </div>
    </fieldset>
    </form>
  </div>
<!-- End Dashboard Tools -->

<!-- Start Order Lists -->
  <div class="row">
    <form>
    <fieldset>
      <legend>Orders to Ship Tomorrow</legend>
      <table class="large-12 columns">
        <thead>
          <tr>
            <th width="50">OO#</th>
            <th width="250" class="hide-for-small">Ordered</th>
            <th width="">Ship Date</th>
            <th width="" class="hide-for-small">Store</th>
            <th width="">Store #</th>
            <th width="" class="hide-for-medium-up">Processed</th>
            <th width="">Edit</th>

          </tr>
        </thead>
        <tbody>
          <!-- Each of these table rows will be built from PHP SQL queries -->

            @foreach($order_check as $order)
            <tr>
              <td>{{{ $order->id }}}</td>
              <td class="hide-for-small">{{{ $order->order_date }}}</td>
              <td>{{{ $order->ship_date }}}</td>
              <td class="hide-for-small">{{{ $order->s_name }}}</td>
              <td>{{{ $order->s_num }}}</td>
              <td>
                @if($order->progress == 0)
                  Pending
                @elseif($order->progress == 1)
                  Printed
                @elseif($order->progress == 2)
                  Processed
                @else
                  Error
                @endif
              </td>
              <td><input type="submit" value="00"></td>
            </tr>
            @endforeach
         
          
      
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>
<!-- End Order List -->
<br/>
{{{ var_dump(Session::all()) }}}
{{{ date('m-d-Y') }}}
{{{ date('m-d-Y', strtotime(' +1 day')) }}}
@stop