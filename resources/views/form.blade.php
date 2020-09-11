@include('layout.header')
<body>
@include('layout.navbar')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pendaftaran</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5" style="margin-left:13%;">

          <div class="col-lg-10 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Depan" data-rule="minlen:4" data-msg="Tolong lengkapi nama depan anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Nama Belakang" data-rule="email" data-msg="Tolong lengkapi nama belakang anda" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Email" data-rule="minlen:4" data-msg="Tolong lengkapi email anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="No.Hp" data-rule="email" data-msg="Tolong lengkapi No.Hp anda" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="No. Whatsapp" data-rule="minlen:4" data-msg="Tolong lengkapi No. Whastapp anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Instagram" data-rule="email" data-msg="Tolong lengkapi nama instagram anda" />
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Pekerjaan" data-rule="minlen:4" data-msg="Tolong lengkapi data pekerjaan anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Institusi" data-rule="email" data-msg="Tolong lengkapi institusi anda" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                <select id="pekerjaan" class="form-control">
                    <option value="">Pasangan Bahasa</option>
                    <option value="">Inggris-Indonesia</option>
	        	</select>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                <select id="pekerjaan" class="form-control">
                    <option value="">Kelas yang diambil</option>
                    <option value="">Silver</option>
                    <option value="">Gold</option>
                    <option value="">Diamond</option>
                    <option value="">Star</option>
	        	</select> 
                <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tolong lengkapi data alamat anda" placeholder="Alamat"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"><b>DAFTAR</b></button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('layout.footer')
  @include('layout.top')

</body>

</html>