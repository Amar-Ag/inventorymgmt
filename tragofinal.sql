-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 02:42 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tragofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ActivityId` int(11) NOT NULL,
  `DestinationId` int(11) NOT NULL,
  `ActivityTitle` varchar(50) NOT NULL,
  `ActivityDescription` text NOT NULL,
  `ActivityDuration` int(11) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `Culture` tinyint(4) NOT NULL,
  `Outdoor` tinyint(4) NOT NULL,
  `Romantic` tinyint(4) NOT NULL,
  `ChildFriendly` tinyint(4) NOT NULL,
  `ElderFriendly` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ActivityId`, `DestinationId`, `ActivityTitle`, `ActivityDescription`, `ActivityDuration`, `IsActive`, `CreatedBy`, `Culture`, `Outdoor`, `Romantic`, `ChildFriendly`, `ElderFriendly`) VALUES
(1, 2, 'Paragliding', 'Nothing can beat the thrill of being up in the sky, flying like a bird in the thermals all the while enjoying views of snow capped mountains, pristine lakes and verdant valleys like nowhere else on earth. With experienced pilots to guide you through the skies, it\'s an experience of a life time. You may fly again someday, but you\'ll never enjoy the same spectacular views.', 4, 1, 2, 0, 1, 0, 0, 0),
(2, 2, 'Fewa Visit', 'Phewa Lake, Phewa Tal or Fewa Lake is a freshwater lake in Nepal formerly called Baidam Tal located in the south of the Pokhara Valley that includes Pokhara city; parts of Sarangkot and Kaskikot. The lake is stream-fed but a dam regulates the water reserves, therefore, the lake is classified as semi-natural freshwater lake. It is the second largest lake in Nepal; the largest in Gandaki Pradesh after the Rara lake in the comparison to Nepal\'s water bodies.', 5, 1, 2, 1, 1, 0, 1, 0),
(3, 1, 'Jungle Safari', 'Chitwan jungle safari tour is one of most popular adventure tours for those who has dream to see wild animals , green forest and flat landscape of Nepal. Chitwan National Park was declared UNESCO Natural Heritage Site in 1979. Chitwan national  park is situated in southern central Nepal, covering 932 sq.km covered with deciduous forests overlooking the floodplains of Narayani, Rapti and Reu rivers. The park headquarters at Kasara is 21 km drive from Bharatpur which is 20 minutes by air or 146 km by road from Kathmandu. In this park there are many Resorts hotels and lodge to accommodate.', 6, 1, 3, 0, 1, 0, 1, 1),
(4, 1, 'Elephant Ride ', ' Elephant ride is also the safest way to enter the jungle while one can observe wild animals and birds from up close. One can enter the dense forest of Sauraha and view the wildlife from close proximity during the elephant ride. It feels very exciting and novel to move along through the quiet forest listening to the sound of wild birds singing from on top of the elephant back. There is also a slogan \"Visit Chitwan, Ride Elephant\" popularized for promotion of tourism in Sauraha. Four persons can ride an elephant at one time.', 3, 1, 3, 0, 1, 0, 1, 1),
(5, 2, 'Mountaineering Museum Visit', 'Mountains and mountaineering have a history of their own. Without preserving it, it will not be long before all the records and evidences will be lost forever. Nepal Mountaineering Association (NMA), established on 1 Nov 1973, initiated the establishment of International Mountain Museum (IMM) in Pokhara. The basic objective for its establishment was made to record, document and chronicle the past and present development of mountaineering activities in the world in general and to preserve the saga of the momentous feats in the history of mountaineering in the Himalayan peaks in particular. The foundation stone of IMM was laid on 1 Dec, 1995. The soft opening of IMM took place on 29 May, 2002 where it was officially opened on 5 Feb, 2004.', 5, 1, 3, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `DestinationId` int(11) NOT NULL,
  `DestinationTitle` varchar(200) NOT NULL,
  `DestinationDetails` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `IsActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`DestinationId`, `DestinationTitle`, `DestinationDetails`, `CreatedBy`, `CreatedDate`, `IsActive`) VALUES
(1, 'Chitwan', 'Chitwan or ‘Heart of the jungle’ is famous as one of the best wildlife-viewing parks in Asia and a classic example of the ‘Terai’ landscape. This dense jungle tract was declared a protected area in 1973 and a UNESCO World Heritage site in 1984.', 2, '2019-07-27', 1),
(2, 'Pokhara', 'Pokhara is Nepal\'s number 1 adventure and leisure destination, a gateway to treks in the Annapurna  region with plenty of entertainment for individual travellers and their families. \r\n\r\nIn Pokhara you can experience the excitement of adventure: boating, hiking, pony rides, paragliding or simply relax at one of the lakes with stunning views of the Annapurnas. ', 2, '2019-07-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itinerarydayactivities`
--

CREATE TABLE `itinerarydayactivities` (
  `ItiActivityId` int(11) NOT NULL,
  `ItineraryDayId` int(11) NOT NULL,
  `ActivityId` int(11) NOT NULL,
  `ActivityTitle` varchar(50) NOT NULL,
  `ActivityDescription` text NOT NULL,
  `ActivityDuration` int(11) NOT NULL,
  `ItineraryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itinerarydays`
--

CREATE TABLE `itinerarydays` (
  `ItineraryDayId` int(11) NOT NULL,
  `ItineraryId` int(11) NOT NULL,
  `ItineraryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itinerarymaster`
--

CREATE TABLE `itinerarymaster` (
  `ItineraryId` int(11) NOT NULL,
  `ItineraryName` varchar(50) NOT NULL,
  `DestinationId` int(11) NOT NULL,
  `DateDifference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `TransportID` int(11) NOT NULL,
  `ActivityID` int(11) NOT NULL,
  `TransportTitle` varchar(50) NOT NULL,
  `TransportDetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserType` int(11) NOT NULL,
  `RegisterDate` date NOT NULL,
  `IsActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `Address`, `Email`, `Password`, `UserType`, `RegisterDate`, `IsActive`) VALUES
(1, 'Admin', 'Admin', 'Admin', '1001749154@student.ucsiuniversity.edu.my', 'admin', 3, '2019-07-29', 1),
(2, 'Amar', 'Agrawal', 'Kuleshwor', 'amaragrawal48@gmail.com', 'asdf', 1, '2019-07-27', 1),
(3, 'Anand', 'Agrawal', 'Chicago,USA', 'agrawalanand7710@gmail.com', 'asdf', 1, '2019-07-27', 1),
(4, 'Rajesh', 'Agrawal', 'Kuleshwor', 'amar.agrawal@ssinepal.com', 'asdf', 2, '2019-07-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ActivityId`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`DestinationId`);

--
-- Indexes for table `itinerarydayactivities`
--
ALTER TABLE `itinerarydayactivities`
  ADD PRIMARY KEY (`ItiActivityId`);

--
-- Indexes for table `itinerarydays`
--
ALTER TABLE `itinerarydays`
  ADD PRIMARY KEY (`ItineraryDayId`);

--
-- Indexes for table `itinerarymaster`
--
ALTER TABLE `itinerarymaster`
  ADD PRIMARY KEY (`ItineraryId`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`TransportID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ActivityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `DestinationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `itinerarydayactivities`
--
ALTER TABLE `itinerarydayactivities`
  MODIFY `ItiActivityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `itinerarydays`
--
ALTER TABLE `itinerarydays`
  MODIFY `ItineraryDayId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `itinerarymaster`
--
ALTER TABLE `itinerarymaster`
  MODIFY `ItineraryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `TransportID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
