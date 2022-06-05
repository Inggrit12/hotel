-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 09:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dahlah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nim`, `nama`, `username`, `password`) VALUES
('M3119001', 'Paijo Bin Bejo', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('M3119049', 'Inggrit Novitasari', 'inggrit', '827ccb0eea8a706c4c34a16891f84e7b'),
('M3119054', 'setyo noviantoro', 'setyo', '6309647631df09e6caee8ad7c1704013');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `iddetail` int(11) NOT NULL,
  `idpembelian` int(100) DEFAULT NULL,
  `produk_id` int(10) DEFAULT NULL,
  `produk_harga` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `namaKamar` varchar(100) DEFAULT NULL,
  `hargaKamar` int(10) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `akses` varchar(100) DEFAULT NULL,
  `eula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `namaKamar`, `hargaKamar`, `keterangan`, `kelas`, `akses`, `eula`) VALUES
(17, 'Superior', 500000, 'Nyaman', 'A-Class', 'Akses Bebas', 'Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `roomclass`
--

CREATE TABLE `roomclass` (
  `idKelas` varchar(10) NOT NULL,
  `namaKelas` varchar(100) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `kebersihan` varchar(100) DEFAULT NULL,
  `keamanan` varchar(100) DEFAULT NULL,
  `pelayanan` varchar(100) DEFAULT NULL,
  `internet` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomclass`
--

INSERT INTO `roomclass` (`idKelas`, `namaKelas`, `fasilitas`, `kebersihan`, `keamanan`, `pelayanan`, `internet`) VALUES
('A-Class', 'mitik', '5', 'Bersih', 'aman', 'full', '1000GB/s'),
('B-Class', 'legend', '4', 'bersih', 'full', 'lumayan\r\n', '1000MB/s'),
('C-Class', 'epic', '4', 'lumayan', 'aman', 'lumayan', '100MB/s'),
('D-Class', 'Grandmaster\r\n', '3', 'bersih', 'lumayan', 'lumayan', '10MB/s'),
('S-Class', 'master\r\n', '2', 'Bersih ', 'Full', 'full', '1000TB/s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `idpembelian` (`idpembelian`),
  ADD KEY `produk_id` (`produk_id`) USING BTREE;

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `keyclass` (`kelas`);

--
-- Indexes for table `roomclass`
--
ALTER TABLE `roomclass`
  ADD PRIMARY KEY (`idKelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `roomclass` (`idKelas`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
