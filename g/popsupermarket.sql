-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 03:51 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `popsupermarket`
--

CREATE TABLE `popsupermarket` (
  `p_order_id` int(11) NOT NULL,
  `p_product_name` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_date` date NOT NULL,
  `p_country` varchar(100) NOT NULL,
  `p_amount` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popsupermarket`
--

INSERT INTO `popsupermarket` (`p_order_id`, `p_product_name`, `p_category`, `p_date`, `p_country`, `p_amount`) VALUES
(1, 'Carrots', 'Vegetables', '2022-01-06', 'United States', 4270),
(2, 'Broccoli', 'Vegetables', '2022-01-07', 'United Kingdom', 8239),
(3, 'Banana', 'Fruit', '2022-01-08', 'United States', 617),
(4, 'Banana', 'Fruit', '2022-01-10', 'Canada', 8384),
(5, 'Beans', 'Vegetables', '2022-01-10', 'Germany', 2626),
(6, 'Orange', 'Fruit', '2022-01-11', 'United States', 3610),
(7, 'Broccoli', 'Vegetables', '2022-01-11', 'Australia', 9062),
(8, 'Banana', 'Fruit', '2022-01-16', 'New Zealand', 6906),
(9, 'Apple', 'Fruit', '2022-01-16', 'Sweden', 2417),
(10, 'Apple', 'Fruit', '2022-01-16', 'Canada', 7431),
(11, 'Banana', 'Fruit', '2022-01-16', 'Germany', 8250),
(12, 'Broccoli', 'Vegetables', '2022-01-18', 'United States', 7012),
(13, 'Carrots', 'Vegetables', '2022-01-20', 'Germany', 1903),
(14, 'Broccoli', 'Vegetables', '2022-01-22', 'Canada', 2824),
(15, 'Apple', 'Fruit', '2022-01-24', 'Sweden', 6946),
(16, 'Banana', 'Fruit', '2022-01-27', 'United Kingdom', 2320),
(17, 'Banana', 'Fruit', '2022-01-28', 'United States', 2116),
(18, 'Banana', 'Fruit', '2022-01-30', 'United Kingdom', 1135),
(19, 'Broccoli', 'Vegetables', '2022-01-30', 'United Kingdom', 3595),
(20, 'Apple', 'Fruit', '2022-02-02', 'United States', 1161),
(21, 'Orange', 'Fruit', '2022-02-04', 'Sweden', 2256),
(22, 'Banana', 'Fruit', '2022-02-11', 'New Zealand', 1004),
(23, 'Banana', 'Fruit', '2022-02-14', 'Canada', 3642),
(24, 'Banana', 'Fruit', '2022-02-17', 'United States', 4582),
(25, 'Beans', 'Vegetables', '2022-02-17', 'United Kingdom', 3559),
(26, 'Carrots', 'Vegetables', '2022-02-17', 'Australia', 5154),
(27, 'Mango', 'Fruit', '2022-02-18', 'Sweden', 7388),
(28, 'Beans', 'Vegetables', '2022-02-18', 'United States', 7163),
(29, 'Beans', 'Vegetables', '2022-02-20', 'Germany', 5101),
(30, 'Apple', 'Fruit', '2022-02-21', 'Sweden', 7602),
(31, 'Mango', 'Fruit', '2022-02-22', 'United States', 1641),
(32, 'Apple', 'Fruit', '2022-02-23', 'Australia', 8892),
(33, 'Apple', 'Fruit', '2022-03-01', 'Sweden', 2060),
(34, 'Broccoli', 'Vegetables', '2022-03-01', 'Germany', 1557),
(35, 'Apple', 'Fruit', '2022-03-01', 'Sweden', 6509),
(36, 'Apple', 'Fruit', '2022-03-04', 'Australia', 5718),
(37, 'Apple', 'Fruit', '2022-03-05', 'United States', 7655),
(38, 'Carrots', 'Vegetables', '2022-03-05', 'United Kingdom', 9116),
(39, 'Banana', 'Fruit', '2022-03-15', 'United States', 2795),
(40, 'Banana', 'Fruit', '2022-03-15', 'United States', 5084),
(41, 'Carrots', 'Vegetables', '2022-03-15', 'United Kingdom', 8941),
(42, 'Broccoli', 'Vegetables', '2022-03-16', 'Sweden', 5341),
(43, 'Banana', 'Fruit', '2022-03-19', 'Canada', 135),
(44, 'Banana', 'Fruit', '2022-03-19', 'Australia', 9400),
(45, 'Beans', 'Vegetables', '2022-03-21', 'Germany', 6045),
(46, 'Apple', 'Fruit', '2022-03-22', 'New Zealand', 5820),
(47, 'Orange', 'Fruit', '2022-03-23', 'Germany', 8887),
(48, 'Orange', 'Fruit', '2022-03-24', 'United States', 6982),
(49, 'Banana', 'Fruit', '2022-03-26', 'Australia', 4029),
(50, 'Carrots', 'Vegetables', '2022-03-26', 'Germany', 3665),
(51, 'Banana', 'Fruit', '2022-03-29', 'Sweden', 4781),
(52, 'Mango', 'Fruit', '2022-03-30', 'Australia', 3663),
(53, 'Apple', 'Fruit', '2022-04-01', 'Sweden', 6331),
(54, 'Apple', 'Fruit', '2022-04-01', 'Canada', 4364),
(55, 'Carrots', 'Vegetables', '2022-04-03', 'United Kingdom', 607),
(56, 'Banana', 'Fruit', '2022-04-06', 'New Zealand', 1054),
(57, 'Carrots', 'Vegetables', '2022-04-06', 'United States', 7659),
(58, 'Broccoli', 'Vegetables', '2022-04-12', 'Germany', 277),
(59, 'Banana', 'Fruit', '2022-04-17', 'United States', 235),
(60, 'Orange', 'Fruit', '2022-04-18', 'Australia', 1113),
(61, 'Apple', 'Fruit', '2022-04-21', 'United States', 1128),
(62, 'Broccoli', 'Vegetables', '2022-04-22', 'Canada', 9231),
(63, 'Banana', 'Fruit', '2022-04-23', 'United States', 4387),
(64, 'Apple', 'Fruit', '2022-04-25', 'Canada', 2763),
(65, 'Banana', 'Fruit', '2022-04-27', 'United Kingdom', 7898),
(66, 'Banana', 'Fruit', '2022-04-30', 'Sweden', 2427),
(67, 'Banana', 'Fruit', '2022-05-01', 'New Zealand', 8663),
(68, 'Carrots', 'Vegetables', '2022-05-01', 'Germany', 2789),
(69, 'Banana', 'Fruit', '2022-05-02', 'United States', 4054),
(70, 'Mango', 'Fruit', '2022-05-02', 'United States', 2262),
(71, 'Mango', 'Fruit', '2022-05-02', 'United Kingdom', 5600),
(72, 'Banana', 'Fruit', '2022-05-03', 'United States', 5787),
(73, 'Orange', 'Fruit', '2022-05-03', 'Canada', 6295),
(74, 'Banana', 'Fruit', '2022-05-05', 'Germany', 474),
(75, 'Apple', 'Fruit', '2022-05-05', 'Sweden', 4325),
(76, 'Banana', 'Fruit', '2022-05-06', 'United States', 592),
(77, 'Orange', 'Fruit', '2022-05-08', 'United States', 4330),
(78, 'Banana', 'Fruit', '2022-05-08', 'United Kingdom', 9405),
(79, 'Apple', 'Fruit', '2022-05-08', 'Sweden', 7671),
(80, 'Carrots', 'Vegetables', '2022-05-08', 'United Kingdom', 5791),
(81, 'Banana', 'Fruit', '2022-05-12', 'Canada', 6007),
(82, 'Banana', 'Fruit', '2022-05-14', 'Germany', 5030),
(83, 'Carrots', 'Vegetables', '2022-05-14', 'United Kingdom', 6763),
(84, 'Banana', 'Fruit', '2022-05-15', 'Australia', 4248),
(85, 'Banana', 'Fruit', '2022-05-16', 'Sweden', 9543),
(86, 'Broccoli', 'Vegetables', '2022-05-16', 'United Kingdom', 2054),
(87, 'Beans', 'Vegetables', '2022-05-16', 'Germany', 7094),
(88, 'Carrots', 'Vegetables', '2022-05-18', 'United States', 6087),
(89, 'Apple', 'Fruit', '2022-05-19', 'Australia', 4264),
(90, 'Mango', 'Fruit', '2022-05-20', 'United States', 9333),
(91, 'Mango', 'Fruit', '2022-05-22', 'Germany', 8775),
(92, 'Broccoli', 'Vegetables', '2022-05-23', 'United Kingdom', 2011),
(93, 'Banana', 'Fruit', '2022-05-25', 'United States', 5632),
(94, 'Banana', 'Fruit', '2022-05-25', 'New Zealand', 4904),
(95, 'Beans', 'Vegetables', '2022-05-25', 'Australia', 1002),
(96, 'Orange', 'Fruit', '2022-05-26', 'United Kingdom', 8141),
(97, 'Orange', 'Fruit', '2022-05-26', 'Canada', 3644),
(98, 'Orange', 'Fruit', '2022-05-26', 'Australia', 1380),
(99, 'Broccoli', 'Vegetables', '2022-05-26', 'Germany', 8354),
(100, 'Banana', 'Fruit', '2022-05-27', 'United States', 5182),
(101, 'Apple', 'Fruit', '2022-05-27', 'Sweden', 2193),
(102, 'Mango', 'Fruit', '2022-05-28', 'United States', 3647),
(103, 'Apple', 'Fruit', '2022-05-28', 'United States', 4104),
(104, 'Carrots', 'Vegetables', '2022-05-28', 'United States', 7457),
(105, 'Mango', 'Fruit', '2022-05-29', 'Canada', 3767),
(106, 'Broccoli', 'Vegetables', '2022-05-30', 'Germany', 4685),
(107, 'Banana', 'Fruit', '2022-06-04', 'United States', 3917),
(108, 'Apple', 'Fruit', '2022-06-04', 'Canada', 521),
(109, 'Apple', 'Fruit', '2022-06-10', 'Sweden', 5605),
(110, 'Broccoli', 'Vegetables', '2022-06-11', 'Germany', 9630),
(111, 'Banana', 'Fruit', '2022-06-20', 'Canada', 6941),
(112, 'Broccoli', 'Vegetables', '2022-06-20', 'United Kingdom', 7231),
(113, 'Broccoli', 'Vegetables', '2022-06-23', 'Australia', 8891),
(114, 'Banana', 'Fruit', '2022-06-25', 'Sweden', 107),
(115, 'Banana', 'Fruit', '2022-06-26', 'United States', 4243),
(116, 'Orange', 'Fruit', '2022-06-27', 'United States', 4514),
(117, 'Mango', 'Fruit', '2022-07-02', 'United States', 5480),
(118, 'Banana', 'Fruit', '2022-07-02', 'Sweden', 5002),
(119, 'Banana', 'Fruit', '2022-07-05', 'Canada', 8530),
(120, 'Orange', 'Fruit', '2022-07-07', 'New Zealand', 4819),
(121, 'Broccoli', 'Vegetables', '2022-07-11', 'United Kingdom', 6343),
(122, 'Orange', 'Fruit', '2022-07-13', 'United Kingdom', 2318),
(123, 'Orange', 'Fruit', '2022-07-20', 'United Kingdom', 220),
(124, 'Orange', 'Fruit', '2022-07-20', 'New Zealand', 6341),
(125, 'Apple', 'Fruit', '2022-07-20', 'Germany', 330),
(126, 'Broccoli', 'Vegetables', '2022-07-20', 'United Kingdom', 3027),
(127, 'Orange', 'Fruit', '2022-07-22', 'New Zealand', 850),
(128, 'Banana', 'Fruit', '2022-07-23', 'United Kingdom', 8986),
(129, 'Broccoli', 'Vegetables', '2022-07-25', 'United States', 3800),
(130, 'Carrots', 'Vegetables', '2022-07-28', 'United Kingdom', 5751),
(131, 'Apple', 'Fruit', '2022-07-29', 'United Kingdom', 1704),
(132, 'Banana', 'Fruit', '2022-07-30', 'Australia', 7966),
(133, 'Banana', 'Fruit', '2022-07-31', 'United States', 852),
(134, 'Beans', 'Vegetables', '2022-07-31', 'Australia', 8416),
(135, 'Banana', 'Fruit', '2022-08-01', 'Sweden', 7144),
(136, 'Broccoli', 'Vegetables', '2022-08-01', 'United States', 7854),
(137, 'Orange', 'Fruit', '2022-08-03', 'United States', 859),
(138, 'Broccoli', 'Vegetables', '2022-08-12', 'United States', 8049),
(139, 'Banana', 'Fruit', '2022-08-13', 'Germany', 2836),
(140, 'Carrots', 'Vegetables', '2022-08-19', 'United States', 1743),
(141, 'Apple', 'Fruit', '2022-08-23', 'Sweden', 3844),
(142, 'Apple', 'Fruit', '2022-08-24', 'Sweden', 7490),
(143, 'Broccoli', 'Vegetables', '2022-08-25', 'Germany', 4483),
(144, 'Apple', 'Fruit', '2022-08-27', 'Canada', 7333),
(145, 'Carrots', 'Vegetables', '2022-08-28', 'United States', 7654),
(146, 'Apple', 'Fruit', '2022-08-29', 'United Kingdom', 3944),
(147, 'Beans', 'Vegetables', '2022-08-29', 'Germany', 5761),
(148, 'Banana', 'Fruit', '2022-09-01', 'New Zealand', 6864),
(149, 'Banana', 'Fruit', '2022-09-01', 'Germany', 4016),
(150, 'Banana', 'Fruit', '2022-09-02', 'United States', 1841),
(151, 'Banana', 'Fruit', '2022-09-05', 'Australia', 424),
(152, 'Banana', 'Fruit', '2022-09-07', 'United Kingdom', 8765),
(153, 'Banana', 'Fruit', '2022-09-08', 'United States', 5583),
(154, 'Broccoli', 'Vegetables', '2022-09-09', 'New Zealand', 4390),
(155, 'Broccoli', 'Vegetables', '2022-09-09', 'Canada', 352),
(156, 'Apple', 'Fruit', '2022-09-11', 'United States', 8489),
(157, 'Banana', 'Fruit', '2022-09-11', 'Sweden', 7090),
(158, 'Banana', 'Fruit', '2022-09-15', 'United States', 7880),
(159, 'Orange', 'Fruit', '2022-09-18', 'United States', 3861),
(160, 'Broccoli', 'Vegetables', '2022-09-19', 'Germany', 7927),
(161, 'Banana', 'Fruit', '2022-09-20', 'United States', 6162),
(162, 'Mango', 'Fruit', '2022-09-25', 'Australia', 5523),
(163, 'Broccoli', 'Vegetables', '2022-09-25', 'United Kingdom', 5936),
(164, 'Carrots', 'Vegetables', '2022-09-26', 'Germany', 7251),
(165, 'Orange', 'Fruit', '2022-09-27', 'Australia', 6187),
(166, 'Banana', 'Fruit', '2022-09-29', 'Germany', 3210),
(167, 'Carrots', 'Vegetables', '2022-09-29', 'Germany', 682),
(168, 'Banana', 'Fruit', '2022-10-03', 'Australia', 793),
(169, 'Carrots', 'Vegetables', '2022-10-04', 'Germany', 5346),
(170, 'Banana', 'Fruit', '2022-10-07', 'New Zealand', 7103),
(171, 'Carrots', 'Vegetables', '2022-10-10', 'United States', 4603),
(172, 'Apple', 'Fruit', '2022-10-16', 'Sweden', 8160),
(173, 'Apple', 'Fruit', '2022-10-23', 'United Kingdom', 7171),
(174, 'Banana', 'Fruit', '2022-10-23', 'New Zealand', 3552),
(175, 'Banana', 'Fruit', '2022-10-25', 'Australia', 7273),
(176, 'Banana', 'Fruit', '2022-10-26', 'Germany', 2402),
(177, 'Banana', 'Fruit', '2022-10-26', 'Australia', 1197),
(178, 'Beans', 'Vegetables', '2022-10-26', 'Australia', 5015),
(179, 'Orange', 'Fruit', '2022-11-02', 'United States', 5818),
(180, 'Banana', 'Fruit', '2022-11-03', 'United Kingdom', 4399),
(181, 'Carrots', 'Vegetables', '2022-11-03', 'United States', 3011),
(182, 'Apple', 'Fruit', '2022-11-09', 'United Kingdom', 4715),
(183, 'Apple', 'Fruit', '2022-11-12', 'Sweden', 5321),
(184, 'Banana', 'Fruit', '2022-11-15', 'United States', 8894),
(185, 'Carrots', 'Vegetables', '2022-11-25', 'United Kingdom', 4846),
(186, 'Broccoli', 'Vegetables', '2022-11-25', 'Germany', 284),
(187, 'Orange', 'Fruit', '2022-11-26', 'United Kingdom', 8283),
(188, 'Orange', 'Fruit', '2022-11-28', 'Canada', 9990),
(189, 'Banana', 'Fruit', '2022-11-28', 'Australia', 9014),
(190, 'Apple', 'Fruit', '2022-11-29', 'Sweden', 1942),
(191, 'Banana', 'Fruit', '2022-11-30', 'United States', 7223),
(192, 'Carrots', 'Vegetables', '2022-12-02', 'United States', 4673),
(193, 'Carrots', 'Vegetables', '2022-12-04', 'Sweden', 9104),
(194, 'Apple', 'Fruit', '2022-12-05', 'United States', 6078),
(195, 'Beans', 'Vegetables', '2022-12-06', 'Germany', 3278),
(196, 'Banana', 'Fruit', '2022-12-12', 'Canada', 136),
(197, 'Banana', 'Fruit', '2022-12-12', 'Australia', 8377),
(198, 'Banana', 'Fruit', '2022-12-12', 'United States', 2382),
(199, 'Banana', 'Fruit', '2022-12-15', 'Germany', 8702),
(200, 'Banana', 'Fruit', '2022-12-16', 'United States', 5021),
(201, 'Apple', 'Fruit', '2022-12-16', 'Australia', 1760),
(202, 'Banana', 'Fruit', '2022-12-18', 'Germany', 4766),
(203, 'Beans', 'Vegetables', '2022-12-19', 'United Kingdom', 1541),
(204, 'Orange', 'Fruit', '2022-12-20', 'United Kingdom', 2782),
(205, 'Apple', 'Fruit', '2022-12-20', 'Canada', 2455),
(206, 'Apple', 'Fruit', '2022-12-22', 'New Zealand', 4512),
(207, 'Apple', 'Fruit', '2022-12-22', 'Germany', 8752),
(208, 'Carrots', 'Vegetables', '2022-12-25', 'United States', 9127),
(209, 'Apple', 'Fruit', '2022-12-28', 'Sweden', 1777),
(210, 'Beans', 'Vegetables', '2022-12-28', 'Sweden', 680),
(211, 'Orange', 'Fruit', '2022-12-29', 'United States', 958),
(212, 'Carrots', 'Vegetables', '2022-12-29', 'Australia', 2613),
(213, 'Carrots', 'Vegetables', '2022-12-30', 'Australia', 339);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popsupermarket`
--
ALTER TABLE `popsupermarket`
  ADD PRIMARY KEY (`p_order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popsupermarket`
--
ALTER TABLE `popsupermarket`
  MODIFY `p_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
