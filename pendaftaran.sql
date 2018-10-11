-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:45 PM
-- Server version: 10.1.36-MariaDB
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
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `uname` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` int(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`uname`, `pass`, `nama`, `nim`, `kelas`, `jenis`, `hobi`, `fakultas`, `alamat`) VALUES
('', '', 'efretref', 324345, 'D3MI41-01', 'Laki-Laki', 'berenang', 'FIT', 'fewdf'),
('bbbbbbbbbbb', 'bbbb', 'bbbbbbbb', 222222222, 'D3MI41-01', 'Laki-Laki', 'berenang', 'FIT', 'bbbbbbbbbbbbb'),
('', '', 'aaaaaaa', 1111111111, 'D3MI41-01', 'Laki-Laki', 'berenang', 'FIT', 'aaaaaaaaaaa'),
('cccccccc', 'ccccc', 'ccccccc', 2147483647, 'D3MI41-01', 'Laki-Laki', 'berenang', 'FIT', 'ccccccccccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
