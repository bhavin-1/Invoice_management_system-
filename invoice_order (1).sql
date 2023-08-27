-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2022 at 01:12 PM
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
-- Table structure for table `invoice_order`
--

DROP TABLE IF EXISTS `invoice_order`;
CREATE TABLE IF NOT EXISTS `invoice_order` (
  `Invoice_no` int(20) NOT NULL AUTO_INCREMENT,
  `create_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `receiver_name` varchar(25) DEFAULT NULL,
  `receiver_address` varchar(50) DEFAULT NULL,
  `sub_total` varchar(25) DEFAULT NULL,
  `text_rate` varchar(25) DEFAULT NULL,
  `text_amount` varchar(25) DEFAULT NULL,
  `amount_paid` varchar(25) DEFAULT NULL,
  `amount_due` varchar(25) DEFAULT NULL,
  `total_amount` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Invoice_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order`
--

INSERT INTO `invoice_order` (`Invoice_no`, `create_date`, `receiver_name`, `receiver_address`, `sub_total`, `text_rate`, `text_amount`, `amount_paid`, `amount_due`, `total_amount`) VALUES
(1, '2022-09-15 13:07:02.889376', 'xyz', 'Jetpur', '1500', '10', '150', '1300', '350', '1650'),
(2, '2022-09-15 13:10:23.440452', 'abc', 'Rajkot - 350360', '51700', '5', '2585', '50000', '4285', '54285'),
(3, '2022-09-15 13:12:02.945401', 'abc', 'Surat - 350360', '5900', '10', '590', '2750', '3740', '6490');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
