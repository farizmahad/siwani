-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 05:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_reses`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_lainya`
--

CREATE TABLE `biaya_lainya` (
  `id` int(11) NOT NULL,
  `id_perjalanan_dinas` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `jumlah_hari` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `id_user_dinas` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaya_lainya`
--

INSERT INTO `biaya_lainya` (`id`, `id_perjalanan_dinas`, `nama`, `rate`, `total`, `jumlah_hari`, `id_user`, `id_user_dinas`) VALUES
(1, 3, 'uang_harian', '78000', '2574000', 33, 109, 5),
(2, 3, 'uang_saku', '78000', '2574000', 33, 109, 5),
(3, 3, 'uang_harian', '89000', '2937000', 33, 107, 6),
(4, 3, 'uang_saku', '89000', '2937000', 33, 107, 6),
(5, 6, 'uang_harian', '300000', '1500000', 5, 115, 14),
(6, 6, 'uang_saku', '300000', '1500000', 5, 115, 14),
(7, 6, 'uang_harian', '400000', '2000000', 5, 118, 15),
(8, 6, 'uang_saku', '400000', '2000000', 5, 118, 15),
(9, 6, 'uang_harian', '400000', '2000000', 5, 119, 16),
(10, 6, 'uang_saku', '400000', '2000000', 5, 119, 16),
(11, 6, 'uang_harian', '400000', '2000000', 5, 120, 17),
(12, 6, 'uang_saku', '400000', '2000000', 5, 120, 17),
(13, 6, 'uang_harian', '300000', '1500000', 5, 124, 18),
(14, 6, 'uang_saku', '300000', '1500000', 5, 124, 18),
(15, 6, 'uang_harian', '300000', '1500000', 5, 123, 19),
(16, 6, 'uang_saku', '300000', '1500000', 5, 123, 19),
(17, 8, 'uang_harian', '300000', '1500000', 5, 41, 25),
(18, 8, 'uang_saku', '300000', '1500000', 5, 41, 25),
(19, 8, 'uang_harian', '300000', '1500000', 5, 42, 26),
(20, 8, 'uang_saku', '300000', '1500000', 5, 42, 26),
(21, 8, 'uang_harian', '300000', '1500000', 5, 43, 27),
(22, 8, 'uang_saku', '300000', '1500000', 5, 43, 27),
(23, 8, 'uang_harian', '300000', '1500000', 5, 45, 28),
(24, 8, 'uang_saku', '300000', '1500000', 5, 45, 28),
(25, 8, 'uang_harian', '300000', '1500000', 5, 44, 29),
(26, 8, 'uang_saku', '300000', '1500000', 5, 44, 29);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'super admin', 'Super Admin'),
(2, 'members', 'General User'),
(3, 'operator', 'Operator'),
(4, 'dewan', 'Dewan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sidang`
--

CREATE TABLE `jadwal_sidang` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `acara` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_sidang`
--

INSERT INTO `jadwal_sidang` (`id`, `tanggal`, `hari`, `waktu`, `tempat`, `acara`) VALUES
(1, '2019-10-30', 'Rabu', NULL, 'bandung', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `mst_dapil`
--

CREATE TABLE `mst_dapil` (
  `id` int(11) NOT NULL,
  `daerah_pemilihan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_dapil`
--

INSERT INTO `mst_dapil` (`id`, `daerah_pemilihan`) VALUES
(1, 'Non-Dapil'),
(2, 'CIMAHI 1 (Citeureup & Cipageran)'),
(3, 'CIMAHI 2 (Cibabat & Pasirkaliki)'),
(4, 'CIMAHI 3 (Melong & Cibeureum)'),
(5, 'CIMAHI 4 (Utama, Leuwigajah & Cibeber)'),
(6, 'CIMAHI 5 (Cigugur Tengah, Baros & Karangmekar)'),
(7, 'CIMAHI 6 (Cimahi, Setiamanah & Padasuka)');

-- --------------------------------------------------------

--
-- Table structure for table `mst_dewan`
--

CREATE TABLE `mst_dewan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_fraksi` int(11) NOT NULL,
  `id_dapil` int(11) NOT NULL,
  `jabatan` varchar(70) NOT NULL,
  `id_level` int(11) DEFAULT '0',
  `foto` varchar(70) DEFAULT NULL,
  `alamat` text,
  `nip` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `status_aktif` int(11) NOT NULL DEFAULT '0',
  `id_jabatan` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_dewan`
--

INSERT INTO `mst_dewan` (`id`, `id_user`, `id_fraksi`, `id_dapil`, `jabatan`, `id_level`, `foto`, `alamat`, `nip`, `nama_lengkap`, `status_aktif`, `id_jabatan`) VALUES
(1, 26, 1, 1, 'Admin', 2, '392dcaa591a5cc03233b98c445e8209c.jpg', NULL, '10112776', 'Admin Setwan', 0, 6),
(53, 115, 9, 3, 'Ketua', 0, 'd0b6d972b45f271326f4c07728b46f97.png', NULL, '-', 'Ir. H. Achmad Zulkarnain, MT', 0, 21),
(54, 116, 10, 6, 'Wakil Ketua', 0, 'df4565981804e161d3f91db34d209bc1.png', NULL, '-', 'H. Bambang Purnomo', 0, 23),
(55, 117, 2, 6, 'Wakil Ketua', 0, '71ae26bf12370d8f4ba5df732f915a9f.png', NULL, '-', 'Purwanto, S.Pd', 0, 23),
(56, 118, 3, 3, 'Wakil Ketua', 0, '405d8ad43e76fdb294a8d1be84a4cdab.png', NULL, '-', 'Rini Marthini, SE', 0, 23),
(57, 119, 6, 4, 'Anggota', 0, '0eae6513b63503fe1f19b52d11e49113.png', NULL, '-', 'Acep Jamaludin, S.Hum', 0, 22),
(58, 120, 6, 5, 'Anggota', 0, '540ed2bfce3006b44bbf07970ca3c76d.png', NULL, '-', 'Asep Sutisna', 0, 22),
(59, 121, 10, 3, 'Anggota', 0, '8b1eb281484f3285ef6b317dcf6151d1.png', NULL, '-', 'Ahmad Dahlan', 0, 22),
(60, 122, 4, 2, 'Anggota DPRD', 0, 'cbfa1e74fce3139919816ea2c16515e6.png', NULL, '-', 'Ayi Khusnayaddi', 0, 3),
(61, 123, 9, 6, 'Anggota', 0, 'db9ce131ba605c537d578c9de3feb405.png', NULL, '-', 'Ayis Lavilianto', 0, 22),
(62, 124, 2, 4, 'Anggota', 0, '8c4647f39a7a500cd6e466abb8d6aa3c.png', NULL, '-', 'Agung Yudaswara, ST', 0, 22),
(63, 125, 2, 5, 'Anggota', 0, '90c85f388c700e4f62d993d581fda300.png', NULL, '-', 'Dadang Mulyana', 0, 22),
(64, 126, 6, 2, 'Anggota', 0, '1986fdaa55c499a30c73308d2e4b6ac9.png', NULL, '-', 'Dede Latif', 0, 22),
(65, 127, 9, 2, 'Anggota', 0, '7e4b46c3bd0aeb299c83a307c7e9f648.png', NULL, '-', 'Djoko Taruna', 0, 22),
(66, 128, 10, 4, 'Anggota', 0, '790f970051aa1e7cf0cd1d8827540e42.png', NULL, '-', 'dr. R. Adj. Irma Indriyani', 0, 22),
(67, 129, 3, 5, 'Anggota', 0, '51b246f16a7a262664a40c05a4d049be.png', NULL, '-', 'Dra. Aida Cakrawati Konda', 0, 22),
(68, 130, 7, 4, 'Anggota', 0, 'a7f0c55486e89b238dd2062e3d5d9acb.png', NULL, '-', 'Drs. H. D. Hidayat', 0, 22),
(69, 131, 4, 7, 'Anggota', 0, 'aeec5ff31e421d442cbf2e131f7199fb.png', NULL, '-', 'Drs. H. Sudiarto, SE.Ak.', 0, 22),
(70, 132, 2, 2, 'Anggota', 0, '93c7beeb0bda05a8d5612ccebd740ab7.png', NULL, '-', 'Drs. Yus Rusnaya', 0, 22),
(71, 133, 7, 7, 'Anggota', 0, '475672ba9714b817a772e972c8deb4f2.png', NULL, '-', 'Eddy Sofyan, SE.', 0, 22),
(72, 134, 9, 4, 'Anggota', 0, 'c2e074f1c83dccba250f76992182c434.png', NULL, '-', 'Eko Sugianto', 0, 22),
(73, 135, 10, 7, 'Anggota', 0, '4957e5abec9942cb45fa65cc47679a34.png', NULL, '-', 'Enil Fadahliza, S.Pd.', 0, 22),
(74, 136, 6, 4, 'Anggota', 0, '7e1956abe09af2aafb8d6b402f5121bc.png', NULL, '-', 'Euis Isop Romaya, S.Pd.', 0, 22),
(75, 137, 2, 3, 'Anggota', 0, 'cb2717e3377f651a7fa9b121b6b36021.png', NULL, '-', 'Freddy Siagian', 0, 22),
(76, 138, 7, 6, 'Anggota', 0, '75ce9c0920b8b8e380a3f4ee26f7c2f0.png', NULL, '-', 'H. Agus Solihin', 0, 22),
(77, 139, 4, 3, 'Anggota', 0, '84de0927d83b5060e67bf88d6cefcceb.png', NULL, '-', 'H. Asep Rukmansyah, SE.', 0, 22),
(78, 140, 10, 5, 'Anggota', 0, 'b515aa65a6d5cec5b5993db389735691.png', NULL, '-', 'H. Barkah Setiawan, SP, MM', 0, 22),
(79, 141, 3, 4, 'Anggota', 0, 'f3c3c41a1d03e600bd57a43deaf4d233.png', NULL, '-', 'H. Edi Kanaedi, SE, M.MPd', 0, 22),
(80, 142, 5, 2, 'Anggota', 0, 'f3508b734c271da57f2ca0f490b45370.png', NULL, '-', 'H. Enang Sahri L, S.Sos, MM', 0, 22),
(81, 143, 5, 6, 'Anggota', 0, '0dbc338c59096878fd103d9527c63d37.png', NULL, '-', 'H. Muchlisin', 0, 22),
(82, 144, 4, 4, 'Anggota', 0, '9090e034d8eee9d4cf6b1259038ba33b.png', NULL, '-', 'H. Nabsun, S.Sos', 0, 22),
(83, 145, 9, 4, 'Anggota', 0, 'ddddbabbf43668efe98fa71b430670d5.png', NULL, '-', 'H. Supiyardi, S.Pd.I., M.Si.', 0, 22),
(84, 146, 5, 4, 'Anggota', 0, 'dc48a08f33f4834df1313069c8178675.png', NULL, '-', 'Hj. Ehan Rochayati, S.Pd, M.Si', 0, 22),
(85, 147, 10, 2, 'Anggota', 0, '1681905d9ccf25c8932bca848498d505.png', NULL, '-', 'Hendra Saputra', 0, 22),
(86, 148, 4, 6, 'Anggota', 0, 'db17d760bb7760c10da5f6d8d5bcf162.png', NULL, '-', 'Ir. Abdul Mahfuri', 0, 22),
(87, 149, 2, 7, 'Anggota', 0, 'd424ad4a7bcb722f2c18261e7f5077f4.png', NULL, '-', 'Iwan Setiawan', 0, 22),
(88, 150, 9, 7, 'Anggota', 0, '8e486b1d43cccb32fbee66f33a8e5d1e.png', NULL, '-', 'Kania Intan Puspita, S.Pdi', 0, 22),
(89, 151, 3, 7, 'Anggota', 0, '847199ccf213e527c7c06be7d63021bc.png', NULL, '-', 'Lilis Yusniawati', 0, 22),
(90, 152, 4, 4, 'Anggota', 0, 'f352010dcc1f654783b8aa9b6467f7a7.png', NULL, '-', 'Lukma Bhakti S.H, S.Sos, MM', 0, 22),
(91, 153, 7, 4, 'Anggota', 0, '8f216491a4d53c89fae12de611664fc4.png', NULL, '-', 'Neng Cucu Sumiati, SIP.', 0, 22),
(92, 154, 10, 3, 'Anggota', 0, '80bb36db3fe2d1fb11408de6c6c12f78.png', NULL, '-', 'Oneng Aminah', 0, 22),
(93, 155, 7, 4, 'Anggota', 0, 'eb8ab2d07d1620733c7b0ad129c39a74.png', NULL, '-', 'Robin Sihombing, SIP.', 0, 22),
(94, 156, 3, 6, 'Anggota', 0, '6a1489a673e6508dd05faae663516a5b.png', NULL, '-', 'Sri Indrijani', 0, 22),
(95, 157, 5, 4, 'Anggota', 0, '1e9a1a8c4784c0110d27ad0841efc0f2.png', NULL, '-', 'Sobari', 0, 22),
(96, 158, 9, 4, 'Anggota', 0, 'cafcd47a0eea1ae9010907907b453825.png', NULL, '-', 'Wahyu Widyatmoko', 0, 22),
(97, 159, 3, 2, 'Anggota', 0, '95b732e6e0d3bce0fbebc001574a0d05.png', NULL, '-', 'Yulianawati', 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `mst_fraksi`
--

CREATE TABLE `mst_fraksi` (
  `id` int(11) NOT NULL,
  `fraksi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_fraksi`
--

INSERT INTO `mst_fraksi` (`id`, `fraksi`) VALUES
(1, 'Non-Fraksi'),
(2, 'Fraksi PDI Perjuangan'),
(3, 'Fraksi Demokrat'),
(4, 'Fraksi Golkar'),
(5, 'Fraksi Nasdem'),
(6, 'Fraksi PKB-Hanura'),
(7, 'Fraksi  PPP-PAN'),
(9, 'Fraksi PKS'),
(10, 'Fraksi Gerindra');

-- --------------------------------------------------------

--
-- Table structure for table `mst_jabatan`
--

CREATE TABLE `mst_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(90) NOT NULL,
  `urutan` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_jabatan`
--

INSERT INTO `mst_jabatan` (`id`, `nama_jabatan`, `urutan`) VALUES
(5, 'Sekretaris DPRD', 1),
(6, 'Admin', 1),
(7, 'Kepala Bagian Program dan Keuangan', 2),
(8, 'Kepala Bagian Persidangan Risalah Rapat dan Perundang-undangan', 2),
(9, 'Kepala Bagian Humas dan Umum', 2),
(10, 'Kepala Subbagian Tata Usaha dan Kepegawaian', 2),
(11, 'Kepala Subbagian Rumah Tangga dan Perlengkapan', 2),
(12, 'Kepala Subbagian Program dan Pelaporan', 2),
(15, 'Kepala Subbagian Keuangan', 2),
(16, 'Kepala Subbagian Perundang-undangan', 2),
(17, 'Kepala Subbagian Risalah Rapat', 2),
(18, 'Kepala Subbagian Persidangan', 2),
(19, 'Kepala Subbagian Humas dan Protokol', 2),
(20, 'Fungsional Umum', 3),
(21, 'Ketua', 1),
(22, 'Anggota', 3),
(23, 'Wakil Ketua', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_pendamping`
--

CREATE TABLE `mst_pendamping` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_pendamping`
--

INSERT INTO `mst_pendamping` (`id`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Rina Pendamping', '10112776', 'Pra '),
(2, 'Dewi Sita', '123456', 'Pendamping'),
(3, 'Arnold Purnomo', '123456', 'Pendamping'),
(4, 'Ferdi Rahman Atmaja', '123456', 'Pendamping'),
(5, 'Reza Rahadian', '123456', 'Pendamping');

-- --------------------------------------------------------

--
-- Table structure for table `mst_setwan`
--

CREATE TABLE `mst_setwan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_setwan`
--

INSERT INTO `mst_setwan` (`id`, `nama`, `nip`, `jabatan`, `golongan`, `id_jabatan`) VALUES
(40, 'Tedi Setiadi, S.IP., M.Si', '197002171990031006', 'Sekretaris DPRD', 'Pembina Utama Muda IV/c', 5),
(41, 'Danu AR, S.IP., M.Si', '196504041985031005', 'Kepala Bagian Program dan Keuangan', 'Pembina Tk I IV/b', 7),
(42, 'Odang Masdar Dedy Herawan, SH., MM', '196205071986031022', 'Kepala Bagian Persidangan Risalah Rapat dan Perundang-undangan', 'Pembina Tk I IV/b', 8),
(43, 'Drs. Dodi Mulyohadi', '196306231991021003', 'Kepala Bagian Humas dan Umum', 'Pembina IV/a', 9),
(44, 'Ade Santana, S.Sos', '196804241990101001', 'Fungsional Umum', 'Penata Tk I III/d', 20),
(45, 'Elya Nurhasanah Adiwijaya, S.H., M.H', '197508212005012005', 'Fungsional Umum', 'Penata Tk I III/d', 20),
(46, 'Jamhur, SE', '197801142007011009', 'Fungsional Umum', 'Penata Tk I III/d', 20),
(47, 'Endang Kurnia, SE', '196302231985031005', 'Kepala Subbagian Tata Usaha dan Kepegawaian', 'Penata Tk I III/d', 10),
(48, 'Cecep Mohamad Mulyadi, S.IP', '196205011986031013', 'Kepala Subbagian Rumah Tangga dan Perlengkapan', 'Penata Tk I III/d', 11),
(49, 'Dian Sri Redjeki., MKM', '197103061994032005', 'Kepala Subbagian Program dan Pelaporan', 'Penata Tk I III/d', 12),
(50, 'Susi Yulianti, SKM', '197207071996032005', 'Kepala Subbagian Keuangan', 'Penata TK I III/d', 15),
(51, 'Ruslan Anwar, SH', '196302151996031001', 'Kepala Subbagian Perundang-undangan', 'Penata Tk I III/d', 16),
(52, 'Tatan, SH', '196801291998031003', 'Kepala Subbagian Risalah Rapat', 'Penata Tk I III/d', 17),
(53, 'Prasetyo Indarto, S.Sos', '197906152006041011', 'Kepala Subbagian Persidangan', 'Penata Tk I III/d', 18),
(54, 'Pirman Gultom, S.STP', '198512162004121001', 'Kepala Subbagian Humas dan Protokol', 'Penata III/c', 19),
(55, 'Yane Susan,SE, MM', '197409062009012002', 'Fungsional Umum', 'Penata III/c', 20),
(56, 'Dheni Hansyori, S.Sos', '197611072010011005', 'Fungsional Umum', 'Penata III/c', 20),
(57, 'Riyadi,S.Sos', '197908242010011001', 'Fungsional Umum', 'Penata III/c', 20),
(58, 'Nur An Nisa,S.Sos', '198111262010012007', 'Fungsional Umum', 'Penata III/c', 20),
(59, 'Widayanti Setiawan,SE', '198205032010012006', 'Fungsional Umum', 'Penata III/c', 20),
(60, 'Ahmad Amsara', '196710081992101001', 'Fungsional Umum', 'Penata Muda Tk I III/b', 20),
(61, 'Siddiq Zarkasih', '198306282006041004', 'Fungsional Umum', 'Penata Muda Tk I III/b', 20),
(62, 'S. Abdul Salam, SE', '198004122008011001', 'Fungsional Umum', 'Penata Muda Tk I III/b', 20),
(63, 'Irfan Ladina,S.Sos', '198303102010011001', 'Fungsional Umum', 'Penata Muda Tk I III/b', 20),
(64, 'Edi Hermawan, S.IP', '197404072008011006', 'Fungsional Umum', 'Penata Muda III/a', 20),
(65, 'Malasari Dewi, A.Md', '198612052010012007', 'Fungsional Umum', 'Penata Muda III/a', 20),
(66, 'Alan Suryadi, S. Ap', '197201282008011004', 'Fungsional Umum', 'Penata Muda III/a', 20),
(67, 'Kusnadi, A.Md', ' 197205132009011001', 'Fungsional Umum', 'Pengatur Tk I II/d', 20),
(68, 'Ruli Kurniawan, A.Md', '198205092009011003', 'Fungsional Umum', 'Pengatur Tk I II/d', 20),
(69, 'Budi Yamin', '196510092008011001', 'Fungsional Umum', 'Pengatur  II/c', 20),
(70, 'Dadan Fauzi', '198605052008011001', 'Fungsional Umum', 'Pengatur  II/c', 20),
(71, 'Agus Yayan Wiyana', '197808172009011005', 'Fungsional Umum', 'Pengatur  II/c', 20),
(72, 'Tanu Sutaryat', '197101102007011006', 'Fungsional Umum', 'Pengatur  II/c', 20),
(73, 'Dadi Yogi Wisatia', '198309022010011002', 'Fungsional Umum', 'Pengatur  II/c', 20),
(74, 'Dadan Ramdani', '198406172010011002', 'Fungsional Umum', 'Pengatur  II/c', 20),
(75, 'Suryadi', '197711042009011003', 'Fungsional Umum', 'Pengatur Tk I II/b', 20),
(76, 'Cucu Suryana', '196802042010011002', 'Fungsional Umum', 'Pengatur Tk I II/b', 20),
(77, 'Sama', '197406012007011019', 'Fungsional Umum', 'Pengatur Muda II/a', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pengikut_dinas`
--

CREATE TABLE `pengikut_dinas` (
  `id` int(11) NOT NULL,
  `nama_pengikut` varchar(255) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `keterangan` text NOT NULL,
  `id_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengikut_dinas`
--

INSERT INTO `pengikut_dinas` (`id`, `nama_pengikut`, `tgl_lahir`, `keterangan`, `id_dinas`) VALUES
(1, 'cindy', '2020-01-29', '7600', 1),
(2, 'pengikut2', '2020-01-14', 'tes', 2),
(3, 'pengikut2', '2020-01-22', 'yu', 3),
(4, 'peggdd', '2020-01-03', 'fff', 4);

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `id_perjalanan_dinas` int(11) NOT NULL,
  `hotel` varchar(255) DEFAULT NULL,
  `tgl_mendaftar` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `lama` varchar(255) DEFAULT NULL,
  `biaya` varchar(255) DEFAULT NULL,
  `tagihan` varchar(255) DEFAULT NULL,
  `gu` varchar(255) DEFAULT NULL,
  `jumlah_ako` varchar(255) DEFAULT NULL,
  `total_rate` varchar(255) DEFAULT NULL,
  `uang_representasi` varchar(255) DEFAULT NULL,
  `transport_lokal` varchar(255) DEFAULT NULL,
  `transport_bandara` varchar(255) DEFAULT NULL,
  `total_representasi` varchar(25) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `transport_lokal2` varchar(255) DEFAULT NULL,
  `transport_bandara2` varchar(255) DEFAULT NULL,
  `id_user_dinas` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `id_perjalanan_dinas`, `hotel`, `tgl_mendaftar`, `tgl_keluar`, `lama`, `biaya`, `tagihan`, `gu`, `jumlah_ako`, `total_rate`, `uang_representasi`, `transport_lokal`, `transport_bandara`, `total_representasi`, `id_user`, `transport_lokal2`, `transport_bandara2`, `id_user_dinas`) VALUES
(1, 1, 'Hotel Del Luna', '2020-01-05', '2020-01-11', '6', '5600', NULL, 'gudarat2', '33600', NULL, NULL, NULL, NULL, NULL, 102, NULL, NULL, 1),
(2, 1, 'hotel3', '2020-01-05', '2020-01-11', '6', '89000', NULL, 'gudarat6', '534000', NULL, NULL, NULL, NULL, NULL, 105, NULL, NULL, 2),
(3, 2, 'Hotel Cara', '2020-01-06', '2020-01-09', '3', '8900', NULL, 'gudarat3', '26700', NULL, NULL, NULL, NULL, NULL, 80, NULL, NULL, 3),
(4, 2, 'hotel del lata', '2020-01-06', '2020-01-09', '3', '7000', NULL, 'gudarat6', '21000', NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL, 4),
(5, 3, 'Hotel Del Luna', '2019-12-30', '2020-01-31', '32', '5600', NULL, NULL, NULL, '179200', '76000', '90000', '78000', NULL, 109, '89000', '67000', 5),
(6, 3, 'Hotel33', '2019-12-30', '2020-01-31', '32', '76000', NULL, NULL, NULL, '2432000', '76000', '33000', '890000', NULL, 107, '45000', '65000', 6),
(7, 4, 'Hotel Del Luna', '2020-01-17', '2020-01-31', '14', '6500', NULL, 'gudarat1', '91000', NULL, NULL, NULL, NULL, NULL, 113, NULL, NULL, 7),
(8, 4, 'Hotel3', '2020-01-17', '2020-01-31', '14', '7500', NULL, 'gudara5', '105000', NULL, NULL, NULL, NULL, NULL, 114, NULL, NULL, 8),
(9, 5, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 115, NULL, NULL, 9),
(10, 5, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 116, NULL, NULL, 10),
(11, 5, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 117, NULL, NULL, 11),
(12, 5, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 120, NULL, NULL, 12),
(13, 5, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 119, NULL, NULL, 13),
(14, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '300000', '100000', '100000', NULL, 115, '100000', '100000', 14),
(15, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '300000', '100000', '100000', NULL, 118, '100000', '100000', 15),
(16, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '300000', '100000', '100000', NULL, 119, '100000', '100000', 16),
(17, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '400000', '100000', '100000', NULL, 120, '100000', '100000', 17),
(18, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '300000', '100000', '100000', NULL, 124, '100000', '100000', 18),
(19, 6, 'Tes', '2020-01-27', '2020-01-31', '4', '400000', NULL, NULL, NULL, '1600000', '300000', '100000', '100000', NULL, 123, '100000', '100000', 19),
(20, 7, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '400000', NULL, '-', '1600000', NULL, NULL, NULL, NULL, NULL, 40, NULL, NULL, 20),
(21, 7, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '300000', NULL, '-', '1200000', NULL, NULL, NULL, NULL, NULL, 41, NULL, NULL, 21),
(22, 7, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '300000', NULL, '-', '1200000', NULL, NULL, NULL, NULL, NULL, 46, NULL, NULL, 22),
(23, 7, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '300000', NULL, '-', '1200000', NULL, NULL, NULL, NULL, NULL, 45, NULL, NULL, 23),
(24, 7, 'Tes Hotel', '2020-01-27', '2020-01-31', '4', '300000', NULL, '-', '1200000', NULL, NULL, NULL, NULL, NULL, 44, NULL, NULL, 24),
(25, 8, 'Tes', '2020-01-27', '2020-01-31', '4', '300000', NULL, NULL, NULL, '1200000', '250000', '100000', '100000', NULL, 41, '100000', '100000', 25),
(26, 8, 'Tes', '2020-01-27', '2020-01-31', '4', '300000', NULL, NULL, NULL, '1200000', '300000', '100000', '100000', NULL, 42, '100000', '100000', 26),
(27, 8, 'Tes', '2020-01-27', '2020-01-31', '4', '300000', NULL, NULL, NULL, '1200000', '300000', '100000', '100000', NULL, 43, '100000', '100000', 27),
(28, 8, 'Tes', '2020-01-27', '2020-01-31', '4', '200000', NULL, NULL, NULL, '800000', '200000', '100000', '100000', NULL, 45, '100000', '100000', 28),
(29, 8, 'Tes', '2020-01-27', '2020-01-31', '4', '200000', NULL, NULL, NULL, '800000', '300000', '100000', '100000', NULL, 44, '100000', '100000', 29);

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_dinas`
--

CREATE TABLE `perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `perihal` text,
  `surat_perintah` varchar(200) DEFAULT NULL,
  `status_peserta_dinas` int(11) NOT NULL DEFAULT '0',
  `tgl_input` date NOT NULL,
  `tingkat_biaya` varchar(40) DEFAULT NULL,
  `jumlah_peserta` int(11) NOT NULL DEFAULT '0',
  `pejabat` varchar(70) DEFAULT NULL,
  `jenis_kendaraan` int(11) NOT NULL DEFAULT '0',
  `id_transportasi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan_dinas`
--

INSERT INTO `perjalanan_dinas` (`id`, `id_user`, `perihal`, `surat_perintah`, `status_peserta_dinas`, `tgl_input`, `tingkat_biaya`, `jumlah_peserta`, `pejabat`, `jenis_kendaraan`, `id_transportasi`) VALUES
(1, 26, 'maksud perjalanan dinas', 'PO-DARAT-0001', 1, '2020-01-20', 'rendah', 2, 'Ketua DPRD', 1, 0),
(2, 26, 'mksud nya adakah untuk bla bla bla', 'PO-DARAT-0002', 1, '2020-01-20', 'tinggi', 2, 'Ketua DPRD', 1, 0),
(3, 26, 'maksudnya adalah untuk bla bla bla bla bla', 'po-udara-dprd-001', 1, '2020-01-20', 'tinggi', 2, 'Ketua DPRD', 2, 0),
(4, 26, 'maksudnya adalah untuk menunngu', 'PO-DARAT-002', 1, '2020-01-25', 'rendah', 2, 'Ketua DPRD', 1, 0),
(5, 26, 'Tes Maksud Perjalanan Dinas', '123456123', 1, '2020-01-27', '-', 5, 'Ketua DPRD', 1, 0),
(6, 26, 'Tes Maksud Perjalanan Dinas Udara', '123123123', 1, '2020-01-27', '-', 6, 'Ketua DPRD', 2, 0),
(7, 26, 'Tes Maksud Perjalanan Dinas Setwan Darat', '123123123', 2, '2020-01-27', '-', 5, 'Sekretaris DPRD', 1, 0),
(8, 26, 'Tes Maksud Perjalanan Dinas Udara Setwan', '3213213', 2, '2020-01-27', '-', 5, 'Sekretaris DPRD', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_proposal` varchar(200) DEFAULT NULL,
  `proposal` varchar(200) DEFAULT NULL,
  `reses` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `id_user`, `judul_proposal`, `proposal`, `reses`) VALUES
(1, 26, 'Tes', '0d3e5e6005bd367894f85c5256145339.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`, `status`) VALUES
(1, '9b1fd994b755af73e3e64853b842f1', 26, '2019-10-13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id` int(11) NOT NULL,
  `jenis_kendaraan` varchar(50) DEFAULT NULL,
  `plat_nomor` varchar(50) DEFAULT NULL,
  `nama_rental` varchar(255) DEFAULT NULL,
  `alamat_rental` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tiket` varchar(255) DEFAULT NULL,
  `tagihan` varchar(255) DEFAULT NULL,
  `id_perjalanan_dinas` int(11) NOT NULL DEFAULT '0',
  `lama_sewa` int(11) NOT NULL DEFAULT '0',
  `biaya_sewa` int(11) NOT NULL DEFAULT '0',
  `nomor_tiket` varchar(255) DEFAULT NULL,
  `kontak_rental` varchar(200) DEFAULT NULL,
  `total_biaya_rental` varchar(11) DEFAULT NULL,
  `gu` varchar(255) DEFAULT NULL,
  `harga_tiket` varchar(255) DEFAULT NULL,
  `anggaran` varchar(255) DEFAULT NULL,
  `akun` varchar(255) DEFAULT NULL,
  `keterangan_rental` text,
  `id_user_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportasi_dinas`
--

CREATE TABLE `transportasi_dinas` (
  `id` int(11) NOT NULL,
  `id_users_dinas` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jumlah_hari` int(11) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gelar` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `gelar`) VALUES
(26, '192.168.2.1', 'adminsetwan', '$2y$08$LFOGhOjYPgkD9gOea/c1x.rYf4spEeSUCpTarQ6dEr5qrdrzaOuy.', NULL, 'rani.aartijaya@gmail.com', NULL, 'QM6kSuLdppmxNEZnCpiYq.a2c651fa98840e6b2b', 1545792141, NULL, 1507273365, 1580402687, 1, 'admin', 'setwan', 'Bursa Sajadah', '0895350164351', NULL),
(27, '::1', 'manager', '$2y$08$hFYHUujxhERHna1NqtZSP.PumDr2MsB2YXJqiJPxFt9.B9IT9Zw5C', NULL, 'budiman.wibawa@outlook.com ', NULL, NULL, NULL, NULL, 1548665201, 1552077135, 1, 'Sinta', 'Manager', NULL, '081322141666', ''),
(29, '::1', 'purchasing', '$2y$08$hFYHUujxhERHna1NqtZSP.PumDr2MsB2YXJqiJPxFt9.B9IT9Zw5C', NULL, 'admin@aartijaya.com', NULL, NULL, NULL, NULL, 1548665471, 1551981903, 1, 'Purchasing', 'adidaya', NULL, '081322141666', ''),
(30, '::1', 'general manager', '$2y$08$hFYHUujxhERHna1NqtZSP.PumDr2MsB2YXJqiJPxFt9.B9IT9Zw5C', NULL, 'info@aartijaya.com', NULL, NULL, NULL, NULL, 1548665781, 1551978351, 1, 'sutrianingsih', 'sutiana', NULL, '081322141666', ''),
(32, '::1', 'admin', '$2y$08$FFkViH78ev.WZPzMDH/A5uiAtC3SbrDC8YJ5w0lVBv/xq7NlWbIlK', NULL, 'adminnnnn@aartijaya.com', NULL, NULL, NULL, NULL, 1548901456, 1549608770, 1, 'Admin', 'Admin', NULL, '0895350164351', ''),
(64, '::1', NULL, '$2y$08$y2vWAmqS.covzemZaQ1bFel0q7ewSl9Bhuh/t8L8dJgu6xygg/pyi', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415183, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(65, '::1', NULL, '$2y$08$NfDuUI7kYhMvCNz.yL9yQuHYyb.91e/NevHL2zyDLmzzTx3M8C6EG', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415184, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(66, '::1', NULL, '$2y$08$A6jR6xLFLMMIhVmXbxU/Jug9hQMsd5uKPtkSWlKzpuP0Z0hgptJ0e', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415184, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(67, '::1', NULL, '$2y$08$HUupfbHoKZMYL08PmGtwV.BQTmzs2/wkP1WdN81UJv3PqXzluSciy', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415185, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(68, '::1', NULL, '$2y$08$H7imp5dCXAW/s8LGRj/IbOQAzcbX833sWjkIRCxiUC51dyilNZ2UG', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415185, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(69, '::1', NULL, '$2y$08$NedhIV5RDtuYsfki7sOxYulJHkqPscakycW/l7jVoI65pwUHGSitq', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415186, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(70, '::1', NULL, '$2y$08$hjIjGEFBZDB5KYbt1Fo8gu3rPqKmUfkIsApgq4kdmAA2rAvteEgky', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415186, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(71, '::1', NULL, '$2y$08$DYgQTzgt8HZ2d3ROtkq4z.q2KTn9pT4JuN0ufjiWUua/l8t3Ekj4q', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415187, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(72, '::1', NULL, '$2y$08$00P7hxGbHP9fBhx6Q9gXJeNwSw3mRNo0eF1Cq0BtpERIO8hPjiBcW', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415193, NULL, 1, 'Caca', 'Cici', NULL, NULL, ''),
(73, '::1', NULL, '$2y$08$z1HNR2h2bU5ajRDqjfRBjOaSEIUiDIHRcZg66atwzCSfPrtftF.cO', NULL, 'caca@bursasajadah.com', NULL, NULL, NULL, NULL, 1570415230, NULL, 1, 'Cindy', 'Raisa', NULL, NULL, ''),
(76, '::1', NULL, '$2y$08$8TuI0399RHkeXnxWb1gTJO4lyoiy9.3034dU10GoM0t8mier8cQcO', NULL, 'neya@aartijaya.com', NULL, NULL, NULL, NULL, 1570473947, NULL, 1, 'Neya', 'Novilad', NULL, NULL, ''),
(77, '::1', NULL, '$2y$08$YnhmkR/vV.8X7ro/aHEA6ubExLp.16frzCuNOJAE2RzRdgbjOF3n.', NULL, 'ahmad@gmail.com', NULL, NULL, NULL, NULL, 1570510271, NULL, 1, 'Ir. H. Achmad Zulkarnain,', 'MT', NULL, NULL, ''),
(82, '::1', NULL, '$2y$08$ZyAd3xln6zJaJ.KPdrV1VO.BOLDuL4FvjJrOtjCCF7sBEtrE62kvq', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997074, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(83, '::1', NULL, '$2y$08$m8BWPr0ORwefmbf2qyFK.efYq6ROnAjvpx0Zz8weRLiBlTG3Nv6nm', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997075, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(84, '::1', NULL, '$2y$08$58D4X1UucR6yxoFsWSWo7ueGWMgobo3gTXfSfR/Zu8MN2YIWl0YCO', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997076, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(85, '::1', NULL, '$2y$08$lKVVEfin60ocx5w7q2huU.1xM5pVghLCl456Ioe7D5QINDHL7aZai', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997076, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(86, '::1', NULL, '$2y$08$e6rnc14pDzaOhreuGKYjuulvkZPvGtc3Y18X1Gt.hqvO92P91ePSu', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997077, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(87, '::1', NULL, '$2y$08$.RXNp4qaQG4m.D26mJX7Ce3QK2HEQASeS/IKnbf8WuGPyh18jKpCW', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997077, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(88, '::1', NULL, '$2y$08$LwYoVyKP81pADKKJ.zE9huchQ0uYKAZ4ZvR6gV0XsOVevgMxzvrjq', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997078, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(89, '::1', NULL, '$2y$08$4rr.8GZy/bMg4bUAIdh2HOOnPXBnfUBH.Zcn8iwVHytxfeU.jELOi', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997078, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(90, '::1', NULL, '$2y$08$cd8p80bJrdFvby/72ngUXuQYeMqNz63g13F6FJMLmVb/mzOIGfETG', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997079, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(91, '::1', NULL, '$2y$08$y2o9kixFgSITBXI7I0CDpOvLOznEKxjc8q7wjXqMDzdtTjJugGJoW', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997079, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(92, '::1', NULL, '$2y$08$jjztxFG62wp4KPbPBIF8N.0l3pRENLTfVsLgom4XSvAU8zdBD9u4C', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997079, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(93, '::1', NULL, '$2y$08$TbqHD6iXiuoTu6pni4xXbeNefB6OeKtYH2uh6/BC9O/yRSOVs2dBe', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997080, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(94, '::1', NULL, '$2y$08$nq6/hkUeokuSmsCA9xsjBeqxNP2yPYeE46/GGcn9E9hBLnhCghBp6', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997080, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(95, '::1', NULL, '$2y$08$AV.b38xSsJwKyhBeN7Wi0.LuH9AAYohYLCSYtH8p7dIV9t29KOSDC', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997081, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(96, '::1', NULL, '$2y$08$dS2PiCVCyJ6M3B/ouKPuauYwdZisFUxI1bfvLUJ1oXMuUwCxkz9Ye', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997081, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(97, '::1', NULL, '$2y$08$4BSp7FtzFGr32xNIckdIPeATw55ZJt9LEYtFVMAAGjjYYLDWXcvMm', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997082, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(98, '::1', NULL, '$2y$08$84atA3LAHqgIPtImPTXNYuB4pv8pfTFb84bOcbtCYdHh4y4h/CIgC', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997082, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(99, '::1', NULL, '$2y$08$sGmAK3ekdTZWQXEenW3s9ey/clCO0t9FJX3vqj4EbvzVdFClszV5C', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997088, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(100, '::1', NULL, '$2y$08$8uj0kdt6HEd73Zwf8JRoKeE6Pp4Zrg1HhT6Hlz9o6VWTHwAw6c6Ui', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997110, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(101, '::1', 'sssqqqqqqqqqqqqq', '$2y$08$Jx43X99rpGUC7by2iHrHxeq0wuX7pWExnoUXhZwStBlswTRotDl9C', NULL, 'rani.aartijaya@gmail.com', NULL, NULL, NULL, NULL, 1571997139, NULL, 1, 'sss', 'qqqqqqqqqqqqq', NULL, NULL, 's.kom'),
(104, '::1', 'restiandiani', '$2y$08$v6PTelEa02vTSbjZ.F68oet7xXeFy.z8p3IsG.MSOY/l9k8TQ4C7m', NULL, 'rani.aartijaya@gmail.comm', NULL, NULL, NULL, NULL, 1571999283, NULL, 1, 'Resti', 'Andiani', NULL, NULL, 'S.KOM'),
(115, '::1', 'achmadzulkarnain', '$2y$08$lyQgWnDWWfxBLsqBxOVkdumYJI/eq/WC3ELcXSP3ad5XtHTYQFNiK', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580097304, NULL, 1, 'Achmad', 'Zulkarnain', NULL, NULL, NULL),
(116, '::1', 'bambangpurnomo', '$2y$08$AS5qJr.K1UEKygxbtKxXpuh1PE6.17a.icS/LHzFKC2H.WWUkoWIy', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580097969, NULL, 1, 'bambang', 'purnomo', NULL, NULL, NULL),
(117, '::1', 'purwantop', '$2y$08$puhntUe05T37/mFlz1DXMOvm6rwZHhMNcsqW5wIVWXaLZDN9bG6Sq', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098297, NULL, 1, 'purwanto', 'p', NULL, NULL, NULL),
(118, '::1', 'rinimarthini', '$2y$08$ot.KRg0NWM8KiJ2DNhxrFOz1VV9vUesqCX8xidHHIht8H5tIg1hze', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098362, NULL, 1, 'rini', 'marthini', NULL, NULL, NULL),
(119, '::1', 'acepjamaludin', '$2y$08$XFER9zmWmqtsInGL0hbcqecdYpnl0LLwlA1mvOyR26ofUZZjcdDH.', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098438, NULL, 1, 'acep', 'jamaludin', NULL, NULL, NULL),
(120, '::1', 'asepsutisna', '$2y$08$DnVWWBXaJiR5.hB5Bq4.5.HACIRrztB5fJO9F3aFc/LJ4YCiP1mMG', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098730, NULL, 1, 'asep', 'sutisna', NULL, NULL, NULL),
(121, '::1', 'ahmaddahlan', '$2y$08$0ObhXRA4WsgpjXvmSKVvj.JS28SBddR7nz1pmnp4x42ymgNLO8pGC', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098775, NULL, 1, 'ahmad', 'dahlan', NULL, NULL, NULL),
(122, '::1', 'ayikhusnayaddi', '$2y$08$ozd4pip3snl2tKfARPPcPOcG2RlrlloTb9VXzLi.J8mzv5/xEYFzG', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098826, NULL, 1, 'ayi', 'khusnayaddi', NULL, NULL, NULL),
(123, '::1', 'ayislavilianto', '$2y$08$EG58fK/1MQ5127y8Tm2WOegXP2..5zFr2RMViAOaq40PEuP2mWgju', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098879, NULL, 1, 'ayis', 'lavilianto', NULL, NULL, NULL),
(124, '::1', 'agungyudaswara', '$2y$08$WPlN08Wx0fDwofhQPzkz5O//yi2KJBT.ROwxn5AOUJdC79xqVs2xu', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580098993, NULL, 1, 'agung', 'yudaswara', NULL, NULL, NULL),
(125, '::1', 'dadangmulyana', '$2y$08$n/alSESs8ou22.EH6Yake.1xsp4N6S0Y0KqA7iiGZ69RUDPSwh7iK', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580395863, NULL, 1, 'dadang', 'mulyana', NULL, NULL, NULL),
(126, '::1', 'dedelatif', '$2y$08$KxfCpxJSmJm2iHR14llhI.kL5jnzF9NNe6hRdukAcbpP2R8AjdsYu', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580395923, NULL, 1, 'dede', 'latif', NULL, NULL, NULL),
(127, '::1', 'djokotaruna', '$2y$08$WJVIetW3g2TpM9CPX/wQbutsbVNFFmzygC6E3bMAJ59G7A9HPntr6', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580395977, NULL, 1, 'djoko', 'taruna', NULL, NULL, NULL),
(128, '::1', 'irmaindriyani', '$2y$08$hTywzGwzEzjekDoGmcYc5eHoOdruOqyvGTMpzgu61zdMsSY/0L18i', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396037, NULL, 1, 'irma', 'indriyani', NULL, NULL, NULL),
(129, '::1', 'aida cakrawatikonda', '$2y$08$6v6eORfJrVZc..EWV35U6OgzrtF80Z.r3DoSEozotDX.a.XteZaNi', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396109, NULL, 1, 'aida ', 'cakrawatikonda', NULL, NULL, NULL),
(130, '::1', 'hdhidayat', '$2y$08$zCoc9BFajwG6HwyrG96J5O6w.lqMp8/fwkIKSebNtK2Z3M9gXYtSK', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396160, NULL, 1, 'hd', 'hidayat', NULL, NULL, NULL),
(131, '::1', 'hsudiarto', '$2y$08$gLe9.zTW3A.BHpx.PtPoC.a/m7/O9OIGR7fwURP5AEFkSRC9Vds0u', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396213, NULL, 1, 'h', 'sudiarto', NULL, NULL, NULL),
(132, '::1', 'yusrusnaya', '$2y$08$lyQJdlIKD.2PwcrqFhEqxuDZVGAgrje1D7RSDVqIjDeP3QMsEn2GS', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396263, NULL, 1, 'yus', 'rusnaya', NULL, NULL, NULL),
(133, '::1', 'eddysofyan', '$2y$08$utAqeXaLizaLUB/Q9ocP2ODMaC2fP2uf4Alg/g.qd7YU9W15m.0zG', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580396308, NULL, 1, 'eddy', 'sofyan', NULL, NULL, NULL),
(134, '::1', 'ekosugianto', '$2y$08$RrBLx/ncoP0XCDZkEkGzxeOxoUAK6X.dbbwp0j0zfK..bHAgPIfmS', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580397986, NULL, 1, 'eko', 'sugianto', NULL, NULL, NULL),
(135, '::1', 'enilfadahliza', '$2y$08$7sBCLX4.3MEj9FD2yPI5QOZgehWTai5iSsCvdLFjrjODCzyoZ6so2', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398040, NULL, 1, 'enil', 'fadahliza', NULL, NULL, NULL),
(136, '::1', 'euisisopromaya', '$2y$08$EsqCNptmRylX0/e1ksBn3Oh5.yaKQAufrLmpub9N8h5ttI8I984Q6', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398096, NULL, 1, 'euis', 'isopromaya', NULL, NULL, NULL),
(137, '::1', 'freddysiagian', '$2y$08$UO5a3CcgMCavpnBkbsSwaO7Rd8Uxclbb.096mSM.VtfIlrEM.EAx.', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398146, NULL, 1, 'freddy', 'siagian', NULL, NULL, NULL),
(138, '::1', 'agussolihin', '$2y$08$WhqmgiFaEC3.AvzbwLYpoeJg/e0G4Hbo3eUhEeR8OBo5jpkD9RR5S', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398195, NULL, 1, 'agus', 'solihin', NULL, NULL, NULL),
(139, '::1', 'aseprukmansyah', '$2y$08$5EupqIs7wpjv38PSpWyWFemjK67G5XJS.4Y6LucyzoWJod4MjztAS', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398241, NULL, 1, 'asep', 'rukmansyah', NULL, NULL, NULL),
(140, '::1', 'barkahsetiawan', '$2y$08$xKbb56.QF9tQs4rZtZNdK.ZSaaxl5BCQr61VXY1qWHU5lwZNAkPm.', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398289, NULL, 1, 'barkah', 'setiawan', NULL, NULL, NULL),
(141, '::1', 'edikanaedi', '$2y$08$Rpwjrtae8r3KcIZuJjX9wOPlDfaF/CFXWKQWxkSNrXNYABY7QB.i6', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398334, NULL, 1, 'edi', 'kanaedi', NULL, NULL, NULL),
(142, '::1', 'enangsahri', '$2y$08$zVwxck3uGQkmnXyp2AE.xOqGH1MLeSaxDoeK/aT5lHp16wjfgWs/C', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398380, NULL, 1, 'enang', 'sahri', NULL, NULL, NULL),
(143, '::1', 'hmuchlisin', '$2y$08$alWdmUvONqIApNtmv1xh6O8UTsNQePMrGl4i3u.Rf3vTq6T6CkQfG', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398480, NULL, 1, 'h', 'muchlisin', NULL, NULL, NULL),
(144, '::1', 'hnabsun', '$2y$08$5u8waBdqvWk2ECcaWdIOKeOXtamvVfwzMDDIqMpNMG1sco7wo72iy', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398735, NULL, 1, 'h', 'nabsun', NULL, NULL, NULL),
(145, '::1', 'hsupiyardi', '$2y$08$RGkz.amlEHfR7ye7Svz9muJsQ7imeIbPk8nLXAdw.JePulrCwpERS', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398877, NULL, 1, 'h', 'supiyardi', NULL, NULL, NULL),
(146, '::1', 'hhanrochayati', '$2y$08$f1DjBFAdrS4CnAzdsJ9yvOQeshypWItDCCHfZH1BHphi5cME3nu32', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398925, NULL, 1, 'hhan', 'rochayati', NULL, NULL, NULL),
(147, '::1', 'hendrasaputra', '$2y$08$QxKt.Vyp1y4vvFVpq8zN7eV7fnhHpAh9UrpP72qp99CPgaGUbN9Ce', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580398983, NULL, 1, 'hendra', 'saputra', NULL, NULL, NULL),
(148, '::1', 'abdulmahfuri', '$2y$08$A1ssY9fNM00IL.pUy1UNnuBOkRkIk/zpJUxL38Ys5.7hWv3Ndo5Qa', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399366, NULL, 1, 'abdul', 'mahfuri', NULL, NULL, NULL),
(149, '::1', 'iwansetiawan', '$2y$08$jHa2YLUY/o4vqN3cxbbfFOamoCTgGTBxNoTS8MiOajzbHI/tlgAHi', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399552, NULL, 1, 'iwan', 'setiawan', NULL, NULL, NULL),
(150, '::1', 'kaniaintanpuspita', '$2y$08$CtFi/DsSee3G.XjKldsRx.SVEvoAav24SupHwykYJOIDTI.Hdu5sq', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399594, NULL, 1, 'kania', 'intanpuspita', NULL, NULL, NULL),
(151, '::1', 'lilisyusniawati', '$2y$08$1KK9hv8MQvHK4aeWTVTLcOlNldC7kWG1ZNjGsyAD2wDJHQvBcvNqG', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399636, NULL, 1, 'lilis', 'yusniawati', NULL, NULL, NULL),
(152, '::1', 'lukmabhakti', '$2y$08$jSBQ8.D75SgXwFpWvveXQekhLHuM4v04LUZ2f8qNkWMLbaYFphILC', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399690, NULL, 1, 'lukma', 'bhakti', NULL, NULL, NULL),
(153, '::1', 'nengcucusumiati', '$2y$08$//niimfiwmi0pQ2IIT0JE.JNk3PUCK0qAu/mDoTkStL1bmZ4oKR66', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399744, NULL, 1, 'neng', 'cucusumiati', NULL, NULL, NULL),
(154, '::1', 'onengaminah', '$2y$08$v9oygueH52ouR/zpfDIhs.X8wsPeahLwC84aKZEScloDnPefx10xa', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399785, NULL, 1, 'oneng', 'aminah', NULL, NULL, NULL),
(155, '::1', 'robinsihombing', '$2y$08$QGLnQdM3Jgr8KUWr4VsFnOMxSopxJxuz9pKwsMq4prZcOvvQiZj8q', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399833, NULL, 1, 'robin', 'sihombing', NULL, NULL, NULL),
(156, '::1', 'sriindrijani', '$2y$08$uF.PpKN8luhJOl0p2BskXezyuy75o4PGTmyBQlPESb9fboMSiPfNe', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580399876, NULL, 1, 'sri', 'indrijani', NULL, NULL, NULL),
(157, '::1', 'sobaris', '$2y$08$yS.F1dR7K0BfrzCIYW8p6uKqpqVtiMYiRXkyiyVxtyCNRJCxcOB9y', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580400138, NULL, 1, 'sobari', 's', NULL, NULL, NULL),
(158, '::1', 'wahyuwidyatmoko', '$2y$08$IO5bXqLnvdMTlbJZ9rzge.IA1Hogm836nbt7YkkS7gzWJZ4dSy8Pm', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580400181, NULL, 1, 'wahyu', 'widyatmoko', NULL, NULL, NULL),
(159, '::1', 'yulianawatiy', '$2y$08$2R9E1KSoOCfGiw.KsumNEeJIRVJ51knPZM/HPADYpLF0250Bo9cMC', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1580400217, NULL, 1, 'yulianawati', 'y', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_dinas`
--

CREATE TABLE `users_dinas` (
  `id` int(11) NOT NULL,
  `id_dinas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `kontak` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jumlah_hari` int(11) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `namarental2` varchar(255) DEFAULT NULL,
  `notiket1` varchar(255) DEFAULT NULL,
  `notiket2` varchar(255) DEFAULT NULL,
  `asal2` varchar(255) DEFAULT NULL,
  `tujuan2` varchar(255) DEFAULT NULL,
  `hargatiket1` varchar(255) DEFAULT NULL,
  `hargatiket2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_dinas`
--

INSERT INTO `users_dinas` (`id`, `id_dinas`, `id_user`, `nama`, `alamat`, `kontak`, `asal`, `tujuan`, `tgl_berangkat`, `tgl_kembali`, `jumlah_hari`, `rate`, `total`, `namarental2`, `notiket1`, `notiket2`, `asal2`, `tujuan2`, `hargatiket1`, `hargatiket2`) VALUES
(1, 1, 102, 'rental 1', 'bandung', '089xxx', 'Bandung', 'Jakarta', '2020-01-05', '2020-01-11', 7, '35000', 245000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 105, 'rental2', 'jkt', '085433', 'Bandung', 'Jakarta', '2020-01-05', '2020-01-11', 7, '7500', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 80, 'JKARTA', 'Surabaya', '0875544', 'Jkarta', 'Surabaya', '2020-01-06', '2020-01-09', 4, '78000', 312000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 26, 'rental2', 'banuf', 'hitam', 'Jkarta', 'Surabaya', '2020-01-06', '2020-01-09', 4, '13', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 109, 'lion air', NULL, NULL, 'bandung', 'tujuan', '2019-12-30', '2020-01-31', NULL, NULL, NULL, '-', 'po018811', '-', '-', '', '67000', '8'),
(6, 3, 107, 'Maskapai Bubuh', NULL, NULL, 'Bandung', 'Jakarta', '2019-12-30', '2020-01-31', NULL, NULL, NULL, 'Lion Air', '54000', '87000', 'Jakarta', 'Surabaya', '87000', '87000'),
(7, 4, 113, 'rental ', 'ee', '028873', 'Bandung', 'Jakarta', '2020-01-17', '2020-01-31', 15, '6500', 6500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 4, 114, 'rental3', 'tt', '087544', 'Bandung', 'Jakarta', '2020-01-17', '2020-01-31', 15, '2500', 12500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 5, 115, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '350000', 1750000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 5, 116, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '350000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 117, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '350000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 5, 120, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '400000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 5, 119, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '300000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 6, 115, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes 2', '123123', '321321', 'Jakarta', 'Bandung', '400000', '350000'),
(15, 6, 118, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '400000', ''),
(16, 6, 119, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes 2', '123123', '321321', 'Jakarta', 'Bandung', '400000', '400000'),
(17, 6, 120, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes 2', '123123', '321321321', 'Jakarta', 'Bandung', '300000', '400000'),
(18, 6, 124, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '400000', '400000'),
(19, 6, 123, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '123123', 'Jakarta', 'Bandung', '300000', '400000'),
(20, 7, 40, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '400000', 2000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 7, 41, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '300000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 7, 46, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '300000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 7, 45, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '300000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 7, 44, 'Tes Rental', 'Tes Alamat', 'Tes Kontak Rental', 'Cimahi', 'Jakarta', '2020-01-27', '2020-01-31', 5, '300000', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 41, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '400000', '450000'),
(26, 8, 42, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '300000', '300000'),
(27, 8, 43, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '400000', '200000'),
(28, 8, 45, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '200000', '400000'),
(29, 8, 44, 'Tes', NULL, NULL, 'Bandung', 'Jakarta', '2020-01-27', '2020-01-31', NULL, NULL, NULL, 'Tes', '123123', '321321', 'Jakarta', 'Bandung', '200000', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(107, 0, 3),
(108, 0, 4),
(182, 26, 1),
(181, 26, 3),
(5, 27, 15),
(2, 28, 17),
(3, 29, 16),
(4, 30, 14),
(8, 32, 1),
(7, 32, 2),
(10, 33, 2),
(11, 34, 2),
(12, 35, 2),
(13, 36, 2),
(14, 37, 2),
(15, 38, 2),
(16, 39, 2),
(17, 40, 2),
(18, 41, 2),
(19, 42, 2),
(20, 43, 2),
(21, 44, 3),
(22, 45, 5),
(23, 46, 5),
(24, 47, 5),
(25, 48, 5),
(26, 49, 5),
(27, 50, 5),
(28, 51, 5),
(29, 52, 5),
(30, 53, 5),
(31, 54, 5),
(32, 55, 5),
(33, 56, 5),
(34, 57, 5),
(35, 58, 5),
(36, 59, 5),
(37, 60, 5),
(38, 61, 5),
(39, 62, 5),
(40, 63, 5),
(41, 64, 5),
(42, 65, 5),
(43, 66, 5),
(44, 67, 5),
(45, 68, 5),
(46, 69, 5),
(47, 70, 5),
(48, 71, 5),
(49, 72, 5),
(50, 73, 1),
(53, 76, 1),
(54, 77, 2),
(154, 104, 2),
(155, 104, 3),
(184, 115, 4),
(186, 116, 4),
(188, 117, 4),
(190, 118, 4),
(192, 119, 4),
(194, 120, 4),
(196, 121, 4),
(198, 122, 4),
(200, 123, 4),
(202, 124, 4),
(204, 125, 4),
(206, 126, 4),
(208, 127, 4),
(210, 128, 4),
(212, 129, 4),
(214, 130, 4),
(216, 131, 4),
(218, 132, 4),
(220, 133, 4),
(222, 134, 4),
(224, 135, 4),
(226, 136, 4),
(228, 137, 4),
(230, 138, 4),
(232, 139, 4),
(234, 140, 4),
(236, 141, 4),
(238, 142, 4),
(240, 143, 4),
(242, 144, 4),
(244, 145, 4),
(246, 146, 4),
(248, 147, 4),
(250, 148, 4),
(252, 149, 4),
(254, 150, 4),
(256, 151, 4),
(258, 152, 4),
(260, 153, 4),
(262, 154, 4),
(264, 155, 4),
(266, 156, 4),
(268, 157, 4),
(270, 158, 4),
(272, 159, 4);

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE `usulan` (
  `id` int(11) NOT NULL,
  `reses` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bidang` varchar(70) DEFAULT NULL,
  `kesimpulan` text,
  `jumlah_konsituen` int(11) DEFAULT NULL,
  `snack` varchar(255) DEFAULT NULL,
  `tenda` varchar(255) DEFAULT NULL,
  `spanduk` varchar(255) DEFAULT NULL,
  `sound_system` varchar(255) DEFAULT NULL,
  `makanan` varchar(255) DEFAULT NULL,
  `minuman` varchar(255) DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `usulan` varchar(20) DEFAULT NULL,
  `biaya` int(11) NOT NULL DEFAULT '0',
  `proposal` varchar(20) DEFAULT NULL,
  `waktu` varchar(26) DEFAULT NULL,
  `kursi` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `id_pendamping` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`id`, `reses`, `id_user`, `tanggal`, `bidang`, `kesimpulan`, `jumlah_konsituen`, `snack`, `tenda`, `spanduk`, `sound_system`, `makanan`, `minuman`, `tempat`, `nama`, `alamat`, `usulan`, `biaya`, `proposal`, `waktu`, `kursi`, `volume`, `lokasi`, `hari`, `id_pendamping`) VALUES
(1, 2, 26, '2019-10-29', 'Bidang Pemerintahan', 'aspirasi saya', 14, 'SNACK BOX', NULL, 'Ya', NULL, '15', NULL, 'bANDUNG', 'Rani', 'Jakarta', NULL, 0, NULL, '09:00', '12 biji', '3', 'Jakarta', 'Selasa', 5),
(2, 1, 105, '2019-11-12', NULL, NULL, 15, '15 snack', 'Ya', 'Ya', NULL, '20 nasi box', NULL, 'Jakarta', NULL, NULL, NULL, 0, NULL, '09-selesai', '19 kursi', NULL, NULL, 'Selasa', 1),
(3, 3, 26, '2019-10-30', 'Bidang Ekonomi Keuangan', 'Aspirasi saya adalah ................', 10, '12 snack box', 'Ya', 'Ya', NULL, '13 nasi box', NULL, 'Jakarta', 'Arif Rachman Hakim', 'Jakarta, Indonesia', NULL, 0, NULL, '10-selesai', '19', '3', 'Jakarta', 'Rabu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_lainya`
--
ALTER TABLE `biaya_lainya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perjalanan_dinas` (`id_perjalanan_dinas`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_dinas` (`id_user_dinas`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_sidang`
--
ALTER TABLE `jadwal_sidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_dapil`
--
ALTER TABLE `mst_dapil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_dewan`
--
ALTER TABLE `mst_dewan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_fraksi` (`id_fraksi`),
  ADD KEY `id_dapil` (`id_dapil`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `mst_fraksi`
--
ALTER TABLE `mst_fraksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_pendamping`
--
ALTER TABLE `mst_pendamping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_setwan`
--
ALTER TABLE `mst_setwan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pengikut_dinas`
--
ALTER TABLE `pengikut_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dinas` (`id_dinas`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perjalanan_dinas` (`id_perjalanan_dinas`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_dinas` (`id_user_dinas`);

--
-- Indexes for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `jenis_kendaraan` (`jenis_kendaraan`),
  ADD KEY `id_transportasi` (`id_transportasi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perjalan_dinas` (`id_perjalanan_dinas`),
  ADD KEY `id_user_dinas` (`id_user_dinas`);

--
-- Indexes for table `transportasi_dinas`
--
ALTER TABLE `transportasi_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users_dinas` (`id_users_dinas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_dinas`
--
ALTER TABLE `users_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dinas` (`id_dinas`),
  ADD KEY `id_users` (`id_user`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya_lainya`
--
ALTER TABLE `biaya_lainya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_sidang`
--
ALTER TABLE `jadwal_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_dapil`
--
ALTER TABLE `mst_dapil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_dewan`
--
ALTER TABLE `mst_dewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `mst_fraksi`
--
ALTER TABLE `mst_fraksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mst_pendamping`
--
ALTER TABLE `mst_pendamping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_setwan`
--
ALTER TABLE `mst_setwan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `pengikut_dinas`
--
ALTER TABLE `pengikut_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transportasi_dinas`
--
ALTER TABLE `transportasi_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users_dinas`
--
ALTER TABLE `users_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
