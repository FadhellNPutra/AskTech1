{{-- <nav>
    <div class="container">
        <div class="row">
            <div class="col-3"><a href="/">
                <img src="{{ asset('Casinal/images/AskTech-logo.png')}}" width="150" height= "30"></a>
            </div>
            <div class="col-9">
                <ul class="nav justify-content-end m-2">
                    <li class="nav-item">
                      <a class="nav-link" href="/about" style="color: black"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contact" style="color: black"><b>Contact Us</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}

<!-- Just an image -->
<nav class="navbar navbar-light bg-light fixed-top">
  <div class="row">
    <div class="col-3">
      <a href="/"><img src="{{ asset('Casinal/images/AskTech-logo.png')}}"></a>
    </div>
    <div class="col-9">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="/register"><b>Register</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/about"><b>About</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/contact"><b>Contact Us</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>