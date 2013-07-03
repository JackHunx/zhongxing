<div class="user_action_main topborder">

	<!--用户注册左边 开始-->
	<div class="user_action_reg_left">
		<!--用户注册 开始-->
		<div class="user_action_reg_top"></div>
		<div class="user_action_reg_submit">
			<div class="user_action_reg_a1"></div>
			<div class="user_action_reg_form" style="width:86%">
			你好,<?php echo '<strong id="realname" >'.$realname.'</strong>您的邮箱<strong id="email">'.$email;?></strong> 将收到一封认证邮件，请查收。
成功认证后，你就可以畅快使用站内所有功能。<br><br>

<a href="" id="toemail" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/renzheng.png" align="absmiddle"></a><br><br>

如果没有收到邮箱，请点击此 <a href="javascript:void(0);" onclick="ajaxSendEmail()"><font color="#FF0000">重新激活</font></a>你的邮箱。<br>
<a href="<?php echo Yii::app()->baseUrl.'/index.php?r=User';?>">如果不想认证，请点击这里跳过去</a>
			</div>
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
	 <!--用户注册右边 开始-->
	<div style="float:right; width:200px;">
		<div class="user_action_button" style=" float:right">
			<ul>
				<div><img src="<?php echo Yii::app()->baseUrl?>/images/button_zhuan.gif"></div>
				<span><strong><a href="<?php echo Yii::app()->baseUrl.'/index.php?r=User/invest';?>">我要理财</a></strong><br>更快的时间，更高的效率</span>
			</ul>
			<ul>
				<div><img src="<?php echo Yii::app()->baseUrl?>/images/button_jie.gif"></div>
				<span><strong><a href="<?php echo Yii::app()->baseUrl.'/index.php?r=User/borrow'?>">我要借款</a></strong><br>相信自己，成就未来</span>
			</ul>
		</div>
	</div>
	<!--用户注册右边 结束--></div>