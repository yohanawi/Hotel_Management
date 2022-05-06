-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 08:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `username` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `photo`, `created_on`) VALUES
(1, 'yohan', 'yoha', 'yohan@gmail.com', 'admin', 'upload/2018024035940.jpg', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bid` int(20) NOT NULL,
  `bdes` varchar(500) CHARACTER SET latin1 NOT NULL,
  `bcost` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bid`, `bdes`, `bcost`, `bdate`) VALUES
(2, 12, 'dfhgdfhg', '545', '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `id` int(10) NOT NULL,
  `fiid` int(20) NOT NULL,
  `finame` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fique` int(50) NOT NULL,
  `fipri` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fidate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`id`, `fiid`, `finame`, `fique`, `fipri`, `fidate`) VALUES
(1, 1, 'dsfds', 545, '545', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'yohan', 'yohaaa', 'yohan@gmail.com', '123456'),
(10, 'awishka', 'awi', 'awishka@gmail.com', 'awishka');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `sid` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `semail` varchar(150) CHARACTER SET latin1 NOT NULL,
  `sphone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `saddress` varchar(300) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `sid`, `sname`, `semail`, `sphone`, `saddress`) VALUES
(3, 'rfgf', 'dddg', 'ddg@ff', '077-896-4561', 'dfdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(100) NOT NULL,
  `wname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `wnic` int(13) NOT NULL,
  `wdate` date NOT NULL,
  `wphone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `whall` varchar(50) CHARACTER SET latin1 NOT NULL,
  `wpeo` int(100) NOT NULL,
  `wpack` varchar(100) NOT NULL,
  `wmenu` varchar(50) CHARACTER SET latin1 NOT NULL,
  `wadvance` varchar(50) CHARACTER SET latin1 NOT NULL,
  `wtol` varchar(50) CHARACTER SET latin1 NOT NULL,
  `wid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `wname`, `wnic`, `wdate`, `wphone`, `whall`, `wpeo`, `wpack`, `wmenu`, `wadvance`, `wtol`, `wid`) VALUES
(1, 'yohan', 2147483647, '2022-04-16', '077-898-8956', 'emp', 250, '0', 'full', '150000', '2000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
