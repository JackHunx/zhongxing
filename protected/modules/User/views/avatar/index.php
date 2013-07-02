
<div class="user_right">
		<div class="user_right_menu">
						<ul>
				<li class="title"><a href="index.php?user&amp;q=code/user">修改个人信息 </a></li>
				<li><a href="index.php?user&amp;q=code/user/realname">实名认证</a></li>
				<li><a href="index.php?user&amp;q=code/user/email_status">邮箱认证</a></li>
				<li><a href="index.php?user&amp;q=code/user/phone_status">手机认证</a></li>
				<li><a href="index.php?user&amp;q=code/user/video_status">视频认证</a></li>
				<li><a href="index.php?user&amp;q=code/user/scene_status">现场认证</a></li>
				<li class="current"><a href="index.php?user&amp;q=code/user/avatar">头像信息</a></li>
				<li><a href="index.php?user&amp;q=code/user/privacy">设置隐私</a></li>
			</ul>
					</div>
		
		<div class="user_right_main">
		
				<!--头像 开始-->
		<div class="user_help">请上传你网站的头像</div>
		<div><img id="avatar" src=""></div>
		
        <?php 
        $this->widget('ext.avatar.AvatarUpload',array(
        'id'=>'avatarUpload',
        
        ));






 

?>
        <!--
        <div> <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="447" height="245" id="mycamera" align="middle">
				<param name="allowScriptAccess" value="always">
				<param name="scale" value="exactfit">
				<param name="wmode" value="transparent">
				<param name="quality" value="high">
				<param name="bgcolor" value="#ffffff">
				<param name="movie" value="http://www.1891d.com/plugins/avatar/images/camera.swf?inajax=1&amp;appid=1&amp;input=fc76gglr7Qqe5bcQUUgJLtVNdwoPhXqC%2FG9cYEQatl%2BT3fuF3OAkDWoOZVhMHXhfDeVDW1WU64TWG1OwX2N435aXsS4NUytt04nLjE4wA8qSriDV8zL9aqM&amp;agent=fff58601bea52c08a11e9de97e92dd62&amp;ucapi=http%3A%2F%2Fwww.1891d.com%2Fplugins%2Favatar&amp;avatartype=virtual">
				<param name="menu" value="false">
				<embed src="http://www.1891d.com/plugins/avatar/images/camera.swf?inajax=1&amp;appid=1&amp;input=fc76gglr7Qqe5bcQUUgJLtVNdwoPhXqC%2FG9cYEQatl%2BT3fuF3OAkDWoOZVhMHXhfDeVDW1WU64TWG1OwX2N435aXsS4NUytt04nLjE4wA8qSriDV8zL9aqM&amp;agent=fff58601bea52c08a11e9de97e92dd62&amp;ucapi=http%3A%2F%2Fwww.1891d.com%2Fplugins%2Favatar&amp;avatartype=virtual" quality="high" bgcolor="#ffffff" width="447" height="245" name="mycamera" align="middle" allowscriptaccess="always" allowfullscreen="false" scale="exactfit" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
			</object></div>-->
		<div class="user_right_foot">
        <!--
		* 温馨提示：头像现在有三种，大，中，小
        -->
		</div>
		<!--头像 结束-->
		
		
		</div>
<!--用户中心的主栏目 结束-->
<div class="footer">
	<p> </p>

	<p><a href="http://www.miibeian.gov.cn/" target="_blank"></a></p>
	<p>众兴投资 Copyright 2011-2015</p>
</div>

</div>