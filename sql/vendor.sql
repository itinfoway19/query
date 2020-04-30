-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendor_code` varchar(20) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `moblie` varchar(13) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `country` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `bank_details` tinyint(1) NOT NULL DEFAULT '1',
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(55) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `bank_proof` varchar(255) NOT NULL,
  `payment_conditions` text NOT NULL,
  `visiting_card` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
