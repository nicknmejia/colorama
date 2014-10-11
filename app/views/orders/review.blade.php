@extends('layouts.main')
@section('content')

	<!-- Start Breadcrumbs -->
  
    <div class="row">
    <ul class="breadcrumbs bar-push">
      <li class="unavailable">Order Form</li>
      <li class="unavailable">Organic Form</li>
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
      <div class="large-6 columns">
        <label for="p808">808 Paks</label>
        <table class="large-12 columns" id="p808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p806">806 Paks</label>
        <table class="large-12 columns" id="p806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p808">808 Paks</label>
        <table class="large-12 columns" id="p808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p806">806 Paks</label>
        <table class="large-12 columns" id="p806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p808">808 Paks</label>
        <table class="large-12 columns" id="p808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p806">806 Paks</label>
        <table class="large-12 columns" id="p806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p808">808 Paks</label>
        <table class="large-12 columns" id="p808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p806">806 Paks</label>
        <table class="large-12 columns" id="p806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p808">808 Paks</label>
        <table class="large-12 columns" id="p808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="large-6 columns">
        <label for="p806">806 Paks</label>
        <table class="large-12 columns" id="p806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
        </table>
      </div>
      
    <div class="row centered">
      <input type="submit">
    </div>
{{ Form::close() }}
<!-- End of Form -->

@stop