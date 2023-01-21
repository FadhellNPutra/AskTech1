@extends('layout.master')
@section('content')
<br><br><br>
<div id="my_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="image_1"><img src="{{asset('/Casinal/images/img-1.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="image_1"><img src="{{asset('/Casinal/images/img-1.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="image_1"><img src="{{asset('/Casinal/images/img-1.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
</div>

<div class="slider_container">
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img1.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img2.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img3.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img4.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img1.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img2.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img3.png')}}" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="{{asset('/Casinal/images/slider-img4.png')}}" alt="" />
        </div>
      </div>
   </div>
   <div class="sign_in">
         <h1 class="services_taital">Login</h1><br><br><br><br><br><br><br>
         <button class="btn btn-primary btn-m" href="/login">Click Here</button>
   </div>
</div>

{{-- mulai dari sini --}}
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="text-center" style="padding: auto; margin:1%;"> @2023 Project Laravel SanberCode</p>
      {{-- <p class="copyright_text">© 2020 All Rights Reserved. <a href="https://html.design">Free html Templates</a>
         Distribution <a href="https://themewagon.com">ThemeWagon</a></p> --}}
   </div>
</div>
<!-- copyright section end -->
@endsection


