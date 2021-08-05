<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | Website</title>
    <meta name="viewport" content="width=-device-width, initial-scale=1.0" />

    <!--Bootstrap CSS-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body class="grid-container">
    <!-- Navigasi -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light themedefault" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html" style="width: 15%;">
                <img src="assets/images/logo.png" class="img-color img-responsive collapse navbar-collapse" style="width: 100%;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse topbtn-login justify-content-end" id="navbarResponsive">
                <button type="button" class="btn btn-primary btn-sm pull-right btn-responsive">
                    <a href="logout.php" class="text-light">Logout</a>
                </button>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar  -->

    <!-- Main -->
    <main>
        <div class="container">
            <div class="container-fluid text-justify py-3" style="letter-spacing: 1px;">
                <div class="card pt-0 mt-0 pb-0 py-1">
                    <div class="container-fluid">
                        <div class="starter-template">
                            <h4>Selamat Datang <?php echo $_SESSION['email']; ?></h4>
                        </div>
                        <br>
                        <h3><strong>Dashboard</strong></h3>
                        <div class="table-responsive">

                            <table class="table table-bordred table-striped">

                                <thead>
                                    <th>No</th>
                                    <th>NAMA</th>
                                    <th>USIA</th>
                                    <th>ALAMAT</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    <?php
                                    include 'dbconnect.php';

                                    // menampilkan data dari database
                                    $account = mysqli_query($connect, "SELECT * FROM user");
                                    $no = 1;
                                    foreach ($account as $row) {
                                        echo "
                                    <tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>" . $row['nama'] . "</td>
                                            <td>" . $row['usia'] . "</td>                        
                                            <td>" . $row['alamat'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $row['password'] . "</td>
                                            <td>                                                
                                                <button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target=''>
                                                <span class='glyphicon glyphicon-pencil'></span></button></p>
                                            </td>
                                            <td>
                                                <button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target=''>
                                                <span class='glyphicon glyphicon-trash'></span></button></p>
                                            </td>
                                        </tr>
                                    </tbody>";
                                    }
                                    ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--  End Main -->

    <!-- Footer -->

    <footer class="fixed-bottom">
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

</html>