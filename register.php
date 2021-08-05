<!DOCTYPE html>
<html>

<head>
  <title>Daftar | Website</title>
  <meta name="viewport" content="width=-device-width, initial-scale=1.0" />

  <!--Bootstrap CSS-->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body>
  <!-- Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <a class="navbar-brand navbar-logo" style="width: 10%;" href="index.php"><img src="assets/logo.png" class="img-color img-responsive pl-4" style="width: 80%;" /></a>
      <ul class="navbar-nav my-2 my-lg-0 ml-auto border-right pr-2">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php?#Tentang">
            Tentang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php?#Kontak">
            Kontak
          </a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0 pl-5 mr-5">
        <li class="nav-item">
          <button style="border: medium none; display: inline; cursor: pointer;width:100%;height:80%;border-radius: 10%;background-color: #d89b00;">
            <a class="nav-link js-scroll-trigger p-1 text-white" href="index.php">
              <h5>
                <bold>Masuk</bold>
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
    <img src="assets/images/bg.jpeg" class="justify-content-center position-absolute" style="width: 100%; height: 700px;" />
    <div class="container">
      <div class="py-4 text-justify" style="letter-spacing: 1px">
        <div class="col-md-12 row p-5">
          <div class="col-md-6 pull-left bg-primary p-5">
            <img src="assets/images/login-illustration.png" alt="img-login" class="pull-right justify-content-center" />
          </div>
          <div class="bg-light col-md-6 p-5">
            <div class="login-header mt-1 text-center">
              <h4>Daftar</h4>
            </div>
            <article class="pull-right mt-4">
              <form action="proses-registrasi.php" class="form" id="form" method="POST">
                <div class="input-field row form-group">
                  <label for="noNpwp" class="col-md-3">No NPWP</label>
                  <input placeholder=" No Npwp" type="text" id="noNpwp" name="noNpwp" required autofocus autocomplete="true" class="col-md-8 ml-4">
                </div>
                <div class="input-field row form-group">
                  <label for="nama" class="col-md-3">Nama</label>
                  <input placeholder="Nama Lengkap" type="text" id="nama" name="nama" required autofocus autocomplete="true" class="col-md-8 ml-4">
                </div>
                <div class="input-field row form-group">
                  <label for="email" class="col-md-3">Email</label>
                  <input placeholder=" Email" type="text" id="email" name="email" required autofocus autocomplete="true" class="col-md-8 ml-4">
                </div>
                <div class="input-field row form-group">
                  <label for="password" class="col-md">Kata Sandi</label>
                  <input placeholder="Kata Sandi" type="password" id="password" name="password" required class="col-md-8">
                </div>
                <input name="register" value="Daftar" type="submit" class="btn btn-register btn-block btn-success font-weight-bold"></input>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  End Main -->

  <!-- Footer -->

  <footer class="position-relative p-3 mt-3">
    <span>Copyright &#169; 2021 Tax Center Politeknik Negeri Batam. All Rights Reserved</span>
  </footer>

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