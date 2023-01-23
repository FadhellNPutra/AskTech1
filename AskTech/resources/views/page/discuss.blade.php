@extends('layout.master2')

@push('scripts')
<script src="https://cdn.tiny.cloud/1/dlkv878cxg3n0k55pkmidhc62bjvt1glt7tg606zu7upvp53/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
@endpush

@section('category')
<div class="card">
    <h6 class="card-header"><b>Jawab pertanyaan di bawah ini</b></h6>
    <div class="card-body">
        <img src="{{asset('gambar/'.$ask->foto)}}" class="card-img" style="size: 50%" alt="...">
        <p class="card-text">{{$ask->isi_pertanyaan}}</p>       
    </div>
        <hr>
        <h4>List Jawaban</h4>
        <hr>

        <form action="/jawaban/{{$ask->id}}" method="POST">
            @csrf
            <textarea name="content" class="form-control" placeholder="Isi jawabanmu di sini ..." id="" cols="30" rows="10"></textarea>

            <div class="ask-input" style="margin-top: 2">
                <label>Add your image</label>
                <input type="file" class="form-control-file" name="foto">
            </div>
            <input type="submit" value="Kirim" class="btn btn-primary btn-sm btn-block my-2">
        </form>

        {{-- @forelse($ask->Jawaban as $item)
            <div class='card'>
                <div class='card-header'>
                    user_id
                </div>
                <div class='card-body'>
                    <p class='card-text'>{{$item->jawaban}}</p>
                </div>
            </div>
        @empty
            
        @endforelse --}}

</div>
<div>
    <a href="/dummy" class="btn btn-secondary btn-block">Back to home</a>
    <br><br><br>
</div>
@endsection