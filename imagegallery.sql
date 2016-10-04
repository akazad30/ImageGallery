-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2016 at 12:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagegallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GalleryId` int(11) NOT NULL,
  `GalleryName` varchar(500) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`GalleryId`, `GalleryName`, `Image`, `Status`) VALUES
(208, 'GalleryOne', 'skype-icon.png', NULL),
(209, 'GalleryOne', 'Social Networks linkedin.png', NULL),
(210, 'GalleryOne', 'twitter-icon.png', NULL),
(211, 'GalleryOne', 'twitter-social-network-icon.png', NULL),
(212, 'GalleryOne', '8skype-icon.png', NULL),
(213, 'GalleryTwo', '8skype-icon.png', NULL),
(214, 'GalleryTwo', '10Social Networks linkedin.png', NULL),
(215, 'GalleryFour', '7skype-icon.png', NULL),
(216, 'GalleryFour', '7Social Networks linkedin.png', NULL),
(217, 'GalleryTwo', '888skype-icon.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleryinfotable`
--

CREATE TABLE `galleryinfotable` (
  `GalleryId` int(11) NOT NULL,
  `GalleryName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleryinfotable`
--

INSERT INTO `galleryinfotable` (`GalleryId`, `GalleryName`) VALUES
(1, 'GalleryOne'),
(2, 'GalleryTwo'),
(3, 'GalleryThree'),
(4, 'GalleryFour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GalleryId`);

--
-- Indexes for table `galleryinfotable`
--
ALTER TABLE `galleryinfotable`
  ADD PRIMARY KEY (`GalleryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `galleryinfotable`
--
ALTER TABLE `galleryinfotable`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
