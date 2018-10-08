-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-12-23 09:11:46
-- 服务器版本： 5.5.8
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liuyanpu`
--

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE `liuyan` (
  `id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `fromwho` varchar(10) NOT NULL,
  `towho` varchar(10) NOT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `title`, `content`, `fromwho`, `towho`, `time`) VALUES
(12, '8', '999', 'q', 'RE', '2017-12-23');

-- --------------------------------------------------------

--
-- 表的结构 `yonghu`
--

CREATE TABLE `yonghu` (
  `userid` varchar(10) NOT NULL DEFAULT '',
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sourpass` varchar(8) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `usertype` varchar(1) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `lognum` int(2) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `homepage` varchar(30) DEFAULT NULL,
  `face` varchar(20) DEFAULT NULL,
  `qq` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `yonghu`
--

INSERT INTO `yonghu` (`userid`, `username`, `password`, `sourpass`, `gender`, `usertype`, `regtime`, `lognum`, `ip`, `email`, `homepage`, `face`, `qq`) VALUES
('1', 'q', 'qqq', 'qqq', '男', NULL, NULL, NULL, NULL, '12345678@qq.com', NULL, '1', '12345678'),
('777', 're', 're', 're', '女', NULL, NULL, NULL, NULL, '12345678@qq.com', NULL, '4', '12345678'),
('2', 'zxc', 'zxc', 'zxc', '女', NULL, NULL, NULL, NULL, '12345678@qq.com', NULL, '2', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liuyan`
--
ALTER TABLE `liuyan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yonghu`
--
ALTER TABLE `yonghu`
  ADD PRIMARY KEY (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `liuyan`
--
ALTER TABLE `liuyan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
