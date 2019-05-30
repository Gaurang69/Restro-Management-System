-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 04:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `job_type` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_staff`
--

INSERT INTO `add_staff` (`job_type`, `id`) VALUES
('Cashier', 1),
('Chef', 2),
('Waiter', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `Staff_Id` int(11) NOT NULL,
  `shift_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`Staff_Id`, `shift_time`) VALUES
(12, '10:00 AM - 4:00 PM'),
(17, '10:00 AM - 4:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `Staff_Id` int(11) NOT NULL,
  `Delicacy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`Staff_Id`, `Delicacy`) VALUES
(13, 'pizza'),
(15, 'pasta');

-- --------------------------------------------------------

--
-- Table structure for table `c_table`
--

CREATE TABLE `c_table` (
  `Customer_Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `Is_Paid` int(11) DEFAULT '0',
  `status` varchar(20) DEFAULT 'Not_Ready'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_table`
--

INSERT INTO `c_table` (`Customer_Id`, `name`, `email`, `contact`, `Is_Paid`, `status`) VALUES
(109, 'disheen', 'sdisheen@gmail.com', 96532356565, 1, 'Paid'),
(110, 'yesha', 'yesha@gmail.com', 9821212132, 0, 'Ready'),
(111, 'nisarg', 'nisarg@gmail.com', 98765346565, 1, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_No` int(5) NOT NULL,
  `Item_Name` varchar(50) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_No`, `Item_Name`, `Price`) VALUES
(1, 'Pizza', 250),
(2, 'White Sauce Pasta', 300),
(3, 'Red Sauce Pasta', 290),
(4, 'Paneer Chilli Dry', 269),
(5, 'Cheese Fondue', 250),
(6, 'Nachos', 200),
(7, 'Noodles', 320),
(8, 'Sizzling Brownie', 250),
(9, 'Hazelnut Mousse', 300),
(10, 'Flowerpot', 280);

-- --------------------------------------------------------

--
-- Table structure for table `left_food`
--

CREATE TABLE `left_food` (
  `NGO` varchar(20) NOT NULL,
  `Item_Name` varchar(20) NOT NULL,
  `Item_No` int(11) DEFAULT NULL,
  `Best_use_before` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `left_food`
--

INSERT INTO `left_food` (`NGO`, `Item_Name`, `Item_No`, `Best_use_before`, `Quantity`) VALUES
('Feed For Good', 'Pizza', 1, ' 5 hours', 2),
('Feed For Good', 'Red Sauce Pasta', 3, ' 5 hours', 3),
('No food waste', 'Flowepot', 10, '4 hours', 3),
('Feeding India', 'Pizza', 1, '2 days', 2),
('Feeding India', 'Red Sauce Pasta', 3, '2 days', 3),
('Feeding India', 'Pizza', 1, '5 hours', 2),
('No food waste', 'White Sauce Pasta', 2, '10 hours', 2),
('No food waste', 'Pizza', 1, '10 hours', 2);

--
-- Triggers `left_food`
--
DELIMITER $$
CREATE TRIGGER `ngo_trig` AFTER INSERT ON `left_food` FOR EACH ROW INSERT INTO NGO VALUES(NEW.ngo)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manager_ttable`
--

CREATE TABLE `manager_ttable` (
  `Manager_Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Restaurant_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_ttable`
--

INSERT INTO `manager_ttable` (`Manager_Id`, `Username`, `password`, `Name`, `Restaurant_Name`) VALUES
(1, 'disheen', 'pass@123', 'Disheen Solanki', 'Bonafide');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `NGO_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`NGO_Name`) VALUES
('Feeding India'),
('Feeding India'),
('Feeding India'),
('No food waste'),
('No food waste');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `CustomerId` int(11) DEFAULT NULL,
  `ItemNo` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`CustomerId`, `ItemNo`, `ItemName`, `Quantity`) VALUES
(109, 1, 'Pizza', 3),
(109, 4, 'Paneer Chilli Dry', 1),
(110, 2, 'White Sauce Pasta', 2),
(110, 5, 'Cheese Fondue', 1),
(110, 10, 'Flowerpot', 2),
(111, 1, 'Pizza', 3),
(111, 4, 'Paneer Chilli Dry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `Restaurant_Name` varchar(20) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Restaurant_Name` varchar(20) NOT NULL DEFAULT 'Bonafide',
  `job_type` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `Staff_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Firstname`, `Lastname`, `Restaurant_Name`, `job_type`, `doj`, `Staff_Id`) VALUES
('Ram', 'Sharma', 'Bonafide', 'Waiter', '2017-11-02', 7),
('Prashant', 'Trivedi', 'Bonafide', 'Cashier', '2017-12-02', 12),
('Sunil', 'Patil', 'Bonafide', 'Chef', '2018-03-03', 13),
('Sunil', 'Sharma', 'Bonafide', 'Chef', '2018-09-30', 15),
('Ramesh', 'Shah', 'Bonafide', 'Waiter', '2017-12-30', 16),
('Ram', 'Joshi', 'Bonafide', 'Cashier', '2018-12-29', 17);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_d`
-- (See below for the actual view)
--
CREATE TABLE `staff_d` (
`firstname` varchar(20)
,`lastname` varchar(20)
,`staff_id` int(11)
,`doj` date
,`job_type` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `Staff_Id` int(11) NOT NULL,
  `Table_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`Staff_Id`, `Table_no`) VALUES
(7, 3),
(16, 2);

-- --------------------------------------------------------

--
-- Structure for view `staff_d`
--
DROP TABLE IF EXISTS `staff_d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_d`  AS  select `staff`.`Firstname` AS `firstname`,`staff`.`Lastname` AS `lastname`,`staff`.`Staff_Id` AS `staff_id`,`staff`.`doj` AS `doj`,`staff`.`job_type` AS `job_type` from `staff` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD KEY `ca_id` (`Staff_Id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD KEY `c_id` (`Staff_Id`);

--
-- Indexes for table `c_table`
--
ALTER TABLE `c_table`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_No`,`Item_Name`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`Restaurant_Name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD KEY `w_id` (`Staff_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_table`
--
ALTER TABLE `c_table`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashier`
--
ALTER TABLE `cashier`
  ADD CONSTRAINT `ca_id` FOREIGN KEY (`Staff_Id`) REFERENCES `staff` (`Staff_Id`) ON DELETE CASCADE;

--
-- Constraints for table `chef`
--
ALTER TABLE `chef`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`Staff_Id`) REFERENCES `staff` (`Staff_Id`) ON DELETE CASCADE;

--
-- Constraints for table `waiter`
--
ALTER TABLE `waiter`
  ADD CONSTRAINT `w_id` FOREIGN KEY (`Staff_Id`) REFERENCES `staff` (`Staff_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
