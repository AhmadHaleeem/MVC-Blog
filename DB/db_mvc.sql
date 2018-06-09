-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 07:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `title`) VALUES
(1, 'Sports', 'Sports Title'),
(2, 'Health', 'Health Title'),
(3, 'Management', 'Managementtitle'),
(4, 'science', 'science section'),
(7, 'Coding', 'Coding Section'),
(10, 'category', 'category Title');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `cat`) VALUES
(1, 'BE TOGETHER FOR THE RIGHT REASONS', '“Don’t ever be with someone because someone else pressured you to. I got married the first time because I was raised Catholic and that’s what you were supposed to do. Wrong. I got married the second time because I was miserable and lonely and thought having a loving wife would fix everything for me. Also wrong. Took me three tries to figure out what should have been obvious from the beginning, the only reason you should ever be with the person you’re with is because you simply love being around them. It really is that simple.”', 1),
(2, 'STAGE TWO: SELF-DISCOVERY', 'In Stage One, we learn to fit in with the people and culture around us. Stage Two is about learning what makes us different from the people and culture around us. Stage Two requires us to begin making decisions for ourselves, to test ourselves, and to understand ourselves and what makes us unique.', 2),
(3, 'STAGE THREE: COMMITMENT', 'Once you’ve pushed your own boundaries and either found your limitations (i.e., athletics, the culinary arts) or found the diminishing returns of certain activities (i.e., partying, video games, masturbation) then you are left with what’s both a) actually important to you, and b) what you’re not terrible at. Now it’s time to make your dent in the world.\r\n\r\nStage Three is the great consolidation of one’s life. Out go the friends who are draining you and holding you back. Out go the activities and hobbies that are a mindless waste of time. Out go the old dreams that are clearly not coming true anytime soon.\r\n', 3),
(4, 'THE LAW OF FUCK YES OR NO\r\n', 'Wrapped up in that sweet guy who treats you so well, except goes weeks without calling you and suddenly disappears after a couple drinks and a round of the horizontal polka? Been wondering if he really likes you? Do his excuses of being so busy all the time seem legit? It doesn’t sound like the answer is a “Fuck yes.” Then it’s time to move on.\r\n\r\nMaking out with a girl at your house and every time you go to take her shirt off she swats your hands away? That is not a “Fuck Yes,” my friend, therefore, it’s a no and you shouldn’t pressure her. The best sex is “Fuck Yes” sex — i.e., both people are shouting “Fuck Yes” as they hop between the sheets together. If she’s not hopping, then there’s no fucking.\r\n', 4),
(5, 'THE RELATIONSHIP SCORECARD', 'What It Is: The “keeping score” phenomenon is when someone you’re dating continues to blame you for past mistakes you made in the relationship. If both people in the relationship do this it devolves into what I call “the relationship scorecard,” where it becomes a battle to see who has screwed up the most over the months or years, and therefore who owes the other one more.', 3),
(8, 'Reboot', '<p>For <strong>improved </strong>cross-browser rendering, we use&nbsp;<a href=\"https://getbootstrap.com/docs/4.0/content/reboot/\">Reboot</a>&nbsp;to correct inconsistencies across browsers and devices while providing slightly more opinionated resets to common HTML elements.For improved cross-browser rendering, we use&nbsp;<a href=\"https://getbootstrap.com/docs/4.0/content/reboot/\">Reboot</a>&nbsp;to correct inconsistencies across browsers and devices while providing slightly more opinionated resets to common HTML elements.For improved cross-browser rendering, we use&nbsp;<a href=\"https://getbootstrap.com/docs/4.0/content/reboot/\">Reboot</a>&nbsp;to correct inconsistencies across browsers and devices while providing slightly more opinionated resets to common HTML elements.</p>\r\n', 2),
(9, 'Coding Section', '<p>Bootstrap employs a handful of important global styles and settings that you&rsquo;ll need to be aware of when using it, all of which are almost exclusively geared towards the&nbsp;<em>normalization</em>&nbsp;of cross browser styles. Let&rsquo;s dive in.</p>\r\n\r\n<p>Bootstrap employs a handful of important global styles and settings that you&rsquo;ll need to be aware of when using it, all of which are almost exclusively geared towards the&nbsp;<em>normalization</em>&nbsp;of cross browser styles. Let&rsquo;s dive in.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n', 4),
(10, 'Tittle Updated', '<p>Bootstrap is developed&nbsp;<em>mobile first</em>, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices,&nbsp;<strong>add the responsive viewport meta tag</strong>&nbsp;to your&nbsp;<code>&lt;head&gt;</code>.Bootstrap is developed&nbsp;<em>mobile first</em>, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices,&nbsp;<strong>add the responsive viewport meta tag</strong>&nbsp;to your&nbsp;<code>&lt;head&gt;</code>.</p>\r\n', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ui`
--

CREATE TABLE `tbl_ui` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ui`
--

INSERT INTO `tbl_ui` (`id`, `color`) VALUES
(3, '#008080');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'Ahmad', '601f1889667efaebb33b8c12572835da3f027f78', 1),
(2, 'haleem', '601f1889667efaebb33b8c12572835da3f027f78', 3),
(4, 'Danya', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
