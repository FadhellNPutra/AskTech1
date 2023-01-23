<!DOCTYPE html>
<html lang="en">

<head>
    <title>AskTech</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('/Casinal/css/style.css')}}">
</head>
<body class="">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-dark header-light">
    {{-- logo --}}
        <div class="m-header">
        <a href="/dummy" class="b-brand">
            <!-- ========   change your logo here   ============ -->
            <img src="{{ asset('Casinal/images/AskTech-logo.png')}}" class="logo">
        </a>
        <b><a class="home" href="/dummy" style="margin-left: -2">Home</a></b>
    </div>
    <div class="collapse navbar-collapse">
        {{-- search --}}
        <div>
            <form>
                <input class="form-control mr-sm-2" type="search" placeholder="Search"  id="keyword" aria-label="Search" style="width: 275%; border-color:#28bebe">
            </form>
        </div>
        {{-- Notif & profile --}}
        <ul class="navbar-nav ml-auto mr-4">
            <li>
                <div>
                    <a><img src="{{asset('Casinal/images/mail-icon.png')}}"></i></a>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('Casinal/images/notif.png')}}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="dropdown-menu">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#!" class="m-r-10">mark as read</a>
                                <a href="#!">clear all</a>
                            </div>
                        </div>
                        <ul class="dropdown-menu">
                            <li class="n-title">
                                <p class="m-b-0">NEW</p>
                            </li>
                        </ul>
                        <div class="noti-footer" style="background-color: whitesmoke">
                            <a>There is No Notification</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('Casinal/images/profile.png')}}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{asset('/Casinal/images/pict.png')}}" class="img-radius" alt="User-Profile-Image">
                            <span>{{Auth::user()->name}}</span>
                        </div>
                        <ul class="pro-body">
                            <li><a href="/profile" class="dropdown-item"><i class="nav-icon fas fa-user"></i> Edit Profile</a></li>
                            <li><a href="{{ route('logout') }}" class="dropdown-item" style="color:crimson; background-color: rgb(255, 180, 180)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="feather icon-lock"></i> <b>Log Out</b></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </header>
<!-- [ Header ] end -->

        @yield('category')
        
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<<<<<<< HEAD
    @include('sweetalert::alert')
    @stack('scripts')
</body>
=======
@stack('scripts')
</body>
<footer>
@include('partial.footer')
</footer>
>>>>>>> c28e289f44ba27ac45752d3f66dcaabc819c4eed
