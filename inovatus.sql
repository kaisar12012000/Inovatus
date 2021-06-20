-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2021 at 05:04 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inovatus`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_data`
--

DROP TABLE IF EXISTS `testimonials_data`;
CREATE TABLE IF NOT EXISTS `testimonials_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Job` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials_data`
--

INSERT INTO `testimonials_data` (`id`, `Name`, `Email`, `PhoneNo`, `Address`, `Job`) VALUES
(11, 'Irshaduddin Imajuddin Chowdhury', 'kaisarnagpur@gmail.com', '0982 374 0659', 'Gandhi layout, Jafar Nagar', 'Web developer'),
(12, 'Irshaduddin Imajuddin Chowdhury', 'kaisarnagpur@gmail.com', '0982 374 0659', 'Gandhi layout, Jafar Nagar', 'Android developer'),
(13, 'Imajuddin Chowdhury', 'tajdaihant@gmail.com', '9545791274', 'Gandhi layout, Jafar Nagar', 'Content writer'),
(14, 'Kamrunnahar Chowdhury', 'kamrunnagpur@gamil.com', '9545791274', 'Gandhi layout, Jafar Nagar', 'Social media marketer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
