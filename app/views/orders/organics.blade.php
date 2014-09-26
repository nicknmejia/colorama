@extends('layouts.main')
@section('content')
	
	<!-- Start Breadcrumbs -->
<div class="row">
<ul class="breadcrumbs bar-push">
  <li class="unavailable">Order Form</li>
  <li class="current">Organic Form</li>
  <li class="unavailable">Review Order</li>
  <li class="unavailable">Confirmation</li>
</ul>
</div>
<!-- End Breadcrumbs -->

<!-- Items/Categories Start -->
<form>
<div class="row panel item-selections">
  <p>Please click/tap the categories you would like to enter quantities from:</p>
    <div class="row panel">
      <div class="row panel item-selections" id="p808">
        <label for="pak808">3.5" Herbs</label>
        <table class="large-12 columns table" id="pak808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="p806">
        <label for="pak806">Quart Herbs</label>
        <table class="large-12 columns table" id="pak806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">Pak Vegetables</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">4" Vegetables</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">Gallon Vegetables</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">Gallon Herbs</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

    <div class="row panel">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">2 Gallon Vegetables</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Qty</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>

</div>
  
  <div class="row panel">
    <div class="large-6 columns">
    </div>
    <div class="large-6 columns">
        <input type="submit" class="left" value="Next">
    </div>
  </div>
</form>
<!-- Item/Categories End -->
	
@stop