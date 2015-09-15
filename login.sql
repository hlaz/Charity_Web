-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2015 at 01:01 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `UserNameID` int(9) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`UserNameID`, `userName`, `First_Name`, `Last_Name`, `pass`, `email`) VALUES
(1, 'edward', '', '', 'edward123', ''),
(2, 'testid', '', '', '555', ''),
(3, 'testing_id', 'Tester', 'Last', 'hello', 'testing@gmail.com'),
(4, 'testing_id', 'Tester', 'Last', 'hello', 'testing@gmail.com'),
(5, 'testing_id', 'Tester', 'Last', 'hello', 'testing@gmail.com'),
(6, 'prepare', 'first', 'last', 'hello', 'preparing@gmail.com'),
(7, 'prepare', 'first', 'last', 'hello', 'preparing@gmail.com'),
(8, 'prepare', 'first', 'last', 'hello', 'preparing@gmail.com'),
(9, 'prepare', 'first', 'last', 'hello', 'preparing@gmail.com'),
(10, 'prepare2', 'f', 'l', 'canyousee', 'pp@asc.com'),
(11, 'prepare2', 'f', 'l', 'canyousee', 'pp@asc.com'),
(12, 'prepare2', 'f', 'l', '$2y$10$CrPAjBpg8BJ9PAeQIlqe9OO3BWK8Qo8dB', 'pp@asc.com'),
(13, 'prepare2', 'f', 'l', '$2y$10$CrPAjBpg8BJ9PAeQIlqe9OO3BWK8Qo8dB', 'pp@asc.com'),
(14, 'testing_secure', 'Edward', 'Kim', '$2y$10$orfXLv3sjTWFf4tNz5OZk.yjwd.J8kHRg', 'hellcjasd@gmail.com'),
(15, 'testing_secure', 'Edward', 'Kim', '$2y$10$orfXLv3sjTWFf4tNz5OZk.yjwd.J8kHRg', 'hellcjasd@gmail.com'),
(16, 'testing_secure', 'Edward', 'Kim', '$2y$10$LmmvaDzFGy5jjj7QbWWp.u4x0mOe0be1I', 'hellcjasd@gmail.com'),
(17, 'testing_secure', 'Edward', 'Kim', '$2y$10$GQvi0WAQVEbnVTYy0t5GdeUsO7QaMhit.', 'hellcjasd@gmail.com'),
(18, 'testing_4', 'I''m', 'testing', '$2y$10$RqzWNwv9Nug4cWdw6ZFg0eQxy1/71ZZhj', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`UserNameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `UserNameID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
