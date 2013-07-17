-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 07 月 17 日 09:20
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
-- 表的结构 `zx_linkage_type`
--

CREATE TABLE IF NOT EXISTS `zx_linkage_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) DEFAULT '0',
  `name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `zx_linkage_type`
--

INSERT INTO `zx_linkage_type` (`id`, `order`, `name`, `nid`, `addtime`, `addip`) VALUES
(1, 10, '婚姻状况', 'user_marry', 0, ''),
(2, 10, '用户-子女', 'user_child', 0, ''),
(3, 10, '用户-学历', 'user_education', 0, ''),
(4, 10, '用户-收入', 'user_income', 0, ''),
(5, 10, '用户-社保', 'user_shebao', 0, ''),
(6, 10, '用户-住房条件', 'user_housing', 0, ''),
(7, 10, '用户-是否有车', 'user_car', 0, ''),
(8, 10, '用户-是否逾期', 'user_late', 0, ''),
(9, 10, '用户-供款状况', 'user_status', 0, ''),
(10, 10, '用户-公司性质', 'user_company_type', 0, ''),
(11, 10, '用户-公司行业', 'user_company_industry', 0, ''),
(12, 10, '用户-工作级别', 'user_company_jibie', 0, ''),
(13, 10, '用户-职 位', 'user_company_office', 0, ''),
(14, 10, '用户-工作年限', 'user_company_workyear', 0, ''),
(15, 10, '用户-经营场所', 'user_private_place', 0, ''),
(16, 10, '用户-自有房产', 'user_finance_property', 0, ''),
(17, 10, '用户-自有汽车', 'user_finance_car', 0, ''),
(18, 10, '用户-联系人关系', 'user_relation', 0, ''),
(19, 10, '借款用途', 'borrow_use', 0, ''),
(20, 10, '借款期限', 'borrow_time_limit', 0, ''),
(21, 10, '还款方式', 'borrow_style', 0, ''),
(22, 10, '最低投标金额', 'borrow_lowest_account', 0, ''),
(23, 10, '最多投标总额', 'borrow_most_account', 0, ''),
(24, 10, '有效时间', 'borrow_valid_time', 0, ''),
(25, 10, '帐户银行', 'account_bank', 0, ''),
(26, 10, '短消息类型', 'message_type', 0, ''),
(27, 10, '隐私设置类型', 'yinsi', 0, ''),
(28, 10, '密码保护设置', 'pwd_protection', 0, ''),
(29, 10, '好友类型', 'friends_type', 0, ''),
(30, 10, '用户资金类别', 'account_type', 0, ''),
(31, 10, '56个民族', 'nation', 0, ''),
(32, 10, '证件类别', 'card_type', 0, ''),
(33, 10, '招标的状态', 'borrow_type', 0, ''),
(34, 10, '贷款用途', 'borrow_yongtu', 0, ''),
(35, 10, '贷款期限', 'borrow_qixian', 0, ''),
(36, 10, '金额范围', 'account_amange', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
