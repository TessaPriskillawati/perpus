-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(100) NOT NULL,
  `nama_anggota` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nomor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `nomor`) VALUES
('A001', 'Ari', 'Laki-laki', 'Medono', 1234455),
('A002', 'arii', 'Laki-laki', 'Medono', 12344556),
('A004', 'Arum', 'Wanita', 'Sragi', 123445567),
('A005', 'Rachel', 'Wanita', 'Sragi', 1234455688),
('A006', 'Arum', 'Wanita', 'Sragi', 123445568);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(100) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `tahun` int(11) NOT NULL,
  `pengarang` varchar(1000) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `tahun`, `pengarang`, `jumlah`) VALUES
('B001', 'Bulan', 2019, 'Tereliye', 1),
('B002', 'Bulan', 2019, 'Tereliye', 1),
('B003', 'bumi', 2018, 'Tereliye', 2),
('B004', 'avasvsv', 2018, 'Tereliye', 1),
('B005', 'matahari', 2020, 'Tereliye', 2),
('B006', 'bumi', 2019, 'Tereliye', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_username`, `member_password`) VALUES
(1, 'tessa', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_pinjam` varchar(10) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `judul` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kode_pinjam`, `kode_buku`, `id_anggota`, `nama_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `judul`, `jumlah`, `status`) VALUES
('P001', 'B001', 'A001', 'Arum', '2022-06-01', '2022-06-08', 'Bulan', 1, 'sudah'),
('P002', 'B003', 'A002', 'Arum', '2022-06-02', '2022-06-11', 'matahari', 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_pinjam` varchar(50) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `id_anggota` varchar(50) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`kode_pinjam`, `kode_buku`, `id_anggota`, `tgl_kembali`) VALUES
('P004', 'B002', 'A003', '2022-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kode_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
