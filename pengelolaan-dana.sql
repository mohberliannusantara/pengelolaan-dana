-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 01:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelolaan-dana`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengguna`
--

CREATE TABLE `jenis_pengguna` (
  `id_jenis_pengguna` int(11) NOT NULL,
  `nama_jenis_pengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengguna`
--

INSERT INTO `jenis_pengguna` (`id_jenis_pengguna`, `nama_jenis_pengguna`) VALUES
(1, 'admin_dinas'),
(2, 'bendahara_sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sekolah`
--

CREATE TABLE `jenis_sekolah` (
  `id_jenis_sekolah` int(11) NOT NULL,
  `nama_jenis_sekolah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sekolah`
--

INSERT INTO `jenis_sekolah` (`id_jenis_sekolah`, `nama_jenis_sekolah`) VALUES
(1, 'SD'),
(2, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_jenis_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email`, `password`, `id_sekolah`, `id_jenis_pengguna`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `id_jenis_sekolah` int(11) NOT NULL,
  `npsn` int(11) NOT NULL,
  `id_status_sekolah` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `id_jenis_sekolah`, `npsn`, `id_status_sekolah`, `kecamatan`, `alamat`) VALUES
(1, 'SMP AHMAD YANI', 2, 20536792, 2, 'Batu', 'Jl. Wukir VII'),
(2, 'SMP AL IRSYAD D/H CENDEKIA', 2, 20539423, 2, 'Junrejo', 'Jl. Mojowarno 01'),
(3, 'SMP AL IZZAH BATU', 2, 20539424, 2, 'Batu', 'Jl. INDRAGIRI GG PANGKUR NO 78 KOTA BATU'),
(4, 'SMP ARJUNO', 2, 20536793, 2, 'Bumiaji', 'Jl. Raya Wonorejo'),
(5, 'SMP AS SALAM', 2, 20536794, 2, 'Junrejo', 'Jl. Makam 30 RT3 RW4'),
(6, 'SMP DARUSH SHOLIHIN', 2, 20535795, 2, 'Batu', 'Jl. Suropati 139'),
(7, 'SMP DIPONEGORO JUNREJO BATU', 2, 20536798, 2, 'Junrejo', 'Jl. Raya Junrejo 3'),
(8, 'SMP IMMANUEL', 2, 20536814, 2, 'Batu', 'Jl. Wukir 01'),
(9, 'SMP ISLAM 01', 2, 20536815, 2, 'Batu', 'Jl. Wr. Supratman 6'),
(10, 'SMP ISLAM ABU GHONAIM', 2, 69964725, 2, 'Bumiaji', 'Jl. Abdul Ghonaim NO. 37'),
(11, 'SMP K WIDYATAMA', 2, 20536845, 2, 'Batu', 'Jalan Panglima Sudirman No. 59'),
(12, 'SMP MAARIF BATU', 2, 20536832, 2, 'Batu', 'Batu'),
(13, 'SMP MUHAMMADIYAH 02', 2, 20536833, 2, 'Batu', 'Jl. Bukit Berbunga 175'),
(14, 'SMP MUHAMMADIYAH 08', 2, 20536834, 2, 'Batu', 'Jl. Welirag 17'),
(15, 'SMP NEGERI 01 BATU', 2, 20536839, 1, 'Batu', 'Jl. KH. Agus Salim 55'),
(16, 'SMP NEGERI 02 BATU', 2, 20536840, 1, 'Batu', 'Sisir Batu'),
(17, 'SMP NEGERI 03 BATU', 2, 20536841, 1, 'Junrejo', 'Jl. Ir Soekarno NO. 8'),
(18, 'SMP NEGERI 04 BATU', 2, 20536842, 1, 'Bumiaji', 'Jln. Diponegoro X / No. 18 RT.4 RW.1 Tulungrejo'),
(19, 'SMP NEGERI 05 BATU', 2, 20531661, 1, 'Bumiaji', 'Dsn. Lemah Putih'),
(20, 'SMP NEGERI 06 BATU', 2, 20551662, 1, 'Bumiaji', 'Jl. Raya Giripurho 284'),
(21, 'SMP PGRI 01', 2, 20539426, 2, 'Batu', 'Jl. Arjuno 40 E Kota Batu'),
(22, 'SMP PGRI 02 BATU', 2, 20536835, 2, 'Bumiaji', 'Jl. Raya Pandanrejo No. 1A'),
(23, 'SMP RADEN PATAH', 2, 20536836, 2, 'Batu', 'Jl. Bukit Berbunga 261'),
(24, 'SMP SOLAIMAN', 2, 20536837, 2, 'Junrejo', 'Jl. Raya Beji 133 Po. Box 2'),
(25, 'SMP TAMANSISWA', 2, 20536838, 2, 'Batu', 'Jl. Kh Agus Salim 45 Batu'),
(26, 'SMPN SATU ATAP GUNUNGSARI 04', 2, 20539427, 1, 'Bumiaji', 'Jl. Argomulyo No.20 Brau'),
(27, 'SMPN SATU ATAP PESANGGRAHAN 2', 2, 20574662, 1, 'Batu', 'Jl. Cempaka Atas No 01'),
(28, 'SD CITRA BUNDA ', 1, 20536873, 2, 'Batu', 'Jl. Sudiro 12'),
(29, 'SD IMMANUEL', 1, 20536874, 2, 'Batu', 'Jl. Wukir Batu '),
(30, 'SD INTEGRAL ALFATTAH', 1, 69974458, 2, 'Batu', 'Jl. Cemara Intan Gg. II Kampung Ladu RT.04 '),
(31, 'SD ISLAM AL HUDA', 1, 20536875, 2, 'Batu', 'Jl. Abdul Gani Atas'),
(32, 'SD K SANG TIMUR', 1, 20539422, 2, 'Batu', 'Jl. Panglima Sudirman 59 A'),
(33, 'SD MUHAMMADIYAH 04 BATU', 1, 20536860, 2, 'Batu', 'Jl. Wlirang 17'),
(34, 'SD MUHAMMADIYAH 05 BATU', 1, 20536847, 2, 'Bumiaji', 'Jl. Masjid 14 Banaran'),
(35, 'SD NEGERI BEJI 01', 1, 20536850, 1, 'Junrejo', 'Jl. Ir SOEKARNO (Ex. Jl. Raya Beji 42)'),
(36, 'SD NEGERI BEJI 02', 1, 20536851, 1, 'Junrejo', 'Jl. Sarimun V'),
(37, 'SD NEGERI BEJI 03', 1, 20536852, 1, 'Junrejo', 'Jl. Sarimun V');

-- --------------------------------------------------------

--
-- Table structure for table `status_sekolah`
--

CREATE TABLE `status_sekolah` (
  `id_status_sekolah` int(1) NOT NULL,
  `nama_status_sekolah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_sekolah`
--

INSERT INTO `status_sekolah` (`id_status_sekolah`, `nama_status_sekolah`) VALUES
(1, 'Negeri'),
(2, 'Swasta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pengguna`
--
ALTER TABLE `jenis_pengguna`
  ADD PRIMARY KEY (`id_jenis_pengguna`),
  ADD KEY `id_jenis_pengguna` (`id_jenis_pengguna`);

--
-- Indexes for table `jenis_sekolah`
--
ALTER TABLE `jenis_sekolah`
  ADD PRIMARY KEY (`id_jenis_sekolah`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_id_jenis` (`id_jenis_pengguna`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD UNIQUE KEY `npsn` (`npsn`),
  ADD KEY `id_jenis_sekolah` (`id_jenis_sekolah`),
  ADD KEY `id_status_sekolah` (`id_status_sekolah`),
  ADD KEY `id_jenis_sekolah_2` (`id_jenis_sekolah`);

--
-- Indexes for table `status_sekolah`
--
ALTER TABLE `status_sekolah`
  ADD PRIMARY KEY (`id_status_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_pengguna`
--
ALTER TABLE `jenis_pengguna`
  MODIFY `id_jenis_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis_pengguna`) REFERENCES `jenis_pengguna` (`id_jenis_pengguna`);

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `fk_id_jenis_Sekolah` FOREIGN KEY (`id_jenis_sekolah`) REFERENCES `jenis_sekolah` (`id_jenis_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_status_sekolah` FOREIGN KEY (`id_status_sekolah`) REFERENCES `status_sekolah` (`id_status_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
