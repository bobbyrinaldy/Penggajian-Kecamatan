-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `gajis`;
CREATE TABLE `gajis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) NOT NULL,
  `gaji` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pegawai_id` (`pegawai_id`),
  CONSTRAINT `gajis_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `golongans`;
CREATE TABLE `golongans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `golongans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1,	'I/A',	'2017-11-08 06:15:55',	'2017-11-08 06:44:56'),
(2,	'I/B',	'2017-11-08 06:45:01',	'2017-11-08 06:45:01'),
(4,	'I/C',	'2017-11-08 07:05:33',	'2017-11-08 07:05:33');

DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jabatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1,	'Kepala Kecamatan',	'2017-11-08 02:04:18',	'2017-11-08 05:36:31'),
(2,	'Security',	'2017-11-08 02:06:48',	'2017-11-08 05:36:41'),
(6,	'Sekertaris Kecamatan',	'2017-11-08 05:48:26',	'2017-11-08 07:06:42'),
(7,	'cek',	'2017-11-16 02:27:54',	'2017-11-16 02:27:54'),
(8,	'Sekertaris Kecamatan',	'2017-12-03 05:44:22',	'2017-12-03 05:44:22');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `pegawais`;
CREATE TABLE `pegawais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `golongan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jabatan_id` (`jabatan_id`),
  KEY `golongan_id` (`golongan_id`),
  CONSTRAINT `pegawais_ibfk_2` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pegawais_ibfk_4` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pegawais` (`id`, `nip`, `nama`, `alamat`, `jk`, `agama`, `no_tlp`, `jabatan_id`, `golongan_id`, `created_at`, `updated_at`) VALUES
(1,	'123456789011234451',	'Khansa Nabila Salma',	'Mustang V No 24',	'P',	'ISLAM',	'089123123123',	1,	4,	'2017-11-29 22:19:30',	'2017-11-29 23:02:28');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'admin',	'admin@admin.com',	'$2y$10$w1QDemFH7HUAAJQR9iDZPuI/NpjXaaJ.v/LhdBP3IrAlurL5weji.',	'0LST5tWKO5w7fiqJcLl52ZUhxAcEkvwd8I2eQ7AFLn28W4G2uXcIujZr6R5q',	'2017-11-05 01:03:08',	'2017-11-05 01:03:08');

-- 2018-01-01 13:37:39
