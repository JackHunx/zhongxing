<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/user'); ?>

<div class="user_right">
		<div class="user_right_menu">
			<ul id="validate_tab">
				<li class="title" >我的账户信息</li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account">帐户详情</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/bank">银行账号</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/recharge">帐户充值</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/rechargeLog">充值记录</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/cash">帐户提现</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/cashLog">提现记录</a></li>
				<li><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/log">资金明细</a></li>
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