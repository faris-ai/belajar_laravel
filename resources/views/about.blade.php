@extends('layout/main')

@section('title', 'About me')   
@section('theme', 'navbar-light bg-light')
@section('active-about', 'active')

@section('container')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <img src="bootstrap-social.png" alt="" height="100px" width="auto">
    <h1 class="display-4">Hello, Faris AI!</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
  @endsection