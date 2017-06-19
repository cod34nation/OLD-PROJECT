-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2016 at 09:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `harga_emas` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `password`, `harga_emas`) VALUES
('admin', 'admin', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `bmt`
--

CREATE TABLE IF NOT EXISTS `bmt` (
  `id_bmt` int(11) NOT NULL,
  `nama_bmt` varchar(100) NOT NULL,
  `alamat_bmt` varchar(100) NOT NULL,
  `telp_bmt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmt`
--

INSERT INTO `bmt` (`id_bmt`, `nama_bmt`, `alamat_bmt`, `telp_bmt`) VALUES
(3, 'AFRIZAL SYARIAH', 'Jl.Semangka 17 Malang', '085334198526'),
(310, 'BMT ALDI100', 'Jl.Semangka 17 Malang', '085334198526'),
(594, 'GALANG SYARIAH', 'Jl.Semangka 17 Malang', '085334198526'),
(666, 'BMT AFRIZAL', 'Jl.Semangka 17 Malang', '085334198526'),
(677, 'BMT AFRIZAL GALANG', 'Jl.Semangka 17 Malang', '085334198526'),
(869, 'BMT WIBISONO SETYO', 'Jl.Semangka 17 Malang', '085334198526'),
(916, 'BMT W', 'Jl.Semangka 17 Malang', '0000'),
(928, 'BMT AFRIZAL', 'Jl.Semangka 17 Malang', '085334198526');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE IF NOT EXISTS `bulan` (
  `id_user` varchar(10) NOT NULL,
`id_input` int(100) NOT NULL,
  `id_bulan` int(2) NOT NULL,
  `tanggal_input` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_user`, `id_input`, `id_bulan`, `tanggal_input`, `omset`, `biaya`, `utang`, `modal`, `laba`, `bangunan_tanah`, `prive`) VALUES
('1', 1, 1, '111', 111, 0, 100, 6, 8, 9, 111),
('2', 2, 1, '222', 222, 2222, 2222, 2222, 2222, 2222, 222),
('1', 3, 2, '28-03-2016', 3213213123, 2311, 213131, 12321321, 23123, 21321321, 123213),
('17', 4, 1, '28-03-2016', 400000000, 230000000, 35000000, 56000000, 79000000, 320000000, 6000000),
('17', 5, 2, '28-03-2016', 450000000, 270000000, 35000000, 60000000, 850000000, 320000000, 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_satu_tahun`
--

CREATE TABLE IF NOT EXISTS `data_satu_tahun` (
  `pendapatan` bigint(20) NOT NULL,
  `beban` bigint(20) NOT NULL,
  `laba_kotor` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL,
  `laba_setelah_pajak` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL,
  `laba_sebelum_zakat` bigint(20) NOT NULL,
  `zakat` bigint(20) NOT NULL,
  `laba_bersih` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_umkm` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_usaha` varchar(15) NOT NULL,
  `id_usaha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `password`, `nama_umkm`, `nama_pemilik`, `alamat`, `jenis_usaha`, `id_usaha`) VALUES
('1', '123', 'GALANG WEB DESIGNER', 'GALANG ARBY', 'JL.KARANG BESUKI 17 MALAN', 'MANUFAKTUR', 1),
('14', '123', 'DEPOT BAMARA', ' H. ADANG JAINUDIN', 'JL. PURWODADI RAYA 81-82,', 'DAGANG MAKANAN', 3),
('14650018', '123', 'KRIPIK AFRIZAL', 'AFRIZAL', 'JL.SEMANGKA 17 MALANG', 'DAGANG BARANG', 2),
('14650099', '123', 'TUTIK JASLIKAN', 'TUTIK JASLIKAN', 'JL RUNGKUT MADYA L-15 SUR', 'MANUFAKTUR', 1),
('15', '123', 'TOKO INDAH', 'INDAH HAPSARI', 'PERUMTAS III B-03, SIDOAR', 'DAGANG BARANG', 2),
('17', '123', 'SRI LASMINI BUDIATI', 'SRI LASMINI BUDIATI', 'JL. WIGUNA TENGAH 7/38, S', 'DAGANG MAKANAN', 3),
('2', '123', 'ASYFA HIJAB DESIGN', 'ASYFATUL', 'Jl.MERJOSARI 1,MALANG', 'DAGANG BARANG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `muamalat`
--

CREATE TABLE IF NOT EXISTS `muamalat` (
`id_muamalat` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muamalat`
--

INSERT INTO `muamalat` (`id_muamalat`, `judul`, `isi`, `status`, `tanggal`) VALUES
(10, 'Muamalat Afrizal', 'asadasdadas', 1, '2016-03-25 09:24:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `bmt`
--
ALTER TABLE `bmt`
 ADD PRIMARY KEY (`id_bmt`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
 ADD PRIMARY KEY (`id_input`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `muamalat`
--
ALTER TABLE `muamalat`
 ADD PRIMARY KEY (`id_muamalat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
MODIFY `id_input` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `muamalat`
--
ALTER TABLE `muamalat`
MODIFY `id_muamalat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
