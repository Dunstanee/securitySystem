-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 06:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_security_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc_complaint`
--

CREATE TABLE `abc_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_type` text NOT NULL,
  `complaint_time` text NOT NULL,
  `complaint_no_people` int(11) NOT NULL,
  `complaint_location` text NOT NULL,
  `complaint_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc_complaint`
--

INSERT INTO `abc_complaint` (`complaint_id`, `complaint_type`, `complaint_time`, `complaint_no_people`, `complaint_location`, `complaint_status`) VALUES
(1, 'Attemp robbery', '02:05', 4, 'nairobi', 'Complaint New');

-- --------------------------------------------------------

--
-- Table structure for table `abc_task`
--

CREATE TABLE `abc_task` (
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc_task`
--

INSERT INTO `abc_task` (`task_id`, `user_id`, `task`, `status`) VALUES
(1, 3, 'get file from the secretary every morning.', 'New Task'),
(3, 7, 'LOOK FOR THE FILE FOR REGISTRATION', 'New Task'),
(4, 7, 'go home', 'New Task');

-- --------------------------------------------------------

--
-- Table structure for table `abc_users`
--

CREATE TABLE `abc_users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_DoB` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_designation` varchar(200) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc_users`
--

INSERT INTO `abc_users` (`user_id`, `user_name`, `user_age`, `user_DoB`, `user_gender`, `user_designation`, `user_password`) VALUES
(4, 'PAUL KINYANJUI', 30, '2020-07-14', 'Male', 'Client', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'MERCY KIPTO', 20, '2020-07-08', 'Female', 'Administrator', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'john', 15, '2020-07-16', 'Male', 'Client', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'VINCENT KYALO', 20, '2012-06-06', 'Male', 'Security Guard', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc_complaint`
--
ALTER TABLE `abc_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `abc_task`
--
ALTER TABLE `abc_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `abc_users`
--
ALTER TABLE `abc_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc_complaint`
--
ALTER TABLE `abc_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abc_task`
--
ALTER TABLE `abc_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `abc_users`
--
ALTER TABLE `abc_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
