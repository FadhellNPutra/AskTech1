<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Ask Tech</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{asset('/Casinal/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('/Casinal/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('/Casinal/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{asset('/Casinal/images/fevicon.png')}}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('/Casinal/css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('/Casinal/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('/Casinal/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
    <!-- slidck slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />
</head>

<header>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container">
            @include('partial.nav')
         </div>
      </div>
   </div>
   <!--header section end -->
</header>

<body>
   {{-- Body page --}}
   @yield('content')
   {{-- End of body page --}}
   
   <!-- Javascript files-->
   <script src="{{asset('/Casinal/js/jquery.min.js')}}"></script>
   <script src="{{asset('/Casinal/js/popper.min.js')}}"></script>
   <script src="{{asset('/Casinal/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('/Casinal/js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('/Casinal/js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('/Casinal/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('/Casinal/js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('/Casinal/js/owl.carousel.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
</body>
</html>