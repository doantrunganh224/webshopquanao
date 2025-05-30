-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 12:19 PM
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
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ao`
--

CREATE TABLE `tbl_ao` (
  `id_ao` int(11) NOT NULL,
  `tenao` varchar(100) NOT NULL,
  `maao` varchar(100) NOT NULL,
  `giaao` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `mieuta` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `banchay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ao`
--

INSERT INTO `tbl_ao` (`id_ao`, `tenao`, `maao`, `giaao`, `soluong`, `hinhanh`, `mieuta`, `id_danhmuc`, `trangthai`, `banchay`) VALUES
(1, 'Áo thun trắng', 'ATHUN11', 450000, 6, 'aothun1.jpg', 'Thoáng mát', 7, 0, 0),
(6, 'Sơ mi dài tay', 'ASOMI', 449000, 20, 'somi.jpg', '', 12, 0, 0),
(7, 'Áo thun đen', 'ATHUN13', 420000, 6, 'aothun2.png', 'Đen ', 7, 0, 0),
(8, 'Áo thun vịt Donald', 'ATHUN1800', 250000, 1000, 'aothun4.png', 'Áo có họa tiết chú vịt Donald nổi tiếng', 7, 0, 1),
(9, 'Áo thủy thủ', 'ATHUN2626', 199000, 4, 'aothun5.png', 'Lính thủy đánh bộ - Thủy quân lục chiến', 7, 1, 1),
(10, 'Áo dài tay đen', 'ADAI1002', 360000, 12, 'daitay1.png', 'Đen', 5, 0, 0),
(11, 'Áo polo lục lam', 'APOLO13', 360000, 7, 'polo2.png', 'tháng 4 năm 1970', 4, 0, 0),
(12, 'Sơ mi dài tay xanh', 'ASOMI1510', 499000, 153, 'somi3.png', 'màu xanh', 12, 1, 0),
(13, 'Áo dài tay nâu', 'ADAI12444', 369000, 76, 'daitay2.png', 'Thích hợp cho mùa lạnh', 5, 1, 0),
(14, 'Áo thể thao dài tay', 'ATHAO4404', 199000, 39, 'thethao2.png', 'Ôm toàn thân', 6, 0, 0),
(15, 'Áo thể thao lục lam', 'ATHAO9995', 444400, 4, 'thethao1.png', 'Mỏng nhẹ thoáng mát', 6, 0, 0),
(16, 'Áo dài tay iuembe', 'ADAI3555', 1000000, 23, 'daitay5.png', 'Mọi người đều yêu em bé', 5, 0, 0),
(17, 'Áo polo tím than', 'APOLO11', 1969000, 7, 'polo1.png', 'Neil Armstrong tháng 7 năm 1969', 4, 0, 0),
(18, 'Áo polo đen', 'APOLO1', 666666, 666, 'polo4.png', 'Đen như than', 4, 0, 1),
(19, 'Áo thể thao xanh da trời', 'ADAI54543', 469960, 20000, 'thethao4.png', 'Áo thể dục thể thao', 6, 0, 0),
(20, 'Áo thun người nhện', 'ATHUN4422', 10000000, 1, 'aonhen.png', 'Duy nhất trên thế giới', 7, 1, 0),
(21, 'Áo thể thao đen', 'ATHAO7121', 279000, 44, 'thethao5.png', 'Phù hợp để vận động', 6, 0, 0),
(22, 'Áo thể thao xanh lam', 'ATHAO2234', 329000, 33, 'thethao3.png', 'Vận động thoải mái', 6, 0, 0),
(23, 'Áo tanktop Frosty Mountain', 'TANKTOP15', 499000, 35, 'Ao_Frosty_Mountain.png', 'phù hợp vận động', 13, 1, 0),
(24, 'Áo khoác xanh đen', 'AKHOA1551', 600000, 64, 'aokhoac1.png', 'Ấm', 14, 0, 0),
(25, 'Áo phao trắng', 'AKHOA1111', 599000, 17, 'aokhoac2.png', 'Ấm', 14, 1, 0),
(26, 'Áo phao xanh đen', 'AKHOA424', 599000, 14, 'aokhoac3.png', '', 14, 0, 0),
(27, 'Áo gió xanh xám', 'AKHOA1212', 449000, 332, 'aokhoac4.png', 'Hợp mệnh mộc', 14, 0, 1),
(28, 'Áo khoác xám', 'AKHOA8523', 350000, 97, 'aokhoac5.png', '', 14, 0, 0),
(29, 'Áo khoác đen thể thao', 'AKHOA4233', 38000, 33, 'aokhoac6.png', '', 14, 0, 0),
(30, 'Áo gió đen', 'AKHOA211', 199000, 11, 'aokhoac7.png', '', 14, 0, 0),
(31, 'Áo tanktop vàng', 'TANKTOP12', 299000, 47, 'aotank1.png', '', 13, 0, 0),
(32, 'Áo tanktop đỏ', 'TANKTOP921', 199000, 664, 'aotank2.png', '', 13, 0, 1),
(33, 'Áo tanktop cam', 'TANKTOP43', 269000, 45, 'aotank3.png', '', 13, 0, 0),
(34, 'Áo tanktop trắng', 'TANKTOP1', 222222, 15, 'aotank4.png', '', 13, 0, 0),
(35, 'Áo tanktop nâu', 'TANKTOP', 250000, 55, 'aotank5.png', '', 13, 0, 1),
(36, 'Áo tanktop đỏ gạch', 'TANKTOP4995', 499000, 499, 'aotank6.png', '', 13, 0, 0),
(37, 'Áo tanktop xanh da trời', 'TANKTOP1699', 400000, 60, 'aotank7.png', '', 13, 0, 0),
(38, 'Sơ mi đen', 'ASOMI1909', 150000, 599, 'somi2.png', '', 12, 0, 0),
(39, 'Sơ mi hai túi', 'ASOMI9955', 299000, 40, 'somi8.png', '', 12, 0, 1),
(40, 'Sweater Đen', 'SWE1910', 700000, 20, 'sweater6.png', '', 16, 0, 0),
(41, 'Sweater Xám', 'SWE1212', 650000, 12, 'sweater5.png', '', 16, 0, 1),
(42, 'Sweater Nâu', 'SWE17777', 690000, 3, 'sweater4.png', '', 16, 0, 0),
(43, 'Sweater Xanh', 'SWE1920', 650000, 30, 'sweater3.png', '', 16, 0, 0),
(44, 'Sweater mặt cười', 'SWE5050', 550000, 30, 'sweater2.png', '', 16, 0, 0),
(45, 'Sweater DKMV', 'SWE4680', 8000000, 16, 'sweater1.png', '', 16, 1, 0),
(46, 'Hoodie zip đen', 'HOD1212', 680000, 40, 'hoodie5.png', '', 15, 1, 0),
(47, 'Hoodie đen', 'HOD4049', 499000, 23, 'hoodie3.png', '', 15, 0, 0),
(48, 'Hoodie trắng', 'HOD3303', 300000, 69, 'hoodie4.png', '', 15, 0, 0),
(49, 'Sơ mi trắng', 'ASOMI6060', 90000, 55, 'somi15.png', '', 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(12, '1112', 6, 4),
(21, '4089', 6, 1),
(44, '4200', 20, 1),
(45, '9160', 21, 1),
(46, '9160', 9, 1),
(47, '9160', 16, 1),
(48, '9160', 14, 1),
(49, '9160', 8, 1),
(50, '8948', 16, 3),
(51, '8948', 18, 5),
(52, '8948', 6, 1),
(53, '8948', 20, 2),
(54, '2776', 20, 1),
(55, '2776', 25, 5),
(56, '1154', 23, 1),
(57, '600', 46, 1),
(58, '600', 41, 1),
(59, '600', 1, 1),
(60, '600', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` text NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES
(1, 'nguyenanhson', 'son123', 'c4ca4238a0b923820dcc509a6f75849b', 55142422, 'yatoro123@gmailc.com', '										300 kim ma						', 1),
(2, 'nguyenngocngan', 'ngannguyen', 'c4ca4238a0b923820dcc509a6f75849b', 224214423, 'ngocngan321@gmail.com', '					121 quoc tu giam			', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(4, 'Áo polo', 4),
(5, 'Áo dài tay', 5),
(6, 'Áo thể thao', 6),
(7, 'Áo thun', 1),
(12, 'Áo sơ mi', 2),
(13, 'Áo tanktop', 7),
(14, 'Áo khoác', 8),
(15, 'Áo hoodie', 9),
(16, 'Áo sweater', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_payment`) VALUES
(15, 1, '4089', 0, 'tienmat'),
(1242, 2, '1112', 0, 'tienmat'),
(4435, 1, '4200', 1, 'Tiền Mặt'),
(4436, 1, '9160', 1, 'Chuyển Khoảng'),
(4437, 1, '8948', 1, 'Chuyển Khoảng'),
(4438, 1, '2776', 1, 'Chuyển Khoảng'),
(4439, 2, '1154', 0, 'Tiền Mặt'),
(4440, 1, '600', 1, 'Chuyển Khoảng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) NOT NULL,
  `gopy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_khachhang`, `hovaten`, `gopy`) VALUES
(1, 'son123', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `note` varchar(250) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(1, 'Nguyen Anh Son', '55142422', '300 kim ma', '', 1),
(3, 'Nguyen Ngoc Ngan', '224214423', '121 quoc tu giam', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_ao`
--
ALTER TABLE `tbl_ao`
  ADD PRIMARY KEY (`id_ao`);

--
-- Indexes for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ao`
--
ALTER TABLE `tbl_ao`
  MODIFY `id_ao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4441;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
