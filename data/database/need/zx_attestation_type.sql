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

--
-- 转存表中的数据 `zx_attestation_type`
--

INSERT INTO `zx_attestation_type` (`type_id`, `name`, `order`, `status`, `jifen`, `summary`, `remark`, `addtime`, `addip`) VALUES
(1, '其他能说明您收入、资产、职务或素质的有效资料（凡不属于以上内容的都放在此）', '10', 1, 0, '', '', '1290221365', '192.168.7.253'),
(2, '其他借款说明', '10', 1, 0, '', '', '1290221472', '192.168.7.253'),
(3, '信用报告', '10', 1, 0, '', '', '1290221481', '192.168.7.253'),
(4, '借款承诺书', '10', 1, 0, '', '', '1290221508', '192.168.7.253'),
(5, '手机通话记录清单（最近2个月）', '10', 1, 0, '', '', '1290221519', '192.168.7.253'),
(6, '固定电话通话记录清单（最近2个月）', '10', 1, 0, '', '', '1290221528', '192.168.7.253'),
(7, '家人身份证背面', '10', 1, 0, '', '', '1290221554', '192.168.7.253'),
(8, '家人身份证正面', '10', 1, 0, '', '', '1290221611', '192.168.7.253'),
(9, '结婚证', '10', 1, 0, '', '', '1290221625', '192.168.7.253'),
(10, '户口本', '10', 1, 0, '', '', '1290221635', '192.168.7.253'),
(11, '学位证书或毕业证书', '10', 1, 0, '', '', '1290221648', '192.168.7.253'),
(12, '近3个月银行代发工资记录或个人转账存款记录', '10', 1, 0, '', '', '1290221670', '192.168.7.253'),
(13, '劳动合同或单位证明或工作证', '10', 1, 0, '', '', '1290221680', '192.168.7.253'),
(14, '公司银行流水（近三个月）', '10', 1, 0, '', '', '1290221692', '192.168.7.253'),
(15, '机构代码证', '10', 1, 0, '', '', '1290221702', '192.168.7.253'),
(16, '营业执照副本（需要彩色）', '10', 1, 0, '', '', '1290221717', '192.168.7.253'),
(17, '水费发票或电费发票或煤气发票（最近2个月）', '10', 1, 0, '', '', '1290221765', '192.168.7.253'),
(18, '居住地租赁合同', '10', 1, 0, '', '', '1290221780', '192.168.7.253'),
(19, '房产证', '10', 1, 25, '', '', '1290221790', '192.168.7.253'),
(20, '生活照', '10', 1, 0, '', '', '1290221809', '192.168.7.253'),
(21, '国税证', '10', 1, 0, '', '', '1290224402', '192.168.7.253'),
(22, '地税证', '10', 1, 0, '', '', '1290224413', '192.168.7.253'),
(23, '驾驶证', '10', 1, 0, '', '', '1290224431', '192.168.7.253'),
(24, '行驶证', '10', 1, 20, '', '', '1290224442', '192.168.7.253'),
(25, '社保', '10', 1, 0, '', '', '1290247374', '192.168.7.253'),
(26, '住房公积金', '10', 1, 0, '', '', '1290247387', '192.168.7.253'),
(27, '居住证(暂住证)', '10', 1, 5, '', '', '1291959716', '192.168.7.253'),
(28, '具体见说明', '10', 1, 0, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
