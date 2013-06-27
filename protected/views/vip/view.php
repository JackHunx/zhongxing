<?php
/* @var $this VipController */
/* @var $model Vip */


?>

<h1>View Vip #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'kefu_userid',
		'kefu_username',
		'kefu_addtime',
		'vip_status',
		'vip_remark',
		'vip_money',
		'vip_verify_remark',
		'vip_verify_time',
		'bbs_topics_num',
		'bbs_posts_num',
		'credit',
		'account',
		'account_use',
		'account_nouse',
		'account_waitin',
		'account_waitintrest',
		'account_intrest',
		'account_award',
		'account_payment',
		'account_expired',
		'account_waitvip',
		'borrow_amount',
		'vouch_amount',
		'borrow_loan',
		'borrow_success',
		'borrow_wait',
		'borrow_paymeng',
		'friends_apply',
	),
)); ?>
