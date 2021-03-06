-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 02:17 PM
-- Server version: 5.7.24-log
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diklat_ombakperikanan`
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
(2, 'JARING INSANG HANYUT', '1'),
(3, 'PANCING', '1'),
(4, 'BUBU (TRAPS)', '1'),
(5, 'JARING INSANG ', '1'),
(6, 'BAGAN PERAHU', '1'),
(7, 'PENGANGKUT', '1'),
(8, 'JARING RAMPUS', '1'),
(9, 'SERO', '1'),
(10, 'BAGAN TANCAP', '1'),
(11, 'PUKAT CINCIN PELAGIS KECIL SATU KAPAL', '1'),
(12, 'HAND LINE/PANCING ULUR', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bendera_kapal`
--

CREATE TABLE `tbl_bendera_kapal` (
  `id_bendera_kapal` int(11) NOT NULL,
  `nama_bendera_kapal` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bendera_kapal`
--

INSERT INTO `tbl_bendera_kapal` (`id_bendera_kapal`, `nama_bendera_kapal`, `status`) VALUES
(1, 'Indonesia', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuaca`
--

CREATE TABLE `tbl_cuaca` (
  `id_cuaca` int(11) NOT NULL,
  `nama_cuaca` varchar(255) DEFAULT NULL,
  `link_cuaca` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cuaca`
--

INSERT INTO `tbl_cuaca` (`id_cuaca`, `nama_cuaca`, `link_cuaca`) VALUES
(1, 'Tinggi Gelombang', 'http://peta-maritim.bmkg.go.id/ofs-static/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daerah_operasional_penangkapan_ikan`
--

CREATE TABLE `tbl_daerah_operasional_penangkapan_ikan` (
  `id_daerah_operasional_penangkapan_ikan` int(11) NOT NULL,
  `id_wpp` int(11) DEFAULT NULL,
  `dpi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_daerah_operasional_penangkapan_ikan`
--

INSERT INTO `tbl_daerah_operasional_penangkapan_ikan` (`id_daerah_operasional_penangkapan_ikan`, `id_wpp`, `dpi`, `status`) VALUES
(4, 1, 'INDONESIA', '1'),
(5, 3, 'INDONESIA', '1'),
(7, 4, 'INDONESIA', '1');

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
-- Table structure for table `tbl_info_dpi`
--

CREATE TABLE `tbl_info_dpi` (
  `id_info_dpi` int(11) NOT NULL,
  `nama_info_dpi` varchar(255) DEFAULT NULL,
  `link_info_dpi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_harga_ikan`
--

CREATE TABLE `tbl_info_harga_ikan` (
  `id_info_harga_ikan` int(11) NOT NULL,
  `nama_harga_ikan` varchar(255) DEFAULT NULL,
  `link_harga_ikan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_info_harga_ikan`
--

INSERT INTO `tbl_info_harga_ikan` (`id_info_harga_ikan`, `nama_harga_ikan`, `link_harga_ikan`) VALUES
(1, 'xsa', 's');

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
(1, 'PERAHU TANPA MOTOR', '1'),
(2, 'KAPAL MOTOR TEMPEL', '1'),
(3, 'KAPAL MOTOR ', '1');

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

--
-- Dumping data for table `tbl_jenis_layanan`
--

INSERT INTO `tbl_jenis_layanan` (`id_jenis_layanan`, `id_layanan`, `nama_jenis_layanan`, `id_satuan`, `deskripsi`, `harga`, `status`) VALUES
(1, 2, 'Orang/Umum', 1, 'Orang/Umum', '1000', '1'),
(2, 2, 'Becak/ Gerobak/ Cikar/ Dokar/ Sepeda', 1, 'Becak/ Gerobak/ Cikar/ Dokar/ Sepeda', '1000', '1'),
(3, 2, 'ORANG/UMUM', 11, '', '1000', '1'),
(4, 2, 'BECAK/GERBOAK/CIKAR/DOKAR/SEPEDA', 11, '', '1000', '1'),
(5, 2, 'Motor', 14, '', '15000', '1'),
(6, 2, 'Motor', 11, '', '2000', '1'),
(7, 2, 'Mobil', 11, '', '3000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_undang_undang`
--

CREATE TABLE `tbl_jenis_undang_undang` (
  `id_jenis_undang_undang` int(11) NOT NULL,
  `jenis_undang_undang` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jenis_undang_undang`
--

INSERT INTO `tbl_jenis_undang_undang` (`id_jenis_undang_undang`, `jenis_undang_undang`, `status`) VALUES
(6, 'Undang-Undang', '1'),
(7, 'Peraturan Menteri', '1'),
(8, 'Peraturan Daerah', '1'),
(9, 'Peraturan Gubernur', '1'),
(10, 'Peraturan Bupati', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kapal`
--

CREATE TABLE `tbl_kapal` (
  `id_kapal` int(11) NOT NULL,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `id_tipe_kapal` int(11) DEFAULT NULL,
  `id_jenis_kapal` int(11) DEFAULT NULL,
  `id_bendera_kapal` int(11) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `nahkoda` varchar(255) DEFAULT NULL,
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
  `id_dopi` int(11) DEFAULT NULL,
  `pelabuhan_pangkalan` varchar(255) DEFAULT NULL,
  `tanggal_sipi` date DEFAULT NULL,
  `tanggal_akhir_sipi` date DEFAULT NULL,
  `pengguna_buat` varchar(255) DEFAULT NULL,
  `status_sipi` enum('0','1','2') DEFAULT NULL,
  `id_jenis_layanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kapal`
--

INSERT INTO `tbl_kapal` (`id_kapal`, `nama_kapal`, `id_tipe_kapal`, `id_jenis_kapal`, `id_bendera_kapal`, `pemilik`, `nahkoda`, `jumlah_abk`, `merk_mesin_utama`, `merk_mesin_tambahan`, `pk_ps_hp`, `gt`, `panjang_kapal`, `lebar_kapal`, `draft_kapal`, `tanda_selar`, `id_alat_tangkap_kapal`, `id_perusahaan`, `alamat`, `siup`, `file_siup`, `sikpi`, `file_sikpi`, `sipi`, `file_sipi`, `sipi_andon`, `file_sipi_andon`, `surat_kelayakan`, `file_surat_kelayakan`, `pas_kecil_pas_besar_surat_laut`, `file_pas_kecil_pas_besar_surat_laut`, `surat_ukur_kapal`, `file_surat_ukur_kapal`, `gross_akte_kapal`, `file_gross_akte_kapal`, `id_provinsi`, `id_wpp`, `id_dopi`, `pelabuhan_pangkalan`, `tanggal_sipi`, `tanggal_akhir_sipi`, `pengguna_buat`, `status_sipi`, `id_jenis_layanan`) VALUES
(1, 'MINA SEJAHTERA 2', 1, 2, 1, 'AAM', '-', '-', 'YAMAHA ', '-', '15 PK', '1', '-', '-', '-', '- ', 2, 1, 'KP. CIBEAS RT 2 RW 1 Desa Sawarna Keamatan Bayah Kab Lebak', '-', NULL, '-', NULL, '-', NULL, '-', NULL, '-', NULL, '45.21.3698.195.00050', NULL, '-', NULL, '-', NULL, 1, 3, NULL, 'PP Sawarna', '2021-06-01', '2021-06-15', 'Kapal Penangkap Ivan', '2', 3),
(2, 'ANUGRAH JAYAs', 1, 1, 1, 'roni', 'ova', '12', 'as', 'asa', 'w', 'w', 'a', 'a', 'w', 'w', 4, 1, '-', '87600199', NULL, 'sa', NULL, 'saa', NULL, 'www', NULL, 'csacas', NULL, 'csa', NULL, 'csa', NULL, 'csa', NULL, 1, 1, 7, 'csacas', '2021-07-02', '2021-07-10', 'csacas', '1', 4);

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
  `id_jabatan_karyawan` int(11) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
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

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama`, `deskripsi`, `status`) VALUES
(1, 'Pendapatan Lain-lain yang  sah', '', '1'),
(2, 'Pelayanan Pas Masuk', 'Pelayanan pas masuk orang, sepeda motor, mobil, es, dan truck/bis', '1'),
(3, 'Layanan Jasa Tambat Labuh Kapal Perikanan', '', '1'),
(4, 'Pelayanan Air Bersih', 'Pelayanan kebersihan TPI, Gudang Pengepakan, KIOS Basah, KIOS Kering, dan Kolam Labuh', '1'),
(5, 'Pemakaian Slipway Docking', 'Pelayanan slipway docking', '1'),
(6, 'Pelayanan Sewa Bangunan', 'Pemakaian bangunan permanen di Pelabuhan', '1'),
(7, 'Pelayanan Sewa Lahan', 'Pemakaian lahan di pelabuhan', '1'),
(8, 'Pelayanan Pemakaian Gedung', 'Pelayanan pemakaian Gedung Pertemuan, Guest House, dan Rumah Singgah Andon', '1'),
(9, 'Penyewaan Peralatan/Kendaraan', 'Pemakaian Peralatan di Pelabuhan', '1'),
(10, 'Pelayanan Wisata Bahari', 'Pelayanan pemakaian kendaraan kapal dan peralatan selam lengkap untuk Wisata Bahari', '1');

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
  `status` enum('0','1') DEFAULT NULL,
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
  `sumber_gaji` varchar(50) DEFAULT NULL,
  `nip_niptt` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nik`, `password`, `nidn`, `nidk`, `nitk`, `nama`, `tgl_masuk`, `tgl_keluar`, `sk_1`, `masa_kerja_sk_1`, `sk_2`, `masa_kerja_sk_2`, `id_jabatan`, `no_hp`, `email`, `alamat`, `tempat_lahir`, `tgl_lahir`, `pendidikan_terakhir`, `program_studi`, `status`, `id_bidang`, `time_login_pegawai`, `time_logout_pegawai`, `time_create_pegawai`, `time_update_pegawai`, `kegiatan_yang_diikuti`, `gambar_pegawai`, `jenis_kelamin`, `nik_ktp`, `agama`, `kewarganegaraan`, `rt`, `rw`, `dusun`, `kelurahan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `telpon_rumah`, `nip_pns`, `status_kepegawaian`, `status_keaktifan`, `sk_cpns`, `tanggal_sk_cpns`, `lembaga_pengangkat`, `golongan`, `sumber_gaji`, `nip_niptt`, `jabatan`) VALUES
(1, '7700015071', '$2y$10$dYrK4uPeDfJpZc8t7lolbOfJViTkYWgPnYqzladUbt4owczW7qOki', NULL, NULL, NULL, 'Admin DKP BANTEN', NULL, NULL, NULL, NULL, NULL, NULL, 7, '422412412', 'dkpprovbanten@gmail.com', 'Jl Nangka', NULL, NULL, NULL, NULL, '1', 6, '2021-07-02 11:31:34', '2021-07-02 11:53:06', '2021-04-20 10:43:05', '2021-07-02 11:52:20', NULL, 'download1.png', 'perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PNS'),
(8, '12', '$2y$10$KX1sqhQl57UKC7Qnq7s1turWmDG.XWOtB20up64iiaqs8ZQuUcd6m', NULL, NULL, NULL, 'aiman', NULL, NULL, NULL, NULL, NULL, NULL, 7, '1', 'admin@gmail.com', 'a', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-07-02 12:53:50', '2021-07-02 11:38:21', NULL, NULL, 'download1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PNS');

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

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_perusahaan`, `nama`, `no_siup`, `file_siup`, `no_npwp`, `file_npwp`, `alamat`, `no_telpon`, `email`, `nama_pic`, `no_telpon_pic`, `email_pic`, `status`) VALUES
(1, 'Perorangan', '-', NULL, '-', NULL, '-', '-', '-', '-', '-', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `gambar_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `nama`, `content`, `gambar_profil`) VALUES
(1, 'OMBAK PERIKANAN', 'Banten', 'logo_banten.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `nama_provinsi`, `status`) VALUES
(1, 'Banten', '1'),
(2, 'Lampung', '1'),
(3, 'Jawa Barat', '1'),
(4, 'Jawa Tengah', '1'),
(5, 'Jawa Timur', '1');

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

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `nama_satuan`, `satuan`, `deskripsi`, `status`) VALUES
(11, 'per sekali masuk', 'M', 'Pehitungan setiap kali memasuki Pelabuhan', '1'),
(12, 'per kendaraan', 'K', 'Perhitungan sesuai dengan jenis kendaraan yang digunakan', '1'),
(13, 'per sekali bongkar', 'B', 'Perhitungan dilakukan pada setiap kali melakukan bongkar', '1'),
(14, 'per bulan', 'b', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_kapal`
--

CREATE TABLE `tbl_tipe_kapal` (
  `id_tipe_kapal` int(11) NOT NULL,
  `nama_tipe_kapal` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tipe_kapal`
--

INSERT INTO `tbl_tipe_kapal` (`id_tipe_kapal`, `nama_tipe_kapal`, `status`) VALUES
(1, 'Kapal', '1'),
(2, 'Kapal Andon', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_undang_undang`
--

CREATE TABLE `tbl_undang_undang` (
  `id_undang_undang` int(11) NOT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `id_jenis_undang_undang` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_undang_undang`
--

INSERT INTO `tbl_undang_undang` (`id_undang_undang`, `nomor`, `tahun`, `id_jenis_undang_undang`, `judul`, `deskripsi`, `status`) VALUES
(1, '22', '2018', 7, 'BIAYA PENGELOLAAN GEDUNG NEGARA', '<p>ok</p>', '1'),
(2, '23', '2014', 8, 'PEMERINTAHAN DAERAH', '<p>PEMERINTAHAN DAERAH<br></p>', '1'),
(4, '11', '2022', 10, 'contoh', '<p>ok</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wpp`
--

CREATE TABLE `tbl_wpp` (
  `id_wpp` int(11) NOT NULL,
  `nama_wpp` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_wpp`
--

INSERT INTO `tbl_wpp` (`id_wpp`, `nama_wpp`, `status`) VALUES
(1, 'WPP-RI 712', '1'),
(3, 'WPP-RI 573', '1'),
(4, 'WPP-RI 572', '1');

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
-- Indexes for table `tbl_cuaca`
--
ALTER TABLE `tbl_cuaca`
  ADD PRIMARY KEY (`id_cuaca`);

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
-- Indexes for table `tbl_info_dpi`
--
ALTER TABLE `tbl_info_dpi`
  ADD PRIMARY KEY (`id_info_dpi`);

--
-- Indexes for table `tbl_info_harga_ikan`
--
ALTER TABLE `tbl_info_harga_ikan`
  ADD PRIMARY KEY (`id_info_harga_ikan`);

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
-- Indexes for table `tbl_jenis_undang_undang`
--
ALTER TABLE `tbl_jenis_undang_undang`
  ADD PRIMARY KEY (`id_jenis_undang_undang`);

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
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

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
-- Indexes for table `tbl_undang_undang`
--
ALTER TABLE `tbl_undang_undang`
  ADD PRIMARY KEY (`id_undang_undang`);

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
  MODIFY `id_alat_tangkap_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_bendera_kapal`
--
ALTER TABLE `tbl_bendera_kapal`
  MODIFY `id_bendera_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cuaca`
--
ALTER TABLE `tbl_cuaca`
  MODIFY `id_cuaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_daerah_operasional_penangkapan_ikan`
--
ALTER TABLE `tbl_daerah_operasional_penangkapan_ikan`
  MODIFY `id_daerah_operasional_penangkapan_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `tbl_info_dpi`
--
ALTER TABLE `tbl_info_dpi`
  MODIFY `id_info_dpi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_info_harga_ikan`
--
ALTER TABLE `tbl_info_harga_ikan`
  MODIFY `id_info_harga_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_jabatan_karyawan`
--
ALTER TABLE `tbl_jabatan_karyawan`
  MODIFY `id_jabatan_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_ikan`
--
ALTER TABLE `tbl_jenis_ikan`
  MODIFY `id_jenis_ikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis_kapal`
--
ALTER TABLE `tbl_jenis_kapal`
  MODIFY `id_jenis_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jenis_layanan`
--
ALTER TABLE `tbl_jenis_layanan`
  MODIFY `id_jenis_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_jenis_undang_undang`
--
ALTER TABLE `tbl_jenis_undang_undang`
  MODIFY `id_jenis_undang_undang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kapal`
--
ALTER TABLE `tbl_kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_tipe_kapal`
--
ALTER TABLE `tbl_tipe_kapal`
  MODIFY `id_tipe_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_undang_undang`
--
ALTER TABLE `tbl_undang_undang`
  MODIFY `id_undang_undang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_wpp`
--
ALTER TABLE `tbl_wpp`
  MODIFY `id_wpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
