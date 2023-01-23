@extends('layout.master2')

{{-- Ask --}}
@section('category')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h4>Category</h4>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Artificial Intelegent</a></li>
                <li class="list-group-item"><a href="#">Data Science</a></li>
                <li class="list-group-item"><a href="#">Digital Marketing</a></li>
                <li class="list-group-item"><a href="#">UI/UX</a></li>
                <li class="list-group-item"><a href="#">Web Development</a></li>
              </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card bg-transparent">
                <div class="form-group text-center">
                  <h3>What do you want to ask ?</h3>
                  <div class="card">
                    <div class="card-body">
                        <form action="/dummy" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <textarea class="form-control" name="isi_pertanyaan" rows="3" placeholder="Type your question here ... "></textarea>
                            </div>
                            @error('isi_pertanyaan')
                            <div class="alert alert-danger">Isi pertanyaanmu</div>
                            @enderror
                            <div class="row">
                                <div class="ask-input" style="margin-left: 5%">
                                    <p style="margin-left: -50%">Add your image</p>
                                    <input type="file" class="form-control-file" name="foto">
                                </div>
                                @error('foto')
                                    <div class="alert alert-danger">Pilih gambar pendukung</div>
                                @enderror
                                <div class="ask-input">
                                    <p>Pick the category</p>
                                    <select class="custom-select" name="kategori">
                                      <option selected>Choose one...</option>
                                      <option value="1">AI</option>
                                      <option value="2">Data Science</option>
                                      <option value="3">Digital Marketing</option>
                                      <option value="4">UI/UX</option>
                                      <option value="5">Web Development</option>
                                    </select>
                                </div>
                                @error('kategori')
                                <div class="alert alert-danger">Pilih kategori</div>
                                @enderror
                            </div>
                            <div class="ask-input">
                                <br><button type="submit" class="btn btn-primary btn-sm btn-block">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h3>Discuss</h3>
                </div>
            </div>
            <div class="card">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($ask as $value)
                                <tr>
                                    <td>{{Str::limit($value->isi_pertanyaan,50)}}</td>
                                    <td>
                                        <a href="/dummy/{{$value->id}}" class="btn btn-success btn-block btn-sm">Discuss</a>
                                        <div class='row my-2'>
                                            <div class='col'>
                                                <a href="/dummy/{{$value->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                                            </div>
                                            <div class='col'>
                                                <form action="/dummy/{{$value->id}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger btn-block btn-sm" value="Delete">
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr><td>No Question</td></tr>
                            @endforelse
                        </tbody>
                      </table>
            </div>
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

@endsection

