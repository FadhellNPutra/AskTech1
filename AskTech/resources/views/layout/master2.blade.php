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
        <a href="/home" class="b-brand">
            <!-- ========   change your logo here   ============ -->
            <img src="{{ asset('Casinal/images/AskTech-logo.png')}}" class="logo">
        </a>
        <b><a class="home" href="/home" style="margin-left: -2">Home</a></b>
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
                    <a href="/pesan"><img src="{{asset('Casinal/images/mail-icon.png')}}"></i></a>
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
                            <li class="dropdown-item">
                                <div class="media">
                                    <img class="img-radius" src="{{asset('/template/dist/assets/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                        <p>New ticket Added</p>
                                    </div>
                                </div>
                            </li>
                            <li class="n-title">
                                <p class="m-b-0">EARLIER</p>
                            </li>
                            <li class="dropdown-item">
                                <div class="media">
                                    <img class="img-radius" src="{{asset('/template/dist/assets/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="media">
                                    <img class="img-radius" src="{{asset('/template/dist/assets/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                        <p>currently login</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="media">
                                    <img class="img-radius" src="{{asset('/template/dist/assets/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="#!">show all</a>
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
                            <img src="{{asset('/template/dist/assets/images/user/avatar-2.jpg')}}" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </header>
<!-- [ Header ] end -->

    <section>
        @yield('category')
    </section> 
</body>