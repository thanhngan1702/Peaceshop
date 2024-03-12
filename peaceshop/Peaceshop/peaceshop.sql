-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 03:54 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peaceshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_account` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `image_account` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_account` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass_account` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_account` tinytext NOT NULL,
  `address_account` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `balance_account` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_account`, `fullname`, `image_account`, `email_account`, `pass_account`, `phone_account`, `address_account`, `balance_account`) VALUES
('binh', 'Lê Thị Thanh Bình', 'Shop1-604x270.jpg', 'thanhbinh24602@gmail.com', 'binh', '0364693924', 'Quảng Bình', '123'),
('ngan', 'Lê Thị Thanh Ngân', 'person_4.jpg', 'ngan@gmail.com', 'ngan', '', '', ''),
('Ngoc', 'Lê Thị Mỹ Ngọc', '', 'ngoc@gmail.com', 'ngoc', '', '', ''),
('Thúy', 'Lê Thị Thúy', '', 'thuy@gmail.com', 'thuy', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass_admin` tinytext NOT NULL,
  `img_admin` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi_admin` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email_admin` tinytext NOT NULL,
  `phone` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_admin`, `pass_admin`, `img_admin`, `name_admin`, `diachi_admin`, `email_admin`, `phone`) VALUES
('binh', 'binh', 'shop-hoa-tuoi-hai-phong-hoa-baby.jpg', 'Lê Thị Thanh Ngân', 'Quảng Bình ', 'thanhbinh24602@gmai.com', '0364693924'),
('hi', 'hi', 'WIN_20210722_14_15_41_Pro.jpg', 'Lê Thị Thanh Bình', 'Quảng Bình', 'meouthihi@gmail.om', '0364693924');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `image_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id_banner`, `image_banner`, `trang`, `noidung`, `trangthai`) VALUES
(1, 'banner_7.jpeg', 'trangchu', '', 1),
(2, 'banner_8.jpeg', 'trangchu', '', 1),
(3, 'banner_5.jpeg', 'trangchu', '', 1),
(4, 'banner_9.png', 'trangchu', '', 1),
(5, 'banner_9.png', 'shop', '', 1),
(6, 'banner_ab3.jpeg', 'lienhe', '', 1),
(7, 'banner_ab1.jpeg', 'peaceshop', '', 1),
(8, 'baner1.jpeg', 'peaceshop', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL,
  `image_danhgia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`review_id`, `user_name`, `id_pro`, `image_danhgia`, `user_rating`, `user_review`, `datetime`) VALUES
