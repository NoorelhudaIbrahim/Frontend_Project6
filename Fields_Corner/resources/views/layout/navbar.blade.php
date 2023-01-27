{{-- @section('header') --}}
<header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">

          <ul class="probootstrap-main-nav">

            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
            <li ><a href="{{ url('about') }}">About</a></li>
            <li class="hidden-xs probootstrap-logo-center"><a href="{{ route('welcome') }}"><img src="img/logo.png" class="hires" width="250" height="100" alt="Free Bootstrap Template by uicookies.com"></a></li>
            <li><a href="{{ route('fields')}}">Fields</a></li>
            {{-- <li><a href="{{ route('reservation') }}">Reservation</a></li> --}}
            <li><a href="{{ url('contact') }}">Contact</a></li>
          </ul>



          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
        </div>
    <!-- </div> -->
  </header>
{{-- @endsection --}}
