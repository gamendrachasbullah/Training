<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/style/assets/img/favicon.png')}}" rel="icon" >
  <link href=" {{asset ('/style/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('styleassets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('styleassets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">STARHACK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Beranda</a></li>
          <li class="drop-down"><a href="/about">Tentang Kami</a>
            <ul>
              <li><a href="http://www.star-indonesia.id/">PT STAR Software Indonesia</a></li>
              <li><a href="#">STAR Translator Hack</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="/courses">Kursus</a>
            <ul>
              <li><a href="/courses/course-silver">Silver Hack</a></li>
              <li><a href="/courses/course-gold">Gold Hack</a></li>
              <li><a href="/courses/course-diamond">Diamond Hack</a></li>
              <li><a href="/courses/course-star">Star Hack</a></li>
            </ul>
          </li>
          <li><a href="/trainers">Trainers</a></li>
          <li class="drop-down"><a href="/events">Event</a>
            <ul>
              <li><a href="#">Seminar</a></li>
              <li><a href="#">Gathering</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Karir</a>
            <ul>
              <li><a href="#">Trainer</a></li>
            </ul>
          </li>
          <li><a href="/contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  
  <main id="main" data-aos="fade-in">


    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-top:50px;">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{('style/assets/img/course-1.jpg')}}" class="img-fluid" alt="..."> 
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Silver Hack</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="/courses/course-silver">Silver Hack</a></h3>
                <p>Jika Anda ingin menjadi penerjemah pemula, bahkan belum memiliki kemampuan 
                  dasar sebagai seorang penerjemah, SILVER HACK adalah course paling tepat untuk Anda.</p>
                  <p><a href="/courses/course-silver" style="text-align:justify;">Lihat Kursus</a></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{('style/assets/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3 mt-md-0">
            <div class="course-item">
              <img src="{{('style/assets/img/course-2.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Gold Hack</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="/courses/course-gold">Gold Hack</a></h3>
                <p>Untuk Anda para penerjemah yang ingin mendalami lagi teknik dasar dan 
                  teknik lanjutan dalam penerjemahan, GOLD Hack adalah paket yang direkomendasikan untuk Anda.</p>
                  <p><a href="/courses/course-gold" style="text-align:justify;">Lihat Kursus</a></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{('style/assets/img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3 mt-lg-0">
            <div class="course-item">
              <img src="{{('style/assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Diamond Hack</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="/courses/course-diamond">Diamond Hack</a></h3>
                <p style="text-align: justify;">Untuk Anda para penerjemah yang ingin menguasai teknik penerjemahan bidang tertentu 
                  seperti IT, Gaming, Medical, Legal dan lain-lain, Diamond Hack wajib Anda ikuti.</p>
                  <p><a href="/courses/course-diamond" style="text-align:justify;">Lihat Kursus</a></p>

                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{('style/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->
        

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3 mt-lg-0">
            <div class="course-item">
              <img src="{{('style/assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Star Hack</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="/courses/course-diamond">Star Hack</a></h3>
                <p>Jangan ambil course ini jika Anda tidak berani investasi lebih untuk kesuksesan besar di masa depan. Jika Anda seorang penerjemah 
                  namun masih kesulitan mendapatkan klien, terutama</p>
                  <p><a href="/courses/course-diamond" style="text-align:justify;">Lihat Kursus</a></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{('style/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>STARHACK</h3>
            <p>
              
             Jl.Kenanga No. 126B <br>
             Jombor kidul, Sinduadi<br>
             Mlati Sleman, 55284, Indonesia <br><br>
              <strong>Phone:</strong> +62274 623 971<br>
              <strong>Email:</strong> sales@star-indonesia.co.id <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hack Silver</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hack Gold</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hack Diamond</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hack Star</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Starhack</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="{{asset('style/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('style/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('style/assets/js/main.js')}}"></script>


</body>

</html>