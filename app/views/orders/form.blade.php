@extends('layouts.main')
@section('content')
	<!-- Start Order Form Panel -->
	<form>
	<div class="row panel">
	  <p>Please fill out the required information in the fields below:</p>
	  <div class="large-3 columns">
	    <input type="text" placeholder="First Name">
	    <input type="text" placeholder="Last Name">
	    <input type="text" placeholder="Email">
	  </div>
	  <div class="large-3 columns">
	    <input type="text" placeholder="Store Name">
	    <input type="text" placeholder="Store #">
	        <select>
	          <option value="empty">Select Territory</option>
	          <option value="south">South</option>
	          <option value="north">North</option>
	          <option value="napa">Napa/Sonoma</option>
	        </select>
	  </div>
	  <div class="large-3 columns">
    <input type="text" id="datepicker">
  </div>
	  <div class="large-3 columns">
	    <textarea placeholder="Special Instructions"></textarea>
	    <div class="large-12 small-12 columns">
	      <label>Include an Organic Order?</label>
	      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Yes</label>
	      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">No</label>
	    </div>
	  </div>
	</div>

	<div class="row panel categories">
	  <p>Please select the categories you wish to order from:</p>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox1" type="checkbox"><label for="checkbox1">808 Pak</label><br/>
	      <input id="checkbox2" type="checkbox"><label for="checkbox2">806 Pak</label><br/>
	      <input id="checkbox3" type="checkbox"><label for="checkbox3">4" Color</label><br/>
	      <input id="checkbox4" type="checkbox"><label for="checkbox4">Half Flats</label><br/>
	      <input id="checkbox5" type="checkbox"><label for="checkbox5">Full Flats</label><br/>
	      <input id="checkbox21" type="checkbox"><label for="checkbox5">4" Mums</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox6" type="checkbox"><label for="checkbox6">Quarts</label><br/>
	      <input id="checkbox7" type="checkbox"><label for="checkbox7">Gallons</label><br/>
	      <input id="checkbox8" type="checkbox"><label for="checkbox8">Cyclamen</label><br/>
	      <input id="checkbox9" type="checkbox"><label for="checkbox9">2 Gal Perennials</label><br/>
	      <input id="checkbox10" type="checkbox"><label for="checkbox10">4" Proven Winners</label><br/>
	      <input id="checkbox22" type="checkbox"><label for="checkbox5">Gallon Mums</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox11" type="checkbox"><label for="checkbox11">8.5" Proven Winners</label><br/>
	      <input id="checkbox12" type="checkbox"><label for="checkbox12">Qrt Vigoro Pots</label><br/>
	      <input id="checkbox13" type="checkbox"><label for="checkbox13">Qrt VIVA! Pots</label><br/>
	      <input id="checkbox14" type="checkbox"><label for="checkbox14">Gallon Vigoro Pots</label><br/>
	      <input id="checkbox15" type="checkbox"><label for="checkbox15">Gallon Viva Pots</label><br/>
	      <input id="checkbox23" type="checkbox"><label for="checkbox5">Metal Racks</label>
	    </div>
	    <div class="large-3 small-12 columns">
	      <input id="checkbox16" type="checkbox"><label for="checkbox16">1802 Paks</label><br/>
	      <input id="checkbox17" type="checkbox"><label for="checkbox17">306 Paks</label><br/>
	      <input id="checkbox18" type="checkbox"><label for="checkbox18">Hanging Baskets</label><br/>
	      <input id="checkbox19" type="checkbox"><label for="checkbox19">Caches/Color Bowls</label><br/>
	      <input id="checkbox20" type="checkbox"><label for="checkbox20">Non-Organic Edibles</label><br/>
	      <input id="checkbox24" type="checkbox"><label for="checkbox5">Extra/Various Items</label>
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
	              <th>Qty</th>
	            </tr>
	          </thead>
	          <tr>
	            <td>1000</td>
	            <td>Alyssum White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1001</td>
	            <td>Begonia Green Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1002</td>
	            <td>Begonia Red Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1003</td>
	            <td>Caladium White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1004</td>
	            <td>Dianthus Telstar Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1005</td>
	            <td>Gomphrena Buddy Purple</td>
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
	              <th>Qty</th>
	            </tr>
	          </thead>
	          <tr>
	            <td>1000</td>
	            <td>Alyssum White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1001</td>
	            <td>Begonia Green Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1002</td>
	            <td>Begonia Red Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1003</td>
	            <td>Caladium White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1004</td>
	            <td>Dianthus Telstar Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1005</td>
	            <td>Gomphrena Buddy Purple</td>
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
	              <th>Qty</th>
	            </tr>
	          </thead>
	          <tr>
	            <td>1000</td>
	            <td>Alyssum White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1001</td>
	            <td>Begonia Green Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1002</td>
	            <td>Begonia Red Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1003</td>
	            <td>Caladium White</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1004</td>
	            <td>Dianthus Telstar Mix</td>
	            <td><input type="text"></td>
	          </tr>
	          <tr>
	            <td>1005</td>
	            <td>Gomphrena Buddy Purple</td>
	            <td><input type="text"></td>
	          </tr>
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
	<!-- End Order Form Panel -->

	
@stop