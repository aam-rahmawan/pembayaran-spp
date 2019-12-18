-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2017 pada 01.20
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_bayar`
--

CREATE TABLE `t_bayar` (
  `id` int(11) NOT NULL,
  `nis` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(30) NOT NULL,
  `untukbulan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_bayar`
--

INSERT INTO `t_bayar` (`id`, `nis`, `nama`, `no`, `kelas`, `tanggal`, `jumlah`, `untukbulan`) VALUES
(27, 14402232, 'aam', '08555', 'XII', '2017-08-15', 100000, '2'),
(31, 134354, 'aam', '456789', 'X', '2017-08-22', 100000, '8'),
(34, 134354, 'aam', '456789', 'X', '2017-08-22', 100000, '4'),
(39, 134354, 'aam', '456789', 'X', '2017-08-22', 100000, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id`, `nama`, `username`, `password`, `status`) VALUES
(1, 'susi', 'don', '1', 'admin'),
(2, 'ren', 'sus', '2', 'kepala sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswa`
--

CREATE TABLE `t_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `alamat` text NOT NULL,
  `jenis` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_siswa`
--

INSERT INTO `t_siswa` (`id`, `nis`, `nama`, `kelas`, `alamat`, `jenis`, `ortu`, `no`) VALUES
(119, '134354', 'aam', 'X', 'denpasar', 'LAKI-LAKI', 'wendo', '456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tunggakan`
--

CREATE TABLE `t_tunggakan` (
  `id` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tunggakan`
--

INSERT INTO `t_tunggakan` (`id`, `id_bulan`, `nama_bulan`) VALUES
(1, 1, 'Januari'),
(2, 2, 'Februari'),
(3, 3, 'Maret'),
(4, 4, 'April'),
(5, 5, 'Mei'),
(6, 6, 'Juni'),
(7, 7, 'Juli'),
(8, 8, 'Agustus'),
(9, 9, 'September'),
(10, 10, 'Oktober'),
(11, 11, 'November'),
(12, 12, 'Desember');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_bayar`
--
ALTER TABLE `t_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tunggakan`
--
ALTER TABLE `t_tunggakan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_bayar`
--
ALTER TABLE `t_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `t_tunggakan`
--
ALTER TABLE `t_tunggakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
