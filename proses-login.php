<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'dbconnect.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect, "select * from useradmin where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    echo "<script>alert('Login Berhasil');window.location='home.php'</script>";
} else {
    header("location:index.php?pesan=gagal");
}
