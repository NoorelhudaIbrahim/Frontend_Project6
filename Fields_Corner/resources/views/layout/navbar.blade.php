
<!-- header section starts  -->

 <header class="lb">

  <div id="menu-bar" class="fas fa-bars "></div>
  <a class="logo" href="{{ route('welcome') }}"><img src="img/logo.png" class="hires" width="250" height="60" alt="Free Bootstrap Template by uicookies.com"></a>
  {{-- <a href="#" class="logo"><span>T</span>ravel</a> --}}

  <nav class="navbar">
      <a href="{{ route('welcome') }}">Home</a>
      <a href="{{ url('about') }}">About</a>
      <a href="{{ route('fields')}}">Fields</a>
      <a href="{{ url('contact') }}">Contact</a>
  </nav>

  {{-- <div class="icons"> --}}
      {{-- <i class="fas fa-search" id="search-btn"></i> --}}
      {{-- <i class="fas fa-user" id="login-btn"></i> --}}
      <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"    aria-expanded="false">
        <i class="fa fa-user"></i> Username 
     </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-in"></i> Login</a></li>
    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </div>

  {{-- <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
  </form> --}}

</header>

<!-- header section ends -->

