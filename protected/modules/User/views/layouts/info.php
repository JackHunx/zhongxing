<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/user'); ?>
<div class="user_right">
		<div class="user_right_menu">
			<ul id="validate_tab">
				<li class="title" ><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info">个人资料</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/building">房产资料</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/company">单位资料</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/firm">私营业主</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/finance">财务状况</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/contact">联系方式</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/mate">配偶资料</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/edu">教育背景</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/info/job">其他</a></li>
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