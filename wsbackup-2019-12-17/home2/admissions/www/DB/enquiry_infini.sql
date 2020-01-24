-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2017 at 03:41 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enquiry_infini`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannerhits`
--

CREATE TABLE IF NOT EXISTS `bannerhits` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `AdvertisementFrom` varchar(255) NOT NULL,
  `HitCount` int(15) NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(2) NOT NULL,
  `Projects` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `InterestedIn` varchar(8) NOT NULL,
  `AdvertisementFrom` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `AssignedTo` int(10) NOT NULL,
  `EnquiryType` varchar(100) NOT NULL,
  `EnquiryStatus` varchar(100) NOT NULL,
  `FirstCreatedDateTime` datetime NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Id`, `Title`, `Projects`, `Name`, `Mobile`, `Email`, `City`, `InterestedIn`, `AdvertisementFrom`, `Comment`, `AssignedTo`, `EnquiryType`, `EnquiryStatus`, `FirstCreatedDateTime`, `RegTime`) VALUES
(1, '', 'Pride World City', 'hemant', '98659885653', 'hemant@dimakhconsultants.com', '', '1.5 BHK', 'Mailer', '', 0, '', '', '2015-07-29 09:24:31', '2015-07-29 09:24:31'),
(3, '', 'Pride World City', 'hemant', '98659885653', 'hemant@dimakhconsultants.com', '', '1.5 BHK', 'Mailer', '', 0, '', '', '2015-07-29 09:25:33', '2015-07-29 09:25:33'),
(5, 'Mr', 'Pride World City', 'hemant', '98659885653', 'hemant@dimakhconsultants.com', '', '2 BHK', 'Mailer', '', 1, 'Cold', 'Assigned', '2015-07-29 09:37:02', '2015-07-29 11:46:20'),
(6, 'Mr', 'Pride World City', 'test', '98659885653', 'rutuja@dimakhconsultants.com', '', '3 BHK', 'Mailer', '', 1, '', 'Booked', '2015-07-29 11:00:44', '2015-07-29 11:51:13'),
(7, 'Mr', 'Pride World City', 'hemant', '98659885653', 'hemant@dimakhconsultants.com', '', '1 BHK', 'Mailer', '', 0, '', '', '2015-07-29 12:35:50', '2015-07-29 12:35:50');

-- --------------------------------------------------------

--
-- Stand-in structure for view `enquiry_details`
--
CREATE TABLE IF NOT EXISTS `enquiry_details` (
`EnqId` int(11)
,`CourseId` int(11)
,`CourseName` varchar(100)
,`ReferredBy` varchar(100)
,`Name` varchar(150)
,`Occupation` varchar(100)
,`City` varchar(150)
,`Phone` varchar(150)
,`Whatsapp` varchar(100)
,`Email` varchar(150)
,`Qualification` varchar(150)
,`PassingYear` varchar(100)
,`Experience` varchar(150)
,`Position` varchar(150)
,`Companyname` varchar(100)
,`Visitdate` varchar(150)
,`Reason` text
,`CouselorsComments` text
,`Furtheraction` text
,`TypeId` int(11)
,`TypeName` varchar(50)
,`SourceId` int(11)
,`SourceName` varchar(100)
,`OtherSource` text
,`Priority` varchar(100)
,`Status` int(11)
,`EnqStatus` varchar(50)
,`AssignedTo` int(11)
,`AssignedToName` varchar(100)
,`AssignedToEmail` varchar(255)
,`RegTime` datetime
,`UpdateTime` datetime
);
-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NoOfForms` int(11) NOT NULL,
  `CustomerType` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `FlatNumber` varchar(100) NOT NULL,
  `RegDate` datetime NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CName` varchar(150) NOT NULL,
  `CAddress` varchar(255) NOT NULL,
  `CPhoneNo` varchar(100) NOT NULL,
  `CDisplayStatus` enum('Active','Deactive') NOT NULL,
  `Isdelete` varchar(1) NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=483 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`Id`, `CName`, `CAddress`, `CPhoneNo`, `CDisplayStatus`, `Isdelete`, `RegTime`) VALUES
(1, 'Etdc', 'Gujarat', '7923287120', 'Active', '', '2016-05-27 04:39:57'),
(2, 'Tibrewala Electronics Limited', 'Hyderabad', '9949112020', 'Active', '', '2016-05-27 04:39:57'),
(3, 'Hotline Electronics Limited', 'Noida', '9958000004', 'Active', '', '2016-05-27 04:39:57'),
(4, 'Fluke Technologies Pvt. Ltd.', 'Bangalore', '9902787763', 'Active', '', '2016-05-27 04:39:57'),
(5, 'Bosch Engineering &amp; Business Solutions Limited', 'Bangalore', '9844060342', 'Active', '', '2016-05-27 04:39:57'),
(6, 'Sandisk India Device Design Centre Pvt. Ltd.', 'Bangalore', '9972767757', 'Active', '', '2016-05-27 04:39:57'),
(7, 'Marine Electricals  I  Pvt. Ltd.', 'Mumbai', '9323109546', 'Active', '', '2016-05-27 04:39:57'),
(8, 'Tata Steel Limited', 'Jamshedpur', '9234503695', 'Active', '', '2016-05-27 04:39:57'),
(9, 'Tangenttest Technologies', 'Bangalore', '9880546736', 'Active', '', '2016-05-27 04:39:57'),
(10, 'Prolite Autoglo Limited', 'Mumbai', '9820631545', 'Active', '', '2016-05-27 04:39:57'),
(11, 'Ms Power Gmbh', 'Deutschland', '9324558010', 'Active', '', '2016-05-27 04:39:57'),
(12, 'Bosch Rexroth', 'Pinia', '', 'Active', '', '2016-05-27 04:39:57'),
(13, 'Bosch Rexroth', 'Bangalore', '', 'Active', '', '2016-05-27 04:39:57'),
(14, 'Sands', 'Chennai', '9344078278', 'Active', '', '2016-05-27 04:39:57'),
(15, 'Yashika Industries', 'Chennai', '7092000006', 'Active', '', '2016-05-27 04:39:57'),
(16, 'Gudel India Pvt. Ltd.', 'Pune', '9822876586', 'Active', '', '2016-05-27 04:39:57'),
(17, 'Shivalic Power Control Pvt Ltd.', 'Faridabad', '9891012007', 'Active', '', '2016-05-27 04:39:57'),
(18, 'Vision Control Products Pvt Ltd.', 'New Delhi', '9899076648', 'Active', '', '2016-05-27 04:39:57'),
(19, 'Toshiba India Private Limited.', 'Gurgaon', '8527598707', 'Active', '', '2016-05-27 04:39:57'),
(20, 'Cg Global', 'Nashik', '', 'Active', '', '2016-05-27 04:39:57'),
(21, 'Krisam Automation Pvt. Ltd.', 'Bangalore', '9845030280', 'Active', '', '2016-05-27 04:39:57'),
(22, 'Phoenix Contact India Pvt Ltd.', 'New Delhi', '9158000672', 'Active', '1', '2016-05-27 04:39:57'),
(23, 'Finolex Cables Limited', 'Pune', '9820199767', 'Active', '', '2016-05-27 04:39:57'),
(24, 'Southern Power', 'Hydrabad', '9440613856', 'Active', '', '2016-05-27 04:39:57'),
(25, 'Aksha Associates', 'Coimbatore', '', 'Active', '', '2016-05-27 04:39:57'),
(26, 'Kubler Automation India Pvt. Ltd.', 'Pune', '9970104440', 'Active', '', '2016-05-27 04:39:57'),
(27, 'Assam Electricity Grid Corporation Limited', 'Guwahati', '', 'Active', '', '2016-05-27 04:39:57'),
(28, 'Electromotive Power Drives Pvt. Ltd.', 'Coimbatore', '9944593322', 'Active', '', '2016-05-27 04:39:58'),
(29, 'Legrand(india) Pvt. Ltd.', 'Sinnar,nashik', '', 'Active', '', '2016-05-27 04:39:58'),
(30, 'Arvind Limited', 'Gandhinagar Gujarat', '9624784499', 'Active', '', '2016-05-27 04:39:58'),
(31, 'Syngenta India Ltd', 'Goa', '9075081584', 'Active', '', '2016-05-27 04:39:58'),
(32, 'Witt India', '', '9793919299', 'Active', '', '2016-05-27 04:39:58'),
(33, 'Modern Insulators Ltd.', 'Rajasthan', '8754468556', 'Active', '', '2016-05-27 04:39:58'),
(34, 'Monni Electric Store', 'Dhaka Bangladesh', '0171 2544023', 'Active', '', '2016-05-27 04:39:58'),
(35, 'Hyosung T&amp;d India Pvt Ltd.', 'Pune', '7219001831', 'Active', '', '2016-05-27 04:39:58'),
(36, 'Tamilnadu Advanced Technical Training Institute', 'Chennai', '9566156789', 'Active', '', '2016-05-27 04:39:58'),
(37, 'Shreelight Power Pvt Ltd.', '', '93762 21350', 'Active', '', '2016-05-27 04:39:58'),
(38, 'C&amp;s Electric Ltd.', 'Noida', '9953091302', 'Active', '', '2016-05-27 04:39:58'),
(39, 'L&amp;t Electrical &amp; Automation', 'Mumbai', '9769908121', 'Active', '', '2016-05-27 04:39:58'),
(40, 'Govt Of India Ministry Of Railways', 'Bangalore', '9741422300', 'Active', '', '2016-05-27 04:39:58'),
(41, 'Govt Of India Ministry Of Railways', 'Chennai', '9003160300', 'Active', '', '2016-05-27 04:39:58'),
(42, 'Solid State Systems Private Limited', 'Bangalore', '7676523722', 'Active', '', '2016-05-27 04:39:58'),
(43, 'Device &amp; Controls', 'Kolkatta', '', 'Active', '', '2016-05-27 04:39:58'),
(44, 'Akanksha Power And Infrastructure Pvt Ltd.', '', '7381010033', 'Active', '', '2016-05-27 04:39:58'),
(45, 'Electroconnect Systems', 'Mumbai', '9323004565', 'Active', '', '2016-05-27 04:39:58'),
(46, 'Synthesis Winding Technologies Pvt Ltd.', 'Bangalore', '9731174615', 'Active', '', '2016-05-27 04:39:58'),
(47, 'Secure Meters Limited', 'Udaipur', '9829241202', 'Active', '', '2016-05-27 04:39:58'),
(48, 'Central Power Research Institute', 'Bangalore', '9448722416', 'Active', '', '2016-05-27 04:39:58'),
(49, 'Axis Allianz', 'Bangalore', '9448201192', 'Active', '', '2016-05-27 04:39:58'),
(50, 'Range Enterprises', 'Trivandrum', '9447016632', 'Active', '', '2016-05-27 04:39:58'),
(51, 'Accurate Industrial Controls Pvt Ltd.', 'Shivane Pune', '9370147543', 'Active', '', '2016-05-27 04:39:58'),
(52, 'Time Pharmaceuticals (p) Ltd.', 'Nepal', '9845078805', 'Active', '', '2016-05-27 04:39:58'),
(53, 'Keyland Technlogy Co Ltd.', 'Beijing - China 100144', '9008358660', 'Active', '', '2016-05-27 04:39:58'),
(54, 'Salzer Electronics Ltd', 'Coimbatore', '9894127811', 'Active', '', '2016-05-27 04:39:58'),
(55, 'Amara Raja Electronics Limited', 'Bangalore', '8008811173', 'Active', '', '2016-05-27 04:39:58'),
(56, 'Biomed Electronics', 'Cochin -kerla', '0484-2341335', 'Active', '', '2016-05-27 04:39:58'),
(57, 'Flow Dines Engineers Pvt Ltd.', 'Chennai', '8148711312', 'Active', '', '2016-05-27 04:39:58'),
(58, 'L&amp;t Electrical &amp; Automation', 'Delhi', '9899020306', 'Active', '', '2016-05-27 04:39:58'),
(59, 'Sps Transporters Pvt Ltd.', 'Chennai', '9940020155', 'Active', '', '2016-05-27 04:39:58'),
(60, 'Saj Test Plant Private Ltd.', 'Pune', '', 'Active', '', '2016-05-27 04:39:58'),
(61, 'Autopower Equipments', 'Ratlam', '9425103278', 'Active', '', '2016-05-27 04:39:58'),
(62, 'Mine Instruments Pvt. Ltd.', 'Indore', '9300006015', 'Active', '', '2016-05-27 04:39:58'),
(63, 'Sb Electro Engineers', 'Lonavala- Pune', '9822068550', 'Active', '', '2016-05-27 04:39:58'),
(64, 'Hanuman Automation Pvt Ltd.', 'Bangalore', '9845051059', 'Active', '', '2016-05-27 04:39:58'),
(65, 'Siemens', 'Bangalore', '8105979820', 'Active', '', '2016-05-27 04:39:58'),
(66, 'Global Vision Eipl', '', '8983337111', 'Active', '', '2016-05-27 04:39:58'),
(67, 'Skoda Power Pvt. Ltd.', 'Gurgaon', '8826045511', 'Active', '', '2016-05-27 04:39:58'),
(68, 'Fairelex Transport', 'Hosur , Bangalore', '9843674279', 'Active', '', '2016-05-27 04:39:58'),
(69, 'High Volt Electricals Pvt. Ltd.', 'Mumbai', '9869037184', 'Active', '', '2016-05-27 04:39:59'),
(70, 'Questcont Technology', 'Mumbai', '022-28577280', 'Active', '', '2016-05-27 04:39:59'),
(71, 'Pie Consultancy Services', 'Bangalore', '9448466256', 'Active', '', '2016-05-27 04:39:59'),
(72, 'Tigari Labs', 'Bangalore', '9449830199', 'Active', '', '2016-05-27 04:39:59'),
(73, 'Ied Communications Ltd', 'Mumbai', '9920018815', 'Active', '', '2016-05-27 04:39:59'),
(74, 'Elspec Engineering Indiapvt Ltd.', 'Indore', '9039024512', 'Active', '', '2016-05-27 04:39:59'),
(75, 'Tangenttest Technologies', 'Bangalore', '7338464626', 'Active', '', '2016-05-27 04:39:59'),
(76, 'Nmdc Limited', 'Karnataka', '9448375624', 'Active', '', '2016-05-27 04:39:59'),
(77, 'L&amp;t Electrical &amp; Automation', 'Mumbai', '9820552701', 'Active', '', '2016-05-27 04:39:59'),
(78, 'Svg Control System Pvt. Ltd.', 'Bangalore', '7676064082', 'Active', '', '2016-05-27 04:39:59'),
(79, 'Advancetech', 'Chandigarh', '9815036923', 'Active', '', '2016-05-27 04:39:59'),
(80, 'Scientific Mes Technik Pvt Ltd.', 'Indore', '9827022330', 'Active', '', '2016-05-27 04:39:59'),
(81, 'Power Tech Controls', 'Chennai', '9444111343', 'Active', '', '2016-05-27 04:39:59'),
(82, 'Yokogaa India Limited.', 'Bangalore', '9019449445', 'Active', '', '2016-05-27 04:39:59'),
(83, 'Siemens Tech &amp; Serv. P. Ltd.', 'Bangalore', '080-33131141', 'Active', '', '2016-05-27 04:39:59'),
(84, 'Asva Power', 'Bhuvaneshwar  Orissa', '9437578911', 'Active', '', '2016-05-27 04:39:59'),
(85, 'Ecoamica Technologies Llp', '', '7406284993', 'Active', '', '2016-05-27 04:39:59'),
(86, 'Hitachi H-rel Power Electronics Pvt. Ltd.', 'Gujarat', '9099917329', 'Active', '', '2016-05-27 04:39:59'),
(87, 'System Protection Electrical Engineers &amp; Consultants', 'Baroda', '9099009498', 'Active', '', '2016-05-27 04:39:59'),
(88, 'Csa India Pvt Ltd.', 'Bangalore', '9900056802', 'Active', '', '2016-05-27 04:39:59'),
(89, 'Hioki India Private Limited', 'Indore', '9826028999', 'Active', '', '2016-05-27 04:39:59'),
(90, 'Connect Well', 'Pune', '9820045067', 'Active', '', '2016-05-27 04:39:59'),
(91, 'Ift Industries', 'Telangana', '9177346976', 'Active', '', '2016-05-27 04:39:59'),
(92, 'Paragon Electrical Contacts', 'Nashik', '9845026610', 'Active', '', '2016-05-27 04:39:59'),
(93, 'Elemex Controls Pvt Ltd.', 'Gujarat', '9924299324', 'Active', '', '2016-05-27 04:39:59'),
(94, 'Etherdt + Leimer India Pvt Ltd.', 'Ahmedabad', '9727725038', 'Active', '', '2016-05-27 04:39:59'),
(95, 'Niehoff Of India Pvt. Ltd.', 'Hyderabad', '8455304044', 'Active', '', '2016-05-27 04:39:59'),
(96, 'Innvo System', 'Chennai', '9940670555', 'Active', '', '2016-05-27 04:39:59'),
(97, 'Taikisha Engineering India Pvt Ltd', 'Gurgaon', '9999916056', 'Active', '', '2016-05-27 04:39:59'),
(98, 'Kurlis', 'Kerala', '7034669644', 'Active', '', '2016-05-27 04:39:59'),
(99, 'Kurlis', 'Kerala', '9447141885', 'Active', '', '2016-05-27 04:39:59'),
(100, 'Aditya Electronics', 'Chhattisgarh', '', 'Active', '', '2016-05-27 04:39:59'),
(101, 'Innova Technologies', 'Bangladesh', '00880-1712234674', 'Active', '', '2016-05-27 04:39:59'),
(102, 'Parth Energy Solutions', 'Rajkot', '9998517133', 'Active', '', '2016-05-27 04:39:59'),
(104, 'Himesh Reddivari Technologies Pvt Ltd', '', '917032366913-91973194635', 'Active', '', '2016-05-27 04:43:21'),
(105, 'Keysighttechnologies India Pvt Ltd', '', '9741499776-08040148753', 'Active', '', '2016-05-27 04:43:21'),
(106, 'Arrow Technologies', '', '9980012983', 'Active', '', '2016-05-27 04:43:21'),
(107, 'B.g Tech', '', '9880637735', 'Active', '', '2016-05-27 04:43:21'),
(108, 'Seco', '', '9900082775-08041116741', 'Active', '', '2016-05-27 04:43:21'),
(109, 'Edutech India Pvt Ltd', '', '9901818002-08041123437', 'Active', '', '2016-05-27 04:43:21'),
(110, 'Raychen Rpg', '', '9099946477', 'Active', '', '2016-05-27 04:43:21'),
(111, 'Embedsense Solution Pvt Ltd', '', '819709521', 'Active', '', '2016-05-27 04:43:21'),
(112, 'Keysighttechnologies India Pvt Ltd', '', '08040148784-9663466910', 'Active', '', '2016-05-27 04:43:22'),
(113, 'Secojal Electronics', '', '897576566-7083127488', 'Active', '', '2016-05-27 04:43:22'),
(114, 'Qmax', '', '984088893', 'Active', '', '2016-05-27 04:43:22'),
(115, 'Embdes', '', '8025537562', 'Active', '', '2016-05-27 04:43:22'),
(116, 'Patronik', '', '8805959692', 'Active', '', '2016-05-27 04:43:22'),
(117, 'Bharat Electronics Limited', '', '9448385221', 'Active', '', '2016-05-27 04:43:22'),
(118, 'Amara Raja Electronics Limited', '', '9490400556', 'Active', '', '2016-05-27 04:43:22'),
(119, 'Lrde', '', '9740954281', 'Active', '', '2016-05-27 04:43:22'),
(120, 'El Labs India Pvt. Ltd.', 'Bangalore', '9845197684', 'Active', '', '2016-05-27 04:43:22'),
(121, 'Volvo', 'Bangalore', '8754087510', 'Active', '', '2016-05-27 04:43:22'),
(122, 'Iwave Systems Technologies Pvt. Ltd.', 'Bangalore', '9900123059', 'Active', '', '2016-05-27 04:43:22'),
(123, 'Dhirajlal Gandhi College Of Technology', 'Bangalore', '9994844776', 'Active', '', '2016-05-27 04:43:22'),
(124, 'Ranysons Electronics Pvt . Ltd.', 'Mysore', '9741402075', 'Active', '', '2016-05-27 04:43:22'),
(125, 'Tersolve Semiconductor', 'Bangalore', '9618767795', 'Active', '', '2016-05-27 04:43:22'),
(126, 'Arihant Trading Company', 'Kolkatta', '9830033381', 'Active', '', '2016-05-27 04:43:22'),
(127, 'Aksha  Associates', 'Coimbatore', '9688748422', 'Active', '', '2016-05-27 04:43:22'),
(128, 'Unique Controls Corporation', 'Coimbatore', '9842266377', 'Active', '', '2016-05-27 04:43:22'),
(129, 'Surya Industries', 'Latur', '9766668880', 'Active', '', '2016-05-27 04:43:22'),
(130, 'Entuple Technologies', 'Bangalore', '9880302268', 'Active', '', '2016-05-27 04:43:22'),
(131, 'Bharat Heavy Electrical Limited', 'Mysore road Bangalore-560026', '08026998655', 'Active', '', '2016-06-06 11:36:48'),
(132, 'Tordex', 'Bangalore', '', 'Active', '', '2016-05-27 04:43:22'),
(133, 'Anita Enterrises', 'New Delhi', '9873996917', 'Active', '', '2016-05-27 04:43:22'),
(134, 'Rohm Semiconductor India Pvt Ltd.', 'Bangalore', '9844550756', 'Active', '', '2016-05-27 04:43:22'),
(135, 'Kunstwerk Machinery India Pvt Ltd.', 'Karnataka', '9686852005', 'Active', '', '2016-05-27 04:43:22'),
(136, 'Eco-luminate Technologies Pvt. Ltd.', 'Bangalore', '9880019628', 'Active', '', '2016-05-27 04:43:22'),
(137, 'Aims', 'Baroda', '9925110106', 'Active', '', '2016-05-27 04:43:22'),
(138, 'Bel', 'Bangalore', '080-22195340', 'Active', '', '2016-05-27 04:43:22'),
(139, 'Microchip Technology India Pvt Ltd.', 'Bangalore', '080-30904444/ 30904471', 'Active', '', '2016-05-27 04:43:22'),
(140, 'Thermonik Campbell Electronics', 'Mumbai', '022-32181938/ mob:9022333672', 'Active', '', '2016-05-27 04:43:22'),
(141, 'Fabers Lab', 'Rajkot', '8754561554', 'Active', '', '2016-05-27 04:43:22'),
(142, 'Tone Engineering India Private Limited.', 'Bangalore', '7204078732', 'Active', '', '2016-05-27 04:43:22'),
(143, 'Deltafull Enterprises Pvt. Ltd.', 'Bangalore', '9844013724', 'Active', '', '2016-05-27 04:43:22'),
(144, 'Acharya Institute Of Technology', 'Bangalore', '7406655223', 'Active', '', '2016-05-27 04:43:22'),
(145, 'Forge,  Coimbatore Innovation And Business Incubator', 'Coimbatore', '9003977441', 'Active', '', '2016-05-27 04:43:22'),
(146, 'Ganesh Electronics &amp; Electricals', 'Mumbai', '9869020685', 'Active', '', '2016-05-27 04:43:22'),
(147, 'Array Metric Private Limited', 'Bangalore', '7829504944', 'Active', '', '2016-05-27 04:43:22'),
(148, 'Neerasure', 'Delhi', '8951415895', 'Active', '', '2016-05-27 04:43:22'),
(149, 'Vishwanath Electricals Pvt. Ltd.', 'Bangalore', '9886622270', 'Active', '', '2016-05-27 04:43:22'),
(150, 'Cybermotion Technologies Pvt. Ltd.', 'Hyderabad', '8008066228', 'Active', '', '2016-05-27 04:43:22'),
(151, 'Ipc Technology Consulting Pvt. Ltd.', 'Bangalore', '9741300577', 'Active', '', '2016-05-27 04:43:22'),
(152, 'C-DAC Knowledge Park', 'Opp. HAL Aeroengine Division\r\nOld Madras Road, Byappanahalli\r\nBengaluru - 560 038', '8066116400', 'Active', '', '2017-04-03 10:30:51'),
(153, 'Pie Electronics', 'New Delhi', '9013943427', 'Active', '', '2016-05-27 04:43:22'),
(154, 'Open Silicon Research Private Ltd.', 'Bangalore', '9845480294', 'Active', '', '2016-05-27 04:43:22'),
(155, 'Gemini Electro Corporation', 'Bangalore', '9886135789', 'Active', '', '2016-05-27 04:43:22'),
(156, 'Tcs', 'Bangalore', '9980377844', 'Active', '', '2016-05-27 04:43:22'),
(157, 'Dishi Systems', 'Bangalore', '9986767931', 'Active', '', '2016-05-27 04:43:22'),
(158, 'Govt Of India  Ministry Of Communication And It', 'New Delhi', '011-24363094', 'Active', '', '2016-05-27 04:43:22'),
(159, 'Jijopaul', 'Kerala', '9400575220', 'Active', '', '2016-05-27 04:43:22'),
(160, 'Sansel Instruments And Controls', 'Chennai', '4423783941', 'Active', '', '2016-05-27 04:43:22'),
(161, 'Elmeasure', 'Bangalore', '9740035505', 'Active', '', '2016-05-27 04:43:22'),
(162, 'R Bit Automate Electronics', 'Coimbatore', '9942265176', 'Active', '', '2016-05-27 04:43:22'),
(163, 'Spanco Tek', 'Bhubaneshwar', '9338273911', 'Active', '', '2016-05-27 04:43:22'),
(164, 'Jyothy Institute Of Technology', 'Bangalore', '9945218167', 'Active', '', '2016-05-27 04:43:22'),
(165, 'Ignitarium', 'Bangalore', '9895020463', 'Active', '', '2016-05-27 04:43:23'),
(166, 'Rohm Semiconductor India Pvt Ltd.', 'Bangalore', '9108481554', 'Active', '', '2016-05-27 04:43:23'),
(167, 'Ostrich', 'Bangalore', '9341160382', 'Active', '', '2016-05-27 04:43:23'),
(168, 'India Nippon Electricals Limited.', 'Hosur', '8754020742', 'Active', '', '2016-05-27 04:43:23'),
(169, 'Iisc', 'Bangalore', '9341049716', 'Active', '', '2016-05-27 04:43:23'),
(170, 'Asteria Aerospace', 'Bangalore', '8123150018', 'Active', '', '2016-05-27 04:43:23'),
(171, 'Lightspeed Business Consulting', 'Bangalore, Mumbai', '9845198049', 'Active', '', '2016-05-27 04:43:23'),
(172, 'Applied Realtech Systems Pvt. Ltd.', 'Bangalore', '9844022033', 'Active', '', '2016-05-27 04:43:23'),
(173, 'Cir-q-tech Tako Technologies', 'Bangalore', '9945272859', 'Active', '', '2016-05-27 04:43:23'),
(174, '5 Elements Techno Services P Ltd,', 'Bhubaneshwar', '9437099095', 'Active', '', '2016-05-27 04:43:23'),
(175, 'Bel', 'Bangalore', '9448385221', 'Active', '', '2016-05-27 04:43:23'),
(176, 'Schneider Electric', 'Bangalore', '9731007125', 'Active', '', '2016-05-27 04:43:23'),
(177, 'Anchor Electricals Pvt. Ltd.', 'Mumbai', '9699366968', 'Active', '', '2016-05-27 04:43:23'),
(178, 'Wipro Ge Healthcare -  Xray Division', 'Bangalore', '9740014859', 'Active', '', '2016-05-27 04:43:23'),
(179, 'Vario Systems Electronics', 'Badalgama - Srilanka', '0094-312030310', 'Active', '', '2016-05-27 04:43:23'),
(180, 'Dgeme - Army', 'Bangalore', '9880941321', 'Active', '', '2016-05-27 04:43:23'),
(181, 'Avana Electrosystems Pvt. Ltd.', 'Bangalore', '9686205061', 'Active', '', '2016-05-27 04:43:23'),
(182, 'Bangalore Metro Rail Corporation Ltd', 'Bangalore', '9480825752', 'Active', '', '2016-05-27 04:43:23'),
(183, 'Siemens', 'Bangalore', '9845377493', 'Active', '', '2016-05-27 04:43:23'),
(184, 'Nandi Powertronics Pvt Ltd.', 'Bangalore', '9449841666', 'Active', '', '2016-05-27 04:43:23'),
(185, 'Toshiba', 'Bangalore', '9900021688', 'Active', '', '2016-05-27 04:43:23'),
(186, 'Ysl Electronics', 'Bangalore', '080-28461413, 28566413', 'Active', '', '2016-05-27 04:43:23'),
(187, 'Kanha Tech Solutions Ltd.', 'Bangalore', '9620218971', 'Active', '', '2016-05-27 04:43:23'),
(188, 'Trolx India Private Limited.', 'Bangalore', '9535300546', 'Active', '', '2016-05-27 04:43:23'),
(189, 'Silicon Micro Systems', 'Bangalore', '9844040444', 'Active', '', '2016-05-27 04:43:23'),
(190, 'Sgs India Pvt. Ltd.', 'Bangalore', '8698889180', 'Active', '', '2016-05-27 04:43:23'),
(191, 'Golgi Electronics', 'Hyderabad', '9030933336', 'Active', '', '2016-05-27 04:43:23'),
(192, 'L&amp;t Technology Services', 'Bangalore', '9742260110', 'Active', '', '2016-05-27 04:43:23'),
(193, 'Stellapps Technologies', 'Bangalore', '9739974160', 'Active', '', '2016-05-27 04:43:23'),
(194, 'Cadence Ams Design India Pvt. Ltd.', 'Bangalore', '080-49201600', 'Active', '', '2016-05-27 04:43:23'),
(195, 'Tessolve Semiconductor Pvt. Ltd.', 'Bangalore', '080-41812502', 'Active', '', '2016-05-27 04:43:23'),
(196, 'Intgrated Services And Consultancy', 'Bangalore', '9845070872', 'Active', '', '2016-05-27 04:43:23'),
(197, 'Bel Thales Systems Limited', 'Bangalore', '9677033369', 'Active', '', '2016-05-27 04:43:23'),
(198, 'Centr For Artifical Intelligence &amp; Robotics', 'Bangalore', '080-25244288', 'Active', '', '2016-05-27 04:43:23'),
(199, 'Hioki India Private Limited.', 'Indore', '9826028999', 'Active', '', '2016-05-27 04:43:23'),
(200, 'Conformity Testing Labs Pvt Ltd.', 'Thane', '9820604564', 'Active', '', '2016-05-27 04:43:23'),
(201, 'Hitech Lights Limited', 'Himachal Pradesh', '9886063070', 'Active', '', '2016-05-27 04:43:23'),
(202, 'Quality Evaluation And Systems  Team Pvt Ltd.', 'Bangalore', '9945530136', 'Active', '', '2016-05-27 04:43:23'),
(203, 'Adatronix Pvt Ltd.', 'Bangalore', '9916945000', 'Active', '', '2016-05-27 04:43:23'),
(204, 'Livescience.in', 'Bangalore', '9972066239', 'Active', '', '2016-05-27 04:43:23'),
(205, 'Eccla - Solar', 'Coimbatore', '9363324939, 9843324939', 'Active', '', '2016-05-27 04:43:23'),
(206, 'Bosch Rexroth India Limited', 'Bangalore', '9535547779', 'Active', '', '2016-05-27 04:43:23'),
(207, 'Titan Company Limited', 'Hosur', '9500427713', 'Active', '', '2016-05-27 04:43:23'),
(208, 'Tvs Motors', 'Hosur', '0434-4270236', 'Active', '', '2016-05-27 04:43:23'),
(209, 'Afs   Ace Fastening Solutions', 'Bangalore', '9342585109', 'Active', '', '2016-05-27 04:43:24'),
(210, 'Tantragana', 'Bangalore', '9482303025', 'Active', '', '2016-05-27 04:43:24'),
(211, 'Bel Midc', 'Bangalore', '080-28381547', 'Active', '', '2016-05-27 04:43:24'),
(212, 'Syrma Technology Pvt. Ltd.', 'Chennai', '9003512546', 'Active', '', '2016-05-27 04:43:24'),
(213, 'Invendis Technologies India Pvt Ltd.', 'Bangalore', '9686114090', 'Active', '', '2016-05-27 04:43:24'),
(214, 'Bureau Veritas Consumer Products Services India Pvt. Ltd.', 'Bangalore', '8884411582', 'Active', '', '2016-05-27 04:43:24'),
(215, 'Communications Test Design India Pvt. Ltd', 'Bangalore', '9535033122', 'Active', '', '2016-05-27 04:43:24'),
(216, 'Kaynes Technlogy', 'Mysore', '0821-4280270', 'Active', '', '2016-05-27 04:43:24'),
(217, 'Schneider Electric India Pvt Ltd.', 'Bangalore', '9845517393', 'Active', '', '2016-05-27 04:43:24'),
(218, 'Utc Aerospace', 'Bangalore', '9741312775', 'Active', '', '2016-05-27 04:43:24'),
(219, 'Vehma Engineering Solutions India Pvt Ltd', 'Bangalore', '9538642298', 'Active', '', '2016-05-27 04:43:24'),
(220, 'Cypress Semiconductor Technology India Pvt Ltd.', 'Bangalore', '080-67073319', 'Active', '', '2016-05-27 04:43:24'),
(221, 'Honeywell Technology Solutions Lab Pvt Ltd.', 'Bangalore', '9900079237', 'Active', '', '2016-05-27 04:43:24'),
(222, 'Eaton Power Quality Pvt. Ltd.', 'Pondichery', '9442526343', 'Active', '', '2016-05-27 04:43:24'),
(223, 'Siddaganga Institute Of Technology', 'Tumkur Karnataka', '9916308755/66', 'Active', '', '2016-05-27 04:43:24'),
(224, 'Epitome Components Pvt. Ltd.', 'Ahmednagar', '9561814114', 'Active', '', '2016-05-27 04:43:24'),
(225, 'Maks Techno Solution', 'Mumbai', '9768191425', 'Active', '', '2016-05-27 04:43:24'),
(226, 'Drdo', 'Bangalore', '', 'Active', '', '2016-05-27 04:43:24'),
(227, 'Mobelium Technologies Pvt. Ltd.', 'Bangalore', '8884404880', 'Active', '', '2016-05-27 04:43:24'),
(228, 'Schneider Electric', 'Bangalore', '', 'Active', '', '2016-05-27 04:43:24'),
(229, 'Software And Fashion Designing', 'Bangalore', '9945663787', 'Active', '', '2016-05-27 04:43:24'),
(230, 'Adya Fine Fabrics', 'Bangalore', '080-41461400', 'Active', '', '2016-05-27 04:43:24'),
(231, 'Ascent Enggco Pvt. Ltd.', 'Bangalore', '9739189065', 'Active', '', '2016-05-27 04:43:24'),
(232, 'Thiagarajar Telekon Solutions Ltd.', 'Bangalore', '9945228568', 'Active', '', '2016-05-27 04:43:24'),
(233, 'Bharat Heavy Electricals Ltd.', 'Bangalore', '09448491036', 'Deactive', '', '2016-06-04 10:54:46'),
(234, 'Vispra Power Controls', 'Coimbatore', '9363202127', 'Active', '', '2016-05-27 04:43:24'),
(235, 'Reflections', 'Bangalore', '9900664477', 'Active', '', '2016-05-27 04:43:24'),
(236, 'Reflections', 'Bangalore', '9945917803', 'Active', '', '2016-05-27 04:43:24'),
(237, 'Reliable Electronics', 'Bangalore', '8884390694', 'Active', '', '2016-05-27 04:43:24'),
(238, 'Msme Testing Station', 'Bangalore', '9869268529', 'Active', '', '2016-05-27 04:43:24'),
(239, 'Technocomm Instruments Pvt Ltd.', 'Bangalore', '9880859795', 'Active', '', '2016-05-27 04:43:24'),
(240, 'Mahindra Reva', 'Bangalore', '9841554540', 'Active', '', '2016-05-27 04:43:24'),
(241, 'Surya Enterprises', 'Bangalore', '9742067816', 'Active', '', '2016-05-27 04:43:24'),
(242, 'Thinture Technologies Pvt. Ltd.', 'Bangalore', '8884277728', 'Active', '', '2016-05-27 04:43:24'),
(243, 'Bharat Electronics Limited', 'Bangalore', '9481026854', 'Active', '', '2016-05-27 04:43:24'),
(244, 'G.e. Healthcare', 'Bangalore', '9740575885', 'Active', '', '2016-05-27 04:43:24'),
(245, 'Ritika Associates', 'Huballi', '9886239120', 'Active', '', '2016-05-27 04:43:24'),
(246, 'Tcs', 'Chennai', '9890299558', 'Active', '', '2016-05-27 04:43:24'),
(247, 'Bharat Electronics Limited', 'Bangalore', '080-22195655', 'Active', '', '2016-05-27 04:43:24'),
(248, 'Power Systems &amp; Mechanical', 'Bangalore', '', 'Active', '', '2016-05-27 04:43:24'),
(249, 'Semikron Electronics P. Ltd.', 'Bangalore', '9880315597', 'Active', '', '2016-05-27 04:43:24'),
(250, 'Prolyx Microelectronics P. Ltd.', 'Bangalore', '08026665684', 'Active', '', '2016-06-03 14:58:36'),
(251, 'Spectrum Techvision Pvt. Ltd', 'Bangalore', '7022899575', 'Active', '', '2016-05-27 04:43:24'),
(252, 'Bharat Electronics Limited', 'Bangalore', '9449043898', 'Active', '', '2016-05-27 04:43:24'),
(253, 'Bosch Rexroth India Limited', 'Bangalore', '', 'Active', '', '2016-05-27 04:43:25'),
(254, 'Brahmos Aerospace Pvt Ltd', 'Brahmos Complex, Adj DRDL Rear Gate Kanchanbagh PO. Hyderabad-500058', '04024087168', 'Active', '', '2016-06-06 11:39:05'),
(255, 'Bharat Dynamics Limited', 'Ministry of Defence\nKanchanbagh , Hyderabad -500058\nTelangana.', '04024587466', 'Active', '', '2016-05-31 10:51:50'),
(256, 'Research Centre Imarat', 'DRDO, Vigynana Kancha Hyderabad- 500069', '04024306200', 'Active', '', '2016-06-06 11:36:22'),
(257, 'Armament Research &amp;amp; Development Establishment', 'DRDO, Ministry of Defence Armament PO, Pashan, Pune - 411 021', '09422517161', 'Active', '', '2016-06-06 11:35:27'),
(258, 'Centum Electronics Limited', '#44, KHB Industrial Area, Yelahanka New Town Bangalore 560 106', '08041436000', 'Active', '', '2016-06-06 11:37:42'),
(259, 'Blue Star Limited.', '2nd Pokharan Road, Majiwada, Thane (west)', '09167523677', 'Active', '', '2016-06-01 13:00:59'),
(260, 'Mazagon Dock Limited', 'Dockyard Road, Mazagon, Mumbai', '09987796162', 'Active', '', '2016-06-01 13:01:38'),
(261, 'IIT Bombay', 'Powai Campus, Mumbai', '09322257265', 'Active', '', '2016-06-01 13:02:18'),
(262, 'NYA Kochi', 'Kochi', '08147943858', 'Active', '', '2016-06-01 13:02:54'),
(263, 'Minda Stoneridge Instruments Ltd.', 'Gut No. 287, 291 - 295, 298, Nanekarwadi,\nChakan, Tal. Khed,\nDistrict - Pune, - 410501', '02135662000', 'Active', '', '2016-06-03 12:32:38'),
(264, 'Lear Corporation', 'E-25,26&amp;amp;27, MIDC Bhosari, Opp. Philips India ltd., Bhosari, Pimpri Chinchwad Rd, \nLandewadi, Pimpri Colony, \nPimpri-Chinchwad, Maharashtra 411026', '02066123000', 'Active', '', '2016-06-06 11:31:05'),
(265, 'In Yantra Technologies Pvt. Ltd.', 'Pune-Bangalore Highway, Shindewadi, Maharashtra 412801', '02041432083', 'Active', '', '2016-06-03 12:34:13'),
(266, 'Godrej', 'Lulla Nagar ,Pune', '09130014031', 'Active', '', '2016-06-03 12:34:46'),
(267, 'NYA Mumbai', 'Wecores, Lions Gate, Mumbai', '00000000000', 'Active', '', '2016-06-03 12:36:43'),
(268, 'Research and Development Establishment ( Engrs)', 'DRDO , Alandi Road , Dighi , Pune -15', '02027044000', 'Active', '', '2016-06-03 13:17:50'),
(269, 'IIIT', 'Plot No. 7, Sector 24, Tuta, Naya Raipur, Chhattisgarh 492 002', '07712474040', 'Active', '', '2016-06-07 15:05:35'),
(270, 'LG Electronics India Pvt. Ltd.', 'A 5, Ranjangaon MIDC, Maharashtra 412220', '02138661000', 'Active', '', '2016-06-06 11:37:09'),
(271, 'Raja Ramanna Centre for Advanced Technology', 'Near Rajendra Nagar, Indore, Madhya Pradesh 452012', '07312488816', 'Active', '', '2016-06-10 11:52:58'),
(272, 'Savitribai Phule Pune University', 'Pune University Rd, Ganeshkhind, Pune, Maharashtra 411007', '02025696064', 'Active', '', '2016-06-06 13:16:08'),
(273, 'Philips India Ltd-Heathcare Innovation Centre', 'ICC DEVI GAURAV TECH PARK, MIDC, Pimpri-Chinchwad, 411018', '09890411110', 'Active', '', '2016-06-06 13:16:52'),
(274, 'Wika Instruments India Pvt. Ltd.', 'Plot No 40, Gat 94+100, High Cliff Industrial Estate, Village Keshnand, Wagholi, Pune, Maharashtra 412207', '02066293200', 'Active', '', '2016-06-06 13:17:36'),
(275, 'Amphenol Interconnect India Pvt. Ltd.', 'Plot no. 105, Bhosari Industrial area ,Pune 411026', '02067360417', 'Active', '', '2016-06-06 16:18:24'),
(276, 'Bharat Electronic Limited', 'I.E. Nacharam,Hyderabad 500076', '04027194324', 'Active', '', '2016-06-06 16:20:09'),
(277, 'Nuclear Fuel Complex', 'PO ECIL Hyderabad 500062', '04027183149', 'Active', '', '2016-06-10 11:58:58'),
(278, 'IFB Industries Ltd.', 'Verna,Goa 403722', '08323044800', 'Active', '', '2016-06-06 16:27:50'),
(279, '13 BRD', '13 BRD,DELHI', '01125675528', 'Active', '', '2016-06-06 16:29:05'),
(280, 'Bajaj Auto  Ltd.', 'Akurdi, Pune 411035', '00202747285', 'Active', '', '2016-06-06 17:01:36'),
(281, 'Jabil Circuit India Pvt. Ltd.', 'Ranjangaon ,MIDC, Pune 412220', '02138562000', 'Active', '', '2016-06-06 16:34:02'),
(282, 'Aditya Clean Energy', '101,Second floor Shivkutir,Harinagar,Ashram,Delhi', '07840090115', 'Active', '', '2016-06-06 17:46:02'),
(283, 'Anant Industries', 'Gala no. 4 &amp;amp; 19, Pragati Industrial Complex,Kothrud ,Pune 411038', '02025434448', 'Active', '', '2016-06-06 17:51:02'),
(284, 'Rayalaseema University', 'Nandyal Chaurasta Road, Sree Rama Nagar, Kurnool, Andhra Pradesh 518007', '08518280683', 'Active', '', '2016-06-07 10:28:53'),
(285, 'Honda Cars India Ltd', 'SPL-1, Tapukara Industrial Area, Khushkhera, Dist-Alwar, Rajasthan-301707', '01493511227', 'Active', '', '2016-06-10 14:28:06'),
(286, 'Delta Power Solutions (I) Pvt Ltd', 'Ozone Manay  Tech park, A- block, 3rd floor,Hosur road, Hongasandra village,Bangalore-560068', '08067164707', 'Active', '', '2016-06-10 13:17:47'),
(287, 'ABB Global Industries and Services Private Limited', 'Bhoruka tech park, 5th floor , Whitefield road, Bangalore-560048, Karnataka, India', '08041236428', 'Active', '', '2016-06-10 14:22:34'),
(288, 'International Center for Automotive Technology', 'Plot no-26, sector-3, IMT Manesar, Gurgaon-122050', '01244586111', 'Active', '', '2016-06-10 14:26:54'),
(289, 'Hella India Automotive Private Limited', 'DLF IT Park, Block 5, 2nd floor, 1/124, Mount Poonamallee road ,Chennai- 600089', '04442990644', 'Active', '', '2016-06-10 14:31:22'),
(290, 'R and DE Dighi', 'Dighi Pune', '09850143166', 'Active', '', '2016-06-07 15:34:22'),
(291, 'TATA Sons Limited', 'Survey no- 17/1, 5th floor Opposite Cessna business park ,Outer ring road, Bangalore- 560087', '09241302224', 'Active', '', '2016-06-10 13:13:17'),
(292, 'LAVA International Limited', 'A-47, sector 58, Noida-201301', '01203086200', 'Active', '', '2016-06-10 13:18:37'),
(293, 'Mahindra Reva Electric Vehicles Pvt Ltd', '#122E, Bommasandra Industrial area Off Hosur road, Bangalore-560099', '08040724272', 'Active', '', '2016-06-10 14:33:25'),
(294, 'DRDE', 'Defence Research &amp;amp; Development Establishment , Tansen Road, Gwalior-474 002', '07512341550', 'Active', '', '2016-06-07 15:02:12'),
(295, 'Digital Circuits Pvt Ltd', '60, Doddakalsandra , Kanakapura main road, Bangalore-560062', '08022560994', 'Active', '', '2016-06-10 14:30:26'),
(296, 'Continental Automotive Components (India) Pvt Ltd', 'Gold Hill Supreme Park, Electronic City Phase II, Electronic City, Bengaluru, Karnataka 560100', '08066796000', 'Active', '', '2016-06-10 14:34:49'),
(297, 'Centre for Air Borne Systems (CABS)', 'Defence Research and Development Organization (DRDO) Ministry of Defence Belur Yemlur Post, Bangalore - 560 037', '09945136763', 'Active', '', '2016-06-10 12:34:07'),
(298, 'IIT Gandhinagar', 'IIT, Palaj, Gujarat', '09328474222', 'Active', '', '2016-06-07 16:15:14'),
(299, 'Shilchar Technologies', 'Bil Road, Bil- 391 410,Dist. Vadodara, India', '02652680466', 'Active', '', '2016-06-07 16:17:33'),
(300, 'FAG Bearings India', 'Maneja, Vadodara, Gujarat 390013', '02652642651', 'Active', '', '2016-06-07 16:19:25'),
(301, 'Space Applications Centre', 'Jodhpur Village, Ahmedabad, Gujarat 380015', '07926913402', 'Active', '', '2016-06-07 16:24:51'),
(302, 'GULF OIL Corporation Limited', 'P B No-1, Sanat Nagar, Kukatpally, Industrial Estate, Kukatpally,  Hyderabad, Andhra Pradesh 500018', '04023810671', 'Active', '', '2016-06-10 13:12:08'),
(303, 'National Institute of Technology Goa', 'Farmagudi, Ponda, Goa 403401', '08322404200', 'Active', '', '2016-06-10 13:11:44'),
(304, 'SCOPE T And M Pvt Ltd', 'EL 31/11, \\''J\\'' BLOCK, MIDC Bhosari, Pimpri-Chinchwad, Pune, Maharashtra 411026', '02067333999', 'Active', '', '2016-06-10 14:26:14'),
(305, 'Tata Power Company Limited Strategic Engineering', '42 - 43 Electronics City, Phase-1,Hosur Road,Bangalore 560 100,India', '08067859910', 'Active', '', '2016-06-08 10:49:34'),
(306, 'ALSTOM', '65/2, Block C, Level 03 (2nd Floor) ,Bengaluru ,560 093', '08066176060', 'Active', '', '2016-06-08 10:57:29'),
(307, 'Janatics India Pvt. Ltd.', '407, 4th Floor, Pride Hulkul # Bangalore 560027 Bangalore', '08022239520', 'Active', '', '2016-06-08 11:14:45'),
(308, 'UCAL Systems', 'Raheja Towers, Delta Wing - Unit 705 177, Anna Salai, Chennai, 600 002 Tamil Nadu.', '04442208100', 'Active', '', '2016-06-10 11:55:43'),
(309, 'IIT Madras', 'Beside Adyar Cancer Institute, Opposite to C.L.R.I, Sardar Patel Road, Adyar, Chennai, Tamil Nadu 600036', '04422578280', 'Active', '', '2016-06-08 13:06:59'),
(310, 'Siemens Technology and Services Private Limited', 'No. 84, Keonics, Electronics City, Hosur Road, Bengaluru, Karnataka 560100', '08033134651', 'Active', '', '2016-06-08 13:13:28'),
(311, 'SREE VISHNU MAGNETICS PVT LTD', 'Survey No.9/1, Thiruvalluvar Salai, Kannivakkam Village, Guduvancherry ,Kancheepuram District Pin 603 202', '04427438531', 'Active', '', '2016-06-10 13:08:47'),
(312, 'Breaks India Limited', 'Padi, Chennai-600 050.', '04426526577', 'Active', '', '2016-06-08 14:17:18'),
(313, 'Bharat Electronic Limited Chennai', 'Post Box No 981, Army Street, Nandambakkam, Chennai - 600089', '04422326906', 'Active', '', '2016-06-08 14:22:29'),
(314, 'hindustan aeronautics limited', 'Rotary Wing Research &amp;amp; Design Center Helicopter Complex, Hindustan Aeronautics Limited, Post Bag No.1796, Vimanapura Post, Bangalore - 560 017, INDIA.', '80223222941', 'Active', '', '2016-06-10 11:57:15'),
(315, 'Flextronics', 'Flextronics Technologies (lndia) Pvt. Ltd.Plot 3, Phase II, SIPCOT Industrial Estate Sandavellur C Village Sriperumbudur, Kanchipuram Tamil Nadu 602106 India, Building FPS', '04467105000', 'Active', '', '2016-06-08 15:21:45'),
(316, 'Incap Contract Manufacturing Services Pvt. Ltd.', 'TVS School, Incap CMS,, Pandithanahalli Hirehalli Post, Madagondanahalli, Karnataka 572168', '08163981100', 'Active', '', '2016-06-08 16:11:14'),
(317, 'Mistral Solutions', 'No.60, Adarsh Regent, 100 Feet Road, Near Domlur Flyover Domlur Layout, Adarsh Regent, Domlur I Stage, 1st Stage, Domlur, Bengaluru, Karnataka 560071', '08030912600', 'Active', '', '2016-06-08 17:17:15'),
(318, 'Integral Coach Factory', 'South Colony, Icf Colony, Chennai, Tamil Nadu 600038', '04426260152', 'Active', '', '2016-06-08 17:20:00'),
(319, 'Indian Institute of Science', 'C V Raman Ave, Bengaluru, Karnataka 560012', '08022932004', 'Active', '', '2016-06-08 17:23:45'),
(320, 'Himatsingka', 'Plot No. 1, Special Economic Zone Textile Specific, Hanumanthapura Post,Hassan Gorur Road,Hassan 573201,Karnataka, India', '80223780000', 'Active', '', '2016-06-10 13:14:46'),
(321, 'Alpha Design Technologies', 'Vishwastha Building, 100 Feet Rd, Binnamangala, Stage 2, Indiranagar, Bengaluru, Karnataka 560038', '08025216640', 'Active', '', '2016-06-08 17:27:06'),
(322, 'Vikram Sarabhai Space Center', 'VSSC Road, Thumba, Thiruvananthapuram, Kerala 695022', '04712564292', 'Active', '', '2016-06-08 17:34:11'),
(323, 'Naval Physical &amp;amp; Oceanographic Laboratory', 'Naval Physical &amp;amp; Oceanographic Laboratory, Thrikkakara (PO) Kochi, Kerala- 682 021', '48402571000', 'Active', '', '2016-06-10 11:55:07'),
(324, 'C-DAC', 'P.B.NO:6520, Vellayambalam Thiruvananthapuram - 695033 Kerala (India)', '04712723333', 'Active', '', '2016-06-10 12:00:08'),
(325, 'Liquid Propulsion Systems Centre', 'LPSC, Valiamala ISRO, Department of Space Valiamala PO Thiruvanthapuram - 695 547', '04712567508', 'Active', '', '2016-06-08 17:47:41'),
(326, 'Eaton', 'Prestige Atrium, Unit 501, 4th floor, Central Street, Shivajinagar, Bengaluru, Karnataka 560002', '08049012203', 'Active', '', '2016-06-08 17:49:30'),
(327, 'ISRO Inertial Systems UnitWebsiteDirections', 'Vattiyoorkavu Complex, Nettayam, Thiruvananthapuram, Kerala 695013', '00000000000', 'Active', '', '2016-06-10 11:54:06'),
(328, 'High Energy Materials Research Laboratory(HEMRL)', 'DRDO , Sutar wadi,Pune 411021', '02025912502', 'Active', '', '2016-06-09 10:29:30'),
(329, 'Renesas Electronics', '777C, 100 Feet Rd, Dupanahalli, Indiranagar Bengaluru, Karnataka 560008', '08067208700', 'Active', '', '2016-06-09 10:42:23'),
(330, 'Brueckner Seebach Filter Solution India Pvt. Ltd.', 'Gate No.1016, Pune-Bangalore Highway, Shirwal, Maharashtra 412801', '02169244750', 'Active', '', '2016-06-09 11:26:35'),
(331, 'R And D Instrument Services', 'No.5/3A, Ambal Nagar, Poomagal Nagar 3rd Street, Ekkatuthangal, Poomagal Nagar, Gandhi Nagar, Chennai, Tamil Nadu 600032', '09382744155', 'Active', '', '2016-06-09 11:43:49'),
(332, 'Air force Station Tambaram', 'Tambaram East, Chennai - 600059', '04422395553', 'Active', '', '2016-06-09 12:10:34'),
(333, 'SITAR', 'Opp KR Puram Railwaystation, Dooravani Nagar, Bengaluru, Karnataka 560016', '08025653588', 'Active', '', '2016-06-10 13:16:13'),
(334, 'SEW EURODRIVE INDIA PVT LTD', 'Plot no. 4,GIDC,Por, Ramangamdi, Vadodara, Gujarat 391243', '02653045358', 'Active', '', '2016-06-10 13:07:20'),
(335, 'EATON Chennai', 'EVR St, Ambattur, Chennai, Tamil Nadu 605111', '08003861911', 'Active', '', '2016-06-09 12:42:28'),
(336, 'National Chemical Laboratory', 'Dr. Homi Bhaba road,Pashan ,Pune', '02025902000', 'Active', '', '2016-06-15 13:10:45'),
(337, 'BARC Mumbai', 'North Gate, Trombay, Mumbai : 400094', '02225505050', 'Active', '', '2016-06-29 15:28:56'),
(338, 'Center of fire Explosive and Environment safety', 'Brig SK Mazumdar Marg, Timarpur, New Delhi Delhi,Delhi 110007', '01123907102', 'Active', '', '2016-06-29 17:28:17'),
(339, 'Surya roshni', '1, Padma Tower, Rajendra Place, New Delhi, Delhi 110008', '01125810093', 'Active', '', '2016-06-29 17:32:25'),
(340, 'Halonix India Pvt Ltd', 'Meroform India Pvt. Ltd, Noida, Uttar Pradesh 201305', '01204756180', 'Active', '', '2016-06-29 17:39:02'),
(341, 'Dixon technologies india pvt ltd', 'B-14/15, Dadri Road, Phase-II, Block C, Noida, Uttar Pradesh 201305', '01204737200', 'Active', '', '2016-06-29 17:40:15'),
(342, 'landis gyr ltd', 'C-48, Sector 57 Rd, Sector 57, Noida, Uttar Pradesh 201307', '01206152000', 'Active', '', '2016-06-29 17:41:13'),
(343, 'Barco electronic systems', 'A-38A, B &amp;amp; C, Sector-64, Gautam Budh Nagar, Noida, Uttar Pradesh 201301', '01204020309', 'Active', '', '2016-06-29 17:42:49'),
(344, 'NIT Delhi', 'A-7, Institutional Area, Near Satyawadi Raja Harish Chandra Hospital, Narela, New Delhi, Delhi 110040', '01127787502', 'Active', '', '2016-06-29 18:04:31'),
(345, '7BRD', 'Tughlakabad,Delhi', '01126047980', 'Active', '', '2016-07-01 13:16:36'),
(346, 'Minda Corporation Limited', 'E-5/2 â€“ Chakan Industrial Area, Phase â€“III MIDC Nanekarwadi , Pune-410501', '02135661509', 'Active', '', '2016-07-02 10:29:16'),
(347, 'Army Institute of Technology', 'Army Institute of Technology,Dighi, Pune', '02027157612', 'Active', '', '2016-07-07 12:08:00'),
(348, 'Joint Cipher Bureau', 'C-106, Defence Colony, Delhi - 110024', '01124351127', 'Active', '', '2016-07-13 10:52:11'),
(349, 'DRDO Delhi', 'Rajaji Marg, Vijay Chowk Area, Central Secretariat, New Delhi, Delhi 110004', '01123007002', 'Active', '', '2016-07-13 10:59:20'),
(350, 'Manipal Hospitals', '98, Opposite, Leela Palace Rd, Kodihalli, Bengaluru, Karnataka 560017', '18003001400', 'Active', '', '2016-07-28 06:13:02'),
(351, 'R B Strut Engineering', 'Thane', '', 'Active', '', '2016-07-28 06:14:14'),
(352, 'IIT  Powai', 'Post Box No: 8448,Mumbai, Maharashtra, India, Pincode - 400076', '02225727100', 'Active', '', '2016-07-30 06:16:38'),
(353, 'Dr Reddys Laboratories Ltd', 'Bachupally Village, Qutubullapur Mandal, Ranga Reddy District , Hyderabad', '04044346200', 'Active', '', '2016-08-01 05:20:10'),
(354, 'ISRO Satellite Centre', 'Satellite Communication Services Provider Old Airport Rd, Vimanapura Post, Jeevanbheema nagar', '08025084021', 'Active', '', '2016-08-01 11:21:44'),
(355, 'Jantics India', 'E - 25, SIDCO Industrial Estate, Kurichi, Coimbatore, Tamil Nadu 641021', '04222672800', 'Active', '', '2016-08-01 11:23:38'),
(356, 'Robert Bosch Engineering and Business Solutions Li', 'CHIL-SEZ, Keeranatham Village ,641 035 Tamil Nadu, Coimbatore ,India', '08067521111', 'Active', '', '2017-02-06 01:49:26'),
(357, 'ELGI EQUIPMENTS LIMITED', 'Trichy Road, Singanallur, Coimbatore â€“ 641005, Tamilnadu, India.', '4222589555', 'Active', '', '2016-08-01 11:31:18'),
(358, 'ELGI ULTRA INDUSTRIES LIMITED', 'India House, 1443/1, Trichy Road, Coimbatore - 641 018 Tamil Nadu.', '04222304141', 'Active', '', '2016-08-01 11:32:22'),
(359, 'LNG Petronet Limited', 'Kochi Site Office ,Survey No:347 ,Puthuvypu, PO: 682508 ,Kochi, INDIA', '04842502259', 'Active', '', '2016-08-01 11:34:20'),
(360, 'Pricol Pune Pvt Ltd', 'S.No 1065 &amp;amp; 1066 , Pirangut, Tal: Mulshi , Pune -412115', '02039115074', 'Active', '', '2016-08-10 05:12:01'),
(361, 'Emerson Innovation Centre', 'Plot No. 23 Rajiv Gandhi Infotech Park. Hinjewdi , Phase-II Pune â€“ 411057', '02042001223', 'Active', '', '2016-08-10 05:17:56'),
(362, 'Defence Institute of Advanced Technology', 'Girinagar, Pune -411025', '02024304021', 'Active', '', '2016-08-10 05:52:52'),
(363, 'Defence Institute of Physiology and Allied Science', 'Lucknow Rd, Timarpur, New Delhi, Delhi 110054', '01123883141', 'Active', '', '2016-08-11 06:05:40'),
(364, 'Defence Terrain Research Laboratory', 'Metcalfe House, Delhi -110 054', '', 'Active', '', '2016-08-11 06:07:44'),
(365, 'Bharat Electronics Limited Gaziabad', 'Sahibabad, Maharajpur, Ghaziabad, Uttar Pradesh 201010', '09650529530', 'Active', '', '2016-08-11 06:09:15'),
(366, 'Napino Auto &amp;amp; Electronics', 'Plot No. 7, Sector 3, IMT Manesar, Gurgaon, Haryana 122050', '01244177200', 'Active', '', '2016-08-11 06:18:17'),
(367, 'Minda Industries Ltd.', 'Village - Nawada, Fatehpur P.O. - SikanderPur Badda IMT Manesar Distt. - Gurgaon Haryana - 122004, India', '1242290693', 'Active', '', '2016-08-11 06:22:35'),
(368, 'Intex Technologies Ltd.', 'B-26, Hosiery Complex, Sector-83,Phase 2,Noida', '1204040200', 'Active', '', '2016-08-11 06:25:20'),
(369, 'Deki Electronics Ltd.', 'B-20 sector 58 Noida 201301', '1202585457', 'Active', '', '2016-08-11 06:26:48'),
(370, 'Gupta Power Infrastructure Limited', 'Radisson Blu Complex,K.M. Trade tower,Kaushambi,Gaziabad', '1204224130', 'Active', '', '2016-08-11 06:29:53'),
(371, 'Scientific Analysis Group', 'Metcalfe House, Delhi - 110 054', '01123812683', 'Active', '', '2016-08-11 06:36:19'),
(372, 'Panasonic India', '12th Floor, Ambience Tower, Ambience Island, NH 8, Lane Number V-40, DLF Phase 3, Sector 24, Gurgaon, Haryana 122002', '01244751300', 'Active', '', '2016-08-11 06:40:24'),
(373, 'Doordarshan', 'DTH Earth Station, Todapur, New Delhi', '01125842440', 'Active', '', '2016-08-11 06:54:28'),
(374, 'Goldwyn Limited', '15 &amp;amp; 16, Nsez, Noida, Uttar Pradesh 201305', '01204712400', 'Active', '', '2016-08-11 09:17:34'),
(375, 'Karwar Naval Base', 'Karwar Naval Karwar Taluk, Uttara Kannada District, Karnataka, Pincode - 581308', '09353079002', 'Active', '', '2016-08-12 05:24:46'),
(376, 'SAMEER', 'I.I.T. Campus, Powai, Post Box No: 8448 Mumbai, Maharashtra, India Pincode - 400076', '02225727100', 'Active', '', '2016-08-12 05:25:55'),
(377, 'ABB India', 'Nelamangala manufacturing factory ,88/3-88/6 Basavanahalli Village ,Kasaba Hobli, Bangalore North, Nelamangala ,562123', '', 'Active', '', '2017-02-06 01:26:12'),
(378, 'CSIR-Indian Institute of Chemical Technology', 'CSIR-Indian Institute of Chemical Technology Uppal Road, Tarnaka, Hyderabad - 500 007 Telangana State, India', '0914027160', 'Active', '', '2016-08-26 08:40:30'),
(379, 'Swastik Poly Prints Pvt Ltd', 'GIDC, Sachin, Surat, Gujarat', '9925235733', 'Active', '', '2016-08-29 06:19:32'),
(380, 'Volkswagen India', 'Chakan, Pune', '9764997827', 'Active', '', '2016-08-29 11:05:22'),
(381, 'Transcon Systems', 'Kapnoor, Kalaburagi, Karnataka', '9341869518', 'Active', '', '2016-08-29 11:06:16'),
(382, 'Electronics Corporation of India Limited', 'PO.ECIL, HYDERABAD - 500 062.', '04027182273', 'Active', '', '2016-09-03 06:35:47'),
(383, 'Hindustan Aeronautics Limited Hyderabad', 'Avionics Division, HAL Township, Bala Nagar, Hyderabad, Telangana 500042', '04023878978', 'Active', '', '2016-09-03 06:51:37'),
(384, 'ITI Limited', 'ITI Limited  Doorbhash Nagar, Rae Bareli-229010, UP, India', '05352287221', 'Active', '', '2016-09-10 06:01:11'),
(385, 'Modern Equipments', 'M 100, 5 &amp;amp; 6, 1st floor, MIDC, Ambad, Nashik 422010', '02532383561', 'Active', '', '2016-09-12 04:30:30'),
(386, 'NRSC- National Remote Sensing Centre', 'CRF Colony, Balanagar, Hyderabad, Telangana 500 042', '04023884050', 'Active', '', '2016-09-12 04:33:44'),
(387, 'Mahindra &amp;amp; Mahindra', 'Mouze Talegaon, Igatpuri, Nashik', '9011575511', 'Active', '', '2016-09-12 04:34:05'),
(388, 'DMDE Defence Machinery Developement Establishment', 'Bowenpally, Secunderabad, Telangana 500 009', '', 'Active', '', '2016-09-12 04:34:34'),
(389, 'ADRIN-Advanced Data Processing Research Institute', 'Govt Of India  203, Akbar Road, Tarbund, Bowenpally, Hyderabad-500 011.', '', 'Active', '', '2016-09-12 04:35:24'),
(390, 'NCCM', 'National Centre for Compositional Characterisation of Materials (CCCM), NFC, Moula Ali, Secunderabad, Telangana 500062', '', 'Active', '', '2016-09-12 04:36:28'),
(391, 'ABB Nashik', 'MIDC Satpur, Nashik', '9404710211', 'Active', '', '2016-09-12 04:37:13'),
(392, 'Honda Motorcycle &amp;amp; Scooter India Pvt. Ltd.', 'Commercial Complex II, Sector: 49-50 Golf Course Extension Road, Gurgaon, Haryana (122018) India', '01246712800', 'Active', '', '2016-09-13 05:03:00'),
(393, 'Brose India Automotive Systems Pvt Ltd', 'Office no. 202, 2nd Floor Survey No. 19 20, Panchshil Tech Park,, Hinjewadi, Pune, Maharashtra 411057', '02030437800', 'Active', '', '2016-09-13 09:11:27'),
(394, 'Brose India Automotive Systems Pvt Ltd manufacturi', 'Survey No. 255,Village Hinjewadi, Taluka: Mulshi District: Pune Maharashtra (State) Pin: 411 057 India', '2030438028', 'Active', '', '2016-09-13 09:13:24'),
(395, 'Phoenix Contact India Pvt Ltd', '404/405 , CITY POINT , Dhole Patil Road , Pune- 411001,Maharashtra , India', '02030581224', 'Active', '', '2016-09-17 05:44:01'),
(396, 'Nokia India', 'Bangalore', '8105389020', 'Active', '', '2016-09-17 05:57:30'),
(397, 'Endress Hauser India Automation Instrumentation P', 'M-192,MIDC,Waluj ,431136 Aurangabad MH', '8888823995', 'Active', '', '2016-09-26 09:03:03'),
(398, 'Hella India Automotive Pvt Ltd.', '2nd &amp;amp; 3rd Floor. \\&amp;quot;NANO SPACE\\&amp;quot;. Baner. 411 045 Pune,', '9623878159', 'Active', '', '2016-09-26 09:04:33'),
(399, 'TUV INDIA PVT LTD', '203 &amp;amp; 204, Anjani Palladium Survey No. 126/1, Opp Kapil Estate Baner Main Road, Baner Pune- 411 045', '9898000204', 'Active', '', '2016-09-26 09:07:13'),
(400, 'Bharat Electronics Ltd.', 'NDA Pashan Road  Pune', '9049782177', 'Active', '', '2016-09-26 09:08:42'),
(401, 'Bharat Electronics Ltd.', 'NDA Pashan Road  Pune', '9049782177', 'Active', '', '2016-09-26 09:08:50'),
(402, 'Ducati Energia Pvt. Ltd.', 'G 92 D Iii Block, , Midc, Chinchwad, 411019 â€“ Pune', '9860921922', 'Active', '', '2016-09-26 09:09:52'),
(403, 'Hindustan Aeronautics Ltd', 'Aircarft Division , Nashik. PO Ojhar Township,', '02550271962', 'Active', '', '2016-09-26 09:11:45'),
(404, 'PRAGUNA POWER SYSTEMS PVT LTD.', '4-1-216/132, St No 4, Lane No 2, Karthikeya Nagar, Nacharam,   Hyderabad- 500 076.', '8790949481', 'Active', '', '2016-09-27 06:28:30'),
(405, 'Knorr Bremse  India Pvt Ltd', '276,Village Mann, Hinjewadi, Phase-II, Taluka Mulshi, Pune, Maharashtra 411057', '02066746800', 'Active', '', '2016-10-03 07:08:22'),
(406, 'Terminal Ballistics Research Laboratory', 'Sector-30, Chandigarh-160003', '', 'Active', '', '2016-10-05 12:20:24'),
(407, 'Welspun India Ltd.', 'Survey No. 76, Village Morai,  Vapi, District Valsad, Gujarat 396 191, INDIA', '2602437437', 'Active', '', '2016-10-14 11:39:15'),
(408, 'Sava Health care', 'Lalwani plaza, Wing B, Viman nagar, Airport road', '9764584466', 'Active', '', '2016-10-15 05:23:37'),
(409, 'Sahajanand Laser', 'E-2, Electronics Estate, G.I.D.C., Sector-26,\r\nGANDHINAGAR - 382028, Gujarat, INDIA.', '9099063943', 'Active', '', '2016-10-15 05:25:08'),
(410, 'Prerana Agencies', '16 Sayali Laxmi Nagar, Hpt College Road, Canada Corner, Canada Corner, Nashik, Maharashtra 422005', '9422249223', 'Active', '', '2016-10-15 05:30:50'),
(411, 'NIT Hamirpur', 'NIT Hamirpur, Anu, Hamirpur, Himachal Pradesh 177005', '0197222383', 'Active', '', '2016-10-15 05:33:01'),
(412, 'Research Centre India', 'RCI Road, Balapur Post, Hyderabad, Telangana 500005', '9440927799', 'Active', '', '2016-10-15 05:51:35'),
(413, 'L&amp;amp;THeavy Engineering Coimbatore', 'Precision Manufacturing Facility,\r\nL&amp;amp;T Campus, Malumichampatti,\r\nCoimbatore - 641 021.', '9629826298', 'Active', '', '2016-10-15 10:37:28'),
(414, 'Sharang corporation', '106, Laxmi Plaza, Opp. Alfa Laval, Dapodi, \r\n Pune - 411012', '9021117449', 'Active', '', '2016-10-24 10:24:01'),
(415, 'CENTRE FOR ADVANCED SYSTEMS DRDO', 'BM Site, Yedgarpalli(V), Keesara(M), Hyderabad- 501 301.', '7382327406', 'Active', '', '2016-10-24 10:32:18'),
(416, 'Tata Technologies Limited', '25 Rajiv Gandhi Infotech Park, Hinjewadi  Pune-411057', '02066529287', 'Active', '', '2016-10-24 10:34:54'),
(417, 'Centre for Development of Advanced Computing (CDAC', 'Panchvati,Pashan,Pune', '02025503108', 'Active', '', '2016-10-24 10:35:21'),
(418, 'Keetronics', 'Devgiri Building, 2nd Floor, , Kothrud Industrial Estate, Behind Sangam Press, Kothrud, Pune, Maharashtra 411038', '2067257100', 'Active', '', '2016-10-24 10:53:35'),
(419, 'Prettl Electronics India Pvt.Ltd', 'Gat no. 433, Shed no. 1 &amp;amp; 2, Near Weikfield Village, Lonikand, Pune, 412216', '2066789751', 'Active', '', '2016-10-24 11:43:10'),
(420, 'VIP Dental Lab Pvt Ltd', '30/1, 2nd Floor, 7th Cross Rd, 2nd Main Road, NR Colony, Basavanagudi, Bengaluru, Karnataka 560019', '0966357259', 'Active', '', '2016-10-24 11:55:28'),
(421, 'Stuken', 'Sushil Apartment - 17, Survey no. 35/2\r\nNear Sawant Petrol Pump, Tingare Nagar\r\nVishrantwadi, Pune - 411 015\r\nIndia', '9503342729', 'Active', '', '2016-10-24 12:04:26'),
(422, 'Weapons And Electronics Systems Engg Estb WESEE', 'R.K.Puram , Delhi', '', 'Active', '', '2016-10-26 06:18:38');
INSERT INTO `tbl_company` (`Id`, `CName`, `CAddress`, `CPhoneNo`, `CDisplayStatus`, `Isdelete`, `RegTime`) VALUES
(423, 'Garg Associates Pvt Ltd', 'D 3 , Meerut Road Industrial Area - 3, Rd Number 1, Sector 21, Meerut Road Industrial Area, Ghaziabad, Uttar Pradesh 201003', '01202712128', 'Active', '', '2016-10-26 06:39:19'),
(424, 'Defence Bioengineering and Electromedical Laborato', 'Ministry of Defence, 1718 Vimanapura Post, Bengaluru, Karnataka 560017', '08025233060', 'Active', '', '2016-10-27 12:20:46'),
(425, 'National Institute of Oceanography', 'Raj Bhavan Rd, Dona Paula, Goa 403004', '08322456450', 'Active', '', '2016-11-09 11:32:51'),
(426, 'Siemens India', 'L-6, Verna Industrial Estate, Verna, Goa 403722', '08326723295', 'Active', '', '2016-11-09 11:33:35'),
(427, 'Goa Shipyard Limited', 'VASCO -DA -GAMA ,GOA 403802', '8322512152', 'Active', '', '2016-11-09 11:36:31'),
(428, 'Loyal Textiles Mills Ltd', 'New No.83, 1st Main Road,R A Puram, Chennai 600 028.Tamilnadu, India.', '4442277374', 'Active', '', '2016-11-15 05:18:55'),
(429, 'Nokia Solutions and Networks India Pvt Ltd', 'Plot no OZ-08, Sipcot Industrial park, Hi Tech SEZ Panruti Village, Oragadam, Kanchipuram-602105, Tamilnadu', '44671117224', 'Active', '', '2016-11-15 05:27:40'),
(430, 'EagleBurgmann', 'Hadapsar midc', '2026812901', 'Active', '', '2016-12-02 12:20:24'),
(431, 'Suzlon Generators', 'Chakan Midc', '02135671141', 'Active', '', '2016-12-02 12:26:57'),
(432, 'Aeronautical Development Establishment', 'Suranjan Das Road, CV Raman Nagar Bangalore - 560 093', '8025057002', 'Active', '', '2016-12-03 07:41:46'),
(433, 'Defence Bio-Engineering &amp;amp; Electro Medical Laborato', 'Post Box No.9326,CV Raman Nagar,Bangalore - 560 093', '8025280692', 'Active', '', '2016-12-03 07:43:40'),
(434, 'Center for Artificial Intelligence &amp;amp; Robotics', 'DRDO Complex CV Raman Nagar Bangalore - 560 093', '8025342646', 'Active', '', '2016-12-03 07:46:04'),
(435, 'National Aerospace Laboratories', 'Wind Tunnel Rd, Ambedkar Nagar, Kempapura, Bellandur, Bengaluru, Karnataka 560037', '8025086040', 'Active', '', '2016-12-03 07:53:50'),
(436, 'Continental Automotive Components (India) Pvt. Ltd', 'Gold Hill Supreme Parc, Electronic City Phase II,\r\nElectronic City, Bengaluru, Karnataka 560100', '8066796000', 'Active', '', '2016-12-03 07:56:07'),
(437, 'Asteria Aerospace Pvt. Ltd', '3rd floor, Samhitha Plaza, 80 Feet Rd, Defence Colony, Indiranagar, Bengaluru, Karnataka 560038', '8040955058', 'Active', '', '2016-12-03 07:58:32'),
(438, 'Apollo fire', 'Prestige Shantiniketan, Gate No. 2, Tower C, 7th Floor, Whitefield Main Road, Mahadevpura, Bengaluru, Karnataka â€“ 560 048', '8067475340', 'Active', '', '2016-12-03 08:00:02'),
(439, 'GAETEC Hyderabad', 'Vignyana Kancha Post. Hyderabad-500069.', '04024589206', 'Active', '', '2016-12-26 07:38:03'),
(440, 'Chemetall Rai India Pvt ltd', 'Gat No. 569, Pune Nagar Road\r\n412 207 Pune', '02137618000', 'Active', '', '2016-12-12 10:23:48'),
(441, 'ITI BANGALORE', 'Doorvani Nagar, ITI Bhavan,K.R Puram, Bangalore Urban, Bengaluru, Karnataka 560016', '0802565134', 'Active', '', '2016-12-12 11:19:41'),
(442, 'BEL PUNE', 'N D A Road, Pashan, Pashan, Pune, Maharashtra 411021', '0202290383', 'Active', '', '2016-12-12 12:05:32'),
(443, 'ITI Raebareli', 'Doorbhash Nagar,\r\nRae Bareli-229010,\r\nUP India', '0535228722', 'Active', '', '2016-12-13 06:43:23'),
(444, 'Neogen Chemicals ltd', 'Plot no - 43, TTCMIDC  Nr Nelco bus stop Mahape Navi mumbai 400710', '02227781372', 'Active', '', '2016-12-13 06:54:34'),
(445, 'NPCIL', '16th Floor, Centre - I, World Trade Centre, \r\nCuffe Parade, Colaba, Mumbai - 400 005, India.', '02222182171', 'Active', '', '2016-12-13 07:07:54'),
(446, 'Mahindra &amp;amp; Mahindra Ltd', 'Mouze Talegaon Igatpuri , Nashik 422403', '2536613016', 'Active', '', '2016-12-13 08:17:16'),
(447, 'TERI-', 'Darbari Seth Block ,IHC Complex ,Lodhi Road,New Delhi', '01124682100', 'Active', '', '2016-12-13 11:08:01'),
(448, 'Porus Laboratories Private Limited', 'K.K.R.Square, Flat No.402 &amp;amp; 403,\r\nPlot No.5,6,15 &amp;amp; 16, Kavuri Hills,\r\nRoad No.36, Jubliee Hills,\r\nHyderabad - 500 033. Telangana', '04040118098', 'Active', '', '2016-12-13 11:52:32'),
(449, 'GMRT', 'Khodad, Narayangaon, Tal-Junnar, Maharashtra 410504', '02132252112', 'Active', '', '2016-12-14 08:54:59'),
(450, 'Alpha Design Technologies Pvt Ltd', 'NSIC Marketing And Business Hub, APHB Colony, Musi Nagar, Moula Ali, Secunderabad, Telangana 500 040', '', 'Active', '', '2016-12-26 08:52:10'),
(451, 'Emtac Laboratories Pvt Ltd', '203 , NSIC Business Park, Kamala Nagar, Kushaiguda, Hyderabad, Telangana 500 062', '', 'Active', '', '2016-12-26 08:52:37'),
(452, 'Salicylates and Chemicals Pvt Ltd', 'A-25, Road No 18, Nacharam, Hyderabad, Telangana 500 076', '', 'Active', '', '2016-12-26 08:53:08'),
(453, 'RES India', 'IDA Jeedimetla, Chinthal, Jeedimetla, Hyderabad, Telangana 500 055', '', 'Active', '', '2016-12-26 08:53:34'),
(454, 'MEDHA SERVO DRIVES', 'Jodimetla Cross Road, Ghatkesar, Near Pocharam Village Main Road, Hyderabad, Telangana 500 088', '', 'Active', '', '2016-12-26 08:53:57'),
(455, 'AVRA Labs Pvt Ltd', 'Plot No. 9/15, Road No. 6, IDA Nacharam, Hyderabad, Telangana 500 076', '', 'Active', '', '2016-12-26 08:54:19'),
(456, 'Izen Biosciences', 'Plot no 28/1/11b, Part A1, Industrial Development Area, Nacharam, Uppal Mandal, Ranga Reddy, Hyderabad, Telangana 500 076', '', 'Active', '', '2016-12-26 08:55:01'),
(457, 'Defence Research and Development Laboratory', 'Kanchan Bagh, Hyderabad, Telangana 500066', '', 'Active', '', '2016-12-26 10:21:49'),
(458, 'Ordnance Factory', 'Ordnance Factory Medak, Yeddumailaram(PO), Sangareddy(Dist), Telangana-502 205', '', 'Active', '', '2016-12-26 10:22:40'),
(459, 'Bharat Dynamics Limited Bhanur', 'Bhanur, Patancheru Mandal,Medak Dist. Telangana (State) -502 305', '', 'Active', '', '2016-12-26 10:23:19'),
(460, 'Freudenberg Filteration Technologies India Pvt ltd', 'Gate no 8837 pune nagar road sanaswadi 412208', '02137615318', 'Active', '', '2016-12-26 11:38:02'),
(461, 'BHARAT HEAVY ELECTRICALS LIMITED', 'Corporate R&amp;amp;D Division, Vikasnagar, Hyderabad- 500 093', '9985306588', 'Active', '', '2016-12-28 09:15:07'),
(462, 'Indian Oil Corporation R and D Centre', 'Sector 13, Old Faridabad, Faridabad, Haryana 121006', '01294005409', 'Active', '', '2017-02-10 04:29:05'),
(463, 'YMCA University Of Science and Technology', 'NH-2, Sector 6, Mathura Road, Opp. Sanjay Memorial Industrial Estate, Faridabad, Haryana 121006', '01292310126', 'Active', '', '2017-02-10 04:22:34'),
(464, 'Prakant Electronics Pvt. Ltd', '5B, SMIE, 20/2,  Mathura Road, Faridabad - 121006 India', '01294003121', 'Active', '', '2017-02-04 05:13:55'),
(465, 'TELECOMMUNICATION ENGINEERING CENTER', 'Gate No. 5, Khurshid Lal Bhawan, Janpath, New Delhi 110001. INDIA', '1123355028', 'Active', '', '2017-02-04 05:19:27'),
(466, 'Hindustan Aeronautics limited Kanpur', 'Chakeri, Kanpur, Uttar Pradesh 208008', '05122452160', 'Active', '', '2017-02-04 05:30:01'),
(467, 'DMSRDE Kanpur', 'Research &amp;amp; Development Establishment (DMSRDE) DMSRDE Post Office GT Road, Kanpur-208 01', '05122450404', 'Active', '', '2017-02-04 05:33:05'),
(468, 'Dover tech', 'Bagmane Laurel,\r\nBlock-C,Level 02,\r\nBagmane Tech Park,\r\nC.V. Raman Nagar,\r\nBangalore- 560 093', '8041123421', 'Active', '', '2017-02-04 11:39:57'),
(469, 'Medtronic India Development Centre', 'MIDC Prestige Shantiniketan,\r\n\r\nTower â€“ B, 11th floor,\r\n\r\nITPC, White Field,\r\n\r\nBengaluru â€“ 560048', '8067157300', 'Active', '', '2017-04-03 10:27:04'),
(470, 'C-DOT', 'C-DOT Campus, Electronic City Phase-I, Hosur Road, Bengaluru-560100', '8028520050', 'Active', '', '2017-02-04 11:57:30'),
(471, 'Tymtix Technologies', '191, 3rd Floor, KNB Mansion, Indiranagar Double Rd, Bengaluru, Karnataka 560038', '08025251111', 'Active', '', '2017-02-04 12:00:35'),
(472, 'Robert Bosch Engineering and Business Solutions br', '123, Industrial Layout\r\nHosur Road, Koramangala\r\nBangalore 560 095', '8066575757', 'Active', '', '2017-02-06 01:51:44'),
(473, 'National Institue of Solar Energy', 'Gwal Pahari,Gurgaon-Faridabad Road,Gurgaon 122003', '1242579206', 'Active', '', '2017-02-10 05:49:47'),
(474, 'Bharat Electronics limited Kotdwara', 'B E L Campus, Kotdwara, Uttarakhand 246149', '07888552637', 'Active', '', '2017-02-10 06:00:00'),
(475, 'GE Healthcare', 'Export Promotion Industrial Park\r\nNo 60 Whitefield Road, Hoodi Village,\r\nBangalore 560052', '8040785129', 'Active', '', '2017-04-03 09:52:36'),
(476, 'Cellcomm Solutions Ltd', '52/44, Ganesha Block, 2nd Cross, 8th Main, Mahalakshmi Layout, Mahalakshmi Layout, Bengaluru, Karnataka 560096', '8023497581', 'Active', '', '2017-04-03 10:25:36'),
(477, 'John F. Welch Technology Centre GE', 'Plot #122, Export Promotion Industrial Park, Phase 2, Hoodi Village, Whitefield, Bengaluru, Karnataka 56006', '8040881000', 'Active', '', '2017-04-03 10:28:17'),
(478, 'Automation &amp;amp; Control Technologies', 'Devgiri, Unit No. 2-D, Kothrud Industrial Estate, BEhind Sangam Press, Kothrud', '9822302390', 'Active', '', '2017-04-05 09:55:07'),
(479, 'Armacell India Private Ltd', 'Gat No. 744 &amp;amp; 745, Pune- Nagar Road, Village Lonikand, Maharashtra 412216', '02066782000', 'Active', '', '2017-04-27 06:21:34'),
(480, 'HBL Power Systems Ltd', 'Survey No 351, Thumkunta Village, Shameerpet Mandal, Ranga Reddy Dist, Hyderabad- 500 078, TS, India', '8096907514', 'Active', '', '2017-05-09 05:13:32'),
(481, 'Advanced Systems Laboratory', 'Kanchanbagh, Hyderabad- 500 058, TS, India', '8500537431', 'Active', '', '2017-05-12 05:15:02'),
(482, 'Bajaj Electrcals', 'Gate no 603, Chakan Talegaon Road', '02026052889', 'Active', '', '2017-07-15 10:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Course` int(11) NOT NULL,
  `ReferredBy` varchar(100) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `City` varchar(150) NOT NULL,
  `Phone` varchar(150) NOT NULL,
  `Whatsapp` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Qualification` varchar(150) NOT NULL,
  `PassingYear` varchar(100) NOT NULL,
  `Experience` varchar(150) NOT NULL,
  `Position` varchar(150) NOT NULL,
  `Companyname` varchar(100) NOT NULL,
  `Visitdate` varchar(150) NOT NULL,
  `Reason` text NOT NULL,
  `CouselorsComments` text NOT NULL,
  `Furtheraction` text NOT NULL,
  `Type` int(11) NOT NULL,
  `Source` int(11) NOT NULL,
  `OtherSource` text NOT NULL,
  `Priority` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  `AssignedTo` int(11) NOT NULL,
  `RegTime` datetime NOT NULL,
  `UpdateTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=403 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`Id`, `Course`, `ReferredBy`, `Name`, `Occupation`, `City`, `Phone`, `Whatsapp`, `Email`, `Qualification`, `PassingYear`, `Experience`, `Position`, `Companyname`, `Visitdate`, `Reason`, `CouselorsComments`, `Furtheraction`, `Type`, `Source`, `OtherSource`, `Priority`, `Status`, `AssignedTo`, `RegTime`, `UpdateTime`) VALUES
