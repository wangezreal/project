-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017-09-18 14:38:54
-- 服务器版本: 5.5.57-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `caicai`
--

-- --------------------------------------------------------

--
-- 表的结构 `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `user_id` int(11) NOT NULL,
  `daily_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `has_description` smallint(1) NOT NULL,
  `pic_description` varchar(10000) NOT NULL,
  `btn_shape` smallint(1) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date NOT NULL,
  PRIMARY KEY (`user_id`,`daily_id`,`block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `daily`
--

CREATE TABLE IF NOT EXISTS `daily` (
  `user_id` int(11) NOT NULL,
  `daily_id` int(11) NOT NULL,
  `block_number` int(12) NOT NULL,
  `date` date NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date NOT NULL,
  PRIMARY KEY (`user_id`,`daily_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(128) DEFAULT NULL,
  `sex` char(5) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(28) NOT NULL,
  `phone_number` varchar(18) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
