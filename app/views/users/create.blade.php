@extends('layout/default')

@section('content')
<h1>Create New User</h1>
  {{Form::open(['route' => 'users.store']);}}
  <div>
    {{Form::label('username', 'Username: ')}}
    {{Form::input('text', 'username')}}
    {{$errors->first('username')}}
  </div>

  <div>
    {{Form::label('password', 'password: ')}}
    {{Form::input('password', 'password')}}
    {{$errors->first('password')}}

  </div>

  <div>
    {{Form::submit('submit')}}
  </div>
  {{Form::close();}}

@stop
