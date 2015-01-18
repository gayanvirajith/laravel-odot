@extends('layouts.main')
@section('content')
  <h2>{{{ $list->name }}}</h2>
  {{ link_to_route('todos.edit', 'Edit', array($list->id),
            array('class' => 'btn btn-lg btn-primary')) }}     
  {{ link_to_route('todos.index', 'Back to List', null, 
            array('class' => 'btn btn-lg btn-primary')) }}
@stop