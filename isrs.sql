-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 08:54 AM
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
-- Database: `test`
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
(1, 'Pythois ', 'สีเหลือง', 'นายณฐกร ดอนชัย', 'นางสาวพิชชาภา เพชราช', 9),
(2, 'Diwali lakshmi', 'สีชมพู', 'นางสาวณัฐกฤตา เชื้อเมืองพาน', 'นางสาวกวิสรา ฉางข้าวคำ', 10),
(3, 'มรกตนาคราช', 'สีเขียว', 'นางสาวพชราพรรณ ธงศรี', 'นางสาวณรัญญา พลฉวี', 11),
(5, 'Witchery foxy', 'สีแดง', 'นางสาวณัฐวรา หมายมั่น', 'นายสุริย์ภูมิ คำยา', 12),
(6, 'AZARANUBIS', 'สีฟ้า', 'นายศุภฤกษ์ วงค์กันทา', 'นางสาวพิมพ์วรียา พรมโมคัก', 13);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `time_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_player` int(5) NOT NULL,
  `player_id` int(5) NOT NULL,
  `player_title` varchar(16) NOT NULL,
  `player_name` varchar(64) NOT NULL,
  `player_sirname` varchar(64) NOT NULL,
  `player_class` varchar(3) NOT NULL,
  `player_room` varchar(4) NOT NULL,
  `player_color_id` int(2) NOT NULL,
  `player_sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`time_in`, `id_player`, `player_id`, `player_title`, `player_name`, `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id`) VALUES
('2024-11-15 07:26:15', 1, 55110, 'นาย', 'name midname', 'sirname', '6', '7', 12, 89),
('2024-11-22 13:16:18', 2, 66123, 'นาย', 'Nathan ', 'Sanders', '6', '11', 12, 45),
('2024-11-22 13:17:00', 3, 77551, 'นางสาว', 'Ruby', 'Sanders', '6', '11', 11, 4),
('2024-11-22 13:17:02', 4, 88964, 'นาย', 'Saruman ', 'Ruiz', '6', '11', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `reward_id` int(6) NOT NULL,
  `reward_sport_id` int(11) NOT NULL,
  `reward_first` int(2) NOT NULL,
  `reward_second` int(2) NOT NULL,
  `reward_third` int(2) NOT NULL,
  `reward_third_one` int(2) NOT NULL,
  `reward_third_two` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`reward_id`, `reward_sport_id`, `reward_first`, `reward_second`, `reward_third`, `reward_third_one`, `reward_third_two`) VALUES
(2, 90, 9, 12, 13, 0, 0),
(4, 17, 9, 12, 0, 0, 0),
(5, 18, 11, 12, 0, 0, 0),
(6, 19, 9, 13, 0, 0, 0),
(7, 20, 10, 9, 0, 0, 0),
(8, 89, 12, 9, 13, 10, 11),
(10, 92, 10, 9, 13, 0, 0),
(11, 27, 12, 10, 0, 0, 0),
(12, 91, 9, 11, 10, 0, 0),
(13, 94, 12, 11, 13, 0, 0),
(14, 97, 9, 10, 11, 0, 0),
(15, 48, 10, 9, 0, 0, 0),
(16, 49, 10, 12, 0, 0, 0),
(17, 53, 13, 10, 0, 0, 0),
(18, 54, 10, 13, 0, 0, 0),
(19, 58, 11, 9, 0, 0, 0),
(20, 50, 9, 12, 0, 0, 0),
(21, 57, 10, 13, 0, 0, 0),
(22, 62, 11, 10, 0, 0, 0),
(23, 26, 11, 12, 0, 0, 0),
(24, 93, 10, 12, 11, 0, 0),
(25, 96, 10, 13, 0, 0, 0),
(26, 95, 13, 12, 0, 0, 0),
(27, 12, 10, 11, 13, 0, 0),
(28, 1, 9, 11, 0, 0, 0),
(29, 11, 9, 12, 11, 0, 0),
(30, 8, 11, 9, 0, 0, 0),
(31, 13, 10, 12, 0, 0, 0),
(32, 16, 11, 10, 0, 0, 0),
(33, 51, 12, 9, 0, 0, 0),
(34, 29, 11, 13, 12, 0, 0),
(35, 33, 12, 10, 0, 0, 0),
(36, 34, 10, 11, 0, 0, 0),
(37, 38, 11, 9, 0, 0, 0),
(38, 39, 13, 12, 0, 0, 0),
(39, 43, 12, 11, 0, 0, 0),
(40, 44, 11, 12, 0, 0, 0),
(41, 35, 9, 13, 0, 0, 0),
(42, 36, 10, 13, 0, 0, 0),
(43, 40, 9, 10, 0, 0, 0),
(44, 41, 12, 11, 0, 0, 0),
(45, 45, 11, 9, 0, 0, 0),
(46, 46, 13, 11, 0, 0, 0),
(47, 5, 9, 11, 0, 0, 0),
(48, 4, 10, 13, 0, 0, 0),
(49, 30, 9, 13, 0, 0, 0),
(50, 55, 10, 11, 0, 0, 0),
(51, 56, 12, 13, 0, 0, 0),
(52, 60, 13, 10, 0, 0, 0),
(53, 61, 9, 12, 0, 0, 0),
(54, 15, 10, 11, 0, 0, 0),
(55, 14, 11, 10, 0, 0, 0),
(56, 59, 11, 10, 0, 0, 0),
(57, 22, 11, 12, 0, 0, 0),
(59, 23, 10, 12, 0, 0, 0),
(60, 42, 10, 12, 0, 0, 0),
(61, 37, 10, 13, 0, 0, 0),
(62, 47, 9, 13, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_sport_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_time` time(1) NOT NULL,
  `schedule_venue` varchar(128) NOT NULL,
  `schedule_status` varchar(32) NOT NULL,
  `schedule_rival_one` varchar(16) NOT NULL,
  `schedule_rival_two` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_sport_id`, `schedule_date`, `schedule_time`, `schedule_venue`, `schedule_status`, `schedule_rival_one`, `schedule_rival_two`) VALUES
(11, 2, '2024-11-27', '11:40:00.0', 'สนามฟุตบอล', 'การแข่งขันจบแล้ว', 'สีแดง', 'สีฟ้า'),
(13, 4, '2024-11-27', '13:40:00.0', 'สนามฟุตบอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีเขียว'),
(14, 1, '2024-11-27', '14:40:00.0', 'สนามฟุตบอล', 'การแข่งขันจบแล้ว', 'สีเหลือง', 'สีแดง'),
(15, 2, '2024-11-27', '15:40:00.0', 'สนามฟุตบอล', 'การแข่งขันจบแล้ว', 'สีเขียว', 'สีชมพู'),
(16, 4, '2024-11-28', '09:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีแดง'),
(17, 1, '2024-11-28', '10:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'คู่ที่ 2'),
(18, 2, '2024-11-28', '12:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'คู่ที่ 1'),
(19, 4, '2024-11-28', '12:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'คู่ที่ 3'),
(20, 1, '2024-11-29', '09:15:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(21, 4, '2024-11-29', '10:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(22, 2, '2024-11-29', '11:30:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(23, 91, '2024-11-28', '13:00:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(24, 92, '2024-11-28', '08:15:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(25, 93, '2024-11-29', '08:15:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(26, 94, '2024-11-28', '15:00:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', '', ''),
(27, 11, '2024-11-27', '11:00:00.0', 'สนามแฮนด์บอล', 'การแข่งขันจบแล้ว', 'สีฟ้า', 'สีเขียว'),
(28, 12, '2024-11-27', '10:40:00.0', 'สนามแฮนด์บอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีเหลือง'),
(29, 11, '2024-11-27', '11:00:00.0', 'สนามแฮนด์บอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีเหลือง'),
(30, 12, '2024-11-27', '13:00:00.0', 'สนามแฮนด์บอล', 'การแข่งขันจบแล้ว', 'สีแดง', 'สีเขียว'),
(31, 11, '2024-11-28', '09:00:00.0', 'สนามแฮนด์บอล', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเขียว'),
(32, 12, '2024-11-28', '11:00:00.0', 'สนามแฮนด์บอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีชมพู'),
(33, 12, '2024-11-29', '09:00:00.0', 'สนามแฮนด์บอล', 'ยังไม่แข่งขัน', '', ''),
(34, 11, '2024-11-29', '10:00:00.0', 'สนามแฮนด์บอล', 'ยังไม่แข่งขัน', '', ''),
(35, 13, '2024-11-27', '10:00:00.0', 'สนามวอลเลย์บอล', 'การแข่งขันจบแล้ว', 'สีเขียว', 'สีแดง'),
(36, 16, '2024-11-27', '10:00:00.0', 'สนามวอลเลย์บอล', 'การแข่งขันจบแล้ว', 'สีเหลือง', 'สีแดง'),
(37, 14, '2024-11-27', '11:00:00.0', 'สนามวอลเลย์บอล', 'การแข่งขันจบแล้ว', 'สีฟ้า', 'สีเหลือง'),
(38, 15, '2024-11-27', '11:00:00.0', 'สนามวอลเลย์บอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีฟ้า'),
(39, 13, '2024-11-27', '13:00:00.0', 'สนามวอลเลย์บอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีฟ้า'),
(40, 16, '2024-11-27', '13:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(41, 14, '2024-11-28', '10:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีแดง', 'สีชมพู'),
(42, 15, '2024-11-28', '10:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเขียว'),
(43, 13, '2024-11-28', '11:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีแดง'),
(44, 16, '2024-11-28', '11:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(45, 14, '2024-11-28', '13:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(46, 15, '2024-11-28', '13:00:00.0', 'สนามวอลเลย์บอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีชมพู'),
(47, 17, '2024-11-27', '10:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(48, 29, '2024-11-27', '10:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(49, 30, '2024-11-27', '11:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีแดง'),
(50, 31, '2024-11-27', '00:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีชมพู'),
(51, 32, '2024-11-27', '13:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีชมพู'),
(52, 29, '2024-11-27', '14:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(53, 30, '2024-11-27', '15:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีฟ้า'),
(54, 31, '2024-11-28', '09:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(55, 32, '2024-11-28', '10:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีแดง'),
(56, 29, '2024-11-28', '00:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'คู่ที่ 1'),
(57, 30, '2024-11-28', '13:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'คู่ที่ 2'),
(58, 31, '2024-11-28', '14:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีแดง', 'คู่ที่ 3'),
(59, 32, '2024-11-28', '15:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเหลือง', 'คู่ที่ 4'),
(60, 5, '2024-11-27', '10:00:00.0', 'สนามฟุตซอล', 'การแข่งขันจบแล้ว', 'สีเหลือง', 'สีชมพู'),
(61, 8, '2024-11-27', '11:00:00.0', 'สนามฟุตซอล', 'การแข่งขันจบแล้ว', 'สีชมพู', 'สีเหลือง'),
(62, 5, '2024-11-27', '13:00:00.0', 'สนามฟุตซอล', 'การแข่งขันจบแล้ว', 'สีเขียว', 'สีแดง'),
(63, 7, '2024-11-27', '15:00:00.0', 'สนามฟุตซอล', 'การแข่งขันจบแล้ว', 'สีฟ้า', 'สีชมพู'),
(64, 7, '2024-11-27', '14:00:00.0', 'สนามฟุตซอล', 'การแข่งขันจบแล้ว', 'สีเหลือง', 'สีเขียว'),
(65, 5, '2024-11-28', '10:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเหลือง'),
(66, 8, '2024-11-28', '11:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(67, 7, '2024-11-28', '13:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีแดง', 'คู่ที่ 4'),
(68, 8, '2024-11-28', '14:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(69, 1, '2024-11-27', '12:40:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีเขียว'),
(70, 95, '2024-11-28', '08:16:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีฟ้า'),
(71, 22, '2024-11-29', '09:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีฟ้า'),
(72, 33, '2024-11-27', '09:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีฟ้า'),
(73, 34, '2024-11-27', '09:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(74, 38, '2024-11-27', '09:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(75, 39, '2024-11-27', '09:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(76, 43, '2024-11-27', '09:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีฟ้า'),
(77, 44, '2024-11-27', '09:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเขียว'),
(78, 36, '2024-11-27', '09:40:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีแดง', 'สีชมพู'),
(79, 41, '2024-11-27', '09:40:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(80, 40, '2024-11-27', '09:40:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีชมพู'),
(81, 35, '2024-11-27', '10:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีชมพู'),
(82, 45, '2024-11-27', '10:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีชมพู'),
(83, 46, '2024-11-27', '10:00:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(84, 37, '2024-11-27', '10:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(85, 42, '2024-11-27', '10:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีฟ้า'),
(86, 47, '2024-11-27', '10:20:00.0', 'สนามแบดมินตัน', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(87, 52, '2024-11-27', '09:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(88, 62, '2024-11-28', '09:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(89, 51, '2024-11-29', '09:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีชมพู'),
(90, 52, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีฟ้า'),
(91, 52, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเหลือง', 'คู่ที่ 1'),
(92, 57, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(93, 57, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีฟ้า'),
(94, 57, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเหลือง', 'คู่ที่ 4'),
(97, 52, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'คู่ที่ 2', 'คู่ที่ 3'),
(98, 57, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'คู่ที่ 5', 'คู่ที่ 6'),
(99, 48, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเขียว'),
(100, 48, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเหลือง'),
(101, 48, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีชมพู', 'คู่ที่ 9'),
(102, 49, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีฟ้า'),
(103, 49, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีชมพู'),
(104, 49, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีแดง', 'คู่ที่ 12'),
(105, 48, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'คู่ที่ 10', 'คู่ที่ 11'),
(106, 49, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'คู่ที่ 13', 'คู่ที่ 14'),
(107, 53, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเขียว'),
(108, 53, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเหลือง'),
(109, 53, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'สีชมพู', 'คู่ที่ 17'),
(110, 53, '2024-11-27', '00:00:00.0', 'สนามเทเบิลเทนนิส', 'ยังไม่แข่งขัน', 'คู่ที่ 18', 'คู่ที่ 19'),
(111, 18, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(112, 19, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเขียว'),
(113, 20, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีฟ้า'),
(114, 17, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีชมพู', 'สีแดง'),
(115, 18, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีฟ้า'),
(116, 19, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีชมพู'),
(117, 20, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีแดง'),
(118, 17, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเหลือง', 'สีฟ้า'),
(119, 18, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีแดง', 'สีชมพู'),
(120, 19, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'คู่ที่ 3', 'สีฟ้า'),
(121, 20, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'คู่ที่ 4', 'สีเขียว'),
(122, 17, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีแดง', 'สีเหลือง'),
(123, 18, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีแดง'),
(124, 19, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'คู่ที่ 7', 'คู่ที่ 11'),
(125, 20, '2024-11-27', '00:00:00.0', 'สนามเปตอง', 'ยังไม่แข่งขัน', 'คู่ที่ 8', 'คู่ที่ 12'),
(126, 33, '2024-11-28', '09:00:00.0', 'สนามแบดมินตัน', '', 'สีเขียว', 'สีชมพู'),
(127, 34, '2024-11-28', '09:00:00.0', 'สนามแบดมินตัน', '', 'สีชมพู', 'สีแดง'),
(128, 38, '2024-11-28', '09:00:00.0', 'สนามแบดมินตัน', '', 'สีเหลือง', 'สีฟ้า'),
(129, 39, '2024-11-28', '09:20:00.0', 'สนามแบดมินตัน', '', 'สีชมพู', 'สีแดง'),
(130, 43, '2024-11-28', '09:20:00.0', 'สนามแบดมินตัน', '', 'สีเขียว', 'สีชมพู'),
(131, 44, '2024-11-28', '09:20:00.0', 'สนามแบดมินตัน', '', 'สีชมพู', 'สีแดง'),
(132, 35, '2024-11-28', '09:40:00.0', 'สนามแบดมินตัน', '', 'สีแดง', 'สีเหลือง'),
(133, 36, '2024-11-28', '09:40:00.0', 'สนามแบดมินตัน', '', 'สีเหลือง', 'สีฟ้า'),
(134, 40, '2024-11-28', '09:40:00.0', 'สนามแบดมินตัน', '', 'สีแดง', 'สีเหลือง'),
(135, 41, '2024-11-28', '10:00:00.0', 'สนามแบดมินตัน', '', 'สีฟ้า', 'สีเขียว'),
(136, 45, '2024-11-28', '10:00:00.0', 'สนามแบดมินตัน', '', 'สีแดง', 'สีเหลือง'),
(137, 46, '2024-11-28', '10:00:00.0', 'สนามแบดมินตัน', '', 'สีเหลือง', 'สีฟ้า'),
(138, 37, '2024-11-28', '10:20:00.0', 'สนามแบดมินตัน', '', 'สีฟ้า', 'สีเขียว'),
(139, 42, '2024-11-28', '10:20:00.0', 'สนามแบดมินตัน', '', 'สีเขียว', 'สีชมพู'),
(140, 47, '2024-11-28', '10:20:00.0', 'สนามแบดมินตัน', '', 'สีฟ้า', 'สีเขียว'),
(141, 1, '2024-11-29', '09:15:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(142, 4, '2024-11-29', '10:20:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีชมพู'),
(143, 2, '2024-11-29', '11:30:00.0', 'สนามฟุตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(144, 8, '2024-11-29', '10:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(145, 5, '2024-11-29', '11:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีเหลือง'),
(146, 7, '2024-11-29', '13:00:00.0', 'สนามฟุตซอล', 'ยังไม่แข่งขัน', 'สีแดง', 'สีชมพู'),
(147, 31, '2024-11-29', '11:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเหลือง'),
(148, 32, '2024-11-29', '12:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีเขียว', 'สีชมพู'),
(149, 30, '2024-11-29', '10:00:00.0', 'สนามบาสเก็ตบอล', 'ยังไม่แข่งขัน', 'สีฟ้า', 'สีเหลือง');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(128) NOT NULL,
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
(1, 'ฟุตบอล มัธยมต้น ชาย', 'ฟุตบอล', 'มัธยมต้น', 'ชาย', 15, ''),
(2, 'ฟุตบอล มัธยมปลาย ชาย', 'ฟุตบอล', 'มัธยมปลาย', 'ชาย', 15, ''),
(4, 'ฟุตบอล ทีมหญิงรวม', 'ฟุตบอล', 'ผสม', 'หญิง', 15, ''),
(5, 'ฟุตซอล มัธยมต้น ชาย', 'ฟุตซอล', 'มัธยมต้น', 'ชาย', 12, ''),
(7, 'ฟุตซอล มัธยมปลาย ชาย', 'ฟุตซอล', 'มัธยมปลาย', 'ชาย', 12, ''),
(8, 'ฟุตซอล ทีมหญิงรวม', 'ฟุตซอล', 'ผสม', 'หญิง', 12, ''),
(11, 'แฮนด์บอล ประเภททีมชาย', 'แฮนด์บอล', 'อื่นๆ', 'ชาย', 16, 'ระดับชั้นมัธยมศึกษาปีที่ 4'),
(12, 'แฮนด์บอล ประเภททีมหญิง', 'แฮนด์บอล', 'อื่นๆ', 'หญิง', 16, 'ระดับชั้นมัธยมศึกษาปีที่ 4'),
(13, 'วอลเลย์บอล มัธยมต้น ชาย', 'วอลเลย์บอล', 'มัธยมต้น', 'ชาย', 12, ''),
(14, 'วอลเลย์บอล มัธยมต้น หญิง', 'วอลเลย์บอล', 'มัธยมต้น', 'หญิง', 12, ''),
(15, 'วอลเลย์บอล มัธยมปลาย ชาย', 'วอลเลย์บอล', 'มัธยมปลาย', 'ชาย', 12, ''),
(16, 'วอลเลย์บอล มัธยมปลาย หญิง', 'วอลเลย์บอล', 'มัธยมปลาย', 'หญิง', 12, ''),
(17, 'เปตอง เดี่ยว มัธยมต้น ชาย', 'เปตอง', 'มัธยมต้น', 'ชาย', 1, 'ประเภท เดี่ยว'),
(18, 'เปตอง เดี่ยว มัธยมต้น หญิง', 'เปตอง', 'มัธยมต้น', 'หญิง', 1, 'ประเภท เดี่ยว'),
(19, 'เปตอง เดี่ยว มัธยมปลาย ชาย', 'เปตอง', 'มัธยมปลาย', 'ชาย', 1, 'ประเภท เดี่ยว'),
(20, 'เปตอง เดี่ยว มัธยมปลาย หญิง', 'เปตอง', 'มัธยมปลาย', 'หญิง', 1, 'ประเภท เดี่ยว'),
(22, 'เปตอง คู่ผสม มัธยมต้น', 'เปตอง', 'มัธยมต้น', 'ผสม', 2, 'ประเภท คู่ผสม'),
(23, 'เปตอง คู่ผสม มัธยมปลาย', 'เปตอง', 'มัธยมปลาย', 'ผสม', 2, 'ประเภท คู่ผสม'),
(26, 'เปตอง ทีมสาม มัธยมต้น หญิง', 'เปตอง', 'มัธยมต้น', 'ผสม', 3, 'ประเภท ทีมสาม'),
(27, 'เปตอง ทีมสาม มัธยมปลาย ชาย', 'เปตอง', 'มัธยมปลาย', 'ผสม', 3, 'ประเภท ทีมสาม'),
(29, 'บาสเกตบอล มัธยมต้น ชาย', 'บาสเกตบอล', 'มัธยมต้น', 'ชาย', 12, ''),
(30, 'บาสเกตบอล มัธยมต้น หญิง', 'บาสเกตบอล', 'มัธยมต้น', 'หญิง', 12, ''),
(31, 'บาสเกตบอล มัธยมปลาย ชาย', 'บาสเกตบอล', 'มัธยมปลาย', 'ชาย', 12, ''),
(32, 'บาสเกตบอล มัธยมปลาย หญิง', 'บาสเกตบอล', 'มัธยมปลาย', 'หญิง', 12, ''),
(33, 'แบดมินตัน ประเภทชายเดี่ยว ม.1-2', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 1-2'),
(34, 'แบดมินตัน ประเภทหญิงเดี่ยว ม.1-2', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 1-2'),
(35, 'แบดมินตัน ประเภทชายคู่ ม.1-2', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 1-2'),
(36, 'แบดมินตัน ประเภทหญิงคู่ ม.1-2', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 1-2'),
(37, 'แบดมินตัน ประเภทคู่ผสม ม.1-2', 'แบดมินตัน', 'อื่นๆ', 'ผสม', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 1-2'),
(38, 'แบดมินตัน ประเภทชายเดี่ยว ม.3-4', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 1, ' ระดับชั้นมัธยมศึกษาปีที่ 3-4'),
(39, 'แบดมินตัน ประเภทหญิงเดี่ยว ม.3-4', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 1, ' ระดับชั้นมัธยมศึกษาปีที่ 3-4'),
(40, 'แบดมินตัน ประเภทชายคู่ ม.3-4', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 2, ' ระดับชั้นมัธยมศึกษาปีที่ 3-4'),
(41, 'แบดมินตัน ประเภทหญิงคู่ ม.3-4', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 3-4'),
(42, 'แบดมินตัน ประเภทคู่ผสม ม. 3-4', 'แบดมินตัน', 'อื่นๆ', 'ผสม', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 3-4'),
(43, 'แบดมินตัน ประเภทชายเดี่ยว ม.5-6', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 1, ' ระดับชั้นมัธยมศึกษาปีที่ 5-6'),
(44, 'แบดมินตัน ประเภทหญิงเดี่ยว ม.5-6', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 1, ' ระดับชั้นมัธยมศึกษาปีที่ 5-6'),
(45, 'แบดมินตัน ประเภทชายคู่ ม.5-6', 'แบดมินตัน', 'อื่นๆ', 'ชาย', 2, ' ระดับชั้นมัธยมศึกษาปีที่ 5-6'),
(46, 'แบดมินตัน ประเภทหญิงคู่ ม.5-6', 'แบดมินตัน', 'อื่นๆ', 'หญิง', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 5-6'),
(47, 'แบดมินตัน ประเภทคู่ผสม ม. 5-6', 'แบดมินตัน', 'อื่นๆ', 'ผสม', 2, 'ระดับชั้นมัธยมศึกษาปีที่ 5-6'),
(48, 'เทเบิลเทนนิส ม.1 ชายเดี่ยว', 'เทเบิลเทนนิส', 'อื่นๆ', 'ชาย', 1, 'ม.1 ชายเดี่ยว'),
(49, 'เทเบิลเทนนิส ม.1 หญิงเดี่ยว', 'เทเบิลเทนนิส', 'อื่นๆ', 'หญิง', 1, 'ม.1 หญิงเดี่ยว'),
(50, 'เทเบิลเทนนิส ม.1 ชายคู่', 'เทเบิลเทนนิส', 'อื่นๆ', 'ชาย', 2, 'ม.1 ชายคู่'),
(51, 'เทเบิลเทนนิส ม.1 หญิงคู่', 'เทเบิลเทนนิส', 'อื่นๆ', 'หญิง', 2, 'ม.1 หญิงคู่'),
(52, 'เทเบิลเทนนิส ม.1 คู่ผสม', 'เทเบิลเทนนิส', 'อื่นๆ', 'ผสม', 2, 'ม.1 คู่ผสม'),
(53, 'เทเบิลเทนนิส ม.2-3 ชายเดี่ยว', 'เทเบิลเทนนิส', 'อื่นๆ', 'ชาย', 1, 'ม.2-3 ชายเดี่ยว'),
(54, 'เทเบิลเทนนิส ม.2-3 หญิงเดี่ยว', 'เทเบิลเทนนิส', 'อื่นๆ', 'หญิง', 1, 'ม.2-3 หญิงเดี่ยว'),
(55, 'เทเบิลเทนนิส ม.2-3 ชายคู่', 'เทเบิลเทนนิส', 'อื่นๆ', 'ชาย', 2, 'ม.2-3 ชายคู่'),
(56, 'เทเบิลเทนนิส ม.2-3 หญิงคู่', 'เทเบิลเทนนิส', 'อื่นๆ', 'หญิง', 2, 'ม.2-3 หญิงคู่'),
(57, 'เทเบิลเทนนิส ม.2-3 คู่ผสม', 'เทเบิลเทนนิส', 'อื่นๆ', 'ผสม', 2, 'ม.2-3 คู่ผสม'),
(58, 'เทเบิลเทนนิส ม.ปลาย ชายเดี่ยว', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'ชาย', 1, 'ม.ปลาย ชายเดี่ยว'),
(59, 'เทเบิลเทนนิส ม.ปลาย หญิงเดี่ยว', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'หญิง', 1, 'ม.ปลาย หญิงเดี่ยว'),
(60, 'เทเบิลเทนนิส ม.ปลาย ชายคู่', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'ชาย', 2, 'ม.ปลาย ชายคู่'),
(61, 'เทเบิลเทนนิส ม.ปลาย หญิงคู่', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'หญิง', 2, 'ม.ปลาย หญิงคู่'),
(62, 'เทเบิลเทนนิส ม.ปลาย คู่ผสม', 'เทเบิลเทนนิส', 'มัธยมปลาย', 'ผสม', 2, 'ม.ปลาย คู่ผสม'),
(63, 'วิ่ง 100 เมตร ม.1 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 1 '),
(64, 'วิ่ง 100 เมตร ม.1 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 1 '),
(65, 'วิ่ง 100 เมตร ม.2 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 2 '),
(66, 'วิ่ง 100 เมตร ม.2 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 2 '),
(67, 'วิ่ง 100 เมตร ม.3 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 3 '),
(68, 'วิ่ง 100 เมตร ม.3 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 3 '),
(69, 'วิ่ง 100 เมตร ม.4 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 4 '),
(70, 'วิ่ง 100 เมตร ม.4 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 4 '),
(71, 'วิ่ง 100 เมตร ม.5 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 5 '),
(72, 'วิ่ง 100 เมตร ม.5 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 5 '),
(73, 'วิ่ง 100 เมตร ม.6 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 6 '),
(74, 'วิ่ง 100 เมตร ม.6 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 1, 'ระดับชั้นมัธยมศึกษาปีที่ 6 '),
(75, 'วิ่งผลัด 4x100  ม.1 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 1 '),
(76, 'วิ่งผลัด 4x100  ม.1 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 1 '),
(77, 'วิ่งผลัด 4x100  ม.2 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 2 '),
(78, 'วิ่งผลัด 4x100  ม.2 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 2 '),
(79, 'วิ่งผลัด 4x100  ม.3 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 3 '),
(80, 'วิ่งผลัด 4x100  ม.3 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 3 '),
(81, 'วิ่งผลัด 4x100  ม.4 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 4 '),
(82, 'วิ่งผลัด 4x100  ม.4 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 4 '),
(83, 'วิ่งผลัด 4x100  ม.5 ชาย', 'กรีฑา', 'อื่นๆ', 'ชาย', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 5 '),
(84, 'วิ่งผลัด 4x100  ม.5 หญิง', 'กรีฑา', 'อื่นๆ', 'หญิง', 4, 'ระดับชั้นมัธยมศึกษาปีที่ 5 '),
(85, 'วิ่ง 200 เมตร มัธยมต้น ชาย', 'กรีฑา', 'มัธยมต้น', 'ชาย', 1, ''),
(86, 'วิ่ง 200 เมตร มัธยมต้น หญิง', 'กรีฑา', 'มัธยมต้น', 'หญิง', 1, ''),
(87, 'วิ่ง 400 เมตร มัธยมปลาย ชาย', 'กรีฑา', 'มัธยมปลาย', 'ชาย', 1, ''),
(88, 'วิ่ง 400 เมตร มัธยมปลาย หญิง', 'กรีฑา', 'มัธยมปลาย', 'หญิง', 1, ''),
(89, 'ม.6 ชักเย่อ ทีมชาย', 'กีฬาพื้นบ้าน', 'อื่นๆ', 'ชาย', 15, 'ระดับชั้นมัธยมศึกษาปีที่ 6'),
(90, 'ม.6 ชักเย่อ ทีมหญิง', 'กีฬาพื้นบ้าน', 'อื่นๆ', 'หญิง', 15, 'ระดับชั้นมัธยมศึกษาปีที่ 6'),
(91, 'ม.1 บอลมหาชัย (บอลหลบ)', 'กีฬาแต่ละระดับชั้น', 'อื่นๆ', 'ผสม', 12, 'ชั้นมัธยมศึกษาปีที่ 1 ชาย 6 คน หญิง 6 คน'),
(92, 'ม.2 แอโรบิก', 'กีฬาแต่ละระดับชั้น', 'อื่นๆ', 'ผสม', 35, 'ชั้นมัธยมศึกษาปีที่ 2'),
(93, 'ม.3 Boxing Kids', 'กีฬาแต่ละระดับชั้น', 'อื่นๆ', 'ผสม', 40, 'ชั้นมัธยมศึกษาปีที่ 3'),
(94, 'ม.4 วงล้อสามัคคี ทีมชาย', 'กีฬาแต่ละระดับชั้น', 'อื่นๆ', 'ชาย', 6, 'ชั้นมัธยมศึกษาปีที่ 4 ชาย 6 คน'),
(95, 'ม.4 วงล้อสามัคคี ทีมหญิง', 'กีฬาแต่ละระดับชั้น', 'อื่นๆ', 'หญิง', 6, 'ชั้นมัธยมศึกษาปีที่ 4 หญิง 6 คน'),
(96, 'เปตอง ทีมสาม มัธยมต้น ชาย', 'เปตอง', 'มัธยมต้น', 'ชาย', 3, ''),
(97, 'เปตอง ทีมสาม มัธยมปลาย หญิง', 'เปตอง', 'มัธยมปลาย', 'หญิง', 3, '');

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
(1, 'Tester', 'Admin', 'admin1234', 'admin_system'),
(3, 'reporter', 'Admin_report', 'admin_report', 'admin_report'),
(9, 'Yellow name', 'Yellow', 'Yellow1234', 'admin_sport'),
(10, 'pink name', 'Pink', 'Pink1234', 'admin_sport'),
(11, 'Green Name', 'Green', 'Green1234', 'admin_sport'),
(12, 'Red Name', 'Red', 'Red1234', 'admin_sport'),
(13, 'Blue Name', 'Blue', 'Blue1234', 'admin_sport'),
(14, 'Admin', 'Admin_system', 'admin_system', 'admin_system');

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
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

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
  MODIFY `color_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id_player` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `reward_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
