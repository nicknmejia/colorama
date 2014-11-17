@extends('layouts.main')
@section('content')

	 <div class="row bar-push">
    {{ Form::open(array('action' => 'UserController@store')) }}
      <fieldset>
        <legend>Fill out the required information for new user:</legend>
          {{ Session::get('message') }}
        <div class="large-6 columns">
          <input type="text" placeholder="First Name" name="f_name">
          <input type="text" placeholder="Last Name" name="l_name">
          <input type="text" placeholder="Email" name="email">
        </div>

        <div class="large-6 columns">
          <input type="text" placeholder="Username" name="user">
          <input type="text" placeholder="Password" name="pass">
          <input type="text" placeholder="Confirm Password" name="pass_check">
        </div>
        <div class="row centered">
          {{ Form::submit('Next') }}
        </div>
      </fieldset>
      <div class="large-12 columns">
      <ul class="errors">
      {{ $errors->first('f_name') }}
      {{ $errors->first('l_name') }}
      {{ $errors->first('email') }}
      {{ $errors->first('user') }}
      {{ $errors->first('pass') }}
      {{ $errors->first('pass_check') }}
      </ul>
    </div>
    {{ Form::close() }}
  </div>


@stop