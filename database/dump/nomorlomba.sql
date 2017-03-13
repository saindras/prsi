/*
Navicat MySQL Data Transfer

Source Server         : Homestead
Source Server Version : 50717
Source Host           : 127.0.0.1:33060
Source Database       : homestead

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-03-13 11:12:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nomorlomba
-- ----------------------------
DROP TABLE IF EXISTS `nomorlomba`;
CREATE TABLE `nomorlomba` (
  `idnolomba` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gaya` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompokumur` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idnolomba`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of nomorlomba
-- ----------------------------
INSERT INTO `nomorlomba` VALUES ('5', 'GAYA BEBAS', '50', 'I');
INSERT INTO `nomorlomba` VALUES ('6', 'GAYA BEBAS', '100', 'I');
INSERT INTO `nomorlomba` VALUES ('7', 'GAYA BEBAS', '200', 'I');
INSERT INTO `nomorlomba` VALUES ('8', 'GAYA DADA', '50', 'I');
INSERT INTO `nomorlomba` VALUES ('9', 'GAYA DADA', '100', 'I');
INSERT INTO `nomorlomba` VALUES ('10', 'GAYA DADA', '200', 'I');
INSERT INTO `nomorlomba` VALUES ('11', 'GAYA PUNGGUNG', '50', 'I');
INSERT INTO `nomorlomba` VALUES ('12', 'GAYA PUNGGUNG', '100', 'I');
INSERT INTO `nomorlomba` VALUES ('13', 'GAYA KUPU-KUPU', '50', 'I');
INSERT INTO `nomorlomba` VALUES ('14', 'GAYA BEBAS', '50', 'II');
INSERT INTO `nomorlomba` VALUES ('15', 'GAYA BEBAS', '100', 'II');
INSERT INTO `nomorlomba` VALUES ('16', 'GAYA BEBAS', '200', 'II');
INSERT INTO `nomorlomba` VALUES ('17', 'GAYA DADA', '50', 'II');
INSERT INTO `nomorlomba` VALUES ('18', 'GAYA DADA', '100', 'II');
INSERT INTO `nomorlomba` VALUES ('19', 'GAYA DADA', '200', 'II');
INSERT INTO `nomorlomba` VALUES ('20', 'GAYA PUNGGUNG', '50', 'II');
INSERT INTO `nomorlomba` VALUES ('21', 'GAYA PUNGGUNG', '100', 'II');
INSERT INTO `nomorlomba` VALUES ('22', 'GAYA KUPU-KUPU', '50', 'II');
INSERT INTO `nomorlomba` VALUES ('23', 'GAYA BEBAS', '50', 'III');
INSERT INTO `nomorlomba` VALUES ('24', 'GAYA BEBAS', '100', 'III');
INSERT INTO `nomorlomba` VALUES ('25', 'GAYA DADA', '50', 'III');
INSERT INTO `nomorlomba` VALUES ('26', 'GAYA DADA', '100', 'III');
INSERT INTO `nomorlomba` VALUES ('27', 'GAYA PUNGGUNG', '50', 'III');
INSERT INTO `nomorlomba` VALUES ('28', 'GAYA PUNGGUNG', '100', 'III');
INSERT INTO `nomorlomba` VALUES ('29', 'GAYA KUPU-KUPU', '50', 'III');
INSERT INTO `nomorlomba` VALUES ('30', 'GAYA BEBAS', '50', 'IV');
INSERT INTO `nomorlomba` VALUES ('31', 'GAYA BEBAS', '100', 'IV');
INSERT INTO `nomorlomba` VALUES ('32', 'GAYA DADA', '50', 'IV');
INSERT INTO `nomorlomba` VALUES ('33', 'GAYA DADA', '100', 'IV');
INSERT INTO `nomorlomba` VALUES ('34', 'GAYA PUNGGUNG', '50', 'IV');
INSERT INTO `nomorlomba` VALUES ('35', 'GAYA PUNGGUNG', '100', 'IV');
INSERT INTO `nomorlomba` VALUES ('36', 'GAYA KUPU-KUPU', '50', 'IV');
INSERT INTO `nomorlomba` VALUES ('37', 'GAYA BEBAS', '50', 'V');
INSERT INTO `nomorlomba` VALUES ('38', 'GAYA DADA', '50', 'V');
INSERT INTO `nomorlomba` VALUES ('39', 'GAYA PUNGGUNG', '50', 'V');
INSERT INTO `nomorlomba` VALUES ('40', 'GAYA KUPU-KUPU', '50', 'V');
INSERT INTO `nomorlomba` VALUES ('41', 'GAYA BEBAS', '25', 'P');
INSERT INTO `nomorlomba` VALUES ('42', 'GAYA DADA', '25', 'P');
INSERT INTO `nomorlomba` VALUES ('43', 'GAYA PUNGGUNG', '25', 'P');
INSERT INTO `nomorlomba` VALUES ('44', 'GAYA KUPU-KUPU', '25', 'P');
SET FOREIGN_KEY_CHECKS=1;
