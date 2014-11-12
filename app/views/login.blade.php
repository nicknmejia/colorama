@extends('layouts.main')
@section('content')

	<!-- Login Panel -->
  <div class="row login">
    {{ Form::open(array('url' => 'login')) }}
      <fieldset>
          <legend>Please log in</legend>

          <!-- Errors will display here -->
          <?php
          if(Session::get('failure') == 1){
            ?>
          <p>
            {{ $errors->first('user') . "<br/>" }}
            {{ $errors->first('pass') . "<br/>" }}
          </p>
          <?php
          }
          ?>

          <!--==========================-->
            <!--<input type="text" placeholder="Username" name="user"> -->
            <input placeholder="Username" name="user" type="text">
            <!--<input type="password" placeholder="Password" name="pass">-->
            <input placeholder="Password" name="pass" type="password" value="">
            <input type="submit" value="Submit">
        </fieldset>
    {{ Form::close() }}
  </div>

@stop