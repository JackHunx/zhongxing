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
-- 表的结构 `zx_credit_type`
--

CREATE TABLE IF NOT EXISTS `zx_credit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '积分名称',
  `nid` varchar(50) DEFAULT NULL COMMENT '积分代码',
  `value` int(11) DEFAULT '0' COMMENT '积分数值',
  `cycle` tinyint(1) DEFAULT '2' COMMENT '积分周期，1:一次,2:每天,3:间隔分钟,4:不限',
  `award_times` tinyint(4) DEFAULT NULL COMMENT '奖励次数,0:不限',
  `interval` int(11) DEFAULT '1' COMMENT '时间间隔，单位分钟',
  `remark` text COMMENT '备注',
  `op_user` int(11) DEFAULT NULL COMMENT '操作者',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `addip` varchar(30) DEFAULT NULL COMMENT '添加IP',
  `updatetime` int(11) DEFAULT NULL COMMENT '最后更新时间',
  `updateip` varchar(30) DEFAULT NULL COMMENT '最后更新ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='积分类型' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `zx_credit_type`
--

INSERT INTO `zx_credit_type` (`id`, `name`, `nid`, `value`, `cycle`, `award_times`, `interval`, `remark`, `op_user`, `addtime`, `addip`, `updatetime`, `updateip`) VALUES
(1, '邮箱认证', 'email', 10, 1, 1, 0, '', 0, 1282347586, '192.168.7.253', 0, '192.168.7.253'),
(2, '实名认证', 'realname', 10, 1, 1, 0, '', 0, 1282347805, '192.168.7.253', 0, '192.168.7.253'),
(3, '手机认证', 'phone', 10, 1, 1, 0, '', 0, 1285002118, '192.168.7.253', 0, '192.168.7.253'),
(4, '视频认证', 'video', 5, 1, 0, 0, '', 0, 1285002132, '192.168.7.253', 0, '192.168.7.253'),
(5, '现场认证', 'scene', 20, 1, 0, 0, '', 0, 1285002198, '192.168.7.253', 0, '192.168.7.253'),
(6, '证件积分', 'zhengjian', 0, 4, 0, 0, '', 0, 1285002255, '192.168.7.253', 0, '192.168.7.253'),
(7, '投标成功', 'invest_success', 2, 4, 0, 0, '', 0, 1287675813, '192.168.7.253', 0, '192.168.7.253'),
(8, '借款成功', 'borrow_success', 1, 4, 0, 0, '', 0, 1287675904, '192.168.7.253', 0, '192.168.7.253'),
(9, '论坛发稿', 'bbs_topics', 1, 4, 0, 0, '', 0, 1287676784, '192.168.7.253', 0, '192.168.7.253'),
(10, '提前或按时还款', 'borrow_paymengt', 2, 4, 0, 0, '', 0, 1287676875, '192.168.7.253', 0, '192.168.7.253'),
(11, '逾期还款', 'borrow_paymentover', -5, 4, 0, 0, '', 0, 1287677063, '192.168.7.253', 0, '192.168.7.253'),
(12, '提前3天以上还款', 'advance_3day', 5, 4, 0, 0, '', 0, 1291940289, '192.168.7.253', 0, '192.168.7.253'),
(13, '提前1到3天还款', 'advance_1day', 2, 4, 0, 0, '', 0, 1291940336, '192.168.7.253', 0, '192.168.7.253'),
(14, '正常还款', 'advance_day', 1, 4, 0, 0, '', 0, 1291940391, '192.168.7.253', 0, '192.168.7.253'),
(15, '其他积分', NULL, 0, 2, NULL, 1, '其他积分,用于其他情况', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
