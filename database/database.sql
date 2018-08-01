-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 02:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `lpa`
--

CREATE TABLE `lpa` (
  `id_laporan` int(10) NOT NULL,
  `no_laporan` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tujuan_penilaian` varchar(30) NOT NULL,
  `nama_debitur` varchar(50) NOT NULL,
  `alamat_debitur` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten_kota` varchar(30) NOT NULL,
  `propinsi` varchar(30) NOT NULL,
  `marketing` varchar(30) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `nama_penilai` varchar(30) NOT NULL,
  `tanggal_survey` date NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `status_penilaian` varchar(30) NOT NULL,
  `jenis_jaminan` varchar(30) NOT NULL,
  `mv` decimal(10,0) NOT NULL,
  `lv` decimal(10,0) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_tl` varchar(30) NOT NULL,
  `mv_tl` decimal(10,0) NOT NULL,
  `lv_tl` decimal(10,0) NOT NULL,
  `keterangan_tl` text NOT NULL,
  `tanggal_review_tl` date NOT NULL,
  `nama_uh` varchar(30) NOT NULL,
  `mv_uh` decimal(10,0) NOT NULL,
  `lv_uh` decimal(10,0) NOT NULL,
  `keterangan_uh` text NOT NULL,
  `tanggal_review_uh` date NOT NULL,
  `nama_dh` varchar(30) NOT NULL,
  `mv_dh` decimal(10,0) NOT NULL,
  `lv_dh` decimal(10,0) NOT NULL,
  `keterangan_dh` text NOT NULL,
  `tanggal_review_dh` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpa`
--

INSERT INTO `lpa` (`id_laporan`, `no_laporan`, `tanggal_masuk`, `tujuan_penilaian`, `nama_debitur`, `alamat_debitur`, `desa_kelurahan`, `kecamatan`, `kabupaten_kota`, `propinsi`, `marketing`, `cabang`, `divisi`, `nama_penilai`, `tanggal_survey`, `tanggal_laporan`, `status_penilaian`, `jenis_jaminan`, `mv`, `lv`, `keterangan`, `nama_tl`, `mv_tl`, `lv_tl`, `keterangan_tl`, `tanggal_review_tl`, `nama_uh`, `mv_uh`, `lv_uh`, `keterangan_uh`, `tanggal_review_uh`, `nama_dh`, `mv_dh`, `lv_dh`, `keterangan_dh`, `tanggal_review_dh`, `file`) VALUES
(8, '433', '2018-07-11', 'take over', 'yulia dp', 'jl harum manis II', 'sukamaju baru', 'tapos', 'denpasar', 'jawa barat', 'rusvita', 'glodok', 'abcdefg', 'yulia', '2018-07-25', '2018-07-26', 'abc', 'rumah', '3456789', '345678', 'abc', 'tris', '5000', '1000', 'abc', '2018-07-11', '', '0', '0', '', '0000-00-00', '', '0', '0', '', '0000-00-00', 'Daftar Riwayat (Curiculum Vitae) Verri Firmansyah.pdf'),
(11, '', '2018-07-04', 'take over', 'imutbanget', 'jl harum manis II', 'dua', 'tiga', 'empat', 'kalimantan', 'abc', 'glodok', 'abcdefgdfff', 'abc', '2018-07-25', '2018-07-26', 'baru', 'pabrik', '56789', '80098', 'keren', 'abc', '43', '233', 'yoi', '2018-07-17', 'abc', '24334242', '434324', 'abc', '2018-07-25', 'abc', '24342', '234324', 'abc', '2018-07-31', ''),
(15, '34567', '2024-07-18', 'take over', 'arip prasetyo', 'jl harum manis II', 'dua', 'tiga', 'empat', 'kalimantan', 'rusvita', 'glodokkkkk', 'abcdefg900', '', '0000-00-00', '0000-00-00', '', '', '0', '0', '', 'abc', '890', '899', 'yoi', '2018-07-10', 'abc', '48596', '733902', '493503', '2018-07-26', 'arip', '5', '3', 'mantep', '2018-07-24', 'Authorization Letter UOB.pdf'),
(26, '8347', '2025-07-18', 'take over', 'Permatasari', 'jl mangga', 'abc', 'abc', 'abc', 'abc', 'abcdefg', 'abc', 'abc', 'abc', '2025-07-22', '2025-07-24', 'baru', 'pabrik', '3456789', '9283', 'baik', 'kajsh', '2345', '422', 'mantap', '2025-07-18', '', '0', '0', '', '2025-07-18', '', '0', '0', '', '2025-07-18', ''),
(27, '02178/VII/2018', '2025-07-18', 'baru', 'ronny yuniarto k', 'cluster kebayoran villa blok ks/b no.1', 'pondok aren', 'pondok aren', 'tangerang selatan', 'banten', 'marliana', 'wisma mulia', 'SME 1', 'janwar budi', '2025-07-21', '2025-07-24', 'baru', 'rumah', '4004000000', '2402000000', 'dekat kabel sutet', 'wisnu', '4004000000', '2402000000', 'kosong sejak 2 tahun lalu', '2025-07-25', 'wisnu', '4004000000', '2402000000', 'akses mudah', '2025-07-26', 'arip', '4004000000', '2402000000', 'rumah reot', '2025-07-29', ''),
(28, '47282291', '2027-07-18', 'jual beli', 'rizky', 'jl satu', 'dua', 'tiga', 'empat', 'kalimantan', 'marliana', 'wismul', 'SME 1', 'janwar', '2027-07-20', '2027-07-18', 'baru', 'rumah reot', '5', '4', 'mantep', 'tris', '5', '3', 'akses susah', '2027-07-28', 'wisnu', '4000', '5000', 'idem', '2027-07-28', 'arip', '3000', '4000', 'idem', '2027-07-27', ''),
(29, '45565', '2027-07-18', '2018-07-05', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'abc', 'abc', '', 'janwar', '2027-07-13', '2027-07-14', 'Perpanjangan', 'rumah', '10', '5', 'mantep', '', '0', '0', '', '2027-07-18', '', '0', '0', '', '2027-07-18', '', '0', '0', '', '2027-07-18', ''),
(30, '44334543', '2029-07-18', '2018-07-04', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'rusvita', 'glodok', '', '', '2029-07-18', '2029-07-18', '', '', '0', '0', '', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', ''),
(31, '44334543', '2029-07-18', '2018-07-04', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'rusvita', 'glodok', '', '', '2029-07-18', '2029-07-18', '', '', '0', '0', '', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', ''),
(32, '44334543', '2029-07-18', '2018-07-04', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'rusvita', 'glodok', '', '', '2029-07-18', '2029-07-18', '', '', '0', '0', '', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', ''),
(33, '44334543', '2029-07-18', '2018-07-04', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'rusvita', 'glodok', 'sme1', '', '2029-07-18', '2029-07-18', '', '', '0', '0', '', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', ''),
(34, '44334543', '2029-07-18', '2018-07-04', 'yulia', 'jl harum manis II', 'sukamaju baru', 'tapos', 'depok', 'jawa barat', 'rusvita', 'glodok', 'SME 1', '', '2029-07-18', '2029-07-18', '', '', '0', '0', '', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '', '0', '0', '', '2029-07-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'yuliadp', 'dwiyadi17', 'yulia dwiyadi permatasari', 'admin'),
(2, 'unithead', '12345', 'aditya wisnu wardana', 'unit_head'),
(3, 'depthead', '12345', 'arip prasetyo', 'dept_head'),
(4, 'teamleader1', '12345', 'trisnanto dwi wibowo', 'team_leader'),
(5, 'teamleader2', '12345', 'yudhitiya ivan rinaldhi', 'team_leader'),
(6, 'janwar', '12345', 'janwar budi saputra', 'penilai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lpa`
--
ALTER TABLE `lpa`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpa`
--
ALTER TABLE `lpa`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
