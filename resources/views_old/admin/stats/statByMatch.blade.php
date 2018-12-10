@extends('layouts.app')

@section('content')
<div class="container">

<center>

<h2>Stats for match {{$match[0]->match_id}}</h2>
<h3 class='my-4'>{{$match[0]->name1}} vs {{$match[0]->name2}} , {{$match[0]->stadium}}, {{$match[0]->matchDate}}</h3>

<table class="table tablestats">
  <tbody>
    <tr>
      <td>Yellow  Cards:</td>
      <td>{{$match[0]->yellowCards}}</td>
    </tr>
    <tr>
      <td>Red Cards: </td>
      <td>{{$match[0]->redCards}}</td>
    </tr>
    <tr>
      <td>Penalties: </td>
      <td>{{$match[0]->penalties}}</td>
    </tr>
    <tr>
      <td>Faults: </td>
      <td>{{$match[0]->faults}}</td>
    </tr>
    <tr>
      <td> Corners: </td>
      <td>{{$match[0]->corners}}</td>
    </tr>
    <tr>
      <td> Freekicks: </td>
      <td>{{$match[0]->freekicks}}</td>
    </tr>
    <tr>
      <td> Shots: </td>
      <td>{{$match[0]->shots}}</td>
    </tr>
    <tr>
      <td> Offsides: </td>
      <td>{{$match[0]->offsides}}</td>
    </tr>
    <tr>
      <td> Passes: </td>
      <td> {{$match[0]->passes}}</td>
    </tr>
  </tbody>
</table>

</center>

<a href="http://127.0.0.1:8000/admin/matchs" class="btn btn-dark my-1">Back to all matches</a>


</div>
@endsection
