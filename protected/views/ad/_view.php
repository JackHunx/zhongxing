<?php
/* @var $this AdController */
/* @var $data Ad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nid')); ?>:</b>
	<?php echo CHtml::encode($data->nid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litpic')); ?>:</b>
	<?php echo CHtml::encode($data->litpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timelimit')); ?>:</b>
	<?php echo CHtml::encode($data->timelimit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firsttime')); ?>:</b>
	<?php echo CHtml::encode($data->firsttime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('endtime')); ?>:</b>
	<?php echo CHtml::encode($data->endtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endcontent')); ?>:</b>
	<?php echo CHtml::encode($data->endcontent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>