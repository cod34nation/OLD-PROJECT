-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 11:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pantaudonasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'galang', 'g4l4ng');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_pengajuan` int(225) NOT NULL,
  `atas_nama` varchar(225) NOT NULL,
  `tanggal_donasi` varchar(10) NOT NULL,
  `tanggal_perubahan` varchar(10) NOT NULL,
  `id_status` int(3) NOT NULL,
  `jumlah_nominal` bigint(200) NOT NULL,
  `kode_ref` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_user`, `id_pengajuan`, `atas_nama`, `tanggal_donasi`, `tanggal_perubahan`, `id_status`, `jumlah_nominal`, `kode_ref`) VALUES
(1, 4, 1, 'gals', '13-08-2016', '13-08-2016', 3, 9000, '7effb2'),
(2, 4, 4, 'Hamba Allah', '13-08-2016', '13-08-2016', 3, 600, '1cd496'),
(15, 4, 1, 'ascsac', '14-08-2016', '14-08-2016', 1, 5645454, '230d7'),
(16, 4, 1, 'asasasasasa', '14-08-2016', '14-08-2016', 1, 121212121212, 'f544ff'),
(17, 4, 1, 'ghghghghghghg', '14-08-2016', '14-08-2016', 2, 67676767676, '8c13b'),
(20, 4, 1, 'dwqqdwqd', '14-08-2016', '14-08-2016', 1, 1212, '47058'),
(21, 4, 1, 'dacascsc', '14-08-2016', '14-08-2016', 1, 121, 'd11682'),
(22, 2, 1, 'scasacac', '14-08-2016', '14-08-2016', 3, 5000, '40635'),
(23, 5, 1, 'galang as', '15-08-2016', '15-08-2016', 3, 99000, 'd701d9'),
(24, 5, 1, 'ari', '15-08-2016', '15-08-2016', 2, 50000, '87e5a5'),
(25, 5, 1, 'ran', '15-08-2016', '15-08-2016', 1, 6700, 'ce7f3c'),
(26, 6, 1, 'rukhayah', '15-08-2016', '15-08-2016', 1, 1000000, '702df6'),
(27, 4, 1, 'Galang', '23-08-2016', '23-08-2016', 1, 90000, '8a8a84');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(225) NOT NULL,
  `no_ktp` varchar(225) NOT NULL,
  `atas_nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp` varchar(225) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `status` int(1) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `no_ktp`, `atas_nama`, `alamat`, `telp`, `tanggal`, `keterangan`, `gambar`, `status`, `kategori`, `lat`, `lng`) VALUES
(1, '28371986139', 'Parjo', 'Malang', '090878978787', '03-05-2016', 'Terkena Bencana Longsor', 'Belum ada', 2, 'BENCANA', -7.981700, 112.626404),
(3, '', 'ghjfjhf', 'hvjvljkv', '908756', '12-08-2016', 'hvjgfyjfh', '', 2, 'KEMISKINAN', -7.929537, 112.617233),
(4, '2321321', 'sacascas', 'csacsacs', '213131231221', '12-08-2016', 'cdsccac', '', 2, 'YATIM', -7.978500, 112.651566),
(5, '34213213123', 'sutarmi', 'Malang', '09807', '15-08-2016', 'Butuh dana Pendidikan', '', 2, 'PENDIDIKAN', -7.959205, 112.647446),
(6, '6692318570815353', 'PAIDI', 'JL SANTOSO RT 02 RW 05', '353543435', '15-08-2016', 'Kemiskinan', '', 2, 'KEMISKINAN', -7.904783, 112.608849);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `keterangan`) VALUES
(1, 'Belum Konfirmasi Donasi'),
(2, 'Donasi masih berada di pihak PANDA'),
(3, 'Donasi Sudah Tersalurkan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `nama_lengkap`, `alamat`) VALUES
(2, 'cascsacac', 'cascsacas', 'cascsacacs', 'scacasc', 'csacascasc'),
(3, 'ascascasc@acsacs.com', 'kasdcnaksjnca', 'lcansclasncslkcnaslkcnascmnalkscn', 'knsalcnasmcnaslkcjon', 'ckdsncascnaslcnas'),
(4, 'galangarbis@gmail.com', 'galang', 'ganteng', 'galangarbis', 'sidoarjo'),
(5, 'genji@gmail.com', 'gals', 'ganteng', 'galang as', 'Sidoarjo'),
(6, 'rukhaya@gmail.com', 'rukhayah', '12345', 'Rukhayah', 'jl.kapisraba raya 8c no.5 malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
