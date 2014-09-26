@extends('layouts.main')
@section('content')

	<!-- Login Panel -->
  <div class="row login">
    {{ Form::open(array('url' => 'login')) }}
      <fieldset>
          <legend>Please log in</legend>

          <!-- Errors will display here -->

          <p>
            {{ $errors->first('user') }}
            {{ $errors->first('pass') }}
          </p>

          <!--==========================-->

          <label>
            <!--<input type="text" placeholder="Username" name="user"> -->
            {{ Form::text('user', Input::old('user'), array('placeholder' => 'Username')) }}
            <!--<input type="password" placeholder="Password" name="pass">-->
            {{ Form::password('pass', array('placeholder' => 'Password')) }}
            {{ Form::submit('Submit') }}
          </label>
        </fieldset>
    {{ Form::close() }}
  </div>

@stop