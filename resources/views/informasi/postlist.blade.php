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


