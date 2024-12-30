-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_topsis_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) UNSIGNED NOT NULL,
  `id_akun` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `kinerja` int(11) UNSIGNED NOT NULL,
  `komunikasi` int(11) UNSIGNED NOT NULL,
  `kerjasama` int(11) UNSIGNED NOT NULL,
  `kreativitas` int(11) UNSIGNED NOT NULL,
  `disiplin` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideal_negatif`
--

CREATE TABLE `ideal_negatif` (
  `id_ideal_negatif` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kinerja` float UNSIGNED NOT NULL,
  `komunikasi` float UNSIGNED NOT NULL,
  `kerjasama` float UNSIGNED NOT NULL,
  `kreativitas` float UNSIGNED NOT NULL,
  `disiplin` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideal_positif`
--

CREATE TABLE `ideal_positif` (
  `id_ideal_positif` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kinerja` float UNSIGNED NOT NULL,
  `komunikasi` float UNSIGNED NOT NULL,
  `kerjasama` float UNSIGNED NOT NULL,
  `kreativitas` float UNSIGNED NOT NULL,
  `disiplin` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jarak_negatif`
--

CREATE TABLE `jarak_negatif` (
  `id_jarak_negatif` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `nilai` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jarak_positif`
--

CREATE TABLE `jarak_positif` (
  `id_jarak_positif` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `nilai` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) UNSIGNED NOT NULL,
  `id_akun` int(11) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `lahir` date NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) UNSIGNED NOT NULL,
  `id_akun` int(11) UNSIGNED DEFAULT NULL,
  `kriteria` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `bobot` int(11) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) UNSIGNED NOT NULL,
  `id_akun` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(313, '2024-10-20-074639', 'App\\Database\\Migrations\\MigrationAkun', 'default', 'App', 1733130165, 1),