(399, 19, 'Test', 'ANISH DESHPANDE', 'TE student', 'Pune', '9822968870', '9822968870', 'aneesh_rm@yahoo.com', 'BE', '', '', '', '', '15-11-2017', 'Testing Reason', 'tttt', 'tttt', 17, 3, '', 'Low', 24, 1, '2017-11-16 11:25:08', '2017-11-16 11:25:08'),
(402, 19, 'Test', 'ANISH DESHPANDE', 'TE student', 'Pune', '9822968870', '9822968870', 'aneesh_rm@yahoo.com', 'BE', '', '', '', '', '15-11-2017', 'Testing Reason', 'tttt', 'tttt', 17, 3, '', 'Normal', 21, 3, '2017-11-16 01:08:25', '2017-11-16 13:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiryupdates`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiryupdates` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `EnquiryId` int(10) NOT NULL,
  `EnquiryType` varchar(100) NOT NULL,
  `EnquiryStatus` varchar(100) NOT NULL,
  `Quote` varchar(25) NOT NULL,
  `TodaysUpdate` text NOT NULL,
  `Upload` text NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow_up`
--

CREATE TABLE IF NOT EXISTS `tbl_follow_up` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EnqId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CompanyId` int(11) NOT NULL,
  `TodaysUpdate` varchar(500) NOT NULL,
  `NextUpdateDate` date NOT NULL,
  `Amount` int(100) NOT NULL,
  `File` varchar(150) NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_follow_up`
--

INSERT INTO `tbl_follow_up` (`Id`, `EnqId`, `UserId`, `CompanyId`, `TodaysUpdate`, `NextUpdateDate`, `Amount`, `File`, `RegTime`) VALUES
(1, 399, 1, 0, 'Testing Follow Up', '2017-11-17', 0, '', '2017-11-16 11:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loginmaster`
--

CREATE TABLE IF NOT EXISTS `tbl_loginmaster` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `AccessLevel` varchar(100) NOT NULL,
  `Status` enum('P','D') NOT NULL,
  `LastAccessTime` datetime NOT NULL,
  `RegDate` datetime NOT NULL,
  `PassUpdateDate` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_loginmaster`
--

INSERT INTO `tbl_loginmaster` (`Id`, `Name`, `Email`, `Password`, `AccessLevel`, `Status`, `LastAccessTime`, `RegDate`, `PassUpdateDate`) VALUES
(1, 'Hemant', 'hemant@dimakhconsultants.com', 'dcpl', 'Super Admin', 'P', '2016-05-12 03:56:12', '2015-09-30 00:00:00', '2015-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager`
--

CREATE TABLE IF NOT EXISTS `tbl_manager` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `AccessLevel` varchar(50) NOT NULL,
  `DisplayStatus` enum('Active','Deactive') NOT NULL,
  `LastAccessTime` datetime NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`Id`, `Email`, `Password`, `Name`, `ContactNumber`, `AccessLevel`, `DisplayStatus`, `LastAccessTime`, `RegTime`) VALUES
