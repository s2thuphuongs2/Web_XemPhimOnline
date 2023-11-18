-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 01:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `webphim1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webphim1`;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphim1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `IDAD` int(11) NOT NULL,
  `UserAD` varchar(50) NOT NULL,
  `PassAD` varchar(50) NOT NULL,
  `Token` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`IDAD`, `UserAD`, `PassAD`, `Token`, `status`) VALUES
(1, 'admin123456', 'a66abb5684c45962d887564f08346e8d', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `IDComment` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IDphim` int(11) NOT NULL,
  `Noidung` text NOT NULL,
  `TimeComment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `IDPhim` int(11) NOT NULL,
  `TenPhim` varchar(50) NOT NULL,
  `IDTheLoai` int(11) NOT NULL,
  `SoTap` bigint(20) NOT NULL,
  `SoTapDaChieu` bigint(20) NOT NULL,
  `ThoiLuong` time NOT NULL,
  `LuotXem` bigint(20) NOT NULL,
  `NhaSanXuat` varchar(50) NOT NULL,
  `QuocGia` varchar(50) NOT NULL,
  `Nam` year(4) NOT NULL,
  `DienVien` varchar(50) NOT NULL,
  `DaoDien` varchar(50) NOT NULL,
  `Banner` varchar(50) NOT NULL,
  `NoiDung` text NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`IDPhim`, `TenPhim`, `IDTheLoai`, `SoTap`, `SoTapDaChieu`, `ThoiLuong`, `LuotXem`, `NhaSanXuat`, `QuocGia`, `Nam`, `DienVien`, `DaoDien`, `Banner`, `NoiDung`, `TrangThai`) VALUES
(1, 'Kimetsu no Yaiba', 20, 4, 0, '01:30:00', 0, 'Kyoto Animation', 'Nhật Bản', '2021', 'Tanjiro Kamado, Nezuko Kamado', 'Haruo Sotozaki', '1682448488_KnY.jpg', 'a', 1),
(2, 'Bleach- Sennen Kessen-hen', 26, 3, 0, '02:00:00', 0, 'Studio Pierrot', 'Nhật Bản', '2012', 'Ichigo Kurosaki, Rukia Kuchiki', 'Noriyuki Abe', '1682448496_bleach.jpg', 'a', 1),
(3, 'Thám Tử Lừng Danh Conan Câu Chuyện Về Haibara Ai', 20, 1, 1, '01:30:00', 0, 'TMS Entertainment', 'Nhật Bản', '2023', 'Minami Takayama, Wakana Yamazaki', 'Yasuichiro Yamamoto', '1682448504_Conan.jpg', 'Câu chuyện xoay quanh cô nữ sinh trung học tên Miyano Shiho - một sinh viên khoa học học giỏi, và cậu học sinh cấp ba tên Kudo Shinichi - một thám tử tài ba. Khi họ bị dính vào một vụ án, cả hai đã bị biến thành trẻ con và phải giải quyết các vụ án như vậy trong khi tìm cách trở lại hình dáng ban đầu.', 1),
(4, '5cm/s', 26, 1, 1, '01:30:00', 0, 'TMS Entertainment', 'Nhật Bản', '2023', 'Minami Takayama, Wakana Yamazaki', 'Yasuichiro Yamamoto', '1682448511_5cms.jpg', 'Câu chuyện xoay quanh cô nữ sinh trung học tên Miyano Shiho - một sinh viên khoa học học giỏi, và cậu học sinh cấp ba tên Kudo Shinichi - một thám tử tài ba. Khi họ bị dính vào một vụ án, cả hai đã bị biến thành trẻ con và phải giải quyết các vụ án như vậy trong khi tìm cách trở lại hình dáng ban đầu.', 1),
(5, 'Danshi Koukousei no Nichijou', 20, 1, 1, '01:30:00', 0, 'TMS Entertainment', 'Nhật Bản', '2023', 'Minami Takayama, Wakana Yamazaki', 'Yasuichiro Yamamoto', '1682448523_danshi.jpg', 'Câu chuyện xoay quanh cô nữ sinh trung học tên Miyano Shiho - một sinh viên khoa học học giỏi, và cậu học sinh cấp ba tên Kudo Shinichi - một thám tử tài ba. Khi họ bị dính vào một vụ án, cả hai đã bị biến thành trẻ con và phải giải quyết các vụ án như vậy trong khi tìm cách trở lại hình dáng ban đầu.', 1),
(6, 'Bleach- Sennen Kessen-hen', 26, 3, 0, '02:00:00', 0, 'Studio Pierrot', 'Nhật Bản', '2012', 'Ichigo Kurosaki, Rukia Kuchiki', 'Noriyuki Abe', '1682448539_bleach.jpg', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `IDPhim` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tapphim`
--

CREATE TABLE `tapphim` (
  `IDTapPhim` int(11) NOT NULL,
  `IDPhim` int(11) NOT NULL,
  `TapSo` int(11) NOT NULL,
  `SourcePhim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tapphim`
--

INSERT INTO `tapphim` (`IDTapPhim`, `IDPhim`, `TapSo`, `SourcePhim`) VALUES
(1, 1, 1, '1kP7ymVlC96uKWtXx8X77bhy3rovy4IjJ'),
(2, 1, 2, '1EAR6933herUV3yMvQi4NxfdnLTgz1f5Q'),
(3, 1, 3, '1YGjJT5gfhASxHqguvLJQFEvNQIepZzOt'),
(4, 2, 1, '1MHvz9RvxVXfuAwzZRZolGFvL9OHdKXE3'),
(5, 2, 2, '1n56BCL6vz7WuYeqco4aC50OtwbAnJR71'),
(6, 2, 3, '19i1ecSo9MA6T4mxP-e63hTbRQLt-donB'),
(7, 3, 1, '1jd_glxL9WMF0ZrTduemJHZtq8ZIB_W9h'),
(8, 4, 1, '1jd_glxL9WMF0ZrTduemJHZtq8ZIB_W9h'),
(9, 5, 1, '1jd_glxL9WMF0ZrTduemJHZtq8ZIB_W9h'),
(10, 6, 1, '1jd_glxL9WMF0ZrTduemJHZtq8ZIB_W9h');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `IDTheLoai` int(11) NOT NULL,
  `TenTheLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`IDTheLoai`, `TenTheLoai`) VALUES
