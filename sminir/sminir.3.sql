-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2016 at 02:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sminir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accnt`
--

CREATE TABLE `admin_accnt` (
  `admin_id` int(4) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Admin Account Details';

--
-- Dumping data for table `admin_accnt`
--

INSERT INTO `admin_accnt` (`admin_id`, `admin_user`, `admin_pass`, `first_name`, `last_name`, `email`, `mobile_num`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'User', 'admin_user@email.com', '9059691132');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(5) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `location`) VALUES
(1, '_images/slide1.jpg'),
(2, '_images/slide2.jpg'),
(3, '_images/slide3.jpg'),
(4, '_images/slide4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_accnt_login`
--

CREATE TABLE `user_accnt_login` (
  `user_id` int(6) NOT NULL COMMENT 'User ID - Primary key',
  `guest_user` varchar(100) NOT NULL,
  `guest_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Login Details';

--
-- Dumping data for table `user_accnt_login`
--

INSERT INTO `user_accnt_login` (`user_id`, `guest_user`, `guest_pass`) VALUES
(1, 'user_name@email.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(25, 'asd@asd.com', 'a8f5f167f44f4964e6c998dee827110c');

-- --------------------------------------------------------

--
-- Table structure for table `user_accnt_profiles`
--

CREATE TABLE `user_accnt_profiles` (
  `user_id` int(4) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `street_add` varchar(200) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Profile Details';

--
-- Dumping data for table `user_accnt_profiles`
--

INSERT INTO `user_accnt_profiles` (`user_id`, `first_name`, `last_name`, `email`, `mobile_num`, `street_add`, `city`, `zipcode`) VALUES
(1, 'user', 'name', 'user_name@email.com', '09055589449', 'B1 L1234 This Street, That Sbdv.', 'Bacoor, Cavite', '4102'),
(25, 'asd', 'asd', 'asd@asd.com', '01234567890', 'asd', 'asd', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accnt`
--
ALTER TABLE `admin_accnt`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user_accnt_login`
--
ALTER TABLE `user_accnt_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_accnt_profiles`
--
ALTER TABLE `user_accnt_profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accnt`
--
ALTER TABLE `admin_accnt`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_accnt_login`
--
ALTER TABLE `user_accnt_login`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'User ID - Primary key', AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
