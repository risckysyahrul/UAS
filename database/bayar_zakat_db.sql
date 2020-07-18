-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 02:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayar_zakat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayar_zakat`
--

CREATE TABLE `data_pembayar_zakat` (
  `jenis_zakat` varchar(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembayar_zakat`
--

INSERT INTO `data_pembayar_zakat` (`jenis_zakat`, `nominal`, `nama_lengkap`, `nomor_hp`, `email`, `nama_bank`, `nomor_rekening`) VALUES
('Zakat Penghasilan', 250000, 'Rinusatoro', '0871765542', 'sonasa@example.com', 'BRI', '11735443');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
('1', 'Rifaldri', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pilih_zakat`
--

CREATE TABLE `pilih_zakat` (
  `id` varchar(5) NOT NULL,
  `jenis_zakat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilih_zakat`
--

INSERT INTO `pilih_zakat` (`id`, `jenis_zakat`) VALUES
('1', 'Zakat Penghasilan'),
('2', 'Zakat Maal'),
('3', 'Zakat Fitrah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
