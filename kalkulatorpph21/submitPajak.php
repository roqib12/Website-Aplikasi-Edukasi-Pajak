<?php
if (isset($_POST['hasilBruto'])) {
    // 
    $hasilBruto = $_POST['hasilBruto'];
    $biayaJabatan = $_POST['biayaJabatan'];
    $brutoSetahun = $_POST['brutoSetahun'];
    $jabatanSetahun = $_POST['jabatanSetahun'];
    $iuranSetahun = $_POST['iuranSetahun'];
    $pengurangSetahun = $_POST['pengurangSetahun'];
    $hasilNeto = $_POST['hasilNeto'];
    $netoSetahun = $_POST['netoSetahun'];
    $ptkp = $_POST['ptkp'];
    $pkp = $_POST['pkp'];
    $pkp21 = $_POST['pkp21'];


    // 
    $con = mysqli_connect("localhost", "root", "", "pajak21");

    // 
    $sql = "INSERT INTO `pph21`(`hasilBruto`, `biayaJabatan`, `brutoSetahun`, `jabatanSetahun`, `iuranSetahun`, `pengurangSetahun`, `hasilNeto`, `netoSetahun`, `ptkp`, `pkp`, `pkp21`) VALUES ('$hasilBruto', '$biayaJabatan', '$brutoSetahun', '$jabatanSetahun', '$iuranSetahun', '$pengurangSetahun', '$hasilNeto', '$netoSetahun', '$ptkp', '$pkp', '$pkp21')";

    // 
    $result = mysqli_query($con, $sql);

    // 
    if ($result == TRUE) {
        echo "success";
    } else {
        echo "failed";
    }

    if ($connect->query($query)) {
        // Pesan session yang dikirim
        $_SESSION['add-pajak'] = 'Data berhasil di tambahkan';

        // Kembali ke halaman home.php
        header('location:dataPajak.php');
    } else {
        echo ("Error description: " . $connect->error);
    }
}
