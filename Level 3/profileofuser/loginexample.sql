-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 10:51 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginexample`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `surname` longtext NOT NULL,
  `degree` longtext NOT NULL,
  `pwd` longtext NOT NULL,
  `email` longtext NOT NULL,
  `age` int(11) NOT NULL,
  `course` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `surname`, `degree`, `pwd`, `email`, `age`, `course`) VALUES
(1, 'John', 'Doe', 'Acturial Sciences', 'johndoe', 'johndoe@password.com', 19, 'CSC1017S'),
(2, 'salm', 'akldsj', 'Electrical Engineering', 'example', 'example@password.ggt', 18, 'EEE1004F'),
(3, 'another', 'one', 'Computer Science', 'example', 'example@password.kkk', 21, 'CSC2002S');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` longtext NOT NULL,
  `pwd` longtext NOT NULL,
  `email` longtext NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `firstname`, `lastname`, `username`, `pwd`, `email`, `birthday`, `gender`) VALUES
(1, 'John', 'Doe', 'johndoe', '$2y$10$HWMe1pM0IrdctHhSbcVBGeClqL0Sts8pR47yLqx.eDZ/a5K3Fd2c2', 'johndoe@password.com', '1963-10-17', 'M'),
(2, 'salm', 'akldsj', 'salmaaa', '$2y$10$BhsBaTv1ji6yIRpPIXeO/u5m.moO9vCeB5LcMmQxz8VnweSt1m0iy', 'example@password.ggt', '1950-01-01', 'F'),
(3, 'another', 'one', 'yetagain', '$2y$10$VVpdcnEtDoJ5WN1KJ2HHqeprw1tY/Y6MWO4byYmJBvpSr89OPutpe', 'example@password.kkk', '1981-09-07', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
