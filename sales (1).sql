-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 07:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `transporter_name` varchar(250) NOT NULL,
  `gross_weight` int(11) NOT NULL,
  `tare_weight` int(11) NOT NULL,
  `net_weight` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `loading_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `royalty_id` int(11) NOT NULL,
  `royalty_number` varchar(55) NOT NULL,
  `royalty_tone` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `carting_id` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `vehicle_id`, `transporter_name`, `gross_weight`, `tare_weight`, `net_weight`, `material_id`, `loading_id`, `place_id`, `party_id`, `royalty_id`, `royalty_number`, `royalty_tone`, `driver_id`, `carting_id`, `note`) VALUES
(1, '2020-04-08', 12, 'test', 12, 10, 10, 10, 12, 202020, 202020, 123456, '', 0, 142563, 123, 'test test'),
(2, '2020-04-09', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 'TEST'),
(3, '2020-04-10', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '12', 12, 0, 0, 'TEST'),
(4, '2020-04-15', 4, 'MKC (ASHVINSINH)', 0, 10700, 0, 7, 0, 0, 0, 0, '', 0, 0, 0, ''),
(5, '2020-04-10', 0, '', 0, 0, 0, 1, 0, 0, 0, 0, '', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
