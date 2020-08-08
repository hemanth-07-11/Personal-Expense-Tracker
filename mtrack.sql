-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 08:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `exp_name` varchar(100) NOT NULL,
  `exp_amt` varchar(15) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`exp_name`, `exp_amt`, `exp_date`) VALUES
('Order Food', '200', '2020-01-01'),
('Mobile Recharge', '599', '2020-01-06'),
('Travelling Charges', '100', '2020-01-12'),
('Eat Junk Food', '200', '2020-01-16'),
('Party', '1000', '2020-01-21'),
('Other Charges', '400', '2020-02-25'),
('Travelling Charges', '100', '2020-02-07'),
('Sight Seeing', '500', '2020-02-14'),
('Order Food', '200', '2020-01-01'),
('Mobile Recharge', '200', '2020-07-18'),
('Food', '1000', '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_amt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_amt`) VALUES
(1700);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
