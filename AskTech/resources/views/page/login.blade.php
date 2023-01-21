@extends('layout.master')
{{-- @include('partial.nav') --}}

{{-- belum kena bootstrap --}}

@section('content')

<div class="container">
  <div class="card">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iure cumque, molestiae facere nihil accusamus similique ex velit ipsum laudantium. Consequatur ipsam culpa necessitatibus temporibus quae eum reiciendis ratione eos.</p> --}}

{{-- <div class="container bg-secondary">
  <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Username</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
      </div>
      <button type="submit" class="form-control">Login</button>
    </form>

    <div>
      <p>Belum punya akun? <a href="/register">Click Here</a></p>
    </div>
</div> --}}
@endsection
