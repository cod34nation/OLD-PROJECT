-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2016 pada 02.50
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'galang', 'admin'),
(2, 'rizal', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `id_dokumentasi` int(100) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` varchar(10) NOT NULL,
  PRIMARY KEY (`id_dokumentasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dokumentasi`, `id_admin`, `judul`, `gambar`, `deskripsi`, `tanggal_posting`) VALUES
(1, 1, 'acassv', 'developers_wallpaper-wallpaper-1366x768.jpg', 'cascsacsc', '08-03-2016'),
(2, 1, 'kasnckas', 'jurs-jitu-menarik-loyalitas-konsumen1.jpg', 'scascas', '08-03-2016'),
(3, 1, 'sacascsac', '10987012_881691185228808_8923663857329738615_n.jpg', 'csacsacasc', '09-03-2016'),
(5, 1, 'cascas', 'developers_wallpaper-wallpaper-1366x768.jpg', 'sacascasc', '10-03-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `tanggal` varchar(10) NOT NULL,
  `id_email` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`tanggal`, `id_email`, `email`) VALUES
('11-03-2016', 147, 'afrizal87wibisono@ymail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_user` int(100) NOT NULL,
  `atas_nama` varchar(200) NOT NULL,
  `tanggal_transfer` varchar(10) NOT NULL,
  `tanggal_konfirm` varchar(10) NOT NULL,
  `jumlah_nominal` bigint(200) NOT NULL,
  `id_ref` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `id_tujuan` int(100) NOT NULL,
  UNIQUE KEY `id_ref` (`id_ref`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_user`, `atas_nama`, `tanggal_transfer`, `tanggal_konfirm`, `jumlah_nominal`, `id_ref`, `status`, `id_pengajuan`, `id_tujuan`) VALUES
(376, 'afrizal setyo', '11-03-2016', 'belum', 100000, '2c11ec', 1, 0, 1),
(368, 'galang', '10-03-2016', 'belum', 7000, '2c247', 1, 0, 0),
(369, 'cas', '10-03-2016', 'belum', 233, '7091c', 1, 0, 1),
(370, 'Afrizal Setyo', '10-03-2016', 'belum', 100000, '901b1', 1, 0, 2),
(381, 'afrizal setyo', '11-03-2016', 'belum', 100000, 'a2935', 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id_pengajuan` int(100) NOT NULL AUTO_INCREMENT,
  `atas_nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_pengajuan`),
  UNIQUE KEY `id_pengajuan` (`id_pengajuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `atas_nama`, `alamat`, `hp`, `tanggal`, `keterangan`, `gambar`, `status`) VALUES
(13, 'Junaidi', 'Blimbing, Malang Jawa Timur', '087724415229', '10 Mar 2016 06:45', 'Membutuhkan bantuan untuk biaya operasi anak', 'gambar/IMG_5086.JPG', 2),
(14, 'Nuryati', 'Lowokwaru Malang Jawa Timur', '086573625890', '10 Mar 2016 06:47', 'Membutuhkan bantuan berupa dana untuk pembangunan tempat tinggal layak', 'gambar/kemiskinan-perbatasan130718b.jpg', 2),
(15, 'Fatimah', 'Ds Landung sari Malang Jawa Timur', '088438729002', '10 Mar 2016 06:49', 'Orang miskin dan kekurangan', 'gambar/100_3327.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE IF NOT EXISTS `tujuan` (
  `id_tujuan` int(100) NOT NULL AUTO_INCREMENT,
  `nama_tujuan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tujuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `nama_tujuan`) VALUES
(1, 'Korban Bencana'),
(2, 'Anak Yatim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `id_admin` int(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `noTelp` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_email` int(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=383 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_admin`, `password`, `alamat`, `noTelp`, `nama`, `id_email`) VALUES
(379, 1, 'ad291e', '', 0, '', 137),
(380, 1, 'a41e9d', 'sdsdssd', 1212121212, 'afrizal setyo', 0),
(381, 1, 'af4b9', 'asasa', 909909, 'afrizal setyo', 147),
(382, 1, 'e82013', '', 0, '', 147);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
