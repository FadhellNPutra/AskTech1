@extends('layout.master2')

@section('category')
<br><br>
<div class="container">
    <div class="row">
      <div class="col-3">
        <div class="card">
          <div class="card-header">
            <h4>Category</h4>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Smartphone</a></li>
            <li class="list-group-item"><a href="#">Computer</a></li>
            <li class="list-group-item"><a href="#">Programming</a></li>
            <li class="list-group-item"><a href="#">Network</a></li>
            <li class="list-group-item"><a href="#">Machine Learning</a></li>
          </ul>
        </div>
      </div>
      <div class="col-6">
        <form action="">
          <div class="card bg-transparent">
            <div class="form-group text-center">
              <label for="formGroupExampleInput"><h2>What do you want to ask ?</h2></label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input your question" style="width:100%">
            </div>
          </div>
        </form>
        <form action="">
          <div class="card bg-transparent">
            <div class="form-group">
              <label for="formGroupExampleInput2"><h2>Answer</h2></label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input your answer">
            </div>
          </div>
        </form>
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-header">
            <h4>Trending</h4>
          </div>
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Laravel</a></li>
            <li class="list-group-item"><a href="#">Asus</a></li>
            <li class="list-group-item"><a href="#">Iphone 14</a></li>
            <li class="list-group-item"><a href="#">React</a></li>
            <li class="list-group-item"><a href="#">Chat GPT</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection