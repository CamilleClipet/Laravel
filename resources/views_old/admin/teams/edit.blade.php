@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit a team</h1>
    {!! Form::open(['action' => ['AdminTeamsController@update', $team->id], 'method' => 'POST']) !!}


    <div class="form-group">
        {{form::label('name', 'Team name')}}
        {{form::text('name', $team->name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{form::label('country', 'Country name')}}
        {{form::text('country', $team->country, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{form::label('flag', 'Flag URL')}}
        {{form::text('flag', $team->flag, ['class' => 'form-control'])}}
    </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Edit the team', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    {!! Form::open(['action' => ['AdminTeamsController@destroy', $team->id], 'method' => 'POST']) !!}
    {{Form::submit('DELETE', ['class' => 'btn btn-danger my-1'])}}
    {{Form::hidden('_method', 'DELETE')}}
    {!! Form::close() !!}
</div>
@endsection