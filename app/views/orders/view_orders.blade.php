@extends('layouts.main')
@section('content')

	<div class="row bar-push">
    <form>
    <fieldset>
      <legend>Orders to Ship</legend>
      <table class="large-12 columns">
        <thead>
          <tr>
            <th width="20">OO#</th>
            <th width="250" class="hide-for-small">Ordered</th>
            <th width="">Ship Date</th>
            <th width="" class="hide-for-small">Store</th>
            <th width="">Store #</th>
            <th width="" class="hide-for-medium-up">Processed</th>
            <th width="">Edit</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-16-2014 15:48:56</td>
            <td>08/18/2014</td>
            <td class="hide-for-small">Santa Ana</td>
            <td>606</td>
            <td>Processed</td>
            <td><input type="submit" value="00"></td>
          </tr>
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-16-2014 16:49:26</td>
            <td>08/18/2014</td>
            <td class="hide-for-small">Marina Del Rey</td>
            <td>6611</td>
            <td>Printed</td>
            <td><input type="submit" value="01"></td>
          </tr>
          <tr>
            <td>1</td>
            <td class="hide-for-small">08-17-2014 12:38:44</td>
            <td>08/19/2014</td>
            <td class="hide-for-small">Simi Valley</td>
            <td>6640</td>
            <td>Pending</td>
            <td><input type="submit" value="02"></td>
          </tr>
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>

@stop