-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 03:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `uid` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nim` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
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
  `prestasi` varchar(600) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`uid`, `username`, `password`, `nama_lengkap`, `nim`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jk`, `ipk`, `jurusan`, `angkatan`, `line`, `ig`, `alamat`, `hobi`, `tb`, `bb`, `motivasi`, `riwayat_organisasi`, `prestasi`) VALUES
(26, '09031381520075', 'bintang009', 'RM Habibi Al-Ghulayaini', '09031381520075', 'Palembang', '1997-04-03', 'Islam', 'Laki - Laki', 3.99, 'Sistem Informasi (S1 Bilingual)', '2015', 'rm.habibb', 'rmhabibb', 'Palembangg\r\n                             ', '1. Bermain\r\n2. Membaca', 175, 62, 'Ingin melangkah lebih jauh !                          ', '1. Staff BEM KM Fasilkom', 'Tidak Ada                 '),
(17, '09031381520099', '', 'Meta Amalia', '09031381520099', NULL, '1997-10-20', NULL, 'Perempuan', NULL, 'Sistem Informasi Bilingual 2016', '', '', '', 'Palembang', 'Cemburu', 163, 53, 'Ikut Dia !', NULL, 'Lupa'),
(19, '09031381520057', '', 'Panca Krisna Yuda Putra', '09031381520057', NULL, '1997-10-02', NULL, 'Perempuan', NULL, 'Sistem Informasi Bilingual 2015', '', 'pkyp25', 'pancakyp', 'Palembang', 'Berenang', 175, 74, 'Cari penjingokan', '1. Anggota Himsi\r\n2. Kadin Humas Himsi\r\n3. Bupati Himsi\r\n4. Gubenur Mahasiswa Penjas\r\n5. CEO Panca Motor', '#Nama Penghargaan - Instansi Pemberi Penghargaan - Tahun\r\nTidak Ada !'),
(24, '1', '', 'asdasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'asd', 'asdasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '09031381520072', 'bintang009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '09031381520073', '12121212', 'Lee Kwang Soo', '09031381520073', 'Seol', '1997-02-02', 'Islam', 'Laki - Laki', 2.22, 'Sistem Informasi (S1 Profesional)', '2015', 'lee', 'InstragamLoversss', 'Perumahan Patra Sriwijaya Blok BC 09 , Gandus , Palembang , Sumatra Selatan  ', '1. Bermain\r\n2. Berenang\r\n3. Galauu', 190, 20, 'Ingin Dapat Diaa!', 'Staff BEM KM Fasilkom 2017', 'Tidak Ada !'),
(30, '090313815200752', '12121212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'rmhabib', 'bintang009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
