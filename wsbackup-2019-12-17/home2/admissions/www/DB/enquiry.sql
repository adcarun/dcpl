-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2017 at 04:20 AM
-- Server version: 5.5.57
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enquiry`
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
,`ProId` int(11)
,`ProName` varchar(100)
,`CId` int(11)
,`CName` varchar(150)
,`CAddress` varchar(255)
,`CPhoneNo` varchar(100)
,`CDisplayStatus` enum('Active','Deactive')
,`CPersonName` varchar(150)
,`CPersonMobile` varchar(100)
,`CPersonEmail` varchar(150)
,`Description` varchar(500)
,`RegionId` int(11)
,`RegionName` varchar(100)
,`SourceId` int(11)
,`SourceName` varchar(100)
,`Priority` varchar(100)
,`Status` int(11)
,`EnqStatus` varchar(50)
,`AssignedTo` int(11)
,`AssignedToName` varchar(100)
,`AssignedToEmail` varchar(255)
,`Amount` int(100)
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
  `Product` int(11) NOT NULL,
  `CId` int(11) NOT NULL,
  `CDivision` varchar(100) NOT NULL,
  `CPersonName` varchar(150) NOT NULL,
  `CPersonMobile` varchar(100) NOT NULL,
  `CPersonEmail` varchar(150) NOT NULL,
  `CPersonName2` varchar(150) NOT NULL,
  `CPersonMobile2` varchar(100) NOT NULL,
  `CPersonEmail2` varchar(150) NOT NULL,
  `CPersonName3` varchar(150) NOT NULL,
  `CPersonMobile3` varchar(100) NOT NULL,
  `CPersonEmail3` varchar(150) NOT NULL,
  `CPersonName4` varchar(150) NOT NULL,
  `CPersonMobile4` varchar(100) NOT NULL,
  `CPersonEmail4` varchar(150) NOT NULL,
  `CPersonName5` varchar(150) NOT NULL,
  `CPersonMobile5` varchar(100) NOT NULL,
  `CPersonEmail5` varchar(150) NOT NULL,
  `CPersonName6` varchar(150) NOT NULL,
  `CPersonMobile6` varchar(100) NOT NULL,
  `CPersonEmail6` varchar(150) NOT NULL,
  `CPersonName7` varchar(150) NOT NULL,
  `CPersonMobile7` varchar(100) NOT NULL,
  `CPersonEmail7` varchar(150) NOT NULL,
  `CPersonName8` varchar(150) NOT NULL,
  `CPersonMobile8` varchar(100) NOT NULL,
  `CPersonEmail8` varchar(150) NOT NULL,
  `CPersonName9` varchar(150) NOT NULL,
  `CPersonMobile9` varchar(100) NOT NULL,
  `CPersonEmail9` varchar(150) NOT NULL,
  `CPersonName10` varchar(150) NOT NULL,
  `CPersonMobile10` varchar(100) NOT NULL,
  `CPersonEmail10` varchar(150) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Region` int(11) NOT NULL,
  `Source` int(11) NOT NULL,
  `Priority` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  `AssignedTo` int(11) NOT NULL,
  `Amount` int(100) NOT NULL,
  `RegTime` datetime NOT NULL,
  `UpdateTime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=397 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`Id`, `Product`, `CId`, `CDivision`, `CPersonName`, `CPersonMobile`, `CPersonEmail`, `CPersonName2`, `CPersonMobile2`, `CPersonEmail2`, `CPersonName3`, `CPersonMobile3`, `CPersonEmail3`, `CPersonName4`, `CPersonMobile4`, `CPersonEmail4`, `CPersonName5`, `CPersonMobile5`, `CPersonEmail5`, `CPersonName6`, `CPersonMobile6`, `CPersonEmail6`, `CPersonName7`, `CPersonMobile7`, `CPersonEmail7`, `CPersonName8`, `CPersonMobile8`, `CPersonEmail8`, `CPersonName9`, `CPersonMobile9`, `CPersonEmail9`, `CPersonName10`, `CPersonMobile10`, `CPersonEmail10`, `Description`, `Region`, `Source`, `Priority`, `Status`, `AssignedTo`, `Amount`, `RegTime`, `UpdateTime`) VALUES
(2, 2, 252, '', 'Ramesh J', '9900105640', 'rameshj@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Workbench kept for demo. Require around 40 workbenches by December 2016. Microwave Super Components division presently are using Testron Tables. Sharnappa Ranjeri from Missile System division too has new requirement 25 ESD Tables &amp;amp; 25 Non ESD tables.', 2, 2, 'High', 24, 20, 0, '2016-05-05 04:10:36', '2016-06-06 16:10:36'),
(3, 2, 257, '', 'Rambabu', '9422059293', 'raghuram080577@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requirement of 5 ESD Workbenches , budget 50 lacs ( all inclusive). Two Quotations submitted to move the file further.', 6, 1, 'High', 24, 20, 1000000, '2016-04-04 03:52:59', '2016-06-06 15:52:59'),
(4, 2, 254, '', 'Rajaram', '9177596595', 'rajaram@brahmos.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requirement of 2 ESD soldering Station workbenches.', 4, 1, 'High', 24, 20, 700000, '2016-04-22 03:53:57', '2016-06-06 15:53:57'),
(5, 2, 255, '', 'Srinivas Rao D V', '4024587890', 'devulapally_d@yahoo.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requirement of 5 ESD benches with a budget of 2 lacs per table ( All inclusive).', 4, 2, 'High', 24, 20, 1000000, '2016-04-26 10:23:24', '2016-06-09 10:23:24'),
(6, 2, 256, '', 'C K Varaprasadrao', '9440445084', 'c.k.v.prasadrao@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requirement of Clean room table.', 4, 1, 'Medium', 24, 20, 0, '2016-03-29 03:51:15', '2016-06-06 15:51:15'),
(8, 5, 258, '', 'Shivakumar', '9844249526', 'Shivakumark@centumelectronics.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Quote Submitted , under budget approval. This will take time but need to be in touch.', 2, 2, 'Medium', 24, 20, 0, '2016-03-14 02:54:47', '2016-06-06 14:54:47'),
(9, 6, 259, '', 'Tejashree Birmole', '9167523677', 'tejashreebirmole@bluestarindia.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have demonstrated Elnoes connect and five to them. they have visited our Mumbai office. They are interested in Elneos five Cockpit and connect both and taken capital budget for same. Final price we have quoted to Vitronics. Case is on finalization Stage. Expected order in June end.', 7, 6, 'High', 26, 23, 520000, '2016-02-18 06:58:41', '2016-09-13 06:58:41'),
(10, 2, 260, '', 'Bibhor Kumar Jha', '9987796162', 'bkjha@mazagondock.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Visited our office after invitation. They have already budget sanction for calibration lab renovation. They are interested in 10 number Elneos connect with Third party products integrated in it.We have submitted budgetary offer, lockin technical specification and design to customer  enquiry is now in Tendering stage. Waiting for tender to publish.', 7, 2, 'High', 24, 31, 1200000, '2016-06-02 03:27:09', '2016-11-13 15:27:09'),
(11, 2, 261, '', 'Suhas Zambre', '9322257265', 'sszambre@iitb.ac.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have visited and explain Connect and Elneos five. They are coming up with new R &amp;amp; D lab. Civil work is going on of lab. we have invited him to our office to demonstrate Elneos. He is ready to come in last week of June.they are interested in Elneos connect.', 7, 2, 'Medium', 24, 31, 400000, '2016-05-18 05:37:28', '2016-06-14 17:37:28'),
(12, 2, 262, '', 'Lt Mithun', '2147483647', 'Lt.mithun@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Tender specification &amp;amp; budgetary price already given. In tender process', 7, 6, 'Medium', 24, 34, 0, '2016-05-25 01:23:00', '2016-06-03 13:23:00'),
(13, 2, 267, '', 'R K Yewale', '9757456321', 'rk.yewale@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have kept one test bench for demonstration in his lab ( digital test facility). Demonstration is done. They have sanction budget of 50 lacs including taxes. they want Elneos connect and five both in 7 quantity. We have submitted technical specification and budgetry to them.', 7, 2, 'High', 24, 34, 5000000, '2016-05-26 11:36:21', '2016-06-27 11:36:21'),
(14, 2, 250, '', 'Mr Kishore', '2147483647', 'prolyxmicro@yahoo.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Two ESD tables for Wire bonder application &amp;amp; for regular test table with  ESD drawer.', 2, 1, 'Low', 26, 24, 0, '2016-03-24 00:00:00', '0000-00-00 00:00:00'),
(15, 5, 268, '', 'Ansari A N', '2027044780', 'a_n_ansari@yahoo.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Introduced Messung Erfi Products.Invited to our office for demo.', 6, 2, 'Low', 24, 20, 0, '2016-06-02 00:00:00', '0000-00-00 00:00:00'),
(16, 5, 5, '', 'Vijay Kumar', '2147483647', 'vijaykumar.pl@in.bosch.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Has requirement of Elnoes 5 and finalized our product by June 15 we will receive order.', 2, 2, 'High', 26, 24, 500, '2016-03-01 12:52:20', '2016-08-01 12:52:20'),
(17, 2, 208, 'Q &amp;amp;A Electricals', 'Kaushik', '2147483647', 's.kaushik@tvsmotor.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'For Existing ERFI setup need to provide cockpit with Elneos 5 once budget is confirmed then PO will come in November month.', 2, 2, 'High', 24, 24, 0, '2016-10-27 09:54:53', '2016-11-13 09:54:53'),
(18, 2, 117, '', 'Venygopal  Dept PDIC', '2147483647', 'pgvenugopal@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Will start Purchase process by April 2017  End need visit and follow up.', 2, 4, 'High', 24, 24, 0, '2016-02-22 06:45:33', '2017-04-03 06:45:33'),
(19, 2, 119, '', 'Renuka Prasad', '2147483647', 'renukaprasad@lrde.drdo.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need complete lab requirement has 10 work bench requirement and they will decide after September 2017', 2, 2, 'Medium', 24, 24, 50000000, '2016-04-07 05:34:06', '2017-04-03 05:34:06'),
(20, 2, 6, '', 'Radish', '2147483647', 'radish.kalayath@sandisk.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Has requirement of Elnoes connect and elneos 5 as sandisk company has taken over by western digital we can get PO by July 2016.', 2, 2, 'High', 24, 24, 700000, '2016-02-12 00:00:00', '0000-00-00 00:00:00'),
(21, 2, 131, '', 'A T Seralathan', '9448491036', 'seralathan@bheledn.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to be in touch as this group does projects for others and participate in big Govt/Defence tenders.', 2, 2, 'Low', 24, 20, 0, '2016-03-16 03:49:30', '2016-06-06 15:49:30'),
(22, 2, 263, '', 'Mr Sandip Sakunde', '2147483647', 'sandip.sakunde@mindastoneridge.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have submitted our offer for ESD Work Bench for Client\\''s R &amp;amp; D Lab the finalization of the same expected by end of the June 2016 qty will be 2 nos ///expected finalization by end of march', 6, 3, 'High', 24, 21, 0, '2016-05-02 10:53:07', '2017-02-04 10:53:07'),
(23, 2, 265, '', 'Mr Niteen Gaikwad', '9865326598', 'npi@inyantra.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'customer using table of 20000/- cant invest that much in benches.', 6, 5, 'Medium', 26, 21, 0, '2016-06-04 10:50:48', '2017-02-04 10:50:48'),
(24, 1, 264, '', 'Mr Anand Tulaskar', '2147483647', 'atulaskar@lear.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'offer submitted for Standard test bench client has forwarded our offer to the purchase dept .purchase officer will get back to us///Future Requirement.', 6, 2, 'Medium', 26, 21, 0, '2016-04-28 11:02:10', '2017-02-04 11:02:10'),
(25, 2, 266, '', 'Mr Aniruddh', '2147483647', 'aniruddh@godrej.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer has visited our office with his senior Manager (Delhi) will update us soon regarding offer.////Enquiry related to tender not immediate requirement ///will get back to us in future', 6, 1, 'High', 26, 21, 0, '2016-05-26 10:52:13', '2017-02-04 10:52:13'),
(26, 2, 270, '', 'Mr Vinod Kolsure', '2147483647', 'vinod.kolsure@lge.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We had submitted our offer to Mr. Amol Kulkarni after that We have visited along with  fischer sir during his india visit .Mr.Kulkarni left the organization we have contacted Mr.Vinod Kolsure from same dept.&amp;amp; submitted our revised offer to Mr Vinod  he will put the proposal in front of the director 7 will get back to us', 6, 3, 'Medium', 24, 21, 0, '2016-06-04 00:00:00', '0000-00-00 00:00:00'),
(28, 5, 257, '', 'Shalini Rohela', '9689380008', 'rohelashalini@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requires compact  instrument. Quoted Elneos 5.', 6, 2, 'Medium', 24, 20, 0, '2016-04-28 00:00:00', '0000-00-00 00:00:00'),
(31, 1, 274, '', 'Mr B Saravanan', '9011365481', 'bsaravanan@wika.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Received PO for 1 Table through revine technologies.', 6, 2, 'Medium', 26, 21, 0, '2016-01-15 10:49:04', '2017-02-04 10:49:04'),
(32, 2, 276, '', 'Sunil Kumar', '9959060067', 'sunil.kumar@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Sunil Kumar has good relations with Vidyasagar ( R&amp;amp;S) but immediately do not have any requirement .Looking at our products he guided us to meet other people , whom me met. He also liked these products &amp;amp; will try to accommodate one table somewhere if possible. Venkat Rao &amp;amp; others have following requirement. Wants table for mobile applications ( in moving vehicles ). It should withstand vibration &amp;amp; bumps.', 4, 2, 'Low', 24, 20, 0, '2016-04-20 12:56:01', '2016-06-10 12:56:01'),
(33, 2, 275, '', 'Shrikant Dorle', '9049800335', 'shrikantd@amphenol-in.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They are setting up a cable assembly line in 6- 8 months, in Pune. The building is almost ready.They want workplace systems similar to ours for their wire harness line.He will get back to us with their specs.', 6, 1, 'Medium', 24, 20, 0, '2016-04-13 01:09:38', '2016-06-10 13:09:38'),
(34, 2, 277, '', 'Padmanabha Padhan', '9493209407', 'padhan@nfc.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'He requires table for motor testing  ( Â½ Hp to 75HP) ,wants to test Winding resistance,Insulation resitance,Bearing condition,Vibration analysis,Life of winding,Apart from above , he also wants table for Switch gear testing / Energy meter testing', 4, 1, 'Low', 24, 20, 0, '2016-04-21 12:53:39', '2016-06-10 12:53:39'),
(35, 1, 273, '', 'Mr Atul Kasbekar', '0989041111', 'venu@optimuminstruments.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer is interested in work place system with continuous filling boards we have also suggested a customized solution with key sight  instruments integrated in cockpit customer will discuss the same with the end users and will confirm us for our offer', 6, 6, 'High', 24, 30, 0, '2016-05-20 00:00:00', '0000-00-00 00:00:00'),
(36, 1, 279, '', 'Tripti Verma', '8882521598', 'vermatv@yahoo.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Require benches for Cal Van Setup.Quotation sent.Waiting for response', 1, 5, 'High', 24, 40, 0, '2016-03-10 00:00:00', '0000-00-00 00:00:00'),
(37, 5, 281, '', 'Mr Gaurav Kharge', '9168049911', 'gaurav_kharge@jabil.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Submitted our offer for Elneos 5 basic version we have to also submit work place systems offer to the client', 6, 6, 'High', 24, 30, 0, '2016-02-26 00:00:00', '0000-00-00 00:00:00'),
(38, 5, 280, '', 'Mr Ajaz Attar', '2027406640', 'alattar@bajajauto.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have demonstrated elneos 5 to client at his premises also sent our offer for the same but client required 30V/50A power supply we have to submit our offer for the same.', 6, 6, 'Medium', 24, 30, 0, '2016-02-26 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 278, '', 'Venu Nair', '9822315514', 'pagarwal@optimuminstruments.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'submitted our offer for ESD test benches with filling board &amp;amp; Drawers client will get back to us on the same.', 6, 6, 'High', 24, 30, 0, '2016-02-15 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 272, '', 'Mr Uplane', '0020256951', 'mdu@disc.unipune.ac.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'we have submitted our offer for Elneos 5 (power suply,DMM,Function Generator )basic version for 15 nos client will reply us shortly', 6, 6, 'High', 24, 43, 0, '2016-05-26 00:00:00', '0000-00-00 00:00:00'),
(41, 1, 283, '', 'Haridas Dadas', '9822391725', 'planning@anantgroup.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Quotation given to the customer. Product out of budget for customer.', 6, 1, 'High', 24, 40, 0, '2016-04-15 05:59:08', '2016-06-06 17:59:08'),
(42, 6, 282, '', 'Verma', '7840090115', 'adityacleanenergy@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Quotation submitted. Products too costly for the customer.', 1, 4, 'Low', 27, 41, 0, '2016-05-10 00:00:00', '0000-00-00 00:00:00'),
(44, 1, 285, '', 'Vipin Vashishtha', '9672996112', 'vvashishtha@hondacarindia.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Require 3 standard tables only.', 1, 6, 'Low', 26, 37, 0, '2015-12-23 00:00:00', '0000-00-00 00:00:00'),
(45, 1, 60, '', 'Mr Ramesh yadav', '9890978921', 'ramesh.yadav@sajdyno.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Client is into automotive testing authority. we have submitted our offer for Standard Test Bench  with 19\\&amp;quot; panel for his client. will get back to us on our offer.///cant invest on workbenches.', 6, 1, 'Medium', 26, 21, 0, '2016-03-18 11:03:00', '2017-02-04 11:03:00'),
(46, 2, 285, '', 'Vinod Kumar Kaushik', '7023003000', 'vkkaushik@hondacarindia.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Requires 1 ESD workplace system for their upcoming Service lab. They require Elneos 5 also with this system', 1, 6, 'High', 24, 37, 0, '2016-02-04 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 286, '', 'Firoz Khan', '9035503644', 'firozkhan.gm@deltaww.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They are setting new service lab in Bangalore where they need ESD workplace system for repairing &amp;amp; testing of UPS systems.', 2, 1, 'Low', 24, 22, 0, '2016-03-04 12:41:13', '2016-06-07 12:41:13'),
(48, 1, 287, '', 'Nandakishore KS', '9980742234', 'nandakishore.ks@in.abb.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need workplace system for switch gear testing. This department belongs Mr. Lavingston.', 2, 4, 'High', 24, 24, 500000, '2016-03-01 12:53:04', '2016-08-01 12:53:04'),
(49, 2, 288, '', 'Hemant Singh', '8940414600', 'hemant.singh@icat.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need 5 ESD workplace systems. All the 5 systems are different for different application.', 1, 4, 'Medium', 24, 22, 0, '2015-12-22 12:38:01', '2016-06-07 12:38:01'),
(50, 1, 288, '', 'Nikhil Grover', '8130712522', 'nikhil.grover@icat.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They are modifying EMI/EMC lab where they need wooden tables.', 1, 4, 'Medium', 24, 22, 0, '2016-02-05 12:40:26', '2016-06-07 12:40:26'),
(51, 2, 289, '', 'Sadeesh Kannan', '9443539234', 'sadeesh.kannan@hella.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They want 2 ESD workplace systems. In this we need to integrate Tektronix instruments.', 3, 6, 'High', 24, 32, 0, '2015-11-26 00:00:00', '0000-00-00 00:00:00'),
(52, 1, 290, '', 'Sanjay Dhamale', '9850143166', 'sanjaydhamale@yahoo.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need 1 workplace system for Special Projects Group.', 6, 1, 'High', 24, 22, 0, '2016-05-23 00:00:00', '0000-00-00 00:00:00'),
(53, 2, 290, '', 'Rajeshwar', '9326308198', 'rejeshwar@rde.drdo.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'This requirement is from Robotics division.', 6, 4, 'Low', 24, 22, 0, '2015-08-12 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 291, '', 'Niranjan Das', '9241302224', 'ndas@tata.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need 3 ESD workplace systems', 2, 6, 'High', 27, 32, 0, '2016-03-16 10:17:48', '2016-11-13 10:17:48'),
(55, 1, 292, '', 'Bijit Ghosh', '9643007885', 'bijit.ghosh@lavainternational.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need 1 table for their existing Quality lab.They are setting new R&amp;amp;D lab in Delhi soon at that time they will need more tables.', 1, 4, 'Low', 24, 22, 0, '2016-03-02 02:36:16', '2016-06-10 14:36:16'),
(56, 1, 271, '', 'Jai Khare', '7312488163', 'jkkhare@rrcat.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'L- shape tables , window in Corner', 5, 6, 'High', 24, 33, 0, '2016-05-19 00:00:00', '0000-00-00 00:00:00'),
(57, 1, 271, '', 'Arihant Kumar Jain', '7312488582', 'arihant@rrcat.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'C- shape tables , Against Nagman', 5, 6, 'High', 24, 33, 0, '2016-05-19 00:00:00', '0000-00-00 00:00:00'),
(58, 1, 271, '', 'Anil Hollikatti', '7312442555', 'anilch@rrcat.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'single tables with ESD', 5, 6, 'High', 24, 33, 0, '2016-05-19 00:00:00', '0000-00-00 00:00:00'),
(59, 1, 271, '', 'Vijay Bhawsar', '7312442315', 'vijay@rrcat.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'rendering already sent', 5, 6, 'High', 24, 33, 0, '2016-05-20 00:00:00', '0000-00-00 00:00:00'),
(60, 1, 271, '', 'B B Shrivastwa', '7312442557', 'bhushri@rrcat.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'simple table , multiple numbers', 5, 6, 'High', 24, 33, 0, '2016-05-20 00:00:00', '0000-00-00 00:00:00'),
(61, 2, 293, '', 'Shivaparasad', '8861408345', 'gudipati.shivaprasad@mahindrareva.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They are setting new R&amp;amp;D lab where they need more than 8 tables. They will finalize the lab civil work in end of may.', 2, 6, 'Medium', 24, 22, 0, '2015-10-26 00:00:00', '0000-00-00 00:00:00'),
(62, 1, 48, '', 'P V Harinath Babu', '9425675081', 'hbabu@cpri.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Needed table for calibration lab.', 2, 4, 'Low', 21, 22, 0, '2015-10-06 00:00:00', '0000-00-00 00:00:00'),
(63, 1, 295, '', 'R Gopalkrishna Pai', '8867663895', 'rgk.pai@digitalcircuits.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Needed standard workplace system for LED testing lab.', 2, 6, 'Low', 21, 24, 0, '2015-12-23 05:30:12', '2017-04-03 05:30:12'),
(64, 1, 296, '', 'N R Ramesh', '9880227485', 'ramesh@aarjay.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Require standard workplace systems.', 2, 6, 'Medium', 24, 32, 0, '2015-10-17 00:00:00', '0000-00-00 00:00:00'),
(65, 2, 297, '', 'C S Manjunath Aarjay', '9945136763', 'manjunath@aarjay.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need 2 ESD workplace system.', 2, 6, 'High', 26, 32, 0, '2016-05-04 01:28:37', '2016-09-10 13:28:37'),
(66, 2, 256, '', 'C S Manjunath Aarjay', '9945136763', 'manjunath@aarjay.com1', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They need 2 ESD systems', 2, 6, 'Medium', 24, 32, 0, '2016-05-03 00:00:00', '0000-00-00 00:00:00'),
(67, 1, 298, '', 'Jayant Leuva', '9924103641', 'jayant@asepl.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Rendering and offer submitted.Waiting for way forward from dealer', 5, 6, 'High', 24, 33, 0, '2016-05-13 00:00:00', '0000-00-00 00:00:00'),
(69, 2, 302, '', 'V Ramesh Babu Peridot', '9246276819', 'vramesh@peridot-tech.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Its a tender we have received from Peridot', 4, 6, 'Low', 27, 35, 0, '2016-04-02 00:00:00', '0000-00-00 00:00:00'),
(70, 5, 284, '', 'Dr Mohammad', '9703093279', 'ahmadvalli@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Needed standalone Elneos 5', 4, 1, 'Low', 21, 35, 0, '2016-01-25 00:00:00', '0000-00-00 00:00:00'),
(71, 5, 303, '', 'Ganesh J Kabade', '9886239120', 'ritikaassociates.hbl@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'This NIT goa requirement we have received from Ritika Associated based in Hubli Karnataka who met us in Elecrama.', 8, 1, 'Low', 21, 22, 0, '2016-04-02 00:00:00', '0000-00-00 00:00:00'),
(72, 5, 304, '', 'Shivanand Daddi', '9370151147', 'shiva.daddi@scopetnm.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They had inquired for 30V/50A power supply from Basic.', 6, 1, 'Low', 21, 22, 0, '2016-02-26 00:00:00', '0000-00-00 00:00:00'),
(73, 2, 294, '', 'Bhavin Khanpara', '9924131401', 'bhavin@asepl.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need follow ups.Since its a Govt. organization work progress is quite slow.', 5, 6, 'Low', 24, 33, 0, '2016-01-25 00:00:00', '0000-00-00 00:00:00'),
(74, 1, 294, '', 'Dhaval Pimplaskar', '9924100924', 'dhaval.87@hotmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'work in process.need follow up', 5, 6, 'Medium', 24, 33, 0, '2016-03-07 00:00:00', '0000-00-00 00:00:00'),
(75, 1, 269, '', 'jayant Leuva', '9924103641', 'jayant@asepl.in1', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need follow ups', 5, 6, 'High', 24, 33, 0, '2016-05-14 00:00:00', '0000-00-00 00:00:00'),
(76, 1, 299, '', 'Dhaval Pimplaskar', '9924100924', 'dhaval@asepl.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'need to follow up with ASEPL', 5, 6, 'Medium', 24, 33, 0, '2016-02-29 00:00:00', '0000-00-00 00:00:00'),
(78, 1, 301, '', 'Raxit Bhatt', '9924103038', 'raxit@asepl.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to follow up.', 5, 6, 'High', 24, 33, 0, '2016-03-10 00:00:00', '0000-00-00 00:00:00'),
(79, 2, 206, '', 'Mr Srinivas', '9535547779', 'sreenivasa.raosp@boschrexroth.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer has requirement of 4 Work benches but not immediate need to in touch in July.', 2, 2, 'Medium', 24, 24, 0, '2016-02-15 00:00:00', '0000-00-00 00:00:00'),
(80, 2, 305, '', 'Raghu Ram', '9243700604', 'mrkumar@tatapowerSED.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'New Factory set-up is getting delayed and procurement has gone to month of Aug/Sep 2016 we need to be in Continuous follow up.', 2, 6, 'High', 26, 32, 0, '2015-12-22 10:19:14', '2016-11-13 10:19:14'),
(81, 2, 134, '', 'Arvind Prasad', '9844550756', 'aravind.prasad@rohm.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Order lost because of price', 2, 1, 'Low', 27, 32, 0, '2016-01-25 00:00:00', '0000-00-00 00:00:00'),
(82, 5, 309, '', 'Jeevan Doss', '0442257494', 'jeevandoss@iitm.ac.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'presently no requirement', 3, 2, 'High', 21, 24, 0, '2016-03-03 06:16:10', '2017-04-03 06:16:10'),
(83, 5, 312, '', 'Sridhar Seshadri', '0442652657', 'Sridhar.Seshadri@brakesindia.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer has finalized the spec by end of June we will get PO', 3, 4, 'High', 21, 32, 0, '2015-12-01 01:14:19', '2016-08-01 13:14:19'),
(84, 2, 314, '', 'Ram krishna', '9972221843', 'td.rwrdc@hal-india.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Have requirment  ESD work place systmes but waiting for DGS&amp;amp;D Rate contract but trying to push at least  2 benches with out rate contract.', 2, 4, 'Medium', 24, 32, 500000, '2016-05-07 00:00:00', '0000-00-00 00:00:00'),
(85, 5, 313, '', 'Sherin Petronila', '4422326906', 'sherin@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to be in follow up foe getting enquiries for elneos 5  . need to follow up', 3, 6, 'Medium', 24, 32, 0, '2016-05-13 00:00:00', '0000-00-00 00:00:00'),
(86, 2, 169, '', 'Sathis', '8022933557', 'basu@ee.iisc.ernet.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'This is a new enquiry need to visit in the month of April.', 2, 1, 'Medium', 24, 24, 0, '2016-03-10 06:02:39', '2017-04-03 06:02:39'),
(87, 2, 240, '', 'Sarvanan', '9902617712', 'm.saravanan@mahindrareva.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Still this requirement will take time as new building is coming up', 2, 2, 'High', 24, 24, 0, '2016-02-25 06:26:04', '2017-04-03 06:26:04'),
(88, 2, 320, '', 'Nithyanand', '9900043297', 'nithyananda@himatsingka.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer will finalize after April 2017.', 2, 1, 'Medium', 24, 24, 0, '2016-03-10 05:36:57', '2017-04-03 05:36:57'),
(89, 5, 258, '', 'Kumar', '9844249526', 'KumarSM@centumelectroncics.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer management has not approved they may look into this year', 2, 4, 'Medium', 21, 24, 0, '2016-04-05 05:36:08', '2017-04-03 05:36:08'),
(90, 2, 317, '', 'Rajeev', '9845022960', 'rajeev@mistralsolutions.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer will decided after June 2017 after implement of GST', 2, 1, 'High', 24, 24, 3000000, '2016-04-25 05:33:02', '2017-04-03 05:33:02'),
(91, 5, 315, '', 'Samson', '8754428451', 'SamsonJebaKumar.Sargunam@flextronics.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'has requirement but Previously axis alliance was handling their was no proper out put we need to change the strategy as this is imp customer. And need to pass on the lead to Elmak', 3, 2, 'Medium', 24, 24, 500000, '2016-05-03 05:52:38', '2017-04-03 05:52:38'),
(92, 5, 321, '', 'Shivshankar', '9880581624', 'shiv.mn@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Not interested to buy', 2, 1, 'Low', 21, 24, 0, '2016-05-12 05:50:59', '2017-04-03 05:50:59'),
(93, 2, 318, '', 'johnson Fernando', '9677714222', 'icfelectric@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'To finalize it may take more than 3 months we will hand over this lead to Sinetech and need to visit once', 3, 1, 'High', 26, 24, 500000, '2016-03-03 01:40:24', '2017-02-06 01:40:25'),
(94, 5, 308, '', 'Deepak', '4466544748', 'gr8hw@ucalfuel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to follow up for getting  PO by July month.', 3, 4, 'High', 24, 38, 1200000, '2016-05-14 00:00:00', '0000-00-00 00:00:00'),
(95, 2, 311, '', 'Dhakshina Moorth', '9551690720', 'dhakshina@sveindia.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to contact by June month end for enquiry', 3, 1, 'Medium', 24, 38, 0, '2016-04-06 00:00:00', '0000-00-00 00:00:00'),
(96, 2, 207, '', 'Mugan Rajan', '9500427713', 'mugan@titan.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Expected to  get PO by  SEP 2016.But need to follow up.', 2, 1, 'Medium', 21, 38, 0, '2016-04-12 10:29:21', '2016-11-13 10:29:21'),
(97, 5, 322, '', 'Linthish', '9496335924', 'linthish@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'this month tender will be released.', 10, 4, 'High', 26, 32, 0, '2016-04-14 04:46:43', '2017-04-01 04:46:43'),
(98, 5, 324, '', 'Chandrashekar', '4712723333', 'vvcsekar@cdac.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to follow up decision will be taken by June month', 10, 6, 'High', 24, 32, 0, '2016-04-14 00:00:00', '0000-00-00 00:00:00'),
(99, 5, 322, '', 'Prathap', '4712564350', 'vs_prathap@vssc.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'July month tender will be floated need to follow up.', 10, 6, 'High', 24, 32, 0, '2016-04-15 00:00:00', '0000-00-00 00:00:00'),
(100, 5, 322, '', 'Bibin Varghase', '4712564914', 'bibin_varghese@vssc.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'It will be a repeat order for month of august 2016', 10, 6, 'High', 24, 32, 0, '2016-04-22 00:00:00', '0000-00-00 00:00:00'),
(101, 2, 324, '', 'chandrashekar', '4712723333', 'vcsekar@cdac.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Will be added in project, he will update by June Mid.', 10, 6, 'Medium', 24, 32, 0, '2016-04-19 00:00:00', '0000-00-00 00:00:00'),
(102, 2, 325, '', 'Suresh', '4712567560', 'suresh_monvila@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Will intended by next month need to be in follow Up', 10, 6, 'High', 24, 32, 0, '2016-04-19 00:00:00', '0000-00-00 00:00:00'),
(103, 2, 325, '', 'Revathi', '4712567950', 'hrevathi@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Will be decided by month of August 2016 need to follow up', 10, 6, 'Medium', 24, 32, 0, '2016-04-20 00:00:00', '0000-00-00 00:00:00'),
(104, 2, 323, '', 'Krishna Kumar', '9446043347', 'kkumarpranavam@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need follow for getting enquiry in our specs if possible need to visit once.', 10, 6, 'High', 24, 32, 0, '2016-05-17 00:00:00', '0000-00-00 00:00:00'),
(105, 2, 323, '', 'Linthish', '9496335924', '1linthish@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Tender will release in the moth of June.', 10, 6, 'High', 24, 32, 0, '2016-04-19 00:00:00', '0000-00-00 00:00:00'),
(106, 2, 327, '', 'Hari', '4712569335', 'hari_r@vssc.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Under Budget approval need to be in follow up.', 10, 6, 'High', 24, 32, 0, '2016-05-19 00:00:00', '0000-00-00 00:00:00'),
(107, 2, 322, '', 'Sathesh thampi', '4712562158', 'satheesh_thampi@vssc.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Next month tender will be floated need to follow up.', 10, 6, 'High', 24, 32, 0, '2016-04-20 00:00:00', '0000-00-00 00:00:00'),
(108, 2, 329, '', 'Nachiket hari das', '9880075868', 'naciket.hardas.vz@renesas.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'need to send rendering and quote.Need to follow up.', 2, 4, 'High', 26, 32, 0, '2016-06-02 04:48:58', '2016-12-02 04:48:58'),
(109, 1, 51, '', 'Mr Sriram Deshmukh', '9370147543', 'operations@accoladeelectronics.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Potential accounts.client is shifting to new location will be able to respond us by july 2016', 6, 1, 'Medium', 21, 21, 0, '2016-03-17 10:47:01', '2017-02-04 10:47:01'),
(110, 1, 331, '', 'S Ramesh', '9382744155', 'service@rndinstruments.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'They are NABL accredited calibration lab. We have submitted the offer but didnt got any feedback.', 3, 1, 'Low', 21, 24, 0, '2016-02-21 05:30:43', '2017-04-03 05:30:43'),
(111, 2, 332, '', 'Veluswamy Sinetech', '9360708009', 'velu@sinetechautomation.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have submitted budgetary offer through Sinetech. Its a long procedure but require 24 nos of workplace systems.', 3, 6, 'Low', 24, 38, 0, '2016-04-05 00:00:00', '0000-00-00 00:00:00'),
(112, 1, 300, '', 'Bhavin ASEPL', '9924131401', 'bhavin@asepl.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have submitted the rendering &amp;amp; BOM with ASEPL. They will send the offer to customer.', 5, 6, 'Medium', 24, 33, 0, '2016-05-06 00:00:00', '0000-00-00 00:00:00'),
(113, 1, 333, '', 'Veluswamy Sinetech', '9360708009', 'velu@sinetechautomation.com1', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Submitted the budgetary quote through Sinetech. Sinetech is in follow up with customer.', 2, 6, 'Medium', 24, 38, 0, '2016-03-07 02:37:29', '2016-06-10 14:37:29'),
(114, 7, 334, '', 'Nihil Patel', '9974708213', 'nihil.patel@seweurodriveindia.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Submitted the offer for Protective Conductor Tester.', 5, 4, 'Low', 24, 18, 0, '2016-04-17 01:05:49', '2016-06-10 13:05:49'),
(115, 7, 335, '', 'Ramesh Aarjay', '9880227485', 'ramesh@aarjay.com1', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'We have submitted the offer to Aarjay. Aarjay is in follow up with customer.', 3, 6, 'Medium', 24, 32, 0, '2016-03-09 00:00:00', '0000-00-00 00:00:00'),
(116, 7, 208, '', 'Siddu Aarjay', '9611139696', 'siddu@aarjay.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Offer submitted to Aarjay. They are taking follow up with customer.', 2, 6, 'Medium', 24, 32, 0, '2016-03-01 00:00:00', '0000-00-00 00:00:00'),
(117, 1, 330, '', 'Mr Anand Kulkarni', '9970192564', 'anand.kulkarni@brueckner.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer has approved the 4 benches concern person Mr. Pramod Attarde will visit our office and finalize the same.', 6, 3, 'High', 24, 21, 0, '2016-06-08 10:45:42', '2017-02-04 10:45:42'),
(118, 2, 328, '', 'P M Deshmukh', '2025912383', 'pmdeshmukh47@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Met P M Deshmukh  Head of Instrumentation division . He is planning to set up a EMI/EMC lab after six months. Mar require workbenches at that time.He showed me his Rocket propellant testing lab. He has Envair workbenches specially done for this lab.Found our Elneos 5 instrument interesting &amp;amp; liked our products.Will consider our workbenches for EMI/EMC lab.Need to be in touch.', 6, 2, 'Low', 24, 20, 0, '2016-06-14 10:55:12', '2016-07-02 10:55:12'),
(119, 6, 267, '', 'Cdr Sidharth Datta', '9757456344', 'mecindmb-navy@gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'This is Engineering &amp;amp; Control Instrumentation  Division  of Mumbai Navy. We have demonstrated our workplace system. They are having PCB repair lab. Budget  is 28 Lacs. Require to feet 6 to 7 Test benches with Elneos five. Case is now in product configuration stage.', 7, 2, 'High', 24, 34, 0, '2016-06-23 00:00:00', '0000-00-00 00:00:00'),
(120, 2, 117, '', 'Ramesh J', '0990010564', 'ramesh@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Quote submitted waiting for tender to release', 2, 6, 'High', 24, 32, 5000000, '2016-06-21 00:00:00', '0000-00-00 00:00:00'),
(121, 1, 338, '', 'Mr Hemant Kumar Shukla', '0112390710', 'mohit.sharma@agmatel.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Client has requirement of two test bench along with two wok table wants to integrate keysight &amp;amp; tektronics instruments in 6U cockpit', 1, 6, 'High', 24, 36, 830000, '2016-06-22 00:00:00', '0000-00-00 00:00:00'),
(122, 1, 340, '', 'Mr Ram Gopal', '8130290136', 'ram@agmatel.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer will be having requirement soon for his upcoming R &amp;amp; D laboratory he will be connecting us with his purchase person we need to be in touch.', 1, 6, 'Medium', 24, 36, 0, '2016-06-23 00:00:00', '0000-00-00 00:00:00'),
(123, 1, 341, '', 'Mr Ajay Sharma', '8130290136', 'aka@agmatel.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer is having requirement of test bench for his testing lab but not yet finalized specs &amp;amp; other details he will get back to us need to be in touch', 1, 6, 'Medium', 24, 36, 0, '2016-06-23 00:00:00', '0000-00-00 00:00:00'),
(124, 1, 343, '', 'Mr Satish Kumar Sharma', '1204020237', 'satish.sharma@barco.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'customer continue requires 19\\&amp;quot; cabinet with 42HE we need to submit him budgetory offer for 19\\&amp;quot; with castors &amp;amp; coolling fans', 1, 6, 'Low', 24, 36, 0, '2016-06-23 00:00:00', '0000-00-00 00:00:00'),
(125, 1, 345, '', 'Chandan Chauhan', '9313631209', 'chandan@agmatel.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer has a requirement which they are going to procure from BEL Bangalore.Need to submit design and quotation as well as lock in specs.', 1, 6, 'Medium', 24, 36, 0, '2015-06-22 11:05:34', '2016-07-02 11:05:34'),
(126, 2, 346, '', 'Suresh D', '7875669900', 'sureshd@mindacorporation.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'New R&amp;amp;D Lab coming up for which they require 10 ESD Workbench &amp;amp; chairs. Quote submitted after visit &amp;amp; discussion. Demo unit shown.', 6, 2, 'Medium', 27, 20, 0, '2016-06-30 07:34:51', '2016-10-03 07:34:51'),
(127, 2, 344, '', 'Mr Bhaskar', '9994210879', 'vijai@agmatel.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Agmatel has kept one test bench for the demonstration at NIT client will be having requirement of 10nos and at hamirpur campus req is of 50 benches client will finalize his requirement and will get back to us.', 1, 6, 'High', 24, 36, 0, '2016-06-24 00:00:00', '0000-00-00 00:00:00'),
(128, 1, 347, '', 'Mr Ashok Katole', '9422552943', 'katole_ashok@yahoo.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Educational institute run by military people client required a test bench for his RF lab we have submitted our offer he will revert us on the same///Future requirement.', 6, 2, 'Medium', 26, 21, 0, '2016-07-05 10:49:56', '2017-02-04 10:49:56'),
(129, 2, 138, '', 'Bala chennaia', '8022195340', 'balachennaia@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need of testing tables need  give demo to AGM&amp;gt;', 2, 2, 'High', 24, 32, 0, '2016-07-07 00:00:00', '0000-00-00 00:00:00'),
(130, 2, 117, '', 'Nandeesh', '9886067329', 'nandeshm@bel.co.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Setting up new lap need to work closely.', 2, 2, 'High', 24, 32, 0, '2016-07-07 00:00:00', '0000-00-00 00:00:00'),
(131, 5, 327, '', 'Jawhar', '0000000000', 'jawhar@iisu.gov.in', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Need to quote for elnoes 5 stand alone.', 10, 6, 'At PO Level', 26, 32, 400000, '2016-07-08 04:43:57', '2017-04-01 04:43:57'),
(132, 1, 348, '', 'Mr Mohit Sharma', '8130099473', 'mohit.sharma@agmatel.com1', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'Customer currently has no requirement.Will get back to us when they will be having a new set up.', 1, 6, 'Low', 21, 36, 0, '2016-06-23 05:38:24', '2016-07-13 17:38:24'),
(149, 6, 337, '', 'Mr Ankit Jain', '9757026749', 'ankitj@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'He had visited our office for demo of test bench.  After demo we found they are having requirement of calibration test bench. so they are going for Elneos five cockpit with test bench. we have send budgetry offer to customer. It is now in budget approval stage.', 7, 3, 'Medium', 27, 31, 1200000, '2016-07-05 03:25:40', '2016-11-13 15:25:40'),
(150, 2, 337, 'Technical Physics Division', 'Mr Manoranjan Ghosh', '2225592813', 'mano.snb@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They are from technical physics division of BARC. they are having new lab set up where they are looking for 6 numbers of test bench. After visiting to our office for demo. they are going for our work place system. details about work bench they will send us soon. we have to send design for same', 7, 3, 'High', 24, 31, 0, '2016-07-27 00:00:00', '0000-00-00 00:00:00'),
(151, 2, 329, 'Application', 'Nachiket Das', '9880075868', 'nachiket.hardas.vz@renesas.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Have requirement of esd test bench already  design and budget finalized need to follow up', 2, 2, 'At PO Level', 26, 24, 0, '2016-07-08 12:47:12', '2016-09-10 12:47:12'),
(152, 5, 247, 'NCS D &amp;amp; E', 'Nimesh Raijad', '9731942528', 'nimeshsraijada@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to give DEMO first for Elneos 5', 2, 2, 'High', 24, 32, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(153, 5, 117, 'Military Communication', 'Sathya prakash', '0802219589', 'sathyaprakashbp@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to give Demo of Elneos 5', 2, 2, 'High', 24, 32, 0, '2016-07-05 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tbl_enquiry` (`Id`, `Product`, `CId`, `CDivision`, `CPersonName`, `CPersonMobile`, `CPersonEmail`, `CPersonName2`, `CPersonMobile2`, `CPersonEmail2`, `CPersonName3`, `CPersonMobile3`, `CPersonEmail3`, `CPersonName4`, `CPersonMobile4`, `CPersonEmail4`, `CPersonName5`, `CPersonMobile5`, `CPersonEmail5`, `CPersonName6`, `CPersonMobile6`, `CPersonEmail6`, `CPersonName7`, `CPersonMobile7`, `CPersonEmail7`, `CPersonName8`, `CPersonMobile8`, `CPersonEmail8`, `CPersonName9`, `CPersonMobile9`, `CPersonEmail9`, `CPersonName10`, `CPersonMobile10`, `CPersonEmail10`, `Description`, `Region`, `Source`, `Priority`, `Status`, `AssignedTo`, `Amount`, `RegTime`, `UpdateTime`) VALUES
(154, 2, 117, 'MCE testing', 'Madar', '9480701443', 'madard@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement is their for ESD test benches need to follow up', 2, 2, 'High', 24, 32, 0, '2016-07-09 00:00:00', '0000-00-00 00:00:00'),
(155, 5, 354, 'LEOS', 'Ravi Kumar', '8022685062', 'ravikumar@leos.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Demo already given kept the instrument their itself for validation.', 2, 2, 'High', 24, 32, 400000, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(156, 2, 297, 'CABS', 'Harish Naik', '8025049366', 'hrshnaik@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requrment for 5 ESD test benches and has 10 lakhs budget need to follow up.', 2, 2, 'High', 24, 32, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(157, 2, 355, 'Application Support &amp;amp; R &amp;amp; D.', 'Ganapathy subramaniam', '9894026697', 'ganapathy@janatics.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to setup full lab we should do design first after that commercials.', 3, 6, 'High', 24, 38, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(158, 2, 355, 'Application Support &amp;amp; R &amp;amp; D.', 'Ganapathy subramaniam', '9894026697', 'ganapathy@janatics.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to setup full lab we should do design first after that commercials.', 3, 6, 'High', 24, 38, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(159, 2, 356, 'EEF Division', 'Shaktivel', '9003561222', 'Sakthevel.ThiruChandrasekaran@in.bosch.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Quote given for ESD test bench and Elneos 5 3 August going for DEMO and discussion.', 3, 6, 'High', 24, 38, 600000, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(160, 7, 358, 'Quality Assurance', 'Sathish Kumar', '9994750738', 'sathish@elgiultra.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need of Can class product and  quote already given customer will discuss with is management and get back to us Not interested  because of  price', 3, 6, 'High', 21, 38, 0, '2016-07-08 10:31:34', '2016-11-13 10:31:34'),
(161, 2, 359, 'Instrumentation', 'Arun Baby', '9539055500', 'arunbaby@petronetlng.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer has 3 lakhs budget need to buy one ESD test Bench', 3, 6, 'High', 24, 38, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(162, 5, 54, 'Quality Assurance', 'Kishore', '9943994429', 'kishore@salzergroup.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to Demo elneos 5 and should keep the instrument for validation.', 3, 6, 'High', 24, 38, 0, '2016-07-08 00:00:00', '0000-00-00 00:00:00'),
(163, 1, 208, 'QAD  metalurgical', 'Gopinath', '9952416449', 'N.Gopinathan@tvsmotor.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Design submitted waiting for approval from customer once approved need and sent budgetary offer also need  to wait for management approval.', 2, 2, 'High', 24, 24, 0, '2016-07-25 09:56:22', '2016-11-13 09:56:22'),
(164, 2, 353, 'Instrumentation Lab', 'Md Faizudding', '0961870057', 'mdfaizuddin@drreddys.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of 2 test benches for their instrumentation lab. PLC test Bench and Instrumentation Test bench.This requirement received from Revisys.', 4, 2, 'Medium', 24, 20, 0, '2016-07-07 07:45:58', '2016-08-11 07:45:58'),
(165, 2, 256, 'Radar Seekers', 'Nilang Trivedi', '9490304710', 'nilang.trivedi@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This lead is from Sai Microsystem. Visited with Rais here &amp;amp; took the requirement. He wants to develop the lab. Rendering submitted.', 4, 6, 'High', 24, 20, 0, '2016-06-27 07:44:44', '2016-08-11 07:44:44'),
(166, 2, 361, 'CIS Appleton', 'Vilas Shendge', '9011088402', 'vilas.shendge@emerson.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of 3 test benches for 3 different products. He will finalise the requirement with his team &amp;amp; get back to us.', 6, 2, 'Medium', 24, 20, 0, '2016-07-20 00:00:00', '0000-00-00 00:00:00'),
(167, 2, 360, 'Product developement Engg', 'Shivaji Gadekar', '8888800288', 'shivaji.gadekar@pricol.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Presently they do not have a proper bench for their testing and development activity. Looking at our products he got interested in it &amp;amp; gave his requirement.', 6, 2, 'Medium', 24, 20, 0, '2016-07-20 00:00:00', '0000-00-00 00:00:00'),
(168, 2, 362, 'Electronics Engineering', 'Brazilraj', '7719846127', 'brazilraj.a@diat.ac.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They are renovating all the labs , requirement of benches does exists but they would like to upgrade the existing one.Though the budget of 2.5 crore is sanctioned it includes building modification.', 6, 2, 'Low', 24, 20, 0, '2016-08-03 00:00:00', '0000-00-00 00:00:00'),
(169, 2, 363, '', 'Manan Ojha', '8130376664', 'manan_ojha@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires 2 ESD benches.Need to send design and quote', 1, 6, 'High', 24, 36, 610000, '2016-08-02 00:00:00', '0000-00-00 00:00:00'),
(170, 2, 363, '', 'Manan Ojha', '8130376664', 'manan_ojha@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires 2 ESD benches.Need to send design and quote', 1, 6, 'High', 24, 36, 0, '2016-08-02 00:00:00', '0000-00-00 00:00:00'),
(172, 2, 364, '', 'Mohit Sharma', '8130099473', 'mohit.sharma@agmatel.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires A bench where 2 person can work simultaneously.need to send the quotation.', 1, 6, 'High', 24, 36, 0, '2016-08-02 00:00:00', '0000-00-00 00:00:00'),
(173, 1, 373, 'DTH', 'Shailesh Kanauje', '9868510620', 'sedth@rediffmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'customer needs bench with cockpit.send the offer at the earliest.Also we have to send chairs for demo', 1, 1, 'High', 24, 36, 0, '2016-08-05 11:56:52', '2016-08-11 11:56:52'),
(181, 5, 175, 'BEL Ghaziabad - Test Equipment Support Division', 'Kaushik Mondal', '9871278148', 'kaushikmandal@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of Elneos - 5 ( They are interested for Power Supply Unit only ) - We have to provide Elneos5 for feeding.', 1, 2, 'High', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(182, 2, 372, '', 'prashant Garhwaliya', '9871156058', 'prashant.garhwaliya@in.panasonic.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'coming up new manufacturing setup.will give us the requirement next month', 1, 1, 'High', 24, 36, 0, '2016-08-03 00:00:00', '0000-00-00 00:00:00'),
(183, 5, 371, '', 'Rajendra Kukreti', '8130376664', 'rajendra@agmatel.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'customer needs power supply.We have to send ISRO tender for reference.', 1, 6, 'High', 24, 36, 0, '2016-08-04 00:00:00', '0000-00-00 00:00:00'),
(184, 2, 138, 'BEL Ghaziabad - Quality Control - Radar', 'Sanjay Agarwal    Sr Dy GM', '9871279036', 'sanjayagarwal@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of ESD Test Bench - We have to send our Elneos Connect for feeding for 10 days.As they are going to integrate a new Radar in India where people from Airforce &amp;amp; Army &amp;amp; Navy will come to see the Radar. So for us it will be a good platform to promote our Elneos Connect.', 1, 2, 'High', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(185, 2, 369, '', 'Sankar Raj', '9818412998', 'shanker@dekielectronics.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Budget is very low .Still he wants us to quote for 1 bench', 1, 6, 'Medium', 24, 36, 186000, '2016-08-04 00:00:00', '0000-00-00 00:00:00'),
(187, 2, 138, 'BEL Ghaziabad - SATCOM &amp;amp; CCS', 'Rashmi Gupta Dy Mgr', '9958790928', 'rashmigupta@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of ESD Test Bench - Feeding of Elneos Connect required.', 1, 2, 'High', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(188, 2, 138, 'BEL Ghaziabad - PA - NCS Deptt.', 'Ashish Kumar Sharma Manager PA NCS Deptt', '9810372615', 'ashishkumarsharma@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of ESD Test Bench with Cockpit in there Testing Bed. Right now they are using mat in there table. So they are interested in our system. We have to give ESD Test Bench for feeding.', 1, 2, 'Medium', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(189, 2, 138, 'BEL Ghaziabad - SATCOM &amp;amp; CCS', 'Harsh Vardhan Manager Satcom CC', '9899579979', 'harsh.vardhan@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement : ESD Test Bench . Feeding of Elneos Connect Required.', 1, 2, 'Medium', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(192, 7, 138, 'Bel Ghaziabad Test EquipSystem  Quality Services', 'Vikash Kumar Maurya', '1202813506', 'vikashkmaurya@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement - Requirement of High Voltage Breakdown Tester - CAN Class Testers.', 1, 2, 'High', 24, 45, 0, '2016-07-16 00:00:00', '0000-00-00 00:00:00'),
(207, 2, 376, 'Medical Electronics', 'Mr Abhay Deshpande', '0222572710', 'astroabhay1@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We had visited his office. He is having requirement for two test bench one moving trolly and two clean room chairs. we have submitted offer for clean room chairs and design for test bench we have to finalize before that he required demo of test bench. we are planning to keep one bench in IIT on 28 th of August same time we will give him demo.', 7, 2, 'Medium', 24, 31, 0, '2016-07-29 03:26:37', '2016-11-13 15:26:37'),
(208, 6, 375, 'Digital Repair Facility', 'Cdr Yaduvanshi', '9353079002', 'yaduvanshi@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This is defence EXPO lead. We had mailed him after Expo. he required 6 benches &amp;amp; 2 Racks with 6 ESD chairs. We have submitted lockin technical specification for same. Expected to publish tender in', 7, 1, 'High', 24, 34, 3500000, '2016-07-22 00:00:00', '0000-00-00 00:00:00'),
(209, 2, 356, 'EEM1', 'Shanmuga  Prakash', '4226672310', 'Shanmugaprakasam.Ramasamy@in.bosch.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Had requirement of test benches need to keep one test bench for Demo purpose', 11, 6, 'High', 24, 38, 0, '2016-06-29 00:00:00', '0000-00-00 00:00:00'),
(212, 5, 378, 'Fluoro Organics', 'Dr J Vatsala Rani', '9010822191', 'vatsala@iict.res.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elnes 5 [ DMM, PS -50Micro Amp- 2 Amp]', 4, 2, 'High', 24, 46, 0, '2016-08-25 00:00:00', '0000-00-00 00:00:00'),
(213, 5, 378, 'Inorganics &amp;amp; Physical Chemistry Division', 'Dr M Chandrasekharan', '9493409362', 'chandra@iict.res.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elneos 5 (DMM, Power Meter, PS)', 4, 2, 'High', 24, 46, 0, '2016-08-25 00:00:00', '0000-00-00 00:00:00'),
(214, 2, 378, 'Nano Material', 'Dr SP Singh', '4027191724', 'spsingh@iict.res.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elneos Connect', 4, 2, 'Medium', 24, 46, 0, '2016-08-25 00:00:00', '0000-00-00 00:00:00'),
(217, 3, 381, 'Complete new factory', 'Ashok Belkery', '9341869518', 'ashok@transconsystems.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They require cmplete seating solution for their new plant', 6, 1, 'High', 24, 47, 0, '2016-08-24 00:00:00', '0000-00-00 00:00:00'),
(218, 1, 367, '', 'Sumant Sangrami', '9818036418', 'sumantsangrami@mindagroup.com', 'Jatin Kapoor', '9718600906', 'jatinkapoor@mindagroup.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires sound chamber on 1 workplace and 4 assembly tables.', 1, 6, 'Low', 24, 36, 1030000, '2016-08-03 00:00:00', '0000-00-00 00:00:00'),
(219, 2, 366, '', 'Alok Ranjan', '9818643470', 'alok.ranjan@napino.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires full wooden volumised ESD bench with copper sheet on table top.', 1, 6, 'Low', 27, 36, 0, '2016-08-03 00:00:00', '0000-00-00 00:00:00'),
(220, 1, 368, '', 'vairavanathan', '9711456938', 'k.vairavanathan@intex.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'customer has a requirement for trolley to keep some instruments on there manufacturing floor.', 1, 6, 'Low', 24, 36, 0, '2016-08-05 00:00:00', '0000-00-00 00:00:00'),
(222, 1, 342, '', 'Ramgopal', '8130290136', 'ram@agmatel.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer need a bench for testing meters.He wants to place his zig on the table and a UPS and MTR below the table.', 1, 6, 'Medium', 24, 36, 263000, '2016-09-02 00:00:00', '0000-00-00 00:00:00'),
(224, 2, 384, '', 'Sarvansh Sinha', '9889040608', 'sarvanshsinha_rbl@itiltd.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer needs 50 plane ESD tables,50 ESD chairs,Approns,slippers,trolleys,card handler,caps', 1, 6, 'High', 24, 36, 0, '2016-08-31 00:00:00', '0000-00-00 00:00:00'),
(225, 2, 382, 'CAD-4, Nuclear Power Projects', 'N Appa Rao', '4027182324', 'napparao@ecil.co.in', 'N Ramesh Babu', '9491641489', 'nramesh@ecil.co.in', 'Karenna RP', '8008299340', 'karianna@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Demo fo ELNEOS Connect along with ELNEOS 5 for the new lab facility, which is going to come up very soon.', 4, 2, 'High', 24, 46, 0, '2016-08-26 00:00:00', '0000-00-00 00:00:00'),
(226, 2, 382, 'Telecom Division, IT &amp;amp; TG', 'GK Satyanarayana', '9440418545', 'headtcd@ecil.co.in', 'G Sambasiva Rao', '4027182413', 'ecilcrypto@ecil.co.in', 'B Sudhendra', '4027182413', 'b_sudhendra@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Interested with ELNEOS Connect &amp;amp; ELNEOS 5, already indented for New Tables. If shown DEMO will buy more of ERFI products.', 4, 2, 'High', 24, 46, 0, '2016-08-26 00:00:00', '0000-00-00 00:00:00'),
(227, 5, 382, 'Control Instrumentation Division, Control Systems', 'Noor Ahmed', '4027186828', 'noor_ahmed@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need a DEMO for ELNEOS 5 as impressed by the technology ERFI is offering', 4, 2, 'Medium', 24, 46, 0, '2016-08-26 00:00:00', '0000-00-00 00:00:00'),
(228, 2, 382, 'Strategic Electronics Division', 'B Srinivas Rao', '9490611747', 'bsrao@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for ELNEOS Connect (i.e ESD tables) as they are setting up of new lab facility shortly, so planned for a DEMO for both ELNEOS Connect &amp;amp; ELNEOS 5', 4, 2, 'Medium', 24, 46, 0, '2016-08-26 00:00:00', '0000-00-00 00:00:00'),
(229, 2, 382, 'Field Support Group', 'K Vinod Babu', '9885083277', 'vinod@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need a demo for ELNEOS Connect with bare minimum Electrical &amp;amp; Electronics interfaces in the ERFI Bridge', 4, 2, 'Low', 24, 46, 0, '2016-08-26 00:00:00', '0000-00-00 00:00:00'),
(230, 2, 276, 'Quality Assurance', 'Seshasai', '9989396361', 'seshasai@bel.co.in', 'E Prasanth Reddy', '9494227842', 'prasanthettadi@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr Seshasai asked me for a Demo for Elneos Connect as they are  planning to buy some Work Benches &amp;amp; for some of their requirement they have already started the procurement process and based on our DEMO they will initiate the 2nd batch of procurement. I assured him for the DEMO for Elneos Connect along with Elneos 5.', 4, 2, 'High', 24, 46, 0, '2016-08-29 00:00:00', '0000-00-00 00:00:00'),
(231, 6, 276, 'Land Based Systems, LBS', 'P Prasada Rao', '9704066263', 'prasadaraop@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Asked for a DEMO for Elneos Connect along with integrated Elneos 5', 4, 2, 'Medium', 24, 46, 0, '2016-08-29 00:00:00', '0000-00-00 00:00:00'),
(232, 6, 382, 'AP &amp;amp; SD', 'Amit Kumar', '4027186735', 'amitkumar@ecil.co.in', 'Rakesh Kumar', '4027186735', 'rakeshBoo@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'As per their planning for a New Lab Test Facility, they are planning to buy Tables &amp;amp; Chairs. Suggested to plan for DEMO of Elneos Connect &amp;amp; Elneos 5 within ECIL.', 4, 2, 'High', 26, 46, 0, '2016-09-03 10:38:34', '2016-12-26 10:38:34'),
(233, 2, 382, 'Strategic Electronics Division', 'S Misra', '9441110547', 'smisra@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sharde the design for the 19â€ Test Set up, asked to customize the Elneos connect to meet his requirement as he will be needing around 6 Nos.', 4, 2, 'High', 26, 46, 0, '2016-09-03 10:39:10', '2016-12-26 10:39:10'),
(234, 6, 382, 'SSD', 'K Lakshmi', '4027186337', 'lakshmikantamma@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Asked to send separate BQ for Elneos Connect &amp;amp; Elneos 5', 4, 2, 'Medium', 24, 46, 0, '2016-09-03 00:00:00', '0000-00-00 00:00:00'),
(235, 2, 276, 'D&amp;amp;E', 'E Pratap Simha', '0427194377', 'pratapsimhae@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Asked details for Elneos Connect as they are planning to buy 42 Nos. of ESD tables for Vehicle Shelter Facility.Shared the Vehicle Mounted Table Dimension for 2 Types of Shelter (L*H*D):    1)	3000*2129*2429 (TEST SHELTER)     2)	3500*2129*242       (CONTROL ROOM SHELTER)', 4, 2, 'High', 24, 46, 0, '2016-09-03 06:46:33', '2016-09-17 06:46:33'),
(236, 6, 256, 'DRSS', 'Nilang Trivedi', '9490304710', 'nilang.trivedi@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Complete Lab Set Up with complete ESD Flooring, Cabinets, ELNEOS Tables &amp;amp; ELNEOS 5 conf.  (DMM+PS+AWG) etc', 4, 6, 'High', 24, 46, 0, '2016-09-06 06:53:01', '2016-09-17 06:53:01'),
(237, 2, 256, 'DMT', 'Mahender K Gupta', '9441735789', 'mkg19662002@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Demo for ELNEOS Connect along with ELNEOS is planned up for next week as they have determined for 3 Nos of Elneos Connect coz of itâ€™s features.', 4, 1, 'High', 24, 46, 0, '2016-09-08 00:00:00', '0000-00-00 00:00:00'),
(238, 6, 256, 'DRSS', 'Tapas K Pal', '9440317831', 'tkp007@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'He is planning to buy complete 10+ Sets of Elneos Connect along with Elneos 5 (With different Conf. of Integration of Test &amp;amp; Measurement Instruments).Shared the Test Instruments Details', 4, 2, 'High', 24, 46, 0, '2016-09-08 06:42:25', '2016-09-17 06:42:25'),
(239, 2, 256, 'DNEC', 'Shailesh Kumar', '9441300271', 'shailesh.kumar@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'he is ready to buy immediately around 5 â€“ 6 Tables along with chairs. Note: Asked to share docs Elneos Connect Compatibility with Clean Room Facility (i.e Class 100 / Class 1000) Standards', 4, 5, 'High', 24, 46, 0, '2016-09-08 06:44:12', '2016-09-17 06:44:12'),
(240, 1, 318, 'Furnish division', 'Mr Parash', '9003141319', 'rajuparashar@hotmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Had a discussion of their requirement we need to give complete solution need work towards closing it by giving three quotes.', 2, 1, 'Medium', 24, 38, 400000, '2016-09-07 00:00:00', '0000-00-00 00:00:00'),
(241, 6, 256, 'DNEC', 'KC Das', '9440927799', 'kishorechandra.das@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking of ESD table, so suggested for ELNEOS Connect along with ELNEOS 5. Advised him for a DEMO within DRSS, RCI', 4, 5, 'High', 24, 46, 0, '2016-09-08 00:00:00', '0000-00-00 00:00:00'),
(242, 2, 256, 'DIIRS', 'Mahasweta Bakshi', '9490956114', 'suresh.k@rcilab.in', 'B Suresh Kumar', '9848463687', 'suresh.k@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They are planning for a Clean Room Facility with ESD Tables, ESD Chairs &amp;amp; even ESD Floor Matting etc. (i.e Complete Clean Room Set Up), suggested them to visit DRSS, RCI for the same', 4, 2, 'High', 26, 46, 0, '2016-09-09 10:36:57', '2016-12-26 10:36:57'),
(243, 2, 256, 'DIIRS', 'BV Rao', '9490956055', 'bvrao@rcilab.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Regular Enquiry is out, requested to add our name also for quoting for the same enquiry- 25 Nos', 4, 2, 'High', 26, 46, 0, '2016-09-09 10:37:18', '2016-12-26 10:37:18'),
(244, 2, 354, 'Power elelctronics', 'S V Chetty', '8025083522', 'chetty@isac.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'I and sathis sir are planing to visit them next week   to get requirements', 2, 3, 'High', 24, 32, 0, '2016-09-02 01:37:41', '2016-09-10 13:37:41'),
(245, 6, 382, 'CR&amp;amp;D, NPR Project', 'Ashok K Yadav', '9493173291', 'ashoky@ecil.co.in', 'S Chakradhara Rao', '9493173295', 'chakradhar@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for Clean Rooms Facility in ECIL, hyderabad &amp;amp; Tirupati, suggested to follow him for tendering process and also rendering his requirement,', 4, 2, 'High', 24, 46, 0, '2016-09-10 00:00:00', '0000-00-00 00:00:00'),
(246, 5, 117, 'Central research lab BEL', 'Vinod Naik', '8028381125', 'vinod.naik@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need of Elneos 5  five number demo and kept for evaluation also enquiry will float in our specs', 2, 2, 'High', 24, 32, 2500000, '2016-08-25 00:00:00', '0000-00-00 00:00:00'),
(249, 3, 391, 'VI', 'Mr Shayamsunder', '8552992897', 'kiran.bachhav@in.abb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Clean room chairs with 073.20 column', 6, 1, 'High', 24, 47, 0, '2016-09-02 00:00:00', '0000-00-00 00:00:00'),
(250, 1, 392, '', 'Vatsal Savalia', '1244094790', 'vatsal.savalia@hrdap.mail.a.rd.honda.co.jp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer requires 2 magnifying glass with high illumination.He will have requirement for benches in next financial year.', 1, 6, 'Medium', 24, 36, 0, '2016-09-13 00:00:00', '0000-00-00 00:00:00'),
(251, 6, 337, 'Automic Fuel division', 'Mr Nawaj Satvilkar', '0225594844', 'snawaz@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have received this enquiry through BARC event , We have visited his lab to understan requirement . They required to set up small repair and calibration lab. 3 Test benches are required with cockpit and one with elneos Five. with other instruments. We have submitted design and specification. Now concern person is on leave for 30 days he may come on 10 of Oct. we have to contact him same date to process further', 7, 1, 'High', 24, 31, 0, '2016-08-23 00:00:00', '0000-00-00 00:00:00'),
(252, 2, 337, '', 'Mr Rites  Rajon', '0222559153', 'rites@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have received this enquiry through BARC event. We have visited BARC and discussed about requirement. They are having lab of 6 X 8 feet. they required total 7 test bench. 3 for computer and basic use, other thee for testing repair and calibration. we  have submitted design and waiting for confirmation.', 7, 1, 'Low', 27, 31, 0, '2016-09-09 05:16:53', '2017-02-04 05:16:53'),
(253, 2, 337, 'APD', 'Amit Rav', '2225591325', 'amitrav@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have received this enquiry from BARC event. we met him at north gate. He reuired 1 test bench of 1200 X  850. we have  submitted design and waiting for confirmation.', 7, 1, 'High', 24, 31, 0, '2016-09-09 00:00:00', '0000-00-00 00:00:00'),
(255, 2, 337, 'ATSS', 'Mr Supratim Mujumdar', '2225593426', 'supratim@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have received this enquiry through BARC event. He want to set up Lab. in last meeting we have discussed about his requirement on north gate. Now he want us to come to inside BARC  to see his lab and give appropriate solution. we are visiting his lab on coming Friday .', 7, 1, 'At PO Level', 24, 31, 0, '2016-09-01 03:23:24', '2016-11-13 15:23:24'),
(257, 2, 396, 'DFT lab', 'Shivanand Mali', '8105389020', 'shivanand.mali@nokia.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They are setting up new lab in Bangalore for DFT measurement &amp;amp; testing lab for System on Chip.Need to provide the complete lab solutions.The person responsible to make this lab is visiting India from Finland in 2nd week of September. Will meet him during Productronica.', 2, 4, 'High', 24, 22, 0, '2016-08-04 05:57:12', '2016-09-17 05:57:12'),
(258, 1, 394, 'Test Lab', 'Arpit Khare', '7709000238', 'arpit.khare@brose.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Require one standard test bench with cage &amp;amp; aluminum stand. Also has standing chair / stool requirement.', 6, 2, 'High', 24, 20, 0, '2016-09-12 00:00:00', '0000-00-00 00:00:00'),
(259, 2, 400, 'Fuzes Division', 'Mr C Umashankar', '9049782177', 'cumashankar@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The requirement of Chairs finalized but the tables requirement is on hold. due to some technical issues.', 6, 2, 'High', 26, 21, 0, '2016-09-26 10:43:53', '2017-02-04 10:43:53'),
(261, 5, 399, 'Testing', 'Mr Shajan Sebastian', '9898000204', 'shajan@tuv-nord.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer is interested in Elneos five &amp;amp;  ESD work place system we have to keep Elneos 5 after October .', 6, 6, 'Medium', 24, 21, 0, '2016-09-20 00:00:00', '0000-00-00 00:00:00'),
(262, 2, 403, 'Design Department ( Electrical)', 'R S Bhavsar and  Salawade', '9423182052', 'design_de.ndk@hal-india.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Plan to go for 4-5 tables with cockpit in 2017.\r\nWe( + Cyronics) spent a whole with detailed presentation &amp;amp; discussion. \r\nComplete team from this department attended including the boss Salawade.', 6, 6, 'High', 24, 20, 0, '2016-09-22 00:00:00', '0000-00-00 00:00:00'),
(263, 2, 398, 'Testing', 'Prashant Badiger', '9623878159', 'saurabh@revinetechnologies.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'submitted our offer for his testing lab looking for space saving programme we are handling through revine technologies. will follow up the same.', 6, 6, 'Medium', 24, 21, 0, '2016-08-29 00:00:00', '0000-00-00 00:00:00'),
(271, 2, 382, 'Electronic Manufacturing Services Division (EMSD)', 'MS Sarma', '9492428325', 'mfgemsd@ecil.co.in', 'Adarsh Kumar', '7207395602', 'adarsh@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ESD Tables approx 150 Nos for New Manufacturing Facility', 4, 2, 'High', 26, 46, 0, '2016-10-12 10:37:56', '2016-12-26 10:37:56'),
(272, 2, 337, 'Reactor Engineering Division', 'Mr Kishor Kamble', '2225591589', 'kishork@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'He had attended our seminar. He required to set up lab total Five ESD benches. We have submitted  design and specification as per requirement.', 7, 1, 'High', 27, 31, 0, '2016-10-07 05:19:00', '2017-02-04 05:19:00'),
(273, 2, 337, 'Electronics', 'Mr Saurabh Neema', '2225593628', 'sneema@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Received enquiry through mail visited and understand requirement submitted design and quotation waiting for customer response.', 7, 1, 'High', 24, 31, 0, '2016-10-14 03:21:07', '2016-11-13 15:21:07'),
(274, 6, 255, 'Electronics Division', 'M Vinod Kumar', '9440499730', 'bdled@bdl.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elneos Connect along with chairs', 4, 1, 'High', 24, 46, 0, '2016-10-14 00:00:00', '0000-00-00 00:00:00'),
(275, 2, 255, 'AKASH', 'PV Rajaram', '7382298450', 'akash@bdl.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elneos Connect along with chairs', 4, 1, 'Medium', 24, 46, 0, '2016-10-14 00:00:00', '0000-00-00 00:00:00'),
(276, 2, 255, 'LRSAM', 'N Narender', '8331894165', 'lrsam@bdl.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Elneos Connect along with chairs', 4, 1, 'Medium', 24, 46, 0, '2016-10-14 00:00:00', '0000-00-00 00:00:00'),
(287, 3, 418, 'Purchase', 'Rajesh Kulkarni', '9822039813', 'info@keetronics.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Classic Standing Support â€“ WS 144211 U for Wet Room', 6, 4, 'High', 24, 47, 0, '2016-09-15 00:00:00', '0000-00-00 00:00:00'),
(288, 2, 417, 'Test Lab', 'Savita Madam', '2025503108', 'savita@cdac.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of 10 workbenches.In touch with other vendors. Looking for low cost option.', 6, 2, 'Low', 24, 20, 0, '2016-10-18 00:00:00', '0000-00-00 00:00:00'),
(289, 2, 416, 'Development', 'Ranadheeve Peesari', '9028116262', 'ranadheeve.peesari@tatatechnologies.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Coming up with R&amp;amp;D Lab in 6 months.Looking for benches for this lab. Need to be in touch.', 6, 2, 'Medium', 24, 20, 0, '2016-10-18 00:00:00', '0000-00-00 00:00:00'),
(293, 2, 422, '', 'Cdr Deepak Pandey', '9167102272', 'dpande4navy@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Explained the product to the customer.He liked it and has a requirement of 3 tables with magnifying glass,sockets,perforated sheet and storage bins with a filling board.He already has quotation from Treston and Apzum.We have to give competitive best possible price.', 1, 6, 'High', 26, 36, 0, '2016-10-20 05:44:46', '2017-02-04 05:44:46'),
(294, 2, 423, '', 'Rahul Singh', '9867163213', 'rahul.singh@gargasso.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The customer is a wire manufacturer.He wants to organise his facility with our tables.we need to propose him a design.', 1, 1, 'High', 24, 36, 0, '2016-10-20 00:00:00', '0000-00-00 00:00:00'),
(295, 2, 138, 'MR Testing', 'Deepa', '8022195665', 'deepa@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We received order fo 30 numbers of ESD test bench', 2, 2, 'High', 26, 24, 0, '2016-09-21 05:29:19', '2017-04-03 05:29:19'),
(297, 2, 117, 'Super Components', 'Mr Ramesh jairam', '9900105640', 'ramesh.j@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Having requirement of  300 ESD test benches need to followup closely by September  2017 we will start the purchase procedure  .', 2, 2, 'High', 24, 24, 0, '2016-08-02 07:00:15', '2017-04-03 07:00:15'),
(298, 2, 152, 'Hardware', 'Mr Mervin', '8066116400', 'mervin@cdac.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry will be relaesd by this month end in our spec', 2, 2, 'High', 24, 24, 0, '2016-10-20 06:56:05', '2017-04-03 06:56:05'),
(299, 2, 198, 'System Assembly', 'Mr Murali', '8762440697', 'murali200i@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We will receive inquiry for 2 ESD test bench and 2 ESD chairs by April end.', 2, 2, 'High', 24, 51, 0, '2016-10-20 09:23:23', '2017-04-03 09:23:23'),
(300, 2, 424, 'R and D', 'adthi Sharama', '9166570357', 'aditi.sharma@debel.drdo.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'By May 2017 we will tender inquiry', 2, 2, 'High', 24, 51, 0, '2016-10-24 11:24:37', '2017-04-03 11:24:37'),
(301, 2, 354, 'Civil and Mechanical Division', 'Puli Shravan Kumar', '8025082780', 'shravanp@isac.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This lead we lost because they were comparing Cir q tech.', 2, 2, 'High', 27, 51, 0, '2016-10-18 09:24:35', '2017-04-03 09:24:35'),
(302, 3, 117, 'Super Components', 'Ramesh Jairam', '9090010564', 'Ramesh.j@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Having requirement of 600 chairs Demo already given need to follow up and convince after September will start the purchase procedure', 2, 2, 'High', 24, 24, 0, '2016-09-14 06:59:07', '2017-04-03 06:59:07'),
(303, 5, 117, 'Central research lab BEL', 'Uma Devi Madam', '9880031601', 'umadevi@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Having requirement of 5 numbers of  Elneos 5 already Demo given need to follow up.', 2, 2, 'High', 24, 24, 0, '2016-08-23 00:00:00', '0000-00-00 00:00:00'),
(304, 2, 425, 'Instrumentation Group', 'Mr Anand Lokapure', '8322450348', 'anandl@nio.org', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have visited NIO goa by referance. recevied enquiry from Mr. Anand Lokapure for single esd test bench. They will purchase bench after March as budget  will get sanction by after march. by using his references we have met other peoples in NIO', 8, 5, 'Medium', 24, 31, 0, '2016-10-24 00:00:00', '0000-00-00 00:00:00'),
(306, 2, 428, 'Electronics', 'Vasudevan', '9442220318', 'vasudevan@loyaltextiles.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They require 2 customized ESD workplace systems. The design has been finalized &amp;amp; the offer is in purchase for negotiation', 3, 6, 'High', 24, 24, 0, '2016-10-05 00:00:00', '0000-00-00 00:00:00'),
(307, 2, 429, 'Quality', 'Santosh Nath', '8056161326', 'santosh.nath@nokia.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They need 1 ESD table with cockpit. The design has been submitted &amp;amp; waiting for confirmation.', 3, 6, 'High', 24, 24, 0, '2016-10-24 06:58:09', '2017-04-03 06:58:09'),
(308, 2, 395, 'Engineering Services', 'Valmiki Suryavanshi', '9158000672', 'vsuryavanshi@phoenixcontact.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This project is postponed after March.\r\nNeed to follow up in April.', 6, 1, 'High', 24, 22, 0, '2016-09-25 05:42:32', '2017-04-01 05:42:32'),
(309, 5, 285, 'PT Kanri', 'Vipin Vashishtha', '9672996112', 'vvashishtha@hondacarindia.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'They need 1 basic Elnoes 5 for which we have received the order', 1, 4, 'High', 26, 22, 0, '2016-07-13 00:00:00', '0000-00-00 00:00:00'),
(312, 2, 437, 'Testing Dept', 'satyabrata satapathy', '9945585250', 'satyabrata.satapathy@asteria.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer is having 2 lakhs  per test bench need to give revised offer to close this Lead.', 2, 2, 'High', 21, 24, 0, '2016-11-12 06:06:58', '2017-01-02 06:06:58'),
(313, 2, 437, 'Testing Dept', 'satyabrata satapathy', '9945585250', 'satyabrata.satapathy@asteria.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer is having 2 lakhs  per test bench need to give revised offer to close this Lead.', 2, 2, 'High', 21, 24, 0, '2016-11-12 05:25:15', '2017-04-03 05:25:15'),
(314, 2, 438, 'Electronic Testing', 'shanmukesh', '8080250706', 'Shanmukesh.Nadar@apollo-fire.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Already sent EURO  quote to customer it is in negotiation stage after Christmas we will close this Lead,', 2, 6, 'High', 27, 51, 0, '2016-11-21 08:55:37', '2017-02-13 08:55:37'),
(315, 2, 436, 'CBAMS', 'Kumaresan Sheryas', '9943094278', 'Shreyas.Narasimhamurthy@continental-corporation.co', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'As price was high they have placed order for Cir q tech.', 2, 6, 'High', 27, 51, 0, '2016-11-23 09:19:07', '2017-04-03 09:19:07'),
(316, 2, 384, 'ITI Bangalore', 'Jeayanthi Madam Chirean', '8028503931', 'cmrsmt_bpg@itiltd.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This lead will also required ESD chairs but ITI bangalore wants to place order ESD test bench. this lead will be closed with in March.', 2, 4, 'High', 24, 51, 0, '2016-11-24 00:00:00', '0000-00-00 00:00:00'),
(317, 2, 433, 'Electronics Division', 'Aditi Madam', '9166570357', 'aditi.sharma@debel.drdo.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'May 2017 we will receive the tender inquiry in our specs', 2, 6, 'High', 24, 51, 0, '2016-10-22 09:21:50', '2017-04-03 09:21:50'),
(318, 2, 432, 'FCTS division', 'Prem Ranjan', '9036090153', 'hello.prem.ranjan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'by this week we will expect inquiry for 2 ESD test bench and 2 chairs.', 2, 6, 'High', 24, 51, 0, '2016-11-26 09:15:52', '2017-04-03 09:15:52'),
(319, 2, 434, 'System Assembly', 'murali', '8762440697', 'murali@yahoo.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer has requirement of 2 ESD test bench and they have budget of 5 lakhs for 2 test bench.s next week again we going for follow up', 2, 6, 'High', 24, 51, 0, '2016-11-07 00:00:00', '0000-00-00 00:00:00'),
(320, 2, 435, 'Electrical', 'satyanarayana', '8025086495', 'cns@nal.res.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Having requirement of chemical test bench need to get more details visiting next week.', 2, 6, 'High', 24, 51, 0, '2016-11-22 00:00:00', '0000-00-00 00:00:00'),
(321, 2, 119, 'EMI/EMC lab.', 'Iqbal ahmed', '8025025486', 'iqbalakhan_73@rediffmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Already customer stared processing the inquiry in our spec so need to follow up.', 2, 6, 'High', 24, 51, 0, '2016-11-16 00:00:00', '0000-00-00 00:00:00'),
(322, 3, 439, '', 'Mr Harishankar', '0914024589', 'harisankar_sahoo@gaetec.org', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for 10 Clean Room Chair- WS 1720 RR ESD Classic  and 6qty WS 1711.20 RR ESD Classic,Quotation sent', 4, 5, 'High', 24, 47, 0, '2016-11-14 00:00:00', '0000-00-00 00:00:00'),
(326, 3, 329, '', 'Nachiket Hardas', '0806720870', 'nachiket.hardas.vz@renesas.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inquiry for 6 qty  Esd chairs', 2, 2, 'High', 24, 47, 0, '2016-12-12 05:01:08', '2017-04-01 05:01:08'),
(332, 3, 444, '', 'Vivek Mudliar', '9833567887', 'vivek@neogenchem.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inquiry for lab chairs , coming up with new facility soon ,Follow up', 7, 2, 'High', 24, 47, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(334, 3, 446, '', 'Ajay P Karanjikar', '9850508635', 'karanjikar.ajay@mahindra.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inquiry for werksitz mats', 6, 1, 'Medium', 24, 47, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(336, 3, 448, '', 'ASRC Murthy', '8008003085', 'asrcmurthy@poruslabs.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inquiry for classic stool for lab', 4, 2, 'Medium', 24, 46, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(338, 6, 415, 'ECS', 'Praveen Tandon', '7382327406', 'praveen.tandon@cas.drdo.in', 'Pramod Kumar Jha', '9440249974', 'pkj@cas.drdo.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'High', 24, 46, 0, '2016-10-20 00:00:00', '0000-00-00 00:00:00'),
(339, 2, 353, 'FTO 3', 'K Madhusudhan', '8008555335', 'madhusudhank@drreddys.com', 'MD Fiazuddin', '9618700577', 'mdfaizuddin@drreddys.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 4, 'High', 24, 46, 0, '2016-07-18 00:00:00', '0000-00-00 00:00:00'),
(341, 3, 353, 'Biologics', 'Sidharth Bichpuria', '8978290568', 'sidharthb@drreddys.com', 'C Srinivas', '7893104560', 'csrinivas@drreddys.com', 'Venkata Swamy', '8978981903', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ESD Chairs', 4, 4, 'High', 24, 46, 0, '2016-12-20 05:05:58', '2017-04-01 05:05:58'),
(342, 2, 454, 'Purchase', 'G Srinivas', '9642652555', 'sreenug@medhaindia.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-01 00:00:00', '0000-00-00 00:00:00'),
(343, 2, 459, 'INVAR', 'V Latha', '9491303326', 'latha_vundru@rediffmail.com', 'RS Chalam', '4023469445', 'bdlinvar@bdl-india.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'High', 24, 46, 0, '2016-12-21 00:00:00', '0000-00-00 00:00:00'),
(345, 2, 458, 'IOFS', 'Bolewar Babu', '8455237551', 'babubolewar.ofb@ofb.gov.in', 'Santhi Sri', '8332999299', 'santhi_ramineni@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'High', 24, 46, 0, '2016-12-22 00:00:00', '0000-00-00 00:00:00'),
(346, 2, 457, 'DOS', 'Om Prakash Parida', '9490448032', 'oparida@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 1, 'Medium', 24, 46, 0, '2016-09-10 00:00:00', '0000-00-00 00:00:00'),
(347, 2, 456, 'Purchase', 'Devender Reddy', '4027172018', 'devender.reddy@izenbio.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for complete lab facility', 4, 2, 'Medium', 24, 46, 0, '2016-12-09 00:00:00', '0000-00-00 00:00:00'),
(348, 2, 455, 'SCM', 'M Eswar', '9866154880', 'eswar@avralabs.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(349, 2, 453, '', 'Bhushan Prasad', '0964044446', 'mb_joules@resindia.co.in', 'Narsimha Reddy', '9640454819', 'researchres@resindia.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for complete lab set up', 4, 1, 'High', 24, 46, 0, '2016-12-06 00:00:00', '0000-00-00 00:00:00'),
(350, 2, 452, 'QC', 'Srinivasa Rao J', '9248080342', 'qc1@salicylates.net', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(351, 2, 451, 'E&amp;amp;E', 'Shuvendu Trivedi', '7036056666', 'st.shuv@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-03 00:00:00', '0000-00-00 00:00:00'),
(352, 2, 450, '', 'Vijayarajan R', '9959673192', 'vijayarajan.r@adtl.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-06 00:00:00', '0000-00-00 00:00:00'),
(353, 2, 382, 'EMSD', 'Suvendu Ku Mohapatra', '7416822658', 'suvendu@ecil.co.in', 'SK Mishra', '4027186971', 'sanjivelec@ecil.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-17 00:00:00', '0000-00-00 00:00:00'),
(354, 3, 460, 'Material', 'sachin madulkar', '9021484333', 'sacin.madulkar@freudenberg-filter.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inquiry for Hydro Fit Mat', 6, 2, 'High', 24, 50, 0, '2016-12-26 00:00:00', '0000-00-00 00:00:00'),
(355, 2, 461, 'IMC', 'NVPR Durga Prasad', '9985306588', 'nvpr@bhelrnd.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ESD ELNEOS Connect', 4, 2, 'High', 24, 46, 0, '2016-12-28 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tbl_enquiry` (`Id`, `Product`, `CId`, `CDivision`, `CPersonName`, `CPersonMobile`, `CPersonEmail`, `CPersonName2`, `CPersonMobile2`, `CPersonEmail2`, `CPersonName3`, `CPersonMobile3`, `CPersonEmail3`, `CPersonName4`, `CPersonMobile4`, `CPersonEmail4`, `CPersonName5`, `CPersonMobile5`, `CPersonEmail5`, `CPersonName6`, `CPersonMobile6`, `CPersonEmail6`, `CPersonName7`, `CPersonMobile7`, `CPersonEmail7`, `CPersonName8`, `CPersonMobile8`, `CPersonEmail8`, `CPersonName9`, `CPersonMobile9`, `CPersonEmail9`, `CPersonName10`, `CPersonMobile10`, `CPersonEmail10`, `Description`, `Region`, `Source`, `Priority`, `Status`, `AssignedTo`, `Amount`, `RegTime`, `UpdateTime`) VALUES
(356, 2, 461, 'Power Electronics Systems', 'Shoubhik Mukherjee', '9490760979', 'shoubhik@bhelrnd.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Enquiry for ESD ELNEOS Connect', 4, 2, 'Medium', 24, 46, 0, '2016-12-28 00:00:00', '0000-00-00 00:00:00'),
(357, 3, 459, 'L-Assy &amp;amp; INVAR', 'P Harsha Vardhana Rao', '8333036294', 'bdlbuqcelab@bdl.gov.in', 'V Latha', '9491303326', 'latha_vundru@rediffmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WERSITZ ESD Chairs 250 Nos', 4, 3, 'High', 24, 46, 0, '2017-01-11 05:00:13', '2017-04-01 05:00:13'),
(359, 2, 337, 'RCND', 'Mr Swamy  Saran', '2225591827', 'swamysha@apsara.barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We had visited BARC for his lab requirement. He is having requirement of 1 ESD bench. We have send quotation and technical specification . Tender received from BARC. we have filled tender and waiting for tender to open.', 7, 3, 'High', 24, 31, 0, '2017-01-10 00:00:00', '0000-00-00 00:00:00'),
(360, 2, 337, 'ADD', 'Mr K Venu', '0222559362', 'kvenu@barc.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have visited his Lab for requirement.. He is having requirement of 8 ESD benches.  We have submitted budgetary quotation and Technical spects. waiting for budget approval now', 7, 3, 'Medium', 24, 31, 0, '2016-12-15 00:00:00', '0000-00-00 00:00:00'),
(361, 6, 267, 'Wecores Centre 53', 'Lt Cdr Abhishek Verma', '0222751502', 'averma@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We had kept our table in this department. They are renewing lab. Required 15 numbers, We have send budgetary and technical specification.  Now file is in commercial department. we are waiting for tender', 7, 2, 'High', 24, 34, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(362, 2, 138, 'MR QA', 'Ms Radha', '8022195694', 'charuagrawal@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tender already released and it is proprietary tender BEL has sent to us only inquiry handed over to ARTS now and quote already submitted', 2, 2, 'High', 24, 24, 0, '2016-12-29 07:00:42', '2017-04-03 07:00:42'),
(363, 2, 377, 'Solar Inverter division', 'Mr venkata', '9740624453', 'venkata.ambati@in.abb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have submitted offers and explained and convinced technically this may be a repeat order for test benches', 2, 2, 'High', 24, 24, 0, '2017-01-27 06:47:56', '2017-04-03 06:47:56'),
(364, 7, 377, 'solar invert Repair center', 'Mr Venkata', '9740624453', 'venkata.ambati@in.abb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Technically explained  commercials need to convince', 2, 2, 'High', 24, 24, 0, '2017-01-24 06:48:31', '2017-04-03 06:48:31'),
(366, 2, 327, 'ISRO', 'Mr Rajesh', '0471256954', 'rajesh@iisu.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Quote sent customer is very intend to buy 2 numbers of ESD test bench.', 10, 2, 'High', 24, 51, 0, '2017-01-17 00:00:00', '0000-00-00 00:00:00'),
(367, 2, 468, 'testing', 'Mr Ravindra np', '8041123421', 'ravindranp@dovertech.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Budgetary offer already submitted need to meet once again to finalize on technical details', 2, 2, 'High', 24, 51, 0, '2017-01-13 00:00:00', '0000-00-00 00:00:00'),
(368, 3, 356, 'EEF4', 'Jeevan', '8105682667', 'Jeevan.HebbaluNanjeshappa@in.bosch.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer  is pretty impressed with our ESD chairs already sent one trail chair to them it is in negotiation stage.', 2, 2, 'High', 24, 51, 0, '2017-01-20 09:14:41', '2017-04-03 09:14:41'),
(369, 2, 138, 'HMC super component', 'Ajay kumar', '8022195340', 'ramesh.j@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement is for 25 nos.\r\nAfter april 5 we should approach them for processing.', 2, 5, 'High', 24, 24, 0, '2017-02-04 06:46:23', '2017-04-03 06:46:23'),
(370, 2, 441, 'R and D', 'Mr Murdeswara', '0802565134', 'avmurdeshwar_bgp@itiltd.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer will buy one number of ESD test bench Po will come in April 2017.', 2, 6, 'High', 24, 51, 0, '2017-02-01 09:13:46', '2017-04-03 09:13:46'),
(372, 2, 462, 'Instrumentation', 'Prayagraj  Singh', '1292294734', 'prayagraj@indianoil.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have to submit all the PO copies from defence and govt organisation that we have received till date. He will place a repeat order for the design whichever is suitable for him.', 1, 6, 'High', 24, 36, 0, '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(373, 2, 465, '', 'Shakeel Ahmad', '9868217467', 'ddgcpetl.tec@gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We have to share all the product details and share reference PO copy from govt organisation.', 1, 6, 'High', 24, 36, 0, '2016-12-20 00:00:00', '0000-00-00 00:00:00'),
(375, 2, 466, 'facility planning', 'Yogeshwar Kumar', '8765191138', 'tooling.knp@hal-india.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Explained all the details to the customer.He will send his detailed requirement to us.', 1, 6, 'High', 24, 36, 0, '2017-01-10 00:00:00', '0000-00-00 00:00:00'),
(377, 1, 464, '', 'Rakesh Dubey', '8010833035', 'dubey_rakesh71@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Explained the products to the customer.He wants to change the complete assembly line.We have to give design and quotation for 6 simple non esd assembly tables.', 1, 6, 'Medium', 24, 36, 0, '2017-01-11 00:00:00', '0000-00-00 00:00:00'),
(378, 1, 463, '', 'Dr  Rajesh Kr Ahuja', '9990477433', 'rajeshkrahuja@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The customer wants to setup a lab.We have to keep a demo table at the earliest.', 1, 6, 'High', 24, 36, 0, '2017-01-13 00:00:00', '0000-00-00 00:00:00'),
(379, 1, 473, '', 'Sanjay Kumar', '8527915500', 'sanjayfms12@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer wants 1 table as a demo.If he finds it to be useful then he will procure more as per requirement', 1, 6, 'Medium', 24, 36, 0, '2016-12-13 00:00:00', '0000-00-00 00:00:00'),
(380, 2, 474, '', 'G K Vohra', '9411762575', 'gkvohra@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The customer wants to replace 150 testing and assembly table.We have to send our design and quotation', 1, 6, 'Medium', 24, 36, 0, '2016-12-06 00:00:00', '0000-00-00 00:00:00'),
(381, 2, 243, 'MR Testing', 'Harish  MS', '9663196576', 'harish.ms@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tender is out in our specs this inquiry still under technical eavaluation vy April end we will get this order', 2, 2, 'High', 24, 24, 0, '2017-03-16 00:00:00', '0000-00-00 00:00:00'),
(382, 2, 291, 'R and D Lab', 'Sunil', '9632110829', 'admintdc@tata.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'We got PO for one number of ESD test bench need to work more to get 3 more numbers', 2, 2, 'High', 26, 24, 0, '2017-02-07 00:00:00', '0000-00-00 00:00:00'),
(383, 2, 475, 'Testing', 'Bharath Paramesh', '9902825138', 'Barath.Paramesh@ge.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer  has finalized the design and technically convinced him and also explained about pricing now it is in negotiation stage', 2, 6, 'High', 24, 51, 0, '2017-03-16 00:00:00', '0000-00-00 00:00:00'),
(384, 2, 476, 'RF Lab', 'shanli', '8023497581', 'shanilmk@cellcommsolutions.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Intial discussion over given idea of our product and price they will get back to us by this week end', 2, 6, 'High', 24, 51, 0, '2017-03-28 00:00:00', '0000-00-00 00:00:00'),
(385, 2, 119, 'Radar 5', 'Saleem Javeed', '9740954281', 'fn_sunil@yahoo.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement of 3 ESD test bench and tender will float by April end 2017', 2, 6, 'High', 24, 51, 0, '2017-03-20 00:00:00', '0000-00-00 00:00:00'),
(386, 2, 138, 'HMC super components', 'B Ravi', '8022195340', 'ravi@bel.co.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This will be a repeat order after HMC testing buys', 2, 6, 'High', 24, 51, 0, '2017-01-10 00:00:00', '0000-00-00 00:00:00'),
(387, 2, 354, 'ISITE', 'Vittu Kumar', '8025084021', 'vittu@isac.gov.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Customer has requirement of 50 numbers of \r\nESD test bench we need to work towards putting our specs and compilation is  Testron', 2, 6, 'High', 24, 51, 0, '2017-03-14 00:00:00', '0000-00-00 00:00:00'),
(388, 3, 478, 'Corporate', 'Mr Ashwin Dhekne', '9822302390', 'ashwin.dhekne@act-irs.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'He needs 1 WS 1020 with perforated wood', 6, 4, 'High', 24, 52, 0, '2017-04-04 00:00:00', '0000-00-00 00:00:00'),
(389, 2, 383, 'Avionics', 'KBR Siva prasad', '9494569864', 'dearsivaprasad@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Interested for ESD Work Bench', 4, 2, 'High', 24, 46, 0, '2017-04-07 00:00:00', '0000-00-00 00:00:00'),
(390, 2, 480, 'Quality', 'AV Ramana', '8096907514', 'vramana.adusumilli@hbl.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Interested for ESD Work bench/ ELNEOS 5 &amp;amp; ESD Chairs', 4, 2, 'Medium', 24, 46, 0, '2017-05-04 00:00:00', '0000-00-00 00:00:00'),
(391, 6, 383, 'Avionics Designs', 'TS Padma Priya', '9866068096', 'padmapriyats.hyd@hal-india.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Complete Upgradation of Existing Lab Set up which includes ESD Work benches &amp;amp; ESD Chairs', 4, 2, 'Medium', 24, 46, 0, '2017-04-28 00:00:00', '0000-00-00 00:00:00'),
(392, 2, 480, 'Production', 'RS Sudhakar', '8418247683', 'sudhakarrs@hbl.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ESD Work Benches/ ESD Chairs', 4, 2, 'Medium', 24, 46, 0, '2017-05-04 00:00:00', '0000-00-00 00:00:00'),
(393, 2, 480, 'Production', 'R Leela Ravi', '9948929900', 'leelarani.ravinuthala@hbl.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement for ELNEOS 5/ ELNEOS Connect &amp;amp; WERKSITZ ESD Chairs', 4, 2, 'High', 24, 46, 0, '2017-05-19 00:00:00', '0000-00-00 00:00:00'),
(394, 2, 457, 'Directorate of Instrumentation', 'Abhishek Singh Shakya', '4024584532', 'sci.abhi@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Requirement for ELNEOS 5/ ELNEOS Connect', 4, 6, 'High', 24, 46, 0, '2017-05-13 00:00:00', '0000-00-00 00:00:00'),
(395, 3, 482, 'LED Manufacturing', 'Prashant Girase', '9923451236', 'prashant.girase@bajajelectricals.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '50 ESD Stools required - Quotation submitted', 6, 1, 'High', 24, 52, 600000, '2017-06-28 10:18:37', '2017-07-15 10:18:38'),
(396, 3, 289, 'Pune', 'Ameya Gambhir', '7798830066', 'ameya.gambhir@hella.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Required ESD Chairs for their existing ESD lab. Lock in specs given', 6, 5, 'High', 24, 52, 0, '2017-07-18 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tbl_follow_up`
--

INSERT INTO `tbl_follow_up` (`Id`, `EnqId`, `UserId`, `CompanyId`, `TodaysUpdate`, `NextUpdateDate`, `Amount`, `File`, `RegTime`) VALUES
(1, 2, 20, 252, 'Prashant to invite &amp; inform other departments.', '2016-06-02', 0, '', '2016-05-31 14:11:52'),
(2, 4, 20, 254, 'Quote submitted today.', '2016-06-10', 589000, 'cms-upload/FollowUp/15310324761464947330.pdf', '2016-06-03 15:18:50'),
(3, 5, 20, 255, 'Revised rendering mailed today.', '2016-06-23', 1000000, '', '2016-06-03 15:23:57'),
(4, 4, 20, 254, 'Called him today , he has put up his file with our quote.', '2016-06-13', 0, '', '2016-06-06 17:07:13'),
(5, 3, 20, 257, 'The budget of 50lacs was not approved , submitted revised offer for 5 no''s to accommodate in a budget of Rs 10lacs.', '2016-06-16', 1000000, '', '2016-06-09 10:01:29'),
(6, 9, 23, 259, 'In is process in purchase department', '2016-06-20', 520000, '', '2016-06-14 17:12:51'),
(7, 10, 31, 260, 'Called them they have forwarded all the details in  commercial stage', '2016-06-24', 3000000, '', '2016-06-14 17:33:13'),
(8, 11, 31, 261, 'He is busy in this week I have to call him on 23 and arrange his visit in our office', '2016-06-23', 0, '', '2016-06-14 17:38:23'),
(9, 13, 34, 267, 'Submitted Offer and Specification', '2016-06-29', 5000000, '', '2016-06-14 17:44:10'),
(10, 90, 24, 317, 'Design is finalised and sent to ERFI for EURO prices. ERFI  will directly quote.', '2016-07-08', 0, '', '2016-07-02 12:11:41'),
(11, 17, 24, 208, 'Need to Map more dept and need to visit.', '2016-07-07', 0, '', '2016-07-02 12:14:07'),
(12, 19, 24, 119, 'This case is handed over to Aarjay team Design lock in spec and quote already given to Aaarjay', '2016-07-05', 50000000, '', '2016-07-02 12:21:41'),
(13, 16, 24, 5, 'Purchase dept has contacted us so by next week we will get PO.', '2016-07-05', 500, '', '2016-07-02 12:23:29'),
(14, 20, 24, 6, 'Now sandisk is in transition period we need wait till july /August 2016.', '2016-07-21', 800000, '', '2016-07-02 12:26:26'),
(15, 127, 36, 344, 'We have visited the customer for his specific requirement.He requires lot of third party instruments.we need to give him the design at the earliest.', '2016-07-20', 0, '', '2016-07-13 11:11:10'),
(16, 149, 31, 337, 'Still waiting for budget approval', '2016-08-05', 1200000, '', '2016-08-01 07:41:21'),
(17, 11, 31, 261, 'We have to send our work bench in their lab for demo. Initially they are going for one bench.', '2016-08-02', 400000, '', '2016-08-01 07:55:59'),
(18, 131, 32, 327, 'We received Tender in our specs need quote', '2016-08-16', 400000, '', '2016-08-01 11:54:43'),
(19, 48, 24, 287, 'As their is a delay in getting the  project  they have hold the process of procuring,', '2016-09-01', 500000, '', '2016-08-01 12:54:55'),
(20, 164, 20, 353, 'Visited on 26th July &amp; discussed on their requirement.', '2016-08-16', 0, '', '2016-08-02 09:26:32'),
(21, 164, 20, 353, 'Quote submitted on 1st August.', '2016-08-16', 0, '', '2016-08-02 09:26:57'),
(22, 4, 20, 254, 'visited on 27th July &amp; took follow-up. Revised rendering sent on 2nd August.', '2016-08-16', 589000, '', '2016-08-02 09:29:57'),
(23, 165, 20, 256, 'Visited here once again &amp; discussed in more details on his requirement. He needs table urgently for demo purpose.', '2016-08-17', 0, '', '2016-08-06 11:11:47'),
(24, 167, 20, 360, 'Quote Submitted as per requirement. He will get back to us.', '2016-08-30', 0, '', '2016-08-10 05:45:49'),
(25, 49, 18, 288, 'Need to send different configurations of benches with pricing and also the certification for grounding.', '2016-08-12', 0, '', '2016-08-11 06:16:57'),
(26, 164, 20, 353, 'File put up infront of the management , need to wait for 1 month.', '2016-09-12', 0, '', '2016-08-16 05:26:56'),
(27, 4, 20, 254, 'Babu M is visitng today. we have to get official enquiry.', '2016-08-30', 589000, '', '2016-08-16 05:27:47'),
(28, 173, 18, 373, 'Two design as per customer requirement has been sent,waiting for customer''s approval', '2016-09-12', 0, '', '2016-09-10 04:57:01'),
(29, 185, 18, 369, 'Quotation and rendering sent to agmatel.', '2016-09-16', 186000, '', '2016-09-10 05:08:29'),
(30, 169, 18, 363, 'Sent final revised quotation for 2 ESD workplace and 2 ESD classic chairs. Wating for final approval', '2016-09-14', 582000, '', '2016-09-10 05:13:44'),
(31, 121, 18, 338, 'Quotation has been sent.Design is approval.Shortly we will receive tender with our specs.', '2016-09-20', 830000, '', '2016-09-10 05:22:47'),
(32, 218, 18, 367, 'We cannot provide Sound suppression chamber. Quotation for 4 assembly workstation has been given to the customer.', '2016-09-30', 1030000, '', '2016-09-10 05:33:45'),
(33, 219, 18, 366, 'Customer has a very low budget for such customization.', '2016-09-11', 0, '', '2016-09-10 05:40:18'),
(34, 221, 18, 368, 'Submited quotation and design.', '2016-09-15', 110000, '', '2016-09-10 05:45:33'),
(35, 222, 18, 342, 'submited quotation with design.Waiting for customers approval.', '2016-09-12', 263000, '', '2016-09-10 05:55:31'),
(36, 91, 24, 315, 'I have visited again to flex now they have funds to purchase Elnoes 5 they have given number of Purchase person need contact enquiry given to sinetec.', '2016-09-12', 500000, '', '2016-09-10 12:52:48'),
(37, 94, 38, 308, 'Requirement is in purchase dept  it has ben approved by End user due funds unavailability PO was not placed  we can expect order  by October End.', '2016-10-01', 1200000, '', '2016-09-10 13:23:50'),
(38, 120, 32, 117, 'Now they have requirement for 300 number of ESD test bench and ESD chairs.cost may be 2,00,000 per test bench', '2016-09-12', 0, '', '2016-09-10 13:36:54'),
(39, 246, 32, 117, 'Need call him daily basis to get requirement', '2016-09-12', 250000, '', '2016-09-10 13:42:28'),
(40, 246, 32, 117, 'Need to follow up to get specs from Mr. Vinod .', '2016-09-12', 2500000, '', '2016-09-10 13:43:36'),
(41, 120, 32, 117, '4 months down the lane they will have requirement of  300 nos ESD test bench and 600 ESd chairs', '2016-09-12', 5000000, '', '2016-09-10 13:46:03'),
(42, 155, 32, 354, 'Need visit again on Wednesday.', '2016-09-13', 400000, '', '2016-09-10 13:48:21'),
(43, 150, 31, 337, 'We have submitted design and quote it is finalise  for 2 numbers. now it is in tender stage. we will receive tender with our spects soon.', '2016-09-26', 0, '', '2016-09-13 05:16:12'),
(44, 10, 31, 260, 'Specification free for for 5 test benches . It is now in commercial stage. expected to receive tender by 25 sep with our spects', '2016-09-26', 1200000, '', '2016-09-13 05:18:21'),
(45, 208, 34, 375, 'Tender is published now with our specification we have submitted offer as well as technical compliance. Last date to submit quote is 30 Sep. then Tender will open expecting this order to get by October end.', '2016-09-30', 3500000, '', '2016-09-13 06:56:17'),
(46, 167, 20, 360, 'customer replied on 30.09.16 &amp; informed that it is on hold by the top management.', '2016-11-15', 0, '', '2016-09-30 07:43:09'),
(47, 164, 20, 353, 'As discussed with Ela Reddy Sir , it is still under evaluation.', '2016-11-16', 0, '', '2016-10-03 07:32:14'),
(48, 4, 20, 254, 'Peridot submitted offer of 21lacs , including instruments,against their official enquiry. We will get to know more in this week from end-user.', '2016-10-10', 700000, '', '2016-10-03 07:39:00'),
(49, 169, 18, 363, 'revised quotation sent.they will process it for tendering', '2016-10-15', 610000, '', '2016-10-06 06:38:55'),
(50, 89, 24, 258, 'We May get PO in month of march 2017', '2017-01-27', 0, '', '2016-11-13 10:00:10'),
(51, 90, 24, 317, 'Now we handed over this inquiry to Arts so need to closes as soon as possible.', '2016-11-17', 3000000, '', '2016-11-13 10:02:28'),
(52, 93, 24, 318, 'Now this requirement is immediate customer is ready to place an order but wants deliver by November end', '2016-11-14', 500000, '', '2016-11-13 10:06:47'),
(53, 20, 24, 6, 'Need to call customer now as they told us in previous visit to call in November', '2016-11-18', 700000, '', '2016-11-13 10:09:12'),
(54, 131, 32, 327, 'we will receive PO by December end  2016', '2016-11-30', 400000, '', '2016-11-13 10:13:39'),
(55, 84, 32, 314, 'Now this case has been handed over to Arts.', '2016-12-31', 500000, '', '2016-11-13 10:15:58'),
(56, 240, 38, 318, 'Now requirement is their delivery should be with in November end .', '2016-11-14', 400000, '', '2016-11-13 10:27:06'),
(57, 159, 38, 356, 'Now this case is is handed over to Arts.', '2016-11-30', 600000, '', '2016-11-13 10:28:36'),
(58, 67, 22, 298, 'The Tender has been already out with our specifications. Waiting for the order', '2016-11-21', 0, '', '2016-11-15 06:46:35'),
(59, 308, 22, 395, 'The new lab dimensions we have received. Lab design have to submit for the confirmation.', '2016-11-25', 0, '', '2016-11-15 06:56:49'),
(60, 294, 18, 423, 'We have shared witth many designs but he is not happy with them.He is going to connect us with his architect we have to plan for a solution with him.', '2017-02-20', 0, '', '2017-02-04 05:46:35'),
(61, 331, 18, 443, 'Received order', '2017-02-11', 1170450, '', '2017-02-10 04:39:32'),
(62, 322, 47, 439, 'The enquiry is expected in 8-10 days', '2017-04-24', 0, '', '2017-04-11 04:14:58'),
(63, 336, 47, 448, 'Send best revised quote.', '2017-04-12', 0, '', '2017-04-11 04:24:10'),
(64, 217, 47, 381, 'The project is still on hold', '2017-04-30', 0, '', '2017-04-11 05:57:19'),
(65, 395, 47, 482, 'Quotation submitted', '2017-07-17', 600000, '', '2017-07-15 10:22:09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`Id`, `Email`, `Password`, `Name`, `ContactNumber`, `AccessLevel`, `DisplayStatus`, `LastAccessTime`, `RegTime`) VALUES
(1, 'hemant@dimakhconsultants.com', 'dcpl@', 'Hemant', '9730047806', 'Admin', 'Active', '2017-11-16 03:52:48', '2016-05-11 06:01:50'),
(17, 'milind@dimakhconsultants.com', 'dcpl123', 'Milind', '9865326598', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2016-06-09 10:20:20'),
(18, 'sujata.rajkarne@messung.com', 'messung', 'Sujata Rajkarne', '8390507556', 'Admin', 'Deactive', '2017-11-16 03:52:48', '2017-07-15 10:24:06'),
(19, 'kumar.saurabh@messung.com', 'messung', 'Kumar Saurabh', '8928063881', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2016-06-06 17:15:57'),
(20, 'abhijit.kulkarni@messung.com', 'erfi', 'Abhijit Kulkarni', '9890337201', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2017-07-15 10:24:55'),
(21, 'jitendra.patil@messung.com', 'erfi', 'Jitendra Patil', '9765833383', 'Executive', 'Active', '2017-11-16 03:52:48', '2016-05-30 10:23:58'),
(22, 'jagadish.patil@messung.com', 'erfi', 'Jagadish Patil', '8796810265', 'Admin', 'Active', '2017-11-16 03:52:48', '2016-06-03 14:46:34'),
(23, 'vishal.gholap@messung.com', 'erfi', 'Vishal Gholap', '9664567474', 'Executive', 'Active', '2017-11-16 03:52:48', '2016-05-30 10:26:41'),
(24, 'prashanth.kn@messung.com', 'erfi', 'Prashanth Kn', '9986034057', 'Executive', 'Active', '2017-11-16 03:52:48', '2016-05-30 10:28:13'),
(29, 'prashanth.kn@messung.com', '1111111111', 'New dealer', '9865326598', 'Dealer', 'Deactive', '2017-11-16 03:52:48', '2016-05-30 18:17:48'),
(30, 'jitendra.patil@messung.com', 'optimum', 'Optimum', '9765833383', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:01:07'),
(31, 'vishal.gholap@messung.com', 'vitronics', 'Vitronics', '9664567474', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:02:07'),
(32, 'prashanth.kn@messung.com', 'aarjay', 'Aarjay International', '9986034057', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:01:28'),
(33, 'sujata.rajkarne@messung.com', 'asepl', 'ASEPL', '8390507556', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:02:23'),
(34, 'vishal.gholap@messung.com', 'shubh', 'Shubh Enterprise', '9664567474', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:01:43'),
(35, 'abhijit.kulkarni@messung.com', 'peridot', 'Peridot', '9890337201', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:03:39'),
(36, 'jagdish.patil@messung.com', 'agmatel', 'Agmatel', '8796810265', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:02:44'),
(37, 'kumar.saurabh@messung.com', 'encon', 'Encon systems', '8928063881', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:02:58'),
(38, 'prashanth.kn@messung.com', 'sinetech', 'Sinetech', '9986034057', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:03:23'),
(39, 'jitendra.patil@messung.com', 'prowiz', 'Prowiz', '9765833383', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-05-31 11:00:52'),
(40, 'kumar.saurabh@messung.com', 'erfi', 'Kumar Saurabh', '8928063881', 'Admin', 'Active', '2017-11-16 03:52:48', '2016-06-06 16:58:33'),
(41, 'kumar.saurabh@messung.com', 'vizen', 'Vizen', '8928063881', 'Executive', 'Active', '2017-11-16 03:52:48', '2016-05-31 13:11:07'),
(43, 'jitendra.patil@messung.com', 'revine', 'Revine Technologies', '9765833383', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-06-06 15:59:06'),
(44, 'nikhil.karanjkar@messung.com', 'nikhil', 'Nikhil Karanjkar', '8105281553', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2016-08-29 06:12:01'),
(45, 'uttam.biswas@messung.com', 'uttam', 'Uttam Biswas', '9999767419', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2017-07-15 10:24:33'),
(46, 'ravi.rathi@messung.com', 'erfi', 'Ravi Rathi', '9959311195', 'Executive', 'Active', '2017-11-16 03:52:48', '2016-08-18 07:22:26'),
(47, 'nikhil.karanjkar@messung.com', 'werksitz', 'Nikhil Karanjkar', '8105281553', 'Admin', 'Active', '2017-11-16 03:52:48', '2017-04-01 04:33:13'),
(48, 'madhura.kanade@messung.com', 'werksitz', 'Madhura Kanade', '9730499568', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2016-10-15 06:19:16'),
(49, 'madhura.kanade@messung.com', 'werksitz', 'Madhura Kanade', '9730499568', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2016-10-15 06:18:58'),
(50, 'madhura.kanade@messung.com', 'madhura', 'Madhura Kanade', '9730499568', 'Admin', 'Deactive', '2017-11-16 03:52:48', '2017-07-15 10:25:07'),
(51, 'prashanth.kn@messung.com', 'arts', 'Applied Realtech systems pvt ltd', '9986034057', 'Dealer', 'Active', '2017-11-16 03:52:48', '2016-10-26 06:09:53'),
(52, 'nitin.gharge@messung.com', 'werksitz', 'Nitin Gharge', '9766929242', 'Executive', 'Active', '2017-11-16 03:52:48', '2017-07-15 10:06:23'),
(53, 'ashok.patil@messung.com', 'messung', 'Ashok Patil', '9689882342', 'Admin', 'Active', '2017-11-16 03:52:48', '2017-04-27 06:54:14'),
(54, 'rashmi.bassi@messung.com', 'messung', 'Rashmi Bassi', '9975302078', 'Admin', 'Active', '2017-11-16 03:52:48', '2017-05-11 11:39:31'),
(55, 'siddharth.miya@messung.com', 'siddharth', 'Siddharth Miya', '9717725900', 'Executive', 'Deactive', '2017-11-16 03:52:48', '2017-07-15 10:24:17'),
(56, 'tejaswi.rai@messung.com', 'werksitz', 'Tejaswi Rai', '9980095567', 'Executive', 'Active', '2017-11-16 03:52:48', '2017-07-15 10:07:37');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_ongoing_projects`
--

INSERT INTO `tbl_ongoing_projects` (`Id`, `SubCategory`, `Name`, `DisplayStatus`, `RegTime`) VALUES
(1, '', 'Standard Test Bench', 'Publish', '2016-05-09 00:00:00'),
(2, '', 'ESD Test Bench', 'Publish', '2016-05-09 00:00:00'),
(3, '', 'Werksitz Chairs', 'Publish', '2016-05-09 00:00:00'),
(4, '', 'Werksitz mats', 'Publish', '2016-05-09 00:00:00'),
(5, '', 'Elneos 5 - Standalone', 'Publish', '2016-05-09 00:00:00'),
(6, '', 'Elneos 5 - Cockpit', 'Publish', '2016-05-09 00:00:00'),
(7, '', 'CAN Class Testers', 'Publish', '2016-05-30 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_reminders`
--

INSERT INTO `tbl_reminders` (`Id`, `UserId`, `Title`, `Description`, `ReminderDate`, `RegTime`) VALUES
(1, 24, 'TVS Visit', 'to collect instrument', '2016-05-31', '2016-05-30 17:07:09'),
(2, 24, 'Mahindra reva', 'To call sarvanan', '2016-06-09', '2016-06-08 13:19:18');

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
(17, 'Enquiry Type', 'Open', 'Open'),
(18, 'Enquiry Type', 'Warm', 'Warm'),
(19, 'Enquiry Type', 'Cold', 'Cold'),
(21, 'Enquiry Status', 'Not Interested', 'Not Interested'),
(24, 'Enquiry Status', 'Open', 'Open'),
(26, 'Enquiry Status', 'Closed', 'Closed'),
(27, 'Enquiry Status', 'Lost', 'Lost'),
(28, 'Enquiry Type', 'Urgent', 'Urgent');

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
(1, 'Exhibition'),
(2, 'Personal visit'),
(3, 'Cold calls'),
(4, 'Direct Enquiry'),
(5, 'Reference'),
(6, 'Distributor lead');

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

CREATE ALGORITHM=UNDEFINED DEFINER=`enquiry`@`localhost` SQL SECURITY DEFINER VIEW `enquiry_details` AS select `en`.`Id` AS `EnqId`,`en`.`Product` AS `ProId`,`pr`.`Name` AS `ProName`,`en`.`CId` AS `CId`,`ci`.`CName` AS `CName`,`ci`.`CAddress` AS `CAddress`,`ci`.`CPhoneNo` AS `CPhoneNo`,`ci`.`CDisplayStatus` AS `CDisplayStatus`,`en`.`CPersonName` AS `CPersonName`,`en`.`CPersonMobile` AS `CPersonMobile`,`en`.`CPersonEmail` AS `CPersonEmail`,`en`.`Description` AS `Description`,`en`.`Region` AS `RegionId`,`re`.`Title` AS `RegionName`,`en`.`Source` AS `SourceId`,`so`.`Title` AS `SourceName`,`en`.`Priority` AS `Priority`,`en`.`Status` AS `Status`,`sc`.`Key` AS `EnqStatus`,`en`.`AssignedTo` AS `AssignedTo`,`ma`.`Name` AS `AssignedToName`,`ma`.`Email` AS `AssignedToEmail`,`en`.`Amount` AS `Amount`,`en`.`RegTime` AS `RegTime`,`en`.`UpdateTime` AS `UpdateTime` from ((((((`tbl_enquiry` `en` join `tbl_ongoing_projects` `pr` on((`en`.`Product` = `pr`.`Id`))) join `tbl_company` `ci` on((`en`.`CId` = `ci`.`Id`))) join `tbl_region` `re` on((`en`.`Region` = `re`.`Id`))) join `tbl_source` `so` on((`en`.`Source` = `so`.`Id`))) join `tbl_site_codes` `sc` on((`en`.`Status` = `sc`.`Id`))) join `tbl_manager` `ma` on((`en`.`AssignedTo` = `ma`.`Id`)));



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
