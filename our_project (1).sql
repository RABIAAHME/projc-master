-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 01:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

DROP TABLE IF EXISTS `collages`;
CREATE TABLE `collages` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collages`
--

INSERT INTO `collages` (`id`, `collage_name`, `admin_id`) VALUES
(5, 'كلية تربية نوعية ', 0),
(6, 'كلية الاداب', 0),
(7, 'كلية الطب', 0),
(8, 'كلية الهندسة ', 0),
(9, 'زراعة', 8),
(10, 'الحقوق', 9);

-- --------------------------------------------------------

--
-- Table structure for table `dr_collage`
--

DROP TABLE IF EXISTS `dr_collage`;
CREATE TABLE `dr_collage` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dr_collage`
--

INSERT INTO `dr_collage` (`id`, `users_id`, `collage_id`) VALUES
(1, 23, 10),
(2, 3, 10),
(3, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dr_subj`
--

DROP TABLE IF EXISTS `dr_subj`;
CREATE TABLE `dr_subj` (
  `id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dr_subj`
--

INSERT INTO `dr_subj` (`id`, `subj_id`, `users_id`) VALUES
(1, 1, 0),
(2, 2, 3),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hodor`
--

DROP TABLE IF EXISTS `hodor`;
CREATE TABLE `hodor` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `lects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lects`
--

DROP TABLE IF EXISTS `lects`;
CREATE TABLE `lects` (
  `id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `lect_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lects`
--

INSERT INTO `lects` (`id`, `subj_id`, `lect_date`) VALUES
(1, 2, '2022-04-08'),
(3, 2, '2022-06-26'),
(4, 3, '2022-06-26'),
(5, 3, '2022-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `part_id`, `name`) VALUES
(1, 3, ' الفرقة الاولى '),
(2, 2, 'الفرقة الثانية '),
(3, 3, 'الفرقة الثالثة '),
(4, 1, 'الفرقة الرابعة '),
(5, 6, 'الاولى'),
(6, 6, 'al olah'),
(7, 23, 'الرابعه'),
(8, 23, 'الاولي'),
(9, 23, 'الاولي'),
(10, 23, 'الاولي'),
(11, 23, 'الاولي'),
(12, 23, 'الاولي'),
(13, 7, 'الثانية'),
(14, 7, 'الثالثة'),
(15, 36, 'الرابعة'),
(16, 37, 'الثانيه'),
(17, 39, 'الاولى'),
(18, 39, 'الاولى'),
(19, 41, 'الثانية'),
(20, 43, 'الفرقة الخامسة '),
(21, 45, 'الفرقة السادسه ');

-- --------------------------------------------------------

--
-- Table structure for table `massg`
--

DROP TABLE IF EXISTS `massg`;
CREATE TABLE `massg` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massg`
--

INSERT INTO `massg` (`id`, `from_id`, `to_id`, `body`, `title`) VALUES
(1, 150, 1, 'hالدرس ا', 'الواجب');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `collage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `collage_id`) VALUES
(1, 'تكنولوجيا التعليم', 5),
(2, 'قسم فنية ', 5),
(3, 'اقتصاد', 5),
(4, 'kاجليزي', 6),
(5, 'فرنساوي', 6),
(6, 'تربية', 10),
(7, 'علوم', 10),
(8, 'رياضيات', 10),
(23, 'ادمان', 10),
(39, 'بيلوجك', 9),
(41, 'فنون', 9),
(43, 'جولوجيا', 4),
(44, 'كيمياء', 6);

-- --------------------------------------------------------

--
-- Table structure for table `qr_dr`
--

DROP TABLE IF EXISTS `qr_dr`;
CREATE TABLE `qr_dr` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `level_id`, `users_id`) VALUES
(1, 2, 0),
(2, 1, 0),
(3, 4, 5),
(4, 2, 0),
(5, 1, 0),
(6, 5, 10),
(7, 5, 21),
(8, 18, 39),
(9, 5, 4),
(10, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subj`
--

DROP TABLE IF EXISTS `subj`;
CREATE TABLE `subj` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `term_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subj`
--

INSERT INTO `subj` (`id`, `name`, `term_id`) VALUES
(1, 'تطبيقات الحاسب ', 2),
(2, 'مدخل تكنولوجيا التعليم', 1),
(3, 'علم نفس ', 2),
(4, 'جغرافيا', 3),
(5, 'تكنولوجيا التعليم', 0),
(6, 'دراسات عامة ', 0),
(7, 'دراسات اساسية ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

DROP TABLE IF EXISTS `term`;
CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `name`, `level_id`) VALUES
(1, 'الترم الاول ', 2),
(2, 'الترم التانى ', 3),
(3, 'العاشر', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('su','ad','dr','stu') NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `pass`) VALUES
(3, 'على محمد', 'doctor1@medo.com', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(4, 'ابراهيم محمد', 'stu1@medo.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(5, 'asmaa', 'stu2@medo.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(6, 'المسؤول الكبير', 'su_ad1@fyun.com', 'su', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(8, 'محمد زارع', 'admin1@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(9, 'ندى ', 'admin@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(10, 'ربيع', 'stu3@fff.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(11, 'احمد', 'doctor2@mm', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(13, 'حمدى احمد', 'doctor3@cc.com', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(14, 'ساره', 'dotor4@dd.com', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(21, 'محمد', 'rabiaahmed321@gmail.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(23, 'samy', 'samy@dr.edu', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(39, 'شعبان ابراهيم ', 'gg@141', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(51, 'محمد احمد', 'vv@dd', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(53, 'السيد مصطفى ', 'yy@tt', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`collage_name`);

--
-- Indexes for table `dr_collage`
--
ALTER TABLE `dr_collage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr_subj`
--
ALTER TABLE `dr_subj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hodor`
--
ALTER TABLE `hodor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lects`
--
ALTER TABLE `lects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massg`
--
ALTER TABLE `massg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_dr`
--
ALTER TABLE `qr_dr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subj`
--
ALTER TABLE `subj`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dr_collage`
--
ALTER TABLE `dr_collage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dr_subj`
--
ALTER TABLE `dr_subj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hodor`
--
ALTER TABLE `hodor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lects`
--
ALTER TABLE `lects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `massg`
--
ALTER TABLE `massg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `qr_dr`
--
ALTER TABLE `qr_dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subj`
--
ALTER TABLE `subj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
