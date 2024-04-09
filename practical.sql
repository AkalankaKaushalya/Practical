-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 11:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`id`, `name`, `email`, `logo`) VALUES
(10, 'Carrot', 'bad@gmail.com', '6614fc9c5ceaf_dr-1.jpg'),
(11, 'Carrot', 'AmaraPvt@gmail.com', '6614fd286ece0_user-3.jpg'),
(12, 'Carrot', 'Suryaputhra@gmail.com', '6614fcf6c8673_user-2.jpg'),
(13, 'Carrot', 'hello3@gmail.com', '6614f32c95f8b_logo-sm.png'),
(14, 'Carrot', 'hello@gmail.com', '6614f32c95f8b_logo-sm.png'),
(15, 'Carrot', 'hello2@gmail.com', '6614f32c95f8b_logo-sm.png'),
(16, 'Carrot', 'hello2@gmail.com', '6614f32c95f8b_logo-sm.png'),
(17, 'Carrot', 'hello3@gmail.com', '6614f32c95f8b_logo-sm.png'),
(18, 'Carrot', 'hello@gmail.com', '6614f32c95f8b_logo-sm.png'),
(19, 'Carrot', 'hello2@gmail.com', '6614f32c95f8b_logo-sm.png'),
(20, 'Carrot', 'Good@gmail.com', '6614f32c95f8b_logo-sm.png'),
(21, 'Carrot', 'hello3@gmail.com', '6614f32c95f8b_logo-sm.png'),
(22, 'Carrot', 'hello@gmail.com', '6614f32c95f8b_logo-sm.png'),
(23, 'Carrot', 'hello2@gmail.com', '6614f32c95f8b_logo-sm.png'),
(24, 'Carrot', 'hello2@gmail.com', '6614f32c95f8b_logo-sm.png'),
(25, 'Carrot', 'hello3@gmail.com', '6614f32c95f8b_logo-sm.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `emp_id` int(11) NOT NULL,
  `compani_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`emp_id`, `compani_id`, `first_name`, `last_name`, `email`, `mobile`) VALUES
(1, 10, 'Akalanka', 'Kaushalya', 'kaushalyaakalanka343@gmail.com', '0779805664');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
