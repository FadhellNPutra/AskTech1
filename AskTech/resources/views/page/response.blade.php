@extends('layout.master2')

@section('category')
<h3><b>({{$ask->kategori}})</b></h3>
<p>{{$ask->isi_pertanyaan}}</p>

<a href="/dummy" class="btn btn-secondary btn-sm">Back to list</a>

@endsection