<?php
/* @var $this BorrowVouchRepaymentController */
/* @var $data BorrowVouchRepayment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow_id')); ?>:</b>
	<?php echo CHtml::encode($data->borrow_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repay_time')); ?>:</b>
	<?php echo CHtml::encode($data->repay_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repay_yestime')); ?>:</b>
	<?php echo CHtml::encode($data->repay_yestime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('repay_account')); ?>:</b>
	<?php echo CHtml::encode($data->repay_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repay_yesaccount')); ?>:</b>
	<?php echo CHtml::encode($data->repay_yesaccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>