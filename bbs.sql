/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : bbs

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 09/04/2021 21:07:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bbs_user
-- ----------------------------
DROP TABLE IF EXISTS `bbs_user`;
CREATE TABLE `bbs_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `age` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bbs_user
-- ----------------------------
INSERT INTO `bbs_user` VALUES (1, '测试3', '1111111111111', '天津', '123', 123);
INSERT INTO `bbs_user` VALUES (2, '李四', '3', '3', '3', 3);
INSERT INTO `bbs_user` VALUES (4, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (5, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (6, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (7, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (8, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (9, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '0', 3);
INSERT INTO `bbs_user` VALUES (10, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', '9', '0', 9);

SET FOREIGN_KEY_CHECKS = 1;
