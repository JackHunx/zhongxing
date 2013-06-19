-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 06 月 19 日 10:10
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
-- 表的结构 `zx_account_payment`
--

CREATE TABLE IF NOT EXISTS `zx_account_payment` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext,
  `fee` int(10) DEFAULT '0',
  `fee_type` int(2) DEFAULT NULL,
  `max_money` int(10) DEFAULT NULL,
  `max_fee` int(10) DEFAULT NULL,
  `description` longtext,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_ad`
--

CREATE TABLE IF NOT EXISTS `zx_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nid` varchar(20) NOT NULL DEFAULT '',
  `order` int(10) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `litpic` varchar(100) NOT NULL DEFAULT '',
  `timelimit` int(2) NOT NULL DEFAULT '0',
  `firsttime` varchar(20) NOT NULL DEFAULT '',
  `endtime` varchar(20) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `endcontent` text NOT NULL,
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_area`
--

CREATE TABLE IF NOT EXISTS `zx_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `domain` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`),
  KEY `nidp` (`nid`,`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3577 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_article_fields`
--

CREATE TABLE IF NOT EXISTS `zx_article_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  `files` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_credits`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_credits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `creditscode` char(45) DEFAULT NULL,
  `creditsname` char(45) DEFAULT NULL,
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
  `word` char(45) DEFAULT NULL,
  `replaceto` char(45) DEFAULT NULL,
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
  `name` varchar(45) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `rules` text,
  `picurl` varchar(100) DEFAULT NULL,
  `admins` varchar(255) DEFAULT NULL,
  `today_num` int(10) unsigned DEFAULT '0',
  `topics_num` int(10) unsigned DEFAULT '0',
  `posts_num` int(10) unsigned DEFAULT '0',
  `last_postname` varchar(45) DEFAULT NULL,
  `last_postuser` varchar(45) DEFAULT NULL,
  `last_postusername` varchar(30) DEFAULT NULL,
  `last_posttime` int(10) unsigned DEFAULT '0',
  `last_postid` int(10) unsigned DEFAULT '0',
  `isverify` tinyint(1) unsigned DEFAULT '0',
  `forumpass` varchar(45) DEFAULT NULL,
  `forumusers` text,
  `forumgroups` text,
  `showtype` tinyint(1) unsigned DEFAULT '0',
  `ishidden` tinyint(1) unsigned DEFAULT '0',
  `order` int(10) unsigned DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
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
  `username` varchar(45) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text,
  `edittime` int(10) unsigned DEFAULT '0',
  `iscover` tinyint(1) unsigned DEFAULT '0',
  `isverify` int(1) unsigned DEFAULT '0',
  `verifydesc` varchar(255) DEFAULT NULL,
  `addtime` varchar(11) DEFAULT NULL,
  `addip` varchar(15) DEFAULT NULL,
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
  `rewardcredits` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_bbs_settings`
--

CREATE TABLE IF NOT EXISTS `zx_bbs_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `value` varchar(250) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
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
  `username` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `content` text,
  `posttime` int(10) unsigned DEFAULT '0',
  `edittime` int(10) unsigned DEFAULT '0',
  `ordertime` int(10) unsigned DEFAULT '0',
  `last_replytime` varchar(30) DEFAULT NULL,
  `last_replyuser` int(11) DEFAULT NULL,
  `last_replyusername` varchar(30) DEFAULT NULL,
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
  `verifydesc` varchar(255) DEFAULT NULL,
  `isresolved` tinyint(1) unsigned DEFAULT '0',
  `attachicon` varchar(45) DEFAULT NULL,
  `highlight` varchar(20) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topictype` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_amount`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_amount` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT '',
  `account` int(11) NOT NULL DEFAULT '0',
  `newaccount` decimal(11,0) DEFAULT '0',
  `oldaccount` int(11) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `addtime` varchar(30) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) DEFAULT NULL,
  `verify_time` varchar(10) DEFAULT NULL,
  `verify_user` int(11) DEFAULT NULL,
  `addip` varchar(30) NOT NULL DEFAULT '',
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
  `type` varchar(50) NOT NULL DEFAULT '',
  `amount_type` varchar(50) NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_total` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_borrow_amountlog1`
--

CREATE TABLE IF NOT EXISTS `zx_borrow_amountlog1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `amount_type` varchar(50) NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_total` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
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
  `account` varchar(20) NOT NULL DEFAULT '',
  `vouch_account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `content` text CHARACTER SET gbk NOT NULL,
  `award_fund` varchar(10) CHARACTER SET gbk NOT NULL DEFAULT '',
  `award_account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_cache`
--

CREATE TABLE IF NOT EXISTS `zx_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) DEFAULT NULL,
  `user_num` int(11) DEFAULT NULL,
  `user_online_num` int(11) DEFAULT '0',
  `user_online_time` varchar(30) DEFAULT NULL,
  `last_user` varchar(20) DEFAULT NULL,
  `bbs_first_visit` int(20) DEFAULT '0',
  `bbs_topics_num` int(11) DEFAULT NULL,
  `bbs_posts_num` int(11) DEFAULT NULL,
  `bbs_today_topics` int(11) DEFAULT NULL,
  `bbs_today_posts` int(11) DEFAULT NULL,
  `bbs_yesterday_topics` int(11) DEFAULT NULL,
  `bbs_yesterday_posts` int(11) DEFAULT NULL,
  `bbs_most_topics` int(11) DEFAULT NULL,
  `bbs_most_posts` int(11) DEFAULT NULL,
  `borrow_account` varchar(11) DEFAULT '0',
  `borrow_success` varchar(20) DEFAULT '0',
  `borrow_num` int(10) DEFAULT '0',
  `borrow_successnum` varchar(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_cms_article`
--

CREATE TABLE IF NOT EXISTS `zx_cms_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `littitle` varchar(250) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `is_jump` int(1) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `jumpurl` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` text,
  `order` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `comment` int(11) DEFAULT '0',
  `is_comment` int(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
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
-- 表的结构 `zx_company_fields`
--

CREATE TABLE IF NOT EXISTS `zx_company_fields` (
  `aid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `zx_editor`
--

CREATE TABLE IF NOT EXISTS `zx_editor` (
  `editor_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `api` text,
  PRIMARY KEY (`editor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_fields`
--

CREATE TABLE IF NOT EXISTS `zx_fields` (
  `fields_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `input` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` varchar(255) DEFAULT NULL,
  `select` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`fields_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_flag`
--

CREATE TABLE IF NOT EXISTS `zx_flag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_help_type`
--

CREATE TABLE IF NOT EXISTS `zx_help_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `pid` int(2) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `content` text,
  `list_name` varchar(200) DEFAULT NULL,
  `content_name` varchar(200) DEFAULT NULL,
  `index_tpl` varchar(250) DEFAULT NULL,
  `list_tpl` varchar(250) DEFAULT NULL,
  `content_tpl` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_linkage_type`
--

CREATE TABLE IF NOT EXISTS `zx_linkage_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_liuyan`
--

CREATE TABLE IF NOT EXISTS `zx_liuyan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `litpic` varchar(255) DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `reply` text,
  `reply_id` int(11) DEFAULT '0',
  `replytime` varchar(50) DEFAULT NULL,
  `replyip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_liuyan_set`
--

CREATE TABLE IF NOT EXISTS `zx_liuyan_set` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_module`
--

CREATE TABLE IF NOT EXISTS `zx_module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default_field` varchar(200) DEFAULT NULL,
  `content` text,
  `version` varchar(10) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `fields` int(2) DEFAULT NULL,
  `purview` text,
  `remark` text,
  `issent` int(2) DEFAULT NULL,
  `title_name` varchar(100) DEFAULT NULL,
  `onlyone` int(2) DEFAULT NULL,
  `index_tpl` varchar(50) DEFAULT NULL,
  `list_tpl` varchar(50) DEFAULT NULL,
  `content_tpl` varchar(50) DEFAULT NULL,
  `search_tpl` varchar(100) DEFAULT NULL,
  `article_status` int(2) DEFAULT NULL,
  `visit_type` int(2) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
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
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `status` smallint(3) unsigned DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext,
  `fee_type` int(2) DEFAULT NULL,
  `max_money` int(10) DEFAULT NULL,
  `max_fee` int(10) DEFAULT NULL,
  `description` longtext,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_payment_type`
--

CREATE TABLE IF NOT EXISTS `zx_payment_type` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `description` longtext,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_remind_type`
--

CREATE TABLE IF NOT EXISTS `zx_remind_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `addtime` int(10) DEFAULT '0',
  `addip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `url` char(60) NOT NULL DEFAULT '',
  `name` char(100) NOT NULL DEFAULT '',
  `pic` char(200) NOT NULL DEFAULT '',
  `summary` char(250) NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_scrollpic_type`
--

CREATE TABLE IF NOT EXISTS `zx_scrollpic_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_site`
--

CREATE TABLE IF NOT EXISTS `zx_site` (
  `site_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `pid` int(2) DEFAULT '0',
  `rank` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `aurl` varchar(255) DEFAULT NULL,
  `isurl` varchar(2) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `style` varchar(2) DEFAULT NULL,
  `litpic` varchar(50) DEFAULT NULL,
  `content` text,
  `list_name` varchar(200) DEFAULT NULL,
  `content_name` varchar(200) DEFAULT NULL,
  `sitedir` varchar(200) DEFAULT NULL,
  `visit_type` varchar(200) DEFAULT NULL,
  `index_tpl` varchar(250) DEFAULT NULL,
  `list_tpl` varchar(250) DEFAULT NULL,
  `content_tpl` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_amountapply`
--

CREATE TABLE IF NOT EXISTS `zx_user_amountapply` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_new` decimal(11,2) DEFAULT '0.00',
  `account_old` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` int(11) DEFAULT '0',
  `addtime` varchar(30) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) DEFAULT NULL,
  `verify_time` varchar(10) DEFAULT NULL,
  `verify_user` int(11) DEFAULT NULL,
  `addip` varchar(30) NOT NULL DEFAULT '',
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
  `type` varchar(50) NOT NULL DEFAULT '',
  `amount_type` varchar(50) NOT NULL DEFAULT '',
  `account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_all` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_use` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account_nouse` decimal(11,2) NOT NULL DEFAULT '0.00',
  `remark` text NOT NULL,
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_log`
--

CREATE TABLE IF NOT EXISTS `zx_user_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `query` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=495 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_sendemail_log`
--

CREATE TABLE IF NOT EXISTS `zx_user_sendemail_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `msg` text,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_type`
--

CREATE TABLE IF NOT EXISTS `zx_user_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `purview` text,
  `order` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_user_typechange`
--

CREATE TABLE IF NOT EXISTS `zx_user_typechange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `status` int(2) NOT NULL DEFAULT '0',
  `old_type` varchar(10) NOT NULL DEFAULT '',
  `new_type` varchar(10) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `addip` varchar(20) NOT NULL DEFAULT '',
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
  `addip` varchar(30) DEFAULT NULL,
  `addtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zx_zixun_fields`
--

CREATE TABLE IF NOT EXISTS `zx_zixun_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
