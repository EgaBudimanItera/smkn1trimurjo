-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 02:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_raport`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai`
-- (See below for the actual view)
--
CREATE TABLE `nilai` (
`id_ajaran` varchar(11)
,`semester` char(1)
,`id_detail_mapel` int(11)
,`id_siswa` int(11)
,`npengetahuan_predikat` char(1)
,`npengetahuan_deskripsi` varchar(255)
,`nketerampilan_predikat` char(1)
,`nketerampilan_deskripsi` varchar(255)
,`npengetahuan_akhir` varchar(10)
,`nketerampilan_akhir` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai1`
-- (See below for the actual view)
--
CREATE TABLE `nilai1` (
`id_nilai` char(5)
,`id_ajaran` varchar(11)
,`semester` char(1)
,`id_metode` int(11)
,`id_detail_mapel` int(11)
,`id_siswa` int(11)
,`kode_uh` char(5)
,`harian` float
,`proyek` float
,`portofolio` float
,`uts` varchar(10)
,`uas` varchar(10)
,`akhir` varchar(10)
,`predikat` char(1)
,`deskripsi` varchar(255)
,`npengetahuan_akhir` varchar(10)
,`npengetahuan_predikat` varchar(1)
,`npengetahuan_deskripsi` varchar(255)
,`nketerampilan_akhir` varchar(10)
,`nketerampilan_predikat` varchar(1)
,`nketerampilan_deskripsi` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai2`
-- (See below for the actual view)
--
CREATE TABLE `nilai2` (
`id_ajaran` varchar(11)
,`semester` char(1)
,`id_detail_mapel` int(11)
,`id_siswa` int(11)
,`npengetahuan_predikat` char(1)
,`npengetahuan_deskripsi` varchar(255)
,`nketerampilan_predikat` char(1)
,`nketerampilan_deskripsi` varchar(255)
,`npengetahuan_akhir` varchar(10)
,`nketerampilan_akhir` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai22`
-- (See below for the actual view)
--
CREATE TABLE `nilai22` (
`id_ajaran` varchar(11)
,`semester` char(1)
,`id_detail_mapel` int(11)
,`id_siswa` int(11)
,`npengetahuan_predikat` varchar(1)
,`npengetahuan_deskripsi` varchar(255)
,`nketerampilan_predikat` varchar(1)
,`nketerampilan_deskripsi` varchar(255)
,`npengetahuan_akhir` double
,`nketerampilan_akhir` double
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ajaran`
--

CREATE TABLE `tbl_ajaran` (
  `id_ajaran` int(11) NOT NULL,
  `periode_aktif` varchar(25) DEFAULT NULL,
  `smt` int(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_ajaran`
--

INSERT INTO `tbl_ajaran` (`id_ajaran`, `periode_aktif`, `smt`, `status`) VALUES
(1, '2017/2018', 1, 'A'),
(2, '2017/2018', 2, 'N'),
(3, '2019/2020', 1, 'N'),
(4, '2019/2020', 2, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` char(5) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `aktif` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_mapel`
--

CREATE TABLE `tbl_detail_mapel` (
  `id_detail_mapel` int(11) NOT NULL,
  `id_mapel_keahlian` int(11) DEFAULT NULL,
  `semester` enum('1','2') DEFAULT NULL,
  `kelas_x` int(11) DEFAULT NULL,
  `kelas_xi` int(11) DEFAULT NULL,
  `kelas_xii` int(11) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_detail_mapel`
--

INSERT INTO `tbl_detail_mapel` (`id_detail_mapel`, `id_mapel_keahlian`, `semester`, `kelas_x`, `kelas_xi`, `kelas_xii`, `sks`) VALUES
(1, 59, '1', 1, NULL, NULL, 3),
(2, 58, '1', 1, NULL, NULL, 3),
(3, 57, '1', 1, NULL, NULL, 3),
(4, 56, '1', 1, NULL, NULL, 3),
(5, 55, '1', 1, NULL, NULL, 3),
(6, 54, '1', 1, NULL, NULL, 3),
(7, 53, '1', 1, NULL, NULL, 3),
(9, 35, '1', 1, NULL, NULL, 3),
(10, 30, '1', 1, NULL, NULL, 3),
(11, 50, '1', 1, NULL, NULL, 3),
(12, 60, '1', 1, NULL, NULL, 3),
(13, 52, '1', 1, NULL, NULL, 3),
(14, 46, '1', 1, NULL, NULL, 3),
(16, 47, '1', 1, NULL, NULL, 3),
(17, 48, '1', 1, NULL, NULL, 3),
(18, 49, '1', 1, NULL, NULL, 3),
(19, 33, '1', 1, NULL, NULL, 3),
(20, 28, '1', 1, NULL, NULL, 3),
(21, 41, '1', 1, NULL, NULL, 3),
(22, 34, '1', 1, NULL, NULL, 3),
(23, 36, '1', 1, NULL, NULL, 3),
(24, 31, '1', 1, NULL, NULL, 3),
(25, 26, '1', 1, NULL, NULL, 3),
(26, 21, '1', 1, NULL, NULL, 3),
(27, 16, '1', 1, NULL, NULL, 3),
(28, 11, '1', 1, NULL, NULL, 3),
(29, 6, '1', 1, NULL, NULL, 3),
(30, 1, '1', 1, NULL, NULL, 3),
(31, 44, '1', NULL, 1, NULL, 3),
(32, 39, '1', NULL, 1, NULL, 3),
(33, 19, '1', NULL, 1, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_nilai`
--

CREATE TABLE `tbl_detail_nilai` (
  `id_detail_nilai` int(11) NOT NULL,
  `id_nilai` char(5) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `akhir` int(11) DEFAULT NULL,
  `predikat` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_nilai`
--

INSERT INTO `tbl_detail_nilai` (`id_detail_nilai`, `id_nilai`, `id_metode`, `akhir`, `predikat`) VALUES
(1, 'N0001', 1, 88, 'A'),
(2, 'N0003', 1, 82, 'A'),
(3, 'N0004', 1, 80, 'B'),
(4, 'N0005', 1, 64, 'C'),
(5, 'N0009', 1, 122, 'A'),
(6, 'N0010', 1, 86, 'A'),
(7, 'N0011', 1, 84, 'A'),
(8, 'N0012', 1, 86, 'A'),
(9, 'N0015', 1, 73, 'B'),
(10, 'N0016', 1, 74, 'B'),
(11, 'N0017', 1, 86, 'A'),
(12, 'N0022', 1, 78, 'B'),
(13, 'N0025', 1, 74, 'B'),
(14, 'N0027', 1, 80, 'B'),
(15, 'N0029', 1, 80, 'B'),
(16, 'N0030', 1, 84, 'A'),
(17, 'N0031', 1, 83, 'A'),
(18, 'N0032', 1, 80, 'B'),
(19, 'N0033', 1, 80, 'B'),
(20, 'N0037', 1, 73, 'B'),
(21, 'N0038', 1, 98, 'A'),
(22, 'N0039', 1, 88, 'A'),
(23, 'N0040', 1, 85, 'A'),
(24, 'N0041', 1, 80, 'B'),
(25, 'N0042', 1, 86, 'A'),
(26, 'N0043', 1, 78, 'B'),
(27, 'N0044', 1, 85, 'A'),
(28, 'N0046', 1, 84, 'A'),
(29, 'N0047', 1, 80, 'A'),
(30, 'N0048', 1, 71, 'B'),
(31, 'N0049', 1, 86, 'A'),
(32, 'N0053', 1, 86, 'A'),
(33, 'N0054', 1, 80, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` char(20) NOT NULL,
  `nama_guru` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama_guru`, `alamat`, `tgl`, `tlp`, `jk`) VALUES
('19721001', 'Gunawan ,S,Ag', 'Trimurjo', '2018-05-09', '085669463455', 'Laki-Laki'),
('19721002', 'Ratna Sari H,S,IP', 'Trimurjo', '2018-02-07', '085669463465', 'Perempuan'),
('19721003', 'Werti Zelda, S,Ag', 'Trimurjo', '2018-05-10', '085669463453', 'Perempuan'),
('19721004', 'Fajar Dwi P, S,Pd', 'Trimurjo', '2018-01-17', '085669463465', 'Laki-Laki'),
('19721005', 'Dhian Nopitasari, S,Pd', 'Trimurjo', '2018-02-28', '085669463454', 'Perempuan'),
('19721006', 'Gatot Santoaso, S,Kom', 'Trimurjo', '2018-04-21', '085669463465', 'Laki-Laki'),
('19721007', 'Sunarti, A,Md', 'Trimurjo', '2018-08-16', '085669463454', 'Perempuan'),
('19721008', 'Denti Afrina, S,Pd', 'Trimurjo', '2018-04-04', '085669463454', 'Perempuan'),
('19721009', 'Fitria Hertati, SE', 'Trimurjo', '2017-09-28', '085669463465', 'Perempuan'),
('19721010', 'Tri Yunita, S.Ag,MPd,i', 'Trimurjo', '2018-10-02', '085669463453', 'Perempuan'),
('19721011', 'Fitri Minarti, S,Pd', 'Metro', '2018-01-04', '085669463453', 'Perempuan'),
('19721012', 'Abdul Goni, S,Pd.I', 'Metro', '2017-06-02', '085669463465', 'Laki-Laki'),
('19721013', 'Malhen Hadi, S,Pd', 'Metro', '2018-05-03', '085669463455', 'Laki-Laki'),
('19721014', 'Yulida Sari, S,Pd', 'Metro', '2018-07-04', '085669463455', 'Perempuan'),
('19721015', 'Nurmalina,S,Pd', 'Metro', '2018-01-01', '085669463453', 'Perempuan'),
('19721016', 'Seperiadi, S,Amd', 'Metro', '2018-01-16', '085669463455', 'Perempuan'),
('19721017', 'Elya Kontesa, SE', 'Trimurjo', '2017-01-31', '085669463454', 'Perempuan'),
('19721018', 'Sri Handayani', 'Metro', '2018-01-19', '085669463455', 'Perempuan'),
('19721019', 'Jarimi, S,Pd', 'Metro', '2013-10-23', '085669463455', 'Laki-Laki'),
('19721020', 'Meri Herninda,S,Pd.,Ing', 'Trimurjo', '2018-08-06', '085669463454', 'Perempuan'),
('19721021', 'Edi Setiawan, S,Kom', 'Metro', '2018-10-02', '085669463453', 'Laki-Laki'),
('19721022', 'Yopi Sugara, S.Pd', 'Metro', '2015-06-10', '085669463454', 'Laki-Laki'),
('19721023', 'Latif Ihpa, S,Kom', 'Trimurjo', '2018-07-30', '085669463455', 'Laki-Laki'),
('19721024', 'Nazrim, S,Pd', 'Metro', '2018-07-11', '085669463453', 'Laki-Laki'),
('19721025', 'Nuhayani, S,Pd', 'Metro', '2018-01-02', '085669463454', 'Perempuan'),
('19721026', 'Eka Rahmawati, SE', 'Trimurjo', '2018-06-11', '085669463453', 'Perempuan'),
('19721027', 'Yeti Sisca, S,Pd', 'Metro', '2018-01-04', '085669463454', 'Perempuan'),
('19721028', 'Muhammad Yusuf Muis, S.Pd', 'Metro', '2018-08-27', '085669463455', 'Laki-Laki'),
('19721029', 'Didik Kurniawan, S.Kom', 'Metro', '2018-08-27', '085669463455', 'Laki-Laki'),
('19721030', 'Aan Suherman, ST.', 'Trimurjo', '2018-08-09', '085669463453', 'Laki-Laki'),
('19721031', 'Janna Rita Dewi, S.E.', 'Trimurjo', '2018-08-16', '085669463454', 'Perempuan'),
('19721032', 'Rabin Ranat, A.md', 'Trimurjo', '2018-10-23', '085669463465', 'Laki-Laki'),
('19721033', 'Yanti Amalia,S.Pd', 'Metro', '2005-12-16', '085669463453', 'Perempuan'),
('19721034', 'Sunarti', 'Trimurjo', '2018-08-27', '085669463455', 'Laki-Laki'),
('19721035', 'Fredo Ramiro', 'Metro', '2018-08-27', '085669463453', 'Laki-Laki'),
('19721036', 'Nurhasanah, S.Pd', 'Trimurjo', '0087-09-03', '085669463455', 'Perempuan'),
('19721037', 'Nurul Samsah, SS', 'Metro', '1978-10-01', '085669463453', 'Perempuan'),
('19721038', 'Sulastri, S.Pd', 'Metro', '1988-01-09', '085669463155', 'Perempuan'),
('19721039', 'Heni Puspita Sari, S.Pd', 'metro', '1982-01-03', '085669463453', 'Perempuan'),
('19721040', 'Septina, SE', 'Trimurjo', '2018-08-01', '085669463454', 'Perempuan'),
('19721041', 'Eli Susanti, SE', 'Trimurjo', '2018-08-27', '085669463454', 'Perempuan'),
('19721042', 'Suryanti, SE', 'Metro', '2018-02-07', '085669463453', 'Laki-Laki'),
('19721043', 'Lefyan,S.Pd', 'Trimurjo', '2018-07-02', '085669463465', 'Laki-Laki'),
('19721044', 'Mirna Indra Rini, B,S,Pd', 'Trimurjo', '2018-06-06', '085669463454', 'Laki-Laki'),
('19721045', 'Niliana,S.Pd', 'Trimurjo', '2006-05-31', '085669463453', 'Perempuan'),
('19721046', 'Mulyani, S,Ag', 'Metro', '2018-06-14', '085669463465', 'Perempuan'),
('19721047', 'Kasiyatun, S,Pd', 'Trimurjo', '2018-05-28', '085669463453', 'Perempuan'),
('19721048', 'Dwi Ramadaleni, S,Pd', 'Trimurjo', '2018-07-31', '085669463453', 'Perempuan'),
('19721049', 'Feriyana, S,Kom', 'Trimurjo', '2017-06-08', '085669463455', 'Perempuan'),
('19721050', 'Agustiawan, S,Pd', 'Trimurjo', '2018-06-14', '085669463454', 'Perempuan'),
('19721051', 'Ferlin Ardiansyah, S,Pd', 'Metro', '2017-10-07', '085669463465', 'Laki-Laki'),
('19721052', 'Devi Kartika Sari, SS', 'Metro', '2018-06-06', '085669463465', 'Perempuan'),
('19721053', 'Ridya Asfra, S,Kom', 'Metro', '2018-04-03', '085669463453', 'Perempuan'),
('19721054', 'Evi Susanti, S,Pd', 'Metro', '2018-03-28', '085669463454', 'Perempuan'),
('19721055', 'Epi Apriani, S,Pd', 'Metro', '2018-04-14', '085669463454', 'Perempuan'),
('19721056', 'Diah Wulandari, S,Pd.,SI', 'Trimurjo', '2018-05-01', '085669463454', 'Perempuan'),
('19721057', 'A Yosef Pramana, S,Pd', 'Metro', '2018-05-29', '085669463465', 'Perempuan'),
('19721058', 'Satriadi, S,Kom', 'Metro', '2018-04-04', '085669463453', 'Laki-Laki'),
('19721059', 'Rika Wati, S,Pd', 'Metro', '2018-04-12', '085669463155', 'Perempuan'),
('19721060', 'Tuti Yarina, S,Pd', 'Trimurjo', '2018-02-08', '085669463454', 'Perempuan'),
('19721061', 'Tias Ambarsari, S.Pd', 'Trimurjo', '2018-04-03', '085669463454', 'Perempuan'),
('19721062', 'Mizan KH, S.Pd', 'Trimurjo', '2018-03-06', '085669463155', 'Laki-Laki'),
('19721063', 'Agrian Pancisa, A.Amd', 'Trimurjo', '2018-04-04', '085669463155', 'Perempuan'),
('19721064', 'Yusep Suadi, S.Pd', 'Trimurjo', '2017-12-05', '085669463454', 'Laki-Laki'),
('19721065', 'Weni Oktadiana, S.Kom', 'Trimurjo', '2018-02-27', '085669463455', 'Perempuan'),
('19721066', 'Jopi Haspika, S.Pd', 'Trimurjo', '2018-05-28', '085669463155', 'Laki-Laki'),
('19721067', 'Evi Lindawati, S.Pd', 'Trimurjo', '2018-03-26', '085669463465', 'Perempuan'),
('19721068', 'Yuni Amrina, S.Pd', 'Trimurjo', '2018-06-04', '085668463455', 'Perempuan'),
('19721069', 'Fredo Ramiro, S.Kom', 'Trimurjo', '2018-04-03', '085669463465', 'Laki-Laki'),
('19721070', 'Ana Safitri', 'Trimurjo', '2018-05-08', '085783515282', 'Perempuan'),
('19721071', 'Agus Supriada, S.Pd', 'Trimurjo', '2018-03-29', '085669463455', 'Laki-Laki'),
('19721072', 'Darson Hidayat, S.Pd', 'Trimurjo', '2018-05-01', '085669463453', 'Laki-Laki'),
('19721073', 'Yeni Yuliana, S.Pd', 'Trimurjo', '2018-01-31', '085669463155', 'Perempuan'),
('19721074', 'Rahma Mutia A, S.Pd', 'Trimurjo', '2018-04-02', '085669463465', 'Perempuan'),
('19721075', 'Nurhoiriyah, S.Pd', 'Trimurjo', '2018-05-07', '085669463155', 'Perempuan'),
('19721076', 'Ahyari, S.Pd', 'Trimurjo', '2018-05-02', '085669463455', 'Laki-Laki'),
('19721077', 'M.Nur, S.Pd', 'Metro', '2018-04-02', '085669463453', 'Perempuan'),
('19721078', 'Sumiarti, S.Pd', 'Trimurjo', '2018-06-05', '085669463454', 'Perempuan'),
('19721079', 'Fathudin, S.Pd', 'Trimurjo', '2018-04-12', '085669463455', 'Laki-Laki'),
('19721080', 'Reda Aswita, S.Kom', 'Trimurjo', '2018-03-27', '085669463453', 'Perempuan'),
('19721081', 'Nuyarhadi, S.Kom', 'Bandar Jaya', '2018-01-12', '085669463454', 'Laki-Laki'),
('19721082', 'Maslikah, S.Pd', 'Trimurjo', '2018-02-07', '085669463454', 'Perempuan'),
('19721083', 'Amani, S.Ag', 'Trimurjo', '2018-03-26', '085669463454', 'Perempuan'),
('19721084', 'Marzuki, S.Pd', 'Trimurjo', '2018-02-05', '085669463454', 'Laki-Laki'),
('19721085', 'Lina Herlina, S.Pd', 'Trimurjo', '2018-03-27', '085669463155', 'Perempuan'),
('19721086', 'Elita, S.Pd.I', 'Trimurjo', '2018-04-18', '085669463155', 'Perempuan'),
('19721087', 'Siti Sofiah, S.Ag', 'Trimurjo', '2018-03-01', '085669463155', 'Perempuan'),
('19721088', 'Efrin Syah Putra, S.Pd', 'Metro', '2017-03-01', '085669463465', 'Laki-Laki'),
('19721089', 'Peramaisuri, S.Ag', 'Trimurjo', '2017-10-02', '085668463455', 'Perempuan'),
('19721090', 'Liani, S.Ag', 'Metro', '2017-11-29', '085669463454', 'Perempuan'),
('19721091', 'Arif Mahya, S.Pd', 'Trimurjo', '2018-02-27', '085668463455', 'Laki-Laki'),
('19721092', 'Eka Nirawan, S.Pd', 'Trimurjo', '2018-01-02', '085669463465', 'Laki-Laki'),
('19721093', 'Darmawan, S.Pd', 'Bandar Jaya', '2018-02-26', '085669463465', 'Laki-Laki'),
('19721094', 'Bakri, S.Ag', 'Trimurjo', '2018-02-05', '085669463465', 'Laki-Laki'),
('19721095', 'Siti Habibah, S.Pd', 'Metro', '2018-01-02', '085669463465', 'Perempuan'),
('19721096', 'Eri Mulyati, S.Pd', 'Metro', '2018-02-28', '085669463155', 'Perempuan'),
('19721097', 'Gustia Putri, S,Kom', 'Trimurjo', '2018-03-26', '085669463155', 'Perempuan'),
('19721098', 'Siti Nurharu, S.Pd', 'Trimurjo', '2018-05-09', '085669463155', 'Perempuan'),
('19721099', 'Lekat Suwanda, S.Ag', 'Trimurjo', '2018-03-27', '085669463454', 'Laki-Laki'),
('19721100', 'Amrullah, S.Kom., M.Kom', 'Trimurjo', '2018-04-03', '085669463454', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_nilai`
--

CREATE TABLE `tbl_kategori_nilai` (
  `id_kategori_nilai` int(11) NOT NULL,
  `kategori_nilai` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kategori_nilai`
--

INSERT INTO `tbl_kategori_nilai` (`id_kategori_nilai`, `kategori_nilai`) VALUES
(1, 'Pengetahuan'),
(2, 'Keterampilan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keahlian`
--

CREATE TABLE `tbl_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `nama_keahlian` varchar(30) DEFAULT NULL,
  `guru_kompetensi` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_keahlian`
--

INSERT INTO `tbl_keahlian` (`id_keahlian`, `nama_keahlian`, `guru_kompetensi`) VALUES
(14, 'Teknik Komputer Jaringan', '19721029'),
(15, 'Rekayasa Perangkat Lunak', '19721030'),
(16, 'Teknik Kendaraan Ringan', '19721033'),
(18, 'Desain Pemodelan', '19721031');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keahlian_siswa`
--

CREATE TABLE `tbl_keahlian_siswa` (
  `id_keahlian_siswa` int(11) NOT NULL,
  `id_keahlian` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keahlian_siswa`
--

INSERT INTO `tbl_keahlian_siswa` (`id_keahlian_siswa`, `id_keahlian`, `id_siswa`) VALUES
(1, 14, 5),
(2, 16, 6),
(3, 14, 7),
(4, 16, 8),
(5, 18, 9),
(6, 18, 10),
(8, 15, 12),
(9, 15, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(10) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL,
  `wali_kelas` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_kelas`, `tingkat`, `id_keahlian`, `wali_kelas`) VALUES
(7, 'X DP I', 10, 18, '19721060'),
(8, 'XI DP I', 11, 18, '19721060'),
(9, 'XII DP I', 12, 18, '19721060'),
(13, 'X TKR I', 10, 16, '19721058'),
(14, 'XI TKR I', 11, 16, '19721058'),
(15, 'XII TKR I', 12, 16, '19721058'),
(16, 'X RPL I', 10, 15, '19721057'),
(17, 'XI RPL I', 11, 15, '19721059'),
(18, 'XII RPL I', 12, 15, '19721057'),
(19, 'X TKJ I', 10, 14, '19721056'),
(20, 'XI TKJ I', 11, 14, '19721056'),
(21, 'XII TKJ I', 12, 14, '19721056');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok`
--

CREATE TABLE `tbl_kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `kelompok` varchar(5) DEFAULT NULL,
  `ket_kelompok` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kelompok`
--

INSERT INTO `tbl_kelompok` (`id_kelompok`, `kelompok`, `ket_kelompok`) VALUES
(1, 'A', 'Muatan Nasional'),
(2, 'B', 'Muatan Kewilayahan'),
(3, 'C1', 'Dasar Bidang Keahlian'),
(4, 'C2', 'Dasar Program Keahlian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan`
--

CREATE TABLE `tbl_keterangan` (
  `dkurang` varchar(90) NOT NULL,
  `ccukup` varchar(90) NOT NULL,
  `bbaik` varchar(90) NOT NULL,
  `asangatbaik` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keterangan`
--

INSERT INTO `tbl_keterangan` (`dkurang`, `ccukup`, `bbaik`, `asangatbaik`) VALUES
('D', 'C', 'B', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `avatar` char(1) DEFAULT NULL,
  `hak_akses` enum('Admin','Guru','Siswa') DEFAULT NULL,
  `aktif` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `nama`, `username`, `password`, `avatar`, `hak_akses`, `aktif`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'L', 'Admin', 'Y'),
(86, 'Didik Kurniawan, S.Kom', '19721029', '0d4ba67e0e28f52a060b95e6525da245', 'L', 'Guru', 'Y'),
(88, 'Muhammad Yusuf Muis, S.Pd', '19721028', '92ede68864397a56dee415f178eab2ca', 'L', 'Guru', 'Y'),
(89, 'Aan Suherman, ST.', '19721030', '8051bb4103926979b5ab86290386260a', 'L', 'Guru', 'Y'),
(90, 'Janna Rita Dewi, S.E.', '19721031', '63e2ba1a84b70b220f1200c024b17eae', 'P', 'Guru', 'Y'),
(91, 'Rabin Ranat, A.md', '19721032', '30c3e976d407f506310d7c2e40541fd3', 'L', 'Guru', 'Y'),
(92, 'Yanti Amalia,S.Pd', '19721033', 'e875db9486d10122301f290e3c556059', 'P', 'Guru', 'Y'),
(94, 'Sunarti', '19721034', '1be793ee9d20b1b3b19de2e3efa1413e', 'L', 'Guru', 'Y'),
(98, 'Fredo Ramiro', '19721035', '7804fabb58afe609b1834e7a4d1fefc7', 'L', 'Guru', 'Y'),
(109, 'Nurhasanah, S.Pd', '19721036', '548b8af165f59bfe81bc9f9b12aa433e', 'P', 'Guru', 'Y'),
(110, 'Nurul Samsah, SS', '19721037', '19a636c713ec9a372d4dd021f21e7ec7', 'P', 'Guru', 'Y'),
(111, 'Sulastri, S.Pd', '19721038', '29a677516b9ad335d6c492179453be1a', 'P', 'Guru', 'Y'),
(112, 'Heni Puspita Sari,', '1972109', '7875f7e1a6fe086bf61df1109ea49770', 'P', 'Guru', 'Y'),
(113, 'Septina, SE', '19721040', '2c844b4c80e6697a5a09a39b1d73a0cd', 'P', 'Guru', 'Y'),
(114, 'Heni Puspita Sari, S.Pd', '19721039', 'f645e75d2ad714a67bf193e55daab898', 'P', 'Guru', 'Y'),
(115, 'Eli Susanti, SE', '19721041', '28d6305a289b929913b43307848fdca2', 'P', 'Guru', 'Y'),
(116, 'Suryanti, SE', '19721042', '92d586961f82e9dafe491e2c056a6c1f', 'L', 'Guru', 'Y'),
(117, 'Lefyan,S.Pd', '19721043', '7c46105cd1a3299d3af8b299a11b2b09', 'L', 'Guru', 'Y'),
(118, 'Mirna Indra Rini, B,S,Pd', '19721044', '5a6ff776d7027cfa7caee50dc9c591a9', 'L', 'Guru', 'Y'),
(119, 'Niliana,S.Pd', '19721045', '28b9305c4ad57e57720881decd8ac2f3', 'P', 'Guru', 'Y'),
(120, 'Mulyani, S,Ag', '19721046', '3432c8b8b183e71bce6f63bfbf4671d3', 'P', 'Guru', 'Y'),
(121, 'Kasiyatun, S,Pd', '19721047', '9d20e4183830cb93d6c826ccfb76a53f', 'P', 'Guru', 'Y'),
(122, 'Dwi Ramadaleni, S,Pd', '19721048', 'a97a1d86153935fffc48b863b828e916', 'P', 'Guru', 'Y'),
(123, 'Feriyana, S,Kom', '19721049', 'ce8e99bda394e4e10655275dfebd780a', 'P', 'Guru', 'Y'),
(124, 'Yeti Sisca, S,Pd', '19721027', '239c4a6988a8b070c559658c6098c323', 'P', 'Guru', 'Y'),
(125, 'Eka Rahmawati, SE', '19721026', 'cc89b4044855ed2eb74a70ec8e735dde', 'P', 'Guru', 'Y'),
(126, 'Nuhayani, S,Pd', '19721025', 'dc057c19a129fdf85b7cd6e7d41c4c91', 'P', 'Guru', 'Y'),
(127, 'Nazrim, S,Pd', '19721024', '53e5c44cc96ab0818d9505a82de381ff', 'L', 'Guru', 'Y'),
(128, 'Latif Ihpa, S,Kom', '19721023', '40f8e4d77fbda1fcf842a479693f617b', 'L', 'Guru', 'Y'),
(129, 'Yopi Sugara, S.Pd', '19721022', '6b69e8e2441b660a7c068011bb887c88', 'L', 'Guru', 'Y'),
(130, 'Edi Setiawan, S,Kom', '19721021', 'f729abd96422c0974ba1a573603425b4', 'L', 'Guru', 'Y'),
(131, 'Meri Herninda,S,Pd.,Ing', '19721020', '979f82d5fed51ff5b24bdc94537f1fc4', 'P', 'Guru', 'Y'),
(132, 'Tri Yunita, S.Ag,MPd,i', '19721010', 'b1c0bb9c7359ec1da990156088018ac7', 'P', 'Guru', 'Y'),
(133, 'Fitri Minarti, S,Pd', '19721011', 'e1f8e1bb4203fa2af5c56f9672c89f38', 'P', 'Guru', 'Y'),
(134, 'Abdul Goni, S,Pd.I', '19721012', '5a61d9c600aba14c0cba511675ca2015', 'L', 'Guru', 'Y'),
(135, 'Malhen Hadi, S,Pd', '19721013', '59066316d6e86c0d0f1cc947fabcf8a7', 'L', 'Guru', 'Y'),
(136, 'Yulida Sari, S,Pd', '19721014', 'b291f071771f77a65f2599eedacad87c', 'P', 'Guru', 'Y'),
(137, 'Nurmalina,S,Pd', '19721015', 'd40629dbdf89a470cb7112d042ed7375', 'P', 'Guru', 'Y'),
(138, 'Seperiadi, S,Amd', '19721016', 'b263cfa8d577be09c69f9285ad666bd7', 'P', 'Guru', 'Y'),
(139, 'Elya Kontesa, SE', '19721017', '8371fe865ef373414b180e2f11c3b20b', 'P', 'Guru', 'Y'),
(141, 'Sri Handayani', '19721018', 'f626997fb20a4557465be01a8c1aff5c', 'P', 'Guru', 'Y'),
(142, 'Jarimi, S,Pd', '19721019', '04fc3c7c18be83e4faeb1bbfee6ccf67', 'L', 'Guru', 'Y'),
(143, 'Gunawan ,S,Ag', '19721001', 'edc6e8be1039b8fec5d98dab61c93a13', 'L', 'Guru', 'Y'),
(144, 'Ratna Sari H,S,IP', '19721002', '0e63e69d396830e1c5f50167129f0fde', 'P', 'Guru', 'Y'),
(145, 'Werti Zelda, S,Ag', '19721003', '5a406855c4f4bca6fab89ea1800b664e', 'P', 'Guru', 'Y'),
(146, 'Fajar Dwi P, S,Pd', '19721004', '8aea9c2348b872a2fbd0eed188b8c7f1', 'L', 'Guru', 'Y'),
(147, 'Dhian Nopitasari, S,Pd', '19721005', 'ff7f588c5c4db388825b945cf1031388', 'P', 'Guru', 'Y'),
(148, 'Gatot Santoaso, S,Kom', '19721006', 'a65019abd0b736b1777724899d140a98', 'L', 'Guru', 'Y'),
(149, 'Sunarti, A,Md', '19721007', '055aeb59f36985ddb4d3894f86b31509', 'P', 'Guru', 'Y'),
(150, 'Fitria Hertati, SE', '19721009', 'e9447a26b5178f52aa5cb12c543efbde', 'P', 'Guru', 'Y'),
(151, 'Denti Afrina, S,Pd', '19721008', '8f21c09399dc8eff58758982f11a5ad4', 'P', 'Guru', 'Y'),
(152, 'Agustiawan, S,Pd', '19721050', '48ce0d4fec1740588078a400b1f72329', 'P', 'Guru', 'Y'),
(153, 'Ferlin Ardiansyah, S,Pd', '19721051', '99d7fc3db0c2ba92179ec9c584f48a24', 'L', 'Guru', 'Y'),
(154, 'Devi Kartika Sari, SS', '19721052', '0ab420ca745011b93767961e92848578', 'P', 'Guru', 'Y'),
(155, 'Ridya Asfra, S,Kom', '19721053', 'e979f8608634b408c576f41f1746e58d', 'P', 'Guru', 'Y'),
(156, 'Evi Susanti, S,Pd', '19721054', 'c06825b51331ce22419f6d9642808fb8', 'P', 'Guru', 'Y'),
(157, 'Diah Wulandari, S,Pd.,SI', '19721056', '752f4180052cb5be8dfd38c6fded36ec', 'P', 'Guru', 'Y'),
(158, 'Epi Apriani, S,Pd', '19721055', '20aef6d28e1469d3003f3c64099c71e9', 'P', 'Guru', 'Y'),
(159, 'A Yosef Pramana, S,Pd', '19721057', '27bdaa390e9c365669ef2372da7244cc', 'P', 'Guru', 'Y'),
(160, 'Satriadi, S,Kom', '19721058', '68566471b73f09d7e074c3e4acbad6c4', 'L', 'Guru', 'Y'),
(161, 'Rika Wati, S,Pd', '19721059', '915c32e97bd31bd8e1bf9d73454fe342', 'P', 'Guru', 'Y'),
(162, 'Tuti Yarina, S,Pd', '19721060', '197023741be1e6ca8d53f88c172c9725', 'P', 'Guru', 'Y'),
(164, 'Agung Hidayat', '3667', 'f095cedd23b99f1696fc8caecbcf257e', 'L', 'Siswa', 'Y'),
(165, 'Ali Majid Hakim', '36677', 'e153591bcb17c13db5131683be6a6b45', 'L', 'Siswa', 'Y'),
(167, 'Adel Rahmat Iham', '4109', '6f67057b6a3671fe882f6d4f27d547be', 'L', 'Siswa', 'Y'),
(168, 'Agung Pratama', '4110', 'c42f891cebbc81aa59f8f183243ac2b9', 'L', 'Siswa', 'Y'),
(169, 'Ahmad Gupron', '4111', '64f07f012a35c83d7c556ba0b69ef64e', 'L', 'Siswa', 'Y'),
(170, 'Alfin Rahmada', '4112', 'fdeea652a89ec3e970d22a86698ac8c4', 'L', 'Siswa', 'Y'),
(171, 'Anfa Azkia M', '4113', '4ee78d4122ef8503fe01cdad3e9ea4ee', 'P', 'Siswa', 'Y'),
(172, 'Ariyanto', '4114', 'ab24cd2b811ee48a416fc7a833d736a9', 'L', 'Siswa', 'Y'),
(173, 'Bayu Setiawan Anggara Putra', '4115', 'a5ff5d4b0a0d7b3e4d64147037d8c344', 'L', 'Siswa', 'Y'),
(174, 'Budi Setiawan', '4116', '1e8ca836c962598551882e689265c1c5', 'L', 'Siswa', 'Y'),
(175, 'Diah Puspita Sari', '4117', 'c1aeb6517a1c7f33514f7ff69047e74e', 'P', 'Siswa', 'Y'),
(176, 'Edwar Somad', '4118', 'de3c1a733c9c51de130bc7ae775fd930', 'L', 'Siswa', 'Y'),
(177, 'Elvira Sari', '4119', '1b69ebedb522700034547abc5652ffac', 'P', 'Siswa', 'Y'),
(178, 'Faisal RIzal', '4120', 'b986700c627db479a4d9460b75de7222', 'L', 'Siswa', 'Y'),
(179, 'Fabila Andria', '4121', 'c79ec57a8e72a87d8a69d2c6b8a2a8d4', 'P', 'Siswa', 'Y'),
(180, 'Febri Yansah', '4122', '6098ed616e715171f0dabad60a8e5197', 'L', 'Siswa', 'Y'),
(181, 'Hefi Febriza Eka WS', '4123', '92fde850d824c2ba9b563cb6fa4078c3', 'P', 'Siswa', 'Y'),
(182, 'Iluh Riska Setiani', '4124', '7dc3338d429a3114842ca29dbbfccfef', 'P', 'Siswa', 'Y'),
(183, 'Indah Nabela', '4125', '5bf8aaef51c6e0d363cbe554acaf3f20', 'P', 'Siswa', 'Y'),
(184, 'Joni Anggara', '4126', '84f74ce4511e0c9531af1182fb636f0f', 'L', 'Siswa', 'Y'),
(185, 'Laili FItri', '4127', 'ca8a2d76a5bcc212226417361a5f0740', 'P', 'Siswa', 'Y'),
(186, 'Muzal Saputra', '4128', '770c0e7e2af0db73409aa2431aa8f33e', 'L', 'Siswa', 'Y'),
(187, 'Nita Sari', '4129', '7a6a6127ff85640ec69691fb0f7cb1a2', 'P', 'Siswa', 'Y'),
(188, 'Nula Gustamara', '4130', 'c929f2210333206f417e3862f431776d', 'P', 'Siswa', 'Y'),
(189, 'Okta Noviani', '4131', '0314c9b108b8c39f1cf878ed93fdd5ae', 'P', 'Siswa', 'Y'),
(190, 'Pedro Alansah', '4132', 'a4d8e2a7e0d0c102339f97716d2fdfb6', 'L', 'Siswa', 'Y'),
(191, 'Rian Alfin', '4133', 'b2330fc4531de135266de49078c270dd', 'L', 'Siswa', 'Y'),
(192, 'Rika Yulianti', '4134', 'a6a767bbb2e3513233f942e0ff24272c', 'P', 'Siswa', 'Y'),
(193, 'Rizky Pramodya P', '4135', '46fc943ecd56441056a560ba37d0b9e8', 'L', 'Siswa', 'Y'),
(194, 'Roy uhaimin Azis', '4136', '93da579a65ce84cd1d4c85c2cbb84fc5', 'L', 'Siswa', 'Y'),
(195, 'Septa Asti Lestari', '4137', '6734fa703f6633ab896eecbdfad8953a', 'P', 'Siswa', 'Y'),
(196, 'Trio Wibowo', '4139', '440924c5948e05070663f88e69e8242b', 'L', 'Siswa', 'Y'),
(197, 'Widia Sari', '4140', '4f05d4821fe9967817dea5a20c4e7b35', 'P', 'Siswa', 'Y'),
(198, 'Septiana', '4138', '88479e328a8633f54e9c667651832fbc', 'P', 'Siswa', 'Y'),
(199, 'Ade Anjani', '4141', '5eb13cb69b6e20dd7a42030f5936a9dc', 'P', 'Siswa', 'Y'),
(200, 'Agung Hidayat', '4142', '0777acff7c9ab34562699e4e1d05affb', 'L', 'Siswa', 'Y'),
(201, 'Ali Majid Hakim', '4143', '6195f47dcff14b8f242aa333cdb2703e', 'L', 'Siswa', 'Y'),
(202, 'Desi Wulandari', '4144', '605ac7e4c16b8a013b4779b81f883e66', 'P', 'Siswa', 'Y'),
(203, 'Desi Ratnasari', '4145', 'a655fbe4b8d7439994aa37ddad80de56', 'P', 'Siswa', 'Y'),
(204, 'Desti Wulandari', '4146', '109f91266ef89cc3690079b28abfe9a3', 'P', 'Siswa', 'Y'),
(205, 'Ekwin Azadi', '4147', 'd714d2c5a796d5814c565d78dd16188d', 'L', 'Siswa', 'Y'),
(206, 'Fajar Ilham', '4148', '810dfbbebb17302018ae903e9cb7a483', 'L', 'Siswa', 'Y'),
(207, 'Fitria Handayani', '4149', '2d199f9abd28ea425d262558bde5cf22', 'P', 'Siswa', 'Y'),
(208, 'Fitri Andayani', '4150', '8b5c8441a8ff8e151b191c53c1842a38', 'P', 'Siswa', 'Y'),
(209, 'Fransiska Ugiana', '4151', '9f60ab2b55468f104055b16df8f69e81', 'P', 'Siswa', 'Y'),
(210, 'Lisa Fitriani', '4152', '26ff6f4ca1cfca4861eb91876f706746', 'P', 'Siswa', 'Y'),
(211, 'Liya Hertati', '4153', '37588c655ca22f7ca1664a2b211188ff', 'P', 'Siswa', 'Y'),
(212, 'Mirdarita', '4154', 'bd22c2ef9e6f0fa97825c6be879f8fa4', 'P', 'Siswa', 'Y'),
(213, 'Nia Anggi Rahmadani', '4155', '18a9042b3fc5b02fe3d57fea87d6992f', 'P', 'Siswa', 'Y'),
(214, 'Nur Rike Syafitri', '4156', 'bba6bca05fecde04c682328e44b974b7', 'P', 'Siswa', 'Y'),
(215, 'Oktavia Wulandari', '4157', 'b837305e43f7e535a1506fc263eee3ed', 'P', 'Siswa', 'Y'),
(216, 'Fika Rosianti', '4158', '3e3aa687770f55c704ca997c3be81634', 'P', 'Siswa', 'Y'),
(217, 'Dwi Sugiarto', '4159', 'ecf5631507a8aedcae34cef231aa7348', 'L', 'Siswa', 'Y'),
(218, 'Enda Julisa', '4160', 'f816dc0acface7498e10496222e9db10', 'P', 'Siswa', 'Y'),
(219, 'Hartati', '4161', '174f8f613332b27e9e8a5138adb7e920', 'P', 'Siswa', 'Y'),
(220, 'Melyani', '4162', '56c51a39a7c77d8084838cc920585bd0', 'P', 'Siswa', 'Y'),
(221, 'Novita Rika', '4163', '60495b4e033e9f60b32a6607b587aadd', 'P', 'Siswa', 'Y'),
(222, 'Sapnah', '4164', '861578d797aeb0634f77aff3f488cca2', 'P', 'Siswa', 'Y'),
(223, 'Sumarni', '4165', 'a7f0d2b95c60161b3f3c82f764b1d1c9', 'P', 'Siswa', 'Y'),
(224, 'Yuyun Mike L', '4166', '65ae450c5536606c266f49f1c08321f2', 'P', 'Siswa', 'Y'),
(225, 'Rika Yuliana', '4167', 'e038453073d221a4f32d0bab94ca7cee', 'P', 'Siswa', 'Y'),
(226, 'Yetri Septina', '4168', 'e46bc064f8e92ac2c404b9871b2a4ef2', 'P', 'Siswa', 'Y'),
(227, 'Pebri Aprianto', '4169', '2192890582189ff58ddbb2b79900f246', 'L', 'Siswa', 'Y'),
(228, 'Samuel Fernando', '4170', 'adc8ca1b15e20915c3ea6008fc2f52ed', 'L', 'Siswa', 'Y'),
(231, 'Rama Sapta Satria', '4171', '1bd36c9ae813f304363ae6ac7f48068e', 'L', 'Siswa', 'Y'),
(232, 'Fendra Fernando', '4172', '8ce1a43fb75e779c6b794ba4d255cf6d', 'L', 'Siswa', 'Y'),
(233, 'Andian', '4173', '2130eb640e0a272898a51da41363542d', 'L', 'Siswa', 'Y'),
(234, 'Maulana', '4174', 'f69041d874533096748e2d77480c1fea', 'L', 'Siswa', 'Y'),
(235, 'Rohmana Hasan', '4175', '97008ea27052082be055447be9e85612', 'L', 'Siswa', 'Y'),
(236, 'Deki Yantori', '4176', '16d11e9595188dbad0418a85f0351aba', 'L', 'Siswa', 'Y'),
(237, 'Gustiya', '4177', '13b919438259814cd5be8cb45877d577', 'L', 'Siswa', 'Y'),
(238, 'Beni Mahendra', '4178', '1558417b096b5d8e7cbe0183ea9cbf26', 'L', 'Siswa', 'Y'),
(239, 'Ari Wibowo', '4179', '91f5738a827405b0f0bd80af1b7e386c', 'L', 'Siswa', 'Y'),
(240, 'Edi Pramudya', '4180', '96b250a90d3cf0868c83f8c965142d2a', 'L', 'Siswa', 'Y'),
(241, 'Eriyansyah', '4181', 'e254457f7497c00fbb0d2bb4ac36487b', 'L', 'Siswa', 'Y'),
(242, 'Hasanen', '4182', '13e5ebb0fa112fe1b31a1067962d74a7', 'L', 'Siswa', 'Y'),
(243, 'Hendri Yunata', '4183', '217f5e7754c92d28fc6835d42f43548d', 'L', 'Siswa', 'Y'),
(244, 'Joni Reka Jaya', '4184', 'de043a5e421240eb846da8effe472ff1', 'L', 'Siswa', 'Y'),
(245, 'Khoirul Aminin', '4185', 'b207f5c56605a9d1a22e1e134fe95ba9', 'L', 'Siswa', 'Y'),
(246, 'Meta Sari', '4186', '0ab922ba3e948387b4b2a85fcb83d194', 'P', 'Siswa', 'Y'),
(247, 'Neni Efriyanti', '4187', '22cf8d98dca2b9de5052ae9253bddef3', 'P', 'Siswa', 'Y'),
(248, 'Nining Kurniasih', '4188', 'c76db12c821b79a91d361a4c705ce6b4', 'P', 'Siswa', 'Y'),
(249, 'Puri Setia N', '4189', '09e7655fc1dc8fa7c9d6c4478313d5e6', 'P', 'Siswa', 'Y'),
(250, 'Rosa Palentin', '4190', '77cdfc1e11e36a23bb030892ee00b8cf', 'P', 'Siswa', 'Y'),
(251, 'Siti Robiah', '4191', '331cc28f8747a032890d0429b5a5f0e5', 'P', 'Siswa', 'Y'),
(252, 'Yusmida Rina', '4192', 'cd474f6341aeffd65f93084d0dae3453', 'P', 'Siswa', 'Y'),
(253, 'Ayu RIsa Lidarti', '4193', '3770282ae7c0e576d1017a97a9260a3f', 'P', 'Siswa', 'Y'),
(254, 'Nurlia', '4194', '99296ad1eb8cd89661d163ddea3f16f1', 'P', 'Siswa', 'Y'),
(255, 'Adhiyat Patoni', '4195', 'a5e308070bd6dd3cc56283f2313522de', 'L', 'Siswa', 'Y'),
(256, 'Ahmad Syaibudin', '4196', '0fd4b8a8354a77a3fa75e3d97e7a34e6', 'L', 'Siswa', 'Y'),
(257, 'Fendi Saputra', '4197', '2bce32ed409f5ebcee2a7b417ad9beed', 'L', 'Siswa', 'Y'),
(258, 'Novandi Saputra', '4198', '0b0b0994d12ad343511adfbfc364256e', 'L', 'Siswa', 'Y'),
(259, 'Dadan Mudrika', '4199', 'e0c7ccc47b2613c82d1073a4214deecc', 'L', 'Siswa', 'Y'),
(260, 'Eko Gunawan', '4201', '0530e22dea41e24a039563139cdc215e', 'L', 'Siswa', 'Y'),
(261, 'Fajar Satria', '4202', '7d265aa7147bd3913fb84c7963a209d1', 'L', 'Siswa', 'Y'),
(262, 'Agus wahyudi', '4203', '7e05295a468401ec66e8c337855022ed', 'L', 'Siswa', 'Y'),
(263, 'Andriadi', '4204', '3335881e06d4d23091389226225e17c7', 'L', 'Siswa', 'Y'),
(264, 'Dewi Pebrianti', '4205', '22785dd2577be2ce28ef79febe80db10', 'P', 'Siswa', 'Y'),
(265, 'Ike Purwasih', '4206', '769ac34a4012ab69c069de0bab7d9e81', 'P', 'Siswa', 'Y'),
(266, 'Nina Herlina', '4207', 'd7b76edf790923bf7177f7ebba5978df', 'P', 'Siswa', 'Y'),
(267, 'Sindi Wilya A', '4208', '4a71e49f6bda0c9b7642f39f1aa1f567', 'P', 'Siswa', 'Y'),
(278, 'Eka Diana', '19610624', '6f304cbcce5591caa18d4a7541a31fdd', 'P', 'Admin', 'Y'),
(281, 'Maryanto', '19610627', '3b3821a6a528071b68cdff005a6f4958', 'L', 'Admin', 'Y'),
(282, 'Ridwan Pinanjar', '19610628', '59749dbe7a37e68850b7625d344630c7', 'L', 'Admin', 'Y'),
(283, 'Tias Ambarsari, S.Pd', '19721061', 'b40ea56e4da1832056523cdfa5564891', 'P', 'Guru', 'Y'),
(284, 'Mizan KH, S.Pd', '19721062', 'b826e5a4ceabcbfc09a64ca721d8bdf3', 'L', 'Guru', 'Y'),
(285, 'Agrian Pancisa, A.Amd', '19721063', '1a737375f67c6894e79b2395a6343510', 'P', 'Guru', 'Y'),
(286, 'Yusep Suadi, S.Pd', '19721064', '8895bcfae02d9059d90a0d6b4d4c8aaa', 'L', 'Guru', 'Y'),
(287, 'Weni Oktadiana, S.Kom', '19721065', '561511b40edb8b3b75bfd6145da2d64c', 'P', 'Guru', 'Y'),
(288, 'Jopi Haspika, S.Pd', '19721066', 'b06f7a7c4ec111eb8a2a97bf618d49c6', 'L', 'Guru', 'Y'),
(289, 'Evi Lindawati, S.Pd', '19721067', 'afd88fb340a2c4c8b9659058b42e404b', 'P', 'Guru', 'Y'),
(290, 'Yuni Amrina, S.Pd', '19721068', 'b08280f727b0655ad757eafd0d17ab0c', 'P', 'Guru', 'Y'),
(291, 'Fredo Ramiro, S.Kom', '19721069', '7df9fe547cf7ecb6e2938cf6fcd61b35', 'L', 'Guru', 'Y'),
(292, 'Ana Safitri', '19721070', '7e845b415cb6182aa1a1b6ce2b75de4c', 'P', 'Guru', 'Y'),
(293, 'Agus Supriada, S.Pd', '19721071', '0c526eb67ec901158956cc628222c22d', 'L', 'Guru', 'Y'),
(294, 'Darson Hidayat, S.Pd', '19721072', 'ec73dece1b9e0ac32a1d852d460a1e19', 'L', 'Guru', 'Y'),
(295, 'Yeni Yuliana, S.Pd', '19721073', 'ffb05645000347d6cc6c57b602d20607', 'P', 'Guru', 'Y'),
(296, 'Rahma Mutia A, S.Pd', '19721074', 'c7035ba1d6b6075d1f99aca2a16bbdbf', 'P', 'Guru', 'Y'),
(297, 'Nurhoiriyah, S.Pd', '19721075', 'edd3078c945fc09277096224e45c0427', 'P', 'Guru', 'Y'),
(298, 'Ahyari, S.Pd', '19721076', '4d1555f35c7adf7b00e6600d5922ddb9', 'L', 'Guru', 'Y'),
(299, 'M.Nur, S.Pd', '19721077', 'ff07f8d97308d829b2a0e12532ea32c5', 'P', 'Guru', 'Y'),
(300, 'Sumiarti, S.Pd', '19721078', '93e390df62066d65b7346f3283c859be', 'P', 'Guru', 'Y'),
(301, 'Fathudin, S.Pd', '19721079', '38ea29cd25830ea794caa8edbff6deaf', 'L', 'Guru', 'Y'),
(302, 'Reda Aswita, S.Kom', '19721080', 'e790139bcc9c585729d1afc244a211c1', 'P', 'Guru', 'Y'),
(303, 'Nuyarhadi, S.Kom', '19721081', 'c17c851694ae5ce877fac831c4a32580', 'L', 'Guru', 'Y'),
(304, 'Maslikah, S.Pd', '19721082', '3285d54c8dd15c29efe01ee4bbbd0fc9', 'P', 'Guru', 'Y'),
(305, 'Amani, S.Ag', '19721083', '7cbb9bc0bdc1d4b739af70b230643c4e', 'P', 'Guru', 'Y'),
(306, 'Marzuki, S.Pd', '19721084', 'f78c3f74dbaedf5f0af17f2ee7e9ccb2', 'L', 'Guru', 'Y'),
(307, 'Lina Herlina, S.Pd', '19721085', '711ba24dde84c30c40908ee9643dea38', 'P', 'Guru', 'Y'),
(308, 'Elita, S.Pd.I', '19721086', '8429c9f43fb015f8276dc15e03731016', 'P', 'Guru', 'Y'),
(309, 'Siti Sofiah, S.Ag', '19721087', '0dfd04797cd257fffc5c1b5e056abcbc', 'P', 'Guru', 'Y'),
(310, 'Efrin Syah Putra, S.Pd', '19721088', 'ace4d4fc6d759a88ec58fd532a9dddfb', 'L', 'Guru', 'Y'),
(311, 'Peramaisuri, S.Ag', '19721089', '4097939f97a678a66398c42e3a144866', 'P', 'Guru', 'Y'),
(312, 'Liani, S.Ag', '19721090', 'b6b2b5e7da93638c3ea78c8918e266d9', 'P', 'Guru', 'Y'),
(313, 'Arif Mahya, S.Pd', '19721091', '5e61a8d6dd424fa487d611b86dea2624', 'L', 'Guru', 'Y'),
(314, 'Eka Nirawan, S.Pd', '19721092', '65be5e3ad2c06a0069d635ceb76e7766', 'L', 'Guru', 'Y'),
(315, 'Darmawan, S.Pd', '19721093', '63e13ad0aa4f2e6a48c75f59508d17fb', 'L', 'Guru', 'Y'),
(316, 'Bakri, S.Ag', '19721094', 'c68c0542e314be381527d83b22cd5a26', 'L', 'Guru', 'Y'),
(317, 'Siti Habibah, S.Pd', '19721095', '381e00603e269f4e9476a53cf0878500', 'P', 'Guru', 'Y'),
(318, 'Eri Mulyati, S.Pd', '19721096', '645aa8ff469ecb558241ac3abaaf591e', 'P', 'Guru', 'Y'),
(319, 'Gustia Putri, S,Kom', '19721097', '7b3891ad7f2a8421fc1467f04c987cc7', 'P', 'Guru', 'Y'),
(320, 'Siti Nurharu, S.Pd', '19721098', '6e42ccf2f90f6429a82c9a906024fd9b', 'P', 'Guru', 'Y'),
(321, 'Lekat Suwanda, S.Ag', '19721099', '6bd743fe00345496eb338e5c0e85f549', 'L', 'Guru', 'Y'),
(322, 'Amrullah, S.Kom., M.Kom', '19721100', '96c3d9f16862445953bd791bb0e6026c', 'L', 'Guru', 'Y'),
(324, 'Bima Sakti', '0014914630', '62cd511bf974d0db48eb047fd8e6f445', 'L', 'Siswa', 'Y'),
(325, 'Alfin Sepriadi', '0026113641', '1baad23bd6d63f7667a442dd4c755137', 'L', 'Siswa', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` char(15) DEFAULT NULL,
  `nama_mapel` text,
  `kb` int(11) DEFAULT NULL,
  `id_kelompok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`, `kb`, `id_kelompok`) VALUES
(1, 'P-PABD', 'Pendidikan Agama dan Budi Pekerti', 75, 1),
(2, 'P-PKN', 'Pendidikan Pancasila dan Kewarganegaraan', 70, 1),
(3, 'P-BI', 'Bahasa Indonesia', 70, 1),
(4, 'P-MTK', 'Matematika', 65, 1),
(5, 'P-SJI', 'Sejarah Indonesia', 75, 1),
(6, 'P-BING', 'Bahasa Inggris', 75, 1),
(7, 'P-SNB', 'Seni Budaya', 73, 2),
(8, 'P-PENJAS', 'Pendidikan Jasmani Olahraga Dan Kesehatan', 75, 2),
(9, 'P-IPA', 'Ilmu Pengethuan Alam', 68, 2),
(10, 'P-SKD', 'Simulasi dan Komunikasi Digital', 75, 3),
(17, 'P-FIS', 'Fisika', 64, 3),
(18, 'P-KIM', 'Kimia', 68, 3),
(19, 'P-SIK', 'Sistem Komputer', 75, 4),
(20, 'P-PBD', 'Pemrograman Dasar', 75, 3),
(21, 'P-KJK', 'Komputer Dan Jaringan Dasar', 75, 4),
(22, 'P-DDG', 'Dasar Desain Grafis', 75, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel_keahlian`
--

CREATE TABLE `tbl_mapel_keahlian` (
  `id_mapel_keahlian` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_mapel_keahlian`
--

INSERT INTO `tbl_mapel_keahlian` (`id_mapel_keahlian`, `id_mapel`, `id_keahlian`) VALUES
(1, 1, 18),
(2, 1, 17),
(3, 1, 16),
(4, 1, 15),
(5, 1, 14),
(6, 2, 18),
(7, 2, 17),
(8, 2, 16),
(9, 2, 15),
(10, 2, 14),
(11, 3, 18),
(12, 3, 17),
(13, 3, 16),
(14, 3, 15),
(15, 3, 14),
(16, 4, 18),
(17, 4, 17),
(18, 4, 16),
(19, 4, 15),
(20, 4, 14),
(21, 5, 18),
(22, 5, 17),
(23, 5, 16),
(24, 5, 15),
(25, 5, 14),
(26, 6, 18),
(27, 6, 17),
(28, 6, 16),
(29, 6, 15),
(30, 6, 14),
(31, 7, 18),
(32, 7, 17),
(33, 7, 16),
(34, 7, 15),
(35, 7, 14),
(36, 8, 18),
(37, 8, 17),
(38, 8, 16),
(39, 8, 15),
(40, 8, 14),
(41, 9, 18),
(42, 9, 17),
(43, 9, 16),
(44, 9, 15),
(45, 9, 14),
(46, 10, 16),
(47, 11, 16),
(48, 12, 16),
(49, 13, 16),
(50, 14, 16),
(51, 1, 16),
(52, 16, 16),
(53, 17, 14),
(54, 18, 14),
(55, 19, 14),
(56, 20, 14),
(57, 21, 14),
(58, 22, 14),
(60, 15, 16),
(61, 7, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metode`
--

CREATE TABLE `tbl_metode` (
  `id_metode` int(11) NOT NULL,
  `kompetensi_penilaian` varchar(20) DEFAULT NULL,
  `nama_metode_penilaian` varchar(20) DEFAULT NULL,
  `id_ajaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_metode`
--

INSERT INTO `tbl_metode` (`id_metode`, `kompetensi_penilaian`, `nama_metode_penilaian`, `id_ajaran`) VALUES
(1, 'Pengetahuan', 'Pengetahuan', 1),
(2, 'Keterampilan', 'Keterampilan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` char(5) NOT NULL,
  `id_ajaran` varchar(11) DEFAULT NULL,
  `semester` char(1) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_detail_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `kode_uh` char(5) DEFAULT NULL,
  `harian` float DEFAULT NULL,
  `proyek` float DEFAULT NULL,
  `portofolio` float DEFAULT NULL,
  `uts` varchar(10) DEFAULT NULL,
  `uas` varchar(10) DEFAULT NULL,
  `akhir` varchar(10) DEFAULT NULL,
  `predikat` char(1) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_ajaran`, `semester`, `id_metode`, `id_detail_mapel`, `id_siswa`, `kode_uh`, `harian`, `proyek`, `portofolio`, `uts`, `uas`, `akhir`, `predikat`, `deskripsi`) VALUES
('N0001', '1', '1', 1, 11, 6, 'UH001', 80, 90, 90, '90', '90', '88', 'A', 'Di tinggatkan'),
('N0002', '1', '1', 2, 11, 6, 'UH002', 90, 80, 80, '80', '80', '82', 'A', 'Tingkatkan'),
('N0003', '1', '1', 1, 18, 6, 'UH003', 90, 80, 80, '80', '80', '82', 'A', 'Tingkatkan'),
('N0004', '1', '1', 1, 19, 6, 'UH004', 80, 80, 80, '80', '80', '80', 'B', 'Tingkatkan'),
('N0005', '1', '1', 1, 20, 6, 'UH005', 80, 80, 80, '80', '80', '64', 'C', 'Tingkatkan'),
('N0006', '1', '1', 2, 18, 6, 'UH006', 73.8, 90, 90, '90', '90', '86.6', 'A', 'Tingkatkan Lagi'),
('N0007', '1', '1', 2, 19, 6, 'UH007', 84.8, 87, 78, '88', '70', '81.4', 'A', 'Tingkatkan'),
('N0008', '1', '1', 2, 20, 6, 'UH008', 84.6, 87, 88, '86', '90', '87', 'A', 'Tingkatkan'),
('N0009', '1', '1', 1, 2, 5, 'UH009', 252, 90, 90, '90', '90', '122.4', 'A', 'L'),
('N0010', '1', '1', 1, 3, 5, 'UH010', 72, 90, 90, '90', '90', '86.4', 'A', 'L'),
('N0011', '1', '1', 1, 4, 5, 'UH011', 90, 85, 80, '81', '82', '83.6', 'A', 'L'),
('N0012', '1', '1', 1, 5, 5, 'UH012', 72, 90, 90, '90', '90', '86.4', 'A', 'L'),
('N0013', '1', '1', 2, 2, 5, 'UH013', 48, 80, 80, '80', '80', '73.6', 'B', 'L'),
('N0014', '1', '1', 2, 3, 5, 'UH014', 80, 80, 80, '80', '80', '80', 'B', 'L'),
('N0015', '1', '1', 1, 6, 5, 'UH015', 45.2, 80, 80, '80', '80', '73', 'B', 'L'),
('N0016', '1', '1', 1, 9, 5, 'UH016', 58, 85, 75, '70', '80', '73.6', 'B', 'L'),
('N0017', '1', '1', 1, 10, 5, 'UH017', 72, 90, 90, '90', '90', '86.4', 'A', 'L'),
('N0018', '1', '1', 2, 4, 5, 'UH018', 61, 90, 90, '85', '75', '80.2', 'A', 'L'),
('N0019', '1', '1', 2, 5, 5, 'UH019', 60, 90, 80, '80', '80', '78', 'B', 'L'),
('N0020', '1', '1', 2, 6, 5, 'UH020', 42, 80, 70, '80', '85', '71.4', 'B', 'L'),
('N0021', '1', '1', 2, 7, 5, 'UH021', 60, 80, 75, '78', '80', '74.6', 'B', 'L'),
('N0022', '1', '1', 1, 7, 5, 'UH022', 72, 80, 80, '80', '80', '78.4', 'B', 'L'),
('N0023', '1', '1', 2, 9, 5, 'UH023', 64, 90, 80, '80', '90', '80.8', 'A', 'L'),
('N0024', '1', '1', 2, 10, 5, 'UH024', 80, 90, 80, '80', '80', '82', 'A', 'L'),
('N0025', '1', '1', 1, 22, 12, 'UH025', 48, 80, 80, '80', '80', '73.6', 'B', 'Di Tingkatkan'),
('N0026', '1', '1', 2, 22, 12, 'UH026', 63, 85, 85, '85', '85', '80.6', 'A', 'Lulus'),
('N0027', '1', '1', 1, 13, 8, 'UH027', 81.4, 70, 80, '80', '89', '80', 'B', 'Lulus'),
('N0028', '1', '1', 2, 14, 8, 'UH028', 75.8, 100, 100, '80', '70', '85', 'A', 'Lulus'),
('N0029', '1', '1', 1, 2, 7, 'UH029', 81, 70, 80, '80', '89', '80', 'B', 'Lulus'),
('N0030', '1', '1', 1, 21, 10, 'UH030', 81, 100, 80, '80', '80', '84.2', 'A', 'Lulus'),
('N0031', '1', '1', 1, 3, 7, 'UH031', 86, 80, 89, '79', '80', '82.8', 'A', 'Lulus'),
('N0032', '1', '1', 1, 4, 7, 'UH032', 81, 70, 80, '80', '89', '80', 'B', 'Lulus'),
('N0033', '1', '1', 1, 5, 7, 'UH033', 78.8, 70, 80, '80', '90', '79.6', 'B', 'Lulus'),
('N0034', '1', '1', 2, 6, 7, 'UH034', 81, 70, 80, '80', '89', '80', 'B', 'Lulus'),
('N0035', '1', '1', 2, 9, 7, 'UH035', 87.6, 67, 79, '80', '90', '80.6', 'A', 'Lulus'),
('N0036', '1', '1', 2, 7, 7, 'UH036', 75.8, 80, 80, '90', '80', '81', 'A', 'Lulus'),
('N0037', '1', '1', 1, 10, 7, 'UH037', 71.6, 75, 50, '79', '90', '73', 'B', 'Tingkatkan Lagi'),
('N0038', '1', '1', 1, 6, 7, 'UH038', 90, 100, 100, '100', '100', '98', 'A', 'Lulus'),
('N0039', '1', '1', 1, 7, 7, 'UH039', 81.4, 89, 97, '86', '85', '87.6', 'A', ''),
('N0040', '1', '1', 1, 9, 7, 'UH040', 75.2, 100, 78, '70', '100', '84.6', 'A', 'Lulus'),
('N0041', '1', '1', 1, 14, 8, 'UH041', 81.4, 70, 80, '80', '89', '80', 'B', 'Tingkatkan Lagi'),
('N0042', '1', '1', 1, 24, 10, 'UH042', 81, 100, 80, '80', '89', '86', 'A', 'Lulus Dengan Baik'),
('N0043', '1', '1', 1, 25, 10, 'UH043', 79.6, 70, 80, '79', '80', '77.6', 'B', 'Tingkatkan Lagi'),
('N0044', '1', '1', 1, 26, 10, 'UH044', 78.6, 100, 79, '80', '89', '85.2', 'A', 'Lulus '),
('N0046', '1', '1', 1, 30, 10, 'UH046', 77.2, 75, 97, '80', '89', '83.6', 'A', 'Lulus'),
('N0047', '1', '1', 1, 29, 10, 'UH047', 72.6, 70, 80, '90', '89', '80.2', 'A', 'Lulus'),
('N0048', '1', '1', 1, 27, 10, 'UH048', 72.6, 75, 50, '80', '80', '71.4', 'B', 'Tingkatkan Lagi'),
('N0049', '1', '1', 1, 28, 10, 'UH049', 81.2, 100, 89, '70', '89', '85.8', 'A', 'Lulus'),
('N0050', '1', '1', 2, 25, 10, 'UH050', 79.2, 70, 80, '80', '89', '79.6', 'B', 'Tingkatkan Lagi'),
('N0051', '1', '1', 2, 23, 10, 'UH051', 79, 70, 80, '80', '80', '77.8', 'B', 'Tingkatkan Lagi'),
('N0052', '1', '1', 2, 25, 9, 'UH052', 79.2, 100, 80, '80', '80', '83.8', 'A', 'Lulus'),
('N0053', '1', '1', 1, 24, 9, 'UH053', 81, 100, 80, '79', '89', '85.8', 'A', 'Lulus'),
('N0054', '1', '1', 1, 31, 14, 'UH054', 79, 75, 79, '80', '89', '80.4', 'A', 'Lulus'),
('N0055', '1', '1', 2, 32, 14, 'UH055', 77.2, 70, 79, '100', '80', '81.2', 'A', 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_olah`
--

CREATE TABLE `tbl_olah` (
  `id_olah` int(11) NOT NULL,
  `nip` char(20) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(5) NOT NULL,
  `nik` int(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `tlp` char(15) DEFAULT NULL,
  `alamat` varchar(75) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nik`, `nama_lengkap`, `tlp`, `alamat`, `jk`) VALUES
(19, 19610624, 'Eka Diana', '085669463455', 'Metro', 'Perempuan'),
(22, 19610627, 'Maryanto', '085669463155', 'Metro', 'Laki-Laki'),
(23, 19610628, 'Ridwan Pinanjar', '085664902126', 'Trimurjo', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil_sekolah`
--

CREATE TABLE `tbl_profil_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `npsn` varchar(30) DEFAULT NULL,
  `alamat` text,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kabupaten` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `fax` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `kepsek` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profil_sekolah`
--

INSERT INTO `tbl_profil_sekolah` (`id`, `nama_sekolah`, `npsn`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `no_telp`, `fax`, `email`, `website`, `kepsek`) VALUES
(1, 'SMKN 1 Trimurjo', '', 'Jl.Bakti Abri Liman Benawi, Trimurjo, Lampung Tengah', 'Liman Benawi', 'Trimurjo', 'Lampung Tengah', 'Lampung', 34172, '(0728)5240278', '', 'smkn1trimurjo@yahoo.co.id', 'http://smkn1trimurjo.sch.id/', '19721028');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_romkel`
--

CREATE TABLE `tbl_romkel` (
  `id_romkel` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_romkel`
--

INSERT INTO `tbl_romkel` (`id_romkel`, `id_kelas`, `id_siswa`) VALUES
(1, 19, 5),
(2, 13, 6),
(3, 7, 9),
(4, 13, 8),
(5, 19, 7),
(6, 16, 12),
(7, 7, 10),
(8, 17, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  `kompetensi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tgl_lahir`, `jk`, `tahun_ajaran`, `kompetensi`) VALUES
(5, '0026113641', 'Alfin Sepriadi', '2002-09-29', 'Laki-Laki', '2017/2018', NULL),
(7, '0016415061', 'Anggi Pradana', '2001-08-17', 'Laki-Laki', '2017/2018', NULL),
(8, '0021471522', 'Hanif Ega Prayuda', '2002-06-13', 'Laki-Laki', '2017/2018', NULL),
(9, '001641513', 'Henrik Gunawan', '2001-08-10', 'Laki-Laki', '2017/2018', NULL),
(10, '0015372587', 'Billy Aditya Brahmasta', '2001-05-07', 'Laki-Laki', '2017/2018', NULL),
(11, '4115', 'Bayu Setiawan Anggara Putra', '2018-05-01', 'Laki-Laki', '2017/2018', NULL),
(12, '0014914630', 'Bima Sakti', '2001-09-17', 'Laki-Laki', '2017/2018', NULL),
(13, '4117', 'Diah Puspita Sari', '2018-06-27', 'Perempuan', '2017/2018', NULL),
(14, '4118', 'Edwar Somad', '2018-05-01', 'Laki-Laki', '2017/2018', NULL),
(15, '4119', 'Elvira Sari', '2018-08-29', 'Perempuan', '2017/2018', NULL),
(16, '4120', 'Faisal RIzal', '2018-05-10', 'Laki-Laki', '2017/2018', NULL),
(17, '4121', 'Fabila Andria', '2018-06-26', 'Perempuan', '2017/2018', NULL),
(18, '4122', 'Febri Yansah', '2018-06-07', 'Laki-Laki', '2017/2018', NULL),
(19, '4123', 'Hefi Febriza Eka WS', '2018-06-13', 'Perempuan', '2017/2018', NULL),
(20, '4124', 'Iluh Riska Setiani', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(21, '4125', 'Indah Nabela', '2018-06-27', 'Perempuan', '2017/2018', NULL),
(22, '4126', 'Joni Anggara', '2018-05-29', 'Laki-Laki', '2017/2018', NULL),
(23, '4127', 'Laili FItri', '2018-07-04', 'Perempuan', '2017/2018', NULL),
(24, '4128', 'Muzal Saputra', '2018-05-30', 'Laki-Laki', '2017/2018', NULL),
(25, '4129', 'Nita Sari', '2018-03-27', 'Perempuan', '2017/2018', NULL),
(26, '4130', 'Nula Gustamara', '2018-06-06', 'Perempuan', '2017/2018', NULL),
(27, '4131', 'Okta Noviani', '2018-05-10', 'Perempuan', '2017/2018', NULL),
(28, '4132', 'Pedro Alansah', '2018-06-05', 'Laki-Laki', '2017/2018', NULL),
(29, '4133', 'Rian Alfin', '2018-06-05', 'Laki-Laki', '2017/2018', NULL),
(30, '4134', 'Rika Yulianti', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(31, '4135', 'Rizky Pramodya P', '2018-06-04', 'Laki-Laki', '2017/2018', NULL),
(32, '4136', 'Roy uhaimin Azis', '2018-06-26', 'Laki-Laki', '2017/2018', NULL),
(33, '4137', 'Septa Asti Lestari', '2018-06-25', 'Perempuan', '2017/2018', NULL),
(34, '4139', 'Trio Wibowo', '2018-06-27', 'Laki-Laki', '2017/2018', NULL),
(35, '4140', 'Widia Sari', '2018-07-31', 'Perempuan', '2017/2018', NULL),
(36, '4138', 'Septiana', '2018-07-03', 'Perempuan', '2017/2018', NULL),
(37, '4141', 'Ade Anjani', '2018-06-05', 'Perempuan', '2017/2018', NULL),
(38, '4142', 'Agung Hidayat', '2018-06-06', 'Laki-Laki', '2017/2018', NULL),
(39, '4143', 'Ali Majid Hakim', '2018-06-05', 'Laki-Laki', '2017/2018', NULL),
(40, '4144', 'Desi Wulandari', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(41, '4145', 'Desi Ratnasari', '2018-07-02', 'Perempuan', '2017/2018', NULL),
(42, '4146', 'Desti Wulandari', '2018-06-06', 'Perempuan', '2017/2018', NULL),
(43, '4147', 'Ekwin Azadi', '2018-05-28', 'Laki-Laki', '2017/2018', NULL),
(44, '4148', 'Fajar Ilham', '2018-06-26', 'Laki-Laki', '2017/2018', NULL),
(45, '4149', 'Fitria Handayani', '2018-07-03', 'Perempuan', '2017/2018', NULL),
(46, '4150', 'Fitri Andayani', '2018-06-25', 'Perempuan', '2017/2018', NULL),
(47, '4151', 'Fransiska Ugiana', '2018-05-28', 'Perempuan', '2017/2018', NULL),
(48, '4152', 'Lisa Fitriani', '2018-05-02', 'Perempuan', '2017/2018', NULL),
(49, '4153', 'Liya Hertati', '2018-05-28', 'Perempuan', '2017/2018', NULL),
(50, '4154', 'Mirdarita', '2018-05-28', 'Perempuan', '2017/2018', NULL),
(51, '4155', 'Nia Anggi Rahmadani', '2018-05-09', 'Perempuan', '2017/2018', NULL),
(52, '4156', 'Nur Rike Syafitri', '2018-05-28', 'Perempuan', '2017/2018', NULL),
(53, '4157', 'Oktavia Wulandari', '2018-06-04', 'Perempuan', '2017/2018', NULL),
(54, '4158', 'Fika Rosianti', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(55, '4159', 'Dwi Sugiarto', '2018-07-03', 'Laki-Laki', '2017/2018', NULL),
(56, '4160', 'Enda Julisa', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(57, '4161', 'Hartati', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(58, '4162', 'Melyani', '2018-06-28', 'Perempuan', '2017/2018', NULL),
(59, '4163', 'Novita Rika', '2018-06-26', 'Perempuan', '2017/2018', NULL),
(60, '4164', 'Sapnah', '2018-05-08', 'Perempuan', '2017/2018', NULL),
(61, '4165', 'Sumarni', '2018-06-26', 'Perempuan', '2017/2018', NULL),
(62, '4166', 'Yuyun Mike L', '2018-06-26', 'Perempuan', '2017/2018', NULL),
(63, '4167', 'Rika Yuliana', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(64, '4168', 'Yetri Septina', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(65, '4169', 'Pebri Aprianto', '2018-06-06', 'Laki-Laki', '2017/2018', NULL),
(66, '4170', 'Samuel Fernando', '2018-06-28', 'Laki-Laki', '2017/2018', NULL),
(69, '4171', 'Rama Sapta Satria', '2018-08-01', 'Laki-Laki', '2017/2018', NULL),
(70, '4172', 'Fendra Fernando', '2018-03-02', 'Laki-Laki', '2017/2018', NULL),
(71, '4173', 'Andian', '2018-06-05', 'Laki-Laki', '2017/2018', NULL),
(72, '4174', 'Maulana', '2018-05-02', 'Laki-Laki', '2017/2018', NULL),
(73, '4175', 'Rohmana Hasan', '2018-05-28', 'Laki-Laki', '2017/2018', NULL),
(74, '4176', 'Deki Yantori', '2018-05-31', 'Laki-Laki', '2017/2018', NULL),
(75, '4177', 'Gustiya', '2018-06-05', 'Laki-Laki', '2017/2018', NULL),
(76, '4178', 'Beni Mahendra', '2018-03-27', 'Laki-Laki', '2017/2018', NULL),
(77, '4179', 'Ari Wibowo', '2018-07-05', 'Laki-Laki', '2017/2018', NULL),
(78, '4180', 'Edi Pramudya', '2018-06-26', 'Laki-Laki', '2017/2018', NULL),
(79, '4181', 'Eriyansyah', '2018-05-29', 'Laki-Laki', '2017/2018', NULL),
(80, '4182', 'Hasanen', '2018-06-27', 'Laki-Laki', '2017/2018', NULL),
(81, '4183', 'Hendri Yunata', '2018-05-28', 'Laki-Laki', '2017/2018', NULL),
(82, '4184', 'Joni Reka Jaya', '2018-06-27', 'Laki-Laki', '2017/2018', NULL),
(83, '4185', 'Khoirul Aminin', '2018-06-27', 'Laki-Laki', '2017/2018', NULL),
(84, '4186', 'Meta Sari', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(85, '4187', 'Neni Efriyanti', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(86, '4188', 'Nining Kurniasih', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(87, '4189', 'Puri Setia N', '2018-05-02', 'Perempuan', '2017/2018', NULL),
(88, '4190', 'Rosa Palentin', '2018-06-05', 'Perempuan', '2017/2018', NULL),
(89, '4191', 'Siti Robiah', '2018-05-30', 'Perempuan', '2017/2018', NULL),
(90, '4192', 'Yusmida Rina', '2018-06-27', 'Perempuan', '2017/2018', NULL),
(91, '4193', 'Ayu RIsa Lidarti', '2018-05-01', 'Perempuan', '2017/2018', NULL),
(92, '4194', 'Nurlia', '2018-05-03', 'Perempuan', '2017/2018', NULL),
(93, '4195', 'Adhiyat Patoni', '2018-06-07', 'Laki-Laki', '2017/2018', NULL),
(94, '4196', 'Ahmad Syaibudin', '2018-05-30', 'Laki-Laki', '2017/2018', NULL),
(95, '4197', 'Fendi Saputra', '2018-05-01', 'Laki-Laki', '2017/2018', NULL),
(96, '4198', 'Novandi Saputra', '2018-01-11', 'Laki-Laki', '2017/2018', NULL),
(97, '4199', 'Dadan Mudrika', '2018-04-30', 'Laki-Laki', '2017/2018', NULL),
(98, '4201', 'Eko Gunawan', '2018-03-09', 'Laki-Laki', '2017/2018', NULL),
(99, '4202', 'Fajar Satria', '2018-05-07', 'Laki-Laki', '2017/2018', NULL),
(100, '4203', 'Agus wahyudi', '2018-02-28', 'Laki-Laki', '2017/2018', NULL),
(101, '4204', 'Andriadi', '2017-09-05', 'Laki-Laki', '2017/2018', NULL),
(102, '4205', 'Dewi Pebrianti', '2018-06-27', 'Perempuan', '2017/2018', NULL),
(103, '4206', 'Ike Purwasih', '2018-04-18', 'Perempuan', '2017/2018', NULL),
(104, '4207', 'Nina Herlina', '2018-05-29', 'Perempuan', '2017/2018', NULL),
(105, '0018736271', 'Ferdiansyah', '2001-01-20', 'Laki-Laki', '2017/2018', NULL),
(106, '4209', 'Herlina Sepriani', '2018-05-08', 'Perempuan', '2017/2018', NULL),
(108, '0014914630', 'Bima Sakti', '2001-09-17', 'Laki-Laki', '2017/2018', NULL),
(109, '0026113641', 'Alfin Sepriadi', '2002-09-29', 'Laki-Laki', '2017/2018', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uh`
--

CREATE TABLE `tbl_uh` (
  `id_uh` int(11) NOT NULL,
  `kode_uh` char(5) DEFAULT NULL,
  `uh1` varchar(10) DEFAULT NULL,
  `uh2` varchar(10) DEFAULT NULL,
  `uh3` varchar(10) DEFAULT NULL,
  `uh4` varchar(10) DEFAULT NULL,
  `uh5` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_uh`
--

INSERT INTO `tbl_uh` (`id_uh`, `kode_uh`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`) VALUES
(1, 'UH001', '80', '80', '80', '80', '80'),
(2, 'UH002', '90', '90', '90', '90', '90'),
(3, 'UH003', '90', '90', '90', '90', '90'),
(4, 'UH004', '80', '80', '80', '80', '80'),
(5, 'UH005', '80', '80', '80', '80', '80'),
(6, 'UH006', '90', '90', '9', '90', '90'),
(7, 'UH007', '85', '85', '85', '82', '87'),
(8, 'UH008', '89', '89', '78', '89', '78'),
(9, 'UH009', '900', '90', '90', '90', '90'),
(10, 'UH010', '90', '90', '90', '90', '0'),
(11, 'UH011', '90', '90', '90', '90', '90'),
(12, 'UH012', '90', '90', '90', '90', '0'),
(13, 'UH013', '80', '80', '80', '0', '0'),
(14, 'UH014', '80', '80', '80', '80', '80'),
(15, 'UH015', '78', '78', '70', '0', '0'),
(16, 'UH016', '80', '70', '70', '70', '0'),
(17, 'UH017', '90', '90', '90', '90', '0'),
(18, 'UH018', '80', '70', '75', '80', '0'),
(19, 'UH019', '75', '75', '75', '75', '0'),
(20, 'UH020', '70', '70', '70', '0', '0'),
(21, 'UH021', '80', '80', '70', '70', '0'),
(22, 'UH022', '90', '90', '90', '90', '0'),
(23, 'UH023', '80', '80', '80', '80', '0'),
(24, 'UH024', '80', '80', '80', '80', '80'),
(25, 'UH025', '80', '80', '80', '0', '0'),
(26, 'UH026', '80', '70', '80', '85', '0'),
(27, 'UH027', '69', '79', '89', '80', '90'),
(28, 'UH028', '69', '70', '90', '80', '70'),
(29, 'UH029', '69', '79', '89', '78', '90'),
(30, 'UH030', '69', '79', '89', '78', '90'),
(31, 'UH031', '90', '90', '80', '90', '80'),
(32, 'UH032', '69', '79', '89', '78', '90'),
(33, 'UH033', '58', '79', '89', '78', '90'),
(34, 'UH034', '69', '79', '89', '78', '90'),
(35, 'UH035', '90', '90', '90', '78', '90'),
(36, 'UH036', '80', '90', '80', '50', '79'),
(37, 'UH037', '69', '80', '56', '53', '100'),
(38, 'UH038', '70', '90', '90', '100', '100'),
(39, 'UH039', '69', '89', '79', '90', '80'),
(40, 'UH040', '69', '58', '89', '80', '80'),
(41, 'UH041', '69', '90', '80', '78', '90'),
(42, 'UH042', '69', '79', '89', '78', '90'),
(43, 'UH043', '69', '90', '89', '90', '60'),
(44, 'UH044', '58', '79', '89', '78', '89'),
(46, 'UH046', '70', '58', '90', '78', '90'),
(47, 'UH047', '58', '79', '56', '80', '90'),
(48, 'UH048', '80', '58', '56', '90', '79'),
(49, 'UH049', '69', '80', '89', '78', '90'),
(50, 'UH050', '58', '79', '90', '80', '89'),
(51, 'UH051', '58', '79', '90', '78', '90'),
(52, 'UH052', '58', '79', '90', '80', '89'),
(53, 'UH053', '58', '90', '89', '78', '90'),
(54, 'UH054', '58', '79', '90', '78', '90'),
(55, 'UH055', '58', '79', '79', '80', '90');

-- --------------------------------------------------------

--
-- Structure for view `nilai`
--
DROP TABLE IF EXISTS `nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai`  AS  select `t1`.`id_ajaran` AS `id_ajaran`,`t1`.`semester` AS `semester`,`t1`.`id_detail_mapel` AS `id_detail_mapel`,`t1`.`id_siswa` AS `id_siswa`,`t1`.`predikat` AS `npengetahuan_predikat`,`t1`.`deskripsi` AS `npengetahuan_deskripsi`,`t2`.`predikat` AS `nketerampilan_predikat`,`t2`.`deskripsi` AS `nketerampilan_deskripsi`,`t1`.`akhir` AS `npengetahuan_akhir`,`t2`.`akhir` AS `nketerampilan_akhir` from (`tbl_nilai` `t1` join `tbl_nilai` `t2` on(((`t1`.`id_siswa` = `t2`.`id_siswa`) and (`t1`.`id_detail_mapel` = `t2`.`id_detail_mapel`) and (`t1`.`id_metode` = 1) and (`t2`.`id_metode` = 2)))) ;

-- --------------------------------------------------------

--
-- Structure for view `nilai1`
--
DROP TABLE IF EXISTS `nilai1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai1`  AS  (select `tbl_nilai`.`id_nilai` AS `id_nilai`,`tbl_nilai`.`id_ajaran` AS `id_ajaran`,`tbl_nilai`.`semester` AS `semester`,`tbl_nilai`.`id_metode` AS `id_metode`,`tbl_nilai`.`id_detail_mapel` AS `id_detail_mapel`,`tbl_nilai`.`id_siswa` AS `id_siswa`,`tbl_nilai`.`kode_uh` AS `kode_uh`,`tbl_nilai`.`harian` AS `harian`,`tbl_nilai`.`proyek` AS `proyek`,`tbl_nilai`.`portofolio` AS `portofolio`,`tbl_nilai`.`uts` AS `uts`,`tbl_nilai`.`uas` AS `uas`,`tbl_nilai`.`akhir` AS `akhir`,`tbl_nilai`.`predikat` AS `predikat`,`tbl_nilai`.`deskripsi` AS `deskripsi`,(case when (`tbl_nilai`.`id_metode` = '1') then `tbl_nilai`.`akhir` end) AS `npengetahuan_akhir`,(case when (`tbl_nilai`.`id_metode` = '1') then `tbl_nilai`.`predikat` end) AS `npengetahuan_predikat`,(case when (`tbl_nilai`.`id_metode` = '1') then `tbl_nilai`.`deskripsi` end) AS `npengetahuan_deskripsi`,(case when (`tbl_nilai`.`id_metode` = '2') then `tbl_nilai`.`akhir` end) AS `nketerampilan_akhir`,(case when (`tbl_nilai`.`id_metode` = '2') then `tbl_nilai`.`predikat` end) AS `nketerampilan_predikat`,(case when (`tbl_nilai`.`id_metode` = '2') then `tbl_nilai`.`deskripsi` end) AS `nketerampilan_deskripsi` from `tbl_nilai`) ;

-- --------------------------------------------------------

--
-- Structure for view `nilai2`
--
DROP TABLE IF EXISTS `nilai2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai2`  AS  select `t1`.`id_ajaran` AS `id_ajaran`,`t1`.`semester` AS `semester`,`t1`.`id_detail_mapel` AS `id_detail_mapel`,`t1`.`id_siswa` AS `id_siswa`,`t1`.`predikat` AS `npengetahuan_predikat`,`t1`.`deskripsi` AS `npengetahuan_deskripsi`,`t2`.`predikat` AS `nketerampilan_predikat`,`t2`.`deskripsi` AS `nketerampilan_deskripsi`,`t1`.`akhir` AS `npengetahuan_akhir`,`t2`.`akhir` AS `nketerampilan_akhir` from (`tbl_nilai` `t1` join `tbl_nilai` `t2` on(((`t1`.`id_siswa` = `t2`.`id_siswa`) and (`t1`.`id_detail_mapel` = `t2`.`id_detail_mapel`) and (`t1`.`id_metode` = 1) and (`t2`.`id_metode` = 2)))) ;

-- --------------------------------------------------------

--
-- Structure for view `nilai22`
--
DROP TABLE IF EXISTS `nilai22`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai22`  AS  (select `nilai1`.`id_ajaran` AS `id_ajaran`,`nilai1`.`semester` AS `semester`,`nilai1`.`id_detail_mapel` AS `id_detail_mapel`,`nilai1`.`id_siswa` AS `id_siswa`,`nilai1`.`npengetahuan_predikat` AS `npengetahuan_predikat`,`nilai1`.`npengetahuan_deskripsi` AS `npengetahuan_deskripsi`,`nilai1`.`nketerampilan_predikat` AS `nketerampilan_predikat`,`nilai1`.`nketerampilan_deskripsi` AS `nketerampilan_deskripsi`,sum(`nilai1`.`npengetahuan_akhir`) AS `npengetahuan_akhir`,sum(`nilai1`.`nketerampilan_akhir`) AS `nketerampilan_akhir` from `nilai1` group by `nilai1`.`id_ajaran`,`nilai1`.`semester`,`nilai1`.`id_detail_mapel`,`nilai1`.`id_siswa`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ajaran`
--
ALTER TABLE `tbl_ajaran`
  ADD PRIMARY KEY (`id_ajaran`);

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tbl_detail_mapel`
--
ALTER TABLE `tbl_detail_mapel`
  ADD PRIMARY KEY (`id_detail_mapel`);

--
-- Indexes for table `tbl_detail_nilai`
--
ALTER TABLE `tbl_detail_nilai`
  ADD PRIMARY KEY (`id_detail_nilai`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_kategori_nilai`
--
ALTER TABLE `tbl_kategori_nilai`
  ADD PRIMARY KEY (`id_kategori_nilai`);

--
-- Indexes for table `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `tbl_keahlian_siswa`
--
ALTER TABLE `tbl_keahlian_siswa`
  ADD PRIMARY KEY (`id_keahlian_siswa`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_mapel_keahlian`
--
ALTER TABLE `tbl_mapel_keahlian`
  ADD PRIMARY KEY (`id_mapel_keahlian`);

--
-- Indexes for table `tbl_metode`
--
ALTER TABLE `tbl_metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_olah`
--
ALTER TABLE `tbl_olah`
  ADD PRIMARY KEY (`id_olah`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_profil_sekolah`
--
ALTER TABLE `tbl_profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_romkel`
--
ALTER TABLE `tbl_romkel`
  ADD PRIMARY KEY (`id_romkel`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_uh`
--
ALTER TABLE `tbl_uh`
  ADD PRIMARY KEY (`id_uh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ajaran`
--
ALTER TABLE `tbl_ajaran`
  MODIFY `id_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail_mapel`
--
ALTER TABLE `tbl_detail_mapel`
  MODIFY `id_detail_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_detail_nilai`
--
ALTER TABLE `tbl_detail_nilai`
  MODIFY `id_detail_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_kategori_nilai`
--
ALTER TABLE `tbl_kategori_nilai`
  MODIFY `id_kategori_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_keahlian_siswa`
--
ALTER TABLE `tbl_keahlian_siswa`
  MODIFY `id_keahlian_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_mapel_keahlian`
--
ALTER TABLE `tbl_mapel_keahlian`
  MODIFY `id_mapel_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_metode`
--
ALTER TABLE `tbl_metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_olah`
--
ALTER TABLE `tbl_olah`
  MODIFY `id_olah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_profil_sekolah`
--
ALTER TABLE `tbl_profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_romkel`
--
ALTER TABLE `tbl_romkel`
  MODIFY `id_romkel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tbl_uh`
--
ALTER TABLE `tbl_uh`
  MODIFY `id_uh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
