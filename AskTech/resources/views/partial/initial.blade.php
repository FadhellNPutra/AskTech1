@extends('layout.master')

@section('content')
<br><br><br><br>
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
   <div class="container">
      <div class="row">
         <div class="col-md-2 my-auto mx-auto">
            <div class="card border bg-transparent">
               <div class="card-body">
                  <h4 class="text-center">Click Below...</h4>
                 <button type="button" class="btn btn-primary"><a href="/login">LOGIN</a></button>
               </div>
               </div>
             </div>
         </div>
      </div>
   </div>
   {{-- <div class="sign_in">
         <h1 class="services_taital">Login</h1><br><br><br><br><br><br><br>
         <button class="btn btn-primary btn-m"><a href="/login">Click Here</a></button>
   </div> --}}
</div>



{{-- <div class="container">
   <div class="row">
      <div class="col">
         <h1>tes123</h1>
      </div>
   </div>
</div> --}}

{{-- mulai dari sini --}}
<!-- copyright section start -->

<!-- copyright section end -->
@endsection
