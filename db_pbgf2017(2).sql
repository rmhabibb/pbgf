-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 05:25 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pbgf2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_bgf`
--

CREATE TABLE `admin_bgf` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_bgf`
--

INSERT INTO `admin_bgf` (`id_admin`, `username`, `password`, `role`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `uid` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nim` varchar(30) DEFAULT NULL,
  `status` varchar(11) NOT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(19) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `line` varchar(33) DEFAULT NULL,
  `ig` varchar(33) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `hobi` varchar(200) DEFAULT NULL,
  `tb` int(4) DEFAULT NULL,
  `bb` int(4) DEFAULT NULL,
  `motivasi` varchar(600) DEFAULT NULL,
  `riwayat_organisasi` varchar(500) DEFAULT NULL,
  `prestasi` text,
  `instansi_pemberi` text NOT NULL,
  `tahun_prestasi` text NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_bgf`
--
ALTER TABLE `admin_bgf`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_bgf`
--
ALTER TABLE `admin_bgf`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
