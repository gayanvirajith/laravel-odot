 <div class="form-group">
  {{ Form::label('name', 'List title') }}
  {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
  {{ $errors->first('name', '<p>:message</p>')}}
</div>

<div class="form-group">
  {{ Form::submit('Save', array('class' => 'btn btn-lg btn-primary')) }}
  {{ link_to_route('todos.index', 'Back to index', null, array('class' => 'btn btn-lg btn-primary')) }}
</div>