-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 07 月 17 日 09:18
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zx`
--

-- --------------------------------------------------------

--
-- 表的结构 `zx_credit_rank`
--

CREATE TABLE IF NOT EXISTS `zx_credit_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '等级名称',
  `rank` int(11) DEFAULT '0' COMMENT '等级',
  `point1` int(11) DEFAULT '0' COMMENT '开始分值',
  `point2` int(11) DEFAULT '0' COMMENT '最后分值',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `remark` text COMMENT '备注',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `addip` varchar(30) DEFAULT NULL COMMENT '添加IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员积分等级' AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `zx_credit_rank`
--

INSERT INTO `zx_credit_rank` (`id`, `name`, `rank`, `point1`, `point2`, `pic`, `remark`, `addtime`, `addip`) VALUES
(1, 'a', 1, -999, 4, 'credit_s11.gif', '', 1282352966, '192.168.7.253'),
(3, 'b', 2, 5, 10, 'credit_s12.gif', '', 1282354033, '192.168.7.253'),
(4, 'c', 3, 11, 20, 'credit_s13.gif', '', 1282354046, '192.168.7.253'),
(5, 'd', 4, 21, 40, 'credit_s14.gif', '', 1282354104, '192.168.7.253'),
(6, 'e', 5, 41, 100, 'credit_s15.gif', '', 1282354180, '192.168.7.253'),
(7, 'f', 6, 101, 200, 'credit_s21.gif', '', 1282354199, '192.168.7.253'),
(8, 'g', 7, 201, 400, 'credit_s22.gif', '', 1282354219, '192.168.7.253'),
(9, 'h', 8, 401, 600, 'credit_s23.gif', '', 1287677313, '192.168.7.253'),
(16, 'j', 10, 801, 1000, 'credit_s25.gif', '', 1291313450, '192.168.7.253'),
(12, 'i', 9, 601, 800, 'credit_s24.gif', '', 1291279773, '192.168.7.253'),
(17, 'k', 11, 1001, 2000, 'credit_s31.gif', '', 1291313497, '192.168.7.253'),
(18, 'l', 12, 2001, 3000, 'credit_s32.gif', '', 1291313521, '192.168.7.253'),
(19, 'm', 13, 3001, 4000, 'credit_s33.gif', '', 1291313548, '192.168.7.253'),
(20, 'n', 14, 4001, 5000, 'credit_s34.gif', '', 1291313572, '192.168.7.253'),
(21, 'o', 15, 5001, 6000, 'credit_s35.gif', '', 1291313599, '192.168.7.253'),
(22, 'p', 16, 6001, 8000, 'credit_s41.gif', '', 1291313654, '192.168.7.253'),
(23, 'q', 17, 8001, 10000, 'credit_s42.gif', '', 1291313686, '192.168.7.253'),
(24, 'r', 18, 10001, 20000, 'credit_s43.gif', '', 1291313721, '192.168.7.253'),
(25, 's', 19, 20001, 30000, 'credit_s44.gif', '', 1291313752, '192.168.7.253'),
(26, 't', 20, 30001, 1000000, 'credit_s45.gif', '', 1291313780, '192.168.7.253');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
