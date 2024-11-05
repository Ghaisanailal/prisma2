-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 17.14
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `id`, `username`, `nama`, `level`, `password`, `jabatan`, `bidang`, `telp`, `email`, `foto`) VALUES
(666, 6, 'pahanan', 'Muhammad Hanan, S.Sos', 'Admin', 'pahanan', 'KA SUBAG ', 'TU', '6281322333057', 'pasubag@gmail.com', '1600716638_SMK.jpg'),
(777, 7, 'paagus', 'H. Agus, M.Pd.I', 'Admin', 'paagus', 'KASI', 'PD_PONTREN', '6287769613803', 'pakasi@gmail.com', '1934989062_1696307224982.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `idcuti` int(5) NOT NULL,
  `nip` int(8) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sk` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`idcuti`, `nip`, `file`, `sk`, `tanggal`, `status`, `ket`) VALUES
(29, 222, '586025001_558204841_File Seminar.pdf', '1677964308_154345467_558204841_File Seminar.pdf', '2024-11-11', 'Disetujui', 'Selamat  Cuti'),
(30, 333, '1170603948_558204841_File Seminar.pdf', '710334740_558204841_File Seminar.pdf', '2024-11-14', 'Menunggu Persetujuan', 'Selamat '),
(32, 444, '1492994179_154345467_558204841_File Seminar.pdf', '', '2024-11-14', 'Menunggu Persetujuan', ''),
(33, 444, '1560229826_154345467_558204841_File Seminar.pdf', '', '2024-11-13', 'Menunggu Persetujuan', ''),
(34, 444, '823209172_154345467_558204841_File Seminar.pdf', '', '2024-11-06', 'Menunggu Persetujuan', ''),
(35, 444, '373871516_154345467_558204841_File Seminar.pdf', '', '2024-11-13', 'Menunggu Persetujuan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kp`
--

CREATE TABLE `kp` (
  `idkp` int(5) NOT NULL,
  `nip` int(8) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sk` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kp`
--

INSERT INTO `kp` (`idkp`, `nip`, `file`, `sk`, `tanggal`, `status`, `ket`) VALUES
(1, 111, '558204841_File Seminar.pdf', '', '0000-00-00', 'Menunggu Persetujuan', 'Selamat naik pangkat'),
(2, 222, '558204841_File Seminar.pdf', '', '0000-00-00', 'disetujui', 'selamat naik pangkat\r\n'),
(3, 333, 'prisma.pdf', '', '0000-00-00', 'menunggu persetujuan', 'nanti'),
(22, 444, '1250331776_154345467_558204841_File Seminar.pdf', '', '2024-11-07', 'Menunggu Persetujuan', '');

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
(111, 'Devi Eka Putri, S.Sas', 'STAF', 'Keuangan', '6289502918001', 'depek@gmail.com', '1350683862_WhatsApp Image 2023-08-24 at 21.05.13.jpeg'),
(222, 'Ghaisa Naila Faroha, S.Psi', 'STAF', 'UP', '62897888777', 'icaa@gmail.com', '826369807_BRIPKAguide (1).png'),
(333, 'Syahidah Eka Didjaya, S.Pd', 'STAF', 'PD_PONTREN', '6289765432', 'ekaa@gmail.com', '335-1696307224982-removebg-preview.png'),
(444, 'Jeri Jaenudin Majid, S.Kom', 'STAF', 'TU', '62877788899', 'jema@gmail.com', '410764901_1000_F_435340582_8yoV1uzvHNOYzddAgHZuXJgSdquFrkJp.jpg'),
(555, 'Muhammad Anwar Sanusi, S.Kom', 'Kepala Kantor', 'Kemenag', '62897666555', 'awang@gmail.com', '1425881065_city.png'),
(666, 'Muhammad Hanan, S.Sos', 'KA SUBAG ', 'TU', '0812032024', 'pahanan@gmail.com', 'jbnhuj.jpg'),
(777, 'H.Agus M.Pdi', 'KASI', 'PD_PONTREN', '123456', 'hsbas@gmail.com', 'sasddwd.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE `pensiun` (
  `idpensiun` int(5) NOT NULL,
  `nip` int(8) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sk` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pensiun`
--

INSERT INTO `pensiun` (`idpensiun`, `nip`, `file`, `sk`, `tanggal`, `status`, `ket`) VALUES
(1, 111, '558204841_File Seminar.pdf', '', '0000-00-00', 'Menunggu Persetujuan', 'Selamat Pensiun'),
(2, 222, '558204841_File Seminar.pdf', '', '0000-00-00', 'disetujui', 'selamat Pensiun'),
(3, 333, 'prisma.pdf', '', '0000-00-00', 'menunggu persetujuan', 'nanti'),
(22, 444, '1641789813_154345467_558204841_File Seminar.pdf', '', '2024-11-08', 'Menunggu Persetujuan', ''),
(23, 444, '367574790_154345467_558204841_File Seminar.pdf', '', '2024-11-20', 'Menunggu Persetujuan', '');

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
(111, 111, 'devi', 'Devi Eka Putri, S.Sas', 'Pegawai', 'devi', 'STAF', 'Keuangan', '4645646', 'dekaa@gmail.com', '603-pp pin.png'),
(222, 222, 'ghaisa', 'Ghaisa Naila Faroha, S.Psi', 'Pegawai', 'ghaisa', 'STAF', 'UP', '62897888777', 'icaa@gmail.com', '365-spider-man-across-the-spider-verse-spider-gwen-spider-man-hd-wallpaper-preview.jpg'),
(333, 333, 'eka', 'Syahidah Eka Didjaya, S.Pd', 'Pegawai', 'eka', 'STAF', 'PD_PONTREN', '6289765432', 'ekaa@gmail.com', '864-aesthetic-spider-man-in-flight-desktop-wallpaper-preview.jpg'),
(444, 444, 'jeri', 'Jeri Jaenudin Majid, S.Kom', 'Pegawai', 'jeri', 'STAF', 'TU', '62877788899', 'jema@gmail.com', '410764901_1000_F_435340582_8yoV1uzvHNOYzddAgHZuXJgSdquFrkJp.jpg'),
(555, 555, 'anwar', 'Muhammad Anwar Sanusi, S.Kom', 'Pegawai', 'anwar', 'STAF', 'Kementerian Agama', '62897666555', 'awang@gmail.com', '1425881065_city.png'),
(666, 666, 'pahanan', 'Muhammad Hanan, S.Sos', 'Admin', 'pahanan', 'KA SUBAG ', 'TU', '6281322333057', 'pasubag@gmail.com', '1600716638_SMK.jpg'),
(777, 777, 'paagus', 'H. Agus, M.Pd.I', 'Admin', 'paagus', 'KASI', 'PD_PONTREN', '6287769613803', 'pakasi@gmail.com', '1934989062_1696307224982.jpg'),
(888, 888, 'jjjj', 'jjjj', 'Pembimbing', '', 'Pembimbing', 'Kepala Kantor', '7866544', 'hgf@gmail.com', ''),
(999, 999, 'ddd', 'ddd', 'Admin', '', 'STAF', 'UP', '12345678', 'ggggg@gmail.com', ''),
(5675, 5675, 'llll', 'lllll', 'Pembimbing', '', 'Pembimbing', 'Kepala Kantor', '89789', 'jbkj@gmail.com', ''),
(8787, 8787, 'xxx', 'xxx', 'Admin', '', 'Kepala Kantor', 'Kepala Kantor', '12234234', 'gfd@gmail.com', '1299447237_pp pin.png'),
(55556, 0, 'bbb', 'bbb', 'Pembimbing', '', 'STAF', 'Kepala Kantor', '45345435', 'fgbgf@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`idcuti`);

--
-- Indeks untuk tabel `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`idkp`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`idpensiun`);

--
-- Indeks untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55557;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `idcuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kp`
--
ALTER TABLE `kp`
  MODIFY `idkp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- AUTO_INCREMENT untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `idpensiun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `permintaan_layanan`
--
ALTER TABLE `permintaan_layanan`
  MODIFY `id_permintaan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55557;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
