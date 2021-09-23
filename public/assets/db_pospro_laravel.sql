-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pospro_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) DEFAULT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug_judul`, `isi`, `id_user`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ditangkap, Zulkarnaen Teroris Bom Bali I Pernah Latih Militer di Afghanistan', 'ditangkap-zulkarnaen-teroris-bom-bali-i-pernah-latih-militer-di-afghanistan', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong style=\"box-sizing: border-box; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Jakarta</strong><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">&nbsp;- Tim Detasemen Khusus (Densus) 88 Antiteror Polri menangkap teroris bom Bali 1&nbsp;</span><a style=\"box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: none; color: #21409a; transition: all 0.3s ease-in-out 0s; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\" href=\"https://www.detik.com/tag/zulkarnaen\">Zulkarnaen</a><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">. Polri mengatakan Zulkarnaen memimpin pelatihan militer Askari Markaziah Jamaah Islamiyah (JI) di Afghanistan selama tujuh tahun.</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 16px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Terkait dengan penangkapan Saudara Zulkarnaen yang berperan menyembunyikan Upik Lawanga, kami sampaikan profil tersangka teroris Zulkarnaen ini sumbernya dari Densus 88. Yang pertama, yang bersangkutan adalah pimpinan Askari Markaziah Jamaah Islamiyah (JI) yang merupakan pelatih akademi militer di Afganistan selama 7 tahun,\" kata Kabag Penum Divisi Humas Polri, Kombes Ahmad Ramadhan, di Mabes Polri, Jalan Trunojoyo, Jakarta Selatan, Senin (14/12/2020).</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Ramadhan menuturkan&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #21409a; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/zulkarnaen\">Zulkarnaen</a>&nbsp;merupakan otak dari kerusuhan di beberapa daerah, salah satunya di Poso pada 1998. Selain itu, Zulkarnaen sebut Ramadhan, juga sebagai otak peledakan di kediaman duta besar Filipina pada 2000.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Yang kedua, yang bersangkutan adalah arsitek kerusuhan di Ambon, Ternate dan Poso pada tahun 1998 sampai dengan 2000. Ketiga, adalah otak dari peledakan kediaman duta besar Filipina di Menteng pada tanggal 1 Agustus 2000,\" tuturnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Lebih lanjut Ramadhan mengungkapkan&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #21409a; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/zulkarnaen\">Zulkarnaen</a>&nbsp;juga menjadi otak peledakan gereja serentak saat malam Natal pada 2000 dan bom Bali 2 pada 2005. Zulkarnaen sudah masuk dalam daftar pencarian orang (DPO) sejak tahun 2002.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Yang keempat, yang bersangkutan adalah otak peledakan gereja serentak pada malam Natal tahun baru 2000 dan 2001 kasus bom Bali 1 tahun 2002 kasus bom Marriot pertama tahun 2003, kasus bom Kedubes Australia 2004, Kasus bom Bali 2 tahun 2005 yang saat ini sudah menjadi DPO selama 18 tahun,\" imbuhnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Buron teroris bom Bali I Zulkarnaen alias Aris Sumarsono alias Daud alias Zaenal Arifin alias Abdulrahman sebelumnya ditangkap tim Detasemen Khusus (Densus) 88 Polri. Zulkarnaen merupakan salah satu orang yang ikut terlibat menyembunyikan teroris ahli rakit bom Taufik Bulaga alias Upik Lawanga.<br style=\"box-sizing: border-box;\" />\"Keterlibatan, menyembunyikan DPO atas nama Udin alias Upik Lawanga alias Taufik Bulaga,\" kata Kadiv Humas Polri Irjen Argo Yuwono, Sabtu (12/12).</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Argo menyampaikan&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #21409a; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/zulkarnaen\">Zulkarnaen</a>&nbsp;merupakan bagian dari jaringan teroris Jamaah Islamiyah (JI). Zulkarnaen, sebut Argo, merupakan orang yang membuat pasukan khusus untuk melakukan teror Bom Bali I hingga konflik di Poso dan Ambon.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Zulkarnaen adalah panglima askari (tentara) Jamaah Islamiyah ketika Bom Bali I. Dia yang membuat unit khos yang kemudian terlibat bom Bali, konflik-konflik di Poso dan Ambon. Unit khos itu sama dengan special task force,\" imbuhnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Zulkarnaen ditangkap Densus 88 Polri pada Kamis (1/12) di Lampung. Saat ditangkap,&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #21409a; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/zulkarnaen\">Zulkarnaen</a>&nbsp;tidak melakukan perlawanan.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Telah dilakukan penangkapan tanpa perlawanan, terhadap tersangka (DPO) pada hari Kamis tanggal 10 Desember 2020, pukul 19.30 WIB yang beralamat di Gang Kolibri, Toto Harjo, Purbolinggo, Kabupaten Lampung Timur, Lampung,\" ucap Argo.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Tim Densus 88 juga menggeledah rumah Zulkarnaen. Buron 19 tahun itu langsung diamankan Tim Densus 88 Polri untuk diinterogasi lebih lanjut.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Tersangka diamankan dan dilakukan penggeledahan badan, serta di sebuah tempat untuk dilakukan interogasi awal. Melakukan penggeladahan tempat tinggal tersangka,\" ujarnya.<br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">(gbr/gbr)</strong></p>\r\n</body>\r\n</html>', 1, 'kabag-penum-divisi-humas-polri-kombes-ahmad-ramadhan.jpeg', 'publish', '2020-12-14 04:10:33', '2020-12-14 04:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `countdowns`
--

CREATE TABLE `countdowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countdowns`
--

INSERT INTO `countdowns` (`id`, `tanggal`, `waktu`, `created_at`, `updated_at`) VALUES
(1, '2020-12-15', '17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dataexcels`
--

