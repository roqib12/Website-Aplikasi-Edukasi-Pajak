<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data User | Tax Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
    <!------ Include the above in your HEAD tag ---------->
</head>

<body id="bpage">
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
        <img src="assets/images/bg.jpeg" class="justify-content-center" style="width: 100%; height: 700px; position: fixed;" />
        <div class="container py-5">
            <div class="text-justify-center py-5" style="letter-spacing: 1px;">
                <div class="card pt-0 mt-0 pb-0 py-1">
                    <div class="container-fluid">
                        <div class="title mb-3 py-2">
                            <h3><strong>Data Pengguna Pajak</strong></h3>
                        </div>
                        <hr>
                        <?php
                        if (isset($_SESSION['add-pengguna']) && $_SESSION['add-pengguna'] <> '') {
                            echo '<div id="add-pengguna" class="alert alert-success" style="display:none;">' . $_SESSION['add-pengguna'] . '</div>';
                        } elseif (isset($_SESSION['edit-pengguna']) && $_SESSION['edit-pengguna'] <> '') {
                            echo '<div id="edit-pengguna" class="alert alert-success" style="display:none;">' . $_SESSION['edit-pengguna'] . '</div>';
                        } elseif (isset($_SESSION['delete-pengguna']) && $_SESSION['delete-pengguna'] <> '') {
                            echo '<div id="delete-pengguna" class="alert alert-success" style="display:none;">' . $_SESSION['delete-pengguna'] . '</div>';
                        }
                        $_SESSION['add-pengguna'] = '';
                        $_SESSION['delete-pengguna'] = '';
                        $_SESSION['edit-pengguna'] = '';
                        ?>
                        <div class="row container-fluid">
                            <div class="mb-xl-5 p-1">
                                <a href="addPengguna.php" class="btn btn-success btn-xm" title="tambah data">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah Data
                                </a>
                            </div>
                            <div class="mb-xl-5 p-1">
                                <a href="excelUser.php" class="btn btn-success btn-xm" title="export to excel">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5 10H3V9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2zm1 0v2h3v-2H6z" />
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                    </svg>
                                    Export to Excel
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table id="myTable" class="table table-bordred table-striped display" style="width:100%">

                                <thead>
                                    <th>No NPWP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                    <th>AKSI</th>
                                </thead>
                                <tbody>
                                    <?php

                                    // Menghubungkan dengan koneksi database
                                    include 'dbconnect.php';

                                    // menampilkan data dari database
                                    $account = mysqli_query($connect, "SELECT * FROM userpajak");

                                    while ($row = mysqli_fetch_array($account)) {
                                        echo '<tr>';
                                        echo '<td>' . $row['no_npwp'] . '</td>';
                                        echo '<td>' . $row['nama_lengkap'] . '</td>';
                                        echo '<td>' . $row['jenis_kelamin'] . '</td>';
                                        echo '<td>' . $row['agama'] . '</td>';
                                        echo '<td>' . $row['pekerjaan'] . '</td>';
                                        echo '<td>' . $row['alamat'] . '</td>';
                                        echo '<td>';
                                        echo '                                                
                                                <button class="btn btn-danger btn-xs m-1" data-title="Delete" title="delete">
                                                    <a href="deletePengguna.php?no_npwp=' . base64_encode($row['no_npwp']) . '">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
                                                </button>
                                                ';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    $(document).ready(function() {
        setTimeout(function() {
            $("#add-pengguna").fadeIn('slow');
        }, 200);
    });
    setTimeout(function() {
        $("#add-pengguna").fadeOut('slow');
    }, 3000);

    $(document).ready(function() {
        setTimeout(function() {
            $("#edit-pengguna").fadeIn('slow');
        }, 200);
    });
    setTimeout(function() {
        $("#edit-pengguna").fadeOut('slow');
    }, 3000);

    $(document).ready(function() {
        setTimeout(function() {
            $("#delete-pengguna").fadeIn('slow');
        }, 200);
    });
    setTimeout(function() {
        $("#delete-pengguna").fadeOut('slow');
    }, 3000);
</script>

<!--Boootstrap javascript -->
<script script script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</html>