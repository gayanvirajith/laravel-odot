@extends('layouts.main')
@section('content')
  <h2>All Todo List</h2>
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
      @foreach($todo_lists as $list)
      <tr>
        <td>
          {{{ $list->name }}}
        </td>
        <td>
          {{ link_to_route('todos.show', 'Show', array($list->id), 
            array('class' => 'btn btn-sm btn-primary')) }}
          {{ link_to_route('todos.edit', 'Edit', array($list->id),
            array('class' => 'btn btn-sm btn-primary')) }}  
          {{ Form::model($list, [ 'route' => ['todos.destroy', $list->id], 
            'method' => 'DELETE', 'style' => 'display:inline' ])}}
            {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'btn btn-sm btn-primary']) }}
          {{ Form::close() }}                  
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  {{ link_to_route('todos.create', 'Create New List', array(), array('class' => 'btn btn-lg btn-primary')) }}
@stop