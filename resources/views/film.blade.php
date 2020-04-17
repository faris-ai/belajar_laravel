@extends('layout/main')

@section('title', 'Daftar Film')   
@section('theme', 'navbar-dark bg-dark')
@section('active-film', 'active')

@section('container')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$namaHalaman}}</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
  @endsection
  <!-- Ini adalah halaman daftar film -->