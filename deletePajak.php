<?php

// Memulai Session
session_start();

// Menghubungkan ke file koneksi database
include 'dbconnect.php';

// $nama_merek = $_POST['nama_merek'];
$hasilBruto = base64_decode($_GET['hasilBruto']);

// Query delete data ke database
$query = "DELETE FROM pph21 WHERE hasilBruto='$hasilBruto'";

if ($connect->query($query)) {
    // Pesan session yang dikirim
    $_SESSION['delete-pajak'] = 'Data berhasil di hapus';

    // Kembali ke halaman home.php
    header('location:dataPajak.php');
} else {
    echo ("Error description: " . $connect->error);
}
