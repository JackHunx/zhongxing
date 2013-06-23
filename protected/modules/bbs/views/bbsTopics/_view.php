<?php
/* @var $this BbsTopicsController */
/* @var $data BbsTopics */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::encode($data->fid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('posttime')); ?>:</b>
	<?php echo CHtml::encode($data->posttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edittime')); ?>:</b>
	<?php echo CHtml::encode($data->edittime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordertime')); ?>:</b>
	<?php echo CHtml::encode($data->ordertime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_replytime')); ?>:</b>
	<?php echo CHtml::encode($data->last_replytime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_replyuser')); ?>:</b>
	<?php echo CHtml::encode($data->last_replyuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_replyusername')); ?>:</b>
	<?php echo CHtml::encode($data->last_replyusername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posts_num')); ?>:</b>
	<?php echo CHtml::encode($data->posts_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hits')); ?>:</b>
	<?php echo CHtml::encode($data->hits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('islock')); ?>:</b>
	<?php echo CHtml::encode($data->islock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isgood')); ?>:</b>
	<?php echo CHtml::encode($data->isgood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('istop')); ?>:</b>
	<?php echo CHtml::encode($data->istop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isalltop')); ?>:</b>
	<?php echo CHtml::encode($data->isalltop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stamp')); ?>:</b>
	<?php echo CHtml::encode($data->stamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isrecycle')); ?>:</b>
	<?php echo CHtml::encode($data->isrecycle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit')); ?>:</b>
	<?php echo CHtml::encode($data->credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verifystate')); ?>:</b>
	<?php echo CHtml::encode($data->verifystate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verifydesc')); ?>:</b>
	<?php echo CHtml::encode($data->verifydesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isresolved')); ?>:</b>
	<?php echo CHtml::encode($data->isresolved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachicon')); ?>:</b>
	<?php echo CHtml::encode($data->attachicon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highlight')); ?>:</b>
	<?php echo CHtml::encode($data->highlight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>