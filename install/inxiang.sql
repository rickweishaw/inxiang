/*
 Navicat MySQL Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : inxiang

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 01/06/2019 10:04:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for in_friend
-- ----------------------------
DROP TABLE IF EXISTS `in_friend`;
CREATE TABLE `in_friend`  (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `follower` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '关注者',
  `followed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '被关注者',
  `fo_time` datetime(0) NULL DEFAULT NULL COMMENT '关注时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for in_gallery
-- ----------------------------
DROP TABLE IF EXISTS `in_gallery`;
CREATE TABLE `in_gallery`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `author_id` int(11) NOT NULL COMMENT '作者id',
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '作者',
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '资源路径',
  `upload_time` datetime(0) NULL DEFAULT NULL COMMENT '上传时间',
  `likes` bigint(10) UNSIGNED NULL DEFAULT 0 COMMENT '点赞数',
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`, `author_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for in_user
-- ----------------------------
DROP TABLE IF EXISTS `in_user`;
CREATE TABLE `in_user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '昵称',
  `password` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '密码',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '电子邮箱',
  `saying` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NULL DEFAULT NULL COMMENT '个性签名',
  `phone` bigint(11) NULL DEFAULT NULL COMMENT '电话号码',
  `gender` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '性别',
  `is_active` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '是否激活',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
