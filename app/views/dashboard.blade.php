@extends('layouts.main')
@section('content')
	
	<!-- Start Headline Content -->

  <div class="row panel bar-push">
    <div class="large-5 columns">
      <br/>
      <h1>Welcome {{{ $user }}}</h1>
      <p>Today's Date: 8/26/2014</p>
      <p>Server Time: 11:59:22 A.M</p>
    </div>
    <div class="large-7 columns">
        <div class="row centered">
          <div class="large-3 medium-3 columns space"><span class="ord">8</span><br/>Total to Ship:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">2</span><br/>Pending:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">3</span><br/>In the Yard:</div>
          <div class="large-3 medium-3 columns space"><span class="ord">3</span><br/>Processed:</div>
        </div>
    </div>
  </div>
<!-- End Headline Content -->

<div class="row">
    <form>
    <fieldset>
      <legend>Your Tools</legend>
      <div class="row centered">
        <a href="{{ URL::to('orders/create') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-pencil"></i><br/>Place an Order</div></a>
        <a href="{{ URL::to('orders/show') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-magnifying-glass"></i><br/>View Your Orders</div></a>
        <a href="{{ URL::to('users/' . $id . '/edit') }}"><div class="small-12 medium-4 large-4 columns"><i class="fi-torso"></i><br/>Edit Profile</div></a>
      </div>
    </fieldset>
    </form>
  </div>

  <div class="row">
    <form>
    <fieldset>
      <legend>Orders to Ship</legend>
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
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-16-2014 15:48:56</td>
            <td>08/18/2014</td>
            <td class="hide-for-small">Santa Ana</td>
            <td>606</td>
            <td>Processed</td>
            <td><input type="submit" value="00"></td>
          </tr>
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-16-2014 16:49:26</td>
            <td>08/18/2014</td>
            <td class="hide-for-small">Marina Del Rey</td>
            <td>6611</td>
            <td>Printed</td>
            <td><input type="submit" value="01"></td>
          </tr>
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-17-2014 12:38:44</td>
            <td>08/19/2014</td>
            <td class="hide-for-small">Simi Valley</td>
            <td>6640</td>
            <td>Pending</td>
            <td><input type="submit" value="02"></td>
          </tr>
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>
	
@stop
