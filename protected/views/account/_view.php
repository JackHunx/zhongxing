<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use_money')); ?>:</b>
	<?php echo CHtml::encode($data->use_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_use_money')); ?>:</b>
	<?php echo CHtml::encode($data->no_use_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collection')); ?>:</b>
	<?php echo CHtml::encode($data->collection); ?>
	<br />


</div>