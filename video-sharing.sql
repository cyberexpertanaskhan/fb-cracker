-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 11:24 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video-sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `vs_videos`
--

CREATE TABLE IF NOT EXISTS `vs_videos` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `thumbnails` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_videos`
--

INSERT INTO `vs_videos` (`id`, `name`, `description`, `thumbnails`, `url`, `comments`, `date_created`, `date_modified`) VALUES
(11, 'Eddie Griffin on Bill Cosby', 'Eddie Griffin says that male stars don''t leave this business clean...', '["http:\\/\\/img.youtube.com\\/vi\\/EpOo-DtgUjs\\/0.jpg","http:\\/\\/img.youtube.com\\/vi\\/EpOo-DtgUjs\\/1.jpg","http:\\/\\/img.youtube.com\\/vi\\/EpOo-DtgUjs\\/2.jpg"]', 'https://www.youtube.com/embed/EpOo-DtgUjs', 'This is the opinion of Eddie Griffin...', '2016-01-05 10:41:13', ''),
(12, 'Football  Penalty Goals', 'Must See Football (Soccer) Penalty Goals. Funny and Crazy âœª Top 10', '["http:\\/\\/img.youtube.com\\/vi\\/xfLmmRS7eiY\\/0.jpg","http:\\/\\/img.youtube.com\\/vi\\/xfLmmRS7eiY\\/1.jpg","http:\\/\\/img.youtube.com\\/vi\\/xfLmmRS7eiY\\/2.jpg"]', 'https://www.youtube.com/embed/xfLmmRS7eiY', 'This is just a funny vid... not real', '2016-01-05 10:48:24', ''),
(20, 'Funniest Fight ever', '', '["http:\\/\\/img.youtube.com\\/vi\\/8amLdrMTEJE\\/0.jpg","http:\\/\\/img.youtube.com\\/vi\\/8amLdrMTEJE\\/1.jpg","http:\\/\\/img.youtube.com\\/vi\\/8amLdrMTEJE\\/2.jpg"]', 'https://www.youtube.com/embed/8amLdrMTEJE', 'He''s not circling him, he''s just caught in the dude''s orbit', '2016-01-06 10:03:45', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vs_videos`
--
ALTER TABLE `vs_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vs_videos`
--
ALTER TABLE `vs_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
