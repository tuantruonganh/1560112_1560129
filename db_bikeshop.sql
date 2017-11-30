-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 30, 2017 lúc 05:30 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_bill_detail` int(10) UNSIGNED DEFAULT NULL,
  `id_customer` int(10) UNSIGNED DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bill`),
  KEY `PK_bill_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_bill_detail`, `id_customer`, `date_order`, `total`, `created_at`, `updated_at`) VALUES
(1, 0, 1560112, '2017-11-17', 150000000, '2017-11-26 15:43:23', '2017-11-26 15:43:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id_bill_detail` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED DEFAULT NULL,
  `id_product` varchar(10) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bill_detail`),
  KEY `PK_bill_detail_product` (`id_product`),
  KEY `PK_bill_detail_bill` (`id_bill`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_bill`, `id_product`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'YK001', 15000, '2017-11-26 15:29:18', '2017-11-26 15:29:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `gender`, `address`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(1560112, 'Truong Tien Dung', 'Nam', '389 HVT', 'vodanh11397@gmail.com', '0936438822', '2017-11-26 15:51:54', '2017-11-26 15:51:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` varchar(10) NOT NULL,
  `id_type_product` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `new_arrival` int(5) UNSIGNED DEFAULT NULL,
  `new` int(5) UNSIGNED DEFAULT NULL,
  `best_seller` int(5) UNSIGNED DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `PK_product_type` (`id_type_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_type_product`, `name`, `new_arrival`, `new`, `best_seller`, `unit_price`, `image`, `created_at`, `updated_at`) VALUES
('BM-001', ' BM001', 'R nineT', 1, 1, 0, 598000000, 'R-nineT.jpg', '2017-11-30 15:11:28', '2017-11-30 15:11:28'),
('BM-002', ' BM001', 'S 1000 R', 1, 1, 0, 588000000, '2725131_K47_Outdoor_07.jpg', '2017-11-30 15:13:20', '2017-11-30 15:13:20'),
('BM-003', ' BM001', 'R 1200 GS', 1, 0, 0, 719000000, '2636060_100713middle1.jpg', '2017-11-30 15:16:20', '2017-11-30 15:16:20'),
('BM-004', ' BM001', 'C 650 GT', 1, 1, 0, 538000000, '2636059_2012-BMW-C600-Sport-C650-GT-01.jpg', '2017-11-30 15:19:54', '2017-11-30 15:19:54'),
('CF001', 'H001', 'Cafe Racer', 0, 0, 1, 50000000, '4699e3cc39e6f3b1cf36ce80cff27243--cafe-racer-yamaha-virago-scrambler-motorcycle.jpg', '2017-11-28 11:26:03', '2017-11-28 11:26:03'),
('D-001', 'D001', 'Monster 795', 1, 1, 0, 337900000, 'ducati-monster-795-p.jpg', '2017-11-30 15:26:52', '2017-11-30 15:26:52'),
('D-002', 'D001', 'Diavel Base', 1, 1, 0, 675800000, '1-Diavel-008.jpg', '2017-11-30 15:29:33', '2017-11-30 15:29:33'),
('D-003', 'D001', 'Hyperstrada', 0, 1, 1, 465000000, '2014-Ducati-Hyperstrada5.jpg', '2017-11-30 15:31:15', '2017-11-30 15:31:15'),
('D-004', 'D001', 'Multistrada', 0, 0, 0, 635000000, 'ducati-multistrada-1200-s-test-ride-review_827x510_51482755851.jpg', '2017-11-30 15:32:55', '2017-11-30 15:32:55'),
('D-005', 'D001', 'Superbike 899 Panigale', 0, 0, 0, 563000000, '20130917_15ff7f66e66b4116c2610b5b0b0c0223_1379391622.jpg', '2017-11-30 15:35:08', '2017-11-30 15:35:08'),
('HC001', 'H001', 'CBR 1000rr', 0, 0, 0, 500000, 'CBR1000RR-2017-Black-Front-WEB.jpg', '2017-11-27 14:24:36', '2017-11-27 14:24:36'),
('HC002', 'H001', 'CBR 250rr', 0, 0, 0, 400000, '3.jpg', '2017-11-27 14:28:02', '2017-11-27 14:28:02'),
('HC003', 'H001', 'CBR 600rr', 0, 0, 0, 160000, 'cbr600rr_2006.jpg', '2017-11-28 10:29:53', '2017-11-28 10:29:53'),
('HC004', 'H001', 'CBR 150rr', 0, 0, 0, 500000, 'honda-cbr-150r-den.jpg', '2017-11-28 10:29:53', '2017-11-28 10:29:53'),
('HF005', 'H001', 'Honda F6C', 0, 0, 0, 16000000, '12014hondavalkyriegl1800c2-1397656984.jpg', '2017-11-28 10:30:48', '2017-11-28 10:30:48'),
('HG006', 'H001', 'Gold Wind', 0, 0, 0, 500000000, 'GoldWingF6B_2016_10.jpg', '2017-11-28 10:30:48', '2017-11-28 10:30:48'),
('HL-001', 'HL001', 'Harley-Davidson Softail Deluxe', 0, 0, 0, 411172000, 'Harley-1.jpg', '2017-11-30 15:38:39', '2017-11-30 15:38:39'),
('HL-002', 'HL001', 'Harley-Davidson CVO Ultra Classic Electra Glide', 0, 0, 0, 677880000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-1.jpg', '2017-11-30 15:42:28', '2017-11-30 15:42:28'),
('HL-003', 'HL001', 'Harley Davidson V-rod Muscle', 0, 0, 1, 874504000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-3.jpg', '2017-11-30 15:43:40', '2017-11-30 15:43:40'),
('HL-004', 'HL001', 'Harley-Davidson Night Rod Special', 0, 0, 0, 894700000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-4.jpg', '2017-11-30 15:45:45', '2017-11-30 15:45:45'),
('HL-005', 'HL001', 'Harley-Davidson Forty-Eight', 0, 0, 0, 611839000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-6.jpg', '2017-11-30 15:52:44', '2017-11-30 15:52:44'),
('K-001', 'K001', 'Kawasaki Ninja H2 2017', 0, 0, 1, 949000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-3.jpg', '2017-11-30 15:59:13', '2017-11-30 15:59:13'),
('K-002', 'K001', 'Kawasaki Z1000 2017 ', 0, 0, 0, 409000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-5.png', '2017-11-30 16:00:27', '2017-11-30 16:00:27'),
('K-003', 'K001', 'Kawasaki Z300 2017', 0, 0, 0, 149000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-6.png', '2017-11-30 16:01:25', '2017-11-30 16:01:25'),
('K-004', 'K001', 'Kawasaki Ninja ZX-10R ABS 2017', 0, 0, 0, 549000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-10.jpg', '2017-11-30 16:02:33', '2017-11-30 16:02:33'),
('K-005', 'K001', 'Kawasaki Z800 2017 (Phiên bản Châu Âu)', 0, 0, 0, 285000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-7.png', '2017-11-30 16:03:36', '2017-11-30 16:03:36'),
('KT001', 'H001', 'KTM Duke 125', 0, 0, 0, 50000000, 'KTM-1290-Super-Duke-R-FB.jpg', '2017-11-28 11:23:17', '2017-11-28 11:23:17'),
('KT002', 'H001', 'KTM Duke 1290', 0, 0, 1, 638000000, '390-duke.jpg', '2017-11-28 11:26:03', '2017-11-28 11:26:03'),
('SG001', 'H001', 'Suzuki GSX 150', 0, 0, 1, 85000000, 'GSX-R150_YVU_Diagonal.png', '2017-11-28 11:24:32', '2017-11-28 11:24:32'),
('YK001', 'Y001', 'Kawasaki z1000', 0, 0, 0, 15000, 'kawasaki-z1000-r-edition-2017-1.jpg', '2017-11-26 15:28:16', '2017-11-26 15:28:16'),
('YR001', 'Y001', 'Yamaha R3', 0, 0, 0, 700000, '2018-Yamaha-YZF-R3-EU-Yamaha-Blue-Studio-002.jpg', '2017-11-27 14:29:35', '2017-11-27 14:29:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `image`, `link`) VALUES
(1, 'banner1.jpg', NULL),
(2, 'banner2.jpg', NULL),
(3, 'banner3.jpg', NULL),
(4, 'banner4.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_product`
--

DROP TABLE IF EXISTS `type_product`;
CREATE TABLE IF NOT EXISTS `type_product` (
  `id_type` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type_product`
--

INSERT INTO `type_product` (`id_type`, `name`, `image`, `created_at`, `updated_at`) VALUES
(' BM001', ' BMW', NULL, '2017-11-30 15:00:26', '2017-11-30 15:00:26'),
('D001', 'Ducati', NULL, '2017-11-30 15:01:03', '2017-11-30 15:01:03'),
('H001', 'Honda', NULL, '2017-11-27 14:17:31', '2017-11-27 14:17:31'),
('HL001', 'Harley Davidson', NULL, '2017-11-30 15:00:26', '2017-11-30 15:00:26'),
('K001', 'Kawasaki', NULL, '2017-11-30 15:02:37', '2017-11-30 15:02:37'),
('S001', 'Suzuki', NULL, '2017-11-30 14:56:53', '2017-11-30 14:56:53'),
('T001', 'Triumph', NULL, '2017-11-30 15:02:00', '2017-11-30 15:02:00'),
('Y001', 'Yamaha', NULL, '2017-11-26 15:59:12', '2017-11-26 15:59:12');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `PK_bill_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `PK_bill_detail_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `PK_bill_detail_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `PK_product_type` FOREIGN KEY (`id_type_product`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
