@include('layout.header')
<body>
@include('layout.navbar')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{('style/assets/img/events-1.jpg')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Introduction to webdesign</a></h5>
                <p class="font-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{('style/assets/img/events-2.jpg')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Marketing Strategies</a></h5>
                <p class="font-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->


    <!-- ======= Seminar Section ======= -->
    <section id="galeri" class="galeri" style="padding-top:10px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Seminar</h2>
          <p>Seminar</p>
        </div>

        <div class="row">
          
        </div>

      </div>
    </section><!-- End About Section -->


        <!-- ======= About Section ======= -->
        <section id="galeri" class="galeri" style="padding-top:10px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gathering</h2>
          <p>Gathering</p>
        </div>

        <div class="row">
          
        </div>

      </div>
    </section><!-- End About Section -->
@include('layout.footer')
@include('layout.top')
</body>
</html>