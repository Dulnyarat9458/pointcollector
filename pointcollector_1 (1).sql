-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pointcollector`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_price` int(100) DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_point` int(32) NOT NULL,
  `product_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_price`, `product_name`, `product_point`, `product_pic`) VALUES
(21, 30, 'Brown Sugar', 5, 0x696d61676573202831292e6a7067),
(23, 45, 'Grape tea', 100, 0x627562626c657465612d3732302e6a7067),
(24, 20, 'Pepsi', 90, 0x323031375f4e534d5f5745425f3433313032385f31362e6a7067),
(25, 30, 'Strawberry tea', 14, 0x537472617762657272792d427562626c652d5465612d32342d776d2d3630302e6a7067),
(26, 799, 'Heineken', 70, 0x63646162366339313333323430646363333532323032633039383166643737652e6a7067),
(41, 60, 'Green Tea', 5, 0x677265656e7465612e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(100) NOT NULL,
  `promotion_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promotion_point` int(255) DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion_name`, `promotion_point`, `description`, `promotion_pic`) VALUES
(17, 'รับคะแนน x2', 0, 'รับคะแนน x2 เมื่อซื้อสินค้าตั้งแต่วันที่ 6 - 16 พฤษภาคม 2564', 0x706f696e742078322e706e67),
(18, 'สมัครสมาชิกใหม่รับฟรี 60 คะแนน', 0, 'สมัครสมาชิกใหม่วันนี้รับฟรี 60 คะแนน เมื่อสมัครสมาชิกตั้งแต่วันที่ 1-30 พ.ค 2564', 0x6e65776d656d2e6a7067),
(20, '100 แต้มแลกน้ำ', 100, 'ใช้แต้ม 100 แต้ม แลกน้ำ pepsi 1แก้ว', 0x70657073692d312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `point` int(255) NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `surname`, `email`, `role`, `point`, `tel`) VALUES
(21, 'admin', '011c945f30ce2cb', 'admin', 'admin', 'admin@system.com', 'm', 9999, 'xx123123'),
(51, 'user', '7c4a8d09ca3762a', 'test', 'one', 'user@chomnachanom.com', 'c', 900, '0812345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
