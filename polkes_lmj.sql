-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 07:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polkes_lmj`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL DEFAULT '0',
  `id_kunjungan` int(11) NOT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `no_antrian`, `id_kunjungan`, `no_rm`) VALUES
(28, 1, 47, 000001),
(29, 2, 48, 000002),
(30, 3, 49, 000001),
(31, 1, 50, 000001),
(32, 2, 51, 000001),
(33, 3, 52, 000001),
(34, 4, 53, 000004);

-- --------------------------------------------------------

--
-- Table structure for table `asessmen_umum`
--

CREATE TABLE `asessmen_umum` (
  `id_pemeriksaan` int(6) NOT NULL,
  `no_rm` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `kunjungan` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `orangtua_suami` varchar(30) NOT NULL,
  `tgl_jam_pengkajian` datetime NOT NULL,
  `tgllahir` date NOT NULL,
  `usia` varchar(2) NOT NULL,
  `keterbatasan_komunikasi` varchar(12) NOT NULL,
  `alergi` varchar(18) DEFAULT NULL,
  `alergi_obat` varchar(40) NOT NULL,
  `reaksi_alergi_obat` varchar(40) NOT NULL,
  `alergi_makanan` varchar(40) NOT NULL,
  `reaksi_alergi_makanan` varchar(40) NOT NULL,
  `alergi_lainnya` varchar(40) NOT NULL,
  `reaksi_alergi_lainnya` varchar(40) NOT NULL,
  `sebutkan_eso` varchar(40) NOT NULL,
  `eso` varchar(40) NOT NULL,
  `keluhan_utama` varchar(40) NOT NULL,
  `riwayat_saat_ini` varchar(40) NOT NULL,
  `riwayat_penyakit_dahulu` varchar(40) NOT NULL,
  `operasi_sebutkan` varchar(40) NOT NULL,
  `kapan_operasi` varchar(40) NOT NULL,
  `tindakan_lain_sebutkan` varchar(40) NOT NULL,
  `kapan_tindakan_lain` varchar(40) NOT NULL,
  `riwayat_penyakit_keluarga` varchar(40) NOT NULL,
  `riwayat_obat_yang_diminum` varchar(40) NOT NULL,
  `hubungan_pasien_dg_keluarga` varchar(11) NOT NULL,
  `status_psikologis` varchar(7) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `td` varchar(4) NOT NULL,
  `suhu` varchar(3) NOT NULL,
  `nadi` varchar(3) NOT NULL,
  `rr` varchar(3) NOT NULL,
  `alat_bantu` varchar(30) NOT NULL,
  `protesa` varchar(30) NOT NULL,
  `cacat_tubuh` varchar(30) NOT NULL,
  `adl` varchar(7) NOT NULL,
  `keadaan_umum` varchar(6) NOT NULL,
  `kesadaran` varchar(50) NOT NULL,
  `bb` varchar(3) NOT NULL,
  `tb` varchar(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `keadaan_gizi` varchar(6) NOT NULL,
  `skor_nyeri` varchar(40) NOT NULL,
  `skala_nyeri` varchar(20) NOT NULL,
  `lokasi_nyeri` varchar(20) NOT NULL,
  `durasi_nyeri` varchar(20) NOT NULL,
  `frekuensi_nyeri` varchar(20) NOT NULL,
  `nyeri_hilang_bila` varchar(50) NOT NULL,
  `pasien_tidak_seimbang` varchar(5) NOT NULL,
  `pasien_memegang_benda_lain` varchar(5) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `lapor_dokter` varchar(50) NOT NULL,
  `id_pegawai` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asessmen_umum`
--

