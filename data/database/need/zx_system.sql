-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 07 月 17 日 09:21
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
(4, '网站网址', 'con_weburl', 'http://192.168.0.253/zhongxing', 0, 1, '0'),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
