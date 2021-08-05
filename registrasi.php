<!DOCTYPE html>
<html>

<head>
    <title>Daftar | Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--Bootstrap CSS-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body class="grid-container">
    <!-- Navigasi -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <a class="navbar-brand navbar-logo" style="width: 10%;" href="index.php"><img src="assets/logo.png" class="img-color img-responsive" style="width: 100%;" /></a>
            <ul class="navbar-nav my-2 my-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">
                        Beranda
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Program
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Vocational School Graduate Academy
                            (VSGA)</a>
                        <a class="dropdown-item" href="#">Fresh Graduate Academy (FGA)</a>
                        <a class="dropdown-item" href="#">Online Academy (OA)</a>
                    </div>
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
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login.php">
                        <h5><strong>Login</strong></h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="registrasi.php">
                        <h5><strong>Register</strong></h5>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Akhir Navbar  -->

    <!-- Main -->
    <main>
        <div class="container">
            <div class="container-fluid text-justify" style="letter-spacing: 1px;">
                <div class="Registrasi-content card pt-2 mt-5 pb-0">
                    <div class="container-fluid">
                        <div class="p-4">
                            <div class="login-header text-center">
                                <h4>Pendaftaran</h4>
                            </div>
                            <div class=" bg-light">
                                <form action="proses-registrasi.php" method="POST">
                                    <div class="row">
                                        <div class=" col-6">
                                            <div class="form-group">
                                                <label for="nama" class="col-form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat" class="col-form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelamin" class="col-form-label">
                                                    Jenis Kelamin
                                                </label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                                                    <label class="form-check-label" for="L">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                                                    <label class="form-check-label" for="P">Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama" class="col-form-label">Agama</label>
                                                <select id="agama" name="agama" class="form-control">
                                                    <option selected>Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="sekolah_asal" class="col-form-label">Sekolah Asal</label>
                                                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Sekolah Asal" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="password">Kata Sandi</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                            </div>
                                            <input name="register" value="Daftar" type="submit" class="btn btn-register btn-block btn-success "></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--  End Main -->

    <!-- Footer -->

    <footer class=" fixed-bottom">
        <span>&#169; 2020 Web Developer, Roqib Abdillah</span>
    </footer>

    <!-- End Footer -->
</body>

<!--Boootstrap javascript -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

</html>