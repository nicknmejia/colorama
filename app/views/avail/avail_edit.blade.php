@extends('layouts.main')
@section('content')



{{ Form::open(array('action' => 'AvailController@update')) }}

<div class="row">
	<div>Update your items:</div>
	<table>
		<thead>
			<th class="hide-for-small" width="50">ID</th>
			<th class="show-for-medium-up">Description</th>
			<th width="50">Rating</th>
			<th width="50">Status</th>
			<th width="120"></th>
			<th></th>
		</thead>
		@foreach($items as $array_num => $object)
		<tr>
			<input type="hidden" value="$object->id" name="$object->id">
			<td class="hide-for-small">{{{ $object->id }}}</td>
			<td><input type="text" value="{{{ $object->description }}}" name="n{{{ $object->id }}}"></td>
			<td>{{{ $object->rating }}}</td>
			@if($object->qty == 0)
			<td class="off">OFF</td>
			@elseif($object->qty == 1)
			<td class="on">ON</td>
			@endif
			<td>
				<input type="text" placeholder="New Rating" name="r{{{ $object->id }}}">
			</td>

			<td>
				<input type="radio" id="on"  name="s{{{ $object->id }}}" value="off"><label>On</label>
				<input type="radio" id="off" name="s{{{ $object->id }}}" value="on"><label>Off</label>
			</td>
		</tr>
		@endforeach
	</table>
	{{  Form::submit('Submit')	}}
</div>

{{ Form::close() }}


@stop