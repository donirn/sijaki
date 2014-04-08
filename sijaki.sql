-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2014 at 09:54 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sijaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kode_dosen` varchar(3) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`kode_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`, `password`) VALUES
('DRM', 'Doni Ramadhan', '81dc9bdb52d04dc20036dbd8313ed055'),
('DWM', 'Dawam Dwi Jatmiko Suwawi', '81dc9bdb52d04dc20036dbd8313ed055'),
('UFI', 'Shaufiah Abdullah', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `kode_jadwal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_hari` varchar(6) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `kode_ruangan` varchar(4) NOT NULL,
  PRIMARY KEY (`kode_jadwal`),
  KEY `kode_kelas` (`kode_kelas`,`kode_ruangan`),
  KEY `kode_ruangan` (`kode_ruangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `nama_hari`, `waktu_mulai`, `waktu_akhir`, `kode_kelas`, `kode_ruangan`) VALUES
(3, 'rabu', '06:30:00', '09:30:00', 'Prak-OOT-01', 'F304'),
(4, 'kamis', '08:30:00', '10:30:00', 'Fisika-05', 'F126'),
(5, 'jumat', '10:30:00', '12:30:00', 'Indo-01', 'A203'),
(6, 'senin', '12:30:00', '14:30:00', 'Kalkulus-01', 'A203'),
(7, 'selasa', '14:30:00', '16:30:00', 'Kalkulus-03', 'E301'),
(8, 'selasa', '10:30:00', '12:30:00', 'Fisika-05', 'F126'),
(12, 'senin', '08:30:00', '10:30:00', 'Indo-01', 'A203');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode_kelas` varchar(20) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `kode_matakuliah` varchar(6) NOT NULL,
  `kode_dosen` varchar(3) NOT NULL,
  PRIMARY KEY (`kode_kelas`),
  KEY `kode_dosen` (`kode_dosen`),
  KEY `kode_matakuliah` (`kode_matakuliah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kapasitas`, `kode_matakuliah`, `kode_dosen`) VALUES
('Fisika-05', 20, 'ELA2D3', 'UFI'),
('Indo-01', 40, 'FGH4D3', 'DRM'),
('Kalkulus-01', 40, 'AKG2J1', 'DRM'),
('Kalkulus-03', 40, 'AKG2J1', 'UFI'),
('Prak-OOT-01', 40, 'CSG3I1', 'DWM');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `angkatan`, `password`) VALUES
('113100099', 'Erwinita Dwi Astiti', 2010, '81dc9bdb52d04dc20036dbd8313ed055'),
('113100111', 'Ayu Komalasari', 2010, '81dc9bdb52d04dc20036dbd8313ed055'),
('113102170', 'Doni Ramadhan', 2010, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `kode_matakuliah` varchar(6) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_matakuliah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matakuliah`, `nama_matakuliah`) VALUES
('AKG2J1', 'Kalkulus II'),
('CSA3J4', 'Pemrograman Berorientasi Objek'),
('CSG3I1', 'Praktikum RPL: Teknik Berorientasi Objek'),
('ELA2D3', 'Fisika I'),
('FGH4D3', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE IF NOT EXISTS `registrasi` (
  `kode_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(9) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_registrasi`),
  KEY `nim` (`nim`,`kode_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`kode_registrasi`, `nim`, `kode_kelas`, `timestamp`) VALUES
(7, '113102170', 'Prak-OOT-01', '2013-05-19 06:31:02'),
(8, '113102170', 'Fisika-05', '2013-05-20 05:46:41'),
(9, '113102170', 'Kalkulus-01', '2013-05-20 05:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `kode_ruangan` varchar(4) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `ada_proyektor` tinyint(1) NOT NULL,
  PRIMARY KEY (`kode_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `kapasitas`, `ada_proyektor`) VALUES
('A203', 40, 1),
('B123', 40, 1),
('E301', 40, 1),
('F126', 20, 0),
('F304', 40, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`kode_matakuliah`) REFERENCES `mata_kuliah` (`kode_matakuliah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_4` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
