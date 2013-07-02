


<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>众兴投资</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>
	<link href='css/login_index.css' rel='stylesheet'>
	<link href='css/index.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	
	<style type="text/css">
	
	#ie6-warning{ background:rgb(255,255,225) url("/upload/201006/20100628012515690.gif") no-repeat scroll 8px center; position:absolute; top:0; left:0; phperz~com font-size:12px; color:#333; width:97%; padding: 2px 15px 2px 23px; text-align:left; } 
	#ie6-warning a { text-decoration:none; } 
	
/* nav */
#nav{
background:url(./img/img.png) 0 0 no-repeat;
_background:url(./img/img.gif) 0 0 no-repeat;
background-position:0 -99px;
	background-repeat:repeat-x;

	position:relative;width:985px;height:34px;margin:5px auto 30px 0px;background-color:#43a1da;}
#nav ul{margin:0 0 9px 1px; *display:inline-block;height:35px;}
#nav li{vertical-align:bottom;height:35px;width:110px;float:left;list-style:none;text-align:center;font-size:13px;}
#nav li .vertical{display:block;width:2px;height:30px;background:url('./img/wage_earners.png') 0 0 no-repeat;
	_background:url('./img/wage_earners.png') 0 0 no-repeat;background-position: -152px -62px;}
#nav li .v a{font-weight:bold;width:100px;height:14px;line-height:33px;display:block;color:#FFF;float:left;font-family:Arial,Verdana,Tahoma,"宋体";}
#nav li .v a:hover,#nav li .v .sele{background:url('./img/wage_earners.png') 0 0 no-repeat;
	_background:url('./img/wage_earners.png') 0 0 no-repeat; background-position: -152px -62px;width:105px; text-decoration:none;height:33px;line-height:33px;font-size:15px;padding-left:0px;}
