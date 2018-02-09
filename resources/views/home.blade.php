@extends('layouts.app')
@section('title', 'home' )
@section('content' )


<div class="row">
@include('informasi.listgrup')

@include('informasi.postlist')

<div class="container">
	<ul class="pagination">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
</div>


</div>


@endsection
