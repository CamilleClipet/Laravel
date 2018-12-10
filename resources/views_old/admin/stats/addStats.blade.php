
@extends ('layouts.app')

@section('content')

  <div class="container">

  {!! Form::open(['action' => 'AdminStatsController@store', 'method'=>'POST']) !!}

  <h3>Add stats for match {{$match[0]->id}}</h3>
  <h4>{{$match[0]->name1}} vs {{$match[0]->name2}} , {{$match[0]->stadium}}, {{$match[0]->matchDate}}</h4>

  <div class="form-group">
    {{form::label('yellowcards', 'Number of yellow cards')}}
    {{form::number('yellowcards', '', ['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{form::label('redcards', 'Number of red cards')}}
    {{form::number('redcards', '', ['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('penalties', 'Number of penalties')}}
    {{Form::number('penalties','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('faults', 'Number of faults')}}
    {{Form::number('faults','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('corners', 'Number of corners')}}
    {{Form::number('corners','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('freekicks', 'Number of freekicks')}}
    {{Form::number('freekicks','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('shots', 'Number of shots')}}
    {{Form::number('shots','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('offsides', 'Number of offsides')}}
    {{Form::number('offsides','',['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('passes', 'Number of passes')}}
    {{Form::number('passes','',['class' => 'form-control'])}}
  </div>

    {{ Form::hidden('match_id', $match[0]->id) }}

  <div class="form-group">
    {{Form::submit('Add Stats',['class' => 'btn btn-primary'])}}
  </div>

  {!! Form::close() !!}

    </div>

@endsection
