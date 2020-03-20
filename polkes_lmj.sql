-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2020 pada 07.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `icd_10`
--

CREATE TABLE `icd_10` (
  `id_icd` int(6) NOT NULL,
  `diagnosa` text NOT NULL,
  `kode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `icd_10`
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
-- Struktur dari tabel `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_jenis_pelayanan` int(6) NOT NULL,
  `jenis_pelayanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktb`
--

CREATE TABLE `ktb` (
  `id_ktb` int(6) NOT NULL,
  `no_rm` int(6) NOT NULL,
  `nik_pangkat_nrp` varchar(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktb`
--

INSERT INTO `ktb` (`id_ktb`, `no_rm`, `nik_pangkat_nrp`, `nama_lengkap`, `alamat`, `tempat`, `tgl_lahir`) VALUES
(1, 1, 'pangkat1', 'pasien rio andika oktavian', 'perum surya asri kedungjajang, lmj, jatim', 'lumajang', '1998-10-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `id_ktb` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nik_pangkat_nrp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `umur`, `jenis_kelamin`, `id_role`, `id_user`) VALUES
(1, 'pegawai rio andika oktavian', 21, 'l=laki-laki', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(6) NOT NULL,
  `no_rm` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `kunjungan` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `orangtua_suami` varchar(30) NOT NULL,
  `tgl_jam_pengkajian` date NOT NULL,
  `tgllahir` date NOT NULL,
  `usia` text NOT NULL,
  `keterbatasan_komunikasi` varchar(12) NOT NULL,
  `alergi` varchar(10) NOT NULL,
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
  `pasien_tidak_seimbang` enum('y=ya','n=tidak') NOT NULL,
  `pasien_memegang_benda_lain` enum('y=ya','n=tidak') NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `lapor_dokter` varchar(50) NOT NULL,
  `id_pegawai` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(6) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'medis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soap`
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
-- Struktur dari tabel `tarif_pelayanan`
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_pegawai`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Struktur untuk view `v_pegawai`
--
DROP TABLE IF EXISTS `v_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pegawai`  AS  select `p`.`id_pegawai` AS `id_pegawai`,`p`.`nama_lengkap` AS `nama_lengkap`,`p`.`umur` AS `umur`,`p`.`jenis_kelamin` AS `jenis_kelamin`,`r`.`role` AS `role`,`u`.`username` AS `username`,`u`.`password` AS `password` from ((`pegawai` `p` join `role` `r` on(`r`.`id_role` = `p`.`id_role`)) join `user` `u` on(`u`.`id_user` = `p`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `icd_10`
--
ALTER TABLE `icd_10`
  ADD PRIMARY KEY (`id_icd`);

--
-- Indeks untuk tabel `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_jenis_pelayanan`);

--
-- Indeks untuk tabel `ktb`
--
ALTER TABLE `ktb`
  ADD PRIMARY KEY (`id_ktb`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`,`id_ktb`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`,`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `soap`
--
ALTER TABLE `soap`
  ADD PRIMARY KEY (`id_soap`);

--
-- Indeks untuk tabel `tarif_pelayanan`
--
ALTER TABLE `tarif_pelayanan`
  ADD PRIMARY KEY (`id_tarif_pelayanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `icd_10`
--
ALTER TABLE `icd_10`
  MODIFY `id_icd` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_jenis_pelayanan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ktb`
--
ALTER TABLE `ktb`
  MODIFY `id_ktb` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `soap`
--
ALTER TABLE `soap`
  MODIFY `id_soap` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tarif_pelayanan`
--
ALTER TABLE `tarif_pelayanan`
  MODIFY `id_tarif_pelayanan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
