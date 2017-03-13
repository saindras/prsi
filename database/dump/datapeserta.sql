/*
Navicat MySQL Data Transfer

Source Server         : Homestead
Source Server Version : 50717
Source Host           : 127.0.0.1:33060
Source Database       : homestead

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-03-13 11:12:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datapeserta
-- ----------------------------
DROP TABLE IF EXISTS `datapeserta`;
CREATE TABLE `datapeserta` (
  `idpeserta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namapeserta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `asalsekolah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `kelompokumur` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nolomba1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nolomba2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nolomba3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nolomba4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaklub` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktusebelum` time NOT NULL,
  PRIMARY KEY (`idpeserta`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of datapeserta
-- ----------------------------
INSERT INTO `datapeserta` VALUES ('1', 'HAJRI MUTAQILAH', 'L', '2009-12-22', 'SD KAMPUNG KAJANAN', '7', 'P', '2017-03-12 09:50:01', '2017-03-12 09:50:01', '58c519c9e020b', '50 M GAYA BEBAS', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', 'MOLA-MOLA SC', '01:02:06');
INSERT INTO `datapeserta` VALUES ('2', 'MAULIA SAFITRI', 'P', '2009-01-03', 'SD KAMPUNG KAJANAN', '8', 'V', '2017-03-12 10:57:21', '2017-03-12 10:57:21', '58c52991bf21e', '50 M GAYA PUNGGUNG', '50 M GAYA BEBAS', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', '00:09:09');
INSERT INTO `datapeserta` VALUES ('3', 'DINDA ARTIKA SARI', 'P', '2009-05-04', 'SD KAMPUNG KAJANAN', '7', 'P', '2017-03-12 15:54:06', '2017-03-12 15:54:06', '58c56f1dec707', '25 M GAYA BEBAS', '25 M GAYA PUNGGUNG', '25 M GAYA KUPU-KUPU', 'TIDAK ADA', 'MOLA-MOLA SC', '00:14:03');
INSERT INTO `datapeserta` VALUES ('4', 'KHOIRUL ANAM', 'L', '2007-06-29', 'SD KAMPUNG KAJANAN', '9', 'V', '2017-03-12 15:58:49', '2017-03-12 15:58:49', '58c5703958da5', '50 M GAYA BEBAS', '50 M GAYA DADA', '50 M GAYA PUNGGUNG', '50 M GAYA KUPU-KUPU', 'TIDAK ADA', '00:15:09');
INSERT INTO `datapeserta` VALUES ('5', 'M. INDRA RAMADHAN', 'L', '2004-11-11', 'SD KAMPUNG KAJANAN', '12', 'III', '2017-03-12 15:59:44', '2017-03-12 15:59:44', '58c57070bdacc', '50 M GAYA BEBAS', '50 M GAYA DADA', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', '00:08:15');
INSERT INTO `datapeserta` VALUES ('6', 'MUHAMMAD KELVIN', 'L', '2002-06-08', 'SD KAMPUNG KAJANAN', '14', 'II', '2017-03-12 16:00:47', '2017-03-12 16:00:47', '58c570af2354e', '50 M GAYA KUPU-KUPU', '50 M GAYA BEBAS', '50 M GAYA DADA', '100 M GAYA DADA', 'DOLPHIN SC', '00:03:10');
INSERT INTO `datapeserta` VALUES ('7', 'I KD DIMAS ARTHA PRAYOGA', 'L', '2010-08-23', 'TK KARTIKA', '6', 'P', '2017-03-12 16:04:22', '2017-03-12 16:04:22', '58c57186e1681', '25 M GAYA BEBAS', '25 M GAYA PUNGGUNG', 'TIDAK ADA', 'TIDAK ADA', 'GARUDA SC', '00:06:40');
INSERT INTO `datapeserta` VALUES ('8', 'MADE JEKO SATRIANA', 'L', '2008-06-03', 'SD KARYA', '8', 'V', '2017-03-12 16:06:01', '2017-03-12 16:06:01', '58c571e990778', '50 M GAYA BEBAS', '50 M GAYA DADA', '50 M GAYA PUNGGUNG', '50 M GAYA KUPU-KUPU', 'BINA SAKTI SC', '00:07:54');
INSERT INTO `datapeserta` VALUES ('9', 'GEDE FANEL BAGUSTA', 'L', '2005-07-28', 'SD N 5 JINENG DALEM', '11', 'IV', '2017-03-12 16:07:48', '2017-03-12 16:07:48', '58c5725469bba', '50 M GAYA BEBAS', '50 M GAYA DADA', 'TIDAK ADA', 'TIDAK ADA', 'MOLA-MOLA SC', '00:03:06');
INSERT INTO `datapeserta` VALUES ('10', 'MADE SELKA MARAVILOSA', 'L', '2009-03-19', 'SD N 5 JINENG DALEM', '7', 'P', '2017-03-12 16:08:31', '2017-03-12 16:08:31', '58c5727fcfd3b', '25 M GAYA BEBAS', '25 M GAYA DADA', '25 M GAYA PUNGGUNG', '25 M GAYA KUPU-KUPU', 'MERPATI LAUT SC', '00:14:03');
INSERT INTO `datapeserta` VALUES ('11', 'GEDE ARYANTIKA', 'L', '2007-03-19', 'SD N 1 PAKET AGUNG', '9', 'V', '2017-03-12 16:09:38', '2017-03-12 16:09:38', '58c572c242c8f', '50 M GAYA BEBAS', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', 'GARUDA SC', '00:15:09');
INSERT INTO `datapeserta` VALUES ('12', 'KADEK SURYAWAN', 'L', '2008-10-14', 'SD N 1 PAKET AGUNG', '8', 'V', '2017-03-12 16:10:15', '2017-03-12 16:10:15', '58c572e6ebfcc', '50 M GAYA BEBAS', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', 'LUAR BULELENG', '00:12:02');
INSERT INTO `datapeserta` VALUES ('13', 'L. DINDA PRAMESWARI', 'P', '2005-07-28', 'SD KARYA', '11', 'IV', '2017-03-12 16:11:03', '2017-03-12 16:11:03', '58c57316f33fb', '50 M GAYA BEBAS', '100 M GAYA BEBAS', 'TIDAK ADA', 'TIDAK ADA', 'GARUDA SC', '00:05:13');
INSERT INTO `datapeserta` VALUES ('14', 'NYM. WIDYA HARIMBAWA', 'L', '2007-01-16', 'SD N PENGLATAN', '10', 'IV', '2017-03-12 16:16:03', '2017-03-12 16:16:03', '58c57443cc71d', '50 M GAYA DADA', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA', '00:06:18');
SET FOREIGN_KEY_CHECKS=1;
