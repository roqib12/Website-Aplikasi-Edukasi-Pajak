<?php

$connect = mysqli_connect("localhost", "root", "", "pajak21");
// Check connection
if (mysqli_connect_errno()) {
   echo "Koneksi database gagal : " . mysqli_connect_error();
}
