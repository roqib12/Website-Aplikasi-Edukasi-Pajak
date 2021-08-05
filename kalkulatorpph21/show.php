<?php
$koneksi = mysqli_connect("localhost", "root", "", "pajak21");
$query = mysqli_query($koneksi, "SELECT * FROM userpajak ORDER BY id_userpajak");
$output = '<option value="">Pilih Nama</option>';
while ($row = mysqli_fetch_array($query)) {
	$output .= '<option value="' . $row["id_userpajak"] . '">' . $row["id_userpajak"] . '</option>';
}
echo $output;