#nav .kind_menu{top:35px;height:17px;*height:16px;line-height:20px;vertical-align:middle;position:absolute;left:2px;width:880px;text-align:left;display:none;color:#000;font-size:12px;}
#nav .kind_menu a{color:#000;float:left;text-align:center;width:80px;font-family:Arial,Verdana,Tahoma,"宋体";font-size:12px;}
#nav .kind_menu a:hover{color:#000;border-bottom:2px #369bd7 solid;}
#nav .kind_menu span{font-size:15px;color:#000;line-height:30px;*line-height:26px;float:left }	
#nav .btn{padding:none;margin:0xp 0px 0px 0px;}
.guid{margin-left:10px;}
/* slider */
#slider_nav{margin:5px auto;width:650px;height:200px;border:1px solid #ccc;position:relative;overflow:hidden;}
.conbox{position:absolute;/*必要元素*/}
.switcher{position:absolute;bottom:10px;right:10px;float:right;z-index:99;}
.switcher a{background:#666666;cursor:pointer;float:left;font-family:arial;height:14px;line-height:14px;width:14px;margin:4px;text-align:center;color:white;}
.switcher a.cur,.switcher a:hover{background:#666666;border:1px solid #666666;height:18px;line-height:18px;width:18px;margin:0 2px;color:white;font-weight:800;}

#slider_nav .conbox{width:9999em;}
#slider_nav .conbox div{width:620px;height:250px;overflow:hidden;float:left;}


</style>
		
</head>

<body>

<!--[if lte IE 6]>
        <script type="text/javascript">
         alert('您的浏览器版本太低了');
        window.opener=null;
        window.open('http://localhost/Jquery-ui/zxUI/ieerror.html','_self','');
</script><![endif]-->

	<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="container-fluid">
			<a href="#" class="pull-left logo">
			<img class="logo" src="http://www.1891d.com/themes/61dai/images/logo.gif" alt="log"/>
			</a>
			<!-- top view info
			
			<div class="pull-left span3">众兴投资理财</div>
			
			<!--- end top view -->
			<!-- user dropdown starts -->
		
            
            <!---not login --->
					  <div class="pull-right span3">
                      
					  	<ul class="dashboard-list">
                        <?php
    if (isset(Yii::app()->user->username)) {
        $out = Yii::app()->baseUrl . "/index.php/?r=site/logout";
        $username=Yii::app()->user->username;
        echo <<< ETO
    <li class="pull-left gray">欢迎{$username}</li>
							<li class="pull-left"><a class="guid" href="{$out}" >登出</a>
ETO;
    } else {

        echo <<< ETO
							<li class="pull-left gray">游客</li>
							<li class="pull-left"><a class="guid" href="#" >免费注册 </a></li>
							<li class="pull-left"><a class="guid" href="#" >登录 </a></li>
							<li class="pull-left"><a class="guid" href="#" >分享 </a></li>
ETO;
    }
?>	
							
						
						</ul>
						
						<!--
						<p class="pull-right"><a class="guid" href="#" >分享 </a></p>
						<p class="pull-right"><a class="guid" href="#" >登录 </a></p>
						<p class="pull-right"><a class="guid" href="#" >免费注册 </a></p>
						
						-->
						
					  </div>
					<!---end login -->
					
			
				<div class="btn-group pull-right" >
					
					<!-- login 
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">用户中心</a></li>
						<li class="divider"></li>
						<li><a href="login.html">登出</a></li>
					</ul>
					<!--- end login --->
				</div>
		</div>
	</div>
<!-- end navbar -->
	
	
	<!--
	<div class="headertabnav"><ul><li class="l cursor on"><a href="http://www.ppdai.com/"><span class="l center">首页</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/lend/"><span class="l center">我要借出</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/borrow/"><span class="l center">我要借入</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/account1/"><span class="l center">我的账户</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://help.ppdai.com/"><span class="l center">帮助</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://group.ppdai.com/"><span class="l center">论坛</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/bjbz/cxbz.html"><span class="l center">本金保障</span></a><span class="r vertical"></span></li><li class="r yahei" style="width:230px;display:none;">咨询电话：400-1181-081</li></ul></div>
	<div class="headertabbottom"><ul><li class="l cursor on"><a href="http://www.ppdai.com/">欢迎</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/how_it_works.htm">工作原理</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/law.htm">法律政策</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/fees.htm">资费说明</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/aboutus.htm">关于我们</a></li><li class="l cursor"><a href="http://group.ppdai.com/forum.php?mod=announcement">最新公告</a></li></ul></div>
		--><!--- user guid ---
		<div id="slide" class="row-fluid span7 show-grid">
			<p class="btn-group green ">
			<ul class="dashboard-list">
			<li class="pull-left"><button class="btn btn-large btn-primary"><a class="white" href="<?php echo
    Yii::app()->baseUrl; ?>">首页</a></button>
				<p class="btn-group green">
					<button class="btn btn-primary">test1</button>
					<button class="btn">test2</button>
				</p>
			</li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我要投资</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我要贷款</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我的账号</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">工具箱</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">客服中心</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">借贷论坛</button></li>
			</ul>
			</p>
		</div>
		<!--- end guid --->
		
		<!---- test --->
		
		<div id="nav">
		
		
		
		<ul class="c">
		
			<li class="nav_lishw" id="">
				<span class="v"><a class="white" href="<?php echo Yii::app()->baseUrl; ?>"  class="sele">首页</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" >
					<a href="">欢迎</a>
					<a href="http://www.17sucai.com/">关于我们</a>
					<a href="http://www.17sucai.com/">法律政策</a>
					<a href="http://www.17sucai.com/">资费说明</a>
					<a href="http://www.17sucai.com/">公司证件</a>
					<a href="http://www.17sucai.com/">工作原理</a>
					<a href="http://www.17sucai.com/">人才招聘</a>
					<a href="http://www.17sucai.com/">新闻动态</a>
				
				<!---
				
				-->
				</div>
			</li>
		
			
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">我要投资</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style="display: none;">
				
					<a href="http://www.17sucai.com/">正在投标</a>
			
					<a href="http://www.17sucai.com/">正在担保</a>
					<a href="http://www.17sucai.com/">等待复审</a>
					<a href="http://www.17sucai.com/">成功借款</a>
					<a href="http://www.17sucai.com/">逾期借款</a>
					
					
					</p>
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">我要贷款</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				
				<!-- befor login-->
					<a href="http://www.17sucai.com/">如何借入</a>
					<a href="http://www.17sucai.com/">利息计算器</a>
					<a href="http://www.17sucai.com/">客服咨询</a>
					<!-- after login --
					<a href="http://www.17sucai.com/">借款管理</a>
					<a href="http://www.17sucai.com/">额度管理</a>
					<a href="http://www.17sucai.com/">已满额</a>
				<!-- end -->
					</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="<?php echo Yii::app()->baseUrl.'/index.php?r=User';?>" class="">我的账户</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				<!--- before login -->
				<div>欢迎来到众兴投资</div>
				<!-- after login--
				<p class="btn-group">
					<a href="http://www.17sucai.com/">我是借入者</a>
					<a href="http://www.17sucai.com/">我是借出者</a>
					
					
					</p>
				<!--- end login-->
				</div>
			</li>
			<li class="" id="">
				<span class="v"><a class="whiete" href="http://www.17sucai.com/" class="">工具箱</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				
					<a href="http://www.17sucai.com/">利息计算</a>
					<a href="http://www.17sucai.com/">手机号码查询</a>
					<a href="http://www.17sucai.com/">ip地址查询</a>
					
					
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">帮助</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
					<a href="http://www.17sucai.com/">帮助中心</a>
					<a href="http://www.17sucai.com/">客服中心</a>
					
					
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">借贷论坛</a></span> 
				<div class="kind_menu" style=" display: none;">
					<a href="http://www.17sucai.com/">进入论坛</a>
				</div>
			</li>
			
		</ul>
		
	</div>
	<!--nav-->






		<!--- test end --->
 		
	

  
	
	
	
	
	<!-- topbar ends -->
	<?php } ?>
	<div>
		<div class="row-fluid">
		<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>你的浏览器需要 <a href="http://jingyan.baidu.com/article/6f2f55a1e1b78db5b93e6cc5.html" target="_blank">JavaScript</a> 运行才能正常浏览.</p>
				</div>
			</noscript>
			
			<div id="content">
			<!-- content starts -->
			<?php } ?>
