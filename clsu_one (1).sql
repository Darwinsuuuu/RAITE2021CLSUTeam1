-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clsu_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `ship_id` int(11) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `ship_height` double NOT NULL,
  `ship_breadth` double NOT NULL,
  `total_weight` double NOT NULL,
  `ship_draught` double NOT NULL,
  `max_weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`ship_id`, `ship_name`, `ship_height`, `ship_breadth`, `total_weight`, `ship_draught`, `max_weight`) VALUES
(2, '2', 2, 2, 2, 2, 2),
(3, '2', 2, 2, 2, 2, 2),
(4, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ship_routes`
--

CREATE TABLE `ship_routes` (
  `route_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `port_name` varchar(100) NOT NULL,
  `distance` double NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship_routes`
--

INSERT INTO `ship_routes` (`route_id`, `country`, `port_name`, `distance`, `price`) VALUES
(5, '2', '2', 2, 2),
(6, 'Phillippines', 'Manila Port', 25, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `employee_id` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`employee_id`, `profile`, `firstname`, `middlename`, `lastname`, `gender`, `birthday`, `age`, `email`, `contact`, `rank`, `password`, `date_joined`) VALUES
(1, '208062637_972255106894339_7179283617838823137_n (1).jpg', 'darwin', 'bulgado', 'labiste', 'male', '2000-03-20', 20, 'darwinbulgadolabiste@gmail.com', '09278285896', 'chief engineer', 'Password123!', '2021-10-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`ship_id`);

--
-- Indexes for table `ship_routes`
--
ALTER TABLE `ship_routes`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ship_routes`
--
ALTER TABLE `ship_routes`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
