-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 01:05 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atom_jaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klaster`
--

CREATE TABLE IF NOT EXISTS `tbl_klaster` (
`id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `c1` int(5) NOT NULL,
  `c2` int(5) NOT NULL,
  `c3` int(5) NOT NULL,
  `c4` int(5) NOT NULL,
  `c5` int(5) NOT NULL,
  `c6` int(5) NOT NULL,
  `kinerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`nilai_id` int(11) NOT NULL,
  `nilai_KodeBarang` varchar(15) NOT NULL,
  `nilai_NamaBarang` varchar(30) NOT NULL,
  `nilai_Stok` int(3) NOT NULL,
  `nilai_JumTrans` int(3) NOT NULL,
  `nilai_JumTerj` int(3) NOT NULL,
  `nilai_RataPenj` float NOT NULL,
  `nilai_hasil_point` int(11) NOT NULL,
  `nilai_bulan` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nilai_id`, `nilai_KodeBarang`, `nilai_NamaBarang`, `nilai_Stok`, `nilai_JumTrans`, `nilai_JumTerj`, `nilai_RataPenj`, `nilai_hasil_point`, `nilai_bulan`) VALUES
(37, 'C23A3', 'Terpal 2x3 A3', 50, 19, 50, 2.63, 122, 'April'),
(38, 'C33A3', 'Terpal 3x3 A3', 50, 11, 15, 1.36, 77, 'April'),
(39, 'C34A3', 'Terpal 3x4 A3', 50, 33, 41, 1.24, 125, 'April'),
(40, 'C35A3', 'Terpal 3x5 A3', 50, 9, 9, 1, 69, 'April'),
(41, 'C36A3', 'Terpal 3x6 A3', 20, 8, 9, 1.13, 38, 'April'),
(42, 'C37A3', 'Terpal 3x7 A3', 20, 2, 2, 1, 25, 'April'),
(43, 'C44A3', 'Terpal 4x4 A3', 20, 2, 2, 1, 25, 'April'),
(44, 'C45A3', 'Terpal 4x5 A3', 50, 7, 7, 1, 65, 'April'),
(45, 'C46A3', 'Tetpal 4x6 A3', 50, 13, 13, 1, 77, 'April'),
(46, 'C47A3', 'Terpal 4x7 A3', 30, 2, 4, 2, 38, 'April'),
(47, 'C56A3', 'Terpal 5x6 A3', 30, 3, 3, 1, 37, 'April'),
(48, 'C57A3', 'Terpal 5x7 A3', 30, 1, 1, 1, 33, 'April'),
(49, 'C68A3', 'Terpal 6x8 A3', 30, 2, 2, 1, 35, 'April');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
`kar_id` int(11) NOT NULL,
  `kar_KodBar` varchar(20) NOT NULL,
  `kar_NamaBarang` varchar(100) NOT NULL,
  `kar_StokBarang` int(5) NOT NULL,
  `kar_JumTrans` int(3) NOT NULL,
  `kar_JumTerj` int(3) NOT NULL,
  `kar_RataPenj` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kar_id`, `kar_KodBar`, `kar_NamaBarang`, `kar_StokBarang`, `kar_JumTrans`, `kar_JumTerj`, `kar_RataPenj`) VALUES
(1, 'C23A3', 'Terpal 2x3 A3', 50, 19, 50, 2.63),
(2, 'C33A3', 'Terpal 3x3 A3', 50, 11, 15, 1.36),
(3, 'C34A3', 'Terpal 3x4 A3', 50, 33, 41, 1.24),
(4, 'C35A3', 'Terpal 3x5 A3', 50, 9, 9, 1),
(5, 'C36A3', 'Terpal 3x6 A3', 20, 8, 9, 1.13),
(6, 'C37A3', 'Terpal 3x7 A3', 20, 2, 2, 1),
(7, 'C44A3', 'Terpal 4x4 A3', 20, 2, 2, 1),
(8, 'C45A3', 'Terpal 4x5 A3', 50, 7, 7, 1),
(9, 'C46A3', 'Tetpal 4x6 A3', 50, 13, 13, 1),
(10, 'C47A3', 'Terpal 4x7 A3', 30, 2, 4, 2),
(11, 'C56A3', 'Terpal 5x6 A3', 30, 3, 3, 1),
(13, 'C57A3', 'Terpal 5x7 A3', 30, 1, 1, 1),
(14, 'C68A3', 'Terpal 6x8 A3', 30, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`user_id` int(11) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_username`, `user_password`, `level`) VALUES
(1, 'Manager', 'Agus', 'manager'),
(2, 'Karyawan', '123', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_klaster`
--
ALTER TABLE `tbl_klaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
 ADD PRIMARY KEY (`kar_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_klaster`
--
ALTER TABLE `tbl_klaster`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
MODIFY `kar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
