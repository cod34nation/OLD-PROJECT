-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2015 pada 11.15
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `semester` int(1) NOT NULL,
  `RadioGroup1` char(1) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `no_HP` int(20) NOT NULL,
  `bb` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fb` varchar(30) NOT NULL,
  `tanggal` int(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `nim` (`nim`),
  FULLTEXT KEY `nama` (`nama`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `nim`, `alamat`, `tempat_lahir`, `semester`, `RadioGroup1`, `bulan`, `tahun`, `divisi`, `no_HP`, `bb`, `email`, `fb`, `tanggal`) VALUES
(7, 'afrizal setyo wibisono', 'asw171295', '123', 14650020, 'semangka 17', 'malang', 2, 'L', '1', 1990, 'Jaringan', 2147483647, '123', 'ririnherawati13@yahoo.co.id', 'afrizalwibisono@rocketmail.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
