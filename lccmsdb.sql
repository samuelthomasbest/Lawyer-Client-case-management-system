-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2021 at 04:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lccmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientcase`
--

DROP TABLE IF EXISTS `clientcase`;
CREATE TABLE IF NOT EXISTS `clientcase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `sex` varchar(120) DEFAULT NULL,
  `placeofbirth` varchar(120) DEFAULT NULL,
  `country` varchar(120) DEFAULT NULL,
  `city` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `homephone` int(15) DEFAULT NULL,
  `workphone` int(15) DEFAULT NULL,
  `casetype` varchar(120) DEFAULT NULL,
  `casedetail` varchar(1000) DEFAULT NULL,
  `insertpic` varchar(120) DEFAULT NULL,
  `insertdoc` varchar(120) DEFAULT NULL,
  `insertnote` varchar(120) DEFAULT NULL,
  `insertmanual` varchar(120) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `courtdate` date DEFAULT NULL,
  `emergpname` varchar(120) DEFAULT NULL,
  `emergpphone` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientcase`
--

INSERT INTO `clientcase` (`id`, `fullName`, `sex`, `placeofbirth`, `country`, `city`, `email`, `homephone`, `workphone`, `casetype`, `casedetail`, `insertpic`, `insertdoc`, `insertnote`, `insertmanual`, `address`, `courtdate`, `emergpname`, `emergpphone`) VALUES
(12, 'Gojam Teklu', 'Female', 'Gonder', 'Ethiopia', 'Addis Ababa', 'GojamTeklu89@gmail.com', 117895467, 976567892, 'Family Cases', 'The students in the Student Law Office drafted a management agreement for a client who was concerned that there was nothing in place to formalize his relationship with the band he\r\nwas managing, known as â€œThe Watchersâ€ despite him having effectively contributed to the bandâ€™s success. The management agreement formalised the clientâ€™s relationship with the band and protected his legal position.', 'girl-avatar-cartoon-stock-vector-image-cute-beautiful-eyes-93364804.jpg', 'SeriesF_89e.pdf', 'Court Date will be next month', 'SeriesF_89e.pdf', 'Addis Ababa Lideta sub-City Woreda 03', '2021-04-01', 'Feven Zewudu', 965456789),
(27, 'Meron Ashagere', 'Female', 'Addis Abeba', 'Ethiopia', 'Addis Ababa', 'MeronAshagere@gmail.com', 111678909, 922345678, 'Criminal Cases', 'Mr Meron Ashagere was the victim of an armed robbery during the course of his employment as a Cash Transit Officer. He suffered from Post Traumatic Stress Disorder following this incident lasting for almost two years at the date of hearing with symptoms expected to resolve slowly over many years. Having been refused Criminal Injuries Compensation by the CICA the Student Law Office successfully helped Mr G appeal this decision. We represented Mr G at his hearing\r\nand he was awarded Â£8,200 in compensation as a result.', 'young-woman-avatar-cartoon-character-profile-picture_18591-55054.jpg', 'SeriesF_89e.pdf', 'Court date will be next week', 'www_northumbria_ac_uk_about_us_academic_departments_northumb (1).pdf', 'Addis Ababa Akaki Kality sub-city woreda 4 House Number B56/09', '2021-03-14', 'Arage Gojam Abate', 928909989),
(14, 'Kasahun Debalke', 'Male', 'Harer', 'Ethiopia', 'Addis Ababa', 'KasahunDebalke90@gmail.com', 117894123, 955554567, 'business and financial cases', 'Mrs E is a carer for his brother who has a number of health problems and disabilities. He had applied for Disability Living Allowance to help with these problems but this had been refused. The Student Law Ofô€ƒ«ce assisted with a beneô€ƒ«t tribunal obtaining supporting medical\r\nevidence, preparing arguments for and attending to represent at the tribunal hearing. As a result the client was awarded backdated beneô€ƒ«t amounting to in excess of Â£7,000 together with an ongoing extra weekly payment of Â£136.60.', 'avatar-young-bearded-guy-brow-haired-man-vector-32416677.jpg', 'SeriesF_89e.pdf', 'Court date will be Next week and the case is very serious i have to refer some Manuals additionally.', 'SeriesF_89e.pdf', 'Holeta kebele 09', '2021-03-25', 'Hayat Ezedin', 978121234),
(25, 'Gebremedhin Belay', 'Male', 'Mekele', 'Ethiopia', 'Addis Ababa', 'GebremedhinBelay@gmail.com', 116789099, 912345434, 'business and financial cases', 'Just before Christmas, Mrs P found that Â£2000 was missing from him bank account. She discovered that unknown to her; a man claiming to be her landlord had made a claim against her, which she had not received as it went to a previously rented property. He had therefore\r\nobtained judgment, and frozen funds in her bank account, to satisfy the judgment. Two students in the Student Law Office acted for Mrs P in the proceedings, helping her to get the judgment set aside by making the application and representing her at that hearing. They\r\nthen prepared a de fence and counterclaim. As a result, the landlord dropped his claim against him, and the money was subsequently returned to her bank.', 'istockphoto-478218337-612x612.jpg', 'SeriesF_89e.pdf', 'Mekele Reference  will be needed and next week will be the court date', 'SeriesF_89e.pdf', 'Kolfe Keranio Sub-City Woreda4 House Number B6789', '2021-03-30', 'Kedir Ahmed', 966662123),
(20, 'Delamo Kassa', 'Male', 'Wolayita', 'Ethiopia', 'Addis Ababa', 'DelamoKassa99@gmail.com', 117800909, 967767789, 'Landlord/tenant issues', 'The students in the Student Law Office drafted a management agreement for a client who was concerned that there was nothing in place to formalize his relationship with the band he was managing, known as â€œThe Watchersâ€ despite him having effectively contributed to the bandâ€™s success. The management', 'depositphotos_179308460-stock-illustration-unknown-person-silhouette-profile-picture.jpg', 'SeriesF_89e.pdf', 'Court date will be next month', 'SeriesF_89e.pdf', 'Gulele Sub-City Shiromeda', '2021-04-05', 'Tewodros kassa', 945455678),
(17, 'Betehlehem Gizachew', 'Female', 'Metu', 'Ethiopia', 'Addis Ababa', 'Betehlehemgizachew@gmail.com', 117893456, 978554567, 'marriage cases', 'Ms Betehlehem Gizachew is a carer for her brother who has a number of health problems and disabilities. He had applied for Disability Living Allowance to help with these problems but this had been refused. The Student Law Office assisted with a Benet tribunal obtaining supporting medical\r\nevidence, preparing arguments for and attending to represent at the tribunal hearing. As a result the client was awarded backdated benet amounting to in excess of Â£7,000 together with an ongoing extra weekly payment of Â£136.60.', 'girl-avatar-cartoon-stock-vector-image-cute-beautiful-eyes-93364804.jpg', 'SeriesF_89e.pdf', 'Court date will be soon', 'SeriesF_89e.pdf', 'Addis Ababa Yeka woreda 7 Kebele 24', '2021-03-13', 'Alemu Chakaw', 989886756),
(21, 'Abebe Hailu', 'Male', 'Addis Abeba', 'Ethiopia', 'Addis Ababa', 'Abebehailu89@gmail.com', 116789089, 923453245, 'Civil Cases', 'Students represented a group of parents of disabled children whose home transport was removed by a local authority. Following a series of complaints brought by students on their behalf to the Local Government Ombudsman in 2007, the case worker dealing with the matter decided that there was no maladministration in any but two out of ten cases. The Student Law Office challenged these decisions and notified the Ombudsman of intention to commence judicial review. The matter was then considered by the chief ombudsman of the northern region who decided personally to re investigate all cases in January 2008. Her investigation is still ongoing.', 'images.jpg', 'SeriesF_89e.pdf', 'Its Important case', 'SeriesF_89e.pdf', 'Akaki Kality Woreda 5 Kebele 09', '2021-03-13', 'Binyam Kebede', 97878898),
(22, 'Mulunesh Feseha', 'Female', 'Addis Abeba', 'Ethiopia', 'Addis Ababa', 'muluneshfeseha@gmail.com', 115621349, 912387953, 'Landlord/tenant issues', 'Mr L was issued with numerous parking tickets for parking on a street where double yellow lines had temporarily been removed pending re-painting. Mr L pleaded not guilty but missed his trial date and was convicted in his absence. Some considerable time after the deadline for appeal had passed, Mr L came to the Student Law Office for help in appealing this decision. The students researched his case and successfully applied to appeal the case out of time to the Crown Court. The case was listed for an appeal hearing and the students gathered evidence to support Mr L. When the evidence was submitted to the Prosecution, they decided not to oppose the appeal and the conviction was overturned.', 'young-woman-avatar-cartoon-character-profile-picture_18591-55054.jpg', 'SeriesF_89e.pdf', 'Next week will be the Court date', 'SeriesF_89e.pdf', 'Nefas Sil Lafto woreda 10', '2021-03-14', 'Andarge Hassen', 916789098),
(23, 'Melkamu Gedion', 'Male', 'Arbaminch', 'Ethiopia', 'Addis Ababa', 'me1kamugedion78@gmail.com', 116543256, 923121234, 'business and financial cases', 'The students in the Student Law Office drafted a management agreement for a client who was concerned that there was nothing in place to formalize his relationship with the band he was managing, known as â€œThe Watchersâ€ despite him having effectively contributed to the bandâ€™s success. The management agreement formalized the clientâ€™s relationship with the band and protected his legal position.', 'young-man-avatar-cartoon-character-profile-picture-TC667N.jpg', 'SeriesF_89e.pdf', 'Court date will be next week', 'SeriesF_89e.pdf', 'Kolfe Keranio Woreda 3 Selam Sefer', '2021-03-14', 'Enatalem Ashagere', 956552345),
(24, 'Saron Haile', 'Female', 'Hawasa', 'Ethiopia', 'Addis Ababa', 'saronhaile67@gmail.com', 116500975, 954453245, 'marriage cases', 'Mr M was viciously attacked by unknown assailants following a night out with friends. He suffered a fracture of the orbital bone cavity of his right eye requiring two operations and leaving him with permanent scarring. Having been refused Criminal Injuries Compensation by the CICA the Student Law Office successfully helped Mr M appeal this decision. We represented Mr M at his hearing he was awarded Â£2,200 in compensation as a result.', 'young-woman-avatar-cartoon-character-profile-picture_18591-55054.jpg', 'SeriesF_89e.pdf', 'Court will be next week', 'SeriesF_89e.pdf', 'Arada Sub-City Piasa woreda 5', '2021-03-14', 'Helen Sahelu', 923234567),
(26, 'Yohannes Kebede', 'Male', 'Adama', 'Ethiopia', 'Addis Ababa', 'yohanneskebede67@gmail.com', 111678900, 912345678, 'Landlord/tenant issues', 'Cases all about He wants to Take his parents Home after death.......', 'avatar.jpg', 'SeriesF_89e.pdf', 'Cases all about He wants to Take his parents Home after death.......', 'SeriesF_89e.pdf', 'Addis Ababa Lideta sub-City Woreda 03', '2021-03-07', 'Samuel Teklu', 911678909),
(29, 'Tewodros Bedlu', 'Male', 'Addis Abeba', 'Ethiopia', 'Addis Ababa', 'tedrosman7@gmail.com', 116741209, 922195067, 'marriage cases', 'Mr Tewodros was the victim of an armed robbery during the course of his employment as a Cash Transit Officer. He suffered from Post Traumatic Stress Disorder following this incident lasting for almost two years at the date of hearing with symptoms expected to resolve slowly over\r\nmany years. Having been refused Criminal Injuries Compensation by the CICA the Student Law Office successfully helped Mr G appeal this decision. We represented Mr G at his hearing and he was awarded Â£8,200 in compensation as a result.', 'depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', 'SeriesF_89e.pdf', 'Court Cases will be hard', 'SeriesF_89e.pdf', 'Addis Ababa Lideta sub-City Woreda 03', '2021-03-14', 'Samuel Argaw', 912656966),
(30, 'Merga Hambisa', 'Male', 'Asosa', 'Ethiopia', 'Addis Ababa', 'mergahambisa56@gmail.com', 115643090, 945455432, 'business and financial cases', 'The students in the Student Law Office drafted a management agreement for a client who was concerned that there was nothing in place to formalize his relationship with the band he was managing, known as â€œThe Watchersâ€ despite him having effectively contributed to the bandâ€™s success. The management agreement formalized the clientâ€™s relationship with the band and protected his legal position.', 'avatar-young-bearded-guy-brow-haired-man-vector-32416677.jpg', 'SeriesF_89e.pdf', 'Court date will be next week', 'SeriesF_89e.pdf', 'Lemi Kura Sub-City Woreda 1', '2021-03-14', 'Kasahun Feseha', 912128990);

-- --------------------------------------------------------

--
-- Table structure for table `lawyertable`
--

DROP TABLE IF EXISTS `lawyertable`;
CREATE TABLE IF NOT EXISTS `lawyertable` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyertable`
--

INSERT INTO `lawyertable` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Daniel Gemechu Lawyer Office', 'admin', 922195075, 'danielgemechu78@gmail.com', '12345', '2021-03-07 07:26:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
