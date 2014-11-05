@extends('layouts.main')
@section('content')

	<!-- Start Breadcrumbs -->
  
  <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Part One</li>
      <li class="unavailable">Part Two</li>
      <li class="unavailable">Part Three</li>
      <li class="unavailable">Review Order</li>
      <li class="current">Confirmation</li>
    </ul>
  </div>
    
  <!-- End Breadcrumbs -->

  <!-- Start Main Body -->

  <div class="row panel">
    <h1 class="large-12 columns centered">Your order has been placed!</h1>
    <h3 class="large-12 columns centered">Your order number is #{{{ $new_id }}}</h3>
    <p class="large-12 columns centered small-margin">This order has been added to your list on the main dashboard page.  Please refer to the list for any changes your wish to make to your order.</p>
    <p class="large-12 columns centered small-margin">A confirmation will be mailed to your listed email account when your order has been printed for processing.</p>
    <p class="large-12 columns centered large-margin">If you have any questions, please contact customer service.</p>
    <div class="row centered">
      <a href="#" class="large-6 columns large-margin"><i class="fi-pencil"></i><br/>Place Another Order</a>
      <a href="#" class="large-6 columns large-margin"><i class="fi-home"></i><br/>Return to Portal</a>
    </div>
  </div>

{{{ var_dump($final_items) }}}

  <!-- End Main Body -->
 @stop