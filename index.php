<!DOCTYPE html>
<html>

<head>
  <title>Masuk | Tax Center</title>
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
        <li class="nav-item pl-4 ">
          <a id="navbar" class="nav-link js-scroll-trigger" href="index.php">
            Beranda
          </a>
        </li>
        <li class="nav-item pl-4">
          <a id="navbar" class="nav-link js-scroll-trigger" href="beritaPajak.php">
            Berita Pajak
          </a>
        </li>
        <li class="nav-item pl-4 ">
          <a id="navbar" class="nav-link js-scroll-trigger" href="tentangKami.php">
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
        <div class="col-md-12 row p-5">
          <div class="col-md-6 pull-left bg-primary p-5">
            <img src="assets/images/login-illustration.png" alt="img-login" class="pull-right justify-content-center" />
          </div>
          <div class="bg-light col-md-6 p-5">
            <div class="login-header mt-1 text-center">
              <h4>Masuk</h4>
            </div>
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "gagal") {
                echo '<div id="pesan_gagal" class="alert alert-success" style="display:none;">Login gagal! email dan password salah!</div>';
              } else if ($_GET['pesan'] == "belum_login") {
                echo '<div id="belum_login" class="alert alert-success" style="display:none;">Anda harus login untuk mengakses halaman dashboard</div>';
              }
            }
            ?>
            <article class="pull-right mt-4">
              <form action="proses-login.php" class="form" id="form" method="POST">
                <div class="input-field form-group">
                  <label for="email">Email</label>
                  <input placeholder="Email" type="text" id="email" name="email" required autofocus autocomplete="true"><br>
                </div>
                <!-- form-group// -->
                <div class="input-field form-group">
                  <label for="password">Kata Sandi</label>
                  <input placeholder="Kata Sandi" type="password" id="password" name="password" required>
                  <br>
                </div>
                <!-- form-group// -->
                <input value="MASUK" type="submit" class="font-weight-bold">
              </form>
              <div class="row justify-content-center">
                <a class="nav-link js-scroll-trigger" href="registrasi.php">
                  <h6><strong>Lupa Password</strong></h6>
                </a>
              </div>
            </article>
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