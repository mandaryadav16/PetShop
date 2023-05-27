-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 01:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE `tbl_fee` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`id`, `name`, `price`) VALUES
(1, 'fee', 5),
(2, 'delivery', 100),
(3, 'discount', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `method` int(11) DEFAULT NULL,
  `infocart` text DEFAULT NULL,
  `total` float DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `name`, `phone`, `address`, `note`, `method`, `infocart`, `total`, `active`) VALUES
(7, 'Om Patil', 2147483647, '16, Shastri Nagar Rd, Shastri Nagar, Kothrud, Pune, Maharashtra 411038', 'ASAP', 2, '<div class=\"mb-2\" style=\"width: 100%;height: 80px;display: flex;\">			<div style=\"width: 80px;height: 80px;\">			<img src=\"../public/images/product/a.png\" width=\"100%\" height=\"100%\" style=\"object-fit: contain\">			</div>			<div class=\"pl-1\" style=\"width: calc(100% - 80px);height: 80px;\">			<p class=\"font-weight-bold mb-0\">Germanian Little Pug</p>			<p class=\"mb-0 float-left\" style=\"font-size: 80%;margin-top: -2px\">Little Dogs - </p>			<p class=\"mb-0 float-left\" style=\"font-size: 80%;margin-top: -2px\">&nbspQuanliti: 4</p>					<div class=\"float-right font-weight-bold mb-0 mt-4\" style=\"font-size: 125%\">24000₹</div>			</div>			</div>', 22900, 1),
(8, 'Ram More', 2147483647, '5X98+JPV, Eastern Express Hwy, MHADA Colony, Mulund East, Mumbai, Maharashtra 400081', 'With Love', 2, '<div class=\"mb-2\" style=\"width: 100%;height: 80px;display: flex;\">			<div style=\"width: 80px;height: 80px;\">			<img src=\"../public/images/product/091151am2cd43b_d0f2670282bb4c6585a269ef1949140b_mv2.png\" width=\"100%\" height=\"100%\" style=\"object-fit: contain\">			</div>			<div class=\"pl-1\" style=\"width: calc(100% - 80px);height: 80px;\">			<p class=\"font-weight-bold mb-0\">Germanian Little Pug</p>			<p class=\"mb-0 float-left\" style=\"font-size: 80%;margin-top: -2px\">Little Dogs - </p>			<p class=\"mb-0 float-left\" style=\"font-size: 80%;margin-top: -2px\">&nbspQuanliti: 4</p>					<div class=\"float-right font-weight-bold mb-0 mt-4\" style=\"font-size: 125%\">24000₹</div>			</div>			</div>', 22900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `origin` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `background` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `type`, `content`, `name`, `age`, `origin`, `weight`, `price`, `image`, `background`, `active`) VALUES
(1, 'Alex -  Germanian Little Pug', 1, 'French Bulldogs are one of the more popular dog breeds in the United States. Despite their name, they come from England, not France, and have been bred to be companion animals for several hundred years. Frenchies have the characteristic short muzzles of bulldogs, but are smaller than their traditional Bulldog counterparts. They are very playful and affectionate in nature, and love to be near their people. French Bulldogs, which tend to be no larger than 28 lbs. in adulthood, are adaptable to both small and large spaces, and are devoted pets to individuals and families.', 'Alex', 5, 1, 10, 20000, '1.png', 1, 1),
(2, 'Stanley - Little Pub', 1, 'Meet Stanley! This handsome, baby-doll faced prince can\'t wait to venture off to his new home. His coat is absolutely beautiful and perfect to pet all day! He hopes you like getting puppy kisses because he\'s not shy about giving them out! Stanley will arrive healthy with his vaccinations up to date. He is so excited to meet you. He can\'t wait to jump into your arms and shower you with puppy kisses! Don’t miss out!', 'Stanley Baby', 2, 2, 12, 30000, '2.png', 2, 1),
(3, 'Marly - French Bulldogs', 1, 'Stop right there and look no further! Marly is the one you have been looking for. She will win your heart with her first puppy kiss. Marly is the perfect cuddle buddy. She is always ready to curl up with you and snuggle up right next to you. Marly will be sure to come home to you happy, healthy, and full of kisses just for you. She will be up to date on her vaccinations and pre-spoiled. What more could you ask for? Make this cutie your cuddle buddy, and she will be sure to be that perfect addition that you have searched for.', 'Marly', 1, 3, 5, 15000, '3.png', 3, 1),
(10, 'Jack - French Bulldogs', 2, 'French Bulldogs are one of the more popular dog breeds in the United States. Despite their name, they come from England, not France, and have been bred to be companion animals for several hundred years. Frenchies have the characteristic short muzzles of bulldogs, but are smaller than their traditional Bulldog counterparts. They are very playful and affectionate in nature, and love to be near their people. French Bulldogs, which tend to be no larger than 28 lbs. in adulthood, are adaptable to both small and large spaces, and are devoted pets to individuals and families.', 'Jack', 4, 4, 5, 34340, '090941am2cd43b_393a4609550a4aa8a3dc4c01e44d8948_mv2.png', 1, 1),
(11, 'Shalby - Little Pug', 1, 'Meet Shalby! This handsome, baby-doll faced prince can\'t wait to venture off to his new home. His coat is absolutely beautiful and perfect to pet all day! He hopes you like getting puppy kisses because he\'s not shy about giving them out! Stanley will arrive healthy with his vaccinations up to date. He is so excited to meet you. He can\'t wait to jump into your arms and shower you with puppy kisses! Don’t miss out!', 'Shalby', 3, 5, 6, 24000, 'a.png', 2, 1),
(12, 'Kasper - Germanian Little Pug ', 1, 'Stop right there and look no further! Marly is the one you have been looking for. She will win your heart with her first puppy kiss. Marly is the perfect cuddle buddy. She is always ready to curl up with you and snuggle up right next to you. Marly will be sure to come home to you happy, healthy, and full of kisses just for you. She will be up to date on her vaccinations and pre-spoiled. What more could you ask for? Make this cutie your cuddle buddy, and she will be sure to be that perfect addition that you have searched for.', 'Kasper', 3, 1, 6, 24000, '091058am2cd43b_816aedd775f249dd9b406405978343b2_mv2.png', 3, 1),
(13, 'Steve - French Bulldogs', 1, 'French Bulldogs are one of the more popular dog breeds in the United States. Despite their name, they come from England, not France, and have been bred to be companion animals for several hundred years. Frenchies have the characteristic short muzzles of bulldogs, but are smaller than their traditional Bulldog counterparts. They are very playful and affectionate in nature, and love to be near their people. French Bulldogs, which tend to be no larger than 28 lbs. in adulthood, are adaptable to both small and large spaces, and are devoted pets to individuals and families.', 'Steve', 3, 4, 6, 24000, '091151am2cd43b_d0f2670282bb4c6585a269ef1949140b_mv2.png', 2, 1),
(14, 'Jos - Germanian Big Pug ', 2, 'Meet Jos! This handsome, baby-doll faced prince can\'t wait to venture off to his new home. His coat is absolutely beautiful and perfect to pet all day! He hopes you like getting puppy kisses because he\'s not shy about giving them out! Stanley will arrive healthy with his vaccinations up to date. He is so excited to meet you. He can\'t wait to jump into your arms and shower you with puppy kisses! Don’t miss out!', 'Jos', 3, 3, 6, 24000, '091218am2cd43b_ad23f564a47043fbb05fd123ecf4eb8f_mv2.png', 1, 1),
(15, 'David - Germanian Little Pug ', 1, 'Meet David! This handsome, baby-doll faced prince can\'t wait to venture off to his new home. His coat is absolutely beautiful and perfect to pet all day! He hopes you like getting puppy kisses because he\'s not shy about giving them out! Stanley will arrive healthy with his vaccinations up to date. He is so excited to meet you. He can\'t wait to jump into your arms and shower you with puppy kisses! Don’t miss out!', 'David', 3, 2, 6, 32000, '091309am2cd43b_3b16ed87723a416ab8c4a46952b97c94_mv2.png', 2, 1),
(16, 'Rocky - French Bulldogs', 2, 'French Bulldogs are one of the more popular dog breeds in the United States. Despite their name, they come from England, not France, and have been bred to be companion animals for several hundred years. Frenchies have the characteristic short muzzles of bulldogs, but are smaller than their traditional Bulldog counterparts. They are very playful and affectionate in nature, and love to be near their people. French Bulldogs, which tend to be no larger than 28 lbs. in adulthood, are adaptable to both small and large spaces, and are devoted pets to individuals and families.', 'Rocky', 3, 5, 6, 12000, '091326am2cd43b_6fe1cf226e2841c2866298b5bcfc4a82_mv2.png', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
