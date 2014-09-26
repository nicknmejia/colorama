@extends('layouts.main')
@section('content')

	 <div class="row bar-push">
    <form>
      <fieldset>
        <legend>Fill out the required information for new user:</legend>
        
        <div class="large-6 columns">
          <input type="text" placeholder="First Name">
          <input type="text" placeholder="Last Name">
          <input type="text" placeholder="Email">
        </div>

        <div class="large-6 columns">
          <input type="text" placeholder="Username">
          <input type="text" placeholder="Password">
          <input type="text" placeholder="Confirm Password">
        </div>
        <div class="row centered">
          <input type="submit">
        </div>
      </fieldset>
    </form>
  </div>

@stop