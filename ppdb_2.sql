-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2021 pada 15.44
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `g2_bio_siswa`
--

CREATE TABLE `g2_bio_siswa` (
  `no_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `telp` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `nama_ayah` varchar(150) NOT NULL,
  `nama_ibu` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `jurusan` enum('TO','RPL','TPHP','TKR','TSM') NOT NULL,
  `raport_smt3` varchar(7) NOT NULL,
  `raport_smt4` varchar(7) NOT NULL,
  `raport_smt5` varchar(7) NOT NULL,
  `dis3` enum('Y','N') NOT NULL DEFAULT 'N',
  `dis4` enum('Y','N') NOT NULL DEFAULT 'N',
  `dis5` enum('Y','N') NOT NULL DEFAULT 'N',
  `tes_tulis` varchar(7) NOT NULL,
  `piagam_akademik` varchar(7) NOT NULL,
  `piagam_olahraga` varchar(7) NOT NULL,
  `piagam_senibudaya` varchar(7) NOT NULL,
  `rata_total` varchar(20) NOT NULL,
  `diterima` enum('Y','N') NOT NULL DEFAULT 'N',
  `email` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `g2_bio_siswa`
--

INSERT INTO `g2_bio_siswa` (`no_siswa`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `telp`, `agama`, `nama_ayah`, `nama_ibu`, `alamat`, `pekerjaan_ayah`, `pekerjaan_ibu`, `asal_sekolah`, `jurusan`, `raport_smt3`, `raport_smt4`, `raport_smt5`, `dis3`, `dis4`, `dis5`, `tes_tulis`, `piagam_akademik`, `piagam_olahraga`, `piagam_senibudaya`, `rata_total`, `diterima`, `email`, `username`, `password`, `foto`) VALUES
(81, 'YOHAN ALDI PUTRA', 'MADIUN', '2000-09-20', 'Laki-Laki', '0', 'ISLAM', 'PARDIONO', 'MARMI', 'DS.KLUMUTAN DK.PRANTI', 'PETANI', 'BURUH TANI', 'SMP N 4 SARADAN', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '0', 'Y', '', 'PSB-16-2-81', '4d54c4c82c316bcbf8fb94a3171bab0b', 'kosong.jpg'),
(167, 'WAHIDIN NUR HAQ', 'MADIUN', '2000-06-25', 'Laki-Laki', '085790625093', 'ISLAM', 'SUMANTO', 'NANI RUSMYATI', 'DS. DUREN RT13. RW 02', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 1 PILANGKENCENG', 'TSM', '0', '0', '0', 'Y', 'Y', 'Y', '28', '0', '0', '0', '7', 'N', '', 'PSB-16-2-167', '38fc2943285025f2c17abee332ed4be3', 'kosong.jpg'),
(179, 'HENDRAWAN ARDIANTO', 'MADIUN', '2001-04-05', 'Laki-Laki', '085608536731', 'ISLAM', 'SIMIN', 'HARTINI', 'DESA SUMBER BENING', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 01 BALEREJO', 'TO', '0', '87.36', '89.09', 'Y', 'Y', 'Y', '20', '0', '0', '0', '49.11', 'Y', '', 'PSB-16-2-179', 'c5f28c2831cdb4a78367cab34f6c11c3', 'kosong.jpg'),
(178, 'FIKI BUDIANTO', 'JOMBANG', '1999-08-29', 'Laki-Laki', '085732640380', 'ISLAM', 'KARYO', 'KARTI', '', '', '', 'MTS N KEDUNGJATI', 'TO', '78.16', '78.4', '81.2', 'Y', 'Y', 'Y', '44', '0', '0', '0', '70.44', 'Y', '', 'PSB-16-2-178', '5f98453fccfd8d96bda37c3801acf030', 'kosong.jpg'),
(177, 'VIKRAR FIDHA ARDHANA', 'MADIUN', '0000-00-00', 'Laki-Laki', '081335130364', 'ISLAM', 'SUPRIYADI', 'PONYATI', '', '', '', 'SMPN 1 WONOASRI', 'TO', '83', '0', '0', 'Y', 'Y', 'Y', '44', '0', '0', '0', '31.75', 'Y', '', 'PSB-16-2-177', 'bbbd35639b25ec36961dfc4533b55ecb', 'kosong.jpg'),
(176, 'DEFI TRI HARYANTI', 'MADIUN', '2000-12-30', 'Perempuan', '085608536731', 'ISLAM', 'THAMRIN', 'SANIYEM', 'DESA KEDUNGJATI RT 19 RW 4', 'BURUH TANI', 'IBU RUMAH TANGGA', 'MTSN KEDUNGJATI', 'TPHP', '80.68', '81.81', '85.06', 'Y', 'Y', 'Y', '0', '0', '0', '0', '61.89', 'Y', '', 'PSB-16-2-176', 'ccb24d251b7fba9ba8fbe7e507a1710f', 'PSB-16-2-176.jpg'),
(175, 'NURIL KHOLIFAH', 'MADIUN', '2000-03-03', 'Perempuan', '085649133395', 'ISLAM', 'KUSTANTO', 'SARMI', 'DESA BALEREJO,RT 33, RW 04', 'BURUH TANI', 'IBU RUMAH TANGGA', 'MTSN KEDUNGJATI', 'TPHP', '79.68', '79.75', '83.37', 'Y', 'Y', 'Y', '0', '0', '0', '0', '60.7', 'Y', '', 'PSB-16-2-175', '5cf57481eaae95c59939015457f2ecf6', 'PSB-16-2-175.jpg'),
(174, 'SEPTIYO AJI SUPARNO', 'MADIUN', '2000-09-03', 'Laki-Laki', '0895327737097', 'ISLAM', 'SAMIDI', 'MURYATI', '', '', '', 'SMPN 2 NGLAMES', 'TO', '80', '88', '89', 'Y', 'Y', 'Y', '28', '0', '0', '0', '71.25', 'Y', '', 'PSB-16-2-174', 'f4aa99d242e2634c386fddbabecb8c24', 'kosong.jpg'),
(173, 'NARANI DELILA MARYANTI', 'MADIUN', '2001-12-14', 'Laki-Laki', '085645760079', 'ISLAM', 'KURNIAWAN MULIA ADI', 'MAMIK SUPRAPTI', 'JLN SAWO NOMOR 9 KRAJAN', 'SWASTA', 'SWASTA', 'MTSN PONOROGO', 'TPHP', '', '', '', 'N', 'N', 'N', '20', '', '', '', '5', 'Y', '', 'PSB-16-2-173', '0505b3fa903ade9ca890ea513ea4a161', 'kosong.jpg'),
(168, 'DENI PREMURDIANTO', 'MADIUN', '2001-03-10', 'Laki-Laki', '085649102154', 'ISLAM', 'JASLAN', 'DARWATI', 'DS.DUREN RT14 RW02 KEC.PILANGKENCENG KAB.MADIUN', 'TANI', 'IBU RUMAH TANGGA', 'SMPN 02 PILANGKENCENG', 'TSM', '0', '0', '0', 'Y', 'Y', 'Y', '32', '0', '0', '0', '8', 'N', '', 'PSB-16-2-168', '148286cc8cac3f9f6e323cba3a3e69ca', 'kosong.jpg'),
(169, 'DEDY SETIAWAN', 'MADIUN', '2001-04-16', 'Laki-Laki', '085203590248', 'ISLAM', 'LASNO', 'HARTATIK', 'DS DUREN RT 17 RW 02', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMPN 1 PILANGKENCENG', 'TSM', '81.85', '87.09', '89', 'Y', 'Y', 'Y', '44', '0', '0', '0', '75.49', 'Y', '', 'PSB-16-2-169', '84d3599c83af04c14efd968e15b16342', 'kosong.jpg'),
(63, 'HENSON', 'RANTAU PRAPAT', '0000-00-00', 'Laki-Laki', '081554350225', 'ISLAM', 'SAREH', 'MEILINA', '', '', '', 'SMPN 2 BALEREJO', 'RPL', '74.5', '73.75', '75.5', 'Y', 'Y', 'Y', '48', '0', '0', '0', '67.94', 'Y', '', 'PSB-16-2-63', '21232f297a57a5a743894a0e4a801fc3', 'kosong.jpg'),
(9, 'GATOT', 'MADIUN', '1998-09-22', 'Laki-Laki', '085234565789', 'ISLAM', 'MARDI', 'SUWARNI', '', '', '', 'SMPN2BALEREJO', 'TSM', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-9', '61b55cb78e158b0e8963e5c0f461035f', 'kosong.jpg'),
(8, 'BANGKIT AMIR SYAHRUDIN', 'MADIUN', '0000-00-00', 'Laki-Laki', '085726147369', 'ISLAM', 'ROCHMAD', 'SURATI', '', '', '', 'SMPN 2 BALEREJO', 'TO', '2.94', '2.71', '70.08', 'Y', 'Y', 'Y', '24', '0', '0', '0', '24.93', 'Y', '', 'PSB-16-2-8', '2c8c41e5f5c9ff2fca84a3823dea035c', 'kosong.jpg'),
(142, 'CATUR WAHYU WIDODO', 'MADIUN', '2001-01-20', 'Laki-Laki', '083845056325', 'ISLAM', 'MARLAN', 'PAINEM', 'BONNGSOPOTRO,SARADAN,MADIUN', 'PETANI', 'PETANI', 'SMP N 2 SARADAN', 'TSM', '84.60', '77.66', '79.25', 'Y', 'Y', 'Y', '56', '0', '0', '0', '74.38', 'Y', '-', 'PSB-16-2-142', 'a167731c5d65796db13aeef995cbb5f0', 'PSB-16-2-142.jpg'),
(138, 'RIZKY NUR SETIAWAN', 'MADIUN', '2000-10-31', 'Laki-Laki', '085791248782', 'ISLAM', 'SUPRIANTO', 'INDARSIH', 'DS PLUMPUNG REJO', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMPN 1 WONOASRI', 'TSM', '83', '83', '84', 'Y', 'Y', 'Y', '24', '0', '0', '0', '68.5', 'Y', '', 'PSB-16-2-138', '19ac2b20135c15bdf68956f9bc91fbcc', 'PSB-16-2-138.jpg'),
(139, 'ANDIK ARIYANTO', 'MADIUN', '2001-05-22', 'Laki-Laki', '083830450573', 'ISLAM', 'KASIYAN', 'TASMI', 'DS SIDOMULYO', 'BURUH TANI', 'TIDAK BEKERJA', 'SMPN 01 WONOASRI', 'TSM', '84', '83', '86', 'Y', 'Y', 'Y', '64', '0', '0', '0', '79.25', 'Y', '', 'PSB-16-2-139', 'a556e66b8ae9dd2768b3d757d3110e72', 'kosong.jpg'),
(20, 'ABDUL KHALIM', 'KUDUS', '2000-12-26', 'Laki-Laki', '081271372072', 'ISLAM', 'SUTRIMO', 'KULIYAH', 'SIDOREJO RT21/RW06', 'SOPIR', 'DAGANG', 'SMP N 2 SARADAN', 'TPHP', '85', '78', '78', 'Y', 'Y', 'Y', '48', '0', '0', '0', '72.25', 'Y', '', 'PSB-16-2-20', '38b95c279efc56f2716c3114ea7d154b', 'PSB-16-2-20.jpg'),
(12, 'GATOT', 'MADIUN', '1998-09-22', 'Laki-Laki', '085235678654', 'ISLAM', 'MARDI', 'SUWARNI', '', '', '', 'SMPN2BALEREJO', 'TSM', '72.5', '65.75', '74.6', 'Y', 'Y', 'Y', '28', '0', '0', '0', '60.21', 'N', '', 'PSB-16-2-12', '66810328b0330fa630ab512c34e40e49', 'kosong.jpg'),
(3, 'MOHAMAD FATONI', 'MADIUN', '2016-02-27', 'Laki-Laki', '085235551688', 'ISLAM', 'NUR KHAMIM', 'WARSINAH', '', '', '', 'SMPN 4 MEJAYAN', 'TSM', '82.375', '82.625', '83.812', 'Y', 'Y', 'Y', '36', '', '', '', '71.2', 'Y', '', 'PSB-16-2-3', '70ed2c3e229ad7cfe945c89a218cdbf2', 'kosong.jpg'),
(5, 'DONI SUMARNO', 'MADIUN', '2001-01-21', 'Laki-Laki', '085649655853', 'ISLAM', 'SANUSI', 'KATINEM', 'GG. TARUNA BAKTI NO 10 RT. 10 RW. 03', 'WIRASWASTA', 'SWASTA', 'SMP NEGERI 2 MEJAYAN', 'RPL', '80.93', '82.75', '83.33', 'Y', 'Y', 'Y', '36', '0', '0', '0', '70.75', 'Y', '', 'PSB-16-2-5', 'afe7b0df8188385aa5b331dd3a0580b0', 'PSB-16-2-5.jpg'),
(170, 'REFA AGUNG KUNCORO', 'MADIUN', '2000-03-15', 'Laki-Laki', '085746620623', 'ISLAM', 'AGUS SLAMET RIADI', '-', 'DESA BUNGKUS', 'PRTANI', '-', 'SMPN 2 MEJAYAN', 'TO', '3.08', '79.75', '78.08', 'Y', 'Y', 'Y', '32', '0', '0', '0', '48.23', 'Y', '', 'PSB-16-2-170', '21232f297a57a5a743894a0e4a801fc3', 'PSB-16-2-170.jpg'),
(6, 'ADAM FARID YUDHISTIRA', 'MADIUN', '2000-02-24', '', '083845774653', '', 'ALM. PUJIANTO', 'KUSWINARTI', 'DS.KAJANG JL.KRAMAT RT.08 RW.02 KEC.SAWAHAN KAB.MADIUN, -, -, -', 'MANTAN PEGAWAI INKA', 'DAGANG', 'SMPN 12 MADIUN', 'TO', '77', '79', '81', 'Y', 'Y', 'Y', '28', '0', '0', '0', '66.25', 'Y', '', 'PSB-16-2-6', 'e2d2851c96ca25e95ef1daac2c1dc7ce', 'PSB-16-2-6.jpg'),
(7, 'TIARA LUKITANINGTYAS', 'MADIUN', '2001-07-04', 'Perempuan', '085790613174', 'ISLAM', 'LUKMAN BUDIANTO', 'SRI WINDARI', 'DK. NOTOPURO, DS. DUREN RT28/RW05, KEC. PILANGKENCENG, KAB. MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 2 PILANGKENCENG', 'RPL', '81.09', '83.91', '84.41', 'Y', 'Y', 'Y', '8', '0', '0', '0', '64.35', 'Y', '', 'PSB-16-2-7', '31e22370a2bc5c63ebce12758153afd9', 'PSB-16-2-7.jpg'),
(2, 'ALFIAN PRAMUDYA', 'MADIUN', '2000-06-13', 'Laki-Laki', '', 'ISLAM', 'SIDI', 'MARSINI', '', '', '', 'SMPN 2 NGLAMES', 'TSM', '79.81', '90', '82.81', 'Y', 'Y', 'Y', '28', '0', '0', '0', '70.16', 'Y', '', 'PSB-16-2-2', 'ca8812727ca41e73874cf11f93e0b1f6', 'kosong.jpg'),
(16, 'JEFRI HANDIKA PRATAMA', 'MADIUN', '2001-07-28', 'Laki-Laki', '081545964480', 'ISLAM', 'HANDOKO DWI PUJIANTO', 'SRI WULANDARI', 'JL.A.YANI NO 180', 'SWASTA', 'IBU RUMAH', 'SMPN 3 MEJAYAN', 'TSM', '81.18', '89.26', '89.81', 'Y', 'Y', 'Y', '44', '0', '0', '0', '76.06', 'Y', '', 'PSB-16-2-16', 'a6f406b3d7c0449f5e3f6aadc0eadc9a', 'PSB-16-2-16.jpg'),
(15, 'FIRGIAWAN KUDETA RISTANTO', 'MADIUN', '2001-03-13', 'Laki-Laki', '082338852179', 'ISLAM', 'SUYOTO', 'MARTINI', 'DS.KALIABU RT.25 RW.05 KEC.MEJAYAN KAB. MADIUN', 'TUKANG', 'SWASTA', 'SMP 2 MEJAYAN', 'TSM', '79', '77.25', '77', 'Y', 'Y', 'Y', '32', '0', '0', '0', '66.31', 'Y', '', 'PSB-16-2-15', 'adef2f0d90b531764665e0380883c8ea', 'PSB-16-2-15.jpg'),
(17, 'MUHAMMAD RIDWAN PRAKOSO', 'MADIUN', '2001-03-26', 'Laki-Laki', '08563500637', 'ISLAM', 'SUJOKO MUHAMMAD IHSANUDIN', 'LASTRI NURYASIH', 'DESA SIDOREJO RT21 RW06', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'SMP N 2 SARDAN', 'TO', '87', '86', '81', 'Y', 'Y', 'Y', '56', '0', '0', '0', '77.5', 'Y', '', 'PSB-16-2-17', '30590505a8db3485a40bdb556ebbdaca', 'PSB-16-2-17.jpg'),
(18, 'ANGGA YUDA PRATAMA', 'MADIUN', '2001-07-21', 'Laki-Laki', '081348212534', 'ISLAM', 'MIHADI', 'ANDINI RAHAYU', 'JL KALIMANTAN KRAJAN CARUBAN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 03 MEJAYAN', 'TSM', '79.6', '80.1', '80.3', 'Y', 'Y', 'Y', '28', '0', '0', '0', '67', 'Y', '', 'PSB-16-2-18', '64c01d9bcc542e317bac55c26296c1a7', 'PSB-16-2-18.jpg'),
(22, 'OKTAVIANA PUSPITASARI', 'MADIUN', '2000-10-30', 'Perempuan', '085746820926', 'ISLAM', 'SUGITO', 'TUTIK YUNIASIH', '', '', '', 'SMPN 2 MEJAYAN', 'RPL', '80.06', '79.5', '78.5', 'Y', 'Y', 'Y', '24', '0', '0', '0', '65.52', 'Y', '', 'PSB-16-2-22', 'a74a7878dcfed7ac9eac359b72182812', 'kosong.jpg'),
(26, 'RICARDO PUTRA HENRI', 'MADIUN', '2000-08-25', 'Laki-Laki', '085708477080', 'ISLAM', 'JUARI', 'HENI', 'NGAMPEL NO 9 JL PATIMURA', 'SWASTA', 'IBU RUMAH TANGGA', 'SMP 03 MEJAYAN', 'TSM', '77.06', '79.75', '78.33', 'Y', 'Y', 'Y', '40', '0', '0', '0', '68.79', 'Y', '', 'PSB-16-2-26', '8e1ebaf0e26c0a63bd1c09e1acef0cc8', 'PSB-16-2-26.jpg'),
(21, 'AGUSTINA SETIYANI', 'MADIUN', '2001-08-09', 'Perempuan', '082131545916', 'ISLAM', 'PARDI', 'MAINEM', '', '', '', 'SMPN 04 SARADAN', 'RPL', '78.86', '0', '0', 'Y', 'Y', 'Y', '12', '0', '0', '0', '22.72', 'N', '', 'PSB-16-2-21', '714e32575444a066977f88db704d9b7e', 'kosong.jpg'),
(25, 'ANTON TYAS SANJAYA', 'NGANJUK', '2000-08-23', 'Laki-Laki', '085791248922', 'ISLAM', 'LASIRAN', 'SUMINEM', 'JL SAWO NO 11 KRAJAN MEJAYAN', 'SWASTA', 'SWASTA', 'SMPN02 MEJAYAN', 'TSM', '79.45', '79.66', '80.58', 'Y', 'Y', 'Y', '36', '0', '0', '0', '68.92', 'Y', '', 'PSB-16-2-25', '1ac44eae708e13e0581c8c5700fcade2', 'PSB-16-2-25.jpg'),
(163, 'ISMAWATI', 'MADIUN', '2001-08-29', 'Perempuan', '085736517854', 'ISLAM', 'ISMAN', 'SUMIATI(ALM)', 'DS.BAJULAN DK.GOMBEL RT.13 RW.07 KEC.SARADAN KAB.MADIUN', 'SWASTA', '-', 'SMPN 3 MEJAYAN', 'TPHP', '79', '74', '80', 'N', 'N', 'N', '0', '0', '0', '0', '58.25', 'Y', '', 'PSB-16-2-163', '10af88fea16f03cb78a617dc4ea49236', 'PSB-16-2-163.jpg'),
(19, 'HAFETZ OKCAHYONO', 'SIDOARJO', '2000-10-23', 'Laki-Laki', '08817129174', 'ISLAM', 'HARIYONO', 'UMIYATI', 'JL. A. YANI NO. 50', 'SWASTA', 'PEDAGANG', 'SMPN 03 MEJAYAN', 'TSM', '78.27', '86.81', '86.72', 'Y', 'Y', 'Y', '36', '0', '0', '0', '71.95', 'Y', '', 'PSB-16-2-19', '7d65d2e8c8bede8b24a238f0c177e74e', 'PSB-16-2-19.jpg'),
(23, 'NURUL QOMARRIYAH', 'MADIUN', '2000-12-07', 'Perempuan', '085736534647', 'ISLAM', 'BAMBANG SUJATMIKO', 'MARIYAH', '', '', '', 'SMP NEGERI 04 SARADAN', 'RPL', '88.97', '88.45', '90.9', 'Y', 'Y', 'Y', '48', '0', '0', '0', '79.08', 'Y', '', 'PSB-16-2-23', 'c304e1d22553e79dadceae00131d8676', 'kosong.jpg'),
(27, 'SUKMA ARUM SARI', 'MADIUN', '2000-10-25', 'Laki-Laki', '085604499143', 'ISLAM', 'YADI', 'MURYATI', 'DS. BAJULAN DSN. CANGKRING KEC. SARADAN', 'SWASTA', 'SWASTA', 'SMPN 2 MEJAYAN', 'RPL', '0', '88', '74', 'N', 'N', 'N', '36', '0', '0', '0', '49.5', 'N', '', 'PSB-16-2-27', '48b8f200590a762c9b61c4a5ed063d15', 'kosong.jpg'),
(28, 'AULIYA AMEILUL JANNAH', 'MADIUN', '2001-05-16', 'Perempuan', '085853806714', 'ISLAM', 'GUNAWAN', 'SUPINI', 'DK.BOTO MULYO DS.BENER RT.17 RW.04 KEC.SARADAN KAB.MADIUN', 'KARYAWAN SWASTA', 'KARYAWAN SWASTA', 'SMP N 03 MEJAYAN', 'RPL', '85.6', '83.5', '84.1', 'Y', 'Y', 'Y', '48', '0', '0', '0', '75.3', 'Y', '', 'PSB-16-2-28', 'b76ec0ec4bb403301361c972f9db1710', 'PSB-16-2-28.jpg'),
(165, 'ROHMAT WAHYU SAPUTRO', 'MADIUN 28 10 2001', '2016-10-28', 'Laki-Laki', '085 708 919 440', 'ISLAM', 'SUMADI', 'PARNI', 'DS DARMOREJO RT01', 'PETANI', 'IBU RUMAH TANGGA', 'SMP N 4 MEJAYAN', 'TO', '85', '81.91', '83.08', 'Y', 'Y', 'Y', '32', '0', '0', '0', '70.5', 'Y', '', 'PSB-16-2-165', '6ac94b0c6eaafdbfba4bdfce1c18332c', 'kosong.jpg'),
(164, 'EPENDI IRAWAN', 'MADIUN', '2001-01-29', 'Laki-Laki', '085731317637', 'ISLAM', 'WIDJIONO', 'PONIYEM', 'DS.NGEPEH', 'SWASTA', 'IBU RUMAH TANGGA', 'SMP N2 SARADAN', 'TO', '90', '76', '78', 'Y', 'Y', 'Y', '32', '0', '0', '0', '69', 'Y', '', 'PSB-16-2-164', '78d06cccef6bd2c02b8821e213920bbb', 'PSB-16-2-164.jpg'),
(35, 'WAHYU NUR IQSAN', 'MADIUN', '2001-04-26', 'Laki-Laki', '085790635413', 'ISLAM', 'SUPONO', 'SULASMI', 'DSN. BLIMBING, DS. KLECOREJO, KEC. MEJAYAN, KAB. MADIUN', 'PNS', 'IBU RUMAH TANGGA', 'SMP N 02 MEJAYAN', 'RPL', '79', '77', '78', 'Y', 'Y', 'Y', '56', '0', '0', '0', '72.5', 'Y', '', 'PSB-16-2-35', 'f274b4a2f726386ab5871afb68f3b8a2', 'PSB-16-2-35.jpg'),
(32, 'BAYU ERNANDO', 'MADIUN', '2000-08-01', 'Laki-Laki', '082230940011', 'ISLAM', 'SASTRO', 'TAWI', 'DS.KALIABU RT.08 RW.02', 'BURUH TANI', 'BURUH TANI', 'SMPN 2 MEJAYAN', 'TO', '79', '80', '81', 'Y', 'Y', 'Y', '56', '0', '0', '0', '74', 'Y', '', 'PSB-16-2-32', '6e61bd11f6250e4fc9c3ad6793f70abe', 'PSB-16-2-32.jpg'),
(36, 'DIMAS PRAMANA PUTRA', 'MADIUN', '2000-04-24', 'Laki-Laki', '085735961368', 'ISLAM', 'KARJIANTO', 'DARWATI', 'DS. BANGUNSARI RT. 17 RW 3', 'SWASTA', 'IBU RUMAH TANGGA', 'MTSN CARUBAN', 'RPL', '80', '80', '81', 'Y', 'Y', 'Y', '40', '0', '0', '0', '70.25', 'Y', '', 'PSB-16-2-36', 'f50c0b07d7e000c5ce73c4c967558c2a', 'PSB-16-2-36.jpg'),
(136, 'LAELA NADA DAWUD', 'MADIUN', '2000-12-05', 'Perempuan', '085649143710', 'ISLAM', 'IMAM MULYANI', 'MARYATI', 'DS.KLECOREJO', 'PETANI', 'PEDAGANG', 'MTSN CARUBAN', 'RPL', '82', '85', '82', 'Y', 'Y', 'Y', '52', '0', '0', '0', '75.25', 'Y', '', 'PSB-16-2-136', '1f10282cc6be0eafabae13129cbff30a', 'PSB-16-2-136.jpg'),
(137, 'SARWOKO ANWAR', 'MADIUN', '2000-01-13', 'Laki-Laki', '085732411876', 'ISLAM', 'SUDARTO', 'SARNI', 'DESA JATIREJO RT 21 RW 03', 'BURUH TANI', 'BURUH TANI', 'SMPN 1 WONOASRI', 'TSM', '84', '83', '84', 'Y', 'Y', 'N', '32', '0', '0', '0', '70.75', 'Y', '', 'PSB-16-2-137', 'aa4b2da5f5eb3f1c0f79c2a52eb44064', 'kosong.jpg'),
(146, 'HELMI PERMANA', 'MADIUN', '2000-10-22', 'Laki-Laki', '085235923267', 'ISLAM', 'MARIMIN', 'SUWARTI', 'BANYUKAMBANG', 'PETANI', 'PETANI', 'SMPN 1 WONOASRI', 'TSM', '86', '86', '87', 'Y', 'Y', 'Y', '44', '0', '0', '0', '75.75', 'Y', '', 'PSB-16-2-146', '0b03a2345f0736b284e59d07c7fbfb3b', 'PSB-16-2-146.jpg'),
(145, 'CHANDRA ADITYA AL FAJRI', 'MADIUN,06 JUNI 2000', '2000-06-06', 'Laki-Laki', '085850611158', 'ISLAM', 'WARNO', 'SADINEM', 'TAPELAN', 'TANI', 'TANI', 'SMPN 2 MEJAYAN', 'RPL', '79', '86', '85', 'Y', 'Y', 'Y', '40', '0', '0', '0', '72.5', 'Y', 'CHANDRA7109@GMAIL.COM', 'PSB-16-2-145', '93a0488edf55be44124bfd4370ad9776', 'PSB-16-2-145.jpg'),
(37, 'LUTFY BAGUS PRASTYO', 'MADIUN', '2001-05-05', 'Laki-Laki', '0', 'ISLAM', 'AMINO', 'PRAPTINI', 'PANDANSARI', 'SWASTA', 'SWASTA', 'SMPN 03MEJAYAN', 'TO', '', '', '', 'N', 'N', 'N', '32', '', '', '', '', 'Y', '', 'PSB-16-2-37', 'f70caf1dacef63c58d4b6d52f79da840', 'kosong.jpg'),
(78, 'IRVAN FIRMANSYAH', 'MADIUN', '2001-05-14', 'Laki-Laki', '08813480286', 'ISLAM', 'IMAM SAFII', 'KUSRINI', 'DS.SUMBER SARI DK.PATRAN', 'PNS', 'PNS', 'SMP N 4 SARADAN', 'TO', '77', '85', '89', 'Y', 'Y', 'Y', '32', '0', '0', '0', '70.75', 'Y', '', 'PSB-16-2-78', 'f2537bbc59b2ced8d73db163ffda9d04', 'kosong.jpg'),
(76, 'RIKO WIBOWO', 'MADIUN', '2000-07-18', 'Laki-Laki', '085649100485', 'ISLAM', 'MARMIN', 'PAIKEM', 'KEBONAGUNG RT 13/RW 04', 'PETANI', 'IBU RUMAH TANGGA', 'SMP 4 MEJAYAN', 'TSM', '79.81', '86.90', '89.36', 'Y', 'Y', 'Y', '36', '0', '0', '0', '73.02', 'Y', '', 'PSB-16-2-76', 'ab891c8d0fc389e577f3893aeda73eeb', 'kosong.jpg'),
(77, 'NANANG SAPUTRO', 'MADIUN', '2000-10-16', 'Laki-Laki', '085746322581', 'ISLAM', 'SUHADI', 'SRIANI', 'DK.KARANG PAING  RT.15  RW.05 ,DS.DAERMOREJO ,KAB.MADIUN', 'BURUH TANI', 'RUMAH TANGGA', 'SMPN 4 MEJAYAN', 'TSM', '80.18', '88.09', '90.36', 'Y', 'Y', 'Y', '40', '0', '0', '0', '74.66', 'Y', '', 'PSB-16-2-77', 'f74fea40404655d627a2b47ebf3e3847', 'kosong.jpg'),
(166, 'RUDI SETIAWAN', 'PASURUAN', '1999-09-09', 'Laki-Laki', '082156767157', 'ISLAM', 'ALM.MISTARUDIN', 'SUNARSIH', 'DS.LEDOKAN RT-03RW-01', 'ALM', 'WIRASWASTA', 'SMPN 1 SARADAN', 'TSM', '77.20', '92.90', '93.36', 'Y', 'Y', 'Y', '20', '0', '0', '0', '70.87', 'Y', '', 'PSB-16-2-166', '186a2791086afd015ae27a4f3bf63297', 'kosong.jpg'),
(45, 'AGUS DWI WIDODO', 'MADIUN', '1999-08-10', 'Laki-Laki', '085649991414', 'ISLAM', 'PAIMUN', 'RASIYEM', 'DS SIDODADI RT08 RW 03', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TPHP', '74.5', '78', '79', 'Y', 'Y', 'Y', '44', '0', '0', '0', '68.88', 'Y', 'AGUSDWI.WIDODO12@GMAIL.COM', 'PSB-16-2-45', '4cdde25a6b5b4e6c7321f0fbe35d9787', 'PSB-16-2-45.jpg'),
(43, 'TEDY PRATAMA', 'BLITAR', '2000-07-01', '', '083845495441', '', 'WARDOYO', 'PITRAH', 'DS.SIDODADI RT.12 RW04, , -, -', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TO', '79', '88', '87', 'Y', 'Y', 'Y', '56', '0', '0', '0', '77.5', 'Y', '', 'PSB-16-2-43', '4a16256f7dff8de090a0960b454ac03e', 'PSB-16-2-43.jpg'),
(42, 'DASENTIYA FARAH MAHARANI', 'MADIUN', '2001-05-28', 'Perempuan', '085331193407', 'ISLAM', 'SUTIYO', 'UGIK SULISTYOWATI', 'JL. HAJI AGUS SALIM NO.27', 'MOLANG SAPI', 'WIRASWASTA', 'SMPN 2 MEJAYAN', 'TPHP', '72', '77', '79', 'N', 'N', 'N', '28', '0', '0', '0', '64', 'Y', '', 'PSB-16-2-42', '1c3b7e30a89b0688eb064017db9c6abd', 'PSB-16-2-42.jpg'),
(41, 'DELLA NOFITASARI', 'MADIUN', '2000-05-03', 'Perempuan', '08125161042', 'ISLAM', 'SAMIJAN', 'SARINAH', 'DS.KALIABU DSN. LEMAH IRENG RT.14 RW. 03 KEC. MEJAYAN KAB. MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 2MEJAYAN', 'RPL', '80', '80', '81', 'Y', 'Y', 'Y', '52', '0', '0', '0', '73.25', 'Y', '', 'PSB-16-2-41', '33b69458cc455f0d4d86abf3ebe066cd', 'PSB-16-2-41.jpg'),
(38, 'TEGUH FIRMANSYAH', 'MADIUN', '2000-07-19', 'Laki-Laki', '089514011547', 'ISLAM', 'IS NADI', 'SU HARTI', 'JL. DIENG DUSUN PORONG KEC MEJAYAN RT:13 RW:04', 'BURUH TANI', 'IBU RUMAH TANGGA', 'MTSN CARUBAN', 'TSM', '80', '81', '81', 'Y', 'Y', 'Y', '44', '0', '0', '0', '71.5', 'Y', '', 'PSB-16-2-38', 'd074487fe552a3252a025c10f8f44c9a', 'PSB-16-2-38.jpg'),
(40, 'IRFAN RAMADHAN', 'MADIUN', '2000-12-04', 'Laki-Laki', '0857326492154', 'ISLAM', 'SUGIYO', 'TATIK', 'KALIABU', 'SWASTA', 'IBU RUMAH TANGGA', 'SMP N 2 MEJAYAN', 'TSM', '78', '77', '78', 'Y', 'Y', 'Y', '40', '0', '0', '0', '68.25', 'Y', '', 'PSB-16-2-40', '9cc5dfed95cf27f9594a9b539a0ccce8', 'PSB-16-2-40.jpg'),
(62, 'AJI SUSANTO', 'MADIUN', '2000-02-26', 'Laki-Laki', '085790610149', 'ISLAM', 'SURATNO', 'DWI UTAMI', '', '', '', 'SMPN 1 BALEREJO', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-62', '85457914d48731788f44eb2705cf1990', 'kosong.jpg'),
(46, 'ARIZAL ERIANTO', 'MADIUN', '2001-07-02', 'Laki-Laki', '085331150922', 'ISLAM', 'MARDI', 'SUMIATI', 'DESA KEDUNGJATI RT 6 RW 2 KEC BALEREJO KAB MADIUN', 'BURUH TANI', 'BURUH TANI', 'MTSN KEDUNG JATI', 'TSM', '79', '78', '82', 'N', 'N', 'N', '48', '0', '0', '0', '71.75', 'N', '', 'PSB-16-2-46', 'cedbd688792dada69232a117e3a313b3', 'kosong.jpg'),
(52, 'DITA AYUNDA KHATULISTIWA', 'TEBANG KACANG', '2001-09-03', 'Perempuan', '085649183315', 'ISLAM', 'DIDIK MISJIANTO', 'ITA SURYANI', 'DS SUKOREJO KEC SARADAN KAB MADIUN', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 03 MEJAYAN', 'TPHP', '84.25', '84.41', '84.16', 'Y', 'Y', 'Y', '36', '0', '0', '0', '72.21', 'Y', '', 'PSB-16-2-52', '4923e8f9567baae0ca246f1d9bffe209', 'PSB-16-2-52.jpg'),
(49, 'SETYO HANDOKO RILOPAMBUDI', 'MADIUN', '0000-00-00', 'Laki-Laki', '085921956469', 'ISLAM', 'SURYADI', 'DALINA', '', '', '', 'MTSN KEDUNGJATI', 'TSM', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-49', 'ff60bb1d9ab133e07738ed216587fd33', 'kosong.jpg'),
(48, 'ARIF GUNADI', 'MADIUN', '2001-03-22', 'Laki-Laki', '081216411913', 'ISLAM', 'WAIMUN', 'MUJIATI', 'DS.TAWANGREJO KEC.GEMARANG KAB.MADIUN RT.46 RW.16', 'WIRAUSAHA', 'IBU RUMAH TANGGA', 'SMP NEGERI 1 GEMARANG', 'TO', '75', '83', '83', 'N', 'N', 'N', '0', '0', '0', '0', '60.25', 'Y', '', 'PSB-16-2-48', '67c4584bcb62ce8851eb26c2dea68cbf', 'PSB-16-2-48.jpg'),
(53, 'AJI PRASTIYO', 'MADIUN', '2001-02-20', 'Laki-Laki', '082301753749', 'ISLAM', 'SUKIDI', 'SUKINEM', 'DSN.SIMO TJ SARI,DS.SOGO,KEC.BALEREJO,KAB.MADIUN', 'PETANI', 'PETANI', 'MTSN KEDUNGJATI', 'TSM', '78', '79', '82', 'Y', 'Y', 'Y', '28', '0', '0', '0', '66.75', 'N', '', 'PSB-16-2-53', '55519774a8214d6b1afb561ef7ea0787', 'PSB-16-2-53.jpg'),
(50, 'PARAS AYU AMBARWATI', 'MAGETAN', '2000-09-08', 'Perempuan', '085649106371', 'ISLAM', 'SARMUN', 'PONIRAH', 'JALAN FLAMBOYAN NOMER 18 KRAJAN MEJAYAN', 'SWASTA', 'SWASTA', 'SMPN 03 MEJAYAN', 'TPHP', '83.5', '83', '83.25', 'Y', 'Y', 'Y', '32', '0', '0', '0', '70.44', 'Y', '', 'PSB-16-2-50', 'fd1333304c3eabbab5a3c11e169f1ca9', 'PSB-16-2-50.jpg'),
(54, 'SETYO HANDOKO RILOPAMBUDI', 'MADIUN', '2000-08-01', 'Laki-Laki', '085921956469', 'ISLAM', 'SURYADI', 'DALINA', 'DS.KEDUNGJATIKEC.BALEREJO.KAB.MADIUN', 'BURUH TANI', 'BURUH TANI', 'MTSN KEDUNGJATI', 'TSM', '78', '78', '80', 'Y', 'Y', 'Y', '32', '0', '0', '0', '67', 'Y', '', 'PSB-16-2-54', '27be98f308b7963ebb6e48957c2211ea', 'PSB-16-2-54.jpg'),
(56, 'GUNTUR SETYO NURCAHYO', 'MADIUN', '2000-03-12', 'Laki-Laki', '0', 'ISLAM', 'SUKIJAN', 'UMI SALAMAH', 'DS WONOAYU', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 03 MEJAYAN', 'TSM', '79', '87', '87', 'N', 'N', 'N', '48', '0', '0', '0', '63.25', 'N', '', 'PSB-16-2-56', 'c98ed5dbdea201f8ddb12b8c7503e76c', 'kosong.jpg'),
(171, 'MUHAMMAD DODIK EKA PRATAMA', 'MADIUN', '1999-09-05', 'Laki-Laki', '085708996341', 'ISLAM', 'SUPARDI', 'DARWATI', 'DUSUN PETUNG DSA PAJARAN KEC SARADAN KAB MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 01 SARADAN', 'TO', '3.43', '85.25', '85.58', 'Y', 'Y', 'Y', '32', '0', '0', '0', '51.57', 'Y', '', 'PSB-16-2-171', '96e827d8d90b3e6bd158809964428122', 'PSB-16-2-171.jpg'),
(66, 'SHESAR BAYU ARDHIANSAH', 'MADIUN', '2001-01-11', 'Laki-Laki', '081545974982', 'ISLAM', 'SUTARNO', 'JATI WINANGSIH', 'JL.A.YANI NO33', 'SOPIR', 'IBU RUMAH TANGGA', 'SMPN 3 MEJAYAN', 'TSM', '79', '79', '79', 'Y', 'Y', 'Y', '36', '0', '0', '0', '68.25', 'Y', '', 'PSB-16-2-66', 'b90f8be397866a40288dbbea569c72a3', 'PSB-16-2-66.jpg'),
(64, 'DEVIANA', 'MADIUN,15JANUARI2001', '0000-00-00', 'Perempuan', '0895337877503', 'ISLAM', 'SULISTYO WIDODO', 'TUTIK SUPARTI', '', '', '', 'SMPN2NGLAMES', 'TPHP', '0', '89.54', '92.00', 'Y', 'Y', 'Y', '44', '0', '0', '0', '56.39', 'Y', '', 'PSB-16-2-64', '88e23c75d2ab1c3394f6ce264c197bed', 'kosong.jpg'),
(61, 'AYU TRI WIDYASARI', 'MADIUN', '0000-00-00', 'Perempuan', '085736549453', 'ISLAM', 'PARJI', 'MARIYAM', 'DS.BULU RT;7 RW;1 KEC. PILANGKENCENG KAB.MADIUN', 'PETANI', 'PENGURUS RUMAH TANGGA', 'SMP NEGERI 2 PILANGKENCENG', 'TPHP', '84', '82.6', '84.16', 'Y', 'Y', 'Y', '32', '0', '0', '0', '70.69', 'Y', '', 'PSB-16-2-61', '3ac86fe522c2f844e4aee1a94348ad9a', 'PSB-16-2-61.jpg'),
(90, 'AZIZ DERBOWO', 'MADIUN', '2001-07-23', 'Laki-Laki', '08813156875', 'ISLAM', 'MAIMUN', 'MAMIK', 'KLUMUTAN RT19 RW03', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 02 SARADAN', 'TPHP', '78', '78', '79', 'Y', 'Y', 'Y', '32', '0', '0', '0', '66.75', 'Y', '', 'PSB-16-2-90', '64ffeb01498d64d728c0a170e0d2cbc8', 'PSB-16-2-90.jpg'),
(89, 'HERI SANTOSO', 'MADIUN', '1999-10-02', 'Laki-Laki', '0', 'ISLAM', 'NYONO', 'DAMINAH', 'KLUMUTAN RT 22 RW 03', 'PETANI', 'IBU RUMAH TANGGA', 'SMP 02 SARADAN', 'TPHP', '80.61', '76.83', '77.25', 'Y', 'Y', 'Y', '20', '0', '0', '0', '63.67', 'Y', '', 'PSB-16-2-89', '60c825495f081a67d1324a2d517381cb', 'PSB-16-2-89.jpg'),
(69, 'ALDO BASIWA PUTRA', 'MADIUN', '2001-08-15', 'Laki-Laki', '088805764877', 'ISLAM', 'ALM BAMBANG PUJIANTO', 'SRI WAHYUNI', 'DSN SAWAHAN DS SIDODADI', '-', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TSM', '79', '80', '79', 'Y', 'Y', 'Y', '28', '0', '0', '0', '66.5', 'N', '', 'PSB-16-2-69', 'c04503027ac325f4a2083d562e19d512', 'PSB-16-2-69.jpg'),
(135, 'OKKY WULANDARI', 'MADIUN', '2000-10-18', 'Laki-Laki', '085850648086', 'ISLAM', 'WAIDJO', 'MARMI', 'DS BLABAKAN KEC MEJAYAN', 'BURUH TANI', 'IBU RUMAH TANGGA', 'MTSN CARUBAN', 'RPL', '81', '83', '82', 'Y', 'Y', 'Y', '44', '0', '0', '0', '72.5', 'Y', '', 'PSB-16-2-135', 'bea016a99a18afd45c5d1cc6605fc7fb', 'PSB-16-2-135.jpg'),
(68, 'EVA AYU APRILIA', 'MADIUN', '2000-04-17', 'Perempuan', '085707311108', 'ISLAM', 'MOHCHAMAD CHODIRAN', 'SUPRAPTI', 'DESA SUMBERGANDU RT/RW :15/02 KEC.PILANGKENCENG KAB.MADIUN', 'BURUH TANI', 'WIRASWASTA', 'SMP NEGRI 2 PILANGKENCENG', 'RPL', '81.38', '83.91', '83.58', 'Y', 'Y', 'Y', '40', '0', '0', '0', '72.22', 'Y', '', 'PSB-16-2-68', '7d3d5f8947daa364feb7ae7f3fded1a9', 'PSB-16-2-68.jpg'),
(67, 'SILVIA OKTAVIANI', 'MADIUN', '2000-10-31', 'Perempuan', '085785748110', 'ISLAM', 'SURYADI', 'SAMINI', 'DS.SUMBERGANDU RT/RW 05/02 KEC.PILANGKENCENG KAB.MADIUN', 'PETANI', 'WIRASWASTA', 'SMPN 02 PILANGKENCENG', 'RPL', '84.43', '82.66', '84.50', 'Y', 'Y', 'Y', '48', '0', '0', '0', '74.9', 'Y', '', 'PSB-16-2-67', '252569b8f9021b80ad54ebabf3dca8c0', 'PSB-16-2-67.jpg'),
(71, 'HENGKI SETIOKO', '', '0000-00-00', 'Laki-Laki', '085726141842', 'ISLAM', 'SETU YIT', 'KAMINI', '', '', '', 'SMPN 2 BALEREJO', 'TO', '3.06', '3.03', '70.91', 'Y', 'Y', 'Y', '48', '0', '0', '0', '31.25', 'Y', '', 'PSB-16-2-71', 'e0e33a2091fb0289408d932a2739b732', 'kosong.jpg'),
(72, 'WISNU BERLIANTO', 'MADIUN', '2001-03-03', 'Laki-Laki', '08883435915', 'ISLAM', 'SUPARNO', 'MARMI', 'KRONGGAHAN JL.KOL MARHADI KEC.MEJAYAN KAB.MADIUN', 'KULIBANGUNAN', 'IBU RUMAH TANGGA', 'SMP NEGERI 2 MEJAYAN', 'TSM', '87', '80', '80', 'Y', 'Y', 'Y', '44', '0', '0', '0', '72.75', 'Y', 'WISNUBERLIANTO87@GMAIL.COM', 'PSB-16-2-72', 'c4bd4ad890efe1ff0e1fe5bc2e18ae21', 'PSB-16-2-72.jpg'),
(75, 'YUDHA PRAWIRA TIRTA', 'MADIUN', '2000-06-08', 'Laki-Laki', '081615718117', 'ISLAM', 'BASUKI', 'SULASTRI', 'DS,SUMBERBENDO RT24 RW 3, KEC,SARADAN', 'KEPALA SEKOLAH', 'SWASTA', 'MTSN AL-AMIN', 'TO', '80', '79', '81', 'Y', 'Y', 'Y', '28', '0', '0', '0', '67', 'Y', '', 'PSB-16-2-75', '21232f297a57a5a743894a0e4a801fc3', 'PSB-16-2-75.jpg'),
(74, 'MUNIF MARJUKI', 'MADIUN, 27', '2001-04-27', 'Laki-Laki', '085646109432', 'ISLAM', 'SAIMUN', 'MARSINI', '', '', '', 'SMPN 2 PILANGKENCENG', 'TSM', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-74', 'b961c8ab0ccd4bab2d29d4692b26ecfc', 'kosong.jpg'),
(80, 'ALIF HASAN AJI', 'MADIUN', '2001-01-27', 'Laki-Laki', '0', 'ISLAM', 'IMAM SUMARMUN', 'WIWIN', 'DS BENER DSN SIWALAN', 'PEGAWAI SWASTA', 'RUMAH TANGGA', 'SMP N 04 SARADAN', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'Y', '', 'PSB-16-2-80', 'a11b9535bfc478b78c2c280026e8c6e5', 'kosong.jpg'),
(94, 'LEO ANDIKA', 'MADIUN', '2001-06-17', 'Laki-Laki', '081330113095', 'ISLAM', 'DUKUT', 'RAHAYU', 'DS/DS TAWANG REJO', 'WIRASWASTA', 'RUMAH TANGGA', 'SMPN 1 GEMARANG', 'RPL', '82', '80', '81', 'Y', 'Y', 'Y', '40', '0', '0', '0', '70.75', 'Y', '', 'PSB-16-2-94', 'd6b425fc0054357c072a68cc027c3d08', 'PSB-16-2-94.jpg'),
(83, 'MUHAMMAD SHOLIKIN', 'MADIUN', '2000-03-11', 'Laki-Laki', '085730873786', 'ISLAM', 'SURAJI', 'MUJIATI', 'DK.MENGGUNG     DS.SUKOREJO     R.17/RW.05', 'PETANI', 'PETANI', 'SMPN 4 SARADAN', 'TSM', '78.81', '85.54', '88.45', 'Y', 'Y', 'Y', '44', '0', '0', '0', '74.2', 'Y', '', 'PSB-16-2-83', '02d0df01efdc6b86b54d69495d22d71b', 'PSB-16-2-83.jpg'),
(82, 'ANGGA SAPUTRA', 'MADIUN', '2001-05-29', 'Laki-Laki', '085607390636', 'ISLAM', 'PURNOMO', 'JAMINEM', 'DK KENEP DS SUMBERSARI RT 21 RW 05 KEC SARADAN KAB MADIUN', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 4 SARADAN', 'TSM', '79', '80', '83', 'Y', 'Y', 'Y', '36', '0', '0', '0', '69.5', 'Y', '', 'PSB-16-2-82', '38e49890e59bb4ff4c7a7cea47cb7925', 'PSB-16-2-82.jpg'),
(85, 'AJI SUSANTO', 'MADIUN', '2000-02-26', 'Laki-Laki', '0', 'ISLAM', 'SURATNO', 'DWI UTAMI', 'DS BALEREJO RT 03 RW 01 KEC BALEREJO KAB MADIUN', 'BURUH TANI', 'BURUH TANI', 'SMPN 1 BALEREJO', 'TO', '', '', '', 'N', 'N', 'N', '28', '', '', '', '', 'N', '', 'PSB-16-2-85', 'bb11f5bc60dd80bb024c307fcb06ed8e', 'kosong.jpg'),
(86, 'GHOFIRUL DWI KURNIAWAN', 'MADIUN', '2001-06-04', 'Laki-Laki', '08819218982', 'ISLAM', 'IKWANTO', 'WARTI', 'DS TULUNG DK GAPLOK', 'SWASTA', 'PEDAGANG', 'SMPN 4 SARADAN', 'TSM', '77.75', '78.75', '82.5', 'Y', 'Y', 'Y', '28', '0', '0', '0', '66.75', 'N', '', 'PSB-16-2-86', 'f828e2ebe7066a484e75f8c3a08a35d4', 'PSB-16-2-86.jpg'),
(87, 'DICKY EKA PUSPITA', 'MADIUN', '2001-06-23', 'Laki-Laki', '0', 'ISLAM', 'SUNARTO', 'SRIHAR TATIK', 'DS SIDOREJO RT 20 RW 06', 'PNS', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TO', '3.13', '79.3', '79.58', 'Y', 'Y', 'Y', '28', '0', '0', '0', '47.5', 'Y', '', 'PSB-16-2-87', '99c676bfe74d44ab0d2fb6d396552e92', 'PSB-16-2-87.jpg'),
(92, 'RIYAN SAPUTRO', 'MADIUN', '1999-05-29', 'Laki-Laki', '081553390612', 'ISLAM', 'SAPARI', 'PUNIYAH', 'DS TAWANGREJO KEC GEMARANG', 'BURUH TANI', 'BURUH TANI', 'SMP NEGERI 1 GEMARANG', 'TSM', '86', '83', '82', 'Y', 'Y', 'Y', '0', '0', '0', '0', '62.75', 'N', '', 'PSB-16-2-92', '2fb7b5443ba18a88629afed2639eaf3e', 'PSB-16-2-92.jpg'),
(91, 'MIFTAKUL HUDA', 'MADIUN', '2000-11-18', 'Laki-Laki', '081553689369', 'ISLAM', 'KHOLIK', 'TITIK', 'KLUMUTAN RT 22 RW 03', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 2SARADAN', 'TPHP', '81.90', '76.83', '76.83', 'Y', 'Y', 'Y', '24', '0', '0', '0', '64.89', 'Y', '', 'PSB-16-2-91', '8362ea13be65434e22eef5f5cb66e54d', 'PSB-16-2-91.jpg'),
(93, 'JASTIN ARWANDAKA', 'MADIUN', '2001-06-24', 'Laki-Laki', '081559952100', 'ISLAM', 'SUWARDI', 'UMI FATONAH', 'DSN.JONGGOL DS.BATOK KEC.GEMARANG', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 1 GEMARANG', 'RPL', '91', '83', '90', 'Y', 'Y', 'Y', '44', '0', '0', '0', '77', 'Y', '', 'PSB-16-2-93', 'abbc0670f87175adbe51e90f85e2e541', 'PSB-16-2-93.jpg'),
(96, 'LINDA AGUSTIN', 'MADIUN', '2000-08-15', 'Perempuan', '082336751944', 'ISLAM', 'DJAIDI', 'SURATMI ATI', 'DS.KEBONAGUNG DSN.DUKUHAN RT 9 RW 3', '-', 'WIRA SWASTA', 'SMP NEGERI 2 MEJAYAN', 'RPL', '82.43', '83', '84', 'Y', 'Y', 'Y', '36', '0', '0', '0', '71.36', 'Y', '', 'PSB-16-2-96', 'a6464436807682186bfef16517e4485a', 'PSB-16-2-.jpg'),
(95, 'JENNI ANGGRAINI', 'MADIUN', '2001-01-12', 'Perempuan', '0', 'ISLAM', 'WITOYO', 'SRI SUDARTI', 'JL.PRAWIRODIPURAN NO.41 MEJAYAN', '-', 'IBU RUMAH TANGGA', 'SMPN 02 MEJAYAN', 'TPHP', '82.18', '85.66', '83.67', 'Y', 'Y', 'Y', '52', '0', '0', '0', '75.88', 'Y', '', 'PSB-16-2-95', 'd1794fdcf25a0009b73464f6a1c708dc', 'PSB-16-2-95.jpg'),
(98, 'PUTRI AMINDARSIH', 'MADIUN', '2001-07-20', 'Perempuan', '085232574756', 'ISLAM', 'SUDARIYANTO', 'SUGIARTI', 'DESA:KENONGOREJO DUSUN;KEBONDUREN RT :33 RW;06', 'BURUH TANI', 'PENGURUS RUMAH TANGGA', 'SMPN 2 PILANGKENCENG', 'TPHP', '80', '82', '82', 'Y', 'Y', 'Y', '32', '0', '0', '0', '69', 'Y', 'PUTRI AMINDARSIH@YAHOO.COM', 'PSB-16-2-98', '4093fed663717c843bea100d17fb67c8', 'PSB-16-2-98.jpg'),
(97, 'REGITA PRAMESTI SUTRISNO', 'PURWAKARTA', '2002-02-11', 'Perempuan', '081234131570', 'ISLAM', 'JOKO SUTRISNO', 'ATIK SRI MULYANI', 'DESA SIDODADI RT 11 RW 04', 'KARYAWAN SWASTA', 'GURU', 'SMP NEGERI 2 MEJAYAN', 'RPL', '80.31', '80', '81', 'Y', 'Y', 'Y', '40', '0', '0', '0', '70.33', 'Y', '', 'PSB-16-2-97', 'ed0cf8b81f92f089a134e3b90f38f7de', 'PSB-16-2-97.jpg'),
(101, 'NUR VENDY KURNIAWAN', 'MADIUN', '2000-11-16', 'Laki-Laki', '085234566030', 'ISLAM', 'ALM.SUWITO', 'SULAH', 'DSN.PATIHAN DS.DARMOREJO KEC.MEJAYAN KAB.MADIUN', '-', 'TANI', 'SMPN 01 MEJAYAN', 'TO', '3.46', '3.51', '80.75', 'Y', 'Y', 'Y', '32', '0', '0', '0', '29.93', 'Y', '', 'PSB-16-2-101', 'a3a3a2de83abf5fe34c8bce1a06633e3', 'PSB-16-2-101.jpg'),
(99, 'SHOKHI ABDULMAJID', 'MADIUN', '1998-12-21', 'Laki-Laki', '085732670993', 'ISLAM', 'SUPARMAN', 'SITI KALIMAH', 'DS.KALIABU KEC.MEJAYAN KAB.MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'MTS NU MOJOSARI', 'TO', '', '', '', 'N', 'N', 'N', '40', '', '', '', '10', 'Y', '', 'PSB-16-2-99', '70f31ce050a4bc7e6fc19740778d4af4', 'kosong.jpg'),
(102, 'MUHAMMAD ARIEF WIBOWO', 'MADIUN', '2001-05-16', 'Laki-Laki', '082245392197', 'ISLAM', 'SUHARSOYO', 'NURWATI S.PD', 'DESA SIDOMULYO RT/RW 05/02 KEC. WONOASRI KAB. MADIUN', 'WIRASWASTA', 'GURU', 'SMPN 01 MEJAYAN', 'TPHP', '86', '87', '86', 'Y', 'Y', 'Y', '48', '0', '0', '0', '76.75', 'Y', '', 'PSB-16-2-102', '0b1d3c487efdc34e784b2e7201903f42', 'PSB-16-2-102.jpg'),
(103, 'RIDHO PUTRA RAMADHAN', 'MADIUN', '2000-12-18', 'Laki-Laki', '082217074317', 'ISLAM', 'SUYONO', 'TARMINI', 'DSN.PELEM,DS.PURWOSARI,KEC.WONOASRI,KAB.MADIUN', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMP NEGERI 1 MEJAYAN', 'TO', '87', '89', '88', 'N', 'N', 'N', '0', '0', '0', '0', '66', 'Y', '', 'PSB-16-2-103', '000d2d5a78bdfd30d17091469cb54dc7', 'PSB-16-2-103.jpg'),
(106, 'ELYSSANDRO MAHARSI LINTANG RAHINO', 'MADIUN', '2000-07-08', 'Laki-Laki', '082231335014', 'KRISTEN', 'DANUR WINDO', 'SUWARNI', 'DS.  SUKOREJO RT02/RW01, KEC. SARADAN, KAB. MADIUN', 'SWASTA', 'WIRASWASTA', 'SMPN 2 MEJAYAN', 'RPL', '79', '81', '82', 'Y', 'Y', 'Y', '52', '0', '0', '0', '73.5', 'Y', '', 'PSB-16-2-106', '29e1feb2030193b9b5b1d0d0314cce9a', 'PSB-16-2-106.jpg'),
(104, 'WISNU WIDODO', 'MADIUN', '0000-00-00', 'Laki-Laki', '081515117024', 'ISLAM', 'LAMAN', 'SEKARSINI', '', '', '', 'SMP N 4 MEJAYAN', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'Y', '', 'PSB-16-2-104', '8f9e94953a5951ecad627074c7aa64f3', 'kosong.jpg'),
(105, 'TIO NUR FAIZAL', 'MADIUN', '2001-04-02', 'Laki-Laki', '085784274733', 'ISLAM', 'PARDI', 'NUR MIYANTI', 'DS.KLECOREJO RT.12 /RW.4 KEC.MEJAYAN KAB.MADIUN', 'BURUH', 'BURUH', 'SMP N 4 MEJAYAN', 'TO', '85', '85', '81', 'Y', 'Y', 'Y', '40', '0', '0', '0', '72.75', 'Y', '', 'PSB-16-2-105', '7df8a587d700683281cf4a601580d45d', 'PSB-16-2-105.jpg'),
(153, 'SUMANTO', 'MADIUN,21 DESEMBER 2000', '0000-00-00', 'Laki-Laki', '085726455317', 'ISLAM', 'RAKIYO', 'MAINAH', '', '', '', 'SMPN 2 BALEREJO', 'TPHP', '73.90', '73.54', '77.09', 'Y', 'Y', 'Y', '16', '0', '0', '0', '60.13', 'Y', '', 'PSB-16-2-153', '21232f297a57a5a743894a0e4a801fc3', 'kosong.jpg'),
(108, 'WISNU WIDODO', 'MADIUN', '2000-02-22', 'Laki-Laki', '081515117024', 'ISLAM', 'LAMAN', 'SEKARSINI', 'DS.KLECOREJO RT.02/RW.01,KAB MADIUN,KEC.MEJAYAN', 'BURUH TANI', 'BURUH TANI', 'SMPN 4 MEJAYAN', 'TSM', '93', '77', '77', 'Y', 'Y', 'Y', '56', '0', '0', '0', '75.75', 'Y', '', 'PSB-16-2-108', '68fb178c1808467f0d1065cc485e4168', 'PSB-16-2-108.jpg'),
(113, 'DENI SETIAWAN', 'MADIUN', '2000-08-08', 'Laki-Laki', '085755949710', 'ISLAM', 'PARMAN', 'SADEMI', 'WONOASRI RT 05 RW 09', 'KULI BANGGUN', 'IBU RUMAH TANGGA', 'SMP 1 WONOASRI', 'TO', '84', '83', '84', 'N', 'N', 'N', '32', '0', '0', '0', '70.75', 'Y', 'SETIAWANDENI993@YAHOO.CO.UK', 'PSB-16-2-113', '4dccd35368e1ab0808bf760e18789c5e', 'PSB-16-2-113.jpg'),
(112, 'ARDIANSAH', 'MADIUN', '2000-06-07', 'Laki-Laki', '085755949710', 'ISLAM', 'SARIMUN', 'WARJANI', 'WONOASRI RT06 RW03 MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMP 01 WONOASRI', 'TO', '82', '82', '84', 'N', 'N', 'N', '36', '0', '0', '0', '71', 'Y', '-', 'PSB-16-2-112', 'fff9b2400f5db3441fe3f39593aa8f86', 'PSB-16-2-112.jpg'),
(114, 'ADI CHAYONO', 'PASIR,3 FEBRUARI 2001', '2001-02-02', 'Laki-Laki', '081212925355', 'ISLAM', 'SUPARMAN', 'BAINUNG KUSNI', 'DS.SUKOREJO RT 11, RW 03', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 01 MEJAYAN', 'TO', '85', '86', '88', 'N', 'N', 'N', '0', '0', '0', '0', '64.75', 'Y', '', 'PSB-16-2-114', '8244512cc5e924b45907fd49f2b20887', 'PSB-16-2-114.jpg'),
(172, 'GANANG IKA FEBRIYAN', 'MADIUN', '2000-06-29', 'Laki-Laki', '085732701812', 'ISLAM', 'SUMARSONO', 'SUGIATI', 'KENONGOREJO', 'PETANI', 'PETANI', 'SMPN 2 PILANGKENCENG', 'TPHP', '86.6', '78.45', '88.36', 'Y', 'Y', 'Y', '0', '0', '0', '0', '63.35', 'Y', '', 'PSB-16-2-172', '057484cd23b370836a35b924385f8607', 'PSB-16-2-172.jpg'),
(117, 'ABDUL MUNAHAR', 'MADIUN', '2001-06-21', 'Laki-Laki', '0', 'ISLAM', 'SUYATIN', 'WARTI', 'DS NGADIREJO RT 9 RW 04', 'SWASTA', 'SWASTA', 'SMP N 1 WONOASRI', 'TO', '3.34', '84.5', '85.75', 'Y', 'Y', 'Y', '36', '0', '0', '0', '52.4', 'Y', '', 'PSB-16-2-117', '20f54ed96f5572875dd5c1836831788d', 'PSB-16-2-117.jpg'),
(73, 'ALDI GILANG FIRMANSYAH', 'CARUBAN 25 MARET 2001', '0000-00-00', 'Laki-Laki', '081233067320', 'ISLAM', 'SURATIN', 'SURNANI', '', '', '', 'SMPN 43 SURABAYA', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'Y', '', 'PSB-16-2-73', 'e9cacdedae3193eefe97f5a7a37c6768', 'kosong.jpg'),
(118, 'FICTORIA IQBAL YUNANTA', 'MADIUN', '2001-02-11', 'Laki-Laki', '083854563286', 'ISLAM', 'SUPARNO', 'SULIKAH', 'DS SIDOMULYO RT.07 RW.02 KEC WONOASRI', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN O1 WONOASRI', 'TSM', '85', '85', '85', 'Y', 'Y', 'Y', '52', '0', '0', '0', '76.75', 'Y', '', 'PSB-16-2-118', '58400c72d152cf6d521f6fb1963e265c', 'PSB-16-2-118.jpg'),
(119, 'WAHYU FERDIANTO', 'SEMARANG', '2001-02-21', 'Laki-Laki', '081914826116', 'ISLAM', 'MASHADI', 'SURATUN', 'DS.SIDOMULYO 06\\02 KEC. WONOASRI KAB MADIUN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 01 WONOASRI', 'TSM', '81.93', '82', '84.08', 'Y', 'Y', 'Y', '52', '0', '0', '0', '75', 'Y', '', 'PSB-16-2-119', 'ca2d51fb224cd8320bd0420d514b0a02', 'PSB-16-2-119.jpg'),
(120, 'ADI WENA ARMANDA PUTRA', 'MADIUN', '2001-04-28', 'Laki-Laki', '081556779202', 'ISLAM', 'SISWOYO', 'PURWATIASIH', 'DS NGADIREJO RT 10 RW 04 KEC WONOASRI KAB MADIUN', 'WIRASWASTA', 'WIRASWASTA', 'SMPN 1 WONOASRI', 'TO', '83.83', '83.91', '83.83', 'Y', 'Y', 'Y', '40', '0', '0', '0', '72.89', 'Y', '', 'PSB-16-2-120', '64157456dadb80767abeff738b6a04f1', 'PSB-16-2-120.jpg'),
(150, 'RHENALDI PRIHAT SUKOCO', 'MADIUN', '2000-07-23', 'Laki-Laki', '085230640535', 'ISLAM', 'SUKOCO', 'PARTIYAH', 'DESA KRONGGAHAN ,KECAMATAN MEJAYAN ,KABUPATEN MADIUN RT:16 RW:05', 'BURUH PABRIK', 'PENJUAL', 'SMPN 01 MEJAYAN', 'TPHP', '84', '86', '86', 'Y', 'Y', 'Y', '48', '0', '0', '0', '76', 'Y', '', 'PSB-16-2-150', 'a753d8901f1475a8f3a2877941aa60d0', 'PSB-16-2-150.jpg'),
(122, 'RIDHO SANJANI', 'MADIUN', '2000-11-21', 'Laki-Laki', '085853805900', 'ISLAM', 'SUMONO', 'NANING', 'DS.KLUMUTAN.SUMBERAN.RT/RW.22/03 KEC.SARADAN KAB.MADIUN', 'PETANI', 'PETANI', 'SMPN 2 SARADAN', 'TSM', '83', '80', '80', 'Y', 'Y', 'Y', '28', '0', '0', '0', '67.75', 'Y', '', 'PSB-16-2-122', '01dc0a767e30e9245603e923674177b2', 'PSB-16-2-122.jpg'),
(121, 'ROHMAD NUR ADITIA', 'MADIUN', '2000-12-21', 'Laki-Laki', '08819180529', 'ISLAM', 'JUMADI', 'DAMIATI', 'DS.SUMBER BENING DSN.KALIBENING RT4/RW2', 'BURUH TANI', 'IBU RUMAH TANGGA', 'SMPN 01 WONOASRI', 'TSM', '91', '83', '83', 'Y', 'Y', 'Y', '52', '0', '0', '0', '77.25', 'Y', '', 'PSB-16-2-121', '2dc6d188358c43c8e9fb380fc28fac30', 'PSB-16-2-121.jpg'),
(124, 'NURI DEFRI PRASTYO', 'MADIUN', '2000-12-20', 'Laki-Laki', '085853805900', 'ISLAM', 'SUWITO', 'SARTINI', 'DS KLUMUTAN RT=15 RW=2', 'SWASTA', 'BURUH TANI', 'SMPN 2 SARADAN', 'TPHP', '82', '78', '78', 'Y', 'Y', 'Y', '28', '0', '0', '0', '66.5', 'Y', '', 'PSB-16-2-124', 'a06ce8646dfe843466bdcf025963bd23', 'PSB-16-2-124.jpg'),
(123, 'FATAN AZIZ', 'MADIUN', '2001-04-01', 'Laki-Laki', '085730416373', 'ISLAM', 'PARDIMAN', 'SUMINI', 'DS.NGEPEH', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 2 SARADAN', 'TSM', '80.52', '76.83', '76.83', 'Y', 'Y', 'Y', '28', '0', '0', '0', '65.55', 'N', '', 'PSB-16-2-123', 'da3e67da391bdf1cc5ac59e45fee6783', 'PSB-16-2-123.jpg'),
(39, 'AMIEN WIDARYANTO', 'MADIUN', '2000-06-04', 'Laki-Laki', '082335050079', 'ISLAM', 'SUWARSONO', 'ALM.NUNUK MUHARI', 'DS.DARMOREJO RT.10 RW.03 KEC.MEJAYAN KAB.MADIUN', 'BURUH TANI', '-', 'SMP NEGERI 2 MEJAYAN', 'RPL', '80.7', '80.4', '82.0', 'Y', 'Y', 'Y', '36', '0', '0', '0', '69.78', 'Y', '', 'PSB-16-2-39', '6817e6d5870815e8c6dc3dd69caac2bc', 'PSB-16-2-39.jpg'),
(129, 'YOGA DWI PRADANA', 'MADIUN', '2000-05-11', 'Laki-Laki', '082330258902', 'ISLAM', 'TOPO HARIADI', 'SULASTRI', '', '', '', 'SMPN 2 MEJAYAN', 'TO', '84', '84', '85', 'Y', 'Y', 'Y', '44', '0', '0', '0', '74.25', 'Y', 'DWIPRADANAYOGA@GMAIL.COM', 'PSB-16-2-129', '807659cd883fc0a63f6ce615893b3558', 'kosong.jpg'),
(126, 'ANDRI SUNARYO', 'MADIUN', '1999-11-29', 'Laki-Laki', '085336552934', 'ISLAM', 'SUWARNO', 'TAMPI', 'DARMOREJO  RT:05 RW:02 KEC.MEJAYAN KAB:MADIUN', 'PETANI', 'PETANI', 'SMP NEGERI 2 MEJAYAN', 'TSM', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-126', '2934a42444a21c8a49d3502aac0b07b6', 'kosong.jpg'),
(128, 'ANANTA DIKA PRATAMA', 'MADIUN', '2000-09-20', 'Laki-Laki', '083845400976', 'ISLAM', 'SUGIONO', 'WAHYUNINGSIH', 'DS.KALIABU,DSN.TEMPURAN,KEC.MEJAYAN,KAB.MADIUN', 'BURUH TANI', '-', 'SMP NEGERI 2 MEJAYAN', 'TSM', '81', '82', '84', 'N', 'N', 'N', '0', '0', '0', '0', '61.75', 'N', '', 'PSB-16-2-128', 'a185bee63d9929c1561e8f21ab653aa8', 'kosong.jpg'),
(127, 'ALGA ARDIAN DWI ANTORO', 'MADIUN', '2000-06-18', 'Laki-Laki', '085736352919', 'ISLAM', 'SUWANDI', 'SULASMININGSIH', 'DK.PELEM, DS.PURWOSARI, RT13, RW 04, KECAMATAN WONOASRI', 'WIRASWASTA', 'WIRASWASTA', 'SMPN 03 MEJAYAN', 'RPL', '79', '79', '81', 'Y', 'Y', 'Y', '48', '0', '0', '0', '71.75', 'Y', 'ALGA4RDIAN1806', 'PSB-16-2-127', 'bdd5acaea22cfede5e6601fc7b70ce00', 'PSB-16-2-127.jpg'),
(131, 'EKO SULISTIYONO', 'MADIUN', '2001-02-20', 'Laki-Laki', '085231035095', 'ISLAM', 'SUYONO', 'ENDANG SULIYAH', '', '', '', 'SMPN 2 BALEREJO', 'TSM', '80.90', '81.61', '72.54', 'Y', 'Y', 'Y', '48', '0', '0', '0', '70.76', 'Y', '', 'PSB-16-2-131', '34385cd5d56aecca73dbbae11cbb9ed6', 'kosong.jpg'),
(130, 'IRFAN JIWAS TRIYA SABGIRINDA', 'MADIUN', '2001-02-24', 'Laki-Laki', '082330258902', 'ISLAM', 'SOLIKIN', 'DJANJIATI', '', '', '', 'SMP N 02 MEJAYAN', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'Y', 'IRFANJIWAS@YAHOO.COM', 'PSB-16-2-130', '05d9e6f8004416c4e38b6e3ebf20d230', 'kosong.jpg'),
(134, 'DIMAS PRIYANA PUTRA', 'MADIUN 01 01 2002', '2002-01-01', 'Laki-Laki', '081331399032', 'ISLAM', 'SIMUN', 'SUPRIYANI', 'JL.KENARI NO 44 RT 23 RW 06 DESA MRAU NGAMPEL KCM.MEJAYAN', 'SOPIR', 'IBU RUMAH TANGGA', 'SMPN 3 MEJAYAN', 'TSM', '78.70', '86.09', '86.36', 'Y', 'Y', 'Y', '52', '0', '0', '0', '75.79', 'Y', '', 'PSB-16-2-134', '3861b1965e74a1dd55bf80fc69ab06fc', 'PSB-16-2-134.jpg'),
(133, 'ERWIN PUTRA PRATAMA', 'MADIUN', '2000-09-16', 'Laki-Laki', '085230669997', 'ISLAM', 'RAKIMUN', 'ALM.TARMINI', 'JL.TAMAN ARUM/KEL.BANGUNSARI/KEC.MEJAYAN', 'BURUH', '-', 'SMPN 3 MEJAYAN', 'TSM', '81', '80', '81', 'Y', 'Y', 'Y', '44', '0', '0', '0', '71.5', 'Y', '', 'PSB-16-2-133', 'a0b671477c1c11ba16a71122400774ce', 'kosong.jpg'),
(141, 'MICKO YUDHATAMA', 'BLITAR', '2000-06-25', 'Laki-Laki', '085735339719', 'ISLAM', 'LAMIRANTO', 'YETI', 'DSN.GENDONG, DS.SIDOREJO , KEC.SARADAN, KAB.MADIUN', 'PEDAGANG', 'IBU RUMAH TANGGA', 'SMPN 2 SARADAN', 'TSM', '81.88', '79.25', '79.00', 'Y', 'Y', 'Y', '40', '0', '0', '0', '70.03', 'Y', '', 'PSB-16-2-141', '1151fea09ee80e53d49dcfed56f4787f', 'PSB-16-2-141.jpg'),
(144, 'NIRMA ICHA FEBIANNA', 'MADIUN', '2001-02-25', 'Perempuan', '085785866647', 'ISLAM', 'MARIADI', 'SUDARNI', 'JL.KENANGA DSN.SUMBERJO DS.KALIABU KEC. MEJAYAN KAB.MADIUN', 'PETANI', 'IBU RUMAH TANGGA', 'SMP N 02 MEJAYAN', 'RPL', '80', '78', '79', 'Y', 'Y', 'Y', '40', '0', '0', '0', '69.25', 'Y', 'NIRMAICHA25@GMAIL.COM', 'PSB-16-2-144', 'd15d8c0ab4cbbf923d0b97d29d811890', 'PSB-16-2-144.jpg'),
(143, 'IMANIA INTAN FIDUNYA', 'MADIUN', '2000-12-27', 'Perempuan', '085645745407', 'ISLAM', 'KASIYONO', 'ASIH MINARTI', 'JL. KOL. MAHARDI 22, MEJAYAN', 'SWASTA', '-', 'SMPN 2 MEJAYAN', 'TPHP', '78.72', '79.66', '79.5', 'Y', 'Y', 'Y', '32', '0', '0', '0', '67.47', 'Y', '', 'PSB-16-2-143', 'fa734614164a72f724389b75a25a60bc', 'PSB-16-2-143.jpg'),
(125, 'ANJAS NUR MAHMUDI', 'MADIUN', '2000-08-19', 'Laki-Laki', '085732400341', 'ISLAM', 'DARMINTO', 'SUPINI', 'SIDOREJO', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'SMPN 2 SARADAN', 'TSM', '83', '83', '84', 'Y', 'Y', 'Y', '28', '0', '0', '0', '69.5', 'Y', '', 'PSB-16-2-125', '1b0cb414b90aff4f0b9fc61257b53eb6', 'PSB-16-2-125.jpg'),
(111, 'ROHANA FEBRIANTI', 'MADIUN', '2001-02-10', 'Perempuan', '085655615509', 'ISLAM', 'SARIKUN', 'TANEM', 'DS.KALIABU DK.LEMAH IRENG RT.14 RW.03', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'RPL', '80.00', '80.00', '80.17', 'Y', 'Y', 'Y', '36', '0', '0', '0', '69.04', 'Y', '', 'PSB-16-2-111', 'cbc5674d8ec9dcb8a7ff08e15eaf66eb', 'PSB-16-2-111.jpg'),
(55, 'YUSUF DEGA PRATAMA', 'MADIUN', '1999-07-11', 'Laki-Laki', '085746328523', 'ISLAM', 'JASIMIN', 'KASMIATUN', 'DSN TANJUNG SARI DS SOGO KEC BALEREJO', 'BURUH TANI', 'BURUH TANI', 'MTSN KEDUNGJATI', 'RPL', '80', '78', '82', 'Y', 'Y', 'Y', '56', '0', '0', '0', '74', 'Y', '', 'PSB-16-2-55', '88612c1fa0208ba5971d3f7cb52852a9', 'PSB-16-2-55.jpg'),
(151, 'ALWIN DESTIYANTO', 'MADIUN', '2000-12-16', 'Laki-Laki', '085646101969', 'ISLAM', 'SUPONO', 'SANI', '', '', '', 'SMPN 1 MEJAYAN', 'TPHP', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'N', '', 'PSB-16-2-151', '6a6854418b002715c4e777f3afff38f5', 'kosong.jpg'),
(147, 'AJI SUSANTO', 'MADIUN', '2000-02-26', 'Laki-Laki', '085790610149', 'ISLAM', 'SURATNO', 'DWI UTAMI', 'DS BALEREJO, RT 03 RW 01 KEC . BALEREJO KAB.MADIUN', 'BURUH TANI', 'BURUH TANI', 'SMPN 01 BALEREJO', 'TO', '', '', '', 'N', 'N', 'N', '0', '', '', '', '', 'Y', '', 'PSB-16-2-147', 'b1897700342ace1a6e52824a8f529b4c', 'kosong.jpg'),
(154, 'TEGUH WIBOWO', 'MADIUN', '2001-03-09', 'Laki-Laki', '085606213521', 'ISLAM', 'KASEMAN', 'SUNDARI', '', '', '', 'SMPN2BALERJO', 'TSM', '87.20', '73.38', '75.00', 'Y', 'Y', 'Y', '32', '0', '0', '0', '66.9', 'N', '', 'PSB-16-2-154', '37c19edca1e0481157539d08980b5ed8', 'kosong.jpg'),
(152, 'ARI PRASTIYO', 'SURABAYA', '2000-06-12', 'Laki-Laki', '082245068490', 'ISLAM', 'SUJARNO', 'SUPIAH', 'DSN.NGUKUIRAN DS.TAWANGREJO KEC.GEMARANG KAB.MADIUN RT/RW : 01/01', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 01 MEJAYAN', 'RPL', '85.00', '86.50', '87.00', 'Y', 'Y', 'Y', '52', '0', '0', '0', '77.63', 'Y', '', 'PSB-16-2-152', '0eb3c58b24de285d07859180167db216', 'PSB-16-2-152.jpg'),
(155, 'MUHAMMAD MUQTI WIBOWO', 'MADIUN', '2016-05-16', 'Laki-Laki', '082337004177', 'ISLAM', 'SUHARSOYO', 'NURWATI S.PD', 'SIDOMULYO 05/02 KEC. WONOASRI KAB. MADIUN', 'WIRASWASTA', 'GURU', 'SMPN 1 WONOASRI', 'TO', '82', '82', '84', 'Y', 'Y', 'Y', '28', '0', '0', '0', '69', 'Y', '', 'PSB-16-2-155', 'abbd8739713566f8f5d256cef5064155', 'PSB-16-2-155.jpg'),
(157, 'DANANG HARIYADI', 'MADIUN', '2000-01-30', 'Laki-Laki', '085708811016', 'ISLAM', 'TUKIMIN', 'PAINEM', 'SIDODADI', 'TUKIMIN', 'PAINEM', 'SMPN2MEJAYAN', 'TSM', '80', '79', '79', 'Y', 'Y', 'Y', '40', '0', '0', '0', '69.5', 'Y', '', 'PSB-16-2-157', 'fcc37172e1d076747cdff0e59e618aed', 'kosong.jpg'),
(156, 'ANDIK PRASETYO', 'MADIUN', '2001-08-11', 'Laki-Laki', '081914814978', 'ISLAM', 'SABARYANTO', 'SANI', 'PLUMPUNGREJO RT 10 RW 01 KEC WONOASRI KAB MADIUN', 'PETANI', 'PETANI', 'SMPN 1 WONOASRI', 'TSM', '82.31', '82.75', '84.6', 'Y', 'Y', 'Y', '36', '0', '0', '0', '71.42', 'Y', '', 'PSB-16-2-156', '215792f221cb857bf1abd29f83f5e9ff', 'PSB-16-2-156.jpg'),
(158, 'EDI HERMAWAN', 'MADIUN', '2000-03-08', 'Laki-Laki', '085686799544', 'ISLAM', 'WARJI', 'SUKINAH', 'DS.DURENAN DSN.DASMALANG KEC.GEMARANG', 'PETANI', 'PETANI', 'SMPN 01 ATAP', 'TSM', '89', '88', '90', 'N', 'N', 'N', '0', '0', '0', '0', '66.75', 'N', '', 'PSB-16-2-158', '614ee02f9bfc96f97674c9cabb231eb2', 'PSB-16-2-158.jpg'),
(159, 'AZIZ DERBOWO', 'MADIUN', '2001-07-23', 'Laki-Laki', '08813156875', 'ISLAM', 'MAIMUN', 'MAMIK', 'KLUMUTAN RT19 RW 03', 'PETANI', 'IBU RUMAH TANGGA', 'SMP2SARADAN', 'TPHP', '80', '83', '78', 'N', 'N', 'N', '0', '0', '0', '0', '60.25', 'N', '', 'PSB-16-2-159', '365f34c3c0ef5a0f4dec74096256f469', 'kosong.jpg'),
(160, 'FITRI AYU NINGSIA SUSANTI', 'MADIUN', '2001-01-01', 'Perempuan', '+6285645820481', 'ISLAM', 'SUSANTO', 'ALM.PANIYEM', '', '', '', 'SMP NEGERI 4SARADAN', 'RPL', '86.75', '86.54', '81.27', 'Y', 'Y', 'Y', '24', '0', '0', '0', '69.64', 'Y', '', 'PSB-16-2-160', '21232f297a57a5a743894a0e4a801fc3', 'kosong.jpg'),
(180, 'DIKI WAHYU PAMUNGKAS', 'MADIUN', '2000-03-22', 'Laki-Laki', '085735517033', 'ISLAM', 'WAGIMAN', 'PATMI', 'DESA JERUK GULUNG RT .03 RW. 1', 'WAGIMAN', 'PATMI', 'SMPN 01 BALEREJO', 'TO', '3.40', '83.58', '82.41', 'Y', 'Y', 'Y', '0', '0', '0', '0', '42.35', 'Y', '', 'PSB-16-2-180', '85907695ad6679aa262442880aeca007', 'PSB-16-2-180.jpg'),
(181, 'BAGAS BINTORO', 'MADIUN', '2000-04-25', 'Laki-Laki', '0', 'ISLAM', 'PARDI', 'SAYEM', 'DS JATIREJO RT:02 RW:04 KEC WONOASRI', 'BURUH TANI', 'BURUH TANI', 'SMPN 1 WONOASRI', 'TPHP', '83', '83', '84', 'Y', 'Y', 'Y', '32', '0', '0', '0', '70.5', 'Y', '', 'PSB-16-2-181', '999d627c2e61168ab71ba05ce1b27253', 'kosong.jpg'),
(182, 'ADE BAYU SAPUTRA', 'KUNINGAN', '2001-09-15', 'Laki-Laki', '08883418462', 'ISLAM', 'CARYO PUWANTO', 'ERNA', 'DSN.SUMBERSOKO RT04RW 01 .DESA MEJAYAN .KEC MEJAYAN.KAB .MADIUN', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TO', '78.81', '85.72', '85.45', 'Y', 'Y', 'Y', '36', '0', '0', '0', '71.5', 'Y', '', 'PSB-16-2-182', '6ad7f0337ea38dd0a46fe73ef70bdff9', 'kosong.jpg'),
(184, 'AWANG NUR ROHMANSYAH', 'MADIUN', '2000-08-01', 'Laki-Laki', '085785747485', 'ISLAM', 'SUBAINUDIN', '-', '', '', '', 'SMPN 1 WONOASRI', 'TO', '90.36', '0', '91.81', 'Y', 'Y', 'Y', '', '0', '0', '0', '45.54', 'Y', '', 'PSB-16-2-184', '22e3f23d10badfa521d26fb49d93cf62', 'kosong.jpg'),
(185, 'EFI ERMAWATI', 'MADIUN', '2000-08-17', 'Perempuan', '085706461013', 'ISLAM', 'JAMAN', '-', 'DS. TULUNGREJO', 'BURUH TANI', '-', 'SMPN 2 NGLAMES', 'TPHP', '0', '0', '0', 'Y', 'Y', 'Y', '', '0', '0', '0', '0', 'N', '', 'PSB-16-2-185', '5f2e3ebde4c3c0297391bc28c66e02f4', 'kosong.jpg');
INSERT INTO `g2_bio_siswa` (`no_siswa`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `telp`, `agama`, `nama_ayah`, `nama_ibu`, `alamat`, `pekerjaan_ayah`, `pekerjaan_ibu`, `asal_sekolah`, `jurusan`, `raport_smt3`, `raport_smt4`, `raport_smt5`, `dis3`, `dis4`, `dis5`, `tes_tulis`, `piagam_akademik`, `piagam_olahraga`, `piagam_senibudaya`, `rata_total`, `diterima`, `email`, `username`, `password`, `foto`) VALUES
(186, 'ATIK WIDYANINGRUM', 'MADIUN', '2000-09-09', 'Perempuan', '081558392028', 'ISLAM', 'AGUS', 'SITI', 'PLUMPUNGREJO RT8/RW1', '-', 'WARUNG', 'SMPN 1 WONOASRI', 'TPHP', '', '', '', 'N', 'N', 'N', '40', '', '', '', '10', 'N', '', 'PSB-16-2-186', '03a9edfdddf3faec4c33b560b6d0cbe7', 'kosong.jpg'),
(187, 'MUHAMMAD NURAZIZ', 'NGAWI', '2001-02-24', 'Laki-Laki', '085732946467', 'ISLAM', 'PURWADI', 'SULASTRI', 'DESA PURWOREJO DUSUN KRAPYAK RT10 RW04 KECAMATAN PILANGKENCENG KABUPATEN MADIUN', 'PETANI', 'PETANI', 'SMPN 02 BALEREJO', 'TO', '78.00', '76.50', '70.75', 'Y', 'Y', 'Y', '58', '0', '0', '0', '70.81', 'Y', '', 'PSB-16-2-187', 'f571f1a7de7c47656a3b71c6705fa1a9', 'kosong.jpg'),
(188, 'DIAN LESTARI', 'MADIUN', '2000-04-09', 'Perempuan', '087858065606', 'ISLAM', 'GATOT SANTOSO', 'TANEM', 'DESA KALIABU DUSUN GODANG RT:05/RW:01', 'PETANI', 'IBU RUMAH TANGGA', 'SMPN 01 MEJAYAN', 'TPHP', '86', '87', '87', 'Y', 'Y', 'Y', '44', '0', '0', '0', '76', 'Y', '', 'PSB-16-2-188', 'cb313f175163b1e69bbcd03a015443cc', 'kosong.jpg'),
(189, 'RIDAR ABDI WIDODO', 'MADIUN', '2001-02-27', 'Laki-Laki', '085735976474', 'ISLAM', 'KAMURI', 'NUNING', 'KLUMUTAN RT 07 RW 01 KECAMATAN SARADAN KABUPATEN MADIUN', 'PNS', 'DAGANG GABAH', 'SMPN 2 SARADAN', 'TPHP', '82', '78', '77', 'Y', 'Y', 'Y', '16', '0', '0', '0', '63.25', 'Y', '', 'PSB-16-2-189', 'eae07397a306c954496d16fe3c2d8b68', 'kosong.jpg'),
(190, 'WINDA RIZKI KRISTIANINGRUM', 'MADIUN', '2000-07-04', 'Perempuan', '082325859070', 'KRISTEN', 'NYUWITO', 'HARTUTIK', 'JLN.NIAS NO 23 BANGUNSARI', 'JUAL JAJAN', 'IBU RUMAH TANGGA', 'SMPN 01 MEJAYAN', 'TPHP', '85.45', '85.90', '87.18', 'Y', 'Y', 'Y', '28', '0', '0', '0', '71.63', 'Y', '', 'PSB-16-2-190', 'af8e3bd03b02e634cd42e0f7e7ac4ccf', 'kosong.jpg'),
(191, 'JAYA PRESANTO', 'MADIUN', '2001-03-12', 'Laki-Laki', '085707496699', 'ISLAM', 'SALIMUN', 'EMIATI', 'PORONG, MEJAYAN', 'SWASTA', 'IBU RUMAH TANGGA', 'SMPN 2 MEJAYAN', 'TO', '3.20', '80.5', '73.58', 'Y', 'Y', 'Y', '32', '0', '0', '0', '47.32', 'Y', '', 'PSB-16-2-191', 'bcc0e4e95a92c21d38fc98d209db7796', 'kosong.jpg'),
(192, 'KRISNA MICHELL NUR KAHFI', 'MADIUN', '2001-05-13', 'Laki-Laki', '085755950054', 'ISLAM', 'SUHENDRI', 'JUNAMI', 'DS PURWOSARI DSN MANDING RT 11 RW 03', 'SWASTA', 'IBU RUMAH TANGGA', 'MTSN CRUBAN', 'TO', '92', '93', '92', 'Y', 'Y', 'Y', '60', '0', '0', '0', '84.25', 'Y', '', 'PSB-16-2-192', '6d27be60621264420f6dde6185380e56', 'kosong.jpg'),
(193, 'YUNIA IKA PUTRI', 'MADIUN', '2001-06-29', 'Laki-Laki', '085646035101', 'ISLAM', 'PARYONO EKO PUTRO', 'WIDYAWATI', 'DARMOREJO   DK.KARANG PAING  RT.15 RW, 05', 'SWASTA', 'SWASTA', 'SMPN 4 MEJAYAN', 'RPL', '82', '82', '83', 'N', 'N', 'N', '28', '0', '0', '0', '68.75', 'Y', '', 'PSB-16-2-193', 'f64d970f6efd9d22cd6ff2dcd8f54065', 'kosong.jpg'),
(194, 'TRIO ALDIANTO', 'MADIUN', '2000-05-05', 'Laki-Laki', '085755161862', 'ISLAM', 'SUKADI', '-', '', '', '', 'SMP 2 BALEREJO', 'TO', '77', '76', '77', 'N', 'N', 'N', '', '0', '0', '0', '57.5', 'Y', '', 'PSB-16-2-194', '2203c197b721ab52fadc9eddce809e50', 'kosong.jpg'),
(195, 'FAJAR EGA PRATAMA', 'MADIUN', '2001-12-15', 'Laki-Laki', '082233898277', 'ISLAM', 'SUTRISNO', '-', 'DS. CERMO RT 34 RW 04', 'WIRASWASTA', '-', 'SMP N 1 KARE', 'TO', '89', '88', '92', 'Y', 'Y', 'Y', '0', '0', '0', '0', '67.25', 'Y', '', 'PSB-16-2-195', '3a602351b62db49879b321d56b873b40', 'kosong.jpg'),
(196, 'DHIOFARKO', 'MADIUN', '2000-05-01', 'Laki-Laki', '085331193104', 'ISLAM', 'HADI SUCIPTO', '-', '', '', '', 'SMP AL-AMNANIYAH KARANG JATI', 'TO', '77', '78', '79', 'N', 'N', 'N', '', '0', '0', '0', '58.5', 'Y', '', 'PSB-16-2-196', '076f2d48f2a507254fa6c7ff9d3702da', 'kosong.jpg'),
(198, 'MUHAMMAD ZENDY SAPUTRA', 'MADIUN', '2001-10-30', 'Laki-Laki', '087702834804', 'ISLAM', 'KABIT', 'SRI HARTATIK', 'DS RANDUALAS RT 4 RW 2', 'SWASTA', '-', 'SMP N 1 KARE', 'TO', '88', '88', '91', 'Y', 'Y', 'Y', '0', '0', '0', '0', '66.75', 'Y', '', 'PSB-16-2-198', '9daef2a17cc51f5e9108dee84f1e7e66', 'kosong.jpg'),
(200, 'SITI ROBINGATI', 'MADIUN', '2000-04-16', 'Perempuan', '085853811181', 'ISLAM', 'WAKIRAN', 'SUPARNI', 'DESA NGADIREJO', 'BURUH TANI', 'IBU RUMAH TANGGA', 'MTS PSM SIDOMULYO', 'TPHP', '85', '86', '0', 'N', 'N', 'N', '', '0', '0', '0', '42.75', 'N', '', 'PSB-16-2-200', 'c29b8ca7eeff3fb47c2a3b4fa44ca689', 'kosong.jpg'),
(201, 'CONTOH CALON BARU', 'SASA', '2021-12-01', 'Laki-Laki', '234234234', 'ISLAM', 'DSFSFSD', 'SDFSDF', 'EFSFS, asas, asasa,asas, asasasa', 'FEFWESF', 'SDFSFS', 'DFSDF', 'TO', '', '', '', 'N', 'N', 'N', '', '', '', '', '', 'N', 'CONTOH@A.COM', 'PSB-16-2-201', '81dc9bdb52d04dc20036dbd8313ed055', 'PSB-16-2-201.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `g2_kesehatan`
--

CREATE TABLE `g2_kesehatan` (
  `no_siswa` varchar(15) NOT NULL,
  `tinggi_badan` int(4) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `buta_warna` enum('YA','SEBAGIAN','TIDAK') NOT NULL,
  `riwayat` text NOT NULL,
  `catatan` text NOT NULL,
  `dis_tb` enum('Y','N') NOT NULL DEFAULT 'N',
  `dis_bb` enum('Y','N') NOT NULL DEFAULT 'N',
  `dis_bw` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `g2_kesehatan`
--

INSERT INTO `g2_kesehatan` (`no_siswa`, `tinggi_badan`, `berat_badan`, `buta_warna`, `riwayat`, `catatan`, `dis_tb`, `dis_bb`, `dis_bw`) VALUES
('19', 153, 44, 'TIDAK', '', '', 'N', 'N', 'N'),
('11', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('10', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('9', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('8', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('7', 146, 36, 'TIDAK', '', '', 'N', 'N', 'N'),
('6', 180, 74, 'TIDAK', '', '', 'N', 'N', 'N'),
('2', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('3', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('4', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('5', 173, 42, 'SEBAGIAN', '', '', 'N', 'N', 'N'),
('69', 166, 56, 'TIDAK', 'usus buntu', '', 'N', 'N', 'N'),
('11', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('11', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('12', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('12', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('15', 158, 45, 'TIDAK', '-', '', 'N', 'N', 'N'),
('13', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('14', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('15', 158, 45, 'TIDAK', '-', '', 'N', 'N', 'N'),
('16', 157, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('17', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('18', 156, 65, 'TIDAK', '', '', 'N', 'N', 'N'),
('19', 153, 44, 'TIDAK', '', '', 'N', 'N', 'N'),
('20', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('21', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('22', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('23', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('174', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('25', 155, 51, 'TIDAK', '', '', 'N', 'N', 'N'),
('26', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('27', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('28', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('165', 155, 34, 'TIDAK', '', '', 'N', 'N', 'N'),
('164', 167, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('31', 168, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('32', 158, 41, 'TIDAK', '', '', 'N', 'N', 'N'),
('194', 160, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('35', 162, 54, 'TIDAK', '-', '', 'N', 'N', 'N'),
('36', 161, 44, 'TIDAK', '', '', 'N', 'N', 'N'),
('37', 161, 40, 'TIDAK', 'tipes', '', 'N', 'N', 'N'),
('38', 174, 51, 'TIDAK', '', '', 'N', 'N', 'N'),
('39', 155, 44, 'TIDAK', '-', '', 'N', 'N', 'N'),
('40', 171, 58, 'TIDAK', '-', '', 'N', 'N', 'N'),
('41', 150, 41, 'TIDAK', '-', '', 'N', 'N', 'N'),
('42', 151, 49, 'TIDAK', 'BRONKITIS', '', 'N', 'N', 'N'),
('43', 158, 49, 'TIDAK', '', '', 'N', 'N', 'N'),
('168', 157, 45, 'TIDAK', '', '', 'N', 'N', 'N'),
('45', 157, 48, 'TIDAK', '', '', 'N', 'N', 'N'),
('46', 167, 54, 'TIDAK', '', '', 'N', 'N', 'N'),
('167', 155, 41, 'TIDAK', '', '', 'N', 'N', 'N'),
('48', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('49', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('50', 153, 55, 'TIDAK', '-', '', 'N', 'N', 'N'),
('51', 190, 80, 'TIDAK', '', '', 'N', 'N', 'N'),
('52', 56, 158, 'TIDAK', '', '', 'N', 'N', 'N'),
('53', 155, 44, 'TIDAK', '-', '', 'N', 'N', 'N'),
('54', 168, 41, 'SEBAGIAN', '-', '', 'N', 'N', 'N'),
('55', 173, 52, 'TIDAK', '', '', 'N', 'N', 'N'),
('56', 153, 52, 'TIDAK', '', '', 'N', 'N', 'N'),
('176', 146, 43, 'TIDAK', 'MAAG', '', 'N', 'N', 'N'),
('175', 142, 42, 'TIDAK', 'asma', '', 'N', 'N', 'N'),
('61', 157, 44, 'TIDAK', '', '', 'N', 'N', 'N'),
('62', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('63', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('64', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('154', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('66', 171, 55, 'TIDAK', '', '', 'N', 'N', 'N'),
('67', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('68', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('69', 166, 56, 'TIDAK', 'usus buntu', '', 'N', 'N', 'N'),
('171', 156, 54, 'TIDAK', '', '', 'N', 'N', 'N'),
('71', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('72', 163, 43, 'TIDAK', '', '', 'N', 'N', 'N'),
('73', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('74', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('75', 174, 58, 'TIDAK', '-', '', 'N', 'N', 'N'),
('76', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('77', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('78', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('170', 169, 60, 'TIDAK', '', '', 'N', 'N', 'N'),
('80', 158, 41, 'TIDAK', '', '', 'N', 'N', 'N'),
('81', 161, 56, 'TIDAK', '', '', 'N', 'N', 'N'),
('82', 154, 44, 'TIDAK', 'TIDAK', '', 'N', 'N', 'N'),
('83', 154, 45, 'TIDAK', '', '', 'N', 'N', 'N'),
('195', 171, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('85', 162, 52, 'TIDAK', '-', '', 'N', 'N', 'N'),
('86', 149, 39, 'TIDAK', '', '', 'N', 'N', 'N'),
('87', 161, 44, 'YA', '-', '', 'N', 'N', 'N'),
('150', 160, 60, 'TIDAK', 'CACAR AIR', '', 'N', 'N', 'N'),
('89', 159, 54, 'TIDAK', '', '', 'N', 'N', 'N'),
('90', 154, 38, 'TIDAK', '', '', 'N', 'N', 'N'),
('91', 165, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('92', 170, 44, 'TIDAK', '', '', 'N', 'N', 'N'),
('93', 151, 40, 'TIDAK', '-', '', 'N', 'N', 'N'),
('94', 162, 46, 'TIDAK', '', '', 'N', 'N', 'N'),
('95', 152, 45, 'TIDAK', '-', '', 'N', 'N', 'N'),
('96', 149, 39, 'TIDAK', '', '', 'N', 'N', 'N'),
('97', 148, 41, 'TIDAK', '', '', 'N', 'N', 'N'),
('98', 149, 49, 'TIDAK', '', '', 'N', 'N', 'N'),
('99', 173, 51, 'TIDAK', '-', '', 'N', 'N', 'N'),
('101', 165, 45, 'TIDAK', '-', '', 'N', 'N', 'N'),
('145', 169, 58, 'TIDAK', '', '', 'N', 'N', 'N'),
('102', 167, 55, 'TIDAK', '', '', 'N', 'N', 'N'),
('103', 167, 53, 'TIDAK', '', '', 'N', 'N', 'N'),
('104', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('105', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('106', 163, 39, 'TIDAK', '', '', 'N', 'N', 'N'),
('153', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('108', 145, 32, 'YA', 'TIDAK ADA', '', 'N', 'N', 'N'),
('177', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('166', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('111', 152, 43, 'YA', '', '', 'N', 'N', 'N'),
('112', 157, 40, 'SEBAGIAN', '', '', 'N', 'N', 'N'),
('113', 166, 60, 'TIDAK', '', '', 'N', 'N', 'N'),
('114', 162, 68, 'TIDAK', '', '', 'N', 'N', 'N'),
('178', 169, 55, 'TIDAK', '-', '', 'N', 'N', 'N'),
('163', 156, 40, 'TIDAK', '', '', 'N', 'N', 'N'),
('117', 161, 44, 'TIDAK', '-', '', 'N', 'N', 'N'),
('118', 72, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('119', 160, 49, 'TIDAK', '', '', 'N', 'N', 'N'),
('120', 161, 59, 'TIDAK', '', '', 'N', 'N', 'N'),
('121', 157, 42, 'TIDAK', '-', '', 'N', 'N', 'N'),
('122', 161, 49, 'TIDAK', '', '', 'N', 'N', 'N'),
('123', 175, 65, 'TIDAK', '-', '', 'N', 'N', 'N'),
('124', 162, 41, 'YA', '', '', 'N', 'N', 'N'),
('125', 168, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('126', 168, 48, 'TIDAK', '', '', 'N', 'N', 'N'),
('127', 174, 52, 'TIDAK', 'ASMA', '', 'N', 'N', 'N'),
('128', 158, 41, 'TIDAK', '-', '', 'N', 'N', 'N'),
('129', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('130', 170, 60, 'SEBAGIAN', '', '', 'N', 'N', 'N'),
('131', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('179', 169, 66, 'TIDAK', '-', '', 'N', 'N', 'N'),
('133', 171, 55, 'TIDAK', '', '', 'N', 'N', 'N'),
('134', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('135', 155, 51, 'TIDAK', '', '', 'N', 'N', 'N'),
('136', 156, 53, 'TIDAK', '', '', 'N', 'N', 'N'),
('137', 154, 40, 'TIDAK', '', '', 'N', 'N', 'N'),
('138', 171, 72, 'TIDAK', '', '', 'N', 'N', 'N'),
('139', 170, 45, 'TIDAK', '', '', 'N', 'N', 'N'),
('169', 165, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('141', 162, 40, 'TIDAK', '', '', 'N', 'N', 'N'),
('142', 165, 48, 'TIDAK', '', '', 'N', 'N', 'N'),
('143', 156, 42, 'TIDAK', '', '', 'N', 'N', 'N'),
('144', 144, 35, 'TIDAK', '', '', 'N', 'N', 'N'),
('146', 179, 80, 'TIDAK', '', '', 'N', 'N', 'N'),
('147', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('151', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('152', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('155', 165, 57, 'TIDAK', '', '', 'N', 'N', 'N'),
('156', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('157', 175, 60, 'TIDAK', '', '', 'N', 'N', 'N'),
('158', 159, 45, 'TIDAK', '-', '', 'N', 'N', 'N'),
('159', 154, 38, 'TIDAK', '', '', 'N', 'N', 'N'),
('160', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('173', 157, 45, 'TIDAK', '', '', 'N', 'N', 'N'),
('172', 159, 40, 'TIDAK', '', '', 'N', 'N', 'N'),
('180', 162, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('181', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('182', 165, 46, 'TIDAK', '', '', 'N', 'N', 'N'),
('184', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('185', 148, 53, 'TIDAK', '', '', 'N', 'N', 'N'),
('186', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('187', 150, 45, 'TIDAK', '', '', 'N', 'N', 'N'),
('188', 152, 42, 'TIDAK', '', '', 'N', 'N', 'N'),
('189', 150, 42, 'TIDAK', '', '', 'N', 'N', 'N'),
('190', 152, 43, 'TIDAK', '', '', 'N', 'N', 'N'),
('191', 167, 50, 'TIDAK', '', '', 'N', 'N', 'N'),
('192', 176, 61, 'TIDAK', '', '', 'N', 'N', 'N'),
('193', 0, 0, 'YA', '', '', 'N', 'N', 'N'),
('196', 172, 46, 'TIDAK', '-', '', 'N', 'N', 'N'),
('198', 155, 50, 'TIDAK', '-', '', 'N', 'N', 'N'),
('200', 152, 43, 'TIDAK', '-', '', 'N', 'N', 'N'),
('201', 125, 23, 'TIDAK', 'no', '', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `g2_syarat`
--

CREATE TABLE `g2_syarat` (
  `no_siswa` varchar(15) NOT NULL,
  `formulir` enum('Y','N') NOT NULL,
  `fc_raport` enum('Y','N') NOT NULL,
  `fc_akte` enum('Y','N') NOT NULL,
  `jml_foto` int(2) NOT NULL,
  `surat_rangking` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `kode_user` varchar(10) NOT NULL,
  `isi` text NOT NULL,
  `untuk` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`kode_user`, `isi`, `untuk`) VALUES
('mus', '<h2 style=\"color: red\">Pengambilan Seragam dilakukan mulai Hari Senin (6 Juni) s/d Rabu (8 Juni) 2016.<br />\r\nDengan menunjukkan Bukti Pelunasan Biaya Daftar Ulang.<br />\r\n<hr><br />\r\nSemua Calon Siswa Kamis, 9 Juni 2016 Silahkan datang ke SMKN 1 Mejayan.<br />\r\nPukul : 08:00 WIB </h2>', 'utama'),
('bima', 'Selamat kepada peserta PSB yang sudah diterima sebagai Siswa Baru Angkatan - IV Tahun Ajaran 2016/2017..<br />\r\nPada Gelombang I - Kompetensi Keahlian : Teknik Ototronik.', 'to'),
('bima', 'Selamat kepada peserta PSB yang sudah diterima sebagai Siswa Baru Angkatan - IV Tahun Ajaran 2016/2017..<br />\r\nPada Gelombang I - Kompetensi Keahlian : Rekayasa Perangkat Lunak.', 'rpl'),
('bima', 'Selamat kepada peserta PSB yang sudah diterima sebagai Siswa Baru Angkatan - IV Tahun Ajaran 2016/2017..<br />\r\nPada Gelombang I - Kompetensi Keahlian : Teknologi Pengolahan Hasil Pertanian.', 'tphp'),
('bima', 'Selamat kepada peserta PSB yang sudah diterima sebagai Siswa Baru Angkatan - IV Tahun Ajaran 2016/2017..<br />\r\nPada Gelombang I - Kompetensi Keahlian : Teknik Kendaraan Ringan.', 'tkr'),
('bima', 'Selamat kepada peserta PSB yang sudah diterima sebagai Siswa Baru Angkatan - IV Tahun Ajaran 2016/2017.', 'jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode_user` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_1` varchar(225) NOT NULL,
  `password_2` varchar(225) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `username`, `password_1`, `password_2`, `level`) VALUES
('adm_febro', 'Administrator Febro Herdyanto', 'a', '38ea6c527a2d6aa40d5966b9fe337651', '38ea6c527a2d6aa40d5966b9fe337651', 'admin'),
('bima', 'bima zainudin ikhsan', 'bima', 'bima', '7fcba392d4dcca33791a44cd892b2112', 'admin'),
('febro', 'febro herdiyanto', 'febro', 'febro', '88c7f4e1de1c858ae018d240a2ce3db6', 'user'),
('mus', 'Mustikasari', 'mus', 'd62ec24d065e424dd816ce7828f62584', 'd62ec24d065e424dd816ce7828f62584', 'admin'),
('adm_1', 'Administrator PSB', 'admsmk', 'admsmk', 'ba5e999c24fdc58cbae1acea7bbaece9', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `g2_bio_siswa`
--
ALTER TABLE `g2_bio_siswa`
  ADD PRIMARY KEY (`no_siswa`);

--
-- Indeks untuk tabel `g2_kesehatan`
--
ALTER TABLE `g2_kesehatan`
  ADD KEY `no_sementara` (`no_siswa`);

--
-- Indeks untuk tabel `g2_syarat`
--
ALTER TABLE `g2_syarat`
  ADD KEY `no_sementara` (`no_siswa`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD KEY `kode_user` (`kode_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `g2_bio_siswa`
--
ALTER TABLE `g2_bio_siswa`
  MODIFY `no_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
