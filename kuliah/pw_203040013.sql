-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 05:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040013`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Aril Fajri', '203040013', 'arielmunchen60@gmail.com', 'Teknik Informatika', 'aril.JPG'),
(2, 'Wawan', '203040014', 'wawan@gmail.com', 'Teknik Industri', 'wawan.JPG'),
(4, 'Pikar', '203040015', 'pikar@gmail.com', 'Teknik Arsitektur', 'pikar.JPG'),
(6, 'Patun', '203040016', 'patun@gmail.com', 'Teknik Arsitektur', 'patun.JPG'),
(7, 'Joy', '203040017', 'joy@gmail.com', 'Teknik Informatika', 'joy.jpg'),
(8, 'Julfan', '203040018', 'julfan@gmail.com', 'Ilmu Komunikasi', 'jul.jpg'),
(9, 'Elizabeth Olsen', '203040019', 'olsen@gmail.com', 'Farmasi', 'olsen.jpg'),
(10, 'Padli', '203040020', 'padli@gmail.com', 'Ekonomi', 'padli.JPG'),
(11, 'Robert Downey', '203040021', 'downey@gmail.com', 'Teknik Mesin', 'rdj.jpg'),
(12, 'Sujai', '203040022', 'sujai@gmail.com', 'Perikanan', 'sujai.JPG'),
(23, 'Tom Holland', '20230', 'tom@gmail.com', 'Ekonomi', 'tom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$GxWV7lifKHnVm4XR7EnKJOLWfbn1IEHQOadJufQ5nEdwZkB3Hk4wy'),
(4, 'admin', '$2y$10$KjaH2GON5jKdfcmWH7pR7.i19URJQn7weQ/LIUBhpMHyUc1iM4Eqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
