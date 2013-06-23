<?php
/* @var $this BorrowRepaymentController */
/* @var $data BorrowRepayment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webstatus')); ?>:</b>
	<?php echo CHtml::encode($data->webstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_id')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_time')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yestime')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yestime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_account')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repayment_yesaccount')); ?>:</b>
	<?php echo CHtml::encode($data->repayment_yesaccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_days')); ?>:</b>
	<?php echo CHtml::encode($data->late_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_interest')); ?>:</b>
	<?php echo CHtml::encode($data->late_interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest')); ?>:</b>
	<?php echo CHtml::encode($data->interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital')); ?>:</b>
	<?php echo CHtml::encode($data->capital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forfeit')); ?>:</b>
	<?php echo CHtml::encode($data->forfeit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reminder_fee')); ?>:</b>
	<?php echo CHtml::encode($data->reminder_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>