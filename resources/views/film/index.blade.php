@extends('layout/main')

@section('title', 'Daftar Film')   
@section('theme', 'navbar-dark bg-dark')
@section('active-film', 'active')

@section('container')
<div class="container">
<h1 class="mt-4">Daftar Film</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Tahun</th>
      <th scope="col">Genre</th>
      <th scope="col">Format</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($film as $f)
    <tr>
      <th scope="row">{{$loop ->iteration}}</th>
      <td>{{$f->nama}}</td>
      <td>{{$f->tahun}}</td>
      <td>{{$f->genre}}</td>
      <td>{{$f->format}}</td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
  <!-- Ini adalah halaman daftar film -->