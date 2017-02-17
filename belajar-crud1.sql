-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 09:45 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar-crud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud1`
--

CREATE TABLE `crud1` (
  `id` int(11) NOT NULL,
  `nama` varchar(52) DEFAULT NULL,
  `alamat` text,
  `pekerjaan` varchar(52) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud1`
--

INSERT INTO `crud1` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(6, '  Rianto  ', 'Permata', 'Programmer'),
(7, 'Darmaji', 'Kulon Rowo', 'Petani'),
(8, 'Jokowi', 'Solo', 'Presiden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud1`
--
ALTER TABLE `crud1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud1`
--
ALTER TABLE `crud1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
