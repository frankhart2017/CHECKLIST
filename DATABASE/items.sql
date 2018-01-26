-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-f.hosting.stackcp.net
-- Generation Time: Jan 26, 2018 at 08:57 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checklist-3234bdb4`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `count` int(11) NOT NULL,
  `comment` text NOT NULL,
  `checked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `count`, `comment`, `checked`) VALUES
(1, 'Bed sheets', 2, '', 0),
(2, 'Pillow Cover', 1, '', 0),
(3, 'Towel', 1, '', 0),
(4, 'Shorts', 3, 'NIL', 0),
(5, 'T-Shirt (Home)', 3, '', 0),
(6, 'Shirts', 4, '', 0),
(7, 'T-Shirt ', 3, '2 Done', 0),
(8, 'Jeans', 3, '', 0),
(9, 'Vest', 2, '', 0),
(10, 'Underwear', 10, '', 0),
(11, 'Socks', 2, '', 0),
(12, 'Handkerchief', 3, '', 0),
(13, 'Shaving Cream', 1, '', 0),
(14, 'Razor', 1, '', 0),
(15, 'Shaver', 1, '', 0),
(16, 'Shaving Brush', 1, '', 0),
(17, 'Power Bank', 1, '', 0),
(18, 'Immortal India', 1, '', 0),
(19, 'Mess Card', 1, '', 0),
(20, 'Id Card', 1, '', 0),
(21, 'Earphone', 1, '', 0),
(22, 'Spectacle Boxes', 2, 'NIL', 0),
(23, 'Slippers', 1, '', 0),
(24, 'Loafer', 1, '', 0),
(25, 'Roll on Deo', 1, '', 0),
(26, 'Face wash', 1, '', 0),
(27, 'Brush', 1, '', 0),
(28, 'Comb', 2, '1 Done', 0),
(29, 'Eye drops', 2, '', 0),
(30, 'Hall ticket', 1, '', 0),
(31, 'Watch', 1, '', 0),
(32, 'Shaver charger', 1, '', 0),
(33, 'Outform', 1, '', 0),
(34, 'Nail cutter', 1, '', 0),
(35, 'Keys', 1, '', 0),
(36, 'Laptop', 1, '', 0),
(37, 'Second sem report card', 1, '', 0),
(38, 'Paste', 1, '', 0),
(39, 'Pajama', 1, '', 0),
(40, 'Mobile charger', 1, '', 0),
(41, 'Soap case', 1, 'Put inside', 0),
(42, 'Pillow', 1, 'Put inside', 0),
(43, 'Wallet', 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
