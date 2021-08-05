<?php
// mengaktifkan session
session_start();

// menghapuskan semua variabel sesi
session_unset();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
echo "<script>alert('Logout Berhasil');window.location='index.php'</script>";