INSERT INTO `asessmen_umum` (`id_pemeriksaan`, `no_rm`, `nama_lengkap`, `kunjungan`, `alamat`, `orangtua_suami`, `tgl_jam_pengkajian`, `tgllahir`, `usia`, `keterbatasan_komunikasi`, `alergi`, `alergi_obat`, `reaksi_alergi_obat`, `alergi_makanan`, `reaksi_alergi_makanan`, `alergi_lainnya`, `reaksi_alergi_lainnya`, `sebutkan_eso`, `eso`, `keluhan_utama`, `riwayat_saat_ini`, `riwayat_penyakit_dahulu`, `operasi_sebutkan`, `kapan_operasi`, `tindakan_lain_sebutkan`, `kapan_tindakan_lain`, `riwayat_penyakit_keluarga`, `riwayat_obat_yang_diminum`, `hubungan_pasien_dg_keluarga`, `status_psikologis`, `pekerjaan`, `td`, `suhu`, `nadi`, `rr`, `alat_bantu`, `protesa`, `cacat_tubuh`, `adl`, `keadaan_umum`, `kesadaran`, `bb`, `tb`, `gol_darah`, `keadaan_gizi`, `skor_nyeri`, `skala_nyeri`, `lokasi_nyeri`, `durasi_nyeri`, `frekuensi_nyeri`, `nyeri_hilang_bila`, `pasien_tidak_seimbang`, `pasien_memegang_benda_lain`, `hasil`, `lapor_dokter`, `id_pegawai`) VALUES
(38, 123456, 'pasien rio andika oktavian', 'Baru', 'perum surya asri kedungjajang, lmj, jatim', 'bapak rio', '2020-03-11 10:42:43', '1998-10-21', '22', 'Tidak ada', 'Tidak ada alergi', '', '', '', '', '', '', 'nama obat sebutkan', 'eso nama obat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(40, 654321, 'pasien tamtama rio', 'Baru', 'jember jatim indonesia', 'bapak rio dua', '2020-03-11 11:34:28', '1996-02-03', '24', 'Bahasa', 'Tidak ada alergi', '', '', '', '', '', '', 'nama obat sebutkan', 'nama obat sebtkn', 'keluhan utama', 'riwayat saat ini', 'riwayat penyakit dahulu', 'operasi sebutkan', '', '', '', 'riwayat penyakit keluarga', 'riwayat obat yang diminum', 'baik', 'tenang', 'pekerjaan', '1', '8', '1', '1', 'alat bantu', 'protesa', 'cacat tubuh', 'mandiri', 'lemah', 'kesaran', '1', '165', 'B', 'buruk', 'Tidak ada nyeri', 'skala nyeri', 'lokasi', 'durasi', 'frekuensi', 'Minum obat', 'y', 'n', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `icd_10`
--

CREATE TABLE `icd_10` (
  `id_icd` int(6) NOT NULL,
  `diagnosa` text NOT NULL,
  `kode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icd_10`
--

INSERT INTO `icd_10` (`id_icd`, `diagnosa`, `kode`) VALUES
(1, 'Abdominal pain	', 'R10.4'),
(2, 'Ablasi dan kerusakan retina	', 'H 33'),
(3, 'Ablasio Retina / Cornea	', 'H33.2'),
(4, 'Abortus iminens	', 'O20.0'),
(5, 'Abortus infeksius	', 'O08.0'),
(6, 'Abortus inkomplit	', 'O06.9'),
(7, 'Abortus insiplens	', 'O02.1'),
(8, 'Abortus lainnya	', 'O 05'),
(9, 'Abortus medik	', 'O 04'),
(10, 'Abortus spontan	', 'O 03'),
(11, 'Abses(LUKA)	', 'L02.9'),
(12, 'Abses abdominal	', 'K65.0'),
(13, 'Abses Akilla	', 'L02.4'),
(14, 'Abses apendicular/apendikes	', 'K 35.1'),
(15, 'Abses app	', 'K35.1'),
(16, 'Abses bartolin	', 'N75.1'),
(17, 'Abses beplum	', 'J34.0'),
(18, 'Abses CD	', 'N73.5'),
(19, 'Abses cerebri	', 'Q06.0'),
(20, 'Abses colli	', 'L02.1'),
(21, 'Abses cornea	', 'H16.3'),
(22, 'Abses coxal	', 'Q76.4'),
(23, 'Abses dada	', 'J86.9'),
(24, 'Abses gingival	', 'K05.2'),
(25, 'Abses ginjal	', 'N15.1'),
(26, 'Abses hati amuba	', 'A 06.4'),
(27, 'Abses hati/liver/hepar	', 'K75.0'),
(28, 'Abses ingunialis	', 'L02.2'),
(29, 'Abses kepala/ragio	', 'L02.8'),
(30, 'Abses lutut kiri/axilla/femur/femoral	', 'L02.4'),
(31, 'Abses mama	', 'N61'),
(32, 'Abses mandibula	', 'K10.0'),
(33, 'Abses otak	', 'G06.6'),
(34, 'Abses pada dada	', 'J86.9'),
(35, 'Abses pagina	', 'N76.0'),
(36, 'ABSES PALATUM	', 'K12.2'),
(37, 'Abses palpebra	', 'H00.0'),
(38, 'Abses pancereas	', 'K85'),
(39, 'Abses pantat/buttock/glutea	', 'L02.3'),
(40, 'Abses paraparingeal	', 'J39.0'),
(41, 'Abses parienal	', 'K61.0'),
(42, 'Abses paru	', 'J 85.1, .2'),
(43, 'Abses paru/lung	', 'J85.1'),
(44, 'Abses peritonsilair	', 'J36'),
(45, 'Abses perodental	', 'K05.2'),
(46, 'Abses perut	', 'K65.0'),
(47, 'Abses pinggang kiri	', 'L02.2'),
(48, 'Abses pipi	', 'L02.0'),
(49, 'Abses post op/luka oprasi	', 'T81.4'),
(50, 'Abses renal	', 'N15.1'),
(51, 'Abses Retro pritonial	', 'K65.0'),
(52, 'Abses sub mandibula	', 'K12.2'),
(53, 'Abses torax	', 'J86.9'),
(54, 'Abses turbo ovarial (ATO)	', 'N70.9'),
(55, 'Abses umbilicia/dinding (Abdomen punggung)	', 'L02.2'),
(56, 'Achalasia cardia / esopagus	', 'K22.0'),
(57, 'Achelasia congenital	', 'Q39.5'),
(58, 'Achelasia pylorus	', 'Q40.0'),
(59, 'Acut abdomen	', 'R10.0'),
(60, 'Acut laringo tracea broncitis	', 'J20.9'),
(61, 'Acut myelocitic leukemia (AML)	', 'C92.0'),
(62, 'Acut respiratory distress syndrom	', 'J80'),
(63, 'Acute hepatic failure	', 'K72.0'),
(64, 'Adamantinoma', 'D16.5'),
(65, 'Adeno ca	', 'C11.1'),
(66, 'Adeno ca. gaster	', 'C16.9'),
(67, 'Adeno Ca.Colon	', 'C18.9'),
(68, 'Adeno Ca.paru	', 'C34.9'),
(69, 'Adeno tonsilitis cronis	', 'J35.2'),
(70, 'Adenomycosio', 'N80.0'),
(71, 'Adnexitis', 'N70.9'),
(72, 'After Coming head	', 'O64.1'),
(73, 'Agranulositosus', 'D 70'),
(74, 'Akibat dari kemasukan benda asing melalui  lubang tubuh	', 'T 15, T 17 – T19'),
(75, 'Alergi', 'T78.4'),
(76, 'Alergi rhinitis akibat kerja	', 'J 30.3'),
(77, 'Aleukimia leukimia	', 'C95.7'),
(78, 'ALL', 'C91.0'),
(79, 'Amebiasis', 'A06.9'),
(80, 'Amebiasis lainnya	', 'A 06.0-.3 .5-.9'),
(81, 'Amenore', 'N 91.0, .1, .2'),
(82, 'Amenorrhea', 'N91.2'),
(83, 'AMI ( infark miokard akut)	', 'I21.9'),
(84, 'Amputasi jari kaki satu	', 'S98.1'),
(85, 'Anemia (gravio)	', 'D64.8'),
(86, 'Anemia aplastik lainnya	', 'D 61'),
(87, 'Anemia defisiensi zat besi	', 'D 50'),
(88, 'Anemia hemolitik	', 'D58.9'),
(89, 'Anemia Hemolitik	', 'D 59'),
(90, 'Anemia lainnya	', 'D 51 – D 58,  D 60, D 62 – D 64'),
(91, 'Anemia pasca pendarahan	', 'D50.0'),
(92, 'Anencepalus bayi	', 'Q00.0'),
(93, 'anencepalus ibu	', 'Q35.0'),
(94, 'Aneorisme Aorta Abdominal	', 'I71.4'),
(95, 'Aneuryama aorta	', 'I71.9'),
(96, 'Angina pictoris	', 'I20.9'),
(97, 'angina pictoris unsiable/fasca infark	', 'I20.0'),
(98, 'Angio fibroma nasofaring	', 'D10.6'),
(99, 'Angioauritic Alergi	', 'T78.3'),
(100, 'Anomali intra cranial	', 'Q89.9');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_jenis_pelayanan` int(6) NOT NULL,
  `jenis_pelayanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ktb`
--

CREATE TABLE `ktb` (
  `no_rm` int(6) NOT NULL,
  `nik_pangkat_nrp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `orangtua_suami` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktb`
--

INSERT INTO `ktb` (`no_rm`, `nik_pangkat_nrp`, `jenis_kelamin`, `nama_lengkap`, `alamat`, `tempat`, `tgl_lahir`, `orangtua_suami`) VALUES
(123456, 'pangkat1', 'L', 'pasien rio andika oktavian', 'perum surya asri kedungjajang, lmj, jatim', 'lumajang', '1998-10-21', 'bapak rio'),
(654321, 'tamtama', 'P', 'pasien tamtama rio', 'jember jatim indonesia', 'sukabumi', '1996-02-03', 'bapak rio dua'),
(898989, 'pangkat', 'L', 'pak dar', 'lmj', 'lmj', '2020-03-26', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL,
  `poli_kode` varchar(6) NOT NULL,
  `waktu` datetime NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `status` varchar(30) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_rm`, `poli_kode`, `waktu`, `berat_badan`, `tinggi_badan`, `status`, `keluhan`) VALUES
(23, 000001, 'PL003', '2020-06-10 12:13:02', '87', '87', 'Diperiksa', 'das'),
(24, 000002, 'PL004', '2020-06-10 12:15:40', '676', '323', 'Dalam Antrian', 'sas'),
(25, 000003, 'PL003', '2020-06-10 12:16:10', '324', '32', 'Dalam Antrian', 'das'),
(26, 000004, 'PL004', '2020-06-10 17:33:57', '732', '324', 'Dalam Antrian', 'sakit parah'),
(27, 000004, 'PL003', '2020-06-11 21:32:13', '50', '213', 'Dalam Antrian', 'd'),
(28, 000004, 'PL003', '2020-06-11 21:33:23', '4', '32', 'Dalam Antrian', 'f'),
(29, 000001, 'PL003', '2020-06-12 21:45:02', '2', '2', 'Dalam Antrian', 'das'),
(30, 000001, 'PL003', '2020-05-13 19:17:51', '', '', 'Dalam Antrian', ''),
(47, 000001, 'PL003', '2020-06-13 20:19:06', '12', '', 'Dalam Antrian', ''),
(48, 000002, 'PL003', '2020-07-13 20:19:41', '', '', 'Dalam Antrian', ''),
(49, 000001, 'PL003', '2020-08-13 20:20:09', '', '', 'Dalam Antrian', ''),
(50, 000001, 'PL004', '2020-08-13 20:21:43', '', '', 'Dalam Antrian', ''),
(51, 000001, 'PL004', '2020-10-13 20:23:05', '', '', 'Dalam Antrian', ''),
(52, 000001, 'PL004', '2020-10-13 20:23:07', '', '', 'Dalam Antrian', ''),
(53, 000004, 'PL004', '2020-12-13 20:24:27', '', '', 'Dalam Antrian', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `tanggal_daftar` varchar(255) NOT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL,
  `no_bpjs` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `nip_ktp_nrp` varchar(50) NOT NULL,
  `nomor` int(13) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`tanggal_daftar`, `no_rm`, `no_bpjs`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tempat`, `nip_ktp_nrp`, `nomor`, `keterangan`) VALUES
('2020-06-09 22:15:29', 000001, '2388', 'fedya', '2020-06-11', 'Laki-laki', 'kjd', 'd', '2834', 32423, '32423'),
('2020-06-09 22:16:10', 000002, '123', 'tio', '2020-06-09', 'Laki-laki', 'jsd', 'sd', '123', 213, 'jshd'),
('2020-06-10 11:10:11', 000003, '324', 'tio', '2020-06-17', 'Laki-laki', 'kalskd', 'lumajang', '324', 234234, 'asjd'),
('2020-06-10 17:33:37', 000004, '3492', 'rian', '2020-06-08', 'Laki-laki', 'dasd', 'prob', '8324', 49240, 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` enum('l=laki-laki','p=perempuan','','') NOT NULL,
  `id_role` int(6) NOT NULL,
  `id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `umur`, `jenis_kelamin`, `id_role`, `id_user`) VALUES
(1, 'pegawai rio andika oktavian', 21, 'l=laki-laki', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `no_rm` int(6) NOT NULL,
  `selesai_ditangani` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `no_rm`, `selesai_ditangani`) VALUES
(1, 1, '0'),
(2, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `poli_kode` varchar(6) NOT NULL,
  `poli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`poli_kode`, `poli`) VALUES
('PL003', 'Poli Umum'),
('PL004', 'Poli Gigi dan Mulut'),
('PL005', 'Poli KIA/KB');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`) VALUES
(7, 'j', 4),
(9, 'k', 24),
(10, 'k', 24),
(11, 'k', 324),
(12, 'k', 324),
(13, 'k', 324),
(14, 'k', 324),
(15, 'k', 324),
(16, 'd', 23),
(17, 'd', 23),
(18, 's', 2),
(19, 'io', 4),
(20, 'iooo', 3),
(21, 'uuuu', 2),
(22, 'kjkjkj', 3),
(23, 'f', 3),
(24, 'f', 3),
(25, 'kokokoko', 4),
(26, 'rono', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(6) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'medis');

-- --------------------------------------------------------

--
-- Table structure for table `soap`
--

CREATE TABLE `soap` (
  `id_soap` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_kepala_keluarga` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `alergi` text NOT NULL,
  `tgl_jam` datetime NOT NULL,
  `anamnesa_pemeriksaan` text NOT NULL,
  `diagnosa_therapy_paraf` text NOT NULL,
  `id_icd` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarif_pelayanan`
--

CREATE TABLE `tarif_pelayanan` (
  `id_tarif_pelayanan` int(6) NOT NULL,
  `id_jenis_pelayanan` int(6) NOT NULL,
  `pelayanan` text NOT NULL,
  `tarif` varchar(6) NOT NULL,
  `registrasi_baru` enum('1=iya','2=tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_antrian`
-- (See below for the actual view)
--
CREATE TABLE `v_antrian` (
`id_antrian` int(11)
,`no_antrian` int(11)
,`status` varchar(30)
,`id_kunjungan` int(11)
,`poli_kode` varchar(6)
,`poli` varchar(30)
,`no_rm` int(6) unsigned zerofill
,`no_bpjs` varchar(15)
,`nama` varchar(30)
,`tanggal_lahir` date
,`jenis_kelamin` varchar(11)
,`alamat` text
,`tempat` varchar(30)
,`nip_ktp_nrp` varchar(50)
,`keterangan` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kunjungan`
-- (See below for the actual view)
--
CREATE TABLE `v_kunjungan` (
`id_kunjungan` int(11)
,`poli_kode` varchar(6)
,`poli` varchar(30)
,`no_rm` int(6) unsigned zerofill
,`no_bpjs` varchar(15)
,`nama` varchar(30)
,`jenis_kelamin` varchar(11)
,`alamat` text
,`tempat` varchar(30)
,`tanggal_lahir` date
,`nip_ktp_nrp` varchar(50)
,`keterangan` varchar(30)
,`waktu` datetime
,`berat_badan` varchar(3)
,`tinggi_badan` varchar(3)
,`keluhan` text
,`status` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pegawai`
-- (See below for the actual view)
--
CREATE TABLE `v_pegawai` (
`id_pegawai` int(6)
,`nama_lengkap` varchar(30)
,`umur` int(3)
,`jenis_kelamin` enum('l=laki-laki','p=perempuan','','')
,`role` varchar(15)
,`username` varchar(15)
,`password` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pemeriksaan`
-- (See below for the actual view)
--
CREATE TABLE `v_pemeriksaan` (
`nik_pangkat_nrp` varchar(15)
,`tempat` varchar(30)
,`tgl_lahir` date
,`id_pemeriksaan` int(6)
,`no_rm` int(6)
,`nama_lengkap` varchar(30)
,`kunjungan` varchar(4)
,`alamat` text
,`orangtua_suami` varchar(30)
,`tgl_jam_pengkajian` datetime
,`tgllahir` date
,`usia` varchar(2)
,`keterbatasan_komunikasi` varchar(12)
,`alergi` varchar(18)
,`alergi_obat` varchar(40)
,`reaksi_alergi_obat` varchar(40)
,`alergi_makanan` varchar(40)
,`reaksi_alergi_makanan` varchar(40)
,`alergi_lainnya` varchar(40)
,`reaksi_alergi_lainnya` varchar(40)
,`sebutkan_eso` varchar(40)
,`eso` varchar(40)
,`keluhan_utama` varchar(40)
,`riwayat_saat_ini` varchar(40)
,`riwayat_penyakit_dahulu` varchar(40)
,`operasi_sebutkan` varchar(40)
,`kapan_operasi` varchar(40)
,`tindakan_lain_sebutkan` varchar(40)
,`kapan_tindakan_lain` varchar(40)
,`riwayat_penyakit_keluarga` varchar(40)
,`riwayat_obat_yang_diminum` varchar(40)
,`hubungan_pasien_dg_keluarga` varchar(11)
,`status_psikologis` varchar(7)
,`pekerjaan` varchar(40)
,`td` varchar(4)
,`suhu` varchar(3)
,`nadi` varchar(3)
,`rr` varchar(3)
,`alat_bantu` varchar(30)
,`protesa` varchar(30)
,`cacat_tubuh` varchar(30)
,`adl` varchar(7)
,`keadaan_umum` varchar(6)
,`kesadaran` varchar(50)
,`bb` varchar(3)
,`tb` varchar(3)
,`gol_darah` varchar(2)
,`keadaan_gizi` varchar(6)
,`skor_nyeri` varchar(40)
,`skala_nyeri` varchar(20)
,`lokasi_nyeri` varchar(20)
,`durasi_nyeri` varchar(20)
,`frekuensi_nyeri` varchar(20)
,`nyeri_hilang_bila` varchar(50)
,`pasien_tidak_seimbang` varchar(5)
,`pasien_memegang_benda_lain` varchar(5)
,`hasil` varchar(50)
,`lapor_dokter` varchar(50)
,`id_pegawai` int(6)
);

-- --------------------------------------------------------

--
-- Structure for view `v_antrian`
--
DROP TABLE IF EXISTS `v_antrian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_antrian`  AS  select `a`.`id_antrian` AS `id_antrian`,`a`.`no_antrian` AS `no_antrian`,`b`.`status` AS `status`,`a`.`id_kunjungan` AS `id_kunjungan`,`b`.`poli_kode` AS `poli_kode`,`c`.`poli` AS `poli`,`b`.`no_rm` AS `no_rm`,`d`.`no_bpjs` AS `no_bpjs`,`d`.`nama` AS `nama`,`d`.`tanggal_lahir` AS `tanggal_lahir`,`d`.`jenis_kelamin` AS `jenis_kelamin`,`d`.`alamat` AS `alamat`,`d`.`tempat` AS `tempat`,`d`.`nip_ktp_nrp` AS `nip_ktp_nrp`,`d`.`keterangan` AS `keterangan` from (((`antrian` `a` join `kunjungan` `b`) join `poli` `c`) join `pasien` `d`) where ((`a`.`id_kunjungan` = `b`.`id_kunjungan`) and (`b`.`poli_kode` = `c`.`poli_kode`) and (`b`.`no_rm` = `d`.`no_rm`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kunjungan`
--
DROP TABLE IF EXISTS `v_kunjungan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kunjungan`  AS  select `k`.`id_kunjungan` AS `id_kunjungan`,`p`.`poli_kode` AS `poli_kode`,`p`.`poli` AS `poli`,`t`.`no_rm` AS `no_rm`,`t`.`no_bpjs` AS `no_bpjs`,`t`.`nama` AS `nama`,`t`.`jenis_kelamin` AS `jenis_kelamin`,`t`.`alamat` AS `alamat`,`t`.`tempat` AS `tempat`,`t`.`tanggal_lahir` AS `tanggal_lahir`,`t`.`nip_ktp_nrp` AS `nip_ktp_nrp`,`t`.`keterangan` AS `keterangan`,`k`.`waktu` AS `waktu`,`k`.`berat_badan` AS `berat_badan`,`k`.`tinggi_badan` AS `tinggi_badan`,`k`.`keluhan` AS `keluhan`,`k`.`status` AS `status` from ((`kunjungan` `k` join `poli` `p` on((`k`.`poli_kode` = `p`.`poli_kode`))) join `pasien` `t` on((`k`.`no_rm` = `t`.`no_rm`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pegawai`
--
DROP TABLE IF EXISTS `v_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pegawai`  AS  select `p`.`id_pegawai` AS `id_pegawai`,`p`.`nama_lengkap` AS `nama_lengkap`,`p`.`umur` AS `umur`,`p`.`jenis_kelamin` AS `jenis_kelamin`,`r`.`role` AS `role`,`u`.`username` AS `username`,`u`.`password` AS `password` from ((`pegawai` `p` join `role` `r` on((`r`.`id_role` = `p`.`id_role`))) join `user` `u` on((`u`.`id_user` = `p`.`id_user`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pemeriksaan`
--
DROP TABLE IF EXISTS `v_pemeriksaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pemeriksaan`  AS  select `k`.`nik_pangkat_nrp` AS `nik_pangkat_nrp`,`k`.`tempat` AS `tempat`,`k`.`tgl_lahir` AS `tgl_lahir`,`a`.`id_pemeriksaan` AS `id_pemeriksaan`,`a`.`no_rm` AS `no_rm`,`a`.`nama_lengkap` AS `nama_lengkap`,`a`.`kunjungan` AS `kunjungan`,`a`.`alamat` AS `alamat`,`a`.`orangtua_suami` AS `orangtua_suami`,`a`.`tgl_jam_pengkajian` AS `tgl_jam_pengkajian`,`a`.`tgllahir` AS `tgllahir`,`a`.`usia` AS `usia`,`a`.`keterbatasan_komunikasi` AS `keterbatasan_komunikasi`,`a`.`alergi` AS `alergi`,`a`.`alergi_obat` AS `alergi_obat`,`a`.`reaksi_alergi_obat` AS `reaksi_alergi_obat`,`a`.`alergi_makanan` AS `alergi_makanan`,`a`.`reaksi_alergi_makanan` AS `reaksi_alergi_makanan`,`a`.`alergi_lainnya` AS `alergi_lainnya`,`a`.`reaksi_alergi_lainnya` AS `reaksi_alergi_lainnya`,`a`.`sebutkan_eso` AS `sebutkan_eso`,`a`.`eso` AS `eso`,`a`.`keluhan_utama` AS `keluhan_utama`,`a`.`riwayat_saat_ini` AS `riwayat_saat_ini`,`a`.`riwayat_penyakit_dahulu` AS `riwayat_penyakit_dahulu`,`a`.`operasi_sebutkan` AS `operasi_sebutkan`,`a`.`kapan_operasi` AS `kapan_operasi`,`a`.`tindakan_lain_sebutkan` AS `tindakan_lain_sebutkan`,`a`.`kapan_tindakan_lain` AS `kapan_tindakan_lain`,`a`.`riwayat_penyakit_keluarga` AS `riwayat_penyakit_keluarga`,`a`.`riwayat_obat_yang_diminum` AS `riwayat_obat_yang_diminum`,`a`.`hubungan_pasien_dg_keluarga` AS `hubungan_pasien_dg_keluarga`,`a`.`status_psikologis` AS `status_psikologis`,`a`.`pekerjaan` AS `pekerjaan`,`a`.`td` AS `td`,`a`.`suhu` AS `suhu`,`a`.`nadi` AS `nadi`,`a`.`rr` AS `rr`,`a`.`alat_bantu` AS `alat_bantu`,`a`.`protesa` AS `protesa`,`a`.`cacat_tubuh` AS `cacat_tubuh`,`a`.`adl` AS `adl`,`a`.`keadaan_umum` AS `keadaan_umum`,`a`.`kesadaran` AS `kesadaran`,`a`.`bb` AS `bb`,`a`.`tb` AS `tb`,`a`.`gol_darah` AS `gol_darah`,`a`.`keadaan_gizi` AS `keadaan_gizi`,`a`.`skor_nyeri` AS `skor_nyeri`,`a`.`skala_nyeri` AS `skala_nyeri`,`a`.`lokasi_nyeri` AS `lokasi_nyeri`,`a`.`durasi_nyeri` AS `durasi_nyeri`,`a`.`frekuensi_nyeri` AS `frekuensi_nyeri`,`a`.`nyeri_hilang_bila` AS `nyeri_hilang_bila`,`a`.`pasien_tidak_seimbang` AS `pasien_tidak_seimbang`,`a`.`pasien_memegang_benda_lain` AS `pasien_memegang_benda_lain`,`a`.`hasil` AS `hasil`,`a`.`lapor_dokter` AS `lapor_dokter`,`a`.`id_pegawai` AS `id_pegawai` from (`asessmen_umum` `a` join `ktb` `k` on((`a`.`no_rm` = `k`.`no_rm`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD UNIQUE KEY `id_kunjungan` (`id_kunjungan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `asessmen_umum`
--
ALTER TABLE `asessmen_umum`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `icd_10`
--
ALTER TABLE `icd_10`
  ADD PRIMARY KEY (`id_icd`);

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_jenis_pelayanan`);

--
-- Indexes for table `ktb`
--
ALTER TABLE `ktb`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `poli_kode` (`poli_kode`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`,`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`poli_kode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `soap`
--
ALTER TABLE `soap`
  ADD PRIMARY KEY (`id_soap`);

--
-- Indexes for table `tarif_pelayanan`
--
ALTER TABLE `tarif_pelayanan`
  ADD PRIMARY KEY (`id_tarif_pelayanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `asessmen_umum`
--
ALTER TABLE `asessmen_umum`
  MODIFY `id_pemeriksaan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `icd_10`
--
ALTER TABLE `icd_10`
  MODIFY `id_icd` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_jenis_pelayanan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soap`
--
ALTER TABLE `soap`
  MODIFY `id_soap` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarif_pelayanan`
--
ALTER TABLE `tarif_pelayanan`
  MODIFY `id_tarif_pelayanan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`),
  ADD CONSTRAINT `antrian_ibfk_3` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`);

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`poli_kode`) REFERENCES `poli` (`poli_kode`),
  ADD CONSTRAINT `kunjungan_ibfk_3` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
