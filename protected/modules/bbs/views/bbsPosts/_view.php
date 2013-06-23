<?php
/* @var $this BbsPostsController */
/* @var $data BbsPosts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('istopic')); ?>:</b>
	<?php echo CHtml::encode($data->istopic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::encode($data->fid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edittime')); ?>:</b>
	<?php echo CHtml::encode($data->edittime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iscover')); ?>:</b>
	<?php echo CHtml::encode($data->iscover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isverify')); ?>:</b>
	<?php echo CHtml::encode($data->isverify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verifydesc')); ?>:</b>
	<?php echo CHtml::encode($data->verifydesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>