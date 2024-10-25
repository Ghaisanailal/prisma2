-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2024 pada 06.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prisma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nis` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nis`, `nama`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(1, 'Ahmad Mauludin, S.Kom', 'Kabid', 'Humas', '6289502918001', 'ahmadmaldin1799@gmail.com', '1350683862_WhatsApp Image 2023-08-24 at 21.05.13.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_layanan`
--

CREATE TABLE `permintaan_layanan` (
  `id_permintaan` int(9) NOT NULL,
  `id_pegawai` int(9) NOT NULL,
  `dokumen_persyaratan` varchar(355) NOT NULL,
  `surat_keterangan` varchar(355) NOT NULL,
  `status` enum('Setujui Cuti','Tolak Cuti','','') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `level` enum('Admin','Pegawai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nis`, `level`) VALUES
(6, 'ghaitsa', 'ghaitsa', '444', 'Admin'),
(7, 'devi', 'ekaputri', '5555', 'Admin'),
(10, 'syahidah', 'eka', '777', 'Pegawai'),
(11, 'syahidah', 'eka', '777', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nis` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  MODIFY `id_permintaan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
