@extends('layouts.main')
@section('content')
  {{ Form::open(array('route' => 'todos.store')) }}
  {{ Form::label('title', 'List title') }}
  {{ Form::text('title') }}
  <?php echo $errors->first('title', '<p>:message</p>'); ?>
  {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-primary')); }}
  {{ Form::close() }}
@stop