-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 11:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_students_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `classid` int(11) NOT NULL,
  `schoolyears_id` int(11) NOT NULL,
  `class` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`classid`, `schoolyears_id`, `class`) VALUES
(1, 1, '10'),
(2, 2, '11'),
(3, 3, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_years`
--

CREATE TABLE `tbl_school_years` (
  `school_years_id` int(11) NOT NULL,
  `school_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_school_years`
--

INSERT INTO `tbl_school_years` (`school_years_id`, `school_year`) VALUES
(1, '2019'),
(2, '2020'),
(3, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `termid` int(11) NOT NULL,
  `mark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_score`
--

INSERT INTO `tbl_score` (`student_id`, `subject_id`, `termid`, `mark`) VALUES
(5, 3, 1, 8),
(4, 2, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semesters`
--

CREATE TABLE `tbl_semesters` (
  `term_id` int(11) NOT NULL,
  `term` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_semesters`
--

INSERT INTO `tbl_semesters` (`term_id`, `term`) VALUES
(1, 'Kì I'),
(2, 'Kì II');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id_Stu` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id_Stu`, `name`, `address`, `email`, `phone_number`, `class_id`) VALUES
(4, 'Trần Cao Trung', 'Hà Nội', 'caotrung@gmail.com', '0978888998', 1),
(5, 'Minh Trang', 'Nam Định', 'minhtrang@gmail.com', '0989789989', 2),
(8, 'Thái Thảo', 'Thái Bình', 'thao@gmail.com', '0986418863', 1),
(12, 'Văn Lâm', 'Đông Anh', 'vanlam@gmail.com', '0986418863', 3),
(13, 'Cao Minh', 'Chương Dương', 'haiminh@gmail.com', '0915093319', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `sub_id` int(11) NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`sub_id`, `subject`) VALUES
(1, 'Toán'),
(2, 'Ngữ Văn'),
(3, 'Anh'),
(4, 'Sử'),
(5, 'Địa Lý'),
(6, 'Vật lý'),
(7, 'Sinh học');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'admin16', 'admin@gmail.com', '0988778808', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Văn Nam', 'vannam@gmail.com', '0989798978', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`classid`),
  ADD KEY `school_years_id` (`schoolyears_id`),
  ADD KEY `schoolyears_id` (`schoolyears_id`);

--
-- Indexes for table `tbl_school_years`
--
ALTER TABLE `tbl_school_years`
  ADD PRIMARY KEY (`school_years_id`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD KEY `student_id` (`student_id`,`subject_id`,`termid`),
  ADD KEY `termid` (`termid`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `tbl_semesters`
--
ALTER TABLE `tbl_semesters`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id_Stu`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_school_years`
--
ALTER TABLE `tbl_school_years`
  MODIFY `school_years_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_semesters`
--
ALTER TABLE `tbl_semesters`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id_Stu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD CONSTRAINT `tbl_class_ibfk_1` FOREIGN KEY (`schoolyears_id`) REFERENCES `tbl_school_years` (`school_years_id`);

--
-- Constraints for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD CONSTRAINT `tbl_score_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_students` (`id_Stu`),
  ADD CONSTRAINT `tbl_score_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subjects` (`sub_id`),
  ADD CONSTRAINT `tbl_score_ibfk_3` FOREIGN KEY (`termid`) REFERENCES `tbl_semesters` (`term_id`);

--
-- Constraints for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD CONSTRAINT `tbl_students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `tbl_class` (`classid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
