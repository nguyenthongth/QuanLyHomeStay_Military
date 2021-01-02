-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2021 lúc 05:43 AM
-- Phiên bản máy phục vụ: 8.0.22
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` int NOT NULL,
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `administrator`
--

INSERT INTO `administrator` (`username`, `pass`, `email`, `sdt`, `ten`) VALUES
('anhquantr123', 'anhquantr123', 'anhquan.lien123@gmail.com', 868657618, ' Nguyễn Văn Quân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_phong`
--

CREATE TABLE `chi_tiet_dat_phong` (
  `ma_phong` varchar(50) NOT NULL,
  `ma_dat_phong` varchar(50) NOT NULL,
  `ngaydat` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_phong`
--

CREATE TABLE `dat_phong` (
  `ma_dat_phong` varchar(50) NOT NULL,
  `thoi_gian_vao` date NOT NULL,
  `thoi_gian_ra` date NOT NULL,
  `loai_phong` text NOT NULL,
  `so_luong_phong` int NOT NULL,
  `nguoi_lon` int NOT NULL,
  `tre_em` int DEFAULT NULL,
  `ho_ten` text NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sdt` int NOT NULL,
  `ghichu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu`
--

CREATE TABLE `dich_vu` (
  `ma_dich_vu` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `ma_hinh_anh` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `ma_km` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `ho_ten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(12) DEFAULT NULL,
  `noi_dung` text,
  `id_lien_he` varchar(50) NOT NULL,
  `ngay` varchar(10) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`ho_ten`, `email`, `sdt`, `noi_dung`, `id_lien_he`, `ngay`, `status`) VALUES
('Nguyễn Văn Quân ', 'anhquan.lien123@gmail.com', '0868657618', 'gdffdfgdrger', '1609503095', '01/01/2021', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `ma_phong` varchar(50) NOT NULL,
  `ten_phong` text NOT NULL,
  `noi_dung` text NOT NULL,
  `gia_phong` int NOT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`ma_phong`, `ten_phong`, `noi_dung`, `gia_phong`, `ma_hinh_anh`, `ma_thuoc_tinh`) VALUES
('room01', 'Phòng loại 1', 'Loại phòng hạng sang và cao cấp nhất của chỗ chúng tôi. Phòng được thiết kế sang trọng lịch sự hiện đại và đầy đủ tiện nghi', 499000, NULL, NULL),
('room02', 'Phòng loại 2', ' Chất lượng đi đôi với giá tiền dịch vụ tiện ích hoàn hảo', 399000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `ma_thuoc_tinh` varchar(50) NOT NULL,
  `ten_thuoc_tinh` text NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`,`email`);

--
-- Chỉ mục cho bảng `chi_tiet_dat_phong`
--
ALTER TABLE `chi_tiet_dat_phong`
  ADD KEY `ma_phong` (`ma_phong`,`ma_dat_phong`),
  ADD KEY `fk_ct_dp` (`ma_dat_phong`);

--
-- Chỉ mục cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`ma_dat_phong`),
  ADD KEY `ma_dat_phong` (`ma_dat_phong`);

--
-- Chỉ mục cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`ma_dich_vu`),
  ADD KEY `ma_dich_vu` (`ma_dich_vu`,`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `kf_dv_ha` (`ma_hinh_anh`),
  ADD KEY `kf_dv_tt` (`ma_thuoc_tinh`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`ma_hinh_anh`),
  ADD KEY `ma_hinh_anh` (`ma_hinh_anh`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`ma_km`),
  ADD KEY `ma_km` (`ma_km`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `fk_km_ha` (`ma_hinh_anh`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ma_phong`),
  ADD KEY `ma_phong` (`ma_phong`,`ma_hinh_anh`,`ma_thuoc_tinh`);

--
-- Chỉ mục cho bảng `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`ma_thuoc_tinh`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_dat_phong`
--
ALTER TABLE `chi_tiet_dat_phong`
  ADD CONSTRAINT `fk_ct_dp` FOREIGN KEY (`ma_dat_phong`) REFERENCES `dat_phong` (`ma_dat_phong`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_ct_p` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `kf_dv_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_dv_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `fk_km_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_km_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
