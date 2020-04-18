-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 08:31 AM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `mobile_number` varchar(13) NOT NULL,
  `alternate_number` varchar(13) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `img` longtext NOT NULL,
  `photo_id` longtext NOT NULL,
  `address_proof` longtext NOT NULL,
  `address` text NOT NULL,
  `joining_date` date NOT NULL,
  `leaving_date` date DEFAULT NULL,
  `insurance` tinyint(1) NOT NULL DEFAULT '2',
  `insurance_company_name` varchar(255) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL,
  `insurance_policy_copy` text NOT NULL,
  `nominee` tinyint(1) NOT NULL DEFAULT '2',
  `nominee_name` varchar(255) DEFAULT NULL,
  `nominee_address` text,
  `nominee_contact_number` varchar(13) DEFAULT NULL,
  `nominee_dob` date DEFAULT NULL,
  `nominee_photo_id` longtext,
  `nominee_address_proof` longtext NOT NULL,
  `nominee_gender` tinyint(1) NOT NULL DEFAULT '1',
  `insurance_note` text,
  `bank_details` tinyint(1) NOT NULL DEFAULT '1',
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(55) DEFAULT NULL,
  `bank_account_name` varchar(255) DEFAULT NULL,
  `bank_ifsc_code` varchar(55) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `bank_proof` longtext,
  `court_case` tinyint(1) NOT NULL DEFAULT '1',
  `court_case_pending` text,
  `note` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
