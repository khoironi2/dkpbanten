-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2021 at 11:43 PM
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
-- Table structure for table `tbl_alat_tangkap_kapal`
--

CREATE TABLE `tbl_alat_tangkap_kapal` (
  `id_alat_tangkap_kapal` int(11) NOT NULL,
  `nama_alat_tangkap_kapal` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_alat_tangkap_kapal`
--

INSERT INTO `tbl_alat_tangkap_kapal` (`id_alat_tangkap_kapal`, `nama_alat_tangkap_kapal`, `status`) VALUES
(1, 'cantrang / pukat harimau', '1'),
(2, 'Cantrang', '1'),
(3, 'Jaring', '1'),
(4, 'Pancing Tonda', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bendera_kapal`
--

CREATE TABLE `tbl_bendera_kapal` (
  `id_bendera_kapal` int(11) NOT NULL,
  `nama_bendera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daerah_operasional_penangkapan_ikan`
--

CREATE TABLE `tbl_daerah_operasional_penangkapan_ikan` (
  `id_daerah_operasional_penangkapan_ikan` int(11) NOT NULL,
  `wpp` varchar(255) DEFAULT NULL,
  `dpi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dermaga`
--

CREATE TABLE `tbl_dermaga` (
  `id_dermaga` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_harga_ikan`
--

CREATE TABLE `tbl_harga_ikan` (
  `id_harga_ikan` int(11) NOT NULL,
  `id_jenis_ikan` int(11) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
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
-- Table structure for table `tbl_jabatan_karyawan`
--

CREATE TABLE `tbl_jabatan_karyawan` (
  `id_jabatan_karyawan` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `status_pengguna_jasa` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_ikan`
--

CREATE TABLE `tbl_jenis_ikan` (
  `id_jenis_ikan` int(11) NOT NULL,
  `nama_indonesia` varchar(255) DEFAULT NULL,
  `nama_latin` varchar(255) DEFAULT NULL,
  `nama_daerah` varchar(255) DEFAULT NULL,
  `gambar_ikan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kapal`
--

CREATE TABLE `tbl_jenis_kapal` (
  `id_jenis_kapal` int(11) NOT NULL,
  `nama_jenis_kapal` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jenis_kapal`
--

INSERT INTO `tbl_jenis_kapal` (`id_jenis_kapal`, `nama_jenis_kapal`, `status`) VALUES
(1, 'Kapal Motor', '1'),
(2, 'Kapal Motor Tempel', '1'),
(3, 'Perahu Tanpa Motor', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_layanan`
--

CREATE TABLE `tbl_jenis_layanan` (
  `id_jenis_layanan` int(11) NOT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `nama_jenis_layanan` varchar(255) DEFAULT NULL,
  `id_satuan` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kapal`
--

CREATE TABLE `tbl_kapal` (
  `id_kapal` int(11) NOT NULL,
  `id_tipe_kapal` int(11) DEFAULT NULL,
  `id_jenis_kapal` int(11) DEFAULT NULL,
  `id_bendera_kapal` int(11) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `jumlah_abk` varchar(255) DEFAULT NULL,
  `merk_mesin_utama` varchar(255) DEFAULT NULL,
  `merk_mesin_tambahan` varchar(255) DEFAULT NULL,
  `pk_ps_hp` varchar(255) DEFAULT NULL,
  `gt` varchar(255) DEFAULT NULL,
  `panjang_kapal` varchar(255) DEFAULT NULL,
  `lebar_kapal` varchar(255) DEFAULT NULL,
  `draft_kapal` varchar(255) DEFAULT NULL,
  `tanda_selar` varchar(255) DEFAULT NULL,
  `id_alat_tangkap_kapal` int(11) DEFAULT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `siup` varchar(255) DEFAULT NULL,
  `file_siup` varchar(255) DEFAULT NULL,
  `sikpi` varchar(255) DEFAULT NULL,
  `file_sikpi` varchar(255) DEFAULT NULL,
  `sipi` varchar(255) DEFAULT NULL,
  `file_sipi` varchar(255) DEFAULT NULL,
  `sipi_andon` varchar(255) DEFAULT NULL,
  `file_sipi_andon` varchar(255) DEFAULT NULL,
  `surat_kelayakan` varchar(255) DEFAULT NULL,
  `file_surat_kelayakan` varchar(255) DEFAULT NULL,
  `pas_kecil_pas_besar_surat_laut` varchar(255) DEFAULT NULL,
  `file_pas_kecil_pas_besar_surat_laut` varchar(255) DEFAULT NULL,
  `surat_ukur_kapal` varchar(255) DEFAULT NULL,
  `file_surat_ukur_kapal` varchar(255) DEFAULT NULL,
  `gross_akte_kapal` varchar(255) DEFAULT NULL,
  `file_gross_akte_kapal` varchar(255) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_wpp` int(11) DEFAULT NULL,
  `dpi` varchar(255) DEFAULT NULL,
  `pelabuhan_pangkalan` varchar(255) DEFAULT NULL,
  `tanggal_sipi` date DEFAULT NULL,
  `tanggal_akhir_sipi` date DEFAULT NULL,
  `pengguna_buat` varchar(255) DEFAULT NULL,
  `status_sipi` enum('0','1','2') DEFAULT NULL,
  `id_jenis_layanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(355) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_jabatan_karyawan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '7700015071', '$2y$10$WfdBJdKFOpteuengmVyQnuDBe7nutID8qcG.tDjxvV1o9KIk5Y2j.', NULL, NULL, NULL, 'Mega Santi Sekartaji, S.KM.', NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'megasekartaji94@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, '2021-05-07 23:07:47', '2021-05-07 23:03:31', '2021-04-20 10:43:05', NULL, NULL, 'download1.png', 'perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '6503616001', '$2y$10$oRMHJzLLZL5vDkhtLRK.euZEFIFTGTVESiyLDENpUdgjP8rKQ42mq', NULL, NULL, NULL, 'dr. H.Titis Wahyuono, M.Si.', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-27 10:32:44', NULL, '2021-04-22 19:18:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '6503616002', '$2y$10$b45M2ZHRZVlHXid.uj77/eItPwAuTDJbnOzXlMHINtRyT9/CWpdlG', '0603027001', '', '', 'Budi Purwanto, S.Si, M.Si.', '2016-01-01', '0000-00-00', 'No. 05/Kep.YPMI/I/2016', '', '', '', 2, '085742327616', 'akubudi89@gmail.com', 'Gonowelang, RT 004 RW 002, Ngaru-aru, Banyudono, Boyolali', 'Magelang', '1970-02-03', 'S2 ', 'Sains', NULL, NULL, '2021-04-30 10:38:53', NULL, '2021-04-22 22:12:12', '2021-04-23 19:52:19', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '7700015076', '$2y$10$bO/.enyeGD12rhYRUVnIO.qkSkwn0eRcbPngowmZv/jwWlvzQVVMG', NULL, NULL, NULL, 'Edy Setiyawan, A.Md.', NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 10:39:26', NULL, '2021-04-30 10:34:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna_jasa`
--

CREATE TABLE `tbl_pengguna_jasa` (
  `id_pengguna_jasa` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik_ktp` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_jabatan_karyawan` int(11) DEFAULT NULL,
  `pas_masuk` date DEFAULT NULL,
  `pas_keluar` date DEFAULT NULL,
  `nomor_kartu` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tgl_kartu` date DEFAULT NULL,
  `tgl_akhir_kartu` date DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peralatan`
--

CREATE TABLE `tbl_peralatan` (
  `id_peralatan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `merk_tipe` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `file_peralatan` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_siup` varchar(255) DEFAULT NULL,
  `file_siup` varchar(255) DEFAULT NULL,
  `no_npwp` varchar(255) DEFAULT NULL,
  `file_npwp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_pic` varchar(355) DEFAULT NULL,
  `no_telpon_pic` varchar(255) DEFAULT NULL,
  `email_pic` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(255) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_kapal`
--

CREATE TABLE `tbl_tipe_kapal` (
  `id_tipe_kapal` int(11) NOT NULL,
  `nama_tipe_kapal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wpp`
--

CREATE TABLE `tbl_wpp` (
  `id_wpp` int(11) NOT NULL,
  `nama_wpp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alat_tangkap_kapal`
--
ALTER TABLE `tbl_alat_tangkap_kapal`
  ADD PRIMARY KEY (`id_alat_tangkap_kapal`);

--
-- Indexes for table `tbl_bendera_kapal`
--
ALTER TABLE `tbl_bendera_kapal`
  ADD PRIMARY KEY (`id_bendera_kapal`);

--
-- Indexes for table `tbl_daerah_operasional_penangkapan_ikan`
--
ALTER TABLE `tbl_daerah_operasional_penangkapan_ikan`
  ADD PRIMARY KEY (`id_daerah_operasional_penangkapan_ikan`);

--
-- Indexes for table `tbl_dermaga`
--
ALTER TABLE `tbl_dermaga`
  ADD PRIMARY KEY (`id_dermaga`);

--
-- Indexes for table `tbl_harga_ikan`
--
ALTER TABLE `tbl_harga_ikan`
  ADD PRIMARY KEY (`id_harga_ikan`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jabatan_karyawan`
--
ALTER TABLE `tbl_jabatan_karyawan`
  ADD PRIMARY KEY (`id_jabatan_karyawan`);

--
-- Indexes for table `tbl_jenis_ikan`
--
ALTER TABLE `tbl_jenis_ikan`
  ADD PRIMARY KEY (`id_jenis_ikan`);

--
-- Indexes for table `tbl_jenis_kapal`
--
ALTER TABLE `tbl_jenis_kapal`
  ADD PRIMARY KEY (`id_jenis_kapal`);

--
-- Indexes for table `tbl_jenis_layanan`
--
ALTER TABLE `tbl_jenis_layanan`
  ADD PRIMARY KEY (`id_jenis_layanan`);

--
-- Indexes for table `tbl_kapal`
--
ALTER TABLE `tbl_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_pengguna_jasa`
--
ALTER TABLE `tbl_pengguna_jasa`
  ADD PRIMARY KEY (`id_pengguna_jasa`);

--
-- Indexes for table `tbl_peralatan`
--
ALTER TABLE `tbl_peralatan`
  ADD PRIMARY KEY (`id_peralatan`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_tipe_kapal`
--
ALTER TABLE `tbl_tipe_kapal`
  ADD PRIMARY KEY (`id_tipe_kapal`);

--
-- Indexes for table `tbl_wpp`
--
ALTER TABLE `tbl_wpp`
  ADD PRIMARY KEY (`id_wpp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alat_tangkap_kapal`
--
ALTER TABLE `tbl_alat_tangkap_kapal`
  MODIFY `id_alat_tangkap_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bendera_kapal`
--
ALTER TABLE `tbl_bendera_kapal`
  MODIFY `id_bendera_kapal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_daerah_operasional_penangkapan_ikan`
--
ALTER TABLE `tbl_daerah_operasional_penangkapan_ikan`
  MODIFY `id_daerah_operasional_penangkapan_ikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dermaga`
--
ALTER TABLE `tbl_dermaga`
  MODIFY `id_dermaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_harga_ikan`
--
ALTER TABLE `tbl_harga_ikan`
  MODIFY `id_harga_ikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_jabatan_karyawan`
--
ALTER TABLE `tbl_jabatan_karyawan`
  MODIFY `id_jabatan_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis_ikan`
--
ALTER TABLE `tbl_jenis_ikan`
  MODIFY `id_jenis_ikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis_kapal`
--
ALTER TABLE `tbl_jenis_kapal`
  MODIFY `id_jenis_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jenis_layanan`
--
ALTER TABLE `tbl_jenis_layanan`
  MODIFY `id_jenis_layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kapal`
--
ALTER TABLE `tbl_kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengguna_jasa`
--
ALTER TABLE `tbl_pengguna_jasa`
  MODIFY `id_pengguna_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peralatan`
--
ALTER TABLE `tbl_peralatan`
  MODIFY `id_peralatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tipe_kapal`
--
ALTER TABLE `tbl_tipe_kapal`
  MODIFY `id_tipe_kapal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wpp`
--
ALTER TABLE `tbl_wpp`
  MODIFY `id_wpp` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
