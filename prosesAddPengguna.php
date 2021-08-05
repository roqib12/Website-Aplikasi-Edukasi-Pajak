<?php

// Memulai Session
session_start();

// menghubungkan dengan koneksi
include 'dbconnect.php';

// menampung data kedalam variabel
$no_npwp = mysqli_real_escape_string($connect, trim($_POST['no_npwp']));
$nama_lengkap = mysqli_real_escape_string($connect, trim($_POST['nama_lengkap']));
$jenis_kelamin = mysqli_real_escape_string($connect, trim($_POST['jenis_kelamin']));
$agama = mysqli_real_escape_string($connect, trim($_POST['agama']));
$pekerjaan = mysqli_real_escape_string($connect, trim($_POST['pekerjaan']));
$Status = mysqli_real_escape_string($connect, trim($_POST['status']));
$alamat = mysqli_real_escape_string($connect, trim($_POST['alamat']));

//query insert data ke dalam database
$query = "INSERT INTO `userpajak` (`id_userpajak`, `no_npwp`, `nama_lengkap`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `status`) VALUES (NULL, '$no_npwp', '$nama_lengkap', '$jenis_kelamin', '$agama', '$pekerjaan', '$alamat', '$Status')";

if ($connect->query($query)) {
    // Kembali ke halaman data-siswa.php
    header('location:dataPengguna.php');

    // Pesan session yang dikirim
    $_SESSION['add-pengguna'] = 'Data berhasil di tambahkan';
} else {
    // Menampilkan error
    echo ("Error description: " . $connect->error);
    // Kembali ke halaman data-siswa.php
    header('location:dataPengguna.php');
}
