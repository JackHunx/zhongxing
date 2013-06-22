<?php
/* @var $this UserCacheController */
/* @var $data UserCache */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kefu_userid')); ?>:</b>
	<?php echo CHtml::encode($data->kefu_userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kefu_username')); ?>:</b>
	<?php echo CHtml::encode($data->kefu_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kefu_addtime')); ?>:</b>
	<?php echo CHtml::encode($data->kefu_addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_status')); ?>:</b>
	<?php echo CHtml::encode($data->vip_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_remark')); ?>:</b>
	<?php echo CHtml::encode($data->vip_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_money')); ?>:</b>
	<?php echo CHtml::encode($data->vip_money); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_verify_remark')); ?>:</b>
	<?php echo CHtml::encode($data->vip_verify_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_verify_time')); ?>:</b>
	<?php echo CHtml::encode($data->vip_verify_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_topics_num')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_topics_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbs_posts_num')); ?>:</b>
	<?php echo CHtml::encode($data->bbs_posts_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit')); ?>:</b>
	<?php echo CHtml::encode($data->credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account')); ?>:</b>
	<?php echo CHtml::encode($data->account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_use')); ?>:</b>
	<?php echo CHtml::encode($data->account_use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_nouse')); ?>:</b>
	<?php echo CHtml::encode($data->account_nouse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_waitin')); ?>:</b>
	<?php echo CHtml::encode($data->account_waitin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_waitintrest')); ?>:</b>
	<?php echo CHtml::encode($data->account_waitintrest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_intrest')); ?>:</b>
	<?php echo CHtml::encode($data->account_intrest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_award')); ?>:</b>
	<?php echo CHtml::encode($data->account_award); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_payment')); ?>:</b>
	<?php echo CHtml::encode($data->account_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_expired')); ?>:</b>
	<?php echo CHtml::encode($data->account_expired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_waitvip')); ?>:</b>
	<?php echo CHtml::encode($data->account_waitvip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_amount')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouch_amount')); ?>:</b>
	<?php echo CHtml::encode($data->vouch_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_loan')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_loan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_success')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_success); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_wait')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_wait); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_paymeng')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_paymeng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friends_apply')); ?>:</b>
	<?php echo CHtml::encode($data->friends_apply); ?>
	<br />

	*/ ?>

</div>