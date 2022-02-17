-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-17 03:49:04
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `portfolio`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `name`, `title`, `intro`) VALUES
(1, 'Albert Kao', 'Website intern', 'Hello, Im a Albert, web-developer based on NewTaipeiCity. I have a little experience in web site design. Also I am good at');

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `account` varchar(18) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(18) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`account`, `password`, `id`) VALUES
('11111', '11111', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `color`
--

CREATE TABLE `color` (
  `id` int(11) UNSIGNED NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, '#E6F9E8');

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `subject`, `message`, `sh`) VALUES
(1, 'alberto', '645he@gmail.com', 'tykty', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `department` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `title`, `date`, `department`) VALUES
(1, 'wood and science design', '2014 - 2019', 'National Pingtung University of Science and Technology');

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `class` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `github_url` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `class`, `url`, `github_url`, `img`, `sh`) VALUES
(2, 'Guess Game', 'website', 'http://220.128.133.15/s1100405/guess/', '', 'guess.png', 1),
(6, 'Weather', 'website', '', '', 'weather.png', 1),
(7, 'Vote System', 'website', 'http://220.128.133.15/s1100405/vote/', '', 'vote.png', 1),
(13, 'travel poster', 'design', './img/PS旅遊海報.jpg', '', 'PS旅遊海報.jpg', 1),
(14, 'canlendar', 'website', './img/PS虎年年曆.jpg', '', 'PS虎年年曆.jpg', 1),
(15, 'Calendar', 'website', 'http://220.128.133.15/s1100405/calendar/', '', 'calendar.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `department` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `title`, `date`, `department`) VALUES
(1, 'Drafting engineer', '2019 - 2021', 'TAIWAN SHINRYO CO., LTD.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
