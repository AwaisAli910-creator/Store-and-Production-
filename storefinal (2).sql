/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : storefinal

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-07-31 20:21:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `department`
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'No description',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('1', 'Finance', 'Finance', '2024-07-22 03:04:42', '2024-07-22 03:04:42');

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `dscp` varchar(255) NOT NULL,
  `supp_name` varchar(255) NOT NULL,
  `dpt_name` varchar(255) NOT NULL,
  `qty_in` varchar(255) NOT NULL,
  `qty_out` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `d_c` varchar(255) NOT NULL,
  `weight_in` varchar(255) NOT NULL,
  `packets_in` varchar(255) NOT NULL,
  `no_cartons` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of inventory
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2024_07_03_110343_create_order_table', '1');
INSERT INTO `migrations` VALUES ('6', '2024_07_03_110357_create_product_table', '1');
INSERT INTO `migrations` VALUES ('7', '2024_07_05_101455_vendor_table_migration', '1');
INSERT INTO `migrations` VALUES ('8', '2024_07_05_130951_rawmaterial_table_migration', '1');
INSERT INTO `migrations` VALUES ('9', '2024_07_10_103134_inventory_table_migration', '1');
INSERT INTO `migrations` VALUES ('10', '2024_07_10_123124_create_storeproduct_table', '1');
INSERT INTO `migrations` VALUES ('11', '2024_07_14_103537_create_subsupplier_table', '1');
INSERT INTO `migrations` VALUES ('12', '2024_07_14_110835_create_subpurchase_table', '1');
INSERT INTO `migrations` VALUES ('13', '2024_07_14_110842_create_suborder_table', '1');
INSERT INTO `migrations` VALUES ('14', '2024_07_14_110858_create_substationary_table', '1');
INSERT INTO `migrations` VALUES ('15', '2024_07_14_110903_create_stationary_table', '1');
INSERT INTO `migrations` VALUES ('16', '2024_07_14_110912_create_particular_table', '1');
INSERT INTO `migrations` VALUES ('17', '2024_07_18_131721_create_rawmaterialadd_table', '1');
INSERT INTO `migrations` VALUES ('18', '2024_07_19_072725_create_raw_brand_table', '1');
INSERT INTO `migrations` VALUES ('19', '2024_07_22_225343_create_rawbrand_table', '1');
INSERT INTO `migrations` VALUES ('20', '2024_07_22_225404_create_rawbrandprod_table', '1');
INSERT INTO `migrations` VALUES ('21', '2024_07_30_111005_create_rawmaterialproducts_table', '1');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ordrnum` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `raw` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `dpt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('1', '500', '2024-07-26', 'mouse', '675', 'production', '2024-07-25 23:37:00', '2024-07-25 23:37:00');

-- ----------------------------
-- Table structure for `particular`
-- ----------------------------
DROP TABLE IF EXISTS `particular`;
CREATE TABLE `particular` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `particular` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of particular
-- ----------------------------

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for `rawbrand`
-- ----------------------------
DROP TABLE IF EXISTS `rawbrand`;
CREATE TABLE `rawbrand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rawbrand
-- ----------------------------
INSERT INTO `rawbrand` VALUES ('3', '2024-07-31', 'Pepsi', 'Pepsi', 'Pepsi', '2024-07-31 15:13:17', '2024-07-31 15:13:17');
INSERT INTO `rawbrand` VALUES ('4', '2024-07-31', 'Dell', 'Dell', 'Dell', '2024-07-31 15:14:50', '2024-07-31 15:14:50');

-- ----------------------------
-- Table structure for `rawbrandprod`
-- ----------------------------
DROP TABLE IF EXISTS `rawbrandprod`;
CREATE TABLE `rawbrandprod` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `prod` varchar(255) NOT NULL,
  `qty_in` varchar(255) NOT NULL,
  `qty_out` varchar(255) DEFAULT NULL,
  `Bal` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'No description',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rawbrandprod
-- ----------------------------
INSERT INTO `rawbrandprod` VALUES ('6', '2024-07-16', 'Sting', '200', null, null, 'Culpa dolorem sed mo', '2024-07-31 15:13:57', '2024-07-31 15:14:16');
INSERT INTO `rawbrandprod` VALUES ('7', '2024-07-16', 'Mouse', '800', '50', null, 'Aliqua Deserunt ame', '2024-07-31 15:15:43', '2024-07-31 15:16:07');

-- ----------------------------
-- Table structure for `rawmaterial`
-- ----------------------------
DROP TABLE IF EXISTS `rawmaterial`;
CREATE TABLE `rawmaterial` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_no` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `dscp` varchar(255) DEFAULT NULL,
  `d_c` varchar(255) DEFAULT NULL,
  `qty_in` varchar(255) DEFAULT NULL,
  `qty_out` varchar(255) DEFAULT NULL,
  `blc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rawmaterial
-- ----------------------------

-- ----------------------------
-- Table structure for `rawmaterialadd`
-- ----------------------------
DROP TABLE IF EXISTS `rawmaterialadd`;
CREATE TABLE `rawmaterialadd` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `rbrand_id` varchar(255) NOT NULL,
  `prod` varchar(255) NOT NULL,
  `qty_in` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'No description',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rawmaterialadd
-- ----------------------------

-- ----------------------------
-- Table structure for `rawmaterialproducts`
-- ----------------------------
DROP TABLE IF EXISTS `rawmaterialproducts`;
CREATE TABLE `rawmaterialproducts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `brand_id` bigint(20) unsigned NOT NULL,
  `prod` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rawmaterialproducts_brand_id_foreign` (`brand_id`),
  CONSTRAINT `rawmaterialproducts_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `rawbrand` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rawmaterialproducts