<!--- content begin --->
<div class="wrap950 " style="margin-top:0">
	<!--左边的导航 开始-->
	<div class="user_left">
		
		<script type="text/javascript">
 function changeUserMenu(id){
    var mu = $("#user_title_"+id);
    var qe = $("#user_menu_"+id);
    if(qe.css('display')=='none'){
        mu.removeClass('title1').addClass('title');
        qe.css('display', 'block');
    }else{
        mu.removeClass('title').addClass('title1');
        qe.css('display', 'none');
    }
}
 </script>

 
<div class="user_menus">
	<div class="title" id="user_title_touzi"><span onclick="changeUserMenu('touzi')">&nbsp;</span>我是投资者</div>
	<div class="menu">
		<ul id="user_menu_touzi" style="display:block">
			<li><a href="/invest/index.html" target="_blank">我要投资</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/succes">已成功投资的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/bid">正在投标的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/tender_vouch">我担保的借款</a></li>
			<!--
			<li><a href="/index.php?user&q=code/borrow/appraisal">我的评价</a></li>
			<li><a href="/index.php?user&q=code/borrow/attention">我关注的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_reply">贷款者回复</a></li>
			-->
		</ul>
	</div>
</div>
 

  
<div class="user_menus">
	<div class="title" id="user_title_jiekuan"><span onclick="changeUserMenu('jiekuan')">&nbsp;</span>我是借款者</div>
	<div class="menu">
		<ul id="user_menu_jiekuan">
			<li><a href="borrow/index.html" target="_blank">我要借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/publish">正在招标的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/unpublish">尚未发布的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/repayment">正在还款的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/loanermsg">投资者回复</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/limitapp">额度申请</a></li>
		</ul>
	</div>
</div>
 
 
<div class="user_menus">
	<div class="title" id="user_title_zijin"><span onclick="changeUserMenu('zijin')">&nbsp;</span>资金管理</div>
	<div class="menu">
		<ul id="user_menu_zijin">
			<li><a href="/index.php?user&amp;q=code/account">帐户详情</a></li>
			<li><a href="/index.php?user&amp;q=code/account/bank">银行帐户</a></li>
			<li><a href="/index.php?user&amp;q=code/account/cash_new">帐户提现</a></li>
			<li><a href="/index.php?user&amp;q=code/account/recharge_new">帐户充值</a></li>
			<li><a href="/index.php?user&amp;q=code/account/cash">提现记录</a></li>
			<li><a href="/index.php?user&amp;q=code/account/recharge">充值记录</a></li>
			<li><a href="/index.php?user&amp;q=code/account/log">资金记录</a></li>
		</ul>
	</div>
