-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 07:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `thoughts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Item_number` int(11) NOT NULL,
  `Medicine_name` varchar(20) NOT NULL,
  `Medicine_code` varchar(20) NOT NULL,
  `Manufacture_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Unit_price` float NOT NULL,
  `stockNo` varchar(20) NOT NULL,
  `Stock_amount` int(11) NOT NULL,
  `Current_stock` int(11) NOT NULL,
  `upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Item_number`, `Medicine_name`, `Medicine_code`, `Manufacture_date`, `Expire_date`, `Unit_price`, `stockNo`, `Stock_amount`, `Current_stock`, `upload`) VALUES
(9, 'panadol', 'DIA001', '2009-05-14', '2010-12-01', 150.25, '15000', 4000, 2500, 'uploads/1.jpg'),
(10, 'Asprine', 'DIA002', '2008-02-04', '2012-02-13', 250.75, '15010', 2000, 500, 'uploads/2.jpg'),
(11, 'Amoxciline', 'DIA003', '2009-08-01', '2013-06-01', 50.2, '15020', 2500, 120, 'uploads/3.jpg'),
(12, 'Adderall', 'DIA004', '2009-03-14', '2013-06-01', 650.66, '15030', 3500, 750, 'uploads/4.jpg'),
(26, 'Insiulin', 'DIA005', '2019-09-02', '2021-09-02', 130.25, '15080', 1620, 460, 'uploads/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `name` varchar(50) NOT NULL,
  `exDate` date NOT NULL,
  `manuDate` date NOT NULL,
  `itemCode` varchar(12) NOT NULL,
  `unitPrice` float NOT NULL,
  `currentStock` int(11) NOT NULL,
  `stockNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`name`, `exDate`, `manuDate`, `itemCode`, `unitPrice`, `currentStock`, `stockNo`) VALUES
('pandol', '2010-01-12', '2009-05-14', 'DIA001', 150.25, 2500, 15000),
('Asprine', '2012-02-13', '2008-06-24', 'DIA002', 250.75, 3500, 15010),
('amoxciline', '2013-06-01', '2009-08-21', 'DIA003', 50.2, 6540, 15020),
('adderall', '2014-07-10', '2008-03-14', 'DIA004', 650.9, 1526, 15030),
('alprazolam', '2015-09-12', '2010-05-14', 'DIA005', 320.2, 9856, 15040),
('insiulin', '2019-09-01', '2019-09-17', 'dia111', 1000.25, 5000, 15060);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `messageNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `orderNumber` int(11) NOT NULL,
  `paidDate` datetime NOT NULL,
  `orderedDate` datetime NOT NULL,
  `arrivedDate` datetime NOT NULL,
  `regNo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `or_me`
--

CREATE TABLE `or_me` (
  `ordernumber` int(11) NOT NULL,
  `item_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockNO` int(11) NOT NULL,
  `stockAmount` int(11) NOT NULL,
  `regNum` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockNO`, `stockAmount`, `regNum`) VALUES
(15000, 2000, 'sup112'),
(15010, 1450, 'sup112'),
(15020, 9500, 'sup115'),
(15030, 6400, 'sup115'),
(15040, 4, 'sup112'),
(15050, 2000, 'sup115'),
(15070, 4, 'sup112');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Panadol', 'PAN1', 'product-images/camera.jpg', 20.00),
(2, 'Carvedol', 'CAR1', 'product-images/8.jpg', 250.00),
(3, 'Chlorthalidone', 'CHLO1', 'product-images/4.jpg', 300.00),
(4, 'Aspring', 'ASP1', 'product-images/laptop.jpg', 400.00),
(5, 'Glilazider(Sulfonylureas)', 'GLI1', 'product-images/2.jpg', 400.00),
(6, 'Insulin', 'INS1', 'product-images/3.jpg', 700.00),
(7, 'Thiazolidinediones', 'THI1', 'product-images/5.jpg', 800.00),
(8, 'Meglitinides.', 'MEG1', 'product-images/6.jpg', 650.00),
(9, 'DPP-4 inhibitors', 'DPP1', 'product-images/7.jpg', 1200.00),
(10, 'Citalopram', 'CIT1', 'product-images/9.jpg', 780.00),
(11, 'Alprazolam.', 'ALP1', 'product-images/10.jpg', 250.00),
(12, 'Atorvastatin', 'ATO1', 'product-images/12.jpg', 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `user_1`
--

CREATE TABLE `user_1` (
  `regNo` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `password` varchar(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `sequrity_question` varchar(50) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_1`
--

INSERT INTO `user_1` (`regNo`, `email`, `NIC`, `password`, `lname`, `fname`, `category`, `address`, `phone`, `sequrity_question`, `answer`, `gender`) VALUES
('emp117', 'asdf34@gmail.com', '984514529V', 'ASdf1234', 'jhdsj', 'nimal', 'Employee', 'fdfdtft', '0717109303', 'hkjkhj', 'sasads', 'Male'),
('sup112', 'vimukth1@gmail.com', '981111800v', 'NCkl2625', 'jayasinghe', 'vimukthi', 'supplier', 'xfxghgfghj', '0778146946', 'xddgfdhf', 'cgfcg', 'Male'),
('sup115', 'afadfd1@gmail.com', '981111800v', 'NBkl2625', 'probodha', 'shanuka', 'supplier', 'sjdhsjdhs', '0778246956', 'hsdgshdsdh', 'sdsss', 'Male'),
('sup116', 'himalip23@gmail.com', '952365478V', 'CPlo5377', 'prabodha', 'shanuka', 'Supplier', 'hsgfs', '0722276312', 'hjdhjsd', 'sd', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Item_number`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`itemCode`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageNo`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`orderNumber`);

--
-- Indexes for table `or_me`
--
ALTER TABLE `or_me`
  ADD PRIMARY KEY (`ordernumber`,`item_code`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockNO`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `user_1`
--
ALTER TABLE `user_1`
  ADD PRIMARY KEY (`regNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Item_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16002;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
