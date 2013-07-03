<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/user'); ?>

<div class="user_right">
		<div class="user_right_menu">
						<ul id="validate_tab">
				<li class="title"><a href="index.php?r=User/validate">修改个人信息 </a></li>
				<li><a href="index.php?r=User/validate/avatar">实名认证</a></li>
				<li><a href="index.php?r=User/validate/email">邮箱认证</a></li>
				<li><a href="index.php?r=User/validate/phone">手机认证</a></li>
				<li><a href="index.php?r=User/validate/video">视频认证</a></li>
				<li><a href="index.php?r=User/validate/scene">现场认证</a></li>
				<li><a href="index.php?r=User/avatar">头像信息</a></li>
				<li><a href="index.php?r=User/validate/privacy">设置隐私</a></li>
			</ul>
					</div>
		
		<div class="user_right_main">
		
				<!--content 开始-->
		<?php echo $content;?>
		<!--content 结束-->
		
		
		</div>
<!--用户中心的主栏目 结束-->
<div class="footer">
	<p> </p>

	<p><a href="http://www.miibeian.gov.cn/" target="_blank"></a></p>
	<p>众兴投资 Copyright 2011-2015</p>
</div>

</div>
<!-- sidebar -->
</div>
<?php $this->endContent(); ?>