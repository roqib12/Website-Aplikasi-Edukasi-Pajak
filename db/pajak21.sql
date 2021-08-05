-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2021 pada 04.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak21`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pph21`
--

CREATE TABLE `pph21` (
  `id_pph` int(11) NOT NULL,
  `hasilBruto` int(11) NOT NULL,
  `biayaJabatan` int(11) NOT NULL,
  `brutoSetahun` int(11) NOT NULL,
  `jabatanSetahun` int(11) NOT NULL,
  `iuranSetahun` int(11) NOT NULL,
  `pengurangSetahun` int(11) NOT NULL,
  `hasilNeto` int(11) NOT NULL,
  `netoSetahun` int(11) NOT NULL,
  `ptkp` int(11) NOT NULL,
  `pkp` int(11) NOT NULL,
  `pkp21` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pph21`
--

INSERT INTO `pph21` (`id_pph`, `hasilBruto`, `biayaJabatan`, `brutoSetahun`, `jabatanSetahun`, `iuranSetahun`, `pengurangSetahun`, `hasilNeto`, `netoSetahun`, `ptkp`, `pkp`, `pkp21`) VALUES
(1, 8850000, 442500, 106200000, 5310000, 180000, 5490000, 100710000, 100710000, 54000000, 46710000, 2335500),
(4, 17850000, 500000, 214200000, 6000000, 180000, 6180000, 208020000, 208020000, 54000000, 154020000, 7701000),
(5, 17750000, 500000, 213000000, 6000000, 180000, 6180000, 206820000, 206820000, 0, 206820000, 10341000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `useradmin`
--

CREATE TABLE `useradmin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `useradmin`
--

INSERT INTO `useradmin` (`id_user`, `nama`, `jenis_kelamin`, `agama`, `email`, `password`, `role`) VALUES
(16, 'Roqib Abdillah', 'L', 'Islam', 'admin123@gmail.com', '123456', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userpajak`
--

CREATE TABLE `userpajak` (
  `id_userpajak` int(11) NOT NULL,
  `no_npwp` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userpajak`
--

INSERT INTO `userpajak` (`id_userpajak`, `no_npwp`, `nama_lengkap`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `status`) VALUES
(1, '12557686877678767', 'Abdul', 'Laki-laki', 'Islam', 'Buruh', 'Jl. Pattimura Laut', 'Menikah'),
(6, '124565789665', 'Abdel', 'Laki-laki', 'Islam', 'Wiraswasta', 'Jl. Jembatan Raya 2', 'Menikah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pph21`
--
ALTER TABLE `pph21`
  ADD PRIMARY KEY (`id_pph`);

--
-- Indeks untuk tabel `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `userpajak`
--
ALTER TABLE `userpajak`
  ADD PRIMARY KEY (`id_userpajak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pph21`
--
ALTER TABLE `pph21`
  MODIFY `id_pph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `userpajak`
--
ALTER TABLE `userpajak`
  MODIFY `id_userpajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
