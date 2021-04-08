-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 06:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `balance`) VALUES
('Siddhi Mistry', 'Abhi Panchal', 1000),
('Tanvee Mistry', 'Siddhi Mistry', 6000),
('Dhwani Mistry', 'Mahi Panchal', 500),
('Ridhimaa Panchal', 'Dhaval Panchal', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `view_users`
--

CREATE TABLE `view_users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_users`
--

INSERT INTO `view_users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Siddhi Mistry', 'panchalsidii9@gmail.com', 7790),
(2, 'Tanvee Mistry', 'tanvee24@mail.com', 1530),
(3, 'Shikha Panchal', 'spanchal@mail.com', 3580),
(4, 'Dhwani Mistry', 'dmistry00@mail.com', 4020),
(5, 'Abhi Panchal', 'abpanchal@mail.com', 3600),
(6, 'Harsh Mistry', 'hasshmis@mail.com', 5670),
(7, 'Neel Mistry', 'neelmistry@mail.com', 5700),
(8, 'Mahi Panchal', 'mahi001@mail.com', 4900),
(9, 'Dhaval Panchal', 'dpanchal0@mail.com', 7700),
(10, 'Ridhimaa Panchal', 'ridhimaa9@mail.com', 9810);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
