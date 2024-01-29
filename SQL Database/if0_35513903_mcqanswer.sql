-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Generation Time: Jan 29, 2024 at 08:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35513903_mcqanswer`
--

-- --------------------------------------------------------

--
-- Table structure for table `0ncmw18zxe`
--

CREATE TABLE `0ncmw18zxe` (
  `id` int(255) DEFAULT NULL,
  `ques_no` int(255) DEFAULT NULL,
  `answer` tinytext DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `0ncmw18zxe`
--

INSERT INTO `0ncmw18zxe` (`id`, `ques_no`, `answer`, `user_id`) VALUES
(NULL, 1, 'a', 15),
(NULL, 2, 'c', 15),
(NULL, 3, 'a', 15),
(NULL, 4, 'c', 15),
(NULL, 5, 'b', 15),
(NULL, 6, 'd', 15),
(NULL, 7, 'c', 15),
(NULL, 8, 'b', 15),
(NULL, 9, 'c', 15),
(NULL, 10, 'd', 15),
(NULL, 11, 'a', 15),
(NULL, 12, 'a', 15),
(NULL, 13, 'd', 15),
(NULL, 14, 'd', 15),
(NULL, 15, 'd', 15),
(NULL, 16, 'b', 15),
(NULL, 17, 'c', 15),
(NULL, 18, 'd', 15),
(NULL, 19, 'a', 15),
(NULL, 20, 'd', 15),
(NULL, 21, 'd', 15),
(NULL, 22, 'a', 15),
(NULL, 23, 'a', 15),
(NULL, 24, 'd', 15),
(NULL, 25, 'c', 15),
(NULL, 26, 'a', 15),
(NULL, 27, 'a', 15),
(NULL, 28, 'b', 15),
(NULL, 29, 'd', 15),
(NULL, 30, 'd', 15),
(NULL, 31, 'a', 15),
(NULL, 32, 'c', 15),
(NULL, 33, 'd', 15),
(NULL, 34, 'c', 15),
(NULL, 35, 'd', 15),
(NULL, 36, 'd', 15),
(NULL, 37, 'a', 15),
(NULL, 38, 'd', 15),
(NULL, 39, 'a', 15),
(NULL, 40, 'd', 15),
(NULL, 41, 'd', 15),
(NULL, 42, 'c', 15),
(NULL, 43, 'c', 15),
(NULL, 44, 'b', 15),
(NULL, 45, 'b', 15),
(NULL, 46, 'b', 15),
(NULL, 47, 'd', 15),
(NULL, 48, 'c', 15),
(NULL, 49, 'a', 15),
(NULL, 50, 'c', 15),
(NULL, 1, 'c', 12),
(NULL, 2, 'a', 12),
(NULL, 3, 'a', 12),
(NULL, 4, 'a', 12),
(NULL, 5, 'a', 12),
(NULL, 6, 'b', 12),
(NULL, 7, 'c', 12),
(NULL, 8, 'd', 12),
(NULL, 9, 'd', 12),
(NULL, 10, 'a', 12),
(NULL, 11, 'b', 12),
(NULL, 12, 'c', 12),
(NULL, 13, 'a', 12),
(NULL, 14, 'a', 12),
(NULL, 15, 'c', 12),
(NULL, 16, 'd', 12),
(NULL, 17, 'a', 12),
(NULL, 18, 'c', 12),
(NULL, 19, 'd', 12),
(NULL, 20, 'b', 12),
(NULL, 21, 'a', 12),
(NULL, 22, 'c', 12),
(NULL, 23, 'a', 12),
(NULL, 24, 'a', 12),
(NULL, 25, 'c', 12),
(NULL, 26, 'a', 12),
(NULL, 27, 'b', 12),
(NULL, 28, 'b', 12),
(NULL, 29, 'd', 12),
(NULL, 30, 'd', 12),
(NULL, 31, 'b', 12),
(NULL, 32, 'a', 12),
(NULL, 33, 'c', 12),
(NULL, 34, 'b', 12),
(NULL, 35, 'a', 12),
(NULL, 36, 'b', 12),
(NULL, 37, 'd', 12),
(NULL, 38, 'd', 12),
(NULL, 39, 'b', 12),
(NULL, 40, 'b', 12),
(NULL, 41, 'c', 12),
(NULL, 42, 'a', 12),
(NULL, 43, 'b', 12),
(NULL, 44, 'c', 12),
(NULL, 45, 'b', 12),
(NULL, 46, 'c', 12),
(NULL, 47, 'a', 12),
(NULL, 48, 'b', 12),
(NULL, 49, 'a', 12),
(NULL, 50, 'a', 12),
(NULL, 1, 'b', 16),
(NULL, 2, '', 16),
(NULL, 3, '', 16),
(NULL, 4, '', 16),
(NULL, 5, '', 16),
(NULL, 6, '', 16),
(NULL, 7, '', 16),
(NULL, 8, '', 16),
(NULL, 9, '', 16),
(NULL, 10, '', 16),
(NULL, 11, '', 16),
(NULL, 12, '', 16),
(NULL, 13, '', 16),
(NULL, 14, '', 16),
(NULL, 15, '', 16),
(NULL, 16, '', 16),
(NULL, 17, '', 16),
(NULL, 18, '', 16),
(NULL, 19, '', 16),
(NULL, 20, '', 16),
(NULL, 21, '', 16),
(NULL, 22, '', 16),
(NULL, 23, '', 16),
(NULL, 24, '', 16),
(NULL, 25, '', 16),
(NULL, 26, '', 16),
(NULL, 27, '', 16),
(NULL, 28, '', 16),
(NULL, 29, '', 16),
(NULL, 30, '', 16),
(NULL, 31, '', 16),
(NULL, 32, '', 16),
(NULL, 33, '', 16),
(NULL, 34, '', 16),
(NULL, 35, '', 16),
(NULL, 36, '', 16),
(NULL, 37, '', 16),
(NULL, 38, '', 16),
(NULL, 39, '', 16),
(NULL, 40, '', 16),
(NULL, 41, '', 16),
(NULL, 42, '', 16),
(NULL, 43, '', 16),
(NULL, 44, '', 16),
(NULL, 45, '', 16),
(NULL, 46, '', 16),
(NULL, 47, '', 16),
(NULL, 48, '', 16),
(NULL, 49, '', 16),
(NULL, 50, '', 16);

-- --------------------------------------------------------

--
-- Table structure for table `rl6dh9z3fo`
--

CREATE TABLE `rl6dh9z3fo` (
  `id` int(255) DEFAULT NULL,
  `ques_no` int(255) DEFAULT NULL,
  `answer` tinytext DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rl6dh9z3fo`
--

INSERT INTO `rl6dh9z3fo` (`id`, `ques_no`, `answer`, `user_id`) VALUES
(NULL, 1, 'c', 12),
(NULL, 2, 'b', 12),
(NULL, 3, 'b', 12),
(NULL, 4, 'a', 12),
(NULL, 5, 'c', 12),
(NULL, 6, 'c', 12),
(NULL, 7, 'a', 12),
(NULL, 8, 'b', 12),
(NULL, 9, 'b', 12),
(NULL, 10, 'd', 12),
(NULL, 1, 'a', 15),
(NULL, 2, 'b', 15),
(NULL, 3, 'c', 15),
(NULL, 4, 'a', 15),
(NULL, 5, 'c', 15),
(NULL, 6, 'c', 15),
(NULL, 7, 'a', 15),
(NULL, 8, 'b', 15),
(NULL, 9, 'b', 15),
(NULL, 10, 'd', 15),
(NULL, 1, 'a', 16),
(NULL, 2, 'b', 16),
(NULL, 3, '', 16),
(NULL, 4, '', 16),
(NULL, 5, '', 16),
(NULL, 6, '', 16),
(NULL, 7, '', 16),
(NULL, 8, '', 16),
(NULL, 9, '', 16),
(NULL, 10, '', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