</div>
 
 <!--
<div class="user_menus">
	<div class="title" id="user_title_kefu" ><span onclick="changeUserMenu('kefu')">&nbsp;</span>客户服务</div>
	<div class="menu">
		<ul id="user_menu_kefu">
			<li><a href="/index.php?user&q=view#info">我要提问</a></li>
			<li><a href="/index.php?user&q=view#info">在线客户</a></li>
		</ul>
	</div>
</div> 
-->	

<div class="user_menus">
	<div class="title" id="user_title_shezhi"><span onclick="changeUserMenu('shezhi')">&nbsp;</span>基本设置</div>
	<div class="menu">
		<ul id="user_menu_shezhi">
			<li><a href="/index.php?user&amp;q=code/userinfo">填写个人资料</a></li>
			<li><a href="/index.php?r=User/avatar">更换头像</a></li>
			<li><a href="/index.php?user&amp;q=code/user/privacy">设置隐私</a></li>
			<li><a href="/index.php?user&amp;q=code/message">站内信</a></li>
			<li><a href="/index.php?user&amp;q=code/remind">提醒设置</a></li>
		</ul>
	</div>
</div>

<div class="user_menus">
	<div class="title" id="user_title_renzheng"><span onclick="changeUserMenu('renzheng')">&nbsp;</span>认证中心</div>
	<div class="menu">
		<ul id="user_menu_renzheng">
			<li><a href="/index.php?user&amp;q=code/user/realname">实名认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/email_status">邮箱认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/phone_status">手机认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/video_status">视频认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/scene_status">现场认证</a></li>
			<li><a href="/index.php?user&amp;q=code/attestation">资料证明</a></li>
		</ul>
	</div>
</div>


<div class="user_menus">
	<div class="title" id="user_title_haoyou"><span onclick="changeUserMenu('haoyou')">&nbsp;</span>好友管理</div>
	<div class="menu">
		<ul id="user_menu_haoyou">
			<li><a href="/index.php?user&amp;q=code/user/reginvite">邀请好友</a></li>
			<li><a href="/index.php?user&amp;q=code/user/request">好友请求</a></li>
			<li><a href="/index.php?user&amp;q=code/user/myfriend">我的好友</a></li>
			<li><a href="/index.php?user&amp;q=code/user/black">我的黑名单</a></li>
		</ul>
	</div>
</div>



<div class="user_menus">
	<div class="title" id="user_title_safe"><span onclick="changeUserMenu('safe')">&nbsp;</span>安全中心</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&amp;q=code/user/userpwd">修改登录密码</a></li>
			<li><a href="/index.php?user&amp;q=code/user/paypwd">修改支付密码</a></li>
			<li><a href="/index.php?user&amp;q=code/user/protection">密码保护</a></li>
		</ul>
	</div>
</div>

<!--
<div class="user_menus">
	<div class="title" id="user_title_jifen" ><span onclick="changeUserMenu('jifen')">&nbsp;</span>礼品折扣</div>
	<div class="menu">
		<ul id="user_menu_jifen">
			<li><a href="/index.php?user&q=view#info">积分礼品</a></li>
			<li><a href="/index.php?user&q=view#info">折扣商家</a></li>
		</ul>
	</div>
</div>
-->
<div class="user_menus">
	<div class="title" id="user_title_shequ"><span onclick="changeUserMenu('shequ')">&nbsp;</span>社区管理</div>
	<div class="menu">
		<ul id="user_menu_shequ">
			<li><a href="/index.php?user&amp;q=view#info">我的话题</a></li>
		</ul>
	</div>
</div>
	</div>
	<!--左边的导航 结束-->

<?php
echo $content;
?>
<!--- content end -->
		
			<!-- content ends -->
			</div><!--/#content.span10-->
		
		</div><!--/fluid-row-->
		
		
		

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

	</div><!--/.fluid-container-->
	<!-- footer begin -->
