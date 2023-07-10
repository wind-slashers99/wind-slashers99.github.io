-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 11:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_yasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `tgl_daftar` date NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`tgl_daftar`, `nik`, `nama`, `jk`, `alamat`, `telp`) VALUES
('0000-00-00', 1, 'xcwqcxwcw', 'Pria', 'medan', 0),
('0000-00-00', 12345, 'tes ', 'Pria', 'medan', 9281982),
('0000-00-00', 67890, 'tes2', 'Wanita', 'medan', 0),
('0000-00-00', 111213, 'raja kuli', 'Pria', 'medan', 0),
('0000-00-00', 122333, 'tes ', 'Pria', 'medan', 852820187),
('0000-00-00', 111222333, 'testing', 'Pria', 'medan', 12345),
('2023-07-07', 2147483647, 'nakhlah', 'Pria', 'pasar merah', 41234141);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(20) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(20) NOT NULL,
  `isi_laporan` text NOT NULL,
  `status` enum('proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `status`) VALUES
(1, '0000-00-00', 12345, 'dcervre', 'selesai'),
(2, '2023-04-14', 12345, 'vervreverververbvbvytnbby', 'selesai'),
(3, '2023-04-15', 12345, 'tese', 'selesai'),
(4, '2023-04-15', 12345, 'tres lagi', 'selesai'),
(5, '2023-04-15', 12345, 'tes coy', 'selesai'),
(12, '2023-04-15', 111222333, 'tess', 'selesai'),
(14, '2023-04-15', 111222333, 'dwdwdwdw', 'selesai'),
(15, '2023-04-17', 122333, 'ygyufggu', 'proses'),
(16, '2023-07-03', 12345, 'tes senin 3 juli', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(20) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` int(30) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `foto`) VALUES
(1, 'Nakhlah Yasa', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 8762712, 'admin', 'profil1.png\r\n'),
(2, 'petugas1', 'petugas1', 'b53fe7751b37e40ff34d012c7774d65f', 8273918, 'petugas', ''),
(8, 'dimas', 'petugas3', '6f7dc121bccfd778744109cac9593474', 2147483647, 'petugas', ''),
(9, 'hakim', 'petugas2', 'ac5604a8b8504d4ff5b842480df02e91', 2147483647, 'petugas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(20) NOT NULL,
  `id_pengaduan` int(30) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '0000-00-00', 'erevreververvr', 2),
(2, 2, '0000-00-00', 'OKOKOKOK', 2),
(3, 12, '0000-00-00', 'selesai', 2),
(4, 3, '2023-04-15', 'oke', 2),
(5, 4, '2023-04-15', 'eeeee', 2),
(6, 14, '2023-04-15', 'oke', 2),
(7, 5, '2023-04-15', 'oke', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
