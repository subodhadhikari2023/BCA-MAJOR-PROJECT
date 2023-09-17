-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 07:33 PM
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
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(30) NOT NULL,
  `dob` date NOT NULL,
  `appdate` date NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `email`, `phone`, `dob`, `appdate`, `dept`) VALUES
('Subodh Sharma', 'subodhadhikari929@gmail.com', 2147483647, '2000-02-12', '2023-07-22', 'Cardiology');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `available_days` varchar(20) DEFAULT NULL,
  `available_start_time` time DEFAULT NULL,
  `available_end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `department`, `available_days`, `available_start_time`, `available_end_time`) VALUES
(1, 'Dr. Debjit Verma', 'debjit.ph@lmh.com', 'Physician', 'MonThu', '09:00:00', '17:00:00'),
(3, 'Dr. Preeti Sharma', 'preeti.ph@lmh.com', 'Physician ', 'TueSat', '09:00:00', '17:00:00'),
(4, 'Dr. Ahana Ganguly', 'ahana.ph@lmh.com', 'Physician', 'WedFri', '09:00:00', '17:00:00'),
(5, 'Dr. Atanu Kumar Das', 'atanu.cd@lmh.com', 'Cardiology', 'MonTue', '09:00:00', '17:00:00'),
(6, 'Dr. Subodh Banerjee', 'subodh.cd@lmh.com', 'Cardiology', 'WedThu', '09:00:00', '17:00:00'),
(7, 'Dr. Ankita Saha', 'ankita.cd@lmh.com', 'Cardiology', 'FriSat', '09:00:00', '17:00:00'),
(8, 'Dr. Subham Ghosh', 'subham.nl@lmh.com', 'Neurology', 'MonTue', '09:00:00', '17:00:00'),
(9, 'Dr. Mohan Kumar Dutta', 'mohan.nl@lmh.com', 'Neurology', 'WedThu', '09:00:00', '17:00:00'),
(10, 'Dr. Koushik Chandra', 'koushik.nl@lmh.com', 'Neurology', 'FriSat', '09:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `habitat` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `pass`, `phone`, `gender`, `habitat`, `reg_date`) VALUES
(9, 'Subodh', 'Adhikari', 'subodhadhikari929@gmail.com', '00000000', 'subodhadhikari929@gm', 'male', 'Gairi gaon Bong Khasmahal', '2023-05-12 05:53:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
