-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2019 lúc 04:05 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanbanhphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `TinhTrang` int(11) NOT NULL DEFAULT '0',
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`) VALUES
(1, 'Bread'),
(2, 'Choux'),
(3, 'Cookie'),
(4, 'Cupcake'),
(5, 'Donut');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `GIaSP` double NOT NULL,
  `ChiTietSP` text COLLATE utf8_vietnamese_ci,
  `anh` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GIaSP`, `ChiTietSP`, `anh`, `MaLoai`) VALUES
(1, 'Bánh mì nướng', 20000, 'Bánh mì nướng thơm ngon, giòn, với nguyên liêu chính làm từ bột mì, sữa và trứng', 'bread_01.jpg', 1),
(2, 'Bánh mì rùa nhân đậu đỏ', 30000, 'Bánh mì nướng nhân đậu đỏ  thơm ngon được tạo hình là một chú rùa con, với nguyên liêu chính làm từ bột mì, sữa, đậu đỏ, kem và trứng', 'bread_02.jpg', 1),
(3, 'Bánh mì gấu nhân socola', 40000, 'Bánh mì nướng nhân socola thơm ngon hình gấu với dánh vẻ đáng yêu. Thành phần chính là bột mì, sữa, socola, kem và trứng.', 'bread_03.jpg', 1),
(4, 'Bánh mì nướng nhân kem bơ', 25000, 'Bánh mì nướng nhân kem bơ thơm ngon. Thành phần chính là bột mì, kem, sữa, bơ, đường và trứng.', 'bread_04.jpg', 1),
(5, 'Bánh sừng kem', 25000, 'Bánh mì sừng nướng kem thơm ngon. Thành phần chính là bột mì, kem, sữa, đường và trứng.', 'bread_05.jpg', 1),
(6, 'Bánh kem socola', 25000, 'Bánh mì nướng kem socola thơm ngon. Thành phần chính là bột mì, kem, sữa, socola, đường và trứng.', 'bread_06.jpg', 1),
(7, 'Bánh vòng xoáy matcha', 20000, 'Bánh mì nướng nhân matcha thơm ngon. Thành phần chính là bột mì, kem, sữa, matcha, đường và trứng.', 'bread_07.jpg', 1),
(8, 'Bánh mì ống bơ', 20000, 'Bánh mì nướng ống bơ kem thơm ngon. Thành phần chính là bột mì, kem, sữa, bơ, đường và trứng.', 'bread_08.jpg', 1),
(9, 'Bánh mì kem trái tim', 20000, 'Bánh mì nướng kem thơm ngon hình trái tim. Thành phần chính là bột mì, kem, sữa, bơ, đường và trứng.', 'bread_09.jpg', 1),
(10, 'Bánh mì kem', 20000, 'Bánh mì nướng kem thơm ngon. Thành phần chính là bột mì, kem, sữa, bơ, đường và trứng.', 'bread_10.jpg', 1),
(11, 'Bánh mì mông corgi \r\n', 20000, 'Bánh mì nướng kem bông thơm ngon. Thành phần chính là bột mì, kem, sữa, bơ, đường và trứng.', 'bread_11.jpg', 1),
(12, 'Bánh su kem bơ tuyết', 20000, 'Bánh su kem bơ ngon ngọt. Thành phần bột mì, kem, bơ, đường, sữa, và trứng.', 'choux_01.jpg', 2),
(13, 'Bánh su kem đồi tuyết', 25000, 'Bánh su kem sữa tươi ngon ngọt. Thành phần bột mì, kem, đường, sữa tươi, và trứng.', 'choux_02.jpg', 2),
(14, 'Bánh su kem bơ', 20000, 'Bánh su kem bơ ngon ngọt. Thành phần bột mì, kem, bơ, đường, sữa, và trứng.', 'choux_03.jpg', 2),
(15, 'Bánh su kem dâu tuyết', 25000, 'Bánh su kem dâu ngon ngọt. Thành phần bột mì, kem, đường, sữa, dâu tây, và trứng.', 'choux_04.jpg', 2),
(16, 'Bánh su kem matcha', 25000, 'Bánh su kem matcha ngon ngọt. Thành phần bột mì, kem, đường, sữa, bơ, matcha và trứng.', 'choux_05.jpg', 2),
(17, 'Bánh su kem thiên nga', 30000, 'Bánh su kem hình thiên nga ngon ngọt. Thành phần bột mì, kem, đường, sữa, bơ và trứng.', 'choux_06.jpg', 2),
(18, 'Bánh su kem gỗ bơ', 25000, 'Bánh su kem bơ dài ngon ngọt. Thành phần bột mì, kem, bơ, đường, sữa, và trứng.', 'choux_07.jpg', 2),
(19, 'Bánh cookie', 20000, 'Bánh cookie giáng sinh thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_01.jpg', 3),
(20, 'Bánh quy tuần lộc', 25000, 'Bánh cookie giáng sinh tuần lộc thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_02.jpg', 3),
(21, 'Bánh quy bông tuyết', 25000, 'Bánh cookie giáng sinh bông tuyết thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_03.jpg', 3),
(22, 'Bánh quy giáng sinh', 20000, 'Bánh cookie giáng sinh thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_04.jpg', 3),
(23, 'Bánh quy sao', 20000, 'Bánh cookie ngôi sao thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_05.jpg', 3),
(24, 'Bánh quy trái tim', 25000, 'Bánh cookie trái tim thơm ngon. Thành phần gồm bột mì, sữa, kem, vani, đường và trứng.', 'cookie_06.jpg', 3),
(25, 'Bánh quy người tuyết', 20000, 'Bánh cookie người tuyết giáng sinh thơm ngon. Thành phần gồm bột mì, sữa, kem, đường và trứng.', 'cookie_07.jpg', 3),
(26, 'Bánh quy socola', 25000, 'Bánh cookie trái tim socola thơm ngon. Thành phần gồm bột mì, sữa, kem, socola, đường và trứng.', 'cookie_08.jpg', 3),
(27, 'Bánh quy kẹo 7 màu', 20000, 'Bánh cookie kẹo socola thơm ngon. Thành phần gồm bột mì, sữa, kem, kẹo socola, đường và trứng.', 'cookie_09.jpg', 3),
(28, 'Bánh quy bơ', 25000, 'Bánh cookie bơ thơm ngon. Thành phần gồm bột mì, sữa, kem, bơ, đường và trứng.', 'cookie_10.jpg', 3),
(29, 'Bánh quy vui vẻ', 20000, 'Bánh cookie mặt cười thơm ngon. Thành phần gồm bột mì, sữa, kem, bơ, đường và trứng.', 'cookie_11.jpg', 3),
(30, 'Bánh bông lan tuyết trắng', 30000, 'Bánh bông lan kem tuyết trắng thơm ngon. Thành phần gồm bột mì, kem, sữa, đường và trứng.', 'cupcake_01.jpg', 4),
(31, 'Bánh bông lan socola kem dâu', 25000, 'Bánh bông lan socola kem dâu thơm ngon. Thành phần gồm bột mì, kem, sữa, socola, vani, đường và trứng.', 'cupcake_02.jpg', 4),
(32, 'Bánh bông lan kem dâu tây', 30000, 'Bánh bông lan kem dâu tây thơm ngon. Thành phần gồm bột mì, kem, sữa, dâu tây, vani, đường và trứng.', 'cupcake_03.jpg', 4),
(33, 'Bánh bông lan gấu trúc', 25000, 'Bánh bông lan gấu trúc thơm ngon. Thành phần gồm bột mì, kem, sữa, socola, đường và trứng.', 'cupcake_04.jpg', 4),
(34, 'Bánh bông lan kem bơ dậu phộng', 30000, 'Bánh bông lan kem dậu phộng thơm ngon. Thành phần gồm bột mì, kem, sữa, bơ, đậu phộng, đường và trứng.', 'cupcake_05.jpg', 4),
(35, 'Bánh bông lan dâu tây kem tươi ', 35000, 'Bánh bông lan dâu tây kem tươi thơm ngon. Thành phần gồm bột mì, kem tươi, sữa, dâu tây, đường và trứng.', 'cupcake_06.jpg', 4),
(36, 'Bánh bông lan cây thông noel', 30000, 'Bánh bông lan cây thông noel thơm ngon. Thành phần gồm bột mì, kem, matcha, sữa, đường và trứng.', 'cupcake_07.jpg', 4),
(37, 'Bánh bông lan kem trái tim', 35000, 'Bánh bông lan kem trái tim thơm ngon. Thành phần gồm bột mì, kem, vani, sữa, đường và trứng.', 'cupcake_08.jpg', 4),
(38, 'Bánh bông lan carot', 25000, 'Bánh bông lan carot thơm ngon. Thành phần gồm bột mì, kem, vani, sữa, đường và trứng.', 'cupcake_09.jpg', 4),
(39, 'Bánh bông lan matcha kem dâu', 35000, 'Bánh bông lan matcha kem dâu thơm ngon. Thành phần gồm bột mì, kem, matcha, socola, vani, sữa, đường và trứng.', 'cupcake_10.jpg', 4),
(40, 'Bánh bông lan thỏ trắng', 35000, 'Bánh bông lan thỏ trắng thơm ngon. Thành phần gồm bột mì, kem, socola, vani, sữa, đường và trứng.', 'cupcake_11.jpg', 4),
(41, 'Bánh bông lan gà con', 25000, 'Bánh bông lan gà con thơm ngon. Thành phần gồm bột mì, kem, socola, vani, sữa, đường và trứng.', 'cupcake_12.jpg', 4),
(42, 'Bánh vòng thập cẩm', 25000, 'Bánh vòng thập cẩm thơm ngon. Thành phần gồm bột mì, sữa, đường, kem và trứng.', 'donut_01.jpg', 5),
(43, 'Bánh vòng kem', 25000, 'Bánh vòng kem thơm ngon. Thành phần gồm bột mì, sữa, đường, kem và trứng.', 'donut_02.jpg', 5),
(44, 'Bánh vòng kem dâu', 30000, 'Bánh vòng kem dâu thơm ngon. Thành phần gồm bột mì, sữa, đường, kem, dâu tây và trứng.', 'donut_03.jpg', 5),
(45, 'Bánh vòng rán', 25000, 'Bánh vòng rán thơm ngon. Thành phần gồm bột mì, sữa, đường, kem, và trứng.', 'donut_04.jpg', 5),
(46, 'Bánh vòng chiên kem ', 30000, 'Bánh vòng chiên kem thơm ngon. Thành phần gồm bột mì, sữa, đường, kem, và trứng.', 'donut_05.jpg', 5),
(47, 'Bánh vòng kem matcha', 30000, 'Bánh vòng kem matcha thơm ngon. Thành phần gồm bột mì, sữa, đường, matcha, kem, và trứng.', 'donut_06.jpg', 5),
(48, 'Bánh vòng kem socola', 30000, 'Bánh vòng kem socola thơm ngon. Thành phần gồm bột mì, sữa, đường, socola, kem, và trứng.', 'donut_07.jpg', 5),
(49, 'Bánh vòng dừa', 35000, 'Bánh vòng dừa thơm ngon. Thành phần gồm bột mì, sữa, đường, dừa, kem, và trứng.', 'donut_08.jpg', 5),
(50, 'Bánh vòng nhiều màu', 20000, 'Bánh vòng nhiều màu thơm ngon. Thành phần gồm bột mì, sữa, đường, kẹo, kem, và trứng.', 'donut_09.jpg', 5),
(51, 'Bánh vòng xanh biển', 30000, 'Bánh vòng xanh biển thơm ngon. Thành phần gồm bột mì, sữa, đường, kẹo, kem, và trứng.', 'donut_10.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` char(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MatKhau` char(10) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `MatKhau`) VALUES
('Admin', '123'),
('dasksai', 'manakilosi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoannguoidung`
--

CREATE TABLE `taikhoannguoidung` (
  `TenDangNhap` char(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinkh`
--

CREATE TABLE `thongtinkh` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` char(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenDangNhap` char(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk_MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- Chỉ mục cho bảng `taikhoannguoidung`
--
ALTER TABLE `taikhoannguoidung`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- Chỉ mục cho bảng `thongtinkh`
--
ALTER TABLE `thongtinkh`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `fk_tenDangNhap` (`TenDangNhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `thongtinkh`
--
ALTER TABLE `thongtinkh`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `pfk_MaHD` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `pfk_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_MaKH` FOREIGN KEY (`MaKH`) REFERENCES `thongtinkh` (`MaKH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_MaLoai` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);

--
-- Các ràng buộc cho bảng `thongtinkh`
--
ALTER TABLE `thongtinkh`
  ADD CONSTRAINT `fk_tenDangNhap` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoannguoidung` (`TenDangNhap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
