-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2017 at 05:19 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bikeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
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
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_bill_detail`, `id_customer`, `date_order`, `total`, `created_at`, `updated_at`) VALUES
(1, 0, 1560112, '2017-11-17', 150000000, '2017-11-26 15:43:23', '2017-11-26 15:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
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

-- --------------------------------------------------------

--
-- Table structure for table `customer`
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
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `gender`, `address`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(1560112, 'Truong Tien Dung', 'Nam', '389 HVT', 'vodanh11397@gmail.com', '0936438822', '2017-11-26 15:51:54', '2017-11-26 15:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
  `description` varchar(1500) DEFAULT NULL,
  `specification` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PK_product_type` (`id_type_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_type_product`, `name`, `new_arrival`, `new`, `best_seller`, `unit_price`, `image`, `created_at`, `updated_at`, `description`, `specification`) VALUES
('BM-003', 'BM001', 'R 1200 GS', NULL, NULL, NULL, 150000000, '\r\n2636060_100713middle1.jpg', '2017-12-09 06:02:53', '2017-12-09 06:02:53', 'BMW Motorrad vừa thêm vào dòng GS phiên bản mới, chiếc BMW R 1200 GS 2017 với nhiều cải tiến chắc chắn sẽ hấp dẫn các phượt thủ và dân du lịch bụi. BMW R 1200 GS đời 2017 vừa được giới thiệu tại triển lãm EICMA 2016 diễn ra Milan với sự nâng cấp nổi bật cho hai phiên bản Rallye và Exclusive. R 1200 GS được xem là mẫu xế đem lại cho các tay lái cảm giác đồng nhất về sức mạnh dù ở trong bất kỳ tình huống nào.', 'Động cơ: Không khí / làm mát bằng nước 4 thì\r\nHai động cơ phẳng với trục cân bằng, bốn van mỗi xi-lanh, trục cam đôi trên không, ướt sump bôi trơn\r\n\r\nSức chứa: 1.170 cc; Công suất:  125 Mã lực tại 7.750 v/ph\r\nMô-men xoắn tối đa: 92 Pound-Feet tại 6.500 v/ph; Tỷ lệ nén:  12.5: 1\r\n\r\nHỗn hợp quản lý kiểm soát / Động cơ: phun nhiên liệu điện tử với hệ thống van tiết lưu đi xe-by-wire\r\nCôn:  Đa đĩa ướt ly hợp, thủy lực vận hành\r\n\r\nHộp số:  hộp số sáu tốc độ với bánh răng cắt xoắn ốc\r\n\r\nĐầu phát: Ba pha máy phát điện 510 W ; Ắc quy: 12 V / 11,8 Ah, bảo trì miễn phí\r\n\r\nLốp, phía trước: 110 / 80R19 không săm; Lốp, phía sau: 150 / 70R17 không săm\r\n\r\nPhanh, phía trước: Twin đĩa, đĩa phanh nổi; Phanh, phía sau:  Độc đĩa, đường kính 265 mm,\r\n\r\nChiều dài: 2.210 mm ; Chiều dài cơ sở:  1.507 mm; Chiều rộng: 940 mm; Chiều cao:  1.430 mm'),
('BM-004', 'BM001', 'C 650 GT', 0, 0, 0, 538000000, '2636059_2012-BMW-C600-Sport-C650-GT-01.jpg', '2017-11-30 15:19:54', '2017-11-30 15:19:54', 'Là mẫu xe tay ga chạy xăng cao cấp nhất của BMW, chiếc maxi scooter C650GT được nhập khẩu chính hãng về Việt Nam có gía 568 triệu đồng.', ' hệ thống giảm xóc hành trình ngược đường kính 40 mm phía trước, gắp sau dạng đơn kết hợp lò xo trụ đặt ngang với thân xe, phanh trước dạng đĩa kép 270 mm 4 piston, phanh sau đĩa đơn 270 mm 2 piston, cả hai bánh đều có đường kính 15\" lắp lốp 120/70 phía trước và 160/60 phía sau. Tính năng chống bó cứng phanh ABS là trang bị tiêu chuẩn.sử dụng khối động cơ 2 xy lanh thẳng hàng, DOHC, dung tích 647 phân khối, làm mát bằng chất lỏng cho công suất cực đại 60 mã lực tại 7.500 vòng/phút và mô-men xoắn cực đại 63 Nm tại 6.000 vòng/phút. Hộp số là loại vô cấp CVT. BMW cho biết tốc độ tối đa mà xe có thể đạt được là 175 km/h. Mức tiêu hao nhiên liệu khoảng 4,4 lít/100 km.'),
('CF001', 'H001', 'Cafe Racer', 0, 0, 0, 400000, '4699e3cc39e6f3b1cf36ce80cff27243--cafe-racer-yamaha-virago-scrambler-motorcycle.jpg', '2017-11-28 11:26:03', '2017-11-28 11:26:03', '', ''),
('D-001', 'D001', 'Monster 795', 0, 1, 0, 337900000, 'ducati-monster-795-p.jpg', '2017-11-30 15:26:52', '2017-11-30 15:26:52', 'Phiên bản Ducati Monster 795 từng được khách hàng Việt Nam đánh giá cao nhờ có mức giá khá hấp dẫn. Tuy nhiên, việc hệ thống phanh thiếu đi chức năng ABS khiến nhiều khách hàng cảm thấy khó chịu. Chính vì lẽ đó, Monster 795 mới được ra mắt lần này được cải tiến ở một số chi tiết, màu xe và đặc biệt là hệ thống chống bó cứng phanh ABS cũng đã góp mặt.', 'Hệ thống động lực trên xe Ducati Monster 795 ABS vẫn được giữ nguyên, với động cơ L-Twin Desmodromic được lấy từ mẫu xe 796, công suất tối đa 87 mã lực, trọng lượng tĩnh 167 kg, chiều cao yên 740 mm. Monster 795 mới được ưu ái thiết kế riêng cho thị trường châu Á.\r\n\r\nHệ thống phanh Brembo với hai đĩa phanh phía trước đường kính 320 mm kèm theo 4 piston nhằm hỗ trợ thắng trước mạnh mẽ mà vẫn làm người lái dễ chịu. Trong khi đó, đĩa phanh sau đơn có đường kính 245 mm với 2 piston được trang bị thêm thanh tuỳ chỉnh. Hệ thống chống bó cứng phanh ABS được trang bị cho cả hai bánh xe nhằm tăng độ thoải mái cũng như an toàn cho người lái ở tốc độ cao.'),
('D-002', 'D001', 'Diavel Base', 0, 1, 0, 675800000, '1-Diavel-008.jpg', '2017-11-30 15:29:33', '2017-11-30 15:29:33', 'Dễ dàng nhận thấy thiết kế của Ducati Diavel 2016 đi theo phong cách xe cruiser rõ rệt hơn trước. Hình ảnh trên đường thử của Ducati Diavel 2016 khiến nhiều người nhanh chóng liên tưởng đến những chiếc cruiser như Harley-Davidson V-Rod.', '-Động Cơ-\r\nLoại Động cơ :L-Twin Testastretta 11 °, 4 van/xylanh , làm mát bằng dung dịch\r\nDung tích xy-lanh :1198.4 cc\r\nTỷ số nén : 12.5:1\r\nCông suất cực đại: 162 mã lực tại 8000 vòng/phút\r\nMô men xoắn tối đa: 130 Nm tại 8000 vòng/phút\r\nLy hợp/ côn: Nồi ướt, điều khiển thủy lực Có chức năng Self-servo và Slipper\r\nNhông sên: Nhông/ sên\r\nHệ thống phun nhiên liệu\r\nMikuni elliptical :điều khiển điện tử\r\nHộp số :Côn tay 6 cấp độ'),
('D-003', 'D001', 'Hyperstrada', 0, 1, 0, 465000000, '2014-Ducati-Hyperstrada5.jpg', '2017-11-30 15:31:15', '2017-11-30 15:31:15', 'Đây là chiếc mô tô dòng Mid Sport-Touring, được Ducati giới thiệu lần đầu tiên vào giữa năm 2013, xe được trang bị động cơ L-Twin 821 phân khối, 2 xi-lanh đặt hình chữ L với 4 van cho mỗi xi-lanh, công suất tối đa 110 mã lực @9250 vòng/phút và hộp số 6 cấp. Giá bán của Hyperstrada ở Việt Nam là 19.700$ cho bản tiêu chuẩn và 21.700$ cho bản Hypermotaro.', 'Động Cơ\r\nĐộng cơ	L-Twin Testastretta 11 °, 4 van mỗi xi lanh, Desmodromic, làm mát bằng chất lỏng\r\nTỷ số nén:12,8:1\r\nDung tích động cơ:821.1cc\r\nMomen Xoắn:89 Nm (65.8 lb-ft) 7750 rpm\r\nHệ thống phun nhiên liệu:Hệ thống phun xăng điện tử. Throttle bodies with full Ride by Wire system\r\nTruyền Động\r\nHộp số:6 cấp\r\nTỉ số truyền:1=37/15 2=30/17 3=28/20 4=26/22 5=24/23 6=23/24\r\nNhông/ sên:Trước 15 răng / Sau 45 răng, xích\r\nLy hợp:Ly hợp ướt\r\nKhí thải:Tiêu chuẩn EURO 3\r\nHệ Thống Khung Gầm\r\nLoại khung:Khung Trellis dạng ống thép\r\nGiảm sóc trước:-\r\nVành trước:Hợp kim nhẹ 10 chấu, 3.50\" x 117\"\r\nLốp trước:Pirelli Scorpion Trail, 120/70 ZR17\r\nGiảm sóc sau:-\r\nVành sau:Hợp kim nhẹ 10 chấu, 5.50\" x 117\"\r\nLốp sau:Pirelli Scorpion Trail, 180/55 ZR17\r\nPhanh trước:Đĩa bán nổi 2 x 320 mm, toả tròn gắn một khối Brembo calipers, 4 piston 2-pad, bơm trục với đòn bẩy điều chỉnh, ABS 9MP theo tiêu chuẩn\r\nPhanh sau: Đĩa 245 mm , 2 piston caliper, ABS 9MP theo tiêu chuẩn'),
('D-004', 'D001', 'Multistrada', 0, 1, 0, 635000000, 'ducati-multistrada-1200-s-test-ride-review_827x510_51482755851.jpg', '2017-11-30 15:32:55', '2017-11-30 15:32:55', 'Ducati Việt Nam vừa giới thiệu hai mẫu xe Multistrada 1200 và 1200S. Đây là dòng xe thuộc phân khúc adventure, đối thủ trực tiếp của BMW 1200 GS và KTM 1290 Super Adventure.\r\n\r\nHai phiên bản giới thiệu tại Việt Nam được nhập khẩu từ Thái Lan cùng mức giá 649 triệu đồng cho Multistrada 1200 và 762 triệu đồng cho bản Multistrada 1200S. ', 'Động Cơ\r\nĐộng cơ:L-Twin Testastretta 11, 4 van/xylanh , làm mát bằng dung dịch\r\nTỷ số nén:11,5/1\r\nDung tích động cơ:1198.4 cc\r\nCông suất:150HP @ 9350 vòng/phút ; 124,5 Nm tại 7500 vòng/phút\r\nHệ thống phun nhiên liệu:Phun xăng điện tử với cổ hút hình bầu dục\r\nTruyền Động\r\nHộp số:6 cấp\r\nTỉ số truyền:1=37/15 2=30/17 3=27/20 4=24/22 5=23/24 6=22/25\r\nNhông/ sên:Xích 5.30\" Trước 15 răng / Sau 40 răng\r\nLy hợp / Côn:Nồi ướt, điều khiển thủy lực Có chức năng Self-servo và Slipper\r\nKhí thải:Tiêu chuẩn EURO 3'),
('D-005', 'D001', 'Superbike 899 Panigale', 1, 0, 0, 563000000, '20130917_15ff7f66e66b4116c2610b5b0b0c0223_1379391622.jpg', '2017-11-30 15:35:08', '2017-11-30 15:35:08', 'Với những nỗ lực để cho ra mắt một mẫu Sport-bike tại thị trường giàu tiềm năng như Châu Á trước các thị trường lớn mạnh hơn hẳn như Châu Âu, Nam Mỹ, Mỹ…, cuối cùng mẫu Sport-bike đầu tiên mang tên 899 Panigale cũng được hãng này mang đến sản xuất tại Châu Á.', 'Động cơ	:L-Twin, 4 van mỗi xi lanh, Desmodromic, làm mát bằng chất lỏng\r\n</br>\r\nTỷ số nén:12,5:1\r\n\r\nDung tích động cơ:899cc\r\n\r\nMomen xoắn:132 Nm (98.1 lb-ft) @ 9,000 rpm\r\n\r\nHệ thống phun nhiên liệu:Hệ thống phun xăng điện tử\r\nTruyền Động\r\n\r\nHộp số:6 cấp\r\n\r\nTỉ số truyền:1=37/15 2=30/16 3=27/18 4=25/20 5=24/22 6=23/24\r\n\r\nNhông/ sên:Trước 15 răng / Sau 39 răng, xích 525\r\n\r\nLy hợp:Slipper and self-servo wet multiplate clutch with hydraulic control\r\n\r\nKhí thải:Tiêu chuẩn EURO 3'),
('HC001', 'H001', 'CBR 1000rr', 1, 0, 0, 420000000, 'CBR1000RR-2017-Black-Front-WEB.jpg', '2017-11-27 14:24:36', '2017-11-27 14:24:36', '', ''),
('HC002', 'H001', 'CBR 250rr', 1, 0, 0, 168000000, '3.jpg', '2017-11-27 14:28:02', '2017-11-27 14:28:02', '', ''),
('HC003', 'H001', 'CBR 600rr', 0, 0, 0, 160000, 'cbr600rr_2006.jpg', '2017-11-28 10:29:53', '2017-11-28 10:29:53', '', ''),
('HC004', 'H001', 'CBR 150rr', 0, 0, 0, 500000, 'honda-cbr-150r-den.jpg', '2017-11-28 10:29:53', '2017-11-28 10:29:53', '', ''),
('HF005', 'H001', 'Honda F6C', 0, 0, 0, 16000000, '12014hondavalkyriegl1800c2-1397656984.jpg', '2017-11-28 10:30:48', '2017-11-28 10:30:48', '', ''),
('HG006', 'H001', 'Gold Wind', 0, 0, 0, 500000000, 'GoldWingF6B_2016_10.jpg', '2017-11-28 10:30:48', '2017-11-28 10:30:48', '', ''),
('HL-001', 'HL001', 'Harley-Davidson Softail Deluxe', 0, 0, 0, 411172000, 'Harley-1.jpg', '2017-11-30 15:38:39', '2017-11-30 15:38:39', 'Kiểu dáng của Softail® Deluxe sang trọng như chính tên gọi của mẫu xe. Mẫu xe cổ điển luôn nhận được sự tán dương — được sinh ra để nổi bật trên suốt dải Vegas. Giờ đây, bên dưới lớp crôm sáng bóng, bạn sẽ cảm nhận được một cỗ máy hiện đại đích thực. Nhẹ hơn ba mươi mốt pao, dễ điều khiển hơn, công suất lớn và tăng tốc nhanh hơn, lái xe cả ngày mà không hề mệt mỏi. Mọi thứ mà một tay lái kỳ vọng công nghệ đó có thể mang lại. Chính sự kết hợp giữa kiểu dáng cổ điển và công nghệ hiện đại không giống như bất kỳ thứ gì từng xuất hiện trên xa lộ đã tạo nên âm thanh rền vang của động cơ Milwaukee-Eight® 107 V-Twin. Hãy ngồi lên chiếc yên xe mới thật thoải mái và nắm lấy tay lái kiểu pullback. Tận hưởng thôi còn chần chừ gì nữa.', 'KÍCH THƯỚC\r\nChiều dài:	2415mm\r\nChiều cao Yên xe:	680mm\r\nDung tích Bình xăng:	18.9l\r\nTrọng lượng Không tải:	303.0kg\r\nHỆ THỐNG TRUYỀN ĐỘNG\r\nĐộng cơ:	Milwaukee-Eight™ 107\r\nDung tích Xi lanh:	1745cc\r\nMô-men Xoắn Động cơ:	145Nm / 3000rpm\r\nBÁNH XE / LỐP\r\nPhía trước:	Chrome Steel Laced\r\nPhía sau:	Chrome Steel Laced'),
('HL-002', 'HL001', 'Harley-Davidson CVO', NULL, NULL, NULL, 677880000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-1.jpg', '2017-11-30 15:42:28', '2017-12-10 19:29:04', 'ĐỘNG CƠ\r\nĐỘNG CƠ 2 Milwaukee-Eight® 117 ĐƯỜNG KÍNH XI LANH 103.5 mm HÀNH TRÌNH PITTÔNG 114.3 mm ĐỘ DỊCH CHUYỂN 1,923 cc TỶ LỆ NÉN 10.2:1 HỆ THỐNG NHIÊN LIỆU Hệ thống phun xăng điện tử Electronic Sequential Port Fuel Injection (ESPFI) HỆ THỐNG XẢ Kép, có đường chéo\r\nKÍCH THƯỚC\r\nCHIỀU DÀI 2,435 mm CHIỀU CAO CHỖ NGỒI, KHÔNG TẢI 6 695 mm KHOẢNG CÁCH GẦM XE ĐẾN MẶT ĐƯỜNG 130 mm ĐỘ NGHIÊNG (ĐẦU LÁI) (ĐỘ) 26 ĐUÔI XE 170 mm KHOẢNG CÁCH GIỮA HAI CẦU XE 1,625 mm THÔNG SỐ KỸ THUẬT LỐP TRƯỚC 130/60B19 61H THÔNG SỐ KỸ THUẬT LỐP SAU 180/55B18 80H DUNG TÍCH NHIÊN LIỆU 22,7 l DUNG TÍCH DẦU (CÓ BỘ LỌC) 4,7 l TẢI TRỌNG, KHI VẬN CHUYỂN 382 kg TẢI TRỌNG, TRONG TÌNH TRẠNG HOẠT ĐỘNG BÌNH THƯỜNG 398 kg SỨC CHỞ HÀNG HÓA - KHỐI LƯỢNG 0.068 m3\r\nHIỆU SUẤT\r\nPHƯƠNG PHÁP THỬ NGHIỆM MÔ-MEN XOẮN CỦA ĐỘNG CƠ EC 134/2014 MÔ-MEN XOẮN CỦA ĐỘNG CƠ 3 166 Nm MÔ-MEN XOẮN CỦA ĐỘNG CƠ (RPM) 3,500 GÓC NGHIÊNG, PHẢI (ĐỘ) 32 GÓC NGHIÊNG, TRÁI (ĐỘ) 31\r\nHỆ THỐNG TRUYỀN ĐỘNG\r\nHỆ THỐNG TRUYỀN ĐỘNG CHÍNH Xích, tỷ lệ 34/46 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ NHẤT 9.593 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ HAI 6.65 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ BA 4.938 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ TƯ 4 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ NĂM 3.407 TỶ LỆ BÁNH RĂNG (TỔNG THỂ) THỨ SÁU 2.875', 'Khó có thể tìm được chiếc xe đường trường nào đẹp hơn, tốt hơn CVO Road Glide, nếu không phải là phiên bản đặc biệt của chính nó. Vâng, tôi đang muốn giới thiệu tới các bạn chiếc Harley-Davidson CVO Ultra Classic Electra Glide 2013.\r\n\r\nChiếc CVO Ultra Classic Electra Glide 2013 chính là mẫu xe lớn nhất của Harley-Davidson hiện đang được xây dựng. Chiếc xe được phát triển và hoàn thiện với mục tiêu cao nhất là đáp ứng được những nhu cầu cao nhất từ khách hàng.\r\n\r\nVề cơ bản CVO Ultra Classic Electra Glide có thiết kế và trang bị tương tự như phiên bản CVO Road Glide tiêu chuẩn. Ngoài ra, phiên bản đặc biệt này có năm tay sưởi, chốt chuyển số, bàn đạp chân phanh, kính chắn gió… được gắn logo 110th Anniversary, một cách để đánh đấu phiên bản đặc biệt.'),
('HL-003', 'HL001', 'Harley Davidson V-rod Muscle', 0, 0, 0, 874504000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-3.jpg', '2017-11-30 15:43:40', '2017-11-30 15:43:40', 'Chiếc V-Rod Muscle® kế thừa truyền thống xe đua lâu đời và được đưa vào cuộc sống bằng một thiết kế đầy ấn tượng. Bắt đầu với động cơ 1250cc 60° Revolution® V-Twin tản nhiệt bằng chất lỏng nổi bật với cam trên nắp máy kép và công suất 120 mã lực cho đến lốp sau lớn. Đi cùng với các tính năng hiệu suất cao, như phanh đĩa kép Brembo®, hỗ trợ sang số nhanh, tay lái kiểu kéo và phuộc trước hành trình ngược. Bạn sẽ bị thu hút bởi chiếc xe hoàn toàn đậm chất cơ bắp Mỹ, kiểu dáng khí động học. Cái tên nói lên tất cả.', 'KÍCH THƯỚC\r\nChiều dài:	2410mm\r\nChiều cao Yên xe:	705mm\r\nDung tích Bình xăng:	18.9l\r\nTrọng lượng Không tải:	292.0kg\r\nHỆ THỐNG TRUYỀN ĐỘNG\r\nĐộng cơ:	Liquid-cooled, Revolution®, 60° V-Twin\r\nDung tích Xi lanh:	1247cc\r\nMô-men Xoắn Động cơ:	113Nm / 6250rpm\r\nBÁNH XE / LỐP\r\nPhía trước:	Black, 5-Spoke Cast Aluminum / 19\" / Michelin® Scorcher™ ‘11’ 120\r\nPhía sau:	Black, 5-Spoke Cast Aluminum / 18\" / Michelin® Scorcher™ ‘11’ 240'),
('HL-004', 'HL001', 'Harley-Davidson Night Rod', NULL, NULL, NULL, 894700000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-4.jpg', '2017-11-30 15:45:45', '2017-12-10 19:29:25', 'KÍCH THƯỚC\r\nChiều dài:	2440mm\r\nChiều cao Yên xe:	675mm\r\nDung tích Bình xăng:	18.9l\r\nTrọng lượng Không tải:	289.0kg\r\nHỆ THỐNG TRUYỀN ĐỘNG\r\nĐộng cơ:	Liquid-cooled, Revolution®, 60° V-Twin\r\nDung tích Xi lanh:	1247cc\r\nMô-men Xoắn Động cơ:	111Nm / 7250rpm\r\nBÁNH XE / LỐP\r\nPhía trước:	Black, Split 5-Spoke Cast Aluminum with Machined Pinstripe / 19\" / Michelin® Scorcher™ ‘11’ 120\r\nPhía sau:	Black, Split 5-Spoke Cast Aluminum with Machined Pinstripe / 18\" / Michelin® Scorcher™ ‘11’ 240', 'Mẫu xe Night Rod® Special đưa dòng V-Rod® lên một tầm cao mới với phong cách đen toàn phần cho các chi tiết từ trước ra sau như phần đầu xe kiểu dáng khí động học, bánh xe nhôm đúc, tay lái thấp và đuôi lướt. Linh hồn của xe là động cơ Revolution® V-Twin tản nhiệt bằng chất lỏng cùng với phanh đĩa kép Brembo® mang lại hiệu suất và sự an toàn tuyệt đối. Hãy phô bày vẻ đẹp huyền bí của bạn.'),
('HL-005', 'HL001', 'Harley-Davidson Forty-Eight', 0, 0, 0, 611839000, 'bang-gia-xe-moto-harley-davidson-cap-nhat-42016-23470-6.jpg', '2017-11-30 15:52:44', '2017-11-30 15:52:44', 'Lần đầu tiên bình xăng 2,1 gallon mang tính biểu tượng này xuất hiện trên thế giới vàonăm 1948. Tuy nhiên, thế giới chưa từng thấy bình xăng nào nằm ở phía trên cùng như thế này. Đó chính là chiếc Forty-Eight®. Được thiết kế với tư thế lái dũng mãnh của chú chó Bullvà động cơ 1200cc Evolution™ mạnh mẽ. Phuộc trước 49mm lớn, hệ thống treo sau chỉnh tay, bánh xe nhôm đúc với rô-to di động và phanh mạnh mẽ mang đến khả năng kiểm soát tốt hơn và sự thoải mái cho phong cách lái xe đậm chất cá tính này.', 'KÍCH THƯỚC\r\nChiều dài:	2165mm\r\nChiều cao Yên xe:	710mm\r\nDung tích Bình xăng:	7.9l\r\nTrọng lượng Không tải:	247.0kg\r\nHỆ THỐNG TRUYỀN ĐỘNG\r\nĐộng cơ:	Air-cooled, Evolution®\r\nDung tích Xi lanh:	1202cc\r\nMô-men Xoắn Động cơ:	96Nm / 3500rpm\r\nBÁNH XE / LỐP\r\nPhía trước:	Black, Split 9-Spoke Cast Aluminum with Machined Highlights / 16\" / Michelin® Scorcher™ ‘31’ 130\r\nPhía sau:	Black, Split 9-Spoke Cast Aluminum with Machined Highlights / 16\" / Michelin® Scorcher™ ‘31’ 150'),
('K-001', 'K001', 'Kawasaki Ninja H2 2017', 1, 0, 0, 949000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-3.jpg', '2017-11-30 15:59:13', '2017-11-30 15:59:13', 'iêu phẩm Kawasaki Ninja H2 mang trên mình khối động cơ cực mạnh với trang bị hệ thống Turbo Super Charge cho công suất xe lên ngưỡng 200HP cùng thiết kế cực kì hầm hố và góc cạnh. Kawasaki H2 mang dáng dấp 1 quái thú đường đua với dàn áo bóng loáng cùng hàng loạt công nghệ đỉnh cao khiến nó nổi bật hoàn toàn so với mọi chiếc Motor xuất hiện trên đường phố. Giá xe Kawasaki H2 bán với giá 1.065.000.000 đồng khi được nhập khẩu chính hãng về Việt Nam.', 'Hãng xe Nhật vừa chính thức giới thiệu cũng như công bố giá bán 3 phiên bản 2017 của mẫu siêu môtô Ninja H2 tại thị trường Ấn Độ bắt đầu từ 49.780 USD. Phiên bản cải tiến của Kawasaki Ninja H2 được trang bị khối động cơ 1.000cc tăng áp 4 xi-lanh có khả năng sản sinh công suất tối đa 197 mã lực tại 11.000 v/p hoặc 207 mã lực tại 11.000 v/p với Ram Air, mô-men xoắn cực đại ở mức 133,5 Nm tại 10.500 v/p. Trong khi đó thông số của phiên bản H2R 2017 hiện vẫn chưa được hãng xe Nhật công bố.\r\n\r\nĐánh giá xe Kawasaki H2 GT 2017 thông số kỹ thuật và giá bán mới nhất\r\n\r\nCó mặt trên thị trường Ấn Độ, Kawasaki Ninja H2 2017 có giá bán từ 49.780 USD, Ninja H2 Carbon 2017 có giá 59.497 USD và cuối cùng là phiên bản H2R được định giá ở mức 104.344 USD.\r\n\r\nĐánh giá xe Kawasaki H2 GT 2017 thông số kỹ thuật và giá bán mới nhất\r\n\r\nKawasaki Ninja H2 được trình làng lần đầu tiên tại Ấn Độ vào tháng 4/2015, trong khi các phiên bản Ninja H2R và H2 Carbon là lần đầu tiên đến với quốc gia đông dân này. Cung cấp năng lượng cho Ninja H2 2017 là khối đông cơ 1.000cc, 4 xi lanh cho công suất tối đa 198 mã lực hoặc lên tới 208 mã lực với sự hỗ trợ của Ram Air tại vòng tua máy 11.000 vòng/phút và mô-men xoắn 133,5 Nm tại 10.500 vòng/phút. Trong khi đó, Ninja H2R có sức mạnh lên tới 321 mã lực và mô-men xoắn 165 Nm, như vậy bản H2R có công suất gấp đôi so với bản '),
('K-002', 'K001', 'Kawasaki Z1000 2017 ', 0, 0, 0, 409000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-5.png', '2017-11-30 16:00:27', '2017-11-30 16:00:27', 'Kawasaki 1000 mẫu xe phân khối lớn được nhiều người trên thế giới ưa thích và đặc biệt rất được ưa chuộng tại Việt Nam. Mẫu xe với thiết kế thể thao chắc chắn, động cơ mạnh mẽ, bền bỉ với thời gian, thiết kế tỉ mĩ khiến không ít người mong muốn sỡ hữu được một chiếc xe thể thao này.', 'Động cơ : 4 thì, 4 xi lanh 16 van DOHC, FI , ABS\r\nDung tich xy lanh : 1043 cc\r\nMô men cực đại: 111 Nm / 7300 rpm\r\nDầu nhớt động cơ: 4.0 L\r\nHệ thống khởi động : Khởi động bằng điện\r\nTỷ số nén : 11.8 : 1\r\nCông suất tối đa : 142 PS / 10000 rpm\r\nPhanh trước : ABS Đĩa Đôi\r\nChiều rộng (mm): 790\r\nChiều dài (mm) : 2045\r\nChiều cao (mm) : 1055\r\nKhoảng cách giữa 2 trục bánh xe: 1.435 mm\r\nĐộ cao yên xe : 815 mm\r\nKhoảng cách gầm xe: 125 mm\r\nTrọng lượng: 221 kg (ABS)\r\nDung tích bình xăng : 17 lit\r\nBánh xe trước/ sau : 120/70ZR17M/C / 190/50ZR17M/C'),
('K-003', 'K001', 'Kawasaki Z300 2017', 0, 0, 0, 149000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-6.png', '2017-11-30 16:01:25', '2017-11-30 16:01:25', 'Kawasaki Z300 2017 ra đời với mục đích tiếp tục những thành công nhất định mà Kawasaki từng có với mẫu sport-bike Ninja 300. Tại Việt Nam, xe được phân phối chính hãng với giá bán 139 triệu đồng, dễ chịu hơn một chút so với Ninja 300, điều này cho thấy những cỗ máy mang tên Kawasaki đang dần trở nên quen thuộc hơn với nhiều bạn trẻ ở Việt Nam. Điều đó khiến cuộc đua tại phân khúc entry-level ngày càng trở nên nóng hơn với sự góp mặt của những mẫu xe hàng đầu trong phân khúc, mở ra nhiều lựa chọn phong phú cho người tiêu dùng. Về thiết kế bên ngoài, Kawasaki Z300 ABS 2017 không có nhiều thay đổi khi so với phiên bản tiền nhiệm. Mẫu xe đường phố nhà Kawasaki vẫn giữ được nét dữ dằn và hầm hố của ngôn ngữ Sugomi truyền thống.', 'Đặc trưng nhất là bộ đèn pha đôi với thiết kế khá dữ dằn được kế thừa từ mẫu nakedbike hạng trung Z800. Điểm phân biệt bộ đèn pha của Z800 và Z300 nằm ở vị trí đèn xi-nhan, đèn xi-nhan của Z300 được đặt phía trên, trong khi của Z800 được bố trí phía dưới cụm đèn.\r\nCùng với đó là hai yếm bên bình xăng (cánh gà) với tạo hình chữ Z khá to và rộng, khiến cho ngoại hình của Z300 lớn hơn khi so với một số chiếc nakedbike khác trong cùng phân khúc 300 phân khối.\r\n\r\nKawasaki Z300 ABS 2017 được xây dựng dựa trên mẫu xe thể thao Ninja 300, nên sức mạnh của mẫu Z300 ABS 2017 cũng đến từ khối động cơ 2 xy-lanh song song, DOHC, với dung tích 296 phân khối, được làm mát bằng chất lỏng, sản sinh công suất đầu ra tối đa 39 mã lực tại 11.000 vòng/phút và mô-men xoắn cực đại là 27 Nm tại 10.000 vòng/phút kết hợp cùng hộp số 6 cấp độ.\r\n\r\nBình xăng của Z300 ABS có dung tích lên đến 17L, đảm bảo cho những hành trình với nhiều cung đường hiếm cây xăng. Phía trước là hệ thống ghi-đông chắc chắn, tay lái rộng được nâng cao tạo cảm giác thoải mái cho người điều khiển.'),
('K-004', 'K001', 'Kawasaki Ninja ZX-10R ABS 2017', 0, 0, 1, 549000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-10.jpg', '2017-11-30 16:02:33', '2017-11-30 16:02:33', 'Kawasaki ZX10R độ Lightech là thương hiệu đồ chơi cao cấp dành cho các dòng xe PKL rất được ưa chuộng hiện nay. Khi trong thời điểm mà mọi người chú trọng tới cái tên “Rizoma” thì Lightech là 1 trong số lựa chọn thay thế giúp chiếc xe trở nên khác lạ và cá tính hơn. Cùng ngắm qua chiếc ZX10R lên full đồ Lightech.', 'Tên sản phẩm: Kawasaki Ninja ZX-10R 2016\r\nPhanh trước: Kawasaki Intelligent anti-lock Braking (KIBS), 310mm đĩa cánh hoa, bốn piston kép\r\nLoại động cơ: Bốn thì, làm mát bằng nước, DOHC, bốn van mỗi xi-lanh, inline\r\nKhoảng cách trục bánh xe: 1425 mm\r\nĐường kính x hành trình pít tông: 76,0 x 55.0mm\r\nCỡ lốp trước/sau: Trước 120/70 ZR17; 190/55 ZR17\r\nHộp số: 6 cấp\r\nPhuộc sau: Phuộc đơn có thể điều chỉnh được\r\nDài x Rộng x Cao: 2075 mm x 714 mm x 1115 mm\r\nHệ thống cung cấp nhiên liệu: DFI® 47 mm Keihin, hai kim phun cho mỗi xi lanh\r\nDung tích xy-lanh: 998cc\r\nDung tích bình xăng: 17 lít\r\nTỷ số nén: 13.0: 1\r\nPhuộc trước: 43 mm hành trình ngược'),
('K-005', 'K001', 'Kawasaki Z800 2017 (Phiên bản Châu Âu)', 0, 0, 0, 285000000, 'bang-gia-xe-kawasaki-2016-tai-viet-nam-hinh-anh-chi-tiet-7.png', '2017-11-30 16:03:36', '2017-11-30 16:03:36', '', ''),
('KT001', 'H001', 'KTM Duke 125', 0, 0, 1, 50000000, 'KTM-1290-Super-Duke-R-FB.jpg', '2017-11-28 11:23:17', '2017-11-28 11:23:17', '', ''),
('KT002', 'H001', 'KTM Duke 1290', 0, 0, 1, 429000000, '390-duke.jpg', '2017-11-28 11:26:03', '2017-11-28 11:26:03', '', ''),
('SG001', 'S001', 'Suzuki GSX 150', 0, 0, 1, 80000000, 'GSX-R150_YVU_Diagonal.png', '2017-11-28 11:24:32', '2017-11-28 11:24:32', '', ''),
('YR001', 'Y001', 'Yamaha R3', 0, 0, 0, 700000, '2018-Yamaha-YZF-R3-EU-Yamaha-Blue-Studio-002.jpg', '2017-11-27 14:29:35', '2017-11-27 14:29:35', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `image`, `link`) VALUES
(1, 'banner1.jpg', NULL),
(2, 'banner2.jpg', NULL),
(3, 'banner3.jpg', NULL),
(4, 'banner4.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

DROP TABLE IF EXISTS `type_product`;
CREATE TABLE IF NOT EXISTS `type_product` (
  `id_type` varchar(10) NOT NULL,
  `type_name` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id_type`, `type_name`, `image`, `created_at`, `updated_at`) VALUES
('BM001', 'BMW', NULL, '2017-11-30 15:00:26', '2017-11-30 15:00:26'),
('D001', 'Ducati', NULL, '2017-11-30 15:01:03', '2017-11-30 15:01:03'),
('H001', 'Honda', NULL, '2017-11-27 14:17:31', '2017-11-27 14:17:31'),
('HL001', 'Harley Davidson', NULL, '2017-11-30 15:00:26', '2017-11-30 15:00:26'),
('K001', 'Kawasaki', NULL, '2017-11-30 15:02:37', '2017-11-30 15:02:37'),
('S001', 'Suzuki', NULL, '2017-11-30 14:56:53', '2017-11-30 14:56:53'),
('T001', 'Triumph', NULL, '2017-11-30 15:02:00', '2017-11-30 15:02:00'),
('Y001', 'Yamaha', NULL, '2017-11-26 15:59:12', '2017-11-26 15:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(5) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `admin`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Tiến Dũng', 'vodanh11397@gmail.com', 1, '$2y$10$40MNXSmC2.dJx.R9KNJdkezv6OWaWXius6X4sQN27BYNjUYEb4DqG', '0936438822', '389/28 Hoàng Văn Thụ, Phường 2', 'bO8mNbleVkjbiYIex7ClzALZsPKKM4fepFTsU08E5xZ37E8rte4a11h9EYt7', '2017-12-12 12:18:52', '2017-12-12 12:18:52'),
(8, 'Thành Đạt', 'thanhdat@gmail.com', NULL, '$2y$10$3KQ7TeSHDIbBvrKU553i5ey4lLPVt/9Ix864UVxqYoafpV06GU7ee', '0923245643', 'KHTN', 'ev5Qkgn0agt0AGmAoctqAc9y35SDZN80tRhbhtKXjMYMvmwaWrGTcB2Gdvnx', '2017-12-12 12:51:42', '2017-12-12 12:51:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `PK_bill_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `PK_bill_detail_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `PK_bill_detail_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `PK_product_type` FOREIGN KEY (`id_type_product`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
