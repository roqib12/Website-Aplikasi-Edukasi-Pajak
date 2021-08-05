<?php

// Memulai Session
session_start();

// Menghubungkan ke file koneksi database
include 'dbconnect.php';

// $nama_merek = $_POST['nama_merek'];
$no_npwp = base64_decode($_GET['no_npwp']);

// Query delete data ke database
$query = "DELETE FROM userpajak WHERE no_npwp='$no_npwp'";

if ($connect->query($query)) {
    // Pesan session yang dikirim
    $_SESSION['delete-pengguna'] = 'Data berhasil di hapus';

    // Kembali ke halaman home.php
    header('location:dataPengguna.php');
} else {
    echo ("Error description: " . $connect->error);
}
