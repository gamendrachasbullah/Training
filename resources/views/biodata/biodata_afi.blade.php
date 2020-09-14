@include('layout.header')
<body>
@include('layout.navbar')
  <main id="main">
    <!-- ======= Events Section ======= -->
    <section id="events" class="events" style="margin-top:10%; margin-left:25%;">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-8 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{('style/assets/img/events-1.jpg')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Afrizal Luthfi Lisdianta</a></h5>
                <p class="font-italic text-center">Trainer Indonesia-English</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Events Section -->

@include('layout.footer')
@include('layout.top')
</body>
</html>