-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 01:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `electric`
--

CREATE TABLE `electric` (
  `id` int(50) NOT NULL,
  `kode_asset` varchar(50) DEFAULT NULL,
  `nama_asset` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `kapasitas` float DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electric`
--

INSERT INTO `electric` (`id`, `kode_asset`, `nama_asset`, `type`, `kapasitas`, `tanggal`) VALUES
(3, 'elec0002', 'LVMDP 1', 'Distribution-Board', 4000, '2018-12-14'),
(4, 'elec0001', 'MVMDP ', 'Main-Board', 8, '2018-12-02'),
(5, 'elec0003', 'LVMDP 2', 'Main-Board', 4000, '2018-12-22'),
(6, 'elec0004', 'MCP-1', 'Distribution-Board', 250, '2018-12-15'),
(7, 'elec0005', 'Lux Sensor Lobby GF', 'Sensor', 3, '2018-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

CREATE TABLE `fire` (
  `id` int(50) NOT NULL,
  `kode_asset` varchar(50) DEFAULT NULL,
  `nama_asset` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `kapasitas` float DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire`
--

INSERT INTO `fire` (`id`, `kode_asset`, `nama_asset`, `type`, `kapasitas`, `tanggal`) VALUES
(2, 'FF0001', 'Jockey Pump', 'Fire Pump', 75, '2018-11-30'),
(5, 'FF0003', 'Diesel Pump', 'Fire Pump', 200, '2018-11-26'),
(6, 'FF0002', 'Electric Pump', 'Fire Pump', 155, '2018-12-19'),
(7, 'FF0004', 'Smoke Detector B6-1', 'Detector', 3, '2018-12-05'),
(8, 'FF0005', 'Smoke Detector B6-2', 'Detector', 3, '2018-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `hvac`
--

CREATE TABLE `hvac` (
  `id` int(50) NOT NULL,
  `kode_asset` varchar(50) DEFAULT NULL,
  `nama_asset` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `kapasitas` float DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hvac`
--

INSERT INTO `hvac` (`id`, `kode_asset`, `nama_asset`, `type`, `kapasitas`, `tanggal`) VALUES
(1, 'HVAC0002', 'FCU Lobby GF', 'FCU', 15, '2018-06-05'),
(2, 'HVAC0001', 'AHU FCC Room-1', 'AHU', 75, '2015-09-30'),
(3, 'HVAC0003', 'ERV Roof top-1', 'Exhaust Fan', 100, '2010-12-29'),
(4, 'HVAC0005', 'AHU Ballroom-1', 'AHU', 73, '2018-12-15'),
(5, 'HVAC0004', 'ERV Roof top-2', 'Supply Fan', 100, '2018-11-09'),
(6, 'HVAC0006', 'Chiller 1', 'AHU', 1200, '2015-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `plumbing`
--

CREATE TABLE `plumbing` (
  `id` int(50) NOT NULL,
  `kode_asset` varchar(50) DEFAULT NULL,
  `nama_asset` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `kapasitas` float DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plumbing`
--

INSERT INTO `plumbing` (`id`, `kode_asset`, `nama_asset`, `type`, `kapasitas`, `tanggal`) VALUES
(2, 'PL0002', 'Sump pit B6', 'Sump pit Pump', 7.5, '2018-11-30'),
(3, 'PL0003', 'Booster pump Roof', 'Distribution Pump', 5, '2018-11-26'),
(4, 'PL0001', 'CWT PUMP', 'Main Pump', 150, '2018-10-29'),
(5, 'PL0005', 'IRR PUMP', 'Main Pump', 150, '2018-12-07'),
(6, 'PL0004', 'RWT PUMP', 'Distribution Pump', 75, '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(14, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'angga', 'Angga', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electric`
--
ALTER TABLE `electric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire`
--
ALTER TABLE `fire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hvac`
--
ALTER TABLE `hvac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing`
--
ALTER TABLE `plumbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electric`
--
ALTER TABLE `electric`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fire`
--
ALTER TABLE `fire`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hvac`
--
ALTER TABLE `hvac`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plumbing`
--
ALTER TABLE `plumbing`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
