<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/admin');?>

<div class="notification png_bg">
				<div>
		<a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account">【账户信息】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/rechargeLog">【充值记录】</a>
       <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/cash">【申请提现】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/cash">【提现成功】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/">【添加充值】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account">【扣除费用】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/PaymentList">【<font color="red">账号列表</font>】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/addPayment">【<font color="red">添加账号</font>】</a>
				</div>
			</div>  
            
<?php echo $content;?>

<?php $this->endContent();?>
