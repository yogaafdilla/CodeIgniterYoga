-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 01:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `int_npm` int(12) NOT NULL,
  `str_nama` varchar(100) NOT NULL,
  `int_semester` int(2) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `int_npm`, `str_nama`, `int_semester`, `gambar`) VALUES
(21, 17111156, 'Yoga Afdilla Jamaluddin', 5, 'https___blogs-images_forbes_com_ryanwhitwam_files_2017_12_arena-of-valor.jpg'),
(22, 17111171, 'Dendi ', 5, 'wp3276889-pubg-4k-wallpapers1.jpg'),
(23, 17111111, 'Reynaldi', 5, 'Logo-avengers-wallpaper-HD-pictures-download.jpg'),
(29, 17111156, 'yoga', 1, 'Fairy-Tail0011.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
