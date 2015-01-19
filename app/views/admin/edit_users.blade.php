@extends('layouts.main')
@section('content')

<div class="row bar-push">
    <form>
    <fieldset>
      <legend>List of Users</legend>
      <table class="large-12 columns">
        <thead>
          <tr>
            <th width="">UserID</th>
            <th width="">First Name</th>
            <th width="">Last Name</th>
            <th width="200">Email</th>
            <th width="">Admin?</th>
            <th width="">Edit</th>

          </tr>
        </thead>
        <!-- Don't forget to generate these with Eloquent! !-->
        <tbody>
          @foreach($users as $array_num => $object)
          <tr>
            <td>{{ $object->id }}</td>
            <td>{{ $object->f_name }}</td>
            <td>{{ $object->l_name }}</td>
            <td>{{ $object->email }}</td>
            <td>{{ $object->admin }}</td>
            <td>{{ link_to_route('users.edit','Edit User', $object->id, ['class' => 'tiny button']) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>

{{ var_dump(Session::all()) }}

@stop