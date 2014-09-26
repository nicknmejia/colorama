@extends('layouts.main')
@section('content')

<!-- Selected checkbox values will be sent and matching values will be pulled VIA MySQL -->
<form>
<div class="row panel bar-push">
  <p>Please select the categories you wish to add to the printout:</p>
    <div class="row centered" style="text-align:left">
        <div class="large-3 small-12 columns">
          <input id="checkbox1" type="checkbox"><label for="checkbox1">808 Pak</label><br/>
          <input id="checkbox2" type="checkbox"><label for="checkbox2">806 Pak</label><br/>
          <input id="checkbox3" type="checkbox"><label for="checkbox3">4" Color</label><br/>
          <input id="checkbox4" type="checkbox"><label for="checkbox4">Half Flats</label><br/>
          <input id="checkbox5" type="checkbox"><label for="checkbox5">Full Flats</label><br/>
          <input id="checkbox21" type="checkbox"><label for="checkbox21">4" Mums</label><br/>
        </div>
        <div class="large-3 small-12 columns">
          <input id="checkbox6" type="checkbox"><label for="checkbox6">Quarts</label><br/>
          <input id="checkbox7" type="checkbox"><label for="checkbox7">Gallons</label><br/>
          <input id="checkbox8" type="checkbox"><label for="checkbox8">Cyclamen</label><br/>
          <input id="checkbox9" type="checkbox"><label for="checkbox9">2 Gal Perennials</label><br/>
          <input id="checkbox10" type="checkbox"><label for="checkbox10">4" Proven Winners</label><br/>
          <input id="checkbox22" type="checkbox"><label for="checkbox22">Gallon Mums</label>
        </div>
        <div class="large-3 small-12 columns">
          <input id="checkbox11" type="checkbox"><label for="checkbox11">8.5" Proven Winners</label><br/>
          <input id="checkbox12" type="checkbox"><label for="checkbox12">Qrt Vigoro Pots</label><br/>
          <input id="checkbox13" type="checkbox"><label for="checkbox13">Qrt VIVA! Pots</label><br/>
          <input id="checkbox14" type="checkbox"><label for="checkbox14">Gallon Vigoro Pots</label><br/>
          <input id="checkbox15" type="checkbox"><label for="checkbox15">Gallon Viva Pots</label><br/>
          <input id="checkbox23" type="checkbox"><label for="checkbox23">Metal Racks</label>
        </div>
        <div class="large-3 small-12 columns">
          <input id="checkbox16" type="checkbox"><label for="checkbox16">1802 Paks</label><br/>
          <input id="checkbox17" type="checkbox"><label for="checkbox17">306 Paks</label><br/>
          <input id="checkbox18" type="checkbox"><label for="checkbox18">Hanging Baskets</label><br/>
          <input id="checkbox19" type="checkbox"><label for="checkbox19">Caches/Color Bowls</label><br/>
          <input id="checkbox20" type="checkbox"><label for="checkbox20">Non-Organic Edibles</label><br/>
          <input id="checkbox24" type="checkbox"><label for="checkbox24">Extra/Various Items</label>
        </div>
      </div>
      <div class="row centered">
        <input id="checkbox25" type="checkbox"><label for="checkbox25">ALL ITEMS</label>
      </div>
</div>
<div class="row bar-push centered">
  <input type="submit" value="Generate">
</div>
</form>
<!-- End Checkboxes -->

@stop