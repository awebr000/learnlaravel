<?php
session_start();
error_reporting(0);
?>
@extends('layout.default')

@section('content')
  <div class="form-signin">
  {{Form::open(['action' => 'TAwalController@store']);}}
  <h2>Register</h2>
    Name:
    <br><input type="text" name="user" placeholder="your name is ?" class="form-control"></br>
    Email:
    <br><input type="email" name="email" placeholder="email@example.com" class="form-control"></br>
    Password:
    <br><input type="password" name="password" placeholder="use strong password" class="form-control"></br>
    Confirm Password:
    <br><input type="password" name="repassword" placeholder="retype your password" class="form-control"></br>
    <button type="submit" class="btn btn-success">Sign Up</button>
    {{Form::close();}}
  </div>

@stop
<?php
echo $_SESSION['ermsg'];
 ?>
