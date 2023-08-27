-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2022 at 01:13 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order_item`
--

DROP TABLE IF EXISTS `invoice_order_item`;
CREATE TABLE IF NOT EXISTS `invoice_order_item` (
  `item_no` varchar(20) DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `item_quantity` varchar(20) DEFAULT NULL,
  `item_price` varchar(20) DEFAULT NULL,
  `item_total` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`item_no`, `item_name`, `item_quantity`, `item_price`, `item_total`) VALUES
('1', 'bettry', '3', '500', '1500'),
('1', 'hradphone', '3', '500', '1500'),
('2', 'bulb', '2', '100', '200'),
('3', 'iphone', '1', '50000', '50000'),
('1', 'bulb', '1', '500', '500'),
('2', 'bettry', '4', '500', '2000'),
('3', 'hradphone', '3', '800', '2400'),
('4', 'bettry', '2', '500', '1000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
