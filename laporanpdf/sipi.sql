-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 03:31 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasang`
--

CREATE TABLE IF NOT EXISTS `pasang` (
  `id_pasang` int(5) NOT NULL AUTO_INCREMENT,
  `id_iklan` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_iklan` varchar(100) NOT NULL,
  `isi_iklan` text NOT NULL,
  `id_user` int(1) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  PRIMARY KEY (`id_pasang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pasang`
--

INSERT INTO `pasang` (`id_pasang`, `id_iklan`, `id_kategori`, `judul_iklan`, `isi_iklan`, `id_user`, `awal`, `akhir`) VALUES
(7, 7, 1, 'Iklan2', 'iklan 2', 1, '2015-03-25', '2015-03-28'),
(6, 6, 1, 'Iklan1', 'isi iklan 1 edit', 1, '2015-03-25', '2015-03-31'),
(10, 1, 1, 'iklan5', 'iklan 5 bos bisa', 1, '2015-03-25', '2015-03-26'),
(8, 9, 1, 'iklan3', 'isi iklan3 bos', 1, '2015-03-25', '2015-03-26'),
(9, 1, 1, 'iklan4', 'isi iklan 4 bos\r\n', 1, '2015-03-25', '2015-03-26'),
(11, 1, 1, 'iklan6', 'iklan 6 bos', 1, '2015-03-17', '2015-03-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