(63, 'binh', 21, '', 5, '           tuyệt vời                                                                         ', 20211201),
(76, 'binh', 1, '', 4, 'Đẹp lắm ạ', 20211201),
(77, 'binh', 2, 'login.jpg', 5, 'Tuyệt vời', 20211201),
(83, 'binh', 19, '8197287059-colours-of-late-autumn.jpg', 5, 'Đẹp lắm ạ ^^ . Shop không bao giờ làm mình thất vọng', 1639058279),
(84, 'binh', 130, 'AA0_5520wm_800x800.jpg', 5, 'đẹp, tuyệt vời', 1639059792);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id_gallery` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id_gallery`, `id_product`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `user_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`user_account`, `id_product`, `soluong`, `anh`, `gia`, `name`) VALUES
('ngan', 19, 2, 'giovuonxuan.jpeg', 600000, 'Giỏ vườn xuân'),
('ngan', 18, 1, 'bohoadiungot.jpeg', 400000, 'Bó hoa dịu ngọt'),
('ngan', 17, 1, 'dotuyetvoi.jpeg', 280000, 'Đỏ tuyệt vời'),
('ngan', 20, 1, 'giohoahivong.jpeg', 550000, 'Giỏ hoa hi vọng'),
('binh', 19, 1, 'giovuonxuan.jpeg', 600000, 'Giỏ vườn xuân'),
('binh', 130, 1, 'AA0_422692wm_800x800.jpg', 382500, 'Combo Happy Family');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `name_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `name_image`, `url_image`) VALUES
(5, 'hoayeuthuong2', 'hoayeuthuong2.jpeg'),
(6, 'hoagiotnang2', 'giohoagiotnang.jpeg'),
(7, 'hoayeuthuong_cart2_2', 'AA0_4679wm_800x800.jpg'),
(8, 'hoacamtucauhong', 'hoacamtucauhong.jpeg'),
(9, 'combos1', 'combos1.jpeg'),
(10, 'combos1_cart1', 'combos1_cart1.jpeg'),
(11, 'hoacamtucauhong_cart1', 'Hoacamtucauhong_cart1.jpeg'),
(12, 'hoayeuthuong_cart2', 'hoayeuthuong_cart2_2.jpeg'),
(13, 'combo_s', 'combo-S.jpeg'),
(14, 'combo_M', 'combo-M.jpeg'),
(15, 'combo_L', 'combo-L.jpeg'),
(17, 'combo-M_cart1', 'combo-M_cart1.jpeg'),
(18, 'combo-L_cart1', 'combo-L_cart1.jpeg'),
(19, 'carot', 'carot.jpeg'),
(20, 'cachua', 'cachua.jpeg'),
(21, 'khoaitay', 'khoaitay.jpeg'),
(22, 'xalach', 'xalach.jpeg'),
(23, 'dualeo', 'dualeo.jpeg'),
(24, 'dualeo_cart1', 'dualeo_cart1.jpeg'),
(25, 'bingoi', 'bingoi.jpeg'),
(26, 'chauhoagiotnang', 'chauhoagiotnang.jpeg'),
(27, 'châuhogiotnang_cart1', 'chauhoagiotnang_cart1.jpeg'),
(28, 'chauhoagiotnang_cart2', 'chauhoagiotnang_cart2.jpeg'),
(29, 'Kehoachucmung', 'kehoachucmung.jpeg'),
(30, 'Kehoachucmung_cart1', 'kehoachucmung_cart1.jpeg'),
(31, 'Kehoachucmung_cart2', 'kehoachucmung_cart2.jpeg'),
(33, 'dotuyetvoi', 'dotuyetvoi.jpeg'),
(34, 'dotuyetvoi_cart1', 'dotuyetvoi_cart1.jpeg'),
(35, 'dotuyetvoi_cart2', 'dotuyetvoi_cart2.jpeg'),
(36, 'bohoadiungot', 'bohoadiungot.jpeg'),
(37, 'bohoadiungot_cart1', 'bohoadiungot_cart2.jpeg'),
(38, 'bohoadiungot_cart2', 'bohoadiungot_cart1.jpeg'),
(39, 'giovuonxuan', 'giovuonxuan.jpeg'),
(40, 'giovuonxuan_cart1', 'giovuonxuan_cart1.jpeg'),
(41, 'giovuonxuan_cart2', 'giovuonxuan_cart2.jpeg'),
(42, 'giohoahivong', 'giohoahivong.jpeg'),
(43, 'giohoahivong_cart1', 'giohoahivong_cart1.jpeg'),
(44, 'giohoahivong_cart2', 'giohoahivong_cart2.jpeg'),
(45, 'myprincess', 'myprincess.jpeg'),
(46, 'myprincess_cart1', 'myprincess_cart1.jpeg'),
(47, 'myprincess_cart2', 'myprincess_cart2.jpeg'),
(48, 'mindfulsoul', 'mindfulsoul.jpeg'),
(49, 'mindfulsoul_cart2', 'mindfulsoul_cart1.jpeg'),
(50, 'mindfulsoul_cart1', 'mindfulsoul_cart2.jpeg'),
(51, 'roseland', 'roseland.jpeg'),
(52, 'roseland_cart1', 'roseland_cart1.jpeg'),
(53, 'roseland_cart2', 'roseland_cart2.jpeg'),
(54, 'giocombo4kg', 'giocombo4kg.jpeg'),
(55, 'giocombo4kg_cart1', 'giocombo4kg_cart1.jpeg'),
(56, 'combo10kg', 'combo10kg.jpeg'),
(57, 'combo10kg_cart1', 'combo10kg_cart1.jpeg'),
(58, 'Combosparky', '4RcIVsDiDZoflxgHUnCuxOGLEWsd7ZlVRGWEYcG5.jpeg'),
(60, 'k', 'am1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img_pd`
--

CREATE TABLE `img_pd` (
  `id_img` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img_pd`
--

INSERT INTO `img_pd` (`id_img`, `id_product`, `name_image`) VALUES
(21, 84, 'product-details-1.jpg'),
(22, 84, 'product-details-2.jpg'),
(23, 86, 'product-details-4.jpg'),
(24, 86, 'product-details-5.jpg'),
(25, 86, 'thumb-1.jpg'),
(26, 88, 'lp-2.jpg'),
(27, 88, 'lp-3.jpg'),
(28, 90, ''),
(29, 92, 'lp-1.jpg'),
(30, 92, 'lp-2.jpg'),
(31, 92, 'lp-3.jpg'),
(32, 94, 'banner_ab1.jpeg'),
(33, 94, 'banner_ab3.jpeg'),
(34, 94, 'banner_ab8.jpeg'),
(35, 97, 'about.jpg'),
(36, 97, 'about-us1.jpeg'),
(37, 97, 'about-us2.jpeg'),
(38, 99, 'about-us2.jpeg'),
(39, 99, 'baner.png'),
(40, 99, 'baner1.jpeg'),
(46, 102, 'baner.png'),
(47, 102, 'banner_ab1.jpeg'),
(48, 102, 'bg_2.jpg'),
(49, 102, 'cung-cap-rau-an-toan.jpeg'),
(50, 104, 'baner.png'),
(51, 104, 'baner1.jpeg'),
(52, 104, 'baner2.jpeg'),
(53, 106, 'banner_9.jpeg'),
(54, 106, 'banner_ab1.jpeg'),
(55, 106, 'banner_ab3.jpeg'),
(56, 108, 'bg_2.jpg'),
(57, 108, 'bg_3.jpg'),
(58, 108, 'camket.png'),
(59, 108, 'category.jpg'),
(60, 110, 'bg_1.jpg'),
(61, 110, 'bg_2.jpg'),
(62, 110, 'bg_3.jpg'),
(63, 112, ''),
(64, 115, 'product-1.jpg'),
(65, 115, 'product-2.jpg'),
(66, 115, 'product-9.jpg'),
(67, 115, 'product-10.jpg'),
(68, 117, 'bg_2.jpg'),
(69, 117, 'bg_3.jpg'),
(70, 117, 'camket.png'),
(71, 117, 'category.jpg'),
(72, 120, 'bg_1.jpg'),
(73, 120, 'bg_2.jpg'),
(74, 120, 'bg_3.jpg'),
(75, 120, 'camket.png'),
(76, 120, 'category.jpg'),
(77, 122, 'category-1.jpg'),
(78, 122, 'category-2.jpg'),
(79, 122, 'category-3.jpg'),
(89, 124, 'bg_1.jpg'),
(90, 124, 'bg_2.jpg'),
(93, 125, 'ss3.jpg'),
(94, 125, 'Untitled 2.png'),
(95, 2, 'hoayeuthuong_cart2_2.jpeg'),
(96, 2, 'hoayeuthuong2.jpeg'),
(97, 3, 'hoacamtucauhong.jpeg'),
(98, 3, 'Hoacamtucauhong_cart1.jpeg'),
(100, 1, 'qtpn_10.jpeg'),
(101, 1, 'giohoagiotnang.jpeg'),
(102, 4, 'combos1.jpeg'),
(103, 4, 'combos1_cart1.jpeg'),
(105, 6, 'combo-M.jpeg'),
(106, 6, 'combo-M_cart1.jpeg'),
(107, 7, 'combo-L.jpeg'),
(108, 7, 'combo-L_cart1.jpeg'),
(109, 8, 'carot.jpeg'),
(110, 9, 'khoaitay.jpeg'),
(111, 10, 'cachua.jpeg'),
(112, 5, 'combo-S.jpeg'),
(113, 5, 'combo-s_cart1.jpeg'),
(114, 11, 'xalach.jpeg'),
(115, 12, 'dualeo_cart1.jpeg'),
(116, 13, 'bingoi.jpeg'),
(117, 14, 'chauhoagiotnang.jpeg'),
(118, 14, 'chauhoagiotnang_cart1.jpeg'),
(119, 15, 'kehoachucmung.jpeg'),
(120, 15, 'kehoachucmung_cart1.jpeg'),
(121, 15, 'kehoachucmung_cart2.jpeg'),
(122, 17, 'dotuyetvoi.jpeg'),
(123, 17, 'dotuyetvoi_cart1.jpeg'),
(124, 17, 'dotuyetvoi_cart2.jpeg'),
(125, 18, 'bohoadiungot.jpeg'),
(126, 18, 'bohoadiungot_cart1.jpeg'),
(127, 18, 'bohoadiungot_cart2.jpeg'),
(128, 19, 'giovuonxuan.jpeg'),
(129, 19, 'giovuonxuan_cart1.jpeg'),
(130, 19, 'giovuonxuan_cart2.jpeg'),
(131, 20, 'giohoahivong.jpeg'),
(132, 20, 'giohoahivong_cart1.jpeg'),
(133, 20, 'giohoahivong_cart2.jpeg'),
(134, 21, 'myprincess_cart1.jpeg'),
(135, 21, 'myprincess_cart2.jpeg'),
(136, 21, 'myprincess.jpeg'),
(137, 22, 'mindfulsoul.jpeg'),
(138, 22, 'mindfulsoul_cart1.jpeg'),
(139, 22, 'mindfulsoul_cart2.jpeg'),
(140, 23, 'roseland.jpeg'),
(141, 23, 'roseland_cart1.jpeg'),
(142, 23, 'roseland_cart2.jpeg'),
(143, 24, 'giocombo4kg.jpeg'),
(144, 24, 'giocombo4kg_cart1.jpeg'),
(145, 25, 'combo10kg.jpeg'),
(146, 25, 'combo10kg_cart1.jpeg'),
(204, 128, 'qfV0LaENhLGVQbFqUJxUQap9keoi6DW4WdwCOYKo.jpeg'),
(205, 128, '4fg59kzglDKiBDKQ7tAMABqDoFl8WQyOae59WbzC.jpeg'),
(206, 128, 'uNdE5k1sVnoTHDt2uStFnFMsjLirgn6xBtfWqyED (1).jpeg'),
(207, 129, 'AA0_659012wm_800x800.jpg'),
(208, 129, '260480464_434775548194979_2395661808158418114_n_800x800.jpg'),
(209, 129, 'AA0_6590wm_800x800.jpg'),
(210, 130, 'AA0_431228wm_800x800.jpg'),
(211, 130, 'AA0_4279wm_800x800.jpg'),
(212, 130, 'AA0_422692wm_800x800.jpg'),
(213, 131, 'AA0_5525wm_800x800.jpg'),
(214, 131, 'AA0_5522wm_800x800.jpg'),
(215, 131, 'AA0_5520wm_800x800.jpg'),
(216, 132, 'AA0_4740wm_800x800.jpg'),
(217, 132, 'AA0_4739wm_800x800.jpg'),
(218, 132, 'AA0_4742wm_800x800.jpg'),
(220, 133, 'k52hEwZdjIEZrOvHLB8FgzzJDaeOpLBtFFVXXP3C.jpeg'),
(221, 133, 'LdY6cQjEwP55GYHvdSw873JHVsMUVaxJZjTmTFmm.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `ten_khuyenmai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khuyenmai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_khuyenmai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giatri_khuyenmai` float(11,0) NOT NULL,
  `ngaybatdau` datetime NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_khuyenmai`, `ten_khuyenmai`, `ma_khuyenmai`, `loai_khuyenmai`, `giatri_khuyenmai`, `ngaybatdau`, `trangthai`) VALUES
(1, 'Không khuyến mãi', '0', 'khongkhuyenmai', 0, '2021-09-30 19:48:58', 1),
(2, 'Khai Trương', 'KT2021', 'khaitruong', 15, '2021-10-12 07:15:33', 1),
(6, 'Phụ nữ VN', 'PNVN2010', 'phunuVN', 15, '2021-10-15 20:31:44', 1),
(7, 'Ngay20/11', 'NGVN2011', 'ngayNGVN', 20, '2021-11-16 15:35:06', 1),
(8, 'Ưu đãi 12.12', 'KM1212', 'khuyenmai1212', 15, '2021-12-08 17:02:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `name_lienhe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail_lienhe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaygui` datetime NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `name_lienhe`, `gmail_lienhe`, `noidung`, `ngaygui`, `trangthai`) VALUES
(1, 'Lê Thị Thanh Bình', 'thanhbinh24602@gmai.com', 'Xin chào', '2021-11-27 02:34:57', 1),
(2, 'Nguyễn AK', 'nguyen@gmail.com', 'Tôi muốn lấy nhiều, shop bạn có bán sỉ không', '2021-11-28 10:20:48', 1),
(3, 'Lê Thị Thanh Ngân', 'ngan@gmail.com', 'Làm sao để mua nhiều vs giá sỉ.', '2021-12-09 03:08:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `name_new` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hagtag_new` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image_new` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info_new` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_new`, `name_new`, `hagtag_new`, `image_new`, `info_new`) VALUES
(4, '', '5', '8', '<p>h</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `user_account` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_nn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nn` int(10) NOT NULL,
  `sdt_nn2` int(10) NOT NULL,
  `time_gh` date NOT NULL,
  `ghichu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `doituong` int(11) NOT NULL,
  `tangdip` int(11) NOT NULL,
  `thongdiep` longtext COLLATE utf8_unicode_ci NOT NULL,
  `thanhtoan` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaythem` datetime NOT NULL,
  `giogiao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `andanh` int(11) NOT NULL,
  `gioitinhnn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `user_account`, `total`, `full_name`, `email`, `phone`, `phone2`, `address`, `name_nn`, `sdt_nn`, `sdt_nn2`, `time_gh`, `ghichu`, `doituong`, `tangdip`, `thongdiep`, `thanhtoan`, `trangthai`, `ngaythem`, `giogiao`, `andanh`, `gioitinhnn`) VALUES
(156, 'binh', 975000, 'Lê Thị Thanh Bình', 'thanhbinh24602@gmail.com', '0364693924', '', 'Hưng Trạch, Bố Trạch, Quảng Bình', 'Lê Thị Thanh Bình', 364693924, 0, '2021-12-02', '', 4, 6, '', 1, 3, '2021-11-29 05:53:18', '09:00-17:00', 0, 1),
(157, 'binh', 602500, 'Lê Thị Thanh Bình', 'thanhbinh24602@gmail.com', '0364693924', '', 'hihi', 'Lê Thị Thanh Bình', 364693924, 0, '2021-12-03', '', 0, 0, '', 0, 3, '2021-11-29 06:06:20', '17:00-18:00', 0, 1),
(159, 'binh', 1430000, 'Lê Thị Thanh Bình', 'thanhbinh24602@gmail.com', '0364693924', '', 'Tại cửa hàng', 'Lê Thị Thanh Bình', 364693924, 0, '2021-12-17', '', 0, 0, '', 0, 3, '2021-12-02 08:22:11', '09:00-17:00', 0, 1),
(160, 'binh', 1007500, 'Lê Thị Thanh Bình', 'thanhbinh24602@gmail.com', '0364693924', '', 'abc', 'Lê Thị Thanh Bình', 364693924, 0, '2021-12-17', '', 0, 0, '', 0, 3, '2021-12-09 03:21:54', '09:00-17:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_sanpham`
--

CREATE TABLE `orders_sanpham` (
  `id_order` int(11) NOT NULL,
  `user_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders_sanpham`
--

INSERT INTO `orders_sanpham` (`id_order`, `user_account`, `id_product`, `soluong`, `anh`, `gia`, `name`) VALUES
(154, '', 21, 3, 'myprincess.jpeg', 400000, 'My princess'),
(156, 'binh', 21, 1, 'myprincess.jpeg', 400000, 'My princess'),
(156, 'binh', 20, 1, 'giohoahivong.jpeg', 550000, 'Giỏ hoa hi vọng'),
(157, 'binh', 1, 1, 'giohoagiotnang.jpeg', 280000, 'Giỏ hoa giọt nắng'),
(157, 'binh', 2, 1, 'hoayeuthuong2.jpeg', 297500, 'Hoa yêu thương '),
(158, 'binh', 2, 1, 'hoayeuthuong2.jpeg', 297500, 'Hoa yêu thương '),
(159, 'binh', 20, 1, 'giohoahivong.jpeg', 550000, 'Giỏ hoa hi vọng'),
(159, 'binh', 19, 1, 'giovuonxuan.jpeg', 600000, 'Giỏ vườn xuân'),
(159, 'binh', 1, 1, 'giohoagiotnang.jpeg', 280000, 'Giỏ hoa giọt nắng'),
(160, 'binh', 19, 1, 'giovuonxuan.jpeg', 600000, 'Giỏ vườn xuân'),
(160, 'binh', 130, 1, 'AA0_422692wm_800x800.jpg', 382500, 'Combo Happy Family');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` tinytext NOT NULL,
  `price_product` float NOT NULL,
  `id_khuyenmai` int(11) NOT NULL,
  `sl_product` int(20) NOT NULL,
  `id_type` int(20) NOT NULL,
  `id_brand` int(20) NOT NULL,
  `info_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ynghia` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_typeflower` int(20) NOT NULL,
  `id_theme` int(20) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `image`, `price_product`, `id_khuyenmai`, `sl_product`, `id_type`, `id_brand`, `info_product`, `mota`, `ynghia`, `id_typeflower`, `id_theme`, `trangthai`, `noibat`) VALUES
(1, 'Giỏ hoa giọt nắng', 'giohoagiotnang.jpeg', 350000, 7, 7, 1, 1, '<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Hoa Baby: 1 b&oacute;</p>\r\n\r\n<p>+ Giỏ m&acirc;y nhỏ + foam: 1 c&aacute;i</p>\r\n\r\n<p>Giỏ hoa c&oacute; k&iacute;ch thước: chiều d&agrave;i 18cm, chiều cao 18cm được t&iacute;nh từ đ&aacute;y giỏ đến đỉnh hoa.</p>\r\n', '<hr />\r\n<p>Hoa Baby đang dần l&ecirc;n ng&ocirc;i trong l&ograve;ng c&aacute;c qu&yacute; c&ocirc; y&ecirc;u th&iacute;ch sự đơn giản nhưng vẫn c&oacute; chất ri&ecirc;ng. L&agrave; một vị &ldquo;sứ giả của cảm x&uacute;c&rdquo;, hoa tươi lại tiếp tục thực hiện sứ mệnh gắn kết của trong những ng&agrave;y lễ, kỷ niệm.&nbsp;Khi m&agrave; những c&aacute;nh hoa rạng rỡ tươi xinh được gửi đi, l&agrave; l&uacute;c h&agrave;ng ng&agrave;n th&ocirc;ng điệp y&ecirc;u thương được nhận lại.&nbsp;</p>\r\n\r\n<h2><strong>Giỏ Hoa Giọt Nắng Tinh Kh&ocirc;i </strong><strong>c&oacute; g&igrave; đặc biệt?</strong></h2>\r\n\r\n<p>Giỏ hoa đặc biệt bởi v&igrave; chỉ c&oacute; mỗi hoa Baby đơn giản, nhẹ nh&agrave;ng nhưng vẫn toả s&aacute;ng theo c&aacute;ch ri&ecirc;ng của m&igrave;nh. Với vẻ ngo&agrave;i nhỏ xinh, những c&aacute;nh hoa trắng mềm tinh kh&ocirc;i, đo&aacute; baby như những sứ giả gắn kết những tr&aacute;i tim c&ugrave;ng chung nhịp đập. Hầu hết mọi người đều sẽ biết đến hoa baby với biểu tượng của 1 t&igrave;nh y&ecirc;u l&acirc;u d&agrave;i n&ecirc;n v&agrave;o dịp như 8/3, sinh nhật hay lễ cưới th&igrave; những đo&aacute; baby nguy&ecirc;n bản lu&ocirc;n được y&ecirc;u qu&yacute;.</p>\r\n\r\n<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Hoa Baby: 1 b&oacute;</p>\r\n\r\n<p>+ Giỏ m&acirc;y nhỏ + foam: 1 c&aacute;i</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://tools.dalathasfarm.com/public/products/AWT1/AWT16LK190/DSC_10751_800x800.jpg\" /></p>\r\n ', '<h2><strong>&Yacute; nghĩa của Giỏ Hoa Baby</strong></h2>\r\n\r\n<p>Th&ocirc;ng điệp của Giỏ Hoa Giọt Nắng Tinh Kh&ocirc;i với những c&agrave;nh Baby trong chiếc giỏ đan tay mộc mạc l&agrave; để t&ocirc;n vinh những n&eacute;t đẹp nguy&ecirc;n bản, kh&iacute; chất ri&ecirc;ng, c&aacute; t&iacute;nh ri&ecirc;ng của mỗi người, giống như hoa Baby trắng, kh&ocirc;ng cần th&ecirc;m thắt cầu kỳ m&agrave; vẫn toả s&aacute;ng.&nbsp;</p>\r\n\r\n<p>B&ecirc;n cạnh &yacute; nghĩa chung li&ecirc;n quan đến t&igrave;nh y&ecirc;u, hoa baby cũng gắn liền với niềm hạnh ph&uacute;c gia đ&igrave;nh. C&oacute; một truyền thống ở phương T&acirc;y l&agrave; mọi người thường tặng những c&agrave;nh hoa Baby cho c&aacute;c b&agrave; mẹ mới sinh để gửi tặng những lời ch&uacute;c v&agrave; mong ước tốt đẹp nhất.&nbsp;Lo&agrave;i hoa n&agrave;y gắn liền với những người m&agrave; bạn y&ecirc;u thương bao gồm t&igrave;nh y&ecirc;u, t&igrave;nh bạn v&agrave; gia đ&igrave;nh. Tặng một đo&aacute; Baby sẽ thể hiện t&igrave;nh cảm s&acirc;u sắc v&agrave; ch&acirc;n th&agrave;nh m&agrave; bạn d&agrave;nh cho họ.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://tools.dalathasfarm.com/public/products/AWT1/AWT16LK190/DSC_112124311_800x800.jpg\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n', 4, 1, 1, 1),
(2, 'Hoa yêu thương ', 'hoayeuthuong2.jpeg', 350000, 8, 2, 2, 1, '<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Rose&nbsp; Red Naomi PRE: 1 B&oacute;<br />\r\n+ Tana: 0.5 B&oacute;<br />\r\n+ L&aacute; Dương Xỉ: 0.5 B&oacute;<br />\r\n+ Giấy + nơ: 1 Bộ</p>\r\n', '<h2><strong>Hoa y&ecirc;u thương&nbsp;</strong></h2>\r\n\r\n<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Rose&nbsp; Red Naomi PRE: 1 B&oacute;<br />\r\n+ Tana: 0.5 B&oacute;<br />\r\n+ L&aacute; Dương Xỉ: 0.5 B&oacute;<br />\r\n+ Giấy + nơ: 1 Bộ</p>\r\n\r\n<p>Do t&iacute;nh chất tự nhi&ecirc;n của hoa v&agrave; c&acirc;y xanh m&agrave; sản phẩm thực nhận c&oacute; thể kh&aacute;c với h&igrave;nh minh họa về độ nở của hoa. Th&ocirc;ng thường shop sẽ giao sản phẩm c&ograve;n nụ để hoa c&oacute; thể nở&nbsp;rộ sau v&agrave;i ng&agrave;y được bạn chăm s&oacute;c.</p>\r\n\r\n<p>********</p>\r\n\r\n<p>H&atilde;y để Peace shop&nbsp; mang &nbsp;thi&ecirc;n nhi&ecirc;n v&agrave;o kh&ocirc;ng gian sống của bạn bằng những sản phẩm hoa tươi tuyệt đẹp v&agrave; rực rỡ sắc m&agrave;u. Bạn đừng ngần ngại sử dụng dịch vụ đặt hoa online để vừa c&oacute; thể tiết kiệm thời gian mua sắm, vừa nhận th&ecirc;m nhiều ưu đ&atilde;i v&agrave; được giao tận nơi những sản phẩm hoa tươi một c&aacute;ch nhanh ch&oacute;ng nhất. Bạn c&oacute; thể đặt h&agrave;ng ngay tại đ&acirc;y hoặc gọi Hotline 24062002 (ho&agrave;n to&agrave;n miễn ph&iacute;) để được tư vấn v&agrave; hỗ trợ nh&eacute;.</p>\r\n ', '<p>Những b&ocirc;ng hoa tươi thắm từ l&acirc;u đ&atilde; được xem l&agrave; một vị &ldquo;sứ giả tinh thần&rdquo; gi&uacute;p gửi trao những th&ocirc;ng điệp, cảm x&uacute;c v&agrave;o những dịp đặc biệt.&nbsp;Hoa Hồng với vẻ đẹp đầy m&ecirc; hoặc của n&oacute; khiến người ta li&ecirc;n tưởng đến nhiều h&igrave;nh ảnh, nhất l&agrave; những h&igrave;nh ảnh li&ecirc;n quan đến người phụ nữ. Hoa hồng ho&agrave; quyện giữa vẻ đẹp &Aacute; Đ&ocirc;ng ngọt ng&agrave;o v&agrave; n&eacute;t tao nh&atilde;, qu&yacute; ph&aacute;i của ch&acirc;u &Acirc;u n&ecirc;n được v&iacute; như một người phụ nữ giỏi giang v&agrave; xinh đẹp.</p>\r\n\r\n<p>Đặc điểm của từng b&ocirc;ng c&uacute;c Tana l&agrave; lớp c&aacute;nh trắng nhỏ khắng kh&iacute;t &ocirc;m lấy nhau m&agrave; trong c&aacute;c mối quan hệ, c&uacute;c Tana l&agrave; biểu tượng cho sự gắn kết, một t&igrave;nh bạn bền l&acirc;u v&agrave; đầy ch&acirc;n th&agrave;nh. Bất kể người nhận l&agrave; tu&yacute;p người hiện đại hay truyền thống đều sẽ kh&oacute; l&ograve;ng cưỡng lại m&agrave;u đỏ rực rỡ của những nh&aacute;nh hoa hồng, bởi ch&uacute;ng như đại diện cho một phần kh&aacute;t khao v&agrave; đam m&ecirc;.&nbsp;Việc gửi trao cho ai đ&oacute; hoa hồng đỏ Red Naomi phối xen c&ugrave;ng C&uacute;c Tana như thể nhắn nhủ rằng, người ấy cũng tuyệt vời như những đ&oacute;a hoa đỏ thắm n&agrave;y.</p>\r\n', 1, 1, 1, 1),
(3, 'Hoa cẩm tú cầu hồng', 'hoacamtucauhong.jpeg', 400000, 8, 1, 2, 1, '<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Cẩm T&uacute; Cầu: 1 c&agrave;nh</p>\r\n\r\n<p>+ L&aacute; Bạc: 0.2 b&oacute;</p>\r\n\r\n<p>+ Baby: 0.2 b&oacute;</p>\r\n\r\n<p>+ Giấy g&oacute;i v&agrave; nơ: 01 bộ</p>\r\n', '<h2>Hoa cẩm t&uacute; cầu hồng</h2>\r\n\r\n<p>Hoa tươi Peace shop được ứng dụng c&ocirc;ng nghệ trồng hoa sạch, &aacute;p dụng biện ph&aacute;p thi&ecirc;n địch sinh học Bio-Pro trong qu&aacute; tr&igrave;nh ươm trồng v&agrave; chăm s&oacute;c hoa, đảm bảo mang đến cho kh&aacute;ch h&agrave;ng những b&ocirc;ng hoa kh&ocirc;ng chỉ bền, đẹp m&agrave; c&ograve;n sạch, an to&agrave;n cho sức khỏe v&agrave; m&ocirc;i trường.&nbsp;Sản phẩm hiện c&oacute; sẵn tại shop online củaPeace shop , bạn c&oacute; thể đặt h&agrave;ng ngay để được nhận hoa tận nơi trong thời gian sớm nhất.</p>\r\n\r\n<p>Do t&iacute;nh chất tự nhi&ecirc;n của hoa v&agrave; c&acirc;y xanh m&agrave; sản phẩm thực nhận c&oacute; thể kh&aacute;c với h&igrave;nh minh họa về độ nở của hoa. Th&ocirc;ng thường shop sẽ giao sản phẩm c&ograve;n nụ để hoa c&oacute; thể nở&nbsp;rộ sau v&agrave;i ng&agrave;y được bạn chăm s&oacute;c.</p>\r\n\r\n<p>********</p>\r\n\r\n<p>H&atilde;y để Peace shop mang &nbsp;thi&ecirc;n nhi&ecirc;n v&agrave;o kh&ocirc;ng gian sống của bạn bằng những sản phẩm hoa tươi tuyệt đẹp v&agrave; rực rỡ sắc m&agrave;u. Bạn đừng ngần ngại sử dụng dịch vụ đặt hoa online để vừa c&oacute; thể tiết kiệm thời gian mua sắm, vừa nhận th&ecirc;m nhiều ưu đ&atilde;i v&agrave; được giao tận nơi những sản phẩm hoa tươi một c&aacute;ch nhanh ch&oacute;ng nhất. Bạn c&oacute; thể đặt h&agrave;ng ngay tại đ&acirc;y hoặc gọi Hotline 24062002 (ho&agrave;n to&agrave;n miễn ph&iacute;) để được tư vấn v&agrave; hỗ trợ.</p>\r\n ', '<p>Để mỗi ng&agrave;y đều l&agrave; ng&agrave;y đều l&agrave; đặc biệt, cũng l&agrave; để lời y&ecirc;u được b&agrave;y tỏ một c&aacute;ch trọn vẹn th&igrave; chọn một m&oacute;n qu&agrave; được chọn lựa tỉ mỉ l&agrave; rất quan trọng.&nbsp;Việc thể hiện sự tận t&acirc;m của bạn bằng một b&oacute; hoa sẽ l&ecirc;n một cấp độ ho&agrave;n to&agrave;n mới khi bạn t&igrave;m hiểu về &yacute; nghĩa của hoa. Vậy n&ecirc;n nếu c&ograve;n băn khoăn về một lo&agrave;i hoa gi&uacute;p bạn thể hiện t&igrave;nh cảm ch&acirc;n th&agrave;nh, th&igrave; h&atilde;y chọn Cẩm T&uacute; Cầu.</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/APF3/APF31LB246/AA0_4543_800x800.jpg\" /></p>\r\n\r\n<p><strong>&Yacute; nghĩa v&agrave; gi&aacute; trị của hoa Cẩm T&uacute; Cầu</strong></p>\r\n\r\n<p>Nếu được hỏi lo&agrave;i hoa n&agrave;o tượng trưng cho những cung bậc của tr&aacute;i tim, chắc chắn phải kể đến Cẩm T&uacute; Cầu. Đồng thời, đ&oacute; cũng l&agrave; lo&agrave;i hoa cầu h&ocirc;n trong lễ đ&iacute;nh h&ocirc;n, lễ cưới hay kỷ niệm ng&agrave;y cưới. Hoa Cẩm T&uacute; Cầu c&oacute; nhiều c&aacute;nh nhỏ h&igrave;nh tr&aacute;i tim xếp l&ecirc;n nhau h&agrave;i ho&agrave; tạo th&agrave;nh từng ch&ugrave;m hoa to tr&ograve;n, m&agrave;u sắc lu&ocirc;n thật dịu d&agrave;ng v&agrave; &ecirc;m &aacute;i, mang cho người ta nhiều cảm x&uacute;c.&nbsp;</p>\r\n\r\n<p><strong>V&igrave; sao b&oacute; hoa T&igrave;nh Cảm Ch&acirc;n Th&agrave;nh l&agrave; m&oacute;n qu&agrave; cho mọi dịp?</strong></p>\r\n\r\n<p>Cẩm T&uacute; Cầu tượng trưng cho những &yacute; nghĩa đa dạng bao gồm: Cảm x&uacute;c ch&acirc;n th&agrave;nh, l&ograve;ng biết ơn, hoặc mong muốn thấu hiểu s&acirc;u sắc hơn giữa hai người. Vậy n&ecirc;n, chỉ với một c&agrave;nh Cẩm T&uacute; Cầu, đệm th&ecirc;m Baby v&agrave; L&aacute; Bạc cũng đủ xinh xắn v&agrave; tinh tế để gửi đi &quot;T&igrave;nh Cảm Ch&acirc;n Th&agrave;nh&quot; của bạn. M&agrave;u hồng pastel, thanh lịch v&agrave; nhẹ nh&agrave;ng chắc chắn sẽ l&agrave;m xi&ecirc;u l&ograve;ng mọi người phụ nữ, d&ugrave; đ&oacute; l&agrave; t&igrave;nh y&ecirc;u đ&ocirc;i lứa, t&igrave;nh gia đ&igrave;nh hay t&igrave;nh bạn, d&ugrave; l&agrave; dịp kỷ niệm, sinh nhật hay ng&agrave;y lễ.</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/APF3/APF31LB246/z2545041451096_b8ce02068821747c93b482b7db0e794c1_800x800.jpg\" /></p>\r\n', 15, 1, 1, 0),
(14, 'Chậu hoa giọt nắng tinh khôi', 'chauhoagiotnang.jpeg', 500000, 1, 2, 8, 1, '<p>Tấm L&ograve;ng Của Con Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Baby: 1 B&oacute;</p>\r\n\r\n<p>+ Xịt M&agrave;u/Nhuộm M&agrave;u: 1 Bộ</p>\r\n\r\n<p>+ B&igrave;nh sứ trung</p>\r\n\r\n<p>+ Foam: 1 C&aacute;i</p>\r\n', ' ', '', 4, 1, 1, 0),
(15, 'Kệ hoa chúc mừng', 'kehoachucmung.jpeg', 1200000, 2, 2, 9, 1, '<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Hướng Dương: 3 B&oacute;</p>\r\n\r\n<p>+ Hoa C&uacute;c Đơn: 1 B&oacute;</p>\r\n\r\n<p>+ Hoa C&uacute;c Nh&aacute;nh: 2 B&oacute;</p>\r\n\r\n<p>+ L&aacute; kiểng: 3 B&oacute;</p>\r\n\r\n<p>+ L&aacute; Dương Xỉ: 1 B&oacute;</p>\r\n\r\n<p>+ Hoa Lan Vũ Nữ &lt; 90cm: 1 B&oacute;</p>\r\n\r\n<p>+ Kệ Sắt + Giấy/Nơ/Ribbon: 1 C&aacute;i</p>\r\n', ' ', '', 2, 1, 1, 0),
(17, 'Đỏ tuyệt vời', 'dotuyetvoi.jpeg', 350000, 2, 2, 2, 1, '<p>B&oacute; Hoa Đỏ tuyệt vời gồm:</p>\r\n\r\n<p>- 12 b&ocirc;ng Hoa Hồng</p>\r\n\r\n<p>- 06 b&ocirc;ng Cẩm Chướng</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 1, 2, 1, 0),
(18, 'Bó hoa dịu ngọt', 'bohoadiungot.jpeg', 500000, 1, 2, 2, 1, '<p>B&oacute; Hoa Sway Into Love gồm:</p>\r\n\r\n<p>- 10 b&ocirc;ng Hoa Hồng</p>\r\n\r\n<p>- 04 b&ocirc;ng Cẩm Chướng</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 1, 3, 1, 1),
(19, 'Giỏ vườn xuân', 'giovuonxuan.jpeg', 600000, 1, 2, 1, 1, '<p>Giỏ vườn xu&acirc;n bao gồm:</p>\r\n\r\n<p>- 6 b&ocirc;ng Hoa Hồng</p>\r\n\r\n<p>- 7 b&ocirc;ng Hoa Đồng Tiền</p>\r\n\r\n<p>- 4 b&ocirc;ng Hoa Cẩm Chướng</p>\r\n', ' ', '', 1, 5, 1, 1),
(20, 'Giỏ hoa hi vọng', 'giohoahivong.jpeg', 550000, 1, 2, 1, 1, '<p>Giỏ Hoa Hi Vọng gồm:</p>\r\n\r\n<p>- 5 b&ocirc;ng Hoa Hướng Dương</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 1, 1, 1, 0),
(21, 'My princess', 'myprincess.jpeg', 400000, 1, 2, 2, 1, '<p>B&oacute; Hoa My Princess gồm:</p>\r\n\r\n<p>- 1 B&ocirc;ng Hoa Cẩm T&uacute; Cầu</p>\r\n\r\n<p>- 12 Hoa Hồng</p>\r\n\r\n<p>- Hoa C&uacute;c</p>\r\n\r\n<p>- 2 Hoa Đồng Tiền</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 1, 2, 1, 1),
(22, 'Mindful Soul', 'mindfulsoul.jpeg', 530000, 1, 2, 2, 1, '<p>B&oacute; Hoa Mindful Soul gồm:</p>\r\n\r\n<p>- 03 b&ocirc;ng Hướng Dương</p>\r\n\r\n<p>- 03 b&ocirc;ng Cẩm T&uacute; Cầu</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 15, 1, 1, 1),
(23, 'Rose Land', 'roseland.jpeg', 550000, 1, 2, 1, 1, '<p>Giỏ Hoa Rose Land gồm:</p>\r\n\r\n<p>- 10 b&ocirc;ng Hoa Hồng</p>\r\n\r\n<p>- 3 b&ocirc;ng Cẩm Chướng</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', ' ', '', 1, 5, 1, 1),
(128, 'Beautiful You', 'NemqVp7PS7NKd5TCZspEyMOxifplDcS9jP8LZzAt.jpeg', 359000, 7, 20, 2, 0, '<p><em>B&oacute; Hoa Hồng Beautiful You gồm:</em></p>\r\n\r\n<p>- 12 b&ocirc;ng Hoa Hồng đỏ</p>\r\n\r\n<p>- C&aacute;c loại hoa &amp; l&aacute; kh&aacute;c</p>\r\n', '<p><em>B&oacute; Hoa Hồng Beautiful You gồm:</em></p>\r\n\r\n<p>- 12 b&ocirc;ng Hoa Hồng đỏ</p>\r\n\r\n<p>- C&aacute;c loại hoa &amp; l&aacute; kh&aacute;c</p>\r\n ', '', 1, 1, 1, 1),
(129, 'All I Want For Christmas Is You', 'AA0_6590wm_800x800.jpg', 650000, 8, 20, 8, 0, '<p><strong>Combo 02 Chậu Giấy g&oacute;i C&acirc;y T&ugrave;ng thơm 80cm+</strong></p>\r\n\r\n<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ T&ugrave;ng thơm 80cm: 2 Chậu<br />\r\n+ Giấy g&oacute;i v&agrave; nơ: 2 bộ</p>\r\n\r\n<p>Sản phẩm cao khoảng 80-90cm+. Do t&iacute;nh chất tự nhi&ecirc;n của c&acirc;y xanh m&agrave; chiều cao sẽ c&oacute; ch&ecirc;nh</p>\r\n', '<h2>All I Want For Christmas Is You</h2>\r\n\r\n<p>T&ugrave;ng thơm - Cypress - l&agrave; một trong c&aacute;c sản phẩm nổi bật cho m&ugrave;a Noel của Dalat Hasfarm. C&acirc;y t&ugrave;ng thơm c&oacute; d&aacute;ng thẳng cao, một th&acirc;n ch&iacute;nh với nhiều nh&aacute;nh nhỏ xung quanh, mọc &ocirc;m theo h&igrave;nh ch&oacute;p tương tự như c&acirc;y th&ocirc;ng n&ecirc;n thường được d&ugrave;ng để trưng b&agrave;y trong kh&ocirc;ng gian nhỏ, hoặc gửi tặng người th&acirc;n bạn b&egrave; nhờ ưu điểm gọn nhẹ hơn nhiều so với c&acirc;y th&ocirc;ng.</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/WGP6/WGP61HK058/AA0_659012wm_800x800.jpg\" /></p>\r\n\r\n<p>Nếu bạn kh&ocirc;ng c&oacute; nhiều thời gian để trang tr&iacute; những c&acirc;y th&ocirc;ng Gi&aacute;ng Sinh ho&agrave;nh tr&aacute;ng, h&atilde;y thử t&ocirc; điểm g&oacute;c ri&ecirc;ng của m&igrave;nh bằng c&acirc;y T&ugrave;ng Thơm từ Peaceshop. Bằng m&agrave;u xanh ng&aacute;t v&agrave; hương thơm dễ chịu, c&acirc;y T&ugrave;ng với d&aacute;ng h&igrave;nh thu&ocirc;n nhọn như những c&acirc;y th&ocirc;ng mini chắc chắn sẽ mang cả bầu trời Noel về với kh&ocirc;ng gian của bạn v&agrave; gi&uacute;p kh&ocirc;ng kh&iacute; th&ecirc;m trong l&agrave;nh.</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/WGP6/WGP61HK058/AA0_6026wm_800x800.jpg\" /></p>\r\n\r\n<p>Chăm s&oacute;c t&ugrave;ng thơm cần lưu &yacute; tưới đủ nước nhưng kh&ocirc;ng l&agrave;m &uacute;ng gốc, đặt trong nh&agrave; nơi c&oacute; &aacute;nh s&aacute;ng gi&aacute;n tiếp. Trong điều kiện l&yacute; tưởng, c&acirc;y c&oacute; thể ph&aacute;t triển cao hơn chiều cao ban đầu khi mua v&agrave; độ bền l&ecirc;n đến h&agrave;ng năm. Sản phẩm c&oacute; k&iacute;ch cỡ khoảng 60-70cm. Do t&iacute;nh chất tự nhi&ecirc;n của sản phẩm n&ocirc;ng nghiệp, chiều cao của c&acirc;y sẽ c&oacute; ch&ecirc;nh lệch nhỏ, nhưng chất lượng th&igrave; lu&ocirc;n đạt chuẩn.</p>\r\n ', '', 1, 1, 1, 1),
(130, 'Combo Happy Family', 'AA0_422692wm_800x800.jpg', 450000, 8, 20, 8, 0, '<p>S&aacute;&ordm;&pound;n ph&aacute;&ordm;&copy;m bao g&aacute;&raquo;&ldquo;m:<br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa C&aacute;&ordm;&copy;m T&uacute; C&aacute;&ordm;&sect;u trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i Ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;<br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa S&aacute;&raquo;&lsquo;ng &Auml;&aacute;&raquo;i &Auml;&lsquo;&AElig;&iexcl;n trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;<br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa C&uacute;c trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;</p>\r\n', '<h2><strong>Combo Happy Family</strong></h2>\r\n\r\n<p><strong>S&aacute;&ordm;&pound;n ph&aacute;&ordm;&copy;m bao g&aacute;&raquo;&ldquo;m:</strong><br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa C&aacute;&ordm;&copy;m T&uacute; C&aacute;&ordm;&sect;u trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i Ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;<br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa S&aacute;&raquo;&lsquo;ng &Auml;&aacute;&raquo;i &Auml;&lsquo;&AElig;&iexcl;n trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;<br />\r\n+ Ch&aacute;&ordm;&shy;u Hoa C&uacute;c trung: 1 Ch&aacute;&ordm;&shy;u&nbsp;<br />\r\n+ Gi&aacute;&ordm;&yen;y n&AElig;&iexcl; g&oacute;i ch&aacute;&ordm;&shy;u trung: 1 B&aacute;&raquo;&trade;&nbsp;</p>\r\n ', '<h1>Combo Happy Family</h1>\r\n\r\n<p>Nh&aacute;&raquo;&macr;ng c&aacute;nh hoa r&aacute;&ordm;&iexcl;ng r&aacute;&raquo;&iexcl; lu&ocirc;n l&agrave; s&aacute;&raquo;&plusmn; l&aacute;&raquo;&plusmn;a ch&aacute;&raquo;n ho&agrave;n h&aacute;&ordm;&pound;o nh&aacute;&ordm;&yen;t &Auml;&lsquo;&aacute;&raquo;&fnof; bi&aacute;&raquo;&fnof;u &Auml;&lsquo;&aacute;&ordm;&iexcl;t s&aacute;&raquo;&plusmn; ch&acirc;n th&agrave;nh. &Auml;&aacute;&raquo;&fnof; m&oacute;n qu&agrave; tr&aacute;&raquo;&Yuml; n&ecirc;n &Auml;&lsquo;&aacute;&ordm;&middot;c bi&aacute;&raquo;&Dagger;t, Peaceshop g&aacute;&raquo;&shy;i g&aacute;&ordm;&macr;m th&ocirc;ng &Auml;&lsquo;i&aacute;&raquo;&Dagger;p c&uacute;a s&aacute;&raquo;&plusmn; quan t&acirc;m, chia s&aacute;&ordm;&raquo; qua nh&aacute;&raquo;&macr;ng &Auml;&lsquo;&oacute;a hoa, &Auml;&lsquo;&AElig;&deg;&aacute;&raquo;&pound;c vun tr&aacute;&raquo;&ldquo;ng b&aacute;&ordm;&plusmn;ng nhi&aacute;&raquo;u t&acirc;m huy&aacute;&ordm;&iquest;t v&agrave; g&oacute;i gi&aacute;&ordm;&yen;y n&AElig;&iexcl; th&aacute;&ordm;&shy;t &Auml;&lsquo;&aacute;&ordm;&sup1;p.</p>\r\n\r\n<p>N&aacute;&ordm;&iquest;u b&aacute;&ordm;&iexcl;n mu&aacute;&raquo;&lsquo;n d&agrave;nh cho ai &Auml;&lsquo;&oacute; th&aacute;&ordm;&shy;t nhi&aacute;&raquo;u t&igrave;nh c&aacute;&ordm;&pound;m nh&AElig;&deg;ng ch&AElig;&deg;a v&aacute;&ordm;&laquo;n ch&AElig;&deg;a &Auml;&lsquo;&AElig;&deg;&aacute;&raquo;&pound;c lo&agrave;i hoa ph&ugrave; h&aacute;&raquo;&pound;p, ho&aacute;&ordm;&middot;c mu&aacute;&raquo;&lsquo;n c&aacute;&ordm;&pound; gia &Auml;&lsquo;&igrave;nh, h&aacute;&raquo;&trade;i b&aacute;&ordm;&iexcl;n th&acirc;n c&ugrave;ng &Auml;&lsquo;&oacute;n nh&aacute;&ordm;&shy;n ngu&aacute;&raquo;&ldquo;n n&Auml;&fnof;ng l&AElig;&deg;&aacute;&raquo;&pound;ng vui t&AElig;&deg;&AElig;&iexcl;i th&igrave; h&atilde;y ch&aacute;&raquo;n combo 3 ch&aacute;&ordm;&shy;u hoa g&oacute;i gi&aacute;&ordm;&yen;y n&AElig;&iexcl; nh&eacute;.</p>\r\n\r\n<p><strong>V&igrave; sao n&ecirc;n ch&aacute;&raquo;n Combo 3 ch&aacute;&ordm;&shy;u hoa g&oacute;i gi&aacute;&ordm;&yen;y n&AElig;&iexcl; ?</strong></p>\r\n\r\n<p>Combo c&oacute; 3 ch&aacute;&ordm;&shy;u hoa g&oacute;i gi&aacute;&ordm;&yen;y n&AElig;&iexcl; xinh x&aacute;&ordm;&macr;n, c&oacute; hoa C&uacute;c Pico duy&ecirc;n d&aacute;ng, c&oacute; S&aacute;&raquo;&lsquo;ng &Auml;&aacute;&raquo;i t&AElig;&deg;&AElig;&iexcl;i vui, c&oacute; C&aacute;&ordm;&copy;m T&uacute; C&aacute;&ordm;&sect;u ng&aacute;&raquo;t ng&agrave;o. H&aacute;&raquo;&trade;i t&aacute;&raquo;&yen; &Auml;&lsquo;&aacute;&raquo;&sect; c&aacute;&ordm;&pound; 3 lo&agrave;i hoa &Auml;&lsquo;&aacute;&ordm;&sup1;p, &Auml;&lsquo;&aacute;&raquo;u l&agrave; nh&aacute;&raquo;&macr;ng m&oacute;n qu&agrave; &yacute; ngh&Auml;&copy;a &Auml;&lsquo;&aacute;&raquo;&fnof; g&aacute;&raquo;&shy;i &Auml;&lsquo;&aacute;&ordm;&iquest;n nh&aacute;&raquo;&macr;ng ng&AElig;&deg;&aacute;&raquo;i b&aacute;&ordm;&iexcl;n, c&aacute;c th&agrave;nh vi&ecirc;n gia &Auml;&lsquo;&igrave;nh m&agrave; b&aacute;&ordm;&iexcl;n y&ecirc;u qu&yacute;.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://tools.dalathasfarm.com/public/products/CB3W/CB3WDP31AK/AA0_4279wm_800x800.jpg\" /></p>\r\n\r\n<p>&Auml;&acirc;y s&aacute;&ordm;&frac12; l&agrave; m&oacute;n qu&agrave; mang n&Auml;&fnof;ng l&AElig;&deg;&aacute;&raquo;&pound;ng l&aacute;&ordm;&iexcl;c quan khi hoa n&aacute;&raquo;&Yuml;, gi&aacute;&raquo;&macr; cho t&acirc;m tr&iacute; th&AElig;&deg; gi&atilde;n khi ch&Auml;&fnof;m s&oacute;c c&acirc;y.&nbsp;Khi m&agrave; ch&uacute;ng ta kh&ocirc;ng th&aacute;&raquo;&fnof; g&aacute;&ordm;&middot;p nhau th&AElig;&deg;&aacute;&raquo;ng xuy&ecirc;n nh&AElig;&deg; tr&AElig;&deg;&aacute;&raquo;&rsaquo;c th&igrave; l&aacute;&ordm;&iexcl;i c&agrave;ng c&aacute;&ordm;&sect;n thi&ecirc;n nhi&ecirc;n b&ecirc;n c&aacute;&ordm;&iexcl;nh. N&aacute;&ordm;&iquest;u b&aacute;&ordm;&iexcl;n mu&aacute;&raquo;&lsquo;n truy&aacute;&raquo;n t&aacute;&ordm;&pound;i ngu&aacute;&raquo;&ldquo;n n&Auml;&fnof;ng l&AElig;&deg;&aacute;&raquo;&pound;ng t&AElig;&deg;&AElig;&iexcl;i vui t&aacute;&raquo;&laquo; hoa l&aacute; &Auml;&lsquo;&aacute;&ordm;&iquest;n ng&AElig;&deg;&aacute;&raquo;i th&acirc;n, h&atilde;y ch&aacute;&raquo;n &Auml;&lsquo;&aacute;&ordm;&middot;t online giao &Auml;&lsquo;&aacute;&ordm;&iquest;n cho h&aacute;&raquo; nh&AElig;&deg; m&aacute;&raquo;&trade;t m&oacute;n qu&aacute; b&aacute;&ordm;&yen;t ng&aacute;&raquo;!&nbsp;</p>\r\n', 15, 1, 1, 1),
(131, 'Chậu Hoa Thiết Kế Trường Thọ', 'AA0_5520wm_800x800.jpg', 480000, 1, 50, 8, 0, '<p>Sản phẩm bao gồm:<br />\r\n+ Chậu Hoa Sống Đời k&eacute;p trung: 3 Chậu<br />\r\n+ Chậu C&acirc;y Nguyệt Quế mini: 1 Chậu<br />\r\n+ Chậu sứ trung + đất: 1 C&aacute;i</p>\r\n', '<h2><strong>Chậu Hoa Thiết Kế Trường Thọ</strong></h2>\r\n\r\n<p>Sản phẩm bao gồm:<br />\r\n+ Chậu Hoa Sống Đời k&eacute;p trung: 3 Chậu<br />\r\n+ Chậu C&acirc;y Nguyệt Quế mini: 1 Chậu<br />\r\n+ Chậu sứ trung + đất: 1 C&aacute;i</p>\r\n ', '<p>Sống Đời&nbsp;l&agrave; lo&agrave;i hoa rất đặc biệt khi vừa mang đến sự gần gũi, th&acirc;n thuộc nhưng lại cũng khiến người ta đắm ch&igrave;m trong cảm gi&aacute;c được y&ecirc;u thương tr&acirc;n trọng. Với vẻ đẹp đặc biệt, &yacute; nghĩa s&acirc;u sắc, Sống Đời trở th&agrave;nh lo&agrave;i hoa của gia đ&igrave;nh, của những lời ch&uacute;c sức khỏe.&nbsp;</p>\r\n\r\n<p><strong>Chậu Hoa Thiết Kế Trường Thọ 106</strong>&nbsp;với những b&ocirc;ng hoa Sống Đời nhỏ nhắn nhiều m&agrave;u sắc, c&oacute; sức sống bền bỉ sẽ l&agrave; vị &ldquo;sứ giả y&ecirc;u thương&rdquo; gi&uacute;p bạn gửi lời ch&uacute;c tốt đẹp nhất đến những người th&acirc;n y&ecirc;u.</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/DDP3/DDP31LP106/AA0_5525wm_800x800.jpg\" /></p>\r\n\r\n<p>Đặc biệt l&agrave; khi ch&uacute;ng ta muốn kết nối lại với ai đ&oacute; sau thời gian d&agrave;i xa c&aacute;ch, th&igrave; &yacute; nghĩa sinh s&ocirc;i nảy nơ v&agrave; t&igrave;nh đo&agrave;n kết của hoa Sống Đời l&agrave; d&agrave;nh cho bạn. Hoa&nbsp; th&iacute;ch hợp để tặng cho những người th&acirc;n thương với ước mong mối quan hệ hạnh ph&uacute;c, gắn b&oacute;. Chậu hoa sống đời nhỏ xinh cũng v&ocirc; c&ugrave;ng th&iacute;ch hợp để d&agrave;nh tặng bạn b&egrave;, đồng nghiệp v&igrave; hoa tượng trưng cho t&igrave;nh bạn trong s&aacute;ng v&agrave; d&agrave;i l&acirc;u, được x&acirc;y n&ecirc;n từ l&ograve;ng ch&acirc;n th&agrave;nh chứ kh&ocirc;ng phải bằng vẻ ngo&agrave;i h&agrave;o nho&aacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 16, 1, 1, 0),
(132, 'Bó Hoa Món Quà Hạnh Phúc', 'AA0_4740wm_800x800.jpg', 300000, 8, 25, 2, 0, '<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Hoa Cẩm Chướng Đơn: 0.5 B&oacute; (10 c&agrave;nh)<br />\r\n+ Tana: 0.5 B&oacute;<br />\r\n+ Giấy + nơ: 1 Bộ</p>\r\n', '<h2><strong>B&oacute; Hoa M&oacute;n Qu&agrave; Hạnh Ph&uacute;c</strong></h2>\r\n\r\n<p>Sản phẩm bao gồm:</p>\r\n\r\n<p>+ Hoa Cẩm Chướng Đơn: 0.5 B&oacute; (10 c&agrave;nh)<br />\r\n+ Tana: 0.5 B&oacute;<br />\r\n+ Giấy + nơ: 1 Bộ</p>\r\n ', '<p>L&yacute; do ch&iacute;nh m&agrave; mọi người y&ecirc;u th&iacute;ch hoa tươi trong ng&agrave;y sinh nhật l&agrave; v&igrave; hoa gần gũi v&agrave; ngọt ng&agrave;o. Mỗi b&ocirc;ng hoa c&oacute; m&agrave;u sắc rực rỡ ri&ecirc;ng biệt v&agrave; hương thơm đặc biệt l&agrave;m xi&ecirc;u l&ograve;ng tất cả mọi người. Hơn nữa, hoa l&aacute; l&agrave; v&iacute; dụ điển h&igrave;nh cho thấy trong ng&agrave;y sinh nhật, việc thể hiện cử chỉ đẹp v&agrave; b&agrave;y tỏ t&igrave;nh cảm sẽ &yacute; nghĩa hơn l&agrave; m&oacute;n qu&agrave; vật chất đơn thuần. V&agrave; hoa tươi c&oacute; thể l&agrave;m tăng th&ecirc;m t&igrave;nh cảm được gửi gắm một c&aacute;ch tinh tế, điều m&agrave; kh&ocirc;ng một m&oacute;n qu&agrave; n&agrave;o kh&aacute;c l&agrave;m được.&nbsp;</p>\r\n\r\n<p><img src=\"https://tools.dalathasfarm.com/public/products/ART0/ART05LB253/AA0_4742wm_800x800.jpg\" /></p>\r\n\r\n<p><strong>B&oacute; Hoa M&oacute;n Qu&agrave; Hạnh Ph&uacute;c </strong>với những b&ocirc;ng hoa Cẩm Chướng đều sở hữu vẻ đẹp mềm mại, nhẹ nh&agrave;ng nhưng cũng đằm thắm, kh&ocirc;ng ngạc nhi&ecirc;n khi Cẩm Chướng c&ograve;n tượng trưng cho sự l&atilde;ng mạn v&agrave; nguồn cảm hứng nghệ thuật bất tận. C&uacute;c Tana lại nhẹ nh&agrave;ng điểm xuyến b&oacute; hoa bằng vẻ đẹp trong trẻo của m&igrave;nh, vừa l&agrave;m nổi bật m&agrave;u đỏ của Cẩm Chướng, vừa tự m&igrave;nh tỏa s&aacute;ng với sắc v&oacute;c ri&ecirc;ng biệt.</p>\r\n', 3, 1, 1, 1),
(133, 'Scented Love', 'LdY6cQjEwP55GYHvdSw873JHVsMUVaxJZjTmTFmm.jpeg', 659000, 8, 20, 7, 0, '<p><em>Giỏ Hoa Scented Love gồm:&nbsp;</em></p>\r\n\r\n<p>-&nbsp;5 b&ocirc;ng Hồng thường</p>\r\n\r\n<p>- 5 b&ocirc;ng Hồng nhập</p>\r\n\r\n<p>- Hoa Cẩm Chướng</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n', '<h2><strong>Scented Love</strong></h2>\r\n\r\n<p><em>Giỏ Hoa Scented Love gồm:&nbsp;</em></p>\r\n\r\n<p>-&nbsp;5 b&ocirc;ng Hồng thường</p>\r\n\r\n<p>- 5 b&ocirc;ng Hồng nhập</p>\r\n\r\n<p>- Hoa Cẩm Chướng</p>\r\n\r\n<p>- C&aacute;c loại hoa v&agrave; l&aacute; kh&aacute;c</p>\r\n\r\n<p>&nbsp;</p>\r\n ', '', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id_theme` int(11) NOT NULL,
  `name_theme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id_theme`, `name_theme`) VALUES
(1, 'Sinh nhật'),
(2, 'Lãng mạn'),
(3, 'Hoa cưới'),
(4, 'Chúc mừng'),
(5, 'Chúc sức khoẻ'),
(6, 'Cảm ơn'),
(7, 'Xin lỗi'),
(8, 'Khai trương'),
(9, 'Chia buồn');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `id_trend` int(11) NOT NULL,
  `name_trend` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hagtag_trend` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image_trend` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `info_trend` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaythem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`id_trend`, `name_trend`, `hagtag_trend`, `image_trend`, `mota`, `info_trend`, `ngaythem`) VALUES
(5, 'Nghệ thuật cắm hoa Ikebana: Nguồn gốc và lịch sử (Phần 1)', 'camhoa', '8197287059-colours-of-late-autumn.jpg', '<p>Kebana trong tiếng Nhật vốn bắt nguồn từ hai chữ &ldquo;Ikeru&rdquo; (sống) v&agrave; &ldquo;Hana&rdquo; (hoa), c&oacute; &yacute; nghĩa &ldquo;truyền sinh kh&iacute; cho hoa&rdquo; hay c&ograve;n gọi l&agrave; &ldquo;hoa đạo&rdquo;.</p>\r\n', '<h2><strong>Giới thiệu về nghệ thuật cắm hoa Ikebana</strong></h2>\r\n\r\n<p>Ikebana trong tiếng Nhật vốn bắt nguồn từ hai chữ &ldquo;Ikeru&rdquo; (sống) v&agrave; &ldquo;Hana&rdquo; (hoa), c&oacute; &yacute; nghĩa &ldquo;truyền sinh kh&iacute; cho hoa&rdquo; hay c&ograve;n gọi l&agrave; &ldquo;hoa đạo&rdquo;. Với c&aacute;i t&ecirc;n đẹp như vậy, Ikebana kh&ocirc;ng chỉ đơn thuần l&agrave; nghệ thuật cắm hoa m&agrave; c&ograve;n mang &yacute; nghĩa s&acirc;u sắc về mặt tinh thần, đạo đức v&agrave; x&atilde; hội.</p>\r\n\r\n<p>V&igrave; Ikebana đ&ograve;i hỏi về mặt tinh thần&nbsp;cũng nhiều như&nbsp;sự tinh tế về t&iacute;nh thẩm mỹ, n&ecirc;n người cắm hoa phải thật to&agrave;n t&acirc;m to&agrave;n &yacute; th&igrave; mới c&oacute; thể b&agrave;y tỏ l&ograve;ng tr&acirc;n qu&yacute; s&acirc;u sắc của m&igrave;nh đối với vẻ đẹp của tự nhi&ecirc;n. Ch&iacute;nh v&igrave; vậy, Ikebana kh&ocirc;ng chỉ l&agrave; một h&igrave;nh thức nghệ thuật c&oacute; thể tự do thể hiện m&agrave; c&ograve;n l&agrave; một trong những phương ph&aacute;p r&egrave;n luyện t&iacute;nh c&aacute;ch thanh lịch v&agrave; phong nh&atilde;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2019/04/2886383047-japanese-house-traditional-style-interior-design.jpg\" style=\"height:768px; width:1024px\" /></p>\r\n\r\n<p>Ikebana đ&ograve;i hỏi về mặt tinh thần cũng nhiều như sự tinh tế về t&iacute;nh thẩm mỹ. Ảnh:&nbsp;<a href=\"https://www.flickr.com/photos/2tails/8074988269/\">Gingertail</a></p>\r\n\r\n<p>Cũng như nhiều loại h&igrave;nh nghệ thuật truyền thống kh&aacute;c, Ikebana vẫn cho ph&eacute;p sự tự do s&aacute;ng tạo v&agrave; thể hiện nhưng vẫn phải tu&acirc;n theo những r&agrave;ng buộc về nguy&ecirc;n tắc v&agrave; h&igrave;nh thức vốn bắt nguồn từ một truyền thống lịch sử l&acirc;u d&agrave;i. Ch&iacute;nh nhờ sự lưu truyền của những quy tắc v&agrave; giới hạn n&agrave;y m&agrave; người cắm hoa Ikebana ng&agrave;y nay cần phải nỗ lực th&ecirc;m rất nhiều th&igrave; mới c&oacute; thể &ldquo;đắc đạo&rdquo; Ikeabana.</p>\r\n\r\n<p><strong>Nguồn gốc v&agrave; lịch sử</strong></p>\r\n\r\n<p>Ikebana vốn bắt nguồn từ phong tục d&acirc;ng hoa cho b&agrave;n thờ Phật ở Nhật Bản. Khi du nhập v&agrave;o Nhật Bản từ Trung Quốc đại lục khoảng năm 538, Phật gi&aacute;o đ&atilde; nhanh ch&oacute;ng được tiếp nhận trong mọi lĩnh vực đời sống, từ hệ thống niềm tin cho đến lối sống, văn h&oacute;a nghệ thuật.</p>\r\n\r\n<p>Trong thế kỷ 13 v&agrave; 14, khi Phật gi&aacute;o đ&atilde; lan truyền rộng r&atilde;i ở Nhật th&igrave; việc x&acirc;y một hốc tường kiến tr&uacute;c trong nh&agrave; để phục vụ việc thờ c&uacute;ng đ&atilde; trở n&ecirc;n phổ biến. Những hốc tường n&agrave;y, gọi l&agrave; Tokonoma, ban đầu được d&ugrave;ng để treo h&igrave;nh tượng Phật v&agrave; đặt hoa c&uacute;ng.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, theo thời gian, Tokonoma ng&agrave;y c&agrave;ng &iacute;t li&ecirc;n quan đến t&ocirc;n gi&aacute;o v&agrave; bắt đầu mang t&iacute;nh trang tr&iacute; nhiều hơn. Tranh vẽ, cuộn thư ph&aacute;p v&agrave; đồ cổ dần dần thay thế cho c&aacute;c h&igrave;nh tượng Phật v&agrave; chiếm lĩnh Tokonoma. Cuối c&ugrave;ng việc cắm hoa trong hốc tường đ&atilde; ph&aacute;t triển th&agrave;nh một loại h&igrave;nh nghệ thuật v&agrave; mất dần li&ecirc;n kết với t&ocirc;n gi&aacute;o ban đầu của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2019/04/8074988561-the-fog-clouds-between-the-autumn-mountains.jpg\" style=\"height:529px; width:800px\" /></p>\r\n\r\n<p>L&uacute;c bấy giờ, Tokonoma bắt đầu được xem l&agrave; nơi trưng b&agrave;y c&aacute;c t&aacute;c phẩm nghệ thuật v&agrave; đ&oacute;ng vai tr&ograve; l&agrave; &ldquo;trung t&acirc;m của ng&ocirc;i nh&agrave;&rdquo;. N&eacute;t quyến rũ của hoa cắm trong Tokonoma theo từng m&ugrave;a cũng dần được gia chủ quan t&acirc;m v&agrave; chăm ch&uacute;t nhiều hơn, với mục đ&iacute;ch thu h&uacute;t sự ngưỡng mộ của kh&aacute;ch đến thăm nh&agrave;.</p>\r\n\r\n<p><strong>Thực h&agrave;nh Ikebana</strong></p>\r\n\r\n<p>Kh&aacute;c với nghệ thuật cắm hoa phương T&acirc;y, Ikebana kh&ocirc;ng đặt trọng t&acirc;m v&agrave;o việc thu thập v&agrave; sắp xếp hoa nhiều m&agrave;u sắc, m&agrave; thay v&agrave;o đ&oacute; l&agrave; những bộ phận &iacute;t d&ugrave;ng đến như th&acirc;n, c&agrave;nh v&agrave; l&aacute;. Ikebana đề cao h&igrave;nh d&aacute;ng tổng thể, đường n&eacute;t v&agrave; h&igrave;nh thức sắp xếp.</p>\r\n\r\n<p>Thẩm mỹ tối giản cũng thường được &aacute;p dụng trong Ikebana. Đ&acirc;y l&agrave; phương thức d&ugrave;ng một số lượng hoa tối thiểu để tạo ra những thiết kế đơn giản m&agrave; thanh lịch. Theo h&igrave;nh học tam gi&aacute;c, cắm hoa Ikebana thường c&oacute; ba điểm ch&iacute;nh, tượng trưng cho Trời &ndash; Đất &ndash; Người hoặc Mặt trời &ndash; Mặt trăng &ndash; Tr&aacute;i đất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2019/04/8074988269-inspired-by-japanese-fan-variation-2-slanting-style-nageire.jpg\" style=\"height:540px; width:800px\" /></p>\r\n\r\n<p>Ikebana đề cao h&igrave;nh d&aacute;ng tổng thể, đường n&eacute;t v&agrave; h&igrave;nh thức sắp xếp.&nbsp;</p>\r\n\r\n<p>V&igrave; Ikebana bao gồm cả kh&iacute;a cạnh tinh thần n&ecirc;n c&aacute;c học vi&ecirc;n Ikebana được y&ecirc;u cầu phải giữ im lặng trong khi cắm hoa. Sự im lặng c&oacute; thể gi&uacute;p người cắm nhận thức s&acirc;u sắc hơn những n&eacute;t đẹp của tự nhi&ecirc;n m&agrave; thường bị bỏ qua trong cuộc sống hối hả v&agrave; bận rộn.</p>\r\n\r\n<p>Th&ocirc;ng qua Ikebana, con người cũng cảm thấy gần gũi hơn với thi&ecirc;n nhi&ecirc;n v&agrave; học c&aacute;ch trở n&ecirc;n ki&ecirc;n nhẫn, khoan dung với những &yacute; kiến kh&aacute;c biệt. Ngo&agrave;i ra, Ikebana c&ograve;n được xem như l&agrave; một c&aacute;ch để thư gi&atilde;n tr&iacute; &oacute;c, cơ thể v&agrave; t&acirc;m hồn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2019/04/8598253026-ikebana-class.jpg\" /></p>\r\n\r\n<p>Người cắm hoa Ikebana được y&ecirc;u cầu phải giữ im lặng trong khi cắm. Ảnh:&nbsp;<a href=\"https://www.flickr.com/photos/chlemaris/8598253026/in/album-72157633036418545/\">Asha Komarovskaya</a></p>\r\n', '2021-10-20'),
(6, 'Vườn nhà yêu thương                                                         ', 'chamsoc', 'PHU08566_resize.jpg', '<p>Đối với đa số người, chỉ một g&oacute;c kh&ocirc;ng gian xanh đầy hoa v&agrave; l&aacute; cũng đủ khiến Nh&agrave; trở th&agrave;nh chốn b&igrave;nh y&ecirc;n m&agrave; họ lu&ocirc;n muốn quay về.</p>\r\n', '<p>Một khu vườn ngay giữa phố, tại sao kh&ocirc;ng?</p>\r\n\r\n<p>Đối với đa số người, chỉ một g&oacute;c kh&ocirc;ng gian xanh đầy hoa v&agrave; l&aacute; cũng đủ khiến Nh&agrave; trở th&agrave;nh chốn b&igrave;nh y&ecirc;n m&agrave; họ lu&ocirc;n muốn quay về.</p>\r\n\r\n<p>Với căn hộ chung cư hoặc nh&agrave; phố nhỏ c&oacute; ban c&ocirc;ng, d&ugrave; diện t&iacute;ch chỉ 2-3 met vu&ocirc;ng, bạn vẫn c&oacute; thể sở hữu hẳn một khu vườn mini ngập tr&agrave;n sắc m&agrave;u với những chậu hoa xinh từ Dalat Hasfarm.</p>\r\n\r\n<p>Dalat Hasfarm m&aacute;ch bạn một số mẫu phối hoa cho vườn trong phố để &ldquo;set up&rdquo; ngay tại nh&agrave;, tha hồ ngắm hoa mỗi ng&agrave;y v&agrave; tận hưởng nguồn năng lượng t&iacute;ch cực từ thi&ecirc;n nhi&ecirc;n mang lại.</p>\r\n\r\n<h2>Khu vườn nhỏ cho ri&ecirc;ng m&igrave;nh</h2>\r\n\r\n<p>Vườn hoa nh&igrave;n từ b&ecirc;n trong &ndash; thật đ&aacute;ng y&ecirc;u v&agrave; vui tươi, gi&uacute;p tăng th&ecirc;m nhiều hứng khởi. Mỗi ng&agrave;y mở cửa đ&oacute;n b&igrave;nh minh với những b&ocirc;ng hoa cười, bạn sẽ nhận ra rằng, tưới c&acirc;y tỉa hoa buổi s&aacute;ng cũng l&agrave; một niềm vui v&ocirc; c&ugrave;ng giản dị.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU08648_resize.jpg\" style=\"height:897px; width:598px\" /></p>\r\n\r\n<p>Những bồn hoa treo với c&uacute;c họa mi vẽ n&ecirc;n n&eacute;t duy&ecirc;n dịu d&agrave;ng đến nao l&ograve;ng . C&uacute;c họa mi lu&ocirc;n chiếm được thiện cảm với vẻ mộc mạc thanh khiết của hoa với nhiều m&agrave;u lựa chọn như v&agrave;ng, trắng hồng hoặc t&iacute;m. C&uacute;c họa mi cần được tưới &iacute;t nhất 2 lần/ ng&agrave;y để cung cấp đủ nước, trường hợp ban c&ocirc;ng c&oacute; nhiều nắng cần tưới nhiều hơn 2 lần/ng&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU085681-e1586773502324.jpg\" style=\"height:621px; width:600px\" /></p>\r\n\r\n<p>B&ecirc;n dưới những gi&agrave;n họa mi l&agrave; hoa hồng bụi v&agrave;&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-hoa-hong-red.html\">hoa hồng</a>&nbsp;vươn leo kh&aacute;c m&agrave;u, chậu hoa phong lộc xen c&ugrave;ng hồng m&ocirc;n nhẹ nh&agrave;ng, vừa lọc kh&ocirc;ng kh&iacute;, bụi bẩn vừa tạo điểm nhấn đặc biệt cho cả g&oacute;c vườn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Điểm nhấn đầy s&aacute;ng tạo với sự xen phối</h2>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU08460_resize.jpg\" style=\"height:501px; width:406px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-phong-loc-hoa-vriesea-sparkle.html\">Phong lộc hoa</a>&nbsp;trồng mix c&ugrave;ng với&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-cuc-mini-swifty-orange-bi-color.html\">c&uacute;c pico</a>,&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-song-doi-kep-mini-lindsay-q3.html\">sống đời</a>,&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-nguyet-que-mini-wonder.html\">nguyệt quế</a>&nbsp;v&agrave; calla lily tạo n&ecirc;n bản h&ograve;a ca rực rỡ cho m&ugrave;a h&egrave; đầy nắng, hoặc xen Phong lộc hoa c&ugrave;ng&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-hong-mon-2-cay-solara.html\">Hồng m&ocirc;n</a>&nbsp;nếu bạn th&iacute;ch vẻ đơn giản nhưng kh&ocirc;ng k&eacute;m cuốn h&uacute;t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU08591_resize.jpg\" style=\"height:400px; width:267px\" />R&acirc;m bụt l&agrave; lựa chọn phổ biến cho hoa trồng ngo&agrave;i trời, với đặc t&iacute;nh ưa s&aacute;ng v&agrave; ra hoa thường xuy&ecirc;n, bạn c&oacute; thể trồng v&agrave;i chậu r&acirc;m bụt c&ugrave;ng với hoa hồng bụi v&agrave;&nbsp;<a href=\"https://shop.dalathasfarm.com/hcm/hcm_vn/hoa-chau/chau-hoa-hoa-mi-percussion-teddy-lemon.html\">c&uacute;c họa mi v&agrave;ng</a>&nbsp;để tạo n&ecirc;n vẻ đẹp phong ph&uacute; cho ban c&ocirc;ng nh&agrave;. Tuy nhi&ecirc;n, r&acirc;m bụt cũng như hoa hồng dễ bị s&acirc;u rầy, n&ecirc;n cần thường xuy&ecirc;n kiểm tra v&agrave; chăm s&oacute;c diệt rầy để giữ độ bền l&acirc;u d&agrave;i cho hoa.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU08587_resize.jpg\" style=\"height:600px; width:900px\" /></p>\r\n\r\n<p>Nếu th&iacute;ch nhiều m&agrave;u xanh hơn, bạn c&oacute; thể treo th&ecirc;m những chậu thường xu&acirc;n, dương xỉ &hellip; hoặc những d&ograve;ng c&acirc;y xanh ph&ugrave; hợp với m&ocirc;i trường ngo&agrave;i trời.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2020/04/PHU08572_resize.jpg\" style=\"height:901px; width:600px\" /></p>\r\n\r\n<p>Sau c&ugrave;ng, kh&ocirc;ng k&eacute;m quan trọng, bạn n&ecirc;n lưu &yacute;, d&ugrave; chỉ mất khoảng một buổi s&aacute;ng cuối tuần để tạo ra một khu vườn xinh xắn, nhưng bạn sẽ phải để t&acirc;m chăm s&oacute;c, thường xuy&ecirc;n tưới nước v&agrave; kiểm tra t&igrave;nh trạng c&acirc;y hoa, thay c&acirc;y mới khi cần thiết để vườn lu&ocirc;n tươi đẹp v&agrave; đầy sức sống.</p>\r\n', '2021-12-02'),
(7, 'Hoa Hồng Chậu – Điểm nhấn dịu dàng', 'chamsoc', 'Hoahong.jpg', '<p>Hoa Hồng chậu c&ograve;n c&oacute; m&agrave;u sắc đa dạng v&agrave; độ bền cao, c&oacute; khả năng truyền tải hầu như tất cả c&aacute;c th&ocirc;ng điệp của người tặng n&ecirc;n rất th&iacute;ch hợp l&agrave;m qu&agrave; v&agrave;...</p>\r\n', '<p><strong>Trải qua cuộc h&agrave;nh tr&igrave;nh d&agrave;i từ những v&ugrave;ng đất ch&acirc;u &Aacute;, ch&acirc;u &Acirc;u cho đến Bắc Mỹ, ở bất cứ đ&acirc;u, hoa Hồng chậu cũng chinh phục tr&aacute;i tim người y&ecirc;u hoa ngay c&aacute;i nh&igrave;n đầu ti&ecirc;n. Với những nụ hoa nhỏ xinh, nổi bật tr&ecirc;n t&aacute;n l&aacute; xanh dịu m&aacute;t, hoa tạo điểm nhấn dịu d&agrave;ng cho mọi kh&ocirc;ng gian sống.</strong></p>\r\n\r\n<p>Hoa Hồng chậu c&ograve;n c&oacute; m&agrave;u sắc đa dạng v&agrave; độ bền cao, c&oacute; khả năng truyền tải hầu như tất cả c&aacute;c th&ocirc;ng điệp của người tặng n&ecirc;n rất th&iacute;ch hợp l&agrave;m qu&agrave; v&agrave; trang tr&iacute; nh&agrave; cửa, tạo kh&ocirc;ng gian trưng b&agrave;y nổi bật v&agrave; thu h&uacute;t mọi &aacute;nh nh&igrave;n.</p>\r\n\r\n<h3><strong>Đ&agrave; Lạt b&eacute;n duy&ecirc;n với hoa</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"https://muahoaonline.com/blog/wp-content/uploads/2018/06/potroos-2016-09-880x1200.jpg\" style=\"height:574px; width:421px\" />Trải qua cuộc h&agrave;nh tr&igrave;nh xuy&ecirc;n nhiều quốc gia, h&agrave;ng ngh&igrave;n loại hoa từ ch&acirc;u &Acirc;u, ch&acirc;u Mỹ, ch&acirc;u &Aacute; toả hương giữa phố n&uacute;i Đ&agrave; Lạt. Hoa Hồng chậu cũng chung h&agrave;nh tr&igrave;nh đ&oacute;, đến Đ&agrave; Lạt v&agrave; b&eacute;n duy&ecirc;n, tự tin khoe sắc v&agrave; giữ vững danh truyền nữ ho&agrave;ng của c&aacute;c loại hoa.</p>\r\n\r\n<p>Đ&agrave; Lạt tiếp tục đ&oacute;n nhận những cư d&acirc;n từ khắp mọi miền về đ&acirc;y lập nghiệp, trong h&agrave;nh l&yacute; họ mang theo l&agrave; những giống hoa đặc trưng, trồng trước s&acirc;n nh&agrave; để vơi đi nỗi nhớ qu&ecirc; hương. Với kh&iacute; hậu chiều l&ograve;ng người c&ugrave;ng thổ nhưỡng dồi d&agrave;o dinh dưỡng, Đ&agrave; Lạt đ&atilde; trở th&agrave;nh th&agrave;nh phố Ng&agrave;n hoa n&iacute;u ch&acirc;n lữ kh&aacute;ch thập phương.</p>\r\n\r\n<h3><strong>N&eacute;t ri&ecirc;ng hoa Hồng chậu</strong></h3>\r\n\r\n<p>Hồng kh&ocirc;ng chỉ xinh ở hoa, m&agrave; xinh từ l&uacute;c đ&acirc;m chồi, nảy lộc. Những chiếc l&aacute; non mơn mởn lớn dần v&agrave; đổi sang m&agrave;u xanh, cũng l&agrave; l&uacute;c c&aacute;c nụ hoa bắt đầu nh&uacute; l&ecirc;n, đ&acirc;y l&agrave; thời điểm người chăm hoa cảm thấy hạnh ph&uacute;c nhất v&agrave; tr&agrave;n đầy hy vọng, ng&oacute;ng chờ từng ng&agrave;y để được chi&ecirc;m ngưỡng c&aacute;nh Hồng xinh xắn khoe sắc trong s&acirc;n vườn.</p>\r\n\r\n<p>Ở Hồng chậu, người thưởng thức cảm nhận đầy đủ vẻ đẹp của l&aacute;, của nụ v&agrave; hoa. Hoa Hồng trải qua nhiều giai đoạn nở &ndash; t&agrave;n tựa như nhiều thế hệ trong kiếp nh&acirc;n sinh: những nụ hồng xinh xinh được bọc trong lớp đ&agrave;i hoa m&agrave;u xanh, như những trẻ thơ đang chập chững v&agrave;o đời, c&ograve;n cần được sự bao bọc của cha mẹ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://muahoaonline.com/blog/wp-content/uploads/2018/06/potroos-2016-05.jpg\" style=\"height:677px; width:1021px\" /></p>\r\n\r\n<p>Khi Hồng h&eacute; nở, e ấp thẹn th&ugrave;ng như những thiếu nữ tuổi vừa mới lớn, c&ograve;n đang ngỡ ng&agrave;ng trước cuộc sống mới lạ. Những b&ocirc;ng Hồng sắc hương rực rỡ, như những ch&agrave;ng trai c&ocirc; g&aacute;i đang ở độ xu&acirc;n th&igrave; đầy sức sống. C&ograve;n những b&ocirc;ng Hồng đ&atilde; qua thời tươi nở, vẫn cố gắng đem ch&uacute;t hương c&ograve;n lại d&acirc;ng cho đời. V&agrave;, nếu bạn để &yacute;, bạn sẽ thấy cả những c&aacute;nh hồng đ&atilde; t&agrave;n phai, mặc d&ugrave; rơi rụng xuống nền đất vẫn c&ograve;n gợi cho thi nh&acirc;n những cảm hứng s&aacute;ng t&aacute;c ra c&aacute;c tuyệt phẩm.</p>\r\n\r\n<h3><strong>Mỗi m&agrave;u sắc một &yacute; nghĩa</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"https://muahoaonline.com/blog/wp-content/uploads/2018/06/potroos-2016-08-854x1200.jpg\" style=\"height:562px; width:400px\" /></p>\r\n\r\n<p>Hoa Hồng l&agrave; lo&agrave;i hoa v&ocirc; c&ugrave;ng đặc biệt cả về h&igrave;nh d&aacute;ng lẫn m&agrave;u sắc. C&aacute;nh hoa Hồng mỏng manh. L&aacute; c&oacute; h&igrave;nh d&aacute;ng của tr&aacute;i tim n&ecirc;n ch&uacute;ng được v&iacute; như ng&ocirc;n ngữ kh&ocirc;ng lời của t&igrave;nh y&ecirc;u. C&ograve;n những chiếc gai của hoa Hồng th&igrave; được so s&aacute;nh như l&ograve;ng ghen tu&ocirc;ng v&agrave; sự đau đớn trong cuộc t&igrave;nh.</p>\r\n\r\n<p>Ch&iacute;nh &yacute; nghĩa th&uacute; vị ấy m&agrave; hoa Hồng được d&ugrave;ng l&agrave;m qu&agrave; tặng cho những đ&ocirc;i lứa y&ecirc;u nhau. Vừa thầm ch&uacute;c cho nhau lời hoa mĩ nhất, vừa như nhắc nhở rằng, trong cuộc t&igrave;nh n&agrave;o cũng c&oacute; những nỗi buồn. Nhưng đừng v&igrave; qu&aacute; quan t&acirc;m đến gai nhọn quanh th&acirc;n Hồng m&agrave; qu&ecirc;n đi những c&aacute;nh hoa dịu d&agrave;ng như muốn kể chuyện t&igrave;nh y&ecirc;u của lứa đ&ocirc;i hạnh ph&uacute;c.</p>\r\n\r\n<p>M&agrave;u sắc hoa cũng n&oacute;i l&ecirc;n nhiều điều, để ph&ugrave; hợp với nội dung cần chuyển tải, khi tặng hoa Hồng bạn cần t&igrave;m hiểu &yacute; nghĩa của từng m&agrave;u sắc. Như hoa Hồng đỏ chứng tỏ t&igrave;nh y&ecirc;u đam m&ecirc;, m&atilde;nh liệt v&agrave; thể hiện sự t&ocirc;n trọng; m&agrave;u t&iacute;m thể hiện sự chung thuỷ, s&acirc;u đậm v&agrave; ch&acirc;n th&agrave;nh; m&agrave;u trắng n&oacute;i l&ecirc;n t&igrave;nh y&ecirc;u đ&iacute;ch thực, sự tinh khiết, thanh cao, b&iacute; mật. Sự khao kh&aacute;t v&agrave; cảm th&ocirc;ng l&agrave; th&ocirc;ng điệp của m&agrave;u cam; nồng n&agrave;n v&agrave; quyến rũ l&agrave; qu&agrave; tặng hoa Hồng v&agrave;ng. M&agrave;u hồng n&oacute;i thay l&ograve;ng biết ơn v&agrave; hạnh ph&uacute;c.</p>\r\n\r\n<h3><strong>Hồng chậu &ndash; để đ&acirc;u cho đẹp, đặt đ&acirc;u cho sang</strong></h3>\r\n\r\n<p><img alt=\"hoa hồng chậu\" src=\"https://muahoaonline.com/blog/wp-content/uploads/2018/06/potroos-2016-03-831x1200.jpg\" style=\"height:577px; width:400px\" /></p>\r\n\r\n<p>Cuộc sống của bạn d&ugrave; bận rộn, căng thẳng hay thảnh thơi, an nh&agrave;n cũng cần c&oacute; những kh&ocirc;ng gian hoa để bầu bạn. Khi căng thẳng, bạn chỉ cần ngồi y&ecirc;n một chỗ ngắm hoa, hoặc chăm s&oacute;c hoa như tỉa c&agrave;nh, tưới nước, bỏ bớt l&aacute; &uacute;a&hellip; sẽ khiến l&ograve;ng m&igrave;nh dịu lại, những bộn bề lo toan được xếp sang một b&ecirc;n. C&ograve;n khi bạn thảnh thơi, thời gian chăm s&oacute;c hoa sẽ khiến cuộc sống bạn thăng hoa, hạnh ph&uacute;c vẹn tr&ograve;n.</p>\r\n\r\n<p>Một chậu Hồng đặt ở ph&ograve;ng kh&aacute;ch, b&agrave;n ăn hay gian bếp, ban c&ocirc;ng sẽ l&agrave;m kh&ocirc;ng gian nh&agrave; trở n&ecirc;n sống động, bay bổng, l&agrave;m điểm nhấn dịu d&agrave;ng che mờ đi n&eacute;t kh&ocirc; cứng của b&ecirc; t&ocirc;ng v&agrave; những bức tường ngăn c&aacute;ch. Hoa như xo&aacute; nho&agrave; mọi khoảng c&aacute;ch, ranh giới&hellip;</p>\r\n\r\n<p>H&atilde;y thử tưởng tượng ban c&ocirc;ng nh&agrave; bạn được trồng bởi những chậu hồng nhiều m&agrave;u sắc, xen kẽ l&agrave; những kh&oacute;m l&aacute; Dương Xỉ xanh m&aacute;t, v&agrave; những chậu Ng&agrave;n Chu&ocirc;ng treo đong đưa trong gi&oacute;. V&agrave;o mỗi buổi s&aacute;ng cuối tuần, bạn pha ly c&agrave; ph&ecirc; ấm thơm phức, mở th&ecirc;m nhạc kh&ocirc;ng lời nhẹ nh&agrave;ng v&agrave; ngồi đọc s&aacute;ch&hellip; bạn sẽ cảm nhận được kh&ocirc;ng gian lắng đọng v&agrave; thời gian quanh m&igrave;nh như ngừng lại, những x&ocirc; bồ của cuộc sống chợt tan biến từ l&uacute;c n&agrave;o kh&ocirc;ng hay.</p>\r\n\r\n<p>Sẽ c&agrave;ng tuyệt vời hơn khi nh&agrave; bạn c&oacute; khoảng s&acirc;n vườn rộng r&atilde;i, thiết kế một gi&agrave;n treo nhỏ ở g&oacute;c vườn, treo những chậu hoa Ng&agrave;n Chu&ocirc;ng ngập m&agrave;u sắc, b&ecirc;n dưới l&agrave; những kh&oacute;m Hồng c&ugrave;ng vườn C&uacute;c Hoạ Mi&hellip; tạo th&agrave;nh một khu vườn nhỏ t&ocirc; điểm cho ng&ocirc;i nh&agrave; xinh xắn của gia đ&igrave;nh bạn.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ trang tr&iacute; hoa tại gia đ&igrave;nh, Hồng chậu cũng rất ph&ugrave; hợp để đặt tại b&agrave;n l&agrave;m việc. Chậu hoa được thiết kế vừa đủ cho kh&ocirc;ng gian c&ocirc;ng sở, hay bạn c&oacute; thể trồng ra chậu sứ, th&ecirc;m c&aacute;c loại l&aacute; như Dương Xỉ, Sen đ&aacute;, l&aacute; Gấm&hellip; để chậu hoa th&ecirc;m sinh động v&agrave; dễ thương. Vừa l&agrave;m vừa ngắm hoa, chắc rằng hiệu quả c&ocirc;ng việc sẽ tăng theo cấp số nh&acirc;n.</p>\r\n\r\n<h3><strong>Chăm s&oacute;c Hồng chậu như thế n&agrave;o?</strong></h3>\r\n\r\n<p>Niềm hạnh ph&uacute;c của người y&ecirc;u hoa l&agrave; mỗi s&aacute;ng sớm, khi mặt trời chưa mọc, họ đ&atilde; đến b&ecirc;n những chậu Hồng y&ecirc;u qu&yacute;, cắt bỏ c&agrave;nh l&aacute; gi&agrave;, tưới nước cho c&acirc;y v&agrave; theo d&otilde;i c&acirc;y sinh trưởng từng ng&agrave;y. V&agrave; Hồng cũng sẽ hạnh ph&uacute;c v&agrave; khoẻ mạnh khi người chăm s&oacute;c ấy chăm b&oacute;n hợp l&yacute;, như vậy hoa mới c&oacute; thể sinh trưởng tốt v&agrave; ra hoa thường xuy&ecirc;n.</p>\r\n\r\n<p>Khi bạn đặt chậu Hồng trong nh&agrave; để được gần gũi v&agrave; cảm nhận hết vẻ đẹp của hoa từng ph&uacute;t gi&acirc;y, n&ecirc;n nhớ để hoa nơi c&oacute; nhiều &aacute;nh s&aacute;ng tự nhi&ecirc;n, tr&aacute;nh nguồn ph&aacute;t nhiệt hay gi&oacute; l&ugrave;a. Chỉ cần tưới nước cho c&acirc;y 2-3 lần mỗi tuần. C&ograve;n bạn trồng hoa ở hi&ecirc;n nh&agrave; hay ban c&ocirc;ng, s&acirc;n vườn, bạn chỉ cần tưới nước 3 lần mỗi tuần v&agrave; b&oacute;n ph&acirc;n 1 lần trong tuần để c&acirc;y đầy đủ dưỡng chất. Khi hoa gần t&agrave;n, bạn c&oacute; thể trồng ra chậu lớn để tiếp tục chăm s&oacute;c, cắt bỏ phần l&aacute; &uacute;a, hoa t&agrave;n để hoa tiếp tục ra mầm mới v&agrave; nở hoa.</p>\r\n', '2021-12-02'),
(8, 'Calimero – Loài hoa không thể thiếu trong lễ phục sinh', 'trangtri', 'Calimero.jpg', '<p>Nhắc đến&nbsp;<a href=\"http://www.muahoaonline.com/\">lễ Phục sinh</a>&nbsp;ai cũng sẽ nghĩ đến những biểu tượng quen thuộc như nến, trứng hay c&aacute;c ch&uacute; thỏ đ&aacute;ng y&ecirc;u.</p>\r\n', '<p><strong>Giới thiệu về Lễ Phục sinh</strong></p>\r\n\r\n<p>Lễ Phục sinh hay c&ograve;n gọi&nbsp;<em>Easter Day</em>&nbsp;l&agrave; một trong những ng&agrave;y lễ quan trọng của những ai theo đạo Kito (Thi&ecirc;n Ch&uacute;a Gi&aacute;o). Ban đầu, lễ Phục sinh chủ yếu d&agrave;nh cho c&aacute;c t&iacute;n đồ Thi&ecirc;n Ch&uacute;a Gi&aacute;o. Qua thời gian, lễ Phục sinh dần phổ biến rộng khắp v&agrave; trở th&agrave;nh ng&agrave;y lễ chung của nhiều quốc gia, trong đ&oacute; c&oacute; Việt Nam. Thời gian của lễ Phục sinh thường rơi v&agrave;o khoảng giữa th&aacute;ng 3 v&agrave; th&aacute;ng 4.</p>\r\n\r\n<p>Để tưởng niệm sự kiện t&aacute;i sinh của Ch&uacute;a Gi&ecirc;su từ c&otilde;i chết sau ba ng&agrave;y bị đ&oacute;ng đinh tr&ecirc;n thập tự gi&aacute;, v&agrave;o ng&agrave;y lễ Phục sinh, những t&iacute;n đồ thường đến nh&agrave; thờ dự lễ cũng như tổ chức những bữa tiệc giản dị, ấm c&uacute;ng. V&agrave; dĩ nhi&ecirc;n, sẽ thật thiếu s&oacute;t nếu thiếu đi sắc hoa tươi vui trong buổi tiệc mừng ng&agrave;y Lễ trọng đại n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2016/11/5-768x959.jpg\" /></p>\r\n\r\n<p>Hoa tươi lu&ocirc;n c&oacute; mặt t&ocirc; điểm cho Lễ Phục Sinh</p>\r\n\r\n<p><strong>Trứng &ndash; biểu tượng quan trọng của lễ Phục sinh</strong></p>\r\n\r\n<p>Trong c&aacute;c truyền thuyết&nbsp;về tạo dựng trời đất của nhiều d&acirc;n tộc xưa cho rằng, vũ trụ được sinh ra từ một quả trứng. N&ecirc;n trứng l&agrave; biểu tượng của thi&ecirc;n nhi&ecirc;n, của sự t&aacute;i sinh.&nbsp;Ri&ecirc;ng đối với t&iacute;n đồ Kit&ocirc; xem trứng như biểu tượng của sự Phục sinh của Ch&uacute;a Jesus.</p>\r\n\r\n<p><img alt=\"lễ phục sinh\" src=\"https://muahoaonline.com/blog/wp-content/uploads/2016/11/5-961x1200.jpg\" style=\"height:625px; width:500px\" /></p>\r\n\r\n<p>Những quả trứng từ l&acirc;u đ&atilde; mang &yacute; nghĩa của sự t&aacute;i sinh (Ảnh: Unsplash)</p>\r\n\r\n<p>Đối với Ch&iacute;nh Thống gi&aacute;o v&agrave; Gi&aacute;o hội C&ocirc;ng gi&aacute;o Đ&ocirc;ng Phương, trứng Phục sinh được nhuộm đỏ để diễn tả m&aacute;u của Ch&uacute;a Jesus đổ ra tr&ecirc;n thập gi&aacute;.&nbsp;Vỏ cứng của quả trứng tượng trưng cho ng&ocirc;i mộ được ni&ecirc;m phong của Ch&uacute;a. V&agrave; việc đập vỏ trứng biểu tượng cho sự Phục sinh của Ng&agrave;i từ c&otilde;i chết.</p>\r\n\r\n<p>Từ thế kỷ thứ 12, thứ bảy Phục sinh Ostersamstag người ta luộc ch&iacute;n trứng g&agrave; v&agrave; sơn m&agrave;u sắc sặc sỡ với những &yacute; nghĩa đẹp. M&agrave;u đỏ tượng trưng cho may mắn, m&agrave;u xanh cho hy vọng, trẻ trung v&ocirc; tội, m&agrave;u v&agrave;ng cho sự kh&ocirc;n ngoan, m&agrave;u trắng cho thanh bạch, m&agrave;u cam cho sức mạnh&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2016/11/4-768x512.jpg\" /></p>\r\n\r\n<p>Những quả trứng xinh được chuẩn bị trong ng&agrave;y Phục sinh (Ảnh: Unsplash)</p>\r\n\r\n<p><strong>Calimero &ndash; những quả trứng nhỏ xinh đầy sắc m&agrave;u</strong></p>\r\n\r\n<p>Lấy cảm hứng từ bộ phim hoạt h&igrave;nh Calimero về ch&uacute; g&agrave; đen ngộ nghĩnh lu&ocirc;n đội 1 mảnh vỏ trứng tr&ecirc;n đầu. Với niềm ki&ecirc;u h&atilde;nh v&agrave; l&ograve;ng tin v&agrave;o bản th&acirc;n, ch&uacute; g&agrave; Calimero đ&atilde; truyền những th&ocirc;ng điệp &yacute; nghĩa cho biết bao thế hệ tr&ecirc;n thế giới về l&ograve;ng tin v&agrave; sự lạc quan y&ecirc;u đời.</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; thế, lo&agrave;i hoa Calimero đ&atilde; ra đời v&agrave; cũng mang vẹn nguy&ecirc;n &yacute; nghĩa đ&oacute;. Đ&aacute;ng ngạc nhi&ecirc;n hơn, hoa Calimero kh&ocirc;ng chỉ mang h&igrave;nh d&aacute;ng tr&ograve;n trịa, nhiều sắc m&agrave;u như những quả trứng Phục sinh m&agrave; c&ograve;n c&oacute; sức sống m&atilde;nh liệt v&agrave; độ bền rất cao, như ch&iacute;nh &yacute; nghĩa của sức sống, sự hồi sinh trong ng&agrave;y lễ quan trọng n&agrave;y.</p>\r\n\r\n<p><a href=\"https://muahoaonline.com/blog/wp-content/uploads/2018/04/Pic-04.jpg\"><img alt=\"Hoa Calimero cho Lễ Phục Sinh\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2018/04/Pic-04-1200x815.jpg\" style=\"height:774px; width:1140px\" /></a></p>\r\n\r\n<p>Calimero c&oacute; h&igrave;nh d&aacute;ng nhỏ, tr&ograve;n như những quả trứng Phục sinh đầy sắc m&agrave;u</p>\r\n\r\n<p>Do đ&oacute;, trong dịp Phục sinh, ngo&agrave;i những quả trứng do m&igrave;nh tự l&agrave;m, bạn cũng c&oacute; thể tặng người th&acirc;n, bạn b&egrave; một b&oacute; Calimero để m&oacute;n qu&agrave; th&ecirc;m phần đ&aacute;ng y&ecirc;u v&agrave; &yacute; nghĩa. Bởi khi tặng ai đ&oacute; một b&oacute; Calimero đồng nghĩa với việc bạn đang gửi gắm lời động vi&ecirc;n, kh&iacute;ch lệ v&agrave; gửi đến người ấy một ng&agrave;y tr&agrave;n đầy niềm vui.</p>\r\n\r\n<p>Đặc biệt, trong ng&agrave;y Phục sinh, nếu trang tr&iacute; nh&agrave; cửa bằng Calimero l&agrave; bạn đang mang ngọn lửa hy vọng v&agrave; niềm vui v&agrave;o tổ ấm của m&igrave;nh. V&igrave; thế, d&ugrave; bận rộn đến mấy, trong ng&agrave;y Phục sinh, đừng qu&ecirc;n trang tr&iacute; kh&ocirc;ng gian bằng sắc hoa Calimero bạn nh&eacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2016/11/02.jpg\" style=\"height:696px; width:577px\" /></p>\r\n\r\n<p>Đừng qu&ecirc;n trang tr&iacute; tổ ấm bằng Calimero trong lễ Phục sinh nh&eacute;!</p>\r\n', '2021-12-02'),
(9, '5 cây nhiệt đới tạo điểm nhấn cho không gian', 'trangtri', '5-cay-nhiet-doi-dalathasfarm.jpg', '<p>C&aacute;c loại&nbsp;<a href=\"https://shop.dalathasfarm.com/blog/5-cay-nhiet-doi-tao-diem-nhan-cho-khong-gian/\">c&acirc;y nhiệt đới</a>&nbsp;với vẻ ngo&agrave;i xanh mướt, tươi tắn v&agrave; kh&ocirc;ng k&eacute;m phần tinh tế, đặc biệt l&agrave; cực kỳ dễ chăm s&oacute;c sẽ l&agrave; lựa chọn h&agrave;ng đầu cho những ai muốn mang vẻ đẹp của thi&ecirc;n nhi&ecirc;n v&agrave;o nh&agrave;.&nbsp;</p>\r\n', '<h2><strong>M&ocirc;n Quan &Acirc;m (Alocasia)</strong></h2>\r\n\r\n<p>M&ocirc;n Quan &Acirc;m sở hữu những l&aacute; h&igrave;nh mũi t&ecirc;n c&oacute; g&acirc;n d&agrave;y m&agrave;u trắng hoặc m&agrave;u bạc đầy ấn tượng, độc đ&aacute;o v&agrave; thu h&uacute;t &aacute;nh nh&igrave;n. C&acirc;y c&oacute; sức sống khỏe, dễ trồng, dễ chăm s&oacute;c v&agrave; l&agrave; biểu tượng của may mắn, t&agrave;i lộc, đồng thời c&oacute; khả năng l&agrave;m sạch kh&ocirc;ng kh&iacute; n&ecirc;n rất được ưa chuộng để trưng trang tr&iacute; trong nh&agrave;.</p>\r\n\r\n<p>M&ocirc;n Quan &Acirc;m cần m&ocirc;i trường ấm v&agrave; ẩm cao, bạn n&ecirc;n đặt c&acirc;y tại nơi c&oacute; &aacute;nh s&aacute;ng nhẹ, tưới nước vừa đủ ẩm đất 2-3 lần/tuần, tr&aacute;nh ướt rễ.&nbsp;</p>\r\n\r\n<p><img alt=\"môn quan âm\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/mon-quan-am-dalathasfarm.jpg\" style=\"height:800px; width:650px\" /></p>\r\n\r\n<h2><a href=\"https://shop.dalathasfarm.com/a2/chau-hoa-hong-mon-trung--red-p728.html\"><strong>Hồng M&ocirc;n</strong></a><strong>&nbsp;(Anthuriums)</strong></h2>\r\n\r\n<p>Hồng M&ocirc;n với d&aacute;ng l&aacute; h&igrave;nh tr&aacute;i tim độc đ&aacute;o, mang vẻ đẹp ki&ecirc;u h&atilde;nh, rực rỡ v&agrave; c&oacute; khả năng thanh lọc kh&ocirc;ng kh&iacute; hiệu quả. Một kh&ocirc;ng gian sống được t&ocirc; điểm với chậu Hồng M&ocirc;n với m&agrave;u sắc tươi tắn như đỏ, hồng, cam, v&agrave;ng,&hellip; chắc chắn sẽ th&ecirc;m phần sinh động, tươi trẻ v&agrave; bừng s&aacute;ng.</p>\r\n\r\n<p>Bạn n&ecirc;n đặt chậu Hồng M&ocirc;n ở nơi c&oacute; &aacute;nh s&aacute;ng nhẹ v&agrave; nhiệt độ từ 20-30 độ C, tưới c&acirc;y 2-3 lần/tuần với lượng nước vừa phải v&agrave; b&oacute;n ph&acirc;n NPK 1 lần/th&aacute;ng để gi&uacute;p c&acirc;y ph&aacute;t triển tươi tốt nh&eacute;.</p>\r\n\r\n<p><img alt=\"hồng môn\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/hong-mon.jpg\" style=\"height:650px; width:650px\" /></p>\r\n\r\n<h2><strong>Đế Vương (Philodendron)</strong></h2>\r\n\r\n<p>Đế Vương mang vẻ đẹp sang trọng với những chiếc l&aacute; to d&agrave;y khỏe khoắn, l&agrave; biểu tượng của hưng vượng v&agrave; may mắn. C&acirc;y kh&ocirc;ng chỉ l&agrave; lựa chọn ho&agrave;n hảo để tăng mảng xanh cho kh&ocirc;ng gian sống, m&agrave; c&ograve;n gi&uacute;p hấp thụ độc tố, bụi bẩn v&agrave; thanh lọc kh&ocirc;ng kh&iacute; đ&aacute;ng ngạc nhi&ecirc;n.</p>\r\n\r\n<p>Lo&agrave;i c&acirc;y nhiệt đới n&agrave;y kh&aacute; dễ chăm s&oacute;c, th&iacute;ch hợp trồng trong nh&agrave; nơi c&oacute; &aacute;nh s&aacute;ng, tr&aacute;nh &aacute;nh s&aacute;ng trực tiếp v&agrave; c&aacute;c nguồn nhiệt lớn. Mỗi tuần bạn cần tưới nước 2-3 lần cho đất vừa đủ ẩm v&agrave; lau sạch l&aacute; thường xuy&ecirc;n bằng vải mềm.&nbsp;</p>\r\n\r\n<p><img alt=\"đế vương\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/de-vuong.jpg\" style=\"height:434px; width:650px\" /></p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/a2/chau-su-cay-de-vuong-026-p654.html\">Chậu c&acirc;y đế vương dồn sẵn</a>&nbsp;nhỏ gọn cũng c&oacute; thể l&agrave;m qu&agrave; tặng cho&nbsp;bạn b&egrave; l&agrave;m việc tại c&ocirc;ng sở, đem lại điểm nhấn cho văn ph&ograve;ng xanh m&aacute;t.</p>\r\n\r\n<p><img alt=\"de vuong chau\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/chau-de-vuong.jpg\" style=\"height:434px; width:650px\" /></p>\r\n\r\n<h2><strong>Đa Đại Ph&uacute;c (Ficus)</strong></h2>\r\n\r\n<p>Đa Đại Ph&uacute;c &ndash; ngay từ c&aacute;i t&ecirc;n cũng đ&atilde; biểu tượng cho sự may mắn, ph&uacute;c lộc dồi d&agrave;o cho gia chủ. Đa Đại Ph&uacute;c c&oacute; nhiều chủng loại, mỗi loại mang một vẻ đẹp rất ri&ecirc;ng với những phiến l&aacute; c&oacute; c&aacute;c đường v&acirc;n đẹp mắt, phổ biến nhất l&agrave; Ficus Elastica/Rubber Plants (Đa b&uacute;p đỏ) v&agrave; Ficus Lyrata/Fiddle Leaf Fig (B&agrave;ng Singapore).&nbsp;</p>\r\n\r\n<p>Để c&acirc;y ph&aacute;t triển tốt, bạn n&ecirc;n đặt c&acirc;y nơi c&oacute; &aacute;nh s&aacute;ng nhẹ, l&yacute; tưởng l&agrave; khu gần cửa nhưng kh&ocirc;ng chịu nắng trực tiếp, tưới nước vừa đủ ẩm 2-3 lần/tuần v&agrave; lau l&aacute; thường xuy&ecirc;n bằng vải mềm để gi&uacute;p l&aacute; khỏe, sạch bụi v&agrave; xanh mượt.</p>\r\n\r\n<p><img alt=\"đa đại phúc\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/da-dai-phuc.jpg\" style=\"height:976px; width:650px\" /></p>\r\n\r\n<h2><a href=\"https://shop.dalathasfarm.com/a2/chau-cay-xanh--lan-y-p557.html\"><strong>Lan &Yacute; (Peace Lily)</strong></a></h2>\r\n\r\n<p>Lan &Yacute; l&agrave; một trong những loại c&acirc;y trang tr&iacute; trong nh&agrave; c&oacute; khả năng thanh lọc kh&ocirc;ng kh&iacute; v&ocirc; c&ugrave;ng hiệu quả đ&atilde; được NASA c&ocirc;ng nhận. Với sắc trắng tinh kh&ocirc;i của hoa v&agrave; m&agrave;u xanh đậm của l&aacute;, lo&agrave;i c&acirc;y nhiệt đới n&agrave;y cũng l&agrave; lựa chọn ho&agrave;n hảo để t&ocirc; điểm kh&ocirc;ng gian sống v&agrave; l&agrave;m việc trở n&ecirc;n sang trọng hơn.</p>\r\n\r\n<p>Lan &Yacute; ưa b&oacute;ng r&acirc;m, dễ chăm s&oacute;c n&ecirc;n sẽ ph&ugrave; hợp với mọi kh&ocirc;ng gian trong nh&agrave;. Bạn n&ecirc;n&nbsp; tưới nước 2-3 lần/tuần v&agrave; thỉnh thoảng thay đất sạch c&oacute; dinh dưỡng như&nbsp;<a href=\"https://shop.dalathasfarm.com/c/dat-huu-co-potting-soil-bio-pro/\">Potting Soil của Bio Pro</a>.</p>\r\n\r\n<p><img alt=\"lan ý\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/06/lan-y-dalathasfarm.jpg\" style=\"height:650px; width:650px\" /></p>\r\n', '2021-12-02'),
(10, 'Những chậu hoa xinh: Món quà của sự kết nối', 'trangtri', 'AA0_5482wm-768x769.jpg', '<p>Đ&atilde; qua một thời gian d&agrave;i ch&uacute;ng ta chưa c&ugrave;ng nhau qu&acirc;y quần t&acirc;m sự, nhỏ to những c&acirc;u chuyện đời thường. Vậy n&ecirc;n đừng bỏ lỡ những ...</p>\r\n', '<p>Đ&atilde; qua một thời gian d&agrave;i ch&uacute;ng ta chưa c&ugrave;ng nhau qu&acirc;y quần t&acirc;m sự, nhỏ to những c&acirc;u chuyện đời thường. Vậy n&ecirc;n đừng bỏ lỡ những ng&agrave;y Lễ quan trọng để ch&uacute;ng ta thắt chặt t&igrave;nh cảm. D&agrave;nh cho ng&agrave;y 20/10, Peaceshop giới thiệu bộ sưu tập những chậu hoa xinh. Đ&acirc;y l&agrave; qu&agrave; tặng &yacute; nghĩa cho người bạn thương, v&igrave; hoa l&agrave; m&oacute;n qu&agrave; của sự gắn b&oacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/10/AA0_5482wm.jpg\" style=\"height:601px; width:600px\" /></p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/chau-hoa-thiet-ke-yeu-thuong-102-p1459.html\">Chậu hoa thiết kế Y&ecirc;u Thương</a>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/10/AA0_5525wm.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>Sắc m&agrave;u th&uacute; vị của&nbsp;<a href=\"https://shop.dalathasfarm.com/chau-hoa-thiet-ke-truong-tho-106-p1461.html\">hoa Sống Đời</a><br />\r\n&nbsp;</p>\r\n\r\n<p>V&igrave; sao lại gọi những chậu hoa xinh l&agrave; m&oacute;n qu&agrave; của sự kết nối? L&agrave; v&igrave; hoa đẹp giản dị nhưng lại chan chứa y&ecirc;u thương. Hoa khi được chăm s&oacute;c chu đ&aacute;o sẽ gắn b&oacute; l&acirc;u d&agrave;i c&ugrave;ng người nhận. Khi ở cạnh họ qua năm th&aacute;ng, hoa sẽ nhắc nhớ về sự ch&acirc;n th&agrave;nh của đ&ocirc;i b&ecirc;n.</p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/chau-hoa-thiet-ke-chan-thanh-105-p1460.html\"><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/10/AA0_55261515wm.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/chau-hoa-thiet-ke-chan-thanh-105-p1460.html\">T&uacute; Cầu</a>&nbsp;cũng l&agrave; m&oacute;n qu&agrave; kết nối tr&aacute;i tim</p>\r\n\r\n<p>Hoa chậu đa dạng về m&agrave;u sắc v&agrave; kiểu d&aacute;ng, ph&ugrave; hợp với t&iacute;nh c&aacute;ch v&agrave; sở th&iacute;ch kh&aacute;c nhau. Nếu l&agrave; người &ocirc;n nhu dịu d&agrave;ng, chậu hoa T&uacute; Cầu l&agrave; d&agrave;nh cho họ. Ngược lại nếu c&oacute; phần đằm thắm, l&atilde;ng mạn th&igrave; h&atilde;y chọn hoa hồng đỏ. V&agrave; như Sống Đời sẽ d&agrave;nh cho ai đ&oacute; với t&iacute;nh c&aacute;ch c&oacute; ch&uacute;t mạnh mẽ, c&aacute; t&iacute;nh hơn.</p>\r\n\r\n<p><a href=\"https://shop.dalathasfarm.com/chau-hoa-thiet-ke-yeu-thuong-053-p1098.html\">Giỏ hoa hồng đỏ</a>&nbsp;đong đầy t&igrave;nh cảm,&nbsp;<strong>ưu đ&atilde;i 30%&nbsp;</strong>d&agrave;nh ri&ecirc;ng cho dịp 20/10&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://shop.dalathasfarm.com/blog/wp-content/uploads/2021/10/AA0_539612515wm.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p><a href=\"http://dlhf.vn/20-10https://shop.dalathasfarm.com/chau-cay-thiet-ke-trong-lanh-101-p1458.html\">Chậu c&acirc;y Lan &Yacute;</a>&nbsp;thanh lọc kh&ocirc;ng kh&iacute; cũng l&agrave; một &yacute; tưởng tuyệt vời, v&igrave; sức khỏe ch&iacute;nh l&agrave; ưu ti&ecirc;n h&agrave;ng đầu</p>\r\n\r\n<p>Mong rằng hoa tươi sẽ một lần nữa sẽ trở th&agrave;nh&nbsp; ho&agrave;n hảo để b&agrave;y tỏ ch&acirc;n t&igrave;nh, c&ugrave;ng bạn tạo n&ecirc;n những kỷ niệm đẹp trong ng&agrave;y 20/10.&nbsp;</p>\r\n', '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `typeflowers`
--

CREATE TABLE `typeflowers` (
  `id_typeflower` int(11) NOT NULL,
  `name_typeflower` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeflowers`
--

INSERT INTO `typeflowers` (`id_typeflower`, `name_typeflower`) VALUES
(1, 'Hoa hồng'),
(2, 'Hoa hướng dương'),
(3, 'Hoa cẩm chướng'),
(4, 'Hoa baby'),
(5, 'Hoa cúc'),
(6, 'Hoa xương rồng'),
(7, 'Hoa đồng tiền'),
(8, 'Hoa lan'),
(9, 'Hoa ly'),
(10, 'Hoa vĩnh cữu'),
(11, 'Hoa giả'),
(12, 'Hoa cát tường'),
(15, 'Hoa cẩm tú cầu'),
(16, 'Hoa sống đời');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id_type` int(11) NOT NULL,
  `name_type` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id_type`, `name_type`) VALUES
(1, 'Giỏ'),
(2, 'Bó'),
(3, 'Thùng'),
(4, 'Túi'),
(5, 'Hộp nhựa'),
(6, 'Gói'),
(7, 'Hộp'),
(8, 'Chậu'),
(9, 'Kệ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_account`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_admin`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethd`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `img_pd`
--
ALTER TABLE `img_pd`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`id_trend`);

--
-- Indexes for table `typeflowers`
--
ALTER TABLE `typeflowers`
  ADD PRIMARY KEY (`id_typeflower`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `img_pd`
--
ALTER TABLE `img_pd`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `id_trend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `typeflowers`
--
ALTER TABLE `typeflowers`
  MODIFY `id_typeflower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