CREATE TABLE `dataexcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_tps` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataexcels`
--

INSERT INTO `dataexcels` (`id`, `username`, `nama`, `nomor_tps`, `created_at`, `updated_at`) VALUES
(1, '100120201008', 'Aldi Yassa Pangaribuan', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(2, '100155201004', 'Azlim Nuryakin', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(3, '100155201016', 'Evaniar Rahmanindyas', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(4, '100155201036', 'Adithia Dharma Saputra', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(5, '100155201040', 'Andri', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(6, '100155201041', 'Aulia Ramadhani Chandra', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(7, '100155201043', 'Azwar', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(8, '100155201051', 'Dery Azlin Oktavi', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(9, '100155201058', 'Farid Aji Adha', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(10, '100155201060', 'Fredy Gunawan', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(11, '100155201063', 'Hardy Saputra', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(12, '100155201065', 'Indra Noven Valentinus', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(13, '100155201067', 'Juwita Linggarani', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(14, '100155201070', 'Meriyani', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(15, '100155201071', 'Miko Juzandra', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(16, '100155201075', 'Nahort Hosea Hutagaol', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(17, '100155201076', 'Novi Ade Putra', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52'),
(18, '100155201079', 'Padillah Heriyadi', 1, '2020-12-14 04:14:52', '2020-12-14 04:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `dokumens`
--

CREATE TABLE `dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_dokumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumens`
--

INSERT INTO `dokumens` (`id`, `nama_dokumen`, `slug_dokumen`, `gambar`, `keterangan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Sertifikat Bekraf Developer', 'sertifikat-bekraf-developer', '1607944344-Bekraf Developer Day 2018 - Batam Certificate.pdf', NULL, 1, '2020-12-14 04:12:24', '2020-12-14 04:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamuses`
--

CREATE TABLE `kamuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contoh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamuses`
--

INSERT INTO `kamuses` (`id`, `kata`, `arti`, `contoh`, `created_at`, `updated_at`) VALUES
(1, 'Good', 'Bagus', 'I\'am good boy', '2020-12-14 04:08:34', '2020-12-14 04:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasis`
--

CREATE TABLE `konfigurasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konfigurasis`
--

INSERT INTO `konfigurasis` (`id`, `author`, `nama_web`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Bertho Erizal', 'POSPRO LARAVEL', 'https://www.google.com/maps/d/embed?mid=1DHV2_3ZBOiOOuGh18lSw2U4vv9k', NULL, '2020-12-14 04:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_17_193915_create_beritas_table', 1),
(5, '2020_11_17_214909_create_dokumens_table', 1),
(6, '2020_11_18_003941_create_videos_table', 1),
(7, '2020_11_18_085815_create_countdowns_table', 1),
(8, '2020_11_19_174629_create_konfigurasis_table', 1),
(9, '2020_11_21_105915_create_dataexcels_table', 1),
(10, '2020_12_01_101407_create_sertifikats_table', 1),
(11, '2020_12_04_194637_create_kamuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikats`
--

CREATE TABLE `sertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peserta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `panitia1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panitia2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sertifikats`
--

INSERT INTO `sertifikats` (`id`, `kegiatan`, `instansi`, `nomor`, `peserta`, `keterangan`, `tempat`, `tanggal`, `panitia1`, `jabatan1`, `ttd1`, `panitia2`, `jabatan2`, `ttd2`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kepesertaan', 'SEKOLAMU', '#1243292', 'Bertho', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>atas kebeberhasilan menyelesaikan program<strong> Pendidikan Jasmani, Olahraga dan Kesehatan Kelas 3 SD</strong>.</p>\r\n</body>\r\n</html>', 'Jakarta', '2020-12-14', 'Erizal', 'Kepala Sekolah', NULL, 'Bobby', 'Ketua Pelaksana', NULL, 'Medical Leave Certificate.jpg', NULL, '2020-12-14 04:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_role`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bertho Erizal', 'berthoerizal21@gmail.com', NULL, '$2y$10$nFGGiw9Qdj8fFdoyJdH.zeeU33/OG3jrM7xoxEWKyNvqHA6nVZSFi', 'admin', NULL, NULL, '2020-12-14 03:54:57', '2020-12-14 03:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `id_user`, `nama_video`, `link_video`, `slug_video`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'RESTful API Laravel - Intro #1', 'nvZmumUK3XU', 'restful-api-laravel-intro-1', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #030303; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap; background-color: #f9f9f9;\">Dalam playlist kali ini, saya akan mencoba untuk menyampaikan materi tentang RESTful API dengan framework laravel versi 6.x. Dalam playlist kali ini kita akan membahas materi RESTful API dari basic. Sehingga di akhir playlist ini diharapkan rekan-rekan dapat membuat RESTful API basic CRUD (Create Read Update Delete). Selamat menikmati</span></p>\r\n</body>\r\n</html>', '2020-12-14 04:13:53', '2020-12-14 04:13:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdowns`
--
ALTER TABLE `countdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataexcels`
--
ALTER TABLE `dataexcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumens`
--
ALTER TABLE `dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamuses`
--
ALTER TABLE `kamuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sertifikats`
--
ALTER TABLE `sertifikats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countdowns`
--
ALTER TABLE `countdowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dataexcels`
--
ALTER TABLE `dataexcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dokumens`
--
ALTER TABLE `dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamuses`
--
ALTER TABLE `kamuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sertifikats`
--
ALTER TABLE `sertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