(20, 'Hanh dong'),
(26, 'Sieu Nhien');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserID`, `Username`, `Password`, `HoTen`, `Mail`, `NgaySinh`) VALUES
(3, 'bbbbx', 'x', '', 'x', '2023-04-05'),
(6, 'admin123456', 'a66abb5684c45962d887564f08346e8d', '', '', '0000-00-00'),
(7, '', '', 'quang tri', '', '0000-00-00'),
(10, 'user1234567', '645f94dcfe65935ca4b24d3a465ece0a', 'user1234567', 'user1234567@gmail.com', '0000-00-00'),
(13, 'user456465465465', '3e5ff3b2117a8dbde71f412e4363a10d', 'user456465465465', 'user456465465465@gmail.com', '0000-00-00'),
(14, 'user12213132', '06c697aaca95d8e31be9467d535fc1d7', 'user12213132', 'user12213132@gmail.com', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`IDAD`),
  ADD UNIQUE KEY `UserAD` (`UserAD`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`IDPhim`),
  ADD KEY `phimtheloai` (`IDTheLoai`),
  ADD KEY `phimbanner` (`Banner`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`IDPhim`,`UserID`);

--
-- Indexes for table `tapphim`
--
ALTER TABLE `tapphim`
  ADD PRIMARY KEY (`IDTapPhim`),
  ADD KEY `tapphim_phim` (`IDPhim`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`IDTheLoai`),
  ADD UNIQUE KEY `TenTheLoai` (`TenTheLoai`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `IDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `IDPhim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tapphim`
--
ALTER TABLE `tapphim`
  MODIFY `IDTapPhim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `IDTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phimtheloai` FOREIGN KEY (`IDTheLoai`) REFERENCES `theloai` (`IDTheLoai`);

--
-- Constraints for table `tapphim`
--
ALTER TABLE `tapphim`
  ADD CONSTRAINT `tapphim_phim` FOREIGN KEY (`IDPhim`) REFERENCES `phim` (`IDPhim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
