<?php
session_start();
error_reporting(0);
$name=Session::get('name');
$email=Session::get('email');
?>
@extends('layout.default')

@section('content')

<div class="container">
  {{Form::open(['action' => 'TAwalController@comment']);}}
    Name:</br>
    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" readonly></br>
    Email:</br>
    <input class="form-control" type="email" name"email" value="<?php echo $email; ?>" readonly></br>
    Comment:</br>
    <textarea class="form-control" name="comment" rows="5" placeholder="Max 500 character. . . and use tag </br> for start in new line"></textarea></br>
    @if(!Session::has('name')))
    <button class="btn btn-success" type="submit" disabled>Submit</button>
    <p>login first! <a href="login.php">Click Here..</a></p>

  @else
    <button class="btn btn-success" type="submit">Submit</button>
  @endif
  {{Form::close();}}
</div>
<?php
// $servername="localhost";
// $username="root";
// $password="root";
// $conn=mysql_connect($servername, $username, $password);
// if(!$conn){
//   die('couldnot connect :'.mysql_error());
// }
// mysql_select_db('NEWEB');
// $sql="SELECT Name, Comment FROM comment;";
// $retval=mysql_query($sql, $conn);
$retval=Comment::select('Name', 'Comment')->get()

?>
  <div class="container">
@foreach($retval as $key => $val)
<!-- {{ $val->Name }} -->
</br>


    <div class="commentBox">
    <p class="commentName"> {{"".$val->Name." Say: "; }}</p>
    <p class="commentArea"> {{$val->Comment;}}</p>
  </div>

@endforeach

  </div>
  <div id="footer">
    <p style="text-align:center;">Copyright &copy; - 2016 - All Rights Reserved - re-kill.com</p>
  </div>
@stop
