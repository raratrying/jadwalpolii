-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 11:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poli`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwallpoli`
--

CREATE TABLE `jadwallpoli` (
  `id` int(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `poli` varchar(20) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `jam_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwallpoli`
--

INSERT INTO `jadwallpoli` (`id`, `hari`, `poli`, `nama_dokter`, `jam_kerja`) VALUES
(1, 'Senin,10 Januari 2024', 'Umum', 'Dr. Adi Wibowo', '08:00 -13:00'),
(2, 'Senin,10 Januari 2024', 'Anak', 'Dr. Widya Kusuma', '11:00 - 16:00'),
(3, 'Selasa, 11 Januari 2024', 'Kulit', 'Dr. Rini Cahyani', '08:30 - 13:00'),
(4, 'Selasa, 11 Januari 2024', 'Mata', 'Dr. Dewa Nugraha', '09:00 - 14:00'),
(5, 'Rabu, 12 Januari 2024', 'Bedah', 'Dr. Ika Pratiwi', '09:30 - 17:30'),
(6, 'Rabu, 12 Januari 2024', 'Jantung', 'Dr. Cahya Wijaya', '08:30 - 16:30'),
(7, 'Rabu, 12 Januari 2024', 'Gizi', 'Dr. Wulan Sari', '10:00 - 18:00'),
(8, 'Kamis, 13 Januari 2024', 'Psikiatri', 'Dr. Agus Setiawan', '11:00 - 19:00'),
(9, 'Kamis, 13 Januari 2024', 'Orthopedi', 'Dr. Dian Nugraha', '08.00-17.00'),
(10, 'Jumat, 14 Januari 2024', 'Gigi', 'Dr. Sari Utami', '10:00 - 18:00'),
(11, 'Jumat, 14 Januari 2024', 'Bedah Umum', 'Dr. Agus Setiawan ', '08:00 - 16:00'),
(12, 'Sabtu, 15 Januari 2024', 'Kandungan', 'Dr. Maria Wijaya', '09:00 - 17:00 '),
(13, 'Sabtu, 15 Januari 2024', 'Anak', 'Dr. Budi Santoso', '07:30 - 15:30'),
(14, 'Sabtu, 15 Januari 2024', 'Gigi', ' Dr. Rini Cahyani', '10:00 - 18:00'),
(15, 'Minggu, 16 Januari 2024', 'Mata', 'Dr. Indra Pratama ', '08:30 - 16:30'),
(16, 'Minggu, 16 Januari 2024', 'Kandungan', 'Dr. Siti Aminah', '11:00 - 19:00'),
(17, 'Senin, 17 Januari 2024', 'Bedah Plastik', 'Dr. Farida Rahman', '10:30 - 18:30'),
(18, 'Senin, 17 Januari 2024', 'THT', 'Dr. Adi Nugroho ', '08:00 - 16:00'),
(19, 'Senin, 17 Januari 2024', ' Mata', 'Dr. Lia Susanti', '09:30 - 17:30 '),
(20, 'Selasa, 18 Januari 2024', 'Gigi            ', 'Dr. Joko Wibowo', '07:00 - 15:00'),
(21, 'Selasa, 18 Januari 2024', 'Kandungan         ', 'Dr. Ratna Sari', '08:30 - 16:30'),
(22, 'Selasa, 18 Januari 2024', 'Bedah Umum', 'Dr. Irfan Malik', '10:00 - 18:00 '),
(23, 'Selasa, 18 Januari 2024', 'Gigi              ', 'Dr. Putri Wardhani', '09:30 - 17:30'),
(24, 'Rabu, 19 Januari 2024', 'Anak              ', 'Dr. Ahmad Faisal', '11:00 - 19:00'),
(25, 'Rabu, 19 Januari 2024', 'Penyakit Dalam', 'Dr. Fitriani Dewi', '08:00 - 16:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwallpoli`
--
ALTER TABLE `jadwallpoli`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
