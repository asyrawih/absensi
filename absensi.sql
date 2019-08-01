/*
 Navicat Premium Data Transfer

 Source Server         : DatabaseKu
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : absensi

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 01/08/2019 16:53:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_absensi
-- ----------------------------
DROP TABLE IF EXISTS `t_absensi`;
CREATE TABLE `t_absensi`  (
  `absen_id` int(11) NOT NULL AUTO_INCREMENT,
  `mapel_id` int(11) NOT NULL,
  `siswa_id` int(11) NULL DEFAULT NULL,
  `guru_id` int(11) NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`absen_id`) USING BTREE,
  INDEX `mapel_id`(`mapel_id`) USING BTREE,
  INDEX `siswa_id`(`siswa_id`) USING BTREE,
  INDEX `guru_id`(`guru_id`) USING BTREE,
  CONSTRAINT `t_absensi_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `t_mapel` (`mapel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_absensi_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `t_siswa` (`siswa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_absensi_ibfk_3` FOREIGN KEY (`guru_id`) REFERENCES `t_guru` (`guru_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_absensi
-- ----------------------------
INSERT INTO `t_absensi` VALUES (7, 1, 3, NULL, 'hadir', '2019-07-31');
INSERT INTO `t_absensi` VALUES (8, 2, 3, NULL, 'hadir', '2019-07-31');
INSERT INTO `t_absensi` VALUES (9, 4, 3, NULL, 'izin', '2019-07-31');
INSERT INTO `t_absensi` VALUES (10, 1, 4, NULL, 'hadir', '2019-07-31');
INSERT INTO `t_absensi` VALUES (11, 2, 4, NULL, 'hadir', '2019-07-31');

-- ----------------------------
-- Table structure for t_guru
-- ----------------------------
DROP TABLE IF EXISTS `t_guru`;
CREATE TABLE `t_guru`  (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_guru` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`guru_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_guru
-- ----------------------------
INSERT INTO `t_guru` VALUES (1, 'Hanan', 'Tomoni', '12312', '085242541413');
INSERT INTO `t_guru` VALUES (2, 'baco', 'Tomoni', '2001', '0823885291');
INSERT INTO `t_guru` VALUES (3, 'Takka', 'Tomoni', 'A002', '085231234123');

-- ----------------------------
-- Table structure for t_kelas
-- ----------------------------
DROP TABLE IF EXISTS `t_kelas`;
CREATE TABLE `t_kelas`  (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `tingkat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kelas_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kelas
-- ----------------------------
INSERT INTO `t_kelas` VALUES (1, 'VII-1');
INSERT INTO `t_kelas` VALUES (2, 'VII-2');

-- ----------------------------
-- Table structure for t_mapel
-- ----------------------------
DROP TABLE IF EXISTS `t_mapel`;
CREATE TABLE `t_mapel`  (
  `mapel_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_mapel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`mapel_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_mapel
-- ----------------------------
INSERT INTO `t_mapel` VALUES (1, 'Bahasa Indonesia', '001');
INSERT INTO `t_mapel` VALUES (2, 'MATEMATIKA', '002');
INSERT INTO `t_mapel` VALUES (3, 'IPS', '003');
INSERT INTO `t_mapel` VALUES (4, 'IPA', '004');

-- ----------------------------
-- Table structure for t_siswa
-- ----------------------------
DROP TABLE IF EXISTS `t_siswa`;
CREATE TABLE `t_siswa`  (
  `siswa_id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`siswa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_siswa
-- ----------------------------
INSERT INTO `t_siswa` VALUES (3, 'Becce', 'Tomoni', '123231', 'VII-1', 'L', '08523234123');
INSERT INTO `t_siswa` VALUES (4, 'yushar', 'Sukria', '123123', 'VII-2', 'L', '91239123');

SET FOREIGN_KEY_CHECKS = 1;
