@extends('layouts.main')
@section('content')
{{ Form::open(array('action' => 'UserController@update', 'method' => 'put')) }}

<div class="row bar-push">
  <div class="row">
    <div class="large-4 columns">
      <label>Username
        <input type="text" value="{{ $user[0]->username }}" name="username"/>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>First Name
        <input type="text" value="{{ $user[0]->f_name }}" name="f_name"/>
      </label>
    </div>
    <div class="large-4 columns">
      <label>Last Name
        <input type="text" value="{{ $user[0]->l_name }}" name="l_name"/>
      </label>
    </div>
    <div class="large-4 columns">
      <label>Email
        <input type="text" value="{{ $user[0]->email }}" name="email"/>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>Territory
        <select name="territory">
          <option value="south">Southern California</option>
          <option value="central">Central California</option>
          <option value="thermal">Thermal</option>
          <option value="north">Northern California</option>
        </select>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Admin Privelage</label>
		@if($user[0]->admin === "YES")      
	      <input type="radio" name="admin" value="YES" id="yes" checked><label for="yes">Yes</label>
	      <input type="radio" name="admin" value="NO" id="no"><label for="no">No</label>
	    @elseif($user[0]->admin === "NO")
	      <input type="radio" name="admin" value="YES" id="yes"><label for="yes">Yes</label>
      	  <input type="radio" name="admin" value="NO" id="no" checked><label for="no">No</label>
      	@endif
    
    </div>
  </div>
  {{ Form::submit('Submit'); }}
</div>

{{ var_dump($user) }}

{{ Form::close() }}
@stop