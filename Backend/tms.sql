-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 08:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `users` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `File` varchar(200) NOT NULL DEFAULT '0',
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `Updated_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `users`, `name`, `File`, `email`, `password`, `status`, `Updated_status`) VALUES
(1, 'Traveller', 'Ligin Abraham', '', 'ligin@gmail.com', '383b7d44a65cf9f0e8a474427f01eeba', 2, 0),
(2, 'Hotel', 'Jk Hotels', '', 'jk@gmail.com', '660a1027d320ef2cd539a0a3242f184b', 1, 0),
(3, 'Traveller', 'Telbin Cherian', '', 'ctelbin@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 1, 0),
(4, 'Tour Company', 'Telbin Cherian', '', 'ctelbin@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 0, 0),
(5, 'TC', 'Kr Travels', '0', 'krtt@gmail.com', 'f478532394b7932cb39685128160abf1', 2, 1),
(6, 'TC', 'vv tcsjhbkb', './document/TaxReport/1645548907.pdf', 'ctelbin@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 1, 1),
(7, 'Traveller', 'cacs', './document/TaxReport/1645549107.', 'bhvu@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 1, 0),
(8, '', 'Xczxc', '0', 'hghg@gmail.com', '6286c6ab3b6f1dccb79f76830db8ecb2', 1, 0),
(9, 'TC', 'xczxc', './document/TaxReport/1645549417.pdf', 'ctelbin@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 1, 0),
(10, 'TC', 'ABCD', './document/TaxReport/1645682048.pdf', 'eeeee@nn.ac.in', 'cfc5c7849962901746f15017594ff8eb', 1, 0),
(11, 'TC', 'a', './document/TaxReport/1647231573.pdf', 'a@gmail.com', '5a7b5dc6acbb83093e9fe773f5188f33', 1, 1),
(12, 'TC', 'a', './document/TaxReport/1647231836.pdf', 'a@gmail.com', '5a7b5dc6acbb83093e9fe773f5188f33', 1, 1),
(13, 'Traveller', 'athul', '0', 'a@gmail.cpm', '627c75a9b68ced78bff76855f5cf51b6', 1, 0),
(14, 'Traveller', 'athul', '0', 'a@gmail.com', '502b64e06cffce9c78f63f18fc363dbc', 3, 0),
(15, 'TC', 'athul k', './document/TaxReport/1647232091.pdf', 'athul@gmail.com', 'cfa2c70dbd143e6ed814270530a9ce7c', 1, 0),
(16, 'TC', 'Nikky', './document/TaxReport/1647335130.pdf', 'nikky@gmail.com', 'c9ec66865053eb219202de51a8920872', 1, 1),
(17, 'Hotel', 'Kj hotels', '0', 'kj@gmail.com', 'e11017c8e4c1ca90670c7c546d4564a6', 2, 0),
(18, 'TC', 'ktp Travels', './document/TaxReport/1649088140.pdf', 'ktp@gmail.com', 'b8494df4b7c2a673fe60c84df16710f0', 1, 1),
(20, 'Traveller', 'telbin', '0', 'telbin12@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', 3, 0),
(21, 'TC', 'Kjr travels', './document/TaxReport/1651686484.pdf', 'kjr@gmail.com', '7571c82c498a9fde59e662fc27347a46', 1, 1),
(22, 'TC', 'jk Travels', './document/TaxReport/1651687001.pdf', 'jk@gmail.com', 'f7abbdb7e4ad134186c4a5e131900f19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `city` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `adult` int(50) NOT NULL,
  `child` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `city`, `type`, `adult`, `child`, `total`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(1, 4, 'ligin@gmail.com', '2022-04-29', '', '', 0, 0, 0, '2022-04-30 04:47:54', 0, NULL, NULL),
(2, 4, 'ligin@gmail.com', '2022-03-01', '', '', 0, 0, 0, '2022-04-30 04:48:44', 2, 'u', '2022-04-30 04:48:52'),
(3, 4, 'ligin@gmail.com', '2022-05-04', '', '', 0, 0, 0, '2022-04-30 05:20:30', 2, 'u', '2022-04-30 05:20:38'),
(4, 4, 'ligin@gmail.com', '2022-05-11', '', '', 0, 0, 0, '2022-04-30 05:40:06', 2, 'u', '2022-04-30 05:40:14'),
(5, 5, 'ligin@gmail.com', '2022-05-11', '', '', 0, 0, 0, '2022-05-01 13:37:36', 2, 'u', '2022-05-01 13:37:49'),
(6, 4, 'ligin@gmail.com', '2022-05-03', '', '', 0, 0, 0, '2022-05-02 06:31:21', 0, NULL, NULL),
(8, 4, NULL, '2022-05-03', '', '', 0, 0, 0, '2022-05-02 06:52:57', 0, NULL, NULL),
(9, 4, 'ligin@gmail.com', '2022-05-03', '', '', 0, 0, 0, '2022-05-02 06:57:11', 0, NULL, NULL),
(10, 4, 'ligin@gmail.com', '2022-05-03', '', '', 0, 0, 0, '2022-05-02 06:57:42', 0, NULL, NULL),
(11, 4, 'ligin@gmail.com', '2022-05-12', '', '', 0, 0, 0, '2022-05-02 06:57:55', 0, NULL, NULL),
(12, 4, 'ligin@gmail.com', '2022-05-12', '', '', 0, 0, 0, '2022-05-02 07:03:40', 0, NULL, NULL),
(13, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-02 07:03:47', 0, NULL, NULL),
(14, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-02 07:04:11', 0, NULL, NULL),
(15, 4, 'ligin@gmail.com', '2022-05-19', '', '', 0, 0, 0, '2022-05-02 07:04:46', 0, NULL, NULL),
(16, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-03 12:20:48', 0, NULL, NULL),
(17, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-03 12:21:36', 0, NULL, NULL),
(18, 4, 'ligin@gmail.com', '2022-05-14', '', '', 0, 0, 0, '2022-05-03 12:21:41', 0, NULL, NULL),
(19, 4, 'ligin@gmail.com', '2022-05-19', '', '', 0, 0, 0, '2022-05-03 12:24:36', 0, NULL, NULL),
(20, 4, 'ligin@gmail.com', '2022-05-25', '', '', 0, 0, 0, '2022-05-03 12:26:09', 0, NULL, NULL),
(21, 4, 'ligin@gmail.com', '2022-05-25', '', '', 0, 0, 0, '2022-05-03 12:26:36', 0, NULL, NULL),
(22, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-03 12:26:50', 0, NULL, NULL),
(23, 4, 'ligin@gmail.com', '2022-05-18', '', '', 0, 0, 0, '2022-05-03 12:32:42', 0, NULL, NULL),
(24, 4, 'ligin@gmail.com', '2022-05-19', '', '', 0, 0, 0, '2022-05-03 12:35:34', 2, 'u', '2022-05-03 12:39:34'),
(25, 4, 'ligin@gmail.com', '2022-05-20', '', '', 0, 0, 0, '2022-05-03 12:43:52', 0, NULL, NULL),
(26, 4, 'ligin@gmail.com', '2022-05-11', '', '', 0, 0, 0, '2022-05-04 03:42:34', 0, NULL, NULL),
(27, 5, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 04:12:47', 0, NULL, NULL),
(28, 5, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 04:16:44', 0, NULL, NULL),
(29, 4, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 04:49:17', 0, NULL, NULL),
(30, 4, 'ligin@gmail.com', '2022-05-04', '', '', 0, 0, 0, '2022-05-04 06:22:10', 0, NULL, NULL),
(31, 4, 'ligin@gmail.com', '2022-05-04', '', '', 0, 0, 0, '2022-05-04 06:26:32', 0, NULL, NULL),
(32, 4, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 07:14:22', 0, NULL, NULL),
(33, 4, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 12:38:26', 0, NULL, NULL),
(34, 4, 'ligin@gmail.com', '2022-05-05', '', '', 0, 0, 0, '2022-05-04 12:59:49', 0, NULL, NULL),
(35, 4, 'ligin@gmail.com', '2022-05-27', '', '', 0, 0, 0, '2022-05-04 14:00:50', 0, NULL, NULL),
(36, 4, 'ligin@gmail.com', '2022-05-19', '', '', 0, 0, 0, '2022-05-04 14:27:18', 0, NULL, NULL),
(37, 0, '$useremail', '$fromdate', '$city', '$package', 0, 0, 0, '2022-05-04 16:33:02', 0, NULL, NULL),
(38, 5, 'ligin@gmail.com', '2022-05-12', 'Bangalore', 'Pre', 0, 0, 0, '2022-05-04 16:33:17', 0, NULL, NULL),
(39, 5, 'ligin@gmail.com', '2022-05-12', 'kerala', 'Del', 0, 0, 0, '2022-05-04 16:33:38', 0, NULL, NULL),
(40, 5, 'ligin@gmail.com', '2022-05-18', 'kerala', 'Pre', 0, 0, 0, '2022-05-04 16:36:22', 0, NULL, NULL),
(41, 0, '$useremail', '$fromdate', '$city', '$package', 0, 0, 0, '2022-05-04 16:37:53', 0, NULL, NULL),
(42, 5, 'ligin@gmail.com', '2022-05-18', 'kerala', 'Pre', 0, 0, 0, '2022-05-04 16:51:35', 0, NULL, NULL),
(43, 5, 'ligin@gmail.com', '2022-05-18', 'Bangalore', 'Family Package', 0, 0, 0, '2022-05-04 16:57:44', 0, NULL, NULL),
(44, 4, 'ligin@gmail.com', '2022-05-12', 'Bangalore', 'Couple', 0, 0, 0, '2022-05-04 17:17:45', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(1, NULL, NULL, NULL, '2022-05-02 06:35:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'aboutus', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Test test</span>'),
(11, 'contact', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(4, 'Manali Trip', '5 day Package', 'Delhi ->  Andhra Pradesh -> Manali', 800, 'The famous Hadimba Temple, the scenic Rohtang Pass, the snow-laden Solang Valley and its delightful culinary scene.', 'Manali can be reached from Delhi by national highway NH 1 up to Ambala and from there NH 22 to Chandigarh and from there by national highway NH21 that passes through Bilaspur, Sundernagar, Mandi and Kullu towns. The road distance from Chandigarh to Manali is 310 km (190 mi), and the total distance from Delhi to Manali is 570 km (350 mi). Bus services are available from HRTC (Himachal Road Transport Corporation), HPTDC (Himachal Tourism Development Corporation), and private operators.', 'OOTY.jpg', '2022-04-03 12:05:20', NULL),
(5, 'Rajasthan-Desert Package', 'Coup Package', 'Kochi->Bangalore->Nepal->Rajasthan', 10000, 'Jaipur (2N)?Jodhpur (2N)?Udaipur (2N)', 'Upon arrival check in at the hotel, relax and later proceed to visit the City Palace in the afternoon, which is still the formal residence of the royal family. \r\nAlso visit Chandra Mahal, Shri Govind Deo Temple and the City Palace Museum that has the private collection of Jaipur Maharajas. \r\nWe also visit Jantar Mantar, a stone observatory, which is the largest of Jai Singh\'s five remarkable observatories. \r\nOvernight stay at the hotel in Jaipur.', 'green-mountains-ancient-indian-village-malana-state-himachal-pradesh.jpg', '2022-05-01 13:28:24', '2022-05-01 13:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(12, 'Telbin Cherian', '8138863080', 'ctelbin@gmail.com', '8d77474082817fbc6646c9670a8ca19c', '2021-12-14 18:19:07', NULL),
(13, 'telbin', '8138863080', 'ctelbin@gmail.com', 'afef3ca69dcf8dee25df0d45b5964d67', '2022-05-02 06:35:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
