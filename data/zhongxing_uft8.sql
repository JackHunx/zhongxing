-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- ‰∏ªÊú∫: 127.0.0.1
-- ÁîüÊàêÊó•Êúü: 2013 Âπ¥ 06 Êúà 21 Êó• 04:19
-- ÊúçÂä°Âô®ÁâàÊú¨: 5.5.27
-- PHP ÁâàÊú¨: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Êï∞ÊçÆÂ∫ì: `zx`
--

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_account`
--

CREATE TABLE IF NOT EXISTS `zx_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `total` decimal(11,2) DEFAULT '0.00' COMMENT '◊ Ω◊‹∂Ó',
  `use_money` decimal(11,2) DEFAULT '0.00',
  `no_use_money` decimal(11,2) DEFAULT '0.00',
  `collection` decimal(11,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_account_bank`
--

CREATE TABLE IF NOT EXISTS `zx_account_bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªßID',
  `account` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '’À∫≈',
  `bank` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'À˘ Ù“¯––',
  `branch` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '÷ß––',
  `province` int(5) DEFAULT '0' COMMENT ' °∑›',
  `city` int(5) DEFAULT '0' COMMENT '≥« –',
  `area` int(5) DEFAULT '0' COMMENT '«¯',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='“¯––’ ªß' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_account_cash`
--

CREATE TABLE IF NOT EXISTS `zx_account_cash` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªßID',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '’À∫≈',
  `bank` text CHARACTER SET gbk COMMENT 'À˘ Ù“¯––',
  `branch` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '÷ß––',
  `total` float(20,2) DEFAULT '0.00' COMMENT '◊‹∂Ó',
  `credited` varchar(20) CHARACTER SET gbk DEFAULT '0' COMMENT 'µΩ’À◊‹∂Ó',
  `fee` varchar(20) CHARACTER SET gbk DEFAULT '0' COMMENT ' ÷–¯∑—',
  `verify_userid` int(11) DEFAULT NULL,
  `verify_time` int(11) DEFAULT NULL,
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idv` (`user_id`,`status`,`verify_userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Ã·œ÷º«¬º' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_account_log`
--

CREATE TABLE IF NOT EXISTS `zx_account_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªßID',
  `type` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '¿‡–Õ',
  `total` decimal(11,2) DEFAULT '0.00',
  `money` decimal(20,2) DEFAULT NULL COMMENT 'Ω∂Ó',
  `use_money` decimal(10,2) DEFAULT '0.00' COMMENT 'ø…”√Ω∂Ó',
  `no_use_money` decimal(10,2) DEFAULT '0.00' COMMENT '∂≥Ω·Ω∂Ó',
  `collection` decimal(11,2) DEFAULT '0.00',
  `to_user` int(11) DEFAULT NULL COMMENT 'Ωª“◊∂‘∑Ω',
  `remark` varchar(250) CHARACTER SET gbk DEFAULT '0' COMMENT '±∏◊¢',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='◊ Ωº«¬º' AUTO_INCREMENT=329 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_account_payment`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_account_recharge`
--

CREATE TABLE IF NOT EXISTS `zx_account_recharge` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `trade_no` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '∂©µ•∫≈',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªßID',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `money` decimal(10,2) DEFAULT '0.00' COMMENT 'Ω∂Ó',
  `payment` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'À˘ Ù“¯––',
  `return` text CHARACTER SET gbk,
  `type` varchar(10) CHARACTER SET gbk DEFAULT '0' COMMENT '¿‡–Õ',
  `remark` varchar(250) CHARACTER SET gbk DEFAULT '0' COMMENT '±∏◊¢',
  `fee` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `verify_userid` int(11) DEFAULT '0' COMMENT '…Û∫À»À',
  `verify_time` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT '' COMMENT '…Û∫À±∏◊¢',
  `addtime` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(15) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idp` (`user_id`,`payment`),
  KEY `user_idv` (`user_id`,`payment`,`verify_userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='≥‰÷µº«¬º' AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_ad`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_area`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_article`
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
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' °∑›',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '≥« –',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '«¯',
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_article_fields`
--

CREATE TABLE IF NOT EXISTS `zx_article_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  `files` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_assignments`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_attestation`
--

CREATE TABLE IF NOT EXISTS `zx_attestation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `type_id` int(11) DEFAULT '0' COMMENT '…œ¥´µƒ¿‡–Õ',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT '»œ÷§µƒ◊¥Ã¨',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '»œ÷§µƒÕº∆¨',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '»œ÷§µƒºÚΩÈ',
  `jifen` int(20) DEFAULT '0' COMMENT '»œ÷§µƒª˝∑÷',
  `pic` text CHARACTER SET gbk,
  `pic2` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `pic3` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(32) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `verify_user` int(11) DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À±∏◊¢',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=329 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_attestation_type`
--

CREATE TABLE IF NOT EXISTS `zx_attestation_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¿‡–Õ√˚≥∆',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `jifen` int(20) DEFAULT '0' COMMENT 'ª˝∑÷',
  `summary` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT 'ºÚΩÈ',
  `remark` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '±∏◊¢',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_credits`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_dirtywords`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_forums`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_posts`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_reward`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_settings`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_bbs_topics`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow`
--

CREATE TABLE IF NOT EXISTS `zx_borrow` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Àı¬‘Õº',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' Ù–‘',
  `is_vouch` int(2) NOT NULL DEFAULT '0',
  `type` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `view_type` int(11) NOT NULL DEFAULT '0',
  `vouch_award` varchar(40) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_user` varchar(100) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_account` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `vouch_times` int(11) NOT NULL DEFAULT '0',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¿¥‘¥',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑¢≤º ±º‰',
  `customer` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT 'øÕ∑˛',
  `number_id` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `verify_user` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'øÕ∑˛',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `repayment_user` int(11) DEFAULT '0',
  `forst_account` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `monthly_repayment` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '√ø‘¬ªπøÓ∂Ó',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `repayment_yesinterest` int(11) NOT NULL DEFAULT '0',
  `repayment_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `repayment_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `success_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `end_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `payment_account` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `each_time` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `use` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '”√Õæ',
  `time_limit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ΩËøÓ∆⁄œﬁ',
  `style` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ªπøÓ∑Ω Ω',
  `account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ΩË¥˚◊‹Ω∂Ó',
  `account_yes` varchar(10) CHARACTER SET gbk DEFAULT '0',
  `tender_times` varchar(11) CHARACTER SET gbk DEFAULT '0',
  `apr` decimal(18,2) DEFAULT NULL COMMENT 'ƒÍ¿˚¬ ',
  `lowest_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '◊ÓµÕÕ∂±ÍΩ∂Ó',
  `most_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '◊Ó∂‡Õ∂±Í◊‹∂Ó',
  `valid_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '”––ß ±º‰',
  `award` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õ∂±ÍΩ±¿¯',
  `part_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑÷ÃØΩ±¿¯Ω∂Ó',
  `funds` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '±»¿˝Ω±¿¯µƒ±»¿˝',
  `is_false` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '±Íµƒ ß∞‹ ±“≤Õ¨—˘Ω±¿¯ ',
  `open_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒ’ ªß◊ Ω«Èøˆ',
  `open_borrow` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒΩËøÓ◊ Ω«Èøˆ',
  `open_tender` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒÕ∂±Í◊ Ω«Èøˆ',
  `open_credit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒ–≈”√∂Ó∂»«Èøˆ',
  `content` text CHARACTER SET gbk COMMENT 'œÍœ∏Àµ√˜',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idst` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_amount`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_amountlog`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_amountlog1`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_collection`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `status` int(2) DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `tender_id` int(11) DEFAULT '0' COMMENT 'ΩËøÓid',
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π¿º∆ªπøÓ ±º‰',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '“—æ≠ªπøÓ ±º‰',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '‘§ªπΩ∂Ó',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT ' µªπΩ∂Ó',
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_line`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_line` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Àı¬‘Õº',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' Ù–‘',
  `type` int(2) DEFAULT '0' COMMENT 'ΩËøÓ¿‡–Õ',
  `borrow_use` int(10) DEFAULT '0' COMMENT '¥˚øÓ”√Õæ',
  `borrow_qixian` int(10) DEFAULT '0' COMMENT '¥˚øÓ∆⁄œﬁ',
  `province` int(10) DEFAULT '0' COMMENT ' °∑›',
  `city` int(10) DEFAULT '0' COMMENT '≥« –',
  `area` int(10) DEFAULT '0' COMMENT 'µÿ«¯',
  `account` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '¥˚øÓΩ∂Ó',
  `content` text CHARACTER SET gbk COMMENT 'œÍœ∏Àµ√˜',
  `pawn` varchar(2) CHARACTER SET gbk DEFAULT NULL COMMENT '”–Œﬁµ÷—∫',
  `tel` varchar(15) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞',
  `sex` varchar(2) CHARACTER SET gbk DEFAULT NULL COMMENT '–‘±',
  `xing` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '–’',
  `verify_user` int(11) DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_repayment`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_repayment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `status` int(2) DEFAULT '0',
  `webstatus` int(2) NOT NULL DEFAULT '0' COMMENT 'Õ¯’æ¥˙ªπ',
  `order` int(2) DEFAULT NULL,
  `borrow_id` int(11) DEFAULT '0' COMMENT 'ΩËøÓid',
  `repayment_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π¿º∆ªπøÓ ±º‰',
  `repayment_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '“—æ≠ªπøÓ ±º‰',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '‘§ªπΩ∂Ó',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT ' µªπΩ∂Ó',
  `late_days` int(11) NOT NULL DEFAULT '0',
  `late_interest` varchar(11) CHARACTER SET gbk NOT NULL DEFAULT '0',
  `interest` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `capital` varchar(50) CHARACTER SET gbk DEFAULT '0',
  `forfeit` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '÷Õƒ…Ω',
  `reminder_fee` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '¥ﬁ ’∑—',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idubs` (`borrow_id`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_tender`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_tender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `borrow_id` int(11) DEFAULT '0',
  `money` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `account` varchar(10) CHARACTER SET gbk DEFAULT '0',
  `repayment_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '◊‹∂Ó',
  `interest` varchar(11) CHARACTER SET gbk NOT NULL DEFAULT '0',
  `repayment_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '“—ªπ◊‹∂Ó',
  `wait_account` varchar(11) CHARACTER SET gbk DEFAULT '0' COMMENT '¥˝ªπ◊‹∂Ó',
  `wait_interest` varchar(11) CHARACTER SET gbk DEFAULT '0' COMMENT '¥˝ªπ¿˚œ¢',
  `repayment_yesinterest` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '“—ªπ¿˚œ¢',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idub` (`user_id`,`borrow_id`),
  KEY `user_idubs` (`user_id`,`borrow_id`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='’–±Í' AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_union`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_union` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Àı¬‘Õº',
  `range` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'æ≠”™∑∂Œß',
  `content` text CHARACTER SET gbk COMMENT 'π´ÀæºÚΩÈ',
  `verify_remark` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `verify_time` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_vouch`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_vouch_collection`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_vouch_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `borrow_id` int(11) NOT NULL DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `vouch_id` int(11) DEFAULT '0' COMMENT 'ΩËøÓid',
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π¿º∆ªπøÓ ±º‰',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '“—æ≠ªπøÓ ±º‰',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '‘§ªπΩ∂Ó',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT ' µªπΩ∂Ó',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_borrow_vouch_repayment`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_vouch_repayment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `borrow_id` int(11) NOT NULL DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `repay_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π¿º∆ªπøÓ ±º‰',
  `repay_yestime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '“—æ≠ªπøÓ ±º‰',
  `repay_account` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '‘§ªπΩ∂Ó',
  `repay_yesaccount` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT ' µªπΩ∂Ó',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_cache`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_cms_article`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_cms_article_fields`
--

CREATE TABLE IF NOT EXISTS `zx_cms_article_fields` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_comment`
--

CREATE TABLE IF NOT EXISTS `zx_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `module_code` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET gbk,
  `flag` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '∂®“Â Ù–‘',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≈≈–Ú',
  `status` int(2) DEFAULT NULL COMMENT '◊¥Ã¨',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_company`
--

CREATE TABLE IF NOT EXISTS `zx_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT 'π´Àæ√˚≥∆',
  `site_id` int(11) NOT NULL COMMENT '¿∏ƒøID',
  `flag` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '∂®“Â Ù–‘',
  `status` int(2) DEFAULT NULL COMMENT '◊¥Ã¨',
  `order` varchar(10) CHARACTER SET latin1 NOT NULL COMMENT '≈≈–Ú',
  `litpic` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '…ÃŒÒ¿‡–Õ',
  `percentage` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '≥ˆø⁄∞Ÿ∑÷±»',
  `capital` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '◊ ±æ',
  `ascendent` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '÷˜“™æ∫’˘”≈ ∆',
  `quality` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '÷ ¡ø‘»Œ',
  `sales` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '»´ƒÍœ˙ €',
  `staff` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '‘±π§',
  `foundyear` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '≥…¡¢ƒÍ∑›',
  `payment` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '∏∂øÓ∑Ω Ω',
  `markets_main` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '÷˜“™œ˙ € –≥°',
  `markets_other` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '∆‰À˚œ˙ € –≥°',
  `replace_work` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '¥˙π§ –≥°',
  `rdman` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '—–∑¢»À‘±◊‹ ˝',
  `engineer` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'π§≥Ã ¶◊‹ ˝',
  `summary` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ºÚΩÈ',
  `content` text CHARACTER SET latin1 COMMENT 'ƒ⁄»›',
  `province` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT ' °∑›',
  `city` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '≥« –',
  `area` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '«¯',
  `address` varchar(200) CHARACTER SET latin1 DEFAULT NULL COMMENT 'µÿ÷∑',
  `postcode` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '” ±‡',
  `linkman` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '¡™œµ»À',
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'email',
  `tel` varchar(200) CHARACTER SET latin1 DEFAULT NULL COMMENT 'µÁª∞',
  `fax` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '¥´’Ê',
  `msn` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'msn',
  `qq` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT 'QQ',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒ ±º‰',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_company_fields`
--

CREATE TABLE IF NOT EXISTS `zx_company_fields` (
  `aid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_credit`
--

CREATE TABLE IF NOT EXISTS `zx_credit` (
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ª·‘±ID',
  `value` int(11) DEFAULT '0' COMMENT 'ª˝∑÷ ˝÷µ',
  `op_user` int(11) DEFAULT NULL COMMENT '≤Ÿ◊˜’ﬂ',
  `addtime` int(11) DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”IP',
  `updatetime` varchar(11) CHARACTER SET gbk DEFAULT NULL COMMENT '◊Ó∫Û∏¸–¬ ±º‰',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '◊Ó∫Û∏¸–¬ID',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ª·‘±ª˝∑÷';

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_credit_log`
--

CREATE TABLE IF NOT EXISTS `zx_credit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT 'ª·‘±ID',
  `type_id` int(11) DEFAULT '0' COMMENT 'ª˝∑÷¿‡–ÕID',
  `op` tinyint(1) DEFAULT '1' COMMENT '±‰∂Ø¿‡–Õ,1:‘ˆº”,2:ºı…Ÿ',
  `value` int(11) DEFAULT '0' COMMENT '±‰∂Øª˝∑÷ ˝÷µ',
  `remark` text CHARACTER SET gbk COMMENT '±∏◊¢',
  `op_user` int(11) DEFAULT NULL COMMENT '≤Ÿ◊˜’ﬂ',
  `addtime` int(11) DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ª·‘±ª˝∑÷»’÷æ' AUTO_INCREMENT=362 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_credit_rank`
--

CREATE TABLE IF NOT EXISTS `zx_credit_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µ»º∂√˚≥∆',
  `rank` int(11) DEFAULT '0' COMMENT 'µ»º∂',
  `point1` int(11) DEFAULT '0' COMMENT 'ø™ º∑÷÷µ',
  `point2` int(11) DEFAULT '0' COMMENT '◊Ó∫Û∑÷÷µ',
  `pic` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õº∆¨',
  `remark` text CHARACTER SET gbk COMMENT '±∏◊¢',
  `addtime` int(11) DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ª·‘±ª˝∑÷µ»º∂' AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_credit_type`
--

CREATE TABLE IF NOT EXISTS `zx_credit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ª˝∑÷√˚≥∆',
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ª˝∑÷¥˙¬Î',
  `value` int(11) DEFAULT '0' COMMENT 'ª˝∑÷ ˝÷µ',
  `cycle` tinyint(1) DEFAULT '2' COMMENT 'ª˝∑÷÷‹∆⁄£¨1:“ª¥Œ,2:√øÃÏ,3:º‰∏Ù∑÷÷”,4:≤ªœﬁ',
  `award_times` tinyint(4) DEFAULT NULL COMMENT 'Ω±¿¯¥Œ ˝,0:≤ªœﬁ',
  `interval` int(11) DEFAULT '1' COMMENT ' ±º‰º‰∏Ù£¨µ•Œª∑÷÷”',
  `remark` text CHARACTER SET gbk COMMENT '±∏◊¢',
  `op_user` int(11) DEFAULT NULL COMMENT '≤Ÿ◊˜’ﬂ',
  `addtime` int(11) DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”IP',
  `updatetime` int(11) DEFAULT NULL COMMENT '◊Ó∫Û∏¸–¬ ±º‰',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '◊Ó∫Û∏¸–¬ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ª˝∑÷¿‡–Õ' AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_discount`
--

CREATE TABLE IF NOT EXISTS `zx_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL COMMENT '…Ãº“',
  `litpic` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '…œ¥´Õº∆¨',
  `type` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '∑÷¿‡:»Á£¨–›œ–£¨√¿ ≥£¨π∫ŒÔ...',
  `business_district` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '…Ã»¶',
  `company_id` int(11) DEFAULT NULL COMMENT '…Ãº“',
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '±ÍÃ‚',
  `province` int(11) DEFAULT NULL COMMENT ' °∑›',
  `city` int(11) DEFAULT NULL COMMENT '≥« –',
  `area` int(11) DEFAULT NULL COMMENT '«¯',
  `address` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'µÿ÷∑',
  `tag` varchar(100) CHARACTER SET latin1 DEFAULT NULL COMMENT '±Í«©',
  `start_date` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ø™ º ±º‰',
  `end_date` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'Ω· ¯ ±º‰',
  `comment` text CHARACTER SET latin1 COMMENT 'ƒ⁄»›',
  `hit` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `top` int(11) DEFAULT '0' COMMENT '∂•¥Œ ˝',
  `remark` text CHARACTER SET latin1 COMMENT '±∏◊¢',
  `post_user` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '∑¢≤º’ﬂ',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '∂®“Â Ù–‘',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '≈≈–Ú',
  `status` int(2) DEFAULT NULL COMMENT '◊¥Ã¨',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '∏¸–¬ ±º‰',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '∏¸–¬ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_discount_company`
--

CREATE TABLE IF NOT EXISTS `zx_discount_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '…Ãº“√˚≥∆',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '∂®“Â Ù–‘',
  `status` int(2) DEFAULT NULL COMMENT '◊¥Ã¨',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '≈≈–Ú',
  `litpic` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT '…œ¥´Õº∆¨',
  `goods` varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ªÓ∂Ø≤˙∆∑',
  `type` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '”≈ª›¿‡–Õ',
  `linkman` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '¡™œµ»À',
  `tel` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT '¡™œµµÁª∞',
  `content` text CHARACTER SET latin1 NOT NULL COMMENT 'π´ÀæºÚΩÈ',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_editor`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_fee`
--

CREATE TABLE IF NOT EXISTS `zx_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '√˚≥∆',
  `nid` int(11) DEFAULT NULL COMMENT '¿∏ƒøID',
  `value` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '÷µ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_fields`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_flag`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_friends`
--

CREATE TABLE IF NOT EXISTS `zx_friends` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß',
  `friends_userid` int(11) DEFAULT '0' COMMENT '≈Û”—',
  `friends_username` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `type` int(2) DEFAULT '0' COMMENT '¿‡–Õ',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ƒ⁄»›',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='∫√”—' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_friends_request`
--

CREATE TABLE IF NOT EXISTS `zx_friends_request` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß',
  `friends_userid` int(11) DEFAULT '0' COMMENT '≈Û”—',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `type` int(2) DEFAULT '0',
  `content` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='∫√”—º«¬º' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_help`
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
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' °∑›',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '≥« –',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '«¯',
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_help_type`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_home`
--

CREATE TABLE IF NOT EXISTS `zx_home` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Àı¬‘Õº',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' Ù–‘',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¿¥‘¥',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑¢≤º ±º‰',
  `xiaoqu` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '–°«¯',
  `shi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT ' “',
  `ting` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ã¸',
  `wei` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'Œ¿',
  `louceng` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¬•≤„',
  `zonglouceng` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‹¬•≤„',
  `loupan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¬•≈Ã',
  `zhucegongsi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT ' «∑Ò◊¢≤·π´Àæ',
  `mianji` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '√Êª˝',
  `mianji1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∆⁄Õ˚√Êª˝1',
  `mianji2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∆⁄Õ˚√Êª˝2',
  `fangshi` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≥ˆ◊‚∑Ω Ω',
  `leixing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¿‡–Õ',
  `zhuangxiu` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊∞–ﬁ',
  `chaoxiang` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≥ØœÚ',
  `zujin` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‚Ω',
  `jiage` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT ' €º€',
  `jiage1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∆⁄Õ˚ €º€1',
  `jiage2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∆⁄Õ˚ €º€2',
  `jiageleixing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'º€∏Ò¿‡–Õ',
  `lishijingying` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¿˙ ∑æ≠”™',
  `jibenqingkuang` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'ª˘±æ«Èøˆ',
  `diduan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÿ∂Œ',
  `diduan1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÿ∂Œ1',
  `diduan2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÿ∂Œ2',
  `fukuan` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∏∂øÓ∑Ω Ω',
  `linjin` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¡ŸΩ¸',
  `peizhi` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '≈‰÷√',
  `tupian` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õº∆¨',
  `xianxingbie` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT 'œﬁ÷∆–‘±',
  `chuzufangjian` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '≥ˆ◊‚∑øº‰',
  `chuzuleixing` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '≥ˆ◊‚¿‡–Õ',
  `content` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '≤π≥‰Àµ√˜',
  `lianxiren` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµ»À',
  `dianhua` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞',
  `qq` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'qq',
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' °∑›',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '≥« –',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '«¯',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updatetime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `updateip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_integral`
--

CREATE TABLE IF NOT EXISTS `zx_integral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'ŒÔ∆∑√˚≥∆',
  `need` double DEFAULT NULL COMMENT 'À˘–Ëª˝∑÷',
  `number` int(11) DEFAULT NULL COMMENT ' ˝¡ø',
  `ex_number` int(11) DEFAULT '0' COMMENT '“—∂“ªª ˝¡ø',
  `province` int(11) DEFAULT NULL COMMENT 'ø…∂“ªª °∑›',
  `city` int(11) DEFAULT NULL COMMENT 'ø…∂“ªª≥« –',
  `area` int(11) DEFAULT NULL COMMENT '«¯',
  `litpic` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õº∆¨',
  `content` text CHARACTER SET gbk COMMENT 'œÍœ∏–≈œ¢',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `top` int(11) DEFAULT '0' COMMENT '∂•¥Œ ˝',
  `flag` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '∂®“Â Ù–‘',
  `order` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≈≈–Ú',
  `status` int(2) DEFAULT NULL COMMENT '◊¥Ã¨',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_integral_convert`
--

CREATE TABLE IF NOT EXISTS `zx_integral_convert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integral_id` int(11) DEFAULT NULL COMMENT '∂“ªªŒÔ∆∑ID',
  `user_id` int(11) DEFAULT NULL COMMENT 'ª·‘±ID',
  `number` int(11) DEFAULT NULL COMMENT ' ˝¡ø',
  `need` int(11) DEFAULT NULL COMMENT 'À˘–Ë“™µƒª˝∑÷',
  `integral` int(11) DEFAULT NULL COMMENT '◊‹ª˝∑÷',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `remark` varchar(200) CHARACTER SET gbk DEFAULT '' COMMENT '±∏◊¢',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_invest`
--

CREATE TABLE IF NOT EXISTS `zx_invest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'À˘ Ù’æµ„',
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `litpic` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Àı¬‘Õº',
  `flag` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' Ù–‘',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¿¥‘¥',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑¢≤º ±º‰',
  `customer` int(11) DEFAULT NULL COMMENT 'øÕ∑˛',
  `verify_userid` int(11) DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `use` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '”√Õæ',
  `time_limit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ΩËøÓ∆⁄œﬁ',
  `style` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ªπøÓ∑Ω Ω',
  `account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ΩË¥˚◊‹Ω∂Ó',
  `apr` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ƒÍ¿˚¬ ',
  `lowest_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '◊ÓµÕÕ∂±ÍΩ∂Ó',
  `most_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '◊Ó∂‡Õ∂±Í◊‹∂Ó',
  `valid_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '”––ß ±º‰',
  `award` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õ∂±ÍΩ±¿¯',
  `part_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑÷ÃØΩ±¿¯Ω∂Ó',
  `funds` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '±»¿˝Ω±¿¯µƒ±»¿˝',
  `is_false` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '±Íµƒ ß∞‹ ±“≤Õ¨—˘Ω±¿¯ ',
  `open_account` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒ’ ªß◊ Ω«Èøˆ',
  `open_borrow` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒΩËøÓ◊ Ω«Èøˆ',
  `open_tender` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒÕ∂±Í◊ Ω«Èøˆ',
  `open_credit` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ø™Œ“µƒ–≈”√∂Ó∂»«Èøˆ',
  `content` text CHARACTER SET gbk COMMENT 'œÍœ∏Àµ√˜',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_invite`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='’–∆∏¡–±Ì' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_invite_type`
--

CREATE TABLE IF NOT EXISTS `zx_invite_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='’–∆∏¿‡–Õ' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_itemchildren`
--

CREATE TABLE IF NOT EXISTS `zx_itemchildren` (
  `parent` varchar(64) CHARACTER SET latin1 NOT NULL,
  `child` varchar(64) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_items`
--

CREATE TABLE IF NOT EXISTS `zx_items` (
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `type` int(11) NOT NULL,
  `description` text CHARACTER SET latin1,
  `bizrule` text CHARACTER SET latin1,
  `data` text CHARACTER SET latin1,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_limitapp`
--

CREATE TABLE IF NOT EXISTS `zx_limitapp` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` int(11) DEFAULT '0' COMMENT '≈≈–Ú',
  `account` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '“™‘ˆº”µƒ∂Ó∂»',
  `recommend_userid` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Õ∆ºˆ»À',
  `content` text CHARACTER SET gbk COMMENT 'œÍœ∏Àµ√˜',
  `other_content` text CHARACTER SET gbk COMMENT '∆‰À˚µÿ∑ΩœÍœ∏Àµ√˜',
  `verify_userid` int(11) DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `verify_remark` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '±∏◊¢',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_linkage`
--

CREATE TABLE IF NOT EXISTS `zx_linkage` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` smallint(2) unsigned DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` smallint(6) DEFAULT '0' COMMENT '≈≈–Ú',
  `type_id` smallint(5) unsigned DEFAULT '0' COMMENT '¿‡–Õ',
  `pid` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'À˘ Ù¡™∂Ø',
  `name` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™∂Ø√˚≥∆',
  `value` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™∂Øµƒ÷µ',
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `type_ida` (`type_id`,`value`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=492 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_linkage_type`
--

CREATE TABLE IF NOT EXISTS `zx_linkage_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) DEFAULT '0',
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_links`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='”—«È¡¨Ω”¡–±Ì' AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_links_type`
--

CREATE TABLE IF NOT EXISTS `zx_links_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='”—«È¡¥Ω”¿‡–Õ' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_liuyan`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_liuyan_set`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_message`
--

CREATE TABLE IF NOT EXISTS `zx_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sent_user` int(11) DEFAULT '0' COMMENT '∑¢ÀÕ”√ªß',
  `receive_user` int(11) DEFAULT '0' COMMENT 'Ω” ’”√ªß',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `type` varchar(50) CHARACTER SET gbk DEFAULT '0' COMMENT '¿‡–Õ',
  `sented` varchar(2) CHARACTER SET gbk DEFAULT NULL,
  `deltype` int(2) DEFAULT '0',
  `content` text CHARACTER SET gbk COMMENT 'ƒ⁄»›',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='∂Ãœ˚œ¢' AUTO_INCREMENT=533 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_module`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_online`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_payment`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_payment_type`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_remind`
--

CREATE TABLE IF NOT EXISTS `zx_remind` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `nid` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` smallint(2) unsigned DEFAULT '0' COMMENT '◊¥Ã¨',
  `order` smallint(6) DEFAULT '0' COMMENT '≈≈–Ú',
  `type_id` smallint(5) unsigned DEFAULT '0' COMMENT '¿‡–Õ',
  `message` smallint(2) unsigned DEFAULT '0' COMMENT '∂Ãœ˚œ¢',
  `email` smallint(2) unsigned DEFAULT '0' COMMENT '” œ‰',
  `phone` smallint(2) unsigned DEFAULT '0' COMMENT ' ÷ª˙',
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_remind_type`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_remind_user`
--

CREATE TABLE IF NOT EXISTS `zx_remind_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(11) unsigned DEFAULT NULL,
  `remind_id` smallint(5) unsigned DEFAULT NULL,
  `message` smallint(2) unsigned DEFAULT '0' COMMENT '∂Ãœ˚œ¢',
  `email` smallint(2) unsigned DEFAULT '0' COMMENT '” œ‰',
  `phone` smallint(2) unsigned DEFAULT '0' COMMENT ' ÷ª˙',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_scrollpic`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_scrollpic_type`
--

CREATE TABLE IF NOT EXISTS `zx_scrollpic_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_site`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_system`
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

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_upfiles`
--

CREATE TABLE IF NOT EXISTS `zx_upfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '√˚≥∆',
  `code` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ƒ£øÈ',
  `aid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'À˘ Ùƒ£øÈid',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `filetype` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'Œƒº˛¿‡–Õ',
  `filename` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'Œƒº˛√˚≥∆',
  `filesize` int(10) DEFAULT '0' COMMENT 'Œƒº˛¥Û–°',
  `fileurl` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT 'Œƒº˛µÿ÷∑',
  `if_cover` int(2) DEFAULT '0' COMMENT ' «∑Ò∑‚√Ê',
  `order` int(10) DEFAULT '0' COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT '0' COMMENT 'µ„ª˜¥Œ ˝',
  `addtime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '–ﬁ∏ƒ ±º‰',
  `updateip` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT '–ﬁ∏ƒip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=455 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_user`
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
  `wangwang` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_userinfo`
--

CREATE TABLE IF NOT EXISTS `zx_userinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT 'ÊâÄÂ±ûÁ´ôÁÇπ',
  `user_id` int(11) DEFAULT '0' COMMENT 'Áî®Êà∑ÂêçÁß∞',
  `name` varchar(255) DEFAULT NULL COMMENT 'Ê†áÈ¢ò',
  `status` int(2) DEFAULT '0' COMMENT 'Áä∂ÊÄÅ',
  `order` int(11) DEFAULT '0' COMMENT 'ÊéíÂ∫è',
  `hits` int(11) DEFAULT '0' COMMENT 'ÁÇπÂáªÊ¨°Êï∞',
  `litpic` varchar(255) DEFAULT NULL COMMENT 'Áº©Áï•Âõæ',
  `flag` varchar(50) DEFAULT NULL COMMENT 'Â±ûÊÄß',
  `source` varchar(50) DEFAULT NULL COMMENT 'Êù•Ê∫ê',
  `publish` varchar(50) DEFAULT NULL COMMENT 'ÂèëÂ∏ÉÊó∂Èó¥',
  `marry` varchar(50) DEFAULT NULL COMMENT 'Â©öÂßª',
  `child` varchar(10) DEFAULT NULL COMMENT 'Â≠êÂ•≥',
  `education` varchar(10) DEFAULT NULL COMMENT 'Â≠¶ÂéÜ',
  `income` varchar(10) DEFAULT NULL COMMENT 'Êî∂ÂÖ•',
  `shebao` varchar(10) DEFAULT NULL COMMENT 'Á§æ‰øù',
  `shebaoid` varchar(50) DEFAULT NULL COMMENT 'Á§æ‰øùÂè∑',
  `housing` varchar(10) DEFAULT NULL COMMENT '‰ΩèÊàøÊù°‰ª∂',
  `car` varchar(10) DEFAULT NULL COMMENT 'ËΩ¶',
  `late` varchar(10) DEFAULT NULL COMMENT 'ÈÄæÊúü',
  `house_address` varchar(10) DEFAULT NULL COMMENT 'Êàø‰∫ßÂú∞ÂùÄ',
  `house_area` varchar(10) DEFAULT NULL COMMENT 'Êàø‰∫ßÈù¢ÁßØ',
  `house_year` varchar(10) DEFAULT NULL COMMENT 'Âª∫Á≠ëÂπ¥‰ªΩ',
  `house_status` varchar(10) DEFAULT NULL COMMENT '‰æõÊ¨æ',
  `house_holder1` varchar(10) DEFAULT NULL COMMENT 'ÊàøÂ≠êÊâÄÊúâÊùÉ1',
  `house_holder2` varchar(10) DEFAULT NULL COMMENT 'ÊàøÂ≠êÊâÄÊúâÊùÉ1',
  `house_right1` varchar(10) DEFAULT NULL COMMENT 'ÊàøÂ≠ê‰ªΩÈ¢ù1',
  `house_right2` varchar(10) DEFAULT NULL COMMENT 'ÊàøÂ≠ê‰ªΩÈ¢ù2',
  `house_loanyear` varchar(10) DEFAULT NULL COMMENT 'Ë¥∑Ê¨æÂπ¥Èôê',
  `house_loanprice` varchar(10) DEFAULT NULL COMMENT 'ÊØèÊúà‰æõÊ¨æ',
  `house_balance` varchar(10) DEFAULT NULL COMMENT 'Ë¥∑Ê¨æ‰ΩôÈ¢ù',
  `house_bank` varchar(10) DEFAULT NULL COMMENT 'Èì∂Ë°å',
  `company_name` varchar(10) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏ÂêçÁß∞',
  `company_type` varchar(10) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏ÊÄßË¥®',
  `company_industry` varchar(10) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏Ë°å‰∏ö',
  `company_office` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúËÅå‰Ωç',
  `company_jibie` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúÁ∫ßÂà´',
  `company_worktime1` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúÊó∂Èó¥1',
  `company_worktime2` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúÊó∂Èó¥2',
  `company_workyear` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúÂπ¥Èôê',
  `company_tel` varchar(50) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏ÁîµËØù',
  `company_address` varchar(100) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏Âú∞ÂùÄ',
  `company_weburl` varchar(100) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏ÁΩëÁ´ô',
  `company_reamrk` varchar(250) DEFAULT NULL COMMENT 'ÂÖ¨Âè∏Â§áÊ≥®',
  `private_type` varchar(10) DEFAULT NULL COMMENT 'Á±ªÂà´',
  `private_date` varchar(10) DEFAULT NULL COMMENT 'Êó•Êúü',
  `private_place` varchar(10) DEFAULT NULL COMMENT 'Âú∫ÊâÄ',
  `private_rent` varchar(10) DEFAULT NULL COMMENT 'ÁßüÈáë',
  `private_term` varchar(10) DEFAULT NULL COMMENT 'ÁßüÊúü',
  `private_taxid` varchar(30) DEFAULT NULL COMMENT 'Â∑•ÂïÜÁ®éÂä°',
  `private_commerceid` varchar(50) DEFAULT NULL COMMENT 'Â∑•ÂïÜÁôªËÆ∞Âè∑',
  `private_income` varchar(100) DEFAULT NULL COMMENT 'Êî∂ÂÖ•',
  `private_employee` varchar(100) DEFAULT NULL COMMENT 'ÈõáÂëò',
  `finance_repayment` varchar(100) DEFAULT NULL COMMENT 'ÊØèÊúàÊó†ÊäµÊäºË¥∑Ê¨æËøòÊ¨æÈ¢ù',
  `finance_property` varchar(100) DEFAULT NULL COMMENT 'Ëá™ÊúâÊàø‰∫ß',
  `finance_amount` varchar(100) DEFAULT NULL COMMENT 'ÊØèÊúàÊàøÂ±ãÊåâÊè≠ÈáëÈ¢ù',
  `finance_car` varchar(10) DEFAULT NULL COMMENT 'Ëá™ÊúâÊ±ΩËΩ¶',
  `finance_caramount` varchar(100) DEFAULT NULL COMMENT 'ÊØèÊúàÊ±ΩËΩ¶ÊåâÊè≠ÈáëÈ¢ù',
  `finance_creditcard` varchar(100) DEFAULT NULL COMMENT '‰ø°Áî®Âç°ÈáëÈ¢ù',
  `mate_name` varchar(100) DEFAULT NULL COMMENT 'ÈÖçÂÅ∂ÂêçÂ≠ó',
  `mate_salary` varchar(10) DEFAULT NULL COMMENT 'Ëñ™ËµÑ',
  `mate_phone` varchar(100) DEFAULT NULL COMMENT 'ÊâãÊú∫',
  `mate_tel` varchar(100) DEFAULT NULL COMMENT 'ÁîµËØù',
  `mate_type` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúÁ±ªÂûã',
  `mate_office` varchar(10) DEFAULT NULL COMMENT 'Â∑•‰ΩúËÅå‰Ωç',
  `mate_address` varchar(250) DEFAULT NULL COMMENT 'Âú∞ÂùÄ',
  `mate_income` varchar(100) DEFAULT NULL COMMENT 'Êî∂ÂÖ•',
  `education_record` varchar(100) DEFAULT NULL COMMENT 'Â≠¶ÂéÜ',
  `education_school` varchar(200) DEFAULT NULL COMMENT 'Â≠¶Ê†°',
  `education_study` varchar(200) DEFAULT NULL COMMENT '‰∏ì‰∏ö',
  `education_time1` varchar(20) DEFAULT NULL COMMENT 'Êó∂Èó¥1',
  `education_time2` varchar(20) DEFAULT NULL COMMENT 'Êó∂Èó¥2',
  `tel` varchar(50) DEFAULT NULL COMMENT 'ÁîµËØù',
  `phone` varchar(50) DEFAULT NULL COMMENT 'ÊâãÊú∫',
  `post` varchar(50) DEFAULT NULL COMMENT 'ÈÇÆÁºñ',
  `address` varchar(50) DEFAULT NULL COMMENT 'ÈÇÆÁºñ',
  `province` varchar(20) DEFAULT NULL COMMENT 'ÁúÅ‰ªΩ',
  `city` varchar(20) DEFAULT NULL COMMENT 'ÂüéÂ∏Ç',
  `area` varchar(20) DEFAULT NULL COMMENT 'Âå∫',
  `linkman1` varchar(50) DEFAULT NULL COMMENT 'ËÅîÁ≥ª‰∫∫1',
  `relation1` varchar(50) DEFAULT NULL COMMENT 'ÂÖ≥Á≥ª1',
  `tel1` varchar(50) DEFAULT NULL COMMENT 'ÁîµËØù1',
  `phone1` varchar(50) DEFAULT NULL COMMENT 'ÊâãÊú∫1',
  `linkman2` varchar(50) DEFAULT NULL COMMENT 'ËÅîÁ≥ª‰∫∫2',
  `relation2` varchar(50) DEFAULT NULL COMMENT 'ÂÖ≥Á≥ª2',
  `tel2` varchar(50) DEFAULT NULL COMMENT 'ÁîµËØù2',
  `phone2` varchar(50) DEFAULT NULL COMMENT 'ÊâãÊú∫2',
  `linkman3` varchar(50) DEFAULT NULL COMMENT 'ËÅîÁ≥ª‰∫∫3',
  `relation3` varchar(50) DEFAULT NULL COMMENT 'ÂÖ≥Á≥ª3',
  `tel3` varchar(50) DEFAULT NULL COMMENT 'ÁîµËØù3',
  `phone3` varchar(50) DEFAULT NULL COMMENT 'ÊâãÊú∫3',
  `msn` varchar(50) DEFAULT NULL COMMENT 'MSN',
  `qq` varchar(50) DEFAULT NULL COMMENT 'QQ',
  `wangwang` varchar(50) DEFAULT NULL COMMENT 'WANGWANG',
  `ability` varchar(250) DEFAULT NULL COMMENT '‰∏™‰∫∫ËÉΩÂäõ',
  `interest` varchar(250) DEFAULT NULL COMMENT '‰∏™‰∫∫Áà±Â•Ω',
  `others` varchar(250) DEFAULT NULL COMMENT 'ÂÖ∂‰ªñËØ¥Êòé',
  `experience` text COMMENT 'Â∑•‰ΩúÁªèÂéÜ',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `updatetime` varchar(50) DEFAULT NULL,
  `updateip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_amount`
--

CREATE TABLE IF NOT EXISTS `zx_user_amount` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'µ˜’˚ª÷∏¥∂Ó∂»',
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_amountapply`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_amountlog`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_backup`
--

CREATE TABLE IF NOT EXISTS `zx_user_backup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªß√˚≥∆',
  `user_tel` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_email` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_phone` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_qq` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_address` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_nation` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `user_realname` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '±ÍÃ‚',
  `source` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¿¥‘¥',
  `publish` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '∑¢≤º ±º‰',
  `marry` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'ªÈ“ˆ',
  `child` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊”≈Æ',
  `education` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '—ß¿˙',
  `income` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT ' ’»Î',
  `shebao` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '…Á±£',
  `shebaoid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '…Á±£∫≈',
  `housing` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊°∑øÃıº˛',
  `car` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≥µ',
  `late` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '”‚∆⁄',
  `house_address` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø≤˙µÿ÷∑',
  `house_area` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø≤˙√Êª˝',
  `house_year` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ω®÷˛ƒÍ∑›',
  `house_status` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π©øÓ',
  `house_holder1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø◊”À˘”–»®1',
  `house_holder2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø◊”À˘”–»®1',
  `house_right1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø◊”∑›∂Ó1',
  `house_right2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '∑ø◊”∑›∂Ó2',
  `house_loanyear` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¥˚øÓƒÍœﬁ',
  `house_loanprice` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '√ø‘¬π©øÓ',
  `house_balance` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¥˚øÓ”‡∂Ó',
  `house_bank` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '“¯––',
  `company_name` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´Àæ√˚≥∆',
  `company_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´Àæ–‘÷ ',
  `company_industry` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´Àæ––“µ',
  `company_office` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜÷∞Œª',
  `company_jibie` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜º∂±',
  `company_worktime1` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜ ±º‰1',
  `company_worktime2` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜ ±º‰2',
  `company_workyear` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜ƒÍœﬁ',
  `company_tel` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ÀæµÁª∞',
  `company_address` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´Àæµÿ÷∑',
  `company_weburl` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´ÀæÕ¯’æ',
  `company_reamrk` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT 'π´Àæ±∏◊¢',
  `private_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '¿‡±',
  `private_date` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '»’∆⁄',
  `private_place` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '≥°À˘',
  `private_rent` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‚Ω',
  `private_term` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‚∆⁄',
  `private_taxid` varchar(30) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§…ÃÀ∞ŒÒ',
  `private_commerceid` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§…Ãµ«º«∫≈',
  `private_income` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT ' ’»Î',
  `private_employee` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'πÕ‘±',
  `finance_repayment` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '√ø‘¬Œﬁµ÷—∫¥˚øÓªπøÓ∂Ó',
  `finance_property` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‘”–∑ø≤˙',
  `finance_amount` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '√ø‘¬∑øŒ›∞¥Ω“Ω∂Ó',
  `finance_car` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '◊‘”–∆˚≥µ',
  `finance_caramount` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '√ø‘¬∆˚≥µ∞¥Ω“Ω∂Ó',
  `finance_creditcard` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '–≈”√ø®Ω∂Ó',
  `mate_name` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '≈‰≈º√˚◊÷',
  `mate_salary` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT '–Ω◊ ',
  `mate_phone` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT ' ÷ª˙',
  `mate_tel` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞',
  `mate_type` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜¿‡–Õ',
  `mate_office` varchar(10) CHARACTER SET gbk DEFAULT NULL COMMENT 'π§◊˜÷∞Œª',
  `mate_address` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÿ÷∑',
  `mate_income` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT ' ’»Î',
  `education_record` varchar(100) CHARACTER SET gbk DEFAULT NULL COMMENT '—ß¿˙',
  `education_school` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '—ß–£',
  `education_study` varchar(200) CHARACTER SET gbk DEFAULT NULL COMMENT '◊®“µ',
  `education_time1` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' ±º‰1',
  `education_time2` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' ±º‰2',
  `tel` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞',
  `phone` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' ÷ª˙',
  `post` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '” ±‡',
  `address` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '” ±‡',
  `province` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT ' °∑›',
  `city` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '≥« –',
  `area` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '«¯',
  `linkman1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµ»À1',
  `relation1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'πÿœµ1',
  `tel1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞1',
  `phone1` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' ÷ª˙1',
  `linkman2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµ»À2',
  `relation2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'πÿœµ2',
  `tel2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞2',
  `phone2` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' ÷ª˙2',
  `linkman3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµ»À3',
  `relation3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'πÿœµ3',
  `tel3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÁª∞3',
  `phone3` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT ' ÷ª˙3',
  `msn` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'MSN',
  `qq` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'QQ',
  `wangwang` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT 'WANGWANG',
  `ability` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '∏ˆ»Àƒ‹¡¶',
  `interest` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '∏ˆ»À∞Æ∫√',
  `others` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '∆‰À˚Àµ√˜',
  `experience` text CHARACTER SET gbk COMMENT 'π§◊˜æ≠¿˙',
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_cache`
--

CREATE TABLE IF NOT EXISTS `zx_user_cache` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `kefu_userid` int(11) DEFAULT NULL,
  `kefu_username` int(11) DEFAULT NULL,
  `kefu_addtime` int(11) DEFAULT NULL,
  `vip_status` int(2) DEFAULT '0',
  `vip_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL,
  `vip_money` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `vip_verify_remark` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `vip_verify_time` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `bbs_topics_num` int(11) DEFAULT '0',
  `bbs_posts_num` int(11) DEFAULT '0',
  `credit` int(11) DEFAULT '0' COMMENT 'ª˝∑÷',
  `account` int(11) DEFAULT '0' COMMENT '’ ªß◊‹∂Ó',
  `account_use` int(11) DEFAULT '0' COMMENT 'ø…”√Ω∂Ó',
  `account_nouse` int(11) DEFAULT '0' COMMENT '∂≥Ω·Ω∂Ó',
  `account_waitin` int(11) DEFAULT '0' COMMENT '¥˙ ’◊‹∂Ó',
  `account_waitintrest` int(11) DEFAULT '0' COMMENT '¥˙ ’¿˚œ¢',
  `account_intrest` int(11) DEFAULT '0' COMMENT 'æª◊¨¿˚œ¢',
  `account_award` int(11) DEFAULT '0' COMMENT 'Õ∂±ÍΩ±¿¯',
  `account_payment` int(11) DEFAULT '0' COMMENT '¥˝ªπ◊‹∂Ó',
  `account_expired` int(11) DEFAULT '0' COMMENT '”‚∆⁄◊‹∂Ó',
  `account_waitvip` int(11) DEFAULT '0' COMMENT 'vipª·∑—',
  `borrow_amount` int(11) DEFAULT '3000' COMMENT 'ΩËøÓ∂Ó∂»',
  `vouch_amount` int(11) NOT NULL DEFAULT '0' COMMENT 'µ£±£∂Ó∂»',
  `borrow_loan` int(11) DEFAULT '0' COMMENT '≥…π¶ΩË≥ˆ',
  `borrow_success` int(11) DEFAULT '0' COMMENT '≥…π¶ΩËøÓ',
  `borrow_wait` int(11) DEFAULT '0' COMMENT 'µ»¥˝¬˙±Í',
  `borrow_paymeng` int(11) DEFAULT '0' COMMENT '¥˝ªπΩËøÓ',
  `friends_apply` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_log`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_sendemail_log`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_trend`
--

CREATE TABLE IF NOT EXISTS `zx_user_trend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `content` text CHARACTER SET gbk,
  `addtime` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='”√ªß≤Ÿ◊˜º«¬º' AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_type`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_typechange`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_user_visit`
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
-- Ë°®ÁöÑÁªìÊûÑ `zx_vip_card`
--

CREATE TABLE IF NOT EXISTS `zx_vip_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(30) CHARACTER SET latin1 NOT NULL COMMENT '∂®“Â Ù–‘',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '≈≈–Ú',
  `city` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT '≥« –',
  `serial_number` varchar(15) CHARACTER SET latin1 NOT NULL COMMENT 'VIPø®∫≈',
  `batch` int(11) NOT NULL COMMENT '…˙≥…≈˙¥Œ',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT '√‹¬Î',
  `create_time` int(11) DEFAULT NULL COMMENT '¥¥Ω® ±º‰',
  `start_date` int(11) DEFAULT NULL COMMENT '”––ß∆⁄ø™ º»’∆⁄',
  `end_date` int(11) DEFAULT NULL COMMENT '”––ß∆⁄Ω· ¯»’∆⁄',
  `is_up_end_date` tinyint(1) DEFAULT '0' COMMENT ' «∑Ò—”∆⁄',
  `vct_name` varchar(40) CHARACTER SET latin1 DEFAULT NULL COMMENT '≥‰÷µø®¿‡–Õ',
  `month_num` tinyint(4) DEFAULT NULL COMMENT '”––ß‘¬ ˝',
  `open_time` int(11) DEFAULT NULL COMMENT 'º§ªÓ ±º‰',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '◊¥Ã¨:0:Œ¥º§ªÓ£¨1’˝≥££¨2∂≥Ω·£¨3Õ£ø®, 4∑‚∫≈',
  `freeze_time` int(11) DEFAULT NULL COMMENT '∂≥Ω· ±º‰',
  `freeze_day` int(11) DEFAULT NULL COMMENT '∂≥Ω·ÃÏ ˝',
  `freeze_times` tinyint(4) DEFAULT '0' COMMENT '∂≥Ω·¥Œ ˝',
  `stop_time` int(11) DEFAULT NULL COMMENT 'Õ£ø® ±º‰',
  `stop_day` int(11) DEFAULT NULL COMMENT 'Õ£ø®ÃÏ ˝',
  `stop_times` tinyint(4) DEFAULT '0' COMMENT 'Õ£ø®¥Œ ˝',
  `create_user` varchar(20) CHARACTER SET latin1 NOT NULL COMMENT '…˙≥…’ﬂ',
  `remark` text CHARACTER SET latin1 COMMENT '±∏◊¢',
  `hits` int(11) DEFAULT NULL COMMENT 'µ„ª˜¥Œ ˝',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒ ±º‰',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_vip_sn` (`serial_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='VIPø®' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_vip_card_type`
--

CREATE TABLE IF NOT EXISTS `zx_vip_card_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '¿‡–ÕID',
  `name` varchar(40) CHARACTER SET latin1 DEFAULT NULL COMMENT '¿‡–Õ√˚≥∆',
  `month_num` tinyint(4) DEFAULT NULL COMMENT '‘¬ ˝',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒ ±º‰',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `month_num_UNIQUE` (`month_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_vip_user`
--

CREATE TABLE IF NOT EXISTS `zx_vip_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(15) CHARACTER SET latin1 NOT NULL COMMENT 'VIPø®∫≈',
  `flag` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '∂®“Â Ù–‘',
  `order` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT '≈≈–Ú',
  `hits` int(11) DEFAULT NULL COMMENT 'µ„ª˜¥Œ ˝',
  `addtime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº” ±º‰',
  `addip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT 'ÃÌº”ip',
  `updatetime` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒ ±º‰',
  `updateip` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '–ﬁ∏ƒip',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_vipu_u` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='VIPø®”√ªß' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_yginfo`
--

CREATE TABLE IF NOT EXISTS `zx_yginfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '”√ªßID',
  `status` int(2) DEFAULT '0' COMMENT '◊¥Ã¨',
  `height` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '…Ì∏ﬂ',
  `minzu` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '√Ò◊Â',
  `jiguan` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ºÆπ·',
  `zhengzhi` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '’˛÷Œ√Ê√≤',
  `techang` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'Ãÿ≥§',
  `marray` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'ªÈ∑Ò',
  `zhuanye` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '◊®“µ',
  `xueli` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '—ß¿˙',
  `idcard` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '…Ì∑›÷§∫≈¬Î',
  `zhiye` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '÷∞“µ',
  `school` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '—ß–£',
  `danwei` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'µ•Œª',
  `dizhi` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT 'µÿ÷∑',
  `linkman` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµ»À',
  `linktel` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '¡™œµµÁª∞',
  `fuwu` text CHARACTER SET gbk,
  `jianli` text CHARACTER SET gbk,
  `liyou` varchar(255) CHARACTER SET gbk DEFAULT NULL COMMENT '…Í«Î¿Ì”…',
  `verify_userid` int(11) DEFAULT NULL COMMENT '…Û∫À»À',
  `verify_time` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À ±º‰',
  `verify_remark` varchar(250) CHARACTER SET gbk DEFAULT NULL COMMENT '…Û∫À±∏◊¢',
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='“Âπ§–≈œ¢' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Ë°®ÁöÑÁªìÊûÑ `zx_zixun_fields`
--

CREATE TABLE IF NOT EXISTS `zx_zixun_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- ÈôêÂà∂ÂØºÂá∫ÁöÑË°®
--

--
-- ÈôêÂà∂Ë°® `zx_assignments`
--
ALTER TABLE `zx_assignments`
  ADD CONSTRAINT `zx_assignments_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- ÈôêÂà∂Ë°® `zx_itemchildren`
--
ALTER TABLE `zx_itemchildren`
  ADD CONSTRAINT `zx_itemchildren_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zx_itemchildren_ibfk_2` FOREIGN KEY (`child`) REFERENCES `zx_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
