-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 05:46 AM
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
-- Database: `4097db`
--
CREATE DATABASE IF NOT EXISTS `4097db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4097db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_position` varchar(100) NOT NULL,
  `a_prefix` varchar(10) NOT NULL,
  `a_dob` date NOT NULL,
  `a_education` varchar(50) NOT NULL,
  `a_skills` text DEFAULT NULL,
  `a_experience` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_name`, `a_position`, `a_prefix`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'มานี ใจสะอาด', 'Software Engineer (วิศวกรซอฟต์แวร์)', 'นางสาว', '2025-12-11', 'ปริญญาโท', '้กด้ห้หพะ้่', 'ะ้้ฟำพ้ำพ้พะ'),
(2, 'มีชัย ชนะ', 'Marketing Executive (ผู้บริหารการตลาด)', 'นาย', '2025-12-04', 'ปริญญาเอก', 'พูดได้หลายภาษา', 'บริษัท a 3เดือน\r\nบริษัท t 8 เดือน');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(3) NOT NULL,
  `r_color` varchar(7) NOT NULL,
  `r_major` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_color`, `r_major`) VALUES
(1, 'ปภัสสร อุณวงค์', '', 0, '', ''),
(2, 'มานะ ใจดี', '', 0, '', ''),
(3, 'มานี ใจสะอาด', '', 0, '', ''),
(7, 'ใจดี มีนะ', '9995587412', 150, '#0d6efd', 'การบัญชี'),
(8, 'มีชัย ชนะ', '5897423', 190, '#c11515', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
