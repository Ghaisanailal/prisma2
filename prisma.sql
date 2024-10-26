-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2024 pada 04.54
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
  `nip` int(8) NOT NULL,
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

INSERT INTO `pegawai` (`nip`, `nama`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(1, 'Devi Eka Putri, S.Sas', 'KASI', 'Keuangan', '6289502918001', 'depek@gmail.com', '1350683862_WhatsApp Image 2023-08-24 at 21.05.13.jpeg'),
(2, 'Ghaisa Naila Faroha, S.Psi', 'KASI', 'UP', '62897888777', 'icaa@gmail.com', '826369807_BRIPKAguide (1).png'),
(3, 'Syahidah Eka Didjaya, S.Pd', 'KASI', 'PD_PONTREN', '6289765432', 'ekaa@gmail.com', '335-1696307224982-removebg-preview.png'),
(4, 'Jeri Jaenudin Majid, S.Kom', 'KA SUBAG ', 'TU', '62877788899', 'jema@gmail.com', '410764901_1000_F_435340582_8yoV1uzvHNOYzddAgHZuXJgSdquFrkJp.jpg'),
(5, 'Muhammad Anwar Sanusi, S.Kom', 'Kepala Kantor', 'Kemenag', '62897666555', 'awang@gmail.com', '1425881065_city.png'),
(6, 'Muhammad Hanan, S.Sos', 'KA SUBAG ', 'TU', '6281322333057', 'pasubag@gmail.com', '1600716638_SMK.jpg'),
(7, 'Hamzah Rukmana, S.Pd', 'Kepala Kantor', 'Kementerian Agama', '6287769613803', 'paketu@gmail.com', '1934989062_1696307224982.jpg');

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
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `idseminar` int(5) NOT NULL,
  `nip` int(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tautan` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `pengujilap` int(8) NOT NULL,
  `pengujiapl` int(8) NOT NULL,
  `nilaiprakerin` int(3) NOT NULL,
  `nilailaporan` int(3) NOT NULL,
  `nilaiaplikasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`idseminar`, `nip`, `judul`, `file`, `tautan`, `status`, `ket`, `pengujilap`, `pengujiapl`, `nilaiprakerin`, `nilailaporan`, `nilaiaplikasi`) VALUES
(21, 120220795, 'Aplikasi Seminar Prakerin Berbasis Web', '558204841_File Seminar.pdf', 'github.com/AhmadMauludin/PWEB12', 'Disetujui', 'Selamat seminar', 3, 4, 90, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nip`, `level`) VALUES
(11, 'ghaitsa', 'ghaitsa', '123', 'Admin'),
(13, 'devi', 'devi', '111', 'Pegawai'),
(15, 'anwar', 'anwar', '222', 'Pegawai'),
(17, 'jeri', 'jeri', '555', 'Admin'),
(19, 'syahidah', 'eka', '777', 'Pegawai'),
(20, 'ccc', 'ccc', '7788', 'Pegawai'),
(24, 'dddd', 'dddd', '7788', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nip` bigint(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nip`, `nama`, `jabatan`, `bidang`, `telp`, `email`, `stat`, `foto`) VALUES
(1111111, 'Ghaisa Nailal Faroha', '0', '0', 0, 'Tanjungsari', 'aktif', 'gisa.jpg'),
(120220795, 'Jeri Jainudin Majid', 'Kepala Seksi', 'PHU', 812032024, 'jerimajid@gmail.com', 'Aktif', '1398199758_pratama-arhan-320x_.png'),
(120220806, 'Suci Nur Fauziah', '0', '0', 0, 'Rancakalong Sumedang', 'Aktif', '293161120_images.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`idseminar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- AUTO_INCREMENT untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  MODIFY `id_permintaan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `seminar`
--
ALTER TABLE `seminar`
  MODIFY `idseminar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
