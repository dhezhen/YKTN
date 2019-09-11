-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 09:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karantina_tahfizh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` varchar(5) NOT NULL DEFAULT 'admin',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

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
(2, 'dihidupkan', '<blockquote>\r\n<p style="text-align: center;"><span style="color: #f1c40f;"><em><strong>Dede Husen&nbsp;</strong></em></span></p>\r\n</blockquote>');

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
  `username` varchar(20) NOT NULL DEFAULT '',
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
  `email` varchar(30) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `fb` varchar(30) NOT NULL,
  `ig` varchar(30) NOT NULL,
  `stok_hafalan` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alergi_makanan` varchar(30) NOT NULL,
  `ukuran_baju` varchar(30) NOT NULL,
  `info_karantina` varchar(30) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL DEFAULT 'Lajang',
  `wakaf` varchar(20) NOT NULL DEFAULT 'Tidak',
  `uang_wakaf` varchar(12) NOT NULL DEFAULT '0',
  `barang_wakaf` varchar(100) NOT NULL DEFAULT '-',
  `nilai_tahsin` int(2) NOT NULL DEFAULT '0',
  `foto_diri` text NOT NULL,
  `foto_identitas` text NOT NULL,
  `foto_suket` text NOT NULL,
  `pengajar` varchar(30) NOT NULL,
  `sekolah_instansi` varchar(50) NOT NULL,
  `tanggal_mendaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `username`, `password`, `nama_lengkap`, `nama_lengkap_arab`, `nama_ayah_arab`, `program`, `angkatan`, `nama_panggilan`, `level`, `status`, `status_peserta`, `jenis_kelamin`, `kewarganegaraan`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `no_handphone`, `nama_ayah`, `keterangan`, `dokumen`, `kabupaten`, `provinsi`, `no_darurat`, `email`, `no_identitas`, `fb`, `ig`, `stok_hafalan`, `pekerjaan`, `alergi_makanan`, `ukuran_baju`, `info_karantina`, `status_pernikahan`, `wakaf`, `uang_wakaf`, `barang_wakaf`, `nilai_tahsin`, `foto_diri`, `foto_identitas`, `foto_suket`, `pengajar`, `sekolah_instansi`, `tanggal_mendaftar`) VALUES
(0033, 'Dede_husen', '04051992', 'Dede Husen', 'دد حشين بن ثسنا', 'ثسنا', '2 Pekan 10 Juz', '43', '', 'peserta', 'diverifikasi', 'Peserta Baru', 'L', 'Indonesia', 'Majalengka', '2019-09-11', '0', 'Desa Bagjasari Rt 18 Rw 05 Kecamatan Cikijing Kabupaten Jawa Barat 45466							', '082214783760', 'Tisna', 'LULUS', '', 'Majalengka', 'Jawa Barat', '089606909009', 'Dede_husen', '3210020300408344', '', '', '14 Juz', 'Wiraswasta', '', 'XL Dewasa', '', 'Lajang', '', '', '', 0, 'Caem_n_kalem.JPG', 'Caem_n_kalem.JPG', 'Caem_n_kalem.JPG', '', 'MA NU 03 SUNAN KATONG ', '2019-09-11 01:50:31'),
(0037, 'ade husen ', '04051992', 'Ade Husen ', 'اد حسين', 'محمد ريحن', '3 Bulan Mutqin', '43', '', 'peserta', 'diverifikasi', 'Alumni', 'L', 'Indonesia', 'Majalengka', '1995-08-10', '24', '															Desa subang, kecamatan Jatisari kecamatan subang kabupaten kuningan jawa barat 45466	', '0822147837608', 'Muhammad Rayhan', 'LULUS', '', 'Kuningan ', 'Jawa Barat', '08990098176', 'ade husen ', '321003040519923816', '', '', '28 Juz', 'Dosen', '', 'M Dewasa', '', 'Lajang', '', '', '', 0, 'WhatsApp_Image_2019-08-07_at_19_44_44.jpeg', 'WhatsApp_Image_2019-08-07_at_19_44_44.jpeg', 'WhatsApp_Image_2019-08-07_at_19_44_44.jpeg', '', 'Ma Nu 03 Sunan Katong Kaliwungu', '2019-08-30 08:11:46'),
(0044, 'adit', '000000', 'aditya surya permana', 'ادخبببل', 'غغقثنن', '1 Bulan 30 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '2006-08-23', '13', '			Desa ranca ekek bandung			', '454545435254', 'rifki', 'LULUS', '', 'bandung  barat', 'Jawa Barat', '34524535325', 'adit', '32100304908182', '', '', '7 Juz', 'Mahasiswa', '', 'Xl Anak - Anak', '', 'Duda', '', '', '', 0, 'android_Q.PNG', 'android_Q.PNG', 'android_Q.PNG', '', 'Universitas Pasundan', '2019-08-30 08:15:35'),
(0041, '', '000000', 'lina agustina', 'صثيلانخخ', 'للنففففف', '3 Bulan Mutqin', '43', 'lina', 'peserta', 'diverifikasi', 'Peserta Baru', 'P', 'Indonesia', 'Jakarta', '0000-00-00', '19 tahun 2 bulan 13 hari', 'Cikijing majalengka', '099889', 'sutisna', 'LULUS', '', 'Depok', 'Jawa Barat', '89089089', 'lina@gmail.com', '98908980980', '', '', '4 Juz', 'pelajar', '', 'M Dewasa', 'Google', 'Menikah', 'Tidak', '0', '-', 0, '', '', '', '', 'MA NU 03 JAKARTA', '2019-08-30 08:11:52'),
(0046, 'haris', '00000', 'Haris Fadhli', 'ببلغفقلانتتي', 'فلبننل', '1 Pekan 5 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '20 tahun 11 bulan 11 hari', 'Majene', '454545435254', 'rifki', 'LULUS', '', 'Lampung', 'Lampung', '34524535325', 'Haris@gmail.com', '32100304908182', '', '', '14 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', '', '', '', 0, 'teknik_perminyakan5.jpg', 'teknik_perminyakan5.jpg', 'teknik_perminyakan5.jpg', '', 'Universitas 11 Maret', '2019-08-30 08:15:37'),
(0045, 'Asep', '000000', 'asep', 'عععغطححح', 'خاازمكحخخ', '3 Pekan 15 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '20 tahun 11 bulan 22 hari', 'Cikijing			', '454545435254', 'rifki', 'LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'Asep', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'M Anak - Anak', '', 'Lajang', '', '', '', 0, 'teknik_perminyakan1.jpg', 'teknik_perminyakan1.jpg', 'teknik_perminyakan1.jpg', '', 'Universitas Pasundan', '2019-08-30 08:15:36'),
(0043, 'lina_marli', '00000', 'Lina Marlina', 'لين  مر لين', 'سوتثمان', '1 Bulan 30 Juz', '44', 'lina', 'peserta', 'diverifikasi', 'Peserta Baru', 'P', 'Indonesia', 'Majalengka', '0000-00-00', '20 tahun 7 bulan 27 hari', 'Desa sindangkasih majalengka', '0822147837608', 'sutasman', 'LULUS', '', 'Majalengka', 'Jawa Barat', '0822147837608', 'lina@gmail.com', '5435235434525', '', '', '7 Juz', 'Mahasiswa', '', 'M Anak - Anak', 'Google', 'Lajang', 'Tidak', '0', '-', 0, '49224_100000446981414_1239_n.jpg', '', '', '', 'MA NU 03 JAKARTA', '2019-09-06 09:06:33'),
(0047, 'melati', '000000', 'melati ayunda', 'قغغ', 'قلنكككك', '3 Bulan Mutqin', '43', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '19 tahun 11 bulan 23 hari', ' ckijing majalengka', '454545435254', 'rifki', 'LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'melati@gmail.com', '32100304908182', '', '', '5 Juz', 'Mahasiswa', '', 'S Dewasa', '', 'Janda', '', '', '', 0, 'Nazma_Fadillah_Nurhasanah.JPG', 'Nazma_Fadillah_Nurhasanah.JPG', 'Nazma_Fadillah_Nurhasanah.JPG', '', 'Universitas 11 Maret', '2019-08-30 03:44:30'),
(0048, 'reni', '000000', 'Reni Gustiwati', 'صقبب', 'باتعفققبب', '1 Bulan 30 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '26 tahun 8 bulan 23 hari', 'Kuningan', '454545435254', 'rifki', 'LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'Reni@yahoo.com', '32100304908182', '', '', '21 Juz', 'Mahasiswa', '', 'S Dewasa', '', 'Lajang', '', '', '', 0, 'muslimah1.png', 'muslimah1.png', 'muslimah1.png', '', 'Universitas Pasundan', '2019-08-30 03:44:31'),
(0049, 'chintya', '000000', 'chintya', 'صثيلانخخ', 'للنففففف', '1 Bulan 30 Juz', '43', 'chintya', 'peserta', 'diverifikasi', 'Peserta Baru', 'P', 'Indonesia', 'Jakarta', '0000-00-00', '19 tahun 2 bulan 13 hari', 'Cikijing majalengka', '099889', 'sutisna', 'LULUS', '', 'Depok', 'Jawa Barat', '89089089', 'lina@gmail.com', '98908980980', '', '', '4 Juz', 'pelajar', '', 'M Dewasa', 'Google', 'Menikah', 'Tidak', '0', '-', 0, '', '', '', '', 'MA NU 03 JAKARTA', '2019-08-22 07:35:35'),
(0050, 'ika', '000000', 'ika', 'تنعغغ', 'بلغعه', '3 Pekan 15 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '29 tahun 10 bulan 25 hari', 'kuningan', '454545435254', 'rifki', 'LULUS', '', 'Kuningan', 'Jawa Barat', '34524535325', 'ika@gmail.com', '32100304908182', '', '', '17 Juz', 'Mahasiswa', '', 'M Dewasa', '', 'Lajang', '', '', '', 0, 'muslimah2.png', 'muslimah2.png', 'muslimah2.png', '', 'Universitas Pasundan', '2019-08-30 03:44:32'),
(0051, 'ajeng', 'ajeng', 'ajeng numala', 'وو', 'فغتن', '2 Pekan 10 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '128 tahun 11 bulan 27 hari', 'Majalengka', '454545435254', 'rifki', 'LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'ajeng@gmail.com', '32100304908182', '', '', '17 Juz', 'Mahasiswa', '', 'XL Dewasa', '', 'Lajang', '', '', '', 0, 'muslimah3.png', 'muslimah3.png', 'muslimah3.png', '', 'Universitas Pasundan', '2019-08-30 03:44:33'),
(0052, 'lestari', '000000', 'lestari', 'وفقث', 'لبقفغغي', '1 Pekan 5 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '21 tahun 7 bulan 22 hari', 'Kuningan', '454545435254', 'rifki', 'LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'Lestari@gmail.com', '32100304908182', '', '', '13 Juz', 'Mahasiswa', '', 'M Dewasa', '', 'Lajang', '', '', '', 0, 'muslimah5.png', 'muslimah5.png', 'muslimah5.png', '', '', '2019-08-30 03:44:34'),
(0053, 'akhwat1', '000000', 'akhwat utami', 'عععععععع', 'اعغ', '3 Bulan Mutqin', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '0', '						Rawasari  - Kuningan						', '454545435254', 'rifki', 'LULUS', '', 'Kuningan', ' Jawa Barat', '34524535325', 'akhwat1', '32100304908182', '', '', '3 Juz', 'Mahasiswa', '', 'M Dewasa', '', 'Lajang', '', '', '', 78, 'muslimah6.png', 'muslimah6.png', 'muslimah6.png', '', 'Universitas 11 Maret', '2019-09-11 01:42:11'),
(0054, 'liasari', '000000', 'lia sari', 'ننننن', 'فغغ', '1 Bulan 30 Juz', '44', '', 'peserta', 'diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '28 tahun 11 bulan 26 hari', 'jalaksana', '454545435254', 'rifki', 'LULUS', '', 'Kuningan ', 'Jawa Barat', '34524535325', 'akhwat2@gmail.com', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'S Dewasa', '', 'Lajang', '', '', '', 0, 'muslimah7.png', 'muslimah7.png', 'muslimah7.png', '', 'Universitas Pasundan', '2019-09-06 09:07:23'),
(0055, 'akhwat3', '0000000', 'suci imanah', 'ادخبببل', 'خاازمكحخخ', '3 Pekan 15 Juz', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '1991-06-13', '28', '			Majalengka			', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'akhwat3', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'M Anak - Anak', '', 'Lajang', '', '', '', 80, 'muslimah8.png', 'muslimah8.png', 'muslimah8.png', '', 'Universitas 11 Maret', '2019-09-11 01:43:48'),
(0056, 'sari', '000000', 'sariawati', 'عععغطححح', 'غغقثنن', '2 Pekan 10 Juz', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '29 tahun 0 bulan 25 hari', 'Ancaran Jawa Barat', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Lampung', '34524535325', 'akhwat4@gmail.com', '32100304908182', '', '', '4 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Janda', '', '', '', 100, 'muslimah10.png', 'muslimah10.png', 'muslimah10.png', '', 'Universitas 11 Maret', '2019-09-11 07:46:30'),
(0057, 'Devi ', '00000', 'Devi Heryani', 'يبببب', 'يييي', '2 Pekan 10 Juz', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'P', 'Indonesia', 'Kuningan', '0000-00-00', '28 tahun 12 bulan 4 hari', 'Kuningan ', '454545435254', 'rifki', 'LULUS', '', 'Kuningan', ' Jawa Barat', '34524535325', 'akhwat5@gmail.com', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'S Anak - Anak', '', 'Lajang', '', '', '', 0, 'muslimah11.png', 'muslimah11.png', 'muslimah11.png', '', 'Universitas 11 Maret', '2019-09-05 03:36:47'),
(0058, 'ari', '000000', 'ari hermawan', 'لللل', 'تلببب', 'weekend Tahsin Tuntas', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '21 tahun 0 bulan 20 hari', 'Kuningan', '454545435254', 'rifki', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '34524535325', 'ikhwan1@gmail.com', '32100304908182', '', '', '8 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', '', '', '', 0, 'IMG_7819.JPG', 'IMG_7819.JPG', 'IMG_7819.JPG', '', 'Universitas 11 Maret', '2019-09-05 03:36:36'),
(0059, 'Dede', '000000', 'Deded Husen ', 'دد حسين', 'تسنا', '1 Bulan 30 Juz', '44', '', 'peserta', 'belum diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '26 tahun 3 bulan 28 hari', 'Desa Bagjasari Rt 18 Rw 18 Kecamatan Cikijng Kabupaten Majalenka 45466', '082214783760', 'Tisna', 'TIDAK LULUS', '', 'Majalengka', 'Jawa Barat', '089606941238', 'dede@gmail.com', '32100304908182', '', '', '2 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', '', '', '', 0, 'IMG_78191.JPG', 'IMG_78191.JPG', 'IMG_78191.JPG', '', 'Universitas Kuningan', '2019-09-05 03:34:03'),
(0060, 'heri', 'h3r1', 'Heri Kiswanto', 'خيري', 'سلام', '1 Bulan 30 Juz', '43', '', 'peserta', 'diverifikasi', 'Baru', 'L', 'Indonesia', 'Kuningan', '0000-00-00', '30 tahun 11 bulan 4 hari', 'sampora', '081312700330', 'salam', 'LULUS', '', 'Kuningan', 'Jawa Barat', '081312700100', 'erik.c79kng@gmail.com', '32100304908182', '', '', '19 Juz', 'Mahasiswa', '', 'L Dewasa', '', 'Lajang', '', '', '', 0, 'saalh_jurusan.PNG', 'saalh_jurusan.PNG', 'saalh_jurusan.PNG', '', 'Universitas Kuningan', '2019-08-30 03:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
