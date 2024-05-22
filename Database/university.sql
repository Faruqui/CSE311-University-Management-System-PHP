-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 12:11 PM
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
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `credit` int(11) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `credit`, `department`) VALUES
('ACT101', 'Intro to Accounting', 3, 'SBE'),
('BIO103', 'General Biology', 3, 'BIO'),
('CSE115', 'Programming Language', 3, 'CSE'),
('CSE215', 'Java', 3, 'CSE'),
('CSE311', 'Database', 3, 'CSE'),
('EEE154', 'Engineering Drawing ', 1, 'CEE'),
('MAT116', 'Pre-Calculus', 3, 'MAT'),
('MAT120', 'Calculus - I', 3, 'MAT'),
('PHY107', 'General Physics-I', 3, 'PHY'),
('PHY108', 'General Physics-II', 3, 'PHY');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `location` varchar(20) NOT NULL,
  `budget` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `location`, `budget`) VALUES
('BIO', 'Biochemistry & Microbiology', 'SAC400', 567547.00),
('CEE', 'Civil & Environmental Engineering', 'NAC1010', 96009.00),
('CSE', 'Computer Science and Engineering', 'SAC1000', 500000.00),
('EEE', 'Electrical and Electronics Engineering', 'SAC1050', 600000.00),
('MAT', 'Mathematics', 'SAC920', 353252.00),
('PHARMA', 'Pharmaceutical Science', 'SAC400', 345436.00),
('PHY', 'Physics', 'SAC1020', 650000.00),
('SBE', 'School of Business & Economics', 'NAC1000', 500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) DEFAULT NULL,
  `position` enum('Lecturer','Asst. Professor','Associate Professor','Professor','Post-Doc') DEFAULT NULL,
  `organization` varchar(25) DEFAULT NULL,
  `tfrom` date DEFAULT NULL,
  `tto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `position`, `organization`, `tfrom`, `tto`) VALUES
(104, 'Lecturer', 'Dhaka University', '2014-12-03', '2016-12-11'),
(103, 'Associate Professor', 'Dhaka University', '2012-12-04', '2017-09-03'),
(102, 'Asst. Professor', 'Dhaka University', '2013-02-06', '2017-10-15'),
(101, 'Associate Professor', 'Chittagong University', '2011-12-10', '2015-03-05'),
(104, 'Lecturer', 'Dhaka University', '2010-09-01', '2012-12-04'),
(111, 'Lecturer', '', '0000-00-00', '0000-00-00'),
(111, 'Lecturer', 'Dhaka Univesity', '0000-00-00', '2010-06-10'),
(102, 'Asst. Professor', 'Dhaka University', '2008-12-04', '2011-12-09'),
(120, 'Lecturer', 'Dhaka Univesity', '2018-12-04', '2018-12-03'),
(104, 'Lecturer', 'Dhaka University', '2014-12-03', '2016-12-11'),
(103, 'Associate Professor', 'Dhaka University', '2012-12-04', '2017-09-03'),
(102, 'Asst. Professor', 'Dhaka University', '2013-02-06', '2017-10-15'),
(101, 'Associate Professor', 'Chittagong University', '2011-12-10', '2015-03-05'),
(104, 'Lecturer', 'Dhaka University', '2010-09-01', '2012-12-04'),
(111, 'Lecturer', '', '0000-00-00', '0000-00-00'),
(111, 'Lecturer', 'Dhaka Univesity', '0000-00-00', '2010-06-10'),
(102, 'Asst. Professor', 'Dhaka University', '2008-12-04', '2011-12-09'),
(120, 'Lecturer', 'Dhaka Univesity', '2018-12-04', '2018-12-03'),
(121, '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `tid` int(11) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`tid`, `title`, `volume`, `number`, `year`) VALUES
(105, 'Intro to Java ', 1, 1001, '2005'),
(111, 'Machine Learning For Newbies', 2, 1002, '2009'),
(103, 'Advanced Astrophysics', 2, 1011, '2009'),
(111, 'Automata', 3, 1012, '2009'),
(105, 'Quantum Computer', 5, 1011, '2009'),
(120, 'CS Book', 5, 1231, '2009'),
(105, 'Intro to Java ', 1, 1001, '2005'),
(111, 'Machine Learning For Newbies', 2, 1002, '2009'),
(103, 'Advanced Astrophysics', 2, 1011, '2009'),
(111, 'Automata', 3, 1012, '2009'),
(105, 'Quantum Computer', 5, 1011, '2009'),
(120, 'CS Book', 5, 1231, '2009'),
(121, '', 0, 0, '0000');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` varchar(10) NOT NULL,
  `type` enum('Classroom','Lab','Office Room','Conference Room') NOT NULL,
  `status` enum('Vacant','Occupied','','') NOT NULL,
  `floor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `status`, `floor`) VALUES
('NAC900', 'Office Room', 'Occupied', 9),
('SAC1005', 'Office Room', 'Occupied', 10),
('SAC1006', 'Office Room', 'Occupied', 10),
('SAC1007', 'Office Room', 'Occupied', 10),
('SAC1030', 'Office Room', 'Occupied', 10),
('SAC1050', 'Office Room', 'Occupied', 10),
('SAC211', 'Classroom', 'Vacant', 2),
('SAC311', 'Classroom', 'Vacant', 3),
('SAC314', 'Classroom', 'Vacant', 3),
('SAC508', 'Lab', 'Vacant', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `courseid` varchar(10) NOT NULL,
  `secid` int(11) NOT NULL,
  `room` varchar(10) NOT NULL,
  `semester` enum('Spring','Summer','Fall','') NOT NULL,
  `year` year(4) NOT NULL,
  `teacher` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`courseid`, `secid`, `room`, `semester`, `year`, `teacher`, `time`) VALUES
('CSE115', 1, 'SAC314', 'Spring', '2017', 103, 1),
('CSE311', 1, 'SAC311', 'Summer', '2017', 101, 2),
('CSE311', 1, 'SAC311', 'Summer', '2018', 102, 2),
('MAT116', 2, 'SAC211', 'Fall', '2017', 106, 1),
('PHY107', 2, 'SAC211', 'Fall', '2014', 104, 3),
('CSE115', 1, 'SAC314', 'Spring', '2017', 103, 1),
('CSE311', 1, 'SAC311', 'Summer', '2017', 101, 2),
('CSE311', 1, 'SAC311', 'Summer', '2018', 102, 2),
('MAT116', 2, 'SAC211', 'Fall', '2017', 106, 1),
('PHY107', 2, 'SAC211', 'Fall', '2014', 104, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `department` varchar(10) NOT NULL,
  `sscGPA` decimal(3,2) NOT NULL,
  `hscGPA` decimal(3,2) NOT NULL,
  `credit` decimal(4,2) NOT NULL,
  `cgpa` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `department`, `sscGPA`, `hscGPA`, `credit`, `cgpa`) VALUES
(1311456, 'Radish', 'CEE', 4.80, 4.50, 90.00, 2.50),
(1611593, 'Tashfiq', 'CSE', 5.00, 4.83, 58.00, 3.99),
(1711390, 'Aaron Stone', 'SBE', 5.00, 5.00, 65.00, 3.70),
(1712563, 'Jimmy Neutrom', 'EEE', 5.00, 5.00, 75.00, 4.00),
(1721300, 'Alan Walker', 'CSE', 5.00, 5.00, 53.00, 3.60),
(1721301, 'Monkey D Luffy', 'PHY', 5.00, 4.80, 39.00, 3.20),
(1731234, 'Tic Tac', 'MAT', 5.00, 4.88, 43.00, 3.40),
(1811200, 'Noctis', 'PHY', 5.00, 4.72, 35.00, 3.90),
(1821480, 'Cristina', 'SBE', 5.00, 5.00, 20.00, 3.85);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `sid` int(11) NOT NULL,
  `courseid` varchar(10) NOT NULL,
  `secid` int(11) NOT NULL,
  `semester` enum('Spring','Summer','Fall','') NOT NULL,
  `year` year(4) NOT NULL,
  `grade` set('A','A-','B+','B','B-','C+','C','C-','D+','D','F','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`sid`, `courseid`, `secid`, `semester`, `year`, `grade`) VALUES
(1311456, 'PHY107', 1, 'Summer', '2014', 'B-'),
(1712563, 'CSE115', 1, 'Spring', '2017', 'A'),
(1712563, 'EEE154', 1, 'Summer', '2017', 'A'),
(1721300, 'ACT101', 1, 'Summer', '2017', 'B+'),
(1721300, 'CSE311', 1, 'Summer', '2018', 'A'),
(1721301, 'CSE115', 1, 'Summer', '2017', 'A-'),
(1811200, 'EEE154', 1, 'Fall', '2017', 'A'),
(1811200, 'PHY107', 1, 'Spring', '2018', 'B+'),
(1821480, 'ACT101', 1, 'Summer', '2018', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `tid` int(11) NOT NULL,
  `courseid` varchar(10) NOT NULL,
  `secid` int(11) NOT NULL,
  `semester` enum('Spring','Summer','Fall','') NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`tid`, `courseid`, `secid`, `semester`, `year`) VALUES
(101, 'CSE215', 1, 'Summer', '2018'),
(101, 'CSE215', 2, 'Summer', '2017'),
(102, 'ACT101', 1, 'Spring', '2018'),
(102, 'CSE311', 1, 'Fall', '2018'),
(104, 'CSE215', 3, 'Summer', '2018'),
(106, 'BIO103', 2, 'Fall', '2017'),
(107, 'BIO103', 2, 'Fall', '2017'),
(108, 'BIO103', 1, 'Spring', '2018'),
(108, 'BIO103', 1, 'Fall', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `room` varchar(10) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `room`, `mobile`, `email`, `department`) VALUES
(101, 'Jason Bourn', 'SAC1030', 343201, 'jason_bourn@cia.com', 'CSE'),
(102, 'James Bond', 'SAC1007', 7007007, 'james_bond007@mi6.com', 'CSE'),
(103, 'Harry Potter', 'SAC1006', 464773302, 'harry_potter@gmail.com', 'PHY'),
(104, 'Eragon', 'NAC900', 2423420, 'eragon_006@gmail.com', 'SBE'),
(105, 'Carl Johnson', 'SAC1050', 84100411, 'carl_johnson@live.com', 'PHY'),
(106, 'Charles Xavier', 'SAC1005', 1234632, 'charles_xavier@gmail.com', 'BIO'),
(107, 'Emily Brown', 'SAC1006', 17435354, 'emily_brown@gmail.com', 'PHARMA'),
(108, 'Chloe Jones', 'SAC1050', 1875636, 'chloe_jones@gmail.com', 'SBE'),
(111, 'Sazzad', 'SAC1050', 803434, 'sazzad@gmail.com', 'CSE'),
(120, 'Test1', 'SAC1050', 24325325, 'test!@gmail.com', 'CSE'),
(121, 'test teacher', 'SAC1030', 123456789, 'test_t@gmail.com', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `id` int(1) NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`id`, `timefrom`, `timeto`) VALUES
(1, '08:00:00', '09:30:00'),
(2, '09:30:00', '11:10:00'),
(3, '11:20:00', '12:50:00'),
(4, '13:00:00', '14:30:00'),
(5, '14:40:00', '16:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD KEY `id` (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD KEY `course-id` (`courseid`,`secid`),
  ADD KEY `room` (`room`),
  ADD KEY `teacher` (`teacher`),
  ADD KEY `timeslot` (`time`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`sid`,`courseid`,`secid`,`semester`,`year`),
  ADD KEY `s-id` (`sid`,`courseid`,`secid`),
  ADD KEY `course-id` (`courseid`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`tid`,`courseid`,`secid`,`semester`,`year`),
  ADD KEY `course-id` (`courseid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`),
  ADD KEY `room` (`room`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department`) REFERENCES `departments` (`id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `sections_ibfk_2` FOREIGN KEY (`room`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `sections_ibfk_3` FOREIGN KEY (`teacher`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `sections_ibfk_4` FOREIGN KEY (`time`) REFERENCES `timeslot` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department`) REFERENCES `departments` (`id`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`id`);

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`department`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`room`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
