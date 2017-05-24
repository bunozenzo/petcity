-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 06:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `parent_id`, `status`, `date_create`, `date_update`) VALUES
(1, 'Chó', 0, 1, 1488691466, 1488691466),
(2, 'Mèo', 0, 1, 1488691476, 1488691476),
(3, 'Chim', 0, 1, 1488691497, 1488691497),
(4, 'Cá', 0, 1, 1488691504, 1488691504),
(5, 'Vật nuôi khác', 0, 1, 1488691514, 1488691514),
(7, 'Quần áo cho chó', 1, 1, 1488691616, 1488691616),
(8, 'Vòng cổ, dây dắt, rọ mõm', 1, 1, 1488691627, 1488691627),
(9, 'Vật dụng ăn uống cho chó', 1, 1, 1488691638, 1488691638),
(10, 'Thức ăn', 1, 1, 1488691654, 1488691654),
(11, 'Y tế & thuốc cho chó', 1, 1, 1488692041, 1488692041),
(12, 'Mỹ phẩm & làm đẹp', 1, 1, 1488692055, 1488692055),
(13, 'Dụng cụ vệ sinh', 1, 1, 1488692082, 1488692082),
(14, 'Chuồng, giường, nhà, túi', 1, 1, 1488692092, 1488692092),
(15, 'Đồ chơi, phụ kiện huấn luyện', 1, 1, 1488692124, 1488692124),
(16, 'Chuồng, giường,nhà, túi', 2, 1, 1488692141, 1488692141),
(17, 'Vòng cổ, dây dắt, rọ mõm', 2, 1, 1488692164, 1488692164),
(18, 'Thức ăn', 2, 1, 1488692185, 1488692185),
(19, 'Vật dụng ăn uống', 2, 1, 1488692198, 1488692198),
(20, 'Y tế & thuốc cho mèo', 2, 1, 1488692214, 1488692214),
(21, 'Mỹ phẩm & làm đẹp', 2, 1, 1488692229, 1488692229),
(22, 'Dụng cụ vệ sinh', 2, 1, 1488692240, 1488692240),
(23, 'Quần Áo', 2, 1, 1488692262, 1488692262),
(24, 'Đồ chơi, phụ kiện huấn luyện', 2, 1, 1488692284, 1488692284),
(25, 'Chuồng, lồng và phụ kiện', 3, 1, 1488692315, 1488692315),
(26, 'Thức ăn', 3, 1, 1488692327, 1488692327),
(27, 'Vật dụng ăn uống', 3, 1, 1488692350, 1488692350),
(28, 'Y Tế & Thuốc', 3, 1, 1488692370, 1488692370),
(29, 'Dụng cụ vệ sinh', 3, 1, 1488692404, 1488692404),
(30, 'Thức ăn', 4, 1, 1488692423, 1488692423),
(31, 'Vật dụng ăn uống', 4, 1, 1488692438, 1488692438),
(32, 'Y tế & thuốc', 4, 1, 1488692455, 1488692455),
(33, 'Dụng cụ vệ sinh', 4, 1, 1488692467, 1488692467),
(34, 'Bể cá, bộ lọc & phụ kiện', 4, 1, 1488692480, 1488692480),
(35, 'Sưởi & đèn', 4, 1, 1488692496, 1488692496),
(37, 'Tin tức', 0, 1, 1488692680, 1488692680),
(38, 'Tin khuyến mãi', 37, 1, 1488692725, 1488692725),
(39, 'Dịch vụ Pet Grooming', 37, 1, 1488692744, 1488692744),
(40, 'Tin sự kiện', 37, 1, 1488692755, 1488692755),
(41, 'Thông tin hữu ích cho chó', 37, 1, 1488692765, 1488692765),
(42, 'Thông tin hữu ích cho mèo', 37, 1, 1488692783, 1488692783),
(43, 'Thông tin hữu ích về thú cưng', 37, 1, 1488692797, 1488692797),
(44, 'Câu hỏi thường gặp', 37, 1, 1488692808, 1488692808),
(45, 'Tin tuyển dụng', 37, 1, 1488692818, 1488692818),
(46, 'Thông tin thú cưng bị lạc', 37, 1, 1488692830, 1488692830),
(47, 'Thức ăn', 5, 1, 1490381199, 1490381199),
(48, 'Vật dụng ăn uống', 5, 1, 1490381232, 1490381232),
(49, 'Y tế và thuốc', 5, 1, 1490381250, 1490381250),
(50, 'Dụng cụ vệ sinh', 5, 1, 1490381278, 1490381278),
(51, 'Chuồng lồng và phụ kiện', 5, 1, 1490381303, 1490381303),
(52, '123', 7, 1, 1494698777, 1494698777);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `full_name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `gender`, `birth`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'thanhduy', 'Trần Thanh Duy', 'H-v5zz16HGsQ17HTtp09icDCqpwnZmYF', '$2y$13$Az9KZsY22kF3.dqH0Iru3uXHQb4KB4iq1T5XMVVeDArR4yT0qrXyi', NULL, 'thanhduy@gmail.com', '1', '1993-03-03', 98786345, 'Bắc Giang', 10, 1493823065, 1493823065),
(3, 'HuyHuy', 'Nguyễn Duy Huy', 'iW1o6tw56w6otUqglzp9FlwRIwK9SK5D', '$2y$13$yrvvrbc97XiVhOHwZuFMp.qlm8866wvqTwmJwHW0atFeE5P590VlK', NULL, 'huyhuy@gmail.com', '1', '2017-05-05', 98723456, 'Thanh Hóa', 10, 1493823219, 1493823219),
(4, 'TranCuong', 'Trần Hữu Cương', 'XvCHkD7X4eb-MsbL3EXikSuCTeSM5vMB', '$2y$13$hctQ1GqfZdgkPRE2ez38tekFSXqgryu41lRrxx2QnNzRvS6Eem7OG', NULL, 'TranCuong@gmail.com', '1', '2017-05-10', 987657212, 'Hải Dương', 10, 1493823360, 1493823360),
(5, 'VanTuan', 'Nguyễn Văn Tuấn', 'JxKSS0WpluS5TkFXAxZY1hfSce9g4PXk', '$2y$13$IIhONnUnU1EQsOX0PBv/YOQm1T.gdh0MZE7sA0HMP6dCt91152Ami', NULL, 'VanTuan@gmail.com', '1', '2017-05-20', 987657214, 'Hải Dương', 10, 1493823498, 1493823498),
(6, 'DungSi', 'Đặng Minh Dung', 'WyPq2ipQmTJDPTZdBwM26Nyuq4i3tPQq', '$2y$13$IfMzA8b5J8PR59kx76SI7uMK4Ekf9FayhlMwhoNDECzP/6kGB65tK', NULL, 'Dungsi@gmail.com', '1', '1993-03-03', 987657214, 'Bắc Giang', 10, 1493823588, 1493823588),
(7, 'thanhduy1', 'Trần Thanh Duy', 'Wkb_hktnU4ErXulfc92ImMjLkUK9kHx0', '$2y$13$zKS.cp/aiS49KOA7/Svhh.ix6vhCN1cFpuPjd41lbrlqfRiIphFV.', NULL, 'thanhduy1@gmail.com', '0', '1990-05-24', 987654321, 'Hải Phòng', 10, 1493823655, 1493823655),
(8, 'LeLen', 'Lê Thị Lên ', 'TqnUUASSeadEpelV1HtL6lfyUgMPM8ns', '$2y$13$NOno28D3uEiBo.cWb6DLq.GpU5O1FetiBpsaqESzBuUYXIJAhV8fu', NULL, 'lelen@gmail.com', '0', '1993-03-11', 98765729, 'Thanh Hóa', 10, 1493823721, 1493823721),
(9, 'NgaBaby', 'Nguyễn Duy Huy', 'd9OcoyJ0f_lNTvHN8SAWlJeD9C4DEEGC', '$2y$13$dVd1s4qlKTuINjtas5Rxp.W7e7XCEoBzpI8O36SgcYhENC.V0SFM2', NULL, 'ngababy@gmail.com', '0', '1997-05-18', 987654320, 'Hải Dương', 10, 1493823800, 1493823800),
(10, 'TrungAnh', 'Trinh Trung Anh', 'Qf4i7_j1j9xPqgA6UqdyzzBV7rc2x1Jb', '$2y$13$aBUjgTD68vF5ncLo4n.MQOAR42M2BotxS4frEQBL170.7vYpf71dG', NULL, 'trunganh@gmail.com', '1', '1990-05-03', 987657223, 'Hà Nội', 10, 1493824066, 1493824066),
(11, 'bibonanchoi', 'Đặng Mạnh Bôn', '8OMzGW6Q_8ey-0JgF0JQzgY7WCWl6LUz', '$2y$13$XLvZ7N.9h2wt.qbf/LyVVuWlgOAgriG00Jozzn76.8n7VuLwiS2FS', NULL, 'dangbon313@gmail.com', '1', '1993-05-03', 987432423, 'Hải Dương', 10, 1495120768, 1495120768);

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `del_id` int(11) NOT NULL,
  `del_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`del_id`, `del_name`, `status`, `date_create`, `date_update`) VALUES
