@extends('layouts.main')
@section('content')

	<!-- Help Panel -->
  <div class="row bar-push">
    <form>
      <fieldset>
        <legend>Fill out the required information for new user:</legend>
        
        <div class="large-12 columns">
          <p>Need help?  Something not working?  Fill out the following fields along with a detailed description of your problem.  Someone will be in touch with you shortly.</p>
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Email">
          <select id="size">
            <option class="size" value="pak808">Nature of Problem</option>
            <option class="size" value="pak806">"I can't add a user"</option>
            <option class="size" value="pak4inch">"Availability doesn't work"</option>
            <option class="size" value="halfflat">"The totals don't look right"</option>
            <option class="size" value="halfflat">"Just saying hi!"</option>
            <option class="size" value="halfflat">"Something else..."</option>
          </select>
          <textarea rows="3" placeholder="Describe your problem..."></textarea>
        </div>
        <div class="row centered">
          <input type="submit">
        </div>
      </fieldset>
    </form>
  </div>

@stop