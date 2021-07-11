-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 07:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `suren`
--

CREATE TABLE `suren` (
  `id` int(11) NOT NULL,
  `filen` text NOT NULL,
  `dof` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suren`
--

INSERT INTO `suren` (`id`, `filen`, `dof`) VALUES
(1, 'diary2021-07-11.txt', '21/07/11'),
(2, 'diary2021-07-11.txt', '21/07/11');

-- --------------------------------------------------------

--
-- Table structure for table `surendira`
--

CREATE TABLE `surendira` (
  `id` int(11) NOT NULL,
  `filen` text NOT NULL,
  `dof` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surendira`
--

INSERT INTO `surendira` (`id`, `filen`, `dof`) VALUES
(1, 'file1.txt', '21/07/11'),
(2, 'file2.txt', '21/07/11'),
(3, 'diary2021-07-11.txt', '21/07/11'),
(4, 'diary2021-07-11.txt', '21/07/11'),
(5, ' file3.txt', '21/07/11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('sibiram7@gmail.com', 'suren', 'qwerty'),
('suren@gmail.com', 'surendira', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suren`
--
ALTER TABLE `suren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surendira`
--
ALTER TABLE `surendira`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suren`
--
ALTER TABLE `suren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surendira`
--
ALTER TABLE `surendira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
