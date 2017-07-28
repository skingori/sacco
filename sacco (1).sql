-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2017 at 06:07 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sacco`
--
CREATE DATABASE IF NOT EXISTS `sacco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sacco`;

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Deposit_table`
--

DROP TABLE IF EXISTS `Customer_Deposit_table`;
CREATE TABLE `Customer_Deposit_table` (
  `Customer_Deposit_id` int(20) NOT NULL,
  `Customer_Deposit_Dep_id` varchar(20) DEFAULT NULL,
  `Customer_Deposit_Login_id` varchar(20) DEFAULT NULL,
  `Customer_Deposit_amout` varchar(20) DEFAULT NULL,
  `Customer_Deposit_DateTime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Loan_table`
--

DROP TABLE IF EXISTS `Customer_Loan_table`;
CREATE TABLE `Customer_Loan_table` (
  `Customer_Loan_id` int(20) NOT NULL,
  `Customer_Loan_Loan_id` int(20) DEFAULT NULL,
  `Customer_Loan_Login_id` int(20) DEFAULT NULL,
  `Customer_Loan_amount` int(20) DEFAULT NULL,
  `Customer_Loan_DateTime` varchar(20) DEFAULT NULL,
  `Customer_Loan_paytime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Withdraw_table`
--

DROP TABLE IF EXISTS `Customer_Withdraw_table`;
CREATE TABLE `Customer_Withdraw_table` (
  `Customer_Withdraw_id` int(20) NOT NULL,
  `Customer_Withdraw_Withdraw_id` int(20) DEFAULT NULL,
  `Customer_Withdraw_Login_id` int(20) DEFAULT NULL,
  `Customer_Withdraw_amount` int(20) DEFAULT NULL,
  `Customer_Withdraw_DateTime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Deposit_table`
--

DROP TABLE IF EXISTS `Deposit_table`;
CREATE TABLE `Deposit_table` (
  `Deposit_id` int(20) NOT NULL,
  `Deposit_type` varchar(20) DEFAULT NULL,
  `Deposit_description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Loan_Payment_table`
--

DROP TABLE IF EXISTS `Loan_Payment_table`;
CREATE TABLE `Loan_Payment_table` (
  `Loan_Payment_id` int(20) NOT NULL,
  `Loan_Payment_Customer_Loan_id` int(20) DEFAULT NULL,
  `Loan_Payment_amount` int(20) DEFAULT NULL,
  `Loan_Payment_DateTime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Loan_table`
--

DROP TABLE IF EXISTS `Loan_table`;
CREATE TABLE `Loan_table` (
  `Loan_id` int(20) NOT NULL,
  `Loan_type` varchar(20) DEFAULT NULL,
  `Loan_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Login_table`
--

DROP TABLE IF EXISTS `Login_table`;
CREATE TABLE `Login_table` (
  `Login_id` int(20) DEFAULT NULL,
  `Login_username` varchar(20) DEFAULT NULL,
  `Login_password` varchar(100) DEFAULT NULL,
  `Login_fullname` varchar(20) DEFAULT NULL,
  `Login_contact` int(10) DEFAULT NULL,
  `Login_email` varchar(20) DEFAULT NULL,
  `Login_rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login_table`
--

INSERT INTO `Login_table` (`Login_id`, `Login_username`, `Login_password`, `Login_fullname`, `Login_contact`, `Login_email`, `Login_rank`) VALUES
(34545, 'smwangi', '5e212507ba2c3558ba83d99d867c983e', 'samson mwangi', 2147483647, 'ssd@kk.com', '2'),
(122112, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin admin', 1212112, 'email@email.com', '1'),
(4324255, 'test', '25d55ad283aa400af464c76d713c07ad', 'fghukiugfjgeqwgrqewg', 2147483647, 'erw@h.com', '2'),
(12345678, 'jkamau', '81dc9bdb52d04dc20036dbd8313ed055', 'Joseph Kamau', 2147483647, 'joseph.kamau@kaa.go.', '2'),
(2323, 'user1', '81dc9bdb52d04dc20036dbd8313ed055', 'user user', 6576547, 'yy@yt.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Withdraw_table`
--

DROP TABLE IF EXISTS `Withdraw_table`;
CREATE TABLE `Withdraw_table` (
  `Withdraw_id` int(20) NOT NULL,
  `Withdraw_type` varchar(20) DEFAULT NULL,
  `Withdraw_description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer_Deposit_table`
--
ALTER TABLE `Customer_Deposit_table`
  ADD PRIMARY KEY (`Customer_Deposit_id`);

--
-- Indexes for table `Customer_Loan_table`
--
ALTER TABLE `Customer_Loan_table`
  ADD PRIMARY KEY (`Customer_Loan_id`);

--
-- Indexes for table `Customer_Withdraw_table`
--
ALTER TABLE `Customer_Withdraw_table`
  ADD PRIMARY KEY (`Customer_Withdraw_id`);

--
-- Indexes for table `Deposit_table`
--
ALTER TABLE `Deposit_table`
  ADD PRIMARY KEY (`Deposit_id`);

--
-- Indexes for table `Loan_Payment_table`
--
ALTER TABLE `Loan_Payment_table`
  ADD PRIMARY KEY (`Loan_Payment_id`);

--
-- Indexes for table `Loan_table`
--
ALTER TABLE `Loan_table`
  ADD PRIMARY KEY (`Loan_id`);

--
-- Indexes for table `Withdraw_table`
--
ALTER TABLE `Withdraw_table`
  ADD PRIMARY KEY (`Withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer_Deposit_table`
--
ALTER TABLE `Customer_Deposit_table`
  MODIFY `Customer_Deposit_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Customer_Loan_table`
--
ALTER TABLE `Customer_Loan_table`
  MODIFY `Customer_Loan_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Customer_Withdraw_table`
--
ALTER TABLE `Customer_Withdraw_table`
  MODIFY `Customer_Withdraw_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Deposit_table`
--
ALTER TABLE `Deposit_table`
  MODIFY `Deposit_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Loan_Payment_table`
--
ALTER TABLE `Loan_Payment_table`
  MODIFY `Loan_Payment_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Loan_table`
--
ALTER TABLE `Loan_table`
  MODIFY `Loan_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Withdraw_table`
--
ALTER TABLE `Withdraw_table`
  MODIFY `Withdraw_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
