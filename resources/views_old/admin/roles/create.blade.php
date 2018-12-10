@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a role</h1>
    {!! Form::open(['action' => 'AdminRolesController@store', 'method' => 'POST']) !!}


    <div class="form-group">
        {{form::label('name', 'Role name')}}
        {{form::text('name', '', ['class' => 'form-control'])}}
    </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection