-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 10:47 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_subsektor`
--

CREATE TABLE `tb_subsektor` (
  `id_subsektor` int(11) NOT NULL,
  `nama_subsektor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subsektor`
--

INSERT INTO `tb_subsektor` (`id_subsektor`, `nama_subsektor`) VALUES
(1, 'Industri'),
(2, 'Farmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumberdana`
--

CREATE TABLE `tb_sumberdana` (
  `id_sumberdana` int(11) NOT NULL,
  `nama_sumberdana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sumberdana`
--

INSERT INTO `tb_sumberdana` (`id_sumberdana`, `nama_sumberdana`) VALUES
(2, 'Bank1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umkm`
--

CREATE TABLE `tb_umkm` (
  `id_umkm` int(11) NOT NULL,
  `nama_umkm` varchar(255) NOT NULL,
  `nama_subsektor` varchar(255) NOT NULL,
  `status_pemilik` varchar(255) NOT NULL,
  `upah_tenaga_kerja` int(11) NOT NULL,
  `nama_sumberdana` varchar(255) NOT NULL,
  `teknologi` varchar(255) NOT NULL,
  `distribusi` varchar(255) NOT NULL,
  `permasalahan` text NOT NULL,
  `ekspor` int(11) NOT NULL,
  `peluang_tantangan` text NOT NULL,
  `kelembagaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_subsektor`
--
ALTER TABLE `tb_subsektor`
  ADD PRIMARY KEY (`id_subsektor`);

--
-- Indexes for table `tb_sumberdana`
--
ALTER TABLE `tb_sumberdana`
  ADD PRIMARY KEY (`id_sumberdana`);

--
-- Indexes for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_subsektor`
--
ALTER TABLE `tb_subsektor`
  MODIFY `id_subsektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sumberdana`
--
ALTER TABLE `tb_sumberdana`
  MODIFY `id_sumberdana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
