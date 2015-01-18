@extends('layouts.main')
@section('content')
  
  

{{ Form::open(array('route' => 'todos.store', 'class' => 'clearfix form col-md-6')) }}
    
  @include('todos.partials._form')

{{ Form::close() }}

  </div>
@stop