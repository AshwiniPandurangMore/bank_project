-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 12:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_balance`
--

CREATE TABLE `bank_balance` (
  `Id` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_account_no` varchar(50) NOT NULL,
  `c_date` date NOT NULL,
  `c_month` varchar(50) NOT NULL,
  `c_income` int(100) NOT NULL,
  `c_expense` int(100) NOT NULL,
  `c_balance` int(100) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_balance`
--

INSERT INTO `bank_balance` (`Id`, `c_name`, `c_account_no`, `c_date`, `c_month`, `c_income`, `c_expense`, `c_balance`, `note`) VALUES
(67, 'Harsha wani', '1234567899', '2017-11-01', '2017-11', 2000, 600, 1400, 'salary/shopping'),
(68, 'Harsha wani', '1234567899', '2017-12-13', '2017-12', 2000, 0, 3400, 'salary'),
(69, 'Harsha wani', '1234567899', '2018-01-09', '2018-01', 0, 200, 3200, 'shopping'),
(70, 'Harsha wani', '1234567899', '2018-02-06', '2018-02', 300, 200, 3300, 'salary/shopping'),
(71, 'Harsha wani', '1234567899', '2018-03-20', '2018-03', 3000, 200, 6100, 'salary/shopping'),
(72, 'Harsha wani', '1234567899', '2018-04-10', '2018-04', 0, 500, 5600, 'shopping'),
(73, 'Harsha wani', '1234567899', '2016-10-06', '2016-10', 0, 0, 0, ''),
(74, 'Harsha wani', '1234567899', '2017-12-04', '2017-12', 1000, 0, 1000, 'salary'),
(75, 'Harsha wani', '1234567899', '2017-12-06', '2017-12', 1000, 0, 2000, 'salary'),
(76, 'Harsha wani', '1234567899', '2017-12-09', '2017-12', 1000, 0, 3000, 'salary'),
(77, 'Harsha wani', '1234567899', '2017-12-02', '2017-12', 1000, 0, 4000, 'salary'),
(78, 'Harsha wani', '1234567899', '2017-11-29', '2017-11', 1000, 500, 4500, 'salary/shopping'),
(79, 'Harsha wani', '1234567899', '2017-11-30', '2017-11', 1000, 500, 5000, 'salary/shopping'),
(80, 'Harsha wani', '1234567899', '2017-12-30', '2017-12', 0, 500, 4500, 'shopping'),
(81, 'Harsha wani', '1234567899', '2017-12-27', '2017-12', 300, 500, 4300, 'salary/shopping'),
(82, 'Harsha wani', '1234567899', '2018-01-04', '2018-01', 300, 500, 4100, 'salary/shopping'),
(83, 'Harsha wani', '1234567899', '2018-01-02', '2018-01', 3000, 1000, 6100, 'salary/shopping'),
(209, 'Harsha Wani', '1234567899', '2018-08-04', '2018-08', 2000, 0, 8100, 'salary'),
(216, 'Harsha Wani', '1234567899', '2018-08-11', '2018-08', 2000, 0, 10100, 'salary'),
(217, 'Harsha Wani', '1234567899', '2018-08-11', '2018-08', 200, 0, 10300, 'salary'),
(218, 'kaveri koli', '1234567895', '2018-08-29', '2018-08', 2000, 0, 2000, 'salary'),
(220, 'Harsha Wani', '1234567899', '2018-08-09', '2018-08', 0, 200, 10100, 'shopping'),
(221, 'kaveri koli', '1234567895', '2018-08-03', '2018-08', 2000, 0, 4000, 'salary'),
(223, 'Chetna Patil', '1234567890', '0000-00-00', '', 0, 0, 0, ''),
(224, 'Chetna Patil', '1234567890', '2018-08-11', '2018-08', 200, 0, 200, 'salary'),
(225, 'Chetna Patil', '1234567890', '2018-08-11', '2018-08', 1000, 0, 1200, 'salary'),
(226, 'Chetna Patil', '1234567890', '2018-08-17', '2018-08', 1000, 0, 2200, 'salary'),
(227, 'Chetna Patil', '1234567890', '2018-08-10', '2018-08', 200, 0, 2400, 'salary'),
(228, 'Diksha Chadhari', '1234567898', '0000-00-00', '', 0, 0, 0, ''),
(229, 'Harsha Wani', '1234567899', '2018-08-10', '2018-08', 200, 0, 10300, 'salary'),
(230, '', '', '2018-08-10', '2018-08', 2000, 0, 2000, 'salary'),
(231, '', '', '2018-08-11', '2018-08', 200, 0, 200, 'salary'),
(232, '', '', '2018-08-09', '2018-08', 1000, 0, 1000, 'salary'),
(233, 'Shweta ', '1234567891', '0000-00-00', '', 0, 0, 0, ''),
(234, 'Shweta ', '1234567891', '2018-08-18', '2018-08', 2000, 0, 2000, 'salary'),
(235, 'Shweta ', '1234567891', '2018-08-18', '2018-08', 200, 0, 2200, 'salary'),
(236, 'Shweta ', '1234567891', '2018-08-24', '2018-08', 0, 200, 2000, 'shopping');

-- --------------------------------------------------------

--
-- Table structure for table `bank_data`
--

CREATE TABLE `bank_data` (
  `userID` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Profile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_data`
--

INSERT INTO `bank_data` (`userID`, `fullname`, `account_no`, `address`, `phone`, `email`, `Profile`, `password`, `confirm_password`) VALUES
(1, 'Harsha Wani', 1234567899, 'Ram Nagar,', '1236547898', 'harsha08@gmail.com', 'hero.jpg', 'Harsha123', 'Harsha123'),
(2, 'kaveri koli', 1234567895, 'Sham Nagar, Jal', '8956475988', 'kaveri@gmail.com', 'avatar1.jpg', 'Kaveri123', 'Kaveri123'),
(3, 'Ashwini P More', 1234567893, 'plot no.11/251 jalgaon', '9856472315', 'ashwini@gmail.com', 'profile-avatar.jpg', 'Ashwini123', 'Ashwini123'),
(7, 'Nikita Patil', 1234567896, 'sham nagar', '8956234569', 'nikita@gmail.com', '', 'Nikita123', 'Nikita123'),
(8, 'Chetna Patil', 1234567890, 'mahabal jalgaon', '9856231456', 'chetana@gmail.com', 't3.jpg', 'Chetana123', 'Chetana123'),
(9, 'Diksha Chadhari', 1234567898, 'jalna ', '8956231478', 'diksha@gmail.com', 'profile-avatar.jpg', 'Diksha123', 'Diksha123'),
(11, 'Shweta ', 1234567891, 'ram nagar', '9865745895', 'shweta@gmail.com', '', 'Shweta123', 'Shweta123');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `Id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `Mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`Id`, `name`, `date`, `Mobile`) VALUES
(1, 'Harsha Wani', '2018-04-01', 47589654),
(2, 'rani', '2018-02-07', 48945698),
(4, 'kaveri koli', '2018-01-02', 0),
(5, 'kau', '2017-01-03', 48945698);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_balance`
--
ALTER TABLE `bank_balance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bank_data`
--
ALTER TABLE `bank_data`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_balance`
--
ALTER TABLE `bank_balance`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `bank_data`
--
ALTER TABLE `bank_data`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
