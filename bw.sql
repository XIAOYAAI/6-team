-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 06 月 08 日 11:01
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bw`
--

-- --------------------------------------------------------

--
-- 表的结构 `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `shouji` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `neirong` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) engine myisam default charset=utf8;

--
-- 转存表中的数据 `data`
--

INSERT INTO `data` (`ID`, `shouji`, `name`, `neirong`, `img`) VALUES
(2,'13212312312', '奎哥', '内容', './images/boy-1.jpg');

-- --------------------------------------------------------
  
--
-- 表的结构 `liu`
--

CREATE TABLE IF NOT EXISTS `liu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `neirong` varchar(255) DEFAULT NULL,
  `shouji` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `liu`  
--

INSERT INTO `liu` (`ID`,  `neirong`, `shouji`, `img`,`time`) VALUES
(4,  'afdaf', '1528347661', '../img/15283476610.jpg','14243'),
(5,  '斯塔基要', '1528348051', '../img/15283480510.jpg','124124');

-- --------------------------------------------------------
