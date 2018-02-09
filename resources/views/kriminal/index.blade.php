@extends('layouts.app')
@section('title', 'index' )
@section('content')

@foreach($kriminalitas as $kriminalitas)
<div class="col-md-9">
<div class="list-group">
  <a href="{{route('kriminal.show', $kriminalitas->id) }}" class="list-group-item active">
    <p>{{ $kriminalitas->kecamatan }} </p>
  </a>
  <div class="list-group-item"><p>{{$kriminalitas->kelurahan }}</p>
  </div>

  <div class="list-group-item"><p>{{$kriminalitas->informasi }}</p>
  </div>
</div>  
</div>
@endforeach

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



@endsection
