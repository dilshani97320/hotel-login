-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 08:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user-id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(50) NOT NULL,
  `status` tinytext NOT NULL COMMENT '1=true 0=false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user-id`, `username`, `email`, `password`, `status`) VALUES
(1, 'dilshani', 'dilshanithathsara@gmail.com', 123, '1'),
(2, 'Bnsara', 'lakshan@gmail.com', 234, '1'),
(3, 'Amaya', '2018cs169@stu.ucsc.cmb.ac.lk', 999, '1'),
(4, 'Amali', 'Amali123@gmail.com', 777, '1'),
(5, 'Masha', 'masha123@gmail.com', 999, '1'),
(6, 'Minuri', 'Minuri@gmail.com', 12345, '1'),
(7, 'naduni', 'naduni@gmail.com', 66666, '1'),
(8, 'Amanda', 'amanda@gmail.com', 20, '1'),
(9, 'Amanda', 'amanda@gmail.com', 20, '1'),
(10, 'Aruni', 'Aruni@gmail.com', 2147483647, '1'),
(11, 'Amasha', 'Amasha@gmail.com', 8, '1'),
(12, 'madavi', 'madavi@gmail.com', 8, '1'),
(13, 'Vihara', 'vihara@gmail.com', 8, '1'),
(14, 'Senaviratna', 'senaviratna@gmail.com', 40, '1'),
(16, 'Jayani', 'jayani@gmail.com', 8, '1'),
(17, 'Malsha', 'malsha@gmail.com', 7, '1'),
(19, 'janani', 'janani@gmaill.com', 8, '1'),
(20, 'kamal', 'kamal@gmail.com', 40, '1'),
(21, 'Aruni', 'aruni1234@gmail.com', 416, '1'),
(29, 'perera', 'perera@gmail.com', 7, '1'),
(30, 'fernando', 'fernando@gmail.com', 7, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
