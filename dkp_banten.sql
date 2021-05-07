-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2021 at 08:30 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkp_banten`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `keterangan_bidang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`, `created_by`, `updated_by`, `time_created`, `time_updated`, `keterangan_bidang`) VALUES
(1, 'SDM', 1, 1, '2021-04-22 12:46:26', '2021-04-22 12:46:26', 'Bagian SDM'),
(2, 'LPPM', 1, 1, '2021-04-22 12:47:02', '2021-04-22 12:47:02', 'Bagian Lembaga Penelitian Pengabdian Masyarakat'),
(3, 'IT', 1, 1, '2021-04-22 12:47:10', '2021-04-22 12:49:09', 'Bagian Information & Technologi'),
(5, 'Keuangan', 1, 1, '2021-04-22 13:01:10', '2021-04-22 13:01:10', 'Bagian Keuangan'),
(6, 'Staf Kepegawaian / Admin Prodi MPB', 1, 1, '2021-04-22 13:45:04', '2021-04-22 13:45:04', 'Staf Kepegawaian / Admin Prodi MPB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `jenis_cuti` varchar(255) DEFAULT NULL,
  `no_suratcuti` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tembusan1` int(11) DEFAULT NULL,
  `tembusan2` int(11) DEFAULT NULL,
  `tembusan3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imk`
--

CREATE TABLE `tbl_imk` (
  `id_imk` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `jam_kembali` time DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_izin`
--

CREATE TABLE `tbl_izin` (
  `id_izin` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `keterangan_jabatan` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `keterangan_jabatan`, `created_by`, `updated_by`, `time_created`, `time_updated`) VALUES
(1, 'Direktur', 'Direktur', 1, 1, '2021-04-20 13:49:00', '2021-04-27 10:45:07'),
(2, 'Wadir I', 'Wadir I', 1, 1, '2021-04-20 14:00:10', '2021-04-20 14:00:10'),
(3, 'Wadir II', 'Wadir IIxsss', 1, 1, '2021-04-21 14:08:46', '2021-04-22 11:30:14'),
(7, 'Staf Kepegawaian / Admin Prodi MPB', 'Staf Kepegawaian / Admin Prodi MPB', 1, 1, '2021-04-22 13:43:40', '2021-04-22 13:43:40'),
(8, 'Staf Bag. Kepegawaian & Umum', 'Staf Bag. Kepegawaian & Umum dan Sarana Prasarana', 1, 1, '2021-04-30 10:33:08', '2021-04-30 10:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nidk` varchar(255) DEFAULT NULL,
  `nitk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `sk_1` varchar(255) DEFAULT NULL,
  `masa_kerja_sk_1` varchar(255) DEFAULT NULL,
  `sk_2` varchar(255) DEFAULT NULL,
  `masa_kerja_sk_2` varchar(255) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `status` enum('aktif,','non_aktif') DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `time_login_pegawai` datetime DEFAULT NULL,
  `time_logout_pegawai` datetime DEFAULT NULL,
  `time_create_pegawai` datetime DEFAULT NULL,
  `time_update_pegawai` datetime DEFAULT NULL,
  `kegiatan_yang_diikuti` text,
  `gambar_pegawai` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan') DEFAULT NULL,
  `nik_ktp` varchar(50) DEFAULT NULL,
  `agama` enum('islam','kristen') DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `rt` varchar(30) DEFAULT NULL,
  `rw` varchar(30) DEFAULT NULL,
  `dusun` varchar(30) DEFAULT NULL,
  `kelurahan` varchar(30) DEFAULT NULL,
  `kabupaten_kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kode_pos` varchar(30) DEFAULT NULL,
  `telpon_rumah` varchar(30) DEFAULT NULL,
  `nip_pns` varchar(30) DEFAULT NULL,
  `status_kepegawaian` varchar(50) DEFAULT NULL,
  `status_keaktifan` varchar(50) DEFAULT NULL,
  `sk_cpns` varchar(50) DEFAULT NULL,
  `tanggal_sk_cpns` varchar(50) DEFAULT NULL,
  `lembaga_pengangkat` varchar(50) DEFAULT NULL,
  `golongan` varchar(50) DEFAULT NULL,
  `sumber_gaji` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nik`, `password`, `nidn`, `nidk`, `nitk`, `nama`, `tgl_masuk`, `tgl_keluar`, `sk_1`, `masa_kerja_sk_1`, `sk_2`, `masa_kerja_sk_2`, `id_jabatan`, `no_hp`, `email`, `alamat`, `tempat_lahir`, `tgl_lahir`, `pendidikan_terakhir`, `program_studi`, `status`, `id_bidang`, `time_login_pegawai`, `time_logout_pegawai`, `time_create_pegawai`, `time_update_pegawai`, `kegiatan_yang_diikuti`, `gambar_pegawai`, `jenis_kelamin`, `nik_ktp`, `agama`, `kewarganegaraan`, `rt`, `rw`, `dusun`, `kelurahan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `telpon_rumah`, `nip_pns`, `status_kepegawaian`, `status_keaktifan`, `sk_cpns`, `tanggal_sk_cpns`, `lembaga_pengangkat`, `golongan`, `sumber_gaji`) VALUES
(1, '7700015071', '$2y$10$WfdBJdKFOpteuengmVyQnuDBe7nutID8qcG.tDjxvV1o9KIk5Y2j.', NULL, NULL, NULL, 'Mega Santi Sekartaji, S.KM.', NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'megasekartaji94@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, '2021-05-03 12:58:02', '2021-05-03 09:08:17', '2021-04-20 10:43:05', NULL, NULL, 'download1.png', 'perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '6503616001', '$2y$10$oRMHJzLLZL5vDkhtLRK.euZEFIFTGTVESiyLDENpUdgjP8rKQ42mq', NULL, NULL, NULL, 'dr. H.Titis Wahyuono, M.Si.', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-27 10:32:44', NULL, '2021-04-22 19:18:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '6503616002', '$2y$10$b45M2ZHRZVlHXid.uj77/eItPwAuTDJbnOzXlMHINtRyT9/CWpdlG', '0603027001', '', '', 'Budi Purwanto, S.Si, M.Si.', '2016-01-01', '0000-00-00', 'No. 05/Kep.YPMI/I/2016', '', '', '', 2, '085742327616', 'akubudi89@gmail.com', 'Gonowelang, RT 004 RW 002, Ngaru-aru, Banyudono, Boyolali', 'Magelang', '1970-02-03', 'S2 ', 'Sains', NULL, NULL, '2021-04-30 10:38:53', NULL, '2021-04-22 22:12:12', '2021-04-23 19:52:19', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '7700015076', '$2y$10$bO/.enyeGD12rhYRUVnIO.qkSkwn0eRcbPngowmZv/jwWlvzQVVMG', NULL, NULL, NULL, 'Edy Setiyawan, A.Md.', NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 10:39:26', NULL, '2021-04-30 10:34:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `tbl_imk`
--
ALTER TABLE `tbl_imk`
  ADD PRIMARY KEY (`id_imk`);

--
-- Indexes for table `tbl_izin`
--
ALTER TABLE `tbl_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_imk`
--
ALTER TABLE `tbl_imk`
  MODIFY `id_imk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_izin`
--
ALTER TABLE `tbl_izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
