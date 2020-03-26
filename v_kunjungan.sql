-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 09:02 AM
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
-- Structure for view `v_kunjungan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kunjungan`  AS  select `k`.`id_kunjungan` AS `id_kunjungan`,`p`.`poli_kode` AS `poli_kode`,`p`.`poli` AS `poli`,`t`.`no_rm` AS `no_rm`,`t`.`no_bpjs` AS `no_bpjs`,`t`.`nama` AS `nama`,`t`.`jenis_kelamin` AS `jenis_kelamin`,`t`.`alamat` AS `alamat`,`t`.`tempat` AS `tempat`,`t`.`tanggal_lahir` AS `tanggal_lahir`,`t`.`nip_ktp_nrp` AS `nip_ktp_nrp`,`t`.`keterangan` AS `keterangan`,`k`.`waktu` AS `waktu`,`k`.`keluhan` AS `keluhan`,`k`.`status` AS `status` from ((`kunjungan` `k` join `poli` `p` on((`k`.`poli_kode` = `p`.`poli_kode`))) join `pasien` `t` on((`k`.`no_rm` = `t`.`no_rm`))) ;

--
-- VIEW  `v_kunjungan`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
