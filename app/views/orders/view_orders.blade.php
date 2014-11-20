@extends('layouts.main')
@section('content')

	<div class="row bar-push">
    <form>
    <fieldset>
      <legend>Orders to Ship</legend>
      <table class="large-12 columns">
        <thead>
          <tr>
            <th width="50">OO#</th>
            <th width="250" class="hide-for-small">Ordered</th>
            <th width="">Ship Date</th>
            <th width="" class="hide-for-small">Store</th>
            <th width="">Store #</th>
            <th width="" class="hide-for-medium-up">Processed</th>
            <th width=""></th>

          </tr>
        </thead>
        <tbody>

        @foreach($orders as $array_num => $object)
          <tr>
            <td>{{{ $object->id }}}</td>
            <td class="hide-for-small">{{{ $object->order_date }}}</td>
            <td>{{{ $object->ship_date }}}</td>
            <td class="hide-for-small">{{{ $object->s_name }}}</td>
            <td>{{{ $object->s_num }}}</td>
            <td>
              @if($object->print == 0)
              Unprinted
              @elseif($object->print == 1)
              Printed
              @endif
            </td>
            <td>
              @if(Auth::user()->admin == "YES")
                {{ Form::open(array('action' => 'OrderController@show')) }}
                  {{ link_to_route('orders.show','Print Order', $object->id, ['class' => 'tiny button']) }}
                {{ Form::close() }}

              @elseif(Auth::user()->admin == "NO")
                {{ Form::open(array('action' => 'OrderController@show')) }}
                  {{ link_to_route('orders.show','View Order', $object->id, ['class' => 'tiny button']) }}
                {{ Form::close() }}

              @endif
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>

@stop