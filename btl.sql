-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:35 AM
-- Server version: 8.0.22
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `pass`, `email`, `sdt`, `ten`) VALUES
('anhquantr123', 'anhquantr123', 'anhquan.lien123@gmail.com', '868657618', ' Nguyễn Văn Quân');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_dat_phong`
--

CREATE TABLE `chi_tiet_dat_phong` (
  `ma_phong` varchar(50) NOT NULL,
  `ma_dat_phong` varchar(50) NOT NULL,
  `ngaydat` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dat_phong`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE `dich_vu` (
  `ma_dich_vu` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `ma_hinh_anh` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `image_anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_hinh_anh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`ma_hinh_anh`, `tieu_de`, `image_anh`, `id_hinh_anh`) VALUES
('hinh1', 'anh1', 'bida02.jpg', '1610056927');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `ma_km` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `ho_ten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sdt` varchar(12) DEFAULT NULL,
  `noi_dung` text,
  `id_lien_he` varchar(50) NOT NULL,
  `ngay` varchar(10) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`ho_ten`, `email`, `sdt`, `noi_dung`, `id_lien_he`, `ngay`, `status`) VALUES
('Nguyễn Văn Quân ', 'anhquan.lien123@gmail.com', '0868657618', 'gdffdfgdrger', '1609503095', '01/01/2021', 0),
('Nguyễn Văn Quân ', 'anhquan.lien123@gmail.com', '0868657618', 'Chất lượng như cc làm ăn bố láo', '1609637679', '03/01/2021', 0),
('anh quan ', 'anhquan.lien123@gmail', '0868657618', 'dm như xịt', '1609839901', '05/01/2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `ma_phong` varchar(50) NOT NULL,
  `ten_phong` text NOT NULL,
  `noi_dung` text NOT NULL,
  `gia_phong` int NOT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`ma_phong`, `ten_phong`, `noi_dung`, `gia_phong`, `ma_hinh_anh`, `ma_thuoc_tinh`) VALUES
('room01', 'Phòng loại 1', 'Loại phòng hạng sang và cao cấp nhất của chỗ chúng tôi. Phòng được thiết kế sang trọng lịch sự hiện đại và đầy đủ tiện nghi', 499000, NULL, NULL),
('room02', 'Phòng loại 2', ' Chất lượng đi đôi với giá tiền dịch vụ tiện ích hoàn hảo', 399000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `ma_thuoc_tinh` varchar(50) NOT NULL,
  `ten_thuoc_tinh` text NOT NULL,
  `noi_dung` text NOT NULL,
  `id_thuoc_tinh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `thuoc_tinh`
--

INSERT INTO `thuoc_tinh` (`ma_thuoc_tinh`, `ten_thuoc_tinh`, `noi_dung`, `id_thuoc_tinh`) VALUES
('dịchvu01', 'Địa điểm Sảnh', 'Sảnh tầng 2 ạnh quân tr123\r\n', '1609868725');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`,`email`);

--
-- Indexes for table `chi_tiet_dat_phong`
--
ALTER TABLE `chi_tiet_dat_phong`
  ADD KEY `ma_phong` (`ma_phong`,`ma_dat_phong`),
  ADD KEY `fk_ct_dp` (`ma_dat_phong`);

--
-- Indexes for table `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`ma_dat_phong`),
  ADD KEY `ma_dat_phong` (`ma_dat_phong`);

--
-- Indexes for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`ma_dich_vu`),
  ADD KEY `ma_dich_vu` (`ma_dich_vu`,`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `kf_dv_tt` (`ma_thuoc_tinh`),
  ADD KEY `kf_dv_ha` (`ma_hinh_anh`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id_hinh_anh`),
  ADD KEY `ma_hinh_anh` (`ma_hinh_anh`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`ma_km`),
  ADD KEY `ma_km` (`ma_km`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `kf_km_ha` (`ma_hinh_anh`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ma_phong`),
  ADD KEY `ma_phong` (`ma_phong`,`ma_hinh_anh`,`ma_thuoc_tinh`),
  ADD KEY `kf_p_tt` (`ma_thuoc_tinh`),
  ADD KEY `kf_p_ha` (`ma_hinh_anh`);

--
-- Indexes for table `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`id_thuoc_tinh`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_dat_phong`
--
ALTER TABLE `chi_tiet_dat_phong`
  ADD CONSTRAINT `fk_ct_dp` FOREIGN KEY (`ma_dat_phong`) REFERENCES `dat_phong` (`ma_dat_phong`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_ct_p` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `kf_dv_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_dv_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `kf_km_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_km_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `kf_p_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `kf_p_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
