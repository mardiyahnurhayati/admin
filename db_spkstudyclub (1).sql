-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 10:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spkstudyclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
`id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keaktifan` double NOT NULL,
  `pengembangan_kompetensi` double NOT NULL,
  `pengalaman_organisasi` double NOT NULL,
  `kepopuleran` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`, `keaktifan`, `pengembangan_kompetensi`, `pengalaman_organisasi`, `kepopuleran`) VALUES
(5, 'Infinity', '', 0, 0, 0, 0),
(6, 'Idept', '', 0, 0, 0, 0),
(7, 'Insect', '', 0, 0, 0, 0),
(8, 'KSL', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_kriteria`) VALUES
(1, 'keaktifan', 'benefit', 0.2),
(2, 'pengembangan_kompetensi', 'benefit', 0.2),
(3, 'pengalaman_organisasi', 'benefit', 0.2),
(4, 'kepopuleran', 'benefit', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `logkrit`
--

CREATE TABLE IF NOT EXISTS `logkrit` (
  `id_member` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_krit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_suku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(6) NOT NULL,
  `ket_nilai` varchar(45) NOT NULL,
  `jum_nilai` double NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `ket_nilai`, `jum_nilai`, `id_kriteria`) VALUES
(6, 'kurang aktif', 0.1, 1),
(7, 'cukup aktif', 0.2, 1),
(8, 'aktif', 0.3, 1),
(9, 'sangat aktif', 0.4, 1),
(11, 'kurang baik', 0.1, 2),
(12, 'cukup baik', 0.2, 2),
(13, 'baik', 0.3, 2),
(14, 'sangat baik', 0.4, 2),
(15, 'kurang berpengalaman', 0.1, 3),
(16, 'cukup berpengalaman', 0.2, 3),
(17, 'berpengalaman', 0.3, 3),
(18, 'Sangat berpengalaman', 0.4, 3),
(19, 'kurang populer', 0.1, 4),
(20, 'cukup populer', 0.2, 4),
(21, 'populer', 0.3, 4),
(22, 'sangat populer', 0.4, 4),
(23, 'Kurang Serius', 0.1, 5),
(24, 'Cukup Serius', 0.2, 5),
(25, 'Serius', 0.3, 5),
(26, 'Sangat Serius', 0.4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `hak`) VALUES
(1, 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE IF NOT EXISTS `rangking` (
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_alternatif`, `id_kriteria`, `nilai_rangking`) VALUES
(5, 2, 0.2),
(6, 1, 0.3),
(7, 1, 0.4),
(8, 1, 0.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
 ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `logkrit`
--
ALTER TABLE `logkrit`
 ADD PRIMARY KEY (`id_member`,`id_kriteria`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`), ADD UNIQUE KEY `email` (`email`), ADD KEY `member_ibfk` (`id_suku`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`), ADD KEY `nilai_ibfk` (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
 ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
