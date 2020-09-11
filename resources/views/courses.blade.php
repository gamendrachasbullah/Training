@include('layout.header')
<body>
@include('layout.navbar') 
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
@include('layout.footer')
@include('layout.top')
</body>

</html>