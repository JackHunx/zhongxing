<?php
/* @var $this BbsRewardController */
/* @var $data BbsReward */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::encode($data->userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bestid')); ?>:</b>
	<?php echo CHtml::encode($data->bestid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward')); ?>:</b>
	<?php echo CHtml::encode($data->reward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rewardcredits')); ?>:</b>
	<?php echo CHtml::encode($data->rewardcredits); ?>
	<br />


</div>