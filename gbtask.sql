-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE `tbl_options` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `options` varchar(255) NOT NULL,
  `correct_ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`id`, `q_id`, `options`, `correct_ans`) VALUES
(1, 1, 'Polio', 1),
(2, 1, 'Cancer', 0),
(3, 1, 'Meningitis', 0),
(4, 1, 'HIV', 0),
(5, 2, 'Jeff', 0),
(6, 2, 'Jerald', 0),
(7, 2, 'John', 1),
(8, 2, 'Jason', 0),
(9, 3, '1279', 1),
(10, 3, '1009', 0),
(11, 3, '1069', 0),
(12, 3, '2203', 0),
(13, 4, 'Polar Bear', 0),
(14, 4, 'Ursus Arctos', 0),
(15, 4, 'Ursus Maritimus', 1),
(16, 4, 'Ursus Spelaeus', 0),
(17, 5, '5', 1),
(18, 5, '3', 0),
(19, 5, '2', 0),
(20, 5, '4', 0),
(21, 6, 'Mackerel', 0),
(22, 6, 'Salmon', 0),
(23, 6, 'Pufferfish', 1),
(24, 6, 'Bass', 0),
(25, 7, 'The Kingfish', 1),
(26, 7, 'The Oracle', 0),
(27, 7, 'The Champ', 0),
(28, 7, 'The Hoot Owl', 0),
(29, 8, 'Astatine', 1),
(30, 8, 'Selenium', 0),
(31, 8, 'Antimony', 0),
(32, 8, 'Molybdenum', 0),
(33, 9, 'Renault', 0),
(34, 9, 'Ferrari', 0),
(35, 9, 'Ford', 0),
(36, 9, 'Volvo', 1),
(37, 10, 'Volga', 1),
(38, 10, 'Thames', 0),
(39, 10, 'Danube', 0),
(40, 10, 'Rhine', 0),
(41, 11, 'Mike', 1),
(42, 11, 'Matthew', 0),
(43, 11, 'Max', 0),
(44, 11, 'Mark', 0),
(45, 12, 'False', 0),
(46, 12, 'True', 1),
(47, 13, 'Dr. Mario 64', 0),
(48, 13, 'Super Mario 64', 0),
(49, 13, 'Mario&#039;s Game Gallery', 1),
(50, 13, 'Mario Tennis', 0),
(51, 14, 'Jacob&#039;s Syndrome', 1),
(52, 14, 'Klinefelter&#039;s Syndrome', 0),
(53, 14, 'Down Syndrome', 0),
(54, 14, 'Turner&#039;s Syndrome', 0),
(55, 15, 'Reed Richards', 0),
(56, 15, 'Tony Stark', 0),
(57, 15, 'Amadeus Cho', 0),
(58, 15, 'Henry Pym', 1),
(59, 16, '2004', 1),
(60, 16, '2000', 0),
(61, 16, '2001', 0),
(62, 16, '2006', 0),
(63, 17, 'None of the Above', 0),
(64, 17, 'Tom', 0),
(65, 17, 'Tilly', 1),
(66, 17, 'Tiny', 0),
(67, 18, 'AK-47', 1),
(68, 18, 'CZ-75 AUTO', 0),
(69, 18, 'M4A4', 0),
(70, 18, 'AK-74', 0),
(71, 19, 'Mickey', 0),
(72, 19, 'Kairi', 0),
(73, 19, 'Riku', 0),
(74, 19, 'Roxas', 1),
(75, 20, 'A Nightmare on Elm Street', 1),
(76, 20, 'My Bloody Valentine', 0),
(77, 20, 'Halloween', 0),
(78, 20, 'Friday the 13th', 0),
(79, 21, 'Rick Grimes', 0),
(80, 21, 'Kenny', 0),
(81, 21, 'Clementine', 0),
(82, 21, 'Lee Everett', 1),
(83, 22, 'Urutora', 1),
(84, 22, 'Washington', 0),
(85, 22, 'London', 0),
(86, 22, 'Rungata', 0),
(87, 23, 'Hand', 0),
(88, 23, 'Head', 0),
(89, 23, 'Leg', 1),
(90, 23, 'Arm', 0),
(91, 24, '&quot;Nothing.&quot;', 0),
(92, 24, '&quot;Idiot, I won&#039;t let you kill me!&quot;', 0),
(93, 24, '&quot;How disgusting.&quot;', 1),
(94, 24, '&quot;Goddammit, Shinji.&quot;', 0),
(95, 25, 'Less Than Jake', 0),
(96, 25, 'Goldfinger', 0),
(97, 25, 'Lagwagon', 1),
(98, 25, 'Lit', 0),
(99, 26, '2012', 0),
(100, 26, '2013', 0),
(101, 26, '2014', 1),
(102, 26, '2011', 0),
(103, 27, 'December 6th', 1),
(104, 27, 'November 12th', 0),
(105, 27, 'January 2nd', 0),
(106, 27, 'February 8th', 0),
(107, 28, 'Nuk, Yak, and Sumac', 0),
(108, 28, 'Kaltag, Nikki, and Star', 1),
(109, 28, 'Jenna, Sylvie, and Dixie', 0),
(110, 28, 'Dusty, Kirby, and Ralph', 0),
(111, 29, 'Island', 0),
(112, 29, 'Rock Hydra', 0),
(113, 29, 'Bog Wraith', 1),
(114, 29, 'Elvish Archers', 0),
(115, 30, 'Night Fever', 0),
(116, 30, 'Tragedy', 1),
(117, 30, 'Stayin&#039; Alive', 0),
(118, 30, 'You Should Be Dancing', 0),
(119, 31, '36', 0),
(120, 31, '55', 0),
(121, 31, '40', 1),
(122, 31, '28', 0),
(123, 32, 'Madagascar', 0),
(124, 32, 'Greenland', 1),
(125, 32, 'Borneo', 0),
(126, 32, 'New Guinea', 0),
(127, 33, 'Vulpes Vulpie', 0),
(128, 33, 'Red Fox', 0),
(129, 33, 'Vulpes Vulpes', 1),
(130, 33, 'Vulpes Redus', 0),
(131, 34, 'Marie &amp; Pierre Curie', 1),
(132, 34, 'Curious George', 0),
(133, 34, 'The Curiosity Rover', 0),
(134, 34, 'Stephen Curry', 0),
(135, 35, 'Spaceman From Pluto', 1),
(136, 35, 'The Time Travelers', 0),
(137, 35, 'The Lucky Man', 0),
(138, 35, 'Hill Valley Time Travelers', 0),
(139, 36, 'Ankle jerk reflex', 1),
(140, 36, 'Gag reflex', 0),
(141, 36, 'Scratch reflex', 0),
(142, 36, 'Pupillary light reflex', 0),
(143, 37, 'New York Giants', 0),
(144, 37, 'Arizona Cardinals', 1),
(145, 37, 'Green Bay Packers', 0),
(146, 37, 'Chicago Bears', 0),
(147, 38, 'Pauline Bennett', 0),
(148, 38, 'Pavandeep &quot;Pav&quot; Paul', 0),
(149, 38, 'Christopher Hall', 0),
(150, 38, 'Helen Wood', 1),
(151, 39, 'Mason Pines', 1),
(152, 39, 'Mark Pines', 0),
(153, 39, 'Mable Pines', 0),
(154, 39, 'Jason Pines', 0),
(155, 40, 'Sue Nicholls', 0),
(156, 40, 'Violet Carson', 0),
(157, 40, 'Jean Alexander', 0),
(158, 40, 'Amanda Barrie', 1),
(159, 41, 'True', 0),
(160, 41, 'False', 1),
(161, 42, 'Doom Guy', 0),
(162, 42, 'Doom Marine', 0),
(163, 42, 'Doom Reaper', 0),
(164, 42, 'Doom Slayer', 1),
(165, 43, 'True', 1),
(166, 43, 'False', 0),
(167, 44, 'Wish You Were Here', 0),
(168, 44, 'Welcome to the Machine', 0),
(169, 44, 'Have A Cigar', 0),
(170, 44, 'Shine On You Crazy Diamond', 1),
(171, 45, 'Juno', 0),
(172, 45, 'Vulcan', 0),
(173, 45, 'Mars', 0),
(174, 45, 'Janus', 1),
(175, 46, 'False', 1),
(176, 46, 'True', 0),
(177, 47, 'Monster Hunter Frontier', 0),
(178, 47, 'Monster Hunter Tri', 1),
(179, 47, 'Monster Hunter Freedom Unite', 0),
(180, 47, 'Monster Hunter Generations', 0),
(181, 48, 'Stomach', 0),
(182, 48, 'Liver', 0),
(183, 48, 'Bone', 0),
(184, 48, 'Pancreatic', 1),
(185, 49, 'The Knight', 1),
(186, 49, 'The Wizard', 0),
(187, 49, 'The Warrior', 0),
(188, 49, 'The Archer', 0),
(189, 50, 'False', 0),
(190, 50, 'True', 1),
(191, 51, 'R8 Revolver', 0),
(192, 51, 'Scar-20/G3SG1', 1),
(193, 51, 'M4A1', 0),
(194, 51, 'AWP', 0),
(195, 52, 'Four Years', 0),
(196, 52, 'Eight Years', 0),
(197, 52, 'Year', 1),
(198, 52, 'Two Years', 0),
(199, 53, 'Hand', 0),
(200, 53, 'Arm', 0),
(201, 53, 'Leg', 1),
(202, 53, 'Head', 0),
(203, 54, 'Cube Quest', 0),
(204, 54, 'M.A.C.H. 3', 0),
(205, 54, 'Dragon&#039;s Lair', 0),
(206, 54, 'Astron Belt', 1),
(207, 55, 'Madison Derpe', 0),
(208, 55, 'Milla Johnson', 0),
(209, 55, 'Milla Jovovich', 1),
(210, 55, 'Kim Demp', 0),
(211, 56, 'The Bourne Legacy', 0),
(212, 56, 'L&eacute;on: The Professional', 0),
(213, 56, 'Ip Man 2', 0),
(214, 56, 'Victoria', 1),
(215, 57, 'True', 1),
(216, 57, 'False', 0),
(217, 58, 'Herg&eacute;', 1),
(218, 58, 'Chic Young', 0),
(219, 58, 'E.P. Jacobs', 0),
(220, 58, 'Rin Tin Tin', 0),
(221, 59, 'Seifer', 0),
(222, 59, 'Fujin', 1),
(223, 59, 'Raijin', 0),
(224, 59, 'Zell', 0),
(225, 60, 'Necessary Evil', 0),
(226, 60, 'The Great Artiste', 0),
(227, 60, 'Enola Gay', 1),
(228, 60, 'Full House', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `result` int(11) DEFAULT NULL,
  `user_ans` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `question`, `correct_answer`, `result`, `user_ans`, `uid`) VALUES
(1, 'What disease crippled President Franklin D. Roosevelt and led him to help the nation find a cure? ', 'Polio', 1, 'Polio', 1),
(2, 'Donald J. Trump&#039;s Middle Name is...', 'John', NULL, 'Jeff', 1),
(3, 'What is the first Mersenne prime exponent over 1000?', '1279', 1, '1279', 1),
(4, 'What is the scientific name for the &quot;Polar Bear&quot;?', 'Ursus Maritimus', 0, 'Polar Bear', 1),
(5, 'How many countries does Spain have a land border with?', '5', 1, '5', 1),
(6, 'The dish Fugu, is made from what family of fish?', 'Pufferfish', 0, 'Mackerel', 1),
(7, 'What was the personal nickname of the 40th Governor of the US State Louisiana, Huey Long?', 'The Kingfish', 1, 'The Kingfish', 1),
(8, 'Which chemical element was originally known as Alabamine?', 'Astatine', 1, 'Astatine', 1),
(9, 'What car manufacturer gave away their patent for the seat-belt in the interest of saving lives?', 'Volvo', 0, 'Renault', 1),
(10, 'What is the longest river in Europe?', 'Volga', 1, 'Volga', 1),
(11, 'What name represents the letter &quot;M&quot; in the NATO phonetic alphabet?', 'Mike', 1, 'Mike', 3),
(12, 'The Xenomorph from the science fiction film &quot;Alien&quot; has acidic blood.', 'True', 0, 'False', 3),
(13, 'Which game was the first time Mario was voiced by Charles Martinet?', 'Mario&#039;s Game Gallery', 0, 'Mario Tennis', 3),
(14, 'What genetic disease is caused by having an extra Y chromosome (XYY)?', 'Jacob&#039;s Syndrome', 1, 'Jacob&#039;s Syndrome', 3),
(15, 'Who created Ultron of Earth-616?', 'Henry Pym', 0, 'Reed Richards', 3),
(16, 'What year was the RoboSapien toy robot released?', '2004', 0, '2006', 3),
(17, 'Out of the 3 Tots in Tots TV, who speaks French in the UK Version and Spanish in the US Version?', 'Tilly', 1, 'Tilly', 3),
(18, 'What mainly favored rifle is used by the Terrorists in Counter Strike: Global Offensive?', 'AK-47', 0, 'CZ-75 AUTO', 3),
(19, 'Who is Sora&#039;s Nobody in Kingdom Hearts?', 'Roxas', 0, 'Kairi', 3),
(20, 'Johnny Depp made his big-screen acting debut in which film?', 'A Nightmare on Elm Street', 0, 'My Bloody Valentine', 3),
(21, 'Who is the protagonist in the game &quot;The Walking Dead: Season One&quot;?', 'Lee Everett', NULL, '', 4),
(22, 'All of the following are towns/villages in the Pacific Island nation of Kiribati EXCEPT:', 'Urutora', NULL, '', 4),
(23, 'The &quot;Tibia&quot; is found in which part of the body?', 'Leg', NULL, '', 4),
(24, 'What is the last line muttered in the anime film &quot;The End of Evangelion&quot;?', '&quot;How disgusting.&quot;', NULL, '', 4),
(25, 'May 16th of every year is known as __________ Day, named after a punk band prominent in the 1990s.', 'Lagwagon', NULL, '', 4),
(26, 'In what year was Hearthstone released?', '2014', NULL, '', 4),
(27, 'When does Finland celebrate their independence day?', 'December 6th', NULL, '', 4),
(28, 'In the 1995 film &quot;Balto&quot;, who are Steele&#039;s accomplices?', 'Kaltag, Nikki, and Star', NULL, '', 4),
(29, 'Which card is on the cover of the Beta rulebook of &quot;Magic: The Gathering&quot;?', 'Bog Wraith', NULL, '', 4),
(30, 'What song originally performed by The Bee Gees in 1978 had a cover version by Steps 20 years later?', 'Tragedy', NULL, '', 4),
(31, 'How many spaces are there on a standard Monopoly board?', '40', NULL, '', 5),
(32, 'What is the largest non-continental island in the world?', 'Greenland', NULL, '', 5),
(33, 'What is the scientific name of the red fox?', 'Vulpes Vulpes', NULL, '', 5),
(34, 'Who is the chemical element Curium named after?', 'Marie &amp; Pierre Curie', NULL, '', 5),
(35, 'What was another suggested name for, the 1985 film, Back to the Future?', 'Spaceman From Pluto', NULL, '', 5),
(36, 'Which of these is a type of stretch/deep tendon reflex?', 'Ankle jerk reflex', NULL, '', 5),
(37, 'What is the oldest team in the NFL?', 'Arizona Cardinals', NULL, '', 5),
(38, 'Who won Big Brother 2014 UK?', 'Helen Wood', NULL, '', 5),
(39, 'What is Dipper&#039;s real name from &quot;Gravity Falls&quot;?', 'Mason Pines', NULL, '', 5),
(40, 'Which former Coronation Street actress was once a hostess on the British Game Show &quot;Double Your Money&quot;?', 'Amanda Barrie', NULL, '', 5),
(41, 'The first &quot;Metal Gear&quot; game was released for the PlayStation 1.', 'False', 0, 'True', 6),
(42, 'What is the protagonist&#039;s title given by the demons in DOOM (2016)?', 'Doom Slayer', 0, 'Doom Marine', 6),
(43, 'Scientists accidentally killed the once known world&#039;s oldest living creature, a mollusc, known to be aged as 507 years old.', 'True', 1, 'True', 6),
(44, 'Pink Floyd made this song for their previous lead singer Syd Barrett.', 'Shine On You Crazy Diamond', 0, 'Have A Cigar', 6),
(45, 'Which of these Roman gods doesn&#039;t have a counterpart in Greek mythology?', 'Janus', 1, 'Janus', 6),
(46, 'According to Greek Mythology, Atlas was an Olympian God.', 'False', 0, 'True', 6),
(47, 'Which game in the &quot;Monster Hunter&quot; series introduced the monster &quot;Gobul&quot;?', 'Monster Hunter Tri', 0, 'Monster Hunter Generations', 6),
(48, 'Apple co-founder Steve Jobs died from complications of which form of cancer?', 'Pancreatic', 1, 'Pancreatic', 6),
(49, 'In the MMO RPG &quot;Realm of the Mad God&quot;, what class is known for having the highest possible defense?', 'The Knight', 0, 'The Wizard', 6),
(50, 'The internet browser Firefox is named after the Red Panda.', 'True', NULL, '', 6),
(51, 'What is the most expensive weapon in Counter-Strike: Global Offensive?', 'Scar-20/G3SG1', 1, 'Scar-20/G3SG1', 7),
(52, 'Moore&#039;s law originally stated that the number of transistors on a microprocessor chip would double every...', 'Year', 0, 'Eight Years', 7),
(53, 'The &quot;Tibia&quot; is found in which part of the body?', 'Leg', 0, 'Arm', 7),
(54, 'What was the first interactive movie video game?', 'Astron Belt', 0, 'M.A.C.H. 3', 7),
(55, 'Who plays Alice in the Resident Evil movies?', 'Milla Jovovich', 0, 'Kim Demp', 7),
(56, 'Which one of these action movies are shot entirely in one take?', 'Victoria', 0, 'The Bourne Legacy', 7),
(57, 'In the movie The Revenant, DiCaprio&#039;s character hunts down the killer of his son.', 'True', NULL, '', 7),
(58, 'Who authored The Adventures of Tintin?', 'Herg&eacute;', 0, 'Chic Young', 7),
(59, 'Which of these characters from Final Fantasy VIII primarily spoke in one word sentences?', 'Fujin', 0, 'Zell', 7),
(60, 'What is the name of the Boeing B-29 that dropped the &#039;Little Boy&#039; atomic bomb on Hiroshima?', 'Enola Gay', 0, 'The Great Artiste', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `is_attempted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `pass`, `u_type`, `is_attempted`, `created_at`, `updated_at`) VALUES
(1, 'amol', 'mol@gmail.com', '123456', 'guest', 1, '2022-06-04 13:31:19', '2022-06-04 13:31:19'),
(2, 'admin', 'admin@gmail.com', '123456', 'admin', 0, '2022-06-04 10:14:48', '2022-06-04 10:14:48'),
(3, 'pinky', 'pinky@gmail.com', '123456', 'guest', 1, '2022-06-04 14:32:20', '2022-06-04 14:32:20'),
(4, 'amol', 'molk@gmail.com', '123456', 'guest', 0, '2022-06-04 14:45:10', '2022-06-04 14:45:10'),
(6, 'gaurav', 'gaurav@gmail.com', '123456', 'guest', 1, '2022-06-04 15:12:14', '2022-06-04 15:12:14'),
(7, 'amol', 'amol@gmail.com', '123456', 'guest', 1, '2022-06-04 15:15:51', '2022-06-04 15:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_options`
--
ALTER TABLE `tbl_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_for` (`q_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_foreign` (`uid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
