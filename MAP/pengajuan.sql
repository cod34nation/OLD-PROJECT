-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2016 at 12:10 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(100) NOT NULL,
  `atas_nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `status` int(1) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `atas_nama`, `alamat`, `hp`, `tanggal`, `keterangan`, `gambar`, `status`, `kategori`, `lat`, `lng`) VALUES
(1, 'Agus Swara', 'Karangbesuki Gasek', '087777665544', '03-05-2016', 'Terkena Bencana Longsor', 'Belum ada', 1, 'BENCANA', -7.981700, 112.626404),
(2, 'Mulyono', 'Malang Kota', '089654766454', '23-06-2016', 'Kemiskinan', 'Tidak ada', 1, 'KEMISKINAN', -7.978900, 112.645500),
(3, 'Budi', 'Malang', '081345678901', '22-05-2016', 'Pendidikan', 'Belum ada', 1, 'PENDIDIKAN', -7.977700, 112.690300),
(4, 'Wawan', 'Malang', '088997665432', '24-05-2016', 'Kesehatan', 'Belum ada', 1, 'KESEHATAN', -7.955660, 112.545494),
(5, 'Tegar', 'Malang', '081346677901', '03-05-2016', 'Yatim Piatu', 'Belum ada', 1, 'YATIM', -7.967700, 112.690300),
(6, 'Junai', 'Malang', '08765546788', '14-06-2016', 'Pembangunan Rumah Layak', 'Belum ada', 1, 'PEMBANGUNAN', -7.951900, 112.686501),
(7, 'Darmoko', 'Dekat UB', '08775543667', '15-06-2016', 'Berobat', 'Belum ada', 1, 'KESEHATAN', -7.952319, 112.607445);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
