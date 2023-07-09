-- --------------------------------------------------------
-- Host:                         umira.tipnl.com
-- Versi server:                 10.5.20-MariaDB-cll-lve - MariaDB Server
-- OS Server:                    Linux
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk tipn3594_umira
CREATE DATABASE IF NOT EXISTS `tipn3594_umira` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `tipn3594_umira`;

-- membuang struktur untuk table tipn3594_umira.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Membuang data untuk tabel tipn3594_umira.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table tipn3594_umira.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel tipn3594_umira.migrations: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table tipn3594_umira.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel tipn3594_umira.password_resets: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table tipn3594_umira.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel tipn3594_umira.password_reset_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- membuang struktur untuk table tipn3594_umira.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Membuang data untuk tabel tipn3594_umira.personal_access_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- membuang struktur untuk table tipn3594_umira.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel tipn3594_umira.users: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'umira', 'umira@gmail.com', NULL, '$2y$10$uds.y9p7GaQ3ZeU6kBe.WuGSlwuwDlsO9j.A8/J7GdjHAMeTIy5zi', 'sPghBpcU2tf1NfvjPphkarkbcOM0aMvGQWwoa7B529RbLhDwGicaUzGbLUXF', '2023-06-14 06:26:03', '2023-06-14 06:26:03'),
	(2, 'tasya', 'tasya@gmail.com', NULL, '$2y$10$i/4Oinia/nKEDlzdRrJNV.xLzjDklni4Abdjtb.bRWIAYLtIq.kZW', NULL, '2023-06-19 03:05:31', '2023-06-19 03:05:31'),
	(3, 'mira', 'mira@gmail.com', NULL, '$2y$10$wpQf9AV9jqYNvz6BWrNADOfOrS7dc3kLA5bqSKzRz7c2hRfyeLvnm', NULL, '2023-06-20 08:09:16', '2023-06-20 08:09:16'),
	(4, 'admin', 'admin@admin.com', NULL, '$2y$10$uBS.DRzC8zXViGPMpTMnpOqV8MP00q654xZFp6l800xy8kOJVqekO', NULL, '2023-07-01 03:53:19', '2023-07-01 03:53:19'),
	(5, 'user', 'user@gmail.com', NULL, '$2y$10$UpuavkFZWY08vfI1KMYJ3eDtHSReXeeGbi16/SHj7TlnP81EmksAe', NULL, '2023-07-07 04:37:52', '2023-07-07 04:37:52'),
	(6, 'umi', 'umi@gmail.com', NULL, '$2y$10$WfpszNpxFPbl7/J/oTgHte8QMsgwphcFLjQGNMarBRgaspzgR0SUi', NULL, '2023-07-07 13:34:07', '2023-07-07 13:34:07'),
	(7, 'Debi Nurmustaqimah', 'bivera2233@gmail.com', NULL, '$2y$10$ZRIoygEukMKyeX.d5OsZteiACf9Mf88hrnCzsjjA7ka0rPmDe7Xim', NULL, '2023-07-07 16:11:40', '2023-07-07 16:11:40'),
	(8, 'pengunjung', 'pengunjung@gmail.com', NULL, '$2y$10$FR4LatkgZufdAwiGyswnYONy1K3v2Bt/IP6pYDQsZb9W40AkOlyOm', NULL, '2023-07-08 07:39:25', '2023-07-08 07:39:25'),
	(9, 'Nyak Gymnastiar Syah', 'nyakgym@gmail.com', NULL, '$2y$10$lEOuOVIeVz/IAENOMW3NnOmwR7b57piA8.Ti7uGKNNwXmSmDp/oIO', NULL, '2023-07-08 08:46:00', '2023-07-08 08:46:00'),
	(10, 'tasyaa', 'tasyaa@gmail.com', NULL, '$2y$10$h6jwfcxgKSxjL90eYVWtVO2s30WfXsmV9W3YeyBfgzxCL7kjU8PJC', NULL, '2023-07-08 09:10:19', '2023-07-08 09:10:19'),
	(11, 'gatahu', 'gatahu@gatahu.com', NULL, '$2y$10$HMLbwyHxetAUsi0WLygOJO3VDE6U9iUf2yh7wEYGhzxfCAi7iMdbO', NULL, '2023-07-08 09:54:41', '2023-07-08 09:54:41'),
	(12, 'deva', 'deva@gmail.com', NULL, '$2y$10$P/NO07fuiAfEtrZ4DikUhufBT2XR4sqsvIiKPFpM.41e/C0o2ghtu', NULL, '2023-07-09 05:13:01', '2023-07-09 05:13:01'),
	(13, 'una', 'una@gmail.com', NULL, '$2y$10$mf/FR71mYnKVfU6FsIiXAuPgYR2QfCOcjtJJGGZq.tPrFRx40q0Su', NULL, '2023-07-09 08:29:04', '2023-07-09 08:29:04'),
	(14, 'Debby', 'rumah123@gmail.com', NULL, '$2y$10$rEGv3uuSAqyCrLcVf6THwOusgC6FWK78XOFrCYqd2jSv/rvYZSuba', NULL, '2023-07-09 10:07:02', '2023-07-09 10:07:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
