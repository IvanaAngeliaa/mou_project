-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2023 at 09:16 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbdb`
--
CREATE DATABASE IF NOT EXISTS `webbdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webbdb`;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `idk` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`idk`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idk`, `kategori`) VALUES
(1, 'Makanan Indonesia'),
(3, 'Minuman Bersoda'),
(4, 'Elektronik'),
(5, 'ATK'),
(6, 'Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `idk` int(11) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `namaproduk` varchar(160) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idk`, `barcode`, `namaproduk`, `deskripsi`, `harga`, `foto`) VALUES
(1, 1, '123456789', 'Mie Goreng', 'seafood atau sapi', 25000, 'ba4e6b72fc2a945944bf81168936641d.jpg'),
(2, 1, '211431', 'Chitato', '', 10000, '9708d3e604696bba89cfce4dfd7442e4.jpg'),
(3, 1, '3423423423', 'Mie Ayam Spesial', '', 500000, 'c6b3a41dc67d8cbe3e4f4f5538cfd5b1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
