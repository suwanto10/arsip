-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2021 pada 14.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_surat`
--

CREATE TABLE `arsip_surat` (
  `id` int(15) NOT NULL,
  `Nomor_surat` varchar(255) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Judul_surat` varchar(50) NOT NULL,
  `Tanggal_arsip` date NOT NULL,
  `file_surat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip_surat`
--

INSERT INTO `arsip_surat` (`id`, `Nomor_surat`, `Kategori`, `Judul_surat`, `Tanggal_arsip`, `file_surat`) VALUES
(28, '35/PL.2.TI/UND/2021', 'Undangan', 'Seminar Hasil (Semhas) PKL Ganjil 2020/2021', '2021-10-24', 'REV undangan semhas mhs D3.pdf'),
(31, '380/PL2.TI/UND/2021 ', 'Undangan', 'Sosialisasi Pembelajaran Luring', '2021-10-25', 'Undangan Sosialisasi Pembelajatan Luring.pdf'),
(32, '201/PL.2.TI/KM/2021', 'Pemberitahuan', 'Sertifikasi BNSP', '2021-10-25', 'Pengumuman Sertifikas BNSP 2021.pdf'),
(33, '281/PL2.TI/PENG/2021', 'Pengumuman', 'Petunjuk Pelaksanaan PKL Jurusan Teknologi Informa', '2021-10-25', '000-pengumuman PKL JTI - 2021.pdf'),
(34, '100/PUDIR.II/TU/2020', 'NotaDinas', 'Bantuan Sarana Pendukung Pembelajaran LinkAja', '2021-10-25', 'Nota Dinas Bantuan Sarana Pendukung Pembelajaran LinkAja.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip_surat`
--
ALTER TABLE `arsip_surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_surat`
--
ALTER TABLE `arsip_surat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