-- ----------------------------
INSERT INTO `rawmaterialproducts` VALUES ('3', '2024-07-17', '3', 'Sting', 'dcd', '2024-07-31 15:13:36', '2024-07-31 15:13:36');
INSERT INTO `rawmaterialproducts` VALUES ('4', '2024-07-09', '4', 'Mouse', 'Mouse', '2024-07-31 15:15:19', '2024-07-31 15:15:19');

-- ----------------------------
-- Table structure for `stationary`
-- ----------------------------
DROP TABLE IF EXISTS `stationary`;
CREATE TABLE `stationary` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `s_no` varchar(255) NOT NULL,
  `particular` varchar(255) NOT NULL,
  `issue_dpt` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stationary
-- ----------------------------

-- ----------------------------
-- Table structure for `storeproduct`
-- ----------------------------
DROP TABLE IF EXISTS `storeproduct`;
CREATE TABLE `storeproduct` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of storeproduct
-- ----------------------------

-- ----------------------------
-- Table structure for `suborder`
-- ----------------------------
DROP TABLE IF EXISTS `suborder`;
CREATE TABLE `suborder` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_no` varchar(255) NOT NULL,
  `po_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `dscp` varchar(255) NOT NULL,
  `d_c` varchar(255) NOT NULL,
  `qty_in` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of suborder
-- ----------------------------

-- ----------------------------
-- Table structure for `subpurchase`
-- ----------------------------
DROP TABLE IF EXISTS `subpurchase`;
CREATE TABLE `subpurchase` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_no` varchar(255) NOT NULL,
  `po_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `dscp` varchar(255) NOT NULL,
  `d_c` varchar(255) NOT NULL,
  `qty_in` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of subpurchase
-- ----------------------------

-- ----------------------------
-- Table structure for `substationary`
-- ----------------------------
DROP TABLE IF EXISTS `substationary`;
CREATE TABLE `substationary` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of substationary
-- ----------------------------

-- ----------------------------
-- Table structure for `subsupplier`
-- ----------------------------
DROP TABLE IF EXISTS `subsupplier`;
CREATE TABLE `subsupplier` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `spname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of subsupplier
-- ----------------------------
INSERT INTO `subsupplier` VALUES ('1', 'name', 'name', 'store@gmail.com', 'scs', 'scs', '2024-07-31 14:56:43', '2024-07-31 14:56:43');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `role` enum('admin','quality','hr','store','finance','production','user') NOT NULL DEFAULT 'user',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin', 'admin@gmail.com', null, '$2y$12$Vrs8Kpy88mgxSdlbUGOO1ucDXNCqXh/kAJft2e/YedxTqyfaowOxW', 'Image will be here', null, null, 'Male', 'admin', '1', null, null, null);
INSERT INTO `users` VALUES ('2', 'HR', 'hr', 'hr@gmail.com', null, '$2y$12$at9m3Mxd6lqeuXtoV0u2GuIz7DxXquTyZ5NJBcmCIjlyiGX1BMg3K', 'Image will be here', null, null, 'Female', 'hr', '1', null, null, null);
INSERT INTO `users` VALUES ('3', 'Quality', 'quality', 'quality@gmail.com', null, '$2y$12$JBK735AaJ65JpbJHeX2xZOJT92.vAJvtfEP01jsiDyLQCDtlO86VC', 'Image will be here', null, null, 'Male', 'quality', '1', null, null, null);
INSERT INTO `users` VALUES ('4', 'Store', 'store', 'store@gmail.com', null, '$2y$12$aQLdI.gGUeUvotl2.z1F0ej1e0DxJNtoaXJlDddKD3YX7RScbUGKG', 'Image will be here', null, null, 'Male', 'store', '1', null, null, null);
INSERT INTO `users` VALUES ('5', 'Finance', 'finance', 'finance@gmail.com', null, '$2y$12$e/2AYIFuCHcifizqjQb1E.QK02etLTrpFNJ5eBFEzyx.0A1lA/sTq', 'Image will be here', null, null, 'Male', 'finance', '1', null, null, null);
INSERT INTO `users` VALUES ('6', 'Production', 'production', 'production@gmail.com', null, '$2y$12$xuAug81XpymQ4HsArImRuO2gG3kkG2nbHY1sU7WB74h6NDPNXozh2', 'Image will be here', null, null, 'Male', 'production', '1', null, null, null);
INSERT INTO `users` VALUES ('7', 'User', 'user', 'user@gmail.com', null, '$2y$12$s7Pd4FiS1E/cZkXr2IIA/OxLewjhUTC97NLLCOhe7xeqiyXrNGwh6', 'Image will be here', null, null, 'Male', 'user', '1', null, null, null);

-- ----------------------------
-- Table structure for `vendor`
-- ----------------------------
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of vendor
-- ----------------------------

-- ----------------------------
-- Table structure for `_raw_brand`
-- ----------------------------
DROP TABLE IF EXISTS `_raw_brand`;
CREATE TABLE `_raw_brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of _raw_brand
-- ----------------------------
