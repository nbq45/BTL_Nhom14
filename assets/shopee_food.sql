-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 10:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuahang`
--

CREATE TABLE `cuahang` (
  `ma_ch` int(100) UNSIGNED NOT NULL,
  `ten_ch` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giamgia` int(11) DEFAULT 0,
  `menu_ch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_kv` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuahang`
--

INSERT INTO `cuahang` (`ma_ch`, `ten_ch`, `address`, `phone`, `img_ch`, `giamgia`, `menu_ch`, `ma_kv`) VALUES
(1, 'Lâm Anh - Bún Đậu & Bún Nước', '2 Ngách 64 Ngõ 44 Trần Thái Tông, Cầu Giấy, Hà Nội', '0978645321', 'https://images.foody.vn/res/g102/1015293/prof/s640x400/foody-upload-api-foody-mobile-26-200619163217.jpg', 10, NULL, 1),
(2, 'Bami King - Bánh Mì Bò Nướng - An Trạch', '116 An Trạch, Đống Đa, Hà Nội', '0968475321', 'https://images.foody.vn/res/g66/656001/prof/s640x400/foody-upload-api-foody-mobile-anh-dai-dien-190821100059.jpg', 10, NULL, 2),
(3, 'Trà Sữa Tocotoco - Ngọc Hồi', 'Trà Sữa Tocotoco - Ngọc Hồi', '0957862413', 'https://images.foody.vn/res/g67/662390/prof/s640x400/foody-upload-api-foody-mobile-6ec017c3-c232-45fb-8-200429162344.jpg', 10, NULL, 3),
(4, 'Bánh Tiramisu - Shop Online', '180 Xã Đàn, Đống Đa, Hà Nội', '0945278631', 'https://images.foody.vn/res/g87/863630/prof/s640x400/foody-upload-api-foody-mobile-tiramisu-1-jpg-181212180515.jpg', 10, NULL, 2),
(5, 'Cơm Chay Tuệ Tâm', '17B Ngõ 105 Đình Thôn, Nam Từ Liêm, Hà Nội', '0935462718', 'https://images.foody.vn/res/g112/1111679/prof/s640x400/foody-upload-api-foody-mobile-fo-a224a9f6-211018150402.jpeg', 10, NULL, 4),
(6, 'Bún Bò Huế 65 - Đường Láng', '65 Đường Láng, Đống Đa, Hà Nội', '0982068626', 'https://images.foody.vn/res/g8/72895/prof/s640x400/foody-mobile-bun-bo-jpg-373-635854404466178764.jpg', 10, NULL, 2),
(7, 'Highlands Coffee - Pullman', '40 Cát Linh, P. Cát Linh, Đống Đa, Hà Nội', '0978904072', 'https://images.foody.vn/res/g10/97503/prof/s640x400/image-6f0e4a91-210613161520.jpeg', 10, NULL, 2),
(8, 'Cha Go Tea & Cafe - Nguyễn Chí Thanh', '126 Nguyễn Chí Thanh, Đống Đa, Hà Nội', '0984726497', 'https://images.foody.vn/res/g69/682841/prof/s640x400/foody-mobile-18740781_14440547792-771-636391082464924110.jpg', 10, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `ma_ad` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`ma_ad`, `username`, `password`) VALUES
(1, 'minhduc', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_dh` int(100) UNSIGNED NOT NULL,
  `tongtien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(50) UNSIGNED NOT NULL,
  `ngay_dat` date NOT NULL,
  `thoi_gian_dat` datetime DEFAULT NULL,
  `thoi_gian_giao` datetime DEFAULT NULL,
  `noi_giao_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_gd` int(100) UNSIGNED NOT NULL,
  `ma_sp` int(100) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giaodich`
--

CREATE TABLE `giaodich` (
  `ma_gd` int(100) UNSIGNED NOT NULL,
  `tu_ngay` date NOT NULL,
  `den_ngay` date NOT NULL,
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `ma_ad` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `name`, `password`, `email`, `address`, `phone`, `email_verification_link`, `email_verified_at`, `status`) VALUES
(10, 'minh duc', '$2y$10$qAcaGhZKsrW533Q2h407UumR5/AkdQLSMf7DXkYki5dmwsf/uKoWu', 'vucaominhduc@gmail.com', 'Số 27, ngách 293/32, ngõ 319 Tam Trinh', '0345825487', '3b3d76e3ea83c4702082fdb9e58d26668542', '2022-01-03 06:36:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khu_vuc`
--

CREATE TABLE `khu_vuc` (
  `ma_kv` int(10) UNSIGNED NOT NULL,
  `ten_kv` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khu_vuc`
--

INSERT INTO `khu_vuc` (`ma_kv`, `ten_kv`) VALUES
(1, 'Cầu giấy'),
(2, 'Đống Đa'),
(3, 'Ngọc Hồi'),
(4, 'Nam Từ Liêm');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `ma_loaisp` int(100) UNSIGNED NOT NULL,
  `ten_loaisp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ma_loaisp`, `ten_loaisp`) VALUES
(1, 'do an'),
(2, 'do uong'),
(3, 'do trang mieng');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(100) UNSIGNED NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_loaisp` int(100) UNSIGNED NOT NULL,
  `ma_ch` int(100) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `img`, `gia`, `ma_loaisp`, `ma_ch`) VALUES
(1, 'Cơm Chay Gạo Lứt Nấm Giò Kho Tộ', NULL, '53000', 1, 5),
(2, 'Cơm Văn phòng suất thường 6 Món', NULL, '50000', 1, 5),
(3, 'Combo Bánh Mì Gà Nấm 33', NULL, '48000', 1, 2),
(4, 'Combo Bánh Mì Gà Nấm 38', NULL, '53000', 1, 2),
(5, 'Trà Sữa Ba Anh Em', NULL, '48000', 2, 3),
(6, 'Trà Sữa Ba Anh Em', NULL, '38000', 2, 3),
(7, 'Bún Đậu Xuất Đầy Đủ', NULL, '54000', 1, 1),
(8, 'Bún Cá', NULL, '30000', 1, 1),
(9, 'Bông Lan Trứng Muối Pho Mai Siêu Sốt', NULL, '72000', 3, 4),
(10, 'Tiramisu Chanh Leo Trà Xanh Socola', NULL, '80000', 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`ma_ch`),
  ADD KEY `ma_kv` (`ma_kv`);

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`ma_ad`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_sp` (`ma_sp`),
  ADD KEY `ma_gd` (`ma_gd`);

--
-- Indexes for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`ma_gd`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_ad` (`ma_ad`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `khu_vuc`
--
ALTER TABLE `khu_vuc`
  ADD PRIMARY KEY (`ma_kv`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`ma_loaisp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_loaisp` (`ma_loaisp`),
  ADD KEY `ma_ch` (`ma_ch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `ma_ch` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `ma_ad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khu_vuc`
--
ALTER TABLE `khu_vuc`
  MODIFY `ma_kv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `ma_loaisp` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD CONSTRAINT `cuahang_ibfk_1` FOREIGN KEY (`ma_kv`) REFERENCES `khu_vuc` (`ma_kv`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`ma_gd`) REFERENCES `giaodich` (`ma_gd`);

--
-- Constraints for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD CONSTRAINT `giaodich_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`),
  ADD CONSTRAINT `giaodich_ibfk_2` FOREIGN KEY (`ma_ad`) REFERENCES `db_admin` (`ma_ad`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ma_loaisp`) REFERENCES `loaisanpham` (`ma_loaisp`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`ma_ch`) REFERENCES `cuahang` (`ma_ch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
