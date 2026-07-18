-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2026 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles_record`
--

CREATE TABLE `articles_record` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(254) DEFAULT NULL,
  `article_date` varchar(200) DEFAULT NULL,
  `article_author` varchar(254) DEFAULT NULL,
  `article_content` text DEFAULT NULL,
  `article_image` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles_record`
--

INSERT INTO `articles_record` (`article_id`, `article_title`, `article_date`, `article_author`, `article_content`, `article_image`) VALUES
(1, 'THE BEGINING OF MINISTRY IN NIGERIA PART 0', '22 - 04 - 2021', 'Harry Porter', 'please i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business includingplease i have almost everything to start a small computer training and business center in our place, i  have Generator, I have systems, I have more than the required knowledge to run it, but I don’t have startup capital in the place I can run many services and business including				\r\n			', '../images/THE_BEGINING_OF_MINISTRY_IN_NIGERIA_PART_0.jpg'),
(4, 'THE ATTONING POWER OF THE BLOOD', '01 / 05 / 2021', 'Philip Odeh', 'cursus mi quis pulvinar fermentum. Nulla malesuada eget arcu vulputate auctor. Pellentesque a molestie neque. Praesent blandit sem quam, nec malesuada tellus consequat dignissim. Ut eleifend at nisl et condimentum. Praesent viverra, lectus at molestie fringilla, metus augue vehicula mauris, vitae fringilla turpis nibh eget velit. Sed rhoncus commodo diam eget pulvinar.\r\n\r\nQuisque maximus scelerisque orci, at pharetra neque eleifend nec. Duis orci nisi, eleifend ut ante sollicitudin, maximus mattis justo. Aenean mollis eros ut ante malesuada, nec dictum dui cursus. Aliquam aliquet ut ipsum sed posuere. Etiam mauris metus, mollis vel massa et, cursus viverra mi. In orci nibh, fringilla sit amet fringilla ac, placerat ut massa. Sed ut sodales lectus. Proin aliquet vestibulum magna, quis dignissim lectus viverra nec. Donec at tellus lobortis, ullamcorper ex non, tristique justo. Aliquam non pellentesque tortor. Fusce sed arcu id ligula euismod faucibus. Integer enim eros, bibendum vel porttitor id, scelerisque eget erat. Cras egestas volutpat faucibus. Mauris in lectus lacinia, cursus lorem eget, commodo enim.\r\n\r\nPraesent auctor quis enim eget laoreet. Mauris in ligula sed purus malesuada accumsan. In tempus enim id purus malesuada, a aliquam sapien maximus. Etiam ullamcorper mi pretium arcu facilisis, fringilla cursus lorem tincidunt. Donec non felis nec neque condimentum efficitur. Nam pretium mollis mauris, quis interdum purus vehicula sit amet. Proin eu tortor quis tellus ultricies imperdiet non ut elit. Donec imperdiet leo eu diam tincidunt vehicula. Nunc hendrerit scelerisque urna, et condimentum est varius sit amet.\r\n\r\nCurabitur quis elit malesuada, pellentesque lectus vitae, luctus velit. Pellentesque interdum neque non ante lacinia, id gravida orci tristique. Maecenas magna urna, iaculis eu feugiat nec, elementum at erat. Donec a scelerisque massa, sit amet tincidunt nibh. Duis non arcu in risus scelerisque congue. Sed tincidunt tellus a erat luctus, vel venenatis nunc mattis. Aliquam erat volutpat. Morbi dictum nunc non scelerisque porta. Nam finibus quam vel ipsum ultrices, nec dictum lectus porttitor. Fusce ut quam lectus. Pellentesque lacinia vitae dolor ac egestas. Pellentesque posuere nulla eget urna euismod, vel porttitor urna tincidunt. Nullam nec pellentesque dolor. Fusce vitae felis ac magna faucibus egestas eu id lorem.\r\n\r\nEtiam sagittis tempor orci quis vulputate. Ut egestas molestie mollis. Suspendisse vulputate auctor augue vel posuere. Maecenas facilisis tortor vel orci porta, posuere commodo odio consectetur. Quisque vestibulum bibendum leo, vel aliquet nisi efficitur ac. Nullam dui neque, venenatis vel orci facilisis, varius ultrices lacus. Praesent vulputate augue risus, id volutpat massa faucibus vitae. Mauris eros turpis, molestie id bibendum ut, lobortis quis quam. Aenean sodales fringilla blandit. Maecenas dignissim elit vitae nisl condimentum, sed auctor arcu posuere. Proin luctus odio nec velit blandit, at auctor nulla vulputate. Integer ullamcorper ligula egestas augue molestie fringilla. Nunc imperdiet cursus arcu vel consequat. Morbi vitae magna fermentum, luctus sem non, viverra risus. Donec elit nisi, sodales sed lacus nec, mattis luctus enim. Donec et porttitor arcu, nec hendrerit dui.				\r\n		', '../images/THE_ATTONING_POWER_OF_THE_BLOOD.jpg'),
(5, 'THE PROGRAMMING FUN FOR ALL', '26 / 05 / 2021', 'Harry Porter', 'The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:The XMLHttpRequest object is used to exchange data with a server.\r\n\r\nSend a Request To a Server\r\nTo send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:				\r\n			', '../images/THE_PROGRAMMING_FUN_FOR_ALL.jpg'),
(6, 'THE BEGINIG OF MY EXPLOSION AS A TECH PERSON THE GREATEST NIGGER', '21 / 06 / 2021', 'Philip Odeh', 'LETTER OF INTRODUCTION\r\nI write to introduce our organization to your esteem origination the services we offer our organization offer the following services efficiently and in the most professional manner this services include \r\n	Computer maintenance and repairs\r\n	Computer networking \r\n	Website design\r\n	Software development\r\n	And other ICT related services\r\nWe will be very happy to offer our services to your organization to the best price and professionalism \r\nThank you very much\r\nYours faithfully\r\nPhilip odeh\r\n\r\nChief tech officer\r\n				\r\n			', '../images/THE_BEGINIG_OF_MY_EXPLOSION_AS_A_TECH_PERSON_THE_GREATEST_NIGGER.jpg'),
(7, 'THE BEGINING OF MINISTRY IN NIGERIA', '19 / 07 / 2021', 'Harry Porter', 'Hello and good day.\r\nI wish to introduce to your organization our services and hope for your patronage.\r\nOur organization Prince Sam Enterprise offers the following services.\r\n	Computer repairs and mobile phone repairs\r\n	Sales of mobile phone and computer accessories.\r\n	computer networking\r\n	Website design\r\n	Graphic Design\r\n	Application development (web mobile and desktop apps).\r\n	Computer training \r\n	Sales and Supply of Computers \r\n	And other ICT matter\r\nWe are also experience in designing and setup of computer labs, business center, café, betnijja  and jamb CBT centers.\r\nWe will be very delighted to do business with you and promise our outmost professional delivery to your needs.\r\nYour faithfully.\r\nPhilip Odeh (C.T.O).\r\n\r\nManagement\r\nPrince Sam Enterprise\r\n', '../images/THE_BEGINING_OF_MINISTRY_IN_NIGERIA.jpg'),
(8, 'TESTING MAILER', '15 / 09 / 2021', 'Philip Odeh', 'HELLO MAILER PLS WORK HELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORKHELLO MAILER PLS WORK	', '../images/TESTING_MAILER.jpg'),
(9, 'TESTING MAILER', '15 / 09 / 2021', 'Innalegu Adams', '				\r\n			Dr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOneDr.LikiTaOne', '../images/TESTING_MAILER.jpg'),
(10, 'IT START UPS IN KADUNA', '18 / 07 / 2026', 'Philip Odeh', '				\r\n			Kaduna is rapidly emerging as the premier technology hub of Northern Nigeria, transitioning into a vibrant destination for digital innovation. Driven by a lower cost of living, improving infrastructure, and strategic government backing, the city is fostering a unique ecosystem tailored to local and global digital markets.The Catalyst for GrowthHistorically, Nigeria’s tech ecosystem has been heavily concentrated in Lagos. However, Kaduna presents a strategic alternative, boasting an environment characterized by:Favorable Business Conditions: Startups in Kaduna benefit from significantly lower operational and overhead costs compared to coastal metropolises.Supportive Infrastructure: Facilities such as the KAD ICT HUB and CoLab, the city’s first dedicated innovation workspace, provide internet access, training, and incubation.Government and Legal Support: Kaduna is solidifying its status by domesticating the national framework through the Kaduna State Startup Act, offering benefits for tech-enabled businesses and positioning the state as a leading digital technology center.Key Sectors and InnovationsEntrepreneurs in Kaduna are leveraging digital tools to solve localized problems while expanding their reach globally. Top sectors driving this growth include:EdTech: Platforms like Schoola, an educational empowerment and alternative learning platform incubated locally, have gained regional and continental acclaim.FinTech: Startups such as Sudo Africa have attracted international attention and millions in venture funding, proving that northern-based ideas can scale globally.Agritech: Programs incubated at local hubs actively foster digital solutions for farmers to enhance productivity and reach.Challenges and the Path ForwardDespite this positive trajectory, startups in Kaduna still face notable hurdles. Chief among these is access to venture capital, as the bulk of early-stage funding in Nigeria continues to favor coastal hubs. Furthermore, retaining specialized talent remains a challenge, even as local hubs aggressively train thousands of youths annually.The continued success and scaling of Kaduna’s tech ecosystem will rely on robust public-private partnerships, expanding optic fiber infrastructure, and translating grassroots digital skill acquisition into high-impact, scalable business models.If you want to dive deeper, let me know:', '../images/IT_START_UPS_IN_KADUNA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `ID` int(11) NOT NULL,
  `IMG_LINK` varchar(255) DEFAULT NULL,
  `HEAD_TEXT` varchar(255) DEFAULT NULL,
  `AWARD_DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`ID`, `IMG_LINK`, `HEAD_TEXT`, `AWARD_DESCRIPTION`) VALUES
(1, 'images/award1.jpg', 'BTSK MERIT AWARD BEST TEACHER 2020', 'Rev.Dr. Obadia Likita won the best lecturer award at the BTSK LECTURER\r\n							Award the  award was presented by Dr. Moses Audi the School President'),
(2, 'images/award2.jpg', NULL, NULL),
(3, 'images/award3.jpg', NULL, NULL),
(4, 'images/award4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `NAME_BLUE` varchar(255) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `TITLE_BLUE` varchar(255) NOT NULL,
  `INTRO` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `NAME`, `NAME_BLUE`, `TITLE`, `TITLE_BLUE`, `INTRO`) VALUES
(1, 'REV.OBADIA', 'LIKITA', 'PASTOR, LECTURER, AUTHOR, PROPIATOR, AND', 'FATHER', 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `ID` int(11) NOT NULL,
  `LEVEL` varchar(255) DEFAULT NULL,
  `START_YEAR` varchar(255) DEFAULT NULL,
  `END_YEAR` varchar(255) DEFAULT NULL,
  `CONTENT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ID`, `LEVEL`, `START_YEAR`, `END_YEAR`, `CONTENT`) VALUES
(1, 'Doctorate Degree', '2000', '2003', 'DR. Likita Obtained his Doctorate degree at Baptist Theological Seminary Kaduna. after which he was given a lecturing job at thesame school.'),
(2, 'Masters Degree', '1993', '1995', 'DR. Likita Obtained his Doctorate degree at Baptist Theological Seminary Kaduna. after which he was given a lecturing job at thesame school.'),
(3, 'Bachelors Degree', '1993', '1995', 'DR. Likita Obtained his Doctorate degree at Baptist Theological Seminary Kaduna. after which he was given a lecturing job at thesame school.'),
(4, 'O\'Level', '1993', '1995', 'DR. Likita Obtained his Doctorate degree at Baptist Theological Seminary Kaduna. after which he was given a lecturing job at thesame school.'),
(5, 'Primary School Cert', '1993', '1995', 'DR. Likita Obtained his Doctorate degree at Baptist Theological Seminary Kaduna. after which he was given a lecturing job at thesame school.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `ID` int(11) NOT NULL,
  `BOOK_COVER` varchar(255) DEFAULT NULL,
  `LINK` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`ID`, `BOOK_COVER`, `LINK`, `DESCRIPTION`) VALUES
(1, 'images/publication1.jpg', 'https://paystack.com/buy/sin-destroys-the-sinner-ulumta', 'which he has been adjudged guilty. But it appears to him, that the only remarkable features of the sketch are its frank and genuine good-humor, and the general accuracy with which he has conveyed his sincere im¬pressions of the characters therein described. As to enmity, or ill-feeling of any kind, personal or political, he utterly disclaims such motives. The sketch might, perhaps, have been wholly omitted, without loss to the public or detriment to the book; but, having under¬taken to write it, he conceives that it could not have been done in a better or a kindlier spirit, nor, so far as his abilities availed, with a livelier effect of truth.\r\n						The author is constrained, therefore, to republish his introductory sketch without the change of a word.\r\n						Saxbm, March 30, 1850.'),
(2, 'images/publication2.jpg', 'https://paystack.com/buy/sin-destroys-the-sinner-ulumta', 'which he has been adjudged guilty. But it appears to him, that the only remarkable features of the sketch are its frank and genuine good-humor, and the general accuracy with which he has conveyed his sincere im¬pressions of the characters therein described. As to enmity, or ill-feeling of any kind, personal or political, he utterly disclaims 						such motives. The sketch might, perhaps, have been wholly omitted, without loss to the public or detriment to the book; but, having under¬taken to write it, he conceives that it could not have been done in a bette or a kindlier spirit, nor, so far as his abilities availed, with a livelier effect of truth. The author is constrained, therefore, to republish his introductory sketch without the change of a word. Saxbm, March 30, 1850.'),
(3, 'images/publication3.jpg', 'https://paystack.com/buy/sin-destroys-the-sinner-ulumta', 'which he has been adjudged guilty. But it appears to him, that the only remarkable features of the sketch are its frank and genuine good-humor, and the general accuracy with which he has conveyed his sincere im¬pressions of the characters therein described. As to enmity, or ill-feeling of any kind, personal or political, he utterly disclaims such motives. The sketch might, perhaps, have been wholly omitted, without loss to the public or detriment to the book; but, having under¬taken to write it, he conceives that it could not have been done in a better or a kindlier spirit, nor, so far as his abilities availed, with a livelier effect of truth.\r\n						The author is constrained, therefore, to republish his introductory sketch without the change of a word.\r\n						Saxbm, March 30, 1850.'),
(4, 'images/publication4.jpg', 'https://paystack.com/buy/sin-destroys-the-sinner-ulumta', 'which he has been adjudged guilty. But it appears to him, that the only remarkable features of the sketch are its frank and genuine good-humor, and the general accuracy with which he has conveyed his sincere im¬pressions of the characters therein described. As to enmity, or ill-feeling of any kind, personal or political, he utterly disclaims such motives. The sketch might, perhaps, have been wholly omitted, without loss to the public or detriment to the book; but, having under¬taken to write it, he conceives that it could not have been done in a better or a kindlier spirit, nor, so far as his abilities availed, with a livelier effect of truth.\r\n						The author is constrained, therefore, to republish his introductory sketch without the change of a word.\r\n						Saxbm, March 30, 1850.');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `ID` int(11) NOT NULL,
  `POST` varchar(255) DEFAULT NULL,
  `DATE_STARTED` varchar(255) DEFAULT NULL,
  `END_DATE` varchar(255) DEFAULT NULL,
  `CONTENT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`ID`, `POST`, `DATE_STARTED`, `END_DATE`, `CONTENT`) VALUES
(1, 'LECTURER BTSK', '2018 ', 'Date.', 'After fininshing his Doctorate degree in systematic theology he was retained as a lecture at BTSK (BAPTIST THEOLOGICAL SEMINARY KAWO KADUNA). There he has been serving the lord faithfully.'),
(2, 'F.B.C ABUJA', '2002', '2002', 'After fininshing his Doctorate degree in systematic theology he was retained as a lecture at BTSK (BAPTIST THEOLOGICAL SEMINARY KAWO KADUNA). There he has been serving the lord faithfully.'),
(3, 'FBC COL ABUJA', '2018', '2021', 'After fininshing his Doctorate degree in systematic theology he was retained as a lecture at BTSK (BAPTIST THEOLOGICAL SEMINARY KAWO KADUNA). There he has been serving the lord faithfully.'),
(4, 'LECTURER BTSK', '2021', '2023', 'After fininshing his Doctorate degree in systematic theology he was retained as a lecture at BTSK (BAPTIST THEOLOGICAL SEMINARY KAWO KADUNA). There he has been serving the lord faithfully.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles_record`
--
ALTER TABLE `articles_record`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles_record`
--
ALTER TABLE `articles_record`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
