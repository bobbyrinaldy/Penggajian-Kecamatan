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
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pegawai_id` (`pegawai_id`),
  CONSTRAINT `gajis_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gajis` (`id`, `pegawai_id`, `gaji`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5,	6,	4591800,	'2018-01-15 00:53:31',	'2018-03-14 05:01:26',	NULL),
(6,	7,	4581900,	'2018-01-15 00:54:12',	'2018-03-19 01:10:46',	NULL),
(7,	8,	4467800,	'2018-01-15 00:54:51',	'2018-03-14 05:04:01',	NULL),
(8,	9,	4019300,	'2018-01-15 00:55:42',	'2018-03-14 05:04:49',	NULL),
(9,	10,	4332000,	'2018-01-15 00:56:20',	'2018-03-14 05:05:17',	NULL),
(10,	11,	3104800,	'2018-01-15 00:56:51',	'2018-03-14 05:06:48',	NULL),
(11,	12,	3113600,	'2018-01-15 00:58:50',	'2018-03-14 05:07:21',	NULL),
(12,	17,	4012900,	'2018-01-15 01:03:18',	'2018-03-14 05:08:21',	NULL),
(13,	13,	3051600,	'2018-01-15 01:05:34',	'2018-03-14 05:09:07',	NULL),
(14,	14,	3473000,	'2018-01-15 01:07:03',	'2018-03-14 05:09:40',	NULL),
(15,	15,	3149500,	'2018-01-15 01:07:43',	'2018-03-14 05:10:16',	NULL),
(16,	16,	2531100,	'2018-01-16 07:19:56',	'2018-03-14 05:11:25',	NULL),
(17,	18,	3317400,	'2018-01-22 06:01:52',	'2018-03-14 05:14:37',	NULL),
(19,	19,	3313500,	'2018-02-01 00:54:27',	'2018-03-14 05:41:30',	NULL),
(21,	22,	3179400,	'2018-02-03 09:07:45',	'2018-03-14 05:42:53',	NULL),
(22,	26,	2558600,	'2018-03-14 05:43:39',	'2018-03-14 05:43:39',	NULL),
(23,	23,	4083600,	'2018-03-14 05:44:24',	'2018-03-14 05:44:24',	NULL),
(24,	21,	2833000,	'2018-03-14 05:45:13',	'2018-03-14 05:45:13',	NULL),
(25,	24,	2453800,	'2018-03-14 05:45:50',	'2018-03-14 05:45:50',	NULL),
(26,	25,	2624700,	'2018-03-14 05:46:17',	'2018-03-14 05:46:17',	NULL),
(27,	27,	5093900,	'2018-03-14 05:46:39',	'2018-03-14 05:46:39',	NULL),
(28,	3,	4000000,	'2018-03-23 19:13:41',	'2018-03-23 19:13:41',	NULL),
(29,	4,	4000000,	'2018-04-17 20:33:47',	'2018-04-17 20:33:47',	NULL),
(30,	28,	2000000,	'2018-04-18 01:01:29',	'2018-04-18 01:01:29',	NULL),
(31,	5,	1000000,	'2018-04-21 06:29:03',	'2018-04-21 06:29:03',	NULL);

DROP TABLE IF EXISTS `golongans`;
CREATE TABLE `golongans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `golongans` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'I/a',	'2017-11-08 06:15:55',	'2018-03-19 00:54:00',	NULL),
(2,	'I/b',	'2017-11-08 06:45:01',	'2018-01-14 22:02:40',	NULL),
(4,	'I/c',	'2017-11-08 07:05:33',	'2018-01-14 22:02:52',	NULL),
(6,	'I/d',	'2018-01-14 22:02:19',	'2018-01-14 22:02:19',	NULL),
(7,	'II/a',	'2018-01-14 22:03:03',	'2018-01-14 22:03:03',	NULL),
(8,	'II/b',	'2018-01-14 22:03:11',	'2018-01-14 22:03:11',	NULL),
(9,	'II/c',	'2018-01-14 22:03:20',	'2018-01-14 22:03:20',	NULL),
(10,	'II/d',	'2018-01-14 22:03:28',	'2018-01-14 22:03:28',	NULL),
(11,	'III/a',	'2018-01-14 22:03:35',	'2018-01-14 22:03:35',	NULL),
(12,	'III/b',	'2018-01-14 22:03:43',	'2018-01-14 22:03:43',	NULL),
(13,	'III/c',	'2018-01-14 22:03:50',	'2018-01-14 22:03:50',	NULL),
(14,	'III/d',	'2018-01-14 22:03:57',	'2018-01-14 22:03:57',	NULL),
(15,	'IV/a',	'2018-01-14 22:04:04',	'2018-01-14 22:04:04',	NULL),
(16,	'IV/b',	'2018-01-14 22:04:11',	'2018-01-14 22:04:11',	NULL),
(17,	'IV/c',	'2018-01-14 22:04:23',	'2018-01-14 22:04:23',	NULL),
(18,	'IV/d',	'2018-01-14 22:04:29',	'2018-01-14 22:04:29',	NULL);

DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jabatans` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'Camat',	'2017-11-08 02:04:18',	'2018-03-19 00:50:29',	NULL),
(2,	'Sekretaris Camat',	'2017-11-08 02:06:48',	'2018-03-19 00:51:52',	NULL),
(9,	'Kepala Seksi Pemerintahan',	'2018-01-14 22:05:52',	'2018-01-14 22:05:52',	NULL),
(11,	'Kepala Seksi Kesejahteraan Sosial',	'2018-01-14 22:07:28',	'2018-01-14 22:07:28',	NULL),
(12,	'Kepala Sub Bagian Kepegawaian, Umum, Data dan Informasi',	'2018-01-14 22:08:16',	'2018-01-14 22:08:16',	NULL),
(13,	'Kepala Seksi Ketentraman dan Ketertiban',	'2018-01-14 22:09:42',	'2018-01-14 22:09:42',	NULL),
(14,	'Kepala Sub Bagian Program dan Keuangan',	'2018-01-14 22:10:33',	'2018-01-14 22:10:33',	NULL),
(15,	'Kepala Seksi Ekonomi dan Pembangunan',	'2018-01-14 22:10:54',	'2018-01-14 22:11:47',	NULL),
(16,	'Kepala Seksi Pemberdayaan Masyarakat',	'2018-01-14 22:11:12',	'2018-01-14 22:12:40',	NULL),
(17,	'Pengadmistrasian Pelayanan Khusus',	'2018-01-14 22:12:10',	'2018-01-14 22:12:10',	NULL),
(18,	'Pengadministrasi Umum',	'2018-01-14 22:12:58',	'2018-01-14 22:12:58',	NULL),
(19,	'Pengadministrasi Keuangan',	'2018-01-14 22:13:17',	'2018-01-14 22:13:17',	NULL),
(20,	'Bendahara',	'2018-01-14 22:13:37',	'2018-01-14 22:13:37',	NULL),
(21,	'Penyusun Data dan Informasi',	'2018-01-14 22:13:55',	'2018-01-14 22:13:55',	NULL),
(22,	'Pemelihara Barang',	'2018-01-14 22:14:34',	'2018-01-14 22:14:34',	NULL),
(23,	'Analis Pemberdayaan Masyarakat',	'2018-01-14 22:15:01',	'2018-01-14 22:15:01',	NULL),
(24,	'Pemegang Buku',	'2018-01-14 22:15:21',	'2018-01-14 22:15:21',	NULL),
(25,	'Hilal Rusmana S.Pd.',	'2018-01-30 07:31:26',	'2018-04-17 20:12:34',	'2018-04-18'),
(26,	'Security',	'2018-01-31 00:23:49',	'2018-01-31 00:23:49',	NULL),
(27,	'Camat',	'2018-02-01 06:29:43',	'2018-03-19 00:52:01',	'2018-03-19');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3,	'2018_03_19_064531_add_deleted_at_potongans',	2);

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
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jabatan_id` (`jabatan_id`),
  KEY `golongan_id` (`golongan_id`),
  CONSTRAINT `pegawais_ibfk_2` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pegawais_ibfk_4` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pegawais` (`id`, `nip`, `nama`, `alamat`, `jk`, `agama`, `no_tlp`, `jabatan_id`, `golongan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3,	'196010091981011001',	'Drs.Dadan Haeri Guratman M.Si',	'Jl. Sindangsari Barat No. 73',	'L',	'ISLAM',	'081214756656',	1,	16,	'2018-01-14 23:20:11',	'2018-03-23 07:03:39',	NULL),
(4,	'19690816199003100',	'Drs.Asmara Hadi MO, M.AP',	'Jl. Hj. Gopur No. 85  Gado Bangkong',	'L',	'ISLAM',	'085222222869',	2,	15,	'2018-01-14 23:23:43',	'2018-03-19 00:07:53',	NULL),
(5,	'19591128198103100',	'Ahmad Margana S.Sos',	'JL. HOLIS NO. 210/191 A',	'L',	'ISLAM',	'081572424824',	9,	16,	'2018-01-14 23:27:50',	'2018-01-14 23:27:50',	NULL),
(6,	'196004091981011003',	'Hilal Rusmana S.Pd.',	'Jl H Alpi Blk 62 RT 03/08',	'L',	'ISLAM',	'081322184513',	11,	15,	'2018-01-14 23:31:00',	'2018-01-14 23:31:00',	NULL),
(7,	'19600707199310200',	'Sartijah',	'Gg. Masjid 84 Blok 08',	'P',	'ISLAM',	'081320305789',	12,	16,	'2018-01-14 23:35:26',	'2018-01-14 23:35:26',	NULL),
(8,	'196705222007011004',	'Asep Padil Yamin SE',	'Jl. Paledang No. 6A RT 01 RW 02 Cibeureum',	'L',	'ISLAM',	'08121405950',	14,	16,	'2018-01-14 23:40:07',	'2018-01-14 23:40:07',	NULL),
(9,	'197001231996032002',	'Marice Debora SH',	'Jl Mekar Jaya No 30  Cijerah',	'P',	'KRISTEN',	'081321800170',	15,	15,	'2018-01-14 23:45:18',	'2018-01-14 23:45:18',	NULL),
(10,	'197108152008011005',	'Agus Susanto S.Pt',	'Komp. Margaasih Blok D.12/08 RT 4/8',	'L',	'ISLAM',	'08122469008',	16,	15,	'2018-01-14 23:47:23',	'2018-01-14 23:47:23',	NULL),
(11,	'19730912200701200',	'Nurhayati',	'puri cipageran indah 2 no 20',	'P',	'ISLAM',	'081321848262',	19,	9,	'2018-01-14 23:50:15',	'2018-01-14 23:50:15',	NULL),
(12,	'19660512199802200',	'Iis Saidah S, Sos',	'jl.Karangsari No. 227 RT 06/01',	'P',	'ISLAM',	'081910106144',	17,	12,	'2018-01-14 23:52:49',	'2018-01-14 23:52:49',	NULL),
(13,	'19670317199011200',	'Lina Garlina',	'Jl. mahmud graha hijau kopo RT02/18',	'P',	'ISLAM',	'082117039345',	17,	10,	'2018-01-14 23:54:46',	'2018-01-14 23:54:46',	NULL),
(14,	'19770813201001200',	'Sunarti Zakaria SE',	'JL. BOUGENVILLE V NO 15 RT02/04 KOMPLEK GEMPOLSARI INDAH',	'P',	'ISLAM',	'087785262687',	21,	13,	'2018-01-14 23:57:53',	'2018-01-14 23:57:53',	NULL),
(15,	'19771003201001101',	'Erwin SE',	'Jl Melong Raya Gg. Apel no 37',	'L',	'ISLAM',	'085356338695',	18,	12,	'2018-01-15 00:00:19',	'2018-01-15 00:00:19',	NULL),
(16,	'19910731201503100',	'Adika Rahman S.IP',	'Jl. Cihanjuang No 52 RT03/03',	'L',	'ISLAM',	'082139002870',	23,	11,	'2018-01-15 00:05:25',	'2018-01-15 00:05:25',	NULL),
(17,	'19641110200604100',	'Deden Setiawan S.Sos',	'Jl. Terusan Alamnda VII No.29, RT 05/007',	'L',	'ISLAM',	'08122075618',	18,	11,	'2018-01-15 00:09:22',	'2018-01-15 00:09:22',	NULL),
(18,	'196709092007011008',	'Setiawan Johari',	'Jl Cijerah Gg H Holil RT 04/06',	'L',	'ISLAM',	'082315090764',	17,	8,	'2018-01-15 00:28:37',	'2018-01-15 00:28:37',	NULL),
(19,	'19751005200701101',	'Dani Ardiansah',	'JL. Mekar Mulya Cijerah',	'L',	'ISLAM',	'087821067727',	20,	9,	'2018-01-15 00:33:01',	'2018-01-15 00:33:01',	NULL),
(21,	'198107102010011002',	'Indra Gunawan',	'Jl Cijerah II Blok 16 No 153 RT 02/33',	'L',	'ISLAM',	'081280080255',	17,	8,	'2018-01-15 00:37:26',	'2018-01-15 00:37:26',	NULL),
(22,	'19600201198101200',	'Rohaeti',	'Komp Permata Cimahi H-6 RT 06/13',	'P',	'ISLAM',	'085721908454',	17,	7,	'2018-01-15 00:39:35',	'2018-01-15 00:39:35',	NULL),
(23,	'19650705199202100',	'Koswana',	'Kp.Babakan Ranca Mayar',	'L',	'ISLAM',	'089543546477',	18,	10,	'2018-01-15 00:43:15',	'2018-01-15 00:43:15',	NULL),
(24,	'19680312200701102',	'Asep Wawan',	'Cigondewah Raha',	'L',	'ISLAM',	'02273954291',	18,	4,	'2018-01-15 00:45:03',	'2018-01-15 00:45:03',	NULL),
(25,	'19831106201001100',	'Andri',	'Jl. Rengas N0 43 Gempol Sari',	'L',	'ISLAM',	'08886292112',	22,	7,	'2018-01-15 00:46:52',	'2018-01-15 00:46:52',	NULL),
(26,	'19900823201503200',	'Wilma Indriyani A.Md',	'Jl. Manteron no 20 sukaluyu',	'P',	'ISLAM',	'083820312885',	24,	9,	'2018-01-15 00:48:45',	'2018-01-15 00:48:45',	NULL),
(27,	'19630329198901100',	'Dedi Gozalie B.Sw.',	'Kihapit Barat 377 RT. 12 RW. 09 Leuwigajah',	'L',	'ISLAM',	'081222332344',	13,	15,	'2018-01-15 01:00:45',	'2018-01-15 01:00:45',	NULL),
(28,	'134264646446',	'riri',	'gmpol',	'P',	'ISLAM',	'089767788655',	19,	11,	'2018-04-17 20:02:21',	'2018-04-17 20:11:13',	NULL);

DROP TABLE IF EXISTS `potongans`;
CREATE TABLE `potongans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(10) unsigned NOT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpkb` int(11) NOT NULL DEFAULT '0',
  `bjb` int(11) NOT NULL DEFAULT '0',
  `zakat` int(11) NOT NULL,
  `dharma` int(11) DEFAULT NULL,
  `makmur` int(11) NOT NULL DEFAULT '0',
  `bpd` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `potongans` (`id`, `pegawai_id`, `no_rek`, `kpkb`, `bjb`, `zakat`, `dharma`, `makmur`, `bpd`, `created_at`, `updated_at`, `total`, `deleted_at`) VALUES
(34,	5,	NULL,	0,	0,	126950,	4000,	0,	0,	'2018-03-19 00:40:47',	'2018-03-19 00:41:03',	4947050,	NULL),
(35,	6,	'0027389694100',	105000,	0,	114795,	4000,	0,	0,	'2018-03-21 08:05:36',	'2018-03-21 08:05:36',	4368005,	NULL),
(36,	7,	'0273100071883',	105000,	0,	114548,	4000,	0,	0,	'2018-03-21 08:06:59',	'2018-03-21 08:06:59',	4358352,	NULL),
(37,	8,	'0004295013100',	596944,	0,	111695,	4000,	0,	0,	'2018-03-21 08:08:51',	'2018-03-21 08:08:51',	3755161,	NULL),
(38,	9,	'2703210395822',	105000,	0,	100483,	4000,	0,	0,	'2018-03-21 08:10:14',	'2018-03-21 08:10:14',	3809817,	NULL),
(39,	10,	NULL,	611667,	0,	108300,	4000,	0,	0,	'2018-03-21 08:11:13',	'2018-03-21 08:11:13',	3608033,	NULL),
(40,	11,	'0004295013100',	55000,	0,	77620,	2000,	0,	0,	'2018-03-21 08:12:39',	'2018-03-21 08:12:39',	2970180,	NULL),
(41,	12,	'0233610001831',	0,	0,	77840,	3000,	0,	0,	'2018-03-21 08:13:07',	'2018-03-21 08:13:07',	3032760,	NULL),
(42,	17,	NULL,	105000,	0,	100323,	3000,	0,	0,	'2018-03-21 08:13:34',	'2018-03-21 08:13:34',	3804577,	NULL),
(43,	13,	'0006156789101',	55000,	0,	76290,	2000,	0,	0,	'2018-03-21 08:14:35',	'2018-03-21 08:14:35',	2918310,	NULL),
(44,	14,	'00579812855811',	105000,	0,	86825,	3000,	0,	0,	'2018-03-21 08:15:21',	'2018-03-21 08:15:21',	3278175,	NULL),
(45,	15,	NULL,	10000,	0,	78738,	3000,	0,	0,	'2018-03-21 08:15:52',	'2018-04-17 20:14:34',	3057762,	NULL),
(46,	7,	NULL,	100000,	0,	114548,	4000,	0,	0,	'2018-04-17 20:27:24',	'2018-04-17 20:27:24',	4363352,	NULL),
(47,	8,	NULL,	0,	0,	111695,	4000,	0,	0,	'2018-04-18 01:17:46',	'2018-04-18 01:17:46',	4352105,	NULL),
(48,	9,	NULL,	100000,	0,	100483,	4000,	200000,	0,	'2018-04-18 01:25:35',	'2018-04-18 01:25:35',	3614817,	NULL);

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
(1,	'Nuhayati',	'admin',	'admin@admin.com',	'$2y$10$e7Z8RbyNlRw6PpUA.7wAlu7IBWkEc6jZkATSULKmIKwwHZEbHF0yy',	'IoXifMGWYSZK7XmO4ae2yQK0cbapOpgrshBp9Gj1Szt58KtASxAKugCdsyGe',	'2017-11-05 01:03:08',	'2017-11-05 01:03:08');

-- 2018-04-29 13:20:42
