-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waiter_boy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fsite` varchar(10) NOT NULL DEFAULT 'E',
  `odh_site` varchar(10) NOT NULL DEFAULT 'E',
  `odd_site` varchar(10) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `fsite`, `odh_site`, `odd_site`) VALUES
(1, 'KBiotics', 'KBiotics', 'kb', 'E', 'E', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `cstmr`
--

CREATE TABLE `cstmr` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tno` int(50) NOT NULL,
  `D1` int(50) NOT NULL,
  `D2` int(50) NOT NULL,
  `D3` int(50) NOT NULL,
  `D4` int(50) NOT NULL,
  `D5` int(50) NOT NULL,
  `D6` int(11) NOT NULL DEFAULT 0,
  `D7` int(11) NOT NULL,
  `D8` int(11) NOT NULL,
  `D9` int(11) NOT NULL,
  `D10` int(11) NOT NULL DEFAULT 0,
  `D11` int(11) NOT NULL,
  `D12` int(11) NOT NULL,
  `qty1` int(50) NOT NULL,
  `qty2` int(50) NOT NULL,
  `qty3` int(50) NOT NULL,
  `qty4` int(50) NOT NULL,
  `qty5` int(50) NOT NULL,
  `qty6` int(50) NOT NULL,
  `qty7` int(50) NOT NULL,
  `qty8` int(50) NOT NULL,
  `qty9` int(50) NOT NULL,
  `qty10` int(50) NOT NULL DEFAULT 0,
  `qty11` int(50) NOT NULL,
  `qty12` int(50) NOT NULL,
  `D_temp` int(50) NOT NULL,
  `qty_temp` int(50) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'Order in Progress',
  `pay_m` varchar(50) NOT NULL,
  `pay_l` varchar(100) NOT NULL,
  `dateI` datetime DEFAULT NULL,
  `dateII` datetime DEFAULT NULL,
  `dateIII` datetime DEFAULT NULL,
  `total` decimal(50,0) NOT NULL,
  `address` longblob NOT NULL,
  `mo` varchar(50) NOT NULL,
  `waiter` varchar(100) NOT NULL DEFAULT '-',
  `manager` varchar(100) NOT NULL DEFAULT '-',
  `d_guy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivary_guys`
--

CREATE TABLE `delivary_guys` (
  `id` int(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `Dname` varchar(100) NOT NULL DEFAULT '-',
  `Dprice` varchar(10) NOT NULL DEFAULT '''0''',
  `mang_stock` varchar(255) DEFAULT NULL,
  `mang_stock_id` int(50) NOT NULL DEFAULT 1,
  `StackT` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(50) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_kg` int(255) NOT NULL,
  `s_pkg` int(255) NOT NULL,
  `s_tps` int(255) NOT NULL,
  `menu_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waiters`
--

CREATE TABLE `waiters` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cstmr`
--
ALTER TABLE `cstmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivary_guys`
--
ALTER TABLE `delivary_guys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiters`
--
ALTER TABLE `waiters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cstmr`
--
ALTER TABLE `cstmr`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivary_guys`
--
ALTER TABLE `delivary_guys`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waiters`
--
ALTER TABLE `waiters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
