@extends('layout.master2')

@section('category')
<div class="card" style="padding: 4cm; margin:2cm">
    <div class="card-header" style="margin-left:9cm"><h3><b>Update Profile</b></h3></div>
    <form action="/profile/{{$detailProfile->id}}" method="POST">
        @csrf
        @method('put')
        
        <div class="form-group">
            <label>Email</label>
            <input type="text" value="{{$detailProfile->user->email}}" class="form-control" disabled>
        </div>    
        
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{$detailProfile->user->name}}" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{$detailProfile->tanggal_lahir}}" class="form-control">
        </div>
        @error('tanggal_lahir')
            <div class='alert alert-danger'>{{$message}}</div>        
        @enderror

        <div class="form-group">
            <label>Bio</label>
            <input type="text" name="bio" value="{{$detailProfile->bio}}" class="form-control">
        </div>
        @error('bio')
            <div class='alert alert-danger'>{{$message}}</div>        
        @enderror

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{$detailProfile->alamat}}" class="form-control">
        </div>
        @error('alamat')
            <div class='alert alert-danger'>{{$message}}</div>        
        @enderror
        

        
        <div class="d-flex justify-content-between">
            <a href="/home" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
    </form>
</div>
@endsection