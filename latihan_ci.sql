-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 03:14 AM
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
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'yoga', '6b3bebb6d418f3726781486e710abee36f1b371b');

-- --------------------------------------------------------

--
-- Table structure for table `data_login_user`
--

CREATE TABLE `data_login_user` (
  `int_npm` int(12) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_login_user`
--

INSERT INTO `data_login_user` (`int_npm`, `password`) VALUES
(17111156, '12dea96fec20593566ab75692c9949596833adc9');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `int_npm` int(12) NOT NULL,
  `str_nama` varchar(100) NOT NULL,
  `str_prodi` varchar(30) NOT NULL,
  `str_kelas` varchar(20) NOT NULL,
  `int_semester` int(2) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `int_npm`, `str_nama`, `str_prodi`, `str_kelas`, `int_semester`, `gambar`) VALUES
(1, 17111156, 'Yoga Afdilla Jamaluddin', 'Teknik Informatika', 'TIF RP 17 CID C', 5, 'Logo-avengers-wallpaper-HD-pictures-download2.jpg'),
(22, 17111111, 'Andri', 'Teknik Informatika', 'TIF RP 18 CID A', 6, 'Logo-avengers-wallpaper-HD-pictures-download3.jpg'),
(23, 17111112, 'Reynaldi', 'Teknik Informatika', 'TIF RP 16 B', 4, 'Logo-avengers-wallpaper-HD-pictures-download4.jpg'),
(24, 17111113, 'Anggi', 'Teknik Industri', 'TI RP 17 A', 3, 'Logo-avengers-wallpaper-HD-pictures-download1.jpg'),
(25, 17111114, 'Naufal', 'Desain Komunikasi Visual', 'DKV RM 17 A', 5, 'Logo-avengers-wallpaper-HD-pictures-download5.jpg'),
(26, 17111115, 'Dendi ', 'Teknik Industri', 'TI WK 15 B', 3, 'Logo-avengers-wallpaper-HD-pictures-download6.jpg'),
(27, 17111116, 'Nazira', 'Teknik Informatika', 'TIF RM 17 B', 5, 'Logo-avengers-wallpaper-HD-pictures-download7.jpg'),
(28, 17111117, 'Denar', 'Teknik Informatika', 'TIF WK 18 C', 6, 'Logo-avengers-wallpaper-HD-pictures-download8.jpg'),
(30, 17111118, 'Azhar', 'Teknik Informatika', 'TIF RP 17 CID C', 5, 'Logo-avengers-wallpaper-HD-pictures-download10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
