<?php
/* @var $this BbsCreditsController */
/* @var $data BbsCredits */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditscode')); ?>:</b>
	<?php echo CHtml::encode($data->creditscode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditsname')); ?>:</b>
	<?php echo CHtml::encode($data->creditsname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postvar')); ?>:</b>
	<?php echo CHtml::encode($data->postvar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replyvar')); ?>:</b>
	<?php echo CHtml::encode($data->replyvar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goodvar')); ?>:</b>
	<?php echo CHtml::encode($data->goodvar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploadvar')); ?>:</b>
	<?php echo CHtml::encode($data->uploadvar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('downvar')); ?>:</b>
	<?php echo CHtml::encode($data->downvar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('votevar')); ?>:</b>
	<?php echo CHtml::encode($data->votevar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isuse')); ?>:</b>
	<?php echo CHtml::encode($data->isuse); ?>
	<br />

	*/ ?>

</div>