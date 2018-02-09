@extends('layouts.app')
@section('title', 'edit' )
@section('content')

<form  action="{{ route('kriminal.update', $kriminalitas->id)}}" method="post" role="form" class="container" >
  {{ csrf_field() }}   {{ method_field('put') }}
  <div class="form-group">
      <label for="kecamatan" class="col-lg-2 control-label">Kecamatan</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="masukan kecamatan" value="{{ $kriminalitas->kecamatan }}">
      </div>
    </div>

    <div class="form-group">
      <label for="keluarahan" class="col-lg-2 control-label">Keluarahan</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="kelurahan" value="{{ $kriminalitas->kelurahan }}" name="kelurahan" placeholder="masukan kelurahan">
       
      </div>
    </div>

    <div class="form-group">
      <label for="informasi" class="col-lg-2 control-label">Informasi</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="informasi" name="informasi" placeholder="Masukan informasi"> {{$kriminalitas->informasi}} </textarea>
      </div>
    </div> 
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>




@endsection