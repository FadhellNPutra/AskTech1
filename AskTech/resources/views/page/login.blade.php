@extends('layout.master')
{{-- @include('partial.nav') --}}

{{-- belum kena bootstrap --}}

@section('content')
<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-5 my-auto mx-auto">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header text-center" style="">
         <h3>Login</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter an email address">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
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
