-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(14) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `tempatLahir` varchar(40) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jmlSaudara` int(2) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `jenisKelamin` varchar(2) DEFAULT NULL,
  `statusKeluarga` varchar(1) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `tempatLahir`, `tanggalLahir`, `jmlSaudara`, `alamat`, `kota`, `jenisKelamin`, `statusKeluarga`, `hobi`, `email`, `pass`) VALUES
(1, 'A12.2024.07261', 'NABIL LABQINO', 'popo', '0000-00-00', 3, 'jalan hasan munadi\r\nnyatnyono kecamatan ungaran ba', 'Semarang', 'L', '', 'Membaca', 'kelavosy@gmail.com', '$2y$10$qw54unQSsR/GwlQsZgyNTePz8axIOREw145qeozkwMMXw5tsScs/q'),
(2, 'A12.2024.072sf', 'sdfdsfs', 'iyfv', '0000-00-00', 1, 'jalan hasan munadi\r\nnyatnyono kecamatan ungaran ba', 'Semarang', 'L', 'K', 'Membaca, Olahraga, Musik', 'kelavosy@gmail.com', '$2y$10$3E.TvkCjKzsHK.6k0bYluuw0EYeHK58MjhAWf8PqKcb1XuOo9/Dve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
