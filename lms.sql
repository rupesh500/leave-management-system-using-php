-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_leave`
--

CREATE TABLE `applied_leave` (
  `id` int(11) NOT NULL,
  `i_from` varchar(255) NOT NULL,
  `i_to` varchar(255) NOT NULL,
  `e_leave` int(255) NOT NULL,
  `m_leave` int(255) NOT NULL,
  `c_leave` int(255) NOT NULL,
  `apply_by` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_leave`
--

INSERT INTO `applied_leave` (`id`, `i_from`, `i_to`, `e_leave`, `m_leave`, `c_leave`, `apply_by`, `status`, `applied_date`) VALUES
(11, '2019-12-14', '2019-12-15', 1, 1, 1, 53, 'approve', '2019-12-14 04:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(255) NOT NULL,
  `v_form` varchar(255) NOT NULL,
  `v_to` varchar(255) NOT NULL,
  `e_leave` varchar(255) NOT NULL,
  `m_leave` varchar(255) NOT NULL,
  `c_leave` varchar(255) NOT NULL,
  `assign_to` int(255) NOT NULL,
  `assign_by` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_leave`
--

INSERT INTO `assign_leave` (`id`, `v_form`, `v_to`, `e_leave`, `m_leave`, `c_leave`, `assign_to`, `assign_by`, `modified_date`) VALUES
(27, '2019-12-14', '2019-12-23', '2', '2', '2', 54, '31', '2019-12-14 04:21:58'),
(28, '2019-12-14', '2019-12-23', '2', '2', '2', 53, '31', '2019-12-14 04:21:58'),
(29, '2019-12-14', '2019-12-23', '2', '2', '2', 52, '31', '2019-12-14 04:21:59'),
(30, '2019-12-14', '2019-12-23', '2', '2', '2', 50, '31', '2019-12-14 04:21:59'),
(31, '2019-12-14', '2019-12-23', '2', '2', '2', 49, '31', '2019-12-14 04:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(255) NOT NULL,
  `task` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `assign_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task_reply`
--

CREATE TABLE `task_reply` (
  `r_id` int(255) NOT NULL,
  `replay` text NOT NULL,
  `mes_id` int(255) NOT NULL,
  `reply_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `department`, `user_role`, `created_on`) VALUES
(31, 'rupeshn', 'rupesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'seo', 'Admin', '2019-12-14 04:21:34'),
(49, 'sneha', 'sneha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'web Developement', 'employee', '2019-12-14 04:18:14'),
(50, 'divu', 'divu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'web Developement', 'employee', '2019-12-14 04:18:25'),
(52, 'akash', 'ak@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'web Developement', 'employee', '2019-12-14 04:18:58'),
(53, 'sapna', 'sapna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'web Developement', 'employee', '2019-12-14 04:19:16'),
(54, 'ankita', 'ankita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'web Developement', 'employee', '2019-12-14 04:21:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_leave`
--
ALTER TABLE `applied_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `task_reply`
--
ALTER TABLE `task_reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_leave`
--
ALTER TABLE `applied_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `task_reply`
--
ALTER TABLE `task_reply`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
