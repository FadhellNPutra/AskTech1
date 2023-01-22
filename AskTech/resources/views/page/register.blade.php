@extends('layout.master')

{{-- @include('partial.nav') --}}
{{-- belum kena bootstrap --}}
@section('content')
<br><br><br><br>
{{-- <div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header text-center">
          <strong>Register</strong>
        </div>
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Nama">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="row">
                <div class="col">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="col">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div> --}}

<div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header text-center">
          <h3>Register</h3>
        </div>
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" required autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Date of Birth</label>
              <input type="date" class="form-control" id="" aria-describedby="emailHelp">
            </div>
            {{-- DropDown Belum bisa jalan --}}
            {{-- <div class="form-group">
              <label for="">Country</label>
              <select name="" id="" class="form-control">
                <option value="">--Select--</option>
                <option value="">Indonesia</option>
                <option value="">USA</option>
                <option value="">China</option>
              </select>
            </div> --}}
            {{-- <div class="form-group">
              <label for="">Country</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group form-check  text-center">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Agreed with term & conditions</label>
            </div> --}}

            <select class="custom-select custom-select-lg mb-3">
              <option value="" selected>--Country--</option>
              <option value="">Indonesia</option>
              <option value="">USA</option>
              <option value="">China</option>
              {{-- <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option> --}}
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection