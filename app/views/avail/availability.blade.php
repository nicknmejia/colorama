@extends('layouts.main')
@section('content')

<!-- Start Availability Functions -->
<div id="info" class="row bar-push">
    <fieldset>
    <legend>Add an Item</legend>
    <div id="result"></div>
    <form class="insert_item"><!-- This insert item function will work using AJAX.  Most of it's functionality will be copied from the organic form -->
      <table class="large-12 columns">
        <tr>
              <td><label for="item">Category</label></td>
              <td><select id="size">
                <!-- While these options are currently static, I will consider generating them via a SQL function -->
                <!-- Make sure the values of each option is the SPECIFIC TABLE NAME IN YOUR SQL DATABASE -->
                <option class="size" value="pak808">808 Pak</option>
                <option class="size" value="pak806">806 Pak</option>
                <option class="size" value="pak4inch">4" Color</option>
                <option class="size" value="halfflat">Half Flats</option>
                <option class="size" value="fullflat">Full Flats</option>
                <option class="size" value="quarts">Quarts</option>
                <option class="size" value="gallons">Gallons</option>
                <option class="size" value="cyclamen">Cyclamen</option>
                <option class="size" value="2galpots">2 Gal Perennials</option>
                <option class="size" value="pak4inchpw">4" Proven Winners</option>
                <option class="size" value="pak8inchpw">8.5" Proven Winners</option>
                <option class="size" value="qrtvig">Qrt Vigoro Pots</option>
                <option class="size" value="qrtviva">Qrt VIVA! Pots</option>
                <option class="size" value="galvig">Gallon Vigoro Pots</option>
                <option class="size" value="galviva">Gallon VIVA! Pots</option>
                <option class="size" value="pak1802">1802 Paks</option>
                <option class="size" value="pak306">306 Paks</option>
                <option class="size" value="baskets">Hanging Baskets</option>
                <option class="size" value="caches">Caches/Color Bowls</option>
                <option class="size" value="nonorgedibles">Non-Organic Edibles</option>
                <option class="size" value="4inchmums">4" Mums</option>
                <option class="size" value="galmums">Gallon Mums</option>
                <option class="size" value="racks">Metal Racks</option>
                <option class="size" value="assorted">Assorted Product</option>
              </select></td>
          </tr>
          <tr>
              <td><label for="item">Id/Line Number</label></td>
              <td><input id="item" name="item" type="text"/></td>
          </tr>
          <tr>
              <td><label for="name">Item Name</label></td>
              <td><input id="name" name="name" type="text"/></td>
          </tr>

          <tr>
              <td><label for="qty">Quantity</label></td>
              <td><input id="qty" name="qty" type="text"/></td>
          </tr>
      </table>
      <!-- Don't forget to add this to your AJAX javascript file and create a PHP function for this -->
      <div class="centered"><p class="button" id="item_submit" onclick="item_submit(document.getElementById('item').value,document.getElementById('name').value,document.getElementById('qty').value,document.getElementById('size').value)">Submit Item</p></div>

      </form>
    </fieldset>
  </div>

<div class="row panel territory">
  <p>Which Territory's availability are you changing?</p>
  <div class="large-6 small-1 columns">
    {{ Form::radio('territory', 'south') }}
    {{ Form::label('south','Southern California') }}<br/>
    {{ Form::radio('territory', 'north') }}
    {{ Form::label('north','Northern California') }}<br/>
  </div>

  <div class="large-6 small-1 columns">
    
  </div>

</div>

<div class="row panel categories bar-push">
  <p>Please select the categories you wish to add to:</p>
    <div class="large-3 small-12 columns">
      <input id="checkbox1" type="checkbox"><label for="checkbox1">808 Pak</label><br/>
      <input id="checkbox2" type="checkbox"><label for="checkbox2">806 Pak</label><br/>
      <input id="checkbox3" type="checkbox"><label for="checkbox3">4" Color</label><br/>
      <input id="checkbox4" type="checkbox"><label for="checkbox4">Half Flats</label><br/>
      <input id="checkbox5" type="checkbox"><label for="checkbox5">Full Flats</label><br/>
      <input id="checkbox21" type="checkbox"><label for="checkbox21">4" Mums</label>
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
      <input id="checkbox15" type="checkbox"><label for="checkbox15">Gallon VIVA! Pots</label><br/>
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

<div class="row panel item-selections">
  <p>Please click/tap the categories you would like to enter quantities from:</p>
    <div class="row panel category" id="p808-tab">
      <div class="row panel item-selections" id="p808">
        <label for="pak808">808 Paks</label>
        <table class="large-12 columns table" id="pak808">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Current Qty</th>
              <th>Qty</th>
            </tr>
          </thead>

          <!-- Don't forget to add this to your AJAX javascript file and create a PHP function for this -->
          <!-- Each unique item generated will have an AJAX function attached to it's input field for updating   -->

          <tr>
            <td>1000</td>
            <td>Alyssum White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1001</td>
            <td>Begonia Green Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1002</td>
            <td>Begonia Red Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1003</td>
            <td>Caladium White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1004</td>
            <td>Dianthus Telstar Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1005</td>
            <td>Gomphrena Buddy Purple</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="row panel category" id="p806-tab">
      <div class="row panel item-selections" id="p806">
        <label for="pak806">806 Paks</label>
        <table class="large-12 columns table" id="pak806">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Current Qty</th>
              <th>Qty</th>
            </tr>
          </thead>
          <tr>
            <td>1000</td>
            <td>Alyssum White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1001</td>
            <td>Begonia Green Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1002</td>
            <td>Begonia Red Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1003</td>
            <td>Caladium White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1004</td>
            <td>Dianthus Telstar Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1005</td>
            <td>Gomphrena Buddy Purple</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="row panel category" id="f-inch-tab">
      <div class="row panel item-selections" id="f-inch">
        <label for="four-inch">4" Color</label>
        <table class="large-12 columns table" id="four-inch">
          <thead>
            <tr>
              <th>Item Number</th>
              <th>Description</th>
              <th>Current Qty</th>
              <th>Qty</th>
            </tr>
          </thead>
          <tr>
            <td>1000</td>
            <td>Alyssum White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1001</td>
            <td>Begonia Green Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1002</td>
            <td>Begonia Red Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1003</td>
            <td>Caladium White</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1004</td>
            <td>Dianthus Telstar Mix</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>1005</td>
            <td>Gomphrena Buddy Purple</td>
            <td></td>
            <td><input type="text"></td>
          </tr>
        </table>
      </div>
    </div>
</div>




</form>
<!-- End Availability Functions -->

@stop