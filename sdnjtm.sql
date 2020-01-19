-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2020 at 03:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdnjtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` varchar(5) NOT NULL DEFAULT 'admin',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `id_peserta` int(4) UNSIGNED ZEROFILL NOT NULL,
  `biaya_registrasi` bigint(20) NOT NULL,
  `biaya_akomodasi` bigint(20) NOT NULL,
  `wakaf` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `id_peserta`, `biaya_registrasi`, `biaya_akomodasi`, `wakaf`) VALUES
(1, 0033, 100000, 4500000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(2) NOT NULL,
  `level` varchar(8) NOT NULL DEFAULT 'pengajar',
  `nama_p` varchar(20) NOT NULL,
  `tempat_lahir_p` varchar(20) NOT NULL,
  `tanggal_lahir_p` date NOT NULL,
  `usia_p` int(2) NOT NULL,
  `jenis_k` varchar(1) NOT NULL,
  `alamat_p` varchar(30) NOT NULL,
  `angkatan` int(2) NOT NULL,
  `status_pernikahan_p` varchar(20) NOT NULL,
  `foto_diri` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status_keaktifan` int(1) DEFAULT '0',
  `program_p` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `level`, `nama_p`, `tempat_lahir_p`, `tanggal_lahir_p`, `usia_p`, `jenis_k`, `alamat_p`, `angkatan`, `status_pernikahan_p`, `foto_diri`, `no_hp`, `status_keaktifan`, `program_p`) VALUES
(0, 'pengajar', 'belum ada', '-', '2020-01-01', 0, '-', '				Karawang				', 45, 'Menikah', 'Pengurus_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional1.png', '', 0, ''),
(10, 'pengajar', 'Syamsul Bahri', 'Karawang', '1951-04-04', 68, 'L', '				Karawang				', 45, 'Menikah', 'Pengurus_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional.png', '089606941238', 1, '1 Bulan 30 Juz'),
(15, 'pengajar', 'Syauqi  ', 'Jakarta', '2018-01-01', 2, 'L', '				Jakarta				', 45, 'lajang', 'Penasihat_Yayasan_Karantina_Tahfizh_Al-quran_nasional.jpg', '089606941238', 1, '1 Bulan 30 Juz');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(1) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'dimatikan',
  `isi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `status`, `isi`) VALUES
(2, 'dihidupkan', '<p>Pengumuman kedatangan Peserta Karantina&nbsp;</p>\r\n<p style="padding-left: 40px;">1. Pengumuman akan disampaikan ketika menjelang hari pembukaan</p>\r\n<p style="padding-left: 40px;">2</p>\r\n<p style="padding-left: 40px;">3</p>\r\n<p style="padding-left: 40px;">4. Kedatangan peserta ikhwan bertempat di Hotel ayong linggarjati</p>');

-- --------------------------------------------------------

--
-- Table structure for table `perolehan_perhari`
--

CREATE TABLE `perolehan_perhari` (
  `id_perolehan` int(2) NOT NULL,
  `id_peserta` int(4) NOT NULL DEFAULT '0',
  `h1` int(2) NOT NULL DEFAULT '0',
  `h2` int(2) NOT NULL DEFAULT '0',
  `h3` int(2) NOT NULL DEFAULT '0',
  `h4` int(2) NOT NULL DEFAULT '0',
  `h5` int(2) NOT NULL DEFAULT '0',
  `h6` int(2) NOT NULL DEFAULT '0',
  `h7` int(2) NOT NULL DEFAULT '0',
  `h8` int(2) NOT NULL DEFAULT '0',
  `h9` int(2) NOT NULL DEFAULT '0',
  `h10` int(2) NOT NULL DEFAULT '0',
  `h11` int(2) NOT NULL DEFAULT '0',
  `h12` int(2) NOT NULL DEFAULT '0',
  `h13` int(2) NOT NULL DEFAULT '0',
  `h14` int(2) NOT NULL DEFAULT '0',
  `h15` int(2) NOT NULL DEFAULT '0',
  `h16` int(2) NOT NULL DEFAULT '0',
  `h17` int(2) NOT NULL DEFAULT '0',
  `h18` int(2) NOT NULL DEFAULT '0',
  `h19` int(2) NOT NULL DEFAULT '0',
  `h20` int(2) NOT NULL DEFAULT '0',
  `h21` int(2) NOT NULL DEFAULT '0',
  `h22` int(2) NOT NULL DEFAULT '0',
  `h23` int(2) NOT NULL DEFAULT '0',
  `h24` int(2) NOT NULL DEFAULT '0',
  `h25` int(2) NOT NULL DEFAULT '0',
  `h26` int(2) NOT NULL DEFAULT '0',
  `h27` int(2) NOT NULL DEFAULT '0',
  `h28` int(2) NOT NULL DEFAULT '0',
  `h29` int(2) NOT NULL DEFAULT '0',
  `h30` int(2) NOT NULL DEFAULT '0',
  `h31` int(2) NOT NULL DEFAULT '0',
  `h32` int(2) NOT NULL DEFAULT '0',
  `h33` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehan_perhari`
