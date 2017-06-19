-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: tokoku
-- ------------------------------------------------------
-- Server version	5.5.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barangbeli`
--

DROP TABLE IF EXISTS `barangbeli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barangbeli` (
  `kdbrg` varchar(50) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrbbrg` int(100) NOT NULL,
  `qtybrg` int(100) NOT NULL,
  `totbeli` int(100) NOT NULL,
  `tglbeli` varchar(50) NOT NULL,
  `opt` int(100) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `opt` (`opt`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangbeli`
--

LOCK TABLES `barangbeli` WRITE;
/*!40000 ALTER TABLE `barangbeli` DISABLE KEYS */;
INSERT INTO `barangbeli` VALUES ('100','Agua Balon Refil 19lt',11500,12,138000,'2012-12-03',1);
/*!40000 ALTER TABLE `barangbeli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangjual`
--

DROP TABLE IF EXISTS `barangjual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barangjual` (
  `nom` int(10) NOT NULL AUTO_INCREMENT,
  `kdbrg` varchar(50) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrbrg` int(100) NOT NULL,
  `bybrg` int(100) NOT NULL,
  `tobrg` int(100) NOT NULL,
  `kdjual` varchar(100) NOT NULL,
  `tgljual` varchar(100) NOT NULL,
  `setor` int(100) NOT NULL,
  `fus` enum('0','1') NOT NULL DEFAULT '0',
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangjual`
--

LOCK TABLES `barangjual` WRITE;
/*!40000 ALTER TABLE `barangjual` DISABLE KEYS */;
INSERT INTO `barangjual` VALUES (1,'100','Agua Balon Refil 19lt',12500,1,12500,'1232012-12-0311:22:48','2012-12-03',1,'1');
/*!40000 ALTER TABLE `barangjual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangtoko`
--

DROP TABLE IF EXISTS `barangtoko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barangtoko` (
  `kdbrg` varchar(50) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrbrg` int(100) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `opt` int(10) NOT NULL,
  PRIMARY KEY (`kdbrg`),
  UNIQUE KEY `nmbrg` (`nmbrg`),
  CONSTRAINT `barangtoko_ibfk_1` FOREIGN KEY (`kdbrg`) REFERENCES `stoktoko` (`kdbrg`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `barangtoko_ibfk_2` FOREIGN KEY (`nmbrg`) REFERENCES `stoktoko` (`nmbrg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangtoko`
--

LOCK TABLES `barangtoko` WRITE;
/*!40000 ALTER TABLE `barangtoko` DISABLE KEYS */;
INSERT INTO `barangtoko` VALUES ('100','Agua Balon Refil 19lt',12500,'',0);
/*!40000 ALTER TABLE `barangtoko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keranjang`
--

DROP TABLE IF EXISTS `keranjang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keranjang` (
  `no` int(50) NOT NULL AUTO_INCREMENT,
  `kdbrg` int(50) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrbrg` int(50) NOT NULL,
  `bybrg` int(50) NOT NULL,
  `tobrg` int(50) NOT NULL,
  `idksr` varchar(50) NOT NULL,
  `kdjual` varchar(50) NOT NULL,
  `tgljual` varchar(100) NOT NULL,
  `onksr` enum('Y','N') NOT NULL DEFAULT 'Y',
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keranjang`
--

LOCK TABLES `keranjang` WRITE;
/*!40000 ALTER TABLE `keranjang` DISABLE KEYS */;
INSERT INTO `keranjang` VALUES (1,100,'Agua Balon Refil 19lt',12500,1,12500,'123','1232012-12-0311:22:48','2012-12-03','N');
/*!40000 ALTER TABLE `keranjang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menutoko`
--

DROP TABLE IF EXISTS `menutoko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menutoko` (
  `id` tinyint(3) NOT NULL,
  `id_menu` tinyint(3) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `img_menu` varchar(100) NOT NULL,
  `url_menu` varchar(100) NOT NULL,
  `level_menu` varchar(10) NOT NULL,
  `opt_menu` varchar(50) NOT NULL,
  `event` varchar(100) NOT NULL,
  `od_menu` tinyint(3) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menutoko`
--

LOCK TABLES `menutoko` WRITE;
/*!40000 ALTER TABLE `menutoko` DISABLE KEYS */;
INSERT INTO `menutoko` VALUES (1,0,'Gerai','img/places.png','meja.php','AU','Beranda Toko','',1),(2,0,'Kasir','img/basket.png','#','AU','Kasir Toko','',2),(3,0,'Manajer','img/user_suit.png','#','A','Manajer Toko','',3),(4,0,'User','img/user_go.png','#','AU','User Toko','#',4),(5,0,'Keluar','img/exit.png','keluartoko.php','AU','Keluar','onClick=\"return confirm(\'Ingin Keluar?\')\"',6),(6,3,'Harga Barang','img/money_dollar.png','meja.php?kertas=harga','AU','harga','',3),(7,2,'Setoran Kasir','img/coins_in_hand.png','meja.php?kertas=setoran','AU','setoran','',3),(8,3,'Koreksi','img/price_comparison.png','#','A','koreksi','',5),(9,3,'Stok','img/carton.png','meja.php?kertas=stok','A','stok','',2),(10,3,'Penjualan','img/shopping_basket.png','meja.php?kertas=penjualan','A','penjualan','',4),(11,3,'Pembelian','img/shopping_cart.png','meja.php?kertas=pembelian','A','pembelian','',1),(12,4,'Profil','img/account.png','meja.php?kertas=profil','AU','profil','',1),(13,4,'Tambah User','img/user_add.png','meja.php?kertas=tambah_user','A','tambah_user','',4),(14,4,'Ubah Password','img/change_password.png','meja.php?kertas=ubah_password','AU','ubah_password','',2),(15,4,'Rekap Setoran','img/company_generosity.png','meja.php?kertas=rekap_setoran','AU','rekap_setoran','',3),(16,2,'Mesin Kasir','img/cash_register.png','meja.php?kertas=mesin_kasir','AU','mesin_kasir','',1),(17,18,'Info Program','img/php.png','meja.php?kertas=info_program','AU','info_program','',3),(18,3,'Info Toko','img/safebox.png','#','A','toko','',6),(20,18,'Setelan Toko','img/street_stall.png','meja.php?kertas=info_toko','A','info_toko','',1),(21,18,'Backup Data','img/database_save.png','tko/backuptoko.php','A','backup','',2),(22,8,'Cek Stok','img/package.png','meja.php?kertas=cstok','A','cstok','',1),(23,8,'Setoran','img/total_plan_cost.png','meja.php?kertas=setor','A','setor','',2),(24,8,'Laba-rugi','img/money_bag.png','meja.php?kertas=laru','A','laru','',3);
/*!40000 ALTER TABLE `menutoko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setoran`
--

DROP TABLE IF EXISTS `setoran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setoran` (
  `kode_kasir` varchar(100) NOT NULL,
  `tgl_jual` varchar(50) NOT NULL,
  `tgl_setor` varchar(50) NOT NULL,
  `jum_jual` int(50) NOT NULL,
  `jum_setor` int(100) NOT NULL,
  `selisih` int(50) NOT NULL,
  `setor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setoran`
--

LOCK TABLES `setoran` WRITE;
/*!40000 ALTER TABLE `setoran` DISABLE KEYS */;
INSERT INTO `setoran` VALUES ('123','2012-12-03','2012-12-03',12500,12500,0,0);
/*!40000 ALTER TABLE `setoran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stoktoko`
--

DROP TABLE IF EXISTS `stoktoko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stoktoko` (
  `kdbrg` varchar(50) NOT NULL,
  `nmbrg` varchar(100) NOT NULL,
  `stlama` int(100) NOT NULL,
  `tglama` varchar(100) NOT NULL,
  `stbaru` int(100) NOT NULL,
  `tgbaru` varchar(100) NOT NULL,
  `tstok` int(100) NOT NULL,
  `nstok` int(10) NOT NULL COMMENT 'stok real (nyata) di toko',
  `tgl_nstok` varchar(11) NOT NULL,
  `jbk` varchar(100) NOT NULL COMMENT 'status antara tstok dan nstok +/-',
  `jhk` varchar(100) NOT NULL,
  PRIMARY KEY (`kdbrg`),
  UNIQUE KEY `nmbrg` (`nmbrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stoktoko`
--

LOCK TABLES `stoktoko` WRITE;
/*!40000 ALTER TABLE `stoktoko` DISABLE KEYS */;
INSERT INTO `stoktoko` VALUES ('100','Agua Balon Refil 19lt',-1,'',12,'2012-12-03',11,11,'2012-12-03','0','0');
/*!40000 ALTER TABLE `stoktoko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toko`
--

DROP TABLE IF EXISTS `toko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toko` (
  `toko` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `opt1` varchar(50) NOT NULL,
  `opt2` int(10) NOT NULL,
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toko`
--

LOCK TABLES `toko` WRITE;
/*!40000 ALTER TABLE `toko` DISABLE KEYS */;
INSERT INTO `toko` VALUES ('BERKAH JAYA','Jl. Rahmat Alam No. 23 Bogor','(0251) 6354221','0',0);
/*!40000 ALTER TABLE `toko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertoko`
--

DROP TABLE IF EXISTS `usertoko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertoko` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `ksandi` varchar(100) NOT NULL,
  `id_sesi` varchar(100) NOT NULL,
  `level_user` enum('A','U') NOT NULL DEFAULT 'U',
  `opt_user` varchar(50) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertoko`
--

LOCK TABLES `usertoko` WRITE;
/*!40000 ALTER TABLE `usertoko` DISABLE KEYS */;
INSERT INTO `usertoko` VALUES ('123','Admin','21232f297a57a5a743894a0e4a801fc3','e7sm4s48fgts35rk1ejetpibi0','A','ADM'),('222','Manager','1d0258c2440a8d19e716292b231e3190','khkkutii88k6fg0m2eh1jk7pc4','A','MGR'),('500','Kasir','c7911af3adbd12a035b289556d96470a','kpp75kuuuabgselgl1uv29mgf3','U','KSR');
/*!40000 ALTER TABLE `usertoko` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-10 19:05:45
