-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 04:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyper_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
(1, 'hyper', 'hyper1');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `fees_payment` varchar(30) NOT NULL,
  `fees_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fid`, `uid`, `fees_payment`, `fees_date`) VALUES
(8, 8, '500', '2019-02-04'),
(10, 3, '500', '2019-02-05'),
(14, 10, '0', '2019-01-05'),
(15, 3, '0', '2019-01-05'),
(16, 4, '0', '2019-01-05'),
(21, 12, '500', '2019-02-05'),
(23, 8, '', ''),
(24, 8, '0', '2019-01-05'),
(25, 12, '0', '2019-01-05'),
(26, 14, '0', '2019-01-05'),
(27, 15, '0', '2019-01-05'),
(28, 16, '0', '2019-01-05'),
(29, 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_father` varchar(30) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_nic` varchar(30) DEFAULT NULL,
  `user_adddate` varchar(20) NOT NULL,
  `user_photo` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_name`, `user_father`, `user_mobile`, `user_nic`, `user_adddate`, `user_photo`) VALUES
(3, 'Aamir', 'Mirza', '1234', '4240177556615', '2019-02-05', '1.jpg'),
(4, 'name', 'fname', 'mobile', 'nic', 'date', 'i3.png'),
(8, 'mirza irtiza', 'wahid umer', '87687', '131r32r23', '2019-02-04', 'i2.png'),
(10, 'arsalan', 'hussain', '0321456787', '4240177556615', '2019-01-11', '2.jpg'),
(12, 'new member', 'abu', '1234', '1234', '2019-02-05', 'i4.png'),
(14, '', '', '', '', '', ''),
(15, '', '', '', '', '', ''),
(16, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
