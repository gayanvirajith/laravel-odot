@extends('layouts.main')
@section('content')

<div>
{{ Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT', 'class' => 'clearfix form col-md-6' ))}}
  @include('todos.partials._form')
{{ Form::close() }}
</div>

@stop