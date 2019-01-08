-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 05:07 AM
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
(0, 'ADM'),
(1, 'SD'),
(2, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_jenis_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `nama_pengguna`, `email`, `password`, `id_sekolah`, `id_jenis_pengguna`) VALUES
(1, 'admin', 'ADMIN DISPENDIK BATU', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 1),
(2, 'sdcitra', 'SD CITRA BUNDA', 'sdcitrabunda@gmail.com', '9b5f61558162fdef8128ddd79758155a', 28, 2);

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
(0, 'Dinas Pendidikan', 0, 0, 0, 'Batu', 'Jl. Panglima Sudirman 507, Gedung A Lantai 2 Balaikota Among Tani'),
(1, 'SMP AHMAD YANI', 2, 20536792, 2, 'Batu', 'Jl. Wukir VII'),
(2, 'SMP AL IRSYAD D/H CENDEKIA', 2, 20539423, 2, 'Junrejo', 'Jl. Mojowarno 01'),
(3, 'SMP AL IZZAH BATU', 2, 20539424, 2, 'Batu', 'Jl. INDRAGIRI GG PANGKUR NO 78 KOTA BATU'),
(4, 'SMP ARJUNO', 2, 20536793, 2, 'Bumiaji', 'Jl. Raya Wonorejo'),
(5, 'SMP AS SALAM', 2, 20536794, 2, 'Junrejo', 'Jl. Makam 30 RT3 RW4'),
(6, 'SMP DARUSH SHOLIHIN', 2, 20535795, 2, 'Batu', 'Jl. Suropati 139'),
(7, 'SMP DIPONEGORO JUNREJO BATU', 2, 20536796, 2, 'Junrejo', 'Jl. Raya Junrejo 3'),
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
(28, 'SD CITRA BUNDA', 1, 20536873, 2, 'Batu', 'Jl. Sudiro 12'),
(29, 'SD IMMANUEL', 1, 20536874, 2, 'Batu', 'Jl. Wukir Batu '),
(30, 'SD INTEGRAL ALFATTAH', 1, 69974458, 2, 'Batu', 'Jl. Cemara Intan Gg. II Kampung Ladu RT.04 '),
(31, 'SD ISLAM AL HUDA', 1, 20536875, 2, 'Batu', 'Jl. Abdul Gani Atas'),
(32, 'SD K SANG TIMUR', 1, 20539422, 2, 'Batu', 'Jl. Panglima Sudirman 59 A'),
(33, 'SD MUHAMMADIYAH 04 BATU', 1, 20536860, 2, 'Batu', 'Jl. Wlirang 17'),
(34, 'SD MUHAMMADIYAH 05 BATU', 1, 20536847, 2, 'Bumiaji', 'Jl. Masjid 14 Banaran'),
(35, 'SD NEGERI BEJI 01', 1, 20536850, 1, 'Junrejo', 'Jl. Ir SOEKARNO (Ex. Jl. Raya Beji 42)'),
(36, 'SD NEGERI BEJI 02', 1, 20536851, 1, 'Junrejo', 'Jl. Sarimun V'),
(37, 'SD NEGERI BEJI 03', 1, 20536852, 1, 'Junrejo', 'Jl. Sarimun V'),
(38, 'SD NEGERI BULUKERTO 01', 1, 20536853, 1, 'Bumiaji', 'Jl. Kenanga'),
(39, 'SD NEGERI BULUKERTO 02', 1, 20536854, 1, 'Bumiaji', 'Jl. Imam Sujono 67'),
(40, 'SD NEGERI BUMIAJI 01', 1, 20536856, 1, 'Bumiaji', 'Jl. Abu Ghonaim 31'),
(41, 'SD NEGERI BUMIAJI 02', 1, 20536857, 1, 'Bumiaji', 'Jl. Kastubi 01'),
(42, 'SD NEGERI DADAPREJO 01', 1, 20536858, 1, 'Junrejo', 'Jl. Martorejo 1A'),
(43, 'SD NEGERI DADAPREJO 02', 1, 20536859, 1, 'Junrejo', 'Jl. Martorejo'),
(44, 'SD NEGERI GIRIPURNO 01', 1, 20536876, 1, 'Bumiaji', 'Jl. Raya Giripurno 221'),
(45, 'SD NEGERI GIRIPURNO 02', 1, 20536877, 1, 'Bumiaji', 'Jl. Arjuno No 9'),
(46, 'SD NEGERI GIRIPURNO 03', 1, 20536878, 1, 'Bumiaji', 'Jl. Indrokilo No 01'),
(47, 'SD NEGERI GUNUNGSARI 01', 1, 20536897, 1, 'Bumiaji', 'Jl. Brumbung 73'),
(48, 'SD NEGERI GUNUNGSARI 02', 1, 20536898, 1, 'Bumiaji', 'Jl. Wongso 45 Pagergunung'),
(49, 'SD NEGERI GUNUNGSARI 03', 1, 20536899, 1, 'Bumiaji', 'Dsn. Kandangan'),
(50, 'SD NEGERI GUNUNGSARI 04', 1, 20536900, 1, 'Bumiaji', 'Jl. Argomulyo 20 Brau'),
(51, 'SD NEGERI JUNREJO 01', 1, 20536901, 1, 'Junrejo', 'Jl. Hasanudin 57'),
(52, 'SD NEGERI JUNREJO 02', 1, 20536903, 1, 'Junrejo', 'Jl. Raya Junrejo 6'),
(53, 'SD NEGERI MOJOREJO 01', 1, 20536904, 1, 'Junrejo', 'Jl. Mojopahit 02'),
(54, 'SD NEGERI MOJOREJO 02', 1, 20536905, 1, 'Junrejo', 'Jl Masjid No 23'),
(55, 'SD NEGERI NGAGLIK 01', 1, 20536906, 1, 'Batu', 'Jl. Abdul Rahman No 23'),
(56, 'SD NEGERI NGAGLIK 03', 1, 20536907, 1, 'Batu', 'Jl. Abdul Gani IV / 29'),
(57, 'SD NEGERI NGAGLIK 04', 1, 20536908, 1, 'Batu', 'Jl Darsono Barat 27'),
(58, 'SD NEGERI NGAGLIK 2', 1, 20539420, 1, 'Batu', 'Jl. Ikhwan Hadi no 41'),
(59, 'SD NEGERI ORO-ORO OMBO 03', 1, 20536895, 1, 'Batu', 'Jl. Tvri RT 03 RW 10 Dresel'),
(60, 'SD NEGERI ORO-ORO OMBO 01', 1, 20536909, 1, 'Batu', 'Jl. Raya Oro-oro Ombo'),
(61, 'SD NEGERI ORO-ORO OMBO 02', 1, 20536896, 1, 'Batu', 'Jl Raya Oro-oro Ombo 36'),
(62, 'SD NEGERI PANDANREJO 01', 1, 20536894, 1, 'Bumiaji', 'Jl. Raya Pandanrejo NO 1A'),
(63, 'SD NEGERI PANDANREJO 02', 1, 20536879, 1, 'Bumiaji', 'Jl. Raya Pandanrejo 122'),
(64, 'SD NEGERI PENDEM 01', 1, 20536880, 1, 'Junrejo', 'Jl. Dr. Moh. Hatta NO 118'),
(65, 'SD NEGERI PENDEM 02', 1, 20536881, 1, 'Junrejo', 'Jl. Dr. Moh. Hatta NO 134'),
(66, 'SD NEGERI PESANGGRAHAN 01', 1, 20536883, 1, 'Batu', 'Jl. Suropati 123'),
(67, 'SD NEGERI PESANGGRAHAN 02', 1, 20551660, 1, 'Batu', 'Jl Cempaka Atas 1'),
(68, 'SD NEGERI PUNTEN 01', 1, 20536884, 1, 'Bumiaji', 'Jl Raya Punten 24'),
(69, 'SD NEGERI PUNTEN 02', 1, 20536885, 1, 'Bumiaji', 'Jl Anjasmoro 12'),
(70, 'SD NEGERI SIDOMULYO 01', 1, 20536886, 1, 'Batu', 'Jl Bukit Berbunga 70'),
(71, 'SD NEGERI SIDOMULYO 02', 1, 20536887, 1, 'Batu', 'Jl Cemara Kipas 120'),
(72, 'SD NEGERI SIDOMULYO 03', 1, 20536889, 1, 'Batu', 'Jl Mawar Putih 141 RT 03 RW 12'),
(73, 'SD NEGERI SISIR 01', 1, 20536891, 1, 'Batu', 'Jl Arjuno 40 D'),
(74, 'SD NEGERI SISIR 02', 1, 20536892, 1, 'Batu', 'Jl. Arjuno 40 D'),
(76, 'SD NEGERI SISIR 03', 1, 20536893, 1, 'Batu', 'Jl. Imam Bonjol III / 9'),
(77, 'SD NEGERI SISIR 04', 1, 20536910, 1, 'Batu', 'Jl. Imam Bonjol III / 8'),
(78, 'SD NEGERI SISIR 05', 1, 20536813, 1, 'Batu', 'Jl. Arjuno 60'),
(79, 'SD NEGERI SISIR 06', 1, 20536800, 1, 'Batu', 'Jl. Imam Bonjol Gg III No 15 B'),
(80, 'SD NEGERI SONGGOKERTO 01', 1, 20536801, 1, 'Batu', 'Jl Trunojoyo V / 2A'),
(81, 'SD NEGERI SONGGOKERTO 02', 1, 20536802, 1, 'Batu', 'Jl. Terati II / 23'),
(82, 'SD NEGERI SONGGOKERTO 03', 1, 20536803, 1, 'Batu', 'Jl. Arum Dalu 65A'),
(83, 'SD NEGERI SUMBEREJO 01', 1, 20536804, 1, 'Batu', 'Jl Indragiri 79'),
(84, 'SD NEGERI SUMBEREJO 02', 1, 20536805, 1, 'Batu', 'Jl Indragiri 81'),
(85, 'SD NEGERI SUMBEREJO 03', 1, 20536806, 1, 'Batu', 'Jl. Metro NO 22 Santrean Sumberejo'),
(86, 'SD NEGERI SUMBERGONDO 01', 1, 20536807, 1, 'Bumiaji', 'Jl. Raya Sumbergondo 2'),
(87, 'SD NEGERI TEMAS 01', 1, 20536809, 1, 'Batu', 'Jl. Patimura 23'),
(88, 'SD NEGERI TEMAS 02', 1, 20536811, 1, 'Batu', 'Jl. Wukir VIII / 38'),
(89, 'SD NEGERI TLEKUNG 01', 1, 20536812, 1, 'Junrejo', 'Jl Raya Tlekung 51'),
(90, 'SD NEGERI TLEKUNG 02', 1, 20536799, 1, 'Junrejo', 'Jl Raya Tlekung RT 03 RW 06'),
(91, 'SD NEGERI TORONGREJO 01', 1, 20536778, 1, 'Junrejo', 'Jl. Wukir 37'),
(93, 'SD NEGERI TORONGREJO 02', 1, 20536798, 1, 'Junrejo', 'Jl. Cendana Ngukir'),
(94, 'SD NEGERI TORONGREJO 03', 1, 20536797, 1, 'Junrejo', 'Jl. Aji Mustofa No 53'),
(95, 'SD NEGERI TULUNGREJO 01', 1, 20536776, 1, 'Bumiaji', 'Jl Diponegoro 182'),
(96, 'SD NEGERI TULUNGREJO 02', 1, 20539421, 1, 'Bumiaji', 'Jl. Asparagus 27 Junggo'),
(97, 'SD NEGERI TULUNGREJO 03', 1, 20536775, 1, 'Bumiaji', 'Jl. Raya Sumberbrantas No 116 Dusun Lemah Putih'),
(98, 'SD NEGERI TULUNGREJO 04', 1, 20536774, 1, 'Bumiaji', 'Dsn Wonorejo'),
(99, 'SD NEGERI TULUNGREJO 05', 1, 20554537, 1, 'Bumiaji', 'Jl Anjarnyoto No 01 Dusun Kekep Desa Tulungrejo'),
(100, 'SD PLUS AL IRSYAD', 1, 20536848, 2, 'Batu', 'Jl. Semeru I / 8'),
(101, 'SD - IT IBNU HAJAR', 1, 20571506, 2, 'Batu', 'Jl. Perum Puri Indah Gondorejo'),
(102, 'SDI SABILUL KHOIR BEJI', 1, 69727596, 2, 'Junrejo', 'Jl Makam No 33 RT 03 RW 04'),
(103, 'SDIT TAHFIDZ AL MUNAWWAR', 1, 69969378, 2, 'Batu', 'Jl. Melati No 11 RT 01 RW 05'),
(104, 'SD NEGERI SUMBERGONDO 02', 1, 20536808, 1, 'Bumiaji', 'Jl. Tegalsari 5'),
(105, 'SD NEGERI BULUKERTO 03', 1, 20536855, 1, 'Bumiaji', 'Jl.Nurhadi No 1 Cangar Bulukerto');

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
(0, 'Dispendik'),
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
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_id_jenis` (`id_jenis_pengguna`),
  ADD KEY `fk_id_sekolah` (`id_sekolah`);

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
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis_pengguna`) REFERENCES `jenis_pengguna` (`id_jenis_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_sekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `fk_id_jenis_Sekolah` FOREIGN KEY (`id_jenis_sekolah`) REFERENCES `jenis_sekolah` (`id_jenis_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_status_sekolah` FOREIGN KEY (`id_status_sekolah`) REFERENCES `status_sekolah` (`id_status_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
