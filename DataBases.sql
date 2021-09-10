-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 06:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'KBiotics', 'KBiotics', 'kb');

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
  `status` varchar(500) NOT NULL,
  `pay_m` varchar(50) NOT NULL,
  `pay_l` varchar(100) NOT NULL,
  `dateI` datetime DEFAULT NULL,
  `dateII` datetime DEFAULT NULL,
  `dateIII` datetime DEFAULT NULL,
  `total` decimal(50,0) NOT NULL,
  `waiter` varchar(100) NOT NULL DEFAULT '-',
  `manager` varchar(100) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cstmr`
--

INSERT INTO `cstmr` (`id`, `name`, `tno`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`, `qty11`, `qty12`, `D_temp`, `qty_temp`, `status`, `pay_m`, `pay_l`, `dateI`, `dateII`, `dateIII`, `total`, `waiter`, `manager`) VALUES
(1, 'Customer Name', 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 'Served', '', '', NULL, '2021-07-29 10:42:56', NULL, '100', '-', '-'),
(2, 'Customer Namesa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Served', '', '', NULL, '2021-07-29 10:43:08', NULL, '0', '-', '-'),
(3, 'Customer Namesab', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Served', '', '', NULL, NULL, NULL, '0', '-', '-'),
(4, 'Customer Namesab', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(5, 'Customer Namesab', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(6, 'Customer Namesab', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(7, 'Customer Name51', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(8, 'Customer Name5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(9, 'Customer Name', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(10, 'Customer Name', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(11, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(12, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(13, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(14, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(15, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(16, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(17, 'Customer Name15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(18, 'Customer Name15', 0, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(19, 'Customer Nameaa', 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(20, 'Customer Name20', 0, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(21, 'Customer Name', 0, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(22, 'Customer Name45', 0, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(23, 'Customer Name15', 0, 3, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, '', 'Razorpay', 'pay_Hf6WNyzaPIDuqD', NULL, NULL, '2021-07-30 12:09:49', '0', '-', '-'),
(24, 'Customer Name15', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '', 'Razorpay', 'pay_Hf74px7XetL8vf', NULL, NULL, '2021-07-30 12:42:26', '0', '-', '-'),
(25, 'Customer Name15', 52, 3, 2, 3, 3, 3, 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 4, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(26, 'Customer Name15', 23, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 5, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '', 'Razorpay', 'pay_Hf6UL036B0sIGl', NULL, NULL, '2021-07-30 12:07:52', '0', '-', '-'),
(27, 'Customer Name15', 27, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '', 'Other', '', NULL, NULL, '2021-07-30 09:25:20', '0', '-', '-'),
(28, 'Customer Name17', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Cooking', 'UPI', '', NULL, NULL, '2021-07-30 09:24:59', '0', '-', '-'),
(29, 'Customer Name15', 52, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Cooking', 'UPI', '', NULL, NULL, '2021-07-30 09:24:43', '0', '-', '-'),
(30, 'Customer Name15', 52, 3, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 'Cooking', 'Cash', '', NULL, NULL, '2021-07-30 09:23:06', '0', '-', '-'),
(31, 'Customer Name15', 52, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Served', 'UPI', '', '2021-07-28 07:22:34', '2021-07-29 12:30:42', '2021-07-30 09:12:49', '0', '-', '-'),
(32, '61', 63, 2, 3, 3, 2, 1, 1, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 6, 'Served', 'Cash+UPI', '', NULL, '2021-07-30 08:34:10', '2021-07-30 09:11:48', '0', '-', '-'),
(33, 'abx', 52, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 'conformed', 'Razorpay', 'pay_Hf706WEdB6L9eL', '2021-07-30 12:36:56', NULL, '2021-07-30 12:37:57', '0', '-', '-'),
(34, 'abc', 90, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Cash', '', '2021-08-02 08:39:13', NULL, '2021-08-02 08:43:07', '0', '-', '-'),
(35, 'pqr', 12, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Card', '', '2021-08-02 08:40:21', NULL, '2021-08-02 08:43:16', '0', '-', '-'),
(36, 'xyz', 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'UPI', '', '2021-08-02 08:41:21', NULL, '2021-08-02 08:43:24', '0', '-', '-'),
(37, 'bcd', 22, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Cash+UPI', '', '2021-08-02 08:42:18', NULL, '2021-08-02 08:43:41', '0', '-', '-'),
(38, 'sd', 23, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Other', '', '2021-08-02 08:44:37', NULL, '2021-08-02 08:45:26', '0', '-', '-'),
(39, 'aaa', 63, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '', 'Razorpay', 'pay_HgEeKSPRVflg8u', NULL, NULL, '2021-08-02 08:45:52', '0', '-', '-'),
(40, 'abc', 15, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Cash', '', '2021-08-02 09:05:08', NULL, '2021-08-02 09:08:18', '0', '-', '-'),
(41, 'xyz', 52, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Card', '', '2021-08-02 09:05:43', NULL, '2021-08-02 09:16:38', '50', '-', '-'),
(42, 'pqr', 25, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Cash', '', '2021-08-02 09:06:18', NULL, '2021-08-02 09:15:58', '100', '-', '-'),
(43, 'aaa', 15, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'UPI', '', '2021-08-02 09:06:47', NULL, '2021-08-02 09:16:51', '500', '-', '-'),
(44, 'bbb', 22, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Cash+UPI', '', '2021-08-02 09:07:15', NULL, '2021-08-02 09:16:59', '150', '-', '-'),
(45, 'ccc', 30, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'conformed', 'Other', '', '2021-08-02 09:07:48', NULL, '2021-08-02 09:17:13', '50', '-', '-'),
(46, 'ddd', 63, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 'Served', 'Razorpay', 'pay_HgFDoNRI43ljsC', '2021-08-02 09:18:55', '2021-08-05 09:12:25', '2021-08-02 09:19:27', '200', '-', '-'),
(47, 'x', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(48, 'xxx', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Served', '', '', NULL, '2021-08-05 09:12:09', NULL, '0', '-', '-'),
(49, 'abc', 12, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 5, 5, 16, 1, 3, 5, 0, 0, 0, 0, 0, 0, 6, 6, '', 'Razorpay', 'pay_HhVESuqCRazyg0', NULL, NULL, '2021-08-05 01:38:11', '350', '-', 'a'),
(50, 'abc', 12, 1, 3, 1, 1, 3, 3, 3, 1, 4, 5, 5, 3, 2, 3, 5, 5, 10, 5, 10, 5, 5, 2, 3, 2, 12, 12, 'Served', 'UPI', '', '2021-08-05 01:13:51', '2021-08-12 12:00:22', '2021-08-05 01:23:25', '2420', 'raj kapoor', ''),
(51, 'abc', 15, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 'Served', 'Razorpay', 'pay_HjlytTelrSurOq', NULL, '2021-08-05 09:12:03', '2021-08-11 07:19:15', '280', '-', 'SELF abc'),
(52, 'raj', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Card', '', NULL, NULL, '2021-08-05 01:25:58', '0', '-', 'a'),
(53, 'rahul', 52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Card', '', NULL, NULL, '2021-08-11 07:38:07', '0', '-', 'SELF abc'),
(54, 'amaze', 63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Cash+UPI', '', NULL, NULL, '2021-08-05 09:08:18', '0', '-', '-'),
(55, 'raj khanna', 69, 1, 4, 5, 4, 5, 0, 0, 0, 0, 0, 0, 0, 10, 5, 5, 3, 10, 0, 0, 0, 0, 0, 0, 0, 5, 5, '', 'Cash+UPI', '', NULL, NULL, '2021-08-05 01:21:42', '1650', '', '-'),
(56, 'raj khanna', 15, 10, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, '', '', '', NULL, NULL, NULL, '0', '-', '-'),
(57, 'rajkumar patan', 18, 9, 7, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 'confirmed', '', '', '2021-08-12 11:58:34', NULL, NULL, '0', 'raj kapoor', '-'),
(58, 'priyanka chopda', 15, 10, 12, 9, 2, 6, 0, 0, 0, 0, 0, 0, 0, 10, 5, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 5, 5, 'Served', 'Razorpay', 'pay_HlmuIe3LvG2bii', '2021-08-16 09:24:05', '2021-08-16 09:29:20', '2021-08-16 09:31:36', '788', 'raj kapoor', 'SELF priyanka chopda'),
(59, 'nick jonas', 18, 7, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 'Served', 'Razorpay', 'pay_Hlmuzt3jm5An3z', '2021-08-16 09:27:33', '2021-08-16 09:29:27', '2021-08-16 09:32:16', '252', 'raj kapoor', 'SELF nick jonas');

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

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `username`, `password`) VALUES
(2, 'aa', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `Dname` varchar(100) NOT NULL DEFAULT '-',
  `Dprice` varchar(10) NOT NULL DEFAULT '''0''',
  `StackT` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Dname`, `Dprice`, `StackT`) VALUES
(1, '0', '10', 0x30),
(2, 'b', '15', 0x61),
(3, 'salada', '70', 0x61),
(4, 'aaaaaaaaaaaaabbbbbbbbbbcccccccc', '100', 0x61),
(5, 'aaaadddddcccccccccccccccccc', '50', 0x61),
(6, 'cake', '251', 0x61),
(7, 'ice cream', '26', 0x61),
(8, 'lava cake', '30', 0x61),
(9, 'milk', '52', 0x61),
(10, 'kadi', '15', 0x61),
(11, 'kdi', ' 15.20', 0x61),
(12, 'rice', ' 50.57', 0x61);

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

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `username`, `password`) VALUES
(1, 'sagar nakhate', 'sagar152', '152');

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
-- Dumping data for table `waiters`
--

INSERT INTO `waiters` (`id`, `name`, `username`, `password`) VALUES
(6, 'raj', 'mehta', '123'),
(7, 'raj kapoor', 'raj123', '123');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waiters`
--
ALTER TABLE `waiters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
