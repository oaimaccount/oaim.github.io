-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2025 at 06:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pasword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`nama`, `email`, `pasword`) VALUES
('', '[value-2]', '0'),
('bukan anak punk', 'punk@gmail.com', '$2y$10$pK5ryhZXXLYjP4f0V2E.8ePy75rE/lNq7gYYfFcTgnkZw/kADXM8O'),
('kohar abdul gani', 'kohar@gmail.com', '$2y$10$0m4h0/AOYp3QAUfVEI'),
('lontar', 'lontar@gmail.com', '$2y$10$OM5d6/3UxT1cBvjG2aYNo.KFUOttFEr9lpOp8dLr63uf0omUjCvnO'),
('mangga', 'mangga@gmail.com', '$2y$10$0a/Se6T/cp.FpRY6tV1t8OWuN37t9odWZ6/zk0djmnOPLiX5svGYq'),
('mislu', 'mislu@gmail.com', '$2y$10$f4VFABRIsUgs0D3kwp'),
('porter perk', 'porter@gmail.com', '$2y$10$sLfUsbF9C04/87IxllfXxeGaKVaDwZXvbxWwA4i0XUAP2CzQc546i'),
('[value-1]', '[value-2]', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
