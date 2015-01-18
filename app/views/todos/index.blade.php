@extends('layouts.main')
@section('content')
  <h2>All Todo List</h2>
  <ul>
    @foreach($todo_lists as $list)
    <li>
      {{ link_to_route('todos.show', $list->name, array($list->id)) }}
    </li>
    @endforeach
  </ul>
  {{ link_to_route('todos.create', 'Create New List', array(), array('class' => 'btn btn-lg btn-primary')) }}
@stop