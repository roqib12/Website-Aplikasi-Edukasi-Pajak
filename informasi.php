<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Informasi | Tax Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <!-- Navigasi -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: transparent;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand navbar-logo" style="width: 10%;" href="index.php"><img src="assets/logo.png" class="img-color img-responsive pl-4" style="width: 80%;" />
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item pr-5">
                    <a class="nav-link text-white" href="home.php">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link text-white" href="layanan.php">
                        Layanan
                    </a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link text-white" href="informasi.php">
                        Informasi
                    </a>
                </li>
                <li class="nav-item dropdown pr-5">
                    <a class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <span class="dropdown-item">
                            <?= $_SESSION['email']; ?>
                        </span>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Akhir Navbar  -->

    <!-- Main -->
    <main>
        <img src="assets/images/bg.jpeg" class="justify-content-center position-absolute" style="width: 100%; height: 700px;" />
        <div class="container py-5">
            <div class="text-justify-center py-5" style="letter-spacing: 1px;">
                <div class="card pt-0 mt-0 pb-0 py-1">
                    <div class="container-fluid">
                        <div class="title mb-3 py-2">
                            <h3><strong>Informasi</strong></h3>
                        </div>
                        <hr>
                        <div class="container">
                            <h5><strong>Beberapa informasi yang perlu diperhatikan mengenai pemakaian website:</strong></h5>
                            <br>
                            <ol>
                                <li>Sebagai informasi mengenai perhitungan data pajak dan pengguna pajak</li>
                                <li>Kalkulator pph21 sebagai perhitungan pajak pada data pajak seseorang yang akan dicari hasil pph21 nya</li>
                                <li>Data Pajak sebagai penampung data hasil dari perhitungan kalkulator pph 21 yang telah dihitung atau disimpan</li>
                                <li>Data Pengguna Pajak sebagai penampung data orang-orang yang akan dihitung data pph atau pajaknya</li>
                                <li>Login menggunakan akun admin atau bisa konfirmasi kepada admin untuk dibuatkan akun login</li>
                                <li>Data hasil perhitungan kalkulator pph21 bisa langsung disimpan ke dalam database agar tidak terhapus atau untuk dicetak</li>
                                <li>Data Pajak dan Data Pengguna Pajak bisa dicetak atau print dalam bentuk file excel </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--  End Main -->

    <!-- Footer -->

    <!-- <footer class=" fixed-bottom">
        <span>&#169; 2020 Web Developer, Roqib Abdillah</span>
    </footer> -->
    <?php
    include('footer.php');
    ?>
    <!-- End Footer -->
</body>

<!--Boootstrap javascript -->
<script script script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</html>