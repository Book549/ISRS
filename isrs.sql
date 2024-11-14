-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 04:48 PM
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
(0, 'Ash the Test_user1', 'สีเทา', 'นายวัธนชัย ไม้จำปา', 'นางสาวกุลจิรา นามใจ', 2),
(1, 'RedRumble', 'สีแดง', 'นายประธาน สีแดง', 'นายพระรอง ประธานสีแดง', 4),
(2, 'OceanShadow', 'สีฟ้า', 'นายประธาน สีฟ้า', 'นายพระรอง ประธานสีฟ้า', 5),
(3, 'GreenGuardian', 'สีเขียว', 'นายประธาน สีเขียว', 'นายพระรอง ประธานสีเขียว', 6),
(4, 'GoldenLion', 'สีเหลือง', 'นายประธาน สีเหลือง', 'นายพระรอง ประธานสีเหลือง', 7),
(5, 'PinkStorm', 'สีชมพู', 'นายประธาน สีชมพู', 'นายพระรอง ประธานสีชมพู', 8);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id_player` int(5) NOT NULL,
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

INSERT INTO `players` (`id_player`, `player_id`, `player_title`, `player_name`, `player_mid_name`, `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`, `player_sport_id`) VALUES
(2, 88, '677', '6dd', '', '6', 67, 6, '67', 6, 6),
(4, 555, '5', '5', '', '5', 5, 5, '5', 2, 7),
(5, 16131, 'เกรซ', 'เกรซ', '', 'เกรซ', 5, 1, 'หญิง', 4, 10),
(6, 44462, 'ฟฟฟ', 'aa', '[value-5]', '[value-6]', 0, 0, '[value-9', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `reward_id` int(6) NOT NULL,
  `reward_sport_id` int(11) NOT NULL,
  `reward_first` int(2) NOT NULL,
  `reward_second` int(2) NOT NULL,
  `reward_third` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'TEST', 'TEST_SPORT', 'อื่นๆ', 'อื่นๆ', 3, 'โปรดลบผู้เล่นออกก่อนใช้งาน (ไม่บังคับ)'),
(7, 'ฟุตบอล มัธยมต้น ชาย', 'ฟุตบอล', 'มัธยมต้น', 'ชาย', 10, ''),
(8, 'ฟุตบอล มัธยมต้น หญิง', 'ฟุตบอล', 'มัธยมต้น', 'หญิง', 10, ''),
(9, 'ฟุตบอล มัธยมปลาย ชาย', 'ฟุตบอล', 'มัธยมปลาย', 'ชาย', 10, ''),
(10, 'ฟุตบอล มัธยมปลาย หญิง', 'ฟุตบอล', 'มัธยมปลาย', 'หญิง', 10, ''),
(11, 'เทเบิลเทนนิส มัธยมต้น ชาย', 'เทเบิลเทนนิส', 'มัธยมต้น', 'ชาย', 6, ''),
(12, 'เทเบิลเทนนิส มัธยมต้น หญิง', 'เทเบิลเทนนิส', 'มัธยมต้น', 'หญิง', 6, ''),
(13, 'เทเบิลเทนนิส มัธยมปลาย ชาย', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'ชาย', 6, ''),
(14, 'เทเบิลเทนนิส มัธยมปลาย หญิง', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'หญิง', 6, ''),
(15, 'แฮนด์บอล มัธยมต้น ชาย', 'แฮนด์บอล', 'มัธยมต้น', 'ชาย', 6, ''),
(16, 'แฮนด์บอล มัธยมต้น หญิง', 'แฮนด์บอล', 'มัธยมต้น', 'หญิง', 6, ''),
(17, 'แฮนด์บอล มัธยมปลาย ชาย', 'แฮนด์บอล', 'มัธยมปลาย', 'ชาย', 6, ''),
(18, 'แฮนด์บอล มัธยมปลาย หญิง', 'แฮนด์บอล', 'มัธยมปลาย', 'หญิง', 6, ''),
(19, 'บาสเกตบอล มัธยมต้น ชาย', 'บาสเกตบอล', 'มัธยมต้น', 'ชาย', 10, ''),
(20, 'บาสเกตบอล มัธยมต้น หญิง', 'บาสเกตบอล', 'มัธยมต้น', 'หญิง', 8, ''),
(21, 'บาสเกตบอล มัธยมปลาย ชาย', 'บาสเกตบอล', 'มัธยมปลาย', 'ชาย', 10, ''),
(22, 'บาสเกตบอล มัธยมปลาย หญิง', 'บาสเกตบอล', 'มัธยมปลาย', 'หญิง', 8, ''),
(23, 'วอลเลย์บอล มัธยมต้น ชาย', 'วอลเลย์บอล', 'มัธยมต้น', 'ชาย', 10, ''),
(24, 'วอลเลย์บอล มัธยมต้น หญิง', 'วอลเลย์บอล', 'มัธยมต้น', 'หญิง', 10, ''),
(25, 'วอลเลย์บอล มัธยมปลาย ชาย', 'วอลเลย์บอล', 'มัธยมปลาย', 'ชาย', 10, ''),
(26, 'วอลเลย์บอล มัธยมปลาย หญิง', 'วอลเลย์บอล', 'มัธยมปลาย', 'หญิง', 10, ''),
(27, 'แบดมินตัน มัธยมต้น ชาย', 'แบดมินตัน', 'มัธยมต้น', 'ชาย', 8, 'โปรดไปก่อนเวลา15นาที'),
(28, 'แบดมินตัน มัธยมต้น หญิง', 'แบดมินตัน', 'มัธยมต้น', 'หญิง', 8, 'โปรดไปก่อนเวลา15นาที'),
(29, 'แบดมินตัน มัธยมปลาย ชาย', 'แบดมินตัน', 'มัธยมปลาย', 'ชาย', 8, 'โปรดไปก่อนเวลา15นาที'),
(30, 'แบดมินตัน มัธยมปลาย หญิง', 'แบดมินตัน', 'มัธยมปลาย', 'หญิง', 8, 'โปรดไปก่อนเวลา15นาที'),
(31, 'เปตอง มัธยมต้น ชาย', 'เปตอง', 'มัธยมต้น', 'ชาย', 6, ''),
(32, 'เปตอง มัธยมต้น หญิง', 'เปตอง', 'มัธยมต้น', 'หญิง', 6, ''),
(33, 'เปตอง มัธยมปลาย ชาย', 'เปตอง', 'มัธยมปลาย', 'ชาย', 6, ''),
(34, 'เปตอง มัธยมปลาย หญิง', 'เปตอง', 'มัธยมปลาย', 'หญิง', 6, ''),
(35, 'ฟุตซอล มัธยมต้น ชาย', 'ฟุตซอล', 'มัธยมต้น', 'ชาย', 6, 'สามารถประท้วงผลตัดสินได้ภายใน30นาที'),
(36, 'ฟุตซอล มัธยมต้น หญิง', 'ฟุตซอล', 'มัธยมต้น', 'หญิง', 6, 'สามารถประท้วงผลตัดสินได้ภายใน30นาที'),
(37, 'ฟุตซอล มัธยมปลาย ชาย', 'ฟุตซอล', 'มัธยมปลาย', 'ชาย', 6, 'สามารถประท้วงผลตัดสินได้ภายใน30นาที'),
(38, 'ฟุตซอล มัธยมปลาย หญิง', 'ฟุตซอล', 'มัธยมปลาย', 'หญิง', 6, 'สามารถประท้วงผลตัดสินได้ภายใน30นาที'),
(39, 'กรีฑา มัธยมต้น ชาย', 'กรีฑา', 'มัธยมต้น', 'ชาย', 40, ''),
(40, 'กรีฑา มัธยมต้น หญิง', 'กรีฑา', 'มัธยมต้น', 'หญิง', 40, ''),
(41, 'กรีฑา มัธยมปลาย ชาย', 'กรีฑา', 'มัธยมปลาย', 'ชาย', 40, ''),
(42, 'กรีฑา มัธยมปลาย หญิง', 'กรีฑา', 'มัธยมปลาย', 'หญิง', 40, ''),
(43, 'บอลหลบ', 'ดอร์จบอล', 'อื่นๆ', 'ผสม', 1, 'ชั้นมัธยมศึกษาปีที่ 1'),
(44, ' แอโรบิค', ' แอโรบิก', 'อื่นๆ', 'ผสม', 1, 'ชั้นมัธยมศึกษาปีที่ 2'),
(45, 'Boxing Kids', 'มวย', 'อื่นๆ', 'ผสม', 1, 'ชั้นมัธยมศึกษาปีที่ 3'),
(46, 'จักรยานคนจน', 'ไตรกีฬา', 'อื่นๆ', 'ผสม', 1, 'ชั้นมัธยมศึกษาปีที่ 4'),
(47, 'กีฬาพื้นบ้าน', 'กีฬาพื้นบ้าน', 'อื่นๆ', 'ผสม', 1, 'ชั้นมัธยมศึกษาปีที่ 6'),
(49, 'AAA มัธยมต้น ชาย', 'AAA', 'มัธยมต้น', 'ชาย', 99, '---'),
(50, 'AAA มัธยมต้น หญิง', 'AAA', 'มัธยมต้น', 'หญิง', 99, '---'),
(51, 'AAA มัธยมปลาย ชาย', 'AAA', 'มัธยมปลาย', 'ชาย', 99, '---'),
(52, 'AAA มัธยมปลาย หญิง', 'AAA', 'มัธยมปลาย', 'หญิง', 99, '---');

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
(0, 'Test_user_00', 'root', '12345678', 'admin_system'),
(1, 'Test_user_01', 'a', 'a', 'admin_system'),
(2, 'Test_user_02', 'b', 'b', 'admin_sport'),
(3, 'Test_user_03', 'c', 'c', 'admin_report'),
(4, 'RedHot', 'Red', 'Blaze999', 'admin_sport'),
(5, 'Wave', 'Aqua', 'WaveSea999', 'admin_sport'),
(6, 'Greentea', 'GreenGo', 'Greentea888', 'admin_sport'),
(7, 'Goldie', 'Sun', 'SunShine11', 'admin_sport'),
(8, 'MistyRoyal', 'Misty', 'PinkGlow44', 'admin_sport');

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
  ADD PRIMARY KEY (`id_player`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`reward_id`);

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
  MODIFY `color_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id_player` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `reward_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
