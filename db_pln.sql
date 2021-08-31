-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 05:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `jenis_kelamin`, `alamat`, `telp`) VALUES
('12345678901', 'Fergiawan', 'Laki-laki', 'Parepare', '08999999999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id` varchar(14) NOT NULL,
  `id_pelanggan` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `pengaduan` text NOT NULL,
  `lokasi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`lokasi`)),
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `history` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `username_petugas` varchar(25) DEFAULT NULL,
  `ditambahkan_pada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`id`, `id_pelanggan`, `nama`, `telp`, `pengaduan`, `lokasi`, `status`, `history`, `username_petugas`, `ditambahkan_pada`) VALUES
('pgd-avi3N5Q2fp', '12345678901', 'Fergiawan', '08999999999', 'Korsleting Listrik', '{\"lokasi\":\"Jl. A. Yani, Ujung Baru, Kec. Soreang, Kota Pare-Pare, Sulawesi Selatan 91113, Indonesia\",\"latitude\":\"-4.011043963915702\",\"longitude\":\"119.63031193920897\"}', 'Selesai', '{\"Diterima & dalam pengerjaan\":\"2020-12-22 17:00:43\",\"Selesai\":\"2020-12-22 17:00:56\"}', 'petugas', '2020-12-22 09:00:56'),
('pgd-xyfa33tooa', '12345678901', 'sa', '21313', 'asas', '{\"lokasi\":\"Jl. M Kurdi No.24, Ujung Baru, Kec. Soreang, Parepare, Sulawesi Selatan 91113, Indonesia\",\"latitude\":\"-4.0103589999999745\",\"longitude\":\"119.626535388916\"}', 'Selesai', '{\"Diterima & dalam pengerjaan\":\"2020-12-22 17:07:02\",\"Selesai\":\"2020-12-22 17:07:16\"}', 'petugas', '2020-12-22 09:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `foto` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama`, `level`, `data`, `foto`) VALUES
('admin', 'admin', 'Administrator', 'admin', NULL, NULL),
('petugas', 'petugas', 'Petugas', 'petugas', '{\"jenis_kelamin\":\"Laki-laki\",\"alamat\":\"Parepare\",\"telp\":\"085255255255\"}', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `username_petugas` (`username_petugas`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD CONSTRAINT `tbl_pengaduan_ibfk_2` FOREIGN KEY (`username_petugas`) REFERENCES `tbl_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pengaduan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
