<?php
/* @var $this BbsForumsController */
/* @var $data BbsForums */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rules')); ?>:</b>
	<?php echo CHtml::encode($data->rules); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picurl')); ?>:</b>
	<?php echo CHtml::encode($data->picurl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admins')); ?>:</b>
	<?php echo CHtml::encode($data->admins); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('today_num')); ?>:</b>
	<?php echo CHtml::encode($data->today_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topics_num')); ?>:</b>
	<?php echo CHtml::encode($data->topics_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posts_num')); ?>:</b>
	<?php echo CHtml::encode($data->posts_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_postname')); ?>:</b>
	<?php echo CHtml::encode($data->last_postname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_postuser')); ?>:</b>
	<?php echo CHtml::encode($data->last_postuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_postusername')); ?>:</b>
	<?php echo CHtml::encode($data->last_postusername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_posttime')); ?>:</b>
	<?php echo CHtml::encode($data->last_posttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_postid')); ?>:</b>
	<?php echo CHtml::encode($data->last_postid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isverify')); ?>:</b>
	<?php echo CHtml::encode($data->isverify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forumpass')); ?>:</b>
	<?php echo CHtml::encode($data->forumpass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forumusers')); ?>:</b>
	<?php echo CHtml::encode($data->forumusers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forumgroups')); ?>:</b>
	<?php echo CHtml::encode($data->forumgroups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('showtype')); ?>:</b>
	<?php echo CHtml::encode($data->showtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ishidden')); ?>:</b>
	<?php echo CHtml::encode($data->ishidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	*/ ?>

</div>