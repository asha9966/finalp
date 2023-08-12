-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 11:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `rooms` int(5) NOT NULL,
  `telephone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`name`, `date`, `rooms`, `telephone`) VALUES
('', '0000-00-00', 0, 0),
('mayura rt', '2023-09-07', 3, 765541122),
('dineth gamage', '2023-08-22', 2, 774321233),
('sa', '2023-08-14', 5, 775441420);

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`email`, `phone`, `id`) VALUES
('', 0, 3),
('fdytjj@gmail.com', 775441420, 4),
('fdytjj@gmail.com', 775441420, 5),
('fdytjj@gmail.com', 775441420, 6),
('ttrehhhv@gmail.com', 774321223, 7),
('ttrehhhv@gmail.com', 774321223, 8),
('ttrehhhv@gmail.com', 774321223, 9),
('cfddft@gmail.com', 773322176, 10),
('cfddft@gmail.com', 773322176, 11),
('cfddft@gmail.com', 2147483647, 12),
('dsfrf@gmail.com', 775441420, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`telephone`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
