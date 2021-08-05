<?php

// setelah diklik
if (isset($_POST['register'])) {

    // menghubungkan dengan koneksi
    include 'dbconnect.php';

    // menampung data kedalam variabel
    $noNpwp = mysqli_real_escape_string($connect, trim($_POST['noNpwp']));
    $nama = mysqli_real_escape_string($connect, trim($_POST['nama']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $password = mysqli_real_escape_string($connect, trim($_POST['password']));

    //query insert data ke dalam database
    $query = "INSERT INTO `useradmin` SET `noNpwp`='$noNpwp', `nama`='$nama', `email`='$email', `password`='$password'";

    if ($connect->query($query)) {
        header("location:index.php");
    } else {
        echo ("Error description: " . $connect->error);
    }
}
