@extends('layout.master')
@section('title')
   about
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
       <li style="background-image: url(userSide/img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">About Fields-Corner</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>

  {{--  --}}


 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    {{-- <div class="row position-relative"> --}}
    <div class="row ">


      <div class="col-lg-5 about-img"><img src="https://th.bing.com/th/id/R.44559f09bae933392d8a8e0577a9750f?rik=dMtVnj9AAjiguQ&riu=http%3a%2f%2fwww.jordantimes.com%2fsites%2fdefault%2ffiles%2fgolf_7.jpg&ehk=wV1ZcNMdtseKDJSK8pNqDWwBYxXGzKQzv57xOl7Q7us%3d&risl=&pid=ImgRaw&r=0" style="margin:10rem 0rem ;" width="450px" height="390px" alt=""> </div>

      <div class="col-lg-7">
        <h2 class="text-center">Aqaba Fields Corner</h2>
        <div class="our-story">
          {{-- <h4>Est 1988</h4> --}}
          <h3>Our Vision</h3>
          <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>

          </ul>
          <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            <button style="border-radius: 20px solid blue"><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a></button>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mt0">Why Choose Us?</h2>
          <p class="mb50"><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>1+ Million Hotel Rooms</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Food &amp; Drinks</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Airport Taxi</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">
  
      <div class="section-header text-center">
        <h2>Our Team</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>
  
      <div class="row gy-6">
  
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="" width="100px" style="margin-left:130px" class="img" alt="">
            
          </div>
          <div class="member-info text-center">
            <h4>Aseem Yaseen</h4>
            <span>Web-Developer</span>
            {{-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> --}}
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Obaida Al-thunibat</h4>
            <span>Web-Developer</span>
            {{-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> --}}
  
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Shimaa Al-shlouh</h4>
            <span>Web-Developer</span>
            {{-- <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p> --}}
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Walaa Obeidat</h4>
            <span>Web-Developer</span>
            {{-- <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p> --}}
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-lg-4 col-md-6 member "  data-aos="fade-up" data-aos-delay="500">
          <div class="member-img">
            <img src="userSide/img/img_1.jpg" class="img-fluid" alt="" width="200px" >
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Noorelhuda Al-shebailat</h4>
            <span>Web-Developer</span>
            {{-- <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p> --}}
          </div>
        </div><!-- End Team Member -->
  
        {{-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
          <div class="member-img">
            <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Josepha Palas</h4>
            <span>Operation</span>
            <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
          </div> --}}
        </div><!-- End Team Member -->
  
      </div>
  
    </div>
  </section>
  <!-- End Our Team Section -->
  

@endsection



