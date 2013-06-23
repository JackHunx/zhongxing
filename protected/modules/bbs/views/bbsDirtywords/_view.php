<?php
/* @var $this BbsDirtywordsController */
/* @var $data BbsDirtywords */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('word')); ?>:</b>
	<?php echo CHtml::encode($data->word); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replaceto')); ?>:</b>
	<?php echo CHtml::encode($data->replaceto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doaction')); ?>:</b>
	<?php echo CHtml::encode($data->doaction); ?>
	<br />


</div>