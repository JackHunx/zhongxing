<?php
/* @var $this AttestationController */
/* @var $data Attestation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litpic')); ?>:</b>
	<?php echo CHtml::encode($data->litpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jifen')); ?>:</b>
	<?php echo CHtml::encode($data->jifen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic2')); ?>:</b>
	<?php echo CHtml::encode($data->pic2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic3')); ?>:</b>
	<?php echo CHtml::encode($data->pic3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_time')); ?>:</b>
	<?php echo CHtml::encode($data->verify_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_user')); ?>:</b>
	<?php echo CHtml::encode($data->verify_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify_remark')); ?>:</b>
	<?php echo CHtml::encode($data->verify_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>