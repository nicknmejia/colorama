@extends('layouts.main')
@section('content')

	<form>
<div class="row panel bar-push">
  <p>Please fill out the required information in the fields below:</p>
  <div class="large-4 columns">
    <select>
          <option value="empty">Select Territory</option>
          <option value="south">South</option>
          <option value="north">North</option>
          <option value="napa">Napa/Sonoma</option>
        </select>
  </div>
  <div class="large-4 columns">
    <input type="text" id="datepicker">
  </div>
  <div class="large-4 columns">
    <div class="centered"><i class="fi-clipboard-notes"></i><br/>Click to Proceed</div>
  </div>
</div>

<form>
    <div class="row panel">
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
      <div class="large-6 medium-6 columns">
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
  </form>
	
  <script>
    $(document).foundation();

    $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
@stop