-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour numex
CREATE DATABASE IF NOT EXISTS `numex` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `numex`;

-- Listage de la structure de la table numex. attachmentable
CREATE TABLE IF NOT EXISTS `attachmentable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int(10) unsigned NOT NULL,
  `attachment_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  KEY `attachmentable_attachment_id_foreign` (`attachment_id`),
  CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.attachmentable : ~0 rows (environ)
/*!40000 ALTER TABLE `attachmentable` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachmentable` ENABLE KEYS */;

-- Listage de la structure de la table numex. attachments
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `hash` text COLLATE utf8mb4_unicode_ci,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.attachments : ~43 rows (environ)
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
	(1, '878215536b68b0ad257e9dd348d338520bf266b4', 'fpga-power-xilinx.jpg', 'image/jpeg', 'jpg', 24387, 0, '2022/08/08/', NULL, NULL, '64ef249479987738fc23349c111c6e903d8d9373', 'public', 1, NULL, '2022-08-08 11:07:59', '2022-08-08 11:07:59'),
	(2, '5bcd021d9053c12802c7bd172f6c4db98d711c74', 'blob', 'image/png', 'png', 54502, 0, '2022/08/08/', NULL, NULL, '9fb8546c2494f76983d23fa2dcf67783a21e63b9', 'public', 1, NULL, '2022-08-08 16:56:07', '2022-08-08 16:56:07'),
	(3, 'afb20720e95455552e20edd8ab0dd602891c7a6b', 'blob', 'image/png', 'png', 53441, 0, '2022/08/08/', NULL, NULL, '9cfcf07dc7f3f9604759dac16e899d1ae3374520', 'public', 1, NULL, '2022-08-08 16:58:18', '2022-08-08 16:58:18'),
	(4, 'd2e79d44a6111445d4b70156db0e1225752cb24d', 'blob', 'image/png', 'png', 53257, 0, '2022/08/08/', NULL, NULL, '40b6779ef150734b4a363bc47533b6ce14c6bfbd', 'public', 1, NULL, '2022-08-08 17:00:42', '2022-08-08 17:00:42'),
	(5, '4d4dadcefcfca368a7cfb1d38924c896d98ffb9f', 'blob', 'image/png', 'png', 53378, 0, '2022/08/08/', NULL, NULL, '6f485abc0f374a394b67914a44510b816c6b8809', 'public', 1, NULL, '2022-08-08 17:24:39', '2022-08-08 17:24:39'),
	(6, '1b5b9b8672eed873d4497c4e1069923715d831f2', 'blob', 'image/png', 'png', 53437, 0, '2022/08/08/', NULL, NULL, '9954bfca87b75e44a96f90b43a6df0ee49ba41bb', 'public', 1, NULL, '2022-08-08 17:52:36', '2022-08-08 17:52:36'),
	(7, 'c7677e338e68f7214d728574f0e9b8020939e6b6', 'singa.png', 'image/png', 'png', 12437, 0, '2022/08/08/', NULL, NULL, 'ad6ce26267221c7ace03f36bf3650c6549112a23', 'public', 1, NULL, '2022-08-08 17:55:28', '2022-08-08 17:55:28'),
	(8, 'fbf92f48b735d32ad60c12a367762041093942c8', 'RU10.png', 'image/png', 'png', 102716, 0, '2022/08/08/', NULL, NULL, 'a420078515742be9a699031e62381d255091fb0d', 'public', 1, NULL, '2022-08-08 17:56:07', '2022-08-08 17:56:07'),
	(9, 'c7677e338e68f7214d728574f0e9b8020939e6b6', 'singa.png', 'image/png', 'png', 12437, 0, '2022/08/08/', NULL, NULL, 'ad6ce26267221c7ace03f36bf3650c6549112a23', 'public', 1, NULL, '2022-08-08 17:56:25', '2022-08-08 17:56:25'),
	(10, 'c7677e338e68f7214d728574f0e9b8020939e6b6', 'singa.png', 'image/png', 'png', 12437, 0, '2022/08/08/', NULL, NULL, 'ad6ce26267221c7ace03f36bf3650c6549112a23', 'public', 1, NULL, '2022-08-08 17:58:52', '2022-08-08 17:58:52'),
	(11, 'c7677e338e68f7214d728574f0e9b8020939e6b6', 'singa.png', 'image/png', 'png', 12437, 0, '2022/08/08/', NULL, NULL, 'ad6ce26267221c7ace03f36bf3650c6549112a23', 'public', 1, NULL, '2022-08-08 18:16:27', '2022-08-08 18:16:27'),
	(12, 'f45ebf9f0fcace2bfc5a61376e3b4ee211ba4d5e', 'blob', 'image/png', 'png', 62650, 0, '2022/08/08/', NULL, NULL, '55c7b1cd15caf5b7fd7238af5500b89d6d9670fd', 'public', 1, NULL, '2022-08-08 18:20:12', '2022-08-08 18:20:12'),
	(13, 'dc43a99bd4c6ecf9ee9820a720797f1f94399f4d', 'blob', 'image/png', 'png', 217053, 0, '2022/08/09/', NULL, NULL, 'd49daabfb412b3313ceb143e460f37bc85bc512c', 'public', 1, NULL, '2022-08-09 05:50:42', '2022-08-09 05:50:42'),
	(14, 'd814470769a03b09a0f822dc8cbab6de6248b56a', 'blob', 'image/png', 'png', 228296, 0, '2022/08/09/', NULL, NULL, '515ed5331ed2493a2e8be881a322f835462bdd5c', 'public', 1, NULL, '2022-08-09 05:53:12', '2022-08-09 05:53:12'),
	(15, 'ec3097113358543e8cbd9bea8f68404650f960fd', 'blob', 'image/png', 'png', 225572, 0, '2022/08/09/', NULL, NULL, '55ace735c43c416785cc324f6940681d575ddc56', 'public', 1, NULL, '2022-08-09 05:54:01', '2022-08-09 05:54:01'),
	(16, 'a13d2232821e63c0e99012f2a30219ddd19b7b41', 'blob', 'image/png', 'png', 233268, 0, '2022/08/09/', NULL, NULL, 'f7d7a975dd51c6222c990c4ea330713d99179a3d', 'public', 1, NULL, '2022-08-09 05:55:12', '2022-08-09 05:55:12'),
	(17, 'a905af64df96a3361d343909fa7a190f50f35e51', 'blob', 'image/png', 'png', 53642, 0, '2022/08/09/', NULL, NULL, '0fc431a31b9b75bea1f1d3f3f03945fdc2924077', 'public', 1, NULL, '2022-08-09 06:11:48', '2022-08-09 06:11:48'),
	(18, '377462a2a19f50736713146e14efc79389022a90', 'blob', 'image/png', 'png', 223462, 0, '2022/08/09/', NULL, NULL, '73c5cdc6bab904b30671dde51c3f402d0279a592', 'public', 1, NULL, '2022-08-09 06:18:42', '2022-08-09 06:18:42'),
	(19, '377462a2a19f50736713146e14efc79389022a90', 'blob', 'image/png', 'png', 223462, 0, '2022/08/09/', NULL, NULL, '73c5cdc6bab904b30671dde51c3f402d0279a592', 'public', 1, NULL, '2022-08-09 06:20:26', '2022-08-09 06:20:26'),
	(20, '377462a2a19f50736713146e14efc79389022a90', 'blob', 'image/png', 'png', 223462, 0, '2022/08/09/', NULL, NULL, '73c5cdc6bab904b30671dde51c3f402d0279a592', 'public', 1, NULL, '2022-08-09 06:23:19', '2022-08-09 06:23:19'),
	(21, '377462a2a19f50736713146e14efc79389022a90', 'blob', 'image/png', 'png', 223462, 0, '2022/08/09/', NULL, NULL, '73c5cdc6bab904b30671dde51c3f402d0279a592', 'public', 1, NULL, '2022-08-09 06:26:21', '2022-08-09 06:26:21'),
	(22, '3140316b3760f02eb720a5fef5cd6834e9c73036', 'blob', 'image/png', 'png', 211311, 0, '2022/08/09/', NULL, NULL, '4cf67a43bb0a1f58b3989c67b50922b7f09c8554', 'public', 1, NULL, '2022-08-09 06:42:01', '2022-08-09 06:42:01'),
	(23, 'e45c05c5226b1122caf421f06d29573c4c3c1b04', 'blob', 'image/png', 'png', 207149, 0, '2022/08/09/', NULL, NULL, '04ac9be58113167bf500741cf15052c8001af83f', 'public', 1, NULL, '2022-08-09 06:45:31', '2022-08-09 06:45:31'),
	(24, '138928d1db6b89ba35781e153f772723c504a3cb', 'blob', 'image/png', 'png', 64197, 0, '2022/08/09/', NULL, NULL, 'c4c079d79ef3218efca413f029f4369a6af7ed56', 'public', 1, NULL, '2022-08-09 06:48:52', '2022-08-09 06:48:52'),
	(25, 'ae0a5129fd76d534ff807f761ed061a5ca0bd4cd', 'blob', 'image/png', 'png', 53695, 0, '2022/08/10/', NULL, NULL, '681cfe660b198a153e2ecf75597799afee07dbaf', 'public', 1, NULL, '2022-08-10 05:54:27', '2022-08-10 05:54:27'),
	(26, 'a905af64df96a3361d343909fa7a190f50f35e51', 'blob', 'image/png', 'png', 53642, 0, '2022/08/09/', NULL, NULL, '0fc431a31b9b75bea1f1d3f3f03945fdc2924077', 'public', 1, NULL, '2022-08-10 05:55:35', '2022-08-10 05:55:35'),
	(27, '2662483b4026f64c2b1c471ab2242250ef98f88b', 'blob', 'image/png', 'png', 57686, 0, '2022/08/10/', NULL, NULL, 'cdb6b8b58bc3d9c2d38d16a68816ad77fa8ccfb0', 'public', 1, NULL, '2022-08-10 06:03:13', '2022-08-10 06:03:13'),
	(28, 'ecd3c497bea8e9594c5445778fda7ec64eb48282', 'blob', 'image/png', 'png', 68314, 0, '2022/08/10/', NULL, NULL, 'c3dc91d7b138d9f3b31ab06a4f01a3de5284cdcd', 'public', 1, NULL, '2022-08-10 06:20:36', '2022-08-10 06:20:36'),
	(29, '5cf7a3a85ae0e06e1955cb21efc412fa432bb60a', 'blob', 'image/png', 'png', 57992, 0, '2022/08/10/', NULL, NULL, '51b7809b54cbe19ea46a18bface0db70789767c6', 'public', 1, NULL, '2022-08-10 06:44:35', '2022-08-10 06:44:35'),
	(30, 'a28fbb0e65f3893a9d2c16c2290ffc3428db93ea', 'blob', 'image/png', 'png', 112079, 0, '2022/08/10/', NULL, NULL, 'e5ee400aa8ebf4f2d1d157c43c342079a595bba0', 'public', 1, NULL, '2022-08-10 07:34:41', '2022-08-10 07:34:41'),
	(31, '94c446056ee14a25c430795b603fe473e4382133', 'blob', 'image/png', 'png', 161063, 0, '2022/08/10/', NULL, NULL, '89209bb56d1362c9606d561a2c9f32c5ef9f8a6f', 'public', 1, NULL, '2022-08-10 07:42:00', '2022-08-10 07:42:00'),
	(32, 'adfcd35b264f05fcbe30fb1068f5fcf0d4c2bbdc', 'blob', 'image/png', 'png', 115949, 0, '2022/08/10/', NULL, NULL, '1bf74baeeb626d0757c59b2d2f89a11624be460b', 'public', 1, NULL, '2022-08-10 07:43:17', '2022-08-10 07:43:17'),
	(33, '45e1769cea570d461e24398919f0bf82e8609970', 'blob', 'image/png', 'png', 118929, 0, '2022/08/10/', NULL, NULL, '981759f7c78bd8489a98393c03622d472fca3fb3', 'public', 1, NULL, '2022-08-10 07:44:06', '2022-08-10 07:44:06'),
	(34, 'a0f032a0de61e2a1f237d6346c6891ab88108cf5', 'blob', 'image/png', 'png', 104964, 0, '2022/08/10/', NULL, NULL, '70def3f2259f058b2f5c8e105ab81fa50a98b86b', 'public', 1, NULL, '2022-08-10 07:45:00', '2022-08-10 07:45:00'),
	(35, '17db9677f3d66ddf7a802269db7610b28a9887e9', 'blob', 'image/png', 'png', 134214, 0, '2022/08/10/', NULL, NULL, '0482da4c2d4a48b5310d7ee73c95f8ca50ee07f5', 'public', 1, NULL, '2022-08-10 08:37:12', '2022-08-10 08:37:12'),
	(36, '1c575ca51ac04ab5162406be32494eeee789d8e0', 'blob', 'image/png', 'png', 213972, 0, '2022/08/12/', NULL, NULL, 'c89de5d3bce5eb889a1bccc7a0f7da92f974fb4d', 'public', 1, NULL, '2022-08-12 10:27:01', '2022-08-12 10:27:01'),
	(37, 'db206229c009f6cb012e3b4f8d4c04c934fe6a2e', 'blob', 'image/png', 'png', 119518, 0, '2022/08/12/', NULL, NULL, '1f9a5ee78097de8ffc3e35dd848ed586e29efb8d', 'public', 1, NULL, '2022-08-12 10:38:36', '2022-08-12 10:38:36'),
	(38, 'fd85a96349303f078573885b673fab44be2a4bd2', 'Digital.png', 'image/png', 'png', 43819, 0, '2022/08/12/', NULL, NULL, '0158a4abe8fbaa1d7b6a18728ef1f07a23a146ad', 'public', 1, NULL, '2022-08-12 10:40:03', '2022-08-12 10:40:03'),
	(39, 'b01e88cf4033610e8d3c03cd4484b3d6c52000d1', 'blob', 'image/png', 'png', 150909, 0, '2022/08/27/', NULL, NULL, '0a30c7b0dfb66f7d94714e30ae4672b1655e2219', 'public', 1, NULL, '2022-08-27 18:23:30', '2022-08-27 18:23:30'),
	(40, 'e3e27311703c7bc8c50a103c352dfde6511f4e5c', 'blob', 'image/png', 'png', 152419, 0, '2022/08/27/', NULL, NULL, '01bb4e28068b72f5bad8a85ee1222c7ef43f2b6b', 'public', 1, NULL, '2022-08-27 18:26:35', '2022-08-27 18:26:35'),
	(41, 'ad2c59e7008bc465879efd3995e3a1f8e72c2732', 'blob', 'image/png', 'png', 182550, 0, '2022/08/27/', NULL, NULL, 'fc26f125f0f80b802f11e0f4cc785f08ee404dbc', 'public', 1, NULL, '2022-08-27 18:31:09', '2022-08-27 18:31:09'),
	(42, '6b6d3301bac6b8e0a693892075a18e5a029c2945', 'blob', 'image/png', 'png', 234433, 0, '2022/08/27/', NULL, NULL, '8430f2096f24cb469c930b81ffb95c61a81de0f0', 'public', 1, NULL, '2022-08-27 18:44:24', '2022-08-27 18:44:24'),
	(43, '9329f7ffbe40e20cdf358bc0b76ca4b9a01af21a', 'blob', 'image/png', 'png', 181881, 0, '2022/08/27/', NULL, NULL, 'a6718f6d86c3802d4872778085e8bb3aff22e5d8', 'public', 1, NULL, '2022-08-27 18:45:37', '2022-08-27 18:45:37');
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;

-- Listage de la structure de la table numex. contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.contacts : ~4 rows (environ)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'dan kas', 'dakamkasiala19735@gmail.com', 'Nunc interdum lacus sit amet', 'Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Curabitur vestibulum aliquam leo. Proin faucibus arcu quis ante. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Maecenas egestas arcu quis ligula mattis placerat.\r\n\r\nMaecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Pellentesque auctor neque nec urna. Quisque ut nisi. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.', '2022-08-14 04:31:34', '2022-08-14 04:31:34'),
	(2, 'dan kas', 'dakamkasiala19735@gmail.com', 'Nunc interdum lacus sit amet', 'Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Curabitur vestibulum aliquam leo. Proin faucibus arcu quis ante. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Maecenas egestas arcu quis ligula mattis placerat.\r\n\r\nMaecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Pellentesque auctor neque nec urna. Quisque ut nisi. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.', '2022-08-14 04:32:02', '2022-08-14 04:32:02'),
	(3, 'Mupene', 'mupene7@gmail.com', 'Nunc interdum lacus sit amet', 'dddddddddddddd', '2022-08-14 05:11:24', '2022-08-14 05:11:24'),
	(4, 'cccccccc', 'mupene7@gmail.com', 'zzzzzzzzzzzzzzz', 'zzzzzzzzzzz', '2022-08-14 05:11:55', '2022-08-14 05:11:55');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Listage de la structure de la table numex. events
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.events : ~1 rows (environ)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`, `title`, `description`, `location`, `date`, `image`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
	(11, 'Pay money', 'Donec orci lectus aliquam', 'Praesent ac massa', '2022-08-12 14:00:00', 'http://127.0.0.1:8000/storage/2022/08/10/ecd3c497bea8e9594c5445778fda7ec64eb48282.png', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', '2022-08-10 06:20:56', '2022-08-10 06:25:13'),
	(12, 'Webinaire', 'Praesent ut ligula non mi varius sagittis. Vestibulum suscipit nulla quis orci. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam.\r\n\r\nSed a libero. Nullam cursus lacinia erat. Curabitur turpis.', 'Praesent ac massa', '2022-08-19 11:00:00', 'http://127.0.0.1:8000/storage/2022/08/12/1c575ca51ac04ab5162406be32494eeee789d8e0.png', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', '2022-08-12 10:27:36', '2022-08-12 10:27:36');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Listage de la structure de la table numex. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table numex. members
CREATE TABLE IF NOT EXISTS `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.members : ~2 rows (environ)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `name`, `fonction`, `photo`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
	(1, 'Kevin Mukendi', 'Président', 'http://127.0.0.1:8000/storage/2022/08/27/ad2c59e7008bc465879efd3995e3a1f8e72c2732.png', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/about', '2022-08-27 18:26:58', '2022-08-27 18:46:09'),
	(2, 'Passy Kayembe', 'Traisorière', 'http://127.0.0.1:8000/storage/2022/08/27/6b6d3301bac6b8e0a693892075a18e5a029c2945.png', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', '2022-08-27 18:44:37', '2022-08-27 18:44:37'),
	(3, 'Parfait Mwamba', 'Vice président', 'http://127.0.0.1:8000/storage/2022/08/27/9329f7ffbe40e20cdf358bc0b76ca4b9a01af21a.png', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', '2022-08-27 18:45:50', '2022-08-27 18:45:50');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Listage de la structure de la table numex. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.migrations : ~14 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2015_04_12_000000_create_orchid_users_table', 1),
	(4, '2015_10_19_214424_create_orchid_roles_table', 1),
	(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
	(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
	(7, '2017_09_17_125801_create_notifications_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(23, '2022_08_08_061406_create_partners_table', 2),
	(24, '2022_08_08_061423_create_events_table', 2),
	(25, '2022_08_08_061440_create_projects_table', 2),
	(27, '2022_08_08_061455_create_posts_table', 3),
	(29, '2022_08_10_071557_create_testimonies_table', 4),
	(30, '2022_08_14_035043_create_contacts_table', 5),
	(31, '2022_08_19_204140_create_members_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table numex. notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.notifications : ~0 rows (environ)
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Listage de la structure de la table numex. partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.partners : ~2 rows (environ)
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` (`id`, `name`, `category`, `logo`, `created_at`, `updated_at`) VALUES
	(1, 'Vodacom', 'second', 'http://127.0.0.1:8000/storage/2022/08/09/a905af64df96a3361d343909fa7a190f50f35e51.png', '2022-08-10 05:55:36', '2022-08-10 08:33:08'),
	(2, 'Airtel', 'first', 'http://127.0.0.1:8000/storage/2022/08/10/5cf7a3a85ae0e06e1955cb21efc412fa432bb60a.png', '2022-08-10 06:44:39', '2022-08-10 08:33:33'),
	(3, 'DigiKim', 'third', 'http://127.0.0.1:8000/storage/2022/08/10/17db9677f3d66ddf7a802269db7610b28a9887e9.png', '2022-08-10 08:37:16', '2022-08-10 08:37:16');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;

-- Listage de la structure de la table numex. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table numex. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table numex. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` json DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.posts : ~2 rows (environ)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `user_id`, `title`, `subtitle`, `content`, `tag`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Repudiandae aspernatur sequi qui sapiente velit recusandae', 'In consectetuer turpis ut velit. Curabitur nisi. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Aenean massa. Maecenas vestibulum Maecenas vestibulum', '<p><strong style="color: rgb(0, 102, 204);">Fusce ac felis sit amet ligula pharetra condimentum. Phasellus accumsan cursus velit. Cras id dui. Curabitur a felis in nunc fringilla tristique. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.</strong></p><p><br></p><p><em><u>Vestibulum ullamcorper mauris at ligula. Cras dapibus. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Duis leo. Etiam sit amet orci eget eros faucibus tincidunt.</u></em></p><p><br></p><blockquote>Etiam vitae tortor. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Morbi vestibulum volutpat enim. Phasellus viverra nulla ut metus varius laoreet. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.</blockquote><p><br></p><p>Vestibulum volutpat pretium libero. Duis leo. Nam at tortor in tellus interdum sagittis. Vivamus quis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placera<strong style="color: rgb(107, 36, 178);">t dolor lectus quis orci.</strong></p><p><br></p><p>Aenean imperdiet. Phasellus consectetuer vestibulum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Cras non dolor.</p><p><br></p><p><strong style="color: rgb(230, 0, 0);">8.8.2022</strong></p><p><br></p><ol><li><span style="color: rgb(0, 0, 0);">lui</span></li><li><span style="color: rgb(0, 0, 0);">moi</span></li><li><span style="color: rgb(0, 0, 0);">eux</span></li></ol><p><br></p><ul><li>bon</li><li>mauv</li><li>très</li></ul>', '[]', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/storage/2022/08/09/e45c05c5226b1122caf421f06d29573c4c3c1b04.png', '2022-08-09 06:45:32', '2022-08-09 07:12:03'),
	(2, 1, 'Vivamus consectetuer hendrerit lacus. Donec mollis hendrerit', 'Nullam quis ante. Pellentesque commodo eros a enim. Fusce vel dui. Class aptent taciti sociosquent taciti sociosqummodo eros a enim. Fusce vel dui. Class aptent taciti sociosquent taciti', '<p><strong>Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Nunc nec neque. Sed a libero. Maecenas vestibulum mollis diam. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</strong></p><p><br></p><p>Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Maecenas malesuada. Etiam ultricies nisi vel augue. Sed lectus. Phasellus consectetuer vestibulum elit.</p><p><br></p><blockquote><em><u>Praesent venenatis metus at tortor pulvinar varius. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Nam adipiscing. Vivamus aliquet elit ac nisl. Duis vel nibh at velit scelerisque suscipit.</u></em></blockquote><p><br></p><p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Ut a nisl id ante tempus hendrerit. Nam pretium turpis et arcu. Fusce fermentum odio nec arcu. Ut a nisl id ante tempus hendrerit.</p><p><br></p><p>Maecenas vestibulum mollis diam. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Sed in libero ut nibh placerat accumsan. Phasellus blandit leo ut odio. Etiam iacul<strong style="color: rgb(230, 0, 0);">is nunc ac metus</strong><span style="color: rgb(230, 0, 0);">.</span></p>', '[]', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/storage/2022/08/09/138928d1db6b89ba35781e153f772723c504a3cb.png', '2022-08-09 06:50:51', '2022-08-09 06:54:29'),
	(3, 1, 'Vivamus consectetuer hendrerit lacus. Donec mollis hendrerit', 'Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Nulla consequat massa quis enim. Praesent', '<p>Aenean <strong style="color: rgb(230, 0, 0);">viverra </strong>rhoncus pede. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p><p><br></p><p>Nullam dictum felis eu pede mollis pretium. Fusce ac felis sit amet ligula pharetra condimentum. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Nullam tincidunt adipiscing enim.</p><p><br></p><ol><li>Maecenas malesuada. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Cras sagittis. Praesent vestibulum dapibus nibh.</li><li>Aenean viverra rhoncus pede. Aenean ut eros et nisl sagittis vestibulum.. Phasellus accumsan cursus velit.</li></ol><p><br></p><p><br></p><ul><li>moi</li><li>lui</li><li>eux</li></ul><p><br></p><p>Aliquam erat volutpat. Nulla consequat massa quis enim. Nam pretium turpis et arcu.</p><p><img src="http://127.0.0.1:8000/storage/2022/08/12/fd85a96349303f078573885b673fab44be2a4bd2.png"></p><p>Quisque malesuada placerat nisl. Nulla sit amet est. Nunc nonummy metus.</p>', '[]', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/posts', 'http://127.0.0.1:8000/storage/2022/08/12/db206229c009f6cb012e3b4f8d4c04c934fe6a2e.png', '2022-08-12 10:42:50', '2022-08-12 10:42:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Listage de la structure de la table numex. projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.projects : ~10 rows (environ)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
	(1, 'Ut voluptas officia est molestiae.', 'Nostrum iste blanditiis maiores molestias voluptatum.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(2, 'Soluta ut ea praesentium magni laborum omnis enim soluta quasi.', 'Unde ut qui natus fugit ut et iste.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(3, 'Et enim et repellat fugit omnis doloribus consequuntur.', 'Atque quisquam est distinctio dolores veniam eaque et sunt.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(4, 'Excepturi quae molestias eligendi mollitia sapiente voluptas architecto distinctio corporis.', 'Beatae omnis nihil ducimus temporibus sint architecto eum sapiente.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(5, 'Ducimus animi illum est explicabo consequatur enim autem.', 'Sint id rem ut maiores et cumque reiciendis.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(6, 'Quam dolores non distinctio ea sit et dicta eligendi tempora.', 'Fugit tempora consequatur dolor nisi et.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(7, 'Voluptas qui vel facilis pariatur eum velit pariatur.', 'Hic neque laboriosam deserunt non.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(8, 'Cupiditate doloribus beatae numquam ipsam dolor voluptas ut.', 'Ducimus sit omnis et amet eius ea et perspiciatis quibusdam.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(9, 'Doloremque rerum quia ipsam aperiam totam sed veritatis.', 'Numquam et voluptates voluptatem vitae a sequi deleniti sit a.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(10, 'Maxime cumque fugiat eaque asperiores repellat labore non sed.', 'Et quis quod distinctio non et nisi et.', '0', 'http://127.0.0.1:8000/contact', '2022-08-08 09:32:23', '2022-08-08 09:32:23'),
	(11, 'Pay money', 'S\'il vous plaît, saisisez la description du projectS\'il vous plaît, saisisez la description du project', 'http://127.0.0.1:8000/storage/2022/08/10/2662483b4026f64c2b1c471ab2242250ef98f88b.png', 'http://127.0.0.1:8000/posts', '2022-08-10 06:03:32', '2022-08-10 06:03:32');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Listage de la structure de la table numex. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.roles : ~0 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Listage de la structure de la table numex. role_users
CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_users_role_id_foreign` (`role_id`),
  CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.role_users : ~0 rows (environ)
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;

-- Listage de la structure de la table numex. testimonies
CREATE TABLE IF NOT EXISTS `testimonies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `authorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorAvatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.testimonies : ~4 rows (environ)
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
INSERT INTO `testimonies` (`id`, `authorName`, `authorAvatar`, `authorTitle`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'Katambay Gédeon', 'http://127.0.0.1:8000/storage/2022/08/10/a28fbb0e65f3893a9d2c16c2290ffc3428db93ea.png', 'Sécretaire général', 'Morbi ac felis. Nam adipiscing. Vestibulum dapibus nunc ac augue. Duis vel nibh at velit scelerisque suscipit.\r\n\r\nIn consectetuer turpis ut velit. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Integer tincidunt. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl.', '2022-08-10 07:34:56', '2022-08-10 07:34:56'),
	(2, 'Eberande Kolongele', 'http://127.0.0.1:8000/storage/2022/08/10/94c446056ee14a25c430795b603fe473e4382133.png', 'Ministre du numérique / RDC', 'Il faut absolument que les usages applicatifs qui vont être développés par le Numérique puissent répondre au besoin des gens.', '2022-08-10 07:42:03', '2022-08-10 07:42:03'),
	(3, 'Felix Antoine Tshisekedi', 'http://127.0.0.1:8000/storage/2022/08/10/adfcd35b264f05fcbe30fb1068f5fcf0d4c2bbdc.png', 'Président de la république / RDC', 'Faire du numérique congolais un levier d\'integration, de bonne gouvernance, de croissance économique, d\'amélioration du climat des affaires et de progrès social.', '2022-08-10 07:43:19', '2022-08-10 07:43:19'),
	(4, 'Cristina Duarte', 'http://127.0.0.1:8000/storage/2022/08/10/45e1769cea570d461e24398919f0bf82e8609970.png', 'Séc. Gén. Adj. des nations Unies', 'Les solutions numériques ne peuvent pas émerger du néant. Les dirigeants doivent intégrer la mise en oeuvre des technologies numériques dans un écosystème de l\'innovation, et il n\'y a pas de temps à perdre.', '2022-08-10 07:44:08', '2022-08-10 07:44:08'),
	(5, 'Rebecca Enonchong', 'http://127.0.0.1:8000/storage/2022/08/10/a0f032a0de61e2a1f237d6346c6891ab88108cf5.png', 'PDG D\'Apps Tech', 'En absence d\'infrastructures traditionnelles, le numérique permet de faire des sauts qualitatifs, dans le domaines de l\'énergie par exemple, sans avoir à réaliser un investissement de départ conséquen.', '2022-08-10 07:45:02', '2022-08-10 07:45:02');
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;

-- Listage de la structure de la table numex. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table numex.users : ~11 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$zLc50zBrRYnSUgnJVzGu7uF2SyTKUw3pCGMLLL4ylkkMCvPBxOXPO', 'E906PlhS90zMdWhzQKBZ5gpzkfmecc4BbycDEa9QTIxosZe7ASMN4K2MkrJK', '2022-08-08 05:51:23', '2022-08-08 05:51:23', '{"platform.index": true, "platform.systems.roles": true, "platform.systems.users": true, "platform.systems.attachment": true}'),
	(2, 'Dr. Meagan Altenwerth', 'upfannerstill@example.org', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zvLrG2UYFq', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(3, 'Kattie Grimes', 'erich.strosin@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IsGpYER8jL', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(4, 'Mr. Ola Kohler', 'trycia.wilkinson@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DcOHeHiyvH', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(5, 'Brayan Kilback PhD', 'columbus.glover@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kCJGHK7WTO', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(6, 'Angelina Jacobs', 'mernser@example.org', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rQgyItu991', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(7, 'Lionel Mayert', 'berry71@example.com', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5XzvZKNjbr', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(8, 'Meredith Armstrong', 'sprosacco@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JiaOUWAEb7', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(9, 'Dr. Julian Cummings III', 'marisa.dickens@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ImKroBKy39', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(10, 'Kariane Ruecker', 'dortha.reichert@example.org', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pDvv8pPPzD', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL),
	(11, 'Vella Wiza', 'mkemmer@example.net', '2022-08-08 06:47:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RrbZTLUYaA', '2022-08-08 06:47:27', '2022-08-08 06:47:27', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
