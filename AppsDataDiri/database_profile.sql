-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 05:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `badan`
--

CREATE TABLE IF NOT EXISTS `badan` (
  `nim` int(100) NOT NULL,
`id_badan` int(100) NOT NULL,
  `warna_kulit_badan` varchar(25) NOT NULL,
  `ciri_dada` varchar(25) NOT NULL,
  `ciri_perut` varchar(25) NOT NULL,
  `panjang_badan` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `ciri_punggung` varchar(25) NOT NULL,
  `bentuk_tulangbelakang` varchar(25) NOT NULL,
  `lebar_bahu` int(100) NOT NULL,
  `lebar_pinggang` int(100) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `bekas_luka` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badan`
--

INSERT INTO `badan` (`nim`, `id_badan`, `warna_kulit_badan`, `ciri_dada`, `ciri_perut`, `panjang_badan`, `ciri_cacat`, `ciri_punggung`, `bentuk_tulangbelakang`, `lebar_bahu`, `lebar_pinggang`, `ciri_tahilalat`, `jumlah_tahilalat`, `bekas_luka`) VALUES
(14650027, 1, 'Kuning Langsat', 'Lebar', 'Besar', '1 Meter', 'Tidak Ada', 'Besar', 'Normal', 80, 60, 'Ada', 2, 'Tidak ada'),
(14650092, 2, 'kuning langsat', 'menonjol', 'besar', '50', 'tidak ada', 'normal', 'normal', 35, 44, 'diatas dada', 1, 'tidak ada'),
(14650018, 3, 'sawo matang', 'Bidang', 'kecil', '90 cm', 'tidak ada', 'normal dan lurus', 'normal', 40, 50, 'Kecil', 10, 'tidak ada'),
(14650055, 4, 'kuning langsat', 'menonjol', 'kecil', '50', 'tidak ada', 'kecil', 'normal', 30, 45, 'dekat dada, punggung dan ', 4, 'tidak ada'),
(14650067, 5, 'sawo matang', 'menonjol', 'besar', '50', 'tidak ada', 'normal', 'normal', 35, 40, 'dipunggung dan dipinggul', 2, 'tidak ada'),
(14650099, 6, 'coklat', 'bidang', 'six pack', '165', 'gak ada', 'tegak', 'tegak', 40, 36, 'gak ada', 0, 'kecil samar samar'),
(14650103, 7, 'kuning langsat', 'menonjol', 'agak buncit', '40 cm', 'tidak ada', 'normal', 'normal', 37, 80, 'kecil', 2, 'tidak ada'),
(14650027, 8, 'sawo matang', 'rata', 'sispek', '185', '-', 'normal dan lurus', 'normal', 1, 50, '-', 0, 'jahitan'),
(14650053, 9, 'sawo matang', 'rata', 'sispek', '185', '-', 'normal dan lurus', 'normal', 50, 40, '-', 0, '-'),
(14650096, 10, 'kuning', 'lapang', 'lapang', '20', 'tidak ada', 'lapang', 'ke belakang', 10, 50, 'tidak ada', 0, 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `ciri_umum`
--

CREATE TABLE IF NOT EXISTS `ciri_umum` (
  `nim` int(100) NOT NULL,
`id_ciri` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `warna_kulit` varchar(25) NOT NULL,
  `ras` varchar(30) NOT NULL,
  `agama` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciri_umum`
--

INSERT INTO `ciri_umum` (`nim`, `id_ciri`, `tinggi_badan`, `berat_badan`, `usia`, `warna_kulit`, `ras`, `agama`) VALUES
(14650027, 2, 172, 78, 20, 'Kuning', 'Jawa Sunda', 'Islam'),
(14650092, 3, 160, 64, 19, 'kuning langsat', 'blasteran jawa dan dayak', 'islam'),
(14650018, 4, 167, 55, 20, 'sawo matang', 'Jawa', 'Islam'),
(14650055, 5, 157, 45, 20, 'kuning langsat', 'jawa', 'islam'),
(14650067, 6, 162, 60, 20, 'sawo matang', 'Jawa', 'Islam'),
(14650099, 7, 165, 55, 20, 'coklat', 'jawa', 'islam'),
(14650103, 8, 157, 51, 19, 'kuning langsat', 'jawa', 'Islam'),
(14650027, 9, 185, 50, 20, 'sawo matang', 'jawa', 'islam'),
(14650053, 10, 185, 50, 20, 'sawo matang', 'jawa', 'islam'),
(14650096, 11, 156, 48, 20, 'kuning', 'jawa', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `nim` int(100) NOT NULL,
`id_foto` int(100) NOT NULL,
  `nama_foto` varchar(25) NOT NULL,
  `keterangan_foto` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`nim`, `id_foto`, `nama_foto`, `keterangan_foto`, `picture`) VALUES
(14650027, 4, 'Kepala', 'Scan Tengkorak Kepala', '635019.jpg'),
(14650092, 6, 'dian', 'foto formal', '37310.jpg'),
(14650092, 7, 'saya', 'kacamataan', '914057.jpg'),
(14650092, 8, 'saya lagi', 'tanpa kaca mata', '172276.jpg'),
(14650092, 9, 'keluargaku', 'sekeluarga cekrek', '651533.jpg'),
(14650018, 10, 'Foto Setengah Badan', 'Kategori Biometrik ', '644003.jpg'),
(14650018, 11, 'Foto Retina', 'Kategori Biometrik', '862443.jpg'),
(14650018, 12, 'Foto Sidik Jari', 'Kategori Biometrik', '868083.jpg'),
(14650018, 13, 'Foto Ciri Tanda Tangan', 'Kategori Biometrik', '218494.jpg'),
(14650018, 14, 'Foto Ciri Tulisan Tangan', 'Kategori Biometrik', '389253.jpg'),
(14650018, 15, 'Foto Ciri Kulit', 'Kategori Anatomi', '130143.jpg'),
(14650018, 16, 'Foto Kaki bagian Bawah Se', 'Kategori Anatomi', '778603.jpg'),
(14650018, 17, 'Foto Kaki bagian Bawah Se', 'Kategori Anatomi', '939118.jpg'),
(14650018, 18, 'Foto Telapak Tangan Kiri', 'Kategori Anatomi', '812200.jpg'),
(14650018, 19, 'Foto Telapak Tangan Kanan', 'Kategori Anatomi', '136880.jpg'),
(14650018, 20, 'Foto Telapak Kaki Kiri', 'Kategori Anatomi', '187763.jpg'),
(14650018, 21, 'Foto Telapak Kaki Kanan', 'Kategori Anatomi', '785829.jpg'),
(14650018, 22, 'Foto Kaki Sepasang', 'Kategori Anatomi', '150142.jpg'),
(14650018, 23, 'Foto Bentuk Muka', 'Kategori Anatomi', '712355.jpg'),
(14650018, 24, 'Foto Rambut', 'Kategori Anatomi', '539341.jpg'),
(14650018, 25, 'Foto Telinga Sebelah Kana', 'Kategori Anatomi', '458885.jpg'),
(14650018, 26, 'Foto Telinga Sebelah Kiri', 'Kategori Anatomi', '539767.jpg'),
(14650018, 27, 'Foto Lidah', 'Kategori Anatomi', '37127.jpg'),
(14650018, 28, 'Foto Kaki Sebelah Kiri', 'Kategori Anatomi', '428489.jpg'),
(14650018, 29, 'Foto Kaki Sebelah Kanan', 'Kategori Anatomi', '676319.jpg'),
(14650018, 30, 'Foto Jari Telunjuk Kiri', 'Kategori Anatomi', '326480.jpg'),
(14650018, 31, 'Foto Ibu Jari ', 'Kategori Anatomi', '577480.jpg'),
(14650018, 32, 'Foto Jari Tengah', 'Kategori Anatomi', '947868.jpg'),
(14650018, 33, 'Foto Jari Kelingking Kiri', 'Kategori Anatomi', '657661.jpg'),
(14650018, 34, 'Foto Jari Telunjuk Kanan', 'Kategori Anatomi', '353186.jpg'),
(14650018, 35, 'Foto Jari Tengah Kanan', 'Kategori Anatomi', '304194.jpg'),
(14650018, 36, 'Foto Jari Kelingking Kana', 'Kategori Anatomi', '692630.jpg'),
(14650018, 37, 'Foto Jari Manis Kanan', 'Kategori Anatomi', '121942.jpg'),
(14650018, 38, 'Foto Jari Kaki Kiri', 'Kategori Anatomi', '963294.jpg'),
(14650018, 39, 'Foto Jari Kaki Kiri', 'Kategori Anatomi', '684551.jpg'),
(14650018, 40, 'Foto Ciri Muka', 'Kategori Ciri Fisik', '755433.jpg'),
(14650018, 41, 'Foto Ciri Rambut', 'Kategori Ciri Fisik', '286694.jpg'),
(14650018, 42, 'Foto Ciri Tampak Belakang', 'Kategori Ciri Fisik', '2707.jpg'),
(14650018, 43, 'Foto Ciri Tampak Depan', 'Kategori Ciri Fisik', '688331.jpg'),
(14650018, 44, 'Foto Ciri Tampak Kanan', 'Kategori Ciri Fisik', '730434.jpg'),
(14650018, 45, 'Foto Ciri Tampak Kiri', 'Kategori Ciri Fisik', '870949.jpg'),
(14650018, 46, 'Foto Buku Favorit', 'Barang Favorit', '811834.jpg'),
(14650018, 47, 'Foto Sertifikat', 'Kategori Dokumen Pribadi', '783817.jpg'),
(14650018, 48, 'Foto Sertifikat Peserta L', 'Kategori Psikis Potensi ', '711288.jpg'),
(14650018, 49, 'Foto Sertifikat Peserta L', 'Kategori Psikis Potensi', '95235.jpg'),
(14650018, 50, 'Foto Sertifikat Peserta L', 'Kategori Psikis Potensi', '237579.jpg'),
(14650018, 51, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '939788.jpg'),
(14650018, 52, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '292151.jpg'),
(14650018, 53, 'Foto Pribadi', 'Kategori Psikis Potensi', '675587.jpg'),
(14650018, 54, 'Foto Aktifitas Hobi', 'Kategori Psikis Kebiasaan', '621351.jpg'),
(14650018, 55, 'Foto Aktifitas Pagi', 'Kategori Psikis Kebiasaan', '625528.jpg'),
(14650018, 56, 'Foto Aktifitas Pagi', 'Kategori Psikis Gaya Berfoto', '565681.jpg'),
(14650018, 57, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '832535.jpg'),
(14650018, 58, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '808054.jpg'),
(14650018, 59, 'Foto Aktifitas Olahraga', 'Kategori Psikis Kebiasaan', '808816.jpg'),
(14650018, 60, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '127033.jpg'),
(14650018, 61, 'Foto Pribadi', 'Kategori Tempat Favorit Foto', '285109.jpg'),
(14650018, 62, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '142094.jpg'),
(14650018, 63, 'Foto Pribadi', 'Kategori Psikis Gaya Berpenampilan', '958934.jpg'),
(14650018, 64, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '68864.jpg'),
(14650018, 65, 'Foto Pribadi', 'Kategori Psikis Kebiasaan Foto', '250841.jpg'),
(14650018, 66, 'Foto Pribadi', 'Kategori Psikis Kebiasaan Foto', '465379.jpg'),
(14650018, 67, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '45663.jpg'),
(14650018, 68, 'Foto Pribadi', 'Kategori Psikis Foto Aktifitas Pagi', '984330.jpg'),
(14650018, 69, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '448763.jpg'),
(14650018, 70, 'Foto Pribadi', 'Kategori Foto Tempat Favorit', '123314.jpg'),
(14650018, 71, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '535286.jpg'),
(14650018, 72, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '969087.jpg'),
(14650018, 73, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '98406.jpg'),
(14650018, 74, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '957806.jpg'),
(14650018, 75, 'Foto Pribadi', 'Kategori Ciri Fisik', '398582.jpg'),
(14650018, 76, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '616290.jpg'),
(14650018, 77, 'Foto Pribadi', 'Kategori Psikis Potensi', '916801.jpg'),
(14650018, 78, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '315260.jpg'),
(14650018, 79, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '103832.jpg'),
(14650018, 80, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '19597.jpg'),
(14650018, 81, 'Foto Pribadi', 'Kategori Psikis Kebiasaan Foto', '125478.jpg'),
(14650018, 82, 'Foto Pribadi', 'Kategori Anatomi', '37584.jpg'),
(14650018, 83, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '618820.jpg'),
(14650018, 84, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '771164.jpg'),
(14650018, 85, 'Foto Pribadi', 'Kategori Psikis Foto Favorit', '440471.jpg'),
(14650018, 86, 'Foto Pribadi', 'Kategori Psikis Gaya Berfoto', '468184.jpg'),
(14650018, 87, 'Foto Sekolah', 'Foto Riwayat Pendidikan', '413825.jpg'),
(14650018, 88, 'Foto Sekolah Dasar', 'Kategori Riwayat Pendidikan', '966648.jpg'),
(14650018, 89, 'Foto SMP', 'Kategori Riwayat Pendidikan', '82309.jpg'),
(14650018, 90, 'Foto SMA', 'Kateegori Riwayat Pendidikan', '451965.jpg'),
(14650018, 91, 'Foto Teman ', 'Kategori Sahabat Dekat', '456629.jpg'),
(14650018, 92, 'Foto Rongsen Sinusitis', 'Kategori Riwayatt PEnyakit', '200202.jpg'),
(14650099, 94, 'bahu', 'anatomi', '360046.jpg'),
(14650099, 95, 'kerangka', 'anatomi', '162154.jpg'),
(14650099, 96, 'bibir', 'anatomi', '117308.jpg'),
(14650099, 97, 'gigi', 'anatomi', '832809.jpg'),
(14650099, 98, 'hidung', 'anatomi', '322852.jpg'),
(14650099, 99, 'jari kaki', 'anatomi', '665923.jpg'),
(14650099, 100, 'jari tangan', 'anatomi', '395228.jpg'),
(14650099, 101, 'jenggot', 'anatomi', '219531.jpg'),
(14650099, 102, 'jenggot', 'anatomi', '221269.jpg'),
(14650099, 103, 'kaki', 'Kategori Anatomi', '145325.jpg'),
(14650099, 104, 'kumis', 'anatomi', '905338.jpg'),
(14650099, 105, 'mata', 'Kategori Anatomi', '938904.jpg'),
(14650099, 106, 'perut', 'Kategori Anatomi', '523579.jpg'),
(14650099, 107, 'punggung', 'Kategori Anatomi', '692020.jpg'),
(14650099, 108, 'rambut', 'Kategori Anatomi', '867168.jpg'),
(14650099, 109, 'Foto Sidik Jari', 'Kategori Anatomi', '836834.jpg'),
(14650099, 110, 'tai lalat', 'Kategori Anatomi', '199562.jpg'),
(14650099, 111, 'tanda lahir', 'Kategori Anatomi', '901161.jpg'),
(14650099, 112, 'tangan', 'ana', '998751.jpg'),
(14650099, 113, 'telapak tangan', 'Kategori Anatomi', '256725.jpg'),
(14650099, 114, 'telinga', 'Kategori Anatomi', '716501.jpg'),
(14650099, 115, 'buku', 'kesukaan', '866406.jpg'),
(14650099, 116, 'makanan ringan', 'kesukaan', '519615.jpg'),
(14650099, 117, 'makanan favorit', 'kesukaan', '41486.jpg'),
(14650099, 118, 'minuman favorit', 'kesukaan', '45175.jpg'),
(14650099, 119, 'minuman ringan', 'psikolog', '181910.jpg'),
(14650099, 120, 'musik ', 'psikolog', '147795.jpg'),
(14650099, 121, 'rokok', 'psikolog', '534524.jpg'),
(14650099, 122, 'rumah makan', 'psikolog', '651868.jpg'),
(14650099, 123, 'Foto Teman', 'teman', '939331.jpg'),
(14650092, 124, 'wisudaku', 'wisuda smk mofie', '484921.jpg'),
(14650092, 125, 'wisudaku lagi', 'wisuda el-chaura', '723086.jpg'),
(14650092, 126, 'jalan-jalan', 'kalbar', '210568.jpg'),
(14650092, 127, 'jalan-jalan ku', 'kalbar rumahku', '87187.jpg'),
(14650092, 128, 'mata', 'saya', '484159.jpg'),
(14650092, 129, 'cemberut', 'wajahku', '469312.jpg'),
(14650092, 130, 'batik', 'belajar batik di jogja', '84107.jpg'),
(14650092, 131, 'close up', 'wajahku', '601199.jpg'),
(14650092, 132, 'kaki', 'ciri ku', '629887.jpg'),
(14650092, 133, 'tanganku', 'ciriku', '182367.jpg'),
(14650092, 134, 'kakiku', 'ciriku', '338126.jpg'),
(14650092, 135, 'panjang kaki', 'ciriku', '629369.jpg'),
(14650092, 136, 'panjang tangan', 'ciriku', '765860.jpg'),
(14650092, 137, 'panjang badan', 'ciriku', '830035.jpg'),
(14650092, 138, 'keluargaku', 'liburan', '566779.jpg'),
(14650092, 139, 'wisudaku', 'keluarga el-chaura', '889729.jpeg'),
(14650092, 140, 'sama candra', 'ngampus', '786530.jpg'),
(14650092, 141, 'imut ya', 'wajahku', '242183.jpg'),
(14650092, 142, 'aremanita', 'bumi arema', '236482.jpg'),
(14650092, 143, 'reunian', 'sahabatku', '253067.jpg'),
(14650092, 144, 'masjid jami''', 'alun alun', '192855.jpg'),
(14650092, 146, 'saya', 'body', '606687.jpg'),
(14650092, 147, 'teman kkm', 'pembekalan kkm', '915856.jpg'),
(14650092, 148, 'makanan favorit', 'bingsoo', '321510.jpg'),
(14650092, 149, 'pengajian', 'haul romo kyai', '707020.jpg'),
(14650092, 150, 'ultahku dulu', 'masa kecilku', '316815.jpg'),
(14650092, 151, 'cekrek', 'masa kecilku', '351357.jpg'),
(14650092, 152, 'malioboro', 'jogja', '541871.jpg'),
(14650092, 153, 'hunting', 'sungai kapuas, kalbar', '313248.jpg'),
(14650092, 154, 'borobudur', 'candi', '664978.jpg'),
(14650092, 156, 'coban tundo', 'piknik', '863723.jpg'),
(14650092, 157, 'ultah dewi', 'ngerjain', '601809.jpg'),
(14650092, 158, 'selecta', 'jalan', '883662.jpg'),
(14650092, 159, 'nongkrong', 'cafe grand canyon', '693209.jpg'),
(14650092, 160, 'cilubba', 'alun alun batu', '308828.jpg'),
(14650092, 161, 'teman smp', 'reunian', '762628.jpg'),
(14650092, 162, 'Foto Sekolah', 'AL-RIFAIE', '823114.jpg'),
(14650092, 163, 'makanan', 'MIE JOGGING', '820096.jpg'),
(14650092, 164, 'wajahku', 'kacamataan', '825858.jpg'),
(14650092, 165, 'bareng kadoor', 'hits instagram', '626625.jpg'),
(14650092, 166, 'hitam putih', 'praktikum', '622875.jpg'),
(14650092, 167, 'nongki', 'cafe grand canyon', '260963.jpg'),
(14650092, 168, 'nongkrong', 'frezeen cafe', '401478.jpg'),
(14650092, 169, 'wisma tumapel', 'piknik', '822718.jpg'),
(14650092, 170, 'alun alun batu', 'hunting', '518487.jpg'),
(14650092, 171, 'kampus', 'parkiran mobil', '371204.jpg'),
(14650092, 172, 'ziaroh', 'ancol', '410624.jpeg'),
(14650092, 173, 'wedding evi', 'pernikahan evi', '633332.jpg'),
(14650067, 174, 'mata', 'wajahku', '417392.jpg'),
(14650067, 175, 'mulut', 'wajahku', '483641.jpg'),
(14650067, 176, 'hidung', 'wajahku', '53803.jpg'),
(14650067, 177, 'tangan', 'badan', '576017.jpg'),
(14650067, 178, 'kaki', 'badan', '538609.jpg'),
(14650067, 183, 'merah', 'selfi cantik', '291298.jpg'),
(14650067, 184, 'omah kayu', 'piknik', '653027.jpg'),
(14650067, 185, 'paralayang', 'piknik', '520103.jpg'),
(14650055, 186, 'panjang badan', 'badan', '843907.jpg'),
(14650055, 187, 'face', 'wajahku', '346144.jpg'),
(14650055, 188, 'ultahku dulu', 'dikerjain', '769701.jpg'),
(14650055, 189, 'tangan', 'badan', '653942.jpg'),
(14650055, 190, 'kaki', 'tubuh', '603363.jpg'),
(14650055, 191, 'panjang tangan', 'tangan', '31212.jpg'),
(14650055, 192, 'masjid jami''', 'cekrek', '564279.jpg'),
(14650055, 193, 'aremanita', 'bumi arema', '132185.jpg'),
(14650055, 194, 'bareng kadoorrr', 'hits instagram', '881833.jpg'),
(14650055, 195, 'cekrek', 'bareng candra dan dian', '831102.jpg'),
(14650055, 198, 'selfi', 'cekrek', '501445.jpg'),
(14650055, 199, 'jalan-jalan', 'piknik', '870613.jpg'),
(14650055, 200, 'HMJ', 'rutinitas', '72858.jpg'),
(14650055, 201, 'TI', 'HMJ', '514463.jpg'),
(14650055, 202, 'HANTU', 'drama', '494494.jpg'),
(14650055, 203, 'tampak samping', 'muka', '546505.jpg'),
(14650067, 204, 'din1', 'selfie', '902533.jpg'),
(14650067, 205, 'din2', 'selfie', '692813.jpg'),
(14650067, 206, 'din3', 'selfie3', '944910.jpg'),
(14650067, 207, 'din4', 'selfie4', '226055.jpg'),
(14650067, 208, 'din5', 'selfie5', '339254.jpg'),
(14650067, 209, 'din6', 'selfie6', '299651.jpg'),
(14650067, 210, 'din7', 'selfie7', '400411.jpg'),
(14650067, 211, 'din8', 'selfie8', '378613.jpg'),
(14650067, 212, 'din9', 'selfie9', '297182.jpg'),
(14650067, 213, 'din10', 'selfie10', '771225.jpg'),
(14650067, 214, 'din11', 'selfie11', '665649.jpg'),
(14650067, 215, 'din12', 'selfie12', '880430.jpg'),
(14650067, 216, 'din13', 'selfie13', '362424.jpg'),
(14650067, 217, 'din14', 'selfie14', '952075.jpg'),
(14650067, 218, 'din15', 'selfie15', '210903.jpg'),
(14650067, 219, 'din16', 'selfie16', '826163.jpg'),
(14650067, 220, 'din17', 'selfie17', '753512.jpg'),
(14650067, 221, 'din18', 'selfie18', '686105.jpg'),
(14650067, 222, 'din19', 'selfie19', '3957.jpg'),
(14650067, 223, 'din20', 'selfie20', '808968.jpg'),
(14650067, 224, 'din21', 'selfie21', '190477.jpg'),
(14650067, 225, 'din22', 'selfie22', '316724.jpg'),
(14650067, 226, 'din23', 'selfie23', '513091.jpg'),
(14650067, 227, 'din24', 'selfie24', '922502.jpg'),
(14650067, 228, 'din25', 'selfie25', '889851.jpg'),
(14650067, 229, 'din26', 'selfie26', '686837.jpg'),
(14650067, 230, 'din27', 'selfie27', '708087.jpg'),
(14650067, 231, 'din28', 'selfie28', '760921.jpg'),
(14650067, 232, 'din29', 'selfie29', '572663.jpg'),
(14650067, 233, 'din30', 'selfie30', '141850.jpg'),
(14650053, 234, '14650053_1', 'lagi praktikum ', '809822.jpg'),
(14650053, 235, '14650053_2', 'Rencana buka usaha warkop', '797475.jpg'),
(14650053, 236, '14650053_2', 'Rencana buka usaha warkop', '202031.jpg'),
(14650053, 237, '14650053_3', 'Kopi lanang produk unggulan ', '530347.jpg'),
(14650053, 238, '14650053_4', 'warung kopi sendiri', '711715.jpg'),
(14650053, 239, '14650053_5', 'kopi ijo susu', '345961.jpg'),
(14650053, 240, '14650053_6', 'Projeck java', '94168.jpg'),
(14650096, 241, 'apel', 'buah kesukaan', '409557.jpg'),
(14650096, 242, 'kucing', 'hewan kesukaan', '618333.jpg'),
(14650096, 243, 'prof', 'cita-cita', '967745.jpg'),
(14650096, 244, 'keluarga', 'keluarga di rumah', '139502.jpg'),
(14650096, 245, 'keluarga', 'keluarga', '879394.jpg'),
(14650096, 246, 'keluarga', 'keluarga', '530408.jpg'),
(14650096, 247, 'keluarga', 'keluarga', '52645.jpg'),
(14650096, 248, 'keluarga', 'keluarga', '293645.jpg'),
(14650096, 249, 'keluarga', 'keluarga', '697934.jpg'),
(14650096, 250, 'keluarga', 'keluarga', '731379.jpg'),
(14650096, 251, 'anatomi', 'alis', '864699.jpg'),
(14650096, 252, 'anatomi', 'bibir', '208647.jpg'),
(14650096, 253, 'anatomi', 'dagu', '486598.jpg'),
(14650096, 254, 'anatomi', 'dagu', '485409.jpg'),
(14650096, 255, 'anatomi', 'hidung', '589949.jpg'),
(14650092, 256, 'selecta', 'piknik', '473092.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kaki`
--

CREATE TABLE IF NOT EXISTS `kaki` (
  `nim` int(100) NOT NULL,
`id_kaki` int(100) NOT NULL,
  `jumlah_kaki` int(2) NOT NULL,
  `panjang_kaki` int(100) NOT NULL,
  `bentuk_kaki` varchar(25) NOT NULL,
  `ciri_telapak_kaki` varchar(25) NOT NULL,
  `ciri_jari_kaki` varchar(25) NOT NULL,
  `jumlah_jari_kaki` int(10) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaki`
--

INSERT INTO `kaki` (`nim`, `id_kaki`, `jumlah_kaki`, `panjang_kaki`, `bentuk_kaki`, `ciri_telapak_kaki`, `ciri_jari_kaki`, `jumlah_jari_kaki`, `ciri_tahilalat`, `jumlah_tahilalat`, `ciri_cacat`) VALUES
(14650027, 1, 2, 130, 'normal', 'besar', 'pendek', 10, 'dipaha', 3, 'tidak ada'),
(14650092, 2, 2, 77, 'normal', 'lebar', 'pendek', 10, 'dibawah lutut', 1, 'tidak ada'),
(14650018, 3, 1, 100, 'Normal tidak letter', 'Bebek', 'Pendek ', 10, 'Tidak ada', 10, 'Tidak ada'),
(14650055, 4, 2, 55, 'normal', 'kecil', 'pendek', 10, 'dekat paha', 1, 'tidak ada'),
(14650067, 5, 2, 78, 'normal', 'lebar', 'Pendek', 10, 'Tidak ada', 0, 'Tidak ada'),
(14650099, 6, 2, 65, 'lurus', 'berwarna putih sedikit pa', 'kecil kecil', 10, 'gak ada', 0, 'gak ada'),
(14650103, 7, 2, 80, 'normal', 'lebar', 'pendek', 10, 'kecil', 1, 'tidak ada'),
(14650027, 8, 2, 150, 'panjang dan kuat', 'lebar', 'kecil kecil', 10, '-', 0, '-'),
(14650053, 9, 2, 100, 'panjang dan kuat', 'lebar', 'kecil kecil', 10, '-', 0, '-'),
(14650096, 10, 2, 50, '0', 'lonjong', 'gemuk lebar', 10, 'tidak ada', 0, 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE IF NOT EXISTS `kepala` (
  `nim` int(100) NOT NULL,
`id_kepala` int(100) NOT NULL,
  `bentuk_kerangka` varchar(25) NOT NULL,
  `ciri_mata` varchar(25) NOT NULL,
  `jumlah_mata` int(2) NOT NULL,
  `ciri_hidung` varchar(25) NOT NULL,
  `ciri_bibir` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `ciri_telinga` varchar(25) NOT NULL,
  `jumlah_telinga` int(2) NOT NULL,
  `ciri_rambut` varchar(25) NOT NULL,
  `ciri_tahilalat` varchar(25) NOT NULL,
  `jumlah_tahilalat` int(100) NOT NULL,
  `ciri_jenggot` varchar(25) NOT NULL,
  `ciri_kumis` varchar(25) NOT NULL,
  `rumus_gigi` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`nim`, `id_kepala`, `bentuk_kerangka`, `ciri_mata`, `jumlah_mata`, `ciri_hidung`, `ciri_bibir`, `ciri_cacat`, `ciri_telinga`, `jumlah_telinga`, `ciri_rambut`, `ciri_tahilalat`, `jumlah_tahilalat`, `ciri_jenggot`, `ciri_kumis`, `rumus_gigi`) VALUES
(14650027, 1, 'Bulat', 'Oval', 2, 'kecil', 'kecil', 'tidak ada', 'oval', 2, 'hitam tebal', 'dekat bibir', 2, 'tidak tebal', 'tidak tebal', '231emdaks'),
(14650092, 2, 'bulat', 'bulat besar', 2, 'pendek', 'tebal', 'minus atau rabun jauh', 'kurang menonjol', 2, 'hitam tebal dan lurus', 'dibawah hidung dan di pip', 3, 'tidak ada', 'tipis', '32'),
(14650018, 3, 'Normal', 'bulat besar', 1, 'Pesek', 'Kecil', 'Tidak Ada', 'Berukuran Sedang', 1, 'hitam tebal dan Tidak ber', 'Kecil', 10, 'Pendek dan tipis', 'Tebal', '231emdaks'),
(14650018, 6, 'lLlL', 'L', 0, 'L', 'L', 'L', 'L', 0, 'L', 'L', 0, 'L', 'L', 'L'),
(14650055, 7, 'bulat', 'oval', 2, 'pendek', 'tebal', 'Tidak Ada', 'oval', 2, 'sedang dan ikal', 'dekat mata dan bibir', 2, 'tidak ada', 'tipis', '32'),
(14650067, 8, 'bulat', 'bulat besar', 2, 'panjang', 'tebal', 'Tidak Ada', 'oval', 2, 'gelombang, hitam, pendek', 'dibawah mata dan mulut', 50, 'tidak ada', 'tidak ada', '231emdaks'),
(14650099, 9, 'oval', 'lebar', 2, 'pendek', 'tipis', 'gak ada', 'kurang menonjol', 2, 'lurus hitam', 'keccil bulat', 1, 'tipis', 'tipis', 'bagus'),
(14650103, 10, 'bulat', 'Bulat', 2, 'tidak tinggi', 'tebal', 'Tidak Ada', 'lebar', 2, 'kriting', 'kecil', 4, 'tidak ada', 'tidak ada', '231emdaks'),
(14650053, 11, 'bulat ', 'sipit', 2, 'mancung', 'tipis', '-', 'Sedang', 2, 'lurus hitam', '-', 0, 'tipis', 'tipis', '231emdaks'),
(14650053, 12, 'bulat', 'sipit', 2, 'mancung', 'tipis', '-', 'normal', 2, 'lurus hitam', '-', 0, 'tipis', 'tipis', 'normal'),
(14650096, 13, 'bulat', 'sipit', 2, 'kecil', 'sedang', 'rabun jauh', 'sedng', 2, 'gelombang', 'tidak ada', 0, 'tidak ada', 'tidak ada', '32');

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian`
--

CREATE TABLE IF NOT EXISTS `kepribadian` (
  `nim` int(100) NOT NULL,
`id_kepribadian` int(100) NOT NULL,
  `teman_akrab` varchar(100) NOT NULL,
  `komunitas` varchar(100) NOT NULL,
  `tipe_pergaulan` varchar(100) NOT NULL,
  `suka_marah` varchar(25) NOT NULL,
  `suka_mengantuk` varchar(25) NOT NULL,
  `suka_bercanda` varchar(25) NOT NULL,
  `suka_menangis` varchar(25) NOT NULL,
  `suka_baper` varchar(25) NOT NULL,
  `suka_curiga` varchar(25) NOT NULL,
  `suka_jatuh_cinta` varchar(25) NOT NULL,
  `punya_pacar` varchar(25) NOT NULL,
  `suka_ibadah` varchar(25) NOT NULL,
  `suka_penasaran` varchar(25) NOT NULL,
  `suka_game` varchar(25) NOT NULL,
  `suka_filosofi` varchar(25) NOT NULL,
  `peka_lingkungan` varchar(25) NOT NULL,
  `suka_amal` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepribadian`
--

INSERT INTO `kepribadian` (`nim`, `id_kepribadian`, `teman_akrab`, `komunitas`, `tipe_pergaulan`, `suka_marah`, `suka_mengantuk`, `suka_bercanda`, `suka_menangis`, `suka_baper`, `suka_curiga`, `suka_jatuh_cinta`, `punya_pacar`, `suka_ibadah`, `suka_penasaran`, `suka_game`, `suka_filosofi`, `peka_lingkungan`, `suka_amal`) VALUES
(14650027, 1, 'Rahmad Gembira Simamora', 'Webounder', 'bebas asal sopan dan santun', 'kadang kadang', 'iya', 'iya', 'tidak', 'tidak', 'iya', 'tidak', 'sudah punya', 'iya', 'besar', 'iya', 'iya', 'Kurang tau', 'iya'),
(14650092, 2, 'Revena Sulisnawati', 'Himakal', 'bebas asal bisa jaga diri, sopan, adanya tata krama', 'iya', 'iya', 'iya', 'ya', 'ya', 'jarang', 'tiidak', 'single', 'iya', 'besar', 'tidak', 'tidak juga', 'banget', 'kadang'),
(14650018, 3, 'Fitriana Putri Hamidiyah', 'Eth0', 'Flexible', 'Tidak', 'Tidak', 'Iya', 'Tidak', 'Tidak', 'Iya', 'Iya', 'Tidak', 'Iya', 'Sangat Penasaran', 'Suka', 'Iya', 'Sangat Peduli', 'Suka'),
(14650055, 4, 'fajar afisyah', 'HMJ TI 2015', 'bebas asal bisa jaga diri, sopan, adanya tata krama', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'tidak', 'sigle', 'iya', 'besar', 'tidak', 'tidak', 'Sangat Peduli', 'iya'),
(14650067, 5, 'Anisa Kurniawati', 'Tidak ada', 'bebas asal bisa jaga diri, sopan, adanya tata krama', 'iya', 'Tidak', 'iya', 'iya', 'iya', 'iya', 'Iya', 'single', 'iya', 'besar', 'Suka', 'Iya', 'besar', 'iya'),
(14650099, 6, 'hanafi fandi dkk', 'gak ada', 'tidak', 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'single', 'ya', '80 persen', 'ya', 'tidak', '40 persen', 'ya'),
(14650103, 7, 'siti syamsiyah', 'Tidak ada', 'bebas asal bisa jaga diri, sopan, adanya tata krama', 'tidak', 'iya', 'iya', 'Tidak', 'Tidak', 'iya', 'tidak', 'single', 'iya', 'sangat tinggi', 'suka', 'lumayan', 'Sangat Peduli', 'iya'),
(14650053, 8, 'semuanya', '-', 'kondisional', 'ya', 'tidak', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'sangat tinggi', 'ya', '-', 'Sangat Peduli', 'jarang'),
(14650096, 9, 'tidak ada', 'tidak ikut apa-apa', 'tidak bebas', 'tidak', 'tidak', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'single', 'ya', 'ilmu 100 persen', 'ya', 'ya', 'peduli', 'sedang');

-- --------------------------------------------------------

--
-- Table structure for table `kesukaan`
--

CREATE TABLE IF NOT EXISTS `kesukaan` (
  `nim` int(100) NOT NULL,
`id_kesukaan` int(100) NOT NULL,
  `makanan_favorit` varchar(100) NOT NULL,
  `minuman_favorit` varchar(100) NOT NULL,
  `rokok_favorit` varchar(100) NOT NULL,
  `buku_favorit` varchar(100) NOT NULL,
  `musik_favorit` varchar(100) NOT NULL,
  `film_favorit` varchar(100) NOT NULL,
  `artis_favorit` varchar(100) NOT NULL,
  `cafe_favorit` varchar(100) NOT NULL,
  `menu_favorit_cafe` varchar(100) NOT NULL,
  `rumah_makan_favorit` varchar(100) NOT NULL,
  `menu_favorit` varchar(100) NOT NULL,
  `makanan_ringan_favorit` varchar(100) NOT NULL,
  `minuman_ringan_favorit` varchar(100) NOT NULL,
  `tempat_liburan_favorit` varchar(100) NOT NULL,
  `suasana_belajar_favorit` varchar(100) NOT NULL,
  `hobi_favorit` varchar(100) NOT NULL,
  `profesi_favorit` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesukaan`
--

INSERT INTO `kesukaan` (`nim`, `id_kesukaan`, `makanan_favorit`, `minuman_favorit`, `rokok_favorit`, `buku_favorit`, `musik_favorit`, `film_favorit`, `artis_favorit`, `cafe_favorit`, `menu_favorit_cafe`, `rumah_makan_favorit`, `menu_favorit`, `makanan_ringan_favorit`, `minuman_ringan_favorit`, `tempat_liburan_favorit`, `suasana_belajar_favorit`, `hobi_favorit`, `profesi_favorit`) VALUES
(14650027, 1, 'Tempe goreng', 'teh hangat', 'Marlboro', 'Web tutorial', 'haruskah ku mati karena mu dari ada band', 'Save Private Ryan', 'raisya', 'Jemblung 2', 'Chococino', 'Warung Tante', 'Ayam dan tempe goreng', 'Sponge', 'Kopi Goodday', 'Pegunungan', 'Dengan musik', 'jogging', 'Programmer Web'),
(14650092, 2, 'sumer jengkol, sambel usus pete, tempe, rendang sapi, sarden, sotong, capjay dan soup', 'exstra joss susu, capcin, jus sirsak, dan air putih', 'tidak ada', 'donald bebek', 'sexy dance, bang bang bang, goodboy, ringa linga dan buat aku tersenyum', 'merried without dating atau darama korea', 'taeyang dan jiyeon', 'bingsoo', 'patbingsoo', 'mie jogging', 'mie banget', 'aichiro', 'lasegar', 'pantai', 'didaerah persawahan dan gunung dengan udara segar', 'jalan-jalan, mantai, belanja', 'wirausahawan dan penyanyi'),
(14650018, 3, 'Nasi Goreng Jawa', 'Es Jeruk', 'Tidak Ada', 'JAVA dan WEB Programming', 'Wali', 'Naruto', 'Tidak Ada', 'Love Story', 'Kopi', 'Tidak Ada', 'Tidak Ada', 'Bakpia dan Krispi', 'Air Putih', 'Tidak Ada', 'Tenang', 'Main Komputer dan Renang', 'Web Developer'),
(14650055, 4, 'Nasi Goreng Jawa', 'teh', 'Tidak Ada', 'novel', 'exo/k-pop', 'love pure', 'exo', 'makcik', 'ice cream', 'ipk', 'ayam keprek ipk 4', 'snack', 'fanta', 'pantai dan pegunungan', 'tenang', 'nonto drama korea', 'pns'),
(14650067, 5, 'bakso,soto,lalapan', 'teh', 'Tidak Ada', 'novel', 'jazz dan dangdut', 'drama korea', 'kim jongin', 'bingsoo', 'ramen', 'ipk', 'ayam keprek ipk 4', 'aichiro', 'Air Putih', 'pantai', 'Tenang', 'jalan-jalan,belanja,hunting', 'wirausaha'),
(14650099, 6, 'mie', 'teh', 'surya 16', 'php mysql', 'birunay cinta', 'bola', 'sasha alexa', 'bumbung cafe', 'kopi ijo', 'mak par', 'lalpan', 'gorengan', 'mineral', 'pantai', 'sunyi', 'nongkrong', 'proggrammer'),
(14650103, 7, 'mie instan,snack,gorengan dan makanan ringan lainnya', 'teh dan susu', 'Tidak Ada', 'novel sejarah teodora,sejarah peradapan islam,', 'regae,tembang jowo,pop,', 'negeri lima menara, 5cm,naruto,one piech', 'agnes monica', 'makcik', 'larva peanut', 'ipk dkeprek', 'telor tahu tempe keprek', 'pocky', 'tebs', 'pantai dan pegunungan', 'sendiri tapi sambil mendengarkan musik', 'voli dan membaca', 'wirausaha'),
(14650053, 8, 'yang berhubungan dengan daging', 'kopi', 'surya 16', 'JAVA dan WEB Programming', 'hip-hop fundation', '-', '-', 'kijang', 'kopi ijo susu', '-', '-', '-', '-', 'sedudo', 'ful musik', 'ngoding', 'proggrammer'),
(14650096, 9, 'pecel', 'air putih', 'tidak', 'non fiksi', 'tidak ada', 'kera sakti', 'tidak ada', 'tidak ada', 'tidak aada', 'tidak ada', 'tidak ada', 'keripik pisang', 'es jeruk', 'puncak', 'hening', 'tidur', 'profesor');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `nim` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`nim`, `nama_lengkap`) VALUES
(14650018, 'afrizal'),
(14650027, 'M Galang Arbi S'),
(14650053, 'wangga surya putra'),
(14650055, 'Dewi Isnaini'),
(14650067, 'Dinar Candraning Pradanti'),
(14650085, 'Malik Fajar'),
(14650092, 'Dian Eka Prastyawati'),
(14650096, 'siska puspitaningsih'),
(14650099, 'masfuadi iskandar syah'),
(14650103, 'Lia Andini Yunimurti');

-- --------------------------------------------------------

--
-- Table structure for table `polahidup`
--

CREATE TABLE IF NOT EXISTS `polahidup` (
  `nim` int(100) NOT NULL,
`id_pola` int(100) NOT NULL,
  `jam_bangun` varchar(25) NOT NULL,
  `jam_tidur` varchar(25) NOT NULL,
  `perokok` varchar(25) NOT NULL,
  `begadang` varchar(25) NOT NULL,
  `menonton_film` varchar(25) NOT NULL,
  `mendengar_musik` varchar(25) NOT NULL,
  `jam_menonton` varchar(25) NOT NULL,
  `jam_mendengar` varchar(25) NOT NULL,
  `belajar` varchar(25) NOT NULL,
  `jam_belajar` varchar(25) NOT NULL,
  `tipe_belajar` varchar(25) NOT NULL,
  `olahraga` varchar(25) NOT NULL,
  `jam_olahraga` varchar(25) NOT NULL,
  `nongkrong` varchar(25) NOT NULL,
  `jam_nongkrong` varchar(25) NOT NULL,
  `makan` varchar(25) NOT NULL,
  `jam_makan` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polahidup`
--

INSERT INTO `polahidup` (`nim`, `id_pola`, `jam_bangun`, `jam_tidur`, `perokok`, `begadang`, `menonton_film`, `mendengar_musik`, `jam_menonton`, `jam_mendengar`, `belajar`, `jam_belajar`, `tipe_belajar`, `olahraga`, `jam_olahraga`, `nongkrong`, `jam_nongkrong`, `makan`, `jam_makan`) VALUES
(14650027, 1, 'Jam 4 Pagi', 'Jam 9 Malam', 'Kadang kadang', 'Kadang kadang', 'Ya', 'Ya', 'Sesukanya', 'jam 8 malam', 'rajin', 'jam 7 malam', 'dengan musik', 'seminggu sekali', 'jam 4 sore', 'sering', 'jam 9 malam', '2 kali sehari', 'jam 12 siang dan jam 6 so'),
(14650092, 4, 'jam 4 pagi', 'jam 11 atau 12 malam', 'tidak', 'ya', 'suka', 'suka', 'sesukanya', 'sesukanya', 'lumayan', 'jam 7 malam dan subuh', 'dengar musik dan ngemil', 'kadang', 'setengah 6', 'sering', 'jam 4 sore', '2 kali', '12 siang dan 6 malam'),
(14650018, 5, 'Jam 4 Pagi', 'Jam 12 Malam', 'Tidak', 'Tidak Suka', 'Suka', 'Suka', '10 Malam', 'Tiap Saat', 'Rajin', '7 Malam', 'Santai', 'Sering', '4 Sore', 'Tidak', 'Tidak', '3 Kali Sehari', '6 Pagi,12 Siang dan 10 Ma'),
(14650055, 6, 'Jam 4 Pagi', 'jam 11 malam', 'tidak', 'suka', 'suka', 'suka', 'jam 5 sore', 'jam 8 malam', 'tidak', 'jam 6 sore', 'berkelompok dan sambil me', 'sering', 'jam 4.30 pagi', 'sering', 'jam 4 sore', '3 Kali Sehari', '7 pagi, 2 siang, dan 8 ma'),
(14650067, 7, '5 pagi', '10 malam', 'Tidak', 'Tidak Suka', 'Suka', 'Suka', '4 sore', '7 malam', 'Rajin', 'jam 7 malam ', 'berkelompok ', 'Sering', 'setengah 6 pagi', 'sering', '3 sore', '2 kali', '10 pagi dan 7 malam'),
(14650099, 8, '5', '12', 'ya', 'ya', 'tidak', 'ya', 'gak ada', '8 malam', 'ya', '7', 'belajar web', 'gak pernah', 'gak ada', 'ya', 'jam 3 sore', '3', 'jam 7 pagi 4 sore 9 malam'),
(14650103, 9, 'Jam 4 Pagi', 'jam 11 atau 12 malam', 'Tidak', 'ya', 'suka', 'suka', 'jam 7 malam', 'jam 8 malam', 'rajin', 'jam 7 malam dan subuh', 'berkelompok dan sambil me', 'seminggu sekali', 'jam 5.30 pagi', 'sering', 'jam 3 sore', '3 Kali Sehari', 'jam 9 pagi,1 siang,6 mala'),
(14650053, 10, '5', '9', 'ya', 'ya', 'tidak', 'ya', '-', '-', '-', '-', 'warung kopi, sanati neng ', '1', '-', 'ya', '-', '2', 'kondisional'),
(14650096, 11, '3', '1', 'tidak', 'tdak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', '10', 'otodidak', 'tidak sering', '7', 'tidak', 'tidak ', 'sehari sekali', 'sore');

-- --------------------------------------------------------

--
-- Table structure for table `tangan`
--

CREATE TABLE IF NOT EXISTS `tangan` (
  `nim` int(100) NOT NULL,
`id_tangan` int(100) NOT NULL,
  `jumlah_tangan` int(2) NOT NULL,
  `lebar_lengan` int(100) NOT NULL,
  `panjang_lengan` int(100) NOT NULL,
  `ciri_jari` varchar(25) NOT NULL,
  `jumlah_jari` int(11) NOT NULL,
  `tanda_khusus` varchar(25) NOT NULL,
  `ciri_cacat` varchar(25) NOT NULL,
  `rumus_sidik_jari` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangan`
--

INSERT INTO `tangan` (`nim`, `id_tangan`, `jumlah_tangan`, `lebar_lengan`, `panjang_lengan`, `ciri_jari`, `jumlah_jari`, `tanda_khusus`, `ciri_cacat`, `rumus_sidik_jari`) VALUES
(14650027, 1, 2, 15, 60, 'Pendek', 10, 'Tidak ada', 'Tidak ada', 'mdekancxo2'),
(14650092, 2, 2, 14, 45, 'pendek', 10, 'tidak ada', 'tidak ada', 'loop'),
(14650018, 3, 1, 40, 15, 'Normal dan Lengkap', 10, 'Tidak Ada', 'Tidak Ada', 'mdekancxo2'),
(14650055, 4, 2, 8, 20, 'pendek', 10, 'tidak ada', 'tidak ada', 'double loop'),
(14650067, 5, 2, 11, 45, 'pendek', 10, 'Tidak Ada', 'Tidak Ada', 'mdekancxo2'),
(14650099, 6, 2, 6, 19, 'panjang', 10, 'kecil ', 'gak ada', 'kecil'),
(14650103, 7, 2, 30, 70, 'panjang', 10, 'tidak ada', 'tidak ada', 'loop'),
(14650027, 8, 2, 10, 50, 'panjang', 10, '-', '-', '-'),
(14650053, 9, 2, 10, 50, 'besar', 10, '-', 'jahitan', '-'),
(14650096, 10, 2, 5, 10, 'panjang', 10, 'bengkong', 'tidak ada', 'bulat');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `nim` int(100) NOT NULL,
`id_video` int(100) NOT NULL,
  `nama_video` varchar(25) NOT NULL,
  `keterangan_video` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123464 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`nim`, `id_video`, `nama_video`, `keterangan_video`, `video`) VALUES
(14650092, 3, 'el-chaura', 'sahabatku', '105021.mp4'),
(14650018, 9, 'Foto Kebiasaan Makan', 'Kategori Psisikis Kebiasaan', '768024.mp4'),
(14650018, 10, 'pengenalan diri', 'Kategori Psikis', 'pengenalan diri'),
(14650055, 14, '4', 'foto kelas ppba b-10', '4.mp4'),
(14650055, 15, '5', 'sama sahabat', '5.mp4'),
(14650055, 16, '6', 'reuni sma kelas 2', '6.mp4'),
(14650092, 24, 'imut', 'lia dan aku', 'imut.mp4'),
(14650092, 25, 'EC', 'reunian', 'EC.mp4'),
(14650092, 26, 'JALAN', 'al-rifaie', 'JALAN.mp4'),
(14650092, 27, 'TEMAN', 'teman dan keluarga', 'TEMAN.mp4'),
(14650055, 28, '1', 'ayah dan ibu', '1.mp4'),
(14650055, 29, '2', 'aku', '2.mp4'),
(14650055, 30, '3', 'outbound osjur 2015', '3.mp4'),
(14650055, 31, '7', 'ultah temen', '7.mp4'),
(14650067, 32, 'dinar1', 'kumpulan fotoku', 'dinar1.mp4'),
(14650067, 33, 'dinar2', 'nunggu dosen', 'dinar2.mp4'),
(14650067, 34, 'dinar3', 'kita bersama', 'dinar3.mp4'),
(14650055, 35, 'dewi1', 'nunggu dosen', 'dewi1.mp4'),
(14650055, 36, 'dewi2', 'kita bersama', 'dewi2.mp4'),
(14650018, 123, 'riwayat pendidikan', 'Kategori Data Psikis', 'riwayat pendidikan'),
(14650018, 1234, 'video anatomi', 'Kategori Data Anatomi', 'video anatomi'),
(14650099, 12333, 'masfuadi.3gp', 'video diri', 'masfuadi.3gp'),
(14650018, 123345, 'Makanan Favorit', 'Kategori Data Psikis', 'Makanan Favorit'),
(14650018, 123456, 'video menyanyi', 'Kategori Data Psikis', 'video menyanyi'),
(14650092, 123458, 'PPBI', 'ppbi yuk', 'PPBI.mp4'),
(14650092, 123459, 'NUNGGU', 'nungguin dosen', 'NUNGGU.mp4'),
(14650092, 123460, 'OTWKELAS', 'berangkat kuliah', 'OTWKELAS.mp4'),
(14650067, 123461, 'dinar4', 'traktiran di post ketan', 'dinar4.mp4'),
(14650067, 123462, 'dinar5', 'otw kampus', 'dinar5.mp4'),
(14650053, 123463, '14650053_2', 'belajar ngoding', '792475.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badan`
--
ALTER TABLE `badan`
 ADD PRIMARY KEY (`id_badan`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
 ADD PRIMARY KEY (`id_ciri`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id_foto`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `kaki`
--
ALTER TABLE `kaki`
 ADD PRIMARY KEY (`id_kaki`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `kepala`
--
ALTER TABLE `kepala`
 ADD PRIMARY KEY (`id_kepala`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `kepribadian`
--
ALTER TABLE `kepribadian`
 ADD PRIMARY KEY (`id_kepribadian`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `kesukaan`
--
ALTER TABLE `kesukaan`
 ADD PRIMARY KEY (`id_kesukaan`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `polahidup`
--
ALTER TABLE `polahidup`
 ADD PRIMARY KEY (`id_pola`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `tangan`
--
ALTER TABLE `tangan`
 ADD PRIMARY KEY (`id_tangan`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id_video`), ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badan`
--
ALTER TABLE `badan`
MODIFY `id_badan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
MODIFY `id_ciri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
MODIFY `id_foto` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT for table `kaki`
--
ALTER TABLE `kaki`
MODIFY `id_kaki` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kepala`
--
ALTER TABLE `kepala`
MODIFY `id_kepala` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kepribadian`
--
ALTER TABLE `kepribadian`
MODIFY `id_kepribadian` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kesukaan`
--
ALTER TABLE `kesukaan`
MODIFY `id_kesukaan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `polahidup`
--
ALTER TABLE `polahidup`
MODIFY `id_pola` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tangan`
--
ALTER TABLE `tangan`
MODIFY `id_tangan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id_video` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123464;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `badan`
--
ALTER TABLE `badan`
ADD CONSTRAINT `badan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ciri_umum`
--
ALTER TABLE `ciri_umum`
ADD CONSTRAINT `ciri_umum_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kaki`
--
ALTER TABLE `kaki`
ADD CONSTRAINT `kaki_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kepala`
--
ALTER TABLE `kepala`
ADD CONSTRAINT `kepala_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kepribadian`
--
ALTER TABLE `kepribadian`
ADD CONSTRAINT `kepribadian_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kesukaan`
--
ALTER TABLE `kesukaan`
ADD CONSTRAINT `kesukaan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `polahidup`
--
ALTER TABLE `polahidup`
ADD CONSTRAINT `polahidup_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tangan`
--
ALTER TABLE `tangan`
ADD CONSTRAINT `tangan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `master` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
