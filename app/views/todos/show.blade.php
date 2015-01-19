@extends('layouts.main')
@section('content')
  <h1>{{{ $list->name }}}</h1>
  @foreach($items as $item)
    <h4>{{{ $item->content }}} </h4>
  @endforeach
  {{ link_to_route('todos.edit', 'Edit', array($list->id),
            array('class' => 'btn btn-lg btn-primary')) }}     
  {{ link_to_route('todos.index', 'Back to List', null, 
            array('class' => 'btn btn-lg btn-primary')) }}
@stop
