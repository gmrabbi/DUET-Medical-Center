-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 08:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duet_medical_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_form`
--

CREATE TABLE `appointment_form` (
  `Doctor` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment_form`
--

INSERT INTO `appointment_form` (`Doctor`, `number`, `Department`, `Date`, `Time`, `Comment`) VALUES
('Dr. abdur rahim', '01753547782', 'MBBS', '2024-12-25', '8 AM - 10 AM', 'rabby'),
('Dr. Khadija Islam', '01753547782', 'MD', '2024-12-18', '2 PM - 4 PM', 'fdf'),
('Dr. Khadija Islam', '01753547782', 'MD', '2024-12-26', '2 PM - 4 PM', '1223333333333'),
('Dr. Rabeya Nasrin Akhand', '01753547786', 'MBBS', '2024-12-26', '10 AM - 12 PM', 'emergency');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `doc_name` varchar(30) NOT NULL,
  `doc_dep` varchar(20) NOT NULL,
  `doc_timeslot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`doc_name`, `doc_dep`, `doc_timeslot`) VALUES
('Dr. abdur rahim', 'MBBS', '8 AM - 10 AM'),
('Dr. Rabeya Nasrin Akhand', 'MBBS', '10 AM - 12 PM'),
('Dr. Khadija Islam', 'MD', '2 PM - 4 PM'),
('Dr. Md. Abdul Hai Al Hadi', 'MBBS', '4 PM - 6 PM'),
('Thofatul Shefa', 'MBBS', '6 PM - 8 PM');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `cpassword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`firstname`, `lastname`, `email`, `password`, `cpassword`) VALUES
('farhana rahman', 'bonna', 'farhanarahmap@gmail.com', 'farhana', 'farhana'),
('golam mostafa', 'rabby', 'gmrabbi911@gmail.com', '12345678', '12345678'),
('golam mostafa', 'rabby', 'gmrabbi9121@gmail.com', '123', '123'),
('golam mostafa', 'rabby', 'gmrabbi91221@gmail.com', '123', '123'),
('golam mostafa', 'rabby', 'gmrai80@gmail.com', '1234@qW_', '1234@qW_'),
('golam mostafa', 'rabby', 'gmrai810@gmail.com', '123$asA!_', '123$asA!_'),
('golam mostafa', 'rabby', 'gmrai81@gmail.com', 'Ab12345678#', 'Ab12345678#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_form`
--
ALTER TABLE `appointment_form`
  ADD UNIQUE KEY `Doctor` (`Doctor`,`number`,`Department`,`Date`,`Time`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
