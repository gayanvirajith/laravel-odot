@extends('layouts.main')
@section('content')
  <address>
    {{{ $data['name'] }}},<br/>
    {{{ $data['email'] }}},<br/>
    {{{ $data['location'] }}}
  </address>

  @if ( isset($data['last_name']))
    {{{ $data['last_name'] }}}
  @else
    No last name set.
  @endif

  <ul>
  @foreach($data as $item)
    <li>{{{ $item }}}</li>
  @endforeach
  </ul>
@stop