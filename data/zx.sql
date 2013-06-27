-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 06 月 24 日 22:50
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
-- 表的结构 `zx_account`
--

CREATE TABLE IF NOT EXISTS `zx_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `total` decimal(11,2) DEFAULT '0.00' COMMENT '�ʽ��ܶ�',
  `use_money` decimal(11,2) DEFAULT '0.00',
  `no_use_money` decimal(11,2) DEFAULT '0.00',
  `collection` decimal(11,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `zx_account`
--

INSERT INTO `zx_account` (`id`, `user_id`, `total`, `use_money`, `no_use_money`, `collection`) VALUES
(1, 6, 2089.86, 2089.86, 0.00, 0.00),
(2, 11, 9780.74, 9780.74, 0.00, 0.00),
(3, 8, 0.00, 0.00, 0.00, 0.00),
(4, 9, 1126.55, 1126.55, 0.00, 0.00),
(5, 12, 928.68, 928.68, 0.00, 0.00),
(6, 16, 30073.78, 30073.78, 0.00, 0.00),
(7, 14, 2023.33, 2023.33, 0.00, 0.00),
(8, 17, 6164.55, 6164.55, 0.00, 0.00),
(9, 18, 13100.56, 13100.56, 0.00, 0.00),
(10, 25, 1019.00, 1019.00, 0.00, 0.00),
(11, 24, 11588.29, 11588.29, 0.00, 0.00),
(12, 22, 20414.57, 10231.24, 0.00, 10183.33),
(13, 26, 9980.00, 8980.00, 1000.00, 0.00),
(14, 23, 30313.75, 20138.75, 0.00, 10175.00),
(15, 38, 200.00, 200.00, 0.00, 0.00),
(16, 29, 10401.42, 10401.42, 0.00, 0.00),
(17, 19, 8231.88, 8231.88, 0.00, 0.00),
(18, 30, 2741.69, 2741.69, 0.00, 0.00),
(19, 32, 13800.00, 12800.00, 1000.00, 0.00),
(20, 21, 20651.02, 20651.02, 0.00, 0.00),
(21, 28, 11617.19, 11617.19, 0.00, 0.00),
(22, 33, 0.00, 0.00, 0.00, 0.00),
(23, 35, 1886.24, 1886.24, 0.00, 0.00);

-- --------------------------------------------------------

--
-- 表的结构 `zx_account_bank`
--

CREATE TABLE IF NOT EXISTS `zx_account_bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�ID',
  `account` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '�˺�',
  `bank` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `branch` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '֧��',
  `province` int(5) DEFAULT '0' COMMENT 'ʡ��',
  `city` int(5) DEFAULT '0' COMMENT '����',
  `area` int(5) DEFAULT '0' COMMENT '��',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='�����ʻ�' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_account_cash`
--

CREATE TABLE IF NOT EXISTS `zx_account_cash` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�ID',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '�˺�',
  `bank` text CHARACTER SET gbk COMMENT '��������',
  `branch` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '֧��',
  `total` float(20,2) DEFAULT '0.00' COMMENT '�ܶ�',
  `credited` varchar(20) CHARACTER SET gbk DEFAULT '0' COMMENT '�����ܶ�',
  `fee` varchar(20) CHARACTER SET gbk DEFAULT '0' COMMENT '������',
  `verify_userid` int(11) DEFAULT NULL,
  `verify_time` int(11) DEFAULT NULL,
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idv` (`user_id`,`status`,`verify_userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='���ּ�¼' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_account_log`
--

CREATE TABLE IF NOT EXISTS `zx_account_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�ID',
  `type` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `total` decimal(11,2) DEFAULT '0.00',
  `money` decimal(20,2) DEFAULT NULL COMMENT '���',
  `use_money` decimal(10,2) DEFAULT '0.00' COMMENT '���ý��',
  `no_use_money` decimal(10,2) DEFAULT '0.00' COMMENT '������',
  `collection` decimal(11,2) DEFAULT '0.00',
  `to_user` int(11) DEFAULT NULL COMMENT '���׶Է�',
  `remark` varchar(250) CHARACTER SET gbk DEFAULT '0' COMMENT '��ע',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='�ʽ��¼' AUTO_INCREMENT=329 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_account_payment`
--

CREATE TABLE IF NOT EXISTS `zx_account_payment` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext CHARACTER SET gbk,
  `fee` int(10) DEFAULT '0',
  `fee_type` int(2) DEFAULT NULL,
  `max_money` int(10) DEFAULT NULL,
  `max_fee` int(10) DEFAULT NULL,
  `description` longtext CHARACTER SET gbk,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_account_recharge`
--

CREATE TABLE IF NOT EXISTS `zx_account_recharge` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `trade_no` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '������',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�ID',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `money` decimal(10,2) DEFAULT '0.00' COMMENT '���',
  `payment` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `return` text CHARACTER SET gbk,
  `type` varchar(10) CHARACTER SET gbk DEFAULT '0' COMMENT '����',
  `remark` varchar(250) CHARACTER SET gbk DEFAULT '0' COMMENT '��ע',
  `fee` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `verify_userid` int(11) DEFAULT '0' COMMENT '�����',
  `verify_time` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT '' COMMENT '��˱�ע',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idp` (`user_id`,`payment`),
  KEY `user_idv` (`user_id`,`payment`,`verify_userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='��ֵ��¼' AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_ad`
--

CREATE TABLE IF NOT EXISTS `zx_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nid` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `order` int(10) NOT NULL DEFAULT '0',
  `name` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `litpic` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `timelimit` int(2) NOT NULL DEFAULT '0',
  `firsttime` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `endtime` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `content` text CHARACTER SET latin1 NOT NULL,
  `endcontent` text CHARACTER SET latin1 NOT NULL,
  `addtime` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addip` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_area`
--

CREATE TABLE IF NOT EXISTS `zx_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `domain` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`),
  KEY `nidp` (`nid`,`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3577 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_article`
--

CREATE TABLE IF NOT EXISTS `zx_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `littitle` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `is_jump` char(1) CHARACTER SET gbk DEFAULT NULL,
  `author` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `jumpurl` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `summary` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `content` text CHARACTER SET gbk,
  `order` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `comment` int(11) DEFAULT '0',
  `is_comment` char(1) CHARACTER SET gbk DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=159 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_article_fields`
--

CREATE TABLE IF NOT EXISTS `zx_article_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  `files` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `zx_assignments`
--

CREATE TABLE IF NOT EXISTS `zx_assignments` (
  `itemname` varchar(64) CHARACTER SET latin1 NOT NULL,
  `userid` varchar(64) CHARACTER SET latin1 NOT NULL,
  `bizrule` text CHARACTER SET latin1,
  `data` text CHARACTER SET latin1,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `zx_attestation`
--

CREATE TABLE IF NOT EXISTS `zx_attestation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `type_id` int(11) DEFAULT '0' COMMENT '�ϴ�������',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT '��֤��״̬',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��֤��ͼƬ',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��֤�ļ��',
  `jifen` int(20) DEFAULT '0' COMMENT '��֤�Ļ���',
  `pic` text CHARACTER SET gbk,
  `pic2` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `pic3` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(32) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `verify_user` int(11) DEFAULT NULL COMMENT '�����',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��˱�ע',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=329 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_attestation_type`
--

CREATE TABLE IF NOT EXISTS `zx_attestation_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `jifen` int(20) DEFAULT '0' COMMENT '����',
  `summary` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `remark` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '��ע',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_credits`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_credits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `creditscode` char(45) CHARACTER SET gbk DEFAULT NULL,
  `creditsname` char(45) CHARACTER SET gbk DEFAULT NULL,
  `postvar` int(11) DEFAULT '0',
  `replyvar` int(11) DEFAULT '0',
  `goodvar` int(11) DEFAULT '0',
  `uploadvar` int(11) DEFAULT '0',
  `downvar` int(11) DEFAULT '0',
  `votevar` int(11) DEFAULT '0',
  `isuse` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_dirtywords`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_dirtywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `word` char(45) CHARACTER SET gbk DEFAULT NULL,
  `replaceto` char(45) CHARACTER SET gbk DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT '0',
  `doaction` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_forums`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT NULL,
  `name` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `content` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `rules` text CHARACTER SET gbk,
  `picurl` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `admins` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `today_num` int(10) unsigned DEFAULT '0',
  `topics_num` int(10) unsigned DEFAULT '0',
  `posts_num` int(10) unsigned DEFAULT '0',
  `last_postname` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `last_postuser` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `last_postusername` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `last_posttime` int(10) unsigned DEFAULT '0',
  `last_postid` int(10) unsigned DEFAULT '0',
  `isverify` tinyint(1) unsigned DEFAULT '0',
  `forumpass` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `forumusers` text CHARACTER SET gbk,
  `forumgroups` text CHARACTER SET gbk,
  `showtype` tinyint(1) unsigned DEFAULT '0',
  `ishidden` tinyint(1) unsigned DEFAULT '0',
  `order` int(10) unsigned DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_posts`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned DEFAULT NULL,
  `istopic` tinyint(1) unsigned DEFAULT '0',
  `fid` int(10) unsigned DEFAULT '0',
  `user_id` int(10) unsigned DEFAULT '0',
  `username` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `edittime` int(10) unsigned DEFAULT '0',
  `iscover` tinyint(1) unsigned DEFAULT '0',
  `isverify` int(1) unsigned DEFAULT '0',
  `verifydesc` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=128 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_reward`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_reward` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned DEFAULT '0',
  `userid` int(10) unsigned DEFAULT '0',
  `bestid` int(10) unsigned DEFAULT '0',
  `reward` int(10) unsigned DEFAULT '0',
  `rewardcredits` varchar(8) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_settings`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `value` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `status` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_topics`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fid` int(10) unsigned DEFAULT '0',
  `user_id` int(10) unsigned DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `username` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `posttime` int(10) unsigned DEFAULT '0',
  `edittime` int(10) unsigned DEFAULT '0',
  `ordertime` int(10) unsigned DEFAULT '0',
  `last_replytime` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `last_replyuser` int(11) DEFAULT NULL,
  `last_replyusername` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `type` tinyint(1) unsigned DEFAULT '0',
  `posts_num` int(10) unsigned DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `islock` tinyint(1) unsigned DEFAULT '0',
  `isgood` tinyint(1) unsigned DEFAULT '0',
  `istop` tinyint(1) unsigned DEFAULT '0',
  `isalltop` tinyint(1) unsigned DEFAULT '0',
  `stamp` tinyint(1) unsigned DEFAULT '0',
  `isrecycle` tinyint(1) unsigned DEFAULT '0',
  `credit` int(11) DEFAULT NULL,
  `verifystate` tinyint(1) unsigned DEFAULT '0',
  `verifydesc` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `isresolved` tinyint(1) unsigned DEFAULT '0',
  `attachicon` varchar(45) CHARACTER SET gbk DEFAULT NULL,
  `highlight` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topictype` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow`
--

CREATE TABLE IF NOT EXISTS `zx_borrow` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����ͼ',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `is_vouch` int(2) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `view_type` int(11) NOT NULL DEFAULT '0',
  `vouch_award` varchar(40) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_user` varchar(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_account` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_times` int(11) NOT NULL DEFAULT '0',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Դ',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `customer` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '�ͷ�',
  `number_id` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `verify_user` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '�����',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ͷ�',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `repayment_user` int(11) DEFAULT '0',
  `forst_account` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `monthly_repayment` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÿ�»����',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `repayment_yesinterest` int(11) NOT NULL DEFAULT '0',
  `repayment_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `repayment_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `success_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `end_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `payment_account` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `each_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `use` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��;',
  `time_limit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `style` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʽ',
  `account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ܽ��',
  `account_yes` varchar(10) CHARACTER SET gbk DEFAULT '0',
  `tender_times` varchar(11) CHARACTER SET gbk DEFAULT '0',
  `apr` decimal(18,2) DEFAULT NULL COMMENT '������',
  `lowest_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���Ͷ����',
  `most_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���Ͷ���ܶ�',
  `valid_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Чʱ��',
  `award` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ͷ�꽱��',
  `part_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��̯�������',
  `funds` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���������ı���',
  `is_false` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʧ��ʱҲͬ������ ',
  `open_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ��ʻ��ʽ����',
  `open_borrow` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵĽ���ʽ����',
  `open_tender` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ�Ͷ���ʽ����',
  `open_credit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ����ö�����',
  `content` text CHARACTER SET gbk COMMENT '��ϸ˵��',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idst` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_amount`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_amount` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(20) CHARACTER SET gbk NOT NULL DEFAULT '',
  `account` int(11) NOT NULL DEFAULT '0',
  `newaccount` decimal(11,0) DEFAULT '0',
  `oldaccount` int(11) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `addtime` varchar(30) CHARACTER SET gbk NOT NULL DEFAULT '',
  `content` text CHARACTER SET gbk NOT NULL,
  `remark` text CHARACTER SET gbk NOT NULL,
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `verify_user` int(11) DEFAULT NULL,
  `addip` varchar(30) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_amountlog`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_amountlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `amount_type` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_total` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `addtime` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addip` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_amountlog1`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_amountlog1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `amount_type` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_total` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `addtime` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addip` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_collection`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `status` int(2) DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `tender_id` int(11) DEFAULT '0' COMMENT '���id',
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'ʵ�����',
  `interest` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `capital` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `late_days` int(11) NOT NULL DEFAULT '0',
  `late_interest` varchar(11) CHARACTER SET gbk NOT NULL DEFAULT '0',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_line`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_line` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����ͼ',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `type` int(2) DEFAULT '0' COMMENT '�������',
  `borrow_use` int(10) DEFAULT '0' COMMENT '������;',
  `borrow_qixian` int(10) DEFAULT '0' COMMENT '��������',
  `province` int(10) DEFAULT '0' COMMENT 'ʡ��',
  `city` int(10) DEFAULT '0' COMMENT '����',
  `area` int(10) DEFAULT '0' COMMENT '����',
  `account` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '������',
  `content` text CHARACTER SET gbk COMMENT '��ϸ˵��',
  `pawn` varchar(2) CHARACTER SET gbk DEFAULT NULL COMMENT '���޵�Ѻ',
  `tel` varchar(15) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰',
  `sex` varchar(2) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ա�',
  `xing` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `verify_user` int(11) DEFAULT NULL COMMENT '�����',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_repayment`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_repayment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `status` int(2) DEFAULT '0',
  `webstatus` int(2) NOT NULL DEFAULT '0' COMMENT '��վ����',
  `order` int(2) DEFAULT NULL,
  `borrow_id` int(11) DEFAULT '0' COMMENT '���id',
  `repayment_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ƻ���ʱ��',
  `repayment_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ѿ�����ʱ��',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'Ԥ�����',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'ʵ�����',
  `late_days` int(11) NOT NULL DEFAULT '0',
  `late_interest` varchar(11) CHARACTER SET gbk NOT NULL DEFAULT '0',
  `interest` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `capital` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `forfeit` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '���ɽ�',
  `reminder_fee` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '���շ�',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idubs` (`borrow_id`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_tender`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_tender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `borrow_id` int(11) DEFAULT '0',
  `money` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `account` varchar(10) CHARACTER SET gbk DEFAULT '0',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '�ܶ�',
  `interest` varchar(11) CHARACTER SET gbk NOT NULL DEFAULT '0',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '�ѻ��ܶ�',
  `wait_account` varchar(11) CHARACTER SET gbk DEFAULT '0' COMMENT '�����ܶ�',
  `wait_interest` varchar(11) CHARACTER SET gbk DEFAULT '0' COMMENT '������Ϣ',
  `repayment_yesinterest` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '�ѻ���Ϣ',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idub` (`user_id`,`borrow_id`),
  KEY `user_idubs` (`user_id`,`borrow_id`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='�б�' AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_union`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_union` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����ͼ',
  `range` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��Ӫ��Χ',
  `content` text CHARACTER SET gbk COMMENT '��˾���',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_vouch`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_vouch` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `borrow_id` int(11) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  `account` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `vouch_account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `content` text CHARACTER SET gbk NOT NULL,
  `award_fund` varchar(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  `award_account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `addtime` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addip` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_vouch_collection`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_vouch_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `borrow_id` int(11) NOT NULL DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `vouch_id` int(11) DEFAULT '0' COMMENT '���id',
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'ʵ�����',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_vouch_repayment`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_vouch_repayment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `borrow_id` int(11) NOT NULL DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT 'ʵ�����',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_cache`
--

CREATE TABLE IF NOT EXISTS `zx_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `user_num` int(11) DEFAULT NULL,
  `user_online_num` int(11) DEFAULT '0',
  `user_online_time` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `last_user` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `bbs_first_visit` int(20) DEFAULT '0',
  `bbs_topics_num` int(11) DEFAULT NULL,
  `bbs_posts_num` int(11) DEFAULT NULL,
  `bbs_today_topics` int(11) DEFAULT NULL,
  `bbs_today_posts` int(11) DEFAULT NULL,
  `bbs_yesterday_topics` int(11) DEFAULT NULL,
  `bbs_yesterday_posts` int(11) DEFAULT NULL,
  `bbs_most_topics` int(11) DEFAULT NULL,
  `bbs_most_posts` int(11) DEFAULT NULL,
  `borrow_account` varchar(11) CHARACTER SET gbk DEFAULT '0',
  `borrow_success` varchar(20) CHARACTER SET gbk DEFAULT '0',
  `borrow_num` int(10) DEFAULT '0',
  `borrow_successnum` varchar(11) CHARACTER SET gbk DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_cms_article`
--

CREATE TABLE IF NOT EXISTS `zx_cms_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0',
  `title` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `littitle` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `flag` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `is_jump` int(1) DEFAULT NULL,
  `author` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `jumpurl` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `summary` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `order` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `comment` int(11) DEFAULT '0',
  `is_comment` int(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_cms_article_fields`
--

CREATE TABLE IF NOT EXISTS `zx_cms_article_fields` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_comment`
--

CREATE TABLE IF NOT EXISTS `zx_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `module_code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET gbk,
  `flag` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_company`
--

CREATE TABLE IF NOT EXISTS `zx_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '��˾����',
  `site_id` int(11) NOT NULL COMMENT '��ĿID',
  `flag` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '��������',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  `order` varchar(10) CHARACTER SET latin1 NOT NULL COMMENT '����',
  `litpic` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `percentage` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '���ڰٷֱ�',
  `capital` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '�ʱ�',
  `ascendent` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '��Ҫ��������',
  `quality` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `sales` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'ȫ������',
  `staff` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'Ա��',
  `foundyear` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '�������',
  `payment` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '���ʽ',
  `markets_main` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '��Ҫ�����г�',
  `markets_other` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '���������г�',
  `replace_work` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '�����г�',
  `rdman` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '�з���Ա����',
  `engineer` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '����ʦ����',
  `summary` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '���',
  `content` text CHARACTER SET latin1 COMMENT '����',
  `province` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `area` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '��',
  `address` varchar(200) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ַ',
  `postcode` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '�ʱ�',
  `linkman` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ϵ��',
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'email',
  `tel` varchar(200) CHARACTER SET latin1 DEFAULT NULL COMMENT '�绰',
  `fax` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `msn` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'msn',
  `qq` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'QQ',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_company_fields`
--

CREATE TABLE IF NOT EXISTS `zx_company_fields` (
  `aid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `zx_credit`
--

CREATE TABLE IF NOT EXISTS `zx_credit` (
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '��ԱID',
  `value` int(11) DEFAULT '0' COMMENT '������ֵ',
  `op_user` int(11) DEFAULT NULL COMMENT '������',
  `addtime` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����IP',
  `updatetime` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '������ʱ��',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '������ID',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='��Ա����';

-- --------------------------------------------------------

--
-- 表的结构 `zx_credit_log`
--

CREATE TABLE IF NOT EXISTS `zx_credit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '��ԱID',
  `type_id` int(11) DEFAULT '0' COMMENT '��������ID',
  `op` tinyint(1) DEFAULT '1' COMMENT '�䶯����,1:����,2:����',
  `value` int(11) DEFAULT '0' COMMENT '�䶯������ֵ',
  `remark` text CHARACTER SET gbk COMMENT '��ע',
  `op_user` int(11) DEFAULT NULL COMMENT '������',
  `addtime` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='��Ա������־' AUTO_INCREMENT=362 ;

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

-- --------------------------------------------------------

--
-- 表的结构 `zx_credit_type`
--

CREATE TABLE IF NOT EXISTS `zx_credit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ִ���',
  `value` int(11) DEFAULT '0' COMMENT '������ֵ',
  `cycle` tinyint(1) DEFAULT '2' COMMENT '�������ڣ�1:һ��,2:ÿ��,3:�������,4:����',
  `award_times` tinyint(4) DEFAULT NULL COMMENT '��������,0:����',
  `interval` int(11) DEFAULT '1' COMMENT 'ʱ��������λ����',
  `remark` text CHARACTER SET gbk COMMENT '��ע',
  `op_user` int(11) DEFAULT NULL COMMENT '������',
  `addtime` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����IP',
  `updatetime` int(11) DEFAULT NULL COMMENT '������ʱ��',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '������ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='��������' AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_discount`
--

CREATE TABLE IF NOT EXISTS `zx_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL COMMENT '�̼�',
  `litpic` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '�ϴ�ͼƬ',
  `type` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '����:�磬���У���ʳ������...',
  `business_district` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '��Ȧ',
  `company_id` int(11) DEFAULT NULL COMMENT '�̼�',
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `province` int(11) DEFAULT NULL COMMENT 'ʡ��',
  `city` int(11) DEFAULT NULL COMMENT '����',
  `area` int(11) DEFAULT NULL COMMENT '��',
  `address` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ַ',
  `tag` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ǩ',
  `start_date` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ʼʱ��',
  `end_date` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `comment` text CHARACTER SET latin1 COMMENT '����',
  `hit` int(11) DEFAULT '0' COMMENT '�������',
  `top` int(11) DEFAULT '0' COMMENT '������',
  `remark` text CHARACTER SET latin1 COMMENT '��ע',
  `post_user` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '������',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_discount_company`
--

CREATE TABLE IF NOT EXISTS `zx_discount_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '�̼�����',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `litpic` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '�ϴ�ͼƬ',
  `goods` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '���Ʒ',
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '�Ż�����',
  `linkman` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ϵ��',
  `tel` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ϵ�绰',
  `content` text CHARACTER SET latin1 NOT NULL COMMENT '��˾���',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_editor`
--

CREATE TABLE IF NOT EXISTS `zx_editor` (
  `editor_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `description` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `version` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `author` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `api` text CHARACTER SET gbk,
  PRIMARY KEY (`editor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_fee`
--

CREATE TABLE IF NOT EXISTS `zx_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `nid` int(11) DEFAULT NULL COMMENT '��ĿID',
  `value` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ֵ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_fields`
--

CREATE TABLE IF NOT EXISTS `zx_fields` (
  `fields_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `type` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `size` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `input` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `description` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `default` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `select` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`fields_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_flag`
--

CREATE TABLE IF NOT EXISTS `zx_flag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_friends`
--

CREATE TABLE IF NOT EXISTS `zx_friends` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�',
  `friends_userid` int(11) DEFAULT '0' COMMENT '����',
  `friends_username` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `type` int(2) DEFAULT '0' COMMENT '����',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='����' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_friends_request`
--

CREATE TABLE IF NOT EXISTS `zx_friends_request` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�',
  `friends_userid` int(11) DEFAULT '0' COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `type` int(2) DEFAULT '0',
  `content` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='���Ѽ�¼' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_help`
--

CREATE TABLE IF NOT EXISTS `zx_help` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `smallname` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `is_jump` int(1) DEFAULT NULL,
  `author` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `summary` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `jumpurl` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `order` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `comment` int(11) DEFAULT '0',
  `is_comment` int(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_help_type`
--

CREATE TABLE IF NOT EXISTS `zx_help_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `pid` int(2) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `list_name` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `content_name` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `index_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `list_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `content_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `title` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `keywords` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `description` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_home`
--

CREATE TABLE IF NOT EXISTS `zx_home` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����ͼ',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Դ',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `xiaoqu` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'С��',
  `shi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `ting` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `wei` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `louceng` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¥��',
  `zonglouceng` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��¥��',
  `loupan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¥��',
  `zhucegongsi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ƿ�ע�ṫ˾',
  `mianji` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `mianji1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������1',
  `mianji2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������2',
  `fangshi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���ⷽʽ',
  `leixing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `zhuangxiu` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'װ��',
  `chaoxiang` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `zujin` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `jiage` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�ۼ�',
  `jiage1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ۼ�1',
  `jiage2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ۼ�2',
  `jiageleixing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�۸�����',
  `lishijingying` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��ʷ��Ӫ',
  `jibenqingkuang` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `diduan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�ض�',
  `diduan1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�ض�1',
  `diduan2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�ض�2',
  `fukuan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʽ',
  `linjin` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�ٽ�',
  `peizhi` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `tupian` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT 'ͼƬ',
  `xianxingbie` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '�����Ա�',
  `chuzufangjian` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '���ⷿ��',
  `chuzuleixing` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����˵��',
  `lianxiren` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ��',
  `dianhua` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰',
  `qq` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'qq',
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updatetime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updateip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_integral`
--

CREATE TABLE IF NOT EXISTS `zx_integral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��Ʒ����',
  `need` double DEFAULT NULL COMMENT '�������',
  `number` int(11) DEFAULT NULL COMMENT '����',
  `ex_number` int(11) DEFAULT '0' COMMENT '�Ѷһ�����',
  `province` int(11) DEFAULT NULL COMMENT '�ɶһ�ʡ��',
  `city` int(11) DEFAULT NULL COMMENT '�ɶһ�����',
  `area` int(11) DEFAULT NULL COMMENT '��',
  `litpic` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ͼƬ',
  `content` text CHARACTER SET gbk COMMENT '��ϸ��Ϣ',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `top` int(11) DEFAULT '0' COMMENT '������',
  `flag` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_integral_convert`
--

CREATE TABLE IF NOT EXISTS `zx_integral_convert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integral_id` int(11) DEFAULT NULL COMMENT '�һ���ƷID',
  `user_id` int(11) DEFAULT NULL COMMENT '��ԱID',
  `number` int(11) DEFAULT NULL COMMENT '����',
  `need` int(11) DEFAULT NULL COMMENT '����Ҫ�Ļ���',
  `integral` int(11) DEFAULT NULL COMMENT '�ܻ���',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `remark` varchar(200) CHARACTER SET gbk DEFAULT '' COMMENT '��ע',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_invest`
--

CREATE TABLE IF NOT EXISTS `zx_invest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����ͼ',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Դ',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `customer` int(11) DEFAULT NULL COMMENT '�ͷ�',
  `verify_userid` int(11) DEFAULT NULL COMMENT '�����',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `use` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��;',
  `time_limit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `style` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʽ',
  `account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ܽ��',
  `apr` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '������',
  `lowest_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���Ͷ����',
  `most_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���Ͷ���ܶ�',
  `valid_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Чʱ��',
  `award` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ͷ�꽱��',
  `part_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��̯�������',
  `funds` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���������ı���',
  `is_false` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʧ��ʱҲͬ������ ',
  `open_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ��ʻ��ʽ����',
  `open_borrow` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵĽ���ʽ����',
  `open_tender` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ�Ͷ���ʽ����',
  `open_credit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�����ҵ����ö�����',
  `content` text CHARACTER SET gbk COMMENT '��ϸ˵��',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_invite`
--

CREATE TABLE IF NOT EXISTS `zx_invite` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` smallint(5) unsigned DEFAULT '0',
  `status` smallint(2) unsigned DEFAULT '0',
  `order` smallint(6) DEFAULT '0',
  `flag` varchar(30) CHARACTER SET gbk DEFAULT '0',
  `type_id` smallint(5) unsigned DEFAULT '0',
  `name` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `province` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `city` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `area` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `num` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `description` text CHARACTER SET gbk,
  `demand` text CHARACTER SET gbk,
  `hits` int(10) DEFAULT '0',
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `uptime` int(10) DEFAULT '0',
  `upip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='��Ƹ�б�' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_invite_type`
--

CREATE TABLE IF NOT EXISTS `zx_invite_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='��Ƹ����' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_itemchildren`
--

CREATE TABLE IF NOT EXISTS `zx_itemchildren` (
  `parent` varchar(64) CHARACTER SET latin1 NOT NULL,
  `child` varchar(64) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zx_itemchildren`
--

INSERT INTO `zx_itemchildren` (`parent`, `child`) VALUES
('admin-SystemAdministrating', 'admin-SystemAdmin'),
('admin-SystemAdministrating', 'admin-SystemCreate'),
('admin-SystemAdministrating', 'admin-SystemDelete'),
('admin-SystemAdministrating', 'admin-SystemIndex'),
('admin-SystemAdministrating', 'admin-SystemUpdate'),
('admin-SystemAdministrating', 'admin-SystemView'),
('admin-SystemViewing', 'admin-SystemView'),
('User', 'User Manager'),
('User-EditAdministrating', 'User-EditIndex'),
('User-validateAdministrating', 'User-validateAvatar'),
('User-validateAdministrating', 'User-validateEmail'),
('User-validateAdministrating', 'User-validateIndex'),
('User-validateAdministrating', 'User-validatePhone'),
('User-validateAdministrating', 'User-validateVip'),
('UserAdministrating', 'UserAdmin'),
('UserAdministrating', 'UserCheckstring'),
('UserAdministrating', 'UserCheck_email'),
('UserAdministrating', 'UserCheck_exists'),
('UserAdministrating', 'UserCheck_username'),
('UserAdministrating', 'UserCreate'),
('UserAdministrating', 'UserDelete'),
('UserAdministrating', 'UserIndex'),
('UserAdministrating', 'UserUpdate'),
('UserAdministrating', 'UserView'),
('UserViewing', 'UserView');

-- --------------------------------------------------------

--
-- 表的结构 `zx_items`
--

CREATE TABLE IF NOT EXISTS `zx_items` (
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zx_items`
--

INSERT INTO `zx_items` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin-SystemAdmin', 0, NULL, NULL, 'N;'),
('admin-SystemAdministrating', 1, NULL, NULL, 'N;'),
('admin-SystemCreate', 0, NULL, NULL, 'N;'),
('admin-SystemDelete', 0, NULL, NULL, 'N;'),
('admin-SystemIndex', 0, NULL, NULL, 'N;'),
('admin-SystemUpdate', 0, NULL, NULL, 'N;'),
('admin-SystemView', 0, NULL, NULL, 'N;'),
('admin-SystemViewing', 1, NULL, NULL, 'N;'),
('Administrator', 2, '超级管理员', '拥有至高无上的全部权限', 's:0:"";'),
('Authority', 2, NULL, NULL, NULL),
('User', 2, NULL, NULL, NULL),
('User Manager', 1, NULL, NULL, NULL),
('User-EditAdministrating', 1, NULL, NULL, 'N;'),
('User-EditIndex', 0, NULL, NULL, 'N;'),
('User-EditViewing', 1, NULL, NULL, 'N;'),
('User-validateAdministrating', 1, NULL, NULL, 'N;'),
('User-validateAvatar', 0, NULL, NULL, 'N;'),
('User-validateEmail', 0, NULL, NULL, 'N;'),
('User-validateIndex', 0, NULL, NULL, 'N;'),
('User-validatePhone', 0, NULL, NULL, 'N;'),
('User-validateViewing', 1, NULL, NULL, 'N;'),
('User-validateVip', 0, NULL, NULL, 'N;'),
('UserAdmin', 0, NULL, NULL, 'N;'),
('UserAdministrating', 1, NULL, NULL, 'N;'),
('UserCheckstring', 0, NULL, NULL, 'N;'),
('UserCheck_email', 0, NULL, NULL, 'N;'),
('UserCheck_exists', 0, NULL, NULL, 'N;'),
('UserCheck_username', 0, NULL, NULL, 'N;'),
('UserCreate', 0, NULL, NULL, 'N;'),
('UserDelete', 0, NULL, NULL, 'N;'),
('UserIndex', 0, NULL, NULL, 'N;'),
('UserUpdate', 0, NULL, NULL, 'N;'),
('UserView', 0, NULL, NULL, 'N;'),
('UserViewing', 1, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- 表的结构 `zx_limitapp`
--

CREATE TABLE IF NOT EXISTS `zx_limitapp` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `order` int(11) DEFAULT '0' COMMENT '����',
  `account` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ҫ���ӵĶ��',
  `recommend_userid` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '�Ƽ���',
  `content` text CHARACTER SET gbk COMMENT '��ϸ˵��',
  `other_content` text CHARACTER SET gbk COMMENT '�����ط���ϸ˵��',
  `verify_userid` int(11) DEFAULT NULL COMMENT '�����',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `verify_remark` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ע',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_linkage`
--

CREATE TABLE IF NOT EXISTS `zx_linkage` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` smallint(2) unsigned DEFAULT '0' COMMENT '״̬',
  `order` smallint(6) DEFAULT '0' COMMENT '����',
  `type_id` smallint(5) unsigned DEFAULT '0' COMMENT '����',
  `pid` varchar(30) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `value` varchar(250) DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `type_ida` (`type_id`,`value`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=492 ;

--
-- 转存表中的数据 `zx_linkage`
--

INSERT INTO `zx_linkage` (`id`, `status`, `order`, `type_id`, `pid`, `name`, `value`, `addtime`, `addip`) VALUES
(1, 0, 10, 1, '0', '已婚', '已婚', 0, ''),
(2, 0, 10, 1, '0', '离异', '离异', 0, ''),
(3, 0, 10, 1, '0', '未婚', '未婚', 0, ''),
(4, 0, 10, 1, '0', '丧偶', '丧偶', 0, ''),
(5, 0, 10, 2, '0', '无', '无', 0, ''),
(6, 0, 10, 2, '0', '1个', '1个', 0, ''),
(7, 0, 10, 2, '0', '3个', '3个', 0, ''),
(8, 0, 10, 2, '0', '2个', '2个', 0, ''),
(9, 0, 10, 2, '0', '4个', '4个', 0, ''),
(10, 0, 10, 2, '0', '4个以上', '4个以上', 0, ''),
(11, 0, 10, 3, '0', '小学', '小学', 0, ''),
(12, 0, 10, 3, '0', '高中', '高中', 0, ''),
(13, 0, 10, 3, '0', '中专', '中专', 0, ''),
(14, 0, 10, 3, '0', '专科', '专科', 0, ''),
(15, 0, 10, 3, '0', '本科', '本科', 0, ''),
(16, 0, 10, 3, '0', '研究生', '研究生', 0, ''),
(17, 0, 10, 3, '0', '硕士', '硕士', 0, ''),
(18, 0, 10, 3, '0', '博士', '博士', 0, ''),
(19, 0, 10, 3, '0', '博士后', '博士后', 0, ''),
(20, 0, 10, 3, '0', '其他', '其他', 0, ''),
(21, 0, 10, 4, '0', '1000元以下', '1000元以下', 0, ''),
(22, 0, 10, 4, '0', '1001-2000', '1001-2000', 0, ''),
(23, 0, 10, 4, '0', '2001-3000', '2001-3000', 0, ''),
(24, 0, 10, 4, '0', '3001-4000', '3001-4000', 0, ''),
(25, 0, 10, 4, '0', '4001-5000', '4001-5000', 0, ''),
(26, 0, 10, 4, '0', '5001-8000', '5001-8000', 0, ''),
(27, 0, 10, 4, '0', '8001-10000', '8001-10000', 0, ''),
(28, 0, 10, 4, '0', '10001-30000', '10001-30000', 0, ''),
(29, 0, 10, 4, '0', '30001-50000', '30001-50000', 0, ''),
(30, 0, 10, 4, '0', '50000以上', '50000以上', 0, ''),
(31, 0, 10, 5, '0', '有', '有', 0, ''),
(32, 0, 10, 5, '0', '没有', '没有', 0, ''),
(33, 0, 10, 6, '0', '租房', '租房', 0, ''),
(34, 0, 10, 6, '0', '自由房子', '自由房子', 0, ''),
(35, 0, 10, 6, '0', '其他', '其他', 0, ''),
(36, 0, 10, 7, '0', '有', '有', 0, ''),
(37, 0, 10, 7, '0', '没有', '没有', 0, ''),
(38, 0, 10, 8, '0', '有', '有', 0, ''),
(39, 0, 10, 8, '0', '没有', '没有', 0, ''),
(40, 0, 10, 0, '0', '用户-公司行业', '用户-公司行业', 0, ''),
(41, 0, 10, 0, '0', '用户-工作级别', '用户-工作级别', 0, ''),
(42, 0, 10, 0, '0', '用户-职 位', '用户-职 位', 0, ''),
(43, 0, 10, 0, '0', '用户-工作年限', '用户-工作年限', 0, ''),
(44, 0, 10, 0, '0', 'asdf', 'asdf', 0, ''),
(45, 0, 10, 9, '0', '已供完款', '已供完款', 0, ''),
(46, 0, 10, 9, '0', '按揭中', '按揭中', 0, ''),
(47, 0, 10, 10, '0', '政府机关', '政府机关', 0, ''),
(48, 0, 10, 10, '0', '国有企业', '国有企业', 0, ''),
(49, 0, 10, 10, '0', '台（港，奥）资企业', '台（港，奥）资企业', 0, ''),
(50, 0, 10, 10, '0', '外资企业', '外资企业', 0, ''),
(51, 0, 10, 10, '0', '合资企业', '合资企业', 0, ''),
(52, 0, 10, 10, '0', '个体户', '个体户', 0, ''),
(53, 0, 10, 10, '0', '事业性单位', '事业性单位', 0, ''),
(54, 0, 10, 11, '0', '农、林、牧、渔业', '农、林、牧、渔业', 0, ''),
(55, 0, 10, 11, '0', '制造业', '制造业', 0, ''),
(56, 0, 10, 11, '0', '电力、燃气及水的生产和供应业', '电力、燃气及水的生产和供应业', 0, ''),
(57, 0, 10, 11, '0', '建筑业', '建筑业', 0, ''),
(58, 0, 10, 11, '0', '交通运输、仓储和邮政业', '交通运输、仓储和邮政业', 0, ''),
(59, 0, 10, 11, '0', '信息传输、计算机服务和软件业', '信息传输、计算机服务和软件业', 0, ''),
(60, 0, 10, 11, '0', '批发和零售业', '批发和零售业', 0, ''),
(61, 0, 10, 11, '0', '金融业', '金融业', 0, ''),
(62, 0, 10, 11, '0', '房地产业', '房地产业', 0, ''),
(63, 0, 10, 11, '0', '采矿业', '采矿业', 0, ''),
(64, 0, 10, 11, '0', '租赁和商务服务业', '租赁和商务服务业', 0, ''),
(65, 0, 10, 11, '0', '科学研究、技术服务和地质勘查业', '科学研究、技术服务和地质勘查业', 0, ''),
(66, 0, 10, 11, '0', '水利、环境和公共设施管理业', '水利、环境和公共设施管理业', 0, ''),
(67, 0, 10, 11, '0', '居民服务和其他服务业', '居民服务和其他服务业', 0, ''),
(68, 0, 10, 11, '0', '教育', '教育', 0, ''),
(69, 0, 10, 11, '0', '卫生、社会保障和社会福利业', '卫生、社会保障和社会福利业', 0, ''),
(70, 0, 10, 11, '0', '文化、体育和娱乐业', '文化、体育和娱乐业', 0, ''),
(71, 0, 10, 11, '0', '公共管理和社会组织', '公共管理和社会组织', 0, ''),
(72, 0, 10, 11, '0', '国际组织', '国际组织', 0, ''),
(73, 0, 10, 12, '0', '普通员工', '普通员工', 0, ''),
(74, 0, 10, 12, '0', '管理人员', '管理人员', 0, ''),
(75, 0, 10, 12, '0', '股东', '股东', 0, ''),
(76, 0, 10, 12, '0', '私营业主', '私营业主', 0, ''),
(77, 0, 10, 13, '0', '财务总监', '财务总监', 0, ''),
(78, 0, 10, 13, '0', '财务主管', '财务主管', 0, ''),
(79, 0, 10, 13, '0', '审计/税务', '审计/税务', 0, ''),
(80, 0, 10, 13, '0', '总账/成本', '总账/成本', 0, ''),
(81, 0, 10, 13, '0', '会计人员', '会计人员', 0, ''),
(82, 0, 10, 13, '0', '人力资源总监', '人力资源总监', 0, ''),
(83, 0, 10, 13, '0', '人力资源经理/主管', '人力资源经理/主管', 0, ''),
(84, 0, 10, 13, '0', '招聘经理/主管', '招聘经理/主管', 0, ''),
(85, 0, 10, 13, '0', '薪资福利经理/主管', '薪资福利经理/主管', 0, ''),
(86, 0, 10, 13, '0', '财务经理', '财务经理', 0, ''),
(87, 0, 10, 13, '0', '培训经理/主管', '培训经理/主管', 0, ''),
(88, 0, 10, 13, '0', '人事专员/助理', '人事专员/助理', 0, ''),
(89, 0, 10, 13, '0', '行长/副行长', '行长/副行长', 0, ''),
(90, 0, 10, 13, '0', '信贷/信用管理', '信贷/信用管理', 0, ''),
(91, 0, 10, 13, '0', '资产管理/评估', '资产管理/评估', 0, ''),
(92, 0, 10, 13, '0', '投融资项目/基金', '投融资项目/基金', 0, ''),
(93, 0, 10, 13, '0', '外汇管理/国际结算', '外汇管理/国际结算', 0, ''),
(94, 0, 10, 13, '0', '风险管理', '风险管理', 0, ''),
(95, 0, 10, 13, '0', '证券/期货', '证券/期货', 0, ''),
(96, 0, 10, 13, '0', '客户经理/主管', '客户经理/主管', 0, ''),
(97, 0, 10, 13, '0', '核保/理赔', '核保/理赔', 0, ''),
(98, 0, 10, 13, '0', '保险代理人/内勤', '保险代理人/内勤', 0, ''),
(99, 0, 10, 13, '0', '银行专员/柜台', '银行专员/柜台', 0, ''),
(100, 0, 10, 13, '0', '精算师', '精算师', 0, ''),
(101, 0, 10, 13, '0', '编辑/记者/文案', '编辑/记者/文案', 0, ''),
(102, 0, 10, 13, '0', '版面设计', '版面设计', 0, ''),
(103, 0, 10, 13, '0', '平面设计', '平面设计', 0, ''),
(104, 0, 10, 13, '0', '装潢/陈列设计', '装潢/陈列设计', 0, ''),
(105, 0, 10, 13, '0', '纺织/服装设计', '纺织/服装设计', 0, ''),
(106, 0, 10, 13, '0', '工艺品/珠宝设计', '工艺品/珠宝设计', 0, ''),
(107, 0, 10, 13, '0', '经理', '经理', 0, ''),
(108, 0, 10, 13, '0', '主任', '主任', 0, ''),
(109, 0, 10, 13, '0', '生物工程', '生物工程', 0, ''),
(110, 0, 10, 13, '0', '药物注册', '药物注册', 0, ''),
(111, 0, 10, 13, '0', '临床研究/协调', '临床研究/协调', 0, ''),
(112, 0, 10, 13, '0', '药物研发/分析工程师', '药物研发/分析工程师', 0, ''),
(113, 0, 10, 13, '0', '化学工程师', '化学工程师', 0, ''),
(114, 0, 10, 13, '0', '环保工程师', '环保工程师', 0, ''),
(115, 0, 10, 13, '0', '化工人员', '化工人员', 0, ''),
(116, 0, 10, 13, '0', '结构/建筑工程师', '结构/建筑工程师', 0, ''),
(117, 0, 10, 13, '0', '土建工程师/建造师', '土建工程师/建造师', 0, ''),
(118, 0, 10, 13, '0', '机电/给排水/暖通工程师', '机电/给排水/暖通工程师', 0, ''),
(119, 0, 10, 13, '0', '工程造价师/预决算', '工程造价师/预决算', 0, ''),
(120, 0, 10, 13, '0', '监理/安全工程师', '监理/安全工程师', 0, ''),
(121, 0, 10, 13, '0', '房地产开发/策划', '房地产开发/策划', 0, ''),
(122, 0, 10, 13, '0', '园林景观/城市规划师', '园林景观/城市规划师', 0, ''),
(123, 0, 10, 13, '0', '物业管理', '物业管理', 0, ''),
(124, 0, 10, 13, '0', '房地产评估/中介/交易', '房地产评估/中介/交易', 0, ''),
(125, 0, 10, 13, '0', '电子/电路工程师', '电子/电路工程师', 0, ''),
(126, 0, 10, 13, '0', '电气工程师', '电气工程师', 0, ''),
(127, 0, 10, 13, '0', '半导体工程师', '半导体工程师', 0, ''),
(128, 0, 10, 13, '0', '测试工程师', '测试工程师', 0, ''),
(129, 0, 10, 13, '0', '自动化工程师', '自动化工程师', 0, ''),
(130, 0, 10, 13, '0', '光学工程师', '光学工程师', 0, ''),
(131, 0, 10, 13, '0', '电力工程师', '电力工程师', 0, ''),
(132, 0, 10, 13, '0', '水利/水电工程师', '水利/水电工程师', 0, ''),
(133, 0, 10, 13, '0', '单片机/DLC/DSP/底层软件开发', '单片机/DLC/DSP/底层软件开发', 0, ''),
(134, 0, 10, 13, '0', '其他工程师', '其他工程师', 0, ''),
(135, 0, 10, 13, '0', '技术人员', '技术人员', 0, ''),
(136, 0, 10, 13, '0', '助理', '助理', 0, ''),
(137, 0, 10, 13, '0', '厂长/副厂长', '厂长/副厂长', 0, ''),
(138, 0, 10, 13, '0', '生产经理/车间主任', '生产经理/车间主任', 0, ''),
(139, 0, 10, 13, '0', '产品开发', '产品开发', 0, ''),
(140, 0, 10, 13, '0', '工业/产品设计', '工业/产品设计', 0, ''),
(141, 0, 10, 13, '0', '生产/计划/调度', '生产/计划/调度', 0, ''),
(142, 0, 10, 13, '0', '质量管理', '质量管理', 0, ''),
(143, 0, 10, 13, '0', '项目管理', '项目管理', 0, ''),
(144, 0, 10, 13, '0', '工程设备管理', '工程设备管理', 0, ''),
(145, 0, 10, 13, '0', '安全/健康/环境管理', '安全/健康/环境管理', 0, ''),
(146, 0, 10, 13, '0', '生产工艺/技术', '生产工艺/技术', 0, ''),
(147, 0, 10, 13, '0', '技工', '技工', 0, ''),
(148, 0, 10, 13, '0', '机械工程师', '机械工程师', 0, ''),
(149, 0, 10, 13, '0', '维修工程师', '维修工程师', 0, ''),
(150, 0, 10, 13, '0', '机械设计/制图', '机械设计/制图', 0, ''),
(151, 0, 10, 13, '0', '机电工程师', '机电工程师', 0, ''),
(152, 0, 10, 13, '0', '模具工程师', '模具工程师', 0, ''),
(153, 0, 10, 13, '0', '精密机械/仪器仪表', '精密机械/仪器仪表', 0, ''),
(154, 0, 10, 13, '0', '船舶工程师', '船舶工程师', 0, ''),
(155, 0, 10, 13, '0', '冲压/注塑/焊接', '冲压/注塑/焊接', 0, ''),
(156, 0, 10, 13, '0', '餐饮/娱乐管理', '餐饮/娱乐管理', 0, ''),
(157, 0, 10, 13, '0', '酒店/宾馆管理', '酒店/宾馆管理', 0, ''),
(158, 0, 10, 13, '0', '服务人员/领班', '服务人员/领班', 0, ''),
(159, 0, 10, 13, '0', '导游/旅行顾问/票务', '导游/旅行顾问/票务', 0, ''),
(160, 0, 10, 13, '0', '营业员/收银员', '营业员/收银员', 0, ''),
(161, 0, 10, 13, '0', '技术总监/首席技术执行官', '技术总监/首席技术执行官', 0, ''),
(162, 0, 10, 13, '0', '技术经理', '技术经理', 0, ''),
(163, 0, 10, 13, '0', '项目经理', '项目经理', 0, ''),
(164, 0, 10, 13, '0', '系统分析工程师', '系统分析工程师', 0, ''),
(165, 0, 10, 13, '0', 'ERP应用顾问', 'ERP应用顾问', 0, ''),
(166, 0, 10, 13, '0', '数据库工程师/管理员', '数据库工程师/管理员', 0, ''),
(167, 0, 10, 13, '0', '软件开发工程师', '软件开发工程师', 0, ''),
(168, 0, 10, 13, '0', '硬件开发工程师', '硬件开发工程师', 0, ''),
(169, 0, 10, 13, '0', '信息支持/安全维护', '信息支持/安全维护', 0, ''),
(170, 0, 10, 13, '0', '网页设计/编辑', '网页设计/编辑', 0, ''),
(171, 0, 10, 13, '0', '通讯工程师', '通讯工程师', 0, ''),
(172, 0, 10, 13, '0', '多媒体/游戏开发', '多媒体/游戏开发', 0, ''),
(173, 0, 10, 13, '0', '采购经理/主管', '采购经理/主管', 0, ''),
(174, 0, 10, 13, '0', '采购专员/助理', '采购专员/助理', 0, ''),
(175, 0, 10, 13, '0', '贸易经理/主管', '贸易经理/主管', 0, ''),
(176, 0, 10, 13, '0', '市场咨询/调研', '市场咨询/调研', 0, ''),
(177, 0, 10, 13, '0', '创意与策划', '创意与策划', 0, ''),
(178, 0, 10, 13, '0', '客服经理/主管', '客服经理/主管', 0, ''),
(179, 0, 10, 13, '0', '客服专员/助理', '客服专员/助理', 0, ''),
(180, 0, 10, 13, '0', '客户关系管理', '客户关系管理', 0, ''),
(181, 0, 10, 13, '0', '客户咨询/热线支持', '客户咨询/热线支持', 0, ''),
(182, 0, 10, 13, '0', '销售总监', '销售总监', 0, ''),
(183, 0, 10, 13, '0', '销售经理', '销售经理', 0, ''),
(184, 0, 10, 13, '0', '销售经理', '销售经理', 0, ''),
(185, 0, 10, 13, '0', '业务拓展经理', '业务拓展经理', 0, ''),
(186, 0, 10, 13, '0', '销售主管/主任', '销售主管/主任', 0, ''),
(187, 0, 10, 13, '0', '售前/售后支持', '售前/售后支持', 0, ''),
(188, 0, 10, 13, '0', '销售工程师', '销售工程师', 0, ''),
(189, 0, 10, 13, '0', '销售代表', '销售代表', 0, ''),
(190, 0, 10, 13, '0', '医药代表', '医药代表', 0, ''),
(191, 0, 10, 13, '0', '销售助理', '销售助理', 0, ''),
(192, 0, 10, 13, '0', '专业顾问', '专业顾问', 0, ''),
(193, 0, 10, 13, '0', '咨询师', '咨询师', 0, '');

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

-- --------------------------------------------------------

--
-- 表的结构 `zx_links`
--

CREATE TABLE IF NOT EXISTS `zx_links` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` smallint(2) unsigned NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `flag` smallint(6) DEFAULT NULL,
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `url` char(60) CHARACTER SET gbk NOT NULL DEFAULT '',
  `webname` char(30) CHARACTER SET gbk NOT NULL DEFAULT '',
  `summary` char(200) CHARACTER SET gbk NOT NULL DEFAULT '',
  `linkman` char(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `email` char(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `logo` char(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  `logoimg` char(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  `province` char(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  `city` char(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  `area` char(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='���������б�' AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_links_type`
--

CREATE TABLE IF NOT EXISTS `zx_links_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='������������' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_liuyan`
--

CREATE TABLE IF NOT EXISTS `zx_liuyan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `email` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `company` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `tel` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `fax` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `address` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `type` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `reply` text CHARACTER SET gbk,
  `reply_id` int(11) DEFAULT '0',
  `replytime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `replyip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_liuyan_set`
--

CREATE TABLE IF NOT EXISTS `zx_liuyan_set` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `value` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_message`
--

CREATE TABLE IF NOT EXISTS `zx_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sent_user` int(11) DEFAULT '0' COMMENT '�����û�',
  `receive_user` int(11) DEFAULT '0' COMMENT '�����û�',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `type` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '����',
  `sented` varchar(2) CHARACTER SET gbk DEFAULT NULL,
  `deltype` int(2) DEFAULT '0',
  `content` text CHARACTER SET gbk COMMENT '����',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='����Ϣ' AUTO_INCREMENT=533 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_module`
--

CREATE TABLE IF NOT EXISTS `zx_module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `description` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `default_field` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `version` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `author` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `type` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `fields` int(2) DEFAULT NULL,
  `purview` text CHARACTER SET gbk,
  `remark` text CHARACTER SET gbk,
  `issent` int(2) DEFAULT NULL,
  `title_name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `onlyone` int(2) DEFAULT NULL,
  `index_tpl` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `list_tpl` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `content_tpl` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `search_tpl` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `article_status` int(2) DEFAULT NULL,
  `visit_type` int(2) DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_online`
--

CREATE TABLE IF NOT EXISTS `zx_online` (
  `user_id` int(10) unsigned DEFAULT '0',
  `username` varchar(45) DEFAULT NULL,
  `type_id` varchar(10) DEFAULT NULL,
  `tid` int(10) unsigned DEFAULT '0',
  `fid` int(10) unsigned DEFAULT '0',
  `atpage` varchar(30) DEFAULT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `activetime` int(10) unsigned DEFAULT '0',
  KEY `userid` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `zx_payment`
--

CREATE TABLE IF NOT EXISTS `zx_payment` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `status` smallint(3) unsigned DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext CHARACTER SET gbk,
  `fee_type` int(2) DEFAULT NULL,
  `max_money` int(10) DEFAULT NULL,
  `max_fee` int(10) DEFAULT NULL,
  `description` longtext CHARACTER SET gbk,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_payment_type`
--

CREATE TABLE IF NOT EXISTS `zx_payment_type` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `type` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `description` longtext CHARACTER SET gbk,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_remind`
--

CREATE TABLE IF NOT EXISTS `zx_remind` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` smallint(2) unsigned DEFAULT '0' COMMENT '״̬',
  `order` smallint(6) DEFAULT '0' COMMENT '����',
  `type_id` smallint(5) unsigned DEFAULT '0' COMMENT '����',
  `message` smallint(2) unsigned DEFAULT '0' COMMENT '����Ϣ',
  `email` smallint(2) unsigned DEFAULT '0' COMMENT '����',
  `phone` smallint(2) unsigned DEFAULT '0' COMMENT '�ֻ�',
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_remind_type`
--

CREATE TABLE IF NOT EXISTS `zx_remind_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) DEFAULT '0',
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_remind_user`
--

CREATE TABLE IF NOT EXISTS `zx_remind_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(11) unsigned DEFAULT NULL,
  `remind_id` smallint(5) unsigned DEFAULT NULL,
  `message` smallint(2) unsigned DEFAULT '0' COMMENT '����Ϣ',
  `email` smallint(2) unsigned DEFAULT '0' COMMENT '����',
  `phone` smallint(2) unsigned DEFAULT '0' COMMENT '�ֻ�',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_scrollpic`
--

CREATE TABLE IF NOT EXISTS `zx_scrollpic` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` smallint(2) unsigned NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `flag` smallint(6) DEFAULT NULL,
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `url` char(60) CHARACTER SET gbk NOT NULL DEFAULT '',
  `name` char(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  `pic` char(200) CHARACTER SET gbk NOT NULL DEFAULT '',
  `summary` char(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_scrollpic_type`
--

CREATE TABLE IF NOT EXISTS `zx_scrollpic_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_site`
--

CREATE TABLE IF NOT EXISTS `zx_site` (
  `site_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `pid` int(2) DEFAULT '0',
  `rank` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `url` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `aurl` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `isurl` varchar(2) CHARACTER SET gbk DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `style` varchar(2) CHARACTER SET gbk DEFAULT NULL,
  `litpic` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `list_name` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `content_name` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `sitedir` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `visit_type` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `index_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `list_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `content_tpl` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `title` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `keywords` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `description` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `user_id` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_system`
--

CREATE TABLE IF NOT EXISTS `zx_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `value` varchar(250) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- 转存表中的数据 `zx_system`
--

INSERT INTO `zx_system` (`id`, `name`, `nid`, `value`, `type`, `style`, `status`) VALUES
(50, '客服QQ4', 'con_qq4', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="点击这里给我发消息" title="客户四"></a>', 2, 1, '1'),
(49, '客服QQ3', 'con_qq3', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="点击这里给我发消息" title="客户三"></a>', 2, 1, '1'),
(48, '客服QQ2', 'con_qq2', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="客户二" title="客户二"></a>', 2, 1, '1'),
(47, '客服QQ1', 'con_qq1', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="客户一" title="客户一"></a>', 2, 1, '1'),
(46, '联系地址', 'con_address', '山东省临沂市兰山区临沂电子城电器城532号', 0, 1, '1'),
(45, '传真', 'con_fax', '123456', 0, 1, '1'),
(44, '客户服务热线', 'con_fuwutel', '400-080-1891', 0, 1, '1'),
(43, '借款最高额度', 'con_borrow_maxaccount', '500000', 0, 1, '0'),
(42, '发件人昵称或姓名', 'con_email_from_name', '众兴投资有限公司', 0, 4, '0'),
(41, '发件人Email', 'con_email_from', 'zxtz1891@126.com', 0, 4, '0'),
(40, '邮箱密码', 'con_email_pwd', '137929964350.+', 0, 4, '0'),
(39, '邮箱地址', 'con_email_email', 'zxtz1891@126.com', 0, 4, '0'),
(38, 'SMTP服务器是否需要验证', 'con_email_auth', '1', 1, 4, '0'),
(37, 'SMTP服务器', 'con_email_host', 'smtp.126.com', 0, 4, '0'),
(36, '信用等级图片地址', 'con_credit_picurl', '/data/images/credit/', 0, 1, '1'),
(35, '评论是否需要审核', 'con_comment_verify', '', 0, 3, '0'),
(34, '会员注册是否需要邮箱验证', 'con_member_reg_mail', '', 0, 3, '1'),
(33, '允许的多媒体文件类型', 'con_fujian_mediatype', '', 0, 3, '1'),
(32, '允许上传的软件类型', 'con_fujian_annextype', '', 0, 3, '1'),
(31, '允许上传的图片类型', 'con_fujian_imgtype', 'gif|jpg|png', 0, 3, '1'),
(30, '缩略图默认高度', 'con_fujian_imgheight', '80', 0, 3, '1'),
(29, '缩略图默认宽度', 'con_fujian_imgwidth', '80', 0, 3, '1'),
(28, '添加文字水印后质量参数', 'con_watermark_txtpct', '0', 0, 2, '1'),
(27, '添加图片水印后质量参数', 'con_watermark_imgpct', '0', 0, 2, '1'),
(26, '水印位置', 'con_watermark_position', '4', 0, 2, '1'),
(23, '水印图片文字字体大小', 'con_watermark_size', '', 0, 2, '1'),
(24, '水印图片文字颜色', 'con_watermark_color', '#FF0000', 0, 2, '1'),
(25, '水印文字', 'con_watermark_word', 'www.1891d.com', 0, 2, '1'),
(21, '水印的字体', 'con_watermark_font', '50', 0, 2, '1'),
(22, '水印图片文件名', 'con_watermark_file', '/data/upfiles/litpics/201305131368405879.jpg', 0, 2, '1'),
(18, '上传的图片是否使用图片水印功能', 'con_watermark_pic', '1', 0, 2, '1'),
(19, '采集的图片是否使用图片水印功能', 'con_watermark_caijipic', '1', 0, 2, '1'),
(20, '选择水印的文件类型', 'con_watermark_type', '0', 0, 2, '1'),
(16, '是否使用数字地址（如?1_2.html）', 'con_rewrite', '1', 1, 1, '0'),
(17, '默认是否生成html', 'con_autohtml', '0', 1, 1, '0'),
(12, '网站静态保存目录', 'con_htmldir', 'html', 0, 1, '0'),
(13, '模板风格', 'con_template', '61dai', 0, 1, '0'),
(14, '网站首页栏目ID', 'con_indexID', '1', 0, 1, '0'),
(15, '系统过时时间(小时)', 'con_session_time', '1', 0, 1, '0'),
(9, '网站位置分隔符', 'con_position', ' ->', 0, 1, '0'),
(10, '网站备案号', 'con_beian', '鲁ICP备13008504号-1', 0, 1, '0'),
(11, '网站统计', 'con_tongji', '', 2, 1, '0'),
(8, '网站描述', 'con_description', '众兴投资是投资建立的网上贷款平台，服务于企业以及个人的小额贷款需要。愿人人有钱贷，事业人人有成。', 0, 1, '0'),
(7, '网站关键词', 'con_keywords', '众兴投资-个人网络信用 无抵押贷款 无抵押 无担保 小额贷款 投资理财 企业融资', 0, 1, '0'),
(6, '网站logo', 'con_logo', 'data/upfiles/images/201211121352692589.jpg', 3, 1, '0'),
(5, '网站路径', 'con_webpath', '', 0, 1, '0'),
(4, '网站网址', 'con_weburl', 'http://localhost/zhongxing', 0, 1, '0'),
(3, '网站名称', 'con_webname', '众兴投资', 0, 1, '0'),
(2, '网站关闭信息', 'con_closemsg', '系统维护,维护期间给用户带来不便，请谅解，如有问题请拨打客服热线', 2, 1, '0'),
(1, '关闭站点（仅后台使用）', 'con_webopen', '0', 1, 1, '0'),
(51, '客服QQ5', 'con_qq5', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="点击这里给我发消息" title="客户五"></a>', 2, 1, '1'),
(52, '客服QQ6', 'con_qq6', '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123456:41" alt="点击这里给我发消息" title="客户六"></a>', 2, 1, '1'),
(53, '业务支持热线', 'con_tel', '400-080-1891', 2, 1, '1'),
(54, '客户中心文字', 'con_kefutext', '400-080-1891', 2, 1, '1'),
(55, '会员费', 'con_vip_money', '0', 0, 1, '1'),
(56, '邀请注册提成', 'con_vip_ticheng', '0', 0, 1, '1'),
(57, '用户开始最低的额度', 'con_user_amount', '2000', 0, 1, '1'),
(58, '借款利率', 'con_borrow_apr', '24', 0, 1, '1'),
(59, '是否采用cookie登录', 'con_cookie', '1', 1, 1, '0'),
(60, '逾期利率', 'con_late_rate', '0.005', 0, 1, '1'),
(61, '还款方式信息', 'con_msg_repayment', '0', 2, 1, '1'),
(62, '后台地址名称', 'con_houtai', '1891', 0, 1, '1'),
(63, '是否启用邮箱发送信息', 'con_emailsend', '1', 1, 1, '1'),
(64, '借款人借款的手续费', 'con_borrow_fee', '0.02', 0, 1, '1'),
(65, '实名认证费用', 'con_realname_fee', '0', 0, 1, '1'),
(66, '是否开启视频认证收费', 'con_video_feestatus', '0', 1, 1, '1'),
(67, '1-6月贷款下限', 'con_xiaxian16', '5', 0, 1, '1'),
(68, '1-6月贷款上限', 'con_shangxian16', '23', 0, 1, '1'),
(69, '6月以上贷款下限', 'con_xiaxian612', '6', 0, 1, '1'),
(70, '6月以上贷款上限', 'con_shangxian612', '24', 0, 1, '1'),
(71, '借款保证金比例', 'con_exbaozhengjinbilv', '10', 0, 1, '1');

-- --------------------------------------------------------

--
-- 表的结构 `zx_upfiles`
--

CREATE TABLE IF NOT EXISTS `zx_upfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ģ��',
  `aid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ģ��id',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `filetype` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ļ�����',
  `filename` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '�ļ�����',
  `filesize` int(10) DEFAULT '0' COMMENT '�ļ���С',
  `fileurl` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '�ļ���ַ',
  `if_cover` int(2) DEFAULT '0' COMMENT '�Ƿ����',
  `order` int(10) DEFAULT '0' COMMENT '����',
  `hits` int(11) DEFAULT '0' COMMENT '�������',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '�޸�ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=455 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user`
--

CREATE TABLE IF NOT EXISTS `zx_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `purview` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `paypassword` varchar(50) DEFAULT NULL,
  `islock` int(2) NOT NULL DEFAULT '0',
  `invite_userid` int(11) DEFAULT NULL,
  `invite_money` varchar(10) DEFAULT '0',
  `real_status` int(2) DEFAULT NULL,
  `card_type` varchar(10) DEFAULT NULL,
  `card_id` varchar(50) DEFAULT NULL,
  `card_pic1` varchar(150) DEFAULT NULL,
  `card_pic2` varchar(150) DEFAULT NULL,
  `nation` varchar(10) DEFAULT NULL,
  `realname` varchar(20) DEFAULT NULL,
  `integral` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `avatar_status` int(2) DEFAULT '0',
  `email_status` int(2) DEFAULT NULL,
  `phone_status` int(2) DEFAULT '0',
  `video_status` int(2) DEFAULT '0',
  `scene_status` int(2) DEFAULT '0',
  `email` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `litpic` varchar(250) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  `wangwang` varchar(100) DEFAULT NULL,
  `question` varchar(10) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `remind` text,
  `privacy` text,
  `logintime` int(11) DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `uptime` varchar(50) DEFAULT NULL,
  `upip` varchar(50) DEFAULT NULL,
  `lasttime` varchar(50) DEFAULT NULL,
  `lastip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  FULLTEXT KEY `purview` (`purview`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `zx_user`
--

INSERT INTO `zx_user` (`user_id`, `type_id`, `order`, `purview`, `username`, `password`, `paypassword`, `islock`, `invite_userid`, `invite_money`, `real_status`, `card_type`, `card_id`, `card_pic1`, `card_pic2`, `nation`, `realname`, `integral`, `status`, `avatar_status`, `email_status`, `phone_status`, `video_status`, `scene_status`, `email`, `sex`, `litpic`, `tel`, `phone`, `qq`, `wangwang`, `question`, `answer`, `birthday`, `province`, `city`, `area`, `address`, `remind`, `privacy`, `logintime`, `addtime`, `addip`, `uptime`, `upip`, `lasttime`, `lastip`) VALUES
(56, NULL, NULL, NULL, 'admin', '7fef6171469e80d32c0559f88b377245', NULL, 0, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, '系统管理员', NULL, 0, 0, 1, 1, 0, 0, '516012818@qq.com', NULL, NULL, NULL, '18660976305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1371868857', '127.0.0.1', NULL, NULL, NULL, NULL),
(2, 2, 0, '', 'rater', '252384a67969344db46a6119104a59e8', '', 0, 0, '0', 0, '', '', '', '', '', '管理员', '', 0, 0, 0, 0, 0, 0, '467557737@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1364954869', '192.168.7.253', '1364954869', '192.168.7.253', '1364954869', '192.168.7.253'),
(3, 3, 0, '', '1751691079', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '赵', '', 1, 0, 0, 0, 0, 0, '1751691079@qq.com', '2', '', '', '', '1751691079', '', '', '', '1985-02-01', '1536', '1654', '1656', '', '', '', 7, '1368406225', '112.251.180.33', '1376879483', '27.197.132.134', '1376880685', '27.197.132.134'),
(4, 3, 0, '', '1360171037', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '吴', '', 1, 0, 0, 0, 0, 0, '1360171037@qq.com', '2', '', '', '', '1360171037', '', '', '', '1989-10-20', '1536', '1654', '1656', '', '', '', 30, '1368406293', '112.251.180.33', '1376896530', '27.197.132.134', '1376896543', '27.197.132.134'),
(5, 9, 0, '', '465142000', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '姚', '', 1, 0, 0, 0, 0, 0, '465142000@qq.com', '1', '', '', '', '465142000', '', '', '', '1989-12-12', '1536', '1654', '1656', '', '', '', 58, '1368406416', '112.251.180.33', '1376889176', '27.197.132.134', '1376895493', '27.197.132.134'),
(6, 2, 0, '', '无悔', '25f9e794323b453885f5181f1b624d0b', '', 0, 0, '0', 1, '1', '371325198204220510', 'data/upfiles/images/2013-05/13/6_user_13684102593.jpg', 'data/upfiles/images/2013-05/13/6_user_13684102584.jpg', '329', '韩昌良', '', 0, 1, 1, 1, 2, 0, '2496447419@qq.com', '1', '', '', '18753537941', '2496447419', '', '', '', '388252800', '1536', '1654', '1663', '', '', '', 26, '1368408118', '112.251.180.33', '1368576062', '112.233.85.145', '1368664314', '27.197.131.77'),
(7, 2, 0, '', '王鑫', 'a3edfb69c0512185406b0d0ddfa184fb', '', 0, 0, '0', 0, '', '', '', '', '', '王鑫', '', 0, 0, 0, 0, 0, 0, '778026260@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368408210', '112.251.180.33', '1368408210', '112.251.180.33', '1368408210', '112.251.180.33'),
(8, 2, 0, '', '王丽', '25f9e794323b453885f5181f1b624d0b', '', 0, 0, '0', 1, '1', '371325198706115331', 'data/upfiles/images/2013-05/13/8_user_13684092599.jpg', 'data/upfiles/images/2013-05/13/8_user_13684092580.jpg', '329', '王丽', '', 0, 0, 0, 1, 0, 0, '15379696682@qq.com', '1', '', '', '13280553531', '无', '', '', '', '550335600', '1536', '1654', '1663', '', '', '', 2, '1368408562', '112.251.180.33', '1368409455', '112.251.180.33', '1368412753', '112.251.180.33'),
(9, 2, 0, '', '24689', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '372831197908200527', 'data/upfiles/images/2013-05/13/9_user_13684124367.jpg', 'data/upfiles/images/2013-05/13/9_user_13684124343.jpg', '329', '小雨', '', 0, 1, 1, 1, 0, 0, '2833267597@qq.com', '1', '', '', '18264991421', '17827697', '', '', '', '303926400', '1536', '1654', '1663', '', '', '', 15, '1368408600', '112.251.180.33', '1368664001', '27.197.131.77', '1376879445', '27.197.132.134'),
(10, 2, 0, '', 'yiyin', '2af78ae22cae6ac1e708a913a92debd3', '', 0, 0, '0', 0, '', '', '', '', '', '王一印', '', 0, 0, 0, 0, 0, 0, '1269632933@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368408938', '112.251.180.33', '1368408938', '112.251.180.33', '1368408938', '112.251.180.33'),
(11, 2, 0, '', 'lele', '2af78ae22cae6ac1e708a913a92debd3', 'd75b774cfe3f3c7d300711a26d8d8af5', 0, 0, '0', 1, '1', '371325198101305677', 'data/upfiles/images/2013-05/13/11_user_13684108973.png', 'data/upfiles/images/2013-05/13/11_user_13684108979.png', '329', '王一印', '', 0, 0, 1, 1, 0, 0, '1842904491@qq.com', '1', '', '', '15853843622', '1269632933', '', '', '', '349632000', '1536', '1654', '1663', '', '', '', 7, '1368409221', '112.251.180.33', '1368433833', '112.251.180.33', '1368517868', '112.251.180.249'),
(12, 2, 0, '', '王芳', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 1, '1', '372831196812296662', 'data/upfiles/images/2013-05/13/12_user_13684268748.jpg', 'data/upfiles/images/2013-05/13/12_user_13684268743.jpg', '329', '宋学芳', '', 0, 1, 1, 1, 2, 0, '1923854326@qq.com', '2', '', '', '15065928671', '1923854326', '', '', '', '-31824000', '1536', '1654', '1663', '', '', 'a:9:{s:6:"friend";s:1:"0";s:14:"friend_comment";s:1:"0";s:11:"borrow_list";s:1:"0";s:8:"loan_log";s:1:"0";s:8:"sent_msg";s:1:"0";s:14:"friend_request";s:1:"0";s:10:"look_black";s:1:"0";s:16:"allow_black_sent";s:1:"0";s:19:"allow_black_request";s:1:"0";}', 21, '1368410499', '112.251.180.33', '1376879829', '27.197.132.134', '1376896672', '27.197.132.134'),
(13, 2, 0, '', '李晓', 'e40f01afbb1b9ae3dd6747ced5bca532', '', 0, 0, '0', 0, '', '', '', '', '', '李晓', '', 0, 1, 1, 0, 0, 0, '1989959166@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368411430', '112.251.180.33', '1368411430', '112.251.180.33', '1368411430', '112.251.180.33'),
(14, 2, 0, '', '321321', 'e40f01afbb1b9ae3dd6747ced5bca532', '', 0, 0, '0', 1, '1', '372831197105024216', 'data/upfiles/images/2013-05/13/14_user_13684307458.jpg', 'data/upfiles/images/2013-05/13/14_user_13684307451.jpg', '329', '赵雨', '', 0, 1, 1, 1, 0, 0, '1914129708@qq.com', '1', '', '', '13370656878', '806708682', '', '', '', '41961600', '1536', '1654', '1663', '', '', '', 19, '1368414325', '112.251.180.33', '1368579458', '112.233.85.145', '1368609683', '112.233.85.145'),
(15, 2, 0, '', '2502846369', 'dc483e80a7a0bd9ef71d8cf973673924', '', 0, 0, '0', 0, '', '', '', '', '', '丫蛋', '', 0, 1, 1, 0, 0, 0, '2502846369@qq.com', '', '', '', '', '2418331358', '', '', '', '', '', '', '', '', '', '', 8, '1368417593', '112.251.180.33', '1368575293', '112.233.85.145', '1376645028', '112.251.176.245'),
(16, 2, 0, '', '艳艳', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371312198204287123', 'data/upfiles/images/2013-05/13/16_user_13684302503.jpg', 'data/upfiles/images/2013-05/13/16_user_13684302496.jpg', '329', '赵燕', '', 0, 1, 1, 1, 0, 0, '2837414006@qq.com', '1', '', '', '15554835753', ' 2837414006', '', '', '', '388771200', '1536', '1654', '1658', '', '', '', 8, '1368429046', '112.251.180.33', '1376873628', '27.197.132.134', '1376896630', '27.197.132.134'),
(17, 2, 0, '', '123123', 'e40f01afbb1b9ae3dd6747ced5bca532', 'e40f01afbb1b9ae3dd6747ced5bca532', 0, 0, '0', 1, '1', '142202196702134876', 'data/upfiles/images/2013-05/13/17_user_13684318629.jpg', 'data/upfiles/images/2013-05/13/17_user_13684318620.jpg', '329', '赵亮', '', 0, 0, 1, 1, 0, 0, '1126081455@qq.com', '1', '', '', '15866996872', '无', '', '', '', '-91008000', '1536', '1654', '1663', '', '', '', 12, '1368429168', '112.251.180.33', '1368502339', '112.251.180.249', '1368516358', '112.251.180.249'),
(18, 2, 0, '', '23456', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371325199204115619', 'data/upfiles/images/2013-05/13/18_user_13684330017.jpg', 'data/upfiles/images/2013-05/13/18_user_13684329997.jpg', '329', '张三', '', 0, 1, 1, 1, 0, 0, '2366194804@qq.com', '1', '', '', '18766480593', '', '', '', '', '894988800', '1536', '1654', '1657', '', '', '', 6, '1368432736', '112.251.180.33', '1368596274', '112.233.85.145', '1376873297', '27.197.132.134'),
(19, 2, 0, '', 'yuan', '25f9e794323b453885f5181f1b624d0b', '', 0, 0, '0', 1, '1', '371325198203255316', 'data/upfiles/images/2013-05/15/19_user_13685795226.jpg', 'data/upfiles/images/2013-05/15/19_user_13685795221.jpg', '329', '石磊', '', 0, 0, 1, 2147483647, 0, 0, '1493176921@qq.com', '1', '', '', '', '1493176921', '', '', '', '385833600', '1536', '1654', '1663', '', '', '', 24, '1368494928', '112.251.180.249', '1376873275', '27.197.132.134', '1376877841', '27.197.132.134'),
(20, 2, 0, '', '明月', '25f9e794323b453885f5181f1b624d0b', '', 0, 0, '0', 0, '', '', '', '', '', '林强', '', 0, 0, 0, 0, 0, 0, '547507877@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368495764', '112.251.180.249', '1368495764', '112.251.180.249', '1368495764', '112.251.180.249'),
(21, 2, 0, '', '10086', '25f9e794323b453885f5181f1b624d0b', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371325196805286612', 'data/upfiles/images/2013-05/15/21_user_13685883369.jpg', 'data/upfiles/images/2013-05/15/21_user_13685883345.jpg', '329', '曹守平', '', 0, 1, 1, 2147483647, 0, 0, '2873211078@qq.com', '1', '', '', '', '2873211078', '', '', '', '-50400000', '1536', '1654', '1663', '', '', '', 15, '1368496283', '112.251.180.249', '1376881642', '27.197.132.134', '1376882838', '27.197.132.134'),
(31, 2, 0, '', '1303', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '呵呵呵', '', 0, 1, 1, 0, 0, 0, '1030130086@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368578952', '112.228.137.44', '1368578952', '112.228.137.44', '1368578952', '112.228.137.44'),
(22, 2, 0, '', '杜明艳', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371322198101258824', 'data/upfiles/images/2013-05/14/22_user_13685178527.jpg', 'data/upfiles/images/2013-05/14/22_user_13685178523.jpg', '329', '杜明艳', '', 0, 1, 1, 1, 0, 0, '773221865@qq.com', '2', '', '', '13395397951', '773221865', '', '', '', '349200000', '1536', '1654', '1660', '', '', '', 16, '1368497157', '112.251.180.249', '1376894291', '27.197.132.134', '1376896509', '27.197.132.134'),
(23, 2, 0, '', '杜明卫', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371322198701088857', 'data/upfiles/images/2013-08/19/23_user_13768731926.jpg', 'data/upfiles/images/2013-08/19/23_user_13768731929.jpg', '329', '杜明卫', '', 0, 0, 1, 1, 0, 0, '2217986510@qq.com', '1', '', '', '13790881122', '2217986510', '', '', '', '537033600', '1536', '1654', '1660', '', '', '', 22, '1368498534', '112.251.180.249', '1376877088', '27.197.132.134', '1376896567', '27.197.132.134'),
(24, 2, 0, '', '笑笑', '2af78ae22cae6ac1e708a913a92debd3', 'd75b774cfe3f3c7d300711a26d8d8af5', 0, 0, '0', 1, '1', '372831197401085611', 'data/upfiles/images/2013-05/14/24_user_13685043965.jpg', 'data/upfiles/images/2013-05/14/24_user_13685043968.jpg', '329', '林强', '', 0, 0, 1, 1, 0, 0, '1209098903@qq.com', '1', '', '', '15853908415', '877175488', '', '', '', '126806400', '1536', '1654', '1663', '', '', '', 14, '1368499749', '112.251.180.249', '1376879612', '27.197.132.134', '1376881071', '27.197.132.134'),
(25, 2, 0, '', '8899', 'e40f01afbb1b9ae3dd6747ced5bca532', '', 0, 0, '0', 1, '1', '372831196211031212', 'data/upfiles/images/2013-05/14/25_user_13685110196.jpg', 'data/upfiles/images/2013-05/14/25_user_13685110198.jpg', '329', '王昊', '', 0, 0, 1, 1, 0, 0, '2872944023@qq.com', '1', '', '', '18366631529', '无', '', '', '', '', '1536', '1654', '1663', '', '', '', 26, '1368504202', '112.251.180.249', '1376893923', '27.197.132.134', '1376894067', '27.197.132.134'),
(26, 2, 0, '', '甜甜', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 1, '1', '372831197304265311', 'data/upfiles/images/2013-05/14/26_user_13685133625.jpg', 'data/upfiles/images/2013-05/14/26_user_13685133622.jpg', '329', '姬广田', '', 0, 1, 1, 1, 0, 0, '2846860571@qq.com', '1', '', '', '15666399679', '2846860571', '', '', '', '104601600', '1536', '1654', '1663', '', '', '', 10, '1368510581', '112.251.180.249', '1376876328', '27.197.132.134', '1376896198', '27.197.132.134'),
(27, 2, 0, '', 'cuifengwei', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '崔凤伟', '', 0, 1, 1, 0, 0, 0, '1330001891@qq.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '1368514616', '112.251.180.249', '1368514616', '112.251.180.249', '1368514616', '112.251.180.249'),
(28, 2, 0, '', '520531', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '0', 1, '1', '371325198511202734', 'data/upfiles/images/2013-05/14/28_user_13685178804.jpg', 'data/upfiles/images/2013-05/14/28_user_13685178805.jpg', '329', '王小', '', 0, 1, 1, 0, 0, 0, '1538505434@qq.com', '1', '', '', '', '无', '', '', '', '501264000', '1536', '1654', '1663', '', '', '', 8, '1368516440', '112.251.180.249', '1376892336', '27.197.132.134', '1376893667', '27.197.132.134'),
(29, 2, 0, '', '过客', 'e40f01afbb1b9ae3dd6747ced5bca532', 'e40f01afbb1b9ae3dd6747ced5bca532', 0, 0, '0', 1, '1', '372831196807245932', 'data/upfiles/images/2013-05/15/29_user_13685846179.jpg', 'data/upfiles/images/2013-05/15/29_user_13685846151.jpg', '329', '王令', '', 0, 0, 0, 2147483647, 0, 0, '24816042162@qq.com', '1', '', '', '', '无', '', '', '', '', '1536', '1654', '1663', '', '', '', 12, '1368518320', '112.251.180.249', '1368666493', '27.197.131.77', '1368668414', '27.197.131.77'),
(30, 2, 0, '', '22345', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 1, '1', '371325198402165671', 'data/upfiles/images/2013-05/14/30_user_13685216281.jpg', 'data/upfiles/images/2013-05/14/30_user_13685216286.jpg', '329', '小白', '', 0, 1, 1, 2147483647, 0, 0, '2352261849@qq.com', '1', '', '', '', '1141257446', '', '', '', '445708800', '1536', '1654', '1663', '', '', '', 16, '1368518703', '112.251.180.249', '1376876838', '27.197.132.134', '1376879603', '27.197.132.134'),
(57, NULL, NULL, NULL, 'testt', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, '胡那', NULL, 0, 0, NULL, 0, 0, 0, '43555015@qq.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1372054085', '127.0.0.1', '1372054085', '127.0.0.1', NULL, NULL),
(32, 2, 0, '', '小鱼', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 1, '1', '372831196403095317', 'data/upfiles/images/2013-05/15/32_user_13685814645.jpg', 'data/upfiles/images/2013-05/15/32_user_13685814641.jpg', '329', '姬广余', '', 0, 1, 1, 2147483647, 0, 0, '2307150442@qq.com', '1', '', '', '', '2307150442', '', '', '', '-183542400', '1536', '1654', '1663', '', '', '', 17, '1368580825', '112.233.85.145', '1376895939', '27.197.132.134', '1376896371', '27.197.132.134'),
(33, 2, 0, '', 'dese', '2af78ae22cae6ac1e708a913a92debd3', '', 0, 0, '0', 1, '1', '37282219800307881X', 'data/upfiles/images/2013-05/15/33_user_13685997555.jpg', 'data/upfiles/images/2013-05/15/33_user_13685997554.jpg', '329', '郭纪钰', '', 0, 0, 1, 2147483647, 0, 0, '2628500532@qq.com', '1', '', '', '', '654556', '', '', '', '321206400', '1536', '1654', '1660', '', '', '', 8, '1368595009', '112.233.85.145', '1376879172', '27.197.132.134', '1376879341', '27.197.132.134'),
(35, 2, 0, '', '凤伟', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 1, '1', '371325198912125610', 'data/upfiles/images/2013-08/19/35_user_13768842865.jpg', 'data/upfiles/images/2013-08/19/35_user_13768842868.jpg', '329', '崔凤伟', '', 0, 1, 1, 2147483647, 0, 0, '2876780932@qq.com', '1', '', '', '', '2876780932', '', '', '', '629395200', '1536', '1654', '1663', '', '', '', 4, '1376882200', '27.197.132.134', '1376895519', '27.197.132.134', '1376896405', '27.197.132.134'),
(36, 9, 0, '', '15585545131', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '王', '', 1, 0, 0, 0, 0, 0, '1558545131@qq.com', '0', '', '', '', '15585545131', '', '', '', '1989-10-01', '1536', '1654', '1656', '', '', '', 7, '1376883466', '27.197.132.134', '1376892972', '27.197.132.134', '1376893360', '27.197.132.134'),
(37, 3, 0, '', '778026260', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, '0', 0, '', '', '', '', '', '赵', '', 1, 0, 0, 0, 0, 0, '2899510822@qq.com', '0', '', '', '', '778026260', '', '', '', '1990-10-01', '1536', '1654', '1656', '', '', '', 10, '1376884155', '27.197.132.134', '1376893656', '27.197.132.134', '1376893733', '27.197.132.134'),
(58, NULL, NULL, NULL, 'aaaddd', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, '杨平', NULL, 0, 0, NULL, 0, 0, 0, '1719256705@qq.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1372054186', '192.168.0.104', '1372054186', '192.168.0.104', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zx_userinfo`
--

CREATE TABLE IF NOT EXISTS `zx_userinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '所属站点',
  `user_id` int(11) DEFAULT '0' COMMENT '用户名称',
  `name` varchar(255) DEFAULT NULL COMMENT '标题',
  `status` int(2) DEFAULT '0' COMMENT '状态',
  `order` int(11) DEFAULT '0' COMMENT '排序',
  `hits` int(11) DEFAULT '0' COMMENT '点击次数',
  `litpic` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `flag` varchar(50) DEFAULT NULL COMMENT '属性',
  `source` varchar(50) DEFAULT NULL COMMENT '来源',
  `publish` varchar(50) DEFAULT NULL COMMENT '发布时间',
  `marry` varchar(50) DEFAULT NULL COMMENT '婚姻',
  `child` varchar(10) DEFAULT NULL COMMENT '子女',
  `education` varchar(10) DEFAULT NULL COMMENT '学历',
  `income` varchar(10) DEFAULT NULL COMMENT '收入',
  `shebao` varchar(10) DEFAULT NULL COMMENT '社保',
  `shebaoid` varchar(50) DEFAULT NULL COMMENT '社保号',
  `housing` varchar(10) DEFAULT NULL COMMENT '住房条件',
  `car` varchar(10) DEFAULT NULL COMMENT '车',
  `late` varchar(10) DEFAULT NULL COMMENT '逾期',
  `house_address` varchar(10) DEFAULT NULL COMMENT '房产地址',
  `house_area` varchar(10) DEFAULT NULL COMMENT '房产面积',
  `house_year` varchar(10) DEFAULT NULL COMMENT '建筑年份',
  `house_status` varchar(10) DEFAULT NULL COMMENT '供款',
  `house_holder1` varchar(10) DEFAULT NULL COMMENT '房子所有权1',
  `house_holder2` varchar(10) DEFAULT NULL COMMENT '房子所有权1',
  `house_right1` varchar(10) DEFAULT NULL COMMENT '房子份额1',
  `house_right2` varchar(10) DEFAULT NULL COMMENT '房子份额2',
  `house_loanyear` varchar(10) DEFAULT NULL COMMENT '贷款年限',
  `house_loanprice` varchar(10) DEFAULT NULL COMMENT '每月供款',
  `house_balance` varchar(10) DEFAULT NULL COMMENT '贷款余额',
  `house_bank` varchar(10) DEFAULT NULL COMMENT '银行',
  `company_name` varchar(10) DEFAULT NULL COMMENT '公司名称',
  `company_type` varchar(10) DEFAULT NULL COMMENT '公司性质',
  `company_industry` varchar(10) DEFAULT NULL COMMENT '公司行业',
  `company_office` varchar(10) DEFAULT NULL COMMENT '工作职位',
  `company_jibie` varchar(10) DEFAULT NULL COMMENT '工作级别',
  `company_worktime1` varchar(10) DEFAULT NULL COMMENT '工作时间1',
  `company_worktime2` varchar(10) DEFAULT NULL COMMENT '工作时间2',
  `company_workyear` varchar(10) DEFAULT NULL COMMENT '工作年限',
  `company_tel` varchar(50) DEFAULT NULL COMMENT '公司电话',
  `company_address` varchar(100) DEFAULT NULL COMMENT '公司地址',
  `company_weburl` varchar(100) DEFAULT NULL COMMENT '公司网站',
  `company_reamrk` varchar(250) DEFAULT NULL COMMENT '公司备注',
  `private_type` varchar(10) DEFAULT NULL COMMENT '类别',
  `private_date` varchar(10) DEFAULT NULL COMMENT '日期',
  `private_place` varchar(10) DEFAULT NULL COMMENT '场所',
  `private_rent` varchar(10) DEFAULT NULL COMMENT '租金',
  `private_term` varchar(10) DEFAULT NULL COMMENT '租期',
  `private_taxid` varchar(30) DEFAULT NULL COMMENT '工商税务',
  `private_commerceid` varchar(50) DEFAULT NULL COMMENT '工商登记号',
  `private_income` varchar(100) DEFAULT NULL COMMENT '收入',
  `private_employee` varchar(100) DEFAULT NULL COMMENT '雇员',
  `finance_repayment` varchar(100) DEFAULT NULL COMMENT '每月无抵押贷款还款额',
  `finance_property` varchar(100) DEFAULT NULL COMMENT '自有房产',
  `finance_amount` varchar(100) DEFAULT NULL COMMENT '每月房屋按揭金额',
  `finance_car` varchar(10) DEFAULT NULL COMMENT '自有汽车',
  `finance_caramount` varchar(100) DEFAULT NULL COMMENT '每月汽车按揭金额',
  `finance_creditcard` varchar(100) DEFAULT NULL COMMENT '信用卡金额',
  `mate_name` varchar(100) DEFAULT NULL COMMENT '配偶名字',
  `mate_salary` varchar(10) DEFAULT NULL COMMENT '薪资',
  `mate_phone` varchar(100) DEFAULT NULL COMMENT '手机',
  `mate_tel` varchar(100) DEFAULT NULL COMMENT '电话',
  `mate_type` varchar(10) DEFAULT NULL COMMENT '工作类型',
  `mate_office` varchar(10) DEFAULT NULL COMMENT '工作职位',
  `mate_address` varchar(250) DEFAULT NULL COMMENT '地址',
  `mate_income` varchar(100) DEFAULT NULL COMMENT '收入',
  `education_record` varchar(100) DEFAULT NULL COMMENT '学历',
  `education_school` varchar(200) DEFAULT NULL COMMENT '学校',
  `education_study` varchar(200) DEFAULT NULL COMMENT '专业',
  `education_time1` varchar(20) DEFAULT NULL COMMENT '时间1',
  `education_time2` varchar(20) DEFAULT NULL COMMENT '时间2',
  `tel` varchar(50) DEFAULT NULL COMMENT '电话',
  `phone` varchar(50) DEFAULT NULL COMMENT '手机',
  `post` varchar(50) DEFAULT NULL COMMENT '邮编',
  `address` varchar(50) DEFAULT NULL COMMENT '邮编',
  `province` varchar(20) DEFAULT NULL COMMENT '省份',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `area` varchar(20) DEFAULT NULL COMMENT '区',
  `linkman1` varchar(50) DEFAULT NULL COMMENT '联系人1',
  `relation1` varchar(50) DEFAULT NULL COMMENT '关系1',
  `tel1` varchar(50) DEFAULT NULL COMMENT '电话1',
  `phone1` varchar(50) DEFAULT NULL COMMENT '手机1',
  `linkman2` varchar(50) DEFAULT NULL COMMENT '联系人2',
  `relation2` varchar(50) DEFAULT NULL COMMENT '关系2',
  `tel2` varchar(50) DEFAULT NULL COMMENT '电话2',
  `phone2` varchar(50) DEFAULT NULL COMMENT '手机2',
  `linkman3` varchar(50) DEFAULT NULL COMMENT '联系人3',
  `relation3` varchar(50) DEFAULT NULL COMMENT '关系3',
  `tel3` varchar(50) DEFAULT NULL COMMENT '电话3',
  `phone3` varchar(50) DEFAULT NULL COMMENT '手机3',
  `msn` varchar(50) DEFAULT NULL COMMENT 'MSN',
  `qq` varchar(50) DEFAULT NULL COMMENT 'QQ',
  `wangwang` varchar(50) DEFAULT NULL COMMENT 'WANGWANG',
  `ability` varchar(250) DEFAULT NULL COMMENT '个人能力',
  `interest` varchar(250) DEFAULT NULL COMMENT '个人爱好',
  `others` varchar(250) DEFAULT NULL COMMENT '其他说明',
  `experience` text COMMENT '工作经历',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `updatetime` varchar(50) DEFAULT NULL,
  `updateip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_amount`
--

CREATE TABLE IF NOT EXISTS `zx_user_amount` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '�����ָ����',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `credit` decimal(11,2) NOT NULL DEFAULT '0.00',
  `credit_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `credit_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `borrow_vouch_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tender_vouch_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_amountapply`
--

CREATE TABLE IF NOT EXISTS `zx_user_amountapply` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_new` decimal(11,2) DEFAULT '0.00',
  `account_old` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` int(11) DEFAULT '0',
  `addtime` varchar(30) CHARACTER SET gbk NOT NULL DEFAULT '',
  `content` text CHARACTER SET gbk NOT NULL,
  `remark` text CHARACTER SET gbk NOT NULL,
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `verify_user` int(11) DEFAULT NULL,
  `addip` varchar(30) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_amountlog`
--

CREATE TABLE IF NOT EXISTS `zx_user_amountlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `amount_type` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_all` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` text CHARACTER SET gbk NOT NULL,
  `addtime` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `addip` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_backup`
--

CREATE TABLE IF NOT EXISTS `zx_user_backup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�����',
  `user_tel` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_email` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_phone` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_qq` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_address` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_nation` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_realname` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��Դ',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��',
  `marry` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `child` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��Ů',
  `education` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'ѧ��',
  `income` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `shebao` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�籣',
  `shebaoid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�籣��',
  `housing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'ס������',
  `car` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `late` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `house_address` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '������ַ',
  `house_area` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `house_year` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `house_status` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `house_holder1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������Ȩ1',
  `house_holder2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������Ȩ1',
  `house_right1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���ӷݶ�1',
  `house_right2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���ӷݶ�2',
  `house_loanyear` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `house_loanprice` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÿ�¹���',
  `house_balance` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '�������',
  `house_bank` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `company_name` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾����',
  `company_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾����',
  `company_industry` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾��ҵ',
  `company_office` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����ְλ',
  `company_jibie` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `company_worktime1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��1',
  `company_worktime2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����ʱ��2',
  `company_workyear` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `company_tel` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾�绰',
  `company_address` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾��ַ',
  `company_weburl` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾��վ',
  `company_reamrk` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��˾��ע',
  `private_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `private_date` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `private_place` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `private_rent` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `private_term` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `private_taxid` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '����˰��',
  `private_commerceid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���̵ǼǺ�',
  `private_income` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `private_employee` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��Ա',
  `finance_repayment` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÿ���޵�Ѻ������',
  `finance_property` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '���з���',
  `finance_amount` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÿ�·��ݰ��ҽ��',
  `finance_car` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `finance_caramount` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÿ���������ҽ��',
  `finance_creditcard` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '���ÿ����',
  `mate_name` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '��ż����',
  `mate_salary` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'н��',
  `mate_phone` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '�ֻ�',
  `mate_tel` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰',
  `mate_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `mate_office` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '����ְλ',
  `mate_address` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��ַ',
  `mate_income` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `education_record` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ѧ��',
  `education_school` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT 'ѧУ',
  `education_study` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT 'רҵ',
  `education_time1` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʱ��1',
  `education_time2` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʱ��2',
  `tel` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰',
  `phone` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ֻ�',
  `post` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ʱ�',
  `address` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ʱ�',
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '��',
  `linkman1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ��1',
  `relation1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ1',
  `tel1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰1',
  `phone1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ֻ�1',
  `linkman2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ��2',
  `relation2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ2',
  `tel2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰2',
  `phone2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ֻ�2',
  `linkman3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ��3',
  `relation3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ3',
  `tel3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�绰3',
  `phone3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '�ֻ�3',
  `msn` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'MSN',
  `qq` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'QQ',
  `wangwang` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'WANGWANG',
  `ability` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `interest` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '���˰���',
  `others` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '����˵��',
  `experience` text CHARACTER SET gbk COMMENT '��������',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updatetime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updateip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=340 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_cache`
--

CREATE TABLE IF NOT EXISTS `zx_user_cache` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `kefu_userid` int(11) DEFAULT NULL,
  `kefu_username` int(11) DEFAULT NULL,
  `kefu_addtime` int(11) DEFAULT NULL,
  `vip_status` int(2) DEFAULT '0',
  `vip_remark` varchar(250) DEFAULT NULL,
  `vip_money` varchar(100) DEFAULT NULL,
  `vip_verify_remark` varchar(100) DEFAULT NULL,
  `vip_verify_time` varchar(100) DEFAULT NULL,
  `bbs_topics_num` int(11) DEFAULT '0',
  `bbs_posts_num` int(11) DEFAULT '0',
  `credit` int(11) DEFAULT '0' COMMENT '积分',
  `account` int(11) DEFAULT '0' COMMENT '帐户总额',
  `account_use` int(11) DEFAULT '0' COMMENT '可用金额',
  `account_nouse` int(11) DEFAULT '0' COMMENT '冻结金额',
  `account_waitin` int(11) DEFAULT '0' COMMENT '代收总额',
  `account_waitintrest` int(11) DEFAULT '0' COMMENT '代收利息',
  `account_intrest` int(11) DEFAULT '0' COMMENT '净赚利息',
  `account_award` int(11) DEFAULT '0' COMMENT '投标奖励',
  `account_payment` int(11) DEFAULT '0' COMMENT '待还总额',
  `account_expired` int(11) DEFAULT '0' COMMENT '逾期总额',
  `account_waitvip` int(11) DEFAULT '0' COMMENT 'vip会费',
  `borrow_amount` int(11) DEFAULT '3000' COMMENT '借款额度',
  `vouch_amount` int(11) NOT NULL DEFAULT '0' COMMENT '担保额度',
  `borrow_loan` int(11) DEFAULT '0' COMMENT '成功借出',
  `borrow_success` int(11) DEFAULT '0' COMMENT '成功借款',
  `borrow_wait` int(11) DEFAULT '0' COMMENT '等待满标',
  `borrow_paymeng` int(11) DEFAULT '0' COMMENT '待还借款',
  `friends_apply` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zx_user_cache`
--

INSERT INTO `zx_user_cache` (`user_id`, `kefu_userid`, `kefu_username`, `kefu_addtime`, `vip_status`, `vip_remark`, `vip_money`, `vip_verify_remark`, `vip_verify_time`, `bbs_topics_num`, `bbs_posts_num`, `credit`, `account`, `account_use`, `account_nouse`, `account_waitin`, `account_waitintrest`, `account_intrest`, `account_award`, `account_payment`, `account_expired`, `account_waitvip`, `borrow_amount`, `vouch_amount`, `borrow_loan`, `borrow_success`, `borrow_wait`, `borrow_paymeng`, `friends_apply`) VALUES
(56, 7, NULL, NULL, 1, '这是一个申请测试', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, 0, 0, 0, 0, 0, 0),
(58, 7, NULL, NULL, 1, 'dasfas', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, 0, 0, 0, 0, 0, 0),
(57, 7, NULL, NULL, 0, '我要申请成为会员', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_log`
--

CREATE TABLE IF NOT EXISTS `zx_user_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `query` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `url` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `result` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=495 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_sendemail_log`
--

CREATE TABLE IF NOT EXISTS `zx_user_sendemail_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT NULL,
  `title` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `type` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `email` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `msg` text CHARACTER SET gbk,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- 转存表中的数据 `zx_user_sendemail_log`
--

INSERT INTO `zx_user_sendemail_log` (`id`, `status`, `title`, `type`, `email`, `user_id`, `msg`, `addtime`, `addip`) VALUES
(73, 1, '注册邮件确认', 'reg', '516012818@qq.com', 50, '\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\n		</h1>\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\n		<div style="padding: 2px 20px 30px;">\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">杨平</span> , 您好！</p>\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">516012818@qq.com</strong></p>\n			<p>请点击下面的链接即可完成激活。</p>\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkemail&id=6e2cn/olbyFIG8SyZIs31Hoj9saHpJTv2gupbHN7eX/Nw2No2nfyiqucI19F" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkemail&id=6e2cn/olbyFIG8SyZIs31Hoj9saHpJTv2gupbHN7eX/Nw2No2nfyiqucI19F</a>\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\n\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \n			</p>\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\n		</div>\n	</div>\n</div>\n		', '1371782100', '127.0.0.1'),
(74, 1, '注册邮件确认', 'reg', '516012818@qq.com', 51, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">杨平</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">516012818@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=7ca0j119kXaaSAYcpevMbSSRl9q4GEwoaBysrgn5EmtAxNVJB9aczuU/sJ1T" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=7ca0j119kXaaSAYcpevMbSSRl9q4GEwoaBysrgn5EmtAxNVJB9aczuU/sJ1T</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1371782433', '127.0.0.1'),
(75, 1, '注册邮件确认', 'reg', '516012818@qq.com', 52, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">胡乃欣</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">516012818@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=ca23O5sL98ZKptbim8L3nB%2BCmz0iu%2FVwT%2BDNImdH3icKupOX%2Bj8ONSFxgDlJ" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=ca23O5sL98ZKptbim8L3nB%2BCmz0iu%2FVwT%2BDNImdH3icKupOX%2Bj8ONSFxgDlJ</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1371783156', '127.0.0.1'),
(76, 1, '注册邮件确认', 'reg', '516012818@qq.com', 53, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">杨平</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">516012818@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=0d56XQDYbKWXAP%2FlEY%2FSqw%2B03NB%2FZ2ua4l9veXLa3m2198jjPwgX7svjyGno" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=0d56XQDYbKWXAP%2FlEY%2FSqw%2B03NB%2FZ2ua4l9veXLa3m2198jjPwgX7svjyGno</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1371784711', '127.0.0.1'),
(77, 1, '注册邮件确认', 'reg', '43555015@qq.com', 55, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">混啊先</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">43555015@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=65a15d6KmaBTb6A4FrKCF0od6BvAlsTMaaoPZnZAh61TMemFyAqeUEbSGuOgP2M" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=65a15d6KmaBTb6A4FrKCF0od6BvAlsTMaaoPZnZAh61TMemFyAqeUEbSGuOgP2M</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1371867900', '127.0.0.1'),
(78, 1, '注册邮件确认', 'reg', '516012818@qq.com', 56, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">系统管理员</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">516012818@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=5095B%2FK%2BO%2Ba59%2BxmsP8n%2BdEqA740ENR6iOySoW8DR%2F3I7Wx6Ncy33t4B0PfTksES" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=5095B%2FK%2BO%2Ba59%2BxmsP8n%2BdEqA740ENR6iOySoW8DR%2F3I7Wx6Ncy33t4B0PfTksES</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1371868857', '127.0.0.1'),
(79, 1, '注册邮件确认', 'reg', '43555015@qq.com', 57, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">胡那</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">43555015@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=ea60qFCLjS5APj4bxQDOavzg8nOHk8xId4FGArQkvpIBs9xWzF5fRKplLiZyuZM" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=ea60qFCLjS5APj4bxQDOavzg8nOHk8xId4FGArQkvpIBs9xWzF5fRKplLiZyuZM</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1372054085', '127.0.0.1'),
(80, 1, '注册邮件确认', 'reg', '1719256705@qq.com', 58, '\r\n	<div style="background: url(http://localhost/zhongxing/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">\r\n	<div style="padding: 10px 0px; background: url(http://localhost/zhongxing/data/images/base/email_button.png)  no-repeat ">\r\n		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 48px;">\r\n			<a title="众兴投资用户中心" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">\r\n			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="众兴投资用户中心" src="http://localhost/zhongxing/data/images/base/email_logo.png" height="48" width="208">		</a>\r\n		</h1>\r\n		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>\r\n		<div style="padding: 2px 20px 30px;">\r\n			<p>亲爱的 <span style="color: rgb(196, 0, 0);">杨平</span> , 您好！</p>\r\n			<p>感谢您注册众兴投资，您登录的邮箱帐号为 <strong style="font-size: 16px;">1719256705@qq.com</strong></p>\r\n			<p>请点击下面的链接即可完成激活。</p>\r\n			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="点击完成注册" href="http://localhost/zhongxing/index.php?r=user/checkstring&string=3b26uZz9iukT7LkCfXQwzP%2Fr2Z3DEM1apF3jzz3d1bDfT4lV%2FEyfLHBgS4VrUykPfw" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=user/checkestring&string=3b26uZz9iukT7LkCfXQwzP%2Fr2Z3DEM1apF3jzz3d1bDfT4lV%2FEyfLHBgS4VrUykPfw</a>\r\n			<br><span style="color: rgb(153, 153, 153);">(如果链接无法点击，请将它拷贝到浏览器的地址栏中)</span></p>\r\n\r\n			<p>感谢您光临众兴投资用户中心，我们的宗旨：为您提供优秀的产品和优质的服务！ <br>现在就登录吧!\r\n			<a title="点击登录众兴投资用户中心" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/index.php?r=User" target="_blank" swaped="true">http://localhost/zhongxing/index.php?r=User</a> \r\n			</p>\r\n			<p style="text-align: right;"><br>众兴投资用户中心 敬启</p>\r\n			<p><br>此为自动发送邮件，请勿直接回复！如您有任何疑问，请点击<a title="点击联系我们" style="color: rgb(15, 136, 221);" href="http://localhost/zhongxing/help/index.html" target="_blank" >联系我们&gt;&gt;</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n		', '1372054186', '192.168.0.104');

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_trend`
--

CREATE TABLE IF NOT EXISTS `zx_user_trend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `addtime` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='�û�������¼' AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_type`
--

CREATE TABLE IF NOT EXISTS `zx_user_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `purview` text CHARACTER SET gbk,
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `summary` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `remark` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_typechange`
--

CREATE TABLE IF NOT EXISTS `zx_user_typechange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `status` int(2) NOT NULL DEFAULT '0',
  `old_type` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `new_type` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `content` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addtime` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `addip` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_visit`
--

CREATE TABLE IF NOT EXISTS `zx_user_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `visit_userid` int(11) DEFAULT NULL,
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_vip_card`
--

CREATE TABLE IF NOT EXISTS `zx_vip_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `city` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `serial_number` varchar(15) CHARACTER SET latin1 NOT NULL COMMENT 'VIP����',
  `batch` int(11) NOT NULL COMMENT '��������',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '����',
  `create_time` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `start_date` int(11) DEFAULT NULL COMMENT '��Ч�ڿ�ʼ����',
  `end_date` int(11) DEFAULT NULL COMMENT '��Ч�ڽ�������',
  `is_up_end_date` tinyint(1) DEFAULT '0' COMMENT '�Ƿ�����',
  `vct_name` varchar(40) CHARACTER SET latin1 DEFAULT NULL COMMENT '��ֵ������',
  `month_num` tinyint(4) DEFAULT NULL COMMENT '��Ч����',
  `open_time` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '״̬:0:δ���1������2���ᣬ3ͣ��, 4���',
  `freeze_time` int(11) DEFAULT NULL COMMENT '����ʱ��',
  `freeze_day` int(11) DEFAULT NULL COMMENT '��������',
  `freeze_times` tinyint(4) DEFAULT '0' COMMENT '�������',
  `stop_time` int(11) DEFAULT NULL COMMENT 'ͣ��ʱ��',
  `stop_day` int(11) DEFAULT NULL COMMENT 'ͣ������',
  `stop_times` tinyint(4) DEFAULT '0' COMMENT 'ͣ������',
  `create_user` varchar(20) CHARACTER SET latin1 NOT NULL COMMENT '������',
  `remark` text CHARACTER SET latin1 COMMENT '��ע',
  `hits` int(11) DEFAULT NULL COMMENT '�������',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_vip_sn` (`serial_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='VIP��' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_vip_card_type`
--

CREATE TABLE IF NOT EXISTS `zx_vip_card_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '����ID',
  `name` varchar(40) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `month_num` tinyint(4) DEFAULT NULL COMMENT '����',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `month_num_UNIQUE` (`month_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_vip_user`
--

CREATE TABLE IF NOT EXISTS `zx_vip_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(15) CHARACTER SET latin1 NOT NULL COMMENT 'VIP����',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '��������',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '����',
  `hits` int(11) DEFAULT NULL COMMENT '�������',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ʱ��',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '����ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '�޸�ip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_vipu_u` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='VIP���û�' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_yginfo`
--

CREATE TABLE IF NOT EXISTS `zx_yginfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '�û�ID',
  `status` int(2) DEFAULT '0' COMMENT '״̬',
  `height` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `minzu` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `jiguan` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����',
  `zhengzhi` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '������ò',
  `techang` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '�س�',
  `marray` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '���',
  `zhuanye` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'רҵ',
  `xueli` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ѧ��',
  `idcard` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '����֤����',
  `zhiye` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ְҵ',
  `school` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ѧУ',
  `danwei` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��λ',
  `dizhi` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��ַ',
  `linkman` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ��',
  `linktel` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��ϵ�绰',
  `fuwu` text CHARACTER SET gbk,
  `jianli` text CHARACTER SET gbk,
  `liyou` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '��������',
  `verify_userid` int(11) DEFAULT NULL COMMENT '�����',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '���ʱ��',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '��˱�ע',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='�幤��Ϣ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_zixun_fields`
--

CREATE TABLE IF NOT EXISTS `zx_zixun_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 限制导出的表
--

--
-- 限制表 `zx_assignments`
--
ALTER TABLE `zx_assignments`
  ADD CONSTRAINT `zx_assignments_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `zx_itemchildren`
--
ALTER TABLE `zx_itemchildren`
  ADD CONSTRAINT `zx_itemchildren_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zx_itemchildren_ibfk_2` FOREIGN KEY (`child`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
