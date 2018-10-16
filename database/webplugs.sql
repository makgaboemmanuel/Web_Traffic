-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 11:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webplugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adusername` varchar(25) NOT NULL,
  `adname` varchar(30) NOT NULL,
  `adsurname` varchar(30) NOT NULL,
  `addateofbirth` date NOT NULL,
  `adtitle` varchar(10) NOT NULL,
  `adpassword` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adusername`, `adname`, `adsurname`, `addateofbirth`, `adtitle`, `adpassword`) VALUES
('mathekgame', 'makgabo', 'mathekga', '1990-10-08', 'Mr', 444223355),
('makgabome', 'emmanuel', 'emmanuel', '1990-03-05', 'Mr', 78778858),
('rakgadi', 'mosima', 'fyfe', '1986-01-22', 'Mrs', 89798793),
('sefola', 'morolo', 'semorolo', '1989-06-22', 'Miss', 52852845),
('matchpractice', 'macthes', 'practice', '1996-11-12', 'Miss', 69857854),
('comreneilwe', 'Reneilwe', 'Mokolo', '1993-11-12', 'Miss', 69584712),
('reamogetsweMo', 'Reamogetswe', 'Molokomme', '1990-03-15', 'Miss', 21092108),
('harleySeal', 'Harley', 'Seal', '1982-01-22', 'Prof', 23748579),
('pearlSholes', 'Pearl', 'Sholes', '1981-08-14', 'Mrs', 58251471),
('barettiMoFlava', 'baretti', 'MoFlava', '1993-08-06', 'Mr', 56789864),
('humourLaughs', 'Humour', 'Luaghs', '1993-01-01', 'Miss', 60189712),
('vikingsLuther', 'Vikings', 'Luther', '1990-10-10', 'Doctor', 96085245);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `vsis` int(5) NOT NULL,
  `vsstarttime` time NOT NULL,
  `vsendtime` time NOT NULL,
  `vsdate` date NOT NULL,
  `wpid` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`vsis`, `vsstarttime`, `vsendtime`, `vsdate`, `wpid`) VALUES
(1, '08:27:31', '08:30:00', '2016-09-14', 10),
(2, '15:40:34', '16:11:20', '2016-09-15', 1),
(3, '13:03:09', '12:36:14', '2016-09-15', 1),
(4, '02:06:18', '02:10:15', '2016-09-08', 1),
(5, '09:27:45', '09:25:32', '2016-08-21', 1),
(6, '10:26:09', '10:32:21', '2016-09-08', 3),
(7, '11:28:34', '11:33:19', '2016-09-04', 4),
(8, '08:17:22', '08:21:14', '2016-09-02', 5),
(9, '07:09:04', '07:21:28', '2016-09-02', 5),
(10, '11:30:27', '11:33:30', '2016-09-06', 3),
(11, '06:22:17', '06:34:13', '2016-09-09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE `webpage` (
  `wpid` int(4) NOT NULL,
  `wpname` varchar(30) NOT NULL,
  `wpdesc` varchar(60) NOT NULL,
  `weid` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`wpid`, `wpname`, `wpdesc`, `weid`) VALUES
(1, '/winners-losers', 'Shows The Winners And Loser From Previous Latest Games', 10),
(2, '/all-the-news', 'News About Football Globally', 10),
(3, '/f365-says', 'Editors And Journalists Post Their Opinions About The Game', 10),
(4, '/features/topical-top-ten', 'Top 10 Teams, Goals, Reactions, Interviews From Past Games', 10),
(5, '/championship', 'Shows Results Of All Competitions Other Than BPL', 10),
(6, '/opinio', 'Editor And Journalist Opinions And Thoughts', 7),
(7, '/arts-and-culture/', 'SA''s News, Events and Event Galleries About Arts Culture ', 7),
(8, '/business/', 'Business News', 7),
(9, '/education/', 'Education News And Survey Results', 7),
(10, '/special-reports/', 'Reports And Documentaries About Big Stories Nationwide', 7);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `weid` int(4) NOT NULL,
  `weurl` varchar(35) NOT NULL,
  `wedesc` varchar(60) NOT NULL,
  `wousername` varchar(20) NOT NULL,
  `wedatereg` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`weid`, `weurl`, `wedesc`, `wousername`, `wedatereg`) VALUES
