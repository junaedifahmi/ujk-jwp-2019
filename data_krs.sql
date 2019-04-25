-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2019 at 07:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('junaedi.fahmi15081@student.unsika.ac.id', '0eeb414fba309282da08c830462d0d1c');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nama_dosen` varchar(50) NOT NULL,
  `no_induk` varchar(20) NOT NULL,
  `asisten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nama_dosen`, `no_induk`, `asisten`, `email`) VALUES
('Mimin Suherman, M.Pd', '190719960001', '-', 'mimin.suherman@staff.unsika.ac.id'),
('Mansyur Srisdarso, M.Pd', '190719960002', '-', 'mansyur.srisudarso@staff.unsika.ac.id'),
('Tesa Nur Padilah, M.Si', '190719960003', '-', 'tesa.nur@staff.unsika.ac.id'),
('Akmal, M.T', '190719960004', 'Muhammad Garno', 'muhammad.garno@staff.unsika.ac.id'),
('Hanny Hikmayanti, M.Kom', '190719960005', 'Koboi Juniur', 'hanny.hikma@staff.unsika.ac.id'),
('Ujang Tohidin, M.PdI', '190719960006', '-', 'ujang.tohidin@staff.unsika.ac.id'),
('Riza Ibnu Adam', '190719960007', '-', 'riza.ibnu@staff.unsika.ac.id'),
('Andi Bari, S.Pd', '190719960008', '-', 'andi.bari@staff.unsika.ac.id'),
('Yulianti Ika Susilawati, M.Pd', '190719960009', '-', 'yulianti.ika@staff.unsika.ac.id'),
('Drs. Slamet Abadi, M.Si', '190719960011', '-', 'slamet.abadi@staff.unsika.ac.id'),
('Priati, S.Kom', '190719960013', '-', 'priati@staff.unsika.ac.id'),
('Oman Komarudin S, S.Kom', '190719960014', '-', 'oman@staff.unsika.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `smt_aktif` int(11) NOT NULL,
  `tanggalahir` date NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`email`, `password`, `nama`, `npm`, `smt_aktif`, `tanggalahir`, `catatan`) VALUES
('andri.setiawan15019@student.unsika.ac.id', '3c9505b643c1a713ea933bd83956253b', 'Andri Setiawan', '1510631170019', 2, '2007-12-31', 'Teruskan Usaha mu'),
('joni.k15080@student.unsika.ac.id', '1f9466bedd9011d3711d77877ef3db99', 'Joni K Simanullang', '1510631170080', 2, '2016-05-03', 'Go Go Go!!!'),
('junaedi.fahmi15081@student.unsika.ac.id', '0eeb414fba309282da08c830462d0d1c', 'Junaedi Fahmi', '1510631170081', 3, '1996-07-19', 'Jangan terlalu malas untuk belajar hal baru'),
('reza.diharja15122@student.unsika.ac.id', '9f4d8168051bff78e48d02d933b9d194', 'Reza Diharja', '1510631170122', 2, '2016-05-09', 'Nikmati waktu mu sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `data_mk`
--

CREATE TABLE `data_mk` (
  `smester` int(11) NOT NULL,
  `kode` char(20) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mk`
--

