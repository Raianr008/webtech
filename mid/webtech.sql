-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 07:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `prob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `sname`, `pname`, `prob`, `email`) VALUES
(1, '01', 'raian', 'tislam@aiub.edutislam@aiub.edu', 'tislam@aiub.edu'),
(2, '02', 'raian', 'doggy_squad@yahoo.com', 'doggy_squad@yahoo.com'),
(5, '03', 'raian', 'doggy_squad@yahoo.com', 'doggy_squad@yahoo.com'),
(6, '04', 'raian01', 'rh9939220@gmail.com', 'rh9939220@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `sname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`sname`, `pname`, `email`) VALUES
('sarahrhodes02', 'rh9939220@gmail.com', 'rh9939220@gmail.com'),
('sarahrhodes02', 'rh9939220@gmail.com', 'rh9939220@gmail.com'),
('Prof. Dr. Md. Shah Alam', 'MBBS, DA, FCPS (Anesthesiology)', 'Anesthesiology Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `serial` int(10) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `serial`, `test_name`, `cost`) VALUES
(1, 1, 'blood test', 500),
(2, 2, 'MRI', 1000),
(3, 3, 'X-RAY', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(150) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `filetoupload` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `fname`, `lname`, `email`, `dob`, `gender`, `number`, `password`, `cpassword`, `filetoupload`) VALUES
('raian12', 'saud012', 'aksah123', 'rh9939220@gmail.com', '2021-09-30', 'male', 2147483647, 'zahid05@gmail.com', 'zahid05@gmail.com', 0x3134353737383439375f3233303739333530323032373538345f343431393738313036393830373636303536365f6e2e6a7067),
('raian123654', 'raian dad ', 'raian dad ', 'raiajn02@gmail.com', '2022-03-29', 'male', 2147483647, 'raiajn02@gmail.com', 'raiajn02@gmail.com', ''),
('rqaian012', 'rian adad', 'rian adad', 'riaian02@gmail.com', '2022-03-23', 'female', 2147483647, 'riaian02@gmail.com', 'riaian02@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `interests` varchar(200) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `firstname`, `email`, `address`, `dob`, `gender`, `profession`, `interests`, `file_name`, `uploaded_on`) VALUES
('hsa10', '123456', 'Sazzad', 'sazzad@aiub.edu', 'Aiub', '19/12/2019', 'male', 'Academician', 'music', '', '0000-00-00 00:00:00'),
('jhon', '123', 'jhon', 'jhon@email.com', 'bashundhara', '11/11/2001', 'male', 'student', 'sports', '', '0000-00-00 00:00:00'),
('', '', '', '', '', '', '', '', '', 'wallpaper.jpg', '2021-12-13 14:08:58'),
('', '', '', '', '', '', '', '', '', 'wallpaper.jpg', '2021-12-13 14:09:41'),
('', '', '', '', '', '', '', '', '', '23319236_491856161187107_3391787004576299454_n.jpg', '2021-12-13 14:58:04'),
('', '', '', '', '', '', '', '', '', '23319236_491856161187107_3391787004576299454_n.jpg', '2021-12-13 14:59:20'),
('', '', '', '', '', '', '', '', '', 'wallpaper.jpg', '2021-12-13 15:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD UNIQUE KEY `1` (`username`),
  ADD UNIQUE KEY `user` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
