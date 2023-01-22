@extends('layout.master2')

{{-- Ask --}}
@section('category')

<div class="card">
    <h6 class="card-header"><b>Edit pertanyaan</b></h6>
    <div class="card-body">
        <form action="/dummy/{{$ask->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
              <textarea class="form-control" name="isi_pertanyaan" rows="3" >{{$ask->isi_pertanyaan}}</textarea>
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
                      <option selected>--pilih kategori--</option>
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
@endsection