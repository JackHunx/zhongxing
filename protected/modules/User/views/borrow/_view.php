<?php
/* @var $this BorrowController */
/* @var $data Borrow */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hits')); ?>:</b>
	<?php echo CHtml::encode($data->hits); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('litpic')); ?>:</b>
	<?php echo CHtml::encode($data->litpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_vouch')); ?>:</b>
	<?php echo CHtml::encode($data->is_vouch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_type')); ?>:</b>
	<?php echo CHtml::encode($data->view_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouch_award')); ?>:</b>
	<?php echo CHtml::encode($data->vouch_award); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouch_user')); ?>:</b>
	<?php echo CHtml::encode($data->vouch_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouch_account')); ?>:</b>
	<?php echo CHtml::encode($data->vouch_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouch_times')); ?>:</b>
	<?php echo CHtml::encode($data->vouch_times); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish')); ?>:</b>
	<?php echo CHtml::encode($data->publish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer')); ?>:</b>
	<?php echo CHtml::encode($data->customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_id')); ?>:</b>
	<?php echo CHtml::encode($data->number_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_user')); ?>:</b>
	<?php echo CHtml::encode($data->verify_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_time')); ?>:</b>
	<?php echo CHtml::encode($data->verify_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_remark')); ?>:</b>
	<?php echo CHtml::encode($data->verify_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_user')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forst_account')); ?>:</b>
	<?php echo CHtml::encode($data->forst_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_account')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_repayment')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_repayment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yesaccount')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yesaccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yesinterest')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yesinterest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_time')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_remark')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('success_time')); ?>:</b>
	<?php echo CHtml::encode($data->success_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_account')); ?>:</b>
	<?php echo CHtml::encode($data->payment_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('each_time')); ?>:</b>
	<?php echo CHtml::encode($data->each_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use')); ?>:</b>
	<?php echo CHtml::encode($data->use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_limit')); ?>:</b>
	<?php echo CHtml::encode($data->time_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('style')); ?>:</b>
	<?php echo CHtml::encode($data->style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account')); ?>:</b>
	<?php echo CHtml::encode($data->account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_yes')); ?>:</b>
	<?php echo CHtml::encode($data->account_yes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tender_times')); ?>:</b>
	<?php echo CHtml::encode($data->tender_times); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apr')); ?>:</b>
	<?php echo CHtml::encode($data->apr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lowest_account')); ?>:</b>
	<?php echo CHtml::encode($data->lowest_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('most_account')); ?>:</b>
	<?php echo CHtml::encode($data->most_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_time')); ?>:</b>
	<?php echo CHtml::encode($data->valid_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award')); ?>:</b>
	<?php echo CHtml::encode($data->award); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part_account')); ?>:</b>
	<?php echo CHtml::encode($data->part_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funds')); ?>:</b>
	<?php echo CHtml::encode($data->funds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_false')); ?>:</b>
	<?php echo CHtml::encode($data->is_false); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_account')); ?>:</b>
	<?php echo CHtml::encode($data->open_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_borrow')); ?>:</b>
	<?php echo CHtml::encode($data->open_borrow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_tender')); ?>:</b>
	<?php echo CHtml::encode($data->open_tender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_credit')); ?>:</b>
	<?php echo CHtml::encode($data->open_credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>