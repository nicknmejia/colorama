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
                <!-- Make sure the values of each option is the SPECIFIC TABLE NAME IN YOUR SQL DATABASE -->
                
                @foreach($categories as $array => $object)
                  <option class="size" value="{{{ $object->table }}}">{{{ $object->name }}}</option>
                @endforeach
              </select></td>
          </tr>

          <tr>
              <td><label for="name">Item Name</label></td>
              <td><input id="name" name="name" type="text"/></td>
          </tr>

          <tr>
              <td><label for="qty">On/Off</label></td>
              <td>On&nbsp;<input type="radio" name="switch" value="1" checked>&nbsp;&nbsp;Off&nbsp;<input type="radio" name="switch" value="0"></td>
          </tr>
      </table>
      <!-- Don't forget to add this to your AJAX javascript file and create a PHP function for this -->
      <div class="centered"><p class="button" id="item_submit">Submit Item</p></div>

      </form>
    </fieldset>
  </div>

  <div class="row panel">
    {{ Form::open(array('action' => 'AvailController@edit')) }}
    <p>Please select the category to modify:</p>
    <div class="row">
      @foreach($categories as $array => $object)
        <div class="large-6 columns panel radius">
          <div class="left">{{{ $object->name }}}</div>
          <div class="right">
            <ul class="stack-for-small round secondary button-group">
              <li>{{ link_to_route('availability.edit','Edit', $object->table, ['class' => 'tiny button success']) }}</li>
              <li><a href="#" class="tiny button alert">Off</a></li>
            </ul>
          </div>
        </div>
      @endforeach
    </div>

    {{ Form::close() }}
  </div>

</div>





</form>
<!-- End Availability Functions -->

@stop