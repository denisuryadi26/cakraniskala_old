/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : larabase-opatix

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 31/03/2023 14:02:50
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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of audits
-- ----------------------------
INSERT INTO `audits` VALUES (1, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'updated', 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', '{\"password\":\"$2y$10$eLYc4GHzv5MOpnOM919mSu01NDT0C7hy20HxzjrEAeNk878.DpS1G\",\"profile_picture\":\"profile_picture\\/1o4d7v5031wmyij8jnxn.jpg\"}', '{\"password\":\"$2y$10$DjQ9FAmNksquAVq\\/B3\\/.0O0Ujxt4TIo1Ft7cZy4Z0gqHxEe\\/jtlle\",\"profile_picture\":\"profile_picture\\/hogx8d4kytsgalwwj875.jpg\"}', 'http://127.0.0.1:8000/administrator/profile', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-29 17:30:37', '2023-03-29 17:30:37');
INSERT INTO `audits` VALUES (2, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'updated', 'App\\Models\\Setting', 'e8995c36-e7d4-419a-a2d2-61b5d756a542', '{\"type\":\"text\",\"value\":\"setting\\/ceca63c1baf77c9cc635fdf9af4ef331.png\",\"updated_by\":\"SYSTEM\"}', '{\"type\":\"upload\",\"value\":\"setting\\/3a04727ad5774c035856147efae5bb63.png\",\"updated_by\":\"2c0a936f-f73c-4df9-82a5-06675badfb16\"}', 'http://127.0.0.1:8000/administrator/setting', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-30 05:20:34', '2023-03-30 05:20:34');
INSERT INTO `audits` VALUES (3, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'updated', 'App\\Models\\Setting', 'e8995c36-e7d4-419a-a2d2-61b5d756a542', '{\"value\":\"setting\\/3a04727ad5774c035856147efae5bb63.png\"}', '{\"value\":\"setting\\/3f36bbc814c0b206e60b5dfec2188db4.png\"}', 'http://127.0.0.1:8000/administrator/setting', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-30 05:20:35', '2023-03-30 05:20:35');
INSERT INTO `audits` VALUES (4, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'updated', 'App\\Models\\Setting', 'edbf5ff0-6c83-445f-8a8a-b1572bb358f6', '{\"type\":\"text\",\"value\":\"setting\\/ceca63c1baf77c9cc635fdf9af4ef331.png\",\"updated_by\":\"SYSTEM\"}', '{\"type\":\"upload\",\"value\":\"setting\\/623418749fe9196465be40c528cd66f0.png\",\"updated_by\":\"2c0a936f-f73c-4df9-82a5-06675badfb16\"}', 'http://127.0.0.1:8000/administrator/setting', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-30 05:20:53', '2023-03-30 05:20:53');
INSERT INTO `audits` VALUES (5, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'created', 'App\\Models\\Group', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', '[]', '{\"id\":\"acdaf2da-8f2c-4f27-98e8-28a05e42ebe3\",\"name\":\"User\",\"code\":\"USER\",\"created_by\":\"2c0a936f-f73c-4df9-82a5-06675badfb16\"}', 'http://127.0.0.1:8000/administrator/group', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `audits` VALUES (6, 'App\\Models\\User', '2c0a936f-f73c-4df9-82a5-06675badfb16', 'created', 'App\\Models\\User', '71ce75e7-5b2c-43ce-9868-2bba32b1a97d', '[]', '{\"id\":\"71ce75e7-5b2c-43ce-9868-2bba32b1a97d\",\"fullname\":\"User\",\"username\":\"user\",\"email\":\"user@gmail.com\",\"group_id\":\"acdaf2da-8f2c-4f27-98e8-28a05e42ebe3\",\"password\":\"$2y$10$e9mOhKo7lFOu0y4ViJ9aYOT6S.IyiV7jQT5GibZrTm2YH7XNDixN6\",\"created_by\":\"2c0a936f-f73c-4df9-82a5-06675badfb16\"}', 'http://127.0.0.1:8000/administrator/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, '2023-03-30 05:46:36', '2023-03-30 05:46:36');

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of conf_group
-- ----------------------------
INSERT INTO `conf_group` VALUES ('1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', 'ADM', 'Admin', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_group` VALUES ('300f1edb-d1b4-4454-9483-094f1312f9fb', 'SPRADM', 'Super Admin', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_group` VALUES ('acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', 'USER', 'User', NULL, '2023-03-30 05:45:55', '2023-03-30 05:45:55', '2c0a936f-f73c-4df9-82a5-06675badfb16', NULL, NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of conf_group_menu
-- ----------------------------
INSERT INTO `conf_group_menu` VALUES ('007f44f3-ed97-4fe1-9b0d-510720f69a63', '300f1edb-d1b4-4454-9483-094f1312f9fb', '763282d2-a3c8-409a-a9b8-7150aca94851', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('02a60d52-2996-47da-bf2b-72801b0e6078', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', '763282d2-a3c8-409a-a9b8-7150aca94851', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('094a1ac9-0271-4ea8-b72f-4007735bbca7', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', 'a80bb454-ea33-439d-8d80-42f0f6792ee7', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('210c863b-f84b-4949-a913-ebd5a237e30b', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', '2a9a7554-3408-4b7b-a8c5-1f4b957c5769', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('2205966f-28f3-4ffd-9892-33832648e041', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', '2a9a7554-3408-4b7b-a8c5-1f4b957c5769', 1, 1, 1, 1, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('32192471-3c96-4ec0-8d0f-278d193b379e', '300f1edb-d1b4-4454-9483-094f1312f9fb', 'a80bb454-ea33-439d-8d80-42f0f6792ee7', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('3dbcfb99-fa4a-402a-929d-8a4a617f6eba', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', 'a80bb454-ea33-439d-8d80-42f0f6792ee7', 1, 1, 1, 1, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('6fef194d-3571-4feb-9f07-b3d82fa56c7e', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', 'd7864a76-6906-40d1-91bd-7ce6d43dfe15', 1, 1, 1, 1, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('7aba862e-cacb-4481-bc4f-890794d50968', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', 'b26ec520-e69b-41a5-830e-33d85e8e8e55', 0, 0, 0, 0, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('8329f0f7-7fe1-47bd-865a-4855f5183170', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', '7b24898a-fe9e-4390-9c48-4b060d345177', 0, 0, 0, 0, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('900f4054-cf38-4ecf-8dac-c67148726f95', '300f1edb-d1b4-4454-9483-094f1312f9fb', '557e4916-60ad-448c-9101-45666ffbc131', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('9160e8ed-da08-49f4-b02e-a927eef742a7', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', 'b26ec520-e69b-41a5-830e-33d85e8e8e55', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('9972c705-7d3f-47be-b9de-401b452e5a55', '300f1edb-d1b4-4454-9483-094f1312f9fb', 'b26ec520-e69b-41a5-830e-33d85e8e8e55', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('a32274e1-ed3e-42ce-b4a3-8538010607cd', '300f1edb-d1b4-4454-9483-094f1312f9fb', '2a9a7554-3408-4b7b-a8c5-1f4b957c5769', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('a9fefc3c-1c92-4d47-988e-e2471f5f3b0f', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', '557e4916-60ad-448c-9101-45666ffbc131', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('c583d157-8635-4f22-bd95-f53cb749e512', '300f1edb-d1b4-4454-9483-094f1312f9fb', 'd7864a76-6906-40d1-91bd-7ce6d43dfe15', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('d4e5df2c-41b7-4b56-9847-c4de93fe43e8', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', '763282d2-a3c8-409a-a9b8-7150aca94851', 0, 0, 0, 0, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('dcdaeee2-f554-4906-8c6d-b50e1f7c001b', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', 'd7864a76-6906-40d1-91bd-7ce6d43dfe15', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('dcfe8259-46cd-4c03-95c5-2993af3cfe13', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', '557e4916-60ad-448c-9101-45666ffbc131', 0, 0, 0, 0, NULL, '2023-03-30 05:45:56', '2023-03-30 05:45:56');
INSERT INTO `conf_group_menu` VALUES ('dde33184-04ec-4242-baef-58772af848b5', '300f1edb-d1b4-4454-9483-094f1312f9fb', '7b24898a-fe9e-4390-9c48-4b060d345177', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');
INSERT INTO `conf_group_menu` VALUES ('e3443941-433f-4834-bb4a-ac1ae5b794f7', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', '7b24898a-fe9e-4390-9c48-4b060d345177', 1, 1, 1, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04');

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of conf_menu
-- ----------------------------
INSERT INTO `conf_menu` VALUES ('2a9a7554-3408-4b7b-a8c5-1f4b957c5769', '557e4916-60ad-448c-9101-45666ffbc131', 'MENU', 'Menu', 13000, '-', 'dashboard_menu', 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('557e4916-60ad-448c-9101-45666ffbc131', NULL, 'ADMININSTRATOR', 'Administrator', 10000, 'bx bx-user-circle', NULL, 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('763282d2-a3c8-409a-a9b8-7150aca94851', '557e4916-60ad-448c-9101-45666ffbc131', 'GROUP', 'Group', 12000, '-', 'dashboard_group', 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('7b24898a-fe9e-4390-9c48-4b060d345177', '557e4916-60ad-448c-9101-45666ffbc131', 'SETTING', 'Setting', 15000, '-', 'dashboard_setting', 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('a80bb454-ea33-439d-8d80-42f0f6792ee7', NULL, 'PROFILE', 'PROFILE', 100000, '-', 'dashboard_profile', 0, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('b26ec520-e69b-41a5-830e-33d85e8e8e55', '557e4916-60ad-448c-9101-45666ffbc131', 'USER', 'User', 11000, '-', 'dashboard_user', 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_menu` VALUES ('d7864a76-6906-40d1-91bd-7ce6d43dfe15', NULL, 'DASHBOARD', 'Dashboard', 1000, 'bx bx-home-smile', 'dashboard', 1, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of conf_setting
-- ----------------------------
INSERT INTO `conf_setting` VALUES ('16907905-2537-4dc8-b0a7-5ddb789d49ba', 'app_name', 'text', 'LARABASE', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('199809e2-658e-49b7-8bf5-1674cc36e4b2', 'super_password', 'text', 'larabase123', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('65df54ae-61fc-4eec-8d23-08f264cb2971', 'footer', 'text', '2022 © Larabase Development', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('e7e54d4a-6962-41aa-9993-2d87e011164e', 'app_name_short', 'text', 'LBase', NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_setting` VALUES ('e8995c36-e7d4-419a-a2d2-61b5d756a542', 'logo_icon', 'upload', 'setting/3f36bbc814c0b206e60b5dfec2188db4.png', NULL, '2023-03-29 03:48:04', '2023-03-30 05:20:35', 'SYSTEM', '2c0a936f-f73c-4df9-82a5-06675badfb16', NULL);
INSERT INTO `conf_setting` VALUES ('edbf5ff0-6c83-445f-8a8a-b1572bb358f6', 'logo', 'upload', 'setting/623418749fe9196465be40c528cd66f0.png', NULL, '2023-03-29 03:48:04', '2023-03-30 05:20:53', 'SYSTEM', '2c0a936f-f73c-4df9-82a5-06675badfb16', NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of conf_users
-- ----------------------------
INSERT INTO `conf_users` VALUES ('2c0a936f-f73c-4df9-82a5-06675badfb16', '300f1edb-d1b4-4454-9483-094f1312f9fb', 'Super Admin', 'spradmin', 'spradmin@gmail.com', '$2y$10$DjQ9FAmNksquAVq/B3/.0O0Ujxt4TIo1Ft7cZy4Z0gqHxEe/jtlle', 'profile_picture/hogx8d4kytsgalwwj875.jpg', NULL, NULL, '2023-03-29 03:48:04', '2023-03-29 17:30:37', 'SYSTEM', '2c0a936f-f73c-4df9-82a5-06675badfb16', NULL);
INSERT INTO `conf_users` VALUES ('5c5b005f-114e-4e31-b372-e937c352a828', '1e9a9ee5-5f95-476a-9bcf-7c20a57382fe', 'Admin', 'admin', 'admin@gmail.com', '$2y$10$CgI7uS/vMWbamqzg2E7ube.ViBzPt7DwtxArjJhWZXvkiSRjywCIC', NULL, NULL, NULL, '2023-03-29 03:48:04', '2023-03-29 03:48:04', 'SYSTEM', 'SYSTEM', NULL);
INSERT INTO `conf_users` VALUES ('71ce75e7-5b2c-43ce-9868-2bba32b1a97d', 'acdaf2da-8f2c-4f27-98e8-28a05e42ebe3', 'User', 'user', 'user@gmail.com', '$2y$10$e9mOhKo7lFOu0y4ViJ9aYOT6S.IyiV7jQT5GibZrTm2YH7XNDixN6', NULL, NULL, NULL, '2023-03-30 05:46:36', '2023-03-30 05:46:36', '2c0a936f-f73c-4df9-82a5-06675badfb16', NULL, NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2021_04_19_122601_setup_migration', 1);
INSERT INTO `migrations` VALUES (4, '2021_04_19_124542_setup_relation', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
