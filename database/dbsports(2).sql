-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 04:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete_sports_cat`
--

CREATE TABLE IF NOT EXISTS `athlete_sports_cat` (
`id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `sport_id`, `category_id`, `category`) VALUES
(14, 1, 0, 'Women'),
(12, 3, 0, '50m Men'),
(15, 2, 0, '100m'),
(16, 2, 0, '500m'),
(21, 3, 0, '100m Men'),
(18, 2, 0, '250m'),
(23, 3, 0, '200m Men'),
(22, 3, 0, '150m Men'),
(24, 3, 0, '50m Women'),
(25, 3, 0, '100m Women'),
(26, 3, 0, '150m Women'),
(27, 3, 0, '200m Women'),
(28, 2, 0, '50m'),
(29, 1, 0, 'Men'),
(30, 4, 0, '50m'),
(31, 7, 0, 'Men'),
(32, 11, 0, 'Men'),
(34, 6, 0, 'Vow'),
(35, 0, 0, 'sports1'),
(36, 12, 0, 'sports1'),
(37, 0, 0, 'sports1'),
(38, 13, 0, 'Jackstone'),
(39, 0, 0, 'sports1'),
(40, 1, 0, 'Basketball'),
(41, 0, 0, 'sports1'),
(42, 2, 0, 'Basketball'),
(43, 0, 0, 'sports1'),
(44, 3, 0, 'Track and Field'),
(45, 0, 0, 'sports1'),
(46, 4, 0, 'Swimming'),
(47, 0, 0, 'sports1'),
(48, 5, 0, 'Javelin Throw'),
(49, 0, 0, 'sports1'),
(50, 6, 0, 'Discuss Throw'),
(51, 0, 0, 'sports1'),
(52, 7, 0, 'Volleyball'),
(53, 0, 0, 'sports1'),
(54, 8, 0, 'Table Tennis'),
(55, 0, 0, 'sports1'),
(56, 9, 0, 'Tennis'),
(57, 0, 0, 'sports1'),
(59, 0, 0, 'sports1'),
(60, 11, 0, 'Softball'),
(61, 0, 0, 'sports1'),
(62, 12, 0, 'Chess');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`course_id` int(11) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(1, 'BSIT'),
(2, 'BSED'),
(3, 'BEED'),
(4, 'BSHRM'),
(5, 'BSTHRM'),
(6, 'BACOM'),
(7, 'AB-English'),
(8, 'BLIS'),
(9, 'BSSW'),
(10, 'AB-PolSci');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
`place_id` int(11) NOT NULL,
  `place` varchar(20) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place`, `points`) VALUES
(1, '1st Place', 7),
(2, '2nd Place', 5),
(3, '3rd Place', 3);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
`stud_id` int(11) NOT NULL,
  `student_no` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sports_id` int(11) NOT NULL,
  `level_id` varchar(15) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `bloodtype` varchar(50) NOT NULL,
  `allergy` varchar(50) NOT NULL,
  `emergency` varchar(50) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `avatar` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`stud_id`, `student_no`, `lname`, `fname`, `mname`, `sports_id`, `level_id`, `course_id`, `gender`, `birthdate`, `contact_no`, `address`, `bloodtype`, `allergy`, `emergency`, `paddress`, `pcontact`, `status`, `avatar`, `password`) VALUES
