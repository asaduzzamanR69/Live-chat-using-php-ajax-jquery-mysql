-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 06:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(200) NOT NULL,
  `msg_from` char(20) DEFAULT NULL,
  `to_msg` char(20) DEFAULT NULL,
  `messages` text,
  `msg_date` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg_from`, `to_msg`, `messages`, `msg_date`) VALUES
(1, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:11:09 pm'),
(2, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:12:24 pm'),
(3, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:05 pm'),
(4, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:07 pm'),
(5, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:09 pm'),
(6, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:10 pm'),
(7, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:14 pm'),
(8, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:14:15 pm'),
(9, 'Asadul', 'Tamanna', 'h', '2020-04-08 7:14:17 pm'),
(10, 'Asadul', 'Tamanna', 'h', '2020-04-08 7:14:18 pm'),
(11, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:15:13 pm'),
(12, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:15:15 pm'),
(13, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:15:16 pm'),
(14, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:15:17 pm'),
(15, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:15:18 pm'),
(16, 'Asadul', 'Tamanna', 'h', '2020-04-08 7:15:18 pm'),
(17, 'Asadul', 'Tamanna', 'j', '2020-04-08 7:15:19 pm'),
(18, 'Asadul', 'Tamanna', 'j', '2020-04-08 7:15:19 pm'),
(19, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:15:21 pm'),
(20, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:15:22 pm'),
(21, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:15:23 pm'),
(22, 'Asadul', 'Tamanna', ';', '2020-04-08 7:15:24 pm'),
(23, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:24 pm'),
(24, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:24 pm'),
(25, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:25 pm'),
(26, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:25 pm'),
(27, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:26 pm'),
(28, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:26 pm'),
(29, 'Asadul', 'Tamanna', 'll', '2020-04-08 7:15:26 pm'),
(30, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:26 pm'),
(31, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:15:27 pm'),
(32, 'Asadul', 'Tamanna', 'll', '2020-04-08 7:15:29 pm'),
(33, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:16:34 pm'),
(34, 'Asadul', 'Tamanna', 'jm', '2020-04-08 7:16:35 pm'),
(35, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:36 pm'),
(36, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:37 pm'),
(37, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:37 pm'),
(38, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:38 pm'),
(39, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:38 pm'),
(40, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:39 pm'),
(41, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:39 pm'),
(42, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:39 pm'),
(43, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:40 pm'),
(44, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:40 pm'),
(45, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:41 pm'),
(46, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:41 pm'),
(47, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:41 pm'),
(48, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:42 pm'),
(49, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:42 pm'),
(50, 'Asadul', 'Tamanna', 'm', '2020-04-08 7:16:43 pm'),
(51, 'Asadul', 'Tamanna', '/', '2020-04-08 7:16:45 pm'),
(52, 'Asadul', 'Tamanna', 'hg', '2020-04-08 7:16:45 pm'),
(53, 'Asadul', 'Tamanna', 'sfsf', '2020-04-08 7:16:46 pm'),
(54, 'Asadul', 'Tamanna', 'sgr', '2020-04-08 7:16:47 pm'),
(55, 'Asadul', 'Tamanna', 'f', '2020-04-08 7:16:48 pm'),
(56, 'Asadul', 'Tamanna', 'j', '2020-04-08 7:16:49 pm'),
(57, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:50 pm'),
(58, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:51 pm'),
(59, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:52 pm'),
(60, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:53 pm'),
(61, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:54 pm'),
(62, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:54 pm'),
(63, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:55 pm'),
(64, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:56 pm'),
(65, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:16:56 pm'),
(66, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:57 pm'),
(67, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:58 pm'),
(68, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:58 pm'),
(69, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:59 pm'),
(70, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:16:59 pm'),
(71, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:00 pm'),
(72, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:00 pm'),
(73, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:01 pm'),
(74, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:01 pm'),
(75, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:01 pm'),
(76, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:02 pm'),
(77, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:02 pm'),
(78, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:02 pm'),
(79, 'Asadul', 'Tamanna', 'l', '2020-04-08 7:17:03 pm'),
(80, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:19:36 pm'),
(81, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 7:19:40 pm'),
(82, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:19:45 pm'),
(83, 'Asadul', 'Tamanna', 'km', '2020-04-08 7:19:46 pm'),
(84, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:19:47 pm'),
(85, 'Asadul', 'Tamanna', 'k', '2020-04-08 7:19:49 pm'),
(86, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:21:47 pm'),
(87, 'Tamanna', 'Asadul', 'Hmm', '2020-04-08 7:21:53 pm'),
(88, 'Tamanna', 'Asadul', 'Hmm', '2020-04-08 7:21:53 pm'),
(89, 'Tamanna', 'Asadul', 'Hmm', '2020-04-08 7:22:05 pm'),
(90, 'Tamanna', 'Asadul', 'Whats up', '2020-04-08 7:22:09 pm'),
(91, 'Tamanna', 'Asadul', 'Hey', '2020-04-08 7:22:17 pm'),
(92, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:22:23 pm'),
(93, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:22:36 pm'),
(94, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:22:41 pm'),
(95, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:22:43 pm'),
(96, 'Tamanna', 'Asadul', 'Hey', '2020-04-08 7:22:48 pm'),
(97, 'Asadul', 'Tamanna', 'hi', '2020-04-08 7:23:01 pm'),
(98, 'Asadul', 'Tamanna', 'whas up', '2020-04-08 7:23:07 pm'),
(99, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:28:50 pm'),
(100, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:29:20 pm'),
(101, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 7:29:29 pm'),
(102, 'Tamanna', 'Asadul', 'Hmm', '2020-04-08 7:29:31 pm'),
(103, 'Tamanna', 'Asadul', 'ðŸ˜‚', '2020-04-08 8:03:01 pm'),
(104, 'Tamanna', 'Asadul', 'Hey whats up', '2020-04-08 8:03:09 pm'),
(105, 'Tamanna', 'Asadul', 'Hey', '2020-04-08 8:03:13 pm'),
(106, 'Tamanna', 'Asadul', 'Ji', '2020-04-08 8:03:16 pm'),
(107, 'Tamanna', 'Asadul', 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸŒ', '2020-04-08 8:03:22 pm'),
(108, 'Asadul', 'Tamanna', 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸŒ', '2020-04-08 8:03:36 pm'),
(109, 'Tamanna', 'Asadul', 'Hi', '2020-04-08 8:03:57 pm'),
(110, 'Tamanna', 'Asadul', 'Hmm', '2020-04-08 8:04:00 pm'),
(111, 'Tamanna', 'Asadul', 'Whats up', '2020-04-08 8:04:05 pm'),
(112, 'Tamanna', 'Asadul', 'Hey', '2020-04-08 8:04:07 pm'),
(113, 'Tamanna', 'Asadul', 'Lala ', '2020-04-08 8:04:13 pm'),
(114, 'Asadul', 'Tamanna', 'yes', '2020-04-08 8:04:19 pm'),
(115, 'Asadul', 'Tamanna', 'yes', '2020-04-08 8:04:22 pm'),
(116, 'Asadul', 'Tamanna', 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸŒ', '2020-04-08 8:04:24 pm'),
(117, 'Tamanna', 'Asadul', 'Ki koro ', '2020-04-08 8:04:33 pm'),
(118, 'Asadul', 'Tamanna', 'hi', '2020-04-08 8:06:17 pm'),
(119, 'Asadul', 'Tamanna', 'hi', '2020-04-08 8:24:55 pm'),
(120, 'Asadul', 'Tamanna', 'jo', '2020-04-08 8:25:26 pm'),
(121, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:45:34 pm'),
(122, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:46:55 pm'),
(123, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:47:00 pm'),
(124, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:48:04 pm'),
(125, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:49:02 pm'),
(126, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:49:05 pm'),
(127, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:49:33 pm'),
(128, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:49:45 pm'),
(129, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:50:13 pm'),
(130, 'Asadul', 'Tamanna', 'hm', '2020-04-08 9:50:18 pm'),
(131, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:50:52 pm'),
(132, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:50:58 pm'),
(133, 'Asadul', 'Tamanna', 'hey', '2020-04-08 9:51:03 pm'),
(134, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:52:06 pm'),
(135, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:52:10 pm'),
(136, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:53:21 pm'),
(137, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:53:29 pm'),
(138, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:53:32 pm'),
(139, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:53:37 pm'),
(140, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:54:18 pm'),
(141, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:54:22 pm'),
(142, 'Asadul', 'Tamanna', 'him', '2020-04-08 9:54:25 pm'),
(143, 'Asadul', 'Tamanna', 'hm', '2020-04-08 9:54:33 pm'),
(144, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:55:10 pm'),
(145, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:55:42 pm'),
(146, 'Asadul', 'Tamanna', 'hi', '2020-04-08 9:57:01 pm'),
(147, 'Asadul', 'Tamanna', 'hmm', '2020-04-08 9:57:06 pm'),
(148, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:03:23 pm'),
(149, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:04:24 pm'),
(150, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:14:04 pm'),
(151, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:14:14 pm'),
(152, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:35:57 pm'),
(153, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:36:18 pm'),
(154, 'Asadul', 'Tamanna', 'hi', '2020-04-08 10:36:28 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_name` char(20) DEFAULT NULL,
  `password` text,
  `status` char(10) DEFAULT NULL,
  `logout_time` char(50) DEFAULT NULL,
  `type_status` char(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_name`, `password`, `status`, `logout_time`, `type_status`) VALUES
('tahmid', 'tahmid', 'Offline', '2020-04-02 10:05:03 am', NULL),
('Sifat', 'sifat', 'Offline', '2020-04-06 6:04:27 pm', NULL),
('Babor', 'Babor', 'Offline', '2020-04-03 8:42:00 pm', NULL),
('Tamanna', 'tamanna', 'Offline', '2020-04-08 8:04:50 pm', NULL),
('Monowar', 'monowar', 'Offline', '2020-04-02 11:57:42 am', NULL),
('Asadul', 'asadul', 'Offline', '2020-04-08 10:36:34 pm', NULL),
('Asiya', 'asiya', 'Offline', '2020-04-02 11:37:07 am', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
