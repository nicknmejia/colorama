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
            <th width="">Territory</th>
            <th width="">Admin?</th>
            <th width="">Edit</th>

          </tr>
        </thead>
        <!-- Don't forget to generate these with Eloquent! !-->
        <tbody>
          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@johndoe.com</td>
            <td>South</td>
            <td>NO</td>
            <td><input type="submit" value="00"></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nick</td>
            <td>Mejia</td>
            <td>nicknmejia@gmail.com</td>
            <td>South</td>
            <td>YES</td>
            <td><input type="submit" value="01"></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dana</td>
            <td>Martindale</td>
            <td>danmartindale@gmail.com</td>
            <td>North</td>
            <td>NO</td>
            <td><input type="submit" value="02"></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Dave</td>
            <td>Wajarian</td>
            <td>dave@johndoe.com</td>
            <td>South</td>
            <td>NO</td>
            <td><input type="submit" value="03"></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Walter</td>
            <td>Sobchak</td>
            <td>norolling@shabbos.com</td>
            <td>South</td>
            <td>YES</td>
            <td><input type="submit" value="04"></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Jacob</td>
            <td>Kleinke</td>
            <td>y2kleinke@gmail.com</td>
            <td>North</td>
            <td>NO</td>
            <td><input type="submit" value="05"></td>
          </tr>
          <tr>
            <td>7</td>
            <td>Micky</td>
            <td>Moose</td>
            <td>walt@doosney.com</td>
            <td>North</td>
            <td>NO</td>
            <td><input type="submit" value="06"></td>
          </tr>
          <tr>
            <td>8</td>
            <td>Steve</td>
            <td>Cockshiner</td>
            <td>steve@website.com</td>
            <td>South</td>
            <td>YES</td>
            <td><input type="submit" value="07"></td>
          </tr>
        </tbody>
      </table>
    </fieldset>
    </form>
  </div>

@stop