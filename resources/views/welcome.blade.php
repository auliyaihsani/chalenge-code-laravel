@extends('layouts.app')

@section('title', 'homepage')
@section('content')



<div class="jumbotron">
  <h1>Informasi kriminalitas</h1>
  <p>Aplikasi informasi kriminalitas dan kejahatan untuk wilayah jabodetabek </p>
   <a href="{{ route('register')}}" class="btn btn-primary"> <h2>Daftar untuk informasi selengkapnya</h2> </a>
</div>	


<div class="row">
@include('informasi.listgrup')

@include('informasi.postlist')
<br><br>



</div>


@endsection