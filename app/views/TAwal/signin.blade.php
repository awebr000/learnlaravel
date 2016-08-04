
@extends('layout.default')

@section('content')

<div class="container">
  <div class="form-signin">
    {{Form::open(['action' => 'TAwalController@post']);}}
  <h2 class="form-signin-heading">Login</h2>
    <label for="inputEmail" class="sr-only">Email</label>
    <input id=inputEmail type="email" name="email" class="form-control" placeholder="Email">
    <label for="inputPassword" class="sr-only">Password</label>
    <br><input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password"></br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p>Dont have an account ?{{link_to("/TAwal/signup", "Sign Up");}}</p>
  {{Form::close();}}
  </div>
</div>
@stop
