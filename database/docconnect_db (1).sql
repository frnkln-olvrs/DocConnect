-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 12:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docconnect_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `contact` varchar(64) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `account_image` varchar(64) NOT NULL,
  `account_type` varchar(16) NOT NULL,
  `verification_status` varchar(16) NOT NULL DEFAULT 'Unverified',
  `is_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` int(11) DEFAULT 0,
  `user_role` int(11) NOT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `birthdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `email`, `password`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `account_image`, `account_type`, `verification_status`, `is_created`, `is_updated`, `is_deleted`, `user_role`, `campus_id`, `birthdate`) VALUES
(9, 'qb202101164@wmsu.edu.ph', '$2y$10$lVNUBYQQBVxXscORgWkjuuBoCCEwlOqkII21BWOwDVH0MznrtYnLe', 'Hilal', 'J', 'Abdulajid', '', NULL, NULL, '', '', 'Verified', '2024-09-01 06:30:45', '2024-09-01 07:04:48', 0, 0, NULL, NULL),
(11, 'benten@wmsu.edu.ph', '$2y$10$wNYeevuu4mXWBvMsxueJTecDB01lsFCL3bcKdMQlV3ZzqXUbXre1u', 'Ben', '', 'Ten', '', NULL, NULL, '', '', 'Unverified', '2024-09-11 07:33:39', '2024-09-11 08:31:34', 0, 2, 1, NULL),
(12, 'try@wmsu.edu.ph', '$2y$10$7xQdl3p91t7SDFpC5bbsquLldOKDGBpdAyaiAj6VCduFYQKoMcQjO', 'Try ', '', 'Andtry', '', NULL, NULL, '', '', 'Unverified', '2024-09-11 14:24:51', '2024-09-11 14:24:51', 0, 2, 1, NULL),
(15, 'feithan@wmsu.edu.ph', '$2y$10$gMBbo/LkGJTuwLVDdAjTx.imggYqlwNktJG8FhgNraB/uMWGgKAUG', 'Doc', 'Than', 'Fei', 'male', NULL, NULL, '', '', 'Unverified', '2024-09-11 16:44:37', '2024-09-11 16:44:37', 0, 1, NULL, '2021-02-11 16:00:00'),
(16, 'nestea@wmsu.edu.ph', '$2y$10$SGtMpjX8jGtBKmUHnKrJW..pzcMAZBJmiuv.7NkNt2Jrk8kqkCVRG', 'Nes', 'Tea', 'Lemon', 'female', '2147483647', NULL, '', '', 'Unverified', '2024-09-11 16:49:45', '2024-09-11 16:49:45', 0, 1, NULL, '1999-01-31 16:00:00'),
(17, 'nesteaapple@wmsu.edu.ph', '$2y$10$eaK7BsSyQjxC324zAnlxzejBiQKZJoau4cVyz9YtYcFB7prKB/rwu', 'Nes', 'Tea', 'Apple', 'female', '09993228979', NULL, '', '', 'Unverified', '2024-09-11 16:50:35', '2024-09-11 16:55:08', 0, 1, NULL, '2018-02-27 16:00:00'),
(19, 'www@wmsu.edu.ph', '$2y$10$/ZMuTKxDyuZshUv8bANxReSfw9jNCbVkkAJsqpc4K5ScUJ0bPnXam', 'Wew', 'Waw', 'Wow', 'male', '099999999999', NULL, '', '', 'Unverified', '2024-09-11 16:59:02', '2024-09-11 16:59:02', 0, 1, NULL, '2024-09-05 16:00:00'),
(23, 'testuser@wmsu.edu.ph', '$2y$10$kFcflKvkhQmARiSqPx.XxOQQp6dLGIbIV1t1b3JFtyhKXlOxj1Vrm', 'Test', '', 'User', 'Male', '09999232232', NULL, '', '', 'Unverified', '2024-09-17 06:48:14', '2024-09-17 06:48:14', 0, 3, 1, '2000-04-11 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `campus_id` int(11) NOT NULL,
  `campus_profile` varchar(255) DEFAULT NULL,
  `campus_name` varchar(255) NOT NULL,
  `campus_address` varchar(255) NOT NULL,
  `campus_contact` varchar(32) NOT NULL,
  `campus_email` varchar(255) NOT NULL,
  `is_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`campus_id`, `campus_profile`, `campus_name`, `campus_address`, `campus_contact`, `campus_email`, `is_created`, `is_updated`, `is_deleted`) VALUES
(1, '66e7db42336204.60963457.jpg', 'WMSU MAIN CAMPUS', 'W376+CGQ, Normal Rd, Zamboanga, 7000 Zamboanga del Sur', '(062) 991 1040', 'wmsu@wmsu.edu.ph', '2024-09-08 13:00:26', '2024-09-16 07:18:23', 0),
(4, '66e7db42336204.60963457.jpg', 'Test Campus', 'W376+CGQ, Normal Rd, Zamboanga, 7000 Zamboanga del Sur', '(062) 991 1040', 'test@wmsu.edu.ph', '2024-09-16 07:16:18', '2024-09-16 07:16:18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_campus` (`campus_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `campus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_campus` FOREIGN KEY (`campus_id`) REFERENCES `campus` (`campus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