(1, 'www.twitter.com', 'This Is A Social Media Platform', 'antoinnegri', '2016-04-08'),
(2, 'www.facebook.com', 'This Is A Social Media Site To Post Text, Videos And Images', 'crazyDee', '2016-03-12'),
(3, 'www.techforpeep.co.za', 'Allows Users To Collect The Statistics Of Their Websites', 'romanpeal', '2016-01-06'),
(4, 'www.sundaytimes.co.za', 'For News, Sport and Economy', 'emily64polser', '2016-08-11'),
(5, 'www.sowetan.co.za', 'News, Weather, Economy And Sport', 'lebomana', '2016-03-14'),
(6, 'www.timeslive.co.za', 'News, Weather, Economy And Sport', 'relebogilemoso', '2015-12-13'),
(7, 'mg.co.za', 'Art, Health, Politics And Economy News', 'overMills', '2016-02-02'),
(8, 'news24.com', 'All Category News', 'phases205', '2016-06-17'),
(9, 'www.soccerladuma.co.za', 'Gloabl Football Sport', 'relebogilemoso', '2016-06-05'),
(10, 'www.football365.com', 'Gloabl Football Sport', 'overMills', '2014-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `wowner`
--

CREATE TABLE `wowner` (
  `wousername` varchar(20) NOT NULL,
  `wosname` varchar(25) NOT NULL,
  `wofname` varchar(25) NOT NULL,
  `wodateob` date NOT NULL,
  `adusername` varchar(25) NOT NULL DEFAULT 'mathekgame',
  `wopassword` varchar(30) NOT NULL,
  `wo_idenno` bigint(13) NOT NULL,
  `woemail` varchar(30) NOT NULL,
  `wogender` varchar(6) NOT NULL DEFAULT 'Female'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wowner`
--

INSERT INTO `wowner` (`wousername`, `wosname`, `wofname`, `wodateob`, `adusername`, `wopassword`, `wo_idenno`, `woemail`, `wogender`) VALUES
('423wright', 'Wright', 'Shaun', '1947-11-21', 'barettiMoFlava', '8574writing', 4711214342082, 'wrtshaun@gmail.com', 'Male'),
('phases205', 'Phase', 'myFace', '1990-02-06', 'sefola', '6958tolsa', 9002006570092, 'phasemy@ymail.com', 'Female'),
('romanpeal', 'Roman', 'Fitzgerald', '1983-04-07', 'matchpractice', '2525write', 8304075490092, 'romanfitz@gmail.com', 'Male'),
('overMills', 'Thomas', 'Miller', '1996-01-24', 'vikingsLuther', '#dopepace', 9601242302071, 'thomasm@gmail.com', 'Male'),
('crazyDee', 'Dineo Crazy', 'Maraka', '1991-03-03', 'harleySeal', 'crazyIam91', 9103030851086, 'marakadineo@webmail.co.za', 'Female'),
('emily64polser', 'Emily', 'Polser', '1964-05-01', 'makgabome', '#lenay4040', 6405018047062, 'emilypolser@gmail.com', 'Female'),
('lebomana', 'Leboneng', 'Manamela', '1986-09-08', 'rakgadi', 'manalebo86', 8609088241094, 'manamelal@gmail.com', 'Female'),
('moranangbe', 'Betty', 'Moranang', '1983-06-15', 'reamogetsweMo', 'betty83mora', 8306157178062, 'bettymora@gmail.com', 'Female'),
('relebogilemoso', 'Relebogile', 'Moso', '1990-09-05', 'vikingsLuther', 'moso03toys', 9009059190083, 'mosorele@gmail.com', 'Female'),
('jasonmathunjwa', 'Jason', 'Mathunjwa', '1974-11-14', 'mathekgame', '#mathunjwa#ja', 7411143098083, 'jasonma@webmail.co.za', 'Male'),
('antoinnegri', 'Antoinne', 'Ballistic', '1990-10-08', 'barettiMoFlava', 'antoinne1008', 9010082354093, 'antoinballs@webmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adusername`),
  ADD KEY `adname` (`adname`),
  ADD KEY `adusername` (`adusername`),
  ADD KEY `adsurname` (`adsurname`),
  ADD KEY `addateofbirth` (`addateofbirth`),
  ADD KEY `adtitle` (`adtitle`),
  ADD KEY `adpassword` (`adpassword`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`vsis`),
  ADD KEY `vsis` (`vsis`),
  ADD KEY `vsstarttime` (`vsstarttime`),
  ADD KEY `vsendtime` (`vsendtime`),
  ADD KEY `vsdate` (`vsdate`),
  ADD KEY `wpid` (`wpid`);

--
-- Indexes for table `webpage`
--
ALTER TABLE `webpage`
  ADD PRIMARY KEY (`wpid`),
  ADD UNIQUE KEY `wpid` (`wpid`),
  ADD KEY `wpname` (`wpname`),
  ADD KEY `wpdesc` (`wpdesc`),
  ADD KEY `weid` (`weid`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`weid`),
  ADD UNIQUE KEY `weurl` (`weurl`),
  ADD KEY `weid` (`weid`),
  ADD KEY `weurl_2` (`weurl`),
  ADD KEY `wedesc` (`wedesc`),
  ADD KEY `woid` (`wousername`),
  ADD KEY `wedatereg` (`wedatereg`);

--
-- Indexes for table `wowner`
--
ALTER TABLE `wowner`
  ADD PRIMARY KEY (`wousername`),
  ADD KEY `wousername` (`wousername`),
  ADD KEY `wosname` (`wosname`),
  ADD KEY `wofname` (`wofname`),
  ADD KEY `wodateob` (`wodateob`),
  ADD KEY `adusername` (`adusername`),
  ADD KEY `wopassword` (`wopassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `vsis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `webpage`
--
ALTER TABLE `webpage`
  MODIFY `wpid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `weid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