(1, 'Giao hàng tận nhà', 1, 1491793296, 1491793296),
(2, 'Chuyển phát nhanh', 1, 1491793307, 1491793307),
(3, 'Dịch vụ quà tặng', 1, 1491793350, 1491793350);

-- --------------------------------------------------------

--
-- Table structure for table `made`
--

CREATE TABLE `made` (
  `made_id` int(11) NOT NULL,
  `made_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `made`
--

INSERT INTO `made` (`made_id`, `made_name`, `status`, `date_create`, `date_update`) VALUES
(1, 'cotton', 1, 1489086082, 1489086082),
(2, 'vải nỉ', 1, 1490202019, 1490202019),
(3, 'vải jean', 1, 1490202100, 1490202100),
(4, 'vải thun', 1, 1490202140, 1490202140),
(5, 'Nhựa cao cấp', 1, 1493824237, 1493824237),
(6, 'Thép không rỉ', 1, 1493824248, 1493824248),
(7, 'Da', 1, 1493824261, 1493824261),
(8, 'mút nhựa', 1, 1493824280, 1493824280),
(9, 'giả da', 1, 1493824317, 1493824317);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1488683607),
('m130524_201442_init', 1488683610),
('m170305_031409_tbl_category', 1488683798),
('m170305_031707_tbl_made', 1488684529),
('m170305_031743_tbl_size', 1488684530),
('m170305_031819_tbl_supplier', 1488684530),
('m170305_031858_tbl_product', 1491747198),
('m170325_201144_tbl_customer', 1491747199),
('m170325_201424_tbl_payment', 1491747202),
('m170325_201538_tbl_deliver', 1491747202),
('m170325_201644_tbl_order', 1491793707),
('m170325_201738_tbl_order_detail', 1491793710),
('m170513_162525_tbl_news', 1495507026);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(11) NOT NULL,
  `new_cat_id` int(11) NOT NULL,
  `new_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_description` text COLLATE utf8_unicode_ci NOT NULL,
  `new_content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_cat_id`, `new_title`, `new_name`, `new_image`, `new_description`, `new_content`, `status`, `date_create`, `date_update`) VALUES
(1, 38, ' Xả hàng Pet- Đón nắng hè', ' Xả hàng Pet- Đón nắng hè', 'http://localhost/petcity/frontend/web/uploads/images/xahang.png', 'Hè đến rồi các bạn ơiiiiiiiiii! Các bạn đã có những dự định vui chơi với Pets của mình trong mùa hè nà và đã chuẩn bị gì cho thú cưng của mình rồi?Để các bạn có thể chuẩn bị hành trang đẩy đủ cho thú cưng của mình trước những tháng hè năng động nhất là chuyến đi chơi dịp lễ 30/4, 1/5, hay để đảm bảo an toàn cho các bé trong những ngày nóng bức của mùa hè, ngoài trang bị những kiến thức, các bạn cũng nên chuẩn bị mua sắc các vật phẩm và đồ dùng cần thiết.', '<p><span data-mce-mark="1"><strong>Xả h&agrave;ng Pet- Đ&oacute;n nắng h&egrave;</strong></span></p>\r\n<p><img src="http://www.petcity.vn/media/news/1904_1200.png" alt="" width="592" height="310" /></p>\r\n<p>&nbsp;<span data-mce-mark="1"><span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????</span></span><span data-mce-mark="1"><span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????</span></span>H&egrave; đến rồi c&aacute;c bạn ơiiiiiiiiii<span class="_5mfr _47e3" data-mce-mark="1"><img class="img" src="https://www.facebook.com/images/emoji.php/v8/fb8/1.5/16/1f31e.png" alt="" width="16" height="16" /><span class="_7oe" data-mce-mark="1">????</span></span>! C&aacute;c bạn đ&atilde; c&oacute; những dự định vui chơi với Pets của m&igrave;nh trong m&ugrave;a h&egrave; n&agrave;y chưa v&agrave; đ&atilde; chuẩn bị cho th&uacute; cưng của m&igrave;nh những g&igrave; rồi?<span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????️</span></span><span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????️</span></span><span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????</span></span><span class="_5mfr _47e3" data-mce-mark="1"><span class="_7oe" data-mce-mark="1">????</span></span></span></span></p>\r\n<p><span data-mce-mark="1">Để c&oacute; thể chuẩn bị h&agrave;nh trang đẩy đủ cho th&uacute; cưng của m&igrave;nh trước những th&aacute;ng h&egrave; năng động, nhất l&agrave; chuyến đi chơi dịp lễ 30/4, 1/5 ????️<span data-mce-mark="1">????️</span>, hay để đảm bảo an to&agrave;n cho c&aacute;c b&eacute; trong những ng&agrave;y n&oacute;ng bức của m&ugrave;a h&egrave;, ngo&agrave;i trang bị những kiến thức( như&nbsp;<a href="http://www.petcity.vn/meo-can-biet-de-bao-ve-thu-cung-ban-trong-ngay-he-nong-buc/a432.html">mẹo cần biết để bảo vệ th&uacute; cưng bạn trong ng&agrave;y h&egrave; n&oacute;ng bức</a>) cũng n&ecirc;n chuẩn bị mua sắc c&aacute;c vật phẩm v&agrave; đồ d&ugrave;ng cần thiết.</span></p>\r\n<p><span data-mce-mark="1">????????Thấu hiểu điều đ&oacute; Petcity mang đến cho c&aacute;c Sen chương tr&igrave;nh :" Xả h&agrave;ng Pet - Đ&oacute;n nắng h&egrave;"<img class="img" src="https://www.facebook.com/images/emoji.php/v8/f36/1.5/16/1f63b.png" alt="" width="16" height="16" /><img class="img" src="https://www.facebook.com/images/emoji.php/v8/f36/1.5/16/1f63b.png" alt="" width="16" height="16" />.&nbsp;H&atilde;y c&ugrave;ng tới Petcity v&agrave; nhận c&aacute;c ưu đ&atilde;i của chương tr&igrave;nh, nhanh l&ecirc;n n&agrave;o c&aacute;c bạn c&oacute; rất nhiều c&aacute;c ưu đ&atilde;i đang chờ c&aacute;c bạn ở b&ecirc;n dưới, c&aacute;c Boss đang mong chờ ở nh&agrave; k&igrave;a mau ch&oacute;ng sắm sửa cho Boss của m&igrave;nh nổi nhất h&egrave; n&agrave;y đi.</span></p>\r\n<p><strong><img class="img" src="https://www.facebook.com/images/emoji.php/v8/fb8/1.5/16/1f31e.png" alt="" width="16" height="16" />Chi tiết chương tr&igrave;nh:</strong></p>\r\n<p><strong><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="emoji emoji1f42d" alt="" data-c="????" /><img class="img" src="https://www.facebook.com/images/emoji.php/v8/fb8/1.5/16/1f31e.png" alt="" width="16" height="16" />Thời gian: 20-26/4</strong></p>\r\n<p><strong><img class="img" src="https://www.facebook.com/images/emoji.php/v8/fb8/1.5/16/1f31e.png" alt="" width="16" height="16" />Địa điểm: To&agrave;n quốc</strong></p>\r\n<p><strong>H&agrave; Nội</strong>:</p>\r\n<p><strong>1/ Số 5A&nbsp;Ng&otilde;&nbsp;Phan Chu Trinh, Ho&agrave;n Kiếm, H&agrave; Nội</strong>Tel: 04 3933 2727</p>\r\n<p><strong>2/ Số 56A Ngọc Kh&aacute;nh, Ba Đ&igrave;nh, H&agrave; Nội </strong>Tel:&nbsp;04 37247462&nbsp;</p>\r\n<p><strong>3/ Số 208 Nguyễn Tr&atilde;i, H&agrave; Đ&ocirc;ng</strong>Tel:&nbsp;04 35537272&nbsp;</p>\r\n<p><strong>4/ 125 Trường Chinh, Q.Thanh Xu&acirc;n</strong>&nbsp;Tel: 04 32181752.&nbsp;</p>\r\n<p><strong>5/ 254 Ng&ocirc; Gia Tự, Quận Long Bi&ecirc;n</strong>Tel:&nbsp;04 36522727 &nbsp;</p>\r\n<p><strong>Tp.HCM</strong>: <strong>250/3 L&yacute; Ch&iacute;nh Thắng, Quận 3&nbsp;</strong>Tel : 08 3526 0717</p>\r\n<p><strong>Hải Ph&ograve;ng</strong>:&nbsp;<strong>44 T&ocirc; Hiệu, Q.L&ecirc; Ch&acirc;n (c&ugrave;ng địa điểm với Si&ecirc;u thị TutiCare) - Tel: 031 3610182</strong></p>\r\n<p><strong>Đ&agrave; Nẵng</strong>:&nbsp;<strong>19 Hải Ph&ograve;ng, Quận Hải Ch&acirc;u - Tel: 0511 3646 727&nbsp;</strong></p>\r\n<p><strong>Danh mục sản phẩm:</strong></p>\r\n<p><span data-mce-mark="1"><strong>&Aacute;p dụng tại Hồ Ch&iacute; Minh</strong></span></p>\r\n<p><img src="http://www.petcity.vn/media/news/1904_gia-soc-hcm.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span data-mce-mark="1"><strong>&Aacute;p dụng tại H&agrave; Nội</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://www.petcity.vn/media/news/1904_gihni.png" alt="" />&nbsp;</p>\r\n<p><span data-mce-mark="1"><strong>&Aacute;p dụng tại Hải Ph&ograve;ng</strong></span></p>\r\n<p><img src="http://www.petcity.vn/media/news/1904_gia-soc-Hai-Phong.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span data-mce-mark="1"><strong>&Aacute;p dụng tại Đ&agrave; Nẵng</strong></span></p>\r\n<p><img src="http://www.petcity.vn/media/news/1904_GSDN.png" alt="" /></p>', 1, 1495538942, 1495538942),
(3, 38, 'Royal Meal-Bữa ăn sang nâng tầm Boss ( Toàn Quốc)', 'Royal Meal-Bữa ăn sang nâng tầm Boss ( Toàn Quốc)', 'http://localhost/petcity/frontend/web/uploads/images/tintuc.png', ' Các Sen đã nghe tin gì chưa, sản phẩm Royal Canin giảm giá lên đến 40%. Vậy còn chần chừ gì nữa hay tới petcity các bạn đã có thể chuẩn bị cho Boss một bữa ăn đậm chất Royal giảm tới 40%.  Hãy nhanh chân lên nào các Sen ơi, số lượng có hạn vì vậy đừng để', '<p><strong>&nbsp;Royal Meal- Bữa ăn sang n&acirc;ng tầm Boss</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://www.petcity.vn/media/news/1304_cvTQ.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img class="img" src="https://www.facebook.com/images/emoji.php/v7/f50/1/16/1f525.png" alt="" width="16" height="16" />????<img class="img" src="https://www.facebook.com/images/emoji.php/v7/f50/1/16/1f525.png" alt="" width="16" height="16" />????<img class="img" src="https://www.facebook.com/images/emoji.php/v7/f50/1/16/1f525.png" alt="" width="16" height="16" />????&nbsp;C&aacute;c Sen đ&atilde; nghe tin g&igrave; chưa, sản phẩm Royal Canin giảm gi&aacute; l&ecirc;n đến&nbsp;<strong>40%</strong>. Vậy c&ograve;n chần chừ g&igrave; nữa hay tới petcity c&aacute;c bạn đ&atilde; c&oacute; thể chuẩn bị cho Boss một bữa ăn đậm chất Royal giảm tới&nbsp;<strong>40%</strong>. &nbsp;H&atilde;y nhanh ch&acirc;n l&ecirc;n n&agrave;o c&aacute;c Sen ơi, số lượng c&oacute; hạn v&igrave; vậy đừng để boss của m&igrave;nh giận v&igrave; đ&atilde; chậm ch&acirc;n đợt Big Sale Royal Canin của Petcity.</p>\r\n<p>Thời gian: 11/4-30/4 (&nbsp;<img class="img" src="https://www.facebook.com/images/emoji.php/v7/fdc/1/16/26a0.png" alt="" width="16" height="16" />Số lượng c&oacute; hạn, chương tr&igrave;nh c&oacute; thể kết th&uacute;c sớm hơn<img class="img" src="https://www.facebook.com/images/emoji.php/v7/fdc/1/16/26a0.png" alt="" width="16" height="16" />)</p>\r\n<p><img class="img" src="https://www.facebook.com/images/emoji.php/v7/fdc/1/16/26a0.png" alt="" width="16" height="16" />&nbsp;Mỗi kh&aacute;ch h&agrave;ng chỉ được mua tối đa 2 sản phẩm/ bill<img class="img" src="https://www.facebook.com/images/emoji.php/v7/fdc/1/16/26a0.png" alt="" width="16" height="16" /></p>\r\n<p>Địa điểm:&nbsp;<strong>To&agrave;n bộ c&aacute;c showroom của Petcity tr&ecirc;n to&agrave;n quốc<br /></strong></p>\r\n<ul>\r\n<li><strong>H&agrave; Nội</strong>:</li>\r\n</ul>\r\n<p><strong>1/ Số 5A&nbsp;Ng&otilde;&nbsp;Phan Chu Trinh, Ho&agrave;n Kiếm, H&agrave; Nội (rẽ v&agrave;o từ số 51 Phan Chu Trinh, Ho&agrave;n Kiếm, HN)&nbsp;</strong>Tel: 04 3933 2727</p>\r\n<p><strong>2/ Số 56A Ngọc Kh&aacute;nh, Ba Đ&igrave;nh, H&agrave; Nội (c&ugrave;ng địa điểm với Si&ecirc;u thị TutiCare)&nbsp;</strong>Tel:&nbsp;04 37247462&nbsp;</p>\r\n<p><strong>3/ Số 208 Nguyễn Tr&atilde;i, H&agrave; Đ&ocirc;ng (gần Đại học HN - c&ugrave;ng địa điểm với Si&ecirc;u thị TutiCare)&nbsp;</strong>Tel:&nbsp;04 35537272&nbsp;</p>\r\n<p><strong>4/ 125 Trường Chinh, Q.Thanh Xu&acirc;n</strong>&nbsp;Tel: 04 32181752. (New)</p>\r\n<p><strong>5/ 254 Ng&ocirc; Gia Tự, Quận Long Bi&ecirc;n&nbsp;(c&ugrave;ng địa điểm với Si&ecirc;u thị TutiCare)&nbsp;</strong>Tel:&nbsp;04 36522727 &nbsp;</p>\r\n<ul>\r\n<li><strong>Tp.HCM</strong>: &nbsp;<strong>&nbsp;250/3 L&yacute; Ch&iacute;nh Thắng, Quận 3 (g&oacute;c giao với Nguyễn Th&ocirc;ng)&nbsp;</strong>Tel : 08 3526 0717</li>\r\n</ul>\r\n<ul>\r\n<li><strong>Đ&agrave; Nẵng</strong>:&nbsp;<strong>&nbsp; 19 Hải Ph&ograve;ng, Quận Hải Ch&acirc;u - Tel: 0511 3646 727&nbsp;</strong></li>\r\n<li><strong><strong>Hải Ph&ograve;ng</strong>:&nbsp;</strong><strong><strong>&nbsp;44 T&ocirc; Hiệu, Q.L&ecirc; Ch&acirc;n (c&ugrave;ng địa điểm với Si&ecirc;u thị TutiCare) - Tel: 031 3610182</strong></strong></li>\r\n</ul>\r\n<p>----------------------------------------------------------</p>\r\n<p>C&aacute;c sản phẩm được giảm gi&aacute; 40% &nbsp;tại&nbsp;<strong>Petcity</strong></p>', 1, 1495533509, 1495533509);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_ship` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_ship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_ship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_ship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_id` int(11) NOT NULL,
  `deliver_id` int(11) NOT NULL,
  `order_amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `status` smallint(6) DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `name`, `email`, `phone`, `address`, `name_ship`, `email_ship`, `phone_ship`, `address_ship`, `request`, `payment_id`, `deliver_id`, `order_amount`, `status`, `date_create`, `date_update`) VALUES