(7, '1401245', 'Aldas', 'Brett Iverson', 'Macale', 30, '4', '1', 'Male', '1997-12-06', '09503978972', 'MacArthur, Leyte', 'Type A', 'none', 'Brett Iverson M. Aldas', 'McArthur, Leyte', '09123456789', 'Active', '../avatar/avatar.png', ''),
(8, '1401241', 'Planillo Jr.', 'Edgar', 'Alingod', 12, '4', '1', 'Male', '1997-03-18', '09307176894', 'Brgy. 94 Sitio Calero, Tigbao, Tacloban City', 'Type A', 'none', 'Edgar D. Planillo', 'Brgy. 94, Sitio Calero, Tigbao, Tacloban City', '09066762151', 'Active', '../avatar/avatar5.png', ''),
(10, '1501233', 'Doe', 'John', 'Forrosuelo', 56, '3', '9', 'Male', '1997-11-02', '09503978972', 'New York', 'Type A', 'Milk', 'John Doe', 'New York', '09123456789', 'Active', '../avatar/admin.png', ''),
(11, '1501256', 'Reyes', 'Marcus', 'Escota', 54, '2', '2', 'Male', '1996-02-12', '09452321495', 'Quezon City', 'Type B', 'none', 'Marcus Escota', 'Quezon City', '09123456789', 'Inactive', '../avatar/avatar5.png', ''),
(12, '1401323', 'Atienza', 'Jasmine', 'Tan', 15, '3', '4', 'Female', '1999-05-18', '09167612564', 'Mandaluyong City', 'Type AB', 'sugar', 'Jasmine Atienza', 'Mandaluyong City', '09123456789', 'Active', '../avatar/avatar2.png', ''),
(13, '1501290', 'Ariola', 'Genelyn', 'Alcober', 42, '3', '4', 'Female', '1997-06-12', '09274148190', 'Dulag, Leyte', 'Type A', 'none', 'Genelyn Ariola', 'Dulag, Leyte', '09123456789', 'Active', '../avatar/avatar2.png', ''),
(14, '1501349', 'Villalino', 'Scoth', 'Reyes', 30, '2', '8', 'Male', '1996-07-11', '09305174392', 'Nueva Ecija', 'Type O', 'none', 'Scoth Villalino', 'Nueva Ecija', '09123456789', 'Active', '../avatar/avatar.png', ''),
(15, '1401387', 'Estrada', 'Russel', 'Cunan', 31, '2', '9', 'Male', '1997-03-23', '09481737891', 'San Miguel, Leyte', 'Type AB', 'shrimp', 'Russel Estrada', 'San Miguel, Leyte', '09123456789', 'Active', '../avatar/admin.png', ''),
(16, '1402386', 'Anderson', 'Jervy', 'Villanueva', 62, '1', '6', 'Male', '1998-08-17', '09305698690', 'Barracks General Santos City', 'Type B', 'none', 'Jervcy Anderson', 'Barracks General Santos City', '09123456789', 'Active', '../avatar/avatar.png', ''),
(17, '1501512', 'Planillo', 'Edmar', 'Alingod', 48, '1', '2', 'Male', '2003-09-14', '09307176894', 'Brgy. 94 Sitio Calero, Tigbao, Tacloban City', 'Type A', 'none', 'Edgar D. Planillo', 'Brgy. 94 Sitio Calero, Tigbao, Tacloban City', '09123456789', 'Inactive', '../avatar/admin.png', ''),
(18, '1501221', 'Planillo', 'Joylin', 'Alingod', 58, '3', '2', 'Female', '1998-04-06', '09307176894', 'Tacloban City', 'Type B', 'none', 'Edgar D. Planillo', 'Brgy. 94 Sitio Calero, Tigbao, Tacloban City', '09123456789', 'Active', '../avatar/ganden10.jpg', ''),
(20, '1501321', 'Planillo', 'GenyRose', 'Alingod', 34, '1', '2', 'Female', '2001-01-12', '09307176894', 'Tacloban City', 'Type A', 'none', 'Edgar D. Planillo', 'Brgy. 94 Sitio Calero, Tigbao, Tacloban City', '09483204609', 'Active', '../avatar/avatar2.png', ''),
(23, '1401900', 'Torreros', 'Vincent', 'Rosco', 32, '4', '1', 'Male', '1997-09-12', '09307176894', 'Sta. Fe, Leyte', 'Type A', 'none', 'Vincent Torreros', 'Sta. Fe, Leyte', '09307176894', 'Inactive', '../avatar/avatar.png', ''),
(24, '11111111', 'Baldos', 'Michaela', 'Caballero', 52, '3', '5', 'Female', '1996-12-12', '09307176894', 'Nueva Vizcaya', 'Type A', 'haha', 'Edgar A. Planillo Jr.', 'Brgy. 94, Sitio Calero, Tigbao, Tacloban City', '09066762151', 'Active', '../avatar/avatar2.png', ''),
(25, '1201433', 'Sevilla', 'Syndee Ann', 'Sales', 56, '4', '1', 'Female', '1995-04-24', '639279564203', 'Brgy. San Isidro Sta. Fe, Leyte', 'Type A', '3333333', '33333333333', '3333333333', '09279564205', 'Active', '../avatar/IMG_20170214_124447.jpg', '1201433');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
`id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `score`) VALUES
(1, 15),
(2, 20),
(3, 30),
(4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
`sport_id` int(11) NOT NULL,
  `sports` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_id`, `sports`) VALUES
(2, 'Basketball'),
(3, 'Track and Field'),
(4, 'Swimming'),
(5, 'Javelin Throw'),
(6, 'Discuss Throw'),
(7, 'Volleyball'),
(8, 'Table Tennis'),
(9, 'Tennis'),
(10, 'Badminton'),
(11, 'Softball'),
(12, 'Chess');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE IF NOT EXISTS `sy` (
`year_id` int(11) NOT NULL,
  `year` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`year_id`, `year`) VALUES
(1, '2017'),
(2, '2018'),
(3, '2019'),
(4, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  `designation` varchar(50) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `designation`, `avatar`) VALUES
(1, 'admin', 'admin', 'Edgar Planillo', 'ADMINISTRATOR', '../avatar/avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE IF NOT EXISTS `winners` (
`win_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `place_id` varchar(50) NOT NULL,
  `year_id` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`win_id`, `cat_id`, `place_id`, `year_id`) VALUES
(40, 56, '1', '2'),
(37, 42, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
`level_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`level_id`, `year`) VALUES
(1, '1st Year'),
(2, '2nd Year'),
(3, '3rd Year'),
(4, '4th Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete_sports_cat`
--
ALTER TABLE `athlete_sports_cat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
 ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
 ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
 ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
 ADD PRIMARY KEY (`win_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
 ADD PRIMARY KEY (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete_sports_cat`
--
ALTER TABLE `athlete_sports_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
MODIFY `win_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
