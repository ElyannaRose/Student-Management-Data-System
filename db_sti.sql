-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 10:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sti`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `course` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `title`, `description`, `start`, `end`, `course`, `status`) VALUES
(5, 'General Assembly Meeting', 'for IT Mayors', '2018-05-20', '2018-05-21', 'BSIT', 'status'),
(6, 'Organizational Meeting', 'for BA stdents', '2018-05-20', '2018-05-21', 'BSBA', 'status'),
(7, 'Graduation Meeting', 'for those graduate BSOA', '2018-05-20', '2018-05-21', 'BSOA', 'status'),
(8, 'Presentation Meeting', 'for HM students officers', '2018-05-20', '2018-05-21', 'BSHM', 'status');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `course_date_created` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_description`, `course_date_created`) VALUES
(7, 'BSBA', 'Bachelor of Science in Business Administration', ''),
(8, 'BSIT', 'Bachelor of Science in Information Technology', ''),
(10, 'BSHM', 'Bachelor of Science in Hospitality Management', ''),
(12, 'BSOA', 'Bachelor of Science in Office Administration', '');

-- --------------------------------------------------------

--
-- Table structure for table `curiculum`
--

CREATE TABLE `curiculum` (
  `curiculum_id` int(11) NOT NULL,
  `curiculum_code` varchar(50) NOT NULL,
  `curiculum_course` varchar(50) NOT NULL,
  `curiculum_date_created` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curiculum`
--

INSERT INTO `curiculum` (`curiculum_id`, `curiculum_code`, `curiculum_course`, `curiculum_date_created`) VALUES
(1, 'BSIT_OLD', 'BSIT', '09/16/2018'),
(2, 'BSIT_NEW', 'BSIT', '09/16/2018'),
(3, 'BSBA_OLD', 'BSBA', '09/16/2018'),
(4, 'BSBA_NEW', 'BSBA', '09/16/2018'),
(5, 'BSOA_NEW', 'BSOA', '09/16/2018'),
(6, 'BSOA_OLD', 'BSOA', '09/16/2018'),
(7, 'BSHM_OLD', 'BSHM', '09/16/2018'),
(8, 'BSHM_NEW', 'BSHM', '09/16/2018');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `course` varchar(5) NOT NULL,
  `year` varchar(15) NOT NULL,
  `term` varchar(10) NOT NULL,
  `deadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `detail`, `price`, `course`, `year`, `term`, `deadline`) VALUES
(6, 'Membership Fee', 350, 'BSIT', '', '1st Term', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gen_ave` varchar(30) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `unit` int(11) NOT NULL,
  `report` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `student_id`, `subject_id`, `gen_ave`, `school_year`, `semester`, `remarks`, `unit`, `report`) VALUES
(50, 15, 206, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(51, 15, 207, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(52, 15, 208, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(53, 15, 209, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(54, 15, 210, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(55, 15, 211, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(56, 15, 212, '1.00', 'First Year', '1st', 'Passed', 0, ''),
(57, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(58, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(59, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(60, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(61, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(62, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(63, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(64, 0, 210, '1.00', 'First Year', '1st', 'Excellent', 0, ''),
(65, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(66, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(67, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(68, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(69, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(70, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(71, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(72, 0, 210, '1.25', 'First Year', '1st', 'Very Good', 0, ''),
(73, 15, 205, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(74, 14, 205, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(75, 14, 206, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(76, 14, 207, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(77, 14, 208, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(78, 14, 209, '1.00', 'First Year', '1st', 'Passed', 2, ''),
(79, 14, 210, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(80, 14, 211, '1.00', 'First Year', '1st', 'Passed', 3, ''),
(81, 14, 212, '1.00', 'First Year', '1st', 'Passed', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_code` varchar(25) NOT NULL,
  `section_course` varchar(25) NOT NULL,
  `section_year` varchar(25) NOT NULL,
  `section_curiculum` varchar(25) NOT NULL,
  `section_date_created` varchar(11) NOT NULL,
  `section_term` varchar(20) NOT NULL,
  `section_session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_code`, `section_course`, `section_year`, `section_curiculum`, `section_date_created`, `section_term`, `section_session`) VALUES
