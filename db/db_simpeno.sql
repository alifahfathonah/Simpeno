-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpeno`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_no_bulan` int(11) NOT NULL,
  `no_bulan` varchar(30) NOT NULL,
  `nm_bulan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_no_bulan`, `no_bulan`, `nm_bulan`) VALUES
(1, '01', 'Januari'),
(2, '02', 'Februari'),
(3, '03', 'Maret'),
(4, '04', 'April'),
(5, '05', 'Mei'),
(6, '06', 'Juni'),
(7, '07', 'Juli'),
(8, '08', 'Agustus'),
(9, '09', 'September'),
(10, '10', 'Oktober'),
(11, '11', 'November'),
(12, '12', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `notaris`
--

CREATE TABLE `notaris` (
  `id_notaris` int(11) NOT NULL,
  `nomor_urut` varchar(20) NOT NULL,
  `id_no_bulan` int(11) NOT NULL,
  `tgl_akta` date NOT NULL,
  `sifat_akta` text NOT NULL,
  `nama_penghadap_1` varchar(50) NOT NULL,
  `nama_penghadap_2` varchar(50) NOT NULL,
  `nama_penghadap_3` varchar(50) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `id_penyimpanan` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notaris`
--

INSERT INTO `notaris` (`id_notaris`, `nomor_urut`, `id_no_bulan`, `tgl_akta`, `sifat_akta`, `nama_penghadap_1`, `nama_penghadap_2`, `nama_penghadap_3`, `nama_pt`, `id_penyimpanan`, `created_at`) VALUES
(1, '0101', 1, '2022-08-01', 'Syarat dan ketentuan umum pemberian fasilitas', 'adisty irma', 'chairman lin', '', 'bank commonwealth', 1, '2022-08-08 10:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `id_penyimpanan` int(11) NOT NULL,
  `no_penyimpanan` varchar(20) NOT NULL,
  `nama_rak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyimpanan`
--

INSERT INTO `penyimpanan` (`id_penyimpanan`, `no_penyimpanan`, `nama_rak`) VALUES
(1, '01', 'Notaris'),
(2, '02', 'Notaris');

-- --------------------------------------------------------

--
-- Table structure for table `ppat`
--

CREATE TABLE `ppat` (
  `id_ppat` int(11) NOT NULL,
  `no_urut` varchar(20) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `tgl_akta` date NOT NULL,
  `bentuk_perbuatan` varchar(20) NOT NULL,
  `pihak_pemberi` varchar(30) NOT NULL,
  `pihak_penerima` varchar(30) NOT NULL,
  `jenis_no_hak` varchar(100) NOT NULL,
  `letak_tanah_bangunan` varchar(30) NOT NULL,
  `luas_tanah` varchar(20) NOT NULL,
  `luas_bangunan` varchar(20) NOT NULL,
  `harga_pengalihan` varchar(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `alamat_pemberi` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `id_penyimpanan` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppat`
--

INSERT INTO `ppat` (`id_ppat`, `no_urut`, `no_akta`, `tgl_akta`, `bentuk_perbuatan`, `pihak_pemberi`, `pihak_penerima`, `jenis_no_hak`, `letak_tanah_bangunan`, `luas_tanah`, `luas_bangunan`, `harga_pengalihan`, `nama_pt`, `alamat_pemberi`, `alamat_penerima`, `id_penyimpanan`, `created_at`) VALUES
(1, '11', '10/2022', '2022-10-04', 'AJB', 'Ir. Bulryamin', 'Tn. Wang Hui', 'Hak Guna Bangunan No. 00119', 'Suka Asih', '1000', '750', '1.850.000.000', 'PT. GELORACIT KEMASTA', 'Jl. Malioboro F.1 No. 25 Rt. 006/004 Desa Tegal Alur Kec. Kalideres', 'Jalan Karang Bolong', 2, '2022-08-09 15:01:37'),
(3, '10', '12312123', '2022-08-10', 'AJB', 'qsdqsd', 'qwsdqsd', '123123', 'Suka Asih', '1000', '12312', '1.850.000.000', 'qwdqwdqwdqwdqw', 'Jl. Malioboro F.1 No. 25 Rt. 006/004 Desa Tegal Alur Kec. Kalideres', 'Jalan Karang Bolong', 1, '2022-08-09 21:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('admin','notaris') NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `status`, `image`) VALUES
(1, 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'logo.png'),
(2, 'Notaris', 'notaris@gmail.com', '4c44266f8e182d9e10f6c6da4be9b493', 'notaris', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_no_bulan`);

--
-- Indexes for table `notaris`
--
ALTER TABLE `notaris`
  ADD PRIMARY KEY (`id_notaris`),
  ADD KEY `bulan` (`id_no_bulan`),
  ADD KEY `penyimpanan2` (`id_penyimpanan`);

--
-- Indexes for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`id_penyimpanan`);

--
-- Indexes for table `ppat`
--
ALTER TABLE `ppat`
  ADD PRIMARY KEY (`id_ppat`),
  ADD KEY `penyimpanan` (`id_penyimpanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_no_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notaris`
--
ALTER TABLE `notaris`
  MODIFY `id_notaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `id_penyimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppat`
--
ALTER TABLE `ppat`
  MODIFY `id_ppat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notaris`
--
ALTER TABLE `notaris`
  ADD CONSTRAINT `bulan` FOREIGN KEY (`id_no_bulan`) REFERENCES `bulan` (`id_no_bulan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyimpanan2` FOREIGN KEY (`id_penyimpanan`) REFERENCES `penyimpanan` (`id_penyimpanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ppat`
--
ALTER TABLE `ppat`
  ADD CONSTRAINT `penyimpanan` FOREIGN KEY (`id_penyimpanan`) REFERENCES `penyimpanan` (`id_penyimpanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
