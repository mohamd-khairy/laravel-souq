-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 02:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `souq`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(400) NOT NULL,
  `p_details` text NOT NULL,
  `p_image` text NOT NULL,
  `p_role` varchar(100) NOT NULL,
  `p_cost` double NOT NULL,
  `p_datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `user_mobile` varchar(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_address` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_title`, `p_details`, `p_image`, `p_role`, `p_cost`, `p_datetime`, `user_id`, `p_address`, `p_type`, `user_mobile`, `user_email`, `user_address`) VALUES
(1, 'iphone 6', 'Space Gray iPhone 6 Plus 64\r\nNillkin Defender 4 cover \r\nUsed from 1 January \r\nAll accessories is new without using it', '151574880788254i.jpg', 'sale', 6000, '2018-01-12 10:20:07', 0, 'damanhour', 'mobiles', '01021952160', 'red.devile2011@gmail.com', 'damanhour'),
(2, 'vila', 'منزلنا جميل جدا وواسع فيه غرفه نوم ,غرفه طعام , غرفه جلوس , مطبخ, مكتبه, حمامات, حديقه, وكراج.الحديقه كبيره وتحتوي على زهور , حوض , اعشاب , نافورة, وقفص طيور . في الكراج يكفي لسيارتين وبه رفوف للمعدات', '15157490958899h.jpg', 'part_time', 10000000, '2018-01-12 10:24:55', 0, 'Cairo', 'homes', '01021952160', 'mohamed.khairy.eg@outlook.com', 'Cairo'),
(3, 'test', 'TESTTESTTESTTESTTESTTEST', '152934620249542148618_249536701882968_758533200_n.jpg', 'other', 1000, '2018-06-18 20:23:22', 0, 'damanhour', 'others', '1021952161', 'red.devile2011@gmail.com', 'damanhour');

-- --------------------------------------------------------

--
-- Table structure for table `pro_img`
--

CREATE TABLE IF NOT EXISTS `pro_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pro_img`
--

INSERT INTO `pro_img` (`img_id`, `img`, `p_id`) VALUES
(1, '1529346202971531005761_746648172025631_783959580_n.jpg', 3),
(2, '1529346202726321005790_524828277631605_1446857660_n.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `type` enum('local','twitter','google','facebook') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `address`, `type`) VALUES
(14, 'Mo7md_5airy', '', '', '', 'Damanhour', 'twitter'),
(16, 'فيزة احمد Ali', 'shimoo1281@gmail.com', '', '', '', 'google'),
(17, 'mohamed', 'red.devile20@gmail.com', 'a9eea5ad37d2c7f39030068c2489aa9c', '01021952160', 'damanhour', 'local'),
(19, 'mahmoud', 'mahmoud@gmail.com', '165448f55b89e476715eb4d416a4fd58', '01021952160', 'damanhour', 'local'),
(20, '', '', '', '', '', 'twitter'),
(21, 'Mohamed Khairy', 'red.devile2011@gmail.com', '', '', '', 'google');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