(2, 'A', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(3, 'B', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(4, 'C', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(5, 'D', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(6, 'E', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(7, 'F', 'BSIT', '1', 'BSIT_NEW', '09/17/2018', '1st Semester', '2018-2019'),
(8, 'A', 'BSIT', '2', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(9, 'B', 'BSIT', '2', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(10, 'A', 'BSIT', '3', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(11, 'B', 'BSIT', '3', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(12, 'A', 'BSIT', '4', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(13, 'B', 'BSIT', '4', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(14, 'C', 'BSIT', '4', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(15, 'D', 'BSIT', '4', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(16, 'E', 'BSIT', '4', 'BSIT_OLD', '09/17/2018', '1st Semester', '2018-2019'),
(17, 'A', 'BSBA', '2', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(18, 'B', 'BSBA', '2', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(19, 'C', 'BSBA', '2', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(20, 'D', 'BSBA', '2', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(21, 'E', 'BSBA', '2', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(22, 'A', 'BSBA', '3', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(23, 'B', 'BSBA', '3', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(24, 'C', 'BSBA', '3', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(26, 'A', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(27, 'B', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(28, 'C', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(29, 'D', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(30, 'E', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(31, 'F', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(32, 'G', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(33, 'H', 'BSBA', '4', 'BSBA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(34, 'A', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(35, 'B', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(36, 'C', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(37, 'D', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(38, 'E', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(39, 'F', 'BSBA', '1', 'BSBA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(40, 'A', 'BSHM', '1', 'BSHM_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(41, 'B', 'BSHM', '1', 'BSHM_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(42, 'C', 'BSHM', '1', 'BSHM_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(43, 'A', 'BSHM', '2', 'BSHM_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(45, 'A', 'BSHM', '3', 'BSHM_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(46, 'A', 'BSHM', '4', 'BSHM_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(47, 'B', 'BSHM', '4', 'BSHM_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(48, 'A', 'BSOA', '1', 'BSOA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(49, 'B', 'BSOA', '1', 'BSOA_NEW', '09/20/2018', '1st Semester', '2018 - 2019'),
(50, 'A', 'BSOA', '3', 'BSOA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(51, 'A', 'BSOA', '4', 'BSOA_OLD', '09/20/2018', '1st Semester', '2018 - 2019'),
(52, 'B', 'BSOA', '4', 'BSOA_OLD', '09/20/2018', '1st Semester', '2018 - 2019');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_start` varchar(15) NOT NULL,
  `session_end` varchar(15) NOT NULL,
  `session_date_created` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_start`, `session_end`, `session_date_created`) VALUES
(23, '2018', '2019', '09/16/2018');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `password`, `course`, `photo`, `student_no`, `status`, `year_level`, `term`, `student_status`) VALUES
(14, 'JASON', 'ALCANTARA', '', 'BSIT', 'admin/upload/default.jpg', '18-SC-0001', '', 'First Year', '1st', 'Regular'),
(15, 'MARY FE ', 'PALISOC', '', 'BSIT', 'admin/upload/default.jpg', '18-SC-0002', '', 'First Year', '1st', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `subject_unit` varchar(10) NOT NULL,
  `subject_year` varchar(100) NOT NULL,
  `subject_term` varchar(100) NOT NULL,
  `subject_pre_req` varchar(100) NOT NULL,
  `subject_course` varchar(20) NOT NULL,
  `subject_date_created` varchar(25) NOT NULL,
  `subject_session` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `subject_unit`, `subject_year`, `subject_term`, `subject_pre_req`, `subject_course`, `subject_date_created`, `subject_session`) VALUES
(205, 'IT 101', 'IT Fundamentals', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(206, 'MATH 101', 'College Algebra', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(207, 'ENG 101', 'Study and Thinking Skills', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(208, 'STAT 102', 'Probability and Statistics', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(209, 'PE 101', 'Physical Fitness', '2', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(210, 'NSTP 1', 'ROTC1/CWTS1/LTS1', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(211, 'MATH 101', 'College Algebra', '3', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(212, 'IT 103', 'Programming 1', '4', 'First Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(213, 'IT 104', 'Programming 2', '3', 'First Year', '2nd', 'Programming 1', '8', '09/16/2018', '2018-2019'),
(214, 'IT 201', 'Logic Design', '3', 'First Year', '2nd', 'IT Fundamentals', '8', '09/16/2018', '2018-2019'),
(215, 'MATH 102', 'Plane Trigonometry', '3', 'First Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(216, 'ENG 102', 'Speech Communication with Debate', '3', 'First Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(217, 'NatSci 101', 'Biological Science', '3', 'First Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(218, 'PE 102', 'Rhythmic Activities, Folk and Social Dancing', '2', 'First Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(219, 'NSTP 2', 'ROTC2/CWTS2/LTS2', '3', 'First Year', '2nd', 'ROTC1/CWTS1/LTS1', '8', '09/16/2018', '2018-2019'),
(220, 'IT 105', 'Computer Organization', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(221, 'IT 202', 'Object Oriented Programming', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(222, 'IT 203', 'Accounting Principles', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(223, 'ENG 103', 'Communication for IT', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(224, 'NatSci 103', 'General Physics', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(225, 'SocSci 104', 'Basic Economics with Taxation and Land Reform', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(226, 'Psy 101', 'General w/ Industrial Psychology', '3', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(227, 'PE 103', 'Individual Games and Dual Sports', '2', 'Second Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(228, 'IT 106', 'Discrete Structures', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(229, 'IT 201', 'Electronic Communication System', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(230, 'IT 205', 'Database Management System 1', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(231, 'IT 206', 'Systems Analysis and Design', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(232, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(233, 'RIZAL', 'Rizal Life Works and Writings', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(234, 'HUM 101', 'Art Appreciation with Aesthetics', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(235, 'PE 104', 'Team Sports', '2', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(236, 'IT 208', 'Database Management Systems 2(Summer)', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(237, 'NatSci 105', 'Society and Culture with Family Planning(Summer)', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(238, 'IT 107', 'Professional Ethics', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(239, 'IT 207', 'Operating System Applications', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(240, 'IT 209', 'Software Engineering', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(241, 'IT 211', 'Web Development', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(242, 'IT 212', 'Network Management', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(243, 'IT 301', 'IT Elective 1', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(244, 'LIT 102', 'Literature of the World', '3', 'Third Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(245, 'FIL 102', 'Pagbasa at Pagsulat tungo sa Pananaliksik', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(246, 'IT 401', 'Free Elective 1', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(247, 'IT 201', 'Multimedia Systems', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(248, 'IT 213', 'Management Information Systems', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(249, 'IT 601', 'Application Systems Development 1', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(250, 'IT 302', 'IT Elective 2', '3', 'Third Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(251, 'IT 303', 'IT Elective 3', '3', 'Second Year', '2nd', '', '8', '09/16/2018', '2018-2019'),
(252, 'IT 403', 'Free Elective 3', '3', 'Fourth Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(253, 'IT 402', 'Free Elective 2', '3', 'Fourth Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(254, 'IT 304', 'IT Elective 4', '3', 'Fourth Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(255, 'IT 602', 'Application Systems Development 2', '3', 'Fourth Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(256, 'IT 214', 'Technopreneurship', '3', 'Fourth Year', '1st', '', '8', '09/16/2018', '2018-2019'),
(257, 'IT 500', 'Internship (at least 486 hours)', '9', 'Fourth Year', '2nd', '', '8', '09/16/2018', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `term_code` varchar(255) NOT NULL,
  `term_description` varchar(255) NOT NULL,
  `term_date_created` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term_code`, `term_description`, `term_date_created`) VALUES
(4, '1st Semester', 'First Semester', '09/16/2018'),
(5, '2nd Semester', 'Second Semester', '09/16/2018'),
(6, 'Summer', 'Summer', '09/16/2018');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transact_id` int(11) NOT NULL,
  `stdent_id` varchar(10) NOT NULL,
  `transac_detail` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `sukli` int(11) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `user_type`, `photo`) VALUES
(33, 'admin', 'admin', 'JASON', 'ALCANTARA', 'Administrator', 'admin_profile/user.jpg'),
(36, 'SNCA-0001', 'password', 'JASON', 'ALCANTARA', 'Instructor', ''),
(37, 'BSIT Officer', '1234', 'JASON', 'ALCANTARA', 'BSIT Officer', '');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year_course` varchar(25) NOT NULL,
  `year_curiculum` varchar(25) NOT NULL,
  `year_code` varchar(25) NOT NULL,
  `year_description` varchar(25) NOT NULL,
  `year_date_created` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year_course`, `year_curiculum`, `year_code`, `year_description`, `year_date_created`) VALUES
(27, '', '', '1', 'First Year', '09/17/2018'),
(28, '', '', '2', 'Second Year', '09/17/2018'),
(29, '', '', '3', 'Third Year', '09/17/2018'),
(30, '', '', '4', 'Fourth Year', '09/17/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `curiculum`
--
ALTER TABLE `curiculum`
  ADD PRIMARY KEY (`curiculum_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `curiculum`
--
ALTER TABLE `curiculum`
  MODIFY `curiculum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
