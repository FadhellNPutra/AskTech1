@extends('layout.master')

@section('content')
<br><br><br><br>
{{-- code dari sini --}}

<div class="container">
    <div class="row">
        <div class="col">
            kolom 1
            {{-- <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}
            {{-- <img src="{{ asset('Casinal\images\peta.png') }}" width="100" height="100" alt=""> --}}
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('Casinal\images\peta.png') }}" alt="">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col">
            kolom 2
        </div>
    </div>
    <div class="row">
        <div class="col">
            kolom 1
            {{-- <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}
        </div>
        <div class="col">
            kolom 2
        </div>
    </div>

</div>


@endsection