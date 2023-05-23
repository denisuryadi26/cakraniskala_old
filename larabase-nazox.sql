/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : larabase-nazox

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 05/04/2023 15:31:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for audits
-- ----------------------------
DROP TABLE IF EXISTS `audits`;
CREATE TABLE `audits`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:guid)',
  `old_values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `new_values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` varchar(1023) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `audits_auditable_id_auditable_type_index`(`auditable_id` ASC, `auditable_type` ASC) USING BTREE,
  INDEX `audits_auditable_type_auditable_id_index`(`auditable_type` ASC, `auditable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of audits
-- ----------------------------
INSERT INTO `audits` VALUES (1, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\Menu', '2bacb906-8588-41c4-a050-5157e5e3ac4e', '{\"icon\":\"\",\"updated_by\":\"SYSTEM\"}', '{\"icon\":\"-\",\"updated_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 03:51:02', '2023-04-05 03:51:02');
INSERT INTO `audits` VALUES (2, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\Menu', 'd1089a44-9e3d-4925-bf3e-340369cc9a75', '{\"icon\":\"\",\"updated_by\":\"SYSTEM\"}', '{\"icon\":\"-\",\"updated_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 03:55:00', '2023-04-05 03:55:00');
INSERT INTO `audits` VALUES (3, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\Menu', 'a4fe5c25-1ae1-4263-a030-6a99b9d859af', '{\"icon\":\"\",\"updated_by\":\"SYSTEM\"}', '{\"icon\":\"-\",\"updated_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 03:55:11', '2023-04-05 03:55:11');
INSERT INTO `audits` VALUES (4, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\Menu', 'dc7fcab6-59d8-4e64-b545-51353e9fb5db', '{\"icon\":\"\",\"updated_by\":\"SYSTEM\"}', '{\"icon\":\"-\",\"updated_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 03:55:18', '2023-04-05 03:55:18');
INSERT INTO `audits` VALUES (5, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', '{\"password\":\"$2y$10$qDiRk5rmthqI8BOihvdbyeAOcE.HENSswWlm\\/oTJm7qpdxBbCYT.K\",\"profile_picture\":null,\"updated_by\":\"SYSTEM\"}', '{\"password\":\"$2y$10$G557GywfxC4RABa35Y.8JuS6nyOTki8vsrHYetkmEDDe6EAAi26Lu\",\"profile_picture\":\"profile_picture\\/4grgmyx1tn4jjl5gc96c.jpg\",\"updated_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 05:26:47', '2023-04-05 05:26:47');
INSERT INTO `audits` VALUES (6, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'created', 'App\\Models\\Menu', 'f86df329-21b6-435a-b6b6-67f72dafaa61', '[]', '{\"name\":\"Master\",\"code\":\"MASTER\",\"menu_order\":\"2000\",\"route_name\":\"#\",\"icon\":\"ri-database-2-line\",\"id\":\"f86df329-21b6-435a-b6b6-67f72dafaa61\",\"created_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 05:37:25', '2023-04-05 05:37:25');
INSERT INTO `audits` VALUES (7, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'created', 'App\\Models\\Menu', '214c68c7-2285-4be2-93cb-ede805e0fc1e', '[]', '{\"name\":\"Category\",\"parent_id\":\"f86df329-21b6-435a-b6b6-67f72dafaa61\",\"code\":\"CATEGORY\",\"menu_order\":\"2100\",\"route_name\":\"dashboard_categories\",\"icon\":\"-\",\"id\":\"214c68c7-2285-4be2-93cb-ede805e0fc1e\",\"created_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/menu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 05:38:18', '2023-04-05 05:38:18');
INSERT INTO `audits` VALUES (8, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'created', 'App\\Models\\Generator\\Category', '62a04c87-1379-4061-820f-7c3958b1781d', '[]', '{\"id\":\"62a04c87-1379-4061-820f-7c3958b1781d\",\"name\":\"Makanan\",\"created_by\":\"743f105e-e3ac-4e4b-9938-93c9fedd1056\"}', 'http://127.0.0.1:8000/administrator/categories', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 05:40:34', '2023-04-05 05:40:34');
INSERT INTO `audits` VALUES (9, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', '{\"password\":\"$2y$10$seS0DxBSqmT\\/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2\"}', '{\"password\":\"$2y$10$e6XQSozRVJAIIcmC0R6FOOsAUli2BvlbkLFBnbTQJAI4.rD5L7l5S\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 06:45:33', '2023-04-05 06:45:33');
INSERT INTO `audits` VALUES (10, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', '{\"password\":\"$2y$2y$10$seS0DxBSqmT\\/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2\"}', '{\"password\":\"$2y$10$CfJ855slyQVb\\/d4SiLi50evWSXpnmgSxQkl0lZlZvpVborGKNAkOC\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 07:18:17', '2023-04-05 07:18:17');
INSERT INTO `audits` VALUES (11, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', '{\"password\":\"$2y$10$seS0DxBSqmT\\/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2\"}', '{\"password\":\"$2y$10$FGtLC.2GW0opKFcIUnjIUe1wP88EtGcLCEM1Ul1ii50f\\/fcCo95xe\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 07:20:48', '2023-04-05 07:20:48');
INSERT INTO `audits` VALUES (12, 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', 'updated', 'App\\Models\\User', '743f105e-e3ac-4e4b-9938-93c9fedd1056', '{\"password\":\"$2y$10$seS0DxBSqmT\\/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2\"}', '{\"password\":\"$2y$10$HREsor1VdsM2p7Dd8YC0ju6L\\/WB8qtMNi13AE14VGxCFjXdyav.Be\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-04-05 07:35:49', '2023-04-05 07:35:49');

-- ----------------------------
-- Table structure for conf_group
-- ----------------------------
DROP TABLE IF EXISTS `conf_group`;
CREATE TABLE `conf_group`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conf_group
-- ----------------------------
INSERT INTO `conf_group` VALUES ('90cf8c7b-8b1a-474c-abea-836afd23309a', 'ADM', 'Admin', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_group` VALUES ('a293af71-6062-462f-a316-9d24ea37a062', 'SPRADM', 'Super Admin', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);

-- ----------------------------
-- Table structure for conf_group_menu
-- ----------------------------
DROP TABLE IF EXISTS `conf_group_menu`;
CREATE TABLE `conf_group_menu`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_addable` tinyint(1) NULL DEFAULT 0,
  `is_editable` tinyint(1) NULL DEFAULT 0,
  `is_viewable` tinyint(1) NULL DEFAULT 0,
  `is_deletable` tinyint(1) NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `conf_group_menu_group_id_foreign`(`group_id` ASC) USING BTREE,
  INDEX `conf_group_menu_menu_id_foreign`(`menu_id` ASC) USING BTREE,
  CONSTRAINT `conf_group_menu_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `conf_group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `conf_group_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `conf_menu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conf_group_menu
-- ----------------------------
INSERT INTO `conf_group_menu` VALUES ('0a199705-51d8-413b-b0f5-931fa949d3c9', 'a293af71-6062-462f-a316-9d24ea37a062', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('0b5f1a00-7c2c-4215-9ff6-f3c139e65a3c', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'f86df329-21b6-435a-b6b6-67f72dafaa61', 0, 0, 0, 0, NULL, NULL, NULL);
INSERT INTO `conf_group_menu` VALUES ('0bd5452a-2f0f-48b5-b22c-f32a01c8c23f', '90cf8c7b-8b1a-474c-abea-836afd23309a', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('0c65475b-283b-46c2-bb35-8b9eed716878', '90cf8c7b-8b1a-474c-abea-836afd23309a', '2bacb906-8588-41c4-a050-5157e5e3ac4e', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('26fd1769-af3a-4d3a-b9a8-09bad01f5b43', 'a293af71-6062-462f-a316-9d24ea37a062', 'dc7fcab6-59d8-4e64-b545-51353e9fb5db', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('2d5e5525-5672-4e64-b211-ef557d5b884e', 'a293af71-6062-462f-a316-9d24ea37a062', '2bacb906-8588-41c4-a050-5157e5e3ac4e', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('36a0617f-c6ff-4c2c-8572-2a80c312c718', 'a293af71-6062-462f-a316-9d24ea37a062', 'ad19b29c-9cd3-456a-88f6-3bd94cf719ea', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('50467468-2165-47b0-a3db-51171a6dcfb6', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'a4fe5c25-1ae1-4263-a030-6a99b9d859af', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('5845bebe-36ea-4c2c-b869-3ba83de18d12', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'ad19b29c-9cd3-456a-88f6-3bd94cf719ea', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('5eb31dfe-e8e0-4385-a248-9d980ec51b82', 'a293af71-6062-462f-a316-9d24ea37a062', 'd1089a44-9e3d-4925-bf3e-340369cc9a75', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('718a2de9-41cc-4dfd-87a9-3d60b258ff8e', 'a293af71-6062-462f-a316-9d24ea37a062', 'f86df329-21b6-435a-b6b6-67f72dafaa61', 1, 1, 1, 1, NULL, NULL, NULL);
INSERT INTO `conf_group_menu` VALUES ('98e18e21-a616-436e-95c6-55766e46da23', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'dc7fcab6-59d8-4e64-b545-51353e9fb5db', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('9d487a0f-d581-4435-b37b-e8627e4db3b9', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'd1089a44-9e3d-4925-bf3e-340369cc9a75', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('b9f9a7c8-b732-43d2-9310-4eec806cccbc', '90cf8c7b-8b1a-474c-abea-836afd23309a', '214c68c7-2285-4be2-93cb-ede805e0fc1e', 0, 0, 0, 0, NULL, NULL, NULL);
INSERT INTO `conf_group_menu` VALUES ('bcdab971-c26a-4bf2-9b00-5ae3744ebd13', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'c22f2a4c-8535-44d4-9d61-48275011fc4c', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('bf95d999-44f3-450d-9c47-2bbada8835db', 'a293af71-6062-462f-a316-9d24ea37a062', 'a4fe5c25-1ae1-4263-a030-6a99b9d859af', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');
INSERT INTO `conf_group_menu` VALUES ('d2e7d709-8984-40b9-bf14-1bc1ddbb5e7b', 'a293af71-6062-462f-a316-9d24ea37a062', '214c68c7-2285-4be2-93cb-ede805e0fc1e', 1, 1, 1, 1, NULL, NULL, NULL);
INSERT INTO `conf_group_menu` VALUES ('ece099fb-fde2-476d-9903-a2a2ac05ad8a', 'a293af71-6062-462f-a316-9d24ea37a062', 'c22f2a4c-8535-44d4-9d61-48275011fc4c', 1, 1, 1, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37');

-- ----------------------------
-- Table structure for conf_menu
-- ----------------------------
DROP TABLE IF EXISTS `conf_menu`;
CREATE TABLE `conf_menu`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_order` int NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_showed` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `conf_menu_parent_id_foreign`(`parent_id` ASC) USING BTREE,
  CONSTRAINT `conf_menu_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `conf_menu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conf_menu
-- ----------------------------
INSERT INTO `conf_menu` VALUES ('197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', NULL, 'ADMININSTRATOR', 'Administrator', 10000, 'ri-settings-5-line', NULL, 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('214c68c7-2285-4be2-93cb-ede805e0fc1e', 'f86df329-21b6-435a-b6b6-67f72dafaa61', 'CATEGORY', 'Category', 2100, '-', 'dashboard_categories', 1, NULL, '2023-04-05 05:38:18', '2023-04-05 05:38:18', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL, NULL);
INSERT INTO `conf_menu` VALUES ('2bacb906-8588-41c4-a050-5157e5e3ac4e', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 'GROUP', 'Group', 12000, '-', 'dashboard_group', 1, NULL, '2023-04-05 02:45:37', '2023-04-05 03:51:02', 'SYSTEM', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL);
INSERT INTO `conf_menu` VALUES ('a4fe5c25-1ae1-4263-a030-6a99b9d859af', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 'MENU', 'Menu', 13000, '-', 'dashboard_menu', 1, NULL, '2023-04-05 02:45:37', '2023-04-05 03:55:11', 'SYSTEM', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL);
INSERT INTO `conf_menu` VALUES ('ad19b29c-9cd3-456a-88f6-3bd94cf719ea', NULL, 'DASHBOARD', 'Dashboard', 1000, 'ri-dashboard-line', 'dashboard', 1, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('c22f2a4c-8535-44d4-9d61-48275011fc4c', NULL, 'PROFILE', 'PROFILE', 100000, '-', 'dashboard_profile', 0, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('d1089a44-9e3d-4925-bf3e-340369cc9a75', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 'SETTING', 'Setting', 15000, '-', 'dashboard_setting', 1, NULL, '2023-04-05 02:45:37', '2023-04-05 03:55:00', 'SYSTEM', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL);
INSERT INTO `conf_menu` VALUES ('dc7fcab6-59d8-4e64-b545-51353e9fb5db', '197c16e3-69c1-4f92-b3a6-3bf8b3f7fb60', 'USER', 'User', 11000, '-', 'dashboard_user', 1, NULL, '2023-04-05 02:45:37', '2023-04-05 03:55:18', 'SYSTEM', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL);
INSERT INTO `conf_menu` VALUES ('f86df329-21b6-435a-b6b6-67f72dafaa61', NULL, 'MASTER', 'Master', 2000, 'ri-database-2-line', NULL, 1, NULL, '2023-04-05 05:37:25', '2023-04-05 05:37:25', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL, NULL);

-- ----------------------------
-- Table structure for conf_setting
-- ----------------------------
DROP TABLE IF EXISTS `conf_setting`;
CREATE TABLE `conf_setting`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conf_setting
-- ----------------------------
INSERT INTO `conf_setting` VALUES ('2723d1cb-4b01-45f6-ade1-14f5e0475b85', 'app_name', 'text', 'LARABASE', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('332c98fa-e135-423c-ba79-505973d7a699', 'footer', 'text', '2022 © Larabase Development', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('4686f757-4ddb-4f7b-b6bb-0c63dc4eb5b6', 'app_name_short', 'text', 'LBase', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('831fb4e5-57c9-4c47-b24f-dddf27940d50', 'super_password', 'text', 'larabase123', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('cf362a6a-d465-4ea6-aee9-a7c947b2c855', 'logo_icon', 'text', 'setting/ceca63c1baf77c9cc635fdf9af4ef331.png', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('ef4db056-0e50-42af-880e-a91d4dd4ae6f', 'logo', 'text', 'setting/ceca63c1baf77c9cc635fdf9af4ef331.png', NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);

-- ----------------------------
-- Table structure for conf_users
-- ----------------------------
DROP TABLE IF EXISTS `conf_users`;
CREATE TABLE `conf_users`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `conf_users_group_id_foreign`(`group_id` ASC) USING BTREE,
  CONSTRAINT `conf_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `conf_group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conf_users
-- ----------------------------
INSERT INTO `conf_users` VALUES ('743f105e-e3ac-4e4b-9938-93c9fedd1056', 'a293af71-6062-462f-a316-9d24ea37a062', 'Super Admin', 'spradmin', 'spradmin@gmail.com', '$2y$10$seS0DxBSqmT/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2', 'profile_picture/4grgmyx1tn4jjl5gc96c.jpg', NULL, NULL, '2023-04-05 02:45:37', '2023-04-05 07:35:49', 'SYSTEM', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL);
INSERT INTO `conf_users` VALUES ('fef81019-a821-4c33-8de5-11f887a30dcf', '90cf8c7b-8b1a-474c-abea-836afd23309a', 'Admin', 'admin', 'admin@gmail.com', '$2y$10$seS0DxBSqmT/lJKzJpcWB.BxbrFqJNzNUj1KW6TQR4shmIkDeuCJ2', NULL, NULL, NULL, '2023-04-05 02:45:37', '2023-04-05 02:45:37', 'SYSTEM', 'SYSTEM', NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2021_04_19_122601_setup_migration', 1);
INSERT INTO `migrations` VALUES (4, '2021_04_19_124542_setup_relation', 1);
INSERT INTO `migrations` VALUES (5, '2022_12_15_102117_create_audits_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_01_24_000000_create_todos_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_04_01_000000_create_categories_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('62a04c87-1379-4061-820f-7c3958b1781d', 'Makanan', NULL, '2023-04-05 05:40:34', '2023-04-05 05:40:34', '743f105e-e3ac-4e4b-9938-93c9fedd1056', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_todo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_todo`;
CREATE TABLE `tbl_todo`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_todo
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
