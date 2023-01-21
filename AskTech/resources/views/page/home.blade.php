@extends('layout.master2')

@section('category')
<div class="container">
    <div class="row">
      <div class="col-sm">
        <h5>Kategori</h5>
      </div>
      <div class="col-sm">
        <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Example label</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
          </form>
      </div>
      <div class="col-sm">
        One of three columns
      </div>
    </div>
  </div>
@endsection