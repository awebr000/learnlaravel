<?php
session_start();
error_reporting(0);
$row="arigi";
?>
@extends('layout.default')

@section('content')

<div class="container">
  <h1>About Me</h4>
  <div class="about-img">
    <img src="{{ $img=asset('img/profil.jpg'); }}" />
  </div>
  <div class="about-art">
  <h4>Nama</h4>
  <p>arigi wiratama</p>
  <h4>Deskripsi</h4>
  <p>Cowok, lahir di Tarakan pada 8 november 1998, Small boy with an ultra big dream</p>
  <?php
  if(Session::has('name')){
  ?><h4>Email</h4>
    <p>mas.awe.awe@gmail.com</p>
    <h4>Phone</h4>
    <p>081240548416</p>
    <h4>Fesbuk</h4>
    <p><a href="https://www.facebook.com/arigi.w">Arigi Wiratama</a></p>

  <?php
} ?>

</div>
</div>
<div id="footer">
  <p style="text-align:center;">Copyright &copy; - 2016 - All Rights Reserved - re-kill.com</p>
</div>
@stop
