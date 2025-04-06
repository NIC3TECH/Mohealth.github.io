-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 04:56 PM
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
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `femail` varchar(255) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `I.D` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`femail`, `fpassword`, `I.D`) VALUES
('nil@gmail.com', 'nil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `customer_id` varchar(50) NOT NULL,
  `appointment_date` varchar(20) NOT NULL,
  `hospital` text NOT NULL,
  `ticket_number` varchar(255) NOT NULL,
  `atime` varchar(255) NOT NULL,
  `specialist_doc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`customer_id`, `appointment_date`, `hospital`, `ticket_number`, `atime`, `specialist_doc`) VALUES
('D110523231N', '2024-08-15', '', '', '', ''),
('D110523231N', '2024-08-16', '', '', '', ''),
('D110523231N', '2024-08-16', '', '', '', ''),
('D110523231N', '2024-08-15', '', '', '', ''),
('', '2024-08-14', '', '', '', ''),
('D110523231N', '2024-08-18', '', '', '', ''),
('D110523231N', '2024-08-19', '', '', '', ''),
('', '2024-08-16', '', '', '', ''),
('', '2024-08-26', 'Dr AG Jeetoo Hospital', '', '', ''),
('', '2024-08-30', 'ENT Hospital', '', '', ''),
('D1234D', '2024-08-26', 'Jawaharlal Nehru Hospital', '', '', ''),
('D1234D', '2024-08-27', 'Jawaharlal Nehru Hospital', '', '', ''),
('D1234D', '2024-08-26', 'Dr AG Jeetoo Hospital', '', '', ''),
('D1234D', '', 'Victoria Hospital', '300BF9C9', '', ''),
('D1234D', '', 'Victoria Hospital', '75B9794F', '', ''),
('D1234D', '', 'ENT Hospital', 'E2B01402', '', ''),
('D1234D', '2024-08-26', 'Dr AG Jeetoo Hospital', 'D533FBE7', '', ''),
('D1234D', '2024-08-26', 'ENT Hospital', 'E04498B2', '', ''),
('D1234D', '2024-08-27', 'Victoria Hospital', 'ECF68740', '', ''),
('D1234D', '2024-08-26', 'Jawaharlal Nehru Hospital', 'A26FF073', '', ''),
('D1234D', '2024-08-27', 'Victoria Hospital', '2C269A92', '', ''),
('D1234D', '2024-09-11', 'Dr Bruno cheong Hospital', '5E0EAACD', '9:00-11:00', ''),
('D1234D', '2024-09-12', 'Dr Bruno cheong Hospital', '16EF2A4B', '9:00-11:00', ''),
('D1234D', '2024-09-04', 'Dr AG Jeetoo Hospital', '83AF16A7', '9:00-11:00', ''),
('D1234D', '2024-09-05', 'ENT Hospital', 'B08F4AEC', '12:30-15:00', ''),
('D1234D', '2024-09-13', 'ENT Hospital', 'B90C3563', '12:30-15:00', ''),
('D1234D', '2024-09-13', 'Dr Bruno cheong Hospital', 'B7DFDE7C', '9:00-11:00', ''),
('D1234D', '2024-09-13', 'Dr Bruno cheong Hospital', '2908D3A9', '9:00-11:00', ''),
('D1234D', '2024-09-19', 'Dr Bruno cheong Hospital', 'DA84EFF7', '9:00-11:00', ''),
('D1234D', '2024-09-13', 'Dr AG Jeetoo Hospital', 'F5F4CCDE', '12:30-15:00', ''),
('D1234D', '2024-09-16', 'ENT Hospital', '040B3585', '12:30-15:00', ''),
('D1234D', '2024-09-15', 'Dr AG Jeetoo Hospital', '8B1434D0', '12:30-15:00', ''),
('D1234D', '2024-09-13', 'Dr Bruno cheong Hospital', '51B3855E', '12:30-15:00', ''),
('D1234D', '2024-09-11', 'Dr Bruno cheong Hospital', '4978E803', '9:00-11:00', ''),
('D1234D', '2024-09-14', 'Dr Bruno cheong Hospital', '9BAD616E', '9:00-11:00', 'Dermatologist'),
('D1234D', '2024-09-06', 'ENT Hospital', '399EFFBE', '12:30-15:00', 'Dermatologist'),
('D1234D', '2024-09-06', 'Dr AG Jeetoo Hospital', 'C78E84F2', '10:00-11:30', ''),
('D1234D', '2024-09-06', 'Dr Bruno cheong Hospital', '23117C4D', '08:30-10:00', 'Gastroenterology'),
('D1234D', '2024-09-13', 'ENT Hospital', 'B8A67C71', '10:00-11:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_db`
--

CREATE TABLE `feedback_db` (
  `id` int(11) NOT NULL,
  `sname` text NOT NULL,
  `semail` varchar(20) NOT NULL,
  `ssubject` varchar(20) NOT NULL,
  `smessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_db`
--

INSERT INTO `feedback_db` (`id`, `sname`, `semail`, `ssubject`, `smessage`) VALUES
(1, 'nil', 'bhimal@gmail.com', 'website', 'nice website.');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_tb`
--

CREATE TABLE `sign_up_tb` (
  `id` int(50) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Age` int(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `med_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up_tb`
--

INSERT INTO `sign_up_tb` (`id`, `fname`, `lname`, `fpassword`, `NIC`, `Age`, `gender`, `med_report`) VALUES
(1, 'Bhimalsing', 'Degnarain', '12345678', 'D110523231N', 23, 'male', ''),
(2, 'kritisha', 'Sahaye', '87654321', 'K1345768732D', 73, 'female', ''),
(3, 'Sanyogta', 'Etwaru', '55555', 'S1265682262E', 10, 'other', ''),
(4, 'bon', 'clay', '1234', 'k12323434f', 16, 'male', ''),
(5, 'bhim', 'deg', '1234', 'd5213', 15, 'male', ''),
(6, '', '', '', '', 0, '', ''),
(7, '', '', '', '', 0, '', ''),
(8, 'nil', 'nil', '$2y$10$iASyd6oqc5TN3zKoTjflve4Zj1CbSFqgfA4n2HhTuhTQlSCCYG1RS', 'D110523231N', 20, 'male', ''),
(9, 'nil', 'nil', '$2y$10$vzhGjKXfc8oiWztA0YyFMuSfhNcB0GwAIACnNdoaGL.3blCdHmCTC', 'K1345762232D', 21, 'male', ''),
(10, 'nil', 'nil', '$2y$10$3eYbjZQbaKKsMTx4mje8HOcNIUOUhL5StILHRknxU7hInAdPVqbP2', 'K1345762232D', 21, 'male', ''),
(11, 'nilesh', 'nil', '$2y$10$YyNU.THocUFf7SCMQJExk.LrZsRqZR3EfCpvd3PLf3bxUReGQd1aq', 'K123223322P', 25, 'male', ''),
(12, 'nice', 'guy', '$2y$10$v4k3rDqVs6Tu5G1Z.hX8/uZHepZ4617jZA.6dLrFv5DMWKd4cLkhy', 'D1111111111N', 26, 'male', ''),
(13, 'Bhimalsing ', 'Degnarain', '$2y$10$8dMjA9t5bNMbIQx5q/AUVOO3kGJNbnZedYyKpWs/Ood/5QphEQPk2', 'D11110000D', 21, 'male', ''),
(14, 'ram', 'ran', '$2y$10$sJeDG7yctqiOFIsRgdbXUOKUditb6c6VhplrNdzzNdM8x0cDMlmr2', 'D12345678D', 21, 'male', ''),
(15, 'daas', 'Sahd', '$2y$10$xSMT2D1O4Q.Url0mnl5qSuzsltOdP2W82V06t19zDz5Vt7yG2EGzK', 'A12345678A', 23, 'male', ''),
(16, 'deg', 'deg', '$2y$10$SzhM4AtSoesWs9M3yANbDeQCHRKCbQGMkynzF27sZQ5wicxvh4ohK', 'D12345678D', 26, 'male', ''),
(17, 'bone ', 'clay', '$2y$10$SfM8NT1T4/mZaFk64Fqwueq2GBCESr7SECMv1kVTXg2qy1UIoQSlS', 'D12345678D', 20, 'male', ''),
(18, 'Bhimalsing ', 'Degnarain', '$2y$10$5WC/zi055djZoXJEAmwS3OgPg8GGIv9Tvoom/vsqMczE9V7uCsd52', '1234', 20, 'male', ''),
(19, 'nav', 'nav', '$2y$10$u5uSCoqxA9UV.lZ/UdoSWuMnXL.21aHFH.gHFtzHJnEX6y6f/60m2', 'N12345678N', 22, 'male', ''),
(20, 'tiger', 'tier', '$2y$10$X047wQ7kPgxktKrhwIGPyOgl3tiOtMDhnVHS3e8FW0WgQw3pkCJne', 'D1234D', 20, 'male', '20/07/2024- Attended Dr Bruno Chong hospital for Acute lumbago.(Dr.B.Chungus)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`I.D`);

--
-- Indexes for table `feedback_db`
--
ALTER TABLE `feedback_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up_tb`
--
ALTER TABLE `sign_up_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `I.D` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign_up_tb`
--
ALTER TABLE `sign_up_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
