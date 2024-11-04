-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 09:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(2) NOT NULL,
  `color_name` varchar(128) NOT NULL,
  `color_color` varchar(32) NOT NULL,
  `color_president` varchar(32) NOT NULL,
  `color_vice-president` varchar(32) NOT NULL,
  `color_id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `color_color`, `color_president`, `color_vice-president`, `color_id_user`) VALUES
(9, 'สีมดแดง', 'สีแดง', 'นายประธาน สี', 'นายพระรอง ประธาน', 2);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(5) NOT NULL,
  `player_title` varchar(16) NOT NULL,
  `player_name` varchar(64) NOT NULL,
  `player_mid_name` varchar(64) NOT NULL,
  `player_sirname` varchar(64) NOT NULL,
  `player_class` int(2) NOT NULL,
  `player_room` int(2) NOT NULL,
  `player_gender` varchar(8) NOT NULL,
  `player_color_id` int(2) NOT NULL,
  `player_sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `player_title`, `player_name`, `player_mid_name`, `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`, `player_sport_id`) VALUES
(3, 'นาง', 'อีเล็ก', 'ซานเดอร์', 'พอล', 3, 4, 'หญิง', 2, 3),
(5, 'นาย', 'ชื่อ', 'ชื่อกลาง', 'นามสกุล', 6, 11, 'ชาย', 2, 0),
(4000, 'เด็กชาย', 'สี่สิบ', 'สี่ร้อย', 'สี่พัน', 4, 4, 'ชาย', 2, 0),
(4454, 'นางสาว', 'สมหญิง', '', 'บ้ายไกล', 5, 12, 'หญิง', 2, 0),
(4455, 'a', 'a', 'a', 'a', 0, 0, 'a', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(32) NOT NULL,
  `sport_type` varchar(64) NOT NULL,
  `sport_degree` varchar(16) NOT NULL,
  `sport_gender` varchar(8) NOT NULL,
  `sport_amount` int(2) NOT NULL,
  `sport_note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_id`, `sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES
(1, 'ชื่อ', 'ชนิด', 'ระดับ', 'เพศ', 10, 'หมายเหตุ'),
(2, 'ฟุตบอลการกีฬา', 'ฟุตบอล', 'ม.ต้น', 'หญิง', 12, 'ห้ามสูงต่ำกว่า130ซม.'),
(4, 'ฟุตบอลการกีฬา', 'ฟุตบอล', 'ม.ปลาย', 'ชาย', 12, 'ห้ามสูงต่ำกว่า120ซม.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_username`, `user_password`, `user_role`) VALUES
(1, 'Test_user_00', 'A001', '12345678', 'admin_system'),
(2, 'Test_user_02', 'b', 'b', 'admin_sport'),
(4, 'Test_user_03', 'c', 'c', 'admin_report'),
(5, 'Test_user_01', 'a', 'a', 'admin_system');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