(314, '2024-10-20-074651', 'App\\Database\\Migrations\\MigrationKaryawan', 'default', 'App', 1733130165, 1),
(315, '2024-10-20-083407', 'App\\Database\\Migrations\\MigrationKriteria', 'default', 'App', 1733130165, 1),
(316, '2024-10-20-083416', 'App\\Database\\Migrations\\MigrationLaporan', 'default', 'App', 1733130165, 1),
(317, '2024-10-20-083429', 'App\\Database\\Migrations\\MigrationAlternatif', 'default', 'App', 1733130165, 1),
(318, '2024-10-27-095431', 'App\\Database\\Migrations\\MigrationPembagi', 'default', 'App', 1733130165, 1),
(319, '2024-10-27-100258', 'App\\Database\\Migrations\\MigrationTerbobotR', 'default', 'App', 1733130165, 1),
(320, '2024-10-27-100301', 'App\\Database\\Migrations\\MigrationTerbobotY', 'default', 'App', 1733130165, 1),
(321, '2024-10-27-100403', 'App\\Database\\Migrations\\MigrationIdealAPositif', 'default', 'App', 1733130166, 1),
(322, '2024-10-27-100411', 'App\\Database\\Migrations\\MigrationIdealANegatif', 'default', 'App', 1733130166, 1),
(323, '2024-10-27-100615', 'App\\Database\\Migrations\\MigrationJarakPositif', 'default', 'App', 1733130166, 1),
(324, '2024-10-27-100629', 'App\\Database\\Migrations\\MigrationJarakNegatif', 'default', 'App', 1733130166, 1),
(325, '2024-10-27-102346', 'App\\Database\\Migrations\\MigrationPerangkingan', 'default', 'App', 1733130166, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembagi`
--

CREATE TABLE `pembagi` (
  `id_pembagi` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kinerja` float UNSIGNED NOT NULL,
  `komunikasi` float UNSIGNED NOT NULL,
  `kerjasama` float UNSIGNED NOT NULL,
  `kreativitas` float UNSIGNED NOT NULL,
  `disiplin` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkingan`
--

CREATE TABLE `perangkingan` (
  `id_perangkingan` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `nilai` float UNSIGNED NOT NULL,
  `rank` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terbobot_r`
--

CREATE TABLE `terbobot_r` (
  `id_terbobot_r` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `kinerja` float UNSIGNED NOT NULL,
  `komunikasi` float UNSIGNED NOT NULL,
  `kerjasama` float UNSIGNED NOT NULL,
  `kreativitas` float UNSIGNED NOT NULL,
  `disiplin` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terbobot_y`
--

CREATE TABLE `terbobot_y` (
  `id_terbobot_y` int(11) UNSIGNED NOT NULL,
  `id_alternatif` int(11) UNSIGNED DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED DEFAULT NULL,
  `kinerja` float UNSIGNED NOT NULL,
  `komunikasi` float UNSIGNED NOT NULL,
  `kerjasama` float UNSIGNED NOT NULL,
  `kreativitas` float UNSIGNED NOT NULL,
  `disiplin` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `alternatif_id_akun_foreign` (`id_akun`),
  ADD KEY `alternatif_id_karyawan_foreign` (`id_karyawan`);

--
-- Indexes for table `ideal_negatif`
--
ALTER TABLE `ideal_negatif`
  ADD PRIMARY KEY (`id_ideal_negatif`),
  ADD KEY `ideal_negatif_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `ideal_positif`
--
ALTER TABLE `ideal_positif`
  ADD PRIMARY KEY (`id_ideal_positif`),
  ADD KEY `ideal_positif_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `jarak_negatif`
--
ALTER TABLE `jarak_negatif`
  ADD PRIMARY KEY (`id_jarak_negatif`),
  ADD KEY `jarak_negatif_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `jarak_positif`
--
ALTER TABLE `jarak_positif`
  ADD PRIMARY KEY (`id_jarak_positif`),
  ADD KEY `jarak_positif_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `karyawan_id_akun_foreign` (`id_akun`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `kriteria_id_akun_foreign` (`id_akun`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `laporan_id_akun_foreign` (`id_akun`),
  ADD KEY `laporan_id_karyawan_foreign` (`id_karyawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembagi`
--
ALTER TABLE `pembagi`
  ADD PRIMARY KEY (`id_pembagi`),
  ADD KEY `pembagi_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD PRIMARY KEY (`id_perangkingan`),
  ADD KEY `perangkingan_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `terbobot_r`
--
ALTER TABLE `terbobot_r`
  ADD PRIMARY KEY (`id_terbobot_r`),
  ADD KEY `terbobot_r_id_alternatif_foreign` (`id_alternatif`);

--
-- Indexes for table `terbobot_y`
--
ALTER TABLE `terbobot_y`
  ADD PRIMARY KEY (`id_terbobot_y`),
  ADD KEY `terbobot_y_id_alternatif_foreign` (`id_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideal_negatif`
--
ALTER TABLE `ideal_negatif`
  MODIFY `id_ideal_negatif` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideal_positif`
--
ALTER TABLE `ideal_positif`
  MODIFY `id_ideal_positif` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jarak_negatif`
--
ALTER TABLE `jarak_negatif`
  MODIFY `id_jarak_negatif` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jarak_positif`
--
ALTER TABLE `jarak_positif`
  MODIFY `id_jarak_positif` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `pembagi`
--
ALTER TABLE `pembagi`
  MODIFY `id_pembagi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perangkingan`
--
ALTER TABLE `perangkingan`
  MODIFY `id_perangkingan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terbobot_r`
--
ALTER TABLE `terbobot_r`
  MODIFY `id_terbobot_r` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terbobot_y`
--
ALTER TABLE `terbobot_y`
  MODIFY `id_terbobot_y` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alternatif_id_karyawan_foreign` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ideal_negatif`
--
ALTER TABLE `ideal_negatif`
  ADD CONSTRAINT `ideal_negatif_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ideal_positif`
--
ALTER TABLE `ideal_positif`
  ADD CONSTRAINT `ideal_positif_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jarak_negatif`
--
ALTER TABLE `jarak_negatif`
  ADD CONSTRAINT `jarak_negatif_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jarak_positif`
--
ALTER TABLE `jarak_positif`
  ADD CONSTRAINT `jarak_positif_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_id_karyawan_foreign` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembagi`
--
ALTER TABLE `pembagi`
  ADD CONSTRAINT `pembagi_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD CONSTRAINT `perangkingan_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terbobot_r`
--
ALTER TABLE `terbobot_r`
  ADD CONSTRAINT `terbobot_r_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terbobot_y`
--
ALTER TABLE `terbobot_y`
  ADD CONSTRAINT `terbobot_y_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
