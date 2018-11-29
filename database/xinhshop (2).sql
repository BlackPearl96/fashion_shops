-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 04:01 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xinhshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_chitiet` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chitietdonhang`
--

INSERT INTO `tbl_chitietdonhang` (`id_chitiet`, `id_donhang`, `id_sanpham`, `soluong`, `gia`) VALUES
(1, 1, 21, 1, 155000),
(2, 1, 12, 1, 150000),
(3, 2, 30, 3, 135000),
(4, 2, 25, 2, 640000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `id_nhomsp` int(11) NOT NULL,
  `ten_danhmuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `id_nhomsp`, `ten_danhmuc`) VALUES
(1, 1, 'Áo Nữ'),
(2, 1, 'Váy\r\n'),
(3, 1, 'Quần Âu'),
(5, 2, 'Túi Xách\r\n'),
(6, 2, 'Ví'),
(7, 2, 'Kính Mắt'),
(11, 2, 'Đồng hồ'),
(12, 2, 'Thắt lưng'),
(13, 2, 'Trang sức'),
(14, 3, 'Nước Hoa'),
(15, 3, 'Phấn'),
(16, 3, 'Son'),
(17, 3, 'Kem dưỡng ra'),
(18, 3, 'Sữa tắm'),
(19, 4, 'Áo Nam'),
(20, 4, 'Đồ Thể Thao'),
(21, 4, 'Quần Âu'),
(22, 4, 'Quần Jeans'),
(23, 5, 'Ví nam'),
(24, 5, 'Kính Mắt'),
(25, 5, 'Đồng Hồ'),
(26, 5, 'Thắt Lưng'),
(27, 5, 'Giầy Nam'),
(28, 6, 'Nước hoa nam'),
(29, 6, 'Sữa Rửa Mặt'),
(30, 6, 'Dầu Gội'),
(31, 6, 'Sữa Tắm nam'),
(32, 6, 'Kem dưỡng ra nam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id_donhang`, `id_khachhang`, `tinhtrang`, `date`) VALUES
(1, 2, 1, '2016-04-03'),
(2, 1, 1, '2016-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `diachi` text NOT NULL,
  `sdt` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_khachhang`, `username`, `password`, `diachi`, `sdt`, `fullname`, `email`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'hà nội', 977601447, 'PHẠM TUÂN ANH', 'phamtuananh760@gmail.com'),
(2, '', '', 'ha nội', 977601447, 'PHẠM TUÂN ANH', 'phamtuananh760@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `ten_khachhang` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `ten_khachhang`, `email`, `message`, `tinh_trang`, `ngaydang`) VALUES
(7, 'phạm tuấn anh', 'phamtuananh1110@gmail.com', 'ssss', 0, '2016-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhomsanpham`
--

CREATE TABLE `tbl_nhomsanpham` (
  `id_nhomsp` int(11) NOT NULL,
  `ten_nhomsp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_nhomsanpham`
--

INSERT INTO `tbl_nhomsanpham` (`id_nhomsp`, `ten_nhomsp`) VALUES
(1, 'THỜI TRANG NỮ'),
(2, 'PHỤ KIỆN NỮ'),
(3, 'MỸ PHẨM NỮ'),
(4, 'THỜI TRANG NAM'),
(5, 'PHỤ KIỆN NAM'),
(6, 'MỸ PHẨM NAM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online`
--

CREATE TABLE `tbl_online` (
  `id_user` int(11) NOT NULL,
  `ip` text NOT NULL,
  `tgtmp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_online`
--

INSERT INTO `tbl_online` (`id_user`, `ip`, `tgtmp`) VALUES
(25, '::1', 1459864676);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quangcao`
--

CREATE TABLE `tbl_quangcao` (
  `id_quangcao` int(11) NOT NULL,
  `ten_quangcao` text NOT NULL,
  `anh` text NOT NULL,
  `vitri` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_quangcao`
--

INSERT INTO `tbl_quangcao` (`id_quangcao`, `ten_quangcao`, `anh`, `vitri`, `link`) VALUES
(3, 'dfdfgf', 'images/images_qc/145786759514578670951.jpg', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_sanpham` text NOT NULL,
  `anh_sanpham` text NOT NULL,
  `ngaydang` date NOT NULL,
  `mo_ta` text NOT NULL,
  `gia` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `id_danhmuc`, `ten_sanpham`, `anh_sanpham`, `ngaydang`, `mo_ta`, `gia`, `sanpham_hot`) VALUES
(7, 1, 'Áo Hoodie Nam 1297', 'images/images_sp/14578564281297-1.jpg', '2016-03-13', '<p>+&nbsp;<em>&Aacute;o Hoodie Nam 1297</em></p>\r\n\r\n<p>+ Chất liệu : &nbsp;nỉ</p>\r\n\r\n<p>+ M&agrave;u Sắc : Đen v&agrave; đỏ</p>\r\n\r\n<p>+ K&iacute;ch thước : freesize Ph&ugrave; hợp cho bạn &lt; 70kg (t&ugrave;y chiều cao)</p>\r\n', 65000, 1),
(10, 19, 'Áo Sơ Mi Nam 1312', 'images/images_sp/14581114481312-1.jpg', '2016-03-16', '<p>+&nbsp;<em>&Aacute;o Sơ Mi Nam 1312</em></p>\r\n\r\n<p>+ &Aacute;o sơ mi nam phong c&aacute;ch h&agrave;n quốc thiết kế n&uacute;t c&agrave;i tiện dụng với kiểu d&aacute;ng trẻ trung thể hiện vẻ nam t&iacute;nh của bạn nam.</p>\r\n\r\n<p>+ M&agrave;u sắc h&agrave;i h&ograve;a, dễ mặc, th&iacute;ch hợp với nhiều d&aacute;ng người.</p>\r\n\r\n<p>+ Th&iacute;ch hợp mặc c&ugrave;ng quần jeans, kaki, short ... tạo phong c&aacute;ch thời trang trẻ trung v&agrave; ấn tượng.</p>\r\n\r\n<p>+ Chất liệu: kaki thun mềm mại, tho&aacute;ng m&aacute;t, &iacute;t nhăn, cho người mặc lu&ocirc;n tự tin, thoải m&aacute;i.</p>\r\n\r\n<p>- K&iacute;ch thước: (Sản phẩm c&oacute; thể ch&ecirc;nh lệch +/-2cm)</p>\r\n\r\n<p>+ Size M: D&agrave;i 69cm, ngực 45x2cm, vai 41cm, tay 60cm</p>\r\n\r\n<p>+ Size L: D&agrave;i 71cm, ngực 46x2cm, vai 42cm, tay 61cm</p>\r\n\r\n<p>+ Size XL: D&agrave;i 72cm, ngực 47x2cm, vai 43cm, tay 62cm</p>\r\n', 115000, 1),
(11, 2, 'Đầm Suông Họa Tiết 1300', 'images/images_sp/14581118881300-1.jpg', '2016-03-16', '<p>+<em>&nbsp;Đầm Su&ocirc;ng Họa Tiết 1300</em></p>\r\n\r\n<p>+ Chất liệu : Thun c&aacute;t</p>\r\n\r\n<p>+ M&agrave;u sắc: họa tiết</p>\r\n\r\n<p>+ FreeSize : Ph&ugrave; hợp cho bạn g&aacute;i &lt; 52kg (t&ugrave;y chiều cao)</p>\r\n', 30000, 1),
(12, 3, 'Quần Jean Nữ F1130', 'images/images_sp/1458111988quan-jean-nu-gia-si-f1130-1.jpg', '2016-03-16', '<p>+&nbsp;<em>Quần Jean Nữ F1130</em></p>\r\n\r\n<p>+ Thiết kế với ưu điểm t&ocirc;n d&aacute;ng, gi&uacute;p bạn g&aacute;i kh&eacute;o l&eacute;o khoe đ&ocirc;i ch&acirc;n d&agrave;i thon gọn v&agrave; đường cong ho&agrave;n hảo.</p>\r\n\r\n<p>+ Quần được may từ chất liệu jean co gi&atilde;n linh hoạt, tạo cảm gi&aacute;c dễ chịu khi di chuyển, vận động.</p>\r\n\r\n<p>+ Đường may tỉ mỉ, chắc chắn, phối t&uacute;i trẻ trung, s&agrave;nh điệu.</p>\r\n\r\n<p>+ Th&iacute;ch hợp phối c&ugrave;ng nhiều kiểu &aacute;o sơ mi, &aacute;o thun, blazer, jacket,&hellip;</p>\r\n\r\n<p>+ M&agrave;u sắc: Như h&igrave;nh</p>\r\n\r\n<p>+ Size: 26, 27, 28, 29, 30</p>\r\n', 150000, 1),
(13, 1, 'Set Áo Khoác Nữ Và Quần 1288', 'images/images_sp/14581120981288-1_1.jpg', '2016-03-16', '<p>+&nbsp;<em>Set &Aacute;o Kho&aacute;c Nữ V&agrave; Quần 1288</em></p>\r\n\r\n<p>+ Chất liệu : Nỉ da c&aacute;</p>\r\n\r\n<p>+ M&agrave;u Sắc : x&aacute;m, đỏ đ&ocirc;, xanh đen v&agrave; hồng d&acirc;u</p>\r\n\r\n<p>+ Freesize th&iacute;ch hợp cho v&oacute;c d&aacute;ng nhiều bạn nữ dưới 55kg</p>\r\n', 140000, 1),
(14, 1, 'Áo Khoác Nữ Jean Phối Nỉ 1257', 'images/images_sp/14581121971267-1.jpg', '2016-03-16', '<p>+&nbsp;<em>&Aacute;o Kho&aacute;c Nữ Jean Phối Nỉ 1257</em></p>\r\n\r\n<p>+ M&agrave;u sắc : Xanh jean&nbsp;</p>\r\n\r\n<p>+ Chất liệu: Jean Phối Nỉ (c&oacute; t&uacute;i trong)</p>\r\n\r\n<p>+ Freesize th&iacute;ch hợp cho v&oacute;c d&aacute;ng nhiều bạn nữ dưới 55kg</p>\r\n', 145000, 1),
(15, 1, 'Đầm Jean Xòe Kết Ngọc Trai 1276', 'images/images_sp/14581124201276-1.jpg', '2016-03-16', '<p>+ Đầm Jean X&ograve;e Kết Ngọc Trai 1276</p>\r\n\r\n<p>+ Kiểu d&aacute;ng : đầm d&aacute;ng x&ograve;e&nbsp;</p>\r\n\r\n<p>+ Chất liệu : Jean Thun</p>\r\n\r\n<p>+ M&agrave;u sắc: xanh</p>\r\n\r\n<p>+ FreeSize : Ph&ugrave; hợp cho bạn g&aacute;i &lt; 52kg (t&ugrave;y chiều cao)</p>\r\n', 165000, 1),
(16, 5, 'Túi Xách Nữ Khóa Gài TX1015', 'images/images_sp/1458114872tx1015-1.jpg', '2016-03-16', '<p>+&nbsp;<em>T&uacute;i X&aacute;ch Nữ Kh&oacute;a G&agrave;i TX1015</em></p>\r\n\r\n<p>+ Chất liệu: Giả Da cao cấp</p>\r\n\r\n<p>+ M&agrave;u sắc: 2 m&agrave;u T&iacute;m, đen</p>\r\n\r\n<p>+ K&iacute;ch thước: ngang 24cm x cao 14,5cm x day 5cm</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 215000, 1),
(17, 6, 'Ví Cầm Tay Hoa Văn TX1014', 'images/images_sp/14581149611014-1.jpg', '2016-03-16', '<p>+&nbsp;<em>V&iacute; Cầm Tay Hoa Văn TX1014</em></p>\r\n\r\n<p>+ Chất liệu: Giả Da cao cấp</p>\r\n\r\n<p>+ M&agrave;u sắc: Đen, hồng v&agrave; xanh</p>\r\n\r\n<p>+ K&iacute;ch thước: ngang 18cm x cao 9cm x day 2,5cm.</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 100000, 1),
(18, 26, 'Thắt Lưng Nam Number 2 F1077', 'images/images_sp/1458115054that-lung-nam-number-2-gia-si-f1076-1.jpg', '2016-03-16', '<p>+&nbsp;<em>Thắt Lưng Nam Number 2 F1077</em></p>\r\n\r\n<p>+ Tạo đi&ecirc;̉m nh&acirc;́n cho b&ocirc;̣ trang phục với b&ecirc;̀ mặt mịn đẹp - phụ ki&ecirc;̣n kh&ocirc;ng th&ecirc;̉ thi&ecirc;́u của nam giới.</p>\r\n\r\n<p>+ D&acirc;y nịt nam l&agrave; phụ kiện kh&ocirc;ng thể thiếu của nam giới, tạo điểm nhấn cho bộ trang phục.</p>\r\n\r\n<p>+ Mẫu m&atilde; kh&ocirc;ng qu&aacute; cầu kỳ nhưng rất sắc sảo v&agrave; tinh tế, mang lại sự sang trọng lịch l&atilde;m cho người sử dụng.</p>\r\n\r\n<p>+ Mặt kh&oacute;a thiết kế chắc chắn, sang trọng.</p>\r\n\r\n<p>+ Phối hợp nhiều loại quần: quần t&acirc;y, jeans, kaki...</p>\r\n\r\n<p>+ M&agrave;u sắc : đen, n&acirc;u đậm v&agrave; xanh</p>\r\n\r\n<p>+ Kích thước: 103 x 5cm</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 110000, 1),
(19, 23, 'Ví Da Nam Balery TX1012', 'images/images_sp/1458115151tx1012-1.jpg', '2016-03-16', '<p>+<em>&nbsp;V&iacute; Da Nam Balery TX1012</em></p>\r\n\r\n<p>+ Chất liệu: Giả Da cao cấp</p>\r\n\r\n<p>+ M&agrave;u sắc: 2 m&agrave;u n&acirc;u, đen</p>\r\n\r\n<p>+ K&iacute;ch thước: ngang 12cm x cao 10cm x day 1,5cm</p>\r\n\r\n<p>+ Sản phẩm c&oacute; tặng k&egrave;m hộp</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 150000, 1),
(20, 5, 'Túi Xách Nữ MinMin', 'images/images_sp/1458115436tui-xach-nu-minmin-gia-si1.jpg', '2016-03-16', '<p>+&nbsp;<em>T&uacute;i X&aacute;ch Nữ MinMin F1026</em></p>\r\n\r\n<p>+ Chất liệu: Giả Da cao cấp</p>\r\n\r\n<p>+ M&agrave;u sắc: Đen, đỏ v&agrave; xanh</p>\r\n\r\n<p>+ K&iacute;ch thước: ngang 28cm x cao 24cm x đ&aacute;y 14cm</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 300000, 1),
(21, 6, 'Ví Cầm Tay Thắt Nơ', 'images/images_sp/1458115525vi-cam-tay-that-no-tx1004-1.jpg', '2016-03-16', '<p>+&nbsp;<em>V&iacute; Cầm Tay Thắt Nơ TX1004</em></p>\r\n\r\n<p>+ Chất liệu: Giả Da cao cấp</p>\r\n\r\n<p>+ M&agrave;u sắc: Đen v&agrave; đỏ</p>\r\n\r\n<p>+ K&iacute;ch thước: cao 21cm x ngang 10,5cm x đ&aacute;y 3cm.</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 155000, 1),
(22, 26, 'Thắt Lưng Nam Logo Báo 2016', 'images/images_sp/1458115625that-lung-nam-logo-bao-2016-gia-si-1.jpg', '2016-03-16', '<p>+&nbsp;<em>Thắt Lưng Nam Logo B&aacute;o 2016 F1082</em></p>\r\n\r\n<p>+ Tạo đi&ecirc;̉m nh&acirc;́n cho b&ocirc;̣ trang phục với b&ecirc;̀ mặt mịn đẹp - phụ ki&ecirc;̣n kh&ocirc;ng th&ecirc;̉ thi&ecirc;́u của nam giới.</p>\r\n\r\n<p>+ D&acirc;y nịt nam l&agrave; phụ kiện kh&ocirc;ng thể thiếu của nam giới, tạo điểm nhấn cho bộ trang phục.</p>\r\n\r\n<p>+ Mẫu m&atilde; kh&ocirc;ng qu&aacute; cầu kỳ nhưng rất sắc sảo v&agrave; tinh tế, mang lại sự sang trọng lịch l&atilde;m cho người sử dụng.</p>\r\n\r\n<p>+ Mặt kh&oacute;a thiết kế chắc chắn, sang trọng.</p>\r\n\r\n<p>+ Phối hợp nhiều loại quần: quần t&acirc;y, jeans, kaki...</p>\r\n\r\n<p>+ M&agrave;u sắc : đen, n&acirc;u đậm v&agrave; xanh</p>\r\n\r\n<p>+ Kích thước: 103 x 5cm</p>\r\n\r\n<p>+ Xuất xứ : H&agrave;ng nhập khẩu</p>\r\n', 110000, 1),
(23, 16, 'ZOENE LIPSTICK ( Son môi đổi màu )', 'images/images_sp/1458117085zoene-2.jpg', '2016-03-16', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;IB Cosmetics Co.ltd</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Địa Chỉ :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>Trọng lượng :&nbsp;3,3g</p>\r\n', 0, 1),
(24, 16, 'NƯỚC HOA HỒNG CẢI THIỆN DA', 'images/images_sp/1458117340sempre-florian-skin.jpg', '2016-03-16', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;Lamy Cosmetics Co.ltd</p>\r\n\r\n<p>Địa chỉ :&nbsp;71 BL 9 Lot # 640-8 Gojan dong KOREA</p>\r\n\r\n<p>CBMP :&nbsp;71301/13/CBMP-QLD</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Địa Chỉ :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>Trọng lượng :&nbsp;150ml</p>\r\n\r\n<p>M&atilde; số :&nbsp;SHS14</p>\r\n\r\n<p><strong><u>Lưu &Yacute;</u>&nbsp;:</strong>&nbsp;hiện nay tr&ecirc;n thị trường mỹ phẩm xuất hiện c&aacute;c d&ograve;ng sản phẩm GEO,SORTIE,RENOMA,ORGANIA,GREEN GRAPY&hellip;chất lượng k&eacute;m với mẫu m&atilde;,th&ocirc;ng tin kh&aacute; giống với sản phẩm ch&iacute;nh h&atilde;ng của c&ocirc;ng ty,Kh&aacute;ch H&agrave;ng n&ecirc;n c&acirc;n nhắc trước khi lựa chọn.</p>\r\n', 700000, 1),
(25, 15, ' Phấn trang điểm đa chức năng gồm lót và nền', 'images/images_sp/1458117415geo-sempre-hp-multi-cushion-11-150x150.jpg', '0000-00-00', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;Lamy Cosmetics Co.ltd</p>\r\n\r\n<p>Địa chỉ :&nbsp;71 BL 9 Lot # 640-8 Gojan dong KOREA</p>\r\n\r\n<p>GPLH :&nbsp;106316/14/CBMP-QLD</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Địa Chỉ :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>Trọng lượng :&nbsp;15g</p>\r\n\r\n<p>M&atilde; số :&nbsp;</p>\r\n\r\n<p><strong><u>Lưu &Yacute;</u></strong><strong>&nbsp;:</strong>&nbsp;hiện nay tr&ecirc;n thị trường mỹ phẩm xuất hiện c&aacute;c d&ograve;ng sản phẩm GEO,SORTIE,RENOMA,ORGANIA,GREEN GRAPY&hellip;chất lượng k&eacute;m với mẫu m&atilde;,th&ocirc;ng tin kh&aacute; giống với sản phẩm ch&iacute;nh h&atilde;ng của c&ocirc;ng ty,Kh&aacute;ch H&agrave;ng n&ecirc;n c&acirc;n nhắc trước khi lựa chọn.</p>\r\n', 640000, 1),
(26, 18, 'SỮA TẮM TỪ OLIVE', 'images/images_sp/1458117520green-grapy-olive-bodywash.jpg', '2016-03-16', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;Green Grapy</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Đ/C :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>GP lưu h&agrave;nh :&nbsp;97911/14/CBMP/QLD</p>\r\n\r\n<p>Trọng lượng :&nbsp;500ml,1500ml</p>\r\n\r\n<p>M&atilde; số :&nbsp;G18</p>\r\n\r\n<p><strong>Lưu &Yacute; :&nbsp;</strong>Hiện nay tr&ecirc;n thị trường xuất hiện c&aacute;c sản phẩm chất lượng k&eacute;m với mẫu m&atilde;,th&ocirc;ng tin kh&aacute; giống với sản phẩm ch&iacute;nh h&atilde;ng,kh&aacute;ch h&agrave;ng n&ecirc;n c&acirc;n nhắc khi lựa chọn.</p>\r\n', 195000, 1),
(27, 18, 'SỮA TẮM DƯỠNG ẨM TINH CHẤT ARGAN', 'images/images_sp/1458117560green-grapy-argan-body-wash-150x150.jpg', '2016-03-16', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;Green Grapy</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Đ/C :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>GP lưu h&agrave;nh :&nbsp;97904/14/CBMP/QLD</p>\r\n\r\n<p>Trọng lượng :&nbsp;500ml,1500ml</p>\r\n\r\n<p>M&atilde; số :&nbsp;G10</p>\r\n\r\n<p><strong>Lưu &Yacute;:</strong>&nbsp;Hiện nay tr&ecirc;n thị trường xuất hiện c&aacute;c sản phẩm chất lượng k&eacute;m với mẫu m&atilde;,th&ocirc;ng tin kh&aacute; giống sản phẩm ch&iacute;nh h&atilde;ng,kh&aacute;ch h&agrave;ng n&ecirc;n c&acirc;n nhắc khi lựa chọn</p>\r\n', 195000, 1),
(28, 17, 'KEM NỀN TRANG ĐIỂM 3 CHỨC NĂNG ', 'images/images_sp/1458117616sortie-3-effect-liquid-foundation-150x150.jpg', '2016-03-16', '<p>Xuất xứ :&nbsp;H&agrave;n Quốc</p>\r\n\r\n<p>NSX :&nbsp;Lamy Cosmetics Co.ltd</p>\r\n\r\n<p>Địa chỉ :&nbsp;71 BL 9 Lot # 640-8 Gojan dong KOREA</p>\r\n\r\n<p>CBMP :&nbsp;71118/13/CBMP-QLD</p>\r\n\r\n<p>Ph&acirc;n Phối :&nbsp;C&ocirc;ng ty TNHH Nh&acirc;n Đạt</p>\r\n\r\n<p>Địa Chỉ :&nbsp;57-Y&ecirc;n Đỗ-T&acirc;n Th&agrave;nh-T&acirc;n Ph&uacute;-HCM</p>\r\n\r\n<p>Trọng lượng :&nbsp;40ml</p>\r\n\r\n<p>M&atilde; số :&nbsp;SRM0</p>\r\n\r\n<p><strong><u>Lưu &Yacute;</u></strong>&nbsp;:&nbsp;hiện nay tr&ecirc;n thị trường mỹ phẩm xuất hiện c&aacute;c d&ograve;ng sản phẩm GEO,SORTIE,RENOMA,ORGANIA,GREEN GRAPY&hellip;chất lượng k&eacute;m với mẫu m&atilde;,th&ocirc;ng tin kh&aacute; giống với sản phẩm ch&iacute;nh h&atilde;ng của c&ocirc;ng ty,Kh&aacute;ch H&agrave;ng n&ecirc;n c&acirc;n nhắc trước khi lựa chọn.</p>\r\n', 800000, 1),
(29, 1, 'Áo Khoác Vest Nữ 1185', 'images/images_sp/14587127191255-1.jpg', '2016-03-23', '<p>+&nbsp;<em>&Aacute;o Kho&aacute;c Vest Nữ 1185</em></p>\r\n\r\n<p>+ Thiết kế dạng &aacute;o vest theo một phong c&aacute;ch trẻ trung s&agrave;nh điệu</p>\r\n\r\n<p>+ M&agrave;u sắc : Đen, hồng, trắng, xanh v&agrave; v&agrave;ng</p>\r\n\r\n<p>+ Chất liệu : Tuyết mưa d&agrave;y dặn (Loại 1)</p>\r\n\r\n<p>+ Freesize ph&ugrave; hợp cho bạn g&aacute;i dưới 54kg</p>\r\n', 115000, 1),
(30, 1, 'Set Áo In Hình Cú Và Quần Short ', 'images/images_sp/14597050961457-1.jpg', '2016-04-04', '<p>+&nbsp;<em>Set &Aacute;o In H&igrave;nh C&uacute; V&agrave; Quần Short 1457</em></p>\r\n\r\n<p>+ Chất liệu: &Aacute;o voan c&aacute;t, quần kaki lụa</p>\r\n\r\n<p>+ M&agrave;u sắc: như h&igrave;nh</p>\r\n\r\n<p>+ Kiểu d&aacute;ng : &Aacute;o cổ tr&ograve;n, ngắn tay, họa tiết 3D</p>\r\n\r\n<p>+ K&iacute;ch thước : Th&iacute;ch hợp với nữ 45-57kg, t&ugrave;y chiều cao</p>\r\n', 135000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id_slide` int(11) NOT NULL,
  `anh` text NOT NULL,
  `vitri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id_slide`, `anh`, `vitri`) VALUES
(15, 'images/slide/14586607161.JPG', 1),
(16, 'images/slide/14586607272.jpg', 2),
(18, 'images/slide/14586607374.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongtin`
--

CREATE TABLE `tbl_thongtin` (
  `id_thongtin` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_thongtin`
--

INSERT INTO `tbl_thongtin` (`id_thongtin`, `tieude`, `noidung`) VALUES
(1, 'giới thiệu', ''),
(2, 'hướng dẫn mua hàng', '<p><span style="font-size:14px"><span style="color:#00FF00"><strong>1. H&igrave;nh thức vận chuyển v&agrave; gi&aacute; ship:</strong>&nbsp;</span></span></p>\r\n\r\n<p><span style="font-size:14px">►&gt;►&gt; Giao h&agrave;ng to&agrave;n quốc - thanh to&aacute;n khi nhận h&agrave;ng với nh&agrave; vận chuyển uy t&iacute;n: Viettel post, VNPT, EMS.</span></p>\r\n\r\n<p><span style="font-size:14px"><strong>Kể<strong>&nbsp;từ ng&agrave;y 03/04/2016,&nbsp;</strong>xinhshop.vn&nbsp;&aacute;p dụng ch&iacute;nh s&aacute;ch giao h&agrave;ng mới như sau:</strong></span></p>\r\n\r\n<p><span style="font-size:14px">- To&agrave;n Quốc (*):&nbsp;<strong>Miễn ph&iacute; vận chuyển</strong>&nbsp;cho đơn h&agrave;ng từ&nbsp;500.000đ.&nbsp;(Mua &iacute;t hơn mức n&agrave;y ph&iacute; giao h&agrave;ng ưu đ&atilde;i chỉ c&oacute; 30.000đ, đơn h&agrave;ng tr&ecirc;n 250.000 chỉ c&ograve;n 10.000đ ).</span></p>\r\n\r\n<p><span style="font-size:14px">*Lưu &yacute;: Ph&iacute; vận chuyển tr&ecirc;n &aacute;p dụng cho đia chỉ nhận h&agrave;ng tại Th&agrave;nh phố/quận. Về Huyện/thị x&atilde; ph&iacute; vận chuyển cộng th&ecirc;m 5.000 VNĐ.</span></p>\r\n\r\n<p><span style="font-size:14px">- Ri&ecirc;ng TP.HCM:&nbsp;<strong>Miễn ph&iacute; vận chuyển</strong>&nbsp;cho đơn h&agrave;ng từ&nbsp;250.000đ.&nbsp;(Mua &iacute;t hơn mức n&agrave;y ph&iacute; giao h&agrave;ng chỉ c&oacute; 17.000đ).</span></p>\r\n\r\n<p><span style="font-size:14px"><span style="color:#00FF00"><strong>2. C&aacute;ch đặt h&agrave;ng:</strong></span></span></p>\r\n\r\n<p><span style="font-size:14px"><strong>&nbsp; &nbsp;a. T&igrave;m m&oacute;n h&agrave;ng bạn muốn mua:</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="" src="http://i1096.photobucket.com/albums/g324/tiu/Capture_zpssm0xl6ky.png" /></span></p>\r\n\r\n<p><span style="font-size:14px"><strong>b. xem chi tiết:&nbsp;</strong>&nbsp;&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px"><img alt="" src="http://i1096.photobucket.com/albums/g324/tiu/Capture_zpsjcnam9iz.png" style="height:539px; width:770px" />&nbsp;c<strong>. Th&ecirc;m v&agrave;o giỏ h&agrave;ng:</strong></span></p>\r\n\r\n<p><span style="font-size:14px"><strong><img alt="" src="http://i1096.photobucket.com/albums/g324/tiu/Capture_zpsqtgqgz8l.png" style="height:344px; width:700px" /></strong></span></p>\r\n\r\n<p><span style="font-size:14px"><strong>d. Nhập th&ocirc;ng tin đơn h&agrave;ng v&agrave; ho&agrave;n tất:</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px"><strong><img alt="" src="http://i1096.photobucket.com/albums/g324/tiu/Capture_zpszc4fcpvs.png" style="height:576px; width:770px" /></strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px"><strong>3. Giờ l&agrave;m việc v&agrave; tư vấn kh&aacute;ch h&agrave;ng</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px">▶ Thứ 2 - thứ 7: 8h30 - 12h00; 12h30 - 17h30</span></p>\r\n\r\n<p><span style="font-size:14px">▶&nbsp;HOTLINE:0977601447</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:14px"><em><strong>QU&Yacute; KH&Aacute;CH H&Agrave;NG C&Oacute; NHU CẦU&nbsp;ĐẶT H&Agrave;NG V&Agrave; HOẶC&nbsp;CẦN TƯ VẤN NGO&Agrave;I GIỜ L&Agrave;M VIỆC VUI L&Ograve;NG NHẮN TIN HOẶC ĐỂ LẠI SỐ ĐIỆN THOẠI xinhshop.vn&nbsp;SẼ LI&Ecirc;N HỆ QU&Yacute; KH&Aacute;CH TRONG THỜI GIAN SỚM NHẤT C&Oacute; THỂ</strong></em></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `ngaydang` date NOT NULL,
  `hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_tintuc`, `tieude`, `noidung`, `hinhanh`, `ngaydang`, `hot`) VALUES
(2, 'Mẹo Hay Giúp Chọn Giày Vừa Khít Cho Nam', 'Một số bạn nam khi chọn giày thường có tâm trạng ngỡ ngàng, lo lắng không biết đôi nào mới thật sự phù hợp với mình. Những mẹo hay dưới đây sẽ giúp bạn đánh tan những lo lắng và chọn cho mình đôi giày tốt vừa khít chân.\r\n\r\nChọn size giày\r\n \r\nMột người có thể mang nhiều size giày khác nhau: Các mẫu giày thời trang thể thao thường có nguồn gốc từ Châu Âu với thiết kế dài và thon. Hệ thống size giày dựa trên kiểu chân của họ là nhiều. Ở Việt Nam phần đông mọi người có form chân ngắn và rộng bề ngang vì vậy tùy theo thiết kế của form giày mà ta có thể mang size giày khác nhau. Người Việt Nam có form chân ngắn và rộng bề ngang. Trước khi chọn mua, một việc bạn không thể bỏ qua đó là thử giày.\r\n \r\nMẹo hay giúp chọn giày vừa khít cho nam - 1\r\n\r\nNgười Việt Nam có form chân ngắn và rộng bề ngang. \r\nThử giày\r\n \r\nKhi thử giày bình thường hay giày cao nam bắt buộc mọi người phải thử cả hai chân, mang vớ, cột dây giày như mình mang hàng ngày đi qua đi lại hoặc làm một vài động tác thể dục kiểm tra cảm giác chân khi mang. Đôi giày được chọn phải là mẫu giày thoải mái nhất không gây cảm giác khó chịu khi mang.\r\n \r\nMẹo hay giúp chọn giày vừa khít cho nam - 2\r\n\r\nKhi thử giày nam bắt buộc mọi người phải thử cả hai chân, mang vớ, cột dây giày như khi mang giày.\r\n \r\nKhi mang giày tuyệt đối không để các ngón chân chạm sát vào mũi giày ngón chân cái cách mũi giày khoảng 0,5cm- 1cm là tốt nhất.\r\n \r\nKhông nên chọn giày quá rộng khi thử giày. Bước đi mà chân và đôi giày có cảm giác xộc xệch hoặc tụt gót không nên mang vì khi như vậy chân luôn phải gồng giữ đôi giày, bước đi sẽ rất khó chịu.\r\n \r\nThử giày cả hai chân vì thông thường chân chúng ta có một bên lớn hơn một bên nhỏ hơn chọn cỡ giày theo chân lớn hơn. \r\n \r\nMẹo hay giúp chọn giày vừa khít cho nam - 3\r\nĐi lại để kiểm tra xem có cảm giác thoải mái không.\r\nThời điểm thử giày\r\n \r\nThời gian tốt nhất thử giày là từ 10h-17h: khi đó bàn chân của bạn là chính xác nhất vì trong quá trình hoạt động các cơ chân hoạt động nhiều chân sẽ giãn nở tối đa.                                   \r\nBuổi sáng: bạn nên thử hơi rộng một chút, một chút thôi sẽ làm bạn thoải mái cả ngày.\r\n \r\nBuổi chiều và tối: đôi giày nam  vừa khít chân sẽ giúp bạn thoải mái hơn. \r\n \r\nThời gian tốt nhất thử giày là từ 10h-17h\r\n \r\nPhối giày và trang phục thời trang                          \r\n \r\nCác kiểu giày thời trang thường phù hợp nhất với các thiết kế quần jean hoặc kaki. Không nên lựa những mẫu quần ống quá lớn vì khi mang giày ống quần che phủ toàn bộ đôi giày.  Ống quần quá rộng che phủ đôi giày…\r\n \r\nKhi mang giày nên chọn những mẫu quần suôn thết kế ôm ống quần chỉ phủ một chút đôi giày. Bạn không nên mang quần quá dài phủ toàn bộ gót giày, tối kị sắn quần.\r\n \r\nMẹo hay giúp chọn giày vừa khít cho nam - 4\r\n\r\nTùy trang phục có thể phối cùng loại giày phù hợp.\r\n \r\nNên chọn mua giày trước khi chọn quần áo. Chọn những mẫu giày có thể phối với nhiều đồ, không nên chọn giày chỉ phối với một bộ đồ (vì thông thường mọi người có nhiếu quần áo hơn giày).\r\n \r\nMẹo hay giúp chọn giày vừa khít cho nam - 5\r\n\r\nNên chọn mua giày trước khi chọn quần áo.\r\n\r\n4MEN shop cập nhật những mẫu giày nam mới nhất từ giày tây cổ điển, lịch lãm đến giày thể thao năng động hay những đôi giày mọi trẻ trung, bạn có thể tha hồ lựa chọn theo sở thích và phong cách của mình mà không lo về giá.', 'images/images_tintuc/tin (1).jpg', '2016-03-08', 0),
(3, 'Cách Giặt Áo Thun Mới Mua', 'Bạn tự hỏi những chiếc áo thun mới mua làm thế nào giữ màu luôn sáng đẹp? giặt và bảo quản ra sao để chúng vẫn như ngày đầu mới mua. Những cách đơn giản dưới đây sẽ giúp bạn giải quyết vấn đề này một cách tuyệt hảo nhất.\r\n\r\nKhi mua áo thun mới về, bạn nên vò nhẹ qua một lần với nước lạnh, để chết màu vải ( vải khi dệt ra là màu trắng, muốn có màu sắc nên nhà sản suất nhuộm màu). Vò nhanh rồi mang đi phơi liền, không nên ngâm qua lâu trong nước. Để giữ màu áo được lâu và không bị ra màu trong quá trình giặt, có thể ngâm áo thun trong nước ấm có pha chút giấm trong khoảng 15 - 20 phút.\r\n \r\nCách giặt áo thun mới mua - 1\r\n\r\nĐể áo thun mới mua luôn sáng màu nên vò nhẹ qua nước lạnh.\r\n \r\n \r\nĐối với áo có hình in, không nên ngâm lâu, giặt  bằng tay sẽ giữ được áo thun xài được lâu hơn. ( nếu khi mua hàng hình in bị lỗi, bạn có thể đổi lại). Nên giặt áo thun bằng nước lạnh hoặc nước nóng dưới 40 độ vì nếu giặt áo thun trong nước quá nóng sẽ làm vải giãn ra và lỏng áo.\r\n \r\nCách giặt áo thun mới mua - 2\r\n\r\nNên giặt mặt trái của áo.\r\n \r\nLưu ý: Không đổ trực tiếp các loại xà bông hoặc nước tẩy lên hình in. Tránh sử dụng các loại xà bông giặt có tính tẩy mạnh và tuyệt đối không dùng thuốc tẩy đối với áo màu.\r\n \r\nCách giặt áo thun mới mua - 3\r\n\r\nKhông đổ trực tiếp các loại xà bông hoặc nước tẩy lên áo.\r\n \r\nHạn chế dùng các loại nước xả mềm vải vì nó sẽ làm áo thun bị giãn rất nhanh và khiến hình in bị mềm, dễ bong tróc. Nếu bạn muốn áo thơm hơn sau khi giặt, bạn có thể dùng các loại nước xả thơm.\r\n \r\nĐể sử dụng áo thun được lâu hơn nên giặt bằng tay và lộn trái áo lại trong quá trình giặt để tránh trường hợp bề mặt hình in bị cọ sát dễ gây tróc và xước hình.\r\n \r\nCách giặt áo thun mới mua - 4\r\n\r\nBảo quản đúng cách sẽ giúp áo thun luôn mới.\r\n \r\nKhông nên vắt áo thun sau khi giặt vì như vậy sẽ khiến vải áo giãn ra và làm hỏng luôn chiếc áo của bạn. Tốt nhất nên gập áo lại rồi ấn cho nước thoát ra để chất vải không bị kéo chảy xệ xuống. Đến với 4MEN để swor hữu những chiếc áo thun tuyệt đẹp, thời trang mà không sợ phai màu trong quá trình giặt nhé!\r\n', 'images/images_tintuc/tin(5).jpg', '2016-03-09', 1),
(4, 'NHỮNG MẪU ÁO THỜI TRANG LUÔN ĐƯỢC GIỚI TRẺ YÊU THÍCH NHẤT HIỆN NAY.', '<p><strong>&Aacute;o sơ mi caro H&agrave;n Quốc l&agrave;m đi&ecirc;n đảo giới trẻ trong những m&ugrave;a thời trang gần đ&acirc;y tiếp tục sức n&oacute;ng trong năm 2015 với những sắc m&ugrave; mới. Những chiếc &aacute;o sơ mi chẳng bao giờ lỗi mốt v&agrave; lu&ocirc;n được refresh lại mối m&ugrave;a kh&ocirc;ng chỉ khiến c&aacute;c t&iacute;n đồ ph&aacute;t cuồng v&igrave; sự đa dạng của n&oacute; m&agrave; c&ograve;n đem lại vẻ đẹp trẻ trung, rạng ngời sức sống v&agrave; sự tươi trẻ cho người mặc, đặc biệt l&agrave; phong c&aacute;ch thời trang H&agrave;n Quốc đầy thanh lịch v&agrave; s&agrave;nh điệu.</strong></p>\r\n\r\n<p>Lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao v&agrave; được mến mộ khắp ch&acirc;u &Aacute;, thời trang H&agrave;n Quốc năm nay đem lại cho ch&uacute;ng ta những chiếc &aacute;o caro xinh xắn, tươi s&aacute;ng v&agrave; vừa vặn, thay v&igrave; những gam m&agrave;u trầm v&agrave; d&aacute;ng d&agrave;i rộng như những m&ugrave;a vừa rồi. Với chiếc &aacute;o của năm nay, c&ocirc; n&agrave;ng c&oacute; thể diện c&ugrave;ng quần jean, quần short hay ch&acirc;n v&aacute;y một c&aacute;ch dễ d&agrave;ng v&agrave; tương th&iacute;ch cũng rất cao, do vậy mặc d&ugrave; chắc chắn đ&atilde; n&oacute; trong tủ th&igrave; cũng h&atilde;y c&ugrave;ng Thời trang chuy&ecirc;n sỉ ngắm những chiếc &aacute;o sơ mi caro H&agrave;n Quốc xinh xắn để l&agrave;m mới những lựa chọn cho m&igrave;nh nh&eacute;!<br />\r\n<br />\r\n<img alt="áo sơ mi nữ giá sỉ,thời trang nữ giá sỉ,thời trang giá sỉ,áo sơ mi đẹp,áo sơ mi giá rẻ,áo sơ mi nữ 2015" src="http://thoitrangchuyensi.com/uploads/tin-tuc/2015_04/ao-so-mi-dinh-cuom-tay-dai-2.jpg" /><br />\r\n<br />\r\n<img alt="áo sơ mi nữ giá sỉ,thời trang nữ giá sỉ,thời trang giá sỉ,áo sơ mi đẹp,áo sơ mi giá rẻ,áo sơ mi nữ 2015" src="http://thoitrangchuyensi.com/uploads/tin-tuc/2015_04/ao-so-mi-phoi-co-cach-dieu-2.jpg" /><br />\r\n<br />\r\n<img alt="áo sơ mi nữ giá sỉ,thời trang nữ giá sỉ,thời trang giá sỉ,áo sơ mi đẹp,áo sơ mi giá rẻ,áo sơ mi nữ 2015" src="http://thoitrangchuyensi.com/uploads/tin-tuc/2015_04/ao-so-mi-phoi-ren-hong-2.jpg" /><br />\r\n<br />\r\n<br />\r\nKh&ocirc;ng chỉ c&oacute; giới trẻ, &aacute;o sơ mi caro H&agrave;n Quốc năm 2015 n&agrave;y c&ograve;n h&uacute;t hồn cả những chị em c&ocirc;ng sở kh&oacute; t&iacute;nh, kh&oacute; chiều nhất. R&otilde; r&agrave;ng l&agrave; sự thanh lịch, nhẹ nh&agrave;ng đ&atilde; được trả về với những chiếc &aacute;o v&agrave; khiến n&agrave;ng th&iacute;ch m&ecirc;. Một ng&agrave;y bắt đầu với &aacute;o sơ mi caro H&agrave;n Quốc khiến bạn tr&agrave;n đầy năng lượng v&agrave; tươi trẻ trong từng hoạt động, c&ograve;n chần chờ g&igrave; m&agrave; kh&ocirc;ng sắm cho m&igrave;nh một chiếc để thỏa mẫn cơn kh&aacute;t caro, nhanh tay nh&eacute; c&aacute;c n&agrave;ng!</p>\r\n', 'images/images_tintuc/1458720899ao-so-mi-nu-tay-canh-sen-2_4eaa9355c6613af87da233d5df315c4d.jpg', '2016-03-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_password`, `c_fullname`) VALUES
(6, 'admin123', 'b58c50e209762c24adb9f29daffe249c', 'Nguyễn Văn Nam'),
(7, 'admin2', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `tbl_nhomsanpham`
--
ALTER TABLE `tbl_nhomsanpham`
  ADD PRIMARY KEY (`id_nhomsp`);

--
-- Indexes for table `tbl_online`
--
ALTER TABLE `tbl_online`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_quangcao`
--
ALTER TABLE `tbl_quangcao`
  ADD PRIMARY KEY (`id_quangcao`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tbl_thongtin`
--
ALTER TABLE `tbl_thongtin`
  ADD PRIMARY KEY (`id_thongtin`);

--
-- Indexes for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_nhomsanpham`
--
ALTER TABLE `tbl_nhomsanpham`
  MODIFY `id_nhomsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_online`
--
ALTER TABLE `tbl_online`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_quangcao`
--
ALTER TABLE `tbl_quangcao`
  MODIFY `id_quangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_thongtin`
--
ALTER TABLE `tbl_thongtin`
  MODIFY `id_thongtin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
