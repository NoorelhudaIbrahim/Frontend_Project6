@extends('layout.master')
@section('title')
   fields
@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider probootstrap-inner">
  <ul class="slides">
     <li style="background-image: url(img/services.jpeg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                {{-- <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p> --}}
                <h1 class="probootstrap-heading probootstrap-animate">Fields</h1>
                {{-- <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div> --}}
              </div>
            </div>
          </div>
        </div>
      </li>
  </ul>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/swimming1.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Prince Hamzah Club</h3>
            <p> swimming pool <strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/Football1.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Union School Stadium</h3>
            <p>Football <strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/Golf.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Ayla Golf Club</h3>
            <p>Golf Club <strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/Basketbol1.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Ayla basketball court</h3>
            <p> basketball<strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/swimming2.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Al Rowad Schools </h3>
            <p> swimming pool<strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="probootstrap-room">
          <a href="#"><img src="img/Football2.png" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
          <div class="text">
            <h3>Rosary Sisters School</h3>
            <p>Football <strong>$29.00/Night</strong></p>
            <div class="post-meta mb30">
              <ul>
                <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p><a href="{{ route('reservation') }}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block"></div>

    </div>
    <br>
    <br>

    

@endsection