(11, NULL, 'Đặng Mạnh Bôn', 'dangbon313@gmail.com', '0969388193', '0969388193', 'Đặng Mạnh Bôn', 'dangbon313@gmail.com', '0969388193', '0969388193', 'nahnh', 2, 1, '270000', 1, 1494951376, 1494951376),
(12, NULL, 'Đặng Minh Dũng', 'dungdm@gmail.com', '0973234567', 'Hải Dương', 'Đặng Minh Dũng', 'dungdm@gmail.com', '0973234567', 'Hải Dương', 'Nhanh', 3, 2, '45000', 1, 1494951450, 1494951450),
(13, NULL, 'Trinh Huy Ngọc', 'ngoc@gmail.com', '012312428', 'Hà Nội', 'Trinh Huy Ngọc', 'ngoc@gmail.com', '012312428', 'Hà Nội', 'Chậm', 2, 3, '234000', 1, 1494951562, 1494951562),
(14, NULL, 'Đặng Manh bon', 'dangbon@gmail.com', '1231232423', 'Hai duong', 'Đặng Manh bon', 'dangbon@gmail.com', '1231232423', 'Hai duong', 'giao nhanh', 1, 1, '90000', 1, 1495591335, 1495591335);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_detail_qty` int(11) NOT NULL,
  `pro_amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `pro_id`, `pro_price`, `order_detail_qty`, `pro_amount`, `status`) VALUES
