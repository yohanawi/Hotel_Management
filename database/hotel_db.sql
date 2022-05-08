-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 02:14 PM
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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `adate` date NOT NULL,
  `aontime` time NOT NULL,
  `aouttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `aid`, `aname`, `adate`, `aontime`, `aouttime`) VALUES
(3, 1, 'yohan', '2022-05-25', '15:12:00', '17:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `id` int(11) NOT NULL,
  `beid` varchar(20) NOT NULL,
  `bename` varchar(255) CHARACTER SET latin1 NOT NULL,
  `betype` varchar(255) CHARACTER SET latin1 NOT NULL,
  `beprice` varchar(50) NOT NULL,
  `bedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`id`, `beid`, `bename`, `betype`, `beprice`, `bedate`) VALUES
(1, '1', 'tea', 'hot', '25', '2022-05-26');

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
(1, 1, 'part', '4500', '2022-05-04'),
(13, 78, 'motor', '789456', '2022-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `cid` varchar(11) CHARACTER SET latin1 NOT NULL,
  `cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cemail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cphone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `caddress` varchar(500) CHARACTER SET latin1 NOT NULL,
  `cnic` varchar(15) CHARACTER SET latin1 NOT NULL,
  `ccity` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `cid`, `cname`, `cemail`, `cphone`, `caddress`, `cnic`, `ccity`) VALUES
(1, '1', 'Yohan Awishka', 'yohan@gmail.com', '077-895-8956', 'No 18 Lakshman Garden Colombo Road Divulapitiya', '200008600315', 'Divulapitiya');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `eamout` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ereason` varchar(255) CHARACTER SET latin1 NOT NULL,
  `epay` varchar(255) CHARACTER SET latin1 NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `eid`, `eamout`, `ereason`, `epay`, `edate`) VALUES
(1, 1, '123', 'wasets', 'online', '2022-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `fname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fque` varchar(20) NOT NULL,
  `fprice` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fid`, `fname`, `fque`, `fprice`, `fdate`) VALUES
(1, '1', 'apples', '10', '45', '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `fuid` varchar(50) NOT NULL,
  `funame` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fuque` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fuprice` varchar(50) NOT NULL,
  `fudate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `fuid`, `funame`, `fuque`, `fuprice`, `fudate`) VALUES
(1, '1', 'chairs', '10', '1500', '2022-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `iamout` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ireason` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ipay` varchar(255) CHARACTER SET latin1 NOT NULL,
  `idate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `iid`, `iamout`, `ireason`, `ipay`, `idate`) VALUES
(1, 1, '234', 'sell', 'pay', '2022-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `mname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mcat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mtype` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mprice` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `mname`, `mcat`, `mtype`, `mprice`) VALUES
(1, 'tea', 'morning', 'beverage', '25');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `paname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `padec` varchar(500) CHARACTER SET latin1 NOT NULL,
  `paso` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pabi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `paca` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `paname`, `padec`, `paso`, `pabi`, `paca`) VALUES
(1, 'Gold', 'yes', 'full', 'yes', 'wedding');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` int(11) NOT NULL,
  `pid` varchar(11) NOT NULL,
  `pname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pnic` varchar(15) CHARACTER SET latin1 NOT NULL,
  `pdate` date NOT NULL,
  `pphone` varchar(15) NOT NULL,
  `phall` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ppack` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pmenu` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pad` varchar(50) NOT NULL,
  `ptot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `pid`, `pname`, `pnic`, `pdate`, `pphone`, `phall`, `pno`, `ppack`, `pmenu`, `pad`, `ptot`) VALUES
(1, '1', 'yohan', '789456123456', '2022-05-19', '077-895-8956', 'eder', '45', 'no', 'no', '456', '123');

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
(10, 'awishka', 'awi', 'awishka@gmail.com', 'awishka'),
(11, 'nawodya', 'nawa', 'nawa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `rdes` varchar(500) CHARACTER SET latin1 NOT NULL,
  `rfault` varchar(255) CHARACTER SET latin1 NOT NULL,
  `rcost` varchar(20) CHARACTER SET latin1 NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `rid`, `rdes`, `rfault`, `rcost`, `rdate`) VALUES
(4, 1, 'ac', 'fires', '545', '2022-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roid` varchar(11) NOT NULL,
  `rono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rotype` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rofloor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `robe` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rocap` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roid`, `rono`, `rotype`, `rofloor`, `robe`, `rocap`) VALUES
(4, '1', '232', 'ac', '2', '3', '9');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(11) NOT NULL,
  `brname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `brnic` varchar(15) CHARACTER SET latin1 NOT NULL,
  `brphone` varchar(15) NOT NULL,
  `brno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `brpeo` int(50) NOT NULL,
  `brdate` date NOT NULL,
  `brtdate` date NOT NULL,
  `brtype` varchar(255) CHARACTER SET latin1 NOT NULL,
  `brpay` varchar(50) CHARACTER SET latin1 NOT NULL,
  `brad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `brname`, `brnic`, `brphone`, `brno`, `brpeo`, `brdate`, `brtdate`, `brtype`, `brpay`, `brad`) VALUES
(1, 'yohan', '200008600315', '078-895-8956', '125', 10, '2022-05-18', '2022-05-28', 'ac', 'online', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `ssalary` double NOT NULL,
  `sover` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sbounce` double NOT NULL,
  `sdate` date NOT NULL,
  `sid` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(7, '1', 'yohana', 'yohan@gmail.com', '077-896-7895', '18 colombo road divulapitiya'),
(9, '12', 'yohan awishka', 'yoha@gmail.com', '078-894-5623', 'divulapiti');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `ssid` varchar(11) NOT NULL,
  `ssname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ssalary` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sover` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sbounce` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `ssid`, `ssname`, `ssalary`, `sover`, `sbounce`, `sdate`) VALUES
(1, '1', 'yohan', '10000', '3', '32', '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `wid` varchar(20) NOT NULL,
  `wname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `wnic` varchar(15) NOT NULL,
  `wdate` date NOT NULL,
  `wphone` varchar(15) NOT NULL,
  `whall` varchar(20) CHARACTER SET latin1 NOT NULL,
  `wno` varchar(500) CHARACTER SET latin1 NOT NULL,
  `wpack` varchar(255) CHARACTER SET latin1 NOT NULL,
  `wmenu` varchar(255) CHARACTER SET latin1 NOT NULL,
  `wad` varchar(255) CHARACTER SET latin1 NOT NULL,
  `wtot` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `wid`, `wname`, `wnic`, `wdate`, `wphone`, `whall`, `wno`, `wpack`, `wmenu`, `wad`, `wtot`) VALUES
(3, '2', 'awishka', '200008600316', '2022-05-12', '077-894-4561', 'cener', '450', 'no', 'no', '45000', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverage`
--
ALTER TABLE `beverage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beverage`
--
ALTER TABLE `beverage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
