-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2024 pada 15.58
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
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`idseminar`, `nip`, `judul`, `file`, `tautan`, `status`, `ket`) VALUES
(1, 111, 'Aplikasi  Berbasis Web', '558204841_File Seminar.pdf', 'github.com/AhmadMauludin/PWEB12', 'Disetujui', 'Selamat cuti'),
(2, 222, 'Belum Ada', '558204841_File Seminar.pdf', 'https://github.com/mhmdgra11', 'disetujui', 'selamat cuti'),
(3, 333, 'apa we', 'prisma.pdf', 'https://github.com/mhmdgra11', 'menunggu persetujuan', 'nanti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nip` int(8) NOT NULL,
  `id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `id`, `username`, `nama`, `level`, `password`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(111, 111, 'devi', 'Devi Eka Putri, S.Sas', 'Pegawai', 'devi', 'KASI', 'Keuangan', '6289502918001', 'dekaa@gmail.com', '603-pp pin.png'),
(222, 222, 'ghaisa', 'Ghaisa Naila Faroha, S.Psi', 'Admin', 'ghaisa', 'KASI', 'UP', '62897888777', 'icaa@gmail.com', '365-spider-man-across-the-spider-verse-spider-gwen-spider-man-hd-wallpaper-preview.jpg'),
(333, 3, 'eka', 'Syahidah Eka Didjaya, S.Pd', 'Admin', 'eka', 'KASI', 'PD_PONTREN', '6289765432', 'ekaa@gmail.com', '864-aesthetic-spider-man-in-flight-desktop-wallpaper-preview.jpg'),
(444, 4, 'jeri', 'Jeri Jaenudin Majid, S.Kom', 'Pegawai', 'jeri', 'KA SUBAG ', 'TU', '62877788899', 'jema@gmail.com', '410764901_1000_F_435340582_8yoV1uzvHNOYzddAgHZuXJgSdquFrkJp.jpg'),
(555, 5, 'anwar', 'Muhammad Anwar Sanusi, S.Kom', 'Admin', 'anwar', 'Kepala Kantor', 'Kementerian Agama', '62897666555', 'awang@gmail.com', '1425881065_city.png'),
(666, 6, 'pahanan', 'Muhammad Hanan, S.Sos', 'Admin', 'pahanan', 'KA SUBAG ', 'TU', '6281322333057', 'pasubag@gmail.com', '1600716638_SMK.jpg'),
(777, 7, 'pahamzah', 'Hamzah Rukmana, S.Pd', 'Admin', 'pahamzah', 'Kepala Kantor', 'Kementerian Agama', '6287769613803', 'paketu@gmail.com', '1934989062_1696307224982.jpg'),
(888, 0, 'aaa', '', 'Admin', 'aaa', '', '', '', '', ''),
(9988, 0, 'aaa', '', 'Admin', 'aaa', '', '', '', '', ''),
(55554, 0, 'bbb', '', 'Pegawai', 'bbb', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userawal`
--

CREATE TABLE `userawal` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `userawal`
--

INSERT INTO `userawal` (`id`, `username`, `password`, `nip`, `level`) VALUES
(11, 'ghaitsa', 'ghaitsa', '123', 'Admin'),
(13, 'devi', 'devi', '111', 'Pegawai'),
(15, 'anwar', 'anwar', '222', 'Pegawai'),
(17, 'jeri', 'jeri', '555', 'Admin'),
(19, 'syahidah', 'eka', '777', 'Pegawai'),
(20, 'ccc', 'ccc', '7788', 'Pegawai'),
(24, 'dddd', 'dddd', '7788', 'Admin'),
(25, 'aaaaa', 'aaaa', 'aaa', 'Admin');

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
(11, 'Ghaisa Nailal Faroha', '0', '0', 0, 'Tanjungsari', 'aktif', 'gisa.jpg'),
(120220795, 'Jeri Jainudin Majid', 'Kepala Seksi', 'PHU', 812032024, 'jerimajid@gmail.com', 'Aktif', '1398199758_pratama-arhan-320x_.png'),
(120220806, 'Suci Nur Fauziah', '0', '0', 0, 'Rancakalong Sumedang', 'Aktif', '293161120_images.jpeg');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `userawal`
--
ALTER TABLE `userawal`
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
  MODIFY `nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55555;

--
-- AUTO_INCREMENT untuk tabel `userawal`
--
ALTER TABLE `userawal`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
