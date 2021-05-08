-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 08:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Appointment_ID` int(11) NOT NULL,
  `Doctor_ID` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Doctors_Schedule_ID` int(11) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Time` time(6) NOT NULL,
  `Day` date NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Patient_attended` enum('Yes','No','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Gender` enum('Male','Female','Other','') NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Expert_at` varchar(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Profile_pic` varchar(255) NOT NULL,
  `Doctor_Added_on` time(6) NOT NULL,
  `Status` enum('Active','Not Active','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `LName`, `FName`, `Email`, `PhoneNum`, `Gender`, `Address`, `Expert_at`, `Degree`, `Profile_pic`, `Doctor_Added_on`, `Status`) VALUES
(1, 'Amr', 'Salama', 'amr.salama223@outlook.com', 1145505067, 'Male', 'tagm3', 'Nutrition   ', 'Masters', '', '08:07:26.000000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_feedback`
--

CREATE TABLE `doctors_feedback` (
  `Doctor_ID` int(11) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_schedule`
--

CREATE TABLE `doctors_schedule` (
  `Doctors_Schedule_ID` int(11) NOT NULL,
  `Doctor_ID` int(11) NOT NULL,
  `Doctors_Schedule_day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') NOT NULL,
  `Doctors_Schedule_date` date NOT NULL,
  `Doctors_Schedule_Start` time NOT NULL,
  `Doctors_Schedule_End` time NOT NULL,
  `Average_Session_Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_schedule`
--

INSERT INTO `doctors_schedule` (`Doctors_Schedule_ID`, `Doctor_ID`, `Doctors_Schedule_day`, `Doctors_Schedule_date`, `Doctors_Schedule_Start`, `Doctors_Schedule_End`, `Average_Session_Time`) VALUES
(3, 1, 'Saturday', '2021-05-04', '15:27:00', '20:24:00', 20),
(4, 1, 'Friday', '2021-05-03', '10:13:00', '13:13:00', 30);

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `Patient_ID` int(11) NOT NULL,
  `Last_App_Date` date NOT NULL,
  `Next_App_Date` date NOT NULL,
  `Doctor Report` varchar(255) NOT NULL,
  `Doctor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Phone_Num` int(11) NOT NULL,
  `Email_Verify` enum('Yes','No') NOT NULL,
  `Image` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `Stuff_ID` int(11) NOT NULL,
  `Doctor` enum('Yes','No') NOT NULL,
  `Receptionist` enum('Yes','No') NOT NULL,
  `Auditor` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `Doctor_ID` int(11) NOT NULL,
  `Session_ID` int(11) NOT NULL,
  `Session_Name` varchar(50) NOT NULL,
  `Session_Description` varchar(255) NOT NULL,
  `Status` enum('Available','Not Available','','') NOT NULL,
  `Session_Link` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Appointment_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`),
  ADD KEY `Patient_ID` (`Patient_ID`),
  ADD KEY `Doctors_Schedule_ID` (`Doctors_Schedule_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `doctors_feedback`
--
ALTER TABLE `doctors_feedback`
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  ADD PRIMARY KEY (`Doctors_Schedule_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD KEY `Patient_ID` (`Patient_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`Session_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Appointment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  MODIFY `Doctors_Schedule_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `Session_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`Doctors_Schedule_ID`) REFERENCES `doctors_schedule` (`Doctors_Schedule_ID`);

--
-- Constraints for table `doctors_feedback`
--
ALTER TABLE `doctors_feedback`
  ADD CONSTRAINT `doctors_feedback_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`);

--
-- Constraints for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  ADD CONSTRAINT `doctors_schedule_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`);

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`),
  ADD CONSTRAINT `medical_history_ibfk_2` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
