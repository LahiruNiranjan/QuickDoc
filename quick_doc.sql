-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 07:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quick_doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `city`, `state`) VALUES
(1, 'Rathnapura	\r\n', 'Rathnapura', 'Sabaragamuwa'),
(2, 'Eheliyagoda Hospital', 'Rathnapura', 'Sabaragamuwa'),
(3, 'Nugegoda Hospital', 'Colombo', 'Western'),
(4, 'Colombo General Hospital', 'Colombo', 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `tokenno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `clinicid` int(11) NOT NULL,
  `date` date NOT NULL,
  `doc` text NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `relation` text NOT NULL,
  `phone` text NOT NULL,
  `problem` text NOT NULL,
  `appointmentstatus` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `tokenno`, `userid`, `doctorid`, `clinicid`, `date`, `doc`, `name`, `age`, `gender`, `relation`, `phone`, `problem`, `appointmentstatus`, `purpose`, `status`) VALUES
(65, 1, 5, 0, 2, '2021-04-28', 'No doc', 'User 1', '22', 'male', 'Self', '9876543210', 'Pain in chest from 7 days.', 1, 'Rohan Kumar is booking Dr. Sovan Chatterjee at Riya Medical Hall dated 2020-07-13 with token no. 1', 2),
(67, 2, 4, 1, 5, '2021-04-28', 'No doc', 'User 2', '22', 'male', 'child', '9093222034', 'Cough in chest', 1, 'Sagar Adhurya is booking Dr. Sovan Chatterjee at Riya Medical Hall dated 2020-07-13 with token no. 2', 1),
(68, 1, 5, 1, 5, '2021-04-28', 'No doc', 'User 3', '20', 'male', 'Mother', '+12121212', 'Pain in chest from 3 days.', 1, 'fk is booking Dr. Karun Roy at Raj Medical Hall dated 2021-05-03 with token no. 1', 0),
(69, 2, 5, 1, 5, '2021-04-28', 'No doc', 'User 4', '20', 'male', 'Mother', '+12121212', 'Pain in chest from 7 days.', 1, 'fk is booking Dr. Karun Roy at Raj Medical Hall dated 2021-05-03 with token no. 2', 2),
(70, 3, 5, 3, 3, '2021-04-29', 'No doc', 'User5', '20', 'male', 'child', '0785486792', 'Pain in chest from 5 days.', 1, 'vh is booking Dr. Karun Roy at Raj Medical Hall dated 2021-05-03 with token no. 3', 1),
(71, 1, 1, 1, 5, '2021-05-04', 'No doc', 'Patient 21', '20', 'male', 'relative', '01152463987', 'jhjk jlij jjil', 1, 'qqq is booking Dr. Doctor1 at General Medical Store dated 2021-05-04 with token no. 1', 0),
(72, 2, 1, 1, 5, '2021-05-04', 'No doc', 'Patient 28', '20', 'male', 'relative', '01152463987', 'jhjk jlij jjil', 1, 'qqq is booking Dr. Doctor1 at General Medical Store dated 2021-05-04 with token no. 2', 0),
(74, 1, 1, 3, 2, '2021-05-03', 'No doc', 'Patient 18', '20', 'male', 'Stage 6', '0705623877', 'h h', 1, 'madusanka bandara is booking Dr. Doctor3 at Rajapaksha Medical Hall dated 2021-05-03 with token no. 1', 0),
(75, 2, 1, 3, 2, '2021-05-03', 'No doc', 'Patient 22', '20', 'male', 'Stage 6', '0705623877', 'h h', 1, 'madusanka bandara is booking Dr. Doctor3 at Rajapaksha Medical Hall dated 2021-05-03 with token no. 2', 0),
(76, 1, 1, 1, 2, '2021-05-10', 'No doc', 'Patient 9', '45', 'male', 'Stage 6', '4521369878', 'aaa aaa', 1, 'User 10 is booking Dr. Doctor1 at Rajapaksha Medical Hall dated 2021-05-10 with token no. 1', 0),
(77, 2, 1, 1, 2, '2021-05-10', 'No doc', 'Patient 8', '45', 'male', 'Stage 6', '4521369878', 'aaa aaa', 1, 'User 10 is booking Dr. Doctor1 at Rajapaksha Medical Hall dated 2021-05-10 with token no. 2', 0),
(78, 3, 1, 1, 2, '2021-05-10', 'DDoctor1@gmail.com2021-05-101fff.pdf', 'Patient 3', '20', 'male', 'Stage 5', '0785486792', 'hg guhg uih', 1, 'fff is booking Dr. Doctor1 at Rajapaksha Medical Hall dated 2021-05-10 with token no. 3', 1),
(79, 1, 1, 1, 5, '2021-05-12', 'No doc', 'Patient 11', '20', 'female', 'Stage 1', '12345678978', 'kkk', 1, 'kkk is booking Dr. Doctor1 at General Medical Store dated 2021-05-12 with token no. 1', 0),
(80, 2, 1, 1, 5, '2021-05-12', 'No doc', 'Patient 13', '20', 'female', 'Stage 1', '12345678978', 'kkk', 1, 'kkk is booking Dr. Doctor1 at General Medical Store dated 2021-05-12 with token no. 2', 0),
(81, 1, 1, 3, 2, '2021-05-10', 'DDoctor1@gmail.com2021-05-103Patient 18.pdf', 'Patient 18', '47', 'male', 'Stage 2', '0783652256', 'Pain in the Chest.', 1, 'Patient 18 is booking Dr. Doctor3 at Rajapaksha Medical Hall dated 2021-05-10 with token no. 1', 0),
(82, 2, 1, 3, 2, '2021-05-10', 'DDoctor1@gmail.com2021-05-103Patient 18.pdf', 'Patient 18', '47', 'male', 'Stage 2', '0783652256', 'Pain in the Chest.', 1, 'Patient 18 is booking Dr. Doctor3 at Rajapaksha Medical Hall dated 2021-05-10 with token no. 2', 0),
(83, 3, 1, 1, 5, '2021-05-12', 'DDoctor1@gmail.com2021-05-121wgesg.pdf', 'wgesg', '20', 'male', 'Stage 3', '34634734', '34634wegwehgsdh', 1, 'wgesg is booking Dr. Doctor1 at General Medical Store dated 2021-05-12 with token no. 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state`) VALUES
(1, 'Rathnapura', 'Sabaragamuwa'),
(2, 'Colombo', 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `clinicname` text NOT NULL,
  `mobile` text NOT NULL,
  `regno` text NOT NULL,
  `area` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `openhours` text NOT NULL,
  `status` int(1) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id`, `clinicname`, `mobile`, `regno`, `area`, `city`, `address`, `openhours`, `status`, `email`, `password`, `image`) VALUES
(2, 'Rajapaksha Medical Hall', '9905544989', '', 'Rathnapura District', 'Rathnapura', 'Hospital Junction, Ratnapura, Ratnapura District', '24', 1, 'Hospital4@gmail.com', '8a2de6f516b2b5c352e69ae5b1e931e9', 'shop2.jpg'),
(3, 'Main Medical Hall', '09093222034', '', 'Colombo District', 'Colombo', 'General Hospital, ENT Ward Road, Colombo', '24', 1, 'Hospital2@gmail.com', 'd82b15ec7556626a1267182b058d0aa5', 'shop3.jpg'),
(4, 'No.5 Medical Hall', '876543210', '', 'Colombo District', 'Colombo', 'General Hospital, ENT Ward Road, Colombo', '24', 1, 'Hospital3@gmail.com', 'ad81afabdb812929e4a77c5034081bcf', '24-hour-open-medical-store.jpg'),
(5, 'General Medical Store', '9876543210', '', 'Rathnapura District', 'Rathnapura', 'Hospital Junction, Ratnapura, Ratnapura District', '24', 1, 'Hospital1@gmail.com', '8f60fa15a4bf820d8564c7d05759167d', 'shop5.jpg'),
(7, 'Hospital10', '0454406403', '455', 'Eheliyagoda Hospital', 'Rathnapura', 'Eheliyagoda Hospital, Rathnapura', '24', 1, 'Hospital10@gmail.com', 'ab0a22b6fbce4d5ead326f9c14a32ed9', 'th - Copy.jpg'),
(8, 'Hospital 5', '0458798798', 'No. 1252', 'Sabaragamuwa', 'Rathnapura', 'Hospital Junction, Ratnapura', '24', 0, 'Hospital5@gmail.com', '3236407775208a1f6ff881a1cba36766', 'th (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `degree` text NOT NULL,
  `specialization` text NOT NULL,
  `regno` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `degree`, `specialization`, `regno`, `mobile`, `email`, `password`, `image`, `status`) VALUES
(1, 'Dr. Doctor1', 'MBBS, MD', 'Cardiologist', 'DCR56432', '9093222034', 'Doctor1@gmail.com', '9a1507f5cec92a157aa514ab2c7aad7c', 'doctor1.jpg', 1),
(2, 'Dr. Doctor2', 'BDS', 'Dentist', 'DCR98762', '09905544989', 'Doctor2@gmail.com', '318f17a177709b3bb2c66dcb7bac80fc', 'doctor2.jpg', 1),
(3, 'Dr. Doctor3', 'MBBS, MS', 'General Physician', 'DCR47561', '9876543210', 'Doctor3@gmail.com', 'd5dac4cccae8f2d6b9aa975039ce56da', 'doctor2.jpg', 1),
(4, 'Dr. Doctor4', 'MBBS', 'General Physician', 'DCR567422', '8900312295', 'Doctor4@gmail.com', '2ea4f097b39c41f94f767c526b4522df', 'download (2).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `masteradmin`
--

CREATE TABLE `masteradmin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masteradmin`
--

INSERT INTO `masteradmin` (`id`, `email`, `name`, `city`, `password`) VALUES
(2, 'admin@gmail.com', 'Saikat Adhurya', 'Durgapur', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'DDoctor123', 'DDoctor1@gmail.com', '705623877', 'dafb104137b91d5cb75f5131d49c3ec9'),
(2, 'Dr. D. Doctor2', 'DDoctor2@gmail.com', '9876543210', 'b82cc5a522fe714bfddbae1ad75bd592'),
(3, 'Dr. D. Doctor3', 'DDoctor3@gmail.com', '9093222034', '5bd78cfaaad840df85298fe539ec7ae7'),
(4, 'Dr. D. Doctor4', 'DDoctor4@gmail.com', '8900312295', 'ce6a961ce09e2cfc6ed6e0da5e3a1381'),
(5, 'Dr. D. Doctor5', 'DDoctor5@gmail.com', '8765432109', '885f3be919e7c47f87adbd00e954110b');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `clinicid` int(11) NOT NULL,
  `slot` text NOT NULL,
  `time` text NOT NULL,
  `mon` text NOT NULL,
  `tue` text NOT NULL,
  `wed` text NOT NULL,
  `thurs` text NOT NULL,
  `fri` text NOT NULL,
  `sat` text NOT NULL,
  `sun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `doctorid`, `clinicid`, `slot`, `time`, `mon`, `tue`, `wed`, `thurs`, `fri`, `sat`, `sun`) VALUES
(2, 1, 2, '5', '15', '8pm to 9pm', '', '', '', '', '11am to 12am', ''),
(5, 2, 2, '5', '20', '6pm to 7pm', '', '', '', '', '8pm to 9pm', ''),
(6, 1, 3, '10', '15', '10am to 11am', '', '', '', '8pm to 9pm', '', ''),
(7, 3, 4, '10', '20', '', '8am to 10am', '', '8pm to 9pm', '', '10am to 11am', ''),
(8, 3, 2, '10', '15', '10am to 11am', '', '', '', '', '1pm to 2pm', ''),
(9, 3, 3, '10', '15', '', '', '8am to 9am', '', '7pm to 8pm', '', ''),
(10, 1, 5, '1', '15', '', '11am to 12pm', '6pm to 7pm', '', '', '', ''),
(12, 4, 4, '8', '15', '4am to 7pm', '', '', '', '', '', ''),
(13, 1, 4, '20', '15', '9am - 2 pm', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masteradmin`
--
ALTER TABLE `masteradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masteradmin`
--
ALTER TABLE `masteradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
