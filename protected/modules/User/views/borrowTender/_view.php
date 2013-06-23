<?php
/* @var $this BorrowTenderController */
/* @var $data BorrowTender */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_id')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account')); ?>:</b>
	<?php echo CHtml::encode($data->account); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_account')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest')); ?>:</b>
	<?php echo CHtml::encode($data->interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yesaccount')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yesaccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wait_account')); ?>:</b>
	<?php echo CHtml::encode($data->wait_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wait_interest')); ?>:</b>
	<?php echo CHtml::encode($data->wait_interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yesinterest')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yesinterest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>