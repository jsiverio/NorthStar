-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2023 at 11:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polaris`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `userADD` (IN `firstname` VARCHAR(50), IN `lastname` VARCHAR(50), IN `badge` VARCHAR(50), IN `email` VARCHAR(50))   BEGIN
IF (SELECT badge from users WHERE EXISTS(SELECT badge from users WHERE users.badge <> badge))
THEN
INSERT INTO users (users.firstname, users.lastname, users.badge,users.email,users.status,users.type)
VALUES(firstname, lastname, badge, email,3,3);
ELSE
SIGNAL SQLSTATE '45001' SET MESSAGE_TEXT = "User already exist";
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`) VALUES
(1, 'jorge'),
(2, 'jorge'),
(3, 'jorge');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `badge` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `badge`, `email`, `password`, `status`, `type`) VALUES
(1, '', '', '8404', 'admin', '*81E9F725D6B69D1E8BF00B0739954D45801B171B', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userStatusLU`
--

CREATE TABLE `userStatusLU` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userStatusLU`
--

INSERT INTO `userStatusLU` (`id`, `status`) VALUES
(1, 'OK'),
(2, 'Locked'),
(3, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `userTypeLU`
--

CREATE TABLE `userTypeLU` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userTypeLU`
--

INSERT INTO `userTypeLU` (`id`, `type`) VALUES
(1, 'User'),
(2, 'Administrator'),
(3, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userStatusLU`
--
ALTER TABLE `userStatusLU`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userTypeLU`
--
ALTER TABLE `userTypeLU`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userStatusLU`
--
ALTER TABLE `userStatusLU`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userTypeLU`
--
ALTER TABLE `userTypeLU`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
