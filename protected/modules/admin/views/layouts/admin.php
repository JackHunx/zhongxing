<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/admin/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/admin/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/admin/tab.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/admin/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/admin/facebox.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/admin/jquery.wysiwyg.js"></script>


</head>
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="<?php echo Yii::app()->baseUrl;?>/images/admin//logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile"><?php echo Yii::app()->user->username;?></a>, 你有 <a href="#messages" rel="modal" title="3 Messages">x 条未读信息</a><br />
				<br />
				<?php echo CHtml::link('后台首页',Yii::app()->createUrl('admin'));?> | <a href="<?php echo Yii::app()->baseUrl;?>/index.php" target="_blank" title="View the Site">前台首页</a> | <a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=site/logout" title="Sign Out">退出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						管理首页
					</a>  
                    <ul>
						
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin">首页</a></li> <!-- Add class "current" to sub menu items also -->
						
					</ul>     
				</li>
				
				<li> 
					<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/verify" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					认证管理
					</a>
					<ul>
						
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/verify">认证列表</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/verify/realname">实名认证</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/verify/vip">VIP认证</a></li>
					</ul>
				</li>
				
				<li>
					<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/audit" class="nav-top-item">
						审核管理
					</a>
					<ul>
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/audit/upload">上传资料</a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>
				
				
				
				<li>
					<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/user" class="nav-top-item">
						用户管理
					</a>
					<ul>
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/user">用户列表</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/user/info">用户信息</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/user/vip">VIP用户</a></li>
					</ul>
				</li>
                <li>
					<a href="#" class="nav-top-item">
						文章管理
					</a>
					<ul>
						<li><a href="#">文章列表</a></li>
						<li><a href="#">文章分类</a></li>
					</ul>
				</li>
                
                <li>
					<a href="#" class="nav-top-item">
						论坛管理
					</a>
					<ul>
						<li><a href="#">论坛参数</a></li>
						<li><a href="#">版块管理</a></li>
						<li><a href="#">帖子管理</a></li>
						<li><a href="#">主题管理</a></li>
					</ul>
				</li>      
				<li>
					<a href="#" class="nav-top-item">
						网站管理
					</a>
					<ul>
						<li><a href="#">滚动图片</a></li>
						<li><a href="#">站内公告</a></li>
						
					</ul>
				</li> 
				<li>
					<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/system" class="nav-top-item">
						系统设置
					</a>
					<ul>
						<li><a href="#">系统参数</a></li>
						<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/system/email">邮箱设置</a></li>
						<li><a href="#">数据库管理</a></li>
						
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<!-- content begin-->
        <div id="main-content">
<?php echo $content;?>
</div>
		<!-- End #main-content -->

	</div></body>
</html>
