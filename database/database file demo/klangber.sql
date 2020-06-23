-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 08:29 PM
-- Server version: 10.4.11-MariaDB-log
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klangber`
--

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `did` int(11) NOT NULL,
  `discount` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`did`, `discount`) VALUES
(1, 'ไม่มี\r\n'),
(2, '15%'),
(3, '20%'),
(4, '25%'),
(5, '30%'),
(6, '35%'),
(7, '40%'),
(8, '45%'),
(9, '50%'),
(10, '55%'),
(11, '60%'),
(12, '65%'),
(13, '70%');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `nid` int(11) NOT NULL,
  `network` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`nid`, `network`) VALUES
(1, 'เลือกเครือข่าย\r\n'),
(2, 'AIS'),
(3, 'DTAC'),
(4, 'TRUE'),
(5, 'I-Mobile'),
(6, 'My By Cat'),
(7, 'TOT 3G '),
(8, 'PENGUIN'),
(9, 'Myworld'),
(10, 'อื่นๆ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `phone_number`
--

CREATE TABLE `phone_number` (
  `pnid` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `sum` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `tid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `stid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone_number`
--

INSERT INTO `phone_number` (`pnid`, `tel`, `sum`, `price`, `detail`, `tid`, `nid`, `did`, `stid`) VALUES
(1, '088-782-3619', 52, 8000, '299*1', 2, 4, 1, 1),
(2, '096-8289666', 60, 24000, 'ระบบเติมเงิน', 3, 3, 1, 2),
(3, '094-541-9992', 52, 1500, 'ระบบเติมเงิน', 17, 3, 1, 3),
(4, '084-249-2454', 42, 15000, 'เบอร์มงคล', 17, 4, 1, 4),
(5, '082-6639639', 52, 25000, '639+639', 17, 4, 1, 5),
(6, '062-969-1465', 48, 5900, 'ระบบเติมเงิน', 17, 3, 1, 6),
(7, '092-786-2456', 49, 3500, 'ระบบเติมเงิน', 17, 3, 1, 7),
(8, '094-296-9945', 57, 3900, 'ระบบเติมเงิน', 17, 3, 1, 8),
(9, '094-541-9292', 45, 1500, 'ระบบเติมเงิน', 17, 3, 1, 9),
(10, '089-353-6426', 46, 2000, 'ระบบเติมเงิน', 17, 3, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stid` int(11) NOT NULL,
  `berded` int(1) NOT NULL,
  `recom` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stid`, `berded`, `recom`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `tid` int(11) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`tid`, `type`) VALUES
(1, 'ทั่วไป'),
(2, 'เลขมังกร'),
(3, 'เลขหงส์'),
(4, 'เบอร์คู่ เบอร์หาบ'),
(5, 'เบอร์ตอง'),
(6, 'เบอร์เรียง'),
(7, 'เบอร์โฟร์'),
(8, 'เบอร์เซเว่น'),
(9, 'เบอร์ซิกซ์'),
(10, 'เบอร์ไฟว์'),
(11, 'เบอร์พัน ร้อย สิบ'),
(12, 'เบอร์สองตัว'),
(13, 'เบอร์สลับ'),
(14, 'เบอร์สูตรคูณ'),
(15, 'เบอร์ชุด เบอร์กลุ่ม'),
(16, 'เบอร์กระจก'),
(17, 'เบอร์มงคล');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`) VALUES
(1, 'kokig_kao@hotmail.com', '$2y$08$MO8oFHeoNAsecRXIC7JxweSCWn9dHIA1gfb.52A54S420b548Q9KG'),
(2, 'test@hotmail.com', '$2y$08$MO8oFHeoNAsecRXIC7JxweSCWn9dHIA1gfb.52A54S420b548Q9KG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD PRIMARY KEY (`pnid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `nid` (`nid`),
  ADD KEY `did` (`did`),
  ADD KEY `stid` (`stid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phone_number`
--
ALTER TABLE `phone_number`
  MODIFY `pnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD CONSTRAINT `phone_number_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `type` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_number_ibfk_2` FOREIGN KEY (`nid`) REFERENCES `network` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_number_ibfk_3` FOREIGN KEY (`did`) REFERENCES `discount` (`did`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_number_ibfk_4` FOREIGN KEY (`stid`) REFERENCES `state` (`stid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