(13, 11, 34, '100000', 1, '100000', 1),
(14, 11, 33, '100000', 1, '100000', 1),
(15, 11, 32, '100000', 1, '100000', 1),
(16, 12, 29, '50000', 1, '50000', 1),
(17, 13, 33, '100000', 1, '100000', 1),
(18, 13, 25, '60000', 1, '60000', 1),
(19, 13, 34, '100000', 1, '100000', 1),
(20, 14, 32, '100000', 1, '100000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_name`, `status`, `date_create`, `date_update`) VALUES
(1, 'Chuyển khoản qua ngân hàng', 1, 1491793243, 1491793243),
(2, 'Thanh toán bằng thẻ ATM nội địa', 1, 1491793257, 1491793257),
(3, 'Thanh toán trực tiếp', 1, 1491793269, 1491793269),
(4, 'Xuất hóa đơn tài chính', 1, 1491793280, 1491793280);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_sale_off` int(11) DEFAULT NULL,
  `pro_cat_id` int(11) NOT NULL,
  `pro_supplier_id` int(11) NOT NULL,
  `pro_made_id` int(11) NOT NULL,
  `pro_size_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `begin_date_sale_off` date DEFAULT NULL,
  `end_date_sale_off` date DEFAULT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_image`, `pro_image1`, `pro_image2`, `pro_price`, `pro_sale_off`, `pro_cat_id`, `pro_supplier_id`, `pro_made_id`, `pro_size_id`, `description`, `status`, `begin_date_sale_off`, `end_date_sale_off`, `date_create`, `date_update`) VALUES
(18, 'Áo Thể Thao Adidog', 'http://localhost/petcity/frontend/web/uploads/images/89_ao_the_thao_adidog.jpg', 'http://localhost/petcity/frontend/web/uploads/images/89_3_c.jpg', 'http://localhost/petcity/frontend/web/uploads/images/89_2_quan_ao_chi_meo_adidog03.jpg', '100000', 10, 7, 2, 2, 1, '<p><a href="http://www.petcity.vn/ao-the-thao-adidog/p89.html"><strong>&Aacute;o Thể Thao Adidog cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+ <a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>&Aacute;o Thể Thao Adidog</strong> </em></a>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, ph&ugrave; hợp cho c&uacute;n y&ecirc;u nh&agrave; bạn</p>\r\n<p>+ Nhiều size cho mọi cỡ,</p>\r\n<p>Nhiều size v&agrave; nhiều m&agrave;u cho bạn lựa chọn</p>\r\n<p><strong>C&aacute;ch chọn size cho th&uacute; cưng</strong></p>\r\n<p>Size &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D&agrave;nh cho c&uacute;n c&oacute; chiều d&agrave;i lưng từ</p>\r\n<p>Size S:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16-20cm</p>\r\n<p>Size 1: &nbsp; &nbsp; &nbsp; 27K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18-22cm &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n<p>Size 2: &nbsp; &nbsp; &nbsp; 29K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20-24cm</p>\r\n<p>Size 3: &nbsp; &nbsp; &nbsp; &nbsp;31K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22-26cm&nbsp;</p>\r\n<p>Size 4: &nbsp; &nbsp; &nbsp; &nbsp;33K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;24-29cm</p>\r\n<p>Size 5: &nbsp; &nbsp; &nbsp; &nbsp;35K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;26-32cm</p>\r\n<p>Size 6: &nbsp; &nbsp; &nbsp; &nbsp;37K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 28-35cm</p>\r\n<p>Size 7: &nbsp; &nbsp; &nbsp; &nbsp; 39K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;30-37cm</p>\r\n<p>Size 8: &nbsp; &nbsp; &nbsp; &nbsp; 42K &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;32-41cm</p>\r\n<p>Size 9: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;45K &nbsp; &nbsp; &nbsp; &nbsp; 34-43&nbsp; cm</p>\r\n<p>Size 10: &nbsp; &nbsp; &nbsp; &nbsp; 47K &nbsp; &nbsp; &nbsp; 36-47cm</p>', 0, '2017-05-15', '2017-06-30', 1494935073, 1494935073),
(19, 'Áo Con Bọ', 'http://localhost/petcity/frontend/web/uploads/images/92_1_92_ao_con_bo.jpg', 'http://localhost/petcity/frontend/web/uploads/images/92_1_92_ao_con_bo.jpg', 'http://localhost/petcity/frontend/web/uploads/images/92_1_92_ao_con_bo.jpg', '80000', 10, 7, 3, 2, 1, '<p><a href="http://www.petcity.vn/ao-con-bo/p92.html"><strong>&Aacute;o Con Bọ cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+ <a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>&Aacute;o Con Bọ cho ch&oacute; m&egrave;o</strong></em></a>, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, ph&ugrave; hợp cho c&uacute;n y&ecirc;u nh&agrave; bạn</p>\r\n<p>+ Nhiều size cho mọi cỡ</p>\r\n<p><strong>Nhiều size cho bạn lựa chọn</strong></p>\r\n<p>&nbsp;</p>\r\n<table border="0" cellspacing="0" cellpadding="0"><colgroup><col width="308" /><col width="90" /></colgroup>\r\n<tbody>\r\n<tr>\r\n<td class="xl24" width="308" height="17">Pet- &Aacute;o Con bọ size2</td>\r\n<td class="xl25" width="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 28,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl24" height="17">Pet- &Aacute;o Con bọ size5</td>\r\n<td class="xl25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 34,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl24" height="17">Pet- &Aacute;o Con bọ size9</td>\r\n<td class="xl25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 44,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl24" height="17">Pet- &Aacute;o Con bọ sizeS</td>\r\n<td class="xl25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 24,000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>C&aacute;ch chọn size cho th&uacute; cưng</strong></p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>S</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>1</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>9</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>&lt;800g</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>&lt;1kg</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3-4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4-5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5-6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6-7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7-8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>8-10</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>9-11</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>D&agrave;i lưng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>20cm</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>22</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>24</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>36</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>39</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>42</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng Ngực</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>27-31</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>30-35</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>35-40</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>38-44</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>41-46</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>43-49</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>46-52</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>50-57</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>54-63</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng cổ</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>14-16</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>16-19</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>19-22</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>22-26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26-30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30-34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34-39</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>36-41</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>38-43</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, '2017-05-15', '2017-06-22', 1494935154, 1494935154),
(20, 'Áo nón túi CityZoo cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1307_0_untitled15.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1307_0_untitled15.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1307_0_untitled15.jpg', '100000', 20, 7, 6, 1, 1, '<p><a href="http://www.petcity.vn/ao-non-tui-cho-cho-meo/p1307.html"><strong>&Aacute;o n&oacute;n t&uacute;i cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p><strong><a href="http://www.petcity.vn/quan-ao/c172.html"><em><strong>&Aacute;o n&oacute;n t&uacute;i</strong> </em></a></strong>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, ph&ugrave; hợp cho c&uacute;n y&ecirc;u nh&agrave; bạn</p>\r\n<p>+ Nhiều size cho mọi cỡ, b&aacute;n rẻ nhất tại PetCity.vn</p>\r\n<p><strong>Nhiều size v&agrave; nhiều m&agrave;u cho bạn lựa chọn&nbsp;&nbsp;&nbsp; <br /></strong></p>\r\n<p><strong>Size s: gi&aacute; 42K chiều d&agrave;i 23cm</strong></p>\r\n<p><strong>Size M: 47K chiều d&agrave;i 28cm</strong></p>\r\n<p><strong>Size L: Gi&aacute; 54K chiều d&agrave;i 33cm</strong></p>', 1, '2017-05-15', '2017-06-30', 1494935238, 1494935238),
(21, 'Áo sơ mi in hình', 'http://localhost/petcity/frontend/web/uploads/images/1739_img_3920.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1739_img_3920.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1739_img_3920.jpg', '40000', 25, 7, 2, 3, 1, '<p>&lt;div class="content_tab"&gt;<br /> &lt;div id="motachitiet" class="cf current"&gt;<br /> &lt;p&gt;&lt;a href="/ao-so-mi-in-hinh/p1739.html"&gt;&lt;strong&gt;&lt;span style="font-size: small;"&gt;&Aacute;o sơ mi in h&igrave;nh:&lt;/span&gt;&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;<br />&lt;p&gt;Chất liệu: cotton mềm mịn, tho&aacute;ng m&aacute;t&lt;/p&gt;<br />&lt;p&gt;M&agrave;u sắc: trẻ trung&lt;/p&gt;<br />&lt;p&gt;Ph&ugrave; hợp với ch&oacute; m&egrave;o lớn b&eacute;&lt;/p&gt;<br />&lt;p&gt;&lt;em&gt;&lt;strong&gt;Chi tiết gi&aacute; c&aacute;c size:&lt;/strong&gt;&lt;/em&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;" data-mce-mark="1"&gt;- Size 1: 35.000&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;- Size 2: 38.000&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;- Size 3: 41.000&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;- Size 4: 44.000&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 5: 47.000&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 6: 50.000&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 7: 53.000&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 8: 56.000&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 9: 59.000&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;span style="font-size: small;"&gt;- Size 10: 62.000&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;<br /> &lt;/div&gt;&lt;!--motachitiet--&gt;<br /> &lt;div id="thongtinhang" class="cf"&gt;&lt;p&gt;&lt;span style="font-size: small;"&gt;&lt;strong&gt;TH&Ocirc;NG TIN THƯƠNG HIỆU&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-family: arial,helvetica,sans-serif; font-size: small;"&gt;&lt;strong&gt;&lt;a href="/"&gt;PetCity.vn&lt;/a&gt;&lt;/strong&gt; được ra đời với sứ mệnh cung cấp tất cả c&aacute;c sản phẩm trọn g&oacute;i d&agrave;nh cho th&uacute; cưng: từ thức ăn, quần &aacute;o, đồ d&ugrave;ng, đồ chơi, mỹ phẩm, chuồng trại v&agrave; linh phụ kiện kh&aacute;c&hellip;đến từ c&aacute;c nh&agrave; sản xuất uy t&iacute;n tr&ecirc;n thế giới như: ABC, Forcans, Royal Canin, Whiskas, Davis, Virbac, PetAg, Fido&rsquo;s, Pedigree&hellip;&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;span style="font-family: arial,helvetica,sans-serif; font-size: small;"&gt;PetCity sẽ phục vụ cho th&uacute; cưng của bạn lu&ocirc;n khỏe mạnh v&agrave; đ&aacute;ng y&ecirc;u, khiến cho kh&aacute;ch h&agrave;ng thật sự h&agrave;i l&ograve;ng với chất lượng sản phẩm v&agrave; dịch vụ của ch&uacute;ng t&ocirc;i.&lt;/span&gt;&lt;/p&gt; &lt;/div&gt;&lt;!--thong tin hang--&gt;<br /> &lt;div id="xemvideo" class="cf"&gt;<br /> <br /> &lt;/div&gt;&lt;!--xem video--&gt;<br /> &lt;/div&gt;</p>', 1, '2017-05-15', '2017-06-10', 1494935437, 1494935437),
(22, 'Áo phông in hình', 'http://localhost/petcity/frontend/web/uploads/images/250_1738_img_3947.jpg', 'http://localhost/petcity/frontend/web/uploads/images/250_1738_img_3947.jpg', 'http://localhost/petcity/frontend/web/uploads/images/250_1738_img_3947.jpg', '33000', 10, 7, 1, 1, 1, '<p><a href="http://www.petcity.vn/ao-phong-in-hinh/p1738.html"><strong>&Aacute;o ph&ocirc;ng in h&igrave;nh:</strong></a></p>\r\n<p>Chất liệu: cotton mềm mịn, tho&aacute;ng m&aacute;t</p>\r\n<p>M&agrave;u sắc: trẻ trung</p>\r\n<p>Ph&ugrave; hợp với ch&oacute; m&egrave;o lớn b&eacute;</p>\r\n<p><em><strong>Chi tiết gi&aacute; c&aacute;c size:</strong></em></p>\r\n<p>- Size 1: 33.000</p>\r\n<p>- Size 2: 35.000</p>\r\n<p>- Size 3: 37.000</p>\r\n<p>- Size 4: 39.000</p>\r\n<p>- Size 5: 41.000</p>\r\n<p>- Size 6: 43.000</p>\r\n<p>- Size 7: 45.000</p>\r\n<p>- Size 8: 47.000</p>\r\n<p>- Size 9: 49.000</p>\r\n<p>- Size 10: 51.000</p>', 1, '2017-05-15', '2017-06-20', 1494935521, 1494935521),
(23, 'Áo Polo có mũ', 'http://localhost/petcity/frontend/web/uploads/images/1737_img_3762.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1737_img_3762.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1737_img_3762.jpg', '38000', NULL, 7, 2, 1, 1, '<p><a href="http://www.petcity.vn/ao-polo-co-mu/p1737.html"><strong>&Aacute;o Polo c&oacute; mũ:</strong></a></p>\r\n<p>Chất liệu: cotton mềm mịn, tho&aacute;ng m&aacute;t</p>\r\n<p>M&agrave;u sắc: trẻ trung</p>\r\n<p>Ph&ugrave; hợp với ch&oacute; m&egrave;o lớn b&eacute;</p>\r\n<p><em><strong>G&iacute;a chi tiết c&aacute;c size:</strong></em></p>\r\n<p>- Size 1: 38.000</p>\r\n<p><span data-mce-mark="1">- Size 2: 40.000</span></p>\r\n<p>- Size 3: 42.000</p>\r\n<p>- Size 4: 44.000</p>\r\n<p><span class="text_exposed_show">- Size 5: 46.000</span></p>\r\n<p><span class="text_exposed_show">- Size 6: 48.000</span></p>\r\n<p><span class="text_exposed_show">- Size 7: 50.000</span></p>\r\n<p><span class="text_exposed_show">- Size 8: 52.000</span></p>\r\n<p><span class="text_exposed_show">- Size 9: 54.000</span></p>\r\n<p><span class="text_exposed_show">- Size 10: 56.000</span></p>', 1, NULL, NULL, 1494935581, 1494935581),
(24, 'Áo phao túi có mũ cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1688_10.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1688_10.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1688_10.jpg', '5000', 10, 7, 6, 2, 1, '<p><a href="http://www.petcity.vn/ao-phao-tui-co-mu-cho-cho-meo/p1688.html"><strong>&Aacute;o phao t&uacute;i c&oacute; mũ cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+<a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong> &Aacute;o phao d&agrave;y</strong></em></a> cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu cực kỳ d&agrave;y dặn, giữ ấm cho th&acirc;n nhiệt th&uacute; cưng nh&agrave; bạn</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, c&oacute; b&ocirc;ng b&ecirc;n trong</p>\r\n<p>+ Nhiều size cho mọi cỡ, Size 1-10</p>\r\n<p>Nhiều size v&agrave; nhiều m&agrave;u cho bạn lựa chọn</p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch chọn size cho th&uacute; cưng</strong></p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>S</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>1</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>9</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>&lt;800g</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>&lt;1kg</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3-4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4-5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5-6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6-7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7-8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>8-10</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>9-11</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>D&agrave;i lưng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>20cm</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>22</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>24</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>36</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>39</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>42</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng Ngực</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>27-31</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>30-35</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>35-40</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>38-44</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>41-46</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>43-49</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>46-52</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>50-57</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>54-63</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng cổ</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>14-16</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>16-19</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>19-22</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>22-26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26-30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30-34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34-39</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>36-41</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>38-43</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, '2017-05-15', '2017-05-31', 1494935671, 1494935671),
(25, 'Áo ấm hình thú cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1687_9.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1687_9.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1687_9.jpg', '60000', 10, 7, 5, 3, 1, '<p><a href="http://www.petcity.vn/ao-am-hinh-thu-cho-cho-meo/p1687.html"><strong>&Aacute;o ấm h&igrave;nh th&uacute; cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+<a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong> &Aacute;o ấm d&agrave;y</strong></em></a> cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu cực kỳ d&agrave;y dặn, giữ ấm cho th&acirc;n nhiệt th&uacute; cưng nh&agrave; bạn</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, c&oacute; b&ocirc;ng b&ecirc;n trong</p>\r\n<p>+ Nhiều size cho mọi cỡ, Size 1-10</p>\r\n<table border="0" cellspacing="0" cellpadding="0"><colgroup><col width="215" /><col width="48" /><col width="91" /></colgroup>\r\n<tbody>\r\n<tr>\r\n<td class="xl70" width="215" height="29">&Aacute;o h&igrave;nh th&uacute; size 1</td>\r\n<td class="xl67" align="right" width="48">1</td>\r\n<td class="xl68" width="91">&nbsp;&nbsp; 66.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 2</td>\r\n<td class="xl67" align="right">2</td>\r\n<td class="xl68">&nbsp; &nbsp;71.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 3</td>\r\n<td class="xl67" align="right">3</td>\r\n<td class="xl68">&nbsp;&nbsp; 76.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 4</td>\r\n<td class="xl67" align="right">4</td>\r\n<td class="xl68">&nbsp; &nbsp;81.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 5</td>\r\n<td class="xl67" align="right">5</td>\r\n<td class="xl68">&nbsp;&nbsp; 86.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 6</td>\r\n<td class="xl67" align="right">6</td>\r\n<td class="xl68">&nbsp; &nbsp;91.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 7</td>\r\n<td class="xl67" align="right">7</td>\r\n<td class="xl68">&nbsp;&nbsp; 96.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 8</td>\r\n<td class="xl67" align="right">8</td>\r\n<td class="xl68">&nbsp; &nbsp;101.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 9</td>\r\n<td class="xl67" align="right">9</td>\r\n<td class="xl68">106.000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" height="29">&Aacute;o h&igrave;nh th&uacute; size 10</td>\r\n<td class="xl69" align="right">10</td>\r\n<td class="xl68">111.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, '2017-05-15', '2017-05-31', 1494935755, 1494935755),
(26, 'Giày bata cho chó', 'http://localhost/petcity/frontend/web/uploads/images/1681_gi__y_bata______23497_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1681_gi__y_bata______23497_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1681_gi__y_bata______23497_zoom.png', '80000', 5, 7, 2, 1, 3, '<p><a href="http://www.petcity.vn/giay-bata-cho-cho/p1681.html"><strong>Gi&agrave;y bata cho ch&oacute;</strong></a></p>\r\n<p>+ <a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>Giầy bata cho ch&oacute;</strong></em></a>, th&uacute; cưng của bạn sẽ thật s&agrave;nh điệu</p>\r\n<p>+ Ngộ nghĩnh với giầy thời trang đẹp, đầy m&agrave;u sắc</p>\r\n<p>+ Gi&uacute;p th&uacute; cưng nh&agrave; bạn đi lại thoải m&aacute;i nhất, sạch sẽ nhất, mang lại sự s&agrave;nh điệu, thời trang, bắt mắt</p>\r\n<p>c&oacute; 3 size : S: 80k cho c&uacute;n 1,2kg</p>\r\n<p>Size M: 85k cho c&uacute;n 2-3kg</p>\r\n<p>Size L : 90k cho c&uacute;n 4-6kg</p>', 1, '2017-05-14', '2017-05-31', 1494935820, 1494935820),
(27, 'Áo nỉ con Vịt cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1660_ao_thu_hinh_con_vit_tong_hop__49191_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1660_ao_thu_hinh_con_vit_tong_hop__49191_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1660_ao_thu_hinh_con_vit_tong_hop__49191_zoom.png', '39000', 10, 7, 4, 4, 1, '<p><a href="http://www.petcity.vn/ao-ni-con-vit-cho-cho-meo/p1660.html"><strong>&Aacute;o nỉ con Vịt cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+<a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong> &Aacute;o nỉ d&agrave;y con vịt</strong></em></a>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu cực kỳ d&agrave;y dặn, giữ ấm cho th&acirc;n nhiệt th&uacute; cưng nh&agrave; bạn</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da với h&igrave;nh ch&uacute; vịt ngộ nghĩnh</p>\r\n<p>+ &Aacute;o size 10 d&agrave;nh cho ch&uacute; c&uacute;n từ 1-12kg<strong><br /></strong></p>\r\n<p>Size 1: 50k cho c&uacute;n &lt;1kg</p>\r\n<p>Size 2: 53k cho c&uacute;n 1-2kg</p>\r\n<p>Size 3: 56k cho c&uacute;n 1,5-3kg</p>\r\n<p>Size 4: 59k cho c&uacute;n 3-4kg</p>\r\n<p>Size 5: 63k cho c&uacute;n 4kg</p>\r\n<p>Size 6: 65k cho c&uacute;n miu 4.5-5kg</p>\r\n<p>Size 7 : 68k cho c&uacute;n 6-7kg</p>\r\n<p>Size 8: 75k cho c&uacute;n 7-8kg</p>\r\n<p>Size 9: 78K</p>\r\n<p>Size 10: 82K</p>\r\n<p>...................................................</p>\r\n<p><strong>Gi&aacute; b&aacute;n tại HN: tăng mỗi size 3k nh&eacute;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch chọn size cho th&uacute; cưng</strong></p>\r\n<p>&nbsp;</p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>S</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>1</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>9</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>&lt;800g</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>&lt;1kg</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3-4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4-5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5-6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6-7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7-8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>8-10</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>9-11</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>D&agrave;i lưng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>20cm</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>22</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>24</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>36</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>39</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>42</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng Ngực</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>27-31</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>30-35</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>35-40</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>38-44</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>41-46</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>43-49</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>46-52</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>50-57</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>54-63</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng cổ</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>14-16</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>16-19</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>19-22</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>22-26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26-30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30-34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34-39</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>36-41</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>38-43</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, '2017-05-15', '2017-05-31', 1494935921, 1494935921),
(28, 'Áo nỉ con trâu cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1658_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1658_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1658_1.png', '50000', 10, 7, 5, 1, 1, '<p><a href="http://www.petcity.vn/ao-ni-con-trau-cho-cho-meo/p1658.html"><strong>&Aacute;o nỉ con tr&acirc;u cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+<a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong> &Aacute;o nỉ d&agrave;y con tr&acirc;u </strong></em></a>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu cực kỳ d&agrave;y dặn, giữ ấm cho th&acirc;n nhiệt th&uacute; cưng nh&agrave; bạn</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da với h&igrave;nh ch&uacute; vịt ngộ nghĩnh</p>\r\n<p>+ &Aacute;o size 10 d&agrave;nh cho ch&uacute; c&uacute;n từ 1-12kg<strong><br /></strong></p>\r\n<p>Size 1: 50k cho c&uacute;n &lt;1kg</p>\r\n<p>Size 2: 53k cho c&uacute;n 1-2kg</p>\r\n<p>Size 3: 56k cho c&uacute;n 1,5-3kg</p>\r\n<p>Size 4: 59K</p>\r\n<p>Size 5 &nbsp;63K</p>\r\n<p>Size 6 &nbsp;65K</p>\r\n<p>Size 7 &nbsp;68K</p>\r\n<p>Size 8 &nbsp;75K</p>\r\n<p>Size 9 &nbsp; 78K</p>\r\n<p>Size 10 &nbsp;82K</p>', 1, '2017-05-15', '2017-05-31', 1494935983, 1494935983),
(29, 'Áo nỉ con khỉ cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1657_dsc02530.png', 'http://localhost/petcity/frontend/web/uploads/images/1657_dsc02530.png', 'http://localhost/petcity/frontend/web/uploads/images/1657_dsc02530.png', '50000', 10, 7, 6, 2, 1, '<p><a href="http://www.petcity.vn/ao-ni-con-khi-cho-cho-meo/p1657.html"><strong>&Aacute;o nỉ con khỉ cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+<a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong> &Aacute;o nỉ d&agrave;y </strong></em></a>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</p>\r\n<p>+ Chất liệu cực kỳ d&agrave;y dặn, giữ ấm cho th&acirc;n nhiệt th&uacute; cưng nh&agrave; bạn</p>\r\n<p>+ Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da với h&igrave;nh ch&uacute; vịt ngộ nghĩnh</p>\r\n<p>+ &Aacute;o size 10 d&agrave;nh cho ch&uacute; c&uacute;n từ 1-12kg<strong><br /></strong></p>\r\n<p>Size 1: 50k cho c&uacute;n &lt;1kg</p>\r\n<p>Size 2: 53k cho c&uacute;n 1-2kg</p>\r\n<p>Size 3: 56k cho c&uacute;n 1,5-3kg</p>\r\n<p>Size 4: 59k cho c&uacute;n 3-4kg</p>\r\n<p>Size 5: 63k cho c&uacute;n 4kg</p>\r\n<p>Size 6: 65k cho c&uacute;n miu 4.5-5kg</p>\r\n<p>Size 7 : 69k cho c&uacute;n 6-7kg</p>\r\n<p>Size 8: 75k cho c&uacute;n 7-8kg</p>\r\n<p>Size 9: 78K</p>\r\n<p>Size 10: 82K</p>\r\n<p>........................</p>', 1, '2017-05-15', '2017-05-31', 1494936073, 1494936073),
(30, 'Nón tai bèo cho thú cưng', 'http://localhost/petcity/frontend/web/uploads/images/1579_0_non_tai_beo__63810_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1579_0_non_tai_beo__63810_zoom.png', 'http://localhost/petcity/frontend/web/uploads/images/1579_0_non_tai_beo__63810_zoom.png', '22000', 10, 7, 5, 3, 1, '<p><a href="http://www.petcity.vn/non-tai-beo-cho-thu-cung/p1579.html"><strong>N&oacute;n tai b&egrave;o cho th&uacute; cưng</strong></a></p>\r\n<p><a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>N&oacute;n Thời Trang cho ch&oacute; m&egrave;o</strong></em></a>, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp, chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, nhiều size cho mọi cỡ.</p>\r\n<p>Chiếc mũ tạo cho th&uacute; cưng nh&agrave; bạn tr&ocirc;ng dễ thương hơn khi đi chơi</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gi&aacute; HCM- Gi&aacute; HN</p>\r\n<table border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="xl24" width="158" height="29">Size S</td>\r\n<td class="xl24" width="51">20k</td>\r\n<td class="xl24" width="64">25k</td>\r\n</tr>\r\n<tr>\r\n<td class="xl25" height="29">Size M</td>\r\n<td class="xl26">22k</td>\r\n<td class="xl25">27k</td>\r\n</tr>\r\n<tr>\r\n<td class="xl25" height="29">Size L</td>\r\n<td class="xl26">25k</td>\r\n<td class="xl25">30k</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, '2017-05-15', '2017-05-31', 1494936167, 1494936167),
(31, 'Quần Chip cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1555_0_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1555_0_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1555_0_1.png', '23000', NULL, 7, 7, 2, 1, '<p><a href="http://www.petcity.vn/quan-chip-cho-cho-meo/p1555.html">&nbsp;<strong>Quần Chip cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p><span data-mce-mark="1"><a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>Quần ch&iacute;p</strong> </em></a>cho ch&oacute; m&egrave;o, m&agrave;u sắc v&agrave; kiểu d&aacute;ng đẹp</span></p>\r\n<p><span data-mce-mark="1">Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, ph&ugrave; hợp cho c&uacute;n y&ecirc;u nh&agrave; bạn</span></p>\r\n<p>&nbsp;</p>\r\n<table border="0" cellspacing="0" cellpadding="0"><colgroup><col width="273" /><col span="2" width="88" /></colgroup>\r\n<tbody>\r\n<tr>\r\n<td class="xl333" width="273" height="92">Quần ch&iacute;p size S</td>\r\n<td class="xl334" width="88">&nbsp;&nbsp;&nbsp;&nbsp; Gi&aacute; HCM 23,000</td>\r\n<td class="xl334" width="88">&nbsp;&nbsp;&nbsp; Gi&aacute; HN&nbsp; 28,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl333" height="92">Quần ch&iacute;p size 2</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 25,000</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 30,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl333" height="92">Quần ch&iacute;p size 4</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 26,000</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 31,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl333" height="92">Quần ch&iacute;p size 6</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 29,000</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 34,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl333" height="92">Quần ch&iacute;p size 8</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 32,000</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 37,000</td>\r\n</tr>\r\n<tr>\r\n<td class="xl333" height="92">Quần ch&iacute;p size 10</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 34,000</td>\r\n<td class="xl334">&nbsp;&nbsp;&nbsp;&nbsp; 39,000</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, NULL, NULL, 1494936340, 1494936340),
(32, 'Áo con ong ABC màu cam', 'http://localhost/petcity/frontend/web/uploads/images/718_1_aoconong.jpg', 'http://localhost/petcity/frontend/web/uploads/images/718_1_aoconong.jpg', 'http://localhost/petcity/frontend/web/uploads/images/718_1_aoconong.jpg', '100000', 10, 7, 1, 1, 1, '<p><a href="http://www.petcity.vn/ao-con-ong-abc-mau-cam/p1080.html"><strong>&Aacute;o con ong ABC m&agrave;u cam</strong></a></p>\r\n<p>+ H&atilde;y tạo cho th&uacute; cưng của bạn sự &ldquo;s&agrave;nh điệu&rdquo; khi s&aacute;nh bước b&ecirc;n cạnh c&ocirc; chủ, cậu chủ bằng bộ c&aacute;nh đ&aacute;ng y&ecirc;u v&agrave; ngộ nghĩnh.</p>\r\n<p>+ Lu&ocirc;n hướng đến sự thoải m&aacute;i v&agrave; t&iacute;nh thời trang, <a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>&aacute;o con ong ABC</strong></em></a> kh&ocirc;ng những l&agrave; lớp &aacute;o bảo vệ cơ thể rất hiệu quả m&agrave; c&ograve;n l&agrave; niềm h&atilde;nh diện của chủ nh&acirc;n khi sự xinh xắn của c&uacute;n con thu h&uacute;t mọi &aacute;nh nh&igrave;n v&agrave; khiến kh&ocirc;ng &iacute;t người phải trầm trồ khen ngợi.</p>\r\n<p><br /><strong>ĐẶC ĐIỂM NỔI BẬT</strong><br /><br />- Chất liệu cotton th&ocirc;ng tho&aacute;ng, h&uacute;t ẩm tốt, tạo cảm gi&aacute;c thoải m&aacute;i cho th&uacute; cưng. Hơn nữa, chất liệu dễ giặt v&agrave; mau kh&ocirc;, rất ph&ugrave; hợp với kh&iacute; hậu n&oacute;ng ẩm ở Việt Nam.<br />- Kiểu d&aacute;ng thời trang sẽ l&agrave;m cho th&uacute; cưng của bạn th&ecirc;m phần nổi bật, thu h&uacute;t sự ch&uacute; &yacute; bởi vẻ ngo&agrave;i thật sự xinh xắn v&agrave; ngộ nghĩnh.<br />- Đường may tỉ mỉ c&ugrave;ng thiết kế hướng đến sự thoải m&aacute;i tối đa gi&uacute;p th&uacute; cưng kh&ocirc;ng c&oacute; cảm gi&aacute;c bị g&ograve; b&oacute; khi diện những bộ c&aacute;nh độc đ&aacute;o n&agrave;y.</p>\r\n<p><br />- Size 1: k&iacute;ch thước 22 x 25 cm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 30k<br />- Size 2: k&iacute;ch thước 24 x 29 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 31k<br />- Size 3: k&iacute;ch thước 26 x 33 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 32k<br />- Size 4: k&iacute;ch thước 29 x 36 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 34k<br />- Size 5: k&iacute;ch thước 32 x 40 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 37k<br />- Size 6: k&iacute;ch thước 35 x 44 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 39k<br />- Size 7: k&iacute;ch thước 38 x 48 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 42k <br />- Size 8: k&iacute;ch thước 40 x 50 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 45k<br />- Size 9: k&iacute;ch thước 43 x 52 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 48k<br />- Size 10: k&iacute;ch thước 45 x 54 cm&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 51k</p>', 1, '2017-05-15', '2017-05-31', 1494936591, 1494936591),
(33, 'Áo con Ong cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1080_ao_con_ong_abc_mau_cam.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1080_ao_con_ong_abc_mau_cam.jpg', 'http://localhost/petcity/frontend/web/uploads/images/1080_ao_con_ong_abc_mau_cam.jpg', '100000', 10, 7, 1, 1, 1, '<p><a href="http://www.petcity.vn/ao-con-ong/p718.html"><strong>&Aacute;o con bướm cho ch&oacute; m&egrave;o</strong></a></p>\r\n<p>+ <a href="http://www.petcity.vn/quan-ao/c163.html"><em><strong>&Aacute;o con bướm</strong></em></a>, quần &aacute;o cho ch&oacute; m&egrave;o, chất liệu tốt, mềm mại, bền, đẹp</p>\r\n<p>+ Chất liệu cotton th&ocirc;ng tho&aacute;ng, h&uacute;t ẩm tốt, tạo cảm gi&aacute;c thoải m&aacute;i cho th&uacute; cưng. Hơn nữa, chất liệu dễ giặt v&agrave; mau kh&ocirc;, rất ph&ugrave; hợp với kh&iacute; hậu n&oacute;ng ẩm ở Việt Nam.</p>\r\n<p>- Kiểu d&aacute;ng thời trang sẽ l&agrave;m cho th&uacute; cưng của bạn th&ecirc;m phần nổi bật, thu h&uacute;t sự ch&uacute; &yacute; bởi vẻ ngo&agrave;i thật sự xinh xắn v&agrave; ngộ nghĩnh.</p>\r\n<p>- Đường may tỉ mỉ c&ugrave;ng thiết kế hướng đến sự thoải m&aacute;i tối đa gi&uacute;p th&uacute; cưng kh&ocirc;ng c&oacute; cảm gi&aacute;c bị g&ograve; b&oacute; khi diện những bộ c&aacute;nh độc đ&aacute;o n&agrave;y.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch chọn Size</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>S</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>1</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>2</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>8</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>9</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>&lt;800g</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>&lt;1kg</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>1-2kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>1-2kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>3-4kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>4-5kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>5-6kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>6-7kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>7-8kg</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>8-10kg</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>9-11kg</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>D&agrave;i lưng</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>20cm</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>22cm</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>24cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>28cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34cm</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>36cm</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>39cm</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>42cm</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng Ngực</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>27-31</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>30-35</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>35-40</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>38-44</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>41-46</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>43-49</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>46-52</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>50-57</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>54-63</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng cổ</p>\r\n</td>\r\n<td valign="top" width="55">\r\n<p>14-16</p>\r\n</td>\r\n<td valign="top" width="59">\r\n<p>16-19</p>\r\n</td>\r\n<td valign="top" width="42">\r\n<p>19-22</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>22-26</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>26-30</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30-34</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>34-39</p>\r\n</td>\r\n<td valign="top" width="63">\r\n<p>36-41</p>\r\n</td>\r\n<td valign="top" width="47">\r\n<p>38-4</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 1, '2017-05-15', '2017-05-31', 1494936694, 1494936694);
INSERT INTO `product` (`pro_id`, `pro_name`, `pro_image`, `pro_image1`, `pro_image2`, `pro_price`, `pro_sale_off`, `pro_cat_id`, `pro_supplier_id`, `pro_made_id`, `pro_size_id`, `description`, `status`, `begin_date_sale_off`, `end_date_sale_off`, `date_create`, `date_update`) VALUES
(34, 'Áo Sơ Mi cho chó mèo', 'http://localhost/petcity/frontend/web/uploads/images/1858_ao_so_mi_cho_cho_meo_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1858_ao_so_mi_cho_cho_meo_1.png', 'http://localhost/petcity/frontend/web/uploads/images/1858_ao_so_mi_cho_cho_meo_1.png', '100000', 10, 7, 4, 3, 1, '<p><strong><a title="&Aacute;o Sơ Mi cho ch&oacute; m&egrave;o" href="http://www.petcity.vn/ao-so-mi-cho-cho-meo/p1858.html">&Aacute;o Sơ Mi cho ch&oacute; m&egrave;o</a></strong></p>\r\n<p>H&atilde;y tạo cho th&uacute; cưng của bạn sự " S&agrave;nh điệu" khi s&aacute;nh bước b&ecirc;n cạnh c&ocirc; chủ, cậu chủ bằng bộ c&aacute;nh đ&aacute;ng y&ecirc;u v&agrave; ngộ nghĩnh</p>\r\n<p>Lu&ocirc;n hướng đến sự thoải m&aacute;i v&agrave; t&iacute;nh thời trang, <a title="&aacute;o Sơ mi cho th&uacute; cưng" href="http://www.petcity.vn/quan-ao/c163.html" target="_blank"><strong>&aacute;o Sơ mi cho th&uacute; cưng</strong></a>&nbsp;kh&ocirc;ng những l&agrave; lớp &aacute;o bảo vệ cơ thể rất hiệu quả m&agrave; c&ograve;n l&agrave; niềm h&atilde;nh diện của chủ nh&acirc;n khi sự xinh xắn của c&uacute;n con thu h&uacute;t mọi &aacute;nh nh&igrave;n v&agrave; khiến kh&ocirc;ng &iacute;t người phải trầm trồ khen ngợi.</p>\r\n<p>Chất liệu mềm mại, &ecirc;m &aacute;i, kh&ocirc;ng k&iacute;ch ứng da, ph&ugrave; hợp cho c&uacute;n y&ecirc;u nh&agrave; bạn</p>\r\n<p>Chiếc &aacute;o kiểu d&aacute;ng đẹp, với &aacute;o sơ mi n&agrave;y th&uacute; cưng nh&agrave; bạn tr&ocirc;ng thật phong c&aacute;ch</p>\r\n<p><strong>&Aacute;o sơ mi</strong> c&oacute; nhiều sai để chọn lựa:</p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td valign="top" width="68">\r\n<p>S</p>\r\n</td>\r\n<td valign="top" width="52">\r\n<p>1</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>2</p>\r\n</td>\r\n<td valign="top" width="49">\r\n<p>3</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>4</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>5</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>6</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>7</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>8</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>9</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td valign="top" width="68">\r\n<p>&lt;800g</p>\r\n</td>\r\n<td valign="top" width="52">\r\n<p>&lt;1kg</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="49">\r\n<p>1-2</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>3-4</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>4-5</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>5-6</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>6-7</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>7-8</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>8-10</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>9-11</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>D&agrave;i lưng</p>\r\n</td>\r\n<td valign="top" width="68">\r\n<p>20cm</p>\r\n</td>\r\n<td valign="top" width="52">\r\n<p>22</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>24</p>\r\n</td>\r\n<td valign="top" width="49">\r\n<p>26</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>28</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>30</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>32</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>34</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>36</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>39</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>42</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng Ngực</p>\r\n</td>\r\n<td valign="top" width="68">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="52">\r\n<p>27-31</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>30-35</p>\r\n</td>\r\n<td valign="top" width="49">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>35-40</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>38-44</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>41-46</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>43-49</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>46-52</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>50-57</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>54-63</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" width="65">\r\n<p>V&ograve;ng cổ</p>\r\n</td>\r\n<td valign="top" width="68">\r\n<p>14-16</p>\r\n</td>\r\n<td valign="top" width="52">\r\n<p>16-19</p>\r\n</td>\r\n<td valign="top" width="50">\r\n<p>19-22</p>\r\n</td>\r\n<td valign="top" width="49">\r\n<p>22-26</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>24-28</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>26-30</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>30-34</p>\r\n</td>\r\n<td valign="top" width="54">\r\n<p>32-37</p>\r\n</td>\r\n<td valign="top" width="60">\r\n<p>34-39</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>36-41</p>\r\n</td>\r\n<td valign="top" width="66">\r\n<p>38-43</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Gi&aacute; c&aacute;c size:</p>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td valign="bottom" nowrap="nowrap" width="119">\r\n<p>M&atilde; h&agrave;ng</p>\r\n</td>\r\n<td valign="bottom" nowrap="nowrap" width="200">\r\n<p>T&ecirc;n h&agrave;ng</p>\r\n</td>\r\n<td nowrap="nowrap" width="79">\r\n<p align="right">Gi&aacute; b&aacute;n lẻ</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK911</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 1</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">33000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK912</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 2</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">35000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK913</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 3</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">37000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK914</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 4</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">39000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK915</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 5</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">41000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK916</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 6</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">44000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK917</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 7</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">49000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK918</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 8</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">53000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK919</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 9</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">56000</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign="top" nowrap="nowrap" width="119">\r\n<p>PETLHK9110</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="200">\r\n<p>&Aacute;o Sơ Mi size 10</p>\r\n</td>\r\n<td valign="top" nowrap="nowrap" width="79">\r\n<p align="right">60000</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, '2017-05-15', '2017-05-31', 1494936887, 1494936887),
(35, 'Dây dẫn tròn 20Kg 1,5x160', 'http://localhost/petcity/frontend/web/uploads/images/250_2009_day_4.jpg', 'http://localhost/petcity/frontend/web/uploads/images/250_2009_day_4.jpg', 'http://localhost/petcity/frontend/web/uploads/images/250_2009_day_4.jpg', '160.000 vnđ', 10, 8, 6, 7, 1, '<p><strong>D&acirc;y dẫn tr&ograve;n 20Kg 1,5x160</strong></p>\r\n<p><strong>&nbsp; 1. &nbsp;M&ocirc; tả sản phẩm:</strong></p>\r\n<p>- &nbsp; &nbsp; D&acirc;y dẫn d&agrave;nh cho c&uacute;n cưng với 6 trọng lượng ti&ecirc;u chuẩn: 5kg, 7kg, 10kg, 15kg, 20kg, 30kg.</p>\r\n<p>- &nbsp; &nbsp;&nbsp;M&agrave;u sắc: Đỏ, n&acirc;u đen, đỏ đen, xanh, n&acirc;u, n&acirc;u nhạt.</p>\r\n<p>- &nbsp; &nbsp; Xuất xứ:&nbsp;Đ&agrave;i Loan.</p>\r\n<p>- &nbsp; &nbsp; M&atilde; sản phẩm: PPGC.</p>\r\n<p>- &nbsp; &nbsp; Nh&atilde;n h&agrave;ng Pet Family</p>\r\n<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;Sản phẩm c&oacute; 6 size:</strong></p>\r\n<p>- &nbsp; &nbsp; 5Kg:&nbsp;&nbsp; K&iacute;ch thước 5mm x 140cm.</p>\r\n<p>- &nbsp; &nbsp; 7Kg:&nbsp;&nbsp; K&iacute;ch thước 7mm x 140cm.</p>\r\n<p>- &nbsp; &nbsp; 10Kg: K&iacute;ch thước 7mm x 150cm.</p>\r\n<p>- &nbsp; &nbsp; 15Kg: K&iacute;ch thước 12mm x 160cm.</p>\r\n<p>- &nbsp; &nbsp; 20Kg: K&iacute;ch thước 15mm x 160cm.</p>\r\n<p>- &nbsp; &nbsp; 30Kg: K&iacute;ch thước 18mm x 160cm.</p>', 1, '2017-05-19', '2017-06-30', 1495297607, 1495297607);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `status`, `date_create`, `date_update`) VALUES
(1, 'S', 1, 1489086231, 1489086231),
(2, '1', 1, 1490201798, 1490201798),
(3, '2', 1, 1490201805, 1490201805),
(4, '3', 1, 1490201814, 1490201814),
(5, '4', 1, 1490201921, 1490201921),
(6, '5', 1, 1490201926, 1490201926),
(7, '6', 1, 1490201931, 1490201931),
(8, '7', 1, 1490201936, 1490201936),
(9, '8', 1, 1490201941, 1490201941),
(10, '9', 1, 1490201947, 1490201947),
(11, '10', 1, 1490201955, 1490201955);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `mobile`, `address`, `status`, `date_create`, `date_update`) VALUES
(1, 'May Việt Nam', '0969969696', 'Hà Nội', 1, 1489086220, 1489086220),
(2, 'May Trung Quốc', '0168388193', 'Quảng Ninh', 1, 1490202348, 1490202348),
(3, 'May Hải Dương', '0978865432', 'Hải Dương', 1, 1490202377, 1490202377),
(4, 'May Miền Nam', '0974750550', 'TP. Hồ Chí Minh', 1, 1490202419, 1490202419),
(5, 'May Mười', '09342312323', 'TP. Hà Nội', 1, 1490202447, 1490202447),
(6, 'Việt Nhật', '0938742342', 'Nhật Bản', 1, 1490202485, 1490202485),
(7, 'May Long Giang', '0978345678', 'Long Giang', 1, 1490202520, 1490202520),
(8, 'Công ty TNHH PetCity', '0982374123', 'Hải Phòng', 1, 1490202711, 1490202711);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Gb7wzCtZ_7VFgxLjktsTflkK6dwXbwPn', '$2y$13$/tikxd0/7ptzOS2.kT/2Auh3Si6U3LvqFmkAtB3bxPSzUv9aQl1ri', 'A7WXFw7kMZHMj-lsF3IMtFhgA1H4gQkU_1491734891', 'dangbon313@gmail.com', 10, 1488686039, 1491734891);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`del_id`),
  ADD UNIQUE KEY `del_name` (`del_name`);

--
-- Indexes for table `made`
--
ALTER TABLE `made`
  ADD PRIMARY KEY (`made_id`),
  ADD UNIQUE KEY `made_name` (`made_name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`),
  ADD KEY `fk_news_category` (`new_cat_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_payment` (`payment_id`),
  ADD KEY `fk_order_deliver` (`deliver_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `fk_order_detail_order` (`order_id`),
  ADD KEY `fk_order_detail_product` (`pro_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD UNIQUE KEY `pay_name` (`pay_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `fk_product_category` (`pro_cat_id`),
  ADD KEY `fk_product_made` (`pro_made_id`),
  ADD KEY `fk_product_size` (`pro_size_id`),
  ADD KEY `fk_product_supplier` (`pro_supplier_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `size_name` (`size_name`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`),
  ADD UNIQUE KEY `sup_name` (`sup_name`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `deliver`
--
ALTER TABLE `deliver`
  MODIFY `del_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `made`
--
ALTER TABLE `made`
  MODIFY `made_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_category` FOREIGN KEY (`new_cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_deliver` FOREIGN KEY (`deliver_id`) REFERENCES `deliver` (`del_id`),
  ADD CONSTRAINT `fk_order_payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`pay_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `fk_order_detail_product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`pro_cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `fk_product_made` FOREIGN KEY (`pro_made_id`) REFERENCES `made` (`made_id`),
  ADD CONSTRAINT `fk_product_size` FOREIGN KEY (`pro_size_id`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `fk_product_supplier` FOREIGN KEY (`pro_supplier_id`) REFERENCES `supplier` (`sup_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
