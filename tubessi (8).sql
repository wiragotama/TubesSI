-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 06:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubessi`
--
CREATE DATABASE IF NOT EXISTS `tubessi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tubessi`;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE IF NOT EXISTS `inventaris` (
  `id_inventaris` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `jumlah_terpakai` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_inventaris`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `harga_satuan`, `jumlah_barang`, `tanggal_pembelian`, `jumlah_terpakai`) VALUES
(1, 'shampoo', 25000, 3, '2015-04-08', 0),
(2, 'cat rambut', 50000, 2, '2015-04-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kas bon`
--

CREATE TABLE IF NOT EXISTS `kas bon` (
  `id_bon` int(11) NOT NULL AUTO_INCREMENT,
  `id_peminjam` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_bon`),
  KEY `id_peminjam` (`id_peminjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kas bon`
--

INSERT INTO `kas bon` (`id_bon`, `id_peminjam`, `jumlah`, `tanggal`) VALUES
(8, 1, 2000, '2015-04-14'),
(9, 1, 0, '2015-04-15'),
(10, 1, 0, '2015-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_pelayanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama`, `harga`) VALUES
(1, 'potong rambut', 50000),
(2, 'cuci rambut', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_payment`
--

CREATE TABLE IF NOT EXISTS `transaksi_payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `total_dibayarkan` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_record` int(11) NOT NULL,
  PRIMARY KEY (`id_payment`,`id_record`),
  KEY `id_kasir` (`id_kasir`),
  KEY `id_record` (`id_record`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `transaksi_payment`
--

INSERT INTO `transaksi_payment` (`id_payment`, `total_dibayarkan`, `id_kasir`, `id_record`) VALUES
(1, 0, 1, 1),
(1, 50000, 1, 71),
(2, 50000, 1, 71),
(3, 50000, 1, 71),
(4, 50000, 1, 71),
(5, 50000, 1, 71),
(6, 50000, 1, 71),
(7, 50000, 1, 71),
(28, 920000, 1, 72);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_record`
--

CREATE TABLE IF NOT EXISTS `transaksi_record` (
  `id_record` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `harga_total` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `jumlah_dilayani` int(11) NOT NULL DEFAULT '1',
  `tergaji` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_record`),
  KEY `id_petugas` (`id_petugas`),
  KEY `id_petugas_2` (`id_petugas`),
  KEY `id_petugas_3` (`id_petugas`),
  KEY `id_pelayanan` (`id_pelayanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `transaksi_record`
--

INSERT INTO `transaksi_record` (`id_record`, `id_petugas`, `tanggal`, `harga_total`, `id_pelayanan`, `jumlah_dilayani`, `tergaji`) VALUES
(1, 1, '2015-04-08', 50000, 1, 1, 1),
(40, 1, '2015-04-14', 40000, 2, 32, 1),
(41, 1, '2015-04-14', 40000, 2, 32, 1),
(42, 1, '2015-04-14', 50000, 1, 1, 1),
(43, 1, '2015-04-14', 50000, 1, 1, 1),
(44, 1, '2015-04-14', 50000, 1, 1, 1),
(45, 1, '2015-04-14', 50000, 1, 1, 1),
(46, 1, '2015-04-14', 50000, 1, 1, 1),
(57, 1, '2015-04-14', 50000, 1, 1, 1),
(58, 1, '2015-04-14', 40000, 2, 2, 1),
(71, 1, '2015-04-14', 50000, 1, 1, 1),
(72, 1, '2015-04-15', 40000, 2, 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '12345',
  `nama` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'karyawan',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`, `isActive`) VALUES
(1, 'melvin', 'fonda', 'melvin fonda', 'karyawan', 1),
(2, 'darwin', 'prasetio', 'darwin prasetio', 'karyawan', 1),
(5, 'wira', '12345', 'wira', 'pemilik', 1),
(6, 'ganteng', '12345', 'ganteng', 'akuntan', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kas bon`
--
ALTER TABLE `kas bon`
  ADD CONSTRAINT `kas bon_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_payment`
--
ALTER TABLE `transaksi_payment`
  ADD CONSTRAINT `transaksi_payment_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_payment_ibfk_2` FOREIGN KEY (`id_record`) REFERENCES `transaksi_record` (`id_record`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_record`
--
ALTER TABLE `transaksi_record`
  ADD CONSTRAINT `transaksi_record_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanan` (`id_pelayanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
