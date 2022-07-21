-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 07:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `name`, `username`, `email`, `password`, `password2`) VALUES
(1, 'soyid', 'wdarma56', 'ssasas@ymail.com', '$2y$10$wG6XZKfxiuLxY9Za/17lOOuVkqZeU5rUGFji3tvGDltH0xbnW2tia', 'wahyu24'),
(2, 'soyid', 'darahperawan', 'ssasas@ymail.com', '$2y$10$EswsuL5mE8X1nlFW05LGX.5AppKw.aaUrkx30FmjobVhZoFPt0N/q', 'wahyuu'),
(3, 'baba', 'bibi22', 'baba@ymail.com', '$2y$10$SpUc4Q2n2yomt2Go3e1dyeuaJlpv5qrAYnSCsmayM.yJ4C2nNjwCm', 'baba1'),
(4, 'baba', 'bibi2s', 'baba@ymail.com', '$2y$10$GOMgeT/pVuvbXohJ6B3yA.f4a8grinUbHhyMU5bPgcvZHaO3HjWxC', 'babas');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `idfeatures` int(11) NOT NULL,
  `title_features` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`idfeatures`, `title_features`, `features`, `gambar`) VALUES
(1, '', '', 'Razer_Blade_Pro_Laptop.png'),
(2, 'Amplified Audio', 'In a joint effort between THX and Razer engineering, we tested for an undistorted audio output capable of driving high-performance headphones and speakers to deliver top-notch audio quality These tests included frequency response, distortion, signal-to-no', ''),
(3, 'VR Ready', 'Discover next-generation VR performance, the lowest latency, and plug-and-play compatibility with leading headsets driven by NVIDIA VRWorks technologies.', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `idform` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`idform`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'soyid', 'ssasas@ymail.com', 'fffff', 'soyid'),
(2, 'soyid', 'ssasas@ymail.com', 'soyiiid', 'soyid'),
(3, 'eldi', 'elditampan@ymail.com', 'wahyu keren', 'haiiii'),
(4, 'eldi', 'elditampan@ymail.com', 'ccccc', 'waw'),
(5, 'baba', 'baba@ymail.com', 'ew', '');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `idhome` int(11) NOT NULL,
  `title_beranda` varchar(100) NOT NULL,
  `berandaa` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`idhome`, `title_beranda`, `berandaa`, `gambar`) VALUES
(1, 'THX Mode', 'The 4K display panels are tested for resolution, color accuracy, and smooth video playback. We collaborated closely with THX to ensure consistent image quality across the screen to deliver an unrivaled viewing experience', ''),
(2, 'Performance Redefined', '\r\nThe Razer Blade Pro gaming laptop sets a new standard for desktop replacement laptops delivering an immersive experience in anincredibly thin form factor. Equipped with a QuadCore 7th Gen Intel Core i7 processor, NVIDIA GeForce GTX ', 'f831f038-d894-4195-883c-41b4ef03d7ce.png'),
(3, 'Certified for Perfection', 'As the world first laptop to be a THX Certified Mobile Device by the legendary audio/visual brand, the 4K Razer Blade Pro gaming laptop delivers an immersive visual and audio experience. Display colors are pre-calibrated for accuracy, producing the bes', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviewees`
--

CREATE TABLE `interviewees` (
  `idinterviewees` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interviewees`
--

INSERT INTO `interviewees` (`idinterviewees`, `gambar`, `isi`) VALUES
(1, 'razer5.png', '...the Blade Pro is one of the best-feeling pieces of hardware I\'ve ever held. -PC Magazine'),
(2, 'razer4.png', '...the Razer Blade Pro is one of the world\'s thinnest and most powerful gaming laptops');

-- --------------------------------------------------------

--
-- Table structure for table `razermodels`
--

CREATE TABLE `razermodels` (
  `no` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razermodels`
--

INSERT INTO `razermodels` (`no`, `gambar`, `Nama`) VALUES
(1, '/Knight/13 inch_3.jpg', '13 inch Models'),
(2, '/Knight/13 inch_2.jpg', '13 inch Models'),
(3, '/Knight/13 inch.jpg', '13 inch Models'),
(4, '/knight/15 inch.jpg', '15 inch Models'),
(5, '/knight/15 inch_2.jpg', '15 inch Models'),
(6, '/knight/15 inch_3.jpg', '15 inch Models'),
(7, '/knight/17 inch.jpg', '17 inch Models'),
(8, '/knight/17 inch_2.jpg', '17 inch Models'),
(9, '/knight/17 inch_3.jpg', '17 inch Models');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `idteam` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`idteam`, `nama`, `gambar`) VALUES
(1, 'Bayu Aji Pratama', 'bayu.png'),
(2, 'Muhammad Garison Palembastian Bayuarta', 'icon.png'),
(3, 'Muhammad Wildan', 'wildan.png'),
(4, 'Soyid Wahyu Darmawan', 'soyid2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`idfeatures`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idform`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idhome`);

--
-- Indexes for table `interviewees`
--
ALTER TABLE `interviewees`
  ADD PRIMARY KEY (`idinterviewees`);

--
-- Indexes for table `razermodels`
--
ALTER TABLE `razermodels`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `idfeatures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `idform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `idhome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interviewees`
--
ALTER TABLE `interviewees`
  MODIFY `idinterviewees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `razermodels`
--
ALTER TABLE `razermodels`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
