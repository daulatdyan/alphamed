-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphamed`
--

-- --------------------------------------------------------

--
-- Table structure for table `docregistration`
--

CREATE TABLE `docregistration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docregistration`
--

INSERT INTO `docregistration` (`id`, `name`, `username`, `password`, `gender`, `dob`, `address`, `mobile`, `email`, `degree`) VALUES
(1, 'Ratul', '', '', 'male', '2020-12-23', '', '01954407566', 'ratul@gmail.com', 'mbbs'),
(2, 'Ratul', 'ratul111', 'iop0987', 'male', '2020-12-21', 'House-4(flat-7A), Road-19, sector-7, uttara, dhaka', '01954407566', 'ratul@gmail.com', 'mbbs');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `age`, `dob`, `phone`, `email`, `degree`, `password`) VALUES
(1, 'Dr.A', 54, '1970-03-06', 1111111111, 'hello@gmail.com', 'MBBS, MD (Cardiology)\r\nFellow: HPSP (Thailand, Philippines), Fellow: WHO (India)\r\n\r\n', ''),
(2, 'Dr. B', 54, '1970-12-23', 222222222, 'bhalo@gmail.com', 'MBBS, MD(Hepatology) Special Training On Liver & Gastroenterology (Chennai, India)\r\nAssociate Professor & Head of the Department Dept. Of Hepatology S', ''),
(3, 'Dr. C', 0, '0000-00-00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorappoint`
--

CREATE TABLE `doctorappoint` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `docname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`id`, `name`, `username`, `password`, `gender`, `dob`, `address`, `mobile`, `email`) VALUES
(1, 'Ratul', '', '', 'male', '2020-12-30', 'House-4(flat-7A), Road-19, sector-7, uttara, dhaka', '01954407566', 'tushu@ymail.com'),
(2, 'Ratul', '', '90opou', 'male', '2020-12-01', 'House-4(flat-7A), Road-19, sector-7, uttara, dhaka', '01954407566', 'tushu@ymail.com'),
(3, 'Twasin', 'tushu', 'tugh789', 'male', '2020-12-15', 'mirpur', '01678904560', 'tushu@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `name`, `age`, `dob`, `phone`, `email`, `password`) VALUES
(2, '', '0', '0000-00-00', '0', '', ''),
(3, '', '', '0000-00-00', '', '', ''),
(4, '', '', '0000-00-00', '', '', ''),
(5, 'Daulat Dyan Ratul', '30', '2020-11-30', '01954407566', 'dream_teller2005@yahoo.com', 'hji789');

-- --------------------------------------------------------

--
-- Table structure for table `testapp`
--

CREATE TABLE `testapp` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testapp`
--

INSERT INTO `testapp` (`id`, `patient_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docregistration`
--
ALTER TABLE `docregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorappoint`
--
ALTER TABLE `doctorappoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testapp`
--
ALTER TABLE `testapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docregistration`
--
ALTER TABLE `docregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctorappoint`
--
ALTER TABLE `doctorappoint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testapp`
--
ALTER TABLE `testapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
