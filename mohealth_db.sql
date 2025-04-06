-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 07:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohealth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_tb`
--

CREATE TABLE `sign_up_tb` (
  `id` int(50) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `fpassword` varchar(20) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Age` int(150) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up_tb`
--

INSERT INTO `sign_up_tb` (`id`, `fname`, `lname`, `fpassword`, `NIC`, `Age`, `gender`) VALUES
(1, 'Bhimalsing', 'Degnarain', '12345678', 'D110523231N', 23, 'male'),
(2, 'kritisha', 'Sahaye', '87654321', 'K1345768732D', 73, 'female'),
(3, 'Sanyogta', 'Etwaru', '55555', 'S1265682262E', 10, 'other'),
(4, 'bon', 'clay', '1234', 'k12323434f', 16, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up_tb`
--
ALTER TABLE `sign_up_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up_tb`
--
ALTER TABLE `sign_up_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
