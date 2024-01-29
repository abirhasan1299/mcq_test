-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Generation Time: Jan 29, 2024 at 08:02 AM
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
-- Database: `if0_35513903_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(255) NOT NULL,
  `ref` text NOT NULL,
  `user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `ref`, `user`) VALUES
(25, 'rl6dh9z3fo', 12),
(26, 'rl6dh9z3fo', 15),
(27, '0ncmw18zxe', 15),
(28, '0ncmw18zxe', 12),
(29, 'rl6dh9z3fo', 16),
(30, '0ncmw18zxe', 16);

-- --------------------------------------------------------

--
-- Table structure for table `mcqdata`
--

CREATE TABLE `mcqdata` (
  `id` int(255) NOT NULL,
  `marks` int(255) NOT NULL,
  `author_id` int(255) NOT NULL,
  `unique_id` varchar(2000) NOT NULL,
  `subject` text NOT NULL,
  `category` text NOT NULL,
  `passcode` varchar(1000) NOT NULL,
  `start_date` text NOT NULL,
  `start_time` text NOT NULL,
  `end_date` text NOT NULL,
  `end_time` text NOT NULL,
  `indication` varchar(4000) NOT NULL,
  `negative_mark` int(255) NOT NULL DEFAULT 0,
  `exam_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqdata`
--

INSERT INTO `mcqdata` (`id`, `marks`, `author_id`, `unique_id`, `subject`, `category`, `passcode`, `start_date`, `start_time`, `end_date`, `end_time`, `indication`, `negative_mark`, `exam_time`) VALUES
(24, 10, 5, 'rl6dh9z3fo', 'Demo Exam', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦œà§à¦žà¦¾à¦¨', '123', '2023-12-24', '18:11', '2023-12-30', '12:17', 'Best of Luck', 0, '10'),
(25, 50, 5, '0ncmw18zxe', 'Degree', 'SSC-24', '123', '2023-12-29', '23:26', '2024-01-06', '00:49', 'Best of luck students', 0, '50');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `author_id` int(255) NOT NULL,
  `author_name` text NOT NULL,
  `category` text NOT NULL,
  `subject` text NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `date` text NOT NULL,
  `img_name` varchar(4000) NOT NULL,
  `file_name` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `author_id`, `author_name`, `category`, `subject`, `topic`, `title`, `date`, `img_name`, `file_name`) VALUES
(10, 5, 'Abir Hasan', 'ssc', 'à¦‡à¦‚à¦°à§‡à¦œà§€ à§¨à§Ÿ à¦ªà¦¤à§à¦°', 'Right Form of Verbs', 'à¦¸à¦¹à¦œà¦­à¦¾à¦¬à§‡ à¦®à¦¨à§‡ à¦°à¦¾à¦–à¦¾à¦° à§©à§¦ à¦Ÿà¦¿à¦° à¦“ à¦¬à§‡à¦¶à¦¿ à¦‰à¦ªà¦¾à§Ÿ à¦à¦–à¦¾à¦¨à§‡ à¦¬à¦°à§à¦£à¦¨à¦¾ à¦•à¦°à¦¾  à¦¹à§Ÿà§‡à¦›à§‡ à¥¤ à¦à¦¸à¦à¦¸à¦¸à¦¿ à¦ªà¦°à¦¿à¦•à§à¦·à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦Ÿà¦¿à¦‡ à¦¯à¦¥à§‡à¦·à§à¦Ÿ à¥¤ ', '28-Nov-2023', 'ssc-right-form-of-verbs-exercise-with-answer-pdf.jpg', 'Right Form of verbs.pdf'),
(11, 5, 'Abir Hasan', 'ssc', 'à¦‡à¦‚à¦°à§‡à¦œà¦¿ à§¨à§Ÿ à¦ªà¦¤à§à¦°', 'Articles', 'Articles à¦à¦° à¦—à§à¦°à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£ à¦¸à¦¬ à¦¨à¦¿à§Ÿà¦® à¦“ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦à¦–à¦¾à¦¨à§‡ à¦‰à¦¦à¦¾à¦¹à¦°à¦£à¦¸à¦¹ à¦²à¦¿à¦ªà¦¿à¦¬à¦¦à§à¦§ à¦†à¦›à§‡ ', '28-Nov-2023', 'hqdefault.jpg', 'Articles.pdf'),
(12, 5, 'Abir Hasan', 'ssc', 'English 2nd Paper', 'Tag Question', 'Tag question à¦à¦° à¦¸à¦®à§à¦­à¦¾à¦¬à§à¦¯ à¦¸à¦•à¦² à¦«à¦°à§à¦®à§à¦²à¦¾ à¦à¦–à¦¾à¦¨ à¦¥à§‡à¦•à§‡ à¦¦à§‡à¦–à§‡ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‹ ', '01-Dec-2023', 'Tag-Question-for-SSC-Exam-1.png', 'Tag Question.pdf'),
(13, 5, 'Abir Hasan', 'ssc', 'English 2nd Paper', 'Suffix Prefix', 'Suffix prefix for SSC-2024 Examination . Marked Suggestion for all candidate bathc of ssc examination. Best of luck ...', '06-Dec-2023', 'prefixes-suffixes-root-words.jpg', 'Suffix-Prefix.pdf'),
(14, 5, 'Abir Hasan', 'ssc', 'English  2nd Paper', 'Transformation of Sentence', 'Here all the possible things are included related to Changing Sentence or Transformation of Sentence.', '08-Dec-2023', 'maxresdefault.jpg', 'Transformation of Sentences.pdf'),
(15, 5, 'Abir Hasan', 'ssc', 'English 2nd Paper', 'Linking Words', 'All Linking Words Rules for SSC exam.', '18-Dec-2023', 'dkfjds.png', 'connectors.pdf'),
(16, 5, 'Abir Hasan', 'ssc', 'English 2nd Paper', 'Narration', 'All Rules about narration', '24-Dec-2023', 'narration.jpg', 'Narration.pdf'),
(17, 5, 'Abir Hasan', 'ssc', 'English 2nd Paper', 'Matching Sentence', 'Matching Sentence question and practice for SSC-2024', '24-Dec-2023', 'Untitled_1_1500.0.png', 'Matching Sentences.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `password`, `date`) VALUES
(12, 'ADMIN', 'tamamabir@gmail.com', 1986557505, 'abirhasan', '22-Nov-2023'),
(15, 'Sumaiya Islam Mily', 'mily@gmail.com', 1915647852, 'mily@2023', '29-Dec-2023'),
(16, 'Lubna ', 'prantiksomoy@gmail.com', 1923311808, 'lubna123', '30-Dec-2023');

-- --------------------------------------------------------

--
-- Table structure for table `resultsheet`
--

CREATE TABLE `resultsheet` (
  `id` int(255) NOT NULL,
  `ref` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `total_marks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultsheet`
--

INSERT INTO `resultsheet` (`id`, `ref`, `user_id`, `total_marks`) VALUES
(7, 'rl6dh9z3fo', 12, 10),
(8, 'rl6dh9z3fo', 15, 8),
(9, '0ncmw18zxe', 15, 16),
(10, '0ncmw18zxe', 12, 13),
(11, '0ncmw18zxe', 16, 1),
(12, 'rl6dh9z3fo', 16, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqdata`
--
ALTER TABLE `mcqdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultsheet`
--
ALTER TABLE `resultsheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mcqdata`
--
ALTER TABLE `mcqdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `resultsheet`
--
ALTER TABLE `resultsheet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