(1, 'aneesh@dimakhconsultants.com', 'dcpl@', 'Aneesh', '9822454556', 'Admin', 'Active', '2017-11-17 03:33:30', '2017-11-16 16:35:32'),
(3, 'ade@infinisolutions.in', 'ade2017', 'Ade sir', '9855555555', 'Admin', 'Active', '2017-11-17 03:33:30', '2017-11-16 11:44:49'),
(4, 'anuradha@infinisolutions.in', 'anuradha2017', 'Anuradha Mam', '9833333334', 'Executive', 'Active', '2017-11-17 03:33:30', '2017-11-16 11:47:39'),
(5, 'sameer@infinisolutions.in', 'sameer2017', 'Sameer Sir', '9844444434', 'Admin', 'Active', '2017-11-17 03:33:30', '2017-11-16 11:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ongoing_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_ongoing_projects` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `SubCategory` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DisplayStatus` enum('Publish','Draft') NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `SubCategory_2` (`SubCategory`,`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_ongoing_projects`
--

INSERT INTO `tbl_ongoing_projects` (`Id`, `SubCategory`, `Name`, `DisplayStatus`, `RegTime`) VALUES
(1, '', 'PGP 4th Batch', 'Publish', '2016-05-09 00:00:00'),
(2, '', 'PGP 5th Batch', 'Publish', '2016-05-09 00:00:00'),
(3, '', 'Estimation', 'Publish', '2016-05-09 00:00:00'),
(4, '', 'Estimation using Newton', 'Publish', '2016-05-09 00:00:00'),
(5, '', 'Excel', 'Publish', '2016-05-09 00:00:00'),
(6, '', 'Estimation & Planning using MSP', 'Publish', '2016-05-09 00:00:00'),
(7, '', 'Estimation & Planning using Primavera', 'Publish', '2016-05-30 00:00:00'),
(8, '', 'MSP Basic', 'Publish', '2017-11-16 10:18:14'),
(9, '', 'MSP Advance', 'Publish', '2017-11-16 10:18:14'),
(10, '', 'Primavera Basic', 'Publish', '2017-11-16 10:18:14'),
(11, '', 'Primavera Advance', 'Publish', '2017-11-16 10:18:14'),
(12, '', 'Primavera Web', 'Publish', '2017-11-16 10:18:14'),
(13, '', 'PMP', 'Publish', '2017-11-16 10:18:14'),
(14, '', 'CAPM', 'Publish', '2017-11-16 10:18:14'),
(15, '', 'Revit Architecture', 'Publish', '2017-11-16 10:18:14'),
(16, '', 'Revit MEP', 'Publish', '2017-11-16 10:18:14'),
(17, '', 'Revit Structure', 'Publish', '2017-11-16 10:18:14'),
(18, '', 'Revit All in one', 'Publish', '2017-11-16 10:24:22'),
(19, '', 'Nevisworks for BIM', 'Publish', '2017-11-16 10:24:22'),
(20, '', 'BIM Full', 'Publish', '2017-11-16 10:24:22'),
(21, '', 'Quality Control', 'Publish', '2017-11-16 10:24:22'),
(22, '', 'MEP Engineering', 'Publish', '2017-11-16 10:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE IF NOT EXISTS `tbl_region` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`Id`, `Title`) VALUES
(1, 'Delhi NCR'),
(2, 'Bangalore'),
(3, 'Chennai'),
(4, 'AP/Telangana'),
(5, 'Gujrat and MP'),
(6, 'Pune and other Maharashtra'),
(7, 'Mumbai'),
(8, 'Goa'),
(9, 'Kolkata'),
(10, 'Kerala'),
(11, 'Coimbatore');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminders`
--

CREATE TABLE IF NOT EXISTS `tbl_reminders` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ReminderDate` date NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_reminders`
--

INSERT INTO `tbl_reminders` (`Id`, `UserId`, `Title`, `Description`, `ReminderDate`, `RegTime`) VALUES
(1, 1, 'Test Reminder', 'This is Test Reminder', '2017-11-17', '2017-11-16 11:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_codes`
--

CREATE TABLE IF NOT EXISTS `tbl_site_codes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) DEFAULT NULL,
  `Key` varchar(50) DEFAULT NULL,
  `Value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_site_codes`
--

INSERT INTO `tbl_site_codes` (`Id`, `Category`, `Key`, `Value`) VALUES
(17, 'Enquiry Type', 'Irrelevant', 'Irrelevant'),
(18, 'Enquiry Type', 'Casual (cold)', 'Casual (cold)'),
(19, 'Enquiry Type', 'Interested unsure (warm)', 'Interested unsure (warm)'),
(21, 'Enquiry Status', 'Received inquiry', 'Received inquiry'),
(24, 'Enquiry Status', 'Counselling by counsellor', 'Counselling by counsellor'),
(26, 'Enquiry Status', 'Admission form received', 'Admission form received'),
(27, 'Enquiry Status', 'Form fees received', 'Form fees received'),
(28, 'Enquiry Type', 'Interested and sure (Hot)', 'Interested and sure (Hot)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_site_enquiry` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `FromSource` varchar(255) NOT NULL,
  `Projects` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `AssignedTo` int(10) NOT NULL,
  `EnquiryType` varchar(100) NOT NULL,
  `EnquiryStatus` varchar(100) NOT NULL,
  `FirstCreatedDateTime` datetime NOT NULL,
  `RegTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_source`
--

CREATE TABLE IF NOT EXISTS `tbl_source` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_source`
--

INSERT INTO `tbl_source` (`Id`, `Title`) VALUES
(1, 'Website'),
(2, 'Friend'),
(3, 'Seminar'),
(4, 'Poster'),
(5, 'Facebook or Linked In'),
(6, 'Other (specify)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`Id`, `Title`) VALUES
(1, 'status 1'),
(2, 'status 2');

-- --------------------------------------------------------

--
-- Structure for view `enquiry_details`
--
DROP TABLE IF EXISTS `enquiry_details`;

CREATE VIEW `enquiry_details` AS select `en`.`Id` AS `EnqId`,`en`.`Course` AS `CourseId`,`pr`.`Name` AS `CourseName`,`en`.`ReferredBy` AS `ReferredBy`,`en`.`Name` AS `Name`,`en`.`Occupation` AS `Occupation`,`en`.`City` AS `City`,`en`.`Phone` AS `Phone`,`en`.`Whatsapp` AS `Whatsapp`,`en`.`Email` AS `Email`,`en`.`Qualification` AS `Qualification`,`en`.`PassingYear` AS `PassingYear`,`en`.`Experience` AS `Experience`,`en`.`Position` AS `Position`,`en`.`Companyname` AS `Companyname`,`en`.`Visitdate` AS `Visitdate`,`en`.`Reason` AS `Reason`,`en`.`CouselorsComments` AS `CouselorsComments`,`en`.`Furtheraction` AS `Furtheraction`,`en`.`Type` AS `TypeId`,`sc1`.`Key` AS `TypeName`,`en`.`Source` AS `SourceId`,`so`.`Title` AS `SourceName`,`en`.`OtherSource` AS `OtherSource`,`en`.`Priority` AS `Priority`,`en`.`Status` AS `Status`,`sc`.`Key` AS `EnqStatus`,`en`.`AssignedTo` AS `AssignedTo`,`ma`.`Name` AS `AssignedToName`,`ma`.`Email` AS `AssignedToEmail`,`en`.`RegTime` AS `RegTime`,`en`.`UpdateTime` AS `UpdateTime` from (((((`tbl_enquiry` `en` join `tbl_ongoing_projects` `pr` on((`en`.`Course` = `pr`.`Id`))) join `tbl_source` `so` on((`en`.`Source` = `so`.`Id`))) join `tbl_site_codes` `sc` on((`en`.`Status` = `sc`.`Id`))) join `tbl_site_codes` `sc1` on((`en`.`Type` = `sc1`.`Id`))) join `tbl_manager` `ma` on((`en`.`AssignedTo` = `ma`.`Id`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
