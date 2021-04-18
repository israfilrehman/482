-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 01:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_and_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_package`
--

CREATE TABLE `add_package` (
  `package_id` int(100) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `stay_amount` int(50) NOT NULL,
  `bus_amount` int(50) DEFAULT NULL,
  `train_amount` int(50) DEFAULT NULL,
  `plane_amount` int(50) DEFAULT NULL,
  `num_of_days` int(50) NOT NULL,
  `num_of_night` int(50) NOT NULL,
  `img` text,
  `Total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_package`
--

INSERT INTO `add_package` (`package_id`, `package_name`, `description`, `stay_amount`, `bus_amount`, `train_amount`, `plane_amount`, `num_of_days`, `num_of_night`, `img`, `Total`) VALUES
(5, 'Sundarban', 'Biggest forest in Bangladesh. ', 1000, 400, 300, 1500, 3, 2, 'sundarban.jpg', 5200),
(6, 'Cox-Bazar', 'Longest sea beach in the world. ', 2000, 1000, 700, 2700, 3, 2, 'Coxâ€™s-Bazar-Sea-Beach-660x330.jpg', 10400);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('dadu@gmail.com', 'dadu');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone number` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `username`, `gender`, `age`, `email`, `phone number`, `password`) VALUES
(2, 'Riad Khan', 'male', 22, 'riadkhan039@gmail.com', '01774043347', '12345'),
(3, 'Rana', 'male', 21, 'rana225@gmail.com', '01954022345', '55555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_package`
--
ALTER TABLE `add_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_package`
--
ALTER TABLE `add_package`
  MODIFY `package_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
