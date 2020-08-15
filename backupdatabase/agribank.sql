-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 15, 2020 lúc 08:43 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `agribank`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `magiaodich` int(11) NOT NULL,
  `tk_goc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_nhan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_tien` int(50) NOT NULL,
  `ngay_gio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodu_cuoi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice`
--

INSERT INTO `invoice` (`magiaodich`, `tk_goc`, `tk_nhan`, `so_tien`, `ngay_gio`, `noi_dung`, `act`, `sodu_cuoi`) VALUES
(1, '369918375', '', 500000, '2020/08/14 15:44:58', '', 'RT', '14500000'),
(2, '369123452', '', 1000000, '2020/08/14 16:07:24', '', 'RT', '49000000'),
(3, '369123452', '', 200000, '2020/08/14 16:23:14', '', 'RT', '48800000'),
(4, '369123452', '369918375', 1000000, '2020/08/14 21:23:49;', 'Đã chuyển 10tr', 'CK', '3500000'),
(5, '369123452', '369918375', 800000, '2020/08/14 21:25:36;', 'Đã chuyển 10tr', 'CK', '2700000'),
(6, '369123452', '369918375', 600000, '2020/08/14 21:27:03;', '', 'CK', '2100000'),
(7, '369123452', '369918375', 12000000, '2020/08/14 21:27:27;', '', 'CK', '-9900000'),
(8, '369123452', '369918375', 3200000, '2020/08/14 21:34:37;', 'Đã chuyển 10tr', 'CK', '60000000'),
(9, '369918375', '', 200000, '2020/08/15 06:20:44', '', 'RT', '8000000'),
(10, '369918375', '', 100000, '2020/08/15 06:22:39', '', 'RT', '7900000'),
(11, '369918375', '', 900000, '2020/08/15 06:32:12', '', 'RT', '7000000'),
(12, '369918375', '369123452', 1000000, '2020/08/15 11:34:00;', '', 'CK', '6000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `stk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(50) NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodu` int(50) NOT NULL,
  `ngaysinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaitk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`stk`, `password`, `ten`, `sdt`, `diachi`, `sodu`, `ngaysinh`, `loaitk`) VALUES
('312456210', '789', 'Lê Văn Quân', 1345542248, 'TP.Hồ Chí Minh', 20000, '01/02/1995', 'Hạng vàng'),
('321321321', '456', 'Peter Parker', 94512431, 'Lon Don England', 100000000, '02/03/1990', 'Hạng bạch kim'),
('333124575', '852', 'Nguyễn Văn An', 954123462, 'Đà Nẵng', 50000000, '12/12/1980', 'Hạng bạch kim'),
('369123452', '789', 'Trần Chí Tài', 1245715441, 'Vinh', 61000000, '05/05/1990', 'Thường'),
('369918375', '456', 'Trần Văn Tài', 123456789, 'Hà Nội', 6000000, '10/10/1990', 'Vip'),
('389411424', '123', 'Lê Thị Lan', 644514212, 'Hà Nội', 6000000, '08/08/1990', 'Hạng chuẩn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`magiaodich`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`stk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `magiaodich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
