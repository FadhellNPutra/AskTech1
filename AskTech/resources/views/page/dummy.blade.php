@extends('layout.master2')

{{-- Ask --}}
@section('category')
<h3><b>CRUD 1 Pertanyaan</b></h3>

<div class="card">
    <h6 class="card-header"><b>Let others know what your curiosity is ...</b></h6>
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
                <div class="ask-input" style="margin-left: 1%">
                    <label>Add your image</label><br>
                    <input type="file" class="form-control-file" name="foto">
                </div>
                @error('foto')
                    <div class="alert alert-danger">Pilih gambar pendukung</div>
                @enderror
                <div class="ask-input">
                    <label>Pick the category</label>
                    <select class="custom-select mr-sm-2" name="kategori">
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
                <br><button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>

<h3><b>Daftar pertanyaan</b></h3>
<div class="card">
    <h6 class="card-header"><b>Daftar pertanyaan dan btn like/dislike</b></h6>
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
                    <td>{{Str::limit($value->isi_pertanyaan,100)}}</td>
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
 

@endsection

