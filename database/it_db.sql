/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - it60
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`it60` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `it60`;

/*Table structure for table `it_baiviet` */

DROP TABLE IF EXISTS `it_baiviet`;

CREATE TABLE `it_baiviet` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `it_baiviet` */

/*Table structure for table `it_danhmuc` */

DROP TABLE IF EXISTS `it_danhmuc`;

CREATE TABLE `it_danhmuc` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `it_danhmuc` */

insert  into `it_danhmuc`(`id`,`tenMenu`,`menuCon`,`menuCha`,`viTri`,`createdDate`,`createdBy`,`modifiedDate`,`modifiedBy`) values ('angular','Angular','N','javascriptframework','T',NULL,NULL,NULL,NULL),('aspnetmvc4','Asp.net MVC 4','N','laptrinhc-sharp','T',NULL,NULL,NULL,NULL),('chiasetailieu','Chia sẽ tài liệu','N','','R',NULL,NULL,NULL,NULL),('codeigniter','CodeIgniter','N','phpframework','T',NULL,NULL,NULL,NULL),('database','Database','Y','','T',NULL,NULL,NULL,NULL),('javascriptframework','Javascript Framework','Y','','T',NULL,NULL,NULL,NULL),('laptrinhc-sharp','Lập trình C#','Y','','T',NULL,NULL,NULL,NULL),('laravel','Laravel','N','phpframework','T',NULL,NULL,NULL,NULL),('mysql','MySql','N','database','T',NULL,NULL,NULL,NULL),('nodejs','Nodejs','N','javascriptframework','T',NULL,NULL,NULL,NULL),('phpframework','PHP Framework','Y','','T',NULL,NULL,NULL,NULL),('phpmysql','PHP & MySql','N','','T',NULL,NULL,NULL,NULL),('sails','Sails','N','javascriptframework','T',NULL,NULL,NULL,NULL),('sqlserver','Sql Server','N','database','T',NULL,NULL,NULL,NULL),('tintuc','Tin tức','N','','R',NULL,NULL,NULL,NULL),('windowform','Window Form','N','laptrinhc-sharp','T',NULL,NULL,NULL,NULL);

/*Table structure for table `it_ghichu` */

DROP TABLE IF EXISTS `it_ghichu`;

CREATE TABLE `it_ghichu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenGhiChu` varchar(255) NOT NULL,
  `danhMuc` varchar(255) NOT NULL,
  `diaChi` text NOT NULL,
  `chuThich` text,
  `maTruyCap` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `it_ghichu` */

/*Table structure for table `it_truycap` */

DROP TABLE IF EXISTS `it_truycap`;

CREATE TABLE `it_truycap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenTruyCap` varchar(200) NOT NULL,
  `taiKhoan` varchar(150) NOT NULL,
  `matKhau` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `it_truycap` */

insert  into `it_truycap`(`id`,`tenTruyCap`,`taiKhoan`,`matKhau`) values (2,'Hải Phú','hphu','827ccb0eea8a706c4c34a16891f84e7b'),(3,'Thế Vinh','tvinh','827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
