-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 08:48 AM
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
-- Database: `pw_tubes_203040013`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(50) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `sutradara` varchar(200) NOT NULL,
  `produser` varchar(200) NOT NULL,
  `poster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `tanggal_rilis`, `sutradara`, `produser`, `poster`) VALUES
(1, 'Parasite', '2019-06-15', 'Bong Joon-ho', 'Bong Joon-ho,Kwak Sin-ae,Jang Young-hwan', 'parasite.jpg'),
(2, 'Spider-Man: Far from Home', '2019-06-28', 'Jon Watts', 'Kevin Feige, Amy Pascal', 'spider2.jpg'),
(3, 'Joker', '2019-10-02', 'Todd Phillips', 'Todd Philips Bradley Cooper, Emma Tillinger Koskoff', 'joker.jpg'),
(4, 'Boruto: Naruto the Movie', '2015-08-07', 'Hiroyuki Yamashita', 'Takayuki Hirobe', 'boruto.jpg'),
(5, 'Avengers: Infinity War', '2018-04-23', 'Joe Russo, Anthony Russo', 'Kevin Feige', 'infinity.jpg'),
(6, 'Avengers: Endgame', '2019-06-15', 'Joe Russo, Anthony Russo', 'Kevin Feige', 'endgame.jpg'),
(7, 'Bloodshot', '2020-03-05', 'David S F Wilson', 'Toby JaffeJason Kothari,Neal H. Moritz,Dinesh Shamdasani', 'bloodshot.jpg'),
(8, 'Spider-Man: Into the Spider-Verse', '2018-12-26', 'Peter Ramsey, Rodney Rothman, Robert Persichetti Jr', 'Avi Arad, Amy Pascal, Phil Lord, Christopher Miller, Christina Steinberg', 'spider1.jpg'),
(9, 'Extreme Job', '2019-01-23', 'Lee Byung Hun', 'Go Dae-Suk, Ok Kyung Bang, Kim Seong-hwan, Lee Jong-suk', 'extreme.jpg'),
(10, 'Knives Out', '2019-06-15', 'Rian Johnson', 'Ram Bergman, Rian Johnson', 'knivesout.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$CCZOq3L66Jru1rIEbNZwKuQQvsdnwDuLtILadjyGOh2A./mB7nuGu'),
(2, 'aril', '$2y$10$KKhzXJSj2glFW.CnyajNuuxWUfTw/mtSoaPy66b7R71wFNNs.37ta'),
(3, 'anjay', '$2y$10$XA/ra6yT0z9B5z4Xve4XHO72DMDXP6euRhvHtVpZLqyzW5PoIXFCe'),
(4, 'asep', '$2y$10$WjKda.BgNVLoLVBeXCfY8u9BV4GofCT0hvvSkhjTnKy.76LcEBw4C'),
(5, 'anji', '$2y$10$tjMQcqcHxSN8ixt9dUac7uJb/iJfBOrts4PLpPx4NI2qp2WgsFJ36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
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
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
