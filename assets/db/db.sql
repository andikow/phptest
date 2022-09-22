-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 03:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `KdBarang` varchar(10) NOT NULL,
  `Deskripsi` varchar(25) NOT NULL,
  `HET` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `KdPelanggan` int(8) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `NPWP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`KdPelanggan`, `Nama`, `Alamat`, `NPWP`) VALUES
(0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penjualandetail`
--

CREATE TABLE `penjualandetail` (
  `KdItemDetail` varchar(8) NOT NULL,
  `KdFaktur` char(13) NOT NULL,
  `KdBarang` varchar(13) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualanmaster`
--

CREATE TABLE `penjualanmaster` (
  `KdFaktur` char(13) NOT NULL,
  `Tanggal` date NOT NULL,
  `NoPol` varchar(9) NOT NULL,
  `KdPelanggan` int(8) NOT NULL,
  `DiskonFaktur` decimal(10,0) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KdBarang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`KdPelanggan`);

--
-- Indexes for table `penjualandetail`
--
ALTER TABLE `penjualandetail`
  ADD PRIMARY KEY (`KdItemDetail`);

--
-- Indexes for table `penjualanmaster`
--
ALTER TABLE `penjualanmaster`
  ADD PRIMARY KEY (`KdFaktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
