@extends('layouts.main')
@section('content')
  
  <div>

    {{ Form::open(array('route' => 'todos.store', 'class' => 'clearfix form col-md-6')) }}
    
    <div class="form-group">
      {{ Form::label('title', 'List title') }}
      {{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Title')) }}
      <?php echo $errors->first('title', '<p>:message</p>'); ?>
    </div>
    <div class="form-group">
      {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-primary')); }}
      {{ link_to_route('todos.index', 'Back to List', null, array('class' => 'btn btn-lg btn-primary')) }}
  
    </div>

    {{ Form::close() }}

  </div>
@stop