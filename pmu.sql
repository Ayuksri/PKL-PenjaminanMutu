-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 06:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password_admin`, `email_admin`) VALUES
(1, 'Eka Karyawati', 'eka123', 'eka.karyawati@cs.unud.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(100) NOT NULL,
  `angkatan_mhs` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan_mhs`) VALUES
(1, 2006),
(2, 2007),
(3, 2008),
(4, 2009),
(5, 2010),
(6, 2011),
(7, 2012),
(8, 2013),
(9, 2014),
(10, 2015),
(11, 2016),
(12, 2017),
(13, 2018),
(14, 2019),
(15, 2020),
(16, 2021),
(17, 2022),
(18, 2023),
(19, 2024),
(20, 2025);

-- --------------------------------------------------------

--
-- Table structure for table `cpl_prodi`
--

CREATE TABLE `cpl_prodi` (
  `id_cpl` int(100) NOT NULL,
  `kode_cpl` varchar(100) NOT NULL,
  `deskripsi_cpl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpl_prodi`
--

INSERT INTO `cpl_prodi` (`id_cpl`, `kode_cpl`, `deskripsi_cpl`) VALUES
(2, 'S9', '1Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.'),
(3, 'P1', 'Menguasai konsep teoritis bidang pengetahuan Ilmu Komputer/Informatika secara umum dan konsep teoritis bagian khusus dalam bidang pengetahuan tersebut secara mendalam, serta mampu memformulasikan penyelesaian masalah prosedural.'),
(4, 'P2', 'Memiliki pengetahuan yang memadai terkait dengan cara kerja sistem komputer dan mampu merancang dan mengembangkan berbagai algorithma /metode untuk memecahkan masalah.'),
(5, 'KK1', 'Mampu merancang dan mengembangkan algorithma untuk berbagai keperluan seperti Network Security, Data Compression Multimedia Technologies, Mobile Computing Intelligent Systems, Information Management, Algorithms and Complexity, Human-Computer Interaction, Graphics and Visual Computing.'),
(6, 'KU1', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya;');

-- --------------------------------------------------------

--
-- Table structure for table `cp_mk`
--

CREATE TABLE `cp_mk` (
  `id_cp` int(100) NOT NULL,
  `kode_cp` varchar(100) NOT NULL,
  `deskripsi_cp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_mk`
--

INSERT INTO `cp_mk` (`id_cp`, `kode_cp`, `deskripsi_cp`) VALUES
(2, 'M1', 'Setelah mengikuti mata kuliah ini, mahasiswa dapat menjelaskan peran algoritma dan pemrograman dalam sistem komputer. (P1, P2)'),
(3, 'M2', 'Setelah diberikan beberapa contoh algoritma dalam pseudocode dan flowchart, mahasiswa dapat menyelesaikan masalah dengan menggunakan pseudocode dan mengimplementasikan ke dalam bentuk flowchart. (S9, P1,KK1, KU1, KU8)'),
(4, 'M3', 'Mahasiswa mampu menggunakan tipe data dasar dan operator dalam bahasa pemrograman C. (S9, P1, KK1, KU1, KU8)'),
(5, 'M4', 'Setelah diberikan kasus, mahasiswa mampu mengimplementasikan penggunaan struktur kondisi dalam penyelesaian masalah tersebut. (S9, P1, KK1, KU1, KU8)');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int(100) NOT NULL,
  `nip` double NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nip`, `nama`, `jenis_kelamin`, `email`, `password`) VALUES
(0, 1.990060620181123e18, 'Gst. Ayu Vida Mastrika Giri, S.Kom., M.Cs.', 'perempuan', 'vida.mastrika@cs.unud.ac.id', 'vida123'),
(5117510, 1.97511052005011e17, 'I Made Widhi Wirawan, S.Si., M.Si., M.Cs.', 'Laki-laki', 'made_widhi@yahoo.com', 'widhi123'),
(6128006, 1.98012062006041e17, 'I Gede Santi Astawa, S.T., M.Cs.', 'laki-laki', 'santi.astawa@cs.unud.ac.id', 'astawa123'),
(7047408, 1.97404071998022e17, 'Dr. Anak Agung Istri Ngurah Eka Karyawati, S.Si.,M.Eng.', 'perempuan', 'eka.karyawati@cs.unud.ac.id', 'eka123'),
(14016403, 1.96401141994022e17, 'Dra. Luh Gede Astuti,M.Kom.', 'perempuan', 'lg.astuti@cs.unud.ac.id', 'astuti123'),
(14046702, 1.96704141992031e17, 'Drs. I Wayan Santiyasa,M.Si.', 'perempuan', 'santiyasa67@gmail.com', 'santi123'),
(15038503, 1.98503152010121e17, 'Ida Bagus Gede Dwidasmara, S.Kom., M.Cs.', 'Laki-laki', 'dwidasmara@unud.ac.id', 'dwidasmara123'),
(16068003, 1.98006162005011e17, 'Agus Muliantara, S.Kom, M.Kom', 'Laki-laki', 'muliantara@gmail.com', 'gusmul123'),
(18098205, 1.9820918200812202e17, 'Luh Arida Ayu Rahning Putri, S.Kom., M.Cs.', 'perempuan', 'luh.arida@cs.unud.ac.id', 'arida123'),
(20128202, 1.98212202008011e17, 'I Made Widiartha, S.Si., M.Kom.', 'Laki-laki', 'madewidiartha@unud.ac.id', 'wdartha123'),
(21037803, 1.97803212005011e17, 'Dr. Ngurah Agus Sanjaya ER, S.Kom., M.Kom.', 'Laki-laki', 'agus_sanjaya@unud.ac.id', 'sanjaya123'),
(21058003, 1.98006212008121e17, 'Ida Bagus Made Mahendra, S.Kom., M.Kom.', 'Laki-laki', 'gusdek@gmail.com', 'gusdek123'),
(21067808, 1.97806212006041e17, 'Cokorda Rai Adi Pramartha,ST.MM.PhD', 'Laki-laki', 'cokorda@cs.unud.ac.id', 'cok123'),
(22108303, 1.98310222008121e17, 'I Gede Arta Wibawa, S.T., M.KOM.', 'Laki-laki', 'gede.arta@unud.ac.id', 'arta123'),
(24018201, 1.98201242005021e17, 'I MADE AGUS SETIAWAN, S.Kom., M.Kom', 'Laki-laki', 'madeagus@gmail.com', 'agus123'),
(24098402, 1.98409242008011e17, 'I Komang Ari Mogi, S.Kom., M.Kom.', 'Laki-laki', 'arimogi@unud.ac.id', 'mogi123'),
(27018901, 1.98901272012121e17, 'I Dewa Made Bayu Atmaja Darmawan,S.Kom.,M.Cs.', 'Laki-laki', 'dwbayu@gmail.com', 'bayu123'),
(28128801, 1.98812282014041e17, '	I PUTU GEDE HENDRA SUPUTRA, S.Kom.,M.Kom.', 'laki-laki', 'hendra.suputra@gmail.com', 'hendra123'),
(810017201, 1.97201102008121e17, 'Dr. I Ketut Gede Suhartana, S.Kom., M.Kom', 'Laki-laki', 'ikg.suhartana@unud.ac.id', 'suhartana123'),
(817038401, 1.98403172019031e17, 'I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs', 'Laki-laki', 'anom.cp@unud.ac.id', 'anom123'),
(819098502, 1.985091920181113e18, 'Made Agung Raharja, S.Si., M.Cs.', 'laki-laki', 'made.agung@unud.ac.id', 'degung123'),
(829088401, 1.984082920181113e18, 'I Wayan Supriana, S.Si., M.Cs.', 'laki-laki', 'wayan.supriana@unud.ac.id', 'wayan123');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_kuliah`
--

CREATE TABLE `kontrak_kuliah` (
  `id_kontrak_kuliah` int(10) NOT NULL,
  `sks` int(10) NOT NULL,
  `deskripsi_mata_kuliah` longtext NOT NULL,
  `strategi_perkuliahan` longtext NOT NULL,
  `referensi` longtext NOT NULL,
  `persentase_kehadiran` int(10) NOT NULL,
  `persentase_keaktifan` int(10) NOT NULL,
  `persentase_kuis` int(10) NOT NULL,
  `persentase_uts` int(10) NOT NULL,
  `persentase_uas` int(10) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_semester` int(100) NOT NULL,
  `nidn` int(100) NOT NULL,
  `topik_1` text NOT NULL,
  `topik_2` text NOT NULL,
  `topik_3` text NOT NULL,
  `topik_4` text NOT NULL,
  `topik_5` text NOT NULL,
  `topik_6` text NOT NULL,
  `topik_7` text NOT NULL,
  `topik_8` text NOT NULL,
  `topik_9` text NOT NULL,
  `topik_10` text NOT NULL,
  `topik_11` text NOT NULL,
  `topik_12` text NOT NULL,
  `topik_13` text NOT NULL,
  `topik_14` text NOT NULL,
  `topik_15` text NOT NULL,
  `topik_16` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak_kuliah`
--

INSERT INTO `kontrak_kuliah` (`id_kontrak_kuliah`, `sks`, `deskripsi_mata_kuliah`, `strategi_perkuliahan`, `referensi`, `persentase_kehadiran`, `persentase_keaktifan`, `persentase_kuis`, `persentase_uts`, `persentase_uas`, `id_matkul`, `id_semester`, `nidn`, `topik_1`, `topik_2`, `topik_3`, `topik_4`, `topik_5`, `topik_6`, `topik_7`, `topik_8`, `topik_9`, `topik_10`, `topik_11`, `topik_12`, `topik_13`, `topik_14`, `topik_15`, `topik_16`) VALUES
(5, 12, 'safasfaf', 'azsfafs', 'asasf', 11, 12, 12, 13, 13, 214, 1, 7047408, 'qweqwe', 'qeqwe', 'qwqwqw', 'wewe', 'wwewrr', 'wrrwwrq', 'bcbdfb', 'sfgdfg', 'sdgsgd', 'sdgsdg', 'sdgsdg', 'sdgsdg', 'sdgsdg', 'sdgsdg', 'asdfaf', 'wdgdg'),
(6, 3, 'asd', 'asd', 'asd', 20, 20, 20, 20, 20, 214, 1, 7047408, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_penilaian`
--

CREATE TABLE `kriteria_penilaian` (
  `id_kriteria` int(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `deskripsi_kriteria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_penilaian`
--

INSERT INTO `kriteria_penilaian` (`id_kriteria`, `kode_kriteria`, `deskripsi_kriteria`) VALUES
(2, 'KP1', 'Ketepatan'),
(3, 'KP2', 'Penguasaan'),
(4, 'KP3', 'Sistematis');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(100) NOT NULL,
  `nim` int(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_angkatan` int(100) NOT NULL,
  `id_semester` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mhs`, `id_matkul`, `id_angkatan`, `id_semester`) VALUES
(1, 1608561030, 'Putu Asri Sri Sutanti', 382, 13, 1),
(2, 1608561029, 'I Made Wardana', 384, 13, 1),
(3, 1608561032, 'Made Chandra Hendrawan', 382, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(100) NOT NULL,
  `kode_matkul` varchar(100) NOT NULL,
  `nidn` int(100) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jalur` varchar(100) NOT NULL,
  `id_semester` int(100) NOT NULL,
  `id_angkatan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `kode_matkul`, `nidn`, `nama_matkul`, `kelas`, `jalur`, `id_semester`, `id_angkatan`) VALUES
(214, 'IF1610012', 0, 'Bahasa Inggrisku', 'A', 'aa1', 1, 12),
(216, 'IF1610032', 14016403, 'Bahasa Indonesia', 'A', '-', 1, 12),
(218, 'IF1610053', 7047408, 'Matematika Diskrit I', 'A', '-', 1, 12),
(219, 'IF1610063', 829088401, 'Algoritma & Pemrograman', 'A', '-', 1, 12),
(220, 'IF1610073', 7047408, 'Logika Informatika', 'A', '-', 1, 12),
(221, 'IF1610083', 7047408, 'Sistem Digital ', 'A', '-', 1, 12),
(222, 'IF1620012', 7047408, 'Ilmu Sosial dan Budaya Dasar  ', 'A', '-', 2, 12),
(223, 'IF1620022', 14016403, 'Pancasila ', 'A', '-', 2, 12),
(224, 'IF1620033', 6128006, 'Kalkulus II ', 'A', '-', 2, 12),
(225, 'IF1620043', 7047408, 'Statistika Dasar ', 'A', '-', 2, 12),
(226, 'IF1620053', 829088401, 'Struktur Data ', 'A', '-', 2, 12),
(227, 'IF1620063', 7047408, 'Matematika Diskrit II', 'A', '-', 2, 12),
(228, 'IF1620073', 7047408, 'Aljabar Linear Elementer ', 'A', '-', 2, 12),
(229, 'IF1620083', 7047408, 'Praktikum Sistem Digital', 'A', '-', 2, 12),
(230, 'IF1620091', 14016403, 'Praktikum Algoritma & Pemrograman', 'A', '-', 2, 12),
(231, 'IF1630013', 6128006, 'Sistem Operasi ', 'A', '-', 3, 12),
(232, 'IF1630023', 7047408, 'Basis Data ', 'A', '-', 3, 12),
(233, 'IF1630033', 829088401, 'Desain dan Analisis Algoritma ', 'A', '-', 3, 12),
(234, 'IF1630043', 7047408, 'Program Linear ', 'A', '-', 3, 12),
(235, 'IF1630053', 7047408, 'Analisis Numerik', 'A', '-', 3, 12),
(236, 'IF1630063', 7047408, 'Pengantar Kecerdasan Buatan ', 'A', '-', 3, 12),
(237, 'IF1630073', 14016403, 'Pengantar Probabilitas ', 'A', '-', 3, 12),
(238, 'IF1630081', 6128006, 'Praktikum Struktur Data ', 'A', '-', 3, 12),
(239, 'IF1640012', 7047408, 'Etika', 'A', '-', 4, 12),
(240, 'IF1640023', 829088401, 'Rekayasa Perangkat Lunak ', 'A', '-', 4, 12),
(241, 'IF1640033', 7047408, 'Pemrograman Berorientasi Obyek ', 'A', '-', 4, 12),
(242, 'IF1640043', 7047408, 'Riset Operasi ', 'A', '-', 4, 12),
(243, 'IF1640053', 7047408, 'Basis Data Lanjut ', 'A', '-', 4, 12),
(244, 'IF1640063', 14016403, 'Organisasi dan Arsitektur Komputer ', 'A', '-', 4, 12),
(245, 'IF1640073', 6128006, 'Komunikasi Data dan Jaringan Komp. ', 'A', '-', 4, 12),
(246, 'IF1640081', 7047408, 'Praktikum Sistem Operasi', 'A', '-', 4, 12),
(247, 'IF1640091', 829088401, 'Praktikum Basis Data', 'A', '-', 4, 12),
(248, 'IF1650013', 7047408, 'Teori Bahasa dan Otomata ', 'A', '-', 5, 12),
(249, 'IF1650023', 7047408, 'Analisis dan Desain Sistem ', 'A', '-', 5, 12),
(250, 'IF1650033', 7047408, 'Pemodelan dan Simulasi ', 'A', '-', 5, 12),
(251, 'IF1650043', 14016403, 'Grafika Komputer ', 'A', '-', 5, 12),
(252, 'IF1650053', 6128006, 'Pemrograman Berbasis Web ', 'A', '-', 5, 12),
(253, 'IF1650063', 7047408, 'Metode Penelitian ', 'A', '-', 5, 12),
(254, 'IF1650072', 829088401, 'Interaksi Manusia dan Komputer ', 'A', '-', 5, 12),
(255, 'IF1650081', 7047408, 'Praktikum Pemrograman Berorientasi Obyek ', 'A', '-', 5, 12),
(256, 'IF1650091', 7047408, 'Praktikum Komunikasi Data dan Jaringan Komp. ', 'A', '-', 5, 12),
(257, 'IF1660012', 7047408, 'Tata Tulis Karya Ilmiah', 'A', '-', 6, 12),
(258, 'IF1660022', 14016403, 'Kewirausahaan', 'A', '-', 6, 12),
(259, 'IF1660042', 6128006, 'Etika Profesi', 'A', '-', 6, 12),
(260, 'IF1660051', 7047408, 'Praktikum Pemrograman Berbasis Web', 'A', '-', 6, 12),
(261, 'IF1660032', 829088401, 'KKN', 'A', '-', 6, 12),
(262, 'IF1801013', 14016403, 'Penambangan Data Tekstual dan Pemrosesan Bahasan Alami', 'A', '-', 6, 12),
(263, 'IF1801023', 6128006, 'Temu Kembali Informasi Tekstual', 'A', '-', 6, 12),
(264, 'IF1801033', 7047408, 'Pembelajaran Mesin untuk Data Tekstual ', 'A', '-', 6, 12),
(265, 'IF1801043', 829088401, 'Analisis Semantik', 'A', '-', 6, 12),
(266, 'IF1801073', 7047408, 'Manajemen Pengetahuan Semantik ', 'A', '-', 6, 12),
(267, 'IF1801083', 14016403, 'Sistem Manajemen Pengetahuan ', 'A', '-', 6, 12),
(268, 'IF1801093', 6128006, 'Warisan Budaya Digital ', 'A', '-', 6, 12),
(269, 'IF1801103', 7047408, 'Intelijen Bisnis dan Analisis ', 'A', '-', 6, 12),
(270, 'IF1801133', 7047408, 'Pemrosesan Sinyal Digital', 'A', '-', 6, 12),
(271, 'IF1801143', 7047408, 'Pengenalan Pola', 'A', '-', 6, 12),
(272, 'IF1801153', 14016403, 'Sistem Temu Kembali Informasi Musik ', 'A', '-', 6, 12),
(273, 'IF1801163', 6128006, 'Sintesis Bunyi ', 'A', '-', 6, 12),
(274, 'IF1801193', 7047408, 'Pengolahan Bunyi Digital', 'A', '-', 6, 12),
(275, 'IF1801203', 7047408, 'Pengolahan Citra Digital ', 'A', '-', 6, 12),
(276, 'IF1801213', 7047408, 'Kompresi Data Multimedia ', 'A', '-', 6, 12),
(277, 'IF1801223', 14016403, 'Jaringan Multimedia ', 'A', '-', 6, 12),
(278, 'IF1801253', 829088401, 'Kriptografi', 'A', '-', 6, 12),
(279, 'IF1801263', 7047408, 'Kriptoanalisis ', 'A', '-', 6, 12),
(280, 'IF1801273', 7047408, 'Keamanan Sistem Informasi ', 'A', '-', 6, 12),
(281, 'IF1801283', 7047408, 'Forensik Digital', 'A', '-', 6, 12),
(282, 'IF1801313', 7047408, 'Teknologi Nirkabel', 'A', '-', 6, 12),
(283, 'IF1801323', 829088401, 'Jaringan Sensor Terdistribusi ', 'A', '-', 6, 12),
(284, 'IF1801333', 7047408, 'Data Integrasi dan Sensor Web ', 'A', '-', 6, 12),
(285, 'IF1801343', 7047408, 'Pemrosesan Dalam Jaringan ', 'A', '-', 6, 12),
(286, 'IF1801373', 6128006, 'Analisis dan Pengolahan Data Digital', 'A', '-', 6, 12),
(287, 'IF1801383', 7047408, 'Metode Kecerdasan Buatan Lanjut', 'A', '-', 6, 12),
(288, 'IF1801393', 829088401, 'Metode Penalaran', 'A', '-', 6, 12),
(289, 'IF1801403', 7047408, 'Sistem Pakar ', 'A', '-', 6, 12),
(290, 'IF1801433', 14016403, 'Manajemen Proyek Teknologi Informasi', 'A', '-', 6, 12),
(291, 'IF1801443', 6128006, 'Penambangan Data dan Analisis ', 'A', '-', 6, 12),
(292, 'IF1801453', 7047408, 'Pemrograman Berbasis Mobile', 'A', '-', 6, 12),
(293, 'IF1801463', 829088401, 'Gudang Data dan Basis Data Terdistribusi ', 'A', '-', 6, 12),
(294, 'IF1801493', 7047408, 'Kecerdasan Buatan Pada Pengembangan Game ', 'A', '-', 6, 12),
(295, 'IF1801503', 14016403, 'Realitas Virtual dan Tertambah', 'A', '-', 6, 12),
(296, 'IF1801513', 6128006, 'Analisis Antarmuka', 'A', '-', 6, 12),
(297, 'IF1801523', 7047408, 'Visi Komputer ', 'A', '-', 6, 12),
(298, 'IF1610012', 7047408, 'Bahasa Inggris', 'A', '-', 1, 11),
(300, 'IF1610032', 14016403, 'Bahasa Indonesia', 'A', '-', 1, 11),
(302, 'IF1610053', 7047408, 'Matematika Diskrit I', 'A', '-', 1, 11),
(303, 'IF1610063', 829088401, 'Algoritma & Pemrograman', 'A', '-', 1, 11),
(304, 'IF1610073', 7047408, 'Logika Informatika', 'A', '-', 1, 11),
(305, 'IF1610083', 7047408, 'Sistem Digital ', 'A', '-', 1, 11),
(306, 'IF1620012', 7047408, 'Ilmu Sosial dan Budaya Dasar  ', 'A', '-', 2, 11),
(307, 'IF1620022', 14016403, 'Pancasila ', 'A', '-', 2, 11),
(308, 'IF1620033', 6128006, 'Kalkulus II ', 'A', '-', 2, 11),
(309, 'IF1620043', 7047408, 'Statistika Dasar ', 'A', '-', 2, 11),
(310, 'IF1620053', 829088401, 'Struktur Data ', 'A', '-', 2, 11),
(311, 'IF1620063', 7047408, 'Matematika Diskrit II', 'A', '-', 2, 11),
(312, 'IF1620073', 7047408, 'Aljabar Linear Elementer ', 'A', '-', 2, 11),
(313, 'IF1620083', 7047408, 'Praktikum Sistem Digital', 'A', '-', 2, 11),
(314, 'IF1620091', 14016403, 'Praktikum Algoritma & Pemrograman', 'A', '-', 2, 11),
(315, 'IF1630013', 6128006, 'Sistem Operasi ', 'A', '-', 3, 11),
(316, 'IF1630023', 7047408, 'Basis Data ', 'A', '-', 3, 11),
(317, 'IF1630033', 829088401, 'Desain dan Analisis Algoritma ', 'A', '-', 3, 11),
(318, 'IF1630043', 7047408, 'Program Linear ', 'A', '-', 3, 11),
(319, 'IF1630053', 7047408, 'Analisis Numerik', 'A', '-', 3, 11),
(320, 'IF1630063', 7047408, 'Pengantar Kecerdasan Buatan ', 'A', '-', 3, 11),
(321, 'IF1630073', 14016403, 'Pengantar Probabilitas ', 'A', '-', 3, 11),
(322, 'IF1630081', 6128006, 'Praktikum Struktur Data ', 'A', '-', 3, 11),
(323, 'IF1640012', 7047408, 'Etika', 'A', '-', 4, 11),
(324, 'IF1640023', 829088401, 'Rekayasa Perangkat Lunak ', 'A', '-', 4, 11),
(325, 'IF1640033', 7047408, 'Pemrograman Berorientasi Obyek ', 'A', '-', 4, 11),
(326, 'IF1640043', 7047408, 'Riset Operasi ', 'A', '-', 4, 11),
(327, 'IF1640053', 7047408, 'Basis Data Lanjut ', 'A', '-', 4, 11),
(328, 'IF1640063', 14016403, 'Organisasi dan Arsitektur Komputer ', 'A', '-', 4, 11),
(329, 'IF1640073', 6128006, 'Komunikasi Data dan Jaringan Komp. ', 'A', '-', 4, 11),
(330, 'IF1640081', 7047408, 'Praktikum Sistem Operasi', 'A', '-', 4, 11),
(331, 'IF1640091', 829088401, 'Praktikum Basis Data', 'A', '-', 4, 11),
(332, 'IF1650013', 7047408, 'Teori Bahasa dan Otomata ', 'A', '-', 5, 11),
(333, 'IF1650023', 7047408, 'Analisis dan Desain Sistem ', 'A', '-', 5, 11),
(334, 'IF1650033', 7047408, 'Pemodelan dan Simulasi ', 'A', '-', 5, 11),
(335, 'IF1650043', 14016403, 'Grafika Komputer ', 'A', '-', 5, 11),
(336, 'IF1650053', 6128006, 'Pemrograman Berbasis Web ', 'A', '-', 5, 11),
(337, 'IF1650063', 7047408, 'Metode Penelitian ', 'A', '-', 5, 11),
(338, 'IF1650072', 829088401, 'Interaksi Manusia dan Komputer ', 'A', '-', 5, 11),
(339, 'IF1650081', 7047408, 'Praktikum Pemrograman Berorientasi Obyek ', 'A', '-', 5, 11),
(340, 'IF1650091', 7047408, 'Praktikum Komunikasi Data dan Jaringan Komp. ', 'A', '-', 5, 11),
(341, 'IF1660012', 7047408, 'Tata Tulis Karya Ilmiah', 'A', '-', 6, 11),
(342, 'IF1660022', 14016403, 'Kewirausahaan', 'A', '-', 6, 11),
(343, 'IF1660042', 6128006, 'Etika Profesi', 'A', '-', 6, 11),
(344, 'IF1660051', 7047408, 'Praktikum Pemrograman Berbasis Web', 'A', '-', 6, 11),
(345, 'IF1660032', 829088401, 'KKN', 'A', '-', 6, 11),
(346, 'IF1801013', 14016403, 'Penambangan Data Tekstual dan Pemrosesan Bahasan Alami', 'A', '-', 6, 11),
(347, 'IF1801023', 6128006, 'Temu Kembali Informasi Tekstual', 'A', '-', 6, 11),
(348, 'IF1801033', 7047408, 'Pembelajaran Mesin untuk Data Tekstual ', 'A', '-', 6, 11),
(349, 'IF1801043', 829088401, 'Analisis Semantik', 'A', '-', 6, 11),
(350, 'IF1801073', 7047408, 'Manajemen Pengetahuan Semantik ', 'A', '-', 6, 11),
(351, 'IF1801083', 14016403, 'Sistem Manajemen Pengetahuan ', 'A', '-', 6, 11),
(352, 'IF1801093', 6128006, 'Warisan Budaya Digital ', 'A', '-', 6, 11),
(353, 'IF1801103', 7047408, 'Intelijen Bisnis dan Analisis ', 'A', '-', 6, 11),
(354, 'IF1801133', 7047408, 'Pemrosesan Sinyal Digital', 'A', '-', 6, 11),
(355, 'IF1801143', 7047408, 'Pengenalan Pola', 'A', '-', 6, 11),
(356, 'IF1801153', 14016403, 'Sistem Temu Kembali Informasi Musik ', 'A', '-', 6, 11),
(357, 'IF1801163', 6128006, 'Sintesis Bunyi ', 'A', '-', 6, 11),
(358, 'IF1801193', 7047408, 'Pengolahan Bunyi Digital', 'A', '-', 6, 11),
(359, 'IF1801203', 7047408, 'Pengolahan Citra Digital ', 'A', '-', 6, 11),
(360, 'IF1801213', 7047408, 'Kompresi Data Multimedia ', 'A', '-', 6, 11),
(361, 'IF1801223', 14016403, 'Jaringan Multimedia ', 'A', '-', 6, 11),
(362, 'IF1801253', 829088401, 'Kriptografi', 'A', '-', 6, 11),
(363, 'IF1801263', 7047408, 'Kriptoanalisis ', 'A', '-', 6, 11),
(364, 'IF1801273', 7047408, 'Keamanan Sistem Informasi ', 'A', '-', 6, 11),
(365, 'IF1801283', 7047408, 'Forensik Digital', 'A', '-', 6, 11),
(366, 'IF1801313', 7047408, 'Teknologi Nirkabel', 'A', '-', 6, 11),
(367, 'IF1801323', 829088401, 'Jaringan Sensor Terdistribusi ', 'A', '-', 6, 11),
(368, 'IF1801333', 7047408, 'Data Integrasi dan Sensor Web ', 'A', '-', 6, 11),
(369, 'IF1801343', 7047408, 'Pemrosesan Dalam Jaringan ', 'A', '-', 6, 11),
(370, 'IF1801373', 6128006, 'Analisis dan Pengolahan Data Digital', 'A', '-', 6, 11),
(371, 'IF1801383', 7047408, 'Metode Kecerdasan Buatan Lanjut', 'A', '-', 6, 11),
(372, 'IF1801393', 829088401, 'Metode Penalaran', 'A', '-', 6, 11),
(373, 'IF1801403', 7047408, 'Sistem Pakar ', 'A', '-', 6, 11),
(374, 'IF1801433', 14016403, 'Manajemen Proyek Teknologi Informasi', 'A', '-', 6, 11),
(375, 'IF1801443', 6128006, 'Penambangan Data dan Analisis ', 'A', '-', 6, 11),
(376, 'IF1801453', 7047408, 'Pemrograman Berbasis Mobile', 'A', '-', 6, 11),
(377, 'IF1801463', 829088401, 'Gudang Data dan Basis Data Terdistribusi ', 'A', '-', 6, 11),
(378, 'IF1801493', 7047408, 'Kecerdasan Buatan Pada Pengembangan Game ', 'A', '-', 6, 11),
(379, 'IF1801503', 14016403, 'Realitas Virtual dan Tertambah', 'A', '-', 6, 11),
(380, 'IF1801513', 6128006, 'Analisis Antarmuka', 'A', '-', 6, 11),
(381, 'IF1801523', 7047408, 'Visi Komputer ', 'A', '-', 6, 11),
(382, 'IF1610012', 7047408, 'Bahasa Inggris', 'A', '-', 1, 13),
(384, 'IF1610032', 14016403, 'Bahasa Indonesia', 'A', '-', 1, 13),
(386, 'IF1610053', 7047408, 'Matematika Diskrit I', 'A', '-', 1, 13),
(387, 'IF1610063', 829088401, 'Algoritma & Pemrograman', 'A', '-', 1, 13),
(388, 'IF1610073', 7047408, 'Logika Informatika', 'A', '-', 1, 13),
(389, 'IF1610083', 7047408, 'Sistem Digital ', 'A', '-', 1, 13),
(390, 'IF1620012', 7047408, 'Ilmu Sosial dan Budaya Dasar  ', 'A', '-', 2, 13),
(391, 'IF1620022', 14016403, 'Pancasila ', 'A', '-', 2, 13),
(392, 'IF1620033', 6128006, 'Kalkulus II ', 'A', '-', 2, 13),
(393, 'IF1620043', 7047408, 'Statistika Dasar ', 'A', '-', 2, 13),
(394, 'IF1620053', 829088401, 'Struktur Data ', 'A', '-', 2, 13),
(395, 'IF1620063', 7047408, 'Matematika Diskrit II', 'A', '-', 2, 13),
(396, 'IF1620073', 7047408, 'Aljabar Linear Elementer ', 'A', '-', 2, 13),
(397, 'IF1620083', 7047408, 'Praktikum Sistem Digital', 'A', '-', 2, 13),
(398, 'IF1620091', 14016403, 'Praktikum Algoritma & Pemrograman', 'A', '-', 2, 13),
(399, 'IF1630013', 6128006, 'Sistem Operasi ', 'A', '-', 3, 13),
(400, 'IF1630023', 7047408, 'Basis Data ', 'A', '-', 3, 13),
(401, 'IF1630033', 829088401, 'Desain dan Analisis Algoritma ', 'A', '-', 3, 13),
(402, 'IF1630043', 7047408, 'Program Linear ', 'A', '-', 3, 13),
(403, 'IF1630053', 7047408, 'Analisis Numerik', 'A', '-', 3, 13),
(404, 'IF1630063', 7047408, 'Pengantar Kecerdasan Buatan ', 'A', '-', 3, 13),
(405, 'IF1630073', 14016403, 'Pengantar Probabilitas ', 'A', '-', 3, 13),
(406, 'IF1630081', 6128006, 'Praktikum Struktur Data ', 'A', '-', 3, 13),
(407, 'IF1640012', 7047408, 'Etika', 'A', '-', 4, 13),
(408, 'IF1640023', 829088401, 'Rekayasa Perangkat Lunak ', 'A', '-', 4, 13),
(409, 'IF1640033', 7047408, 'Pemrograman Berorientasi Obyek ', 'A', '-', 4, 13),
(410, 'IF1640043', 7047408, 'Riset Operasi ', 'A', '-', 4, 13),
(411, 'IF1640053', 7047408, 'Basis Data Lanjut ', 'A', '-', 4, 13),
(412, 'IF1640063', 14016403, 'Organisasi dan Arsitektur Komputer ', 'A', '-', 4, 13),
(413, 'IF1640073', 6128006, 'Komunikasi Data dan Jaringan Komp. ', 'A', '-', 4, 13),
(414, 'IF1640081', 7047408, 'Praktikum Sistem Operasi', 'A', '-', 4, 13),
(415, 'IF1640091', 829088401, 'Praktikum Basis Data', 'A', '-', 4, 13),
(416, 'IF1650013', 7047408, 'Teori Bahasa dan Otomata ', 'A', '-', 5, 13),
(417, 'IF1650023', 7047408, 'Analisis dan Desain Sistem ', 'A', '-', 5, 13),
(418, 'IF1650033', 7047408, 'Pemodelan dan Simulasi ', 'A', '-', 5, 13),
(419, 'IF1650043', 14016403, 'Grafika Komputer ', 'A', '-', 5, 13),
(420, 'IF1650053', 6128006, 'Pemrograman Berbasis Web ', 'A', '-', 5, 13),
(421, 'IF1650063', 7047408, 'Metode Penelitian ', 'A', '-', 5, 13),
(422, 'IF1650072', 829088401, 'Interaksi Manusia dan Komputer ', 'A', '-', 5, 13),
(423, 'IF1650081', 7047408, 'Praktikum Pemrograman Berorientasi Obyek ', 'A', '-', 5, 13),
(424, 'IF1650091', 7047408, 'Praktikum Komunikasi Data dan Jaringan Komp. ', 'A', '-', 5, 13),
(425, 'IF1660012', 7047408, 'Tata Tulis Karya Ilmiah', 'A', '-', 6, 13),
(426, 'IF1660022', 14016403, 'Kewirausahaan', 'A', '-', 6, 13),
(427, 'IF1660042', 6128006, 'Etika Profesi', 'A', '-', 6, 13),
(428, 'IF1660051', 7047408, 'Praktikum Pemrograman Berbasis Web', 'A', '-', 6, 13),
(429, 'IF1660032', 829088401, 'KKN', 'A', '-', 6, 13),
(430, 'IF1801013', 14016403, 'Penambangan Data Tekstual dan Pemrosesan Bahasan Alami', 'A', '-', 6, 13),
(431, 'IF1801023', 6128006, 'Temu Kembali Informasi Tekstual', 'A', '-', 6, 13),
(432, 'IF1801033', 7047408, 'Pembelajaran Mesin untuk Data Tekstual ', 'A', '-', 6, 13),
(433, 'IF1801043', 829088401, 'Analisis Semantik', 'A', '-', 6, 13),
(434, 'IF1801073', 7047408, 'Manajemen Pengetahuan Semantik ', 'A', '-', 6, 13),
(435, 'IF1801083', 14016403, 'Sistem Manajemen Pengetahuan ', 'A', '-', 6, 13),
(436, 'IF1801093', 6128006, 'Warisan Budaya Digital ', 'A', '-', 6, 13),
(437, 'IF1801103', 7047408, 'Intelijen Bisnis dan Analisis ', 'A', '-', 6, 13),
(438, 'IF1801133', 7047408, 'Pemrosesan Sinyal Digital', 'A', '-', 6, 13),
(439, 'IF1801143', 7047408, 'Pengenalan Pola', 'A', '-', 6, 13),
(440, 'IF1801153', 14016403, 'Sistem Temu Kembali Informasi Musik ', 'A', '-', 6, 13),
(441, 'IF1801163', 6128006, 'Sintesis Bunyi ', 'A', '-', 6, 13),
(442, 'IF1801193', 7047408, 'Pengolahan Bunyi Digital', 'A', '-', 6, 13),
(443, 'IF1801203', 7047408, 'Pengolahan Citra Digital ', 'A', '-', 6, 13),
(444, 'IF1801213', 7047408, 'Kompresi Data Multimedia ', 'A', '-', 6, 13),
(445, 'IF1801223', 14016403, 'Jaringan Multimedia ', 'A', '-', 6, 13),
(446, 'IF1801253', 829088401, 'Kriptografi', 'A', '-', 6, 13),
(447, 'IF1801263', 7047408, 'Kriptoanalisis ', 'A', '-', 6, 13),
(448, 'IF1801273', 7047408, 'Keamanan Sistem Informasi ', 'A', '-', 6, 13),
(449, 'IF1801283', 7047408, 'Forensik Digital', 'A', '-', 6, 13),
(450, 'IF1801313', 7047408, 'Teknologi Nirkabel', 'A', '-', 6, 13),
(451, 'IF1801323', 829088401, 'Jaringan Sensor Terdistribusi ', 'A', '-', 6, 13),
(452, 'IF1801333', 7047408, 'Data Integrasi dan Sensor Web ', 'A', '-', 6, 13),
(453, 'IF1801343', 7047408, 'Pemrosesan Dalam Jaringan ', 'A', '-', 6, 13),
(454, 'IF1801373', 6128006, 'Analisis dan Pengolahan Data Digital', 'A', '-', 6, 13),
(455, 'IF1801383', 7047408, 'Metode Kecerdasan Buatan Lanjut', 'A', '-', 6, 13),
(456, 'IF1801393', 829088401, 'Metode Penalaran', 'A', '-', 6, 13),
(457, 'IF1801403', 7047408, 'Sistem Pakar ', 'A', '-', 6, 13),
(458, 'IF1801433', 14016403, 'Manajemen Proyek Teknologi Informasi', 'A', '-', 6, 13),
(459, 'IF1801443', 6128006, 'Penambangan Data dan Analisis ', 'A', '-', 6, 13),
(460, 'IF1801453', 7047408, 'Pemrograman Berbasis Mobile', 'A', '-', 6, 13),
(461, 'IF1801463', 829088401, 'Gudang Data dan Basis Data Terdistribusi ', 'A', '-', 6, 13),
(462, 'IF1801493', 7047408, 'Kecerdasan Buatan Pada Pengembangan Game ', 'A', '-', 6, 13),
(463, 'IF1801503', 14016403, 'Realitas Virtual dan Tertambah', 'A', '-', 6, 13),
(464, 'IF1801513', 6128006, 'Analisis Antarmuka', 'A', '-', 6, 13),
(465, 'IF1801523', 7047408, 'Visi Komputer ', 'A', '-', 6, 13),
(466, 'IF1234456', 0, 'coba', 'A', '-', 1, 13),
(467, 'IK1234512', 6128006, 'Fira', 'B', '-', 2, 12),
(468, 'IF123445QWQW', 0, 'wdwd1', 'A', '-', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `kode_materi` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kode_materi`, `id_matkul`, `nama_materi`, `deskripsi`, `file`, `tanggal_post`) VALUES
(1, 382, 'aqaqaq112dDdAD', 'adadasdas2313', 'materi', '2020-01-07 04:48:00'),
(2, 382, 'ayo belajar 1', 'ayo ayo', '1578374647_Pertemuan_III.ppt', '2020-01-07 05:24:07'),
(3, 382, 'coba', '23ewfdwef2d', '1578375302_1578374647_Pertemuan_III (3).ppt', '2020-01-07 05:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_mahasiswa` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_nilai` int(100) NOT NULL,
  `nilai_mandiri` double NOT NULL,
  `nilai_kelompok` double NOT NULL,
  `nilai_keaktifan` double NOT NULL,
  `nilai_quiz` double NOT NULL,
  `nilai_uts` double NOT NULL,
  `nilai_uas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_keaktifan`
--

CREATE TABLE `nilai_keaktifan` (
  `id_mahasiswa` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_nilai` int(100) NOT NULL,
  `nilai_keaktifan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_keaktifan`
--

INSERT INTO `nilai_keaktifan` (`id_mahasiswa`, `id_matkul`, `id_nilai`, `nilai_keaktifan`) VALUES
(1, 382, 1, 12),
(1, 382, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kelompok`
--

CREATE TABLE `nilai_kelompok` (
  `id_mahasiswa` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_nilai` int(100) NOT NULL,
  `nilai_kelompok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kelompok`
--

INSERT INTO `nilai_kelompok` (`id_mahasiswa`, `id_matkul`, `id_nilai`, `nilai_kelompok`) VALUES
(1, 382, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mandiri`
--

CREATE TABLE `nilai_mandiri` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `nilai_mandiri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_mandiri`
--

INSERT INTO `nilai_mandiri` (`id_mahasiswa`, `id_matkul`, `id_nilai`, `nilai_mandiri`) VALUES
(1, 382, 2, 10),
(1, 382, 3, 80);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_quiz`
--

CREATE TABLE `nilai_quiz` (
  `id_nilai` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `nilai_quiz` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_quiz`
--

INSERT INTO `nilai_quiz` (`id_nilai`, `id_matkul`, `id_mahasiswa`, `nilai_quiz`) VALUES
(1, 382, 1, 12),
(2, 382, 1, 12),
(3, 382, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_uts_uas`
--

CREATE TABLE `nilai_uts_uas` (
  `id_nilai` int(100) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `nilai_uts` double NOT NULL,
  `nilai_uas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_uts_uas`
--

INSERT INTO `nilai_uts_uas` (`id_nilai`, `id_mahasiswa`, `id_matkul`, `nilai_uts`, `nilai_uas`) VALUES
(2, 1, 382, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id_proses` int(100) NOT NULL,
  `bobot` int(100) NOT NULL,
  `id_semester` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `nidn` int(100) NOT NULL,
  `id_angkatan` int(100) NOT NULL,
  `fileKontrakKuliah` varchar(100) NOT NULL,
  `fileRPS` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggalPost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `id_referensi` int(10) NOT NULL,
  `jenis` text NOT NULL,
  `penulis` text NOT NULL,
  `judul` text NOT NULL,
  `edisi` int(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `kota` text NOT NULL,
  `penerbit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id_referensi`, `jenis`, `penulis`, `judul`, `edisi`, `tahun`, `kota`, `penerbit`) VALUES
(1, 'qweqweqwe', 'asfasfafs', 'asfasfasf', 1, 2019, 'SDFsdf', 'sDfSDF'),
(2, 'buku', 'qweqwewqe', 'qweqwe', 2, 2010, 'qwqwqw', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_nilai`
--

CREATE TABLE `rekap_nilai` (
  `id_nilai` int(100) NOT NULL,
  `nilai_keaktifan` double NOT NULL,
  `nilai_kelompok` double NOT NULL,
  `nilai_mandiri` double NOT NULL,
  `nilai_quiz` double NOT NULL,
  `nilai_uts` double NOT NULL,
  `nilai_uas` double NOT NULL,
  `id_matkul` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap_nilai`
--

INSERT INTO `rekap_nilai` (`id_nilai`, `nilai_keaktifan`, `nilai_kelompok`, `nilai_mandiri`, `nilai_quiz`, `nilai_uts`, `nilai_uas`, `id_matkul`) VALUES
(1, 10, 10, 20, 10, 25, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pembelajaran`
--

CREATE TABLE `rencana_pembelajaran` (
  `id_rencana_pembelajaran` int(10) NOT NULL,
  `minggu_ke` int(10) NOT NULL,
  `kemampuan_akhir` longtext NOT NULL,
  `bahan_kajian` text NOT NULL,
  `metode` text NOT NULL,
  `waktu` int(100) NOT NULL,
  `pengalaman_belajar` text NOT NULL,
  `bobot_nilai` int(10) NOT NULL,
  `id_referensi` int(10) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `id_semester` int(100) NOT NULL,
  `nidn` int(100) NOT NULL,
  `id_kriteria` int(100) NOT NULL,
  `id_cp` int(100) NOT NULL,
  `id_cpl` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_pembelajaran`
--

INSERT INTO `rencana_pembelajaran` (`id_rencana_pembelajaran`, `minggu_ke`, `kemampuan_akhir`, `bahan_kajian`, `metode`, `waktu`, `pengalaman_belajar`, `bobot_nilai`, `id_referensi`, `id_matkul`, `id_semester`, `nidn`, `id_kriteria`, `id_cp`, `id_cpl`) VALUES
(0, 11, 'asd', 'asd', 'asd', 150, 'asdasdas', 4, 1, 214, 2, 7047408, 4, 4, 2),
(5, 11, 'asd', 'asd', 'asd', 150, 'asd', 4, 1, 214, 2, 7047408, 4, 4, 2),
(7, 1, 'asd', 'asd', 'asd', 150, 'asd', 5, 1, 214, 1, 0, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(100) NOT NULL,
  `tahun_ajar` varchar(200) NOT NULL,
  `semester` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `tahun_ajar`, `semester`) VALUES
(1, 'Ganjil-2016/2017', 1),
(2, 'Genap-2016/2017', 2),
(3, 'Ganjil-2017/2018', 3),
(4, 'Genap-2017/2018', 4),
(5, 'Ganjil-2018/2019', 5),
(6, 'Genap-2018/2019', 6);

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id_template` int(100) NOT NULL,
  `nama_template` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id_template`, `nama_template`, `file`, `tgl_post`) VALUES
(3, 'Pertemuan I', '1578330793_Pertemuan I.ppt', '2020-01-06 17:13:14'),
(4, 'Pertemuan II', '1578330970_Pertemuan II.ppt', '2020-01-06 17:16:10'),
(5, 'Pertemuan III', '1578330993_Pertemuan III.ppt', '2020-01-06 17:16:33'),
(6, 'Pertemuan IV', '1578331015_Pertemuan IV.ppt', '2020-01-06 17:16:56'),
(7, 'Pertemuan V', '1578331042_Pertemuan V.ppt', '2020-01-06 17:17:22'),
(8, 'Pertemuan VI', '1578331063_Pertemuan VI.ppt', '2020-01-06 17:17:43'),
(9, 'Pertemuan VII', '1578331093_Pertemuan VII.ppt', '2020-01-06 17:18:13'),
(10, 'Pertemuan VIII', '1578331120_Pertemuan VIII.ppt', '2020-01-06 17:18:40'),
(11, 'Pertemuan IX', '1578331160_Pertemuan IX.ppt', '2020-01-06 17:19:20'),
(12, 'Pertemuan X', '1578331187_Pertemuan X.ppt', '2020-01-06 17:19:47'),
(14, 'Pertemuan XI', '1578331268_Pertemuan XI.ppt', '2020-01-06 17:21:08'),
(15, 'Pertemuan XII', '1578331292_Pertemuan XII.ppt', '2020-01-06 17:21:32'),
(16, 'Pertemuan XIII', '1578331315_Pertemuan XIII.ppt', '2020-01-06 17:21:55'),
(17, 'Pertemuan XIV', '1578331361_Pertemuan XIV.ppt', '2020-01-06 17:22:41'),
(18, 'Pertemuan XV', '1578331390_Pertemuan XV.ppt', '2020-01-06 17:23:10'),
(19, 'Pertemuan XVI', '1578331435_Pertemuan XVI.ppt', '2020-01-06 17:23:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `cpl_prodi`
--
ALTER TABLE `cpl_prodi`
  ADD PRIMARY KEY (`id_cpl`);

--
-- Indexes for table `cp_mk`
--
ALTER TABLE `cp_mk`
  ADD PRIMARY KEY (`id_cp`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`,`nip`);

--
-- Indexes for table `kontrak_kuliah`
--
ALTER TABLE `kontrak_kuliah`
  ADD PRIMARY KEY (`id_kontrak_kuliah`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`,`nim`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_angkatan` (`id_angkatan`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`) USING BTREE,
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_angkatan` (`id_angkatan`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`kode_materi`) USING BTREE,
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `nilai_keaktifan`
--
ALTER TABLE `nilai_keaktifan`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `nilai_kelompok`
--
ALTER TABLE `nilai_kelompok`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_mandiri`
--
ALTER TABLE `nilai_mandiri`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `nilai_quiz`
--
ALTER TABLE `nilai_quiz`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id_proses`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `nidn` (`nidn`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id_referensi`);

--
-- Indexes for table `rekap_nilai`
--
ALTER TABLE `rekap_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD PRIMARY KEY (`id_rencana_pembelajaran`),
  ADD KEY `id_referensi` (`id_referensi`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `nidn` (`nidn`),
  ADD KEY `id_cp` (`id_cp`),
  ADD KEY `id_cpl` (`id_cpl`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_template`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cpl_prodi`
--
ALTER TABLE `cpl_prodi`
  MODIFY `id_cpl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cp_mk`
--
ALTER TABLE `cp_mk`
  MODIFY `id_cp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontrak_kuliah`
--
ALTER TABLE `kontrak_kuliah`
  MODIFY `id_kontrak_kuliah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria_penilaian`
--
ALTER TABLE `kriteria_penilaian`
  MODIFY `id_kriteria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `kode_materi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_keaktifan`
--
ALTER TABLE `nilai_keaktifan`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_kelompok`
--
ALTER TABLE `nilai_kelompok`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_mandiri`
--
ALTER TABLE `nilai_mandiri`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_quiz`
--
ALTER TABLE `nilai_quiz`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id_proses` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id_referensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekap_nilai`
--
ALTER TABLE `rekap_nilai`
  MODIFY `id_nilai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `id_rencana_pembelajaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontrak_kuliah`
--
ALTER TABLE `kontrak_kuliah`
  ADD CONSTRAINT `kontrak_kuliah_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`),
  ADD CONSTRAINT `kontrak_kuliah_ibfk_2` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`),
  ADD CONSTRAINT `kontrak_kuliah_ibfk_3` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`),
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_2` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`),
  ADD CONSTRAINT `matakuliah_ibfk_3` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`),
  ADD CONSTRAINT `matakuliah_ibfk_4` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`);

--
-- Constraints for table `nilai_keaktifan`
--
ALTER TABLE `nilai_keaktifan`
  ADD CONSTRAINT `nilai_keaktifan_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `nilai_keaktifan_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`);

--
-- Constraints for table `nilai_mandiri`
--
ALTER TABLE `nilai_mandiri`
  ADD CONSTRAINT `nilai_mandiri_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `nilai_mandiri_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`);

--
-- Constraints for table `nilai_quiz`
--
ALTER TABLE `nilai_quiz`
  ADD CONSTRAINT `nilai_quiz_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`),
  ADD CONSTRAINT `nilai_quiz_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  ADD CONSTRAINT `nilai_uts_uas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `nilai_uts_uas_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`);

--
-- Constraints for table `proses`
--
ALTER TABLE `proses`
  ADD CONSTRAINT `proses_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`),
  ADD CONSTRAINT `proses_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`),
  ADD CONSTRAINT `proses_ibfk_3` FOREIGN KEY (`nidn`) REFERENCES `matakuliah` (`nidn`),
  ADD CONSTRAINT `proses_ibfk_4` FOREIGN KEY (`id_angkatan`) REFERENCES `matakuliah` (`id_angkatan`);

--
-- Constraints for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_1` FOREIGN KEY (`id_referensi`) REFERENCES `referensi` (`id_referensi`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_4` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_5` FOREIGN KEY (`id_cp`) REFERENCES `cp_mk` (`id_cp`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_6` FOREIGN KEY (`id_cpl`) REFERENCES `cpl_prodi` (`id_cpl`),
  ADD CONSTRAINT `rencana_pembelajaran_ibfk_7` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria_penilaian` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
