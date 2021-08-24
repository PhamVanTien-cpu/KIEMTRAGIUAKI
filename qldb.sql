-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2021 lúc 06:47 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `password`) VALUES
(0, 'pham van tien', '15678'),
(1, 'ff', '2h1g'),
(3, 'dam duc viet', '11111'),
(4, 'manh', '123123'),
(20, 'tien', '123123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `can_bo`
--

CREATE TABLE `can_bo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(12) DEFAULT NULL,
  `id_don_vi` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `can_bo`
--

INSERT INTO `can_bo` (`id`, `name`, `email`, `phone_number`, `id_don_vi`, `image`) VALUES
(1, 'Nguyễn Quỳnh Diệp', 'diepnq@tlu.edu.vn', 999887766, 11, 'images/Screenshot 2021-08-23 163754.jpg'),
(2, 'Nguyễn Ngọc Doanh', 'doanhnn@tlu.edu.vn', 999887765, 11, 'images/Screenshot 2021-08-23 175117.jpg'),
(3, 'Phạm Thanh Bình', 'binhpt@tlu.edu.vn', 999887888, 12, 'images/Screenshot 2021-08-23 183536.jpg'),
(5, 'Nguyễn Hữu Thọ', 'nhtho@tlu.edu.vn', 99999999, 11, 'images/Screenshot 2021-08-23 184029.jpg'),
(6, 'Trần Mạnh Tuấn', 'tuan_tm@tlu.edu.vn', 7777777, 12, 'images/Screenshot 2021-08-23 184224.jpg'),
(7, 'Nguyễn Mạnh Hiển', 'hiennm@tlu.edu.vn', 99988443, 12, 'images/Screenshot 2021-08-23 184425.jpg'),
(8, 'Nguyễn Văn Nam', 'namnv@tlu.edu.vn', 9997788, 12, 'images/Screenshot 2021-08-23 185301.jpg'),
(9, 'Trần Thị Ngân ', 'ngantt@tlu.edu.vn', 1456678, 11, 'images/Screenshot 2021-08-23 184643.jpg'),
(10, 'Lê Nguyễn Tuấn Thành ', '\r\nthanhlnt@tlu.edu.vn', 2222222, 11, 'images/Screenshot 2021-08-23 184807.jpg'),
(12, 'Trần Thị Minh Hoàn', 'hoantm@tlu.edu.vn', 22233, 12, 'images/Screenshot 2021-08-24 224632.jpg'),
(13, 'Nguyễn Thị Phương Thảo ', 'thaont@tlu.edu.vn', 333333333, 11, 'images/Screenshot 2021-08-23 185008.jpg'),
(14, 'truowng xuan nam', 'nam@e.tlu.edu ', 123445555, 12, 'images/Screenshot 2021-08-23 185144.jpg '),
(18, 'truowng xuan nam', 'nam@e.tlu.edu ', 123445555, NULL, 'images/Screenshot 2021-08-23 185144.jpg ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi`
--

CREATE TABLE `don_vi` (
  `id_don_vi` int(11) NOT NULL,
  `name_ unit` varchar(255) DEFAULT NULL,
  `email_ unit` varchar(255) NOT NULL,
  `phone_number_unit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_vi`
--

INSERT INTO `don_vi` (`id_don_vi`, `name_ unit`, `email_ unit`, `phone_number_unit`) VALUES
(11, 'Bộ môn Tin học', 'tinhoctl.tlu.edu.vn', 121220202),
(12, 'BM KT Máy tính ', 'khoamay@e.tlu.edu.vn', 22334455),
(13, 'BM Công nghệ phần mềm', 'cnpm123@e.tlu.edu.vn', 999888777);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_vi` (`id_don_vi`);

--
-- Chỉ mục cho bảng `don_vi`
--
ALTER TABLE `don_vi`
  ADD PRIMARY KEY (`id_don_vi`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  ADD CONSTRAINT `can_bo_ibfk_1` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id_don_vi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
