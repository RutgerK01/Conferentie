-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 11:11 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conferentie`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Ticket` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `Uid`, `Ticket`, `Amount`) VALUES
(22, 1, 'Friday/None', 2),
(21, 1, 'Sunday/Lunch', 4),
(20, 1, 'Friday/None', 4),
(19, 1, 'Saterday/Lunch+Diner', 1),
(18, 1, 'Saterday/Lunch+Diner', 1),
(17, 1, 'Saterday/Lunch+Diner', 1),
(16, 1, 'Friday/Lunch', 1),
(15, 1, 'Friday/Lunch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varbinary(255) NOT NULL,
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `rights` enum('user','speaker','admin','organisator') NOT NULL DEFAULT 'user',
  `birth` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `activated`, `rights`, `birth`, `phone`) VALUES
(1, 'mats stam', 'matsstam01@gmail.com', 0xc5146d2fa8fc7fe1662da37379936e65, 'yes', 'admin', '24/08/2001', '+31 630221822'),
(2, 'rutger kamp', 'rutgerkamp01@gmail.com', 0x88255be0a04ffcd5408e1af496b52047, 'yes', 'organisator', '', ''),
(21, 'q23 doei', 'doe@g.n', 0x9573cb2c22bca3f15dc6cea23f8ec90a, 'no', 'speaker', '1/01/2000', '+31 0612345678'),
(26, 'mats stam', 'matsstam01@gmail.lo', 0x9573cb2c22bca3f15dc6cea23f8ec90a, 'no', 'user', '1/01/2000', '+31 630221822'),
(28, 'ðŸ˜œðŸ˜œðŸ˜œ ðŸ˜ðŸ˜ðŸ˜ ðŸ¤žðŸ¤žðŸ¤ž', 'jo@gmail.com', 0x9573cb2c22bca3f15dc6cea23f8ec90a, 'no', 'user', '1/01/2000', '+31 0630681299');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `date` varchar(20) DEFAULT NULL,
  `zaal` int(11) DEFAULT NULL,
  `tijdstip` varchar(11) DEFAULT NULL,
  `topic` varchar(55) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `beschikbaar` varchar(20) NOT NULL,
  `email` varchar(251) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`date`, `zaal`, `tijdstip`, `topic`, `resume`, `beschikbaar`, `email`, `id`) VALUES
(NULL, NULL, NULL, '123', '123', 'maakt niet uit', 'doe@g.n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Fri` int(11) NOT NULL,
  `Sat` int(11) NOT NULL,
  `Sun` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`Fri`, `Sat`, `Sun`) VALUES
(250, 250, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