--

INSERT INTO `perolehan_perhari` (`id_perolehan`, `id_peserta`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`, `h24`, `h25`, `h26`, `h27`, `h28`, `h29`, `h30`, `h31`, `h32`, `h33`) VALUES
(1, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `nope`, `judul`, `isi`, `status`) VALUES
(9, 'Fadly', '081213070702', 'test1', 'hai', 2),
(10, 'rifai', '081213070702', 'test2', 'hai lagi', 2),
(11, 'tesssss', '081213070702', 'tesssssssssssssss', 'dsfdsfs', 2),
(12, 'Dede', '082214783760', 'Tanya Syahadah', 'tststa', 2),
(13, 'Ffs', '7876867867876', '768rrte', 'ertreterertertertretretretert', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id_pengajar` int(2) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nama_lengkap_arab` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_ayah_arab` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `program` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `level` varchar(8) NOT NULL DEFAULT 'peserta',
  `status` varchar(20) NOT NULL DEFAULT 'belum diverifikasi',
  `status_peserta` varchar(20) NOT NULL DEFAULT 'Baru',
  `jenis_kelamin` varchar(12) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_handphone` varchar(16) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL DEFAULT 'TIDAK LULUS',
  `dokumen` text NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `no_darurat` varchar(13) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `fb` varchar(30) NOT NULL,
  `ig` varchar(30) NOT NULL,
  `stok_hafalan` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alergi_makanan` varchar(30) NOT NULL,
  `ukuran_baju` varchar(30) NOT NULL,
  `info_karantina` varchar(30) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL DEFAULT 'Lajang',
  `nilai_tahsin` int(2) NOT NULL DEFAULT '0',
  `nomor_syahadah` varchar(20) NOT NULL DEFAULT 'YKTN.',
  `nilai_syahadah` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_syahadah` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `perolehan` float NOT NULL DEFAULT '0',
  `foto_diri` text NOT NULL,
  `foto_suket` varchar(100) NOT NULL,
  `foto_identitas` text NOT NULL,
  `sekolah_instansi` varchar(50) NOT NULL,
  `tanggal_mendaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uang_regis` int(12) NOT NULL DEFAULT '0',
  `uang_wakaf` int(12) NOT NULL DEFAULT '0',
  `uang_akomodasi` int(50) NOT NULL DEFAULT '0',
  `h1` int(2) DEFAULT NULL,
  `h2` int(2) DEFAULT NULL,
  `h3` int(2) DEFAULT NULL,
  `h4` int(2) DEFAULT NULL,
  `h5` int(2) DEFAULT NULL,
  `h6` int(2) DEFAULT NULL,
  `h7` int(2) DEFAULT NULL,
  `h8` int(2) DEFAULT NULL,
  `h9` int(2) DEFAULT NULL,
  `h10` int(2) DEFAULT NULL,
  `h11` int(2) DEFAULT NULL,
  `h12` int(2) DEFAULT NULL,
  `h13` int(2) DEFAULT NULL,
  `h14` int(2) DEFAULT NULL,
  `h15` int(2) DEFAULT NULL,
  `h16` int(2) DEFAULT NULL,
  `h17` int(2) DEFAULT NULL,
  `h18` int(2) DEFAULT NULL,
  `h19` int(2) DEFAULT NULL,
  `h20` int(2) DEFAULT NULL,
  `h21` int(2) DEFAULT NULL,
  `h22` int(2) DEFAULT NULL,
  `h23` int(2) DEFAULT NULL,
  `h24` int(2) DEFAULT NULL,
  `h25` int(2) DEFAULT NULL,
  `h26` int(2) DEFAULT NULL,
  `h27` int(2) DEFAULT NULL,
  `h28` int(2) DEFAULT NULL,
  `h29` int(2) DEFAULT NULL,
  `h30` int(2) DEFAULT NULL,
  `h31` int(2) DEFAULT NULL,
  `h32` int(2) DEFAULT NULL,
  `h33` int(2) DEFAULT NULL,
  `h34` int(2) DEFAULT NULL,
  `h35` int(2) DEFAULT NULL,
  `j1` int(2) NOT NULL DEFAULT '0',
  `j2` int(2) NOT NULL DEFAULT '0',
  `j3` int(2) NOT NULL DEFAULT '0',
  `j4` int(2) NOT NULL DEFAULT '0',
  `j5` int(2) NOT NULL DEFAULT '0',
  `j6` int(2) NOT NULL DEFAULT '0',
  `j7` int(2) NOT NULL DEFAULT '0',
  `j8` int(2) NOT NULL DEFAULT '0',
  `j9` int(2) NOT NULL DEFAULT '0',
  `j10` int(2) NOT NULL DEFAULT '0',
  `j11` int(2) NOT NULL DEFAULT '0',
  `j12` int(2) NOT NULL DEFAULT '0',
  `j13` int(2) NOT NULL DEFAULT '0',
  `j14` int(2) NOT NULL DEFAULT '0',
  `j15` int(2) NOT NULL DEFAULT '0',
  `j16` int(2) NOT NULL DEFAULT '0',
  `j17` int(2) NOT NULL DEFAULT '0',
  `j18` int(2) NOT NULL DEFAULT '0',
  `j19` int(2) NOT NULL DEFAULT '0',
  `j20` int(2) NOT NULL DEFAULT '0',
  `j21` int(2) NOT NULL DEFAULT '0',
  `j22` int(2) NOT NULL DEFAULT '0',
  `j23` int(2) NOT NULL DEFAULT '0',
  `j24` int(2) NOT NULL DEFAULT '0',
  `j25` int(2) NOT NULL DEFAULT '0',
  `j26` int(2) NOT NULL DEFAULT '0',
  `j27` int(2) NOT NULL DEFAULT '0',
  `j28` int(2) NOT NULL DEFAULT '0',
  `j29` int(2) NOT NULL DEFAULT '0',
  `j30` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_pengajar`, `username`, `email`, `password`, `nama_lengkap`, `nama_lengkap_arab`, `nama_ayah_arab`, `program`, `angkatan`, `nama_panggilan`, `level`, `status`, `status_peserta`, `jenis_kelamin`, `kewarganegaraan`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `no_handphone`, `nama_ayah`, `keterangan`, `dokumen`, `kabupaten`, `provinsi`, `no_darurat`, `no_identitas`, `fb`, `ig`, `stok_hafalan`, `pekerjaan`, `alergi_makanan`, `ukuran_baju`, `info_karantina`, `status_pernikahan`, `nilai_tahsin`, `nomor_syahadah`, `nilai_syahadah`, `nama_syahadah`, `perolehan`, `foto_diri`, `foto_suket`, `foto_identitas`, `sekolah_instansi`, `tanggal_mendaftar`, `uang_regis`, `uang_wakaf`, `uang_akomodasi`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`, `h24`, `h25`, `h26`, `h27`, `h28`, `h29`, `h30`, `h31`, `h32`, `h33`, `h34`, `h35`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `j9`, `j10`, `j11`, `j12`, `j13`, `j14`, `j15`, `j16`, `j17`, `j18`, `j19`, `j20`, `j21`, `j22`, `j23`, `j24`, `j25`, `j26`, `j27`, `j28`, `j29`, `j30`) VALUES
(0033, 10, 'Dede_husen', 'adehusen@gmail.com', '04051992', 'Bustomi ', 'دد حشين بن ثسنا', 'ثسنا', '2 Pekan 10 Juz', '44', '', 'peserta', 'diverifikasi', 'Peserta Baru', 'L', 'Indonesia', 'Majalengka', '2005-12-27', '27', '															Desa Bagjasari Rt 18 Rw 05 Kecamatan Cikijing Kabupaten Jawa Barat 45466													', '082214783760', 'Tisna', 'LULUS', '', 'Majalengka', 'Jawa Barat', '089606909009', '3210020300408344', '', '', '14 Juz', 'Wiraswasta', '', 'XL Dewasa', '', 'Lajang', 0, '', 'ممتز', 'بشطمى بن تشنا', 23, 'operator-icon5.png', 'operator-icon5.png', 'operator-icon5.png', 'MA NU 03 SUNAN KATONG ', '2020-01-16 16:49:48', 0, 0, 0, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0044, 0, 'adit', 'adit', '000000', 'aditya surya permana', 'ادخبببل', 'غغقثنن', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '2006-08-23', '13', '						Desa ranca ekek bandung						', '454545435254', 'rifki', 'LULUS', '', 'bandung  barat', 'Jawa Barat', '34524535325', '32100304908182', '', '', '7 Juz', 'Mahasiswa', '', 'Xl Anak - Anak', '', 'Duda', 90, '', '0', '', 0, 'android_Q.PNG', '', 'android_Q.PNG', 'Universitas Pasundan', '2020-01-16 09:48:18', 0, 0, 0, 3, 3, 15, 13, 9, 8, 12, 17, 13, 16, 10, 14, 17, 17, 17, 11, 10, 12, 16, 11, 21, 32, 14, 24, 12, 11, 10, 1, 4, 3, 3, 3, 3, 56, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0043, 0, 'lina_marli', 'lina@gmail.com', '00000', 'Lina Marlina', 'لين  مر لين', 'سوتثمان', '1 Bulan 30 Juz', '44', 'lina', 'peserta', 'diverifikasi', 'Peserta Baru', 'P', 'Indonesia', 'Majalengka', '0000-00-00', '20 tahun 7 bulan 27 hari', 'Desa sindangkasih majalengka', '0822147837608', 'sutasman', 'LULUS', '', 'Majalengka', 'Jawa Barat', '0822147837608', '5435235434525', '', '', '7 Juz', 'Mahasiswa', '', 'M Anak - Anak', 'Google', 'Lajang', 67, '', '0', '', 0, '49224_100000446981414_1239_n.jpg', '', '', 'MA NU 03 JAKARTA', '2020-01-16 09:48:25', 0, 0, 0, NULL, 1, NULL, NULL, NULL, 12, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0053, 0, 'akhwat1', 'akhwat1', '000000', 'akhwat utami', 'عععععععع', 'اعغ', '3 Bulan Mutqin', '44', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '0', '						Rawasari  - Kuningan						', '454545435254', 'rifki', 'LULUS', '', 'Kuningan', ' Jawa Barat', '34524535325', '32100304908182', '', '', '3 Juz', 'Mahasiswa', '', 'M Dewasa', '', 'Lajang', 78, '', '0', '', 0, 'muslimah6.png', '', 'muslimah6.png', 'Universitas 11 Maret', '2020-01-16 09:48:31', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0054, 0, 'liasari', 'akhwat2@gmail.com', '000000', 'lia sari', 'ننننن', 'فغغ', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '28 tahun 11 bulan 26 hari', 'jalaksana', '454545435254', 'rifki', 'LULUS', '', 'Kuningan ', 'Jawa Barat', '34524535325', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'S Dewasa', '', 'Lajang', 86, '', '0', '', 0, 'muslimah7.png', '', 'muslimah7.png', 'Universitas Pasundan', '2020-01-16 09:48:34', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0055, 0, 'akhwat3', 'akhwat3', '0000000', 'suci imanah', 'ادخبببل', 'خاازمكحخخ', '3 Pekan 15 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '1991-06-13', '28', '			Majalengka			', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'M Anak - Anak', '', 'Lajang', 80, '', '0', '', 0, 'muslimah8.png', '', 'muslimah8.png', 'Universitas 11 Maret', '2020-01-16 09:48:39', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0056, 0, 'sari', 'akhwat4@gmail.com', '000000', 'sariawati', 'عععغطححح', 'غغقثنن', '2 Pekan 10 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '29 tahun 0 bulan 25 hari', 'Ancaran Jawa Barat', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Lampung', '34524535325', '32100304908182', '', '', '4 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Janda', 100, '', '0', '', 0, 'muslimah10.png', '', 'muslimah10.png', 'Universitas 11 Maret', '2020-01-16 09:48:44', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0057, 0, 'Devi ', 'akhwat5@gmail.com', '00000', 'Devi Heryani', 'يبببب', 'يييي', '2 Pekan 10 Juz', '44', '', 'peserta', 'diverifikasi', 'Alumni', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '0', '			Kuningan 			', '454545435254', 'rifki', 'LULUS', '', 'Kuningan', ' Jawa Barat', '34524535325', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'S Anak - Anak', '', 'Lajang', 90, '', '0', '', 0, 'muslimah11.png', '', 'muslimah11.png', 'Universitas 11 Maret', '2020-01-16 09:48:53', 100000, 700000, 5900000, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0058, 0, 'ari', 'ikhwan1@gmail.com', '000000', 'ari hermawan', 'لللل', 'تلببب', 'weekend Tahsin Tuntas', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '0', '			Kuningan			', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', '32100304908182', '', '', '8 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', 96, '', '0', '', 0, 'IMG_7819.JPG', '', 'IMG_7819.JPG', 'Universitas 11 Maret', '2020-01-16 16:51:49', 0, 0, 0, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0059, 0, 'Dede', 'dede@gmail.com', '000000', 'Deded Husen ', 'دد حسين', 'تسنا', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '26 tahun 3 bulan 28 hari', 'Desa Bagjasari Rt 18 Rw 18 Kecamatan Cikijng Kabupaten Majalenka 45466', '082214783760', 'Tisna', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '089606941238', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', 70, '', '0', '', 0, 'IMG_78191.JPG', '', 'IMG_78191.JPG', 'Universitas Kuningan', '2020-01-16 09:49:32', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 3, 5, 34, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0060, 0, 'heri', 'erik.c79kng@gmail.com', 'h3r1', 'Heri Kiswanto', 'خيري', 'سلام', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '0', '			sampora			', '081312700330', 'salam', 'LULUS', '', 'Kuningan', 'Jawa Barat', '081312700100', '32100304908182', '', '', '19 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', 0, '', '0', '', 0, 'saalh_jurusan.PNG', '', 'saalh_jurusan.PNG', 'Universitas Kuningan', '2020-01-16 09:49:00', 0, 0, 0, 2, 3, 3, 4, 6, 6, 6, 6, 6, 6, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 9, 9, 9, 9, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0067, 0, '', 'adi@gmail.com', '00000', 'adi ', '', '', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Majanlengka', '1980-09-24', '39', '									Cikijing									', '9080800', 'Tisna', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '09808080', '32120009338', '', '', '12 Juz', 'pelajar', '', 'Xl Anak - Anak', '', 'Lajang', 90, '', '0', '', 0, 'kecil34.jpg', '', 'kecil34.jpg', 'MA NU 03 ', '2020-01-16 09:49:06', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0071, 0, '', 'syam@gmail.com', '000000', 'Syamsul ', 'سمشول', 'سيللل', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Majalengka', '1997-01-01', '22', '			Karawang			', '098900', 'Tisna', 'TIDAK LULUS', '', 'Karawang', 'Jawa Barat', '80890909', '090090890890', '', '', '15 Juz', 'Pelajar', '', 'LL Dewasa', '', 'Lajang', 0, '', '0', '', 0, 'operator-icon2.png', '', 'operator-icon2.png', '-', '2020-01-16 09:49:10', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(0072, 0, '', 'dede@bijb.co.id', '000000', 'Ulfah zahra', 'سشصتىبل', 'غغيس', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Peserta Baru', 'L', 'Indonesia', 'Kuningan ', '2020-01-17', '118', '												Cikijing												', '8088', 'Yayan', 'TIDAK LULUS', '', 'Subang', 'Jawa Barat', '11111111', '321003040591800', '', '', '21 Juz', 'Mahasiswa', '', 'M Anak - Anak', '', 'Lajang', 16, '', 'ممتز', 'زحر بن تشنا', 23.6, '20191109102310_IMG_99875.JPG', '', '', 'MA NU 03 Ciawi', '2020-01-16 09:49:26', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0073, 0, '', 'aderamlan@gmail.com', '000000', 'Ramlan', '', '', '', '', '', 'peserta', 'belum diverifikasi', 'Baru', '', '', '', '0000-00-00', '', '', '', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 0, '', '0', '', 0, '', '', '', '', '2020-01-08 04:41:32', 0, 0, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0075, 0, '', 'lulu@gmail.com', '01012019', 'Dede Ulfa Nurlulu', 'لؤ لؤ', 'ضرسنؤ', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Majalengka', '2009-09-07', '10', 'Ciawi Lor', '089606941238', 'Darsono', 'TIDAK LULUS', '', 'Kuningan ', 'Jawa Barat', '80890909', '3210030405920021', '', '', '2 Juz', 'Pelajar', '', 'Xl Anak - Anak', '', 'Lajang', 90, '', '0', '', 0, 'Muhammad_Azmi_Rahman_-_Alumni_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional.jpg', 'Muhammad_Azmi_Rahman_-_Alumni_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional.jpg', 'Muhammad_Azmi_Rahman_-_Alumni_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional.jpg', 'MA NU 03 SUNAN KATONG', '2020-01-14 17:29:18', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0076, 0, '', 'rahyah@gmail.com', '000000', 'Muhammad Ali Rayhan ', '', '', '1 Bulan 30 Juz', '45', '', 'peserta', 'diverifikasi', 'Baru', 'L', '', '', '0000-00-00', '0', '', '08966941238', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 0, 'YKTN.', '', '', 0, 'Wisuda-Karantina-Tahfizh-Al-Quran-Nasional-1-min.jpg', 'Wisuda-Karantina-Tahfizh-Al-Quran-Nasional-1-min.jpg', 'Wisuda-Karantina-Tahfizh-Al-Quran-Nasional-1-min.jpg', '', '2020-01-16 07:19:27', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0078, 0, '', 'siti@gmail.com', '000000', 'Siti Aisah ', '', '', '1 Bulan 30 Juz', '45', '', 'peserta', 'diverifikasi', 'Baru', 'P', '', '', '0000-00-00', '0', '						', '08990990', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 90, 'YKTN.', '', '', 0, '', '', '', '', '2020-01-16 07:37:20', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0079, 0, '', 'jajang@gmail.com', '000000', 'Jajang ', '', '', '2 Pekan 10 Juz', '45', '', 'peserta', 'diverifikasi', 'Baru', 'L', '', '', '0000-00-00', '', '', '08960698784', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 12, 'YKTN.', '', '', 0, '', '', '', '', '2020-01-16 09:25:52', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0080, 0, '', 'husen@gmail.com', '000000', 'husen', '', '', '3 Pekan 15 Juz', '45', '', 'peserta', 'diverifikasi', 'Baru', 'L', '', '', '0000-00-00', '', '', '08990990', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 0, 'YKTN.', '', '', 0, '', '', '', '', '2020-01-16 09:28:26', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0085, 0, '', 'adehuen@gmail.com', '', '', '', '', '-', '-', 'Fadli', 'peserta', 'belum diverifikasi', '---Pilih Salah Satu ', 'Pilih Jenis ', '', '', '0000-00-00', '0', '\r\n			', '', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '1 Juz', '', '', '--Pilih Ukuran Baju--', '', '--Pilih Salah Satu--', 0, 'YKTN.', '', '', 0, 'Penasihat_Yayasan_Karantina_Tahfizh_Al-quran_nasional.jpg', '', '', '', '2020-01-19 02:03:16', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0082, 0, '', 'rahmat@gmail.com', '000000', 'Rahmat Ismaya', '', '', 'weekend 1 Juz', '45', '', 'peserta', 'belum diverifikasi', 'Baru', 'L', '', '', '0000-00-00', '', '', '089', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 0, 'YKTN.', '', '', 0, '', '', '', '', '2020-01-16 16:36:58', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0083, 0, '', 'rahmat@ade.com', '000000', 'Rahmat Ismaya', '', '', '3 Pekan 15 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'L', '', '', '0000-00-00', '', '', '234', '', 'TIDAK LULUS', '', '', '', '', '', '', '', '', '', '', '', '', 'Lajang', 50, 'YKTN.', '', '', 0, '', '', '', '', '2020-01-19 14:00:18', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perolehan_perhari`
--
ALTER TABLE `perolehan_perhari`
  ADD PRIMARY KEY (`id_perolehan`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