INSERT INTO `data_mk` (`smester`, `kode`, `nama_mk`, `sks`, `deskripsi`) VALUES
(1, 'FKT104', 'Bahasa Inggris 1', 2, 'Bahasa Inggris yang berkaitan dengan Ilmu  Komputer '),
(1, 'FKT105', 'Kalkulus', 3, 'Perhitungan tentang perubahanan atas sesuatu'),
(1, 'FKT106', 'Olahraga 1', 2, 'Pendidikan Kesehatan Jasmani dan Rohani'),
(1, 'FKT107', 'Pengantar Teknologi Informasi', 3, 'Pengenalan secara umum tentang teknologi informasi'),
(2, 'FKT201', 'Matematika Informatika', 3, 'Matematika yang meplaari rumus untuk perhitungan program komputer'),
(2, 'FKT202', 'Aljabar Linear', 3, 'Mata kuliah ini membahas tentang persamaan linear, sifat matrik & operasi baris elementer '),
(2, 'FKT203', 'Pengantar Sistem Informasi', 3, 'Mata kuliah ini mempelajari tentan sistem informasi'),
(2, 'FKT204', 'Pemrograman Dasar (Bahasa C)', 3, 'Program dasar untuk membuat suatu program'),
(2, 'FKT205', 'Struktur Data', 3, 'Mepelajari struktur data/basik data komputer'),
(2, 'FKT206', 'Olahraga II', 2, 'Pendidikan Kesehatan Jasmani & Rohani'),
(2, 'FKT207', 'Bahasa Inggris II', 2, 'Bahasa Inggris yang berkaitandengan komputer'),
(3, 'FKT301', 'Organisasi dan Arsitektur Komputer', 3, ''),
(3, 'FKT302', 'Metoda Numerik', 3, 'Mepmelajari teknik-teknik yang digunakan untuk memformulasikan masalah matematis '),
(3, 'FKT303', 'Statistika I', 3, 'Mempelajari tentang metode yang berkaitan dengan pengumpulan & penyajian suatu data'),
(3, 'FKT304', 'Logika Matematika dan Digital', 3, 'Logika matematika dibagi kedalam cabang dari teori himupnan, teori model & teori rekursi'),
(3, 'FKT305', 'Komunikasi Data Jaringan Komputer', 3, ''),
(4, 'FKT401', 'Statistika II', 3, ''),
(6, 'FKT601', 'Studi Literatur', 2, ''),
(7, 'FKT703', 'Bahasa Indonesia', 2, ''),
(7, 'FKT704', 'Hak Atas Kekayaan Intelektual (HAKI)', 3, ''),
(7, 'FKT705', 'Metodologi Penelitian', 3, ''),
(1, 'IFT108', 'Algoritma', 3, 'Pemikiran terstruktur berkaitan dengan pembuatan program'),
(2, 'IFT208', 'Interaksi Manusia dan Komputer', 3, 'Pngenalan untuk design Interface'),
(3, 'IFT306', 'Pemrograman II (Java Fundamental)', 3, 'Pada mata kuiah ini mahasiswa diajarkan untuk menguasai programing java'),
(3, 'IFT307', 'Analisis dan Desain Berorientasi Objek', 3, ''),
(4, 'IFT402', 'Basis Data', 3, 'Mahasiswa diajarkan untuk memahami penyimpanan suatu data'),
(4, 'IFT403', 'Pemrograman Web I', 3, ''),
(4, 'IFT404', 'Pemrograman Berorientasi Objek', 3, ''),
(4, 'IFT405', 'Rekayasa Perangkat Lunak', 3, ''),
(4, 'IFT406', 'Elekronik Bisnis (E-Bussiness)', 3, ''),
(5, 'IFT501', 'Pengantar Intelegensi Buatan', 3, ''),
(5, 'IFT502', 'Perancangan Basis Data', 3, ''),
(5, 'IFT503', 'Sistem Operasi', 3, ''),
(5, 'IFT504', 'Pemrograman Web II', 3, ''),
(5, 'IFT505', 'Otomata dan Teori Relativitas', 3, ''),
(5, 'IFT506', 'Sistem Informasi Terpusat', 3, ''),
(5, 'IFT507', 'Scurity', 3, ''),
(6, 'IFT602', 'Manajemen Proyek', 3, ''),
(6, 'IFT603', 'Multimedia', 3, ''),
(6, 'IFT604', 'Mobile Programming', 3, ''),
(6, 'IFT605', 'Pemrograman Visual', 3, ''),
(7, 'IFT706', 'Komputer dan Masyarakat', 3, ''),
(8, 'IFT801', 'Skripsi', 6, 'Tugas Akhir'),
(1, 'USM101', 'Pendidikan Agama', 2, 'Pendidikan Agama sesuai Kepercayaan masing-masing'),
(1, 'USM102', 'Pendidikan Pancasila dan Kewarganegaraan', 3, 'Pendidikan kewarganegaraan lanjut'),
(1, 'USM103', 'Fisika Dasar', 3, 'Dasar Fisika dan Elektronika'),
(7, 'USM701', 'Kuliah Kerja Nyata', 3, ''),
(7, 'USM702', 'Kewirausahaan', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id` int(11) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id`, `npm`, `kode_mk`, `nilai`) VALUES
(3, '1510631170081', 'FKT106', 90),
(4, '1510631170081', 'FKT107', 78),
(5, '1510631170081', 'IFT108', 98),
(6, '1510631170081', 'USM101', 90),
(7, '1510631170081', 'USM102', 56),
(8, '1510631170081', 'USM103', 76),
(9, '1510631170122', 'FKT104', 87),
(10, '1510631170122', 'USM102', 89),
(11, '1510631170122', 'USM103', 92),
(12, '1510631170122', 'IFT108', 78),
(13, '1510631170122', 'USM101', 67),
(14, '1510631170122', 'FKT105', 78),
(15, '1510631170122', 'FKT106', 89),
(16, '1510631170122', 'FKT107', 98),
(17, '1510631170080', 'FKT104', 78),
(18, '1510631170080', 'USM102', 56),
(19, '1510631170080', 'USM103', 76),
(20, '1510631170080', 'IFT108', 78),
(21, '1510631170080', 'FKT105', 78),
(22, '1510631170080', 'FKT106', 89),
(23, '1510631170080', 'FKT107', 81),
(24, '1510631170080', 'FKT202', 65),
(25, '1510631170080', 'IFT208', 76),
(26, '1510631170080', 'FKT206', 0),
(27, '1510631170019', 'FKT104', 98),
(28, '1510631170019', 'USM102', 0),
(29, '1510631170019', 'USM103', 0),
(30, '1510631170019', 'IFT108', 0),
(31, '1510631170019', 'USM101', 0),
(32, '1510631170019', 'FKT105', 0),
(33, '1510631170019', 'FKT106', 0),
(34, '1510631170019', 'FKT107', 0),
(40, '1510631170081', 'FKT206', 87.6),
(41, '1510631170081', 'IFT403', 87.6),
(42, '1510631170081', 'IFT404', 87.6),
(43, '1510631170081', 'FKT205', 87);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD UNIQUE KEY `no_induk` (`no_induk`);

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `data_mk`
--
ALTER TABLE `data_mk`
  ADD UNIQUE KEY `kode_mk` (`kode`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD CONSTRAINT `data_nilai_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `data_mk` (`kode`),
  ADD CONSTRAINT `data_nilai_ibfk_3` FOREIGN KEY (`npm`) REFERENCES `data_mhs` (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
