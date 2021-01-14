-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 04:48 PM
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
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `pass`, `email`, `sdt`, `ten`) VALUES
('anhquantr123', 'anhquantr123', 'anhquan.lien123@gmail.com', '0868657618', ' Nguyễn Văn Quân'),
('thong', 'thong', 'nguyenthongth@gmail.com', '0123456789', 'Nguyễn Minh Thông');

-- --------------------------------------------------------

--
-- Table structure for table `dat_phong`
--

CREATE TABLE `dat_phong` (
  `ma_dat_phong` varchar(50) NOT NULL,
  `thoi_gian_vao` varchar(10) NOT NULL,
  `thoi_gian_ra` varchar(10) NOT NULL,
  `ma_phong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `so_luong_phong` varchar(10) NOT NULL,
  `nguoi_lon` varchar(10) NOT NULL,
  `tre_em` varchar(10) DEFAULT NULL,
  `ho_ten` text NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sdt` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` text,
  `thoi_gian_dat` varchar(10) NOT NULL,
  `trang_thai` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dat_phong`
--

INSERT INTO `dat_phong` (`ma_dat_phong`, `thoi_gian_vao`, `thoi_gian_ra`, `ma_phong`, `so_luong_phong`, `nguoi_lon`, `tre_em`, `ho_ten`, `email`, `sdt`, `ghichu`, `thoi_gian_dat`, `trang_thai`) VALUES
('130121114102', '14/01/2021', '16/01/2021', 'room02', '1', '1', '1', 'anh quan ', 'No Email', '1234546778', 'No ghi chú', '13/01/2021', 1),
('130121115806', '19/01/2021', '20/01/2021', 'room02', '1', '4', '0', ' Thoong Th ', 'No Email', '1235456456', 'No ghi chú', '13/01/2021', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `ma_hinh_anh` varchar(50) NOT NULL,
  `tieu_de` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `image_anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_hinh_anh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`ma_hinh_anh`, `tieu_de`, `image_anh`, `id_hinh_anh`) VALUES
('hinh1', 'anh1', 'bida02.jpg', '1610056927'),
('khuyenmai3', 'No_titel', 'Big-Room5.jpg', '1610467400'),
('khuyenmai3', 'No_titel', 'Big-Room5.jpg', '1610474057');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`ma_km`, `tieu_de`, `noi_dung`, `ma_thuoc_tinh`, `ma_hinh_anh`) VALUES
('khuyenmai1', 'Giảm giá 50%', 'Giảm trực tiếp 50% cho ngày hè nóng bỏng', 'dịchvu01', 'hinh1'),
('khuyenmai2', 'Đi 3 tặng 1 ', 'giá cực sốc', 'dịchvu01', 'hinh1'),
('khuyenmai3', 'Trải nghiệm khó quên ', 'Đừng bỏ lỡ cơ hội cuối này!', 'khuyenmai3', 'khuyenmai3');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `ho_ten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(12) DEFAULT NULL,
  `noi_dung` text,
  `id_lien_he` varchar(50) NOT NULL,
  `ngay` varchar(10) NOT NULL,
  `trang_thai` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`ho_ten`, `email`, `sdt`, `noi_dung`, `id_lien_he`, `ngay`, `trang_thai`) VALUES
('Nguyễn Văn Quân', 'anhquan.lien123@gmail.com', '123456789', 'hello mọi người', '193545', '14/01/2021', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
  `ten_thuoc_tinh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `noi_dung` text NOT NULL,
  `id_thuoc_tinh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thuoc_tinh`
--

INSERT INTO `thuoc_tinh` (`ma_thuoc_tinh`, `ten_thuoc_tinh`, `noi_dung`, `id_thuoc_tinh`) VALUES
('dịchvu01', 'Địa điểm Sảnh', 'Sảnh tầng 2 ạnh quân tr123\r\n', '1609868725'),
('khuyenmai3', '', 'vui chơi giải trí thỏa thích ', '1610466695'),
('khuyenmai3', '', 'Không giới hạn độ tuổi', '1610466712');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`,`email`);

--
-- Indexes for table `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`ma_dat_phong`),
  ADD KEY `ma_dat_phong` (`ma_dat_phong`),
  ADD KEY `ma_phong` (`ma_phong`);

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
-- Constraints for table `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD CONSTRAINT `kf_dp_p` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