<div>
<div class="footer_nav">
	<div class="indexbottom"></div>
		<footer>
			
		<div>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">首页</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">关于我们</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">联系我们</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">客服中心</a> </p>
			<div class="pull-right">
		
				<p class="pull-right">&copy; <a href="http://usman.it" target="_blank">众兴投资</a> <?php echo
date('Y') ?></p>
				<p>ICP证:<a href="http://usman.it" target="_blank">鲁ICP备13008504号-1</a></p>
				<p>统一客服热线:400-080-1891 公司地址:山东省临沂市新华路12号万阅城A座902</p>
				</div>
			</div>
				
		</footer>
		
		</div>
	
		</div>
<!--footer end -->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->

	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	<script src="js/jquery.Xslider.js"></script>
	<script type="text/javascript">
    var site_url = window.location.href.toLowerCase();	
    //alert(site_url);
	switch (true) {
		case site_url.indexOf("dfg") > 0 || site_url.indexOf("/fafds") > 0 : 
		//判断当前频道属于哪个根目录模块就设置频道标签高亮
			$("#nav li").attr("class","");
			$("#nav li").eq(1).attr("class","nav_lishw"); //设置当前频道标签高亮
			$(".nav_lishw .v a").attr("class","sele");
			$(".nav_lishw .kind_menu").show();
			break;
            case  site_url.indexOf("index.php?r=user") > 0 : 
		//判断当前频道属于哪个根目录模块就设置频道标签高亮
			$("#nav li").attr("class","");
			$("#nav li").eq(3).attr("class","nav_lishw"); //设置当前频道标签高亮
			$(".nav_lishw .v a").attr("class","sele");
			$(".nav_lishw .kind_menu").show();
			break;
		default :
			$("#nav li").attr("class","");
			$("#nav li").eq(0).attr("class","nav_lishw");
			$(".nav_lishw .v a").attr("class","sele");
			$(".nav_lishw .kind_menu").show();
	}
	
	$("#nav li").hover(
		function(){
			clearTimeout(setTimeout("0")-1);
			$("#nav .kind_menu").hide(); 
			$("#nav li .v .sele").attr("class","shutAhover");
			$(this).attr("id","nav_hover");
			
			$("#nav_hover .v a").attr("class","sele");
			$("#nav_hover .kind_menu").show(); 
		},
		function(){
			
			if($(this).attr("class") != "nav_lishw"){
				$("#nav_hover .v .sele").attr("class","");
				
				$("#nav_hover .kind_menu").hide(); 
			}
			$(this).attr("id","")
			$("#nav li .v .shutAhover").attr("class","sele");
			setTimeout(function(){
				$(".nav_lishw .kind_menu").show();
				$(".nav_lishw .v a").attr("class","sele");
			},50); 
		}
	);
	//焦点图相关
	$(document).ready(function(){
	
	// 焦点图片水平滚动
	$("#slider_nav").Xslider({
		// 默认配置
		affect: 'scrollx', //效果  有scrollx|scrolly|fade|none
		speed: 800, //动画速度
		space: 6000, //时间间隔
		auto: true, //自动滚动
		trigger: 'mouseover', //触发事件 注意用mouseover代替hover
		conbox: '.conbox', //内容容器id或class
		ctag: 'div', //内容标签 默认为<a>
		switcher: '.switcher', //切换触发器id或class
		stag: 'a', //切换器标签 默认为a
		current:'cur', //当前切换器样式名称
		rand:false //是否随机指定默认幻灯图片
	});
	
	// 焦点图片垂直滚动
	$("#slider1").Xslider({
		affect:'scrolly',
		ctag: 'div',
		speed:400
	});
	
	// 焦点图片淡隐淡现
	$("#slider3").Xslider({
		affect:'fade',
		ctag: 'div'
	});
	
	// 选项卡
	$("#slider4").Xslider({
		affect:'none',
		ctag: 'div',
		speed:10
	});
	
	
});
	
</script>
	
	
	<?php //Google Analytics code for tracking my demo site, you can remove this.
if ($_SERVER['HTTP_HOST'] == 'usman.it') { ?>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26532312-1']);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
			})();
		</script>
		
	<?php } ?>
	
	
	
	
</body>
</html>

