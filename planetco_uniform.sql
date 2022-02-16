-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11 ก.พ. 2022 เมื่อ 06:20 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.17-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planetco_uniform`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(10) NOT NULL,
  `std_id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `orders`
--

INSERT INTO `orders` (`ord_id`, `std_id`, `date`) VALUES
(5, '65301', '2021-12-23');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `order_list`
--

CREATE TABLE `order_list` (
  `ord_id` int(10) NOT NULL,
  `product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `order_list`
--

INSERT INTO `order_list` (`ord_id`, `product`, `size`, `qty`) VALUES
(5, 'เสื้อนักศึกษา', 'S', 2),
(5, 'เสื้อฝึกงาน', 'XL', 2),
(5, 'เสื้อพละ', '2S', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `student`
--

CREATE TABLE `student` (
  `std_id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `prename` enum('นาย','นางสาว','เด็กชาย','เด็กหญิง') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ctz_id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `grp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `student`
--

INSERT INTO `student` (`std_id`, `prename`, `name`, `ctz_id`, `grp_id`) VALUES
('65301', 'นาย', 'จักรพงศ์  ทัพมงคล', '1111', '6530901'),
('65302', 'นางสาว', 'สมหญิง  ขยันเรียน', '2222', '6530701');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`ord_id`,`product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
