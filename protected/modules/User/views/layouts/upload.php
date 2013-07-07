<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/user'); ?>
<div class="user_right">
		<div class="user_right_menu">
		
			<ul id="validate_tab">
				<li class="title" ><a href="">证明信息 </a></li>
				<li><a href="">证明材料</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/upload/one">单个资料上传</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/upload/more">多个资料上传</a></li>
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