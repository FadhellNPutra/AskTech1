@extends('layout.master2')
@section('category')
<div class="card">
    <h6 class="card-header"><b>Jawab pertanyaan di bawah ini</b></h6>
    <div class="card-body">
        <img src="{{asset('gambar/'.$ask->foto)}}" class="card-img" style="size: 50%" alt="...">
        <p class="card-text">{{$ask->isi_pertanyaan}}</p>
        <a href="/dummy" class="btn btn-secondary btn-block btn-sm">Back to home</a>
    </div>
</div>
@endsection