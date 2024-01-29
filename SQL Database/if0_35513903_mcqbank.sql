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
-- Database: `if0_35513903_mcqbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `0ncmw18zxe`
--

CREATE TABLE `0ncmw18zxe` (
  `id` int(255) DEFAULT NULL,
  `question` varchar(4000) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `explanation` varchar(3000) DEFAULT NULL,
  `image_name` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `0ncmw18zxe`
--

INSERT INTO `0ncmw18zxe` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explanation`, `image_name`) VALUES
(1, 'The is not as big as the earth. (Comparative)', 'No other earth is bigger than the moon', 'The earth is bigger than the moon', 'The earth is big than  the moon', 'The earth is big from  the moon', 'b', 'The earth is bigger than the moon', ''),
(2, 'She looks more beautiful than any other girl. (Superlative)', 'She looks most beautiful girl', 'She looks more beautiful girl', 'She looks beautifuler girl', 'She looks most beautifullest girl', 'a', 'She looks most beautiful girl', ''),
(3, 'Man is best creation of god. (Comparative)', 'Man is better than any other creation of god', 'Man is better  creation of god', 'Man is good creation of god', 'Man is best than any other creation of god', 'a', 'Man is better than any other creation of god', ''),
(4, 'Computer is one of the greatest invention of modern Science. (Positive)', 'Very few inventions of modern science are as great as computer', '', 'Very few inventions of modern science is as great as computer', 'Very few inventions of modern science arn\'t as great as computer', 'a', 'Very few inventions of modern science are as great as computer', ''),
(5, 'He was one of the greatest kind man of the world (Positive)', 'No other kind man of the world as great as he.', 'Very few kind man of the world were as great as he.', 'No other kind man of the world is as great as he.', 'He is great man', 'b', 'Very few kind man of the world were as great as he.', ''),
(6, 'Corruption is one of the worst evils. (Positive)', 'Very few evils are as bad as corruption.', 'No other evils are as bad as corruption.', 'Evils are as bad as corruption.', 'Very few are as bad as corruption.', 'a', 'Very few evils are as bad as corruption.', ''),
(7, 'E-commerce has become one of the most popular topics to the customers. (Positive)', 'Very few customers have become as popular as E-commerce.', 'No other topics to the customers have become as popular as E-commerce.', 'Very few topics to the customers have become as popular as E-commerce.', 'Very few topics as popular as E-commerce.', 'c', 'Very few topics to the customers have become as popular as E-commerce.', ''),
(8, 'It is the greatest of all virtues in a manâ€™s life. (Comparative)', 'It is greater all other virtues in a manâ€™s life.', 'It is greater than all other.', 'It is greater than all in a manâ€™s life.', 'It is greater than all other virtues in a manâ€™s life.', 'd', 'It is greater than all other virtues in a manâ€™s life.', ''),
(9, 'Facebook is the best of all social networks. (Make comparative degree)', 'Facebook is better than all other social networks.', 'Facebook is good than all other social networks.', 'Facebook is best than all other social networks.', 'None', 'a', 'Facebook is better than all other social networks.', ''),
(10, 'Nothing is as disastrous as terrorism. (Comparative) ', 'Terrorism is more disastrous .', 'Terrorism is disastrous than anything.', 'Terrorism is more disastrous than anything.', 'Terrorism is most disastrous than anything.', 'c', 'Terrorism is more disastrous than anything.', ''),
(11, 'It is one of the most corrosive problems of the modern world. (Positive)', 'Very few  of the modern world are as corrosive as it.', 'Very few problems of the modern world are corrosive  it.', 'Very few problems of the modern world are as corrosive.', 'Very few problems of the modern world are as corrosive as it.', 'd', 'Very few problems of the modern world are as corrosive as it.', ''),
(12, 'Very few conquerors of the world were as great as Taimur. (Superlative)', 'Taimur was one of the greatest conquerors of the world.', 'Taimur is one of the greatest conquerors of the world.', 'Taimur is one of the greatest conquerors.', 'Taimur was one of the great conquerors of the world.', 'a', 'Taimur was one of the greatest conquerors of the world.', ''),
(13, 'But, it is better than not answering at all. (Positive)', 'But, not answering at all is as goodest as it.', 'But, not answering at all is  good  it.', 'Answering at all is as good as it.', 'But, not answering at all is as best as it.', 'c', 'But, not answering at all is as good as it.', ''),
(14, 'Their contribution is greater than any other thing (Make it positive)', 'No other thing is as great as their contribution.', 'No other thing is as greatest as their contribution.', 'Very few thing is as great as their contribution.', 'Very few thing are as great as their contribution.', 'a', 'No other thing is as great as their contribution.', ''),
(15, 'A freedom fighter is the greatest son of the soil. (Make it Comparative)', 'A freedom fighter is great than any other son of the soil.', 'A freedom fighter are greater than any other son of the soil.', 'A freedom fighter is best than any other son of the soil.', 'A freedom fighter is greater than any other son of the soil.', 'd', 'A freedom fighter is greater than any other son of the soil.', ''),
(16, 'It is the largest sea-beach in the world. (Comparative)', 'It is largest than any other sea-beach in the world.', 'It is larger than any other sea-beach in the world.', 'It is larger than any other sea-beach.', 'It is large than any other sea-beach in the world.', 'b', 'It is larger than any other sea-beach in the world.', ''),
(17, 'It is one of the most beautiful sea-beaches in the world. (Positive)', 'Very few sea-beaches in the world.', 'No other sea-beaches in the world are as beautiful as it.', 'Very few sea-beaches in the world are as beautiful as it.', 'Very few sea-beaches in the world is as beautiful as it.', 'c', 'Very few sea-beaches in the world are as beautiful as it.', ''),
(18, 'No other man is as happy as a successful man. (Superlative)', 'A successful man is the happiest man.', 'A  man is the happiest man.', 'A successful man is the happy man.', 'A successful man is the happier man.', 'a', 'A successful man is the happiest man.', ''),
(19, 'A hardworking man is healthier than an idle man. (Positive)', 'An idle man is as healthy as a hardworking man.', 'An idle man is not as healthy  a hardworking man.', 'An idle man is not as a hardworking man.', 'An idle man is not as healthy as a hardworking man.', 'd', 'An idle man is not as healthy as a hardworking man.', ''),
(20, 'Women should work as much as men. (Comparative)', 'Women should not work less than men.', 'Women should  work less than men.', 'Women should not work than men.', 'Women should not work less men.', 'a', 'Women should not work less than men.', ''),
(21, 'No other student in the class is as bad as a failed student. (Superlative)', 'A failed student is in the class.', 'A failed student is the worst student in the class.', 'A failed student is the worstest student in the class.', 'A failed student is the worser student in the class.', 'b', 'A failed student is the worst student in the class.', ''),
(22, 'Haji Mohammad Mohsin was more generous than any other men in this subcontinent. (Use positive degree)', 'No other man in this continent were as generous as Haji Mohammad Mohsin.', 'Very few man in this continent was as generous as Haji Mohammad Mohsin.', 'No other man in this continent was as generous as Haji Mohammad Mohsin.', 'No other man in this continent was as generousious as Haji Mohammad Mohsin.', 'c', 'No other man in this continent was as generous as Haji Mohammad Mohsin.', ''),
(23, 'Books are the greatest friends. (Use Positive degree)', 'Very few friends are as great as books.', 'No other friends is as great as books.', 'No other friends are as greatest as books.', 'No other friends are as great as books.', 'd', 'No other friends are as great as books.', ''),
(24, 'She is one of the greatest persons of the world. (Make it positive)', 'Very few persons of the world are as great as she.', 'Very few persons of the world are as greatest as she.', 'No other persons of the world are as great as she.', 'Very few persons of the world is as great as she.', 'a', 'Very few persons of the world are as great as she.', ''),
(25, 'He was one of the best cap makers with palm leaves. (Positive)', 'Very few cap makers with palm leaves is as good as he.', 'Very few cap makers with palm leaves were as good as he.', 'Very few cap makers with palm leaves were as best as he.', 'No other cap makers with palm leaves were as good as he.', 'b', 'Very few cap makers with palm leaves were as good as he.', ''),
(26, 'He is older than I. (Positive degree)', 'I am not as old as he.', 'I am not as old  he.', 'I am as oldest as he.', 'I am not as older as he.', 'a', 'I am not as old as he.', ''),
(27, 'William Wordsworth is one of the best well-known poets in English literature (Positive)', 'Very few well-known poets in English literature are as good as William Wordsworth.', 'No other well-known poets in English literature are as good as William Wordsworth.', 'Very few well-known poets in English literature is as good as William Wordsworth.', 'Very few well-known poets in English literature is as best as William Wordsworth.', 'a', 'Very few well-known poets in English literature are as good as William Wordsworth.', ''),
(28, 'Flood is one of the most dangerous natural disasters. ( Comparative degree)', 'Flood are more dangerous than most other natural disasters.', 'Flood is more dangerous than most other natural disasters.', 'Flood is most dangerous than most other natural disasters.', 'None', 'b', 'Flood is more dangerous than most other natural disasters.', ''),
(29, 'Dhaka is the most risky city in the earthquake zone. (Positive degree)', 'Very few city in the earthquake zone is as risker as Dhaka.', 'Very few city in the earthquake zone is as riskiest as Dhaka.', 'No other city in the earthquake zone is as risky as Dhaka.', 'Very few city in the earthquake zone is as risky as Dhaka.', 'c', 'No other city in the earthquake zone is as risky as Dhaka.', ''),
(30, 'He was one of the greatest dramatists in Bangla literature. (Make it positive degree)', 'Very few dramatists in Bangla literature were as great as he.', 'Very few dramatists in Bangla literature were as greatest as he.', 'Very few dramatists in Bangla literature was great as he.', 'No other dramatists in Bangla literature were as great as he.', 'a', 'Very few dramatists in Bangla literature were as great as he.', ''),
(31, 'My jungle hut is one of the most peaceful places in the world. (Make positive degree)', 'Very few places in the world is as peaceful as my jungle hut.', 'Very few places in the world are as peacefullest as my jungle hut.', 'Very few places in the world are as peaceful are my jungle hut.', 'Very few places in the world are as peaceful as my jungle hut.', 'd', 'Very few places in the world are as peaceful as my jungle hut.', ''),
(32, 'Very few friends are as great as a good book. (Make superlative sentence)', 'A good book  the greatest friends.', 'A good book is  the great friends.', 'A good book is one of the great friends.', 'A good book is one of the greatest friends.', 'd', 'A good book is one of the greatest friends.', ''),
(33, 'A healthy poor man is happier than a sick moneyed man. (Use positive degree)', 'A sick moneyed man is as happy as a healthy poor man.', 'A sick moneyed man is not as happy as a healthy poor man.', 'A sick moneyed man is  as a healthy poor man.', 'A sick moneyed man is not as happy as a healthest poor man.', 'c', 'A sick moneyed man is not as happy as a healthy poor man.', ''),
(34, 'Television is one of the most wonderful inventions of modern science. (Make positive)', 'Now inventions of modern science are as wonderful as television.', 'No other inventions of modern science are as wonderful as television.', 'Very few inventions of modern science are as most wonderful as television.', 'Very few inventions of modern science are as wonderful as television.', 'd', 'very few inventions of modern science are as wonderful as television.', ''),
(35, 'Very few things are as useful as television. (Make Superlative degree)', 'Television is  the most useful things.', 'Television is one of the more useful things.', 'Television is one of the most useful things.', 'Television is one of the most usefulest things.', 'c', 'Television is one of the most useful things.', ''),
(36, 'Mushin was one of the best philanthropists in the world. (Positive)', 'No other philanthropists in the world were as good as Muhsin.', 'very few philanthropists in the world were as goodest as Muhsin.', 'No other philanthropists in the world were as good as Muhsin.', 'very few philanthropists in the world were as good as Muhsin.', 'd', 'very few philanthropists in the world were as good as Muhsin.', ''),
(37, 'The rose is the best of all flowers. (Positive)', 'No other flowers are as good as the rose.', 'Very few flowers are as good as the rose.', 'No other flowers are good as the rose.', 'No other flowers are as best as the rose.', 'a', 'No other flowers are as good as the rose.', ''),
(38, 'It is lovelier than all other flowers. (Superlative)', 'It is the lovely of all flowers.', 'It is the most loveliest of all flowers.', 'It is the loveliest of all flowers.', 'It is the more loveliest of all flowers.', 'c', 'It is the loveliest of all flowers.', ''),
(39, 'No other student in the class is as bad as a failed one. (Superlative)', 'A failed student is the most worst one in the class.', 'A failed student is the worster one in the class.', 'A failed student is the worstest one in the class.', 'A failed student is the worst one in the class.', 'd', 'A failed student is the worst one in the class.', ''),
(40, 'He was one of the best cap makers with palm leaves. (Positive)', 'very few cap makers with palm leaves were as good as he.', 'very few cap makers with palm leaves is as good as he.', 'very few cap makers with palm leaves were as best as he.', 'None', 'a', 'very few cap makers with palm leaves were as good as he.', ''),
(41, 'She was one of the most intelligent girls in the school. (Positive)', 'very few girls in the school were so/as intelligent as she.', 'very few girls in the school  so intelligent as she.', 'very few girls in the school is  so/as intelligent as she.', 'very few girls in the school were so/as most intelligent as she.', 'a', 'very few girls in the school were so/as intelligent as she.', ''),
(42, 'Terrorism is more disastrous than anything. (Positive)', 'Nothing is so/as disastrous  terrorism.', 'Nothing is  disastrous as terrorism.', 'Nothing is so/as disastrous as terrorism.', 'None', 'c', 'Nothing is so/as disastrous as terrorism.', ''),
(43, 'Gold is one of the most precious metals. (Positive)', 'very metals are as precious as gold.', 'very few metals are as precious as gold.', 'very few metals is as precious as gold.', 'very few metals are as most precious as gold.', 'b', 'very few metals are as precious as gold.', ''),
(44, 'Computer is one of the most important inventions of modern science. (Positive)', 'very few inventions of modern science is as important as Computer.', 'very few inventions of modern science are as important as Computer.', 'very few inventions of modern science as important as Computer.', 'very few inventions of modern science are as more important as Computer.', 'b', 'very few inventions of modern science are as important as Computer.', ''),
(45, 'Internet is as important as computer. (Comparative)', 'Internet is less important computer.', 'Internet is not less important  computer.', 'Internet  important than computer.', 'None', 'd', 'Internet is not less important than computer.', ''),
(46, 'It is greater than all other inventions of modern science. (Superlative)', 'It is the  good of all inventions of modern science.', 'It is the greatest of all inventions of modern science.', 'It are the greatest of all inventions of modern science.', 'It is the great of all inventions of modern science.', 'b', 'It is the greatest of all inventions of modern science.', ''),
(47, 'Youth is the most valuable season of life. (Positive)', 'No other season in life is as more valuable as youth.', 'No other season in life is as valuable as youth.', 'No other season in life is as most valuable as youth.', 'None', 'b', 'No other season in life is as valuable as youth.', ''),
(48, 'Books are the greatest friends. (Positive)', 'No other friends are as good as books.', 'No other friends is as great as books.', 'No other friends are as great as books.', 'No other friends is as greatest as books.', 'c', 'No other friends are as great as books.', ''),
(49, 'Reading books is the noblest habit. (Comparative)', 'Reading books is most nobler than any other habit.', 'Reading books is more nobler than any other habit.', 'Reading books is nobler than any other habit.', 'Reading books is noble than any other habit.', 'c', 'Reading books is nobler than any other habit.', ''),
(50, 'At present, it is the most popular game in our country. (Comparative)', 'At present, it is more popular any other game in our country.', 'At present, it is more popular than any other game in our country.', 'At present, it is most popular than any other game in our country.', 'None', 'b', 'At present, it is more popular than any other game in our country.', '');

