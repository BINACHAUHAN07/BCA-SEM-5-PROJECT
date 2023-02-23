-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 02:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_destination`
--

CREATE TABLE `add_destination` (
  `d_id` int(255) NOT NULL,
  `from_destination` varchar(255) NOT NULL,
  `to_destination` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_destination`
--

INSERT INTO `add_destination` (`d_id`, `from_destination`, `to_destination`, `amount`, `time`) VALUES
(2, 'Mumbai', 'Delhi', '2000', '5:30 PM'),
(3, 'Ahmdabad ', 'Mumbai', '3000', '2:15 PM'),
(4, 'Ahmdabad ', 'Kolkata', '5000', '10:00 AM'),
(5, 'Mumbai', 'New York', '50000', '12:00 am'),
(7, 'Canada', 'Maldives', '55000', '3:00 AM'),
(8, 'Baroda', 'Singapore', '60000', '2:00 PM'),
(9, 'Gandhinagar', 'Germany', '65800', '1:30 AM'),
(10, 'Jaipur', 'Surat', '16000', '7:00 PM'),
(11, 'Thailand', 'Rajkot', '14500', '4:00 AM'),
(12, 'London', 'Mumbai', '52700', '12:00 PM'),
(13, 'Chandigarh', 'Switzerland', '48000', '3:50 PM'),
(15, 'Mumbai', 'Hong Kong', '58000', '9:00 PM'),
(18, 'Rajkot', 'Dubai', '51000', '5:00 AM'),
(19, 'Ahemdabad', 'Australia', '42000', '10:30 PM'),
(20, 'Hydrabad', 'Philippines', '42000', '2:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `C_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messege` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `name`, `mobile`, `email`, `message`) VALUES
(3, 'Ankita', '9426102500', 'ankita@gmail.com', 'Excellent Service!!'),
(4, 'Binaa', '9924693117', 'bina@gmail.com', 'Good Exeperience..'),
(6, 'Hetvi', '9425685388', 'hetvi@gmail.com', 'Good Service......');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `G_Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`G_Id`, `Image`) VALUES
(2, 'b5.jpg'),
(3, 'b3.jpg'),
(5, 'airline5.jpg'),
(9, 'airline3.avif'),
(10, 'airline4.avif'),
(13, 'b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oneway_booking`
--

CREATE TABLE `oneway_booking` (
  `O_Id` int(100) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `From` varchar(100) NOT NULL,
  `To` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Adults` varchar(100) NOT NULL,
  `Children` varchar(100) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oneway_booking`
--

INSERT INTO `oneway_booking` (`O_Id`, `First_name`, `Last_name`, `Email`, `Phone`, `From`, `To`, `Class`, `Date`, `Time`, `Adults`, `Children`, `Amount`, `Status`) VALUES
(33, 'Jivani', 'Ankita', 'ankita@gmail.com', '9426102500', 'Mumbai', 'New York', 'Business', '09/07/2022', '12:00 am', '2', '1', '150000', 3),
(35, 'Vaghasiya', 'Harshita', 'harshita@gmail.com', '1122334455', 'Ahmdabad', 'Kolkata', 'Economy', '08/17/2022', '10:00 AM', '2', '2', '20000', 0),
(39, 'Vithlani', 'Jiyansh', 'jiyansh@gmail.com', '9425632001', 'Baroda', 'Singapore', 'First', '02/09/2022', '2:00 PM', '3', '1', '240000', 0),
(40, 'Chauhan', 'Rudra', 'r@gmail.com', '9425685388', 'Gandhinagar', 'Germany', 'Economy', '09/01/2022', '1:30 AM', '3', '0', '197400', 2),
(41, 'Jivani', 'Ankita', 'ankita@gmail.com', '9426102500', 'Ahmdabad', 'Kolkata', 'First', '08/17/2022', '10:00 AM', '2', '1', '15000', 0),
(42, 'Birla', 'Siya', 'siya@gmail.com', '9425685388', 'Canada', 'Maldives', 'First', '09/01/2022', '3:00 AM', '2', '2', '220000', 3),
(45, 'Chauhan', 'Bina', 'bina@gmail.com', '9924693117', 'Gandhinagar', 'Germany', 'First', '05/19/2022', '1:30 AM', '3', '1', '263200', 0),
(46, 'Chauhan', 'Priya', 'priya@gmail.com', '9428271471', 'Jaipur', 'Surat', 'Economy', '06/11/2022', '7:00 PM', '4', '2', '96000', 2),
(49, 'Purohit', 'Hetvi', 'hetvi@gmail.com', '9425685388', 'Hydrabad', 'Philippines', 'Business', '09/05/2022', '2:00 PM', '2', '1', '126000', 3),
(50, 'Kavani', 'Kinjal', 'kinjal@gmail.com', '9423612412', 'Rajkot', 'Dubai', 'Economy', '08/19/2022', '5:00 AM', '2', '1', '153000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `mobile`, `email`, `gender`, `pass`, `cpass`) VALUES
(1, 'Jivani', 'Ankita', '9426102500', 'ankita@gmail.com', 'female', '123', '123'),
(2, 'Chauhan', 'Bina', '9924693117', 'bina@gmail.com', 'female', '12345', '12345'),
(3, 'Vaghasiya', 'Harshita', '1122334455', 'harshita@gmail.com', 'female', '111', '111'),
(5, 'Vithlani', 'Jiyansh', '9425632001', 'jiyansh@gmail.com', 'male', '2500', '2500'),
(6, 'Chauhan', 'Rudra', '9425685388', 'r@gmail.com', 'male', '7070', '7070'),
(7, 'Purohit', 'Hetvi', '9425685388', 'hetvi@gmail.com', 'female', 'abc', 'abc'),
(8, 'Ladani', 'Vidhi', '9425632001', 'vidhi@gmail.com', 'female', '4040', '4040'),
(9, 'Birla', 'Siya', '9425685388', 'siya@gmail.com', 'female', '123', '123'),
(10, 'Jensii', 'Posiya', '6353371677', 'jensi@gmail.com', 'female', '12345', '12345'),
(11, 'Kavani', 'Kinjal', '9423612412', 'kinjal@gmail.com', 'female', 'kinjal', 'kinjal'),
(12, 'Chauhan', 'Priya', '9428271471', 'priya@gmail.com', 'female', 'priya', 'priya'),
(13, 'Papat', 'Kajal', '9426136036', 'kajal@gmail.com', 'female', 'kajal', 'kajal');

-- --------------------------------------------------------

--
-- Table structure for table `roundway_booking`
--

CREATE TABLE `roundway_booking` (
  `R_Id` int(10) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `From` varchar(100) NOT NULL,
  `To` varchar(100) NOT NULL,
  `From_Date` varchar(100) NOT NULL,
  `Return_Date` varchar(100) NOT NULL,
  `F_time` varchar(255) NOT NULL,
  `R_time` varchar(255) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Adults` varchar(100) NOT NULL,
  `Children` varchar(100) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roundway_booking`
--

INSERT INTO `roundway_booking` (`R_Id`, `First_name`, `Last_name`, `Email`, `Phone`, `From`, `To`, `From_Date`, `Return_Date`, `F_time`, `R_time`, `Class`, `Adults`, `Children`, `Amount`, `Status`) VALUES
(21, 'Jivani', 'Ankita', 'ankita@gmail.com', '9426102500', 'Mumbai', 'Hong Kong', '09/04/2022', '08/28/2022', '9:00 PM', '11', 'Business', '2', '1', '348000', '0'),
(22, 'Chauhan', 'Bina', 'bina@gmail.com', '9924693117', 'Gandhinagar', 'Germany', '11/10/2022', '06/10/2022', '1:30 AM', '3', 'First', '2', '2', '526400', '0'),
(23, 'Vaghasiya', 'Harshita', 'harshita@gmail.com', '1122334455', 'Baroda', 'Singapore', '12/12/2022', '12/31/2022', '2:00 PM', '4', 'Economy', '3', '1', '480000', '2'),
(24, 'Vithlani', 'Jiyansh', 'jiyansh@gmail.com', '9425632001', 'Canada', 'Maldives', '08/20/2022', '09/22/2022', '3:00 AM', '5', 'Business', '4', '2', '660000', '0'),
(25, 'Chauhan', 'Rudra', 'r@gmail.com', '9425685388', 'Thailand', 'Rajkot', '11/10/2022', '10/30/2022', '4:00 AM', '6', 'Economy', '3', '0', '87000', '1'),
(26, 'Purohit', 'Hetvi', 'hetvi@gmail.cim', '9425685388', 'Chandigarh', 'Switzerland', '02/18/2022', '03/26/2022', '3:50 PM', '5', 'First', '3', '2', '480000', '2'),
(27, 'Kavani', 'Kinjal', 'kinjal@gmail.com', '9423612412', 'Rajkot', 'Dubai', '07/22/2022', '08/13/2022', '5:00 AM', '7', 'Business', '1', '0', '102000', '0'),
(29, 'Chauhan', 'Priya', 'priya@gmail.com', '9428271471', 'Ahemdabad', 'Australia', '09/08/2022', '10/21/2022', '10:30 PM', '12', 'Business', '2', '1', '252000', '1'),
(30, 'Ladani', 'Vidhi', 'vidhi@gmail.com', '9425632001', 'Baroda', 'Singapore', '01/01/2022', '02/25/2022', '2:00 PM', '4', 'First', '2', '1', '360000', '3'),
(31, 'Papat', 'Kajal', 'kajal@gmail.com', '9426136036', 'London', 'Mumbai', '06/16/2022', '07/30/2022', '12:00 PM', '14', 'First', '2', '2', '421600', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_destination`
--
ALTER TABLE `add_destination`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`G_Id`);

--
-- Indexes for table `oneway_booking`
--
ALTER TABLE `oneway_booking`
  ADD PRIMARY KEY (`O_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roundway_booking`
--
ALTER TABLE `roundway_booking`
  ADD PRIMARY KEY (`R_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_destination`
--
ALTER TABLE `add_destination`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `C_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `G_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oneway_booking`
--
ALTER TABLE `oneway_booking`
  MODIFY `O_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roundway_booking`
--
ALTER TABLE `roundway_booking`
  MODIFY `R_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
