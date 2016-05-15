-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Client: sql313.byetcluster.com
-- Généré le: Dim 24 Avril 2016 à 04:40
-- Version du serveur: 5.6.29-76.2
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `b22_17869603_hoctap`
--

-- --------------------------------------------------------

--
-- Structure de la table `it_baiviet`
--

CREATE TABLE IF NOT EXISTS `it_baiviet` (
  `id` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) DEFAULT NULL,
  `id_danhMuc` varchar(255) NOT NULL,
  `chuDe` varchar(255) NOT NULL,
  `tapTin` varchar(255) DEFAULT NULL,
  `noiDung` text,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `it_danhmuc`
--

CREATE TABLE IF NOT EXISTS `it_danhmuc` (
  `id` varchar(255) NOT NULL,
  `tenMenu` varchar(255) NOT NULL,
  `menuCon` varchar(1) DEFAULT 'N',
  `menuCha` varchar(255) DEFAULT NULL,
  `viTri` varchar(1) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `it_danhmuc`
--

INSERT INTO `it_danhmuc` (`id`, `tenMenu`, `menuCon`, `menuCha`, `viTri`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
('angular', 'Angular', 'N', 'javascriptframework', 'T', NULL, NULL, NULL, NULL),
('aspnetmvc4', 'Asp.net MVC 4', 'N', 'laptrinhc-sharp', 'T', NULL, NULL, NULL, NULL),
('chiasetailieu', 'Chia sẽ tài liệu', 'N', '', 'R', NULL, NULL, NULL, NULL),
('codeigniter', 'CodeIgniter', 'N', 'phpframework', 'T', NULL, NULL, NULL, NULL),
('database', 'Database', 'Y', '', 'T', NULL, NULL, NULL, NULL),
('javascriptframework', 'Javascript Framework', 'Y', '', 'T', NULL, NULL, NULL, NULL),
('laptrinhc-sharp', 'Lập trình C#', 'Y', '', 'T', NULL, NULL, NULL, NULL),
('laravel', 'Laravel', 'N', 'phpframework', 'T', NULL, NULL, NULL, NULL),
('mysql', 'MySql', 'N', 'database', 'T', NULL, NULL, NULL, NULL),
('nodejs', 'Nodejs', 'N', 'javascriptframework', 'T', NULL, NULL, NULL, NULL),
('phpframework', 'PHP Framework', 'Y', '', 'T', NULL, NULL, NULL, NULL),
('phpmysql', 'PHP & MySql', 'N', '', 'T', NULL, NULL, NULL, NULL),
('sails', 'Sails', 'N', 'javascriptframework', 'T', NULL, NULL, NULL, NULL),
('sqlserver', 'Sql Server', 'N', 'database', 'T', NULL, NULL, NULL, NULL),
('tintuc', 'Tin tức', 'N', '', 'R', NULL, NULL, NULL, NULL),
('windowform', 'Window Form', 'N', 'laptrinhc-sharp', 'T', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `it_ghichu`
--

CREATE TABLE IF NOT EXISTS `it_ghichu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenGhiChu` varchar(255) NOT NULL,
  `danhMuc` varchar(255) NOT NULL,
  `diaChi` text NOT NULL,
  `chuThich` text,
  `maTruyCap` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `it_ghichu`
--

INSERT INTO `it_ghichu` (`id`, `tenGhiChu`, `danhMuc`, `diaChi`, `chuThich`, `maTruyCap`) VALUES
(6, 'Album hình con cáo', 'Image', 'https://www.google.com/search?tbm=isch&tbs=rimg%3ACeI1EDvJGZ8JIjgQ-CKrxZegD6BZU1ggE0KxRwwGNqWUJbBHJgNIpuhzOmxgyIz1jr-GJ9h4xa5sHENE7sQ8mN-cdSoSCRD4IqvFl6APERTv5D5pVKfiKhIJoFlTWCATQrERYelfkZB1HowqEglHDAY2pZQlsBEh8IKUUwnStCoSCUcmA0im6HM6EbcQQbjZ38dnKhIJbGDIjPWOv4YR42gX-tni04MqEgkn2HjFrmwcQxF8GR0Oz1OhYioSCUTuxDyY35x1ES0EpACul3eH&q=sprite%20character&bih=653&biw=1366&ved=0ahUKEwiQlMmqo6HMAhWl2aYKHQDyA1sQ9C8ICQ&dpr=1', '', 'tvinh'),
(7, 'Mail Cinotec', 'Công ty', 'http://mail.cinotec.com.vn/webmail.nsf/?Open', '', 'hphu'),
(8, 'VIC Cinotec', 'Công ty', 'http://vic.cinotec.com.vn/CNTVIC/DocIn.nsf?Open', '', 'hphu'),
(9, 'Học Excel', 'Excel', 'http://excel.webkynang.vn/', '', 'hphu'),
(10, 'Học tin học trực tuyến', 'Excel', 'http://hoc.trungtamtinhoc.edu.vn/', '', 'hphu'),
(11, 'Hàm VLOOKUP', 'Excel', 'http://excel.webkynang.vn/ham-vlookup-va-hlookup-ket-hop-ham-if-de-tim-dinh-muc-su-dung/', '', 'hphu'),
(12, 'Các hàm excel 2003, 2007, 2010', 'Excel', 'http://excel.webkynang.vn/cac-ham-trong-excel-2007-2010-2003/', '', 'hphu'),
(13, 'Hàm Vlookup, cách sử dụng hàm Vlookup trong Excel 2013, 2010, 2007', 'Excel', 'http://thuthuat.taimienphi.vn/huong-dan-su-dung-ham-vlookup-trong-excel-633n.aspx', '', 'hphu'),
(14, 'Excel 2013 Turotial', 'Excel', 'https://www.youtube.com/watch?v=7vkIB7VN75k&list=PLE10sFVGtI1dt1sNjQp6LLUycV25FNkQo', '', 'hphu'),
(15, 'Microsoft Excel 2010 Tutorial', 'Excel', 'https://www.youtube.com/watch?v=JfJpplCNe8w&list=PLA315AFCD23B50347', '', 'hphu'),
(16, 'Excel 2010 Tutorial For Beginners #1 - Overview (Microsoft Excel)', 'Excel', 'https://www.youtube.com/watch?v=eI_7oc-E3h0&list=PLjT_MIUPIOA9ySAtvcQw1TJ0GaWKhUuJN', '', 'hphu'),
(17, 'Lập trình Phonegap', 'Phonegap', 'http://phonegap.com/', '', 'hphu'),
(18, '55 câu lệnh hay dùng nhất trong RUN', 'Lệnh CMD trên Windows', 'http://cuuhotinhoc.com/55-cau-lenh-hay-dung-nhat-trong-run/', '', 'hphu'),
(19, '99 câu lệnh chạy từ hộp thoại Run', 'Lệnh CMD trên Windows', 'http://marinatruong.blogspot.com/2015/03/99-cau-lenh-chay-tu-hop-thoai-run.html', '', 'hphu'),
(20, 'Sửa chữa laptop', 'Sửa chữa laptop', 'http://sualaptopninhbinh.blogspot.com/', '', 'hphu'),
(21, '8 Cách giảm mỡ bụng nhanh CAM KẾT hiệu quả cho nam, nữ', 'Giảm cân', 'http://giammonhanh.vn/cach-giam-beo-bung-nhanh-nhat-hien-nay/', '', 'hphu'),
(22, 'Món ăn dễ làm', 'Món ăn', 'http://monandelam.com/', '', 'hphu'),
(24, 'Phim mới', 'Phim', 'http://www.phimmoi.net/', '', 'hphu'),
(25, 'Bức màn bí mật', 'Phim', 'http://www.xemphim2015.com/2015/04/buc-man-bi-mat-phan-2-2002-tron-bo.html', '', 'hphu'),
(26, 'Kungfu panda', 'Phim', 'http://nuiphim.com/xem-phim-online/kungfu-gau-truc/304801.html', '', 'hphu'),
(27, 'Kungfu panda 3', 'Phim', 'http://phimbo.tv/phim/kung-fu-gau-truc-3-6433/xem-phim.html', '', 'hphu'),
(28, 'Laptop ngon', 'Laptop', 'https://www.laptopvip.vn/asus-gl552vx-dm143d.html', '', 'tvinh'),
(29, 'Ghế hơi thư giản', 'Nội thất', 'https://www.sendo.vn/san-pham/ghe-hoi-thu-gian-intex-2796207/', '', 'tvinh'),
(30, 'Làm bánh răng', 'Video', 'https://www.youtube.com/watch?v=oNuhr3htNWs', '', 'tvinh'),
(31, 'Ghê hơi đa năng', 'Nội thất', 'http://intexvietnam.vn/p/ghế-hơi-intex', '', 'tvinh'),
(32, 'Tấm mica nhựa', 'Vật liệu', 'http://www.alu-mica.com/tam-nhua-mica/tam-nhua-mica-chochen.html', '', 'tvinh'),
(33, 'Tấm mica nhựa', 'Vật liệu', 'http://www.micaalu.com/shops/Tam-lop-lay-sang-Poly/Tam-Poly-dac-trang-trong-8/', '', 'tvinh'),
(34, 'Bút cảm ứng', 'Thiết bị', 'http://wacomvietnam.vn/products/detail/254-wacom-bamboo-stylus-duo-cs-110k.html', '', 'tvinh'),
(35, 'Bán thùng container', 'Vật liệu', 'https://www.facebook.com/Container-c%C5%A9-gi%C3%A1-r%E1%BA%BB-1434257580126865/', '', 'tvinh'),
(36, 'Aoi sora', 'Porn', 'tự tìm trên google đi', '', 'tvinh'),
(37, 'Kho tài nguyên game', 'Resource code', 'https://www.gamedevmarket.net/', '', 'tvinh'),
(38, 'Mua bán oto cũ', 'Car', 'anycar.vn', '', 'tvinh'),
(39, 'Búp bê ngon', 'Sex doll', 'http://dochoitinhducmoi.com/bup-be-tinh-duc/bup-be-tinh-duc-nhat-ban/', '', 'tvinh');

-- --------------------------------------------------------

--
-- Structure de la table `it_truycap`
--

CREATE TABLE IF NOT EXISTS `it_truycap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenTruyCap` varchar(200) NOT NULL,
  `taiKhoan` varchar(150) NOT NULL,
  `matKhau` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `it_truycap`
--

INSERT INTO `it_truycap` (`id`, `tenTruyCap`, `taiKhoan`, `matKhau`) VALUES
(2, 'Hải Phú', 'hphu', '0f246b24849dba535ade6e727cccdf71'),
(3, 'Thế Vinh', 'tvinh', '72eed1cff588617d4dc8311fa28e6e3d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