-- --------------------------------------------------------

--
-- Table structure for table `rl6dh9z3fo`
--

CREATE TABLE `rl6dh9z3fo` (
  `id` int(255) DEFAULT NULL,
  `question` varchar(4000) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `explanation` varchar(3000) DEFAULT NULL,
  `image_name` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rl6dh9z3fo`
--

INSERT INTO `rl6dh9z3fo` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explanation`, `image_name`) VALUES
(1, 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦ªà§à¦°à¦¾à¦•à§à¦¤à¦¨ à¦°à¦¾à¦·à§à¦Ÿà§à¦°à¦ªà¦¤à¦¿ à¦à¦° à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à¦¾à§œà¦¿ à¦•à§‹à¦¨ à¦œà§‡à¦²à¦¾à§Ÿ ? ', 'à¦—à¦¾à¦œà§€à¦ªà§à¦°', 'à¦–à§à¦²à¦¨à¦¾ ', 'à¦•à¦¿à¦¶à§‹à¦°à¦—à¦žà§à¦œ', 'à¦šà¦Ÿà§à¦°à¦—à§à¦°à¦¾à¦®', 'c', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦ªà§à¦°à¦¾à¦•à§à¦¤à¦¨ à¦°à¦¾à¦·à§à¦Ÿà§à¦°à¦ªà¦¤à¦¿ à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦®à¦¿à¦¦ à¦à¦° à¦¬à¦¾à§œà¦¿ à¦•à¦¿à¦¶à§‹à¦°à¦—à¦žà§à¦œ à¦œà§‡à¦²à¦¾à§Ÿ à¥¤', ''),
(2, '\"à¦†à¦®à¦¾à¦° à¦†à¦›à§‡ à¦œà¦²\"- à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸à§‡à¦° à¦°à¦šà§Ÿà¦¿à¦¤à¦¾ à¦•à§‡ ?', 'à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥ à¦ à¦¾à¦•à§à¦°', 'à¦¹à§à¦®à¦¾à§Ÿà§à¦¨ à¦†à¦¹à¦®à§‡à¦¦', 'à¦¸à§à¦¨à§€à¦² à¦—à¦™à§à¦—à§‹à¦ªà¦¾à¦§à§à¦¯à¦¾à§Ÿ', 'à¦œà¦¸à§€à¦®à¦‰à¦¦à§à¦¦à§€à¦¨', 'b', '\"à¦†à¦®à¦¾à¦° à¦†à¦›à§‡ à¦œà¦²\"- à¦¹à§à¦®à¦¾à§Ÿà§à¦¨ à¦†à¦¹à¦®à§‡à¦¦', 'maxresdefault.jpg'),
(3, '\"à¦­à§‹à¦° à¦¹à¦²à§‹ , à¦¦à§‹à¦° à¦–à§‹à¦²à§‹ - à¦–à§à¦•à§à¦®à¦¨à¦¿ à¦“à¦  à¦°à§‡ \" à¦•à¦¾à¦° à¦°à¦šà¦¨à¦¾ ?', 'à¦œà¦®à§€à¦®à¦‰à¦¦à§à¦¦à§€à¦¨', 'à¦¸à§à¦•à§à¦®à¦¾à¦° à¦°à¦¾à§Ÿ', 'à¦•à¦¾à¦œà§€ à¦¨à¦œà¦°à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦•à§‡à¦‰à¦‡ à¦¨à§Ÿ', 'b', '\"à¦­à§‹à¦° à¦¹à¦²à§‹ , à¦¦à§‹à¦° à¦–à§‹à¦²à§‹ - à¦–à§à¦•à§à¦®à¦¨à¦¿ à¦“à¦  à¦°à§‡ \" à¦•à¦¬à¦¿à¦¤à¦¾à¦° à¦°à¦šà§Ÿà¦¿à¦¤à¦¾ à¦¸à§à¦•à§à¦®à¦¾à¦° à¦°à¦¾à§Ÿ', ''),
(4, 'à¦¬à¦¿à¦­à§à¦¤à¦¿à¦­à§à¦·à¦¨ à¦¬à¦¨à§à¦¦à§‹à¦ªà¦¾à¦§à§à¦¯à¦¾à§Ÿà§‡à¦° à¦°à¦šà¦¿à¦¤ à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸ à¦¨à§Ÿ à¦•à§‹à¦¨à¦Ÿà¦¿ ? ', 'à¦†à¦®à¦°à¦¾ à¦•à¦°à¦¬ à¦œà§Ÿ', 'à¦†à¦°à¦£à§à¦¯à¦•', ' à¦‡à¦›à¦¾à¦®à¦¤à¦¿', 'à¦ªà¦¦à§à¦®à¦¾à¦¬à¦¤à§€', 'a', 'à¦†à¦®à¦°à¦¾ à¦•à¦°à¦¬ à¦œà§Ÿ à¦à¦Ÿà¦¿ à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸ à¦¨à§Ÿ , à¦à¦•à¦Ÿà§€ à¦—à¦¾à¦¨', ''),
(5, 'à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à¦•à§Ÿà¦Ÿà¦¿ à¦¬à¦¿à¦­à¦¾à¦— à¦°à§Ÿà§‡à¦›à§‡ ? ', 'à§¬', 'à§­', 'à§®', 'à§¯', 'c', 'à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à§® à¦Ÿà¦¿ à¦¬à¦¿à¦­à¦¾à¦— à¦°à§Ÿà§‡à¦›à§‡ à¥¤', ''),
(6, 'à¦¨à¦¿à¦šà§‡à¦° à¦•à§‹à¦¨ à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦•à¦¨à§à¦ à¦¶à¦¿à¦²à§à¦ªà§€  \" Let there be light \" à¦à¦¨à¦œà¦¿à¦“ à¦à¦° à¦¯à§à¦•à§à¦¤ à¦°à§Ÿà§‡à¦›à§‡ ? ', 'à¦—à§à¦°à§ à¦œà§‡à¦®à¦¸à§â€Œ', 'à¦†à¦‡à§Ÿà§à¦¬ à¦¬à¦¾à¦šà§à¦šà§', 'à¦…à¦°à¦¿à¦œà¦¿à¦¤ à¦¸à¦¿à¦‚ ', 'à¦®à¦¿à¦¨à¦¾à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'c', 'à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦•à¦¨à§à¦ à¦¶à¦¿à¦²à§à¦ªà§€ à¦…à¦°à¦¿à¦œà¦¿à¦¤ à¦¸à¦¿à¦‚  \" Let there be light \" à¦à¦¨à¦œà¦¿à¦“ à¦à¦° à¦¯à§à¦•à§à¦¤ à¦°à§Ÿà§‡à¦›à§‡', ''),
(7, 'à¦¬à¦¿à¦–à§à¦¯à¦¾à¦¤ à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦Ÿà¦¿à¦­à¦¿ à¦ªà§à¦°à§‹à¦—à§à¦°à¦¾à¦® \"à¦‡à¦¤à§à¦¯à¦¾à¦¦à¦¿\" à¦à¦° à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦• à¦•à§‡ ?', 'à¦¹à¦¾à¦¨à¦¿à¦« à¦¸à¦‚à¦•à§‡à¦¤', 'à¦«à§‡à¦°à¦¦à§Œà¦¸', 'à¦°à¦¿à§Ÿà¦¾à¦œ', 'à¦®à¦¿à¦¶à¦¾ à¦¸à¦“à¦¦à¦¾à¦—à¦°', 'a', 'à¦¬à¦¿à¦–à§à¦¯à¦¾à¦¤ à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦Ÿà¦¿à¦­à¦¿ à¦ªà§à¦°à§‹à¦—à§à¦°à¦¾à¦® \"à¦‡à¦¤à§à¦¯à¦¾à¦¦à¦¿\" à¦à¦° à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦• à¦¹à¦¾à¦¨à¦¿à¦« à¦¸à¦‚à¦•à§‡à¦¤', ''),
(8, '\"à¦‡à¦¤à§à¦¯à¦¾à¦¦à¦¿\" à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨ à¦à¦° à¦Ÿà¦¾à¦‡à¦Ÿà§‡à¦² à¦—à¦¾à¦¨ à¦à¦° à¦ªà§à¦°à¦¥à¦® à¦²à¦¾à¦‡à¦¨à¦Ÿà¦¿ à¦•à¦¿ ?', 'à¦†à§Ÿà¦¨à¦¾ à¦®à¦¨ à¦­à¦¾à¦™à¦¾ à¦†à§Ÿà¦¨à¦¾', 'à¦…à¦¬à¦¿à¦°à¦¾à¦® à¦šà§à¦ªà¦¿ à¦šà§à¦ªà¦¿ ', 'à¦šà¦¾à¦¤à¦• à¦ªà§à¦°à¦¾à§Ÿ à¦…à¦¹à¦° à¦¨à¦¿à¦¶à¦¿', 'à¦“ à¦†à¦®à¦¾à¦° à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦Ÿà¦¿', 'b', 'à¦…à¦¬à¦¿à¦°à¦¾à¦® à¦šà§à¦ªà¦¿ à¦šà§à¦ªà¦¿ , à¦šà§‡à¦¹à¦¾à¦°à¦¾à¦Ÿà¦¾ à¦ªà¦¾à¦²à§à¦Ÿà§‡ à¦¯à¦¾à¦¬à§‡ à¦¬à¦¹à§à¦°à§à¦ªà¦¿', ''),
(9, '\"à¦†à¦®à¦¿ à¦¬à¦¾à¦¬à¦¾-à¦®à¦¾à§Ÿà§‡à¦° à¦¶à¦¤ à¦†à¦¦à¦°à§‡à¦° à¦®à§‡à§Ÿà§‡ \" - à¦Ÿà¦¾à¦‡à¦Ÿà§‡à¦² à¦—à¦¾à¦¨à¦Ÿà¦¿ à¦•à§‹à¦¨ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦¶à§‹à¦¨à¦¾ à¦¯à¦¾à§Ÿ ? ', 'à¦¸à¦¿à¦¸à¦¿à¦®à¦ªà§à¦°', 'à¦®à¦¿à¦¨à¦¾ à¦•à¦¾à¦°à§à¦Ÿà§à¦¨', 'à¦—à§‹à¦ªà¦¾à¦²à¦­à¦¾à§œ', 'à¦¡à§‹à¦°à§‡à¦®à¦¨ ', 'b', '\"à¦†à¦®à¦¿ à¦¬à¦¾à¦¬à¦¾-à¦®à¦¾à§Ÿà§‡à¦° à¦¶à¦¤ à¦†à¦¦à¦°à§‡à¦° à¦®à§‡à§Ÿà§‡ \" - à¦®à¦¿à¦¨à¦¾ à¦•à¦¾à¦°à§à¦Ÿà§à¦¨ ', ''),
(10, 'à¦†à¦¨à§à¦¤à¦°à§à¦œà¦¾à¦¤à¦¿à¦• à¦®à¦¾à¦¤à§ƒà¦­à¦¾à¦·à¦¾ à¦¦à¦¿à¦¬à¦¸ à¦•à¦¤à§‹ à¦¤à¦¾à¦°à¦¿à¦– ?', 'à§¨à§« à¦¶à§‡ à¦®à¦¾à¦°à§à¦š', 'à§§à§¬ à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦°', 'à§¨à§¨ à¦«à§‡à¦¬à§à¦°à§à§Ÿà¦¾à¦°à¦¿', 'à§¨à§§ à¦«à§‡à¦¬à§à¦°à§à§Ÿà¦¾à¦°à¦¿ ', 'd', 'à¦†à¦¨à§à¦¤à¦°à§à¦œà¦¾à¦¤à¦¿à¦• à¦®à¦¾à¦¤à§ƒà¦­à¦¾à¦·à¦¾ à¦¦à¦¿à¦¬à¦¸ à¦•à¦¤à§‹ à¦¤à¦¾à¦°à¦¿à¦– à§¨à§§ à¦«à§‡à¦¬à§à¦°à§à§Ÿà¦¾à¦°à¦¿ à¥¤ ', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
