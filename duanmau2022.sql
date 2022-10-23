-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 08:21 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2022`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idngd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `ngaybl` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `idngd`, `idsp`, `ngaybl`) VALUES
(1, 'haha', 2, 1003, '2022-10-22 12:55:11'),
(2, '2312312', 2, 1003, '2022-10-22 13:11:58'),
(3, '23123', 2, 1004, '2022-10-22 13:12:08'),
(4, '123', 7, 1003, '2022-10-23 12:33:43'),
(5, '123', 2, 1003, '2022-10-23 13:03:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `idctgh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `idgh` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`idctgh`, `idsp`, `idgh`, `soluong`) VALUES
(1, 1003, 1, 5),
(2, 1004, 1, 6),
(3, 1005, 1, 2),
(11, 1003, 1, 1),
(12, 1003, 1, 1),
(13, 1003, 1, 1),
(14, 1003, 1, 1),
(15, 1003, 1, 1),
(16, 1003, 1, 1),
(18, 1006, 4, 1),
(19, 1005, 4, 1),
(23, 1003, 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `tendanhmuc`) VALUES
(1, 'Thời trang nam'),
(2, 'Thời trang nữ'),
(4, 'kamehameha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgh` int(11) NOT NULL,
  `idngd` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgh`, `idngd`, `tinhtrang`) VALUES
(1, 2, 1),
(3, 2, 1),
(4, 2, 1),
(5, 2, 0),
(7, 7, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double NOT NULL DEFAULT 0,
  `hinhanh` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `idloaisp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `gia`, `hinhanh`, `mota`, `luotxem`, `idloaisp`) VALUES
(1000, '342342rewrwe', 30, NULL, NULL, 0, 1),
(1001, '4353ertertge', 298.4, NULL, NULL, 0, 2),
(1003, 'Quần áo vét', 500, 'InShot_20220930_121606407.png', 'Quần áo vét cho phái mạnh', 0, 1),
(1004, 'Áo dài Việt Name', 499, 'InShot_20220930_121606407.png', 'Áo dài truyền thống Việt Nam cho phụ nữ', 0, 2),
(1005, 'Camera đỏ', 200, '1047.jpg', 'ằgearfwegeafawÈWEFASDA', 0, 4),
(1006, 'Camera đen', 200, '1050.jpg', 'ưetfweffbegsdfasdfasf', 0, 4),
(1007, 'Camera đen', 200, '1050.jpg', '1rqweqweqweqw', 0, 4),
(1008, 'Camera đen', 500, '1050.jpg', 'rqwrqwrqwdrqwedqwedqwe', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tennd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `ngaytao` date NOT NULL DEFAULT current_timestamp(),
  `tenao` varchar(255) DEFAULT NULL,
  `vaitro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tennd`, `email`, `matkhau`, `avatar`, `ngaytao`, `tenao`, `vaitro`) VALUES
(1, 'admin', 'vietncdph28483@fpt.edu.vn', '12345678', NULL, '2022-09-28', 'vietncdph28483', 1),
(2, 'viet', 'viet@gmail.com', '12345678', NULL, '2022-10-20', NULL, 2),
(6, 'abc', 'qweqs@afsfa.com', '123213123', NULL, '2022-10-20', NULL, 2),
(7, 'test', 'test123@gmail.com', '12345678', NULL, '2022-10-23', NULL, 2),
(9, 'test3', 'test12345@gmail.com', '12345678', NULL, '2022-10-23', NULL, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `FK_bl_sp` (`idsp`),
  ADD KEY `FK_bl_ngd` (`idngd`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`idctgh`),
  ADD KEY `FL_ct_gh` (`idgh`),
  ADD KEY `FL_ct_sp` (`idsp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgh`),
  ADD KEY `FK_gh_tk` (`idngd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idloaisp` (`idloaisp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `idctgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_bl_ngd` FOREIGN KEY (`idngd`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `FK_bl_sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`);

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `FL_ct_gh` FOREIGN KEY (`idgh`) REFERENCES `giohang` (`idgh`),
  ADD CONSTRAINT `FL_ct_sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_gh_tk` FOREIGN KEY (`idngd`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idloaisp`) REFERENCES `danhmuc` (`iddm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
