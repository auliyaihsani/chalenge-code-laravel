@extends('layouts.app')
@section('title', 'show' )
@section('content')



<div class="row">
<div class="col-md-8">
<div class="well">
	<h4>Kecamatan :</h4>
   <p> {{ $kriminalitas->kecamatan }} </p>
   <h4>Kelurahan :</h4>
   <p> {{ $kriminalitas->kelurahan }} </p>
   <h4>Informasi :</h4>
   <p> {{ $kriminalitas->informasi}} </p>
 </div>
 <div class="well">
 <span class="pull-right"> <a href="#"> Info-Kriminalitas  </a>{{date('j F Y, h:i a', strtotime($kriminalitas->created_at))}} </span>     
 </div>	

</div>
<div class="col-md-4">
	    @if(auth()->user()->id == $kriminalitas->user_id)
	<a href="{{ route('kriminal.edit', $kriminalitas->id)}}"  class="btn btn-info btn-block">Edit</a>
	<br>

	<form action="{{ route('kriminal.destroy', $kriminalitas->id) }}" method="post" >
		{{ csrf_field() }}
	{{ method_field('delete') }}
		<input type="submit" value="hapus" class="btn btn-block btn-danger">
	</form>
	@endif

</div>
</div>



@endsection
