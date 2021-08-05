<!DOCTYPE html>
<html>

<head>
  <title>Tentang Kami | Tax Center</title>
  <meta name="viewport" content="width=-device-width, initial-scale=1.0" />

  <!--Bootstrap CSS-->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body id="bpage">
  <!-- Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <a class="navbar-brand navbar-logo" style="width: 10%;" href="index.php"><img src="assets/logo.png" class="img-color img-responsive pl-4" style="width: 80%;" /></a>
      <ul class="navbar-nav my-2 my-lg-0 ml-auto border-right pr-2">
        <li class="nav-item pl-4 " id="navbar">
          <a class="nav-link js-scroll-trigger" href="index.php">
            Beranda
          </a>
        </li>
        <li class="nav-item pl-4" id="navbar">
          <a class="nav-link js-scroll-trigger" href="beritapajak.php">
            Berita Pajak
          </a>
        </li>
        <li class="nav-item pl-4 " id="navbar">
          <a class="nav-link js-scroll-trigger" href="tentangkami.php">
            Tentang Kami
          </a>
        </li>
      </ul>
      <ul class="navbar-nav my-lg-2 pl-4 pr-4">
        <li class="nav-item mr-2 my-2">
          <button id="button1" class="button button1" style="border: medium none; display: inline; width:100%;height:80%;border-radius: 10%;background-color: #008000;">
            <a class="nav-link js-scroll-trigger p-2 text-white" href="kalkulator-pph21.html">
              <h5>
                <p>Simulasi</p>
              </h5>
            </a>
          </button>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar  -->

  <!-- Main -->

  <main>
    <img src="assets/images/bg.jpeg" class="justify-content-center" style="width: 100%; height: 700px; position: fixed;" />
    <div class="container">
      <div class="py-5 text-justify" style="letter-spacing: 1px">
        <div class="col-md-12 p-5">
          <div class="bg-light p-3">
            <div class="mb-3 py-2 text-center">
              <h2><strong>TENTANG KAMI</strong></h3>

            </div>
            <hr>
            <div class="dashboard-content m-4">
              <div class="entry-content">
                <p><strong>VISI</strong></p>
                <p>Menjadi Tax Center Terbaik dalam Mewujudkan Masyarakat Kampus yang Sadar dan Peduli Pajak</p>
                <p><strong>MISI</strong></p>
                <ol>
                  <li>Sebagai pusat informasi perpajakan yang membantu masyarakat kampus dalam pengembangan pengetahuan dan pendidikan perpajakan.</li>
                  <li>Membantu Perguruan Tinggi berikut lembaga &#8211; lembaga yang ada dalam melaksanakan pemenuhan kewajibannya di bidang perpajakan.</li>
                  <li>Membantu pejabat dan karyawan di lingkungan Perguruan Tinggi dalam pemenuhan kewajibannya di bidang perpajakan.</li>
                  <li>Membantu stakeholder (Perguruan Tinggi) untuk memperoleh informasi perpajakan dan pemenuhan kewajibannya di bidang perpajakan.</li>
                  <li>Turut membantu sosialisasi program pemerintah di sektor perpajakan</li>
                  <li>Menyelenggarakan seminar, penelitian, sertifikasi dan pendidikan di bidang perpajakan</li>
                  <li>Menjadi model Tax Center untuk Perguruan &#8211; Perguruan Tinggi.</li>
                </ol>
                <p><strong>ALAMAT</strong></p>
                <ol>
                  <p>TAX CENTER POLITEKNIK NEGERI BATAM</p>
                  <p>Senin - Jum'at (09.00 - 16.00)</p>
                  <p>Lantai 1, Gedung Perkuliahan Mohammad Nashir, Politeknik Negeri Batam</p>
                  <p>Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  End Main -->

  <!-- Footer -->
  <?php
  include('footer.php');
  ?>

  <!-- End Footer -->

</body>

<!--Boootstrap javascript -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    setTimeout(function() {
      $("#pesan_gagal").fadeIn('slow');
    }, 200);
  });
  setTimeout(function() {
    $("#pesan_gagal").fadeOut('slow');
  }, 3000);

  $(document).ready(function() {
    setTimeout(function() {
      $("#belum_login").fadeIn('slow');
    }, 200);
  });
  setTimeout(function() {
    $("#belum_login").fadeOut('slow');
  }, 3000);
</script>

</html>