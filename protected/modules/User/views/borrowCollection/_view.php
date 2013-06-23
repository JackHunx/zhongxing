<?php
/* @var $this BorrowCollectionController */
/* @var $data BorrowCollection */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tender_id')); ?>:</b>
	<?php echo CHtml::encode($data->tender_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest')); ?>:</b>
	<?php echo CHtml::encode($data->interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital')); ?>:</b>
	<?php echo CHtml::encode($data->capital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_days')); ?>:</b>
	<?php echo CHtml::encode($data->late_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_interest')); ?>:</b>
	<?php echo CHtml::encode($data->late_interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>